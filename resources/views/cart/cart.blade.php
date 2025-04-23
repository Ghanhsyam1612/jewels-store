@extends('layouts.master')

@section('content')
<div class="container mx-auto px-4 sm:px-6 py-8 sm:py-12">
    <h2 class="text-2xl md:text-3xl font-semibold font-literata mb-8 px-2">Shopping Cart</h2>
    <div class="flex flex-col lg:flex-row gap-6 lg:gap-8 w-full">
        <!-- Left Side - Cart Items -->
        <div class="w-full lg:w-4/5">
            @forelse($cart as $item)
            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 p-4 sm:p-6 mb-4">
                <div class="flex flex-col sm:flex-row justify-between items-center sm:items-start gap-4 sm:gap-6">
                    <!-- Product Image -->
                    <div class="w-full sm:w-1/6 flex justify-center sm:justify-start">
                        <div class="relative">
                            <img src="{{ asset($item['images']) }}" alt="Diamond" class="w-24 h-24 sm:w-20 sm:h-20 object-cover rounded-lg">
                            <p class="text-xs text-center text-gray-600 font-montserrat mt-2">Sample Image Only</p>
                        </div>
                    </div>
                    
                    <!-- Product Details -->
                    <div class="w-full sm:w-2/6">
                        <div class="text-center sm:text-left">
                            <h3 class="text-xl sm:text-lg font-semibold font-literata mb-2">{{ ucwords($item['name']) }}</h3>
                            <div class="space-y-1">
                                <p class="text-sm text-gray-700 font-montserrat"><span class="font-semibold">Shape:</span> {{ $item['shape'] }}</p>
                                <p class="text-sm text-gray-700 font-montserrat"><span class="font-semibold">Carat:</span> {{ $item['carat'] }}</p>
                                <p class="text-sm text-gray-700 font-montserrat"><span class="font-semibold">Cut:</span> {{ $item['cut'] }}</p>
                                @if(!empty($item['intensity']) && $item['intensity'] !== 'Intensity Not Available')
                                    <p class="text-sm text-gray-700 font-montserrat"><span class="font-semibold">Intensity:</span> {{ $item['intensity'] }}</p>
                                @elseif(!empty($item['color']) && $item['color'] !== 'Color Not Available')
                                    <p class="text-sm text-gray-700 font-montserrat"><span class="font-semibold">Color:</span> {{ $item['color'] }}</p>
                                @endif
                                <p class="text-sm text-gray-700 font-montserrat"><span class="font-semibold">Clarity:</span> {{ $item['clarity'] }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quantity Selector -->
                    <div class="w-full sm:w-1/6 flex justify-center sm:justify-start">
                        <div class="flex flex-col items-center sm:items-start gap-2">
                            <span class="text-sm font-montserrat font-semibold">Quantity:</span>
                            <div class="flex items-center border rounded-md shadow-sm">
                                <button class="px-3 py-2 border-r hover:bg-gray-50 transition-colors rounded-l-md" onclick="updateQuantity(this, -1, {{ $item['id'] }}, {{ $item['original_price'] }})">-</button>
                                <input value="{{ $item['quantity'] }}" name="quantity" class="w-14 text-center py-2 font-montserrat focus:outline-none" min="1" data-id="{{ $item['id'] }}">
                                <button class="px-3 py-2 border-l hover:bg-gray-50 transition-colors rounded-r-md" onclick="updateQuantity(this, 1, {{ $item['id'] }}, {{ $item['original_price'] }})">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="w-full sm:w-1/6 flex flex-col items-center sm:items-end gap-3">
                        <div class="flex flex-col items-center sm:items-end">
                            <span class="text-2xl sm:text-xl font-semibold font-montserrat price text-gray-900" data-id="{{ $item['id'] }}">${{ number_format($item['original_price'] * $item['quantity'], 2) }}</span>
                            <span class="text-sm text-gray-500 line-through font-montserrat">was ${{ $item['mrp'] }}</span>
                        </div>
                        <!-- Remove Button -->
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item['id'] }}">
                            <button class="text-red-500 hover:text-red-700 font-montserrat text-sm transition-colors duration-200 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Remove
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="bg-white rounded-lg shadow-md p-8 mb-4">
                <div class="flex flex-col items-center gap-4">
                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <h3 class="text-xl font-semibold font-literata text-gray-700">Your cart is empty</h3>
                    <p class="text-gray-500 font-montserrat">Add items to start shopping</p>
                    <a href="{{ route('home') }}" class="mt-4 inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-900 hover:bg-gray-800 transition-colors duration-200">
                        Continue Shopping
                    </a>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Right Side - Order Summary -->
        <div class="w-full lg:w-1/3">
            <div class="bg-white rounded-lg shadow-md p-6 sticky top-4">
                <h2 class="text-xl font-semibold font-literata mb-6">Order Summary</h2>
                @php
                $subtotal = 0;
                foreach ($cart as $item) {
                $subtotal += $item['original_price'] * $item['quantity'];
                }

                $shipping = $subtotal >= 500 ? 0 : 35;
                $total = $subtotal + $shipping;
                @endphp

                <div class="space-y-4 mb-6">
                    <div class="flex justify-between text-sm font-montserrat">
                        <span class="text-gray-600">Subtotal</span>
                        <span class="font-semibold" id="subtotal">${{ number_format($subtotal, 2) }}</span>
                    </div>
                    <div class="flex justify-between text-sm font-montserrat">
                        <span class="text-gray-600">Shipping</span>
                        <span class="font-semibold" id="shipping">
                            @if($subtotal == 0)
                                <span class="text-gray-500">$0.00</span>
                            @elseif($shipping == 0)
                                <span class="text-green-500">Free</span>
                            @else
                                ${{ number_format($shipping, 2) }}
                            @endif
                        </span>
                    </div>
                    <div class="border-t pt-4">
                        <div class="flex justify-between">
                            <span class="font-bold font-montserrat text-lg">Total</span>
                            <span class="font-bold font-montserrat text-lg" id="total">
                                @if($subtotal == 0)
                                    $0.00
                                @else
                                    ${{ number_format($total, 2) }}
                                @endif
                            </span>
                        </div>
                    </div>
                </div>

                @if($subtotal > 0)
                <a href="{{ route('checkout.shipping') }}" class="block">
                    <button class="w-full bg-gray-900 text-white py-4 rounded-lg hover:bg-gray-800 transition-colors duration-200 font-montserrat font-semibold flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Proceed to Checkout
                    </button>
                </a>
                @endif
                <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                    <p class="text-sm font-montserrat text-gray-600">
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Free shipping on orders above <span class="font-bold text-gray-900">$500</span>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Quantity Update -->
<script>
    function updateQuantity(button, delta, productId, pricePerUnit) {
        // Get the input field next to the clicked button
        const input = button.parentNode.querySelector('input[name="quantity"]');
        let newValue = parseInt(input.value) + delta;

        // Ensure the quantity is at least 1
        newValue = Math.max(newValue, 1);
        input.value = newValue;

        // Update the price for the item
        const priceElement = document.querySelector(`.price[data-id="${productId}"]`);
        priceElement.textContent = `$${(newValue * pricePerUnit).toFixed(2)}`;

        // Send the updated quantity to the server
        updateCart(input, newValue);
    }

    function updateCart(input, quantity) {
        const productId = input.getAttribute('data-id');

        // Send an AJAX request to update the cart in Laravel
        fetch("{{ route('cart.update') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({
                    id: productId,
                    quantity: quantity
                }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Update subtotal, shipping, and total dynamically
                    document.getElementById('subtotal').textContent = `$${data.subtotal}`;
                    document.getElementById('shipping').textContent = data.shipping;
                    document.getElementById('total').textContent = `$${data.total}`;
                } else {
                    alert('Failed to update cart.');
                }
            })
            .catch(error => console.error('Error:', error));
    }

    function updateCartTotals() {
        const priceElements = document.querySelectorAll('.price');
        let subtotal = 0;

        priceElements.forEach(element => {
            subtotal += parseFloat(element.textContent.replace('$', ''));
        });

        const tax = subtotal * 0.1;
        const total = subtotal + tax;

        document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
        document.getElementById('tax').textContent = `$${tax.toFixed(2)}`;
        document.getElementById('total').textContent = `$${total.toFixed(2)}`;
    }
</script>
<!-- End Quantity Update -->