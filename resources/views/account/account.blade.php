@extends('layouts.master')

@section('content')
<!-- Account Page -->
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-10 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl flex flex-col lg:flex-row justify-center gap-8 w-full">
        <!-- Login Form -->
        <div class="w-full bg-white rounded-lg shadow-[0_4px_6px_-1px_rgba(0,0,0,0.1),0_2px_4px_-1px_rgba(0,0,0,0.06)] p-8">
            <div>
                <h2 class="mt-2 text-center text-3xl font-extrabold text-gray-900 font-literata">
                    Welcome back
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600 font-montserrat">
                    Sign in to your account
                </p>
            </div>
            <form id="loginForm" class="mt-8 space-y-6" action="{{ route('customer.login') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="email-address" class="block text-sm font-medium font-montserrat text-gray-700">Email address <span class="text-red-500">*</span></label>
                        <input id="email-address" name="email" type="email" autocomplete="email"  class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm font-montserrat" placeholder="Email address">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="relative w-full">
                        <label for="password" class="block text-sm font-medium font-montserrat text-gray-700">
                            Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input id="password" name="password" type="password" autocomplete="current-password" 
                                class="appearance-none rounded-md block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm font-montserrat"
                                placeholder="Password">
                            <!-- Eye Icons -->
                            <img id="eye-close" src="{{ asset('Shape/eye-close.svg') }}"
                                class="absolute right-3 top-3 w-5 h-5 cursor-pointer"
                                alt="Eye Close Icon">
                            <img id="eye-open" src="{{ asset('Shape/eye-open.svg') }}"
                                class="absolute right-3 top-3 w-5 h-5 cursor-pointer hidden"
                                alt="Eye Open Icon">
                        </div>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-gray-800 focus:ring-gray-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900 font-montserrat">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <button type="button" onclick="openResetModal()" class="font-medium text-gray-600 hover:text-dark-blue font-montserrat">
                            Forgot your password?
                        </button>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md tracking-wide text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 font-montserrat">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
        <!-- End Login Form -->

        <!-- Register Form -->
        <div class="w-full bg-white rounded-lg shadow-[0_4px_6px_-1px_rgba(0,0,0,0.1),0_2px_4px_-1px_rgba(0,0,0,0.06)] p-8">
            <div>
                <h2 class="mt-2 text-center text-3xl font-extrabold text-gray-900 font-literata">
                    Create your account
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600 font-montserrat">
                    Join us to explore our exclusive collection
                </p>
            </div>
            <form id="registerForm" class="mt-8 space-y-6" action="{{ route('customer.store') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="full_name" class="block text-sm font-medium font-montserrat text-gray-700">Full Name <span class="text-red-500">*</span></label>
                        <input id="full_name" name="full_name" type="text" class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm font-montserrat" placeholder="Full Name">
                        @error('first_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                    </div>
                    <div class="w-full">
                        <label for="phone" class="block text-sm font-medium font-montserrat text-gray-700">
                            Phone Number <span class="text-red-500">*</span>
                        </label>
                        <div class="flex items-center rounded-md border border-gray-300">
                            <!-- Phone Number Input -->
                            <input id="phone" name="phone" type="tel"
                                class="flex-1 px-3 py-3 text-sm text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Phone Number">
                        </div>
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="register-email" class="block text-sm font-medium font-montserrat text-gray-700">Email address <span class="text-red-500">*</span></label>
                        <input id="register-email" name="email" type="email" autocomplete="email" class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm font-montserrat" placeholder="Email address">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="relative w-full">
                        <label for="register-password" class="block text-sm font-medium font-montserrat text-gray-700">
                            Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <input id="register-password" name="password" type="password" autocomplete="new-password"
                                class="appearance-none rounded-md block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm font-montserrat"
                                placeholder="Password">
                            <!-- Eye Icons -->
                            <img id="register-eye-close" src="{{ asset('Shape/eye-close.svg') }}"
                                class="absolute right-3 top-3 w-5 h-5 cursor-pointer" alt="Eye Close Icon">
                            <img id="register-eye-open" src="{{ asset('Shape/eye-open.svg') }}"
                                class="absolute right-3 top-3 w-5 h-5 cursor-pointer hidden" alt="Eye Open Icon">
                        </div>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md tracking-wide text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 font-montserrat">
                        Register
                    </button>
                </div>
            </form>
        </div>
        <!-- End Register Form -->
    </div>
</div>
<!-- End Account Page -->

{!! Toastr::message() !!}


<!-- Password Reset Modal -->
<div id="resetModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
    <div class="bg-white rounded-lg p-6 w-full max-w-md mx-4 relative">
        <button onclick="closeResetModal()" class="absolute right-4 top-4 text-gray-400 hover:text-gray-600">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <h2 class="text-xl font-bold text-gray-900 mb-4">Reset Password</h2>

        <form id="resetForm">
            @csrf
            <div class="mb-4">
                <input id="reset-email" type="email" required
                    class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    placeholder="Enter your email">
            </div>

            <button type="submit" id="resetSubmitBtn"
                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                Send Reset Link
            </button>
        </form>
    </div>
</div>
<!-- End Password Reset Modal -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Define modal functions in global scope
    function openResetModal() {
        document.getElementById('resetModal').classList.remove('hidden');
    }

    function closeResetModal() {
        document.getElementById('resetModal').classList.add('hidden');
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Handle form submission
        document.getElementById('resetForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const emailInput = document.getElementById('reset-email');
            const submitBtn = document.getElementById('resetSubmitBtn');
            const email = emailInput.value;

            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Sending...';

            // Send request
            fetch('{{ route("customer.password-reset") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        email: email
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Show success message
                        toastr.success('Password reset link has been sent to your email');
                        emailInput.value = '';
                        closeResetModal();

                    } else {
                        toastr.error(data.message || 'Failed to send reset link.');
                    }
                })
                .catch(error => {
                    // Show error message
                    toastr.error(error.message || 'An error occurred. Please try again.');
                    emailInput.value = '';

                })
                .finally(() => {
                    // Reset button state
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = 'Send Reset Link';
                });
        });

        // Close modal when clicking outside
        document.getElementById('resetModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeResetModal();
            }
        });

        // Initialize phone input
        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js", // Optional: to format the number
            initialCountry: "us", // Default country
            preferredCountries: ['us', 'gb', 'ca'], // Countries to show first
            separateDialCode: true // Shows the dial code separately
        });

        // You can also get the country code and number like this:
        var number = iti.getNumber();
        var countryCode = iti.getSelectedCountryData().dialCode;
        console.log(number, countryCode);
    });
