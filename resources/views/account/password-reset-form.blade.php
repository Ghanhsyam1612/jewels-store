@extends('layouts.master')

@section('content')
<!-- Account Page -->
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-10 px-4 sm:px-6 lg:px-8">
    <div class="max-w-xl flex justify-center gap-8 w-full">
        <!-- Login Form -->
        <div class="w-full bg-white rounded-lg shadow-[0_4px_6px_-1px_rgba(0,0,0,0.1),0_2px_4px_-1px_rgba(0,0,0,0.06)] p-8">
            <div>
                <h2 class="mt-2 text-center text-3xl font-extrabold text-gray-900 font-literata">
                    Reset Your Password
                </h2>
            </div>
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email }}">
                <div class="space-y-4">
                    <div>
                        <label for="email-address" class="block text-sm font-medium font-montserrat text-gray-700">New Password <span class="text-red-500">*</span></label>
                        <input id="password" name="password" type="password" required class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm font-montserrat" placeholder="New Password">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium font-montserrat text-gray-700">Confirm Password <span class="text-red-500">*</span></label>
                        <input id="password" name="password_confirmation" type="password" required class="appearance-none rounded-md relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm font-montserrat" placeholder="Confirm Password">
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

@endsection