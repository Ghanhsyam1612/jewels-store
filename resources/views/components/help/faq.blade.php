@extends('layouts.master')

@section('content')

<div class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-montserrat font-semibold text-center mb-12">Frequently Asked Questions</h1>
    
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Left Side Navigation -->
        <div class="md:w-1/4">
            <nav class="space-y-2 sticky top-20">
                <a href="#about" class="block font-montserrat py-2 px-4 rounded hover:bg-gray-100 transition" onclick="scrollToSection('about', event)">About Us</a>
                <a href="#insurance" class="block font-montserrat py-2 px-4 rounded hover:bg-gray-100 transition" onclick="scrollToSection('insurance', event)">Insurance & Care</a>
                <a href="#order-ring-size" class="block font-montserrat py-2 px-4 rounded hover:bg-gray-100 transition" onclick="scrollToSection('order-ring-size', event)">Order & Ring Sizes</a>
                <a href="#our-diamonds-jewelry" class="block font-montserrat py-2 px-4 rounded hover:bg-gray-100 transition" onclick="scrollToSection('our-diamonds-jewelry', event)">Our Diamond & Jewelry</a>
                <a href="#lab-created-diamonds" class="block font-montserrat py-2 px-4 rounded hover:bg-gray-100 transition" onclick="scrollToSection('lab-created-diamonds', event)">Lab Created Diamonds</a>
                <a href="#payments" class="block font-montserrat py-2 px-4 rounded hover:bg-gray-100 transition" onclick="scrollToSection('payments', event)">Payments</a>
                <a href="#shipping" class="block font-montserrat py-2 px-4 rounded hover:bg-gray-100 transition" onclick="scrollToSection('shipping', event)">Shipping</a>
                <a href="#returns-refund" class="block font-montserrat py-2 px-4 rounded hover:bg-gray-100 transition" onclick="scrollToSection('returns-refund', event)">Returns & Refund</a>
            </nav>
        </div>

        <!-- Right Side FAQ Content -->
        <div class="md:w-3/4"> 
            <!-- About Us -->
            <section id="about" class="mb-12">
                <h2 class="text-2xl font-montserrat font-semibold mb-6">About Us</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left">Who are we and what do we do?</h3>
                            <svg class="w-4 h-4 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="faq-content hidden">
                            <p class="text-gray-600 font-montserrat mt-2">
                                We are a leading manufacturer and retailer of lab-grown diamonds with our own manufacturing unit in India called Loose Grown Diamond. We specialize in creating high-quality, certified lab-grown diamonds and serve customers globally with direct-to-consumer pricing and exceptional service.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Insurance & Care -->
            <section id="insurance" class="mb-12">
                <h2 class="text-2xl font-montserrat font-semibold mb-6">Insurance & Care</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left">Are my diamonds insured during shipping?</h3>
                            <svg class="w-4 h-4 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="faq-content hidden">
                            <p class="text-gray-600 font-montserrat mt-2">
                                Yes, all our shipments are fully insured at no additional cost to you. Every diamond is carefully packaged and shipped with full insurance coverage against loss, damage, or theft during transit. We use trusted shipping partners and require signature confirmation upon delivery for added security.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Order & Ring Sizes -->
            <section id="order-ring-size" class="mb-12">
                <h2 class="text-2xl font-montserrat font-semibold mb-6">Order & Ring Sizes</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left">How do I order a diamond?</h3>
                            <svg class="w-4 h-4 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="faq-content hidden">
                            <p class="text-gray-600 font-montserrat mt-2">
                                To order a diamond, simply select the desired diamond from our website, choose your preferred ring size, and proceed to checkout. Our secure checkout process ensures your privacy and data security.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Diamonds & Jewelry -->
            <section id="our-diamonds-jewelry" class="mb-12">
                <h2 class="text-2xl font-montserrat font-semibold mb-6">Our Diamonds & Jewelry</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left">What are the differences between your diamonds and other lab-grown diamonds?</h3>
                            <svg class="w-4 h-4 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="faq-content hidden">
                            <p class="text-gray-600 font-montserrat mt-2">
                                Our diamonds are created using advanced technological processes that replicate the natural diamond growing process. They are chemically, physically, and optically identical to mined diamonds, but without the environmental impact and ethical concerns associated with mining.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Lab Created Diamonds -->
            <section id="lab-created-diamonds" class="mb-12">
                <h2 class="text-2xl font-montserrat font-semibold mb-6">Lab Created Diamonds</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left">What are lab-created diamonds?</h3>
                            <svg class="w-4 h-4 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="faq-content hidden">
                            <p class="text-gray-600 font-montserrat mt-2">
                                Lab-created diamonds are diamonds that are grown in a laboratory using advanced technological processes that replicate the natural diamond growing process. They are chemically, physically, and optically identical to mined diamonds, but without the environmental impact and ethical concerns associated with mining.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Payments -->
            <section id="payments" class="mb-12">
                <h2 class="text-2xl font-montserrat font-semibold mb-6">Payments</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left">What payment methods do you accept?</h3>
                            <svg class="w-4 h-4 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="faq-content hidden">
                            <p class="text-gray-600 font-montserrat mt-2">
                                We accept a variety of payment methods including credit cards, bank transfers, and cryptocurrency. Our secure checkout process ensures your privacy and data security.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Shipping -->
            <section id="shipping" class="mb-12">
                <h2 class="text-2xl font-montserrat font-semibold mb-6">Shipping</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left">How do you ship your products?</h3>
                            <svg class="w-4 h-4 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="faq-content hidden">
                            <p class="text-gray-600 font-montserrat mt-2">
                                We ship our products using trusted shipping partners and require signature confirmation upon delivery for added security.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Returns & Refund -->
            <section id="returns-refund" class="mb-12">
                <h2 class="text-2xl font-montserrat font-semibold mb-6">Returns & Refund</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left">How do I return or refund my order?</h3>
                            <svg class="w-4 h-4 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </button>
                        <div class="faq-content hidden">
                            <p class="text-gray-600 font-montserrat mt-2">
                                We offer a 30-day return policy for all our products. If you are not satisfied with your purchase, you can return it for a full refund within 30 days of delivery. Please contact our customer support for instructions on how to return your order.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script>
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

<script>
    function toggleFaq(button) {
        // Get the content div that follows the button
        const content = button.nextElementSibling;
        const svg = button.querySelector('svg');
        
        // Toggle the content visibility
        content.classList.toggle('hidden');
        
        // Rotate the arrow icon
        if (content.classList.contains('hidden')) {
            svg.style.transform = 'rotate(0deg)';
        } else {
            svg.style.transform = 'rotate(180deg)';
        }
    }
</script>

@endsection