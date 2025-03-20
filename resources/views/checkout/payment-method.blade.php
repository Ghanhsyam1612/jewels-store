@extends('layouts.master')

@section('content')
    <main class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Left Side Order Summary -->
            <div
                class="space-y-8 lg:max-h-[calc(100vh-150px)] lg:overflow-y-auto lg:pr-4 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100">
                <div class="bg-white rounded-lg p-6 space-y-6">
                    <h2 class="text-xl font-semibold font-montserrat">Order Summary</h2>
                    <div class="space-y-2">
                        @foreach (session('cart') as $item)
                            <p class="font-montserrat">Diamond: {{ $item['name'] }}</p>
                            <p class="font-montserrat">Price: ${{ $item['original_price'] }}</p>
                            <p class="font-montserrat">Quantity: {{ $item['quantity'] }}</p>
                        @endforeach
                    </div>
                </div>
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

            <!-- Right Side Payment Method -->
            <div class="space-y-8">
                <form id="payment-form" class="bg-white rounded-lg p-6 space-y-6">
                    @csrf
                    <h2 class="text-xl font-semibold font-montserrat">Payment Method</h2>

                    <input type="hidden" name="payment_method" id="payment-method" value="card">
                    <input type="hidden" name="payment_method_id" id="payment-method-id">

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

                    <div id="card-element" class="space-y-4">
                        <div class="space-y-1">
                            <label class="block text-sm text-gray-600">Card Information</label>
                            <div id="card-number-element" class="w-full px-3 py-2 border border-gray-300 rounded-md"></div>
                            <div class="grid grid-cols-2 gap-4 mt-2">
                                <div id="card-expiry-element" class="px-3 py-2 border border-gray-300 rounded-md"></div>
                                <div id="card-cvc-element" class="px-3 py-2 border border-gray-300 rounded-md"></div>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <label class="block text-sm text-gray-600">Name on card</label>
                            <input type="text" name="card_holder_name" value="{{ session('shipping.full_name') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div id="apple-pay-button" class="hidden" style="height: 40px;"></div>
                    <div id="google-pay-button" class="hidden" style="height: 40px;"></div>

                    <button id="payment-button" type="submit" class="w-full bg-gray-900 text-white py-3 rounded-md">
                        Pay ${{ number_format($total, 2) }}
                    </button>

                    <div id="payment-message" class="text-red-500 mt-2 hidden"></div>
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
                }

                window.location.href = '{{ route('checkout.success') }}';
            });
        });
    </script>
@endsection
