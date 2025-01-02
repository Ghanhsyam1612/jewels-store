@extends('layouts.master')

@section('content')

<div class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-montserrat font-semibold text-center mb-12">Contact Us</h1>

    <div class="max-w-6xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white p-6 lg:p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-montserrat font-semibold mb-6">Send us a Message</h2>
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-2">First Name</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition-colors" placeholder="First Name">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-2">Last Name</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition-colors" placeholder="Last Name">
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Email Address</label>
                        <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition-colors" placeholder="Email Address">
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Subject</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition-colors">
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="support">Customer Support</option>
                            <option value="shipping">Shipping & Delivery</option>
                            <option value="returns">Returns & Refunds</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-2">Message</label>
                        <textarea rows="6" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-200 focus:border-gray-400 transition-colors" placeholder="Your message here..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-gray-800 text-white font-medium py-3 px-6 rounded-lg hover:bg-gray-700 transition-colors">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-montserrat font-semibold mb-6">Contact Information</h2>
                
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="bg-white p-3 rounded-lg shadow-sm">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Email</h3>
                            <p class="text-gray-600 mt-1">support@example.com</p>
                            <p class="text-gray-600">sales@example.com</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="bg-white p-3 rounded-lg shadow-sm">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Phone</h3>
                            <p class="text-gray-600 mt-1">+1 (555) 123-4567</p>
                            <p class="text-gray-600">+1 (555) 987-6543</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="bg-white p-3 rounded-lg shadow-sm">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Business Hours</h3>
                            <p class="text-gray-600 mt-1">Monday - Friday: 9:00 AM - 6:00 PM</p>
                            <p class="text-gray-600">Saturday - Sunday: Closed</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="bg-white p-3 rounded-lg shadow-sm">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Location</h3>
                            <p class="text-gray-600 mt-1">123 Business Street</p>
                            <p class="text-gray-600">Canada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
