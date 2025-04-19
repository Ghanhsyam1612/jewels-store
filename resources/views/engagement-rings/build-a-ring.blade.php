@extends('layouts.master')

@section('content')
    <div class="w-full mb-10 bg-white">
        <!-- Breadcrumb Navigation - Refined -->
        <nav class="flex items-center text-sm font-montserrat mb-4 px-4 md:px-8 lg:px-12 2xl:px-28 3xl:px-40 py-6 border-b border-gray-100">
            <a href="/" class="text-gray-600 text-xs lg:text-sm font-medium hover:text-gold transition duration-300">Home</a>
            <svg class="w-3 h-3 mx-2 text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" fill="currentColor"></path>
            </svg>
            <span class="text-gold text-xs lg:text-sm font-medium">Engagement Rings</span>
        </nav>

        <!-- Page Header - Elegant with animation -->
        <div class="flex flex-col items-center justify-center px-4 md:px-8 lg:px-16 2xl:px-32 3xl:px-40 my-8 lg:my-16 fade-in">
            <h2 class="text-2xl text-gray-800 lg:text-4xl font-montserrat font-semibold mb-4 relative">
                Engagement Rings
                <span class="block h-1 w-16 bg-gold absolute -bottom-2 left-1/2 transform -translate-x-1/2"></span>
            </h2>
            <p class="text-sm text-gray-600 lg:text-base font-montserrat text-center max-w-3xl mt-4">
                Indication of promising relation for infinity. Engagement rings designate if a person is tied in a bond of love and marriage, where they prevail
                to adore their relationship through a means of token designers, especially for love.
            </p>
        </div>

        <!-- Start Stepper Bar -->
        <div class="my-10 px-4 lg:px-20 xl:px-32 2xl:px-40">
            <!-- Desktop Stepper - Visible on large screens -->
            <div class="hidden md:flex relative h-20">
                <!-- Step 1: BUILD YOUR RING -->
                <div class="bg-gold clip-arrow-right text-white flex items-center justify-center w-full font-bold md:text-md lg:text-lg uppercase tracking-wider shadow-md z-40">
                    BUILD YOUR RING
                </div>
                
                <!-- Step 2: CHOOSE SETTING -->
                <div class="bg-blue-200 clip-arrow-right flex items-center px-6 w-full -ml-8 shadow-md z-30 hover:bg-blue-300 transition-colors duration-200 cursor-pointer group">
                    <div class="flex items-center w-full pl-8">
                        <span class="text-3xl font-bold text-gray-800 mr-4">1</span>
                        <div class="flex flex-col">
                            <span class="text-gray-600 text-sm">Choose a</span>
                            <span class="uppercase font-bold text-gray-800 group-hover:text-black">SETTING</span>
                        </div>
                        <svg class="w-6 h-6 ml-auto text-gray-700" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12,10L8,4.4L9.6,2h4.8L16,4.4L12,10z M15.5,6.8L14.3,8.5C16.5,9.4,18,11.5,18,14c0,3.3-2.7,6-6,6s-6-2.7-6-6c0-2.5,1.5-4.6,3.7-5.5L8.5,6.8C5.8,8.3,4,10.9,4,14c0,4.4,3.6,8,8,8s8-3.6,8-8C20,10.9,18.2,8.3,15.5,6.8z"/>
                        </svg>
                    </div>
                </div>
                
                <!-- Step 3: CHOOSE DIAMOND -->
                <div class="bg-blue-100 clip-arrow-right flex items-center px-6 w-full -ml-8 shadow-md z-20 hover:bg-blue-200 transition-colors duration-200 cursor-pointer group">
                    <div class="flex items-center w-full pl-8">
                        <span class="text-3xl font-bold text-gray-800 mr-4">2</span>
                        <div class="flex flex-col">
                            <span class="text-gray-600 text-sm">Choose a</span>
                            <span class="uppercase font-bold text-gray-800 group-hover:text-black">DIAMOND</span>
                        </div>
                        <svg class="w-8 h-8 ml-auto text-gray-700" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  .st0{fill:#000000;}  </style> <g> <path class="st0" d="M262.203,224.297H257.5h-99.469L78.672,333.438L260.719,512l7.5-7.359L442.75,333.438l-79.344-109.141H262.203 z M345.813,245.75l-14.656,65.109l-51.859-65.109H345.813z M259.984,251.953l56.422,70.797H204.766L259.984,251.953z M240.75,245.75l-50.563,64.844v0.016l-14.563-64.859H240.75z M159.188,259.156L159.188,259.156l14.297,63.594h-60.547 L159.188,259.156z M179.25,341.75l50.063,109.422L117.75,341.75H179.25z M260.719,474.172L200.125,341.75h121.172L260.719,474.172z M292.109,451.172l50.063-109.422h61.484L292.109,451.172z M347.938,322.75l14.313-63.594l0,0l46.234,63.594H347.938z"></path> <path class="st0" d="M501.219,181.906c-25.906,0-34.859-6.5-39.906-11.531c-5.016-5.047-11.531-14-11.531-39.906 c0-0.984-0.094-3.781-3.188-3.781c-3.078,0-3.188,2.797-3.188,3.781c0,25.906-6.516,34.859-11.547,39.906 c-5.047,5.031-14.016,11.531-39.891,11.531c-1,0-3.781,0.109-3.781,3.203c0,3.078,2.781,3.188,3.781,3.188 c25.875,0,34.844,6.516,39.891,11.547c5.031,5.031,11.547,14,11.547,39.906c0,1,0.109,3.766,3.188,3.766 c3.094,0,3.188-2.766,3.188-3.766c0-25.906,6.516-34.875,11.531-39.906c5.047-5.047,14-11.547,39.906-11.547 c1,0,3.781-0.094,3.781-3.203C505,182.031,502.219,181.906,501.219,181.906z"></path> <path class="st0" d="M115.891,84.656c35.609,0,47.922,8.969,54.844,15.875c6.922,6.922,15.859,19.25,15.859,54.859 c0,1.359,0.188,5.172,4.406,5.172c4.25,0,4.375-3.813,4.375-5.172c0-35.609,8.953-47.938,15.875-54.859 c6.906-6.922,19.219-15.875,54.844-15.875c1.359,0,5.188-0.125,5.188-4.375c0-4.219-3.828-4.406-5.188-4.406 c-35.625,0-47.938-8.938-54.844-15.844c-6.922-6.938-15.875-19.234-15.875-54.844C195.375,3.828,195.25,0,191,0 c-4.219,0-4.406,3.828-4.406,5.188c0,35.609-8.938,47.906-15.859,54.844c-6.922,6.906-19.234,15.844-54.844,15.844 c-1.359,0-5.188,0.172-5.188,4.406C110.703,84.5,114.531,84.656,115.891,84.656z"></path> <path class="st0" d="M114.453,196c0-2.828-2.563-2.938-3.469-2.938c-23.828,0-32.078-5.984-36.703-10.609 c-4.625-4.641-10.625-12.875-10.625-36.703c0-0.906-0.094-3.469-2.938-3.469c-2.813,0-2.938,2.563-2.938,3.469 c0,23.828-5.984,32.063-10.609,36.703c-4.641,4.625-12.891,10.609-36.703,10.609C9.547,193.063,7,193.172,7,196 s2.547,2.938,3.469,2.938c23.813,0,32.063,6,36.703,10.625c4.625,4.625,10.609,12.875,10.609,36.719 c0,0.906,0.125,3.453,2.938,3.453c2.844,0,2.938-2.547,2.938-3.453c0-23.844,6-32.094,10.625-36.719 c4.625-4.641,12.875-10.625,36.703-10.625C111.891,198.938,114.453,198.844,114.453,196z"></path> </g> </g></svg>
                    </div>
                </div>
                
                <!-- Step 4: COMPLETE RING -->
                <div class="bg-gray-100 clip-last flex items-center px-6 w-full -ml-8 shadow-md z-10 hover:bg-gray-200 transition-colors duration-200 cursor-pointer group">
                    <div class="flex items-center w-full pl-8">
                        <span class="text-3xl font-bold text-gray-800 mr-4">3</span>
                        <div class="flex flex-col">
                            <span class="text-gray-600 text-sm">Complete</span>
                            <span class="uppercase font-bold text-gray-800 group-hover:text-black">RING</span>
                        </div>
                        <svg class="w-6 h-6 ml-auto text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Mobile Stepper - Visible on small screens -->
            <div class="md:hidden">
                <div class="bg-gold text-white py-3 px-4 text-center font-bold text-lg uppercase tracking-wider shadow-md rounded-t-md">
                    BUILD YOUR RING
                </div>
                
                <div class="flex flex-col divide-y divide-gray-200 border border-gray-200 rounded-b-md shadow-sm">
                    <!-- Step 1: CHOOSE SETTING -->
                    <div class="flex items-center p-4 bg-blue-50 cursor-pointer hover:bg-blue-100 transition-colors duration-200">
                        <div class="flex-shrink-0 bg-blue-200 rounded-full w-10 h-10 flex items-center justify-center mr-4">
                            <span class="text-lg font-bold text-gray-800">1</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600 text-xs">Choose a</span>
                            <span class="uppercase font-bold text-gray-800 text-sm">SETTING</span>
                        </div>
                        <svg class="w-5 h-5 ml-auto text-gray-700" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12,10L8,4.4L9.6,2h4.8L16,4.4L12,10z M15.5,6.8L14.3,8.5C16.5,9.4,18,11.5,18,14c0,3.3-2.7,6-6,6s-6-2.7-6-6c0-2.5,1.5-4.6,3.7-5.5L8.5,6.8C5.8,8.3,4,10.9,4,14c0,4.4,3.6,8,8,8s8-3.6,8-8C20,10.9,18.2,8.3,15.5,6.8z"/>
                        </svg>
                    </div>
                    
                    <!-- Step 2: CHOOSE DIAMOND -->
                    <div class="flex items-center p-4 cursor-pointer hover:bg-gray-50 transition-colors duration-200">
                        <div class="flex-shrink-0 bg-gray-200 rounded-full w-10 h-10 flex items-center justify-center mr-4">
                            <span class="text-lg font-bold text-gray-800">2</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600 text-xs">Choose a</span>
                            <span class="uppercase font-bold text-gray-800 text-sm">DIAMOND</span>
                        </div>
                        <svg class="w-8 h-8 ml-auto text-gray-700" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  .st0{fill:#000000;}  </style> <g> <path class="st0" d="M262.203,224.297H257.5h-99.469L78.672,333.438L260.719,512l7.5-7.359L442.75,333.438l-79.344-109.141H262.203 z M345.813,245.75l-14.656,65.109l-51.859-65.109H345.813z M259.984,251.953l56.422,70.797H204.766L259.984,251.953z M240.75,245.75l-50.563,64.844v0.016l-14.563-64.859H240.75z M159.188,259.156L159.188,259.156l14.297,63.594h-60.547 L159.188,259.156z M179.25,341.75l50.063,109.422L117.75,341.75H179.25z M260.719,474.172L200.125,341.75h121.172L260.719,474.172z M292.109,451.172l50.063-109.422h61.484L292.109,451.172z M347.938,322.75l14.313-63.594l0,0l46.234,63.594H347.938z"></path> <path class="st0" d="M501.219,181.906c-25.906,0-34.859-6.5-39.906-11.531c-5.016-5.047-11.531-14-11.531-39.906 c0-0.984-0.094-3.781-3.188-3.781c-3.078,0-3.188,2.797-3.188,3.781c0,25.906-6.516,34.859-11.547,39.906 c-5.047,5.031-14.016,11.531-39.891,11.531c-1,0-3.781,0.109-3.781,3.203c0,3.078,2.781,3.188,3.781,3.188 c25.875,0,34.844,6.516,39.891,11.547c5.031,5.031,11.547,14,11.547,39.906c0,1,0.109,3.766,3.188,3.766 c3.094,0,3.188-2.766,3.188-3.766c0-25.906,6.516-34.875,11.531-39.906c5.047-5.047,14-11.547,39.906-11.547 c1,0,3.781-0.094,3.781-3.203C505,182.031,502.219,181.906,501.219,181.906z"></path> <path class="st0" d="M115.891,84.656c35.609,0,47.922,8.969,54.844,15.875c6.922,6.922,15.859,19.25,15.859,54.859 c0,1.359,0.188,5.172,4.406,5.172c4.25,0,4.375-3.813,4.375-5.172c0-35.609,8.953-47.938,15.875-54.859 c6.906-6.922,19.219-15.875,54.844-15.875c1.359,0,5.188-0.125,5.188-4.375c0-4.219-3.828-4.406-5.188-4.406 c-35.625,0-47.938-8.938-54.844-15.844c-6.922-6.938-15.875-19.234-15.875-54.844C195.375,3.828,195.25,0,191,0 c-4.219,0-4.406,3.828-4.406,5.188c0,35.609-8.938,47.906-15.859,54.844c-6.922,6.906-19.234,15.844-54.844,15.844 c-1.359,0-5.188,0.172-5.188,4.406C110.703,84.5,114.531,84.656,115.891,84.656z"></path> <path class="st0" d="M114.453,196c0-2.828-2.563-2.938-3.469-2.938c-23.828,0-32.078-5.984-36.703-10.609 c-4.625-4.641-10.625-12.875-10.625-36.703c0-0.906-0.094-3.469-2.938-3.469c-2.813,0-2.938,2.563-2.938,3.469 c0,23.828-5.984,32.063-10.609,36.703c-4.641,4.625-12.891,10.609-36.703,10.609C9.547,193.063,7,193.172,7,196 s2.547,2.938,3.469,2.938c23.813,0,32.063,6,36.703,10.625c4.625,4.625,10.609,12.875,10.609,36.719 c0,0.906,0.125,3.453,2.938,3.453c2.844,0,2.938-2.547,2.938-3.453c0-23.844,6-32.094,10.625-36.719 c4.625-4.641,12.875-10.625,36.703-10.625C111.891,198.938,114.453,198.844,114.453,196z"></path> </g> </g></svg>
                    </div>
                    
                    <!-- Step 3: COMPLETE RING -->
                    <div class="flex items-center p-4 cursor-pointer hover:bg-gray-50 transition-colors duration-200">
                        <div class="flex-shrink-0 bg-gray-200 rounded-full w-10 h-10 flex items-center justify-center mr-4">
                            <span class="text-lg font-bold text-gray-800">3</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600 text-xs">Complete</span>
                            <span class="uppercase font-bold text-gray-800 text-sm">RING</span>
                        </div>
                        <svg class="w-5 h-5 ml-auto text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </div>
            </div>
</div>
        </div>
        
        <script>
            // Add active state functionality
            document.addEventListener('DOMContentLoaded', function() {
                // Desktop stepper functionality
                const desktopSteps = document.querySelectorAll('.hidden.md\\:flex .clip-arrow-right:not(:first-child), .hidden.md\\:flex .clip-last');
                
                desktopSteps.forEach(step => {
                    step.addEventListener('click', function() {
                        // Remove active from all steps
                        desktopSteps.forEach(s => {
                            s.classList.remove('bg-blue-300', 'bg-blue-200', 'bg-gray-100');
                            if (s.classList.contains('clip-arrow-right') && !s.classList.contains('bg-gold')) {
                                s.classList.add('bg-blue-100');
                            } else if (s.classList.contains('clip-last')) {
                                s.classList.add('bg-white');
                            }
                        });
                        
                        // Add active to clicked step
                        if (this.classList.contains('clip-arrow-right') && !this.classList.contains('bg-gold')) {
                            this.classList.remove('bg-blue-100');
                            this.classList.add('bg-blue-300');
                        } else if (this.classList.contains('clip-last')) {
                            this.classList.remove('bg-white');
                            this.classList.add('bg-gray-100');
                        }
                    });
                });
                
                // Mobile stepper functionality
                const mobileSteps = document.querySelectorAll('.md\\:hidden .flex.items-center.p-4');
                
                mobileSteps.forEach((step, index) => {
                    step.addEventListener('click', function() {
                        // Remove active from all steps
                        mobileSteps.forEach(s => {
                            s.classList.remove('bg-blue-50');
                            s.querySelector('.flex-shrink-0').classList.remove('bg-blue-200');
                            s.querySelector('.flex-shrink-0').classList.add('bg-gray-200');
                        });
                        
                        // Add active to clicked step
                        this.classList.add('bg-blue-50');
                        this.querySelector('.flex-shrink-0').classList.remove('bg-gray-200');
                        this.querySelector('.flex-shrink-0').classList.add('bg-blue-200');
                    });
                    
                    // Set first step as active by default
                    if (index === 0) {
                        step.classList.add('bg-blue-50');
                        step.querySelector('.flex-shrink-0').classList.remove('bg-gray-200');
                        step.querySelector('.flex-shrink-0').classList.add('bg-blue-200');
                    }
                });
            });
        </script>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap');
            
            /* Custom shapes that can't be done with pure Tailwind */
            .clip-arrow-right {
                clip-path: polygon(0% 0%, 95% 0%, 100% 50%, 95% 100%, 0% 100%);
            }
            
            .clip-last {
                clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
            }
        </style>
        <!-- End Stepper Bar -->

        <!-- Filter and Results Section -->
        <div class="mx-4 lg:mx-20 xl:mx-32 2xl:mx-40">
            {{-- Mobile Filter Dropdown --}}
            <div class="flex flex-row gap-3 lg:gap-5 lg:hidden items-center justify-between py-5 border-b border-gray-200 overflow-x-auto">
                <!-- Mobile filters remain unchanged -->
            </div>
            
            <!-- Desktop Filters - NEW SECTION -->
            <div class="hidden lg:flex justify-end items-center py-5 border-b border-gray-200">

                <!-- Sort By -->
                <div class="relative">
                    <button id="sortByBtn" class="flex items-center space-x-2 text-gray-800 hover:text-gold transition-colors duration-300">
                        <span class="font-montserrat font-medium">Sort By: <span class="text-gold">Featured</span></span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="sortByDropdown" class="hidden absolute right-0 z-50 mt-2 w-48 bg-white rounded-md shadow-lg py-2 transition-all duration-300 border border-gray-100">
                        <a href="#" class="block px-4 py-2 font-montserrat text-sm text-gray-800 hover:bg-gray-50 hover:text-gold transition-colors duration-300">Featured</a>
                        <a href="#" class="block px-4 py-2 font-montserrat text-sm text-gray-800 hover:bg-gray-50 hover:text-gold transition-colors duration-300">Price: Low to High</a>
                        <a href="#" class="block px-4 py-2 font-montserrat text-sm text-gray-800 hover:bg-gray-50 hover:text-gold transition-colors duration-300">Price: High to Low</a>
                        <a href="#" class="block px-4 py-2 font-montserrat text-sm text-gray-800 hover:bg-gray-50 hover:text-gold transition-colors duration-300">Newest</a>
                        <a href="#" class="block px-4 py-2 font-montserrat text-sm text-gray-800 hover:bg-gray-50 hover:text-gold transition-colors duration-300">Best Selling</a>
                    </div>
                </div>
            </div>

            <!-- Results Counter -->
            <div class="py-4">
                <span class="text-sm font-montserrat text-gray-500">
                    Showing 1-20 of 100 results
                </span>
            </div>

            <!-- Product Grid - Redesigned with better spacing and hover effects -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 lg:gap-8 my-5">
                @foreach (range(1, 20) as $index)
                    <div class="flex flex-col items-center justify-center relative group">
                        @if ($index <= 5 || (auth()->check() && auth()->user()->is_member))
                            {{-- Regular Product Card --}}
                            <a href="/product" class="w-full block overflow-hidden transition-all duration-300 group">
                                {{-- Product Image Slider with quick-view option --}}
                                <div id="default-carousel-{{ $index }}" class="relative w-full overflow-hidden bg-gray-100 rounded-md group">
                                    <div class="relative h-64 md:h-full aspect-square overflow-hidden">
                                        <div class="block duration-700 ease-in-out" data-carousel-item>
                                            <img src="/images/1.jpg" 
                                                class="w-full h-full object-cover" 
                                                alt="...">
                                        </div>
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="/images/2.jpg"
                                                class="w-full h-full object-cover"
                                                alt="...">
                                        </div>
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="/images/3.jpg"
                                                class="w-full h-full object-cover"
                                                alt="...">
                                        </div>
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="/images/4.jpg"
                                                class="w-full h-full object-cover"
                                                alt="...">
                                        </div>
                                    </div>
                                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse opacity-0 transition-opacity duration-300 group-hover:opacity-100"
                                        id="carousel-indicators">
                                        <button type="button" class="w-2 h-2 rounded-full bg-white/50 hover:bg-white"
                                            aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                        <button type="button" class="w-2 h-2 rounded-full bg-white/50 hover:bg-white"
                                            aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                        <button type="button" class="w-2 h-2 rounded-full bg-white/50 hover:bg-white"
                                            aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                        <button type="button" class="w-2 h-2 rounded-full bg-white/50 hover:bg-white"
                                            aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                    </div>
                                    
                                    <!-- Wishlist button -->
                                    <button class="absolute top-3 right-3 bg-white rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-gold hover:text-white z-20">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                                
                                <!-- Product details with improved typography -->
                                <div class="mt-4 text-center">
                                    <h3 class="text-sm font-montserrat font-semibold text-gray-800 px-2 h-10 overflow-hidden group-hover:text-gold transition-colors duration-300">
                                        Adaya Asscher Solitaire Engagement Ring
                                    </h3>
                                    <div class="flex flex-row items-center justify-center gap-3 mt-2">
                                        <p class="text-gray-400 font-montserrat text-sm line-through">$2,999</p>
                                        <p class="text-gold font-montserrat font-semibold text-base">$2,499</p>
                                    </div>
                                    
                                    <!-- Rating stars -->
                                    <div class="flex items-center justify-center mt-2">
                                        <div class="flex items-center">
                                        <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <span class="text-xs text-gray-500 ml-1">(24)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @else
                            {{-- Locked Product Card with improved visuals --}}
                            <div class="relative w-full h-full">
                                <a href="{{ route('subscription.plans') }}" class="cursor-pointer block overflow-hidden rounded-md">
                                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center z-20 transition-all duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                        <span class="text-white font-montserrat text-sm font-medium">Members Only</span>
                                        <button class="mt-4 bg-gold text-white px-4 py-2 rounded text-sm font-montserrat hover:bg-gold/90 transition-colors duration-300">Join Now</button>
                                    </div>
                                    <div class="opacity-50">
                                        {{-- Product Image Slider (Blurred) --}}
                                        <div class="relative w-full">
                                            <div class="relative h-64 md:h-72 overflow-hidden bg-gray-100 rounded-md">
                                                <img src="/images/1.jpg" class="w-full h-full object-cover filter blur-sm" alt="...">
                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h3 class="text-sm font-montserrat font-semibold text-gray-600 px-3 h-10">
                                                Exclusive Member Product
                                            </h3>
                                            <div class="flex flex-row items-center justify-center gap-2 mt-2">
                                                <p class="text-gray-500 font-montserrat text-sm">Members Only</p>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </a>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            
            <!-- Pagination - NEW -->
            <div class="flex justify-center items-center my-12">
                <nav class="flex items-center space-x-1">
                    <a href="#" class="px-3 py-2 rounded-md border border-gray-300 text-gray-600 hover:bg-gray-50 hover:text-gold transition-colors duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </a>
                    <a href="#" class="px-4 py-2 rounded-md bg-gold text-white font-montserrat font-medium">1</a>
                    <a href="#" class="px-4 py-2 rounded-md text-gray-600 hover:bg-gray-50 hover:text-gold transition-colors duration-300 font-montserrat">2</a>
                    <a href="#" class="px-4 py-2 rounded-md text-gray-600 hover:bg-gray-50 hover:text-gold transition-colors duration-300 font-montserrat">3</a>
                    <a href="#" class="px-4 py-2 rounded-md text-gray-600 hover:bg-gray-50 hover:text-gold transition-colors duration-300 font-montserrat">4</a>
                    <a href="#" class="px-4 py-2 rounded-md text-gray-600 hover:bg-gray-50 hover:text-gold transition-colors duration-300 font-montserrat">5</a>
                    <a href="#" class="px-3 py-2 rounded-md border border-gray-300 text-gray-600 hover:bg-gray-50 hover:text-gold transition-colors duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Trust Badges Section - NEW -->
        <div class="bg-gray-50 py-12 mt-10">
            <div class="container mx-auto px-4 md:px-8 lg:px-12 2xl:px-28 3xl:px-40">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 mb-4 text-gold">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-montserrat font-semibold text-gray-800 mb-2">Quality Craftsmanship</h3>
                        <p class="text-sm text-gray-600">Every piece is meticulously crafted with attention to detail.</p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 mb-4 text-gold">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-montserrat font-semibold text-gray-800 mb-2">Fast Delivery</h3>
                        <p class="text-sm text-gray-600">Quick and secure shipping on all orders with tracking provided.</p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 mb-4 text-gold">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-montserrat font-semibold text-gray-800 mb-2">Secure Payments</h3>
                        <p class="text-sm text-gray-600">Your transactions are protected with industry-leading encryption.</p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 mb-4 text-gold">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-montserrat font-semibold text-gray-800 mb-2">30-Day Returns</h3>
                        <p class="text-sm text-gray-600">Not satisfied? Return your purchase within 30 days, hassle-free.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recently Viewed Section - NEW -->
        <div class="py-12 px-4 md:px-8 lg:px-12 2xl:px-28 3xl:px-40 mx-auto flex flex-col items-center justify-center">
            <h2 class="text-2xl font-montserrat font-semibold text-gray-800 mb-6 text-center">Recently Viewed</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                @foreach (range(1, 4) as $index)
                    <div class="relative group">
                        <a href="#" class="block">
                            <div class="relative overflow-hidden rounded-md bg-gray-100">
                                <img src="/images/{{ $index }}.jpg" alt="Recently Viewed Ring" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <h3 class="mt-2 text-xs font-montserrat font-medium text-gray-800 line-clamp-1 group-hover:text-gold transition-colors duration-300">Classic Solitaire Diamond Ring</h3>
                            <p class="text-gold text-xs font-semibold">$1,899</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- JavaScript for Filters and Carousel - Enhanced with Improved Functionality -->
        <script>
            // Style Filter Dropdown
            const styleFilterBtn = document.getElementById('styleFilterBtn');
            const styleFilterDropdown = document.getElementById('styleFilterDropdown');

            if (styleFilterBtn && styleFilterDropdown) {
                styleFilterBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    styleFilterDropdown.classList.toggle('hidden');
                });

                document.addEventListener('click', (e) => {
                    if (styleFilterBtn && styleFilterDropdown && !styleFilterBtn.contains(e.target) && !styleFilterDropdown.contains(e.target)) {
                        styleFilterDropdown.classList.add('hidden');
                    }
                });
            }

            // Shape Filter Dropdown
            const shapeFilterBtn = document.getElementById('shapeFilterBtn');
            const shapeFilterDropdown = document.getElementById('shapeFilterDropdown');

            if (shapeFilterBtn && shapeFilterDropdown) {
                shapeFilterBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    shapeFilterDropdown.classList.toggle('hidden');
                });

                document.addEventListener('click', (e) => {
                    if (shapeFilterBtn && shapeFilterDropdown && !shapeFilterBtn.contains(e.target) && !shapeFilterDropdown.contains(e.target)) {
                        shapeFilterDropdown.classList.add('hidden');
                    }
                });
            }

            // Price Filter Dropdown with Range Slider
            const priceFilterBtn = document.getElementById('priceFilterBtn');
            const priceFilterDropdown = document.getElementById('priceFilterDropdown');
            const minPriceRange = document.getElementById('minPriceRange');
            const maxPriceRange = document.getElementById('maxPriceRange');
            const minPriceHandle = document.getElementById('minPriceHandle');
            const maxPriceHandle = document.getElementById('maxPriceHandle');
            const priceRangeSelected = document.getElementById('priceRangeSelected');
            const priceRangeDisplay = document.getElementById('priceRangeDisplay');
            const minPrice = document.getElementById('minPrice');
            const maxPrice = document.getElementById('maxPrice');

            if (priceFilterBtn && priceFilterDropdown) {
                priceFilterBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    priceFilterDropdown.classList.toggle('hidden');
                });

                document.addEventListener('click', (e) => {
                    if (priceFilterBtn && priceFilterDropdown && !priceFilterBtn.contains(e.target) && !priceFilterDropdown.contains(e.target)) {
                        priceFilterDropdown.classList.add('hidden');
                    }
                });
            }

            // Price Range Functionality
            if (minPriceRange && maxPriceRange && minPriceHandle && maxPriceHandle && priceRangeSelected) {
                function updateRangeSelected() {
                    const min = parseInt(minPriceRange.value);
                    const max = parseInt(maxPriceRange.value);
                    const total = parseInt(maxPriceRange.max);
                    
                    // Update the style of the selected range
                    const leftPercent = (min / total) * 100;
                    const rightPercent = 100 - (max / total) * 100;
                    
                    priceRangeSelected.style.left = `${leftPercent}%`;
                    priceRangeSelected.style.right = `${rightPercent}%`;
                    
                    // Update the position of handles
                    minPriceHandle.style.left = `${leftPercent}%`;
                    maxPriceHandle.style.right = `${rightPercent}%`;
                    
                    // Format currency for display
                    const minFormatted = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 }).format(min);
                    const maxFormatted = max >= total ? `${new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 }).format(max)}+` : new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 }).format(max);
                    
                    // Update price display and input fields
                    priceRangeDisplay.textContent = `${minFormatted} - ${maxFormatted}`;
                    minPrice.value = minFormatted;
                    maxPrice.value = maxFormatted;
                }

                minPriceRange.addEventListener('input', function() {
                    if (parseInt(minPriceRange.value) > parseInt(maxPriceRange.value) - 500) {
                        minPriceRange.value = parseInt(maxPriceRange.value) - 500;
                    }
                    updateRangeSelected();
                });

                maxPriceRange.addEventListener('input', function() {
                    if (parseInt(maxPriceRange.value) < parseInt(minPriceRange.value) + 500) {
                        maxPriceRange.value = parseInt(minPriceRange.value) + 500;
                    }
                    updateRangeSelected();
                });

                // Initialize range slider
                updateRangeSelected();
            }

            // Sort By Dropdown
            const sortByBtn = document.getElementById('sortByBtn');
            const sortByDropdown = document.getElementById('sortByDropdown');

            if (sortByBtn && sortByDropdown) {
                sortByBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    sortByDropdown.classList.toggle('hidden');
                });

                document.addEventListener('click', (e) => {
                    if (sortByBtn && sortByDropdown && !sortByBtn.contains(e.target) && !sortByDropdown.contains(e.target)) {
                        sortByDropdown.classList.add('hidden');
                    }
                });
            }

            // Enhanced Product Carousel with Hover Functionality
            document.addEventListener('DOMContentLoaded', function() {
                const productCards = document.querySelectorAll('[id^="default-carousel-"]');
                
                productCards.forEach(carousel => {
                    const items = carousel.querySelectorAll('[data-carousel-item]');
                    const indicators = carousel.querySelectorAll('[data-carousel-slide-to]');
                    const indicatorsContainer = carousel.querySelector('#carousel-indicators');
                    let currentIndex = 0;
                    let interval;
                    let isHovered = false;

                    // Show first slide initially
                    showSlide(0);

                    // Handle hover events for carousel
                    carousel.addEventListener('mouseenter', () => {
                        isHovered = true;
                        if (indicatorsContainer) {
                            indicatorsContainer.style.opacity = '1';
                        }
                        startAutoPlay();
                    });

                    carousel.addEventListener('mouseleave', () => {
                        isHovered = false;
                        if (indicatorsContainer) {
                            indicatorsContainer.style.opacity = '0';
                        }
                         // Immediately show the next slide instead of waiting
                        currentIndex = 1; // Start with the second image immediately
                        showSlide(currentIndex);
                        
                        // Then start the auto-play for subsequent slides
                        startAutoPlay();
                    });

                    // Add click event for indicators
                    if (indicators) {
                        indicators.forEach((indicator, index) => {
                            indicator.addEventListener('click', (e) => {
                                e.preventDefault();
                                if (isHovered) {
                                    currentIndex = index;
                                    showSlide(currentIndex);
                                    resetAutoPlay();
                                }
                            });
                        });
                    }

                    // Function to show a specific slide
                    function showSlide(index) {
                        items.forEach((item, i) => {
                            if (i === index) {
                                item.classList.remove('hidden');
                                item.classList.add('opacity-100');
                                if (indicators && indicators[i]) {
                                    indicators[i].classList.add('bg-white');
                                    indicators[i].classList.remove('bg-white/50');
                                    indicators[i].setAttribute('aria-current', 'true');
                                }
                            } else {
                                item.classList.add('hidden');
                                item.classList.remove('opacity-100');
                                if (indicators && indicators[i]) {
                                    indicators[i].classList.remove('bg-white');
                                    indicators[i].classList.add('bg-white/50');
                                    indicators[i].setAttribute('aria-current', 'false');
                                }
                            }
                        });
                    }

                    // Start automatic slideshow when hovered
                    function startAutoPlay() {
                        interval = setInterval(() => {
                            if (isHovered) {
                                currentIndex = (currentIndex + 1) % items.length;
                                showSlide(currentIndex);
                            }
                        }, 1300);
                    }

                    // Reset automatic slideshow
                    function resetAutoPlay() {
                        clearInterval(interval);
                        startAutoPlay();
                    }
                });
            });
        </script>

        <!-- Animation Styles - NEW -->
        <style>
            .clip-path-arrow-left {
                clip-path: polygon(0 0, 100% 50%, 0 100%);
            }

            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(10px); }
                to { opacity: 1; transform: translateY(0); }
            }

            .fade-in {
                animation: fadeIn 0.8s ease-out forwards;
            }

            /* Define gold color for global use */
            .bg-gold {
                background-color: #d4af37;
            }

            .text-gold {
                color: #d4af37;
            }

            .border-gold {
                border-color: #d4af37;
            }

            .hover\:bg-gold:hover {
                background-color: #d4af37;
            }

            .hover\:text-gold:hover {
                color: #d4af37;
            }

            .focus\:ring-gold:focus {
                --tw-ring-color: #d4af37;
            }

            /* Line clamp for text truncation */
            .line-clamp-1 {
                overflow: hidden;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 1;
            }
        </style>
    @endsection