</script>

{{-- Toggle Password --}}
<script>
    // Login Password
    const passwordInput = document.getElementById('password');
    const eyeCloseIcon = document.getElementById('eye-close');
    const eyeOpenIcon = document.getElementById('eye-open');

    // Toggle Password Visibility
    eyeCloseIcon.addEventListener('click', () => {
        passwordInput.type = 'text'; // Show password
        eyeCloseIcon.classList.add('hidden'); // Hide "eye-close" icon
        eyeOpenIcon.classList.remove('hidden'); // Show "eye-open" icon
    });

    eyeOpenIcon.addEventListener('click', () => {
        passwordInput.type = 'password'; // Hide password
        eyeOpenIcon.classList.add('hidden'); // Hide "eye-open" icon
        eyeCloseIcon.classList.remove('hidden'); // Show "eye-close" icon
    });

    // Ensure icons remain visible when entering password
    passwordInput.addEventListener('input', () => {
        eyeCloseIcon.classList.remove('hidden'); // Keep "eye-close" visible
        eyeOpenIcon.classList.add('hidden'); // Ensure "eye-open" is hidden unless toggled
    });



    // Register Password
    const registerPasswordInput = document.getElementById('register-password');
    const registerEyeCloseIcon = document.getElementById('register-eye-close');
    const registerEyeOpenIcon = document.getElementById('register-eye-open');

    // Toggle Password Visibility
    registerEyeCloseIcon.addEventListener('click', () => {
        registerPasswordInput.type = 'text'; // Show password
        registerEyeCloseIcon.classList.add('hidden'); // Hide "eye-close" icon
        registerEyeOpenIcon.classList.remove('hidden'); // Show "eye-open" icon
    });

    registerEyeOpenIcon.addEventListener('click', () => {
        registerPasswordInput.type = 'password'; // Hide password
        registerEyeOpenIcon.classList.add('hidden'); // Hide "eye-open" icon
        registerEyeCloseIcon.classList.remove('hidden'); // Show "eye-close" icon
    });

    // Ensure icons remain visible when entering password
    registerPasswordInput.addEventListener('input', () => {
        registerEyeCloseIcon.classList.remove('hidden'); // Keep "eye-close" visible
        registerEyeOpenIcon.classList.add('hidden'); // Ensure "eye-open" is hidden unless toggled
    });
</script>
@endsection