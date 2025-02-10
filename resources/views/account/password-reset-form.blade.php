@extends('layouts.master')

@section('content')
<!-- Account Page -->
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-10 px-4 sm:px-6 lg:px-8">
    <div class="max-w-xl flex justify-center gap-8 w-full">
        <!-- Login Form -->
        <div class="w-full bg-white rounded-lg shadow-[0_4px_6px_-1px_rgba(0,0,0,0.1),0_2px_4px_-1px_rgba(0,0,0,0.06)] px-8 py-4">
            <div>
                <h2 class="my-4 text-center text-3xl font-extrabold text-gray-900 font-literata">
                    Reset Your Password
                </h2>
            </div>
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email }}">
                <div class="space-y-4">
                    <!-- New Password Field -->
                    <div class="relative w-full">
                        <label for="password" class="block text-sm font-medium font-montserrat text-gray-700">
                            New Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input id="password" name="password" type="password" required
                                class="appearance-none rounded-md block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm font-montserrat"
                                placeholder="New Password">
                            <!-- Eye Icons for New Password -->
                            <img id="new-eye-close" src="{{ asset('Shape/eye-close.svg') }}"
                                class="absolute right-3 top-3 w-5 h-5 cursor-pointer" alt="Eye Close Icon">
                            <img id="new-eye-open" src="{{ asset('Shape/eye-open.svg') }}"
                                class="absolute right-3 top-3 w-5 h-5 cursor-pointer hidden" alt="Eye Open Icon">
                        </div>
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="relative w-full">
                        <label for="password_confirmation" class="block text-sm font-medium font-montserrat text-gray-700">
                            Confirm Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                class="appearance-none rounded-md block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm font-montserrat"
                                placeholder="Confirm Password">
                            <!-- Eye Icons for Confirm Password -->
                            <img id="confirm-eye-close" src="{{ asset('Shape/eye-close.svg') }}"
                                class="absolute right-3 top-3 w-5 h-5 cursor-pointer" alt="Eye Close Icon">
                            <img id="confirm-eye-open" src="{{ asset('Shape/eye-open.svg') }}"
                                class="absolute right-3 top-3 w-5 h-5 cursor-pointer hidden" alt="Eye Open Icon">
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md tracking-wide text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 font-montserrat">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <!-- End Login Form -->
    </div>
</div>
<!-- End Account Page -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- Toggle Password --}}

<script>
    // New Password Toggle
    const newPasswordInput = document.getElementById('password');
    const newEyeCloseIcon = document.getElementById('new-eye-close');
    const newEyeOpenIcon = document.getElementById('new-eye-open');

    newEyeCloseIcon.addEventListener('click', () => {
        newPasswordInput.type = 'text'; // Show password
        newEyeCloseIcon.classList.add('hidden'); // Hide "eye-close" icon
        newEyeOpenIcon.classList.remove('hidden'); // Show "eye-open" icon
    });

    newEyeOpenIcon.addEventListener('click', () => {
        newPasswordInput.type = 'password'; // Hide password
        newEyeOpenIcon.classList.add('hidden'); // Hide "eye-open" icon
        newEyeCloseIcon.classList.remove('hidden'); // Show "eye-close" icon
    });

    // Confirm Password Toggle
    const confirmPasswordInput = document.getElementById('password_confirmation');
    const confirmEyeCloseIcon = document.getElementById('confirm-eye-close');
    const confirmEyeOpenIcon = document.getElementById('confirm-eye-open');

    confirmEyeCloseIcon.addEventListener('click', () => {
        confirmPasswordInput.type = 'text'; // Show password
        confirmEyeCloseIcon.classList.add('hidden'); // Hide "eye-close" icon
        confirmEyeOpenIcon.classList.remove('hidden'); // Show "eye-open" icon
    });

    confirmEyeOpenIcon.addEventListener('click', () => {
        confirmPasswordInput.type = 'password'; // Hide password
        confirmEyeOpenIcon.classList.add('hidden'); // Hide "eye-open" icon
        confirmEyeCloseIcon.classList.remove('hidden'); // Show "eye-close" icon
    });

    // Submit Button
    const submitBtn = document.getElementById('submitBtn');
    submitBtn.addEventListener('click', () => {
        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Submitting...';
    });

    if (data.success) {
        // Show success message
        toastr.success('Password reset successfully');
        
        emailInput.value = '';
        closeResetModal();
        // Clear input field
        emailInput.value = '';
    } else {
        toastr.error(data.message || 'Failed to update password.');
    }
</script>

@endsection