@extends('layouts.master')

@section('content')

<div class="container mx-auto px-4 py-12">
    <h1 class="text-2xl lg:text-3xl font-montserrat font-semibold text-center mb-12">Frequently Asked Questions</h1>
    
    <div class="md:px-10 lg:px-32 xl:w-4/5 2xl:w-3/5 flex flex-col justify-center mx-auto w-full gap-8">
            <!-- About Us -->
            <section id="about">
                <h2 class="text-xl lg:text-2xl font-montserrat font-semibold mb-2 lg:mb-6">About Us</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">Who are we and what do we do?</h3>
                            <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down" class="w-2.5 h-2.5 transform transition-transform duration-300">
                        </button>
                        <div class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                            <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                                We are a leading manufacturer and retailer of lab-grown diamonds with our own manufacturing unit in India called Loose Grown Diamond. We specialize in creating high-quality, certified lab-grown diamonds and serve customers globally with direct-to-consumer pricing and exceptional service.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Insurance & Care -->
            <section id="insurance">
                <h2 class="text-xl lg:text-2xl font-montserrat font-semibold mb-2 lg:mb-6">Insurance & Care</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">Are my diamonds insured during shipping?</h3>
                            <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down" class="w-2.5 h-2.5 transform transition-transform duration-300">
                        </button>
                        <div class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                            <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                                Yes, all our shipments are fully insured at no additional cost to you. Every diamond is carefully packaged and shipped with full insurance coverage against loss, damage, or theft during transit. We use trusted shipping partners and require signature confirmation upon delivery for added security.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Order & Ring Sizes -->
            <section id="order-ring-size">
                <h2 class="text-xl lg:text-2xl font-montserrat font-semibold mb-2 lg:mb-6">Order & Ring Sizes</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">How do I order a diamond?</h3>
                            <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down" class="w-2.5 h-2.5 transform transition-transform duration-300">
                        </button>
                        <div class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                            <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                                To order a diamond, simply select the desired diamond from our website, choose your preferred ring size, and proceed to checkout. Our secure checkout process ensures your privacy and data security.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Diamonds & Jewelry -->
            <section id="our-diamonds-jewelry">
                <h2 class="text-xl lg:text-2xl font-montserrat font-semibold mb-2 lg:mb-6">Our Diamonds & Jewelry</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">What are the differences between your diamonds and other lab-grown diamonds?</h3>
                            <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down" class="w-2.5 h-2.5 transform transition-transform duration-300">
                        </button>
                        <div class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                            <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                                Our diamonds are created using advanced technological processes that replicate the natural diamond growing process. They are chemically, physically, and optically identical to mined diamonds, but without the environmental impact and ethical concerns associated with mining.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Lab Created Diamonds -->
            <section id="lab-created-diamonds">
                <h2 class="text-xl lg:text-2xl font-montserrat font-semibold mb-2 lg:mb-6">Lab Created Diamonds</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">What are lab-created diamonds?</h3>
                            <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down" class="w-2.5 h-2.5 transform transition-transform duration-300">
                        </button>
                        <div class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                            <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                                Lab-created diamonds are diamonds that are grown in a laboratory using advanced technological processes that replicate the natural diamond growing process. They are chemically, physically, and optically identical to mined diamonds, but without the environmental impact and ethical concerns associated with mining.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Payments -->
            <section id="payments">
                <h2 class="text-xl lg:text-2xl font-montserrat font-semibold mb-2 lg:mb-6">Payments</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">What payment methods do you accept?</h3>
                            <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down" class="w-2.5 h-2.5 transform transition-transform duration-300">
                        </button>
                        <div class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                            <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                                We accept a variety of payment methods including credit cards, bank transfers, and cryptocurrency. Our secure checkout process ensures your privacy and data security.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Shipping -->
            <section id="shipping">
                <h2 class="text-xl lg:text-2xl font-montserrat font-semibold mb-2 lg:mb-6">Shipping</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">How do you ship your products?</h3>
                            <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down" class="w-2.5 h-2.5 transform transition-transform duration-300">
                        </button>
                        <div class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                            <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                                We ship our products using trusted shipping partners and require signature confirmation upon delivery for added security.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Returns & Refund -->
            <section id="returns-refund">
                <h2 class="text-xl lg:text-2xl font-montserrat font-semibold mb-2 lg:mb-6">Returns & Refund</h2>
                <div class="space-y-6">
                    <div class="border p-4">
                        <button type="button" class="w-full flex justify-between items-center cursor-pointer" onclick="toggleFaq(this)">
                            <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">How do I return or refund my order?</h3>
                            <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down" class="w-2.5 h-2.5 transform transition-transform duration-300">
                        </button>
                        <div class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                            <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                                We offer a 30-day return policy for all our products. If you are not satisfied with your purchase, you can return it for a full refund within 30 days of delivery. Please contact our customer support for instructions on how to return your order.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
    </div>
</div>

<script>
    function toggleFaq(button) {
        // Get the content div that follows the button
        const content = button.nextElementSibling;
        const svg = button.querySelector('img'); // Changed from 'svg' to 'img'
        
        // Close all other open FAQs
        document.querySelectorAll('.faq-content').forEach(otherContent => {
            if (otherContent !== content) {
                otherContent.style.maxHeight = '0'; // Set to 0 for closing
                otherContent.style.opacity = '0';
                otherContent.classList.add('hidden');
                const otherSvg = otherContent.previousElementSibling.querySelector('img'); // Changed from 'svg' to 'img'
                otherSvg.style.transform = 'rotate(0deg)';
            }
        });

        // Toggle the content visibility
        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            content.style.maxHeight = content.scrollHeight + 'px'; // Set to full height
            content.style.opacity = '1';
            svg.style.transform = 'rotate(180deg)';
        } else {
            content.style.maxHeight = '0'; // Set to 0 for closing
            content.style.opacity = '0';
            svg.style.transform = 'rotate(0deg)';
            
            // Use a timeout to remove the hidden class after the transition
            setTimeout(() => {
                content.classList.add('hidden');
            }, 300); // Match this duration with the CSS transition duration
        }
    }
</script>

<script>
    function showFaqSection(sectionId, event) {
        // Prevent default anchor click behavior
        event.preventDefault();
        
        // Hide all FAQ contents
        document.querySelectorAll('.faq-content').forEach(content => {
            content.classList.add('hidden');
        });
        
        // Show the selected FAQ section
        const selectedContent = document.querySelector(`#${sectionId} .faq-content`);
        if (selectedContent) {
            selectedContent.classList.remove('hidden');
        }
        
        // Smooth scroll to the section
        const target = document.querySelector(`#${sectionId}`);
        const targetOffset = target.getBoundingClientRect().top + window.scrollY - document.querySelector('h1').offsetHeight; // Adjust scroll position
        window.scrollTo({
            top: targetOffset,
            behavior: 'smooth'
        });
    }
</script>

@endsection