@extends('layouts.master')

@section('content')

<main class="flex-grow bg-gray-50">
    <!-- Hero Section with Breadcrumbs -->
    <div class="bg-white shadow-sm">
        <div class="container mx-auto px-4 md:px-8 lg:px-12 xl:px-16 2xl:px-24 py-4">
            <nav class="flex items-center text-sm font-montserrat">
                <a href="/" class="text-dark-blue hover:text-primary transition-colors duration-200">Home</a>
                <svg class="w-4 h-4 mx-2 text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" fill="currentColor"></path>
                </svg>
                <a href="/engagement-rings" class="text-dark-blue hover:text-primary transition-colors duration-200">Engagement Rings</a>
                <svg class="w-4 h-4 mx-2 text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" fill="currentColor"></path>
                </svg>
                <span class="text-primary">The Trellis Three Stone</span>
            </nav>
        </div>
    </div>

    <!-- Main Product Section -->
    <div class="container mx-auto px-4 md:px-8 lg:px-12 xl:px-16 2xl:px-24 py-8">
        <div class="flex flex-col lg:flex-row gap-8 xl:gap-12">
            <!-- Left Column - Product Images -->
            <div class="w-full lg:w-1/2">
                <!-- Main Image -->
                <div class="relative bg-white p-4 rounded-lg shadow-md mb-4">
                    <img id="mainImage" src="/images/1.jpg" alt="The Trellis Three Stone Ring" class="w-full h-auto rounded-lg object-contain max-h-96 mx-auto">
                    <div class="absolute top-4 right-4">
                        <button class="bg-white bg-opacity-80 rounded-full p-2 shadow-md hover:bg-opacity-100 transition-all duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Thumbnail Gallery -->
                <div class="grid grid-cols-4 gap-2 mb-6">
                    <div class="cursor-pointer border-2 border-transparent hover:border-primary rounded-lg transition-all duration-200" onclick="selectJewelry('/images/1.jpg')">
                        <img src="/images/1.jpg" alt="Ring view 1" class="w-full h-20 object-cover rounded-lg">
                    </div>
                    <div class="cursor-pointer border-2 border-transparent hover:border-primary rounded-lg transition-all duration-200" onclick="selectJewelry('/images/2.jpg')">
                        <img src="/images/2.jpg" alt="Ring view 2" class="w-full h-20 object-cover rounded-lg">
                    </div>
                    <div class="cursor-pointer border-2 border-transparent hover:border-primary rounded-lg transition-all duration-200" onclick="selectJewelry('/images/3.jpg')">
                        <img src="/images/3.jpg" alt="Ring view 3" class="w-full h-20 object-cover rounded-lg">
                    </div>
                    <div class="cursor-pointer border-2 border-transparent hover:border-primary rounded-lg transition-all duration-200" onclick="selectJewelry('/images/4.jpg')">
                        <img src="/images/4.jpg" alt="Ring view 4" class="w-full h-20 object-cover rounded-lg">
                    </div>
                </div>

                <!-- Diamond Size Preview -->
                <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Preview Diamond Size</h3>
                    <div class="flex flex-col items-center">
                        <div class="relative w-full max-w-xs mb-4">
                            <img src="/images/hand-transparent-shadow.webp" alt="Hand model" class="w-full h-auto">
                            <div id="diamond-overlay" class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <img src="/images/diamonds/round.png" alt="Diamond" class="w-8 transition-all duration-300">
                            </div>
                        </div>
                        <div class="w-full max-w-xs">
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700">Diamond Size:</span>
                                <span id="carat-display" class="text-sm font-bold text-primary">2.0 carats</span>
                            </div>
                            <input type="range" min="0.5" max="8.0" step="0.1" value="2.0" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer diamond-slider" id="diamond-size-slider">
                            <div class="flex justify-between text-xs text-gray-500 mt-1">
                                <span>0.5ct</span>
                                <span>8ct</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Virtual Try On -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Virtual Try On</h3>
                    <p class="text-sm text-gray-600 mb-4">See how this ring looks on your hand before you buy</p>
                    <button onclick="openTryOn()" class="w-full bg-primary hover:bg-primary-dark text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                        </svg>
                        Try It On Virtually
                    </button>
                </div>
            </div>

            <!-- Right Column - Product Details -->
            <div class="w-full lg:w-1/2">
                <!-- Product Header -->
                <div class="mb-6">
                    <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">The Trellis Three Stone Emerald Engagement Ring</h1>
                    <div class="flex items-center mb-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        <span class="ml-2 text-sm text-gray-600">(24 reviews)</span>
                    </div>
                    <p class="text-2xl font-bold text-primary mb-4">Starting at CA $10,000</p>
                    <p class="text-gray-600">Customize your perfect engagement ring with our selection of diamonds and settings</p>
                </div>

                <!-- Customization Options -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <!-- Diamond Shape -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3">Diamond Shape</h3>
                        <div class="grid grid-cols-5 gap-3">
                            <div class="flex flex-col items-center cursor-pointer group">
                                <div class="w-12 h-12 p-2 rounded-full border-2 border-gray-200 group-hover:border-primary transition-colors duration-200 flex items-center justify-center">
                                    <img src="https://roayadiamond.com/Shape/round.svg" alt="Round" class="w-full h-full">
                                </div>
                                <span class="mt-1 text-sm text-gray-700">Round</span>
                            </div>
                            <div class="flex flex-col items-center cursor-pointer group">
                                <div class="w-12 h-12 p-2 rounded-full border-2 border-gray-200 group-hover:border-primary transition-colors duration-200 flex items-center justify-center">
                                    <img src="https://roayadiamond.com/Shape/oval.svg" alt="Oval" class="w-full h-full">
                                </div>
                                <span class="mt-1 text-sm text-gray-700">Oval</span>
                            </div>
                            <div class="flex flex-col items-center cursor-pointer group">
                                <div class="w-12 h-12 p-2 rounded-full border-2 border-gray-200 group-hover:border-primary transition-colors duration-200 flex items-center justify-center">
                                    <img src="https://roayadiamond.com/Shape/emerald.svg" alt="Emerald" class="w-full h-full">
                                </div>
                                <span class="mt-1 text-sm text-gray-700">Emerald</span>
                            </div>
                            <div class="flex flex-col items-center cursor-pointer group">
                                <div class="w-12 h-12 p-2 rounded-full border-2 border-gray-200 group-hover:border-primary transition-colors duration-200 flex items-center justify-center">
                                    <img src="https://roayadiamond.com/Shape/princess.svg" alt="Princess" class="w-full h-full">
                                </div>
                                <span class="mt-1 text-sm text-gray-700">Princess</span>
                            </div>
                            <div class="flex flex-col items-center cursor-pointer group">
                                <div class="w-12 h-12 p-2 rounded-full border-2 border-gray-200 group-hover:border-primary transition-colors duration-200 flex items-center justify-center">
                                    <img src="https://roayadiamond.com/Shape/cushion.svg" alt="Cushion" class="w-full h-full">
                                </div>
                                <span class="mt-1 text-sm text-gray-700">Cushion</span>
                            </div>
                        </div>
                    </div>

                    <!-- Metal Type -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3">Metal Type</h3>
                        <div class="grid grid-cols-4 gap-3">
                            <div class="flex flex-col items-center cursor-pointer group">
                                <div class="w-12 h-12 rounded-full border-2 border-gray-200 group-hover:border-primary transition-colors duration-200 overflow-hidden">
                                    <img src="https://roayadiamond.com/images/color/platinum.png" alt="Platinum" class="w-full h-full object-cover">
                                </div>
                                <span class="mt-1 text-sm text-gray-700">Platinum</span>
                            </div>
                            <div class="flex flex-col items-center cursor-pointer group">
                                <div class="w-12 h-12 rounded-full border-2 border-gray-200 group-hover:border-primary transition-colors duration-200 overflow-hidden">
                                    <img src="https://roayadiamond.com/images/color/gold.png" alt="Gold" class="w-full h-full object-cover">
                                </div>
                                <span class="mt-1 text-sm text-gray-700">18K Gold</span>
                            </div>
                            <div class="flex flex-col items-center cursor-pointer group">
                                <div class="w-12 h-12 rounded-full border-2 border-gray-200 group-hover:border-primary transition-colors duration-200 overflow-hidden">
                                    <img src="https://roayadiamond.com/images/color/rose-gold.png" alt="Rose Gold" class="w-full h-full object-cover">
                                </div>
                                <span class="mt-1 text-sm text-gray-700">Rose Gold</span>
                            </div>
                            <div class="flex flex-col items-center cursor-pointer group">
                                <div class="w-12 h-12 rounded-full border-2 border-gray-200 group-hover:border-primary transition-colors duration-200 overflow-hidden">
                                    <img src="https://roayadiamond.com/images/color/silver.png" alt="White Gold" class="w-full h-full object-cover">
                                </div>
                                <span class="mt-1 text-sm text-gray-700">White Gold</span>
                            </div>
                        </div>
                    </div>

                    <!-- Ring Size -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3">Ring Size</h3>
                        <div class="relative">
                            <select class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-primary">
                                <option>Select your ring size</option>
                                <option>Size 4 (US)</option>
                                <option>Size 5 (US)</option>
                                <option>Size 6 (US)</option>
                                <option>Size 7 (US)</option>
                                <option>Size 8 (US)</option>
                                <option>Not sure? Help me find my size</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="space-y-3 mb-6">
                    <button class="w-full bg-primary hover:bg-primary-dark text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200">
                        Select Your Diamond
                    </button>
                    <button class="w-full bg-white border border-primary text-primary hover:bg-gray-50 font-medium py-3 px-4 rounded-lg transition-colors duration-200">
                        Book a Virtual Consultation
                    </button>
                </div>

                <!-- Product Highlights -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Product Highlights</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-primary mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Made-to-order. Ships within 2-3 weeks</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-primary mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Lifetime warranty and value guarantee</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-primary mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Free shipping and returns</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-5 w-5 text-primary mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Ethically sourced materials</span>
                        </li>
                    </ul>
                </div>

                <!-- Save for Later -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Need more time to decide?</h3>
                    <p class="text-gray-600 mb-4">Email this piece to yourself or share with someone special</p>
                    <div class="flex flex-col space-y-3">
                        <input type="email" placeholder="Your email address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary">
                        <button class="w-full bg-gray-800 hover:bg-gray-900 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200">
                            Send Email
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details Tabs -->
    <div class="container mx-auto px-4 md:px-8 lg:px-12 xl:px-16 2xl:px-24 py-12">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Tabs -->
            <div class="border-b border-gray-200">
                <nav class="flex -mb-px">
                    <button class="py-4 px-6 text-center border-b-2 font-medium text-sm border-primary text-primary">
                        Product Details
                    </button>
                    <button class="py-4 px-6 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        Specifications
                    </button>
                    <button class="py-4 px-6 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        Shipping & Returns
                    </button>
                    <button class="py-4 px-6 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        Reviews (24)
                    </button>
                </nav>
            </div>
            
            <!-- Tab Content -->
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">The Trellis Three Stone Details</h3>
                <p class="text-gray-700 mb-6">
                    A contemporary take on our beloved Three Stone setting, the Trellis Three Stone engagement ring highlights your center diamond with two matching 0.25ct side stones for undeniable brilliance. With curved, interwoven prongs and our signature low-set sling, our elegantly crafted Trellis setting beautifully and securely connects this dazzling diamond trio.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h4 class="font-medium text-gray-800 mb-2">Dimensions</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex justify-between">
                                <span>Band width</span>
                                <span>2.2mm</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Band depth</span>
                                <span>1.6mm</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Setting height</span>
                                <span>6.5mm</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-800 mb-2">Materials</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex justify-between">
                                <span>Metal weight (size 6)</span>
                                <span>6.17g</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Pavé carat weight</span>
                                <span>0.17ctw</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Shown with</span>
                                <span>1.5ct center</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="border-t border-gray-200 pt-6">
                    <h4 class="font-medium text-gray-800 mb-3">Care Instructions</h4>
                    <p class="text-gray-700 mb-4">
                        To maintain the brilliance of your diamond, clean it regularly with a soft toothbrush and mild soap in warm water. Avoid harsh chemicals and remove your ring when swimming, cleaning, or applying lotions.
                    </p>
                    <p class="text-gray-700">
                        We recommend annual professional inspections to ensure the security of your stones and the integrity of your setting.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <div class="bg-gray-50 py-12">
        <div class="container mx-auto px-4 md:px-8 lg:px-12 xl:px-16 2xl:px-24">
            <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">You May Also Like</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative">
                        <img src="https://roayadiamond.com/images/1.jpg" alt="The Twist Band" class="w-full h-64 object-cover">
                        <div class="absolute top-2 right-2">
                            <button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-800 mb-1">The Twist Band</h3>
                        <p class="text-gray-600 text-sm mb-2">A modern twist on a classic design</p>
                        <p class="text-primary font-semibold">From $800</p>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative">
                        <img src="https://roayadiamond.com/images/2.jpg" alt="The Petal Crown Band" class="w-full h-64 object-cover">
                        <div class="absolute top-2 right-2">
                            <button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-800 mb-1">The Petal Crown Band</h3>
                        <p class="text-gray-600 text-sm mb-2">Delicate floral-inspired design</p>
                        <p class="text-primary font-semibold">From $800</p>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative">
                        <img src="https://roayadiamond.com/images/3.jpg" alt="The Round Solitaire" class="w-full h-64 object-cover">
                        <div class="absolute top-2 right-2">
                            <button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-800 mb-1">The Round Solitaire</h3>
                        <p class="text-gray-600 text-sm mb-2">Timeless elegance</p>
                        <p class="text-primary font-semibold">From $600</p>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="relative">
                        <img src="https://roayadiamond.com/images/4.jpg" alt="The Eternity Band" class="w-full h-64 object-cover">
                        <div class="absolute top-2 right-2">
                            <button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-800 mb-1">The Eternity Band</h3>
                        <p class="text-gray-600 text-sm mb-2">Continuous circle of diamonds</p>
                        <p class="text-primary font-semibold">From $900</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Design CTA -->
    <div class="relative bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4 md:px-8 lg:px-12 xl:px-16 2xl:px-24">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl font-bold mb-4">Create Your Dream Ring</h2>
                    <p class="text-lg text-gray-300 mb-6">
                        If you're not seeing exactly what you have in mind, our Diamond Experts will help you design a completely custom engagement ring featuring Roaya created diamonds.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-primary hover:bg-primary-dark text-white font-medium py-3 px-6 rounded-lg transition-colors duration-200">
                            Start Custom Design
                        </button>
                        <button class="bg-transparent border border-white hover:bg-white hover:text-gray-900 text-white font-medium py-3 px-6 rounded-lg transition-colors duration-200">
                            Book a Consultation
                        </button>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <img src="https://roayadiamond.com/images/custom-jewellery.png" alt="Custom Jewelry Design" class="rounded-lg shadow-xl w-full h-auto">
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-white py-12">
        <div class="container mx-auto px-4 md:px-8 lg:px-12 xl:px-16 2xl:px-24">
            <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Frequently Asked Questions</h2>
            <div class="max-w-3xl mx-auto space-y-4">
                <!-- FAQ Item 1 -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <button class="w-full flex justify-between items-center p-4 text-left font-medium text-gray-800 hover:bg-gray-50 transition-colors duration-200">
                        <span>What is the difference between natural and Roaya created diamonds?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="p-4 pt-0 text-gray-700 hidden">
                        <p>Roaya created diamonds are chemically, physically, and optically identical to mined diamonds, but are grown in a controlled laboratory environment using advanced technological processes. This allows us to offer diamonds of exceptional quality with complete transparency about their origin, at a more accessible price point than mined diamonds.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <button class="w-full flex justify-between items-center p-4 text-left font-medium text-gray-800 hover:bg-gray-50 transition-colors duration-200">
                        <span>How do I know what ring size to order?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="p-4 pt-0 text-gray-700 hidden">
                        <p>We offer a free ring sizing kit that you can request during checkout. Alternatively, you can visit any local jeweler to have your finger professionally sized. If you're between sizes, we recommend sizing up as it's easier to adjust a slightly large ring than one that's too small.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <button class="w-full flex justify-between items-center p-4 text-left font-medium text-gray-800 hover:bg-gray-50 transition-colors duration-200">
                        <span>What is your return policy?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="p-4 pt-0 text-gray-700 hidden">
                        <p>We offer a 30-day return policy for all non-customized items. Custom and engraved pieces are final sale. Returns are free of charge and must be in original condition with all packaging and certificates. Please contact our customer service team to initiate a return.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <button class="w-full flex justify-between items-center p-4 text-left font-medium text-gray-800 hover:bg-gray-50 transition-colors duration-200">
                        <span>How do I care for my diamond jewelry?</span>
                        <svg class="w-5 h-5 text-gray-500 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="p-4 pt-0 text-gray-700 hidden">
                        <p>Clean your diamond jewelry regularly with a soft toothbrush and mild soap in warm water. Avoid harsh chemicals and remove your jewelry when swimming, cleaning, or applying lotions. We recommend annual professional inspections to ensure the security of your stones and the integrity of your setting.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Virtual Try On Modal -->
    <div id="tryOnModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Virtual Try On</h3>
                                <button onclick="closeTryOn()" class="text-gray-400 hover:text-gray-500">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            
                            <!-- Try On Options -->
                            <div id="tryOnOptions" class="space-y-4">
                                <p class="text-sm text-gray-500">Choose how you'd like to try on your ring:</p>
                                <button onclick="showUploadOption()" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 text-left flex items-center hover:border-primary transition-colors duration-200">
                                    <svg class="w-6 h-6 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                    <span>Upload a photo</span>
                                </button>
                                <button onclick="showCameraOption()" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 text-left flex items-center hover:border-primary transition-colors duration-200">
                                    <svg class="w-6 h-6 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <span>Use your camera</span>
                                </button>
                            </div>
                            
                            <!-- Upload Option -->
                            <div id="uploadSection" class="hidden">
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center mb-4">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                    <h4 class="mt-2 text-sm font-medium text-gray-900">Upload a photo of your hand</h4>
                                    <p class="mt-1 text-xs text-gray-500">For best results, take a photo with your palm facing down</p>
                                    <div class="mt-4">
                                        <label for="file-upload" class="cursor-pointer bg-primary hover:bg-primary-dark text-white font-medium py-2 px-4 rounded-md text-sm transition-colors duration-200">
                                            Select File
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only" accept="image/*" onchange="handleImageUpload(event)">
                                        </label>
                                    </div>
                                </div>
                                <div class="relative h-64 bg-gray-100 rounded-lg overflow-hidden">
                                    <img id="uploadedImage" src="" alt="Uploaded hand" class="absolute inset-0 w-full h-full object-contain hidden">
                                    <img id="jewelryOverlay" src="/images/1.jpg" alt="Ring overlay" class="absolute inset-0 w-32 h-auto object-contain hidden" style="transform: translate3d(0px, 0px, 0px);">
                                </div>
                                <div class="mt-4 text-sm text-gray-500">
                                    <p>Drag the ring to position it on your finger</p>
                                </div>
                            </div>
                            
                            <!-- Camera Option -->
                            <div id="cameraSection" class="hidden">
                                <div class="relative h-64 bg-gray-800 rounded-lg overflow-hidden mb-4">
                                    <video id="camera" autoplay playsinline class="w-full h-full object-cover"></video>
                                    <div id="capturePreview" class="absolute inset-0 hidden">
                                        <img id="capturedImage" src="" alt="Captured photo" class="w-full h-full object-cover">
                                        <img id="jewelryOverlayCam" src="/images/1.jpg" alt="Ring overlay" class="absolute w-32 h-auto object-contain" style="transform: translate3d(0px, 0px, 0px);">
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <button onclick="capturePhoto()" class="bg-primary hover:bg-primary-dark text-white font-medium py-2 px-6 rounded-full transition-colors duration-200 flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        Take Photo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" onclick="closeTryOn()" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-primary text-base font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:ml-3 sm:w-auto sm:text-sm transition-colors duration-200">
                        Done
                    </button>
                    <button type="button" onclick="resetTryOn()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm transition-colors duration-200">
                        Reset
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Image selection
        function selectJewelry(imageUrl) {
            document.getElementById('mainImage').src = imageUrl;
            document.getElementById('jewelryOverlay').src = imageUrl;
            document.getElementById('jewelryOverlayCam').src = imageUrl;
        }

        // Diamond size slider
        const slider = document.getElementById('diamond-size-slider');
        const diamond = document.querySelector('#diamond-overlay img');
        const caratDisplay = document.getElementById('carat-display');

        slider.addEventListener('input', function() {
            const value = parseFloat(this.value);
            caratDisplay.textContent = value.toFixed(1) + ' carats';
            const baseSize = 32;
            const newSize = (baseSize * Math.sqrt(value / 2));
            diamond.style.width = `${newSize}px`;
        });

        // Mobile diamond size slider
        const mobileSlider = document.getElementById('mobile-diamond-size-slider');
        const mobileDiamond = document.querySelector('#mobile-diamond-overlay img');
        const mobileCaratDisplay = document.getElementById('mobile-carat-display');

        if (mobileSlider && mobileDiamond && mobileCaratDisplay) {
            mobileSlider.addEventListener('input', function() {
                const value = parseFloat(this.value);
                mobileCaratDisplay.textContent = value.toFixed(1) + ' carats';
                const baseSize = 32;
                const newSize = (baseSize * Math.sqrt(value / 2));
                mobileDiamond.style.width = `${newSize}px`;
            });
        }

        // Virtual Try On functionality
        let isDragging = false;
        let currentX;
        let currentY;
        let initialX;
        let initialY;
        let xOffset = 0;
        let yOffset = 0;

        function openTryOn() {
            document.getElementById('tryOnModal').classList.remove('hidden');
        }

        function showUploadOption() {
            document.getElementById('uploadSection').classList.remove('hidden');
            document.getElementById('cameraSection').classList.add('hidden');
            document.getElementById('tryOnOptions').classList.add('hidden');
        }

        function showCameraOption() {
            document.getElementById('cameraSection').classList.remove('hidden');
            document.getElementById('uploadSection').classList.add('hidden');
            document.getElementById('tryOnOptions').classList.add('hidden');

            navigator.mediaDevices.getUserMedia({ video: true })
                .then(stream => {
                    document.getElementById('camera').srcObject = stream;
                })
                .catch(err => {
                    console.error('Error accessing camera:', err);
                    alert('Unable to access camera. Please ensure you have granted camera permissions.');
                });
        }

        function handleImageUpload(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const uploadedImage = document.getElementById('uploadedImage');
                    uploadedImage.src = e.target.result;
                    uploadedImage.style.display = 'block';

                    const jewelryOverlay = document.getElementById('jewelryOverlay');
                    jewelryOverlay.src = document.getElementById('mainImage').src;
                    jewelryOverlay.style.display = 'block';

                    // Reset position
                    xOffset = 0;
                    yOffset = 0;
                    setTranslate(0, 0, jewelryOverlay);

                    // Add drag events
                    jewelryOverlay.addEventListener('mousedown', dragStart);
                    jewelryOverlay.addEventListener('touchstart', dragStart);
                };
                reader.readAsDataURL(file);
            }
        }

        function capturePhoto() {
            const video = document.getElementById('camera');
            const canvas = document.createElement('canvas');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext('2d').drawImage(video, 0, 0);

            document.getElementById('capturedImage').src = canvas.toDataURL('image/png');
            document.getElementById('capturePreview').classList.remove('hidden');
            document.getElementById('camera').style.display = 'none';

            const jewelryOverlay = document.getElementById('jewelryOverlayCam');
            jewelryOverlay.src = document.getElementById('mainImage').src;
            jewelryOverlay.style.display = 'block';

            // Reset position
            xOffset = 0;
            yOffset = 0;
            setTranslate(0, 0, jewelryOverlay);

            // Add drag events
            jewelryOverlay.addEventListener('mousedown', dragStart);
            jewelryOverlay.addEventListener('touchstart', dragStart);
        }

        function dragStart(e) {
            if (e.type === "touchstart") {
                initialX = e.touches[0].clientX - xOffset;
                initialY = e.touches[0].clientY - yOffset;
            } else {
                initialX = e.clientX - xOffset;
                initialY = e.clientY - yOffset;
            }

            if (e.target === document.getElementById('jewelryOverlay') ||
                e.target === document.getElementById('jewelryOverlayCam')) {
                isDragging = true;
            }

            document.addEventListener('mousemove', drag);
            document.addEventListener('touchmove', drag);
            document.addEventListener('mouseup', dragEnd);
            document.addEventListener('touchend', dragEnd);
        }

        function drag(e) {
            if (isDragging) {
                e.preventDefault();

                if (e.type === "touchmove") {
                    currentX = e.touches[0].clientX - initialX;
                    currentY = e.touches[0].clientY - initialY;
                } else {
                    currentX = e.clientX - initialX;
                    currentY = e.clientY - initialY;
                }

                xOffset = currentX;
                yOffset = currentY;

                setTranslate(currentX, currentY, document.getElementById('jewelryOverlay'));
                setTranslate(currentX, currentY, document.getElementById('jewelryOverlayCam'));
            }
        }

        function setTranslate(xPos, yPos, el) {
            if (el && el.style) {
                el.style.transform = `translate3d(${xPos}px, ${yPos}px, 0)`;
            }
        }

        function dragEnd() {
            initialX = currentX;
            initialY = currentY;
            isDragging = false;

            document.removeEventListener('mousemove', drag);
            document.removeEventListener('touchmove', drag);
            document.removeEventListener('mouseup', dragEnd);
            document.removeEventListener('touchend', dragEnd);
        }

        function resetTryOn() {
            xOffset = 0;
            yOffset = 0;
            setTranslate(0, 0, document.getElementById('jewelryOverlay'));
            setTranslate(0, 0, document.getElementById('jewelryOverlayCam'));
        }

        function closeTryOn() {
            document.getElementById('tryOnModal').classList.add('hidden');
            document.getElementById('uploadSection').classList.add('hidden');
            document.getElementById('cameraSection').classList.add('hidden');
            document.getElementById('tryOnOptions').classList.remove('hidden');

            // Reset camera if active
            const camera = document.getElementById('camera');
            if (camera.srcObject) {
                camera.srcObject.getTracks().forEach(track => track.stop());
            }

            // Reset preview sections
            document.getElementById('uploadedImage').style.display = 'none';
            document.getElementById('jewelryOverlay').style.display = 'none';
            document.getElementById('capturePreview').classList.add('hidden');
            document.getElementById('camera').style.display = 'block';
            document.getElementById('jewelryOverlayCam').style.display = 'none';
        }

        // FAQ accordion functionality
        document.querySelectorAll('.border-gray-200 button').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const isOpen = content.classList.contains('hidden');
                
                // Close all other items
                document.querySelectorAll('.border-gray-200 div').forEach(item => {
                    if (item !== content) {
                        item.classList.add('hidden');
                        item.previousElementSibling.querySelector('svg').classList.remove('rotate-180');
                    }
                });
                
                // Toggle current item
                if (isOpen) {
                    content.classList.remove('hidden');
                    button.querySelector('svg').classList.add('rotate-180');
                } else {
                    content.classList.add('hidden');
                    button.querySelector('svg').classList.remove('rotate-180');
                }
            });
        });
    </script>

    <style>
        .diamond-slider {
            -webkit-appearance: none;
            height: 4px;
            background: #d1d5db;
            border-radius: 5px;
            outline: none;
        }

        .diamond-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 18px;
            height: 18px;
            background: #301914;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .diamond-slider::-moz-range-thumb {
            width: 18px;
            height: 18px;
            background: #301914;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #diamond-overlay {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        #jewelryOverlay, #jewelryOverlayCam {
            cursor: move;
            z-index: 20;
        }

        .rotate-180 {
            transform: rotate(180deg);
        }
    </style>
</main>


@endsection