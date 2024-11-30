@extends('layouts.master')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white rounded-lg shadow-[0_4px_6px_-1px_rgba(0,0,0,0.1),0_2px_4px_-1px_rgba(0,0,0,0.06)] p-8">
        <div>
            <h2 class="mt-2 text-center text-3xl font-extrabold text-gray-900 font-literata">
                Welcome back
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600 font-montserrat">
                Sign in to your account
            </p>
        </div>
        Display session messages
        @if (session('success'))
        <div class="mb-4 text-sm text-green-700 bg-green-100 p-3 rounded-md">
            {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="mb-4 text-sm text-red-700 bg-red-100 p-3 rounded-md">
            {{ session('error') }}
        </div>
        @endif
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

            <div class="mt-4 text-sm text-gray-600 text-center font-montserrat">
                Don't have an account?
                <a href="/register" class="font-medium text-gray-600 hover:text-dark-blue">
                    Register
                </a>
            </div>
        </form>
    </div>
</div>
@endsection