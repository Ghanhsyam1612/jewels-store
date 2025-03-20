@extends('layouts.master')

@section('content')
    <main class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Left Side Order Summary -->
            <div
                class="space-y-8 lg:max-h-[calc(100vh-150px)] lg:overflow-y-auto lg:pr-4 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100">
                <!-- Order Summary Section -->
                <div class="bg-white rounded-lg p-6 space-y-6">
                    <h2 class="text-xl font-semibold font-montserrat">Order Summary</h2>
                    <!-- Order summary content -->
                    <div class="space-y-2">
                        @foreach (session('cart') as $item)
                            <p class="font-montserrat">Diamond: {{ $item['name'] }}</p>
                            <p class="font-montserrat">Price: {{ $item['original_price'] }}</p>
                            <p class="font-montserrat">Quantity: {{ $item['quantity'] }}</p>
                        @endforeach
                        <!-- <p class="font-montserrat">Total: {{ session('total') }}</p> -->
                    </div>
                </div>


                <!-- Shipping Information Summary -->
                <div class="bg-white rounded-lg p-6 space-y-4">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-semibold font-montserrat">Shipping Information</h2>
                        <a href="{{ route('checkout.shipping') }}" class="text-primary font-montserrat">Edit</a>
                    </div>
                    <div class="space-y-2">
                        <p class="font-montserrat">{{ session('shipping.full_name') }}</p>
                        <p class="font-montserrat">{{ session('shipping.email') }}</p>
                        <p class="font-montserrat">{{ session('shipping.address') }}</p>
                        <p class="font-montserrat">{{ session('shipping.city') }}, {{ session('shipping.zip') }}</p>
                        <p class="font-montserrat">{{ session('shipping.country') }}</p>
                    </div>
                </div>
            </div>

            <!-- Right Side Payment Method (Updated) -->
            <div class="space-y-8">
                <form id="payment-form" method="POST" action="{{ route('checkout.process') }}"
                    class="bg-white rounded-lg p-6 space-y-6">
                    @csrf
                    <h2 class="text-xl font-semibold font-montserrat">Payment Method</h2>

                    <input type="hidden" name="payment_method" id="payment-method" value="card">
                    <input type="hidden" name="payment_method_id" id="payment-method-id">
                    <input type="hidden" name="payment_intent_id" id="payment-intent-id">

                    <!-- Payment Method Selection -->
                    <div class="flex space-x-4 mb-6">
                        <button type="button" data-method="card"
                            class="payment-method-btn flex-1 border p-2 rounded border-blue-500">
                            <img src="{{ asset('Shape/visa.svg') }}" alt="Card Payment" class="mx-auto h-8">
                            <p class="text-center font-montserrat text-gray-700">Card</p>
                        </button>
                        <button type="button" data-method="apple_pay" class="payment-method-btn flex-1 border p-2 rounded">
                            <img src="{{ asset('Shape/apple_pay.svg') }}" alt="Apple Pay" class="mx-auto h-8">
                            <p class="text-center font-montserrat text-gray-700">Apple Pay</p>
                        </button>
                        <button type="button" data-method="google_pay"
                            class="payment-method-btn flex-1 border p-2 rounded">
                            <img src="{{ asset('Shape/google_pay.svg') }}" alt="Google Pay" class="mx-auto h-8">
                            <p class="text-center font-montserrat text-gray-700">Google Pay</p>
                        </button>
                    </div>

                    <!-- Card Payment Form -->
                    <div id="card-element" class="space-y-4">
                        <!-- Email Field -->
                        <div class="space-y-1">
                            <label class="block text-sm text-gray-600">Email</label>
                            <input type="email" name="email" value="{{ session('shipping.email') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                                placeholder="test@example.com">
                        </div>

                        <!-- Card Information -->
                        <div class="space-y-1">
                            <label class="block text-sm text-gray-600">Card Information</label>
                            <div class="relative">
                                <div id="card-number-element"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
                                </div>
                                <div class="absolute right-3 top-2.5">
                                    <img src="{{ asset('Shape/visa.svg') }}" alt="visa" class="h-4">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-2">
                                <div id="card-expiry-element"
                                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
                                </div>
                                <div id="card-cvc-element"
                                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
                                </div>
                            </div>
                        </div>

                        <!-- Name on Card -->
                        <div class="space-y-1">
                            <label class="block text-sm text-gray-600">Name on card</label>
                            <input type="text" name="card_holder_name" value="{{ session('shipping.full_name') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                                placeholder="Zhang San">
                        </div>

                        <!-- Country and ZIP -->
                        <div class="space-y-1">
                            <label class="block text-sm text-gray-600">Country or region</label>
                            <select name="country"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
                                <option value="US" selected>United States</option>
                                <!-- Add more countries as needed -->
                            </select>
                            <input type="text" name="postal_code" value="{{ session('shipping.zip') }}"
                                class="w-full mt-2 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500"
                                placeholder="12345">
                        </div>
                    </div>

                    <!-- Digital Payment Buttons (hidden by default) -->
                    <div id="apple-pay-button" class="hidden apple-pay-button apple-pay-button-black"
                        style="height: 40px; max-width: 100%;"></div>
                    <div id="google-pay-button" class="hidden" style="height: 40px; max-width: 100%;"></div>

                    <!-- Payment Button -->
                    <button id="payment-button" type="submit"
                        class="w-full bg-gray-900 text-white py-3 rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                        <span class="flex items-center justify-center">
                            Pay ${{ number_format($total, 2) }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2l10 7v6l10-7-10 7-10-7v6l10-7z" />
                            </svg>
                        </span>
                    </button>

                    <!-- Error Messages -->
                    <div id="payment-message" class="text-red-500 mt-2 hidden"></div>
                    @if ($errors->any())
                        <div class="text-red-500 mt-2">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </main>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stripe = Stripe('{{ config('services.stripe.publishable_key') }}');
            const elements = stripe.elements();
            let selectedPaymentMethod = 'card';

            const cardNumberElement = elements.create('cardNumber');
            const cardExpiryElement = elements.create('cardExpiry');
            const cardCvcElement = elements.create('cardCvc');

            cardNumberElement.mount('#card-number-element');
            cardExpiryElement.mount('#card-expiry-element');
            cardCvcElement.mount('#card-cvc-element');

            const paymentMethodButtons = document.querySelectorAll('.payment-method-btn');
            const paymentMethodInput = document.getElementById('payment-method');
            const cardElementContainer = document.getElementById('card-element');
            const applePayButton = document.getElementById('apple-pay-button');
            const googlePayButton = document.getElementById('google-pay-button');
            const paymentForm = document.getElementById('payment-form');
            const paymentButton = document.getElementById('payment-button');
            const paymentMessage = document.getElementById('payment-message');

            const paymentRequest = stripe.paymentRequest({
                country: 'US',
                currency: 'usd',
                total: {
                    label: 'Your Order Total',
                    amount: {{ $total * 100 }},
                },
            });

            paymentMethodButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    paymentMethodButtons.forEach(b => b.classList.remove('border-blue-500'));
                    this.classList.add('border-blue-500');
                    selectedPaymentMethod = this.dataset.method;
                    paymentMethodInput.value = selectedPaymentMethod;

                    cardElementContainer.classList.add('hidden');
                    applePayButton.classList.add('hidden');
                    googlePayButton.classList.add('hidden');

                    switch (selectedPaymentMethod) {
                        case 'card':
                            cardElementContainer.classList.remove('hidden');
                            break;
                        case 'apple_pay':
                            setupApplePay();
                            break;
                        case 'google_pay':
                            setupGooglePay();
                            break;
                    }
                });
            });

            function setupApplePay() {
                const applePayElement = elements.create('paymentRequestButton', {
                    paymentRequest: paymentRequest,
                    style: {
                        paymentRequestButton: {
                            type: 'default',
                            theme: 'black'
                        }
                    }
                });
                paymentRequest.canMakePayment().then(result => {
                    if (result && result.applePay) {
                        applePayElement.mount('#apple-pay-button');
                        applePayButton.classList.remove('hidden');
                    }
                });
            }

            function setupGooglePay() {
                const googlePayElement = elements.create('paymentRequestButton', {
                    paymentRequest: paymentRequest,
                    style: {
                        paymentRequestButton: {
                            type: 'default',
                            theme: 'black'
                        }
                    }
                });
                paymentRequest.canMakePayment().then(result => {
                    if (result && result.googlePay) {
                        googlePayElement.mount('#google-pay-button');
                        googlePayButton.classList.remove('hidden');
                    }
                });
            }

            paymentForm.addEventListener('submit', async function(e) {
                e.preventDefault();
                paymentButton.disabled = true;
                paymentMessage.classList.add('hidden');

                // Fetch PaymentIntent from backend
                const response = await fetch('{{ route('checkout.process') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        payment_method: selectedPaymentMethod,
                    }),
                });

                const data = await response.json();

                if (data.error) {
                    paymentMessage.textContent = data.error;
                    paymentMessage.classList.remove('hidden');
                    paymentButton.disabled = false;
                    return;
                }

                if (selectedPaymentMethod === 'card') {
                    const {
                        paymentMethod,
                        error
                    } = await stripe.createPaymentMethod({
                        type: 'card',
                        card: cardNumberElement,
                        billing_details: {
                            name: document.querySelector('[name="card_holder_name"]').value,
                            email: '{{ session('shipping.email') }}',
                        },
                    });

                    if (error) {
                        paymentMessage.textContent = error.message;
                        paymentMessage.classList.remove('hidden');
                        paymentButton.disabled = false;
                        return;
                    }

                    const {
                        error: confirmError
                    } = await stripe.confirmCardPayment(data.client_secret, {
                        payment_method: paymentMethod.id,
                    });

                    if (confirmError) {
                        paymentMessage.textContent = confirmError.message;
                        paymentMessage.classList.remove('hidden');
                        paymentButton.disabled = false;
                        return;
                    }
                } else {
                    paymentRequest.on('paymentmethod', async (ev) => {
                        const {
                            error
                        } = await stripe.confirmPayment(data.client_secret, {
                            payment_method: ev.paymentMethod.id,
                        });

                        if (error) {
                            ev.complete('fail');
                            paymentMessage.textContent = error.message;
                            paymentMessage.classList.remove('hidden');
                            paymentButton.disabled = false;
                        } else {
                            ev.complete('success');
                            window.location.href = '{{ route('checkout.success') }}';
                        }
                    });
                    paymentRequest.show();
                    return;
                }

                window.location.href = '{{ route('checkout.success') }}';
            });
        });
    </script>

    <style>
        .apple-pay-button {
            display: inline-block;
            -webkit-appearance: -apple-pay-button;
            -apple-pay-button-type: plain;
        }

        .apple-pay-button-black {
            -apple-pay-button-style: black;
        }
    </style>
@endsection
