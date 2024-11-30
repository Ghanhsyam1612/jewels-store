<div class="container mx-auto px-6 py-12">
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
        {{ session('success') }}
    </div>
    @endif

    @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('account.update') }}" method="POST" class="max-w-2xl mx-auto">
        @csrf
        <div>
            <!-- Name Fields -->
            <div class="grid grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="first_name" class="block text-sm font-montserrat font-medium text-gray-500 mb-2">First Name <span class="text-red-500">*</span></label>
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $customer->first_name) }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $customer->last_name) }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>
            </div>

            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email', $customer->email) }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
            </div>

            <!-- Password Fields -->
            <div class="space-y-6">
                <div>
                    <label for="current_password" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Current Password</label>
                    <input type="password" id="current_password" name="current_password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>

                <div>
                    <label for="new_password" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">New Password</label>
                    <input type="password" id="new_password" name="new_password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
                </div>

                <div>
                    <label for="confirm_password" class="block text-sm font-montserrat font-medium text-gray-700 mb-2">Confirm New Password</label>
                    <input type="password" id="confirm_password" name="new_password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-black">
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