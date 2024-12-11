@extends('layouts.master')

@section('content')
<div class="container mx-auto px-6 py-12">
    <h2 class="text-2xl font-semibold font-literata mb-6 px-6">Shopping Cart</h2>
    <div class="flex flex-row gap-8 w-full">
        <!-- Left Side - Cart Items -->
        <div class="w-4/5">
            @forelse($cart as $item)
            <div class="bg-white rounded-lg shadow p-6 mb-4">
                <div class="flex flex-row justify-between items-start gap-10">
                    <!-- Product Image -->
                    <div class="w-1/6">
                        <img src="{{ asset($item['images']) }}"" alt="Diamond" class="w-20 h-20">
                        <p class="text-xs text-black font-montserrat mt-1">Sample Image <br>  Only</p>
                    </div>

                    <!-- Product Details -->
                    <div class="w-2/6">
                        <div>
                            <h3 class="text-lg font-semibold font-literata">{{ ucwords($item['name']) }}</h3>
                            <p class="text-sm text-black font-montserrat mt-1"><span class="font-semibold">Metal:</span> 18K White Gold</p>
                            <p class="text-sm text-black font-montserrat"><span class="font-semibold">Carat Weight:</span> 1.5 Carat</p>
                        </div>
                    </div>

                    <!-- Quantity Selector -->
                    <div class="w-1/6">
                        <div class="flex flex-row items-center gap-2">
                            <span class="text-sm font-montserrat font-semibold">Quantity:</span>
                            <div class="flex items-center border rounded">
                                <button class="px-3 py-1 border-r hover:bg-gray-100" onclick="updateQuantity(this, -1, {{ $item['id'] }}, {{ $item['original_price'] }})">-</button>
                                <input value="{{ $item['quantity'] }}" name="quantity" class="w-12 text-center py-1 font-montserrat" min="1" data-id="{{ $item['id'] }}">
                                <button class="px-3 py-1 border-l hover:bg-gray-100" onclick="updateQuantity(this, 1, {{ $item['id'] }}, {{ $item['original_price'] }})">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="w-1/6">
                        <div class="flex flex-col items-end gap-2">
                            <div class="flex flex-col items-end">
                                <span class="text-xl font-semibold font-montserrat price" data-id="{{ $item['id'] }}">${{ number_format($item['original_price'] * $item['quantity'], 2) }}</span>
                                <span class="text-gray-500 line-through font-montserrat">was ${{ $item['mrp'] }}</span>
                            </div>
                            <!-- Remove Button -->
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item['id'] }}">
                                <button class="text-red-500 hover:text-red-700 font-montserrat text-sm">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="bg-white rounded-lg shadow p-6 mb-4">
                <div class="flex flex-row justify-center items-center gap-10">
                    <h3 class="text-lg font-semibold font-literata">No items in cart</h3>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Right Side - Order Summary -->
        <div class="w-1/3 border-2 border-black">
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-semibold font-literata mb-4">Order Summary</h2>
                @php
                $subtotal = 0;
                foreach ($cart as $item) {
                    $subtotal += $item['original_price'] * $item['quantity'];
                }
                $tax = $subtotal * 0.1; // Example tax rate of 10%
                $total = $subtotal + $tax;
                @endphp

                <div class="space-y-3 mb-6">
                    <div class="flex justify-between text-sm font-montserrat">
                        <span class="font-semibold font-montserrat">Subtotal</span>
                        <span class="font-semibold font-montserrat" id="subtotal">${{ number_format($subtotal, 2) }}</span>
                    </div>
                    <div class="flex justify-between text-sm font-montserrat">
                        <span class="font-semibold font-montserrat">Shipping</span>
                        <span class="font-semibold font-montserrat">Free</span>
                    </div>
                    <div class="flex justify-between text-sm font-montserrat">
                        <span class="font-semibold font-montserrat">Tax</span>
                        <span class="font-semibold font-montserrat" id="tax">${{ number_format($tax, 2) }}</span>
                    </div>
                    <div class="border-t pt-3">
                        <div class="flex justify-between font-semibold">
                            <span class="font-bold font-montserrat">Total</span>
                            <span class="font-bold font-montserrat" id="total">${{ number_format($total, 2) }}</span>
                        </div>
                    </div>
                </div>

                <button class="w-full bg-gray-900 text-white py-3 rounded-md hover:bg-gray-800 transition font-montserrat">
                    Proceed to Checkout
                </button>
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

        // Update the cart subtotal, tax, and total
        updateCartTotals();

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
                    console.log('Cart updated successfully!');
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
