@extends('layouts.master')

@section('content')
    <main class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="space-y-8">
                <div class="bg-white rounded-lg p-6 space-y-6">
                    <h2 class="text-xl font-semibold font-montserrat">Order Summary</h2>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4"> 
                            <img src="/images/1.jpg" alt="Wireless Headphones" class="w-20 h-20 object-cover rounded">
                            <div class="flex-1">
                                <h3 class="font-medium font-montserrat">Diamond Ring</h3>
                                <p class="text-sm text-gray-600 font-montserrat">1.00 Carat</p>
                            </div>
                            <p class="font-medium font-montserrat">$299.99</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <img src="/images/2.jpg" alt="Smart Watch" class="w-20 h-20 object-cover rounded">
                            <div class="flex-1">
                                <h3 class="font-medium font-montserrat">Diamond Ring</h3>
                                <p class="text-sm text-gray-600 font-montserrat">1.00 Carat</p>
                            </div>
                            <p class="font-medium font-montserrat">$399.99</p>
                        </div>
                        <div class="border-t pt-4">
                            <div class="flex justify-between text-sm">
                                <span class="font-montserrat">Subtotal</span>
                                <span class="font-montserrat">$699.98</span>
                            </div>
                            <div class="flex justify-between text-sm mt-2"> 
                                <span class="font-montserrat">Shipping</span>
                                <span class="font-montserrat">$9.99</span>
                            </div>
                            <div class="flex justify-between font-semibold text-lg mt-4">
                                <span class="font-montserrat">Total</span>
                                <span class="font-montserrat">$709.97</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-6 space-y-6">
                    <h2 class="text-xl font-semibold font-montserrat">Shipping Information</h2>
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 font-montserrat">Full Name</label> <input
                                    type="text" class="mt-1 block w-full border border-primary/90 rounded-md py-2 outline-none px-4 font-montserrat text-primary" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 font-montserrat">Email Address</label> <input
                                    type="email" class="mt-1 block w-full border border-primary/90 rounded-md py-2 outline-none px-4 font-montserrat text-primary" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 font-montserrat">Phone Number</label> <input
                                    type="tel" class="mt-1 block w-full border border-primary/90 rounded-md py-2 outline-none px-4 font-montserrat text-primary" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 font-montserrat">Address</label> <input type="text"
                                    class="mt-1 block w-full border border-primary/90 rounded-md py-2 outline-none px-4 font-montserrat text-primary" required>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-montserrat">City</label>
                                    <input type="text" class="mt-1 block w-full border border-primary/90 rounded-md py-2 outline-none px-4 font-montserrat text-primary"
                                        required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 font-montserrat">Postal Code</label>
                                    <input type="text" class="mt-1 block w-full border border-primary/90 rounded-md py-2 outline-none px-4 font-montserrat text-primary"
                                        required>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 font-montserrat">Country</label>
                                <select class="mt-1 block w-full border border-primary/90 rounded-md py-2 outline-none px-4 font-montserrat text-primary">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>United Kingdom</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="space-y-8">
                <div class="bg-white rounded-lg p-6 space-y-6">
                    <h2 class="text-xl font-semibold font-montserrat">Payment Method</h2>
                    <div class="space-y-4">
                        <div class="border rounded-lg p-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center"> <img
                                        src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_111x69.jpg"
                                        alt="PayPal" class="h-8"> <span class="ml-3 font-medium font-montserrat">Pay with PayPal</span>
                                </div> <input type="radio" name="payment" class="h-4 w-4 text-custom" checked>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 font-montserrat">
                            <i class="fas fa-shield-alt text-green-500 mr-2"></i>
                            Your payment is secured by PayPal's world-class security
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-6 space-y-6">
                    <h2 class="text-xl font-semibold font-montserrat">Order Review</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <input type="checkbox" class="mt-1 h-4 w-4 text-custom" required> 
                            <span class="ml-3 text-sm text-gray-600 font-montserrat">
                                I agree to the <a href="#" class="text-custom">Terms and Conditions</a> and <a
                                    href="#" class="text-custom">Privacy Policy</a>
                            </span>
                        </div> <button
                            class="w-full bg-primary text-white font-medium py-3 px-4 rounded-md hover:bg-custom/90 transition-colors font-montserrat">
                            Place Order - $709.97
                        </button>
                        {{-- <div class="flex items-center justify-center space-x-4 text-sm text-gray-600 font-montserrat"> 
                            <i class="fas fa-lock text-primary"></i>
                            <span class="font-montserrat">256-bit SSL Encrypted</span>
                            <i class="fas fa-shield-alt text-primary"></i>
                            <span class="font-montserrat">Secure Payment</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
