@extends('layouts.master')

@section('content')
<section class="bg-white font-sans">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-purple-50 to-white py-14 px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-primary mb-4 font-medium">Discover the <span class="underline">exclusive benefits</span> of our...</p>
        <h1 class="text-primary font-serif font-medium text-3xl md:text-4xl lg:text-5xl mb-8">
            Royal Diamond Jewelry<br class="hidden md:block">
            <span class="text-primary">Premium Membership Program</span>
        </h1>
        <div class="absolute bottom-0 left-0 right-0 h-10 bg-gradient-to-t from-white to-transparent"></div>
    </div>

    <!-- Video Section -->
    <div class="max-w-5xl mx-auto px-4 -mt-10 mb-16">
        <div class="shadow-2xl rounded-xl overflow-hidden border-4 border-white">
            <div class="aspect-w-16 aspect-h-9">
                <video id="videoPlayer" class="w-full h-full object-cover" autoplay muted loop>
                    <source src="{{ asset('videos/membership_video_2.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-serif font-medium text-primary text-center mb-12">Why Choose Our Membership</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-primary mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-primary mb-2">Secure Investment</h3>
                    <p class="text-gray-600">Every piece in our collection is certified and authenticated, ensuring your investment is protected.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-primary mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-primary mb-2">First Access</h3>
                    <p class="text-gray-600">Be the first to explore and acquire our latest collections before they're available to the public.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-primary mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-medium text-primary mb-2">Exclusive Pricing</h3>
                    <p class="text-gray-600">Enjoy member-only pricing and special discounts on our entire collection.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Collections Section -->
    {{-- <div class="bg-gray-50 py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-serif font-medium text-primary text-center mb-12">Latest Collections Preview</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-200">
                        <div class="p-8 flex items-center justify-center bg-purple-50">
                            <svg class="w-24 h-24 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M18.5 18.5L22 22M6.5 12.5L9 15l-2.5 2.5L4 15l2.5-2.5zm7-7L16 8l-2.5 2.5L11 8l2.5-2.5zm-7 7l2.5-2.5M13.5 5.5L16 3l2.5 2.5L16 8l-2.5-2.5zM6.5 12.5L4 10l2.5-2.5L9 10 6.5 12.5z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-primary mb-2">Spring Diamond Collection</h3>
                        <p class="text-gray-600 mb-4">Exclusive preview for members only</p>
                        <p class="text-primary font-medium">Coming Soon</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-200">
                        <div class="p-8 flex items-center justify-center bg-purple-50">
                            <svg class="w-24 h-24 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-primary mb-2">Sapphire Series</h3>
                        <p class="text-gray-600 mb-4">Member early access available</p>
                        <p class="text-primary font-medium">Preview Now</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-200">
                        <div class="p-8 flex items-center justify-center bg-purple-50">
                            <svg class="w-24 h-24 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-primary mb-2">Royal Collection</h3>
                        <p class="text-gray-600 mb-4">Limited edition pieces</p>
                        <p class="text-primary font-medium">Coming Soon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const billingToggle = document.getElementById('billing-toggle');
            const priceDisplays = document.querySelectorAll('.price-display');
            const cycleTexts = document.querySelectorAll('.cycle-text');
            const toggleDot = document.querySelector('.toggle-dot');
            const monthlyLabel = document.querySelector('.monthly-label');
            const yearlyLabel = document.querySelector('.yearly-label');

            function updatePricing() {
                const isYearly = billingToggle.checked;
                const cycleText = isYearly ? '/year' : '/month';

                priceDisplays.forEach((element) => {
                    const monthlyPrice = element.getAttribute('data-monthly');
                    const yearlyPrice = element.getAttribute('data-yearly');
                    const price = isYearly ? yearlyPrice : monthlyPrice;
                    element.textContent = '$' + price;
                });

                cycleTexts.forEach((element) => {
                    element.textContent = cycleText;
                });

                if (isYearly) {
                    toggleDot.style.transform = 'translateX(28px)';
                    monthlyLabel.classList.remove('font-bold');
                    yearlyLabel.classList.add('font-bold');
                } else {
                    toggleDot.style.transform = 'translateX(0)';
                    monthlyLabel.classList.add('font-bold');
                    yearlyLabel.classList.remove('font-bold');
                }
            }

            billingToggle.checked = false;
            updatePricing();
            billingToggle.addEventListener('change', updatePricing);
        });
    </script> --}}

    <!-- Membership Tiers Section -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h2 class="text-3xl font-serif font-medium text-primary text-center mb-6">Roaya Diamond Membership</h2>
        <!-- Billing Toggle -->
        <div class="flex justify-center items-center mb-12 gap-4">
            <span class="text-gray-600 font-medium monthly-label">Monthly</span>
            <div class="relative inline-flex">
                <input type="checkbox" id="billing-toggle" class="sr-only">
                <label for="billing-toggle" class="flex items-center cursor-pointer">
                    <div class="relative w-14 h-7 bg-purple-200 rounded-full transition duration-300 ease-in-out">
                        <div class="toggle-dot absolute w-6 h-6 bg-white rounded-full shadow-md top-0.5 left-0.5 transition-transform duration-300 ease-in-out"></div>
                    </div>
                </label>
            </div>
            <span class="text-gray-600 font-medium yearly-label">Yearly <span class="text-xs text-green-500">(Save 20%)</span></span>
        </div>
    
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($subscriptionPlan as $plan)
                <div class="p-8 rounded-xl shadow-lg flex flex-col h-full {{ $loop->index == 1 
                    ? 'bg-primary transform scale-105 border-4 border-purple-200 shadow-2xl relative' 
                    : 'bg-white border border-gray-100' }}">
                    @if($loop->index == 1)
                        <div class="absolute -top-4 left-0 right-0 flex justify-center">
                            <span class="bg-white text-primary px-4 py-1 rounded-full text-sm font-medium">MOST POPULAR</span>
                        </div>
                    @endif
                    
                    <div class="mb-8">
                        <h3 class="text-xl font-medium mb-2 {{ $loop->index == 1 ? 'text-white' : 'text-primary' }}">
                            {{ $plan->name }} Member
                        </h3>
                        <p class="text-4xl font-bold mb-2 {{ $loop->index == 1 ? 'text-white' : 'text-primary' }}">
                            <span class="price-display" data-monthly="{{ $plan->monthly_price }}" data-yearly="{{ $plan->yearly_price }}">
                                ${{ number_format($plan->yearly_price, 2) }}
                            </span>
                            <span class="text-lg font-normal cycle-text {{ $loop->index == 1 ? 'text-purple-200' : 'text-gray-500' }}">/year</span>
                        </p>
                        <p class="text-sm {{ $loop->index == 1 ? 'text-purple-200' : 'text-gray-500' }}">{{ $plan->description }}</p>
                    </div>
    
                    <ul class="mb-8 flex-grow">
                        @foreach (json_decode($plan->features) as $feature)
                            <li class="flex items-center mb-3">
                                <svg class="w-5 h-5 mr-2 {{ $loop->parent->index == 1 ? 'text-purple-300' : 'text-green-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="{{ $loop->parent->index == 1 ? 'text-white' : 'text-gray-600' }}">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
    
                    <form action="{{ route('subscription.checkout') }}" method="POST">
                        @csrf
                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                        <input type="hidden" name="billing_cycle" value="yearly" class="billing-cycle-input">
                        <button type="submit" 
                            class="w-full py-3 rounded-lg font-medium transition duration-300 {{ $loop->index == 1 
                                ? 'bg-white text-primary hover:bg-purple-50' 
                                : 'bg-purple-100 text-primary hover:bg-purple-200' }}">
                            Join {{ $plan->name }} Membership
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-serif font-medium text-primary mb-4">Membership Benefits</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Experience the exclusive privileges of being a Royal Diamond Jewelry member.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Benefit 1 -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300">
                <div class="bg-purple-100 p-3 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-primary mb-3">Priority Access</h3>
                <p class="text-gray-600">Be the first to explore our new collections and exclusive pieces before they're available to the public.</p>
            </div>

            <!-- Benefit 2 -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300">
                <div class="bg-purple-100 p-3 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-primary mb-3">Exclusive Discounts</h3>
                <p class="text-gray-600">Enjoy special member pricing and seasonal discounts on our entire collection of fine jewelry.</p>
            </div>

            <!-- Benefit 3 -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300">
                <div class="bg-purple-100 p-3 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-primary mb-3">Complimentary Services</h3>
                <p class="text-gray-600">Regular jewelry cleaning, maintenance, and expert consultation services included with your membership.</p>
            </div>

            <!-- Benefit 4 -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300">
                <div class="bg-purple-100 p-3 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-primary mb-3">Private Events</h3>
                <p class="text-gray-600">Invitations to exclusive member-only events, collection previews, and jewelry showcases.</p>
            </div>

            <!-- Benefit 5 -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300">
                <div class="bg-purple-100 p-3 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-primary mb-3">Fast Track Service</h3>
                <p class="text-gray-600">Priority handling for repairs, custom orders, and special requests with dedicated support.</p>
            </div>

            <!-- Benefit 6 -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300">
                <div class="bg-purple-100 p-3 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-primary mb-3">Extended Warranty</h3>
                <p class="text-gray-600">Additional warranty coverage and insurance benefits for your precious jewelry purchases.</p>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-gray-100 py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-serif font-medium text-primary mb-4">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <button class="flex justify-between items-center w-full text-left" id="faq1Btn">
                        <h3 class="text-lg font-medium text-primary">What are the benefits of becoming a member?</h3>
                        <svg class="w-5 h-5 text-primary transform transition-transform duration-300" id="faq1Icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mt-4 text-gray-600 hidden" id="faq1Answer">
                        Members enjoy exclusive benefits including priority access to new collections, special discounts, complimentary jewelry cleaning services, private shopping events, and dedicated customer support.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <button class="flex justify-between items-center w-full text-left" id="faq2Btn">
                        <h3 class="text-lg font-medium text-primary">How do I use my member discount?</h3>
                        <svg class="w-5 h-5 text-primary transform transition-transform duration-300" id="faq2Icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mt-4 text-gray-600 hidden" id="faq2Answer">
                        Your member discount is automatically applied to your purchases when you shop with your registered account, both online and in-store. Simply log in or present your membership card at checkout.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <button class="flex justify-between items-center w-full text-left" id="faq3Btn">
                        <h3 class="text-lg font-medium text-primary">Can I cancel my membership at any time?</h3>
                        <svg class="w-5 h-5 text-primary transform transition-transform duration-300" id="faq3Icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mt-4 text-gray-600 hidden" id="faq3Answer">
                        Yes, you can cancel your membership at any time. If you cancel, you'll continue to enjoy your benefits until the end of your current billing period. No refunds are provided for partial membership periods.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <button class="flex justify-between items-center w-full text-left" id="faq4Btn">
                        <h3 class="text-lg font-medium text-primary">How do I schedule jewelry cleaning services?</h3>
                        <svg class="w-5 h-5 text-primary transform transition-transform duration-300" id="faq4Icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mt-4 text-gray-600 hidden" id="faq4Answer">
                        Members can schedule complimentary jewelry cleaning services through our website, mobile app, or by calling our dedicated member service line. Premium and Elite members receive priority scheduling.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .font-serif { font-family: Georgia, serif; }
    .font-sans { font-family: 'Inter', sans-serif; }
    .hover\:bg-purple-50:hover { background-color: #f5f3ff; }
    .hover\:bg-purple-200:hover { background-color: #ddd6fe; }
    .hover\:bg-purple-700:hover { background-color: #6d28d9; }
</style>

{{-- Subscription Plan Script --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const billingToggle = document.getElementById('billing-toggle');
        const billingCycleInputs = document.querySelectorAll('.billing-cycle-input');
        const priceDisplays = document.querySelectorAll('.price-display');
        const cycleTexts = document.querySelectorAll('.cycle-text');
        const toggleDot = document.querySelector('.toggle-dot');
        const monthlyLabel = document.querySelector('.monthly-label');
        const yearlyLabel = document.querySelector('.yearly-label');

        function updatePricing() {
            const isYearly = billingToggle.checked;
            const cycleType = isYearly ? 'yearly' : 'monthly';
            const cycleText = isYearly ? '/year' : '/month';

            billingCycleInputs.forEach(input => {
                input.value = cycleType;
            });

            priceDisplays.forEach((element) => {
                const monthlyPrice = element.getAttribute('data-monthly');
                const yearlyPrice = element.getAttribute('data-yearly');
                const price = isYearly ? yearlyPrice : monthlyPrice;
                element.textContent = '$' + parseFloat(price).toFixed(2);
            });

            cycleTexts.forEach((element) => {
                element.textContent = cycleText;
            });

            if (isYearly) {
                toggleDot.style.transform = 'translateX(28px)';
                monthlyLabel.classList.remove('font-bold');
                yearlyLabel.classList.add('font-bold');
            } else {
                toggleDot.style.transform = 'translateX(0)';
                monthlyLabel.classList.add('font-bold');
                yearlyLabel.classList.remove('font-bold');
            }
        }

        billingToggle.checked = false;
        updatePricing();
        billingToggle.addEventListener('change', updatePricing);
    });
</script>

{{-- FAQ Script --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // FAQ toggle functionality
        const faqButtons = [
            { btn: 'faq1Btn', icon: 'faq1Icon', answer: 'faq1Answer' },
            { btn: 'faq2Btn', icon: 'faq2Icon', answer: 'faq2Answer' },
            { btn: 'faq3Btn', icon: 'faq3Icon', answer: 'faq3Answer' },
            { btn: 'faq4Btn', icon: 'faq4Icon', answer: 'faq4Answer' }
        ];
        
        faqButtons.forEach(faq => {
            const btn = document.getElementById(faq.btn);
            const icon = document.getElementById(faq.icon);
            const answer = document.getElementById(faq.answer);
            
            btn.addEventListener('click', () => {
                answer.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });
        
        // Membership buttons
        document.getElementById('premiumBtn').addEventListener('click', () => {
            alert('Redirecting to premium membership checkout...');
        });
        
        document.getElementById('eliteBtn').addEventListener('click', () => {
            alert('Redirecting to elite membership checkout...');
        });
    });
</script>
@endsection