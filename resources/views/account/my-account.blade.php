@extends('layouts.master')

@section('content')
<div class="container mx-auto px-6 py-12">
    <h1 class="flex justify-center text-3xl font-montserrat font-semibold mb-8">My Account</h1>

    <div class="flex gap-8">
        <!-- Left Side Menu -->
        <div class="w-1/4">
            <nav class="flex flex-col text-black rounded">
                <a href="javascript:void(0)" onclick="loadPage('/account/orders')" class="px-6 py-3 font-montserrat border-b border-gray-700 hover:bg-black hover:text-white transition-all duration-300">Orders</a>
                <a href="javascript:void(0)" onclick="loadPage('{{ route('wishlist.index') }}')" class="px-6 py-3 font-montserrat border-b border-gray-700 hover:bg-black hover:text-white transition-all duration-300">Wishlist</a>
                <a href="javascript:void(0)" onclick="loadPage('/account/addresses')" class="px-6 py-3 font-montserrat border-b border-gray-700 hover:bg-black hover:text-white transition-all duration-300">Addresses</a>
                <a href="javascript:void(0)" onclick="loadPage('/account/details')" class="px-6 py-3 font-montserrat border-b border-gray-700 hover:bg-black hover:text-white transition-all duration-300">Account Details</a>
                <a href="javascript:void(0)" onclick="loadPage('/account/my-subscription')" class="px-6 py-3 font-montserrat border-b border-gray-700 hover:bg-black hover:text-white transition-all duration-300">My Subscription</a>

                <form id="logout-form" action="{{ route('account.logout') }}" method="GET" style="display: none;">
                    @csrf
                </form>
                <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()" class="px-6 py-3 font-montserrat border-b border-gray-700 hover:bg-black hover:text-white transition-all duration-300">Logout</a>
            </nav>
        </div>

        <!-- Right Side Content -->

        <div id="content" class="w-3/4">
            <!-- This section will be dynamically updated with AJAX -->
            <div class="bg-white p-6 rounded shadow-sm">
                <h2 class="text-xl font-montserrat font-semibold mb-4">Welcome to Your Account</h2>
                <p class="text-gray-600">Please select an option from the menu.</p>
            </div>
        </div>

        <!-- <div class="w-3/4">
            Orders Section
            <div id="orders" class="bg-white p-6 rounded shadow-sm">
                <h2 class="text-xl font-montserrat font-semibold mb-4">Orders</h2>
                <p class="text-gray-600">No order has been made yet.</p>
            </div>

            Wishlist Section (Initially Hidden)
            <div id="wishlist" class="hidden bg-white p-6 rounded shadow-sm">
                <h2 class="text-xl font-montserrat font-semibold mb-4">Wishlist</h2>
                <p class="text-gray-600">Your wishlist is empty.</p>
            </div>

            Addresses Section (Initially Hidden)
            <div id="addresses" class="hidden bg-white p-6 rounded shadow-sm">
                <h2 class="text-xl font-montserrat font-semibold mb-4">Addresses</h2>
                <p class="text-gray-600">No addresses saved yet.</p>
            </div>

            Account Details Section
            <div id="account-details" class="bg-white p-6 rounded shadow-sm">
                <h2 class="text-xl font-montserrat font-semibold mb-4">Account Details</h2>
                <p class="text-gray-600">No account details saved yet.</p>
            </div>

            Logout Section
            <div id="logout" class="bg-white p-6 rounded shadow-sm">
                <h2 class="text-xl font-montserrat font-semibold mb-4">Logout</h2>
                <p class="text-gray-600">Logout from your account.</p>
            </div>
        </div> -->
    </div>
</div>

<script>
    // Function to load content dynamically
    function loadPage(url) {
        fetch(url)
            .then(response => response.text())
            .then(html => {
                // Update the content area with the new page content
                document.getElementById('content').innerHTML = html;
            })
            .catch(error => {
                console.error('Error loading page:', error);
            });
    }

    // Initial page load to show the default section (e.g., Orders or Profile)
    loadPage('/account/orders');
</script>
@endsection