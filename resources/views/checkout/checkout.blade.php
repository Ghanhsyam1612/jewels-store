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
                                required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 font-montserrat">Email Address</label>
                            <input type="email"
                                class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary"
                                required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 font-montserrat">Phone Number</label>
                            <input type="tel"
                                class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary"
                                required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 font-montserrat">Address</label>
                            <input type="text"
                                class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary"
                                required>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 font-montserrat">City</label>
                                <input type="text"
                                    class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary"
                                    required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 font-montserrat">Postal Code</label>
                                <input type="text"
                                    class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary"
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
                    <!-- Direct Bank Transfer -->
                    <!-- <div class="border rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-university text-2xl"></i>
                                <span class="font-medium font-montserrat text-primary">Direct Bank Transfer</span>
                            </div>
                            <input type="radio" name="payment" class="h-4 w-4 text-custom" value="bank" id="bankTransferRadio" />
                        </div>
                        <div class="mt-3 payment-form bank-form hidden p-4">
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-sm font-medium text-primary mb-1 font-montserrat">Bank Name</label>
                                    <input type="text" class="w-full text-primary font-montserrat border border-gray-300 rounded-md shadow-sm outline-none py-2 px-4" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-primary mb-1 font-montserrat">Account Number</label>
                                    <input type="text" class="w-full text-primary font-montserrat border border-gray-300 rounded-md shadow-sm outline-none py-2 px-4" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-primary mb-1 font-montserrat">Swift Code</label>
                                    <input type="text" class="w-full text-primary font-montserrat border border-gray-300 rounded-md shadow-sm outline-none py-2 px-4" />
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Credit/Debit Card -->
                    <!-- <div class="border rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-credit-card text-2xl"></i>
                                <span class="font-medium font-montserrat text-primary">Credit/Debit Card</span>
                            </div>
                            <input type="radio" name="payment" class="h-4 w-4 text-custom" value="card" id="cardRadio" />
                        </div>
                        <div class="mt-3 payment-form card-form hidden p-4">
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-sm font-medium text-primary mb-1 font-montserrat">Card Number</label>
                                    <div class="relative">
                                        <input id="cardNumber" type="text"
                                            class="w-full text-primary font-montserrat border border-gray-300 rounded-md shadow-sm outline-none py-2 px-4"
                                            maxlength="19"
                                            placeholder="1234 5678 9012 3456" />
                                        <img id="cardTypeIcon" src="" alt="Card Type"
                                            class="absolute right-3 top-2/4 transform -translate-y-2/4 h-6 hidden" />
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-primary mb-1 font-montserrat">Card Expiry Date</label>
                                    <input type="text"
                                        class="w-full text-primary font-montserrat border border-gray-300 rounded-md shadow-sm outline-none py-2 px-4"
                                        placeholder="MM/YY" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-primary mb-1 font-montserrat">CVV</label>
                                    <input type="text"
                                        class="w-full text-primary font-montserrat border border-gray-300 rounded-md shadow-sm outline-none py-2 px-4"
                                        maxlength="3"
                                        placeholder="123" />
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- PayPal -->
                    <!-- <div class="border rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_111x69.jpg"
                                    alt="PayPal"
                                    class="h-6">
                                <span class="ml-3 font-medium font-montserrat">Pay with PayPal</span>
                            </div>
                            <input type="radio" name="payment" class="h-4 w-4 text-custom" value="paypal" id="paypalRadio" />
                        </div>
                        <div class="mt-3 payment-form paypal-form hidden p-4">
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-sm font-medium text-primary mb-1 font-montserrat">PayPal Email</label>
                                    <input type="email"
                                        class="w-full text-primary font-montserrat border border-gray-300 rounded-md shadow-sm outline-none py-2 px-4"
                                        placeholder="Enter your PayPal email"
                                        id="paypalEmail" />
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- PayPal Security Notice -->
                    <p class="text-sm text-gray-600 font-montserrat">
                        <i class="fas fa-shield-alt text-green-500 mr-2"></i>
                        Your payment is secured by PayPal's world-class security
                    </p>

                    <div class="flex items-start">
                        <input type="checkbox" class="mt-1 h-4 w-4 text-custom" required>
                        <span class="ml-3 text-sm text-gray-600 font-montserrat">
                            I agree to the <a href="#" class="text-custom">Terms and Conditions</a> and
                            <a href="#" class="text-custom">Privacy Policy</a>
                        </span>
                    </div>

                    <div id="paypal-button-container"></div>
                    <!-- <button id="paypal-button-container" class="w-full bg-primary text-white py-3 rounded-md !rounded-button font-medium flex items-center justify-center gap-2 font-montserrat">
                        <i class="fab fa-paypal"></i>
                        Pay
                    </button> -->
                </div>
            </div>
        </div>
        <!-- End of Right Side Payment Method -->
    </div>
