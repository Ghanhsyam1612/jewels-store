@extends('layouts.master')

@section('content')
<main class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <form id="payment-form" method="POST" action="{{ route('checkout.process') }}">
        @csrf
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
                                <select name="country" class="mt-1 block w-full border border-gray-300 rounded-md py-2.5 outline-none px-4 font-montserrat text-primary">
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="GB">United Kingdom</option>
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

                    <input type="hidden" name="payment_method" id="payment-method">
                    <input type="hidden" name="payment_method_id" id="payment-method-id">

                    <div class="flex space-x-4 mb-6">
                        <button type="button" data-method="card" class="payment-method-btn flex-1 border p-2 rounded">
                            <img src="{{ asset('Shape/visa.svg') }}" alt="Card Payment" class="mx-auto h-8">
                            <p class="text-center font-montserrat text-gray-700">Card</p>
                        </button>
                        <button type="button" data-method="apple_pay" class="payment-method-btn flex-1 border p-2 rounded">
                            <img src="{{ asset('Shape/apple_pay.svg') }}" alt="Apple Pay" class="mx-auto h-8">
                            <p class="text-center font-montserrat text-gray-700">Apple Pay</p>
                        </button>
                        <button type="button" data-method="google_pay" class="payment-method-btn flex-1 border p-2 rounded">
                            <img src="{{ asset('Shape/google_pay.svg') }}" alt="Google Pay" class="mx-auto h-8">
                            <p class="text-center font-montserrat text-gray-700">Google Pay</p>
                        </button>
                    </div>

                    <div id="card-element" class="hidden"></div>
                    <div id="apple-pay-button" class="hidden"></div>
                    <div id="google-pay-button" class="hidden"></div>

                    <button id="payment-button" type="submit" class="w-full bg-primary text-white py-3 rounded-md">
                        Pay ${{ number_format($total, 2) }}
                    </button>

                    <div id="payment-message" class="text-red-500 mt-2 hidden"></div>
                </div>
            </div>
            <!-- End of Right Side Payment Method -->
        </div>
    </form>
</main>

<!-- Add Stripe Elements and payment handling scripts -->
<script src="https://js.stripe.com/v3/"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const stripe = Stripe('{{ config("services.stripe.publishable_key") }}');
        const elements = stripe.elements();
        let selectedPaymentMethod = null;
        let cardElement = null;

        const paymentMethodButtons = document.querySelectorAll('.payment-method-btn');
        const paymentMethodInput = document.getElementById('payment-method');
        const paymentMethodIdInput = document.getElementById('payment-method-id');
        const cardElementContainer = document.getElementById('card-element');

        paymentMethodButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                // Reset previous selections
                paymentMethodButtons.forEach(b => b.classList.remove('border-blue-500'));
                this.classList.add('border-blue-500');

                selectedPaymentMethod = this.dataset.method;
                paymentMethodInput.value = selectedPaymentMethod;

                // Hide card element by default
                cardElementContainer.classList.add('hidden');

                // Show card input only for card payment
                if (selectedPaymentMethod === 'card') {
                    cardElementContainer.classList.remove('hidden');
                    if (!cardElement) {
                        cardElement = elements.create('card');
                        cardElement.mount('#card-element');
                    }
                }
            });
        });

        const paymentForm = document.getElementById('payment-form');
        const paymentButton = document.getElementById('payment-button');
        const paymentMessage = document.getElementById('payment-message');

        paymentForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            paymentButton.disabled = true;
            paymentMessage.classList.add('hidden');

            if (!selectedPaymentMethod) {
                paymentMessage.textContent = 'Please select a payment method';
                paymentMessage.classList.remove('hidden');
                paymentButton.disabled = false;
                return;
            }

            try {
                if (selectedPaymentMethod === 'card') {
                    const {
                        paymentMethod,
                        error
                    } = await stripe.createPaymentMethod({
                        type: 'card',
                        card: cardElement,
                        billing_details: {
                            name: document.querySelector('[name="full_name"]').value,
                            email: document.querySelector('[name="email"]').value,
                            phone: document.querySelector('[name="phone"]').value,
                            address: {
                                line1: document.querySelector('[name="address"]').value,
                                city: document.querySelector('[name="city"]').value,
                                postal_code: document.querySelector('[name="zip"]').value,
                                country: document.querySelector('[name="country"]').value
                            }
                        }
                    });

                    if (error) {
                        throw error;
                    }

                    paymentMethodIdInput.value = paymentMethod.id;
                }

                paymentForm.submit();
            } catch (error) {
                console.error(error);
                paymentMessage.textContent = error.message;
                paymentMessage.classList.remove('hidden');
                paymentButton.disabled = false;
            }
        });
    });
</script>

@endsection