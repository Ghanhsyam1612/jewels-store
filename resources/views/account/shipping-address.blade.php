<div class="container mx-auto px-6">
    <h1 class="flex justify-start text-3xl font-montserrat font-semibold mb-8">Shipping Address</h1>

    <form action="{{ route('account.addresses.store') }}" method="POST" class="w-full mx-auto">
        @csrf
        <div>
            <!-- Name Fields -->
            <div class="grid grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="first_name" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">First Name <span class="text-red-500">*</span></label>
                    <input type="text" id="first_name" name="first_name" value="{{ $customer->first_name }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Last Name <span class="text-red-500">*</span></label>
                    <input type="text" id="last_name" name="last_name" value="{{ $customer->last_name }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>
            </div>

            <!-- Company Field -->
            <!-- <div class="mb-6">
                <label for="company" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Company Name (Optional)</label>
                <input type="text" id="company" name="company" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
            </div> -->

            <!-- Country Field -->
            <div class="mb-6">
                <label for="country" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Country <span class="text-red-500">*</span></label>
                <select id="country" name="country" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                    <option value="">Select a country</option>
                    @foreach($countries as $country)
                    <option value="{{ $country->id }}" {{ $shippingAddress->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Address Fields -->
            <div class="mb-6">
                <label for="address_line_1" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Address Line 1 <span class="text-red-500">*</span></label>
                <input type="text" id="address_line_1" name="address_line_1" value="{{ isset($shippingAddress) ? $shippingAddress->address_line_1 : '' }}" placeholder="House number and street name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <div class="mb-6">
                <label for="address_line_2" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Address Line 2</label>
                <input type="text" id="address_line_2" name="address_line_2" value="{{ isset($shippingAddress) ? $shippingAddress->address_line_2 : '' }}" placeholder="Apartment, suite, unit etc." class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <!-- City, State, ZIP -->
            <div class="grid grid-cols-3 gap-6 mb-6">
                <div>
                    <label for="city" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">City <span class="text-red-500">*</span></label>
                    <select id="city" name="city" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                        <option value="">Select a city</option>
                        @foreach($cities as $city)
                        <option value="{{ $city->id }}" {{ isset($shippingAddress) && $shippingAddress->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="state" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">State <span class="text-red-500">*</span></label>
                    <select id="state" name="state" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                        <option value="">Select a state</option>
                        @foreach($states as $state)
                        <option value="{{ $state->id }}" {{ isset($shippingAddress) && $shippingAddress->state_id == $state->id ? 'selected' : '' }}>{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="zip_code" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">ZIP Code <span class="text-red-500">*</span></label>
                    <input type="text" id="zip_code" name="zip_code" value="{{ isset($shippingAddress) ? $shippingAddress->zip_code : '' }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>
            </div>

            <!-- Contact Fields -->
            <div class="grid grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="phone" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Phone <span class="text-red-500">*</span></label>
                    <input type="tel" id="phone" name="phone" value="{{ $customer->phone }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>
                <div>
                    <label for="email" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" value="{{ $customer->email }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>
            </div>

            <!-- Save Button -->
            <div class="mt-8">
                <button type="submit" class="w-1/3 bg-black text-white text-sm font-montserrat uppercase py-3 px-4 rounded-md hover:bg-gray-800 transition-colors duration-300">
                    Save Changes
                </button>
            </div>
        </div>
    </form>
</div>