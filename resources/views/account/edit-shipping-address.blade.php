
<div class="container mx-auto px-6">
    <h1 class="flex justify-start text-3xl font-montserrat font-semibold mb-8">Shipping Address</h1>
    
    <form class="w-full mx-auto">
        <div>
            <!-- Name Fields -->
            <div class="grid grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="first_name" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">First Name <span class="text-red-500">*</span></label>
                    <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Last Name <span class="text-red-500">*</span></label>
                    <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>
            </div>

            <!-- Company Field -->
            <div class="mb-6">
                <label for="company" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Company Name (Optional)</label>
                <input type="text" id="company" name="company" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <!-- Country Field -->
            <div class="mb-6">
                <label for="country" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Country <span class="text-red-500">*</span></label>
                <select id="country" name="country" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                    <option value="">Select a country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                </select>
            </div>

            <!-- Address Fields -->
            <div class="mb-6">
                <label for="address" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Address Line 1 <span class="text-red-500">*</span></label>
                <input type="text" id="address" name="address" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <!-- City, State, ZIP -->
            <div class="grid grid-cols-3 gap-6 mb-6">
                <div>
                    <label for="city" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">City <span class="text-red-500">*</span></label>
                    <input type="text" id="city" name="city" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>
                <div>
                    <label for="state" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">State <span class="text-red-500">*</span></label>
                    <input type="text" id="state" name="state" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>
                <div>
                    <label for="zip" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">ZIP Code <span class="text-red-500">*</span></label>
                    <input type="text" id="zip" name="zip" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>
            </div>

            <!-- Contact Fields -->
            <div class="grid grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="phone" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Phone <span class="text-red-500">*</span></label>
                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>
                <div>
                    <label for="email" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
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

