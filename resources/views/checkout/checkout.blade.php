@extends('layouts.master')

@section('content')
<main class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!--  Left Side Order Summary  and Shipping Information -->
        <div class="space-y-8 lg:max-h-[calc(100vh-150px)] lg:overflow-y-auto lg:pr-4 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100">
            <!-- Order Summary Section -->
            <div class="bg-white rounded-lg p-6 space-y-6">
                <h2 class="text-xl font-semibold font-montserrat">Order Summary</h2>
                <div class="space-y-4">
                    @foreach($cart as $item)
                    <div class="flex items-center space-x-4 py-4 border-b border-gray-200 hover:bg-gray-100 transition duration-200">
                        <img src="{{ asset($item['images']) }}" alt="{{ $item['name'] }}" class="w-16 h-16 object-cover">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold font-montserrat text-gray-800">{{ $item['name'] }}</h3>
                            <p class="text-sm text-gray-600 font-montserrat">{{ $item['carat'] }} Carat</p>
                        </div>
                        <div class="flex flex-row items-center gap-10">
                            <p class="font-medium font-montserrat text-gray-700">
                                QTY: <span class="font-bold text-primary">{{ $item['quantity'] }}</span>
                            </p>
                            <p class="text-lg font-medium font-montserrat text-gray-700 w-24">
                                ${{ number_format($item['original_price'] * $item['quantity'], 2) }}
                            </p>
                        </div>
                    </div>
                    @endforeach

                    <!-- Order Total Calculation -->
                    <div class="border-t pt-4">
                        @php
                        $subtotal = 0;
                        foreach ($cart as $item) {
                        $subtotal += $item['original_price'] * $item['quantity'];
                        }

                        // Calculate shipping cost
                        $shipping = $subtotal >= 500 ? 0 : 35;

                        // Calculate total
                        $total = $subtotal + $shipping;
                        @endphp

                        <div class="flex justify-between text-sm">
                            <span class="font-montserrat">Subtotal</span>
                            <span class="font-montserrat">${{ number_format($subtotal, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-sm mt-2">
                            <span class="font-montserrat">Shipping</span>
                            <span class="font-montserrat">
                                @if($shipping == 0)
                                Free
                                @else
                                ${{ number_format($shipping, 2) }}
                                @endif
                            </span>
                        </div>
                        <p class="text-center text-sm font-montserrat text-gray-400 py-4">
                            Shipping is free for orders above <span class="font-bold text-gray-700">$500</span>
                        </p>
                        <div class="flex justify-between font-semibold text-lg mt-4">
                            <span class="font-montserrat">Total</span>
                            <span class="font-montserrat">${{ number_format($total, 2) }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shipping Information Section -->
            <div class="bg-white rounded-lg p-6 space-y-6">
                <h2 class="text-xl font-semibold font-montserrat">Shipping Information</h2>
                <form class="space-y-4">
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 font-montserrat">Full Name</label>
                            <input type="text"
                                class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary"
                                name="full_name"
                                required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 font-montserrat">Email Address</label>
                            <input type="email"
                                class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary"
                                name="email"
                                required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 font-montserrat">Phone Number</label>
                            <input type="tel"
                                class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary"
                                name="phone"
                                required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 font-montserrat">Address</label>
                            <input type="text"
                                class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary"
                                name="address"
                                required>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 font-montserrat">City</label>
                                <input type="text"
                                    class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary"
                                    name="city"
                                    required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 font-montserrat">Postal Code</label>
                                <input type="text"
                                    class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary"
                                    name="zip"
                                    required>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 font-montserrat">Country</label>
                            <select class="mt-1 block w-full border border-gray-300 rounded-md py-2.5 outline-none px-4 font-montserrat text-primary">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>United Kingdom</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End of Left Side Order Summary  and Shipping Information -->

        <!-- Right Side Payment Method -->

        <div class="space-y-8">
            <div class="bg-white rounded-lg p-6 space-y-6">
                <h2 class="text-xl font-semibold font-montserrat">Payment Method</h2>
                <div class="space-y-4">
                    <!-- Payment Methods Tabs -->
                    <div class="flex space-x-4 mb-6">
                        <button id="visa-tab" class="payment-tab flex justify-center items-center border rounded-md w-24 p-1 border-primary hover:border-primary">
                            <img src="{{ asset('Shape/visa.svg') }}" alt="Visa" class="w-12 h-12">
                        </button>
                        <button id="apple-tab" class="payment-tab flex justify-center items-center border border-gray-300 rounded-md w-24 p-1 hover:border-primary">
                            <img src="{{ asset('Shape/apple_pay.svg') }}" alt="Apple Pay" class="w-12 h-12">
                        </button>
                        <button id="google-tab" class="payment-tab flex justify-center items-center border border-gray-300 rounded-md w-24 p-1 hover:border-primary">
                            <img src="{{ asset('Shape/google_pay.svg') }}" alt="Google Pay" class="w-12 h-12">
                        </button>
                    </div>
    

                    <!-- Visa Card Payment Form -->
                    <div id="visa-payment" class="payment-section">
                        {{-- Input Card Number --}}
                        <input type="text" id="card-element" class="w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary" placeholder="Card Number">
                    </div>

                    <!-- Apple Pay Button -->
                    <div id="apple-pay-button" class="payment-section hidden"></div>

                    <!-- Google Pay Button -->
                    <div id="google-pay-button" class="payment-section hidden"></div>

                    <!-- Payment Button -->
                    <button id="payment-button" class="w-full bg-primary text-white py-3 rounded-md font-medium flex items-center justify-center gap-2 font-montserrat">
                        Pay ${{ number_format($total, 2) }}
                    </button>

                    <div id="payment-message" class="hidden"></div>
                </div>

                <p class="text-sm text-gray-600 font-montserrat">
                    <i class="fas fa-shield-alt text-green-500 mr-2"></i>
                    Your payment is secured with industry-standard encryption
                </p>

            </div>
        </div>
        <!-- End of Right Side Payment Method -->
    </div>
</main>

<!-- Add Stripe Elements and payment handling scripts -->
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ config("services.stripe.stripe_secret_key") }}');
    const elements = stripe.elements();

    // Create card element for Visa
    const cardElement = elements.create('card', {
        style: {
            base: {
                fontFamily: '"Montserrat", sans-serif',
                fontSize: '16px',
                color: '#32325d',
            }
        },
        networks: ['visa'], // Only allow Visa cards
    });
    cardElement.mount('#card-element');

    // Setup Apple Pay
    if (window.ApplePaySession && ApplePaySession.canMakePayments()) {
        const applePayRequest = stripe.paymentRequest({
            country: 'US',
            currency: 'usd',
            total: {
                label: 'Order Total',
                amount: {{ $total * 100 }}
            },
            requestPayerName: true,
            requestPayerEmail: true,
        });

        const applePayElements = elements.create('paymentRequestButton', {
            paymentRequest: applePayRequest,
            style: {
                paymentRequestButton: {
                    type: 'buy',
                    theme: 'dark'
                }
            }
        });

        applePayRequest.canMakePayment().then(result => {
            if (result) {
                applePayElements.mount('#apple-pay-button');
            }
        });
    }

    // Setup Google Pay
    const googlePayRequest = stripe.paymentRequest({
        country: 'US',
        currency: 'usd',
        total: {
            label: 'Order Total',
            amount: {{ $total * 100 }}
        },
        requestPayerName: true,
        requestPayerEmail: true,
    });

    const googlePayElements = elements.create('paymentRequestButton', {
        paymentRequest: googlePayRequest,
        style: {
            paymentRequestButton: {
                type: 'pay',
                theme: 'dark'
            }
        }
    });

    googlePayRequest.canMakePayment().then(result => {
        if (result && result.googlePay) {
            googlePayElements.mount('#google-pay-button');
        }
    });

    // Handle payment submission
    const paymentButton = document.getElementById('payment-button');
    paymentButton.addEventListener('click', async (e) => {
        e.preventDefault();
        paymentButton.disabled = true;

        const { paymentIntent, error } = await stripe.confirmPayment({
            elements,
            confirmParams: {
                return_url: '{{ route("checkout.complete") }}', // Redirect after payment
                payment_method_data: {
                    billing_details: {
                        name: document.querySelector('[name="full_name"]').value,
                        email: document.querySelector('[name="email"]').value,
                        phone: document.querySelector('[name="phone"]').value,
                        address: document.querySelector('[name="address"]').value,
                        city: document.querySelector('[name="city"]').value,
                        postal_code: document.querySelector('[name="zip"]').value,
                        country: document.querySelector('[name="country"]').value,
                    }
                }
            }
        });

        if (error) {
            const messageDiv = document.getElementById('payment-message');
            messageDiv.textContent = error.message;
            messageDiv.classList.remove('hidden');
            paymentButton.disabled = false;
        } else {
            // Payment was successful, redirect to success page
            window.location.href = '{{ route("checkout.success") }}';
        }
    });

    // Payment method tabs handling
    // const tabs = document.querySelectorAll('.payment-tab');
    // const sections = document.querySelectorAll('.payment-section');

    // tabs.forEach(tab => {
    //     tab.addEventListener('click', () => {
    //         // Remove active class and border from all tabs
    //         tabs.forEach(t => {
    //             t.classList.remove('active');
    //             t.classList.remove('border-primary');
    //             t.classList.add('border-gray-300');
    //         });
            
    //         // Hide all sections
    //         sections.forEach(s => s.classList.add('hidden'));

    //         // Add active class and border to clicked tab
    //         tab.classList.add('active');
    //         tab.classList.remove('border-gray-300');
    //         tab.classList.add('border-primary');
            
    //         // Show corresponding section
    //         const targetId = tab.id.replace('-tab', '-payment');
    //         const targetSection = document.getElementById(targetId);
    //         if (targetSection) {
    //             targetSection.classList.remove('hidden');
    //         }
    //     });
    // });
</script>

{{-- Payment method tabs handling --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabs = document.querySelectorAll('.payment-tab');
        const sections = document.querySelectorAll('.payment-section');

        // Handle tab clicks
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active state from all tabs
                tabs.forEach(t => {
                    t.classList.remove('active');
                    t.classList.remove('border-primary');
                    t.classList.add('border-gray-300');
                });

                // Hide all sections
                sections.forEach(section => {
                    section.classList.add('hidden');
                });

                // Activate clicked tab
                tab.classList.add('active');
                tab.classList.remove('border-gray-300');
                tab.classList.add('border-primary');

                // Show corresponding content section
                const sectionId = tab.id.replace('-tab', '-payment');
                const section = document.getElementById(sectionId);
                if (section) {
                    section.classList.remove('hidden');
                }
            });
        });

        // Activate first tab by default
        if (tabs.length > 0) {
            tabs[0].click();
        }
    });
</script>

<style>
    #card-element {
        padding: 1rem;
        border: 1px solid #e5e7eb;
        border-radius: 0.5rem;
    }

    .payment-tab.active {
        border-color: #301914 !important; /* Use your primary color here */
    }
</style>

@endsection