</main>

<!-- PayPal Button Integration -->
<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&currency=USD"></script>
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: "{{ number_format($total, 2, '.', '') }}"
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                fetch('/checkout/process', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            payment_method: 'paypal',
                            full_name: document.querySelector('input[name="full_name"]').value,
                            email: document.querySelector('input[name="email"]').value,
                            phone: document.querySelector('input[name="phone"]').value,
                            address: document.querySelector('input[name="address"]').value,
                            city: document.querySelector('input[name="city"]').value,
                            state: document.querySelector('input[name="state"]').value,
                            zip: document.querySelector('input[name="zip"]').value,
                            country: document.querySelector('select[name="country"]').value,
                            transaction_id: details.id,
                            amount: details.purchase_units[0].amount.value
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            window.location.href = '/checkout/success';
                        } else {
                            alert('Payment failed: ' + data.message);
                        }
                    });
            });
        },
        onError: function(err) {
            alert('An error occurred during the payment process. Please try again.');
        }
    }).render('#paypal-button-container');
</script>


<script>
    // Get all the radio buttons
    const radioButtons = document.querySelectorAll('input[name="payment"]');

    // Get all the forms associated with each payment method
    const bankForm = document.querySelector('.bank-form');
    const cardForm = document.querySelector('.card-form');
    const paypalForm = document.querySelector('.paypal-form');

    // Function to hide all payment forms
    function hideAllForms() {
        bankForm.classList.add('hidden');
        cardForm.classList.add('hidden');
        paypalForm.classList.add('hidden');
    }

    // Event listener to toggle forms visibility based on selected radio button
    radioButtons.forEach(button => {
        button.addEventListener('change', function() {
            hideAllForms(); // Hide all forms initially

            if (this.value === 'bank') {
                bankForm.classList.remove('hidden'); // Show bank form
            } else if (this.value === 'card') {
                cardForm.classList.remove('hidden'); // Show card form
            } else if (this.value === 'paypal') {
                paypalForm.classList.remove('hidden'); // Show PayPal form with email input
            }
        });
    });

    // Card Number Input and Card Type Icon
    const cardNumberInput = document.getElementById('cardNumber');
    const cardTypeIcon = document.getElementById('cardTypeIcon');
    // Card Type Detection Logic
    function getCardType(number) {
        const patterns = {
            visa: /^4/,
            mastercard: /^5[1-5]/,
            amex: /^3[47]/,
            discover: /^6(?:011|5)/,
            // diners: /^3(?:0[0-5]|[68])/,
            jcb: /^(?:2131|1800|35)/
        };

        if (patterns.visa.test(number)) return 'visa';
        if (patterns.mastercard.test(number)) return 'mastercard';
        if (patterns.amex.test(number)) return 'amex';
        if (patterns.discover.test(number)) return 'discover';
        if (patterns.diners.test(number)) return 'diners';
        if (patterns.jcb.test(number)) return 'jcb';
        return 'unknown';
    }

    // Dynamically Update Card Type Icon
    cardNumberInput.addEventListener('input', function() {
        const cardNumber = this.value.replace(/\s+/g, ''); // Remove spaces
        const cardType = getCardType(cardNumber);

        if (cardType === 'unknown' || cardNumber.length === 0) {
            cardTypeIcon.classList.add('hidden');
            return;
        }

        // Set Card Type Image
        cardTypeIcon.src = `{{asset('Card/${cardType}.png')}}`; // Add card images in /public/images/cards
        cardTypeIcon.classList.remove('hidden');
    });
</script>
@endsection