@extends('layouts.master')

@section('content')
    <!-- Shipping Policy Section -->
    <section class="container mx-auto py-12 px-6">
        <div class="max-w-4xl mx-auto space-y-3">
            <h2 class="text-xl lg:text-3xl font-semibold text-primary font-montserrat">Shipping Policy</h2>

            <p class="text-sm lg:text-base leading-relaxed text-primary font-montserrat">
                We offer worldwide shipping for all of our jewelry products. Please read the details below for more
                information
                about shipping methods, delivery times, and costs.
            </p>

            <div class="space-y-6">
                <div>
                    <h3 class="text-base font-medium text-primary font-montserrat">Processing Time</h3>
                    <p class="text-sm lg:text-base text-primary font-montserrat">
                        All orders are processed within 2-3 business days. You will receive an email notification once your
                        order has
                        been shipped.
                    </p>
                </div>

                <div>
                    <h3 class="text-base lg:text-lg font-medium text-primary font-montserrat">Shipping Methods</h3>
                    <p class="text-sm lg:text-base text-primary font-montserrat">
                        We offer the following shipping options:
                    </p>
                    <ul class="list-disc pl-6 text-sm lg:text-base text-primary font-montserrat">
                        <li>Standard Shipping (5-7 business days)</li>
                        <li>Express Shipping (2-3 business days)</li>
                        <li>Overnight Shipping (Next day delivery)</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-base lg:text-lg font-medium text-primary font-montserrat">Shipping Costs</h3>
                    <p class="text-sm lg:text-base text-primary font-montserrat">
                        Shipping costs depend on the delivery method and destination. During checkout, you will be able to
                        view the
                        exact shipping costs.
                    </p>
                </div>

                <div>
                    <h3 class="text-base lg:text-lg font-medium text-primary font-montserrat">International Shipping</h3>
                    <p class="text-sm lg:text-base text-primary font-montserrat">
                        We offer international shipping to most countries. Please note that customs duties and taxes may
                        apply to
                        orders shipped outside the United States, and these fees are the responsibility of the customer.
                    </p>
                </div>

                <div>
                    <h3 class="text-base lg:text-lg font-medium text-primary font-montserrat">Lost or Damaged Packages</h3>
                    <p class="text-sm lg:text-base text-primary font-montserrat">
                        If your order is lost or damaged in transit, please contact us immediately. We will work with the
                        carrier to
                        resolve the issue and ensure you receive a replacement or refund.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="container mx-auto py-5 px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-xl lg:text-3xl font-semibold text-primary font-montserrat mb-4">Frequently Asked Questions</h2>

            <div class="space-y-4">
                <div class="border p-4">
                    <button type="button" class="w-full flex justify-between items-center cursor-pointer"
                        onclick="toggleFaq(this)">
                        <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">Do you offer free shipping?
                        </h3>
                        <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down"
                            class="w-2.5 h-2.5 transform transition-transform duration-300">
                    </button>
                    <div
                        class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                        <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                            We offer free standard shipping on orders above $500. You can also choose other shipping methods
                            for
                            an additional cost.
                        </p>
                    </div>
                </div>

                <div class="border p-4">
                    <button type="button" class="w-full flex justify-between items-center cursor-pointer"
                        onclick="toggleFaq(this)">
                        <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">Can I change my shipping
                            address
                            after placing an order?</h3>
                        <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down"
                            class="w-2.5 h-2.5 transform transition-transform duration-300">
                    </button>
                    <div
                        class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                        <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                            Once your order has been processed, we are unable to change the shipping address. Please
                            double-check your information before placing the order.
                        </p>
                    </div>
                </div>

                <div class="border p-4">
                    <button type="button" class="w-full flex justify-between items-center cursor-pointer"
                        onclick="toggleFaq(this)">
                        <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">What should I do if my
                            package is
                            lost or damaged?</h3>
                        <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down"
                            class="w-2.5 h-2.5 transform transition-transform duration-300">
                    </button>
                    <div
                        class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                        <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                            If your package is lost or damaged, please contact our customer service team. We will assist you
                            with filing a claim and resolving the issue promptly.
                        </p>
                    </div>
                </div>

                <div class="border p-4">
                    <button type="button" class="w-full flex justify-between items-center cursor-pointer"
                        onclick="toggleFaq(this)">
                        <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">Do you ship internationally?
                        </h3>
                        <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down"
                            class="w-2.5 h-2.5 transform transition-transform duration-300">
                    </button>
                    <div
                        class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                        <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                            Yes, we offer international shipping to most countries. Please note that customs duties and
                            taxes
                            may apply to international orders.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    const otherSvg = otherContent.previousElementSibling.querySelector(
                        'img'); // Changed from 'svg' to 'img'
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
            const targetOffset = target.getBoundingClientRect().top + window.scrollY - document.querySelector('h1')
                .offsetHeight; // Adjust scroll position
            window.scrollTo({
                top: targetOffset,
                behavior: 'smooth'
            });
        }
    </script>
@endsection
