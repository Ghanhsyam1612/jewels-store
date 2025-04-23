@extends('layouts.master')

@section('content')
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto md:px-6 lg:px-8 xl:px-36">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-semibold text-gray-900 font-montserrat mb-6">Our Mission</h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto font-montserrat">Revolutionizing the diamond industry through sustainable practices and innovative technology.</p>
        </div>

        <!-- Mission Statement Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <!-- Sustainability First -->
            <div class="bg-white rounded-xl shadow-sm p-8 space-y-4 transform hover:scale-105 transition-transform duration-300">
                <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Sustainability First</h3>
                <p class="text-gray-600">We're committed to creating eco-friendly lab-grown diamonds that preserve our planet's resources while delivering exceptional quality.</p>
            </div>

            <!-- Quality Assurance -->
            <div class="bg-white rounded-xl shadow-sm p-8 space-y-4 transform hover:scale-105 transition-transform duration-300">
                <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Quality Assurance</h3>
                <p class="text-gray-600">Every diamond we create undergoes rigorous certification by leading authorities including GIA, IGI & GCAL, ensuring the highest standards.</p>
            </div>

            <!-- Innovation -->
            <div class="bg-white rounded-xl shadow-sm p-8 space-y-4 transform hover:scale-105 transition-transform duration-300">
                <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Innovation in Technology</h3>
                <p class="text-gray-600">Leading the industry with advanced HPHT and CVD technologies to create diamonds that are physically and chemically identical to mined diamonds.</p>
            </div>
        </div>

        <!-- Values Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-20">
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-900 font-montserrat mb-8 text-center">Our Core Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-900">Ethical Production</h3>
                    <p class="text-gray-600">Our lab-grown diamonds are 100% conflict-free and ethically produced, ensuring peace of mind with every purchase.</p>
                </div>
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-900">Customer-Centric Approach</h3>
                    <p class="text-gray-600">We offer fully customizable diamonds tailored to your specific requirements, backed by exceptional customer service.</p>
                </div>
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-900">Environmental Responsibility</h3>
                    <p class="text-gray-600">By choosing lab-grown diamonds, we reduce environmental impact and preserve natural resources for future generations.</p>
                </div>
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-900">Transparency</h3>
                    <p class="text-gray-600">We maintain complete transparency in our processes, pricing, and certification, building trust with our customers.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center space-y-6">
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-900 font-montserrat">Join Our Mission</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto font-montserrat">
                Experience the future of diamonds with us. Discover our collection of sustainable, ethical, and beautiful lab-grown diamonds.
            </p>
            <a href="/diamonds" class="inline-block bg-primary text-white px-8 py-3 rounded-full hover:bg-primary/90 transition-colors duration-300 font-montserrat">
                Explore Our Collection
            </a>
        </div>
    </div>
</div>
@endsection