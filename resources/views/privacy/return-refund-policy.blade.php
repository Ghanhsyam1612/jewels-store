@extends('layouts.master')

@section('content')
    <!-- Shipping Policy Section -->
    <section class="container mx-auto py-12 px-6">
        <div class="max-w-4xl mx-auto space-y-3">
            <h2 class="text-xl lg:text-3xl font-semibold text-primary font-montserrat">Return/Refund Policy</h2>

            <p class="text-sm lg:text-base leading-relaxed text-primary font-montserrat">
                At Roaya Diamond, we strive to ensure that you are completely satisfied with your purchase. If for any
                reason you are not happy with your purchase, please read our refund and return policy below.
            </p>

            <div class="space-y-6">
                <div>
                    <h3 class="text-base lg:text-lg font-medium text-primary font-montserrat">Returns Eligibility</h3>
                    <p class="text-sm lg:text-base text-primary font-montserrat">
                        You may return your item within 30 days of receiving it. The product must be unused, in its original
                        condition, and in the original packaging.
                    </p>
                </div>

                <div>
                    <h3 class="text-base lg:text-lg font-medium text-primary font-montserrat">Refund Process</h3>
                    <p class="text-sm lg:text-base text-primary font-montserrat">
                        To initiate a refund, please contact us at [support@email.com] with your order number and reason for
                        return. Once your return is processed, we will issue a refund to the original payment method.
                    </p>
                </div>

                <div>
                    <h3 class="text-base lg:text-lg font-medium text-primary font-montserrat">Non-Refundable Items</h3>
                    <p class="text-sm lg:text-base text-primary font-montserrat">
                        Some items are not eligible for a refund, including:
                    </p>
                    <ul class="list-disc pl-6 text-sm lg:text-base text-primary font-montserrat">
                        <li>Gift cards</li>
                        <li>Personalized or custom products</li>
                        <li>Items on clearance or sale</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-base lg:text-lg font-medium text-primary font-montserrat">Shipping Costs</h3>
                    <p class="text-sm lg:text-base text-primary font-montserrat">
                        Shipping fees are non-refundable. If your return is approved, you will be responsible for the cost
                        of return shipping.
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
                        <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">How do I initiate a return?
                        </h3>
                        <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down"
                            class="w-2.5 h-2.5 transform transition-transform duration-300">
                    </button>
                    <div
                        class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                        <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                            To initiate a return, please reach out to our customer support team via email at
                            [support@email.com] with your order number and reason for the return. We will guide you through
                            the process.
                        </p>
                    </div>
                </div>

                <div class="border p-4">
                    <button type="button" class="w-full flex justify-between items-center cursor-pointer"
                        onclick="toggleFaq(this)">
                        <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">How long does it take to
                            process a refund?</h3>
                        <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down"
                            class="w-2.5 h-2.5 transform transition-transform duration-300">
                    </button>
                    <div
                        class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                        <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                            Once we receive the returned item, it usually takes 5-7 business days to process the refund. The
                            refund will be issued to the original payment method.
                        </p>
                    </div>
                </div>

                <div class="border p-4">
                    <button type="button" class="w-full flex justify-between items-center cursor-pointer"
                        onclick="toggleFaq(this)">
                        <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">What should I do if my return
                            is not eligible?</h3>
                        <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down"
                            class="w-2.5 h-2.5 transform transition-transform duration-300">
                    </button>
                    <div
                        class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                        <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                            If your return does not meet the eligibility criteria, our customer support team will contact
                            you to discuss the next steps.
                        </p>
                    </div>
                </div>

                <div class="border p-4">
                    <button type="button" class="w-full flex justify-between items-center cursor-pointer"
                        onclick="toggleFaq(this)">
                        <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">Do I need to pay for return
                            shipping?</h3>
                        <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down"
                            class="w-2.5 h-2.5 transform transition-transform duration-300">
                    </button>
                    <div
                        class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                        <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                            Yes, you are responsible for return shipping unless the return is due to a defective product or
                            a mistake on our part.
                        </p>
                    </div>
                </div>

                <div class="border p-4">
                    <button type="button" class="w-full flex justify-between items-center cursor-pointer"
                        onclick="toggleFaq(this)">
                        <h3 class="font-montserrat font-medium text-left text-sm lg:text-base">Can I exchange an item
                            instead of returning it?</h3>
                        <img src="{{ asset('images/down-arrow.png') }}" alt="Arrow Down"
                            class="w-2.5 h-2.5 transform transition-transform duration-300">
                    </button>
                    <div
                        class="faq-content hidden transition-all duration-300 ease-in-out max-h-0 overflow-hidden opacity-0">
                        <p class="text-gray-600 text-sm lg:text-base font-montserrat mt-2">
                            Unfortunately, we do not offer direct exchanges. If you wish to exchange an item, please return
                            the original item and place a new order for the desired item.
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
