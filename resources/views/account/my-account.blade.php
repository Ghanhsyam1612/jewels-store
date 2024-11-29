@extends('layouts.master')

@section('content')
    <div class="container mx-auto px-6 py-12">
        <h1 class="flex justify-center text-3xl font-montserrat font-semibold mb-8">My Account</h1>
        
        <div class="flex gap-8">
            <!-- Left Side Menu -->
            <div class="w-1/4">
                <nav class="flex flex-col text-black rounded">
                    <a href="#orders" class="px-6 py-3 font-montserrat   border-b border-gray-700 hover:bg-black hover:text-white transition-all duration-300">Orders</a>
                    <a href="#wishlist" class="px-6 py-3 font-montserrat     border-b border-gray-700 hover:bg-black hover:text-white transition-all duration-300">Wishlist</a>
                    <a href="#addresses" class="px-6 py-3 font-montserrat    border-b border-gray-700 hover:bg-black hover:text-white transition-all duration-300">Addresses</a>
                    <a href="#account-details" class="px-6 py-3 font-montserrat  border-b border-gray-700 hover:bg-black hover:text-white transition-all duration-300">Account Details</a>
                    <a href="#logout" class="px-6 py-3 font-montserrat   border-b border-gray-700 hover:bg-black hover:text-white transition-all duration-300">Logout</a>
                </nav>
            </div>

            <!-- Right Side Content -->
            <div class="w-3/4">
                <!-- Orders Section -->
                <div id="orders" class="bg-white p-6 rounded shadow-sm">
                    <h2 class="text-xl font-montserrat font-semibold mb-4">Orders</h2>
                    <p class="text-gray-600">No order has been made yet.</p>
                </div>

                {{-- <!-- Wishlist Section (Initially Hidden) -->
                <div id="wishlist" class="hidden bg-white p-6 rounded shadow-sm">
                    <h2 class="text-xl font-montserrat font-semibold mb-4">Wishlist</h2>
                    <p class="text-gray-600">Your wishlist is empty.</p>
                </div>

                <!-- Addresses Section (Initially Hidden) -->
                <div id="addresses" class="hidden bg-white p-6 rounded shadow-sm">
                    <h2 class="text-xl font-montserrat font-semibold mb-4">Addresses</h2>
                    <p class="text-gray-600">No addresses saved yet.</p>
                </div>

                <!-- Account Details Section -->
                <div id="account-details" class="bg-white p-6 rounded shadow-sm">
                    <h2 class="text-xl font-montserrat font-semibold mb-4">Account Details</h2>
                    <p class="text-gray-600">No account details saved yet.</p>
                </div>

                <!-- Logout Section -->
                <div id="logout" class="bg-white p-6 rounded shadow-sm">
                    <h2 class="text-xl font-montserrat font-semibold mb-4">Logout</h2>
                    <p class="text-gray-600">Logout from your account.</p>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
