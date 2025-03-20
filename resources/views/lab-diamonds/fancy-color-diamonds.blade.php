@extends('layouts.master')

@section('content')
    <div class="w-full mx-auto py-12">
        <h1
            class="text-xl lg:text-4xl text-primary font-montserrat font-bold text-center mb-3 px-4 md:px-8 lg:px-12 2xl:px-16 3xl:px-40">
            Certified Fancy Color Lab Grown Diamonds
        </h1>
        <p
            class="text-primary/80 text-center font-montserrat text-sm mb-4 md:mb-8 px-4 md:px-8 lg:px-12 2xl:px-16 3xl:px-40">
            Select your perfect fancy color lab created diamond from thousands of ethically sourced diamonds.
        </p>

        <!--  Start Color  -->
        <div class="flex items-center  px-4 md:px-8 lg:px-12 lg:py-4 3xl:px-40">
            <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Color</h5>
            <div class="flex flex-col">
                <div class="mb-1 grid grid-cols-2 lg:grid-cols-10 gap-5">
                    <!-- Color Options -->
                    <a href="{{ route('color.diamond', ['color' => 'Yellow']) }}" onclick="window.location=this.href;"
                        class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                        data-color="yellow">
                        <img src="{{ asset('images/color/yellow.png') }}" class="w-11 h-11" alt="Yellow">
                        <span class="text-primary">Yellow</span>
                    </a>

                    <a href="{{ route('color.diamond', ['color' => 'Pink']) }}" onclick="window.location=this.href;"
                        class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                        data-color="pink">
                        <img src="{{ asset('images/color/pink.png') }}" class="w-11 h-11" alt="Pink">
                        <span class="text-primary">Pink</span>
                    </a>

                    <a href="{{ route('color.diamond', ['color' => 'Purple']) }}" onclick="window.location=this.href;"
                        class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                        data-color="purple">
                        <img src="{{ asset('images/color/purple.png') }}" class="w-11 h-11" alt="Purple">
                        <span class="text-primary">Purple</span>
                    </a>

                    <a href="{{ route('color.diamond', ['color' => 'Red']) }}" onclick="window.location=this.href;"
                        class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                        data-color="red">
                        <img src="{{ asset('images/color/red.png') }}" class="w-11 h-11" alt="Red">
                        <span class="text-primary">Red</span>
                    </a>

                    <a href="{{ route('color.diamond', ['color' => 'Blue']) }}" onclick="window.location=this.href;"
                        class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                        data-color="blue">
                        <img src="{{ asset('images/color/blue.png') }}" class="w-11 h-11" alt="Blue">
                        <span class="text-primary">Blue</span>
                    </a>

                    <a href="{{ route('color.diamond', ['color' => 'Green']) }}" onclick="window.location=this.href;"
                        class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                        data-color="green">
                        <img src="{{ asset('images/color/green.png') }}" class="w-11 h-11" alt="Green">
                        <span class="text-primary">Green</span>
                    </a>

                    <a href="{{ route('color.diamond', ['color' => 'Orange']) }}" onclick="window.location=this.href;"
                        class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                        data-color="orange">
                        <img src="{{ asset('images/color/orange.png') }}" class="w-11 h-11" alt="Orange">
                        <span class="text-primary">Orange</span>
                    </a>

                    <a href="{{ route('color.diamond', ['color' => 'Brown']) }}" onclick="window.location=this.href;"
                        class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                        data-color="brown">
                        <img src="{{ asset('images/color/brown.png') }}" class="w-11 h-11" alt="Brown">
                        <span class="text-primary">Brown</span>
                    </a>

                    <a href="{{ route('color.diamond', ['color' => 'Black']) }}" onclick="window.location=this.href;"
                        class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                        data-color="black">
                        <img src="{{ asset('images/color/black.png') }}" class="w-11 h-11" alt="Black">
                        <span class="text-primary">Black</span>
                    </a>

                    <a href="{{ route('color.diamond', ['color' => 'Gray']) }}" onclick="window.location=this.href;"
                        class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                        data-color="gray">
                        <img src="{{ asset('images/color/gray.png') }}" class="w-11 h-11" alt="Gray">
                        <span class="text-primary">Gray</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Color  -->

        <!-- Mobile  Filter Button -->
        <div class="flex justify-center items-center lg:hidden px-4 md:px-8 lg:px-12 2xl:px-16 py-4">
            <button
                class="bg-white border border-primary font-montserrat text-primary hover:bg-primary hover:text-white w-full md:w-60 py-2"
                id="FC_filterButton" onclick="showFilterDrawer()">Filter</button>
        </div>

        <!-- Mobile  Filter Drawer -->
        <div id="FC_filterDrawer"
            class="fixed overflow-y-scroll top-0 right-0 h-full w-full bg-white shadow-lg z-50 hidden lg:hidden">
            <div class="flex justify-between items-center p-4 border-b">
                <h2 class="text-2xl font-bold text-primary font-montserrat">Filter</h2>
                <button class="text-2xl" onclick="hideFilterDrawer()">&times;</button>
            </div>

            <div class="p-5">
                <!-- Shape Filter -->
                <div class="py-4" id="FC_shapeDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Shape</span>
                        <!-- Down Arrow -->
                        <svg id="FC_shapeDownArrow" fill="#000000" height="8" width="8" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 330.002 330.002" xml:space="preserve" class="cursor-pointer">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="XMLID_23_"
                                    d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z">
                                </path>
                            </g>
                        </svg>
                        <!-- Up Arrow -->
                        <svg id="FC_shapeUpArrow" class="hidden" height="8" width="8" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path style="fill:#000000;"
                                    d="M503.265,330.918L270.532,144.737c-8.501-6.8-20.579-6.8-29.075,0L8.736,330.918 c-7.719,6.173-10.695,16.55-7.422,25.876c3.271,9.326,12.077,15.569,21.96,15.569h465.453c9.883,0,18.689-6.242,21.96-15.569 C513.958,347.466,510.982,337.091,503.265,330.918z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div id="FC_shapeDropdown"
                        class="hidden mt-4 grid grid-cols-6 gap-3 px-4 transition-all duration-300">
                        <!-- Round -->
                        <a href="{{ route('color.diamond', ['shape' => 'ROUND']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/round.svg') }}" width="25" height="25" alt="Round Shape">
                        </a>

                        <!-- Princess -->
                        <a href="{{ route('color.diamond', ['shape' => 'PRINCESS']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/princess.svg') }}" width="25" height="25"
                                alt="Princess Shape">
                        </a>

                        <!-- Radiant -->
                        <a href="{{ route('color.diamond', ['shape' => 'RADIANT']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/radiant.svg') }}" width="25" height="25"
                                alt="Radiant Shape">
                        </a>

                        <!-- Asscher -->
                        <a href="{{ route('color.diamond', ['shape' => 'ASSCHER']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/asscher.svg') }}" width="25" height="25"
                                alt="Asscher Shape">
                        </a>

                        <!-- Cushion -->
                        <a href="{{ route('color.diamond', ['shape' => 'CUSHION']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/cushion.svg') }}" width="25" height="25"
                                alt="Cushion Shape">
                        </a>

                        <!-- Oval -->
                        <a href="{{ route('color.diamond', ['shape' => 'OVAL']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/oval.svg') }}" width="25" height="25" alt="Oval Shape">
                        </a>

                        <!-- Emerald -->
                        <a href="{{ route('color.diamond', ['shape' => 'EMERALD']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/emerald.svg') }}" width="25" height="25"
                                alt="Emerald Shape">
                        </a>

                        <!-- Pear -->
                        <a href="{{ route('color.diamond', ['shape' => 'PEAR']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/pear.svg') }}" width="25" height="25" alt="Pear Shape">
                        </a>

                        <!-- Marquise -->
                        <a href="{{ route('color.diamond', ['shape' => 'MARQUISE']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/marquise.svg') }}" width="25" height="25"
                                alt="Marquise Shape">
                        </a>

                        <!-- Heart -->
                        <a href="{{ route('color.diamond', ['shape' => 'HEART']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/heart.svg') }}" width="25" height="25" alt="Heart Shape">
                        </a>

                        <!-- Rose Cut -->
                        <a href="{{ route('color.diamond', ['shape' => 'ROSE']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/rose-cut.svg') }}" width="25" height="25"
                                alt="Rose Cut Shape">
                        </a>

                        <!-- Trapezoid -->
                        <a href="{{ route('color.diamond', ['shape' => 'TRAPEZOID']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/trapezoid.svg') }}" width="25" height="25"
                                alt="Trapezoid Shape">
                        </a>

                        <!-- Triangular -->
                        <a href="{{ route('color.diamond', ['shape' => 'TRIANGULAR']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/triangular.svg') }}" width="25" height="25"
                                alt="Triangular Shape">
                        </a>
                        <!-- Trilliant -->
                        <a href="{{ route('color.diamond', ['shape' => 'TRILLIANT']) }} "
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/trilliant.svg') }}" width="25" height="25"
                                alt="Trilliant Shape">
                        </a>
                        <!-- Flower -->
                        <a href="{{ route('color.diamond', ['shape' => 'FLOWER']) }} "
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/flower.svg') }}" width="25" height="25"
                                alt="Flower Shape">
                        </a>

                        <!-- End Shape Svg -->
                    </div>
                </div>

                <!-- Price Filter -->
                <div class="border-t py-4" id="FC_priceDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Price</span>
                        <!-- Down Arrow -->
                        <svg id="FC_priceDownArrow" fill="#000000" height="8" width="8" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 330.002 330.002" xml:space="preserve" class="cursor-pointer">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="XMLID_23_"
                                    d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z">
                                </path>
                            </g>
                        </svg>
                        <!-- Up Arrow -->
                        <svg id="FC_priceUpArrow" class="hidden" height="8" width="8" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path style="fill:#000000;"
                                    d="M503.265,330.918L270.532,144.737c-8.501-6.8-20.579-6.8-29.075,0L8.736,330.918 c-7.719,6.173-10.695,16.55-7.422,25.876c3.271,9.326,12.077,15.569,21.96,15.569h465.453c9.883,0,18.689-6.242,21.96-15.569 C513.958,347.466,510.982,337.091,503.265,330.918z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div id="FC_priceDropdown" class="hidden mt-4">
                        <div class="flex items-center">
                            <form id="FC_mobilePriceFilterForm" action="{{ route('color.diamond') }}" method="GET"
                                class="w-full max-w-md">
                                <div class="mb-3">
                                    <div class="flex justify-between">
                                        <div class="pr-2">
                                            <input type="number" id="FC_mobilePriceFromInput" name="minPrice"
                                                value="{{ request('minPrice', 100) }}" min="100" max="100000"
                                                class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                                        </div>
                                        <div class="pl-2">
                                            <input type="number" id="FC_mobilePriceToInput" name="maxPrice"
                                                value="{{ request('maxPrice', 100000) }}" min="100" max="100000"
                                                class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                                        </div>
                                    </div>
                                </div>

                                <div class="relative mb-7 flex items-center">
                                    <input id="FC_mobilePriceFromSlider" type="range"
                                        value="{{ request('minPrice', 100) }}" min="100" max="100000"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                    <input id="FC_mobilePriceToSlider" type="range"
                                        value="{{ request('minPrice', 100) }}" min="100" max="100000"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                </div>

                                <div class="flex justify-between text-xs text-gray-500 font-montserrat font-medium">
                                    <span>$100</span>
                                    <span>$100,000</span>
                                </div>
                            </form>
                        </div>
                        <style>
                            input[type="range"]#FC_mobilePriceFromSlider::-webkit-slider-thumb,
                            input[type="range"]#FC_mobilePriceToSlider::-webkit-slider-thumb {
                                -webkit-appearance: none;
                                pointer-events: all;
                                width: 16px;
                                height: 16px;
                                background-color: #fff;
                                border-radius: 100%;
                                border: 2px solid #733D80;
                                cursor: pointer;
                                position: relative;
                                z-index: 5;
                            }

                            input[type="range"]#FC_mobilePriceFromSlider::-moz-range-thumb,
                            input[type="range"]#FC_mobilePriceToSlider::-moz-range-thumb {
                                -webkit-appearance: none;
                                pointer-events: all;
                                width: 24px;
                                height: 24px;
                                background-color: #fff;
                                border-radius: 50%;
                                box-shadow: 0 0 0 1px #c6c6c6;
                                cursor: pointer;
                                position: relative;
                                z-index: 5;
                            }

                            input[type="range"]#FC_mobilePriceToSlider {
                                height: 0;
                                z-index: 4;
                            }
                        </style>
                        <script>
                            const FC_mobilePriceFromSlider = document.querySelector("#FC_mobilePriceFromSlider");
                            const FC_mobilePriceToSlider = document.querySelector("#FC_mobilePriceToSlider");
                            const FC_mobilePriceFromInput = document.querySelector("#FC_mobilePriceFromInput");
                            const FC_mobilePriceToInput = document.querySelector("#FC_mobilePriceToInput");
                            const FC_mobilePriceFilterForm = document.querySelector("#FC_mobilePriceFilterForm");

                            function updateFC_MobilePriceSliderColors() {
                                const min = parseInt(FC_mobilePriceFromSlider.min);
                                const max = parseInt(FC_mobilePriceToSlider.max);
                                const from = parseInt(FC_mobilePriceFromInput.value);
                                const to = parseInt(FC_mobilePriceToInput.value);

                                const percentFrom = ((from - min) / (max - min)) * 100;
                                const percentTo = ((to - min) / (max - min)) * 100;

                                const gradient = `linear-gradient(to right, 
                                #C6C6C6 0%, 
                                #C6C6C6 ${percentFrom}%, 
                                #733D80 ${percentFrom}%, 
                                #733D80 ${percentTo}%, 
                                #C6C6C6 ${percentTo}%, 
                                #C6C6C6 100%)`;

                                FC_mobilePriceFromSlider.style.background = gradient;
                                FC_mobilePriceToSlider.style.background = gradient;
                            }

                            function syncFC_MobilePriceFromInput() {
                                let value = Math.min(parseInt(FC_mobilePriceFromInput.value), parseInt(FC_mobilePriceToInput.value));
                                FC_mobilePriceFromInput.value = value;
                                FC_mobilePriceFromSlider.value = value;
                                updateFC_MobilePriceSliderColors();
                                FC_mobilePriceFilterForm.submit();
                            }

                            function syncFC_MobilePriceToInput() {
                                let value = Math.max(parseInt(FC_mobilePriceToInput.value), parseInt(FC_mobilePriceFromInput.value));
                                FC_mobilePriceToInput.value = value;
                                FC_mobilePriceToSlider.value = value;
                                updateFC_MobilePriceSliderColors();
                                FC_mobilePriceFilterForm.submit();
                            }

                            function syncFC_MobilePriceFromSlider() {
                                FC_mobilePriceFromInput.value = FC_mobilePriceFromSlider.value;
                                updateFC_MobilePriceSliderColors();
                                FC_mobilePriceFilterForm.submit();
                            }

                            function syncFC_MobilePriceToSlider() {
                                FC_mobilePriceToInput.value = FC_mobilePriceToSlider.value;
                                updateFC_MobilePriceSliderColors();
                                FC_mobilePriceFilterForm.submit();
                            }

                            FC_mobilePriceFromInput.addEventListener("input", syncFC_MobilePriceFromInput);
                            FC_mobilePriceToInput.addEventListener("input", syncFC_MobilePriceToInput);
                            FC_mobilePriceFromSlider.addEventListener("input", syncFC_MobilePriceFromSlider);
                            FC_mobilePriceToSlider.addEventListener("input", syncFC_MobilePriceToSlider);

                            // Initialize slider colors
                            updateFC_MobilePriceSliderColors();
                        </script>
                    </div>
                </div>

                <!-- Carat Filter -->
                <div class="border-t py-4" id="FC_caratDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Carat</span>
                        <!-- Down Arrow -->
                        <svg id="FC_caratDownArrow" fill="#000000" height="8" width="8" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 330.002 330.002" xml:space="preserve" class="cursor-pointer">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="XMLID_23_"
                                    d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z">
                                </path>
                            </g>
                        </svg>
                        <!-- Up Arrow -->
                        <svg id="FC_caratUpArrow" class="hidden" height="8" width="8" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path style="fill:#000000;"
                                    d="M503.265,330.918L270.532,144.737c-8.501-6.8-20.579-6.8-29.075,0L8.736,330.918 c-7.719,6.173-10.695,16.55-7.422,25.876c3.271,9.326,12.077,15.569,21.96,15.569h465.453c9.883,0,18.689-6.242,21.96-15.569 C513.958,347.466,510.982,337.091,503.265,330.918z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div id="FC_caratDropdown" class="hidden mt-4">
                        <form id="FC_mobileCrateFilterForm" action="{{ route('color.diamond') }}" method="GET"
                            class="flex items-center">
                            <div class="w-full max-w-md">
                                <div class="mb-3">
                                    <div class="flex justify-between">
                                        <div class="pr-2">
                                            <input type="number" id="FC_mobileCaratFromInput" name="minCarat"
                                                value="{{ request('minCarat', 0.1) }}" min="0.1" max="60.00"
                                                step="0.1"
                                                class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                                        </div>
                                        <div class="pl-2">
                                            <input type="number" id="FC_mobileCaratToInput" name="maxCarat"
                                                value="{{ request('maxCarat', 60.0) }}" min="0.1" max="60.00"
                                                step="0.1"
                                                class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                                        </div>
                                    </div>
                                </div>

                                <div class="relative mb-7 flex items-center">
                                    <input id="FC_mobileCaratFromSlider" type="range"
                                        value="{{ request('minCarat', 0.1) }}" min="0.1" max="60.00"
                                        step="0.1"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                    <input id="FC_mobileCaratToSlider" type="range"
                                        value="{{ request('maxCarat', 60.0) }}" min="0.1" max="60.00"
                                        step="0.1"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                </div>

                                <div class="flex justify-between text-xs text-gray-500 font-montserrat font-medium">
                                    <span>0.1</span>
                                    <span>60.00</span>
                                </div>
                            </div>
                        </form>
                        <style>
                            input[type="range"]#FC_mobileCaratFromSlider::-webkit-slider-thumb,
                            input[type="range"]#FC_mobileCaratToSlider::-webkit-slider-thumb {
                                -webkit-appearance: none;
                                pointer-events: all;
                                width: 16px;
                                height: 16px;
                                background-color: #fff;
                                border-radius: 100%;
                                border: 2px solid #733D80;
                                cursor: pointer;
                                position: relative;
                                z-index: 5;
                            }

                            input[type="range"]#FC_mobileCaratFromSlider::-moz-range-thumb,
                            input[type="range"]#FC_mobileCaratToSlider::-moz-range-thumb {
                                -webkit-appearance: none;
                                pointer-events: all;
                                width: 24px;
                                height: 24px;
                                background-color: #fff;
                                border-radius: 50%;
                                box-shadow: 0 0 0 1px #c6c6c6;
                                cursor: pointer;
                                position: relative;
                                z-index: 5;
                            }

                            input[type="range"]#FC_mobileCaratToSlider {
                                height: 0;
                                z-index: 4;
                            }
                        </style>
                        <script>
                            const FC_mobileCaratFromSlider = document.querySelector("#FC_mobileCaratFromSlider");
                            const FC_mobileCaratToSlider = document.querySelector("#FC_mobileCaratToSlider");
                            const FC_mobileCaratFromInput = document.querySelector("#FC_mobileCaratFromInput");
                            const FC_mobileCaratToInput = document.querySelector("#FC_mobileCaratToInput");
                            const FC_mobileCrateFilterForm = document.querySelector("#FC_mobileCrateFilterForm");


                            function updateFC_MobileCaratSliderColors() {
                                const min = parseFloat(FC_mobileCaratFromSlider.min);
                                const max = parseFloat(FC_mobileCaratToSlider.max);
                                const from = parseFloat(FC_mobileCaratFromInput.value);
                                const to = parseFloat(FC_mobileCaratToInput.value);

                                const percentFrom = ((from - min) / (max - min)) * 100;
                                const percentTo = ((to - min) / (max - min)) * 100;

                                const gradient = `linear-gradient(to right, 
                                #C6C6C6 0%, 
                                #C6C6C6 ${percentFrom}%, 
                                #733D80 ${percentFrom}%, 
                                #733D80 ${percentTo}%, 
                                #C6C6C6 ${percentTo}%, 
                                #C6C6C6 100%)`;

                                FC_mobileCaratFromSlider.style.background = gradient;
                                FC_mobileCaratToSlider.style.background = gradient;
                            }

                            function syncFC_MobileFromInput() {
                                let value = Math.min(parseFloat(FC_mobileCaratFromInput.value), parseFloat(FC_mobileCaratToInput.value));
                                FC_mobileCaratFromInput.value = value;
                                FC_mobileCaratFromSlider.value = value;
                                updateFC_MobileCaratSliderColors();
                                FC_mobileCrateFilterForm.submit();
                            }

                            function syncFC_MobileToInput() {
                                let value = Math.max(parseFloat(FC_mobileCaratToInput.value), parseFloat(FC_mobileCaratFromInput.value));
                                FC_mobileCaratToInput.value = value.toFixed(1);
                                FC_mobileCaratToSlider.value = value;
                                updateFC_MobileCaratSliderColors();
                                FC_mobileCrateFilterForm.submit();

                            }

                            function syncFC_MobileFromSlider() {
                                FC_mobileCaratFromInput.value = FC_mobileCaratFromSlider.value;
                                updateFC_MobileCaratSliderColors();
                                FC_mobileCrateFilterForm.submit();

                            }

                            function syncFC_MobileToSlider() {
                                FC_mobileCaratToInput.value = FC_mobileCaratToSlider.value;
                                updateFC_MobileCaratSliderColors();
                                FC_mobileCrateFilterForm.submit();

                            }

                            FC_mobileCaratFromInput.addEventListener("input", syncFC_MobileFromInput);
                            FC_mobileCaratToInput.addEventListener("input", syncFC_MobileToInput);
                            FC_mobileCaratFromSlider.addEventListener("input", syncFC_MobileFromSlider);
                            FC_mobileCaratToSlider.addEventListener("input", syncFC_MobileToSlider);

                            // Initialize slider colors
                            updateFC_MobileCaratSliderColors();
                        </script>
                    </div>
                </div>

                <!-- Cut Filter -->
                <div class="border-t py-4" id="FC_cutDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Cut</span>
                        <!-- Down Arrow -->
                        <svg id="FC_cutDownArrow" fill="#000000" height="8" width="8" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 330.002 330.002" xml:space="preserve" class="cursor-pointer">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="XMLID_23_"
                                    d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z">
                                </path>
                            </g>
                        </svg>
                        <!-- Up Arrow -->
                        <svg id="FC_cutUpArrow" class="hidden" height="8" width="8" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path style="fill:#000000;"
                                    d="M503.265,330.918L270.532,144.737c-8.501-6.8-20.579-6.8-29.075,0L8.736,330.918 c-7.719,6.173-10.695,16.55-7.422,25.876c3.271,9.326,12.077,15.569,21.96,15.569h465.453c9.883,0,18.689-6.242,21.96-15.569 C513.958,347.466,510.982,337.091,503.265,330.918z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div id="FC_cutDropdown" class="hidden mt-4">
                        <div class="flex items-center">
                            <form id="FC_mobileCutFilterForm" action="{{ route('color.diamond') }}" method="GET"
                                class="w-full max-w-md">
                                <div class="relative mb-7 flex items-center">
                                    <input id="FC_mobileCutFromSlider" type="range" value="{{ request('minCut', 0) }}"
                                        min="0" max="4" step="1"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                    <input id="FC_mobileCutToSlider" type="range" value="{{ request('maxCut', 4) }}"
                                        min="0" max="4" step="1"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                </div>

                                <div class="flex justify-between text-xs text-gray-500 font-montserrat font-medium">
                                    <span>Fair</span>
                                    <span>Good</span>
                                    <span>Very Good</span>
                                    <span>Excellent</span>
                                    <span>Ideal</span>
                                </div>
                            </form>
                        </div>
                        <style>
                            input[type="range"]#FC_mobileCutFromSlider::-webkit-slider-thumb,
                            input[type="range"]#FC_mobileCutToSlider::-webkit-slider-thumb {
                                -webkit-appearance: none;
                                pointer-events: all;
                                width: 16px;
                                height: 16px;
                                background-color: #fff;
                                border-radius: 100%;
                                border: 2px solid #733D80;
                                cursor: pointer;
                                position: relative;
                                z-index: 5;
                            }

                            input[type="range"]#FC_mobileCutFromSlider::-moz-range-thumb,
                            input[type="range"]#FC_mobileCutToSlider::-moz-range-thumb {
                                -webkit-appearance: none;
                                pointer-events: all;
                                width: 24px;
                                height: 24px;
                                background-color: #fff;
                                border-radius: 50%;
                                box-shadow: 0 0 0 1px #c6c6c6;
                                cursor: pointer;
                                position: relative;
                                z-index: 5;
                            }

                            input[type="range"]#FC_mobileCutToSlider {
                                height: 0;
                                z-index: 4;
                            }
                        </style>
                        <script>
                            const FC_mobileCutFromSlider = document.querySelector("#FC_mobileCutFromSlider");
                            const FC_mobileCutToSlider = document.querySelector("#FC_mobileCutToSlider");
                            const FC_mobileCutFilterForm = document.querySelector("#FC_mobileCutFilterForm");

                            function FC_updateMobileCutSliderColors() {
                                const min = parseInt(FC_mobileCutFromSlider.min);
                                const max = parseInt(FC_mobileCutToSlider.max);
                                const from = parseInt(FC_mobileCutFromSlider.value);
                                const to = parseInt(FC_mobileCutToSlider.value);

                                const percentFrom = ((from - min) / (max - min)) * 100;
                                const percentTo = ((to - min) / (max - min)) * 100;

                                const gradient = `linear-gradient(to right, 
                                #C6C6C6 0%, 
                                #C6C6C6 ${percentFrom}%, 
                                #733D80 ${percentFrom}%, 
                                #733D80 ${percentTo}%, 
                                #C6C6C6 ${percentTo}%, 
                                #C6C6C6 100%)`;

                                FC_mobileCutFromSlider.style.background = gradient;
                                FC_mobileCutToSlider.style.background = gradient;
                            }

                            function FC_syncMobileCutFromSlider() {
                                let value = Math.min(parseInt(FC_mobileCutFromSlider.value), parseInt(FC_mobileCutToSlider.value));
                                FC_mobileCutFromSlider.value = value;
                                FC_updateMobileCutSliderColors();
                                FC_mobileCutFilterForm.submit();

                            }

                            function FC_syncMobileCutToSlider() {
                                let value = Math.max(parseInt(FC_mobileCutToSlider.value), parseInt(FC_mobileCutFromSlider.value));
                                FC_mobileCutToSlider.value = value;
                                FC_updateMobileCutSliderColors();
                                FC_mobileCutFilterForm.submit();
                            }

                            FC_mobileCutFromSlider.addEventListener("input", FC_syncMobileCutFromSlider);
                            FC_mobileCutToSlider.addEventListener("input", FC_syncMobileCutToSlider);

                            // Initialize slider colors
                            FC_updateMobileCutSliderColors();
                        </script>
                    </div>
                </div>

                <!-- Color Filter -->
                <div class="border-t py-4" id="FC_colorDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Color</span>
                        <!-- Down Arrow -->
                        <svg id="FC_colorDownArrow" fill="#000000" height="8" width="8" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 330.002 330.002" xml:space="preserve" class="cursor-pointer">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="XMLID_23_"
                                    d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z">
                                </path>
                            </g>
                        </svg>
                        <!-- Up Arrow -->
                        <svg id="FC_colorUpArrow" class="hidden" height="8" width="8" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path style="fill:#000000;"
                                    d="M503.265,330.918L270.532,144.737c-8.501-6.8-20.579-6.8-29.075,0L8.736,330.918 c-7.719,6.173-10.695,16.55-7.422,25.876c3.271,9.326,12.077,15.569,21.96,15.569h465.453c9.883,0,18.689-6.242,21.96-15.569 C513.958,347.466,510.982,337.091,503.265,330.918z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div id="FC_colorDropdown" class="hidden mt-4">
                        <div class="flex items-center">
                            <form id="FC_mobileColorFilterForm" class="w-full max-w-md">
                                <div class="relative mb-7 flex items-center">
                                    <input id="FC_mobileColorFromSlider" type="range"
                                        value="{{ request('minColor', 0) }}" min="0" max="9"
                                        step="1"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                    <input id="FC_mobileColorToSlider" type="range"
                                        value="{{ request('maxColor', 9) }}" min="0" max="9"
                                        step="1"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                </div>

                                <div class="flex justify-between text-xs text-gray-500 font-montserrat font-medium">
                                    <span>M</span>
                                    <span>L</span>
                                    <span>K</span>
                                    <span>J</span>
                                    <span>I</span>
                                    <span>H</span>
                                    <span>G</span>
                                    <span>F</span>
                                    <span>E</span>
                                    <span>D</span>
                                </div>
                            </form>
                        </div>
                        <style>
                            input[type="range"]#FC_mobileColorFromSlider::-webkit-slider-thumb,
                            input[type="range"]#FC_mobileColorToSlider::-webkit-slider-thumb {
                                -webkit-appearance: none;
                                pointer-events: all;
                                width: 16px;
                                height: 16px;
                                background-color: #fff;
                                border-radius: 100%;
                                border: 2px solid #733D80;
                                cursor: pointer;
                                position: relative;
                                z-index: 5;
                            }

                            input[type="range"]#FC_mobileColorFromSlider::-moz-range-thumb,
                            input[type="range"]#FC_mobileColorToSlider::-moz-range-thumb {
                                -webkit-appearance: none;
                                pointer-events: all;
                                width: 24px;
                                height: 24px;
                                background-color: #fff;
                                border-radius: 50%;
                                box-shadow: 0 0 0 1px #c6c6c6;
                                cursor: pointer;
                                position: relative;
                                z-index: 5;
                            }

                            input[type="range"]#FC_mobileColorToSlider {
                                height: 0;
                                z-index: 4;
                            }
                        </style>
                        <script>
                            const FC_mobileColorFromSlider = document.querySelector("#FC_mobileColorFromSlider");
                            const FC_mobileColorToSlider = document.querySelector("#FC_mobileColorToSlider");
                            const FC_mobileColorFilterForm = document.querySelector("#FC_mobileColorFilterForm");

                            function updateFC_MobileColorSliderColors() {
                                const min = parseInt(FC_mobileColorFromSlider.min);
                                const max = parseInt(FC_mobileColorToSlider.max);
                                const from = parseInt(FC_mobileColorFromSlider.value);
                                const to = parseInt(FC_mobileColorToSlider.value);

                                const percentFrom = ((from - min) / (max - min)) * 100;
                                const percentTo = ((to - min) / (max - min)) * 100;

                                const gradient = `linear-gradient(to right, 
                                #C6C6C6 0%, 
                                #C6C6C6 ${percentFrom}%, 
                                #733D80 ${percentFrom}%, 
                                #733D80 ${percentTo}%, 
                                #C6C6C6 ${percentTo}%, 
                                #C6C6C6 100%)`;

                                FC_mobileColorFromSlider.style.background = gradient;
                                FC_mobileColorToSlider.style.background = gradient;
                            }

                            function syncFC_MobileColorFromSlider() {
                                let value = Math.min(parseInt(FC_mobileColorFromSlider.value), parseInt(FC_mobileColorToSlider.value));
                                FC_mobileColorFromSlider.value = value;
                                updateFC_MobileColorSliderColors();
                                FC_mobileColorFilterForm.submit();
                            }

                            function syncFC_MobileColorToSlider() {
                                let value = Math.max(parseInt(FC_mobileColorToSlider.value), parseInt(FC_mobileColorFromSlider.value));
                                FC_mobileColorToSlider.value = value;
                                updateFC_MobileColorSliderColors();
                                FC_mobileColorFilterForm.submit();
                            }

                            FC_mobileColorFromSlider.addEventListener("input", syncFC_MobileColorFromSlider);
                            FC_mobileColorToSlider.addEventListener("input", syncFC_MobileColorToSlider);

                            // Initialize slider colors
                            updateFC_MobileColorSliderColors();
                        </script>
                    </div>
                </div>

                <!-- Clarity Filter -->
                <div class="border-t py-4" id="FC_claritytyDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Clarity</span>
                        <!-- Down Arrow -->
                        <svg id="FC_claritytyDownArrow" fill="#000000" height="8" width="8" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 330.002 330.002" xml:space="preserve" class="cursor-pointer">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="XMLID_23_"
                                    d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z">
                                </path>
                            </g>
                        </svg>
                        <!-- Up Arrow -->
                        <svg id="FC_claritytyUpArrow" class="hidden" height="8" width="8" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path style="fill:#000000;"
                                    d="M503.265,330.918L270.532,144.737c-8.501-6.8-20.579-6.8-29.075,0L8.736,330.918 c-7.719,6.173-10.695,16.55-7.422,25.876c3.271,9.326,12.077,15.569,21.96,15.569h465.453c9.883,0,18.689-6.242,21.96-15.569 C513.958,347.466,510.982,337.091,503.265,330.918z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div id="FC_claritytyDropdown" class="hidden mt-4">
                        <div class="flex items-center">
                            <form id="FC_mobileClarityFilterForm" action="{{ route('color.diamond') }}" method="GET"
                                class="w-full max-w-md">
                                <div class="relative mb-7 flex items-center">
                                    <input id="FC_mobileClarityFromSlider" type="range" value="0" min="0"
                                        max="11" step="1"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                    <input id="FC_mobileClarityToSlider" type="range" value="11" min="0"
                                        max="11" step="1"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                </div>

                                <div class="flex justify-between text-xs text-gray-500 font-montserrat font-medium">
                                    <span>I2</span>
                                    <span>I1</span>
                                    <span>SI3</span>
                                    <span>SI2</span>
                                    <span>SI1</span>
                                    <span>VS2</span>
                                    <span>VS1</span>
                                    <span>VVS2</span>
                                    <span>VVS1</span>
                                    <span>IF</span>
                                    <span>FL</span>
                                </div>
                            </form>
                        </div>
                        <style>
                            input[type="range"]#FC_mobileClarityFromSlider::-webkit-slider-thumb,
                            input[type="range"]#FC_mobileClarityToSlider::-webkit-slider-thumb {
                                -webkit-appearance: none;
                                pointer-events: all;
                                width: 16px;
                                height: 16px;
                                background-color: #fff;
                                border-radius: 100%;
                                border: 2px solid #733D80;
                                cursor: pointer;
                                position: relative;
                                z-index: 5;
                            }

                            input[type="range"]#FC_mobileClarityFromSlider::-moz-range-thumb,
                            input[type="range"]#FC_mobileClarityToSlider::-moz-range-thumb {
                                -webkit-appearance: none;
                                pointer-events: all;
                                width: 24px;
                                height: 24px;
                                background-color: #fff;
                                border-radius: 50%;
                                box-shadow: 0 0 0 1px #c6c6c6;
                                cursor: pointer;
                                position: relative;
                                z-index: 5;
                            }

                            input[type="range"]#FC_mobileClarityToSlider {
                                height: 0;
                                z-index: 4;
                            }
                        </style>
                        <script>
                            const FC_mobileClarityFromSlider = document.querySelector("#FC_mobileClarityFromSlider");
                            const FC_mobileClarityToSlider = document.querySelector("#FC_mobileClarityToSlider");
                            const FC_mobileClarityFilterForm = document.querySelector("#FC_mobileClarityFilterForm");

                            function updateFC_MobileClaritySliderColors() {
                                const min = parseInt(FC_mobileClarityFromSlider.min);
                                const max = parseInt(FC_mobileClarityToSlider.max);
                                const from = parseInt(FC_mobileClarityFromSlider.value);
                                const to = parseInt(FC_mobileClarityToSlider.value);

                                const percentFrom = ((from - min) / (max - min)) * 100;
                                const percentTo = ((to - min) / (max - min)) * 100;

                                const gradient = `linear-gradient(to right, 
                                #C6C6C6 0%, 
                                #C6C6C6 ${percentFrom}%, 
                                #733D80 ${percentFrom}%, 
                                #733D80 ${percentTo}%, 
                                #C6C6C6 ${percentTo}%, 
                                #C6C6C6 100%)`;

                                FC_mobileClarityFromSlider.style.background = gradient;
                                FC_mobileClarityToSlider.style.background = gradient;
                            }

                            function syncFC_MobileClarityFromSlider() {
                                let value = Math.min(parseInt(FC_mobileClarityFromSlider.value), parseInt(FC_mobileClarityToSlider.value));
                                FC_mobileClarityFromSlider.value = value;
                                updateFC_MobileClaritySliderColors();
                                FC_mobileClarityFilterForm.submit();
                            }

                            function syncFC_MobileClarityToSlider() {
                                let value = Math.max(parseInt(FC_mobileClarityToSlider.value), parseInt(FC_mobileClarityFromSlider.value));
                                FC_mobileClarityToSlider.value = value;
                                updateFC_MobileClaritySliderColors();
                                FC_mobileClarityFilterForm.submit();
                            }

                            FC_mobileClarityFromSlider.addEventListener("input", syncFC_MobileClarityFromSlider);
                            FC_mobileClarityToSlider.addEventListener("input", syncFC_MobileClarityToSlider);

                            // Initialize slider colors
                            updateFC_MobileClaritySliderColors();
                        </script>
                    </div>
                </div>

                <!-- Advanced Option Filter -->
                <div class="border-t py-4" id="FC_advancedOptionsDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Advanced Options</span>
                        <!-- Down Arrow -->
                        <svg id="FC_advancedOptionsDownArrow" fill="#000000" height="8" width="8"
                            version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 330.002 330.002" xml:space="preserve" class="cursor-pointer">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="XMLID_23_"
                                    d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z">
                                </path>
                            </g>
                        </svg>
                        <!-- Up Arrow -->
                        <svg id="FC_advancedOptionsUpArrow" class="hidden" height="8" width="8" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path style="fill:#000000;"
                                    d="M503.265,330.918L270.532,144.737c-8.501-6.8-20.579-6.8-29.075,0L8.736,330.918 c-7.719,6.173-10.695,16.55-7.422,25.876c3.271,9.326,12.077,15.569,21.96,15.569h465.453c9.883,0,18.689-6.242,21.96-15.569 C513.958,347.466,510.982,337.091,503.265,330.918z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div id="FC_advancedOptionsDropdown" class="hidden mt-4">
                        <div class="flex flex-col items-center gap-4 mx-auto py-4">
                            <!-- Start Mobile Certificate Dropdown -->
                            @php
                                $selectedLab = request()->has('lab') ? explode(',', request()->lab) : [];
                            @endphp
                            <div id="FC_styleMobileDropdownIcon"
                                class="relative flex items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
                                <label
                                    class="block text-xs text-gray-500 font-montserrat mr-3 cursor-pointer">Certificate</label>
                                <!-- Down Arrow -->
                                <svg id="FC_mobileDownArrow" fill="#000000" height="8" width="8"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330.002 330.002"
                                    xml:space="preserve" class="cursor-pointer">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path id="XMLID_23_"
                                            d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z">
                                        </path>
                                    </g>
                                </svg>
                                <svg id="FC_mobileUpArrow" fill="#000000" height="8" width="8" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 330.002 330.002" xml:space="preserve" class="cursor-pointer hidden">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path id="XMLID_23_"
                                            d="M0.845,230.036c2.108,6.011,7.784,10.035,14.154,10.035h300c6.371,0,12.046-4.024,14.154-10.035 c2.109-6.011,0.19-12.699-4.784-16.678l-150.004-120c-2.739-2.191-6.055-3.287-9.37-3.287c-3.316,0-6.631,1.096-9.371,3.287 L0.845,213.358C-1.264,217.347,0.654,223.036,0.845,230.036z">
                                        </path>
                                    </g>
                                </svg>

                                <div id="FC_styleMobileDropdown"
                                    class="hidden absolute top-full left-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
                                    <div class="flex justify-between">
                                        <p class="text-sm font-montserrat font-semibold px-4 py-2">Certificate</p>

                                        <button class="p-2 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-primary">
                                                <line x1="18" y1="6" x2="6" y2="18">
                                                </line>
                                                <line x1="6" y1="6" x2="18" y2="18">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="py-2">
                                        <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                            <input type="checkbox" class="mr-2 accent-black" name="lab[]"
                                            value="GIA" {{ in_array('GIA', $selectedLab) ? 'checked' : '' }}>
                                            <span class="text-sm font-montserrat">IGI</span>
                                        </label>
                                        <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                            <input type="checkbox" class="mr-2 accent-black" name="lab[]"
                                            value="IGI" {{ in_array('IGI', $selectedLab) ? 'checked' : '' }}>
                                            <span class="text-sm font-montserrat">GIA</span>
                                        </label>
                                        <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                            <input type="checkbox" class="mr-2 accent-black" name="lab[]"
                                            value="ROAYA MOISSANITE"
                                                {{ in_array('ROAYA MOISSANITE', $selectedLab) ? 'checked' : '' }}>
                                            <span class="text-sm font-montserrat">ROAYA MOISSANITE</span>
                                        </label>
                                        <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                            <input type="checkbox" class="mr-2 accent-black">
                                            <span class="text-sm font-montserrat">NON CERTIFIED</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- End Mobile Certificate Dropdown -->
                            <!-- Start  Certificate Dropdown Script -->
                            <script>
                                const FC_styleMobileIcon = document.getElementById('FC_styleMobileDropdownIcon');
                                const FC_styleMobileDropdown = document.getElementById('FC_styleMobileDropdown');
                                const FC_mobileDownArrow = document.getElementById('FC_mobileDownArrow');
                                const FC_mobileUpArrow = document.getElementById('FC_mobileUpArrow');

                                FC_styleMobileIcon.addEventListener('click', () => {
                                    FC_styleMobileDropdown.classList.toggle('hidden');
                                    FC_mobileDownArrow.classList.toggle('hidden');
                                    FC_mobileUpArrow.classList.toggle('hidden');
                                });

                                // Close dropdown when clicking outside
                                document.addEventListener('click', (e) => {
                                    if (!FC_styleMobileIcon.contains(e.target) && !FC_styleMobileDropdown.contains(e.target)) {
                                        FC_styleMobileDropdown.classList.add('hidden');
                                        FC_mobileDownArrow.classList.remove('hidden');
                                        FC_mobileUpArrow.classList.add('hidden');
                                    }
                                });

                                // Prevent dropdown from closing when clicking checkboxes
                                const FC_styleMobileCheckboxes = document.querySelectorAll('input[type="checkbox"]');
                                FC_styleMobileCheckboxes.forEach(FC_styleMobileCheckbox => {
                                    FC_styleMobileCheckbox.addEventListener('click', (e) => {
                                        e.stopPropagation();
                                    });
                                });
                            </script>
                            <!-- End Mobile Certificate Dropdown Script -->
                        </div>
                    </div>
                </div>

                <!-- Type Filter -->
                <div class="border-t py-4" id="FC_typeFilterDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Type</span>
                        <!-- Down Arrow -->
                        <svg id="FC_typeFilterDownArrow" fill="#000000" height="8" width="8"
                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330.002 330.002"
                            xml:space="preserve" class="cursor-pointer">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="XMLID_23_"
                                    d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z">
                                </path>
                            </g>
                        </svg>
                        <!-- Up Arrow -->
                        <svg id="FC_typeFilterUpArrow" class="hidden" height="8" width="8" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"
                            fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path style="fill:#000000;"
                                    d="M503.265,330.918L270.532,144.737c-8.501-6.8-20.579-6.8-29.075,0L8.736,330.918 c-7.719,6.173-10.695,16.55-7.422,25.876c3.271,9.326,12.077,15.569,21.96,15.569h465.453c9.883,0,18.689-6.242,21.96-15.569 C513.958,347.466,510.982,337.091,503.265,330.918z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div id="FC_typeFilterDropdown" class="hidden">
                        <div class="flex flex-col items-center gap-3 py-4">
                            <a href="/inventory"
                                class="text-xs text-primary w-64 hover:text-gold border border-primary hover:bg-primary p-2 font-montserrat transition-all duration-300 text-center">WHITE
                                DIAMONDS</a>
                            <a href="{{ route('color.diamond') }}"
                                class="text-xs text-gold w-64 bg-primary border border-primary hover:bg-primary p-2 font-montserrat transition-all duration-300 text-center">FANCY
                                COLOR DIAMONDS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function toggleFilter(id) {
                const content = document.getElementById(id);
                content.classList.toggle('hidden');
            }

            function showFilterDrawer() {
                document.getElementById('FC_filterDrawer').classList.remove('hidden');
            }

            function hideFilterDrawer() {
                document.getElementById('FC_filterDrawer').classList.add('hidden');
            }
        </script>
        <!-- End Mobile Filter Drawer -->

        <!-- Start Shape Svg , Price Range Slider , Carat Slider , Color Slider , Clarity Slider -->
        <div class="hidden lg:grid lg:grid-cols-3 lg:gap-4 px-4 md:px-8 lg:px-12 lg:py-4 3xl:px-40">
            <!-- Shape Svg -->
            <div class="flex items-center">
                <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Shape</h5>
                <div class="flex flex-col">
                    <div class="flex mb-1">
                        <!-- Round -->
                        <a href="{{ route('color.diamond', ['shape' => 'ROUND']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/round.svg') }}" width="25" height="25"
                                alt="Round Shape">
                        </a>

                        <!-- Princess -->
                        <a href="{{ route('color.diamond', ['shape' => 'PRINCESS']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/princess.svg') }}" width="25" height="25"
                                alt="Princess Shape">
                        </a>

                        <!-- Radiant -->
                        <a href="{{ route('color.diamond', ['shape' => 'RADIANT']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/radiant.svg') }}" width="25" height="25"
                                alt="Radiant Shape">
                        </a>

                        <!-- Asscher -->
                        <a href="{{ route('color.diamond', ['shape' => 'ASSCHER']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/asscher.svg') }}" width="25" height="25"
                                alt="Asscher Shape">
                        </a>

                        <!-- Cushion -->
                        <a href="{{ route('color.diamond', ['shape' => 'CUSHION']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/cushion.svg') }}" width="25" height="25"
                                alt="Cushion Shape">
                        </a>

                        <!-- Oval -->
                        <a href="{{ route('color.diamond', ['shape' => 'OVAL']) }} "
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/oval.svg') }}" width="25" height="25"
                                alt="Oval Shape">
                        </a>

                        <!-- Emerald -->
                        <a href=" {{ route('color.diamond', ['shape' => 'EMERALD']) }} "
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/emerald.svg') }}" width="25" height="25"
                                alt="Emerald Shape">
                        </a>

                        <!-- Pear -->
                        <a href="{{ route('color.diamond', ['shape' => 'PEAR']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/pear.svg') }}" width="25" height="25"
                                alt="Pear Shape">
                        </a>

                        <!-- Marquise -->
                        <a href="{{ route('color.diamond', ['shape' => 'MARQUISE']) }} "
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/marquise.svg') }}" width="25" height="25"
                                alt="Marquise Shape">
                        </a>

                        <!-- Heart -->
                        <a href=" {{ route('color.diamond', ['shape' => 'HEART']) }} "
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/heart.svg') }}" width="25" height="25"
                                alt="Heart Shape">
                        </a>
                    </div>
                    <div class="flex">
                        <!-- Rose Cut -->
                        <a href="{{ route('color.diamond', ['shape' => 'ROSE']) }} "
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/rose-cut.svg') }}" width="25" height="25"
                                alt="Rose Cut Shape">
                        </a>

                        <!-- Trapezoid -->
                        <a href=" {{ route('color.diamond', ['shape' => 'TRAPEZOID']) }} "
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/trapezoid.svg') }}" width="25" height="25"
                                alt="Trapezoid Shape">
                        </a>

                        <!-- Triangular -->
                        <a href=" {{ route('color.diamond', ['shape' => 'TRIANGULAR']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/triangular.svg') }}" width="25" height="25"
                                alt="Triangular Shape">
                        </a>
                        <!-- Trilliant -->
                        <a href="{{ route('color.diamond', ['shape' => 'TRILLIANT']) }} "
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/trilliant.svg') }}" width="25" height="25"
                                alt="Trilliant Shape">
                        </a>
                        <!-- Flower -->
                        <a href="{{ route('color.diamond', ['shape' => 'FLOWER']) }} "
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/flower.svg') }}" width="25" height="25"
                                alt="Flower Shape">
                        </a>

                    </div>
                </div>
            </div>
            <!-- End Shape Svg -->

            <!-- Price Range Slider -->
            <div class="flex items-center">
                <h5 class="text-sm text-primary font-montserrat font-semibold mr-3 mt-2">Price</h5>
                <form id="FC_PriceFilterForm" action="{{ route('color.diamond') }}" method="GET"
                    class="w-full max-w-md">
                    <div class="mb-3">
                        <div class="flex justify-between">
                            <div class="pr-2">
                                <input type="number" id="FC_fromPriceInput" name="minPrice"
                                    value="{{ request('minPrice', 100) }}" min="100" max="100000"
                                    class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                            </div>
                            <div class="pl-2">
                                <input type="number" id="FC_toPriceInput" name="maxPrice"
                                    value="{{ request('maxPrice', 100000) }}" min="100" max="100000"
                                    class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                            </div>
                        </div>
                    </div>

                    <div class="relative mb-7">
                        <input id="FC_fromPriceSlider" type="range" value="{{ request('minPrice', 100) }}"
                            min="100" max="100000"
                            class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                        <input id="FC_toPriceSlider" type="range" value="{{ request('maxPrice', 100000) }}"
                            min="100" max="100000"
                            class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                    </div>

                    <div class="flex justify-between text-xs text-gray-500 font-montserrat font-medium">
                        <span>$100</span>
                        <span>$100,000</span>
                    </div>
                </form>
            </div>
            <style>
                input[type="range"]#FC_fromPriceSlider::-webkit-slider-thumb,
                input[type="range"]#FC_toPriceSlider::-webkit-slider-thumb {
                    -webkit-appearance: none;
                    pointer-events: all;
                    width: 16px;
                    height: 16px;
                    background-color: #fff;
                    border-radius: 100%;
                    border: 2px solid #733D80;
                    cursor: pointer;
                    position: relative;
                    z-index: 5;
                }

                input[type="range"]#FC_fromPriceSlider::-moz-range-thumb,
                input[type="range"]#FC_toPriceSlider::-moz-range-thumb {
                    -webkit-appearance: none;
                    appearance: none;
                    height: 4px;
                    width: 100%;
                    position: absolute;
                    background-color: #c6c6c6;
                    pointer-events: all;
                    border-radius: 8px;
                }

                input[type="range"]#FC_fromPriceSlider::-webkit-slider-thumb:hover,
                input[type="range"]#FC_fromPriceSlider::-webkit-slider-thumb:hover {
                    background: #f7f7f7;
                }

                input[type="number"]#FC_fromPriceInput::-webkit-inner-spin-button,
                input[type="number"]#FC_fromPriceInput::-webkit-outer-spin-button {
                    opacity: 1;
                }


                input[type="number"]#FC_toPriceInput::-webkit-inner-spin-button,
                input[type="number"]#FC_toPriceInput::-webkit-outer-spin-button {
                    opacity: 1;
                }

                input[type="range"]#FC_fromPriceSlider,
                input[type="range"]#FC_toPriceSlider {
                    -webkit-appearance: none;
                    appearance: none;
                    height: 4px;
                    width: 100%;
                    position: absolute;
                    background-color: #c6c6c6;
                    pointer-events: all;
                    border-radius: 8px;
                }

                #FC_toPriceSlider {
                    height: 0;
                    z-index: 4;
                }
            </style>
            <script>
                const FC_fromPriceSlider = document.querySelector("#FC_fromPriceSlider");
                const FC_toPriceSlider = document.querySelector("#FC_toPriceSlider");
                const FC_fromPriceInput = document.querySelector("#FC_fromPriceInput");
                const FC_toPriceInput = document.querySelector("#FC_toPriceInput");
                const FC_PriceFilterForm = document.querySelector("#FC_PriceFilterForm"); // Correct reference

                function FC_updatePriceSliderColors() {
                    const min = parseInt(FC_fromPriceSlider.min);
                    const max = parseInt(FC_toPriceSlider.max);
                    const from = parseInt(FC_fromPriceInput.value);
                    const to = parseInt(FC_toPriceInput.value);

                    const percentFrom = ((from - min) / (max - min)) * 100;
                    const percentTo = ((to - min) / (max - min)) * 100;

                    const gradient = `linear-gradient(to right,
                    #C6C6C6 0%,
                    #C6C6C6 ${percentFrom}%, 
                    #733D80 ${percentFrom}%, 
                    #733D80 ${percentTo}%, 
                    #C6C6C6 ${percentTo}%, 
                    #C6C6C6 100%)`;

                    FC_fromPriceSlider.style.background = gradient;
                    FC_toPriceSlider.style.background = gradient;
                }

                function FC_syncPriceFromInput() {
                    let value = Math.min(parseFloat(FC_fromPriceInput.value), parseFloat(FC_toPriceInput.value));
                    FC_fromPriceInput.value = value;
                    FC_fromPriceSlider.value = value;
                    FC_updatePriceSliderColors();
                    FC_PriceFilterForm.submit(); // Fixed form reference
                }

                function FC_syncPriceToInput() {
                    let value = Math.max(parseFloat(FC_toPriceInput.value), parseFloat(FC_fromPriceInput.value));
                    FC_toPriceInput.value = value;
                    FC_toPriceSlider.value = value;
                    FC_updatePriceSliderColors();
                    FC_PriceFilterForm.submit(); // Fixed form reference
                }

                function FC_syncPriceFromSlider() {
                    FC_fromPriceInput.value = FC_fromPriceSlider.value;
                    FC_updatePriceSliderColors();
                    FC_PriceFilterForm.submit(); // Fixed form reference
                }

                function FC_syncPriceToSlider() {
                    FC_toPriceInput.value = FC_toPriceSlider.value;
                    FC_updatePriceSliderColors();
                    FC_PriceFilterForm.submit(); // Fixed form reference
                }

                function handleSliderChange() {
                    FC_PriceFilterForm.submit(); // Fixed incorrect reference
                }

                FC_fromPriceInput.addEventListener("input", FC_syncPriceFromInput, {
                    passive: true
                });
                FC_toPriceInput.addEventListener("input", FC_syncPriceToInput, {
                    passive: true
                });
                FC_fromPriceSlider.addEventListener("input", FC_syncPriceFromSlider, {
                    passive: true
                });
                FC_toPriceSlider.addEventListener("input", FC_syncPriceToSlider, {
                    passive: true
                });

                FC_fromPriceSlider.addEventListener("change", handleSliderChange);
                FC_toPriceSlider.addEventListener("change", handleSliderChange);

                // Initialize slider colors
                FC_updatePriceSliderColors();
            </script>
            <!-- End Price Range Slider -->

            <!-- Carat Slider -->
            <div class="flex items-center">
                <h5 class="text-sm text-primary font-montserrat font-semibold mr-3 mt-2">Carat</h5>
                <form id=FC_caratFilterForm action="{{ route('color.diamond') }}" method="GET" class="w-full">
                    <div class="flex justify-between">
                        <div>
                            <input
                                class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                type="number" name="minCarat" id="FC_fromCaratInput"
                                value="{{ request('minCarat', 0.0) }}" min="0.00" max="60.00"
                                step="0.01" />
                        </div>
                        <div>
                            <input
                                class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                type="number" id="FC_toCaratInput" name="maxCarat"
                                value="{{ request('maxCarat', 60.0) }}" min="0.00" max="60.00"
                                step="0.01" />
                        </div>
                    </div>
                    <div class="relative min-h-7 flex items-center">
                        <input id="FC_fromCaratSlider" type="range" value="{{ request('minCarat', 0.0) }}"
                            min="0" max="60" step="0.01" />
                        <input id="FC_toCaratSlider" type="range" value="{{ request('maxCarat', 60.0) }}"
                            min="0" max="60" step="0.01" />
                    </div>
                    <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
                        <span>0ct</span>
                        <span>60ct</span>
                    </div>
                </form>
            </div>
            <style>
                input[type="range"]#FC_fromCaratSlider::-webkit-slider-thumb,
                input[type="range"]#FC_toCaratSlider::-webkit-slider-thumb {
                    -webkit-appearance: none;
                    pointer-events: all;
                    width: 16px;
                    height: 16px;
                    background-color: #fff;
                    border-radius: 100%;
                    border: 2px solid #733D80;
                    cursor: pointer;
                    position: relative;
                    z-index: 5;
                }

                input[type="range"]#FC_fromCaratSlider,
                input[type="range"]#FC_toCaratSlider {
                    -webkit-appearance: none;
                    appearance: none;
                    height: 4px;
                    width: 100%;
                    position: absolute;
                    background-color: #c6c6c6;
                    pointer-events: all;
                    border-radius: 8px;
                }

                #FC_toCaratSlider {
                    height: 0;
                    z-index: 4;
                }
            </style>
            <script>
                const FC_fromCaratSlider = document.querySelector("#FC_fromCaratSlider");
                const FC_toCaratSlider = document.querySelector("#FC_toCaratSlider");
                const FC_fromCaratInput = document.querySelector("#FC_fromCaratInput");
                const FC_toCaratInput = document.querySelector("#FC_toCaratInput");
                const FC_caratFilterForm = document.querySelector("#FC_caratFilterForm");

                let updatePending = false;

                function FC_updateSliderColors() {
                    if (updatePending) return;
                    updatePending = true;

                    requestAnimationFrame(() => {
                        const min = parseFloat(FC_fromCaratSlider.min);
                        const max = parseFloat(FC_toCaratSlider.max);
                        const from = parseFloat(FC_fromCaratInput.value);
                        const to = parseFloat(FC_toCaratInput.value);

                        const percentFrom = ((from - min) / (max - min)) * 100;
                        const percentTo = ((to - min) / (max - min)) * 100;

                        const gradient = `linear-gradient(to right,
                #C6C6C6 0%, #C6C6C6 ${percentFrom}%, 
                #733D80 ${percentFrom}%, #733D80 ${percentTo}%, 
                #C6C6C6 ${percentTo}%, #C6C6C6 100%)`;

                        FC_fromCaratSlider.style.background = gradient;
                        FC_toCaratSlider.style.background = gradient;

                        updatePending = false;
                    });
                }

                function FC_syncFromInput() {
                    let value = Math.min(parseFloat(FC_fromCaratInput.value), parseFloat(FC_toCaratInput.value));
                    FC_fromCaratInput.value = value;
                    FC_fromCaratSlider.value = value;
                    FC_updateSliderColors();
                }

                function FC_syncToInput() {
                    let value = Math.max(parseFloat(FC_toCaratInput.value), parseFloat(FC_fromCaratInput.value));
                    FC_toCaratInput.value = value;
                    FC_toCaratSlider.value = value;
                    FC_updateSliderColors();
                }

                function FC_syncFromSlider() {
                    FC_fromCaratInput.value = parseFloat(FC_fromCaratSlider.value).toFixed(2);
                    FC_updateSliderColors();
                }

                function FC_syncToSlider() {
                    FC_toCaratInput.value = parseFloat(FC_toCaratSlider.value).toFixed(2);
                    FC_updateSliderColors();
                }

                function handleCaratSliderChange() {
                    FC_caratFilterForm.submit();
                }

                FC_fromCaratInput.addEventListener("input", FC_syncFromInput);
                FC_toCaratInput.addEventListener("input", FC_syncToInput);
                FC_fromCaratSlider.addEventListener("input", FC_syncFromSlider);
                FC_toCaratSlider.addEventListener("input", FC_syncToSlider);

                FC_fromCaratSlider.addEventListener("change", handleCaratSliderChange);
                FC_toCaratSlider.addEventListener("change", handleCaratSliderChange);

                // Initialize slider colors
                FC_updateSliderColors();
            </script>
            <!-- End Carat Slider -->

            <!-- Start Intensity Color  -->
            <div class="flex items-center">
                <h5 class="text-sm text-primary font-montserrat font-semibold mr-3 mb-7">Intensity</h5>
                <div class="flex flex-col">
                    <div class="grid grid-cols-2 lg:grid-cols-6 gap-2">
                        <!-- Fancy Light (0.20) -->
                        <div class="flex flex-col group">
                            <a href="{{ route('color.diamond', ['intensity' => 'FANCY LIGHT']) }}"
                                onclick="window.location=this.href;"
                                class="intensity-color-item font-montserrat text-sm leading-5 font-normal flex flex-col items-center text-center border border-gray-300 py-3 w-14 rounded-md hover:border-primary hover:text-primary transition"
                                data-color="yellow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 53"
                                    class="w-5 h-5 fill-yellow-500/20">
                                    <g transform="translate(0,53) scale(0.1,-0.1)">
                                        <path
                                            d="M127 471 l-98 -58 36 -22 36 -21 65 36 c64 36 64 36 64 80 0 24 -1 44 -2 43 -2 0 -47 -26 -101 -58z">
                                        </path>
                                        <path d="M262 483 c3 -43 5 -46 63 -79 l61 -33 36 22 36 22 -100 57 -99 57 3 -46z">
                                        </path>
                                        <path
                                            d="M178 374 l-58 -35 0 -69 0 -70 41 -25 c79 -50 81 -51 145 -13 l59 34 3 71 3 72 -64 35 c-35 20 -66 36 -68 35 -2 0 -30 -16 -61 -35z">
                                        </path>
                                        <path
                                            d="M10 270 c0 -60 3 -110 6 -110 4 0 22 9 40 21 33 20 34 22 34 89 0 67 0 68 -36 89 -19 12 -37 21 -40 21 -2 0 -4 -49 -4 -110z">
                                        </path>
                                        <path
                                            d="M433 358 c-32 -19 -33 -22 -33 -89 0 -67 1 -70 33 -89 17 -11 35 -20 40 -20 4 0 7 50 7 110 0 61 -3 110 -7 109 -5 0 -23 -10 -40 -21z">
                                        </path>
                                        <path
                                            d="M65 145 l-37 -22 58 -33 c33 -18 78 -44 102 -57 l42 -25 0 44 c0 42 -1 43 -64 79 l-64 37 -37 -23z">
                                        </path>
                                        <path
                                            d="M322 132 c-61 -36 -62 -37 -62 -80 0 -44 0 -44 23 -30 12 8 57 34 99 58 43 24 77 44 75 45 -1 1 -18 11 -37 23 l-36 21 -62 -37z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                            <span
                                class="text-primary text-10px opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap text-center">
                                Fancy Light
                            </span>
                        </div>


                        <!-- Fancy (0.30) -->
                        <div class="flex flex-col group">
                            <a href="{{ route('color.diamond', ['intensity' => 'FANCY']) }}"
                                onclick="window.location=this.href;""
                                class=" intensity-color-item font-montserrat text-sm leading-5 font-normal flex flex-col items-center text-center border border-gray-300 py-3 w-14 rounded-md hover:border-primary hover:text-primary transition"
                                data-color="yellow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 53"
                                    class="w-5 h-5 fill-yellow-500/30">
                                    <g transform="translate(0,53) scale(0.1,-0.1)">
                                        <path
                                            d="M127 471 l-98 -58 36 -22 36 -21 65 36 c64 36 64 36 64 80 0 24 -1 44 -2 43 -2 0 -47 -26 -101 -58z">
                                        </path>
                                        <path d="M262 483 c3 -43 5 -46 63 -79 l61 -33 36 22 36 22 -100 57 -99 57 3 -46z">
                                        </path>
                                        <path
                                            d="M178 374 l-58 -35 0 -69 0 -70 41 -25 c79 -50 81 -51 145 -13 l59 34 3 71 3 72 -64 35 c-35 20 -66 36 -68 35 -2 0 -30 -16 -61 -35z">
                                        </path>
                                        <path
                                            d="M10 270 c0 -60 3 -110 6 -110 4 0 22 9 40 21 33 20 34 22 34 89 0 67 0 68 -36 89 -19 12 -37 21 -40 21 -2 0 -4 -49 -4 -110z">
                                        </path>
                                        <path
                                            d="M433 358 c-32 -19 -33 -22 -33 -89 0 -67 1 -70 33 -89 17 -11 35 -20 40 -20 4 0 7 50 7 110 0 61 -3 110 -7 109 -5 0 -23 -10 -40 -21z">
                                        </path>
                                        <path
                                            d="M65 145 l-37 -22 58 -33 c33 -18 78 -44 102 -57 l42 -25 0 44 c0 42 -1 43 -64 79 l-64 37 -37 -23z">
                                        </path>
                                        <path
                                            d="M322 132 c-61 -36 -62 -37 -62 -80 0 -44 0 -44 23 -30 12 8 57 34 99 58 43 24 77 44 75 45 -1 1 -18 11 -37 23 l-36 21 -62 -37z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                            <span
                                class="text-primary text-10px opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap text-center">
                                Fancy
                            </span>
                        </div>

                        <!-- Fancy Intense (0.40) -->
                        <div class="flex flex-col group">
                            <a href="{{ route('color.diamond', ['intensity' => 'FANCY INTENSE']) }}"
                                onclick="window.location=this.href;""
                                class=" intensity-color-item font-montserrat text-sm leading-5 font-normal flex flex-col items-center text-center border border-gray-300 py-3 w-14 rounded-md hover:border-primary hover:text-primary transition"
                                data-color="yellow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 53"
                                    class="w-5 h-5 fill-yellow-500/40">
                                    <g transform="translate(0,53) scale(0.1,-0.1)">
                                        <path
                                            d="M127 471 l-98 -58 36 -22 36 -21 65 36 c64 36 64 36 64 80 0 24 -1 44 -2 43 -2 0 -47 -26 -101 -58z">
                                        </path>
                                        <path d="M262 483 c3 -43 5 -46 63 -79 l61 -33 36 22 36 22 -100 57 -99 57 3 -46z">
                                        </path>
                                        <path
                                            d="M178 374 l-58 -35 0 -69 0 -70 41 -25 c79 -50 81 -51 145 -13 l59 34 3 71 3 72 -64 35 c-35 20 -66 36 -68 35 -2 0 -30 -16 -61 -35z">
                                        </path>
                                        <path
                                            d="M10 270 c0 -60 3 -110 6 -110 4 0 22 9 40 21 33 20 34 22 34 89 0 67 0 68 -36 89 -19 12 -37 21 -40 21 -2 0 -4 -49 -4 -110z">
                                        </path>
                                        <path
                                            d="M433 358 c-32 -19 -33 -22 -33 -89 0 -67 1 -70 33 -89 17 -11 35 -20 40 -20 4 0 7 50 7 110 0 61 -3 110 -7 109 -5 0 -23 -10 -40 -21z">
                                        </path>
                                        <path
                                            d="M65 145 l-37 -22 58 -33 c33 -18 78 -44 102 -57 l42 -25 0 44 c0 42 -1 43 -64 79 l-64 37 -37 -23z">
                                        </path>
                                        <path
                                            d="M322 132 c-61 -36 -62 -37 -62 -80 0 -44 0 -44 23 -30 12 8 57 34 99 58 43 24 77 44 75 45 -1 1 -18 11 -37 23 l-36 21 -62 -37z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                            <span
                                class="text-primary text-10px opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap text-center">
                                Fancy Intense
                            </span>
                        </div>

                        <!-- Fancy Vivid (0.60) -->
                        <div class="flex flex-col group">
                            <a href="{{ route('color.diamond', ['intensity' => 'FANCY VIVID']) }}"
                                onclick="window.location=this.href;""
                                class=" intensity-color-item font-montserrat text-sm leading-5 font-normal flex flex-col items-center text-center border border-gray-300 py-3 w-14 rounded-md hover:border-primary hover:text-primary transition"
                                data-color="yellow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 53"
                                    class="w-5 h-5 fill-yellow-500/60">
                                    <g transform="translate(0,53) scale(0.1,-0.1)">
                                        <path
                                            d="M127 471 l-98 -58 36 -22 36 -21 65 36 c64 36 64 36 64 80 0 24 -1 44 -2 43 -2 0 -47 -26 -101 -58z">
                                        </path>
                                        <path d="M262 483 c3 -43 5 -46 63 -79 l61 -33 36 22 36 22 -100 57 -99 57 3 -46z">
                                        </path>
                                        <path
                                            d="M178 374 l-58 -35 0 -69 0 -70 41 -25 c79 -50 81 -51 145 -13 l59 34 3 71 3 72 -64 35 c-35 20 -66 36 -68 35 -2 0 -30 -16 -61 -35z">
                                        </path>
                                        <path
                                            d="M10 270 c0 -60 3 -110 6 -110 4 0 22 9 40 21 33 20 34 22 34 89 0 67 0 68 -36 89 -19 12 -37 21 -40 21 -2 0 -4 -49 -4 -110z">
                                        </path>
                                        <path
                                            d="M433 358 c-32 -19 -33 -22 -33 -89 0 -67 1 -70 33 -89 17 -11 35 -20 40 -20 4 0 7 50 7 110 0 61 -3 110 -7 109 -5 0 -23 -10 -40 -21z">
                                        </path>
                                        <path
                                            d="M65 145 l-37 -22 58 -33 c33 -18 78 -44 102 -57 l42 -25 0 44 c0 42 -1 43 -64 79 l-64 37 -37 -23z">
                                        </path>
                                        <path
                                            d="M322 132 c-61 -36 -62 -37 -62 -80 0 -44 0 -44 23 -30 12 8 57 34 99 58 43 24 77 44 75 45 -1 1 -18 11 -37 23 l-36 21 -62 -37z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                            <span
                                class="text-primary text-10px opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap text-center">
                                Fancy Vivid
                            </span>
                        </div>

                        <!-- Fancy Deep (0.80) -->
                        <div class="flex flex-col group">
                            <a href="{{ route('color.diamond', ['intensity' => 'FANCY DEEP']) }}"
                                onclick="window.location=this.href;""
                                class=" intensity-color-item font-montserrat text-sm leading-5 font-normal flex flex-col items-center text-center border border-gray-300 py-3 w-14 rounded-md hover:border-primary hover:text-primary transition"
                                data-color="yellow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 53"
                                    class="w-5 h-5 fill-yellow-500/80">
                                    <g transform="translate(0,53) scale(0.1,-0.1)">
                                        <path
                                            d="M127 471 l-98 -58 36 -22 36 -21 65 36 c64 36 64 36 64 80 0 24 -1 44 -2 43 -2 0 -47 -26 -101 -58z">
                                        </path>
                                        <path d="M262 483 c3 -43 5 -46 63 -79 l61 -33 36 22 36 22 -100 57 -99 57 3 -46z">
                                        </path>
                                        <path
                                            d="M178 374 l-58 -35 0 -69 0 -70 41 -25 c79 -50 81 -51 145 -13 l59 34 3 71 3 72 -64 35 c-35 20 -66 36 -68 35 -2 0 -30 -16 -61 -35z">
                                        </path>
                                        <path
                                            d="M10 270 c0 -60 3 -110 6 -110 4 0 22 9 40 21 33 20 34 22 34 89 0 67 0 68 -36 89 -19 12 -37 21 -40 21 -2 0 -4 -49 -4 -110z">
                                        </path>
                                        <path
                                            d="M433 358 c-32 -19 -33 -22 -33 -89 0 -67 1 -70 33 -89 17 -11 35 -20 40 -20 4 0 7 50 7 110 0 61 -3 110 -7 109 -5 0 -23 -10 -40 -21z">
                                        </path>
                                        <path
                                            d="M65 145 l-37 -22 58 -33 c33 -18 78 -44 102 -57 l42 -25 0 44 c0 42 -1 43 -64 79 l-64 37 -37 -23z">
                                        </path>
                                        <path
                                            d="M322 132 c-61 -36 -62 -37 -62 -80 0 -44 0 -44 23 -30 12 8 57 34 99 58 43 24 77 44 75 45 -1 1 -18 11 -37 23 l-36 21 -62 -37z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                            <span
                                class="text-primary text-10px opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap text-center">
                                Fancy Deep
                            </span>
                        </div>

                        <!-- Fancy Dark (100) -->
                        <div class="flex flex-col group">
                            <a href="{{ route('color.diamond', ['intensity' => 'FANCY DARK']) }}"
                                onclick="window.location=this.href;""
                                class=" intensity-color-item font-montserrat text-sm leading-5 font-normal flex flex-col items-center text-center border border-gray-300 py-3 w-14 rounded-md hover:border-primary hover:text-primary transition"
                                data-color="yellow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 53"
                                    class="w-5 h-5 fill-yellow-500">
                                    <g transform="translate(0,53) scale(0.1,-0.1)">
                                        <path
                                            d="M127 471 l-98 -58 36 -22 36 -21 65 36 c64 36 64 36 64 80 0 24 -1 44 -2 43 -2 0 -47 -26 -101 -58z">
                                        </path>
                                        <path d="M262 483 c3 -43 5 -46 63 -79 l61 -33 36 22 36 22 -100 57 -99 57 3 -46z">
                                        </path>
                                        <path
                                            d="M178 374 l-58 -35 0 -69 0 -70 41 -25 c79 -50 81 -51 145 -13 l59 34 3 71 3 72 -64 35 c-35 20 -66 36 -68 35 -2 0 -30 -16 -61 -35z">
                                        </path>
                                        <path
                                            d="M10 270 c0 -60 3 -110 6 -110 4 0 22 9 40 21 33 20 34 22 34 89 0 67 0 68 -36 89 -19 12 -37 21 -40 21 -2 0 -4 -49 -4 -110z">
                                        </path>
                                        <path
                                            d="M433 358 c-32 -19 -33 -22 -33 -89 0 -67 1 -70 33 -89 17 -11 35 -20 40 -20 4 0 7 50 7 110 0 61 -3 110 -7 109 -5 0 -23 -10 -40 -21z">
                                        </path>
                                        <path
                                            d="M65 145 l-37 -22 58 -33 c33 -18 78 -44 102 -57 l42 -25 0 44 c0 42 -1 43 -64 79 l-64 37 -37 -23z">
                                        </path>
                                        <path
                                            d="M322 132 c-61 -36 -62 -37 -62 -80 0 -44 0 -44 23 -30 12 8 57 34 99 58 43 24 77 44 75 45 -1 1 -18 11 -37 23 l-36 21 -62 -37z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                            <span
                                class="text-primary text-10px opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap text-center">
                                Fancy Dark
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Intensity Color  -->

            <!-- Cut Slider -->
            <div class="flex items-center justify-center">
                <h5 class="text-sm text-primary font-montserrat font-semibold mr-3 mb-4">Cut</h5>
                <form id=FC_cutFilterForm action="{{ route('color.diamond') }}" class="w-full max-w-md">
                    <div class="relative mb-3 flex items-center mt-3">
                        <input id="FC_fromCutSlider" name="fromCutSlider" type="range"
                            value="{{ request('fromCutSlider', 0) }}" min="0" max="4" step="1"
                            class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                        <input id="FC_toCutSlider" name="toCutSlider" type="range"
                            value="{{ request('toCutSlider', 4) }}" min="0" max="4" step="1"
                            class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                    </div>

                    <div class="flex justify-between text-xs text-gray-500 font-montserrat font-medium">
                        <span>Fair</span>
                        <span>Good</span>
                        <span>Very Good</span>
                        <span>Excellent</span>
                        <span>Ideal</span>
                    </div>
                </form>
            </div>
            <style>
                input[type="range"]#FC_fromCutSlider::-webkit-slider-thumb,
                input[type="range"]#FC_toCutSlider::-webkit-slider-thumb {
                    -webkit-appearance: none;
                    pointer-events: all;
                    width: 16px;
                    height: 16px;
                    background-color: #fff;
                    border-radius: 100%;
                    border: 2px solid #733D80;
                    cursor: pointer;
                    position: relative;
                    z-index: 5;
                }

                input[type="range"]#FC_fromCutSlider::-moz-range-thumb,
                input[type="range"]#FC_toCutSlider::-moz-range-thumb {
                    -webkit-appearance: none;
                    pointer-events: all;
                    width: 24px;
                    height: 24px;
                    background-color: #fff;
                    border-radius: 50%;
                    box-shadow: 0 0 0 1px #c6c6c6;
                    cursor: pointer;
                    position: relative;
                    z-index: 5;
                }

                input[type="range"]#FC_toCutSlider {
                    height: 0;
                    z-index: 4;
                }
            </style>
            <script>
                const FC_fromCutSlider = document.querySelector("#FC_fromCutSlider");
                const FC_toCutSlider = document.querySelector("#FC_toCutSlider");
                const FC_cutFilterForm = document.querySelector("#FC_cutFilterForm");

                function FC_updateCutSliderColors() {
                    const min = parseInt(FC_fromCutSlider.min);
                    const max = parseInt(FC_toCutSlider.max);
                    const from = parseInt(FC_fromCutSlider.value);
                    const to = parseInt(FC_toCutSlider.value);

                    const percentFrom = ((from - min) / (max - min)) * 100;
                    const percentTo = ((to - min) / (max - min)) * 100;

                    const gradient = `linear-gradient(to right, 
                    #C6C6C6 0%, 
                    #C6C6C6 ${percentFrom}%, 
                    #733D80 ${percentFrom}%, 
                    #733D80 ${percentTo}%, 
                    #C6C6C6 ${percentTo}%, 
                    #C6C6C6 100%)`;

                    FC_fromCutSlider.style.background = gradient;
                    FC_toCutSlider.style.background = gradient;
                }

                function FC_syncCutFromSlider() {
                    let value = Math.min(parseInt(FC_fromCutSlider.value), parseInt(FC_toCutSlider.value));
                    FC_fromCutSlider.value = value;
                    FC_updateCutSliderColors();
                    FC_cutFilterForm.submit();
                }

                function FC_syncCutToSlider() {
                    let value = Math.max(parseInt(FC_toCutSlider.value), parseInt(FC_fromCutSlider.value));
                    FC_toCutSlider.value = value;
                    FC_updateCutSliderColors();
                    FC_cutFilterForm.submit();
                }

                FC_fromCutSlider.addEventListener("input", FC_syncCutFromSlider);
                FC_toCutSlider.addEventListener("input", FC_syncCutToSlider);

                // Initialize slider colors
                FC_updateCutSliderColors();
            </script>
            <!-- End Cut Slider -->

            <!-- Clarity Slider -->
            <div class="flex items-center">
                <h5 class="text-sm text-primary font-montserrat font-semibold mr-3 mb-4">Clarity</h5>
                <div class="w-full max-w-md mt-3">
                    <form id=FC_clarityFilterForm action="{{ route('color.diamond') }}" method="GET">
                        <div class="relative mb-3 flex items-center">
                            <input id="FC_fromClaritySlider" name="fromClaritySlider" type="range"
                                value="{{ request('fromClaritySlider', 0) }}" min="0" max="11"
                                step="1"
                                class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                            <input id="FC_toClaritySlider" name="toClaritySlider" type="range"
                                value="{{ request('toClaritySlider', 11) }}" min="0" max="11"
                                step="1"
                                class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                        </div>
                    </form>
                    <div class="flex justify-between text-xs text-gray-500 font-montserrat font-medium">
                        <span>I2</span>
                        <span>I1</span>
                        <span>SI3</span>
                        <span>SI2</span>
                        <span>SI1</span>
                        <span>VS2</span>
                        <span>VS1</span>
                        <span>VVS2</span>
                        <span>VVS1</span>
                        <span>IF</span>
                        <span>FL</span>
                    </div>
                </div>
            </div>
            <style>
                input[type="range"]#FC_fromClaritySlider::-webkit-slider-thumb,
                input[type="range"]#FC_toClaritySlider::-webkit-slider-thumb {
                    -webkit-appearance: none;
                    pointer-events: all;
                    width: 16px;
                    height: 16px;
                    background-color: #fff;
                    border-radius: 100%;
                    border: 2px solid #733D80;
                    cursor: pointer;
                    position: relative;
                    z-index: 5;
                }

                input[type="range"]#FC_fromClaritySlider::-moz-range-thumb,
                input[type="range"]#FC_toClaritySlider::-moz-range-thumb {
                    -webkit-appearance: none;
                    pointer-events: all;
                    width: 24px;
                    height: 24px;
                    background-color: #fff;
                    border-radius: 50%;
                    box-shadow: 0 0 0 1px #c6c6c6;
                    cursor: pointer;
                    position: relative;
                    z-index: 5;
                }

                input[type="range"]#FC_toClaritySlider {
                    height: 0;
                    z-index: 4;
                }
            </style>
            <script>
                const FC_fromClaritySlider = document.querySelector("#FC_fromClaritySlider");
                const FC_toClaritySlider = document.querySelector("#FC_toClaritySlider");
                const FC_clarityFilterForm = document.querySelector("#FC_clarityFilterForm");

                function FC_updateClaritySliderColors() {
                    const min = parseInt(FC_fromClaritySlider.min);
                    const max = parseInt(FC_toClaritySlider.max);
                    const from = parseInt(FC_fromClaritySlider.value);
                    const to = parseInt(FC_toClaritySlider.value);

                    const percentFrom = ((from - min) / (max - min)) * 100;
                    const percentTo = ((to - min) / (max - min)) * 100;

                    const gradient = `linear-gradient(to right, 
                    #C6C6C6 0%, 
                    #C6C6C6 ${percentFrom}%, 
                    #733D80 ${percentFrom}%, 
                    #733D80 ${percentTo}%, 
                    #C6C6C6 ${percentTo}%, 
                    #C6C6C6 100%)`;

                    FC_fromClaritySlider.style.background = gradient;
                    FC_toClaritySlider.style.background = gradient;
                }

                function FC_syncClarityFromSlider() {
                    let value = Math.min(parseInt(FC_fromClaritySlider.value), parseInt(FC_toClaritySlider.value));
                    FC_fromClaritySlider.value = value;
                    FC_updateClaritySliderColors();
                    FC_clarityFilterForm.submit();
                }

                function FC_syncClarityToSlider() {
                    let value = Math.max(parseInt(FC_toClaritySlider.value), parseInt(FC_fromClaritySlider.value));
                    FC_toClaritySlider.value = value;
                    FC_updateClaritySliderColors();
                    FC_clarityFilterForm.submit();
                }

                FC_fromClaritySlider.addEventListener("input", FC_syncClarityFromSlider);
                FC_toClaritySlider.addEventListener("input", FC_syncClarityToSlider);

                // Initialize slider colors
                FC_updateClaritySliderColors();
            </script>
            <!-- End Clarity Slider -->
        </div>
        <!-- End Shape Svg , Price Range Slider , Carat Slider , Color Slider , Clarity Slider -->

        <!-- Start Advanced Options -->
        <div class="hidden lg:flex lg:felx-row items-center gap-3 px-4 md:px-8 lg:px-12 3xl:px-40 py-5">
            <h3 class="text-sm text-primary font-montserrat font-semibold">Certificate</h3>
            <div class="flex flex-col lg:flex-row lg:justify-between items-start w-full">

                <div class="space-x-2">
                    @php
                        $selectedLab = request('lab');
                        $labs = ['IGI', 'GIA', 'NON-CERT'];
                    @endphp
                    @foreach ($labs as $lab)
                        <a href="{{ route('color.diamond', array_merge(request()->query(), ['lab' => $selectedLab === $lab ? null : $lab])) }}"
                            class="cert-btn border px-4 py-1.5 text-sm rounded-md text-gray-700 hover:bg-primary hover:text-white 
                    {{ $selectedLab === $lab ? 'bg-primary text-white' : '' }}">
                            {{ $lab }}
                        </a>
                    @endforeach
                </div>

                <!-- Start Type Dropdown -->
                <div class="flex flex-row items-center gap-3">
                    <p class="font-montserrat font-semibold text-sm">Type</p>
                    <a href="/inventory"
                        class="text-xs w-36 text-center text-primary hover:text-gold border border-primary hover:bg-primary p-2 rounded-sm font-montserrat transition-all duration-300">WHITE
                        DIAMONDS</a>
                    <a href="{{ route('color.diamond') }}"
                        class="text-xs w-48 text-center text-gold bg-primary border border-primary hover:bg-primary p-2 rounded-sm font-montserrat transition-all duration-300">FANCY
                        COLOR DIAMONDS</a>
                </div>
                <!-- End Type Dropdown -->
            </div>
        </div>
        <!-- End Advanced Options -->

        <!-- Start Search Box And Clear Filters Button -->
        <div class="flex justify-between items-center md:px-10 py-5">
            <!-- Left side search box with icon -->
            <div class="relative flex items-center w-full md:w-96">
                <input type="text" placeholder="Search"
                    class="w-96 px-4 py-2.5 border border-gray-300 font-montserrat text-sm placeholder:text-xs placeholder:font-medium focus:outline-none focus:border-black">
                <div class="absolute right-0 h-full flex items-center">
                    <button class="h-full px-4 bg-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right side clear filter button -->
            <button onclick="clearFilters()"
                class="hidden md:flex items-center gap-2 text-sm font-montserrat text-gray-600 hover:text-primary">
                <span>Clear Filters</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <!-- Clear Filter Script -->
            <script>
                function clearFilters() {
                    const url = new URL(window.location.href);
                    url.searchParams.delete('shape');
                    url.searchParams.delete('color');
                    url.searchParams.delete('intensity');
                    url.searchParams.delete('minPrice');
                    url.searchParams.delete('maxPrice');
                    url.searchParams.delete('minCarat');
                    url.searchParams.delete('maxCarat');
                    url.searchParams.delete('fromCutSlider');
                    url.searchParams.delete('toCutSlider');
                    url.searchParams.delete('fromClaritySlider');
                    url.searchParams.delete('toClaritySlider');
                    url.searchParams.delete('lab');
                    url.searchParams.delete('growth_type');
                    url.searchParams.delete('table_min');
                    url.searchParams.delete('table_max');
                    url.searchParams.delete('l_w_ratio_min');
                    url.searchParams.delete('l_w_ratio_max');
                    url.searchParams.delete('search');
                    window.location.href = url.toString();
                }
            </script>
            <!-- End Clear Filter Script -->
        </div>
        <!-- End Search Box And Clear Filters Button -->

        <!-- Start Table -->
        <div class="overflow-x-auto md:px-10">
            <table class="min-w-[800px] lg:w-full">
                <thead class="bg-primary">
                    <tr class="border-b">
                        <th class="py-4 pl-5 text-left w-1/5">
                            <div class="flex items-center gap-1 text-gold cursor-pointer" onclick="sortTable(0)">
                                <span class="text-sm font-montserrat font-semibold">Shape</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                </svg>
                            </div>
                        </th>
                        <th class="py-4 text-left">
                            <div class="flex items-center gap-1 text-gold cursor-pointer" onclick="sortTable(1)">
                                <span class="text-sm font-montserrat font-semibold">Carat</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                </svg>
                            </div>
                        </th>
                        <th class="py-4 text-left">
                            <div class="flex items-center gap-1 text-gold cursor-pointer" onclick="sortTable(2)">
                                <span class="text-sm font-montserrat font-semibold">Cut</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                </svg>
                            </div>
                        </th>
                        <th class="py-4 text-left">
                            <div class="flex items-center gap-1 text-gold cursor-pointer" onclick="sortTable(3)">
                                <span class="text-sm font-montserrat font-semibold">Intensity</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                </svg>
                            </div>
                        </th>
                        <th class="py-4 text-left">
                            <div class="flex items-center gap-1 text-gold cursor-pointer" onclick="sortTable(4)">
                                <span class="text-sm font-montserrat font-semibold">Clarity</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                </svg>
                            </div>
                        </th>
                        <th class="py-4 text-left">
                            <div class="flex items-center gap-1 text-gold cursor-pointer" onclick="sortTable(5)">
                                <span class="text-sm font-montserrat font-semibold">Price (USD)</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                </svg>
                            </div>
                        </th>
                        <th class="py-4"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($diamonds as $diamond)
                        <tr class="border-b cursor-pointer" onclick="toggleDetails({{ $diamond->id }})">
                            <td class="py-4 flex flex-row gap-2 items-center text-sm font-montserrat">
                                <img src="{{ asset($diamond->color_shape_svg) }}" width="25" height="25"
                                    class="group-hover:text-dark-blue mb-2" alt="{{ $diamond->shaoe }} Shape">
                                <span class="pb-1 font-medium">{{ $diamond->shape }}</span>
                                <span class="text-xs text-red-600 uppercase pb-1">Sale</span>
                            </td>
                            <td class="py-4 text-sm font-montserrat">{{ $diamond->carat }}</td>
                            <td class="py-4 text-sm font-montserrat">{{ $diamond->cut }}</td>
                            <td class="py-4 text-sm font-montserrat">{{ $diamond->intensity }}</td>
                            <td class="py-4 text-sm font-montserrat">{{ $diamond->clarity }}</td>
                            <td class="py-4 text-sm font-montserrat">

                                <span class="text-gray-600 line-through text-xs">$1499</span>
                                <span class="text-red-600">{{ $diamond->original_price }}</span>
                            </td>
                            <td class="py-4">
                                <button
                                    class="px-4 py-2 text-sm font-montserrat text-gold bg-primary rounded hover:bg-white border border-primary hover:text-primary hover:border-primary transition-all duration-300">View
                                    More</button>
                            </td>
                        </tr>


                        <tr id="details-{{ $diamond->id }}"
                            class="content hidden transition-all duration-200 ease-in-out max-h-0 overflow-hidden opacity-0">
                            <td colspan="7" class="relative">
                                <button onclick="toggleDetails(1)"
                                    class="absolute right-4 top-4 text-gray-500 hover:text-primary">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <div class="grid grid-cols-2 gap-8 my-10">
                                    <!-- Left Side -->
                                    <div class="flex flex-col items-center gap-3">
                                        <div class="flex items-center justify-center">
                                            <img src="{{ asset($diamond->image_link ?? $diamond->color_shape_svg) }}"
                                                class="w-40" alt="{{ $diamond->name }}">
                                        </div>

                                        <div class="text-center">
                                            <p class="text-2xl font-montserrat font-semibold text-gray-800">
                                                {{ ucwords($diamond->name) }}</p>
                                            <div class="mt-1">
                                                <span
                                                    class="text-gray-600 line-through text-lg font-montserrat font-medium">$1499</span>
                                                <span
                                                    class="text-xl ml-1 font-montserrat font-semibold">{{ $diamond->original_price }}</span>
                                            </div>
                                        </div>

                                        <div class="flex gap-4 justify-center mt-2">
                                            <form action="{{ route('cart.add') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $diamond->id }}">
                                                <input type="hidden" name="name" value="{{ $diamond->name }}">
                                                <input type="hidden" name="shape" value="{{ $diamond->shape }}">
                                                <input type="hidden" name="original_price"
                                                    value="{{ $diamond->original_price }}">
                                                <input type="hidden" name="carat" value="{{ $diamond->carat }}">
                                                <input type="hidden" name="cut" value="{{ $diamond->cut }}">
                                                <input type="hidden" name="intensity"
                                                    value="{{ $diamond->intensity }}">
                                                <input type="hidden" name="clarity"
                                                    value="{{ $diamond->clarity }}">
                                                <input type="hidden" name="images"
                                                    value="{{ $diamond->image_link ?? $diamond->shape_svg }}">
                                                <input type="hidden" name="size" value="{{ $diamond->size }}">
                                                <input type="hidden" name="sku" value="{{ $diamond->sku }}">
                                                <input type="hidden" name="quantity" value="1">
                                                <!-- <input type="hidden" name="mrp" value="{{ $diamond->mrp }}"> -->
                                                @php
                                                    $diamondType = '';
                                                    if (get_class($diamond) === 'App\\Models\\ColorDiamond') {
                                                        $diamondType = 'fancy';
                                                    }
                                                @endphp

                                                <input type="hidden" name="diamond_type"
                                                    value="{{ $diamondType }}">
                                                <button
                                                    class="px-6 py-2.5 bg-primary text-sm text-gold rounded-sm hover:bg-white hover:text-primary transition-colors duration-300 flex items-center font-montserrat border border-primary gap-2">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                    </svg>
                                                    Add to Bag
                                                </button>
                                            </form>
                                            @if ($diamond->video_url)
                                                <a href="{{ asset($diamond->video_url) }}" target="_blank">
                                                    <button
                                                        class="px-6 py-2.5 text-sm border border-primary text-primary rounded-sm hover:bg-primary hover:text-gold hover:border-primary transition-colors duration-300 flex items-center font-montserrat gap-2">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                        Play Video
                                                    </button>
                                                </a>
                                            @endif
                                        </div>

                                        <a href="{{ asset($diamond->certificate_link) }}"
                                            class="text-primary underline-offset-2 underline text-center mt-1 text-xs font-montserrat font-bold">
                                            View Diamond Certificate
                                        </a>

                                        <span class="text-xs text-gray-500 mt-1 font-montserrat ">Diamond photo is for
                                            visual purposes only. Play Video for a real diamond.</span>
                                    </div>

                                    <!-- Right Side -->
                                    <div>
                                        <h3 class="text-lg text-primary font-montserrat font-semibold uppercase mb-4">
                                            Diamond Details</h3>
                                        <table class="w-full border-collapse">
                                            <tbody>
                                                <tr class="border-b">
                                                    <td
                                                        class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                        Carat</td>
                                                    <td
                                                        class="font-montserrat font-semibold text-gray-600 uppercase py-2">
                                                        {{ $diamond->carat }}</td>
                                                </tr>
                                                <tr class="border-b">
                                                    <td
                                                        class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                        Size (mm)</td>
                                                    <td
                                                        class="font-montserrat font-semibold text-gray-600 uppercase py-2">
                                                        {{ $diamond->size }}</td>
                                                </tr>
                                                <tr class="border-b">
                                                    <td
                                                        class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                        Cut</td>
                                                    <td class="py-2">
                                                        <div class="flex flex-col">
                                                            <span
                                                                class="font-montserrat font-semibold text-gray-600">{{ $diamond->cut ?? 'Not available cut for this diamond' }}</span>
                                                            <span
                                                                class="font-montserrat text-sm text-gray-500">{{ $diamond->color_cut_description }}</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b">
                                                    <td
                                                        class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                        INTENSITY</td>
                                                    <td class="py-2">
                                                        <div class="flex flex-col">
                                                            <span
                                                                class="font-montserrat font-semibold text-gray-600">{{ $diamond->intensity }}</span>
                                                            <span
                                                                class="font-montserrat text-sm text-gray-500">{{ $diamond->intensity_description }}</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b">
                                                    <td
                                                        class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                        Clarity</td>
                                                    <td class="py-2">
                                                        <div class="flex flex-col">
                                                            <span
                                                                class="font-montserrat font-semibold text-gray-600">{{ $diamond->clarity }}</span>
                                                            <span
                                                                class="font-montserrat text-sm text-gray-500">{{ $diamond->color_clarity_description }}</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-b">
                                                    <td
                                                        class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                        In The Box</td>
                                                    <td
                                                        class="font-montserrat font-semibold text-gray-600 uppercase py-2">
                                                        Diamond, {{ $diamond->lab }} Certificate.</td>
                                                </tr>
                                                <tr class="border-b">
                                                    <td
                                                        class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                        Table & Depth</td>
                                                    <td
                                                        class="font-montserrat font-semibold text-gray-600 uppercase py-2">
                                                        {{ $diamond->table }}%</td>
                                                </tr>
                                                <tr class="border-b">
                                                    <td
                                                        class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                        SKU</td>
                                                    <td
                                                        class="font-montserrat font-semibold text-gray-600 uppercase py-2">
                                                        {{ $diamond->sku }}</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                        Growth Type</td>
                                                    <td
                                                        class="font-montserrat font-semibold text-gray-600 uppercase py-2">
                                                        {{ $diamond->growth_type }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="flex justify-center my-4">
                @if ($diamonds->hasMorePages())
                    <button id="load-more" data-page="1"
                        class="px-6 py-2.5 text-sm border border-primary bg-primary text-gold rounded-sm hover:bg-white hover:border-primary hover:text-primary transition-colors flex items-center font-montserrat gap-2">
                        Load More
                    </button>
                @endif
            </div>
        </div>
        <!-- End Table -->

        <!-- Start Load More Script -->
        <script>
            document.getElementById('load-more')?.addEventListener('click', function() {
                let button = this;
                let currentPage = parseInt(button.getAttribute('data-page'));
                let nextPage = currentPage + 1;

                // Show loading state
                button.innerHTML = `
                <div class="loader">
                    <div class="dot dot-1"></div>
                    <div class="dot dot-2"></div>
                    <div class="dot dot-3"></div>
                    <div class="dot dot-4"></div>
                    <div class="dot dot-5"></div>
                </div>
            `;
                button.disabled = true;

                // Get all current filter values
                const params = new URLSearchParams(window.location.search);
                params.set('page', nextPage);

                // Make the AJAX request with filters
                fetch(`/fancy-color-diamonds?${params.toString()}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Insert new content before the last table row
                        const tbody = document.querySelector('table tbody');
                        tbody.insertAdjacentHTML('beforeend', data.html);

                        // Update the page number
                        button.setAttribute('data-page', nextPage);

                        // Reset button state
                        button.innerHTML = 'Load More';
                        button.disabled = false;

                        // Hide the button if no more pages
                        if (!data.hasMorePages) {
                            button.style.display = 'none';
                        }

                        // Initialize event listeners for new content
                        initializeEventListeners();
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        button.innerHTML = 'Load More';
                        button.disabled = false;
                    });
            });

            // Function to initialize event listeners for new content
            function initializeEventListeners() {
                document.querySelectorAll('.content').forEach(content => {
                    if (!content.hasAttribute('data-initialized')) {
                        content.setAttribute('data-initialized', 'true');
                    }
                });
            }
        </script>
        <!-- End Load More Script -->

        <!-- Table Script -->
        <script>
            let sortOrders = Array(7).fill('asc');

            function sortTable(columnIndex) {
                const table = document.querySelector('table');
                const tbody = table.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll(`tr:not([id^="details-${id}"])`));

                rows.sort((a, b) => {
                    const aValue = a.cells[columnIndex].textContent;
                    const bValue = b.cells[columnIndex].textContent;

                    // Handle numeric columns (Carat and Price)
                    if (columnIndex === 1) {
                        return sortOrders[columnIndex] === 'asc' ?
                            parseFloat(aValue) - parseFloat(bValue) :
                            parseFloat(bValue) - parseFloat(aValue);
                    }
                    if (columnIndex === 5) {
                        const aPrice = parseFloat(aValue.replace('$', '').replace(',', ''));
                        const bPrice = parseFloat(bValue.replace('$', '').replace(',', ''));
                        return sortOrders[columnIndex] === 'asc' ?
                            aPrice - bPrice :
                            bPrice - aPrice;
                    }

                    // Text comparison for other columns
                    return sortOrders[columnIndex] === 'asc' ?
                        aValue.localeCompare(bValue) :
                        bValue.localeCompare(aValue);
                });

                // Toggle sort order for next click
                sortOrders[columnIndex] = sortOrders[columnIndex] === 'asc' ? 'desc' : 'asc';

                // Clear and re-append sorted rows
                while (tbody.firstChild) {
                    tbody.removeChild(tbody.firstChild);
                }
                rows.forEach(row => {
                    tbody.appendChild(row);
                    const detailsId = row.querySelector('button').getAttribute('onclick').match(/\d+/)[0];
                    const detailsRow = document.getElementById(`details-${detailsId}`);
                    if (detailsRow) {
                        tbody.appendChild(detailsRow);
                    }
                });
            }

            function toggleDetails(id) {
                const detailsRow = document.getElementById(`details-${id}`);
                detailsRow.classList.toggle('hidden');
            }
        </script>
        <!-- End Table Script -->

    </div>

    <!-- Start Toggle Script -->
    <script>
        function toggleDetails(id) {
            const detailsRow = document.getElementById(`details-${id}`);

            // Close all other open details rows
            document.querySelectorAll('.content').forEach(otherContent => {
                if (otherContent !== detailsRow) {
                    otherContent.style.maxHeight = '0';
                    otherContent.style.opacity = '0';
                    otherContent.classList.add('hidden');
                }
            });

            // Toggle the content visibility
            if (detailsRow.classList.contains('hidden')) {
                detailsRow.classList.remove('hidden');
                detailsRow.style.transition = 'max-height 0.3s ease, opacity 0.3s ease';
                detailsRow.style.maxHeight = detailsRow.scrollHeight + 'px';
                detailsRow.style.opacity = '1';
            } else {
                detailsRow.style.transition = 'max-height 0.3s ease, opacity 0.3s ease';
                detailsRow.style.maxHeight = '0';
                detailsRow.style.opacity = '0';

                setTimeout(() => {
                    detailsRow.classList.add('hidden');
                }, 300);
            }
        }
    </script>
    <!-- End Toggle Script -->

    <!-- Start Color Selection  -->
    <script>
        // Get all color items
        const colorItems = document.querySelectorAll('.color-item');

        // Loop through each color item and add a click event
        colorItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default link behavior

                // Remove 'border-primary', 'text-primary' and 'active' classes from all items
                colorItems.forEach(el => {
                    el.classList.remove('border-primary', 'text-primary', 'ring-1', 'ring-primary');
                });

                // Add 'border-primary', 'text-primary', and a ring effect to the clicked item
                item.classList.add('border-primary', 'text-primary', 'ring-1', 'ring-primary');
            });
        });
    </script>
    <!-- End Color Selection  -->

    <!-- Start Color Selection -->
    <script>
        // Get all color items
        const intensityColorItems = document.querySelectorAll('.intensity-color-item');

        // Loop through each color item and add a click event
        intensityColorItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default link behavior

                // Remove 'border-primary', 'text-primary' and 'active' classes from all items
                intensityColorItems.forEach(el => {
                    el.classList.remove('border-primary', 'text-primary', 'ring-1', 'ring-primary');
                });

                // Add 'border-primary', 'text-primary', and a ring effect to the clicked item
                item.classList.add('border-primary', 'text-primary', 'ring-1', 'ring-primary');
            });
        });
    </script>
    <!-- End Color Selection -->

    <!-- Start Mobile Shape Dropdown Script -->
    <script>
        const FC_shapeDropdownIcon = document.getElementById('FC_shapeDropdownIcon');
        const FC_shapeDropdown = document.getElementById('FC_shapeDropdown');
        const FC_shapeDownArrow = document.getElementById('FC_shapeDownArrow');
        const FC_shapeUpArrow = document.getElementById('FC_shapeUpArrow');

        // Toggle dropdown visibility
        FC_shapeDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            FC_shapeDropdown.classList.toggle('hidden');
            FC_shapeDownArrow.classList.toggle('hidden');
            FC_shapeUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!FC_shapeDropdownIcon.contains(e.target)) {
                FC_shapeDropdown.classList.add('hidden');
                FC_shapeDownArrow.classList.remove('hidden');
                FC_shapeUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        FC_shapeDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Shape Dropdown Script  -->

    <!-- Start Mobile Price Dropdown Script  -->
    <script>
        const FC_priceDropdownIcon = document.getElementById('FC_priceDropdownIcon');
        const FC_priceDropdown = document.getElementById('FC_priceDropdown');
        const FC_priceDownArrow = document.getElementById('FC_priceDownArrow');
        const FC_priceUpArrow = document.getElementById('FC_priceUpArrow');

        // Toggle dropdown visibility
        FC_priceDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            FC_priceDropdown.classList.toggle('hidden');
            FC_priceDownArrow.classList.toggle('hidden');
            FC_priceUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!FC_priceDropdownIcon.contains(e.target)) {
                FC_priceDropdown.classList.add('hidden');
                FC_priceDownArrow.classList.remove('hidden');
                FC_priceUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        FC_priceDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Price Dropdown Script -->

    <!-- Start Mobile Type Dropdown Script -->
    <script>
        const FC_typeFilterDropdownIcon = document.getElementById('FC_typeFilterDropdownIcon');
        const FC_typeFilterDropdown = document.getElementById('FC_typeFilterDropdown');
        const FC_typeFilterDownArrow = document.getElementById('FC_typeFilterDownArrow');
        const FC_typeFilterUpArrow = document.getElementById('FC_typeFilterUpArrow');

        //   dropdown visibility
        FC_typeFilterDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            FC_typeFilterDropdown.classList.toggle('hidden');
            FC_typeFilterDownArrow.classList.toggle('hidden');
            FC_typeFilterUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!FC_typeFilterDropdownIcon.contains(e.target)) {
                FC_typeFilterDropdown.classList.add('hidden');
                FC_typeFilterDownArrow.classList.remove('hidden');
                FC_typeFilterUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        FC_typeFilterDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Type Dropdown Script -->

    <!-- Start Mobile Color Dropdown Script  -->
    <script>
        const FC_colorDropdownIcon = document.getElementById('FC_colorDropdownIcon');
        const FC_colorDropdown = document.getElementById('FC_colorDropdown');
        const FC_colorDownArrow = document.getElementById('FC_colorDownArrow');
        const FC_colorUpArrow = document.getElementById('FC_colorUpArrow');

        // Toggle dropdown visibility
        FC_colorDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            FC_colorDropdown.classList.toggle('hidden');
            FC_colorDownArrow.classList.toggle('hidden');
            FC_colorUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!FC_colorDropdownIcon.contains(e.target)) {
                FC_colorDropdown.classList.add('hidden');
                FC_colorDownArrow.classList.remove('hidden');
                FC_colorUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        FC_colorDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Color Dropdown Script -->

    <!-- Start Mobile Clarity Dropdown Script -->
    <script>
        const FC_claritytyDropdownIcon = document.getElementById('FC_claritytyDropdownIcon');
        const FC_claritytyDropdown = document.getElementById('FC_claritytyDropdown');
        const FC_claritytyDownArrow = document.getElementById('FC_claritytyDownArrow');
        const FC_claritytyUpArrow = document.getElementById('FC_claritytyUpArrow');

        // Toggle dropdown visibility
        FC_claritytyDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            FC_claritytyDropdown.classList.toggle('hidden');
            FC_claritytyDownArrow.classList.toggle('hidden');
            FC_claritytyUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!FC_claritytyDropdownIcon.contains(e.target)) {
                FC_claritytyDropdown.classList.add('hidden');
                FC_claritytyDownArrow.classList.remove('hidden');
                FC_claritytyUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        FC_claritytyDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Clarity Dropdown Script -->

    <!-- Start Mobile Cut Dropdown Script -->
    <script>
        const FC_cutDropdownIcon = document.getElementById('FC_cutDropdownIcon');
        const FC_cutDropdown = document.getElementById('FC_cutDropdown');
        const FC_cutDownArrow = document.getElementById('FC_cutDownArrow');
        const FC_cutUpArrow = document.getElementById('FC_cutUpArrow');

        // Toggle dropdown visibility
        FC_cutDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            FC_cutDropdown.classList.toggle('hidden');
            FC_cutDownArrow.classList.toggle('hidden');
            FC_cutUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!FC_cutDropdownIcon.contains(e.target)) {
                FC_cutDropdown.classList.add('hidden');
                FC_cutDownArrow.classList.remove('hidden');
                FC_cutUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        FC_cutDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Cut Dropdown Script  -->

    <!-- Start Mobile Carat Dropdown Script -->
    <script>
        const FC_caratDropdownIcon = document.getElementById('FC_caratDropdownIcon');
        const FC_caratDropdown = document.getElementById('FC_caratDropdown');
        const FC_caratDownArrow = document.getElementById('FC_caratDownArrow');
        const FC_caratUpArrow = document.getElementById('FC_caratUpArrow');

        // Toggle dropdown visibility
        FC_caratDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            FC_caratDropdown.classList.toggle('hidden');
            FC_caratDownArrow.classList.toggle('hidden');
            FC_caratUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!FC_caratDropdownIcon.contains(e.target)) {
                FC_caratDropdown.classList.add('hidden');
                FC_caratDownArrow.classList.remove('hidden');
                FC_caratUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        FC_caratDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Carat Dropdown Script -->

    <!-- Start Mobile Advanced Options Dropdown Script -->
    <!-- <script>
        const FC_advancedOptionsDropdownIcon = document.getElementById('FC_advancedOptionsDropdownIcon');
        const FC_advancedOptionsDropdown = document.getElementById('FC_advancedOptionsDropdown');
        const FC_advancedOptionsDownArrow = document.getElementById('FC_advancedOptionsDownArrow');
        const FC_advancedOptionsUpArrow = document.getElementById('FC_advancedOptionsUpArrow');

        // Toggle dropdown visibility
        FC_advancedOptionsDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            FC_advancedOptionsDropdown.classList.toggle('hidden');
            FC_advancedOptionsDownArrow.classList.toggle('hidden');
            FC_advancedOptionsUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!FC_advancedOptionsDropdownIcon.contains(e.target)) {
                FC_advancedOptionsDropdown.classList.add('hidden');
                FC_advancedOptionsDownArrow.classList.remove('hidden');
                FC_advancedOptionsUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        FC_advancedOptionsDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script> -->
    <!-- End Advanced Options Dropdown Script -->

    <!-- Certificate Script -->
    <script>
        document.querySelectorAll('.cert-btn').forEach(button => {
            button.addEventListener('click', () => {
                document.querySelectorAll('.cert-btn').forEach(btn => {
                    btn.classList.remove('bg-primary', 'text-white');
                    btn.classList.add('text-gray-700');
                });
                button.classList.add('bg-primary', 'text-white');
                button.classList.remove('text-gray-700');
            });
        });
    </script>
@endsection
