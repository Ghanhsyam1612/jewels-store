@extends('layouts.master')

@section('content')
<main class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Left Side Order Summary -->
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
                        $subtotal = collect($cart)->sum(function($item) {
                            return $item['original_price'] * $item['quantity'];
                        });
                        $shipping = $subtotal >= 500 ? 0 : 35;
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
        </div>

        <!-- Right Side Shipping Information -->
        <div class="space-y-8">
            <div class="bg-white rounded-lg p-6 space-y-6">
                <h2 class="text-xl font-semibold font-montserrat">Shipping Information</h2>
                <form action="{{ route('checkout.shipping.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 font-montserrat">Full Name</label>
                            <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary" name="full_name" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 font-montserrat">Email Address</label>
                            <input type="email" class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary" name="email" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 font-montserrat">Phone Number</label>
                            <input type="tel" class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary" name="phone" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 font-montserrat">Address</label>
                            <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary" name="address" required>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 font-montserrat">City</label>
                                <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary" name="city" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 font-montserrat">Postal Code</label>
                                <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md py-2 outline-none px-4 font-montserrat text-primary" name="zip" required>
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
                    <button type="submit" class="w-full bg-primary text-white py-3 rounded-md font-montserrat">
                        Continue to Payment
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
