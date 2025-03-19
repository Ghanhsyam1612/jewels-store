@extends('layouts.master')

@section('content')
    <div class="container mb-10">
        <nav class="flex items-center text-sm font-montserrat mb-4 px-4 md:px-8 lg:px-12 2xl:px-28 3xl:px-40 py-4">
            <a href="/" class="text-primary text-xs lg:text-sm font-medium">Home</a>
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                        fill="#0F0F0F"></path>
                </g>
            </svg>
            <span class="text-primary text-xs lg:text-sm">Engagement Rings</span>
        </nav>

        <div class="flex flex-col items-center justify-center px-4 md:px-8 lg:px-12 2xl:px-28 3xl:px-40 my-8 lg:my-12">
            <h2 class="text-2xl text-primary lg:text-3xl font-montserrat font-semibold mb-2">Engagement Rings</h2>
            <p class="text-sm text-primary lg:text-base font-montserrat text-center">Indication of promising relation for
                infinity. Engagement rings designate if a person is tied in a bond of love and marriage, where they prevail to adore their
                relationship through a means of token designers, especially for love.</p>
        </div>

        {{-- Start Stepper Bar --}}
        <div class="my-7 lg:px-40">
            <div class="flex rounded-sm justify-center mx-auto">
                <!-- Section 1: BUILD YOUR RING -->
                <div
                    class="bg-gold border border-gray-300 text-center relative hidden lg:flex lg:flex-shrink-0 lg:w-[180px]">
                    <div class="flex items-center py-4 px-4 h-full min-h-16">
                        <h1 class="text-13px uppercase font-montserrat font-semibold">Build your Ring</h1>
                    </div>
                    <!-- Right arrow -->
                    <div class="absolute right-[-15px] top-0 h-full w-[15px] z-10">
                        <div
                            class="w-0 h-0 absolute border-t-[40px] border-t-transparent border-l-[15px] border-l-gold border-b-[40px] border-b-transparent">
                        </div>
                    </div>
                </div>

                <!-- Section 2: CHOOSE SETTING -->
                <div class="relative lg:flex-1">
                    <div
                        class="bg-slate-300 border border-gray-300 flex items-center justify-between w-[100px] md:w-48 lg:w-full py-4 px-3 lg:px-8 lg:h-full min-h-16">
                        <!-- Left arrow shape -->
                        <div
                            class="absolute hidden lg:block left-0 top-0 h-full w-[15px] bg-slate-300 clip-path-arrow-left">
                        </div>
                        <div class="flex items-center justify-center">
                            <span class="text-base md:text-lg lg:text-3xl font-montserrat font-semibold pr-2 lg:pr-4">1</span>
                            <div class="text-10px md:text-sm lg:text-base font-montserrat text-gray-400">
                                <span>Choose a</span><br>
                                <a href="#"
                                    class="uppercase text-gray-800 text-10px md:text-sm lg:text-base hover:text-amber-600 tracking-wide font-semibold">Setting</a>
                            </div>
                        </div>
                        <div class="ml-1">
                            <svg class="w-4 lg:w-7 text-primary" fill="currentColor" id="Layer_1" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 49.94">
                                <!-- SVG content remains unchanged -->
                            </svg>
                        </div>
                        <!-- Right arrow shape -->
                        <div class="absolute right-[-15px] top-0 h-full w-[15px] z-10">
                            <div
                                class="w-0 h-0 absolute border-t-[33px] border-t-transparent border-l-[8px] border-l-slate-300 border-b-[33px] border-b-transparent md:border-t-[37px] md:border-t-transparent md:border-l-[15px] md:border-l-slate-300 md:border-b-[37px] md:border-b-transparent lg:border-t-[40px] lg:border-t-transparent lg:border-l-[15px] lg:border-l-slate-300 lg:border-b-[40px] lg:border-b-transparent">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3: CHOOSE DIAMOND -->
                <div class="relative lg:flex-1">
                    <div
                        class="bg-slate-200 border-r-slate-200 border border-gray-300 flex items-center justify-between w-28 md:w-48 lg:w-full py-4 px-4 lg:px-8 lg:h-full min-h-16">
                        <!-- Left arrow shape -->
                        <div class="absolute left-0 top-0 lg:h-full w-[15px] bg-slate-200 clip-path-arrow-left"></div>
                        <div class="flex items-center justify-center">
                            <span class="text-base md:text-lg lg:text-3xl font-montserrat font-semibold pr-2 lg:pr-4">2</span>
                            <div class="text-10px md:text-sm lg:text-base font-montserrat text-gray-400">
                                <span>Choose a</span><br>
                                <a href="#"
                                    class="uppercase text-gray-800 text-10px md:text-sm lg:text-base hover:text-amber-600 tracking-wide font-semibold">Diamond</a>
                            </div>
                        </div>
                        <div class="ml-1">
                            <svg class="w-5 lg:w-7 text-primary" id="Layer_1" data-name="Layer 1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.5 30.82">
                                <!-- SVG content remains unchanged -->
                            </svg>
                        </div>
                        <!-- Right arrow shape -->
                        <div class="absolute right-[-15px] top-0 h-full w-[15px] z-10">
                            <div
                                class="w-0 h-0 absolute border-t-[33px] border-t-transparent border-l-[8px] border-l-slate-200 border-b-[33px] border-b-transparent md:border-t-[37px] md:border-t-transparent md:border-l-[10px] md:border-l-slate-200 md:border-b-[37px] md:border-b-transparent lg:border-t-[40px] lg:border-t-transparent lg:border-l-[15px] lg:border-l-slate-200 lg:border-b-[40px] lg:border-b-transparent">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 4: COMPLETE RING -->
                <div class="relative lg:lg:flex-1">
                    <div
                        class="flex items-center justify-between border border-gray-300 w-[100px] md:w-48 lg:w-full py-4 px-4 lg:px-8 lg:h-full min-h-16">
                        <!-- Left arrow shape -->
                        <div class="absolute left-0 top-0 lg:h-full w-[15px] bg-white clip-path-arrow-left"></div>
                        <div class="flex items-center justify-center">
                            <span class="text-base md:text-lg lg:text-3xl font-montserrat font-semibold pr-2 lg:pr-4">3</span>
                            <div class="text-10px md:text-sm lg:text-base font-montserrat text-gray-400">
                                <span>Complete</span><br>
                                <a href="#"
                                    class="uppercase text-gray-800 text-10px md:text-sm lg:text-base hover:text-amber-600 tracking-wide font-semibold">Ring</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Stepper Bar --}}

        {{-- Start Filter Dropdown --}}
        <div
            class="flex flex-row gap-3 lg:gap-5 lg:hidden items-center justify-between px-4 lg:mx-40 py-5 border-b border-gray-600 overflow-x-auto">
            <!-- Filter content remains unchanged -->
        </div>
        {{-- End Filter Dropdown --}}

        <span class="text-sm font-montserrat text-gray-400 lg:mx-40">
            Showing 1-20 of 100 results
        </span>

        <!-- Product Grid Container -->
        <div class="grid grid-cols-4 mx-40 my-5 gap-6">
            @foreach(range(1, 20) as $index)
                <div class="flex flex-col items-center justify-center relative">
                    @if($index <= 5 || (auth()->check() && auth()->user()->is_member))
                        {{-- Regular Product Card --}}
                        <a href="/product">
                            {{-- Product Image Slider --}}
                            <div id="default-carousel-{{$index}}" class="relative w-full">
                                <div class="relative h-56 overflow-hidden md:h-72">
                                    <div class="block duration-700 ease-in-out" data-carousel-item>
                                        <img src="/images/1.jpg"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="/images/2.jpg"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="/images/3.jpg"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="/images/4.jpg"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                </div>
                                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse opacity-0 transition-opacity duration-300"
                                    id="carousel-indicators">
                                    <button type="button" class="w-2 h-2 rounded-full bg-gray-300 hover:bg-white" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                    <button type="button" class="w-2 h-2 rounded-full bg-gray-300 hover:bg-white" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                    <button type="button" class="w-2 h-2 rounded-full bg-gray-300 hover:bg-white" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                    <button type="button" class="w-2 h-2 rounded-full bg-gray-300 hover:bg-white" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                </div>
                            </div>
                            <h3 class="mt-3 text-sm font-montserrat font-semibold text-gray-600 px-3 h-11 text-center">
                                Adaya Asscher Solitaire Engagement Ring
                            </h3>
                        </a>
                        <div class="flex flex-row items-center justify-center gap-2">
                            <p class="text-gray-500 font-montserrat text-sm line-through">$2,999</p>
                            <p class="text-gray-800 font-montserrat font-semibold text-sm">$2,499</p>
                        </div>
                    @else
                        {{-- Locked Product Card --}}
                        <div class="relative">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center z-20">
                                <a href="{{ route('subscription.plans') }}" class="cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="opacity-50">
                                {{-- Product Image Slider (Blurred) --}}
                                <div class="relative w-full">
                                    <div class="relative h-56 overflow-hidden md:h-72">
                                        <img src="/images/1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 filter blur-sm" alt="...">
                                    </div>
                                </div>
                                <h3 class="mt-3 text-sm font-montserrat font-semibold text-gray-600 px-3 h-11 text-center">
                                    Exclusive Member Product
                                </h3>
                                <div class="flex flex-row items-center justify-center gap-2">
                                    <p class="text-gray-500 font-montserrat text-sm">Members Only</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

        {{-- JavaScript for Filters and Carousel (unchanged) --}}
        <script>
            const styleIcon = document.getElementById('styleDropdownIcon');
            const styleDropdown = document.getElementById('styleDropdown');

            styleIcon.addEventListener('click', () => {
                styleDropdown.classList.toggle('hidden');
            });

            document.addEventListener('click', (e) => {
                if (!styleIcon.contains(e.target) && !styleDropdown.contains(e.target)) {
                    styleDropdown.classList.add('hidden');
                }
            });
        </script>

        <script>
            const shapeIcon = document.getElementById('shapeDropdownIcon');
            const shapeDropdown = document.getElementById('shapeDropdown');

            shapeIcon.addEventListener('click', () => {
                shapeDropdown.classList.toggle('hidden');
            });

            document.addEventListener('click', (e) => {
                if (!shapeIcon.contains(e.target) && !shapeDropdown.contains(e.target)) {
                    shapeDropdown.classList.add('hidden');
                }
            });
        </script>

        <script>
            const priceIcon = document.getElementById('priceDropdownIcon');
            const priceDropdown = document.getElementById('priceDropdown');
            const minPrice = document.getElementById('minPrice');
            const maxPrice = document.getElementById('maxPrice');
            const minPriceRange = document.{(priceIcon.contains(e.target) && !priceDropdown.contains(e.target)) {
                    priceDropdown.classList.add('hidden');
                }
            });

            updateRangeSelected();
        </script>

        <script>
            const sortIcon = document.getElementById('sortDropdownIcon');
            const sortDropdown = document.getElementById('sortDropdown');

            sortIcon.addEventListener('click', () => {
                sortDropdown.classList.toggle('hidden');
            });

            document.addEventListener('click', (e) => {
                if (!sortIcon.contains(e.target) && !sortDropdown.contains(e.target)) {
                    sortDropdown.classList.add('hidden');
                }
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const carousels = document.querySelectorAll('#default-carousel');
                carousels.forEach(carousel => {
                    const items = carousel.querySelectorAll('[data-carousel-item]');
                    const indicators = carousel.querySelectorAll('[data-carousel-slide-to]');
                    const indicatorsContainer = carousel.querySelector('#carousel-indicators');
                    let currentIndex = 0;
                    let interval;
                    let isHovered = false;

                    showSlide(0);

                    carousel.addEventListener('mouseenter', () => {
                        isHovered = true;
                        indicatorsContainer.style.opacity = '1';
                        startAutoPlay();
                    });

                    carousel.addEventListener('mouseleave', () => {
                        isHovered = false;
                        indicatorsContainer.style.opacity = '0';
                        clearInterval(interval);
                        currentIndex = 0;
                        showSlide(0);
                    });

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
                            if (i === index) {
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
                        }, 1300);
                    }

                    function resetAutoPlay() {
                        clearInterval(interval);
                        startAutoPlay();
                    }
                });
            });
        </script>
    @endsection

    <style>
        .clip-path-arrow-left {
            clip-path: polygon(0 0, 100% 50%, 0 100%);
        }
    </style>