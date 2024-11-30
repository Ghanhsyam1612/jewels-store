@extends('layouts.master')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-10 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl flex justify-center gap-8 w-full">
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
            <form class="mt-8 space-y-6" action="{{ route('customer.login') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="email-address" class="block text-sm font-medium font-montserrat text-gray-700">Email address <span class="text-red-500">*</span></label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm font-montserrat" placeholder="Email address">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium font-montserrat text-gray-700">Password <span class="text-red-500">*</span></label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm font-montserrat" placeholder="Password">
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
                        <a href="#" class="font-medium text-gray-600 hover:text-dark-blue font-montserrat">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md tracking-wide text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 font-montserrat">
                        Sign in
                    </button>
                </div>
            </form>
        </div>

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
            <form class="mt-8 space-y-6" action="{{ route('customer.store') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="full_name" class="block text-sm font-medium font-montserrat text-gray-700">Full Name <span class="text-red-500">*</span></label>
                        <input id="full_name" name="full_name" type="text" required class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm font-montserrat" placeholder="Full Name">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium font-montserrat text-gray-700">Phone Number <span class="text-red-500">*</span></label>
                        <div class="flex">
                            <select name="country_code" class="appearance-none rounded-l-md relative w-20 px-2 py-3 border border-r-0 border-gray-300 bg-gray-50 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm font-montserrat">
                                <option value="+1" data-flag="🇺🇸">🇺🇸 +1</option>
                                <option value="+44" data-flag="🇬🇧">🇬🇧 +44</option>
                                <option value="+91" data-flag="🇮🇳">🇮🇳 +91</option>
                                <option value="+86" data-flag="🇨🇳">🇨🇳 +86</option>
                                <option value="+81" data-flag="🇯🇵">🇯🇵 +81</option>
                                <option value="+49" data-flag="🇩🇪">🇩🇪 +49</option>
                            </select>
                            <input id="phone" name="phone" type="tel" required class="appearance-none rounded-r-md relative block w-full px-3 py-3 border border-l-0 border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm font-montserrat" placeholder="Phone Number">
                        </div>
                    </div>
                    <div>
                        <label for="register-email" class="block text-sm font-medium font-montserrat text-gray-700">Email address <span class="text-red-500">*</span></label>
                        <input id="register-email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm font-montserrat" placeholder="Email address">
                    </div>
                    <div>
                        <label for="register-password" class="block text-sm font-medium font-montserrat text-gray-700">Password <span class="text-red-500">*</span></label>
                        <input id="register-password" name="password" type="password" autocomplete="new-password" required class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm font-montserrat" placeholder="Password">
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md tracking-wide text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 font-montserrat">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
