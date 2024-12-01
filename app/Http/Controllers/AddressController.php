<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\City;
use App\Models\Country;
use App\Models\State;

class AddressController extends Controller
{
    // Shipping Address
    public function shipping()
    {
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        $customer = auth('customer')->user();
        $shippingAddress = $customer->defaultShippingAddress;
        return view('account.shipping-address', compact('countries', 'states', 'cities', 'customer', 'shippingAddress'));
    }

    // Billing Address
    public function billing()
    {
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        $customer = auth('customer')->user();
        $billingAddress = $customer->defaultBillingAddress;
        return view('account.billing-address', compact('countries', 'states', 'cities', 'customer', 'billingAddress'));
    }

    // Addresses
    public function addresses()
    {
        $customer = auth('customer')->user();
        $billingAddress = $customer->defaultBillingAddress;
        $shippingAddress = $customer->defaultShippingAddress;
        return view('account.addresses', compact('billingAddress', 'shippingAddress'));
    }

    // Store Address
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'zip_code' => 'required|string|max:20',
            'country' => 'required|exists:countries,id',
            'state' => 'required|exists:states,id',
            'city' => 'required|exists:cities,id',
            'is_default' => 'boolean'
        ]);


        $isShippingAddress = $request->routeIs('account.addresses.shipping');

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()],  422);
        }

        DB::beginTransaction();
        try {
            $address = new Address();
            $address->address_line_1 = $request->address_line_1;
            $address->address_line_2 = $request->address_line_2;
            $address->city_id = $request->city;
            $address->state_id = $request->state;
            $address->zip_code = $request->zip_code;
            $address->country_id = $request->country;
            $address->save();

            // Get the current authenticated customer
            $customer = Auth::guard('customer')->user();

            // If setting as default, remove previous default for this address type
            if ($request->is_default) {
                $customer->addresses()
                    ->wherePivot('address_type', $isShippingAddress ? 'shipping' : 'billing')
                    ->wherePivot('is_default', true)
                    ->updateExistingPivot(
                        $customer->addresses()
                            ->wherePivot('address_type', $isShippingAddress ? 'shipping' : 'billing')
                            ->wherePivot('is_default', true)
                            ->first()->id,
                        ['is_default' => false]
                    );
            }

            // Attach the address to the customer
            $customer->addresses()->attach($address->id, [
                'customer_id' => auth()->guard('customer')->id(), // Assuming addresses are tied to a user
                'address_type' => $isShippingAddress ? 'shipping' : 'billing', // Save the type of address
                'is_default' => $request->is_default ?? true
            ]);
            DB::commit();
            return redirect()->back()->with('success', 'Address added successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['errors' => $e->getMessage()], 500);
        }
    }

    // Update Address
    public function update(Request $request, Address $address)
    {
        $validatedData = $request->validate([
            'address_line_1' => 'sometimes|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'zip_code' => 'sometimes|string|max:20',
            'city_id' => 'sometimes|exists:cities,id',
            'state_id' => 'sometimes|exists:states,id',
            'country_id' => 'sometimes|exists:countries,id',
            'is_default' => 'boolean'
        ]);

        // Update the address
        $address->update($validatedData);

        // Get the current authenticated customer
        $customer = Auth::guard('customer')->user();

        // If setting as default, remove previous default for this address type
        $addressType = $customer->addresses()->where('address_id', $address->id)->first()->pivot->address_type;

        if ($validatedData['is_default'] ?? false) {
            $customer->addresses()
                ->wherePivot('address_type', $addressType)
                ->wherePivot('is_default', true)
                ->updateExistingPivot(
                    $customer->addresses()
                        ->wherePivot('address_type', $addressType)
                        ->wherePivot('is_default', true)
                        ->first()->id,
                    ['is_default' => false]
                );

            // Update the pivot table to set as default
            $customer->addresses()->updateExistingPivot($address->id, [
                'is_default' => true
            ]);
        }

        return redirect()->back()->with('success', 'Address updated successfully');
    }

    // Delete Address
    public function destroy(Address $address)
    {
        $customer = Auth::guard('customer')->user();
        $customer->addresses()->detach($address->id);
        $address->delete();

        return redirect()->back()->with('success', 'Address removed successfully');
    }

    // Set Default Address
    public function setDefault(Address $address)
    {
        $customer = Auth::guard('customer')->user();
        $customer->addresses()->updateExistingPivot($address->id, ['is_default' => true]);
        return redirect()->back()->with('success', 'Address set as default successfully');
    }
}
