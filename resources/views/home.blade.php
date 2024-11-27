
@extends('layouts.master')

@section('content')
    <div class="bg-gray-50">
        <!-- Hero Section -->
        <section class="bg-[url('/images/hero.jpg')] bg-cover bg-center h-screen flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-5xl font-bold mb-6 text-black">Find the Perfect Diamond</h1>
                <p class="text-xl mb-8 text-black">Discover the finest collection of loose diamonds.</p>
                <a href="/diamonds" class="bg-indigo-600 px-6 py-3 text-lg text-white hover:bg-indigo-700 rounded-md">Shop Now</a>
            </div>
        </section>

        <!-- Featured Diamonds Section -->
        <section class="py-16">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-semibold text-center text-gray-800 mb-12">Featured Loose Diamonds</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Single Diamond Card -->
                    <div class="border border-gray-200 p-6 rounded-lg hover:shadow-lg transition">
                        <img src="https://docs.growndiamondcorp.com/blog/types-of-diamonds.png" alt="Diamond 1" class="w-full h-64 object-cover mb-6">
                        <h3 class="text-xl font-bold text-gray-900">Round Cut Diamond</h3>
                        <p class="mt-2 text-gray-600">$5,200</p>
                        <a href="/diamonds/1" class="mt-4 inline-block bg-indigo-600 text-white py-2 px-4 rounded-md">View Details</a>
                    </div>
                    <!-- Add more diamond cards here -->
                </div>
            </div>
        </section>
    </div>
@endsection
