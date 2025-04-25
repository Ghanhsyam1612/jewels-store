@extends('layouts.master')

@section('content')
<div class="container mx-auto px-4 py-8 md:px-6 md:py-12">
    <h1 class="flex justify-center text-2xl md:text-3xl font-montserrat font-semibold mb-6 md:mb-8">My Account</h1>
    
    <!-- Desktop Layout -->
    <div class="flex flex-col md:flex md:flex-row gap-8">
        <!-- Left Side Menu -->
        <div class="w-full md:w-1/4">
            <nav class="flex flex-col text-black rounded shadow-md bg-white">
                <a href="javascript:void(0)" onclick="loadPage('/account/orders')" class="account-nav px-6 py-4 font-montserrat border-b border-gray-200 hover:bg-primary hover:text-white transition-all duration-300">
                    <i class="fas fa-shopping-bag w-5 mr-2"></i>Orders
                </a>
                <a href="javascript:void(0)" onclick="loadPage('{{ route('wishlist.index') }}')" class="account-nav px-6 py-4 font-montserrat border-b border-gray-200 hover:bg-primary hover:text-white transition-all duration-300">
                    <i class="fas fa-heart w-5 mr-2"></i>Wishlist
                </a>
                <a href="javascript:void(0)" onclick="loadPage('/account/addresses')" class="account-nav px-6 py-4 font-montserrat border-b border-gray-200 hover:bg-primary hover:text-white transition-all duration-300">
                    <i class="fas fa-map-marker-alt w-5 mr-2"></i>Addresses
                </a>
                <a href="javascript:void(0)" onclick="loadPage('/account/details')" class="account-nav px-6 py-4 font-montserrat border-b border-gray-200 hover:bg-primary hover:text-white transition-all duration-300">
                    <i class="fas fa-user w-5 mr-2"></i>Account Details
                </a>
                <a href="javascript:void(0)" onclick="loadPage('/account/my-subscription')" class="account-nav px-6 py-4 font-montserrat border-b border-gray-200 hover:bg-primary hover:text-white transition-all duration-300">
                    <i class="fas fa-sync w-5 mr-2"></i>My Subscription
                </a>
                <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()" class="account-nav px-6 py-4 font-montserrat hover:bg-primary hover:text-white transition-all duration-300">
                    <i class="fas fa-sign-out-alt w-5 mr-2"></i>Logout
                </a>
            </nav>
        </div>
        <!-- Right Side Content -->
        <div id="content" class="w-full md:w-3/4 fade-in">
            <div class="bg-white p-6 rounded shadow-sm">
                <h2 class="text-xl font-montserrat font-semibold mb-4">Welcome to Your Account</h2>
                <p class="text-gray-600">Please select an option from the menu.</p>
            </div>
        </div>
    </div>
</div>

<!-- Hidden form for logout functionality -->
<form id="logout-form" action="{{ route('account.logout') }}" method="GET" style="display: none;">
    @csrf
</form>

<script>
    // Function to load content dynamically with AJAX
    function loadPage(url) {
        // Show loading state
        const contentDiv = document.getElementById('content');
        contentDiv.classList.remove('fade-in');
        
        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(html => {
                setTimeout(() => {
                    contentDiv.innerHTML = html;
                    contentDiv.classList.add('fade-in');
                    
                    // Update active nav state
                    document.querySelectorAll('.account-nav').forEach(item => {
                        item.classList.remove('active-nav-item');
                        if (item.getAttribute('onclick').includes(url)) {
                            item.classList.add('active-nav-item');
                        }
                    });
                }, 150);
            })
            .catch(error => {
                console.error('Error loading page:', error);
                contentDiv.innerHTML = `
                    <div class="bg-white p-6 rounded shadow-sm">
                        <h2 class="text-xl font-montserrat font-semibold mb-4 text-red-600">Error</h2>
                        <p class="text-gray-600">Failed to load the content. Please try again.</p>
                    </div>
                `;
                contentDiv.classList.add('fade-in');
            });
    }

    // Set initial content
    document.addEventListener('DOMContentLoaded', function() {
        loadPage('/account/orders');
        
        // Set the first nav item as active
        const firstNavItem = document.querySelector('.account-nav');
        if (firstNavItem) {
            firstNavItem.classList.add('active-nav-item');
        }
    });
</script>

<style>
    .active-nav-item {
        background-color: #301934;
        color: #fff;
    }
    .fade-in {
        animation: fadeIn 0.3s ease-in;
    }
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
</style>

@endsection