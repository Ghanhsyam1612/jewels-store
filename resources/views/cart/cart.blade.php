@extends('layouts.master')

@section('content')
    <div class="container mx-auto px-6 py-12">
        <h2 class="text-2xl font-semibold font-literata mb-6 px-6">Shopping Cart</h2>
        <div class="flex flex-row gap-8 w-full">
            <!-- Left Side - Cart Items -->
            <div class="w-4/5">
                <div class="bg-white rounded-lg shadow p-6 mb-4">
                    <div class="flex flex-row justify-between items-start gap-10">
                        <!-- Product Image -->
                        <div class="w-1/6">
                            <img src="/images/1.jpg" alt="Product" class="w-full h-auto">
                        </div>
                        
                        <!-- Product Details -->
                        <div class="w-2/6">
                            <div>
                                <h3 class="text-lg font-semibold font-literata">Classic Diamond Ring</h3>
                                <p class="text-sm text-black font-montserrat mt-1"><span class="font-semibold">Metal:</span> 18K White Gold</p>
                                <p class="text-sm text-black font-montserrat"><span class="font-semibold">Carat Weight:</span> 1.5 Carat</p>
                                <p class="text-sm text-black font-montserrat"><span class="font-semibold">Back Setting:</span> Cathedral</p>
                            </div>
                        </div>
                            
                        <!-- Quantity Selector -->
                        <div class="w-1/6">
                            <div class="flex flex-row items-center gap-2">
                                <span class="text-sm font-montserrat font-semibold">Quantity:</span>
                                <div class="flex items-center border rounded">
                                    <button class="px-3 py-1 border-r hover:bg-gray-100">-</button>
                                    <input type="number" value="1" class="w-12 text-center py-1 font-montserrat" min="1">
                                    <button class="px-3 py-1 border-l hover:bg-gray-100">+</button>
                                </div>
                            </div>
                        </div>
                            
                        <!-- Price -->
                        <div class="w-1/6">
                            <div class="flex flex-col items-end gap-2">
                                <div class="flex flex-col items-end">
                                    <span class="text-xl font-semibold font-montserrat">$2,999</span>
                                    <span class="text-gray-500 line-through font-montserrat">was $3,499</span>
                                </div>
                                <button class="text-red-500 hover:text-red-700 font-montserrat text-sm">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Order Summary -->
            <div class="w-1/3 border-2 border-black">
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-xl font-semibold font-literata mb-4">Order Summary</h2>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between text-sm font-montserrat">
                            <span class="font-semibold font-montserrat">Subtotal</span>
                            <span class="font-semibold font-montserrat">$2,999</span>
                        </div>
                        <div class="flex justify-between text-sm font-montserrat">
                            <span class="font-semibold font-montserrat">Shipping</span>
                            <span class="font-semibold font-montserrat">Free</span>
                        </div>
                        <div class="flex justify-between text-sm font-montserrat">
                            <span class="font-semibold font-montserrat">Tax</span>
                            <span class="font-semibold font-montserrat">$299.90</span>
                        </div>
                        <div class="border-t pt-3">
                            <div class="flex justify-between font-semibold">
                                <span class="font-bold font-montserrat">Total</span>
                                <span class="font-bold font-montserrat">$3,298.90</span>
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
