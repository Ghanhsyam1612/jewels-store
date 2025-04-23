@extends('layouts.master')

@section('content')
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto md:px-6 lg:px-8 xl:px-36">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-semibold text-gray-900 font-montserrat mb-6">Our Story</h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto font-montserrat">Crafting brilliance since 1984, we've been pioneering sustainable luxury in the diamond industry.</p>
        </div>

        <!-- Heritage Section -->
        <div class="flex flex-col md:flex-row gap-12 mb-20">
            <div class="w-full md:w-1/2 space-y-6">
                <div class="space-y-4 font-montserrat text-gray-600">
                    <h2 class="text-2xl md:text-3xl font-semibold text-gray-900">
                        40+ Years of Diamond Excellence
                    </h2>
                    <p class="text-base md:text-lg leading-relaxed">
                        Since our establishment in 1984, Loose Grown Diamond has been at the forefront of innovation in the diamond industry. Our journey began with a vision to revolutionize how diamonds are created, making them more sustainable and accessible without compromising on quality.
                    </p>
                    <p class="text-base md:text-lg leading-relaxed">
                        Today, we proudly stand as a leading supplier of GIA, IGI & GCAL certified Lab Grown Diamonds, combining decades of expertise with cutting-edge technology.
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <img src="/images/manufacturing.webp" alt="Diamond Manufacturing Process" class="w-full h-auto rounded-lg shadow-lg">
            </div>
        </div>

        <!-- Mission & Values Section -->
        <div class="bg-white rounded-xl shadow-sm p-8 mb-20">
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-900 font-montserrat text-center mb-12">Our Mission & Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center space-y-4">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Sustainability First</h3>
                    <p class="text-gray-600">Creating eco-friendly lab-grown diamonds that preserve our planet's resources.</p>
                </div>
                <div class="text-center space-y-4">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Quality Assurance</h3>
                    <p class="text-gray-600">Every diamond is certified by leading authorities: GIA, IGI & GCAL.</p>
                </div>
                <div class="text-center space-y-4">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Innovation</h3>
                    <p class="text-gray-600">Pioneering advanced technologies in lab-grown diamond creation.</p>
                </div>
            </div>
        </div>

        <!-- Diamond Expertise Section -->
        <div class="mb-20">
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-900 font-montserrat text-center mb-12">Our Diamond Expertise</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-sm p-8 space-y-4">
                    <h3 class="text-xl font-semibold text-gray-900">Lab Grown Excellence</h3>
                    <p class="text-gray-600">We specialize in creating premium lab-grown diamonds using advanced HPHT and CVD technologies. Our diamonds are physically, chemically, and optically identical to mined diamonds, offering the same brilliance and quality at a better value.</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-8 space-y-4">
                    <h3 class="text-xl font-semibold text-gray-900">Custom Creations</h3>
                    <p class="text-gray-600">From classic rounds to fancy shapes like marquise, princess, and heart, we offer fully customizable diamonds. Each stone can be tailored to your specific requirements in size, shape, color, clarity, cut, and carat.</p>
                </div>
            </div>
        </div>

        <!-- Commitment Section -->
        <div class="text-center space-y-6 mb-20">
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-900 font-montserrat">Our Commitment to You</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto font-montserrat">
                Every lab-grown diamond we create is 100% conflict-free, ethically made, and recyclable. We're committed to providing exceptional quality while protecting our environment for future generations.
            </p>
        </div>
    </div>
</div>
@endsection