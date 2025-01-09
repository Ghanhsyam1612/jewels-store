<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'shipping_address' => 'required|array',
            'billing_address' => 'required|array',

            // Shipping Address fields
            'shipping_address.full_name' => 'required|string',
            'shipping_address.email' => 'required|email',
            'shipping_address.phone' => 'required|string',
            'shipping_address.address' => 'required|string',
            'shipping_address.city' => 'required|string',
            'shipping_address.state' => 'required|string',
            'shipping_address.zip' => 'required|string',
            'shipping_address.country' => 'required|string',

            // Billing Address fields (if different from shipping)
            'billing_address.full_name' => 'required|string',
            'billing_address.email' => 'required|email',
            'billing_address.phone' => 'required|string',
            'billing_address.address' => 'required|string',
            'billing_address.city' => 'required|string',
            'billing_address.state' => 'required|string',
            'billing_address.zip' => 'required|string',
            'billing_address.country' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'shipping_address.required' => 'Shipping address is required.',
            'billing_address.required' => 'Billing address is required.',
            'shipping_address.full_name.required' => 'Full name is required.',
            'shipping_address.email.required' => 'Email is required.',
            'shipping_address.phone.required' => 'Phone is required.',
            'shipping_address.address.required' => 'Address is required.',
            'shipping_address.city.required' => 'City is required.',
            'shipping_address.state.required' => 'State is required.',
            'shipping_address.zip.required' => 'Zip is required.',
            'shipping_address.country.required' => 'Country is required.',
        ];
    }
}

