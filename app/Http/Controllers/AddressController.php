<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    // Store Address
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'zip_code' => 'required|string|max:20',
            'country_id' => 'required|exists:countries,id',
            'state_id' => 'required|exists:states,id',
            'city_id' => 'required|exists:cities,id',
            'address_type' => 'required|in:shipping,billing',
            'is_default' => 'boolean'
        ]);

        // Create the address
        $address = Address::create($validatedData);

        // Get the current authenticated customer
        $customer = Auth::guard('customer')->user();

        // If setting as default, remove previous default for this address type
        if ($validatedData['is_default']) {
            $customer->addresses()
                ->wherePivot('address_type', $validatedData['address_type'])
                ->wherePivot('is_default', true)
                ->updateExistingPivot(
                    $customer->addresses()
                        ->wherePivot('address_type', $validatedData['address_type'])
                        ->wherePivot('is_default', true)
                        ->first()->id,
                    ['is_default' => false]
                );
        }

        // Attach the address to the customer
        $customer->addresses()->attach($address->id, [
            'address_type' => $validatedData['address_type'],
            'is_default' => $validatedData['is_default'] ?? false
        ]);

        return redirect()->back()->with('success', 'Address added successfully');
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

    // Get Addresses
    public function index()
    {
        $customer = Auth::guard('customer')->user();
        $shippingAddresses = $customer->shippingAddresses;
        $billingAddresses = $customer->billingAddresses;

        return view('addresses.index', compact('shippingAddresses', 'billingAddresses'));
    }
}
