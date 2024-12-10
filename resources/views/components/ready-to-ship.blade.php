@extends('layouts.master')

@section('content')
    <div class="container mb-14">
        <nav class="flex items-center text-sm font-montserrat mb-4 px-40 py-6">
            <a href="/" class="text-primary text-xs font-medium hover:underline">Home</a>
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                        fill="#0F0F0F"></path>
                </g>
            </svg>
            <span class="text-primary text-xs">Ready To Ship Diamonds, Rings and Fine Jewelry</span>
        </nav>

        <div class="flex flex-col items-center justify-center px-40 my-12">
            <h2 class="text-3xl text-primary font-montserrat font-semibold mb-2">Ready To Ship Diamonds, Rings and Fine Jewelry</h2>
            <p class="text-sm text-primary font-montserrat text-center">Planning a proposal/gift? We’ve got you covered! Shop our very limited edition collection of lab grown diamonds, engagement rings & fine jewelry that are in stock and ready to ship!</p>
        </div>


        <div class="flex items-center justify-end mx-40 py-2 border-b border-gray-400">

            <!-- Sort By -->
            <div class="relative flex items-center" id="sortDropdownIcon">
                <label class="block text-13px text-primary font-montserrat font-semibold uppercase mr-3 cursor-pointer">Sort By Price</label>
                {{-- Down Arrow --}}
                <svg  fill="#000000" height="8" width="8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330.002 330.002" xml:space="preserve" class="cursor-pointer"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="XMLID_23_" d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z"></path> </g></svg>
                {{-- Up Arrow --}}
                <svg class="hidden" height="8" width="8" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#000000;" d="M503.265,330.918L270.532,144.737c-8.501-6.8-20.579-6.8-29.075,0L8.736,330.918 c-7.719,6.173-10.695,16.55-7.422,25.876c3.271,9.326,12.077,15.569,21.96,15.569h465.453c9.883,0,18.689-6.242,21.96-15.569 C513.958,347.466,510.982,337.091,503.265,330.918z"></path> </g></svg>

                <div id="sortDropdown" class="hidden absolute top-full left-0 mt-1 text-primary w-48 bg-white border border-gray-300 rounded shadow-lg z-10">
                    <div class="py-2">
                        <button class="w-full text-left px-4 py-2 text-sm font-montserrat hover:text-gold hover:bg-primary transition-all">
                            Price: Low to High
                        </button>
                        <button class="w-full text-left px-4 py-2 text-sm font-montserrat hover:text-gold hover:bg-primary transition-all">
                            Price: High to Low
                        </button>
                        <button class="w-full text-left px-4 py-2 text-sm font-montserrat hover:text-gold hover:bg-primary transition-all">
                            Most Popular
                        </button>
                        <button class="w-full text-left px-4 py-2 text-sm font-montserrat hover:text-gold hover:bg-primary transition-all">
                            Newest First
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <span class="text-sm font-montserrat text-gray-400 mx-40">
            Showing 1-12 of 100 results
        </span>

        <!-- Product Grid Container -->
        <div class="grid grid-cols-4 mx-40 my-5 gap-6">
            <!-- Product Card 1 -->
            <div class="flex flex-col items-center justify-center">
                <a href="/product">
                    {{-- Product Image Slider --}}
                    <div id="default-carousel" class="relative w-full">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden md:h-72">
                            <!-- Item 1 -->
                            <div class="block duration-700 ease-in-out" data-carousel-item>
                                <img src="/images/1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Items 2-4 (hidden by default) -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/images/2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/images/3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/images/4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators (hidden by default) -->
                        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse opacity-0 transition-opacity duration-300" id="carousel-indicators">
                            <button type="button" class="w-2 h-2 rounded-full bg-gray-300 hover:bg-white" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-2 h-2 rounded-full bg-gray-300 hover:bg-white" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-2 h-2 rounded-full bg-gray-300 hover:bg-white" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-2 h-2 rounded-full bg-gray-300 hover:bg-white" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        </div>
                    </div>
                    <h3 class="mt-3 text-sm font-montserrat font-semibold text-primary px-3 h-11 text-center">Adaya Asscher Solitaire Engagement Ring</h3>
                </a>
                <div class="flex flex-row items-center justify-center gap-2">
                    <p class="text-primary/70 font-montserrat text-sm line-through">$2,999</p>
                    <p class="text-primary font-montserrat font-semibold text-sm">$2,499</p>
                </div>
            </div>
        </div>
    

    {{-- Sort By --}}
    <script>
        const sortIcon = document.getElementById('sortDropdownIcon');
        const sortDropdown = document.getElementById('sortDropdown');

        sortIcon.addEventListener('click', () => {
            sortDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!sortIcon.contains(e.target) && !sortDropdown.contains(e.target)) {
                sortDropdown.classList.add('hidden');
            }
        }); 
    </script>

    {{-- Product Image Slider --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('default-carousel');
            const items = carousel.querySelectorAll('[data-carousel-item]');
            const indicators = carousel.querySelectorAll('[data-carousel-slide-to]');
            const indicatorsContainer = document.getElementById('carousel-indicators');
            let currentIndex = 0;
            let interval;
            let isHovered = false;

            // Show only first slide initially
            showSlide(0);

            // Show carousel controls and start autoplay only on hover
            carousel.addEventListener('mouseenter', () => {
                isHovered = true;
                indicatorsContainer.style.opacity = '1';
                startAutoPlay();
            });

            carousel.addEventListener('mouseleave', () => {
                isHovered = false;
                indicatorsContainer.style.opacity = '0';
                clearInterval(interval);
                // Reset to first slide when mouse leaves
                currentIndex = 0;
                showSlide(0);
            });

            // Indicator clicks
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    if (isHovered) {
                        currentIndex = index;
                        showSlide(currentIndex);
                        resetAutoPlay();
                    }
                });
            });

            function showSlide(index) {
                items.forEach((item, i) => {
                    if(i === index) {
                        item.classList.remove('hidden');
                        item.classList.add('opacity-100');
                        indicators[i].classList.add('bg-white');
                        indicators[i].classList.remove('bg-gray-300');
                    } else {
                        item.classList.add('hidden');
                        item.classList.remove('opacity-100');
                        indicators[i].classList.remove('bg-white');
                        indicators[i].classList.add('bg-gray-300');
                    }
                    indicators[i].setAttribute('aria-current', i === index);
                });
            }

            function startAutoPlay() {
                interval = setInterval(() => {
                    if (isHovered) {
                        currentIndex = (currentIndex + 1) % items.length;
                        showSlide(currentIndex);
                    }
                }, 1300); // Change slide every 3 seconds while hovered
            }

            function resetAutoPlay() {
                clearInterval(interval);
                startAutoPlay();
            }
        });
    </script>
@endsection

