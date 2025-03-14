@extends('layouts.master')

@section('content')
    <div class="w-full mx-auto pt-12">
        <h1
            class="text-xl lg:text-4xl text-primary font-montserrat font-bold text-center mb-3 px-4 md:px-8 lg:px-12 2xl:px-16 3xl:px-40">
            Natural Diamonds
        </h1>
        <p
            class="text-primary/80 text-center font-montserrat text-sm mb-4 md:mb-8 px-4 md:px-8 lg:px-12 2xl:px-16 3xl:px-40">
            Select your perfect lab grown diamond from thousands of ethically sourced diamonds.
        </p>
        <!-- Mobile Filter -->
        <!-- Mobile Filter Button -->
        <div class="flex justify-center items-center lg:hidden px-4 md:px-8 lg:px-12 2xl:px-16 py-4">
            <button
                class="bg-white border border-primary font-montserrat text-primary hover:bg-primary hover:text-white w-full md:w-60 py-2"
                id="filterButton" onclick="showFilterDrawer()">Filter
            </button>
        </div>

        <!-- Mobile Filter Drawer -->
        <div id="filterDrawer"
            class="fixed overflow-y-scroll top-0 right-0 h-full w-full bg-white shadow-lg z-50 hidden lg:hidden">
            <div class="flex justify-between items-center p-4 border-b">
                <h2 class="text-2xl font-bold text-primary font-montserrat">Filter</h2>
                <button class="text-2xl" onclick="hideFilterDrawer()">&times;</button>
            </div>

            <div class="p-5">
                <!-- Shape Filter -->
                <div class="py-4" id="shapeDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Shape</span>
                        <!-- Down Arrow -->
                        <svg id="shapeDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                        <svg id="shapeUpArrow" class="hidden" height="8" width="8" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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
                    <div id="shapeDropdown" class="hidden mt-4 grid grid-cols-6 gap-3 px-4 transition-all duration-300">
                        <!-- Round -->
                        <a href="{{ route('inventory', ['shape' => 'round']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/round.svg') }}" width="25" height="25" alt="Round Shape">
                        </a>

                        <!-- Princess -->
                        <a href="{{ route('inventory', ['shape' => 'princess']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/princess.svg') }}" width="25" height="25" alt="Princess Shape">
                        </a>

                        <!-- Radiant -->
                        <a href="{{ route('inventory', ['shape' => 'radiant']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/radiant.svg') }}" width="25" height="25" alt="Radiant Shape">
                        </a>

                        <!-- Asscher -->
                        <a href="{{ route('inventory', ['shape' => 'asscher']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/asscher.svg') }}" width="25" height="25" alt="Asscher Shape">
                        </a>

                        <!-- Cushion -->
                        <a href="{{ route('inventory', ['shape' => 'cushion']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/cushion.svg') }}" width="25" height="25" alt="Cushion Shape">
                        </a>

                        <!-- Oval -->
                        <a href="{{ route('inventory', ['shape' => 'oval']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/oval.svg') }}" width="25" height="25" alt="Oval Shape">
                        </a>

                        <!-- Emerald -->
                        <a href="{{ route('inventory', ['shape' => 'emerald']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/emerald.svg') }}" width="25" height="25" alt="Emerald Shape">
                        </a>

                        <!-- Pear -->
                        <a href="{{ route('inventory', ['shape' => 'pear']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/pear.svg') }}" width="25" height="25" alt="Pear Shape">
                        </a>

                        <!-- Marquise -->
                        <a href="{{ route('inventory', ['shape' => 'marquise']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/marquise.svg') }}" width="25" height="25"
                                alt="Marquise Shape">
                        </a>

                        <!-- Heart -->
                        <a href="{{ route('inventory', ['shape' => 'heart']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/heart.svg') }}" width="25" height="25" alt="Heart Shape">
                        </a>

                        <!-- Rose Cut -->
                        <a href="{{ route('inventory', ['shape' => 'rose-cut']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/rose-cut.svg') }}" width="25" height="25"
                                alt="Rose Cut Shape">
                        </a>

                        <!-- Old European -->
                        <a href="{{ route('inventory', ['shape' => 'old-european']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/old-european.svg') }}" width="25" height="25"
                                alt="Old European Shape">
                        </a>

                        <!-- Half Moon -->
                        <a href="{{ route('inventory', ['shape' => 'half-moon']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/half-moon.svg') }}" width="25" height="25"
                                alt="Half Moon Shape">
                        </a>

                        <!-- Baguette Trapezoid -->
                        <a href="{{ route('inventory', ['shape' => 'baguette-trapezoid']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center text-center hover:text-dark-blue group mr-2">
                            <img src="{{ asset('Shape/baguette-trapezoid.svg') }}" width="25" height="25"
                                alt="Baguette Trapezoid Shape">
                        </a>

                        <!-- Baguette -->
                        <a href="{{ route('inventory', ['shape' => 'baguette']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/baguette.svg') }}" width="25" height="25"
                                alt="Baguette Shape">
                        </a>

                        <!-- Hexagon -->
                        <a href="{{ route('inventory', ['shape' => 'hexagon']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/hexagon.svg') }}" width="25" height="25"
                                alt="Hexagon Shape">
                        </a>

                        <!-- Kite -->
                        <a href="{{ route('inventory', ['shape' => 'kite']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/kite.svg') }}" width="25" height="25" alt="Kite Shape">
                        </a>

                        <!-- Old Mine -->
                        <a href="{{ route('inventory', ['shape' => 'old-mine']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/old-mine.svg') }}" width="25" height="25"
                                alt="Old Mine Shape">
                        </a>

                        <!-- Trapezoid -->
                        <a href="{{ route('inventory', ['shape' => 'trapezoid']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/trapezoid.svg') }}" width="25" height="25"
                                alt="Trapezoid Shape">
                        </a>

                        <!-- Triangular -->
                        <a href="{{ route('inventory', ['shape' => 'triangular']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/triangular.svg') }}" width="25" height="25"
                                alt="Triangular Shape">
                        </a>
                        <!-- End Shape Svg -->
                    </div>
                </div>
                <!-- End Shape Filter -->

                <!-- Price Filter -->
                <div class="border-t py-4" id="priceDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Price</span>
                        <!-- Down Arrow -->
                        <svg id="priceDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                        <svg id="priceUpArrow" class="hidden" height="8" width="8" version="1.1"
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
                    <div id="priceDropdown" class="hidden mt-4">
                        <div class="flex items-center">
                            <form id="mobilePriceFilterForm" action="{{ route('inventory') }}" method="GET"
                                class="w-full">
                                <div class="mb-3">
                                    <div class="flex justify-between">
                                        <div class="pr-2">
                                            <input type="number" id="mobilePriceFromInput" name="minPrice"
                                                value="{{ request('minPrice', 100) }}" min="100" max="100000"
                                                class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                                        </div>
                                        <div class="pl-2">
                                            <input type="number" id="mobilePriceToInput" name="maxPrice"
                                                value="{{ request('maxPrice', 100000) }}" min="100" max="100000"
                                                class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                                        </div>
                                    </div>
                                </div>

                                <div class="relative mb-7 flex items-center">
                                    <input id="mobilePriceFromSlider" type="range"
                                        value="{{ request('minPrice', 100) }}" min="100" max="100000"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                    <input id="mobilePriceToSlider" type="range"
                                        value="{{ request('maxPrice', 100000) }}" min="100" max="100000"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                </div>

                                <div class="flex justify-between text-xs text-gray-500 font-montserrat font-medium">
                                    <span>$100</span>
                                    <span>$100,000</span>
                                </div>
                            </form>
                        </div>
                        <style>
                            input[type="range"]#mobilePriceFromSlider::-webkit-slider-thumb,
                            input[type="range"]#mobilePriceToSlider::-webkit-slider-thumb {
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

                            input[type="range"]#mobilePriceFromSlider::-moz-range-thumb,
                            input[type="range"]#mobilePriceToSlider::-moz-range-thumb {
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

                            input[type="range"]#mobilePriceToSlider {
                                height: 0;
                                z-index: 4;
                            }
                        </style>
                        <script>
                            const mobilePriceFromSlider = document.querySelector("#mobilePriceFromSlider");
                            const mobilePriceToSlider = document.querySelector("#mobilePriceToSlider");
                            const mobilePriceFromInput = document.querySelector("#mobilePriceFromInput");
                            const mobilePriceToInput = document.querySelector("#mobilePriceToInput");
                            const mobilePriceFilterForm = document.querySelector("#mobilePriceFilterForm");

                            function updateMobilePriceSliderColors() {
                                const min = parseInt(mobilePriceFromSlider.min);
                                const max = parseInt(mobilePriceToSlider.max);
                                const from = parseInt(mobilePriceFromInput.value);
                                const to = parseInt(mobilePriceToInput.value);

                                const percentFrom = ((from - min) / (max - min)) * 100;
                                const percentTo = ((to - min) / (max - min)) * 100;

                                const gradient = `linear-gradient(to right, 
                                    #C6C6C6 0%, 
                                    #C6C6C6 ${percentFrom}%, 
                                    #733D80 ${percentFrom}%, 
                                    #733D80 ${percentTo}%, 
                                    #C6C6C6 ${percentTo}%, 
                                    #C6C6C6 100%)`;

                                mobilePriceFromSlider.style.background = gradient;
                                mobilePriceToSlider.style.background = gradient;
                            }

                            function syncMobilePriceFromInput() {
                                let value = Math.min(parseInt(mobilePriceFromInput.value), parseInt(mobilePriceToInput.value));
                                mobilePriceFromInput.value = value;
                                mobilePriceFromSlider.value = value;
                                updateMobilePriceSliderColors();
                                mobilePriceFilterForm.submit();
                            }

                            function syncMobilePriceToInput() {
                                let value = Math.max(parseInt(mobilePriceToInput.value), parseInt(mobilePriceFromInput.value));
                                mobilePriceToInput.value = value;
                                mobilePriceToSlider.value = value;
                                updateMobilePriceSliderColors();
                                mobilePriceFilterForm.submit();
                            }

                            function syncMobilePriceFromSlider() {
                                mobilePriceFromInput.value = mobilePriceFromSlider.value;
                                updateMobilePriceSliderColors();
                                mobilePriceFilterForm.submit();
                            }

                            function syncMobilePriceToSlider() {
                                mobilePriceToInput.value = mobilePriceToSlider.value;
                                updateMobilePriceSliderColors();
                                mobilePriceFilterForm.submit();
                            }

                            mobilePriceFromInput.addEventListener("input", syncMobilePriceFromInput);
                            mobilePriceToInput.addEventListener("input", syncMobilePriceToInput);
                            mobilePriceFromSlider.addEventListener("input", syncMobilePriceFromSlider);
                            mobilePriceToSlider.addEventListener("input", syncMobilePriceToSlider);

                            // Initialize slider colors
                            updateMobilePriceSliderColors();
                        </script>
                    </div>
                </div>

                <!-- Carat Filter -->
                <div class="border-t py-4" id="caratDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Carat</span>
                        <!-- Down Arrow -->
                        <svg id="caratDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                        <svg id="caratUpArrow" class="hidden" height="8" width="8" version="1.1"
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
                    <div id="caratDropdown" class="hidden mt-4">
                        <div class="flex items-center">
                            <form id="mobileCaratFilterForm" action="{{ route('inventory') }}" method="GET"
                                class="w-full">
                                <div class="mb-3">
                                    <div class="flex justify-between">
                                        <div class="pr-2">
                                            <input type="number" id="mobileCaratFromInput" name="minCarat"
                                                value="{{ request('minCarat', 0.1) }}" min="0.1" max="60.00"
                                                step="0.1"
                                                class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                                        </div>
                                        <div class="pl-2">
                                            <input type="number" id="mobileCaratToInput" name="maxCarat"
                                                value="{{ request('maxCarat', 60.0) }}" min="0.1" max="60.00"
                                                step="0.1"
                                                class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                                        </div>
                                    </div>
                                </div>

                                <div class="relative mb-7 flex items-center">
                                    <input id="mobileCaratFromSlider" type="range"
                                        value="{{ request('minCarat', 0.1) }}" min="0.1" max="60.00"
                                        step="0.1"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                    <input id="mobileCaratToSlider" type="range"
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
                    </div>
                    <style>
                        input[type="range"]#mobileCaratFromSlider::-webkit-slider-thumb,
                        input[type="range"]#mobileCaratToSlider::-webkit-slider-thumb {
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

                        input[type="range"]#mobileCaratFromSlider::-moz-range-thumb,
                        input[type="range"]#mobileCaratToSlider::-moz-range-thumb {
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

                        input[type="range"]#mobileCaratToSlider {
                            height: 0;
                            z-index: 4;
                        }
                    </style>
                    <script>
                        const mobileCaratFromSlider = document.querySelector("#mobileCaratFromSlider");
                        const mobileCaratToSlider = document.querySelector("#mobileCaratToSlider");
                        const mobileCaratFromInput = document.querySelector("#mobileCaratFromInput");
                        const mobileCaratToInput = document.querySelector("#mobileCaratToInput");
                        const mobileCaratFilterForm = document.querySelector("#mobileCaratFilterForm");

                        function updateMobileSliderColors() {
                            const min = parseFloat(mobileCaratFromSlider.min);
                            const max = parseFloat(mobileCaratToSlider.max);
                            const from = parseFloat(mobileCaratFromInput.value);
                            const to = parseFloat(mobileCaratToInput.value);

                            const percentFrom = ((from - min) / (max - min)) * 100;
                            const percentTo = ((to - min) / (max - min)) * 100;

                            const gradient = `linear-gradient(to right, 
                                    #C6C6C6 0%, 
                                    #C6C6C6 ${percentFrom}%, 
                                    #733D80 ${percentFrom}%, 
                                    #733D80 ${percentTo}%, 
                                    #C6C6C6 ${percentTo}%, 
                                    #C6C6C6 100%)`;

                            mobileCaratFromSlider.style.background = gradient;
                            mobileCaratToSlider.style.background = gradient;
                        }

                        function syncMobileFromInput() {
                            let value = Math.min(parseFloat(mobileCaratFromInput.value), parseFloat(mobileCaratToInput.value));
                            mobileCaratFromInput.value = value;
                            mobileCaratFromSlider.value = value;
                            updateMobileSliderColors();
                            mobileCaratFilterForm.submit();
                        }

                        function syncMobileToInput() {
                            let value = Math.max(parseFloat(mobileCaratToInput.value), parseFloat(mobileCaratFromInput.value));
                            mobileCaratToInput.value = value.toFixed(1);
                            mobileCaratToSlider.value = value;
                            updateMobileSliderColors();
                            mobileCaratFilterForm.submit();
                        }

                        function syncMobileFromSlider() {
                            mobileCaratFromInput.value = mobileCaratFromSlider.value;
                            updateMobileSliderColors();
                            mobileCaratFilterForm.submit();
                        }

                        function syncMobileToSlider() {
                            mobileCaratToInput.value = mobileCaratToSlider.value;
                            updateMobileSliderColors();
                            mobileCaratFilterForm.submit();
                        }

                        mobileCaratFromInput.addEventListener("input", syncMobileFromInput);
                        mobileCaratToInput.addEventListener("input", syncMobileToInput);
                        mobileCaratFromSlider.addEventListener("input", syncMobileFromSlider);
                        mobileCaratToSlider.addEventListener("input", syncMobileToSlider);

                        // Initialize slider colors
                        updateMobileSliderColors();
                    </script>
                </div>
                <!-- End Carat Filter -->


                <!-- Cut Filter -->
                <div class="border-t py-4" id="cutDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Cut</span>
                        <!-- Down Arrow -->
                        <svg id="cutDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                        <svg id="cutUpArrow" class="hidden" height="8" width="8" version="1.1"
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
                    <div id="cutDropdown" class="hidden mt-4">
                        <div class="flex items-center">
                            <form id="mobileCutFilterForm" action="{{ route('inventory') }}" method="GET"
                                class="w-full">
                                <div class="relative mb-7 flex items-center">
                                    <input id="mobileCutFromSlider" type="range" value="{{ request('minCut', 0) }}"
                                        min="0" max="4" step="1"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                    <input id="mobileCutToSlider" type="range" value="{{ request('maxCut', 4) }}"
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
                            input[type="range"]#mobileCutFromSlider::-webkit-slider-thumb,
                            input[type="range"]#mobileCutToSlider::-webkit-slider-thumb {
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

                            input[type="range"]#mobileCutFromSlider::-moz-range-thumb,
                            input[type="range"]#mobileCutToSlider::-moz-range-thumb {
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

                            input[type="range"]#mobileCutToSlider {
                                height: 0;
                                z-index: 4;
                            }
                        </style>
                        <script>
                            const mobileCutFromSlider = document.querySelector("#mobileCutFromSlider");
                            const mobileCutToSlider = document.querySelector("#mobileCutToSlider");
                            const mobileCutFilterForm = document.querySelector("#mobileCutFilterForm");

                            function updateMobileCutSliderColors() {
                                const min = parseInt(mobileCutFromSlider.min);
                                const max = parseInt(mobileCutToSlider.max);
                                const from = parseInt(mobileCutFromSlider.value);
                                const to = parseInt(mobileCutToSlider.value);

                                const percentFrom = ((from - min) / (max - min)) * 100;
                                const percentTo = ((to - min) / (max - min)) * 100;

                                const gradient = `linear-gradient(to right, 
                                    #C6C6C6 0%, 
                                    #C6C6C6 ${percentFrom}%, 
                                    #733D80 ${percentFrom}%, 
                                    #733D80 ${percentTo}%, 
                                    #C6C6C6 ${percentTo}%, 
                                    #C6C6C6 100%)`;

                                mobileCutFromSlider.style.background = gradient;
                                mobileCutToSlider.style.background = gradient;
                            }

                            function syncMobileCutFromSlider() {
                                let value = Math.min(parseInt(mobileCutFromSlider.value), parseInt(mobileCutToSlider.value));
                                mobileCutFromSlider.value = value;
                                updateMobileCutSliderColors();
                                mobileCutFilterForm.submit();
                            }

                            function syncMobileCutToSlider() {
                                let value = Math.max(parseInt(mobileCutToSlider.value), parseInt(mobileCutFromSlider.value));
                                mobileCutToSlider.value = value;
                                updateMobileCutSliderColors();
                                mobileCutFilterForm.submit();
                            }

                            mobileCutFromSlider.addEventListener("input", syncMobileCutFromSlider);
                            mobileCutToSlider.addEventListener("input", syncMobileCutToSlider);

                            // Initialize slider colors
                            updateMobileCutSliderColors();
                        </script>
                    </div>
                </div>

                <!-- Color Filter -->
                <div class="border-t py-4" id="colorDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Color</span>
                        <!-- Down Arrow -->
                        <svg id="colorDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                        <svg id="colorUpArrow" class="hidden" height="8" width="8" version="1.1"
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
                    <div id="colorDropdown" class="hidden mt-4">
                        <div class="flex items-center">
                            <form id="mobileColorFilterForm" action="{{ route('inventory') }}" method="GET"
                                class="w-full">
                                <div class="relative mb-7 flex items-center">
                                    <input id="mobileColorFromSlider" type="range"
                                        value="{{ request('minColor', 0) }}" min="0" max="9"
                                        step="1"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                    <input id="mobileColorToSlider" type="range" value="{{ request('maxColor', 9) }}"
                                        min="0" max="9" step="1"
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
                            input[type="range"]#mobileColorFromSlider::-webkit-slider-thumb,
                            input[type="range"]#mobileColorToSlider::-webkit-slider-thumb {
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

                            input[type="range"]#mobileColorFromSlider::-moz-range-thumb,
                            input[type="range"]#mobileColorToSlider::-moz-range-thumb {
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

                            input[type="range"]#mobileColorToSlider {
                                height: 0;
                                z-index: 4;
                            }
                        </style>
                        <script>
                            const mobileColorFromSlider = document.querySelector("#mobileColorFromSlider");
                            const mobileColorToSlider = document.querySelector("#mobileColorToSlider");
                            const mobileColorFilterForm = document.querySelector("#mobileColorFilterForm");

                            function updateMobileColorSliderColors() {
                                const min = parseInt(mobileColorFromSlider.min);
                                const max = parseInt(mobileColorToSlider.max);
                                const from = parseInt(mobileColorFromSlider.value);
                                const to = parseInt(mobileColorToSlider.value);

                                const percentFrom = ((from - min) / (max - min)) * 100;
                                const percentTo = ((to - min) / (max - min)) * 100;

                                const gradient = `linear-gradient(to right, 
                                    #C6C6C6 0%, 
                                    #C6C6C6 ${percentFrom}%, 
                                    #733D80 ${percentFrom}%, 
                                    #733D80 ${percentTo}%, 
                                    #C6C6C6 ${percentTo}%, 
                                    #C6C6C6 100%)`;

                                mobileColorFromSlider.style.background = gradient;
                                mobileColorToSlider.style.background = gradient;
                            }

                            function syncMobileColorFromSlider() {
                                let value = Math.min(parseInt(mobileColorFromSlider.value), parseInt(mobileColorToSlider.value));
                                mobileColorFromSlider.value = value;
                                updateMobileColorSliderColors();
                                mobileColorFilterForm.submit();
                            }

                            function syncMobileColorToSlider() {
                                let value = Math.max(parseInt(mobileColorToSlider.value), parseInt(mobileColorFromSlider.value));
                                mobileColorToSlider.value = value;
                                updateMobileColorSliderColors();
                                mobileColorFilterForm.submit();
                            }

                            mobileColorFromSlider.addEventListener("input", syncMobileColorFromSlider);
                            mobileColorToSlider.addEventListener("input", syncMobileColorToSlider);

                            // Initialize slider colors
                            updateMobileColorSliderColors();
                        </script>
                    </div>
                </div>

                <!-- Clarity Filter -->
                <div class="border-t py-4" id="claritytyDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Clarity</span>
                        <!-- Down Arrow -->
                        <svg id="claritytyDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                        <svg id="claritytyUpArrow" class="hidden" height="8" width="8" version="1.1"
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
                    <div id="claritytyDropdown" class="hidden mt-4">
                        <div class="flex items-center">
                            <form id="mobileClarityFilterForm" action="{{ route('inventory') }}" method="GET"
                                class="w-full">
                                <div class="relative mb-7 flex items-center">
                                    <input id="mobileClarityFromSlider" type="range" value="0" min="0"
                                        max="11" step="1"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                    <input id="mobileClarityToSlider" type="range" value="11" min="0"
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
                            input[type="range"]#mobileClarityFromSlider::-webkit-slider-thumb,
                            input[type="range"]#mobileClarityToSlider::-webkit-slider-thumb {
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

                            input[type="range"]#mobileClarityFromSlider::-moz-range-thumb,
                            input[type="range"]#mobileClarityToSlider::-moz-range-thumb {
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

                            input[type="range"]#mobileClarityToSlider {
                                height: 0;
                                z-index: 4;
                            }
                        </style>
                        <script>
                            const mobileClarityFromSlider = document.querySelector("#mobileClarityFromSlider");
                            const mobileClarityToSlider = document.querySelector("#mobileClarityToSlider");
                            const mobileClarityFilterForm = document.querySelector("#mobileClarityFilterForm");

                            function updateMobileClaritySliderColors() {
                                const min = parseInt(mobileClarityFromSlider.min);
                                const max = parseInt(mobileClarityToSlider.max);
                                const from = parseInt(mobileClarityFromSlider.value);
                                const to = parseInt(mobileClarityToSlider.value);

                                const percentFrom = ((from - min) / (max - min)) * 100;
                                const percentTo = ((to - min) / (max - min)) * 100;

                                const gradient = `linear-gradient(to right, 
                                    #C6C6C6 0%, 
                                    #C6C6C6 ${percentFrom}%, 
                                    #733D80 ${percentFrom}%, 
                                    #733D80 ${percentTo}%, 
                                    #C6C6C6 ${percentTo}%, 
                                    #C6C6C6 100%)`;

                                mobileClarityFromSlider.style.background = gradient;
                                mobileClarityToSlider.style.background = gradient;
                            }

                            function syncMobileClarityFromSlider() {
                                let value = Math.min(parseInt(mobileClarityFromSlider.value), parseInt(mobileClarityToSlider.value));
                                mobileClarityFromSlider.value = value;
                                updateMobileClaritySliderColors();
                                mobileClarityFilterForm.submit();
                            }

                            function syncMobileClarityToSlider() {
                                let value = Math.max(parseInt(mobileClarityToSlider.value), parseInt(mobileClarityFromSlider.value));
                                mobileClarityToSlider.value = value;
                                updateMobileClaritySliderColors();
                                mobileClarityFilterForm.submit();
                            }

                            mobileClarityFromSlider.addEventListener("input", syncMobileClarityFromSlider);
                            mobileClarityToSlider.addEventListener("input", syncMobileClarityToSlider);

                            // Initialize slider colors
                            updateMobileClaritySliderColors();
                        </script>
                    </div>
                </div>

                <!-- Advanced Option Filter -->
                <div class="border-t py-4" id="advancedOptionsDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Advanced Options</span>
                        <!-- Down Arrow -->
                        <svg id="advancedOptionsDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                        <svg id="advancedOptionsUpArrow" class="hidden" height="8" width="8" version="1.1"
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
                    <div id="advancedOptionsDropdown" class="hidden mt-4">
                        <div class="grid grid-cols-2 gap-4 mx-auto py-4">
                            <!-- Start Mobile Certificate Dropdown -->
                            @php
                                $selectedLab = request()->has('lab') ? explode(',', request()->lab) : [];
                            @endphp
                            <div id="styleMobileDropdownIcon"
                                class="relative flex justify-between items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
                                <label
                                    class="block text-xs text-gray-500 font-montserrat mr-3 cursor-pointer">Certificate</label>
                                <!-- Down Arrow -->
                                <svg id="mobileDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                                <svg id="mobileUpArrow" fill="#000000" height="8" width="8" version="1.1"
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

                                <div id="styleMobileDropdown"
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
                                            <span class="text-sm font-montserrat">GIA</span>
                                        </label>
                                        <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                            <input type="checkbox" class="mr-2 accent-black" name="lab[]"
                                                value="IGI" {{ in_array('IGI', $selectedLab) ? 'checked' : '' }}>
                                            <span class="text-sm font-montserrat">IGI</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- End Mobile Certificate Dropdown -->
                            <!-- Start  Certificate Dropdown Script -->
                            <script>
                                const styleMobileIcon = document.getElementById('styleMobileDropdownIcon');
                                const styleMobileDropdown = document.getElementById('styleMobileDropdown');
                                const mobileDownArrow = document.getElementById('mobileDownArrow');
                                const mobileUpArrow = document.getElementById('mobileUpArrow');

                                styleMobileIcon.addEventListener('click', () => {
                                    styleMobileDropdown.classList.toggle('hidden');
                                    mobileDownArrow.classList.toggle('hidden');
                                    mobileUpArrow.classList.toggle('hidden');
                                });

                                // Close dropdown when clicking outside
                                document.addEventListener('click', (e) => {
                                    if (!styleMobileIcon.contains(e.target) && !styleMobileDropdown.contains(e.target)) {
                                        styleMobileDropdown.classList.add('hidden');
                                        mobileDownArrow.classList.remove('hidden');
                                        mobileUpArrow.classList.add('hidden');
                                    }
                                });

                                // Prevent dropdown from closing when clicking checkboxes
                                const mobileCheckboxes = document.querySelectorAll('input[type="checkbox"]');
                                mobileCheckboxes.forEach(mobileCheckbox => {
                                    mobileCheckbox.addEventListener('click', (e) => {
                                        e.stopPropagation();
                                    });
                                });
                            </script>
                            <!-- End Mobile Certificate Dropdown Script -->

                            <!-- Start Mobile Method Dropdown -->
                            @php
                                $selectedMethods = request()->has('growth_type')
                                    ? explode(',', request()->growth_type)
                                    : [];
                            @endphp
                            <div id="methodMobileDropdownIcon"
                                class="relative flex justify-between items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
                                <label
                                    class="block text-xs text-gray-500 font-montserrat mr-3 cursor-pointer">Method</label>
                                <!-- Down Arrow -->
                                <svg id="mobileMethodDownArrow" fill="#000000" height="8" width="8"
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
                                <svg id="mobileMethodUpArrow" fill="#000000" height="8" width="8"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330.002 330.002"
                                    xml:space="preserve" class="cursor-pointer hidden">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path id="XMLID_23_"
                                            d="M0.845,230.036c2.108,6.011,7.784,10.035,14.154,10.035h300c6.371,0,12.046-4.024,14.154-10.035 c2.109-6.011,0.19-12.699-4.784-16.678l-150.004-120c-2.739-2.191-6.055-3.287-9.37-3.287c-3.316,0-6.631,1.096-9.371,3.287 L0.845,213.358C-1.264,217.347,0.654,223.036,0.845,230.036z">
                                        </path>
                                    </g>
                                </svg>

                                <div id="methodMobileDropdown"
                                    class="hidden absolute top-full right-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
                                    <div class="flex justify-between">
                                        <p class="text-sm font-montserrat font-semibold px-4 py-2">Method</p>

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
                                            <input type="checkbox" class="mr-2 accent-black" name="growth_type[]"
                                                value="HPHT" {{ in_array('HPHT', $selectedMethods) ? 'checked' : '' }}>
                                            <span class="text-sm font-montserrat">HPHT</span>
                                        </label>
                                        <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                            <input type="checkbox" class="mr-2 accent-black" name="growth_type[]"
                                                value="CVD" {{ in_array('CVD', $selectedMethods) ? 'checked' : '' }}>
                                            <span class="text-sm font-montserrat">CVD</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- End Mobile Method Dropdown -->
                            <!-- Start Mobile Method Dropdown Script -->
                            <script>
                                const methodMobileIcon = document.getElementById('methodMobileDropdownIcon');
                                const methodMobileDropdown = document.getElementById('methodMobileDropdown');
                                const methodMobileDownArrow = document.getElementById('methodMobileDownArrow');
                                const methodMobileUpArrow = document.getElementById('methodMobileUpArrow');

                                methodMobileIcon.addEventListener('click', () => {
                                    methodMobileDropdown.classList.toggle('hidden');
                                    methodMobileDownArrow.classList.toggle('hidden');
                                    methodMobileUpArrow.classList.toggle('hidden');
                                });

                                // Close dropdown when clicking outside
                                document.addEventListener('click', (e) => {
                                    if (!methodMobileIcon.contains(e.target) && !methodMobileDropdown.contains(e.target)) {
                                        methodMobileDropdown.classList.add('hidden');
                                        methodMobileDownArrow.classList.remove('hidden');
                                        methodMobileUpArrow.classList.add('hidden');
                                    }
                                });

                                // Prevent dropdown from closing when clicking checkboxes
                                const methodMobileCheckboxes = methodMobileDropdown.querySelectorAll('input[type="checkbox"]');
                                methodMobileCheckboxes.forEach(methodMobileCheckbox => {
                                    methodMobileCheckbox.addEventListener('click', (e) => {
                                        e.stopPropagation();
                                    });
                                });
                            </script>
                            <!-- End Mobile Method Dropdown Script -->

                            <!-- Start Mobile Table Dropdown -->
                            <div id="mobileTableDropdownIcon"
                                class="relative flex justify-between items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
                                <label class="block text-xs text-gray-500 font-montserrat mr-3 cursor-pointer">Table
                                    (%)</label>
                                <!-- Down Arrow -->
                                <svg id="mobileTableDownArrow" fill="#000000" height="8" width="8"
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
                                <svg id="mobileTableUpArrow" fill="#000000" height="8" width="8"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330.002 330.002"
                                    xml:space="preserve" class="cursor-pointer hidden">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path id="XMLID_23_"
                                            d="M0.845,230.036c2.108,6.011,7.784,10.035,14.154,10.035h300c6.371,0,12.046-4.024,14.154-10.035 c2.109-6.011,0.19-12.699-4.784-16.678l-150.004-120c-2.739-2.191-6.055-3.287-9.37-3.287c-3.316,0-6.631,1.096-9.371,3.287 L0.845,213.358C-1.264,217.347,0.654,223.036,0.845,230.036z">
                                        </path>
                                    </g>
                                </svg>

                                <div id="mobileTableDropdown"
                                    class="hidden absolute top-full left-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">

                                    <div class="flex justify-between">
                                        <p class="text-sm font-montserrat font-semibold px-4 py-2">Table (%)</p>
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
                                    <div class="flex items-center p-4">
                                        <div class="w-full">
                                            <form id="mobileTableFilterForm" action="{{ route('inventory') }}"
                                                method="GET">
                                                <div class="flex justify-between">
                                                    <div>
                                                        <input
                                                            class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                                            type="number" id="fromMobileTableInput"
                                                            value="{{ request('table_min', 50.0) }}" min="50.00"
                                                            max="80.00" step="0.01" />
                                                    </div>
                                                    <div>
                                                        <input
                                                            class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                                            type="number" id="toMobileTableInput"
                                                            value="{{ request('table_max', 80.0) }}" min="50.00"
                                                            max="80.00" step="0.01" />
                                                    </div>
                                                </div>
                                                <div class="relative min-h-7 flex items-center">
                                                    <input id="fromMobileTableSlider" type="range"
                                                        value="{{ request('table_min', 50) }}" min="50"
                                                        max="80" step="0.01" />
                                                    <input id="toMobileTableSlider" type="range"
                                                        value="{{ request('table_max', 80) }}" min="50"
                                                        max="80" step="0.01" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <style>
                                        input[type="range"]#fromMobileTableSlider::-webkit-slider-thumb,
                                        input[type="range"]#toMobileTableSlider::-webkit-slider-thumb {
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

                                        input[type="range"]#fromMobileTableSlider,
                                        input[type="range"]#toMobileTableSlider {
                                            -webkit-appearance: none;
                                            appearance: none;
                                            height: 4px;
                                            width: 100%;
                                            position: absolute;
                                            background-color: #c6c6c6;
                                            pointer-events: all;
                                            border-radius: 8px;
                                        }

                                        #toMobileTableSlider {
                                            height: 0;
                                            z-index: 4;
                                        }
                                    </style>
                                    <script>
                                        const fromMobileTableSlider = document.querySelector("#fromMobileTableSlider");
                                        const toMobileTableSlider = document.querySelector("#toMobileTableSlider");
                                        const fromMobileTableInput = document.querySelector("#fromMobileTableInput");
                                        const toMobileTableInput = document.querySelector("#toMobileTableInput");


                                        function updateMobileTableSliderColors() {
                                            const min = parseInt(fromMobileTableSlider.min);
                                            const max = parseInt(toMobileTableSlider.max);
                                            const from = parseInt(fromMobileTableSlider.value);
                                            const to = parseInt(toMobileTableSlider.value);

                                            const percentFrom = ((from - min) / (max - min)) * 100;
                                            const percentTo = ((to - min) / (max - min)) * 100;

                                            const gradient = `linear-gradient(to right,
                                                #C6C6C6 0%,
                                                #C6C6C6 ${percentFrom}%, 
                                                #733D80 ${percentFrom}%, 
                                                #733D80 ${percentTo}%, 
                                                #C6C6C6 ${percentTo}%, 
                                                #C6C6C6 100%)`;

                                            fromMobileTableSlider.style.background = gradient;
                                            toMobileTableSlider.style.background = gradient;
                                        }

                                        function syncMobileTableFromInput() {
                                            let value = Math.min(parseFloat(fromMobileTableInput.value), parseFloat(toMobileTableInput.value));
                                            fromMobileTableInput.value = value;
                                            fromMobileTableSlider.value = value;
                                            updateMobileTableSliderColors();
                                            mobileTableFilterForm.submit();
                                        }

                                        function syncMobileTableToInput() {
                                            let value = Math.max(parseFloat(toMobileTableInput.value), parseFloat(fromMobileTableInput.value));
                                            toMobileTableInput.value = value;
                                            toMobileTableSlider.value = value;
                                            updateMobileTableSliderColors();
                                            mobileTableFilterForm.submit();
                                        }

                                        function syncMobileTableFromSlider() {
                                            fromMobileTableInput.value = parseFloat(fromMobileTableSlider.value);
                                            updateMobileTableSliderColors();
                                            mobileTableFilterForm.submit();
                                        }

                                        function syncMobileTableToSlider() {
                                            toMobileTableInput.value = parseFloat(toMobileTableSlider.value);
                                            updateMobileTableSliderColors();
                                            mobileTableFilterForm.submit();
                                        }



                                        fromMobileTableInput.addEventListener("input", syncMobileTableFromInput);
                                        toMobileTableInput.addEventListener("input", syncMobileTableToInput);
                                        fromMobileTableSlider.addEventListener("input", syncMobileTableFromSlider);
                                        toMobileTableSlider.addEventListener("input", syncMobileTableToSlider);

                                        // Initialize slider colors
                                        updateMobileTableSliderColors();
                                    </script>
                                </div>
                            </div>
                            <!-- End Mobile Table Dropdown -->
                            <!-- Start Mobile Table Dropdown Script -->
                            <script>
                                const mobileTableIcon = document.getElementById('mobileTableDropdownIcon');
                                const mobileTableDropdown = document.getElementById('mobileTableDropdown');
                                const mobileTableDownArrow = document.getElementById('mobileTableDownArrow');
                                const mobileTableUpArrow = document.getElementById('mobileTableUpArrow');

                                mobileTableIcon.addEventListener('click', () => {
                                    mobileTableDropdown.classList.toggle('hidden');
                                    mobileTableDownArrow.classList.toggle('hidden');
                                    mobileTableUpArrow.classList.toggle('hidden');
                                });

                                // Close dropdown when clicking outside
                                document.addEventListener('click', (e) => {
                                    if (!mobileTableIcon.contains(e.target) && !mobileTableDropdown.contains(e.target) && !
                                        fromMobileTableSlider.contains(e.target) && !toMobileTableSlider.contains(e.target) && !
                                        fromMobileTableInput.contains(e.target) && !toMobileTableInput.contains(e.target)) {
                                        mobileTableDropdown.classList.add('hidden');
                                        mobileTableDownArrow.classList.remove('hidden');
                                        mobileTableUpArrow.classList.add('hidden');
                                    }
                                });

                                // Prevent dropdown from closing when clicking checkboxes
                                const mobileTableCheckboxes = mobileTableDropdown.querySelectorAll('input[type="checkbox"]');
                                mobileTableCheckboxes.forEach(mobileTableCheckbox => {
                                    mobileTableCheckbox.addEventListener('click', (e) => {
                                        e.stopPropagation();
                                    });
                                });
                            </script>
                            <!-- End Mobile Table Dropdown Script -->

                            <!-- Start Mobile Depth Dropdown -->
                            <div id="mobileDepthDropdownIcon"
                                class="relative flex justify-between items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
                                <label class="block text-xs text-gray-500 font-montserrat mr-3 cursor-pointer">Depth
                                    (%)</label>
                                <!-- Down Arrow -->
                                <svg id="mobileDepthDownArrow" fill="#000000" height="8" width="8"
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
                                <svg id="mobileDepthUpArrow" fill="#000000" height="8" width="8"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 330.002 330.002"
                                    xml:space="preserve" class="cursor-pointer hidden">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path id="XMLID_23_"
                                            d="M0.845,230.036c2.108,6.011,7.784,10.035,14.154,10.035h300c6.371,0,12.046-4.024,14.154-10.035 c2.109-6.011,0.19-12.699-4.784-16.678l-150.004-120c-2.739-2.191-6.055-3.287-9.37-3.287c-3.316,0-6.631,1.096-9.371,3.287 L0.845,213.358C-1.264,217.347,0.654,223.036,0.845,230.036z">
                                        </path>
                                    </g>
                                </svg>

                                <div id="mobileDepthDropdown"
                                    class="hidden absolute top-full right-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
                                    <div class="flex justify-between">
                                        <p class="text-sm font-montserrat font-semibold px-4 py-2">Depth (%)</p>

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

                                    <div class="flex items-center p-4">
                                        <div class="w-full">
                                            <div class="flex justify-between">
                                                <div>
                                                    <input
                                                        class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                                        type="number" id="fromMobileDepthInput" value="46.00"
                                                        min="46.00" max="78.00" step="0.01" />
                                                </div>
                                                <div>
                                                    <input
                                                        class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                                        type="number" id="toMobileDepthInput" value="78.00"
                                                        min="46.00" max="78.00" step="0.01" />
                                                </div>
                                            </div>
                                            <div class="relative min-h-7 flex items-center">
                                                <input id="fromMobileDepthSlider" type="range" value="46"
                                                    min="46" max="78" step="0.01" />
                                                <input id="toMobileDepthSlider" type="range" value="78"
                                                    min="46" max="78" step="0.01" />
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        input[type="range"]#fromMobileDepthSlider::-webkit-slider-thumb,
                                        input[type="range"]#toMobileDepthSlider::-webkit-slider-thumb {
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

                                        input[type="range"]#fromMobileDepthSlider,
                                        input[type="range"]#toMobileDepthSlider {
                                            -webkit-appearance: none;
                                            appearance: none;
                                            height: 4px;
                                            width: 100%;
                                            position: absolute;
                                            background-color: #c6c6c6;
                                            pointer-events: all;
                                            border-radius: 8px;
                                        }

                                        #toMobileDepthSlider {
                                            height: 0;
                                            z-index: 4;
                                        }
                                    </style>
                                    <script>
                                        function updateMobileDepthSliderColors() {
                                            const fromValue = parseFloat(fromMobileDepthSlider.value);
                                            const toValue = parseFloat(toMobileDepthSlider.value);
                                            const range = toMobileDepthSlider.max - toMobileDepthSlider.min;

                                            const percentFrom = ((fromValue - toMobileDepthSlider.min) / range) * 100;
                                            const percentTo = ((toValue - toMobileDepthSlider.min) / range) * 100;

                                            const gradient = `linear-gradient(to right,
                                                #C6C6C6 0%,
                                                #C6C6C6 ${percentFrom}%, 
                                                #733D80 ${percentFrom}%, 
                                                #733D80 ${percentTo}%, 
                                                #C6C6C6 ${percentTo}%, 
                                                #C6C6C6 100%)`;

                                            fromMobileDepthSlider.style.background = gradient;
                                            toMobileDepthSlider.style.background = gradient;
                                        }

                                        function syncMobileDepthFromInput() {
                                            let value = Math.min(parseFloat(fromMobileDepthInput.value), parseFloat(toMobileDepthInput.value));
                                            fromMobileDepthInput.value = value.toFixed(2);
                                            fromMobileDepthSlider.value = value;
                                            updateMobileDepthSliderColors();
                                        }

                                        function syncMobileDepthToInput() {
                                            let value = Math.max(parseFloat(toMobileDepthInput.value), parseFloat(fromMobileDepthInput.value));
                                            toMobileDepthInput.value = value.toFixed(2);
                                            toMobileDepthSlider.value = value;
                                            updateMobileDepthSliderColors();
                                        }

                                        function syncMobileDepthFromSlider() {
                                            fromMobileDepthInput.value = parseFloat(fromMobileDepthSlider.value).toFixed(2);
                                            updateMobileDepthSliderColors();
                                        }

                                        function syncMobileDepthToSlider() {
                                            toMobileDepthInput.value = parseFloat(toMobileDepthSlider.value).toFixed(2);
                                            updateMobileDepthSliderColors();
                                        }

                                        const fromMobileDepthSlider = document.querySelector("#fromMobileDepthSlider");
                                        const toMobileDepthSlider = document.querySelector("#toMobileDepthSlider");
                                        const fromMobileDepthInput = document.querySelector("#fromMobileDepthInput");
                                        const toMobileDepthInput = document.querySelector("#toMobileDepthInput");

                                        fromMobileDepthInput.addEventListener("input", syncMobileDepthFromInput);
                                        toMobileDepthInput.addEventListener("input", syncMobileDepthToInput);
                                        fromMobileDepthSlider.addEventListener("input", syncMobileDepthFromSlider);
                                        toMobileDepthSlider.addEventListener("input", syncMobileDepthToSlider);

                                        // Initialize slider colors
                                        updateMobileDepthSliderColors();
                                    </script>
                                </div>
                            </div>
                            <!-- End Mobile Depth Dropdown -->
                            <!-- Start Mobile Depth Dropdown Script -->
                            <script>
                                const mobileDepthIcon = document.getElementById('mobileDepthDropdownIcon');
                                const mobileDepthDropdown = document.getElementById('mobileDepthDropdown');
                                const mobileDepthDownArrow = document.getElementById('mobileDepthDownArrow');
                                const mobileDepthUpArrow = document.getElementById('mobileDepthUpArrow');

                                mobileDepthIcon.addEventListener('click', () => {
                                    mobileDepthDropdown.classList.toggle('hidden');
                                    mobileDepthDownArrow.classList.toggle('hidden');
                                    mobileDepthUpArrow.classList.toggle('hidden');
                                });

                                // Close dropdown when clicking outside
                                document.addEventListener('click', (e) => {
                                    if (!mobileDepthIcon.contains(e.target) && !mobileDepthDropdown.contains(e.target)) {
                                        mobileDepthDropdown.classList.add('hidden');
                                        mobileDepthDownArrow.classList.remove('hidden');
                                        mobileDepthUpArrow.classList.add('hidden');
                                    }
                                });

                                // Prevent dropdown from closing when clicking checkboxes
                                const mobileDepthCheckboxes = mobileDepthDropdown.querySelectorAll('input[type="checkbox"]');
                                mobileDepthCheckboxes.forEach(mobileDepthCheckbox => {
                                    mobileDepthCheckbox.addEventListener('click', (e) => {
                                        e.stopPropagation();
                                    });
                                });
                            </script>
                            <!-- End Mobile Depth Dropdown Script -->

                            <!-- Start Mobile L/W Ratio Dropdown -->
                            <div id="mobileLwDropdownIcon"
                                class="relative flex justify-between items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
                                <label class="block text-xs text-gray-500 font-montserrat mr-3 cursor-pointer">L/W
                                    Ratio</label>
                                <!-- Down Arrow -->
                                <svg id="mobileLwDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                                <svg id="mobileLwUpArrow" fill="#000000" height="8" width="8" version="1.1"
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

                                <div id="mobileLwDropdown"
                                    class="hidden absolute top-full left-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
                                    <div class="flex justify-between">
                                        <p class="text-sm font-montserrat font-semibold px-4 py-2">L/W Ratio</p>

                                        <button class="p-2 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="flex items-center p-4">
                                        <div class="w-full">
                                            <form id="mobileLwRatioFilterForm" action="{{ route('inventory') }}"
                                                method="GET">
                                                <div class="flex justify-between">
                                                    <div>
                                                        <input
                                                            class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                                            type="number" id="mobileFromLWInput" value="1.00"
                                                            min="1.00" max="2.75" step="0.01" />
                                                    </div>
                                                    <div>
                                                        <input
                                                            class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                                            type="number" id="mobileToLWInput" value="2.75"
                                                            min="1.00" max="2.75" step="0.01" />
                                                    </div>
                                                </div>
                                                <div class="relative min-h-7 flex items-center">
                                                    <input id="mobileFromLWSlider" type="range" value="1"
                                                        min="1" max="2.75" step="0.01" />
                                                    <input id="mobileToLWSlider" type="range" value="2.75"
                                                        min="1" max="2.75" step="0.01" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <style>
                                        input[type="range"]#mobileFromLWSlider::-webkit-slider-thumb,
                                        input[type="range"]#mobileToLWSlider::-webkit-slider-thumb {
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

                                        input[type="range"]#mobileFromLWSlider,
                                        input[type="range"]#mobileToLWSlider {
                                            -webkit-appearance: none;
                                            appearance: none;
                                            height: 4px;
                                            width: 100%;
                                            position: absolute;
                                            background-color: #c6c6c6;
                                            pointer-events: all;
                                            border-radius: 8px;
                                        }

                                        #mobileToLWSlider {
                                            height: 0;
                                            z-index: 4;
                                        }
                                    </style>
                                    <script>
                                        const mobileFromLWSlider = document.querySelector("#mobileFromLWSlider");
                                        const mobileToLWSlider = document.querySelector("#mobileToLWSlider");
                                        const mobileFromLWInput = document.querySelector("#mobileFromLWInput");
                                        const mobileToLWInput = document.querySelector("#mobileToLWInput");
                                        const mobileLwRatioFilterForm = document.querySelector("#mobileLwRatioFilterForm");


                                        function updateMobileLWSliderColors() {
                                            const min = parseInt(mobileFromLWSlider.min);
                                            const max = parseInt(mobileToLWSlider.max);
                                            const from = parseInt(mobileFromLWSlider.value);
                                            const to = parseInt(mobileToLWSlider.value);

                                            const percentFrom = ((from - min) / (max - min)) * 100;
                                            const percentTo = ((to - min) / (max - min)) * 100;


                                            const gradient = `linear-gradient(to right,
                                                #C6C6C6 0%,
                                                #C6C6C6 ${percentFrom}%, 
                                                #733D80 ${percentFrom}%, 
                                                #733D80 ${percentTo}%, 
                                                #C6C6C6 ${percentTo}%, 
                                                #C6C6C6 100%)`;

                                            mobileFromLWSlider.style.background = gradient;
                                            mobileToLWSlider.style.background = gradient;
                                        }

                                        function syncMobileLWFromInput() {
                                            let value = Math.min(parseFloat(mobileFromLWInput.value), parseFloat(mobileToLWInput.value));
                                            mobileFromLWInput.value = value;
                                            mobileFromLWSlider.value = value;
                                            updateMobileLWSliderColors();
                                            mobileLwRatioFilterForm.submit();
                                        }

                                        function syncMobileLWToInput() {
                                            let value = Math.max(parseFloat(mobileToLWInput.value), parseFloat(mobileFromLWInput.value));
                                            mobileToLWInput.value = value;
                                            mobileToLWSlider.value = value;
                                            updateMobileLWSliderColors();
                                            mobileLwRatioFilterForm.submit();
                                        }

                                        function syncMobileLWFromSlider() {
                                            mobileFromLWInput.value = parseFloat(mobileFromLWSlider.value);
                                            updateMobileLWSliderColors();
                                            mobileLwRatioFilterForm.submit();
                                        }

                                        function syncMobileLWToSlider() {
                                            mobileToLWInput.value = parseFloat(mobileToLWSlider.value);
                                            updateMobileLWSliderColors();
                                            mobileLwRatioFilterForm.submit();
                                        }



                                        mobileFromLWInput.addEventListener("input", syncMobileLWFromInput);
                                        mobileToLWInput.addEventListener("input", syncMobileLWToInput);
                                        mobileFromLWSlider.addEventListener("input", syncMobileLWFromSlider);
                                        mobileToLWSlider.addEventListener("input", syncMobileLWToSlider);

                                        // Initialize slider colors
                                        updateMobileLWSliderColors();
                                    </script>
                                </div>
                            </div>
                            <!-- End L/W Ratio Dropdown -->
                            <!-- Start L/W Ratio Dropdown Script -->
                            <script>
                                const mobileLwIcon = document.getElementById('mobileLwDropdownIcon');
                                const mobileLwDropdown = document.getElementById('mobileLwDropdown');
                                const mobileLwDownArrow = document.getElementById('mobileLwDownArrow');
                                const mobileLwUpArrow = document.getElementById('mobileLwUpArrow');

                                mobileLwIcon.addEventListener('click', () => {
                                    mobileLwDropdown.classList.toggle('hidden');
                                    mobileLwDownArrow.classList.toggle('hidden');
                                    mobileLwUpArrow.classList.toggle('hidden');
                                });

                                // Close dropdown when clicking outside
                                document.addEventListener('click', (e) => {
                                    if (!mobileLwIcon.contains(e.target) && !mobileLwDropdown.contains(e.target)) {
                                        mobileLwDropdown.classList.add('hidden');
                                        mobileLwDownArrow.classList.remove('hidden');
                                        mobileLwUpArrow.classList.add('hidden');
                                    }
                                });

                                // Prevent dropdown from closing when clicking checkboxes
                                const mobileLwCheckboxes = mobileLwDropdown.querySelectorAll('input[type="checkbox"]');
                                mobileLwCheckboxes.forEach(mobileLwCheckbox => {
                                    mobileLwCheckbox.addEventListener('click', (e) => {
                                        e.stopPropagation();
                                    });
                                });
                            </script>
                            <!-- End L/W Ratio Dropdown Script -->
                        </div>
                    </div>
                </div>

                <!-- Type Filter -->
                <div class="border-t py-4" id="typeFilterDropdownIcon">
                    <div class="flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-semibold">Type</span>
                        <!-- Down Arrow -->
                        <svg id="typeFilterDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                        <svg id="typeFilterUpArrow" class="hidden" height="8" width="8" version="1.1"
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
                </div>
            </div>
        </div>
        <script>
            function toggleFilter(id) {
                const content = document.getElementById(id);
                content.classList.toggle('hidden');
            }

            function showFilterDrawer() {
                document.getElementById('filterDrawer').classList.remove('hidden');
            }

            function hideFilterDrawer() {
                document.getElementById('filterDrawer').classList.add('hidden');
            }
        </script>
        <!-- End Mobile Filter -->

        <!-- Desktop Filter -->
        <!-- Start Shape Svg , Price Range Slider , Carat Slider , Color Slider , Clarity Slider -->
        <div class="hidden lg:grid lg:grid-cols-3 lg:gap-4 px-4 md:px-8 lg:px-12 2xl:px-28 3xl:px-40">
            <!-- Shape Svg -->
            <div class="flex items-center">
                <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Shape</h5>
                <div class="flex flex-col">
                    <div class="flex mb-1">
                        <!-- Round -->
                        <a href="{{ route('natural-diamond', ['shape' => 'round']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/round.svg') }}" width="25" height="25"
                                alt="Round Shape">
                        </a>

                        <!-- Princess -->
                        <a href="{{ route('natural-diamond', ['shape' => 'princess']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/princess.svg') }}" width="25" height="25"
                                alt="Princess Shape">
                        </a>

                        <!-- Radiant -->
                        <a href="{{ route('natural-diamond', ['shape' => 'radiant']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/radiant.svg') }}" width="25" height="25"
                                alt="Radiant Shape">
                        </a>

                        <!-- Cushion -->
                        <a href="{{ route('natural-diamond', ['shape' => 'cushion']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/cushion.svg') }}" width="25" height="25"
                                alt="Cushion Shape">
                        </a>

                        <!-- Oval -->
                        <a href="{{ route('natural-diamond', ['shape' => 'oval']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/oval.svg') }}" width="25" height="25"
                                alt="Oval Shape">
                        </a>

                        <!-- Emerald -->
                        <a href="{{ route('natural-diamond', ['shape' => 'emerald']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/emerald.svg') }}" width="25" height="25"
                                alt="Emerald Shape">
                        </a>

                        <!-- Pear -->
                        <a href="{{ route('natural-diamond', ['shape' => 'pear']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/pear.svg') }}" width="25" height="25"
                                alt="Pear Shape">
                        </a>

                        <!-- Marquise -->
                        <a href="{{ route('natural-diamond', ['shape' => 'marquise']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/marquise.svg') }}" width="25" height="25"
                                alt="Marquise Shape">
                        </a>

                        <!-- Heart -->
                        <a href="{{ route('natural-diamond', ['shape' => 'heart']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/heart.svg') }}" width="25" height="25"
                                alt="Heart Shape">
                        </a>

                        <!-- Baguette -->
                        <a href="{{ route('natural-diamond', ['shape' => 'baguette']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/baguette.svg') }}" width="25" height="25"
                                alt="Baguette Shape">
                        </a>

                        <!-- SQUARE EMERALD -->
                        <a href="{{ route('natural-diamond', ['shape' => 'SQUARE EMERALD']) }}"
                            class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                            <img src="{{ asset('Shape/square_emerald.svg') }}" width="25" height="25"
                                alt="SQUARE EMERALD Shape">
                        </a>

                    </div>
                </div>
            </div>
            <!-- End Shape Svg -->

            <!-- Price Range Slider -->
            <div class="flex items-center">
                <h5 class="text-sm text-primary font-montserrat font-semibold mr-3 mt-2">Price</h5>
                <form id="priceFilterForm" action="{{ route('natural-diamond') }}" method="GET"
                    class="w-full max-w-md">
                    <div class="mb-3">
                        <div class="flex justify-between">
                            <div class="pr-2">
                                <input type="number" id="fromPriceInput" name="minPrice"
                                    value="{{ request('minPrice', 100) }}" min="100" max="100000"
                                    class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                            </div>
                            <div class="pl-2">
                                <input type="number" id="toPriceInput" name="maxPrice"
                                    value="{{ request('maxPrice', 100000) }}" min="100" max="100000"
                                    class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                            </div>
                        </div>
                    </div>

                    <div class="relative mb-7">
                        <input id="fromPriceSlider" type="range" value="{{ request('minPrice', 100) }}"
                            min="100" max="100000"
                            class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                        <input id="toPriceSlider" type="range" value="{{ request('maxPrice', 100000) }}"
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
                input[type="range"]#fromPriceSlider::-webkit-slider-thumb,
                input[type="range"]#toPriceSlider::-webkit-slider-thumb {
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

                input[type="range"]#fromPriceSlider::-moz-range-thumb,
                input[type="range"]#toPriceSlider::-moz-range-thumb {
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

                input[type="range"]#fromPriceSlider::-webkit-slider-thumb:hover,
                input[type="range"]#toPriceSlider::-webkit-slider-thumb:hover {
                    background: #f7f7f7;
                }

                input[type="number"]#fromPriceInput::-webkit-inner-spin-button,
                input[type="number"]#fromPriceInput::-webkit-outer-spin-button {
                    opacity: 1;
                }

                input[type="number"]#toPriceInput::-webkit-inner-spin-button,
                input[type="number"]#toPriceInput::-webkit-outer-spin-button {
                    opacity: 1;
                }

                input[type="range"]#fromPriceSlider,
                input[type="range"]#toPriceSlider {
                    -webkit-appearance: none;
                    appearance: none;
                    height: 4px;
                    width: 100%;
                    position: absolute;
                    background-color: #c6c6c6;
                    pointer-events: all;
                    border-radius: 8px;
                }

                #toPriceSlider {
                    height: 0;
                    z-index: 4;
                }
            </style>
            <script>
                const fromPriceSlider = document.querySelector("#fromPriceSlider");
                const toPriceSlider = document.querySelector("#toPriceSlider");
                const fromPriceInput = document.querySelector("#fromPriceInput");
                const toPriceInput = document.querySelector("#toPriceInput");
                const priceFilterForm = document.querySelector("#priceFilterForm");

                let updatePending = false;

                function updateSliderColors() {
                    if (updatePending) return;

                    updatePending = true;
                    requestAnimationFrame(() => {
                        const min = parseInt(fromPriceSlider.min);
                        const max = parseInt(toPriceSlider.max);
                        const from = parseInt(fromPriceInput.value);
                        const to = parseInt(toPriceInput.value);

                        const percentFrom = ((from - min) / (max - min)) * 100;
                        const percentTo = ((to - min) / (max - min)) * 100;

                        const gradient = `linear-gradient(to right, 
                            #C6C6C6 0%, 
                            #C6C6C6 ${percentFrom}%, 
                            #733D80 ${percentFrom}%, 
                            #733D80 ${percentTo}%, 
                            #C6C6C6 ${percentTo}%, 
                            #C6C6C6 100%)`;

                        fromPriceSlider.style.background = gradient;
                        toPriceSlider.style.background = gradient;
                        updatePending = false;
                    });
                }

                function syncFromInput() {
                    let value = Math.min(parseInt(fromPriceInput.value), parseInt(toPriceInput.value));
                    fromPriceInput.value = value;
                    fromPriceSlider.value = value;
                    updateSliderColors();
                    priceFilterForm.submit();
                }

                function syncToInput() {
                    let value = Math.max(parseInt(toPriceInput.value), parseInt(fromPriceInput.value));
                    toPriceInput.value = value;
                    toPriceSlider.value = value;
                    updateSliderColors();
                    priceFilterForm.submit();
                }

                function syncFromSlider() {
                    fromPriceInput.value = fromPriceSlider.value;
                    updateSliderColors();
                }

                function syncToSlider() {
                    toPriceInput.value = toPriceSlider.value;
                    updateSliderColors();
                }

                function handleSliderChange() {
                    priceFilterForm.submit();
                }

                // Use passive event listeners for better performance
                fromPriceInput.addEventListener("input", syncFromInput, {
                    passive: true
                });
                toPriceInput.addEventListener("input", syncToInput, {
                    passive: true
                });

                // Update color while dragging
                fromPriceSlider.addEventListener("input", syncFromSlider, {
                    passive: true
                });
                toPriceSlider.addEventListener("input", syncToSlider, {
                    passive: true
                });

                // Submit form when slider is released
                fromPriceSlider.addEventListener("change", handleSliderChange);
                toPriceSlider.addEventListener("change", handleSliderChange);

                // Initialize slider colors
                updateSliderColors();
            </script>
            <!-- End Price Range Slider -->

            <!-- Carat Slider -->
            <div class="flex items-center">
                <h5 class="text-sm text-primary font-montserrat font-semibold mr-3 mt-2">Carat</h5>
                    <form id="caratFilterForm" action="{{ route('natural-diamond') }}" method="GET" class="w-full">
                        <div class="flex justify-between">
                            <div>
                                <input
                                class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                type="number" name="minCarat" id="fromCaratInput"
                                value="{{ request('minCarat', 0.0) }}" min="0.00" max="60.00"
                                step="0.01" />
                            </div>
                            <div>
                                <input
                                class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                type="number" id="toCaratInput" name="maxCarat"
                                value="{{ request('maxCarat', 60.0) }}" min="0.00" max="60.00"
                                step="0.01" />
                            </div>
                        </div>
                        <div class="relative min-h-7 flex items-center">
                            <input id="fromCaratSlider" type="range" value="{{ request('minCarat', 0.0) }}"
                                min="0" max="60" step="0.01" />
                            <input id="toCaratSlider" type="range" value="{{ request('maxCarat', 60.0) }}"
                                min="0" max="60" step="0.01" />
                        </div>
                        <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
                            <span>0ct</span>
                            <span>60ct</span>
                        </div>
                    </form>
            </div>
            <style>
                input[type="range"]#fromCaratSlider::-webkit-slider-thumb,
                input[type="range"]#toCaratSlider::-webkit-slider-thumb {
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

                input[type="range"]#fromCaratSlider::-moz-range-thumb,
                input[type="range"]#toCaratSlider::-moz-range-thumb {
                    -webkit-appearance: none;
                    appearance: none;
                    height: 4px;
                    width: 100%;
                    position: absolute;
                    background-color: #733D80;
                    pointer-events: all;
                    border-radius: 8px;
                }

                input[type="range"]#fromCaratSlider::-webkit-slider-thumb:hover,
                input[type="range"]#toCaratSlider::-webkit-slider-thumb:hover {
                    background: #f7f7f7;
                }

                input[type="number"]#fromCaratSlider::-webkit-inner-spin-button,
                input[type="number"]#fromCaratSlider::-webkit-outer-spin-button {
                    opacity: 1;
                }

                input[type="number"]#toCaratSlider::-webkit-inner-spin-button,
                input[type="number"]#toCaratSlider::-webkit-outer-spin-button {
                    opacity: 1;
                }

                input[type="range"]#fromCaratSlider,
                input[type="range"]#toCaratSlider {
                    -webkit-appearance: none;
                    appearance: none;
                    height: 4px;
                    width: 100%;
                    position: absolute;
                    background-color: #c6c6c6;
                    pointer-events: all;
                    border-radius: 8px;
                }

                #toCaratSlider {
                    height: 0;
                    z-index: 4;
                }
            </style>
            <script>
                const fromCaratSlider = document.querySelector("#fromCaratSlider");
                const toCaratSlider = document.querySelector("#toCaratSlider");
                const fromCaratInput = document.querySelector("#fromCaratInput");
                const toCaratInput = document.querySelector("#toCaratInput");
                const caratFilterForm = document.querySelector("#caratFilterForm");



                function IN_updateSliderColors() {

                    const min = parseInt(fromCaratSlider.min);
                    const max = parseInt(toCaratSlider.max);
                    const from = parseInt(fromCaratSlider.value);
                    const to = parseInt(toCaratSlider.value);

                    const percentFrom = ((from - min) / (max - min)) * 100;
                    const percentTo = ((to - min) / (max - min)) * 100;

                    const gradient = `linear-gradient(to right,
                    #C6C6C6 0%,
                    #C6C6C6 ${percentFrom}%, 
                    #733D80 ${percentFrom}%, 
                    #733D80 ${percentTo}%, 
                    #C6C6C6 ${percentTo}%, 
                    #C6C6C6 100%)`;

                    fromCaratSlider.style.background = gradient;
                    toCaratSlider.style.background = gradient;
                }

                function syncFromInput() {
                    let value = Math.min(parseFloat(fromCaratInput.value), parseFloat(toCaratInput.value));
                    fromCaratInput.value = value;
                    fromCaratSlider.value = value;
                    updateSliderColors();
                    caratFilterForm.submit();
                }

                function syncToInput() {
                    let value = Math.max(parseFloat(toCaratInput.value), parseFloat(IN_fromCaratInput.value));
                    toCaratInput.value = value;
                    toCaratSlider.value = value;
                    updateSliderColors();
                    caratFilterForm.submit();
                }

                function syncFromSlider() {
                    fromCaratInput.value = fromCaratSlider.value;
                    updateSliderColors();
                    caratFilterForm.submit();
                }

                function syncToSlider() {
                    toCaratInput.value = toCaratSlider.value;
                    updateSliderColors();
                    caratFilterForm.submit();
                }



                fromCaratInput.addEventListener("input", syncFromInput, {
                    passive: true
                });
                toCaratInput.addEventListener("input", syncToInput, {
                    passive: true
                });
                fromCaratSlider.addEventListener("input", syncFromSlider, {
                    passive: true
                });
                toCaratSlider.addEventListener("input", syncToSlider, {
                    passive: true
                });

                // Initialize slider colors
                updateSliderColors();
            </script>
            <!-- End Carat Slider -->


            <!-- Cut Slider -->
            <div class="flex items-center justify-center">
                <h5 class="text-sm text-primary font-montserrat font-semibold mr-3 mb-4">Cut</h5>
                <div class="w-full max-w-md">
                    <form id="cutFilterForm" action="{{ route('natural-diamond') }}" method="GET">
                        <div class="relative mb-3 flex items-center mt-3">
                            <input id="fromCutSlider" name="fromCutSlider" type="range"
                                value="{{ request('fromCutSlider', 0) }}" min="0" max="4"
                                step="1"
                                class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                            <input id="toCutSlider" name="toCutSlider" type="range"
                                value="{{ request('toCutSlider', 4) }}" min="0" max="4"
                                step="1"
                                class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                        </div>
                    </form>

                    <div class="flex justify-between text-xs text-gray-500 font-montserrat font-medium">
                        <span>Fair</span>
                        <span>Good</span>
                        <span>Very Good</span>
                        <span>Excellent</span>
                        <span>Ideal</span>
                    </div>
                </div>
            </div>
            <style>
                input[type="range"]#fromCutSlider::-webkit-slider-thumb,
                input[type="range"]#toCutSlider::-webkit-slider-thumb {
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

                input[type="range"]#fromCutSlider::-moz-range-thumb,
                input[type="range"]#toCutSlider::-moz-range-thumb {
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
            </style>
            <script>
                const fromCutSlider = document.querySelector("#fromCutSlider");
                const toCutSlider = document.querySelector("#toCutSlider");
                const cutFilterForm = document.querySelector("#cutFilterForm");

                function updateCutSliderColors() {
                    const min = parseInt(fromCutSlider.min);
                    const max = parseInt(toCutSlider.max);
                    const from = parseInt(fromCutSlider.value);
                    const to = parseInt(toCutSlider.value);

                    const percentFrom = ((from - min) / (max - min)) * 100;
                    const percentTo = ((to - min) / (max - min)) * 100;

                    const gradient = `linear-gradient(to right, 
                        #C6C6C6 0%, 
                        #C6C6C6 ${percentFrom}%, 
                        #733D80 ${percentFrom}%, 
                        #733D80 ${percentTo}%, 
                        #C6C6C6 ${percentTo}%, 
                        #C6C6C6 100%)`;

                    fromCutSlider.style.background = gradient;
                    toCutSlider.style.background = gradient;
                }

                function syncCutFromSlider() {
                    let value = Math.min(parseInt(fromCutSlider.value), parseInt(toCutSlider.value));
                    fromCutSlider.value = value;
                    updateCutSliderColors();
                    cutFilterForm.submit();
                }

                function syncCutToSlider() {
                    let value = Math.max(parseInt(toCutSlider.value), parseInt(fromCutSlider.value));
                    toCutSlider.value = value;
                    updateCutSliderColors();
                    cutFilterForm.submit();
                }

                fromCutSlider.addEventListener("input", syncCutFromSlider);
                toCutSlider.addEventListener("input", syncCutToSlider);

                // Initialize slider colors
                updateCutSliderColors();
            </script>
            <!-- End Cut Slider -->

            <!-- Color Slider -->
            <div class="flex items-center">
                <h5 class="text-sm text-primary font-montserrat font-semibold mr-3 mb-4">Color</h5>
                <div class="w-full max-w-md mt-3">
                    <form id="colorFilterForm" action="{{ route('natural-diamond') }}" method="GET">
                        <div class="relative mb-3 flex items-center">
                            <input id="fromColorSlider" name="fromColorSlider" type="range"
                                value="{{ request('fromColorSlider', 0) }}" min="0" max="9"
                                step="1"
                                class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                            <input id="toColorSlider" name="toColorSlider" type="range"
                                value="{{ request('toColorSlider', 9) }}" min="0" max="9"
                                step="1"
                                class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                        </div>
                    </form>

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
                </div>
            </div>
            <style>
                input[type="range"]#fromColorSlider::-webkit-slider-thumb,
                input[type="range"]#toColorSlider::-webkit-slider-thumb {
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

                input[type="range"]#fromColorSlider::-moz-range-thumb,
                input[type="range"]#toColorSlider::-moz-range-thumb {
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
            </style>
            <script>
                const fromColorSlider = document.querySelector("#fromColorSlider");
                const toColorSlider = document.querySelector("#toColorSlider");
                const colorFilterForm = document.querySelector("#colorFilterForm");

                function updateColorSliderColors() {
                    const min = parseInt(fromColorSlider.min);
                    const max = parseInt(toColorSlider.max);
                    const from = parseInt(fromColorSlider.value);
                    const to = parseInt(toColorSlider.value);

                    const percentFrom = ((from - min) / (max - min)) * 100;
                    const percentTo = ((to - min) / (max - min)) * 100;

                    const gradient = `linear-gradient(to right, 
                        #C6C6C6 0%, 
                        #C6C6C6 ${percentFrom}%, 
                        #733D80 ${percentFrom}%, 
                        #733D80 ${percentTo}%, 
                        #C6C6C6 ${percentTo}%, 
                        #C6C6C6 100%)`;

                    fromColorSlider.style.background = gradient;
                    toColorSlider.style.background = gradient;
                }

                function syncColorFromSlider() {
                    let value = Math.min(parseInt(fromColorSlider.value), parseInt(toColorSlider.value));
                    fromColorSlider.value = value;
                    updateColorSliderColors();
                    colorFilterForm.submit();
                }

                function syncColorToSlider() {
                    let value = Math.max(parseInt(toColorSlider.value), parseInt(fromColorSlider.value));
                    toColorSlider.value = value;
                    updateColorSliderColors();
                    colorFilterForm.submit();
                }

                fromColorSlider.addEventListener("input", syncColorFromSlider);
                toColorSlider.addEventListener("input", syncColorToSlider);

                // Initialize slider colors
                updateColorSliderColors();
            </script>
            <!-- End Color Slider -->

            <!-- Clarity Slider -->
            <div class="flex items-center">
                <h5 class="text-sm text-primary font-montserrat font-semibold mr-3 mb-4">Clarity</h5>
                <div class="w-full max-w-md mt-3">
                    <form id="clarityFilterForm" action="{{ route('natural-diamond') }}" method="GET">
                        <div class="relative mb-3 flex items-center">
                            <input id="fromClaritySlider" name="fromClaritySlider" type="range"
                                value="{{ request('fromClaritySlider', 0) }}" min="0" max="11"
                                step="1"
                                class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                            <input id="toClaritySlider" name="toClaritySlider" type="range"
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
                input[type="range"]#fromClaritySlider::-webkit-slider-thumb,
                input[type="range"]#toClaritySlider::-webkit-slider-thumb {
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

                input[type="range"]#fromClaritySlider::-moz-range-thumb,
                input[type="range"]#toClaritySlider::-moz-range-thumb {
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
            </style>
            <script>
                const fromClaritySlider = document.querySelector("#fromClaritySlider");
                const toClaritySlider = document.querySelector("#toClaritySlider");
                const clarityFilterForm = document.querySelector("#clarityFilterForm");

                function updateClaritySliderColors() {
                    const min = parseInt(fromClaritySlider.min);
                    const max = parseInt(toClaritySlider.max);
                    const from = parseInt(fromClaritySlider.value);
                    const to = parseInt(toClaritySlider.value);

                    const percentFrom = ((from - min) / (max - min)) * 100;
                    const percentTo = ((to - min) / (max - min)) * 100;

                    const gradient = `linear-gradient(to right, 
                        #C6C6C6 0%, 
                        #C6C6C6 ${percentFrom}%, 
                        #733D80 ${percentFrom}%, 
                        #733D80 ${percentTo}%, 
                        #C6C6C6 ${percentTo}%, 
                        #C6C6C6 100%)`;

                    fromClaritySlider.style.background = gradient;
                    toClaritySlider.style.background = gradient;
                }

                function syncClarityFromSlider() {
                    let value = Math.min(parseInt(fromClaritySlider.value), parseInt(toClaritySlider.value));
                    fromClaritySlider.value = value;
                    updateClaritySliderColors();
                    clarityFilterForm.submit();
                }

                function syncClarityToSlider() {
                    let value = Math.max(parseInt(toClaritySlider.value), parseInt(fromClaritySlider.value));
                    toClaritySlider.value = value;
                    updateClaritySliderColors();
                    clarityFilterForm.submit();
                }

                fromClaritySlider.addEventListener("input", syncClarityFromSlider);
                toClaritySlider.addEventListener("input", syncClarityToSlider);

                // Initialize slider colors
                updateClaritySliderColors();
            </script>
            <!-- End Clarity Slider -->
        </div>
        <!-- End Shape Svg , Price Range Slider , Carat Slider , Color Slider , Clarity Slider -->
        <!-- End Desktop Filter -->

        <!-- Start Advanced Options -->
        <div class="hidden lg:flex lg:felx-row items-center gap-3 px-4 md:px-8 lg:px-12 2xl:px-28 3xl:px-40 mt-7 mb-5">
            <h3 class="text-xs text-primary font-montserrat font-semibold">Advanced Options</h3>
            <div class="flex flex-col lg:flex-row lg:justify-between items-start w-full">
                <!-- Start Certificate Dropdown , Method Dropdown , Table Dropdown -->
                <div class="grid grid-cols-2 md:flex md:flex-row items-center gap-4">
                    <!-- Start Certificate Dropdown -->
                    @php
                        $selectedLab = request()->has('lab') ? explode(',', request()->lab) : [];
                    @endphp
                    <div id="styleDropdownIcon"
                        class="relative flex justify-between items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
                        <label class="block text-xs text-gray-500 font-montserrat mr-3 cursor-pointer">Certificate</label>
                        <!-- Down Arrow -->
                        <svg id="downArrow" fill="#000000" height="8" width="8" version="1.1"
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
                        <svg id="upArrow" fill="#000000" height="8" width="8" version="1.1"
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

                        <div id="styleDropdown"
                            class="hidden absolute top-full left-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
                            <div class="flex justify-between">
                                <p class="text-sm font-montserrat font-semibold px-4 py-2">Certificate</p>

                                <button class="p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <div class="py-2">
                                <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                    <input type="checkbox" class="mr-2 accent-black" name="lab[]" value="GIA"
                                        {{ in_array('GIA', $selectedLab) ? 'checked' : '' }}>
                                    <span class="text-sm font-montserrat">GIA</span>
                                </label>
                                <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                    <input type="checkbox" class="mr-2 accent-black" name="lab[]" value="IGI"
                                        {{ in_array('IGI', $selectedLab) ? 'checked' : '' }}>
                                    <span class="text-sm font-montserrat">IGI</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- End Certificate Dropdown -->
                    <!-- Start Certificate Dropdown Script -->
                    <script>
                        const styleIcon = document.getElementById('styleDropdownIcon');
                        const styleDropdown = document.getElementById('styleDropdown');
                        const downArrow = document.getElementById('downArrow');
                        const upArrow = document.getElementById('upArrow');

                        styleIcon.addEventListener('click', () => {
                            styleDropdown.classList.toggle('hidden');
                            downArrow.classList.toggle('hidden');
                            upArrow.classList.toggle('hidden');
                        });

                        // Close dropdown when clicking outside
                        document.addEventListener('click', (e) => {
                            if (!styleIcon.contains(e.target) && !styleDropdown.contains(e.target)) {
                                styleDropdown.classList.add('hidden');
                                downArrow.classList.remove('hidden');
                                upArrow.classList.add('hidden');
                            }
                        });

                        // Prevent dropdown from closing when clicking checkboxes
                        const labCheckboxes = document.querySelectorAll('input[type="checkbox"]');
                        labCheckboxes.forEach(checkbox => {
                            checkbox.addEventListener('click', (e) => {
                                e.stopPropagation();
                            });
                        });
                        // Handle checkbox selection and filter results
                        labCheckboxes.forEach(checkbox => {
                            checkbox.addEventListener('change', () => {
                                let selectedLabs = Array.from(document.querySelectorAll('input[name="lab[]"]:checked'))
                                    .map(cb => cb.value).join(',');

                                let url = new URL(window.location.href);
                                if (selectedLabs.length > 0) {
                                    url.searchParams.set("lab", selectedLabs);
                                } else {
                                    url.searchParams.delete("lab");
                                }
                                window.location.href = url.toString();
                            });
                        });
                    </script>
                    <!-- End Certificate Dropdown Script -->

                    <!-- Start Table Dropdown -->
                    <div id="tableDropdownIcon"
                        class="relative flex justify-between items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
                        <label class="block text-xs text-gray-500 font-montserrat mr-3 cursor-pointer">Table (%)</label>
                        <!-- Down Arrow -->
                        <svg id="tableDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                        <svg id="tableUpArrow" fill="#000000" height="8" width="8" version="1.1"
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

                        <div id="tableDropdown"
                            class="hidden absolute top-full left-0 mt-1 w-80 bg-white border border-gray-300 rounded shadow-lg z-10">
                            <div class="flex justify-between">
                                <p class="text-sm font-montserrat font-semibold px-4 py-2">Table (%)</p>
                                <button class="p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <div class="flex items-center p-4">
                                <div class="w-full">
                                    <form id="tableForm" action="{{ route('natural-diamond') }}" method="GET">
                                        <div class="flex justify-between">
                                            <div>
                                                <input
                                                    class="form_carat_control_container__carat__input small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                                    type="number" id="fromTableInput" name="table_min"
                                                    value="{{ request('table_min', 50) }}" min="50.00"
                                                    max="80.00" step="0.01" />
                                            </div>
                                            <div>
                                                <input
                                                    class="form_carat_control_container__carat__input small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                                    type="number" id="toTableInput" name="table_max"
                                                    value="{{ request('table_max', 80) }}" min="50.00"
                                                    max="80.00" step="0.01" />
                                            </div>
                                        </div>
                                        <div class="relative min-h-7 flex items-center">
                                            <input id="fromTableSlider" type="range" min="50" max="80"
                                                step="0.01" value="{{ request('table_min', 50) }}" />
                                            <input id="toTableSlider" type="range" min="50" max="80"
                                                step="0.01" value="{{ request('table_max', 80) }}" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <style>
                                input[type="range"]#fromTableSlider::-webkit-slider-thumb,
                                input[type="range"]#toTableSlider::-webkit-slider-thumb {
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

                                input[type="range"]#fromTableSlider,
                                input[type="range"]#toTableSlider {
                                    -webkit-appearance: none;
                                    appearance: none;
                                    height: 4px;
                                    width: 100%;
                                    position: absolute;
                                    background-color: #c6c6c6;
                                    pointer-events: all;
                                    border-radius: 8px;
                                }

                                #toTableSlider {
                                    height: 0;
                                    z-index: 4;
                                }
                            </style>
                            <script>
                                const fromTableSlider = document.querySelector("#fromTableSlider");
                                const toTableSlider = document.querySelector("#toTableSlider");
                                const fromTableInput = document.querySelector("#fromTableInput");
                                const toTableInput = document.querySelector("#toTableInput");
                                const tableForm = document.querySelector("#tableForm");

                                function updateTableSliderColors() {
                                    const min = parseInt(fromTableSlider.min);
                                    const max = parseInt(toTableSlider.max);
                                    const from = parseInt(fromTableSlider.value);
                                    const to = parseInt(toTableSlider.value);

                                    const percentFrom = ((from - min) / (max - min)) * 100;
                                    const percentTo = ((to - min) / (max - min)) * 100;

                                    const gradient = `linear-gradient(to right,
                                              #C6C6C6 0%,
                                              #C6C6C6 ${percentFrom}%, 
                                              #733D80 ${percentFrom}%, 
                                              #733D80 ${percentTo}%, 
                                              #C6C6C6 ${percentTo}%, 
                                              #C6C6C6 100%)`;

                                    fromTableSlider.style.background = gradient;
                                    toTableSlider.style.background = gradient;
                                }

                                function syncTableFromInput() {
                                    let value = Math.min(parseFloat(fromTableInput.value), parseFloat(toTableInput.value));
                                    fromTableInput.value = value;
                                    fromTableSlider.value = value;
                                    updateTableSliderColors();
                                }

                                function syncTableToInput() {
                                    let value = Math.max(parseFloat(toTableInput.value), parseFloat(fromTableInput.value));
                                    toTableInput.value = value;
                                    toTableSlider.value = value;
                                    updateTableSliderColors();
                                }

                                function syncTableFromSlider() {
                                    fromTableInput.value = parseFloat(fromTableSlider.value);
                                    updateTableSliderColors();
                                }

                                function syncTableToSlider() {
                                    toTableInput.value = parseFloat(toTableSlider.value);
                                    updateTableSliderColors();
                                }

                                function submitTableForm() {
                                    // Delay submission slightly to ensure values are updated
                                    setTimeout(() => {
                                        tableForm.submit();
                                    }, 100);
                                }

                                fromTableInput.addEventListener("change", function() {
                                    syncTableFromInput();
                                    submitTableForm();
                                });

                                toTableInput.addEventListener("change", function() {
                                    syncTableToInput();
                                    submitTableForm();
                                });

                                fromTableSlider.addEventListener("change", function() {
                                    syncTableFromSlider();
                                    submitTableForm();
                                });

                                toTableSlider.addEventListener("change", function() {
                                    syncTableToSlider();
                                    submitTableForm();
                                });

                                // For continuous updates during sliding without submitting
                                fromTableSlider.addEventListener("input", syncTableFromSlider);
                                toTableSlider.addEventListener("input", syncTableToSlider);

                                // Initialize slider colors
                                updateTableSliderColors();
                            </script>
                        </div>
                    </div>
                    <!-- End Table Dropdown -->
                    <!-- Start Table Dropdown Script -->
                    <script>
                        const tableIcon = document.getElementById('tableDropdownIcon');
                        const tableDropdown = document.getElementById('tableDropdown');
                        const tableDownArrow = document.getElementById('tableDownArrow');
                        const tableUpArrow = document.getElementById('tableUpArrow');

                        tableIcon.addEventListener('click', () => {
                            tableDropdown.classList.toggle('hidden');
                            tableDownArrow.classList.toggle('hidden');
                            tableUpArrow.classList.toggle('hidden');
                        });

                        // Close dropdown when clicking outside
                        document.addEventListener('click', (e) => {
                            if (!tableIcon.contains(e.target) && !tableDropdown.contains(e.target) && !fromTableSlider.contains(e
                                    .target) && !toTableSlider.contains(e.target) && !fromTableInput.contains(e.target) && !
                                toTableInput.contains(e.target)) {
                                tableDropdown.classList.add('hidden');
                                tableDownArrow.classList.remove('hidden');
                                tableUpArrow.classList.add('hidden');
                            }
                        });

                        // Prevent dropdown from closing when clicking checkboxes
                        const tableCheckboxes = tableDropdown.querySelectorAll('input[type="checkbox"]');
                        tableCheckboxes.forEach(checkbox => {
                            checkbox.addEventListener('click', (e) => {
                                e.stopPropagation();
                            });
                        });
                    </script>
                    <!-- End Table Dropdown Script -->

                    <!-- Start L/W Ratio Dropdown -->
                    <div id="lwDropdownIcon"
                        class="relative flex justify-between items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
                        <label class="block text-xs text-gray-500 font-montserrat mr-3 cursor-pointer">L/W Ratio</label>
                        <!-- Down Arrow -->
                        <svg id="lwDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                        <svg id="lwUpArrow" fill="#000000" height="8" width="8" version="1.1"
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

                        <div id="lwDropdown"
                            class="hidden absolute top-full left-0 mt-1 w-80 bg-white border border-gray-300 rounded shadow-lg z-10">
                            <div class="flex justify-between">
                                <p class="text-sm font-montserrat font-semibold px-4 py-2">L/W Ratio</p>

                                <button class="p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex items-center p-4">
                                <div class="w-full">
                                    <form id="lwForm" action="{{ route('natural-diamond') }}" method="GET">
                                        <div class="flex justify-between">
                                            <div>
                                                <input
                                                    class="form_carat_control_container__carat__input small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                                    type="number" id="fromLWInput" name="l_w_ratio_min"
                                                    value="{{ request('l_w_ratio_min', 1.0) }}" min="1.00"
                                                    max="80" step="0.01" />
                                            </div>
                                            <div>
                                                <input
                                                    class="form_carat_control_container__carat__input small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                                    type="number" id="toLWInput" name="l_w_ratio_max"
                                                    value="{{ request('l_w_ratio_max', 80) }}" min="1.00"
                                                    max="80" step="0.01" />
                                            </div>
                                        </div>
                                        <div class="relative min-h-7 flex items-center">
                                            <input id="fromLWSlider" type="range" class="slider-min"
                                                value="{{ request('l_w_ratio_min', 1.0) }}" min="1"
                                                max="80" step="0.01" />
                                            <input id="toLWSlider" type="range" class="slider-max"
                                                value="{{ request('l_w_ratio_max', 80) }}" min="1"
                                                max="80" step="0.01" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <style>
                                input[type="range"]#fromLWSlider::-webkit-slider-thumb,
                                input[type="range"]#toLWSlider::-webkit-slider-thumb {
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

                                input[type="range"]#fromLWSlider,
                                input[type="range"]#toLWSlider {
                                    -webkit-appearance: none;
                                    appearance: none;
                                    height: 4px;
                                    width: 100%;
                                    position: absolute;
                                    background-color: #c6c6c6;
                                    pointer-events: all;
                                    border-radius: 8px;
                                }

                                #toLWSlider {
                                    height: 0;
                                    z-index: 4;
                                }
                            </style>
                            <script>
                                const fromLWSlider = document.querySelector("#fromLWSlider");
                                const toLWSlider = document.querySelector("#toLWSlider");
                                const fromLWInput = document.querySelector("#fromLWInput");
                                const toLWInput = document.querySelector("#toLWInput");
                                const lwForm = document.querySelector("#lwForm");
                                const lwDropdownIcon = document.querySelector("#lwDropdownIcon");
                                const lwDropdown = document.querySelector("#lwDropdown");
                                const lwDownArrow = document.querySelector("#lwDownArrow");
                                const lwUpArrow = document.querySelector("#lwUpArrow");

                                // Toggle dropdown functionality
                                lwDropdownIcon.addEventListener("click", function() {
                                    lwDropdown.classList.toggle("hidden");
                                    lwDownArrow.classList.toggle("hidden");
                                    lwUpArrow.classList.toggle("hidden");
                                });

                                function updateLWSliderColors() {
                                    const min = parseFloat(fromLWSlider.min);
                                    const max = parseFloat(toLWSlider.max);
                                    const from = parseFloat(fromLWSlider.value);
                                    const to = parseFloat(toLWSlider.value);

                                    const percentFrom = ((from - min) / (max - min)) * 100;
                                    const percentTo = ((to - min) / (max - min)) * 100;

                                    const gradient = `linear-gradient(to right,
                                            #C6C6C6 0%,
                                            #C6C6C6 ${percentFrom}%, 
                                            #733D80 ${percentFrom}%, 
                                            #733D80 ${percentTo}%, 
                                            #C6C6C6 ${percentTo}%, 
                                            #C6C6C6 100%)`;

                                    fromLWSlider.style.background = gradient;
                                    toLWSlider.style.background = gradient;
                                }

                                function syncLWFromInput() {
                                    let value = Math.min(parseFloat(fromLWInput.value), parseFloat(toLWInput.value));
                                    fromLWInput.value = value.toFixed(2);
                                    fromLWSlider.value = value;
                                    updateLWSliderColors();
                                    lwForm.submit();
                                }

                                function syncLWToInput() {
                                    let value = Math.max(parseFloat(toLWInput.value), parseFloat(fromLWInput.value));
                                    toLWInput.value = value.toFixed(2);
                                    toLWSlider.value = value;
                                    updateLWSliderColors();
                                    lwForm.submit();
                                }

                                function syncLWFromSlider() {
                                    fromLWInput.value = parseFloat(fromLWSlider.value).toFixed(2);
                                    // Update the hidden input before submitting
                                    updateLWSliderColors();
                                    lwForm.submit();
                                }

                                function syncLWToSlider() {
                                    toLWInput.value = parseFloat(toLWSlider.value).toFixed(2);
                                    // Update the hidden input before submitting
                                    updateLWSliderColors();
                                    lwForm.submit();
                                }

                                fromLWInput.addEventListener("input", syncLWFromInput);
                                toLWInput.addEventListener("input", syncLWToInput);
                                fromLWSlider.addEventListener("input", syncLWFromSlider);
                                toLWSlider.addEventListener("input", syncLWToSlider);

                                // Initialize slider colors
                                updateLWSliderColors();
                            </script>
                        </div>
                    </div>
                    <!-- End L/W Ratio Dropdown -->

                    <!-- Start L/W Ratio Dropdown Script -->
                    <script>
                        const lwIcon = document.getElementById('lwDropdownIcon');
                        const lwDropdown = document.getElementById('lwDropdown');
                        const lwDownArrow = document.getElementById('lwDownArrow');
                        const lwUpArrow = document.getElementById('lwUpArrow');

                        lwIcon.addEventListener('click', () => {
                            lwDropdown.classList.toggle('hidden');
                            lwDownArrow.classList.toggle('hidden');
                            lwUpArrow.classList.toggle('hidden');
                        });

                        // Close dropdown when clicking outside
                        document.addEventListener('click', (e) => {
                            if (!lwIcon.contains(e.target) && !lwDropdown.contains(e.target)) {
                                lwDropdown.classList.add('hidden');
                                lwDownArrow.classList.remove('hidden');
                                lwUpArrow.classList.add('hidden');
                            }
                        });

                        // Prevent dropdown from closing when clicking checkboxes
                        const lwCheckboxes = lwDropdown.querySelectorAll('input[type="checkbox"]');
                        lwCheckboxes.forEach(checkbox => {
                            checkbox.addEventListener('click', (e) => {
                                e.stopPropagation();
                            });
                        });
                    </script>
                    <!-- End L/W Ratio Dropdown Script -->
                </div>
                <!-- End Certificate Dropdown , Method Dropdown , Table Dropdown -->
            </div>
        </div>
        <!-- End Advanced Options -->

        <!-- Start Search Box And Clear Filters Button -->
        <div class="flex justify-between items-center md:px-10 py-5">
            <!-- Left side search box with icon -->
            <form action="{{ route('natural-diamond') }}" method="GET">
                <div class="relative flex items-center w-full md:w-96">
                    <input type="text" placeholder="Search" name="search" value="{{ request('search') }}"
                        class="w-full md:w-96 px-4 py-2.5 border border-gray-300 font-montserrat text-sm placeholder:font-medium focus:outline-none focus:border-black">
                    <div class="absolute right-0 h-full flex items-center">
                        <button type="submit" class="h-full px-4 bg-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Right side clear filter button -->
            <button onclick="clearFilters()"
                class="hidden md:flex items-center gap-2 text-sm font-montserrat text-primary">
                <span>Clear Filters</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <script>
                function clearFilters() {
                    const url = new URL(window.location.href);
                    url.searchParams.delete('shape');
                    url.searchParams.delete('minPrice');
                    url.searchParams.delete('maxPrice');
                    url.searchParams.delete('minCarat');
                    url.searchParams.delete('maxCarat');
                    url.searchParams.delete('fromCutSlider');
                    url.searchParams.delete('toCutSlider');
                    url.searchParams.delete('fromColorSlider');
                    url.searchParams.delete('toColorSlider');
                    url.searchParams.delete('fromClaritySlider');
                    url.searchParams.delete('toClaritySlider');
                    url.searchParams.delete('lab');
                    url.searchParams.delete('table_min');
                    url.searchParams.delete('table_max');
                    url.searchParams.delete('depth_min');
                    url.searchParams.delete('depth_max');
                    url.searchParams.delete('l_w_ratio_min');
                    url.searchParams.delete('l_w_ratio_max');
                    url.searchParams.delete('search');
                    window.location.href = url.toString();
                }
            </script>
        </div>
        <!-- End Search Box And Clear Filters Button -->

        <!-- Start Table -->
        <div class=" overflow-x-auto md:px-10">
            <div class="min-w-[800px]">
                <table class="w-full border-collapse">
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
                                    <span class="text-sm font-montserrat font-semibold">Color</span>
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
                                    <img src="{{ asset($diamond->shape_svg) }}" width="25" height="25"
                                        class="group-hover:text-dark-blue mb-2" alt="{{ $diamond->shape }} Shape">
                                    <span class="pb-1 font-medium">{{ $diamond->shape }}</span>
                                    <span class="text-xs text-red-600 uppercase pb-1">Sale</span>
                                </td>
                                <td class="py-4 text-sm font-montserrat">{{ $diamond->carat }}</td>
                                <td class="py-4 text-sm font-montserrat">{{ $diamond->cut }}</td>
                                <td class="py-4 text-sm font-montserrat">{{ $diamond->color }}</td>
                                <td class="py-4 text-sm font-montserrat">{{ $diamond->clarity }}</td>
                                <td class="py-4 text-sm font-montserrat">

                                    <span class="text-gray-600 line-through text-xs">${{ $diamond->mrp }}</span>
                                    <span class="text-red-600">${{ $diamond->original_price }}</span>
                                </td>
                                <td class="py-4">
                                    <button
                                        class="px-4 py-2 text-sm font-montserrat text-gold bg-primary rounded hover:bg-white border border-primary hover:text-primary transition-all duration-300">View
                                        More</button>
                                </td>
                            </tr>

                            <tr id="details-{{ $diamond->id }}"
                                class="content hidden transition-all duration-200 ease-in-out max-h-0 overflow-hidden opacity-0">
                                <td colspan="7" class="relative w-full">
                                    <button onclick="toggleDetails({{ $diamond->id }})"
                                        class="absolute right-4 top-4 text-gray-500 hover:text-primary">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                    <div class="grid grid-cols-2 gap-8 my-10">
                                        <!-- Left Side -->
                                        <div class="relative flex flex-col items-center gap-3">
                                            <!-- Wishlist Heart Icon -->
                                            <button
                                            data-product-type="{{ get_class($diamond) === 'App\\Models\\Diamond' ? 'diamond' : (get_class($diamond) === 'App\\Models\\ColorDiamond' ? 'color-diamond' : 'natural-diamond') }}"
                                            data-product-id="{{ $diamond->id }}"
                                            class="wishlist-btn absolute top-2 right-2 p-2 rounded-full transition-colors duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor"
                                                class="w-6 h-6 transition-all wishlist-icon"
                                                fill="{{ Auth::guard('customer')->check() && $diamond->isInWishlist(Auth::guard('customer')->id()) ? 'red' : 'white' }}">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 21l-1.45-1.35C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.15L12 21z"
                                                    stroke="{{ Auth::guard('customer')->check() && $diamond->isInWishlist(Auth::guard('customer')->id()) ? 'red' : 'gray' }}" />
                                            </svg>
                                        </button>

                                            <div class="flex items-center justify-center">
                                                <img src="{{ asset($diamond->image_link) }}" class="w-40"
                                                    alt="{{ $diamond->name }}">
                                            </div>

                                            <div class="text-center">
                                                <p class="text-2xl font-montserrat font-semibold text-primary">
                                                    {{ ucwords($diamond->name) }}
                                                </p>
                                                <div class="mt-1">
                                                    <span
                                                        class="text-gray-600 line-through text-lg font-montserrat font-medium">${{ $diamond->mrp }}</span>
                                                    <span
                                                        class="text-xl text-primary ml-1 font-montserrat font-semibold">${{ $diamond->original_price }}</span>
                                                </div>
                                            </div>
                                            <div class="flex gap-4 justify-center mt-2">
                                                <form action="{{ route('cart.add') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id"
                                                        value="{{ $diamond->id }}">
                                                    <input type="hidden" name="name"
                                                        value="{{ $diamond->name }}">
                                                    <input type="hidden" name="shape"
                                                        value="{{ $diamond->shape }}">
                                                    <input type="hidden" name="original_price"
                                                        value="{{ $diamond->original_price }}">
                                                    <input type="hidden" name="carat"
                                                        value="{{ $diamond->carat }}">
                                                    <input type="hidden" name="cut"
                                                        value="{{ $diamond->cut }}">
                                                    <input type="hidden" name="color"
                                                        value="{{ $diamond->color }}">
                                                    <input type="hidden" name="clarity"
                                                        value="{{ $diamond->clarity }}">
                                                    <input type="hidden" name="images"
                                                        value="{{ $diamond->image_link }}">
                                                    <input type="hidden" name="size"
                                                        value="{{ $diamond->size }}">
                                                    <input type="hidden" name="sku"
                                                        value="{{ $diamond->sku }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <input type="hidden" name="mrp"
                                                        value="{{ $diamond->mrp }}">
                                                    <button
                                                        class="px-6 py-2.5 bg-primary text-sm text-white rounded-sm hover:bg-white hover:text-primary transition-colors flex items-center font-montserrat border border-primary gap-2">
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
                                                            class="px-6 py-2.5 text-sm border border-primary text-primary  rounded-sm hover:bg-primary hover:text-white transition-colors flex items-center font-montserrat gap-2">
                                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                            Play Video
                                                        </button>
                                                    </a>
                                                @endif
                                            </div>

                                            <a href="{{ asset($diamond->certificate_link) }}" target="_blank"
                                                class="text-primary underline-offset-2 underline hover:text-blue-800 text-center mt-1 text-xs font-montserrat font-bold">
                                                View Diamond Certificate
                                            </a>

                                            <span class="text-xs text-gray-500 mt-1 font-montserrat ">Diamond photo is for
                                                visual purposes only. Play Video for a real diamond.</span>
                                        </div>

                                        <!-- Right Side -->
                                        <div>
                                            <h3 class="text-lg text-primary font-montserrat font-semibold uppercase mb-4">
                                                Diamond
                                                Details</h3>
                                            <table class="w-full">
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
                                                            Size (mm)
                                                        </td>
                                                        <td
                                                            class="font-montserrat font-semibold text-gray-600 uppercase py-2">
                                                            {{ $diamond->length }} x {{ $diamond->width }} x
                                                            {{ $diamond->height }} mm
                                                            <br>
                                                            <span class="text-xs text-gray-500 lowercase">
                                                                (length)
                                                                x (width) x (height)
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr class="border-b">
                                                        <td
                                                            class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                            Cut</td>
                                                        <td class="py-2">
                                                            <span
                                                                class="font-montserrat font-semibold text-gray-600">{{ $diamond->cut }}</span>
                                                            <span
                                                                class="font-montserrat text-sm text-gray-500">{{ $diamond->cut_description }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td
                                                            class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                            Color</td>
                                                        <td class="py-2">
                                                            <span
                                                                class="font-montserrat font-semibold text-gray-600">{{ $diamond->color }}</span>
                                                            <span
                                                                class="font-montserrat text-sm text-gray-500">{{ $diamond->color_description }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td
                                                            class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                            Clarity</td>
                                                        <td class="py-2">
                                                            <span
                                                                class="font-montserrat font-semibold text-gray-600">{{ $diamond->clarity }}</span>
                                                            <span
                                                                class="font-montserrat text-sm text-gray-500">{{ $diamond->clarity_description }}</span>
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
                                                            Table & Depth
                                                        </td>
                                                        <td
                                                            class="font-montserrat font-semibold text-gray-600 uppercase py-2">
                                                            {{ $diamond->table }} & {{ $diamond->depth }}%
                                                            <br>
                                                            <span class="text-xs text-gray-500 lowercase">
                                                                (table)
                                                                & (depth)
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td
                                                            class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                            L/W Ratio</td>
                                                        <td
                                                            class="font-montserrat font-semibold text-gray-600 uppercase py-2">
                                                            {{ $diamond->ratio }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">
                                                            Inscription</td>
                                                        <td
                                                            class="font-montserrat font-semibold text-gray-600 uppercase py-2">
                                                            {{ $diamond->inscription }}</td>
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
            </div>

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
                fetch(`/natural-diamond?${params.toString()}`, {
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

    <!-- Start Mobile Shape Dropdown Script -->
    <script>
        const shapeDropdownIcon = document.getElementById('shapeDropdownIcon');
        const shapeDropdown = document.getElementById('shapeDropdown');
        const shapeDownArrow = document.getElementById('shapeDownArrow');
        const shapeUpArrow = document.getElementById('shapeUpArrow');

        // Toggle dropdown visibility
        shapeDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            shapeDropdown.classList.toggle('hidden');
            shapeDownArrow.classList.toggle('hidden');
            shapeUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!shapeDropdownIcon.contains(e.target)) {
                shapeDropdown.classList.add('hidden');
                shapeDownArrow.classList.remove('hidden');
                shapeUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        shapeDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Shape Dropdown Script  -->

    <!-- Start Mobile Price Dropdown Script  -->
    <script>
        const priceDropdownIcon = document.getElementById('priceDropdownIcon');
        const priceDropdown = document.getElementById('priceDropdown');
        const priceDownArrow = document.getElementById('priceDownArrow');
        const priceUpArrow = document.getElementById('priceUpArrow');

        // Toggle dropdown visibility
        priceDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            priceDropdown.classList.toggle('hidden');
            priceDownArrow.classList.toggle('hidden');
            priceUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!priceDropdownIcon.contains(e.target)) {
                priceDropdown.classList.add('hidden');
                priceDownArrow.classList.remove('hidden');
                priceUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        priceDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Price Dropdown Script -->

    <!-- Start Mobile Type Dropdown Script -->
    <script>
        const typeFilterDropdownIcon = document.getElementById('typeFilterDropdownIcon');
        const typeFilterDropdown = document.getElementById('typeFilterDropdown');
        const typeFilterDownArrow = document.getElementById('typeFilterDownArrow');
        const typeFilterUpArrow = document.getElementById('typeFilterUpArrow');

        //   dropdown visibility
        typeFilterDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            typeFilterDropdown.classList.toggle('hidden');
            typeFilterDownArrow.classList.toggle('hidden');
            typeFilterUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!typeFilterDropdownIcon.contains(e.target)) {
                typeFilterDropdown.classList.add('hidden');
                typeFilterDownArrow.classList.remove('hidden');
                typeFilterUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        typeFilterDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Type Dropdown Script -->

    <!-- Start Mobile Color Dropdown Script  -->
    <script>
        const colorDropdownIcon = document.getElementById('colorDropdownIcon');
        const colorDropdown = document.getElementById('colorDropdown');
        const colorDownArrow = document.getElementById('colorDownArrow');
        const colorUpArrow = document.getElementById('colorUpArrow');

        // Toggle dropdown visibility
        colorDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            colorDropdown.classList.toggle('hidden');
            colorDownArrow.classList.toggle('hidden');
            colorUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!colorDropdownIcon.contains(e.target)) {
                colorDropdown.classList.add('hidden');
                colorDownArrow.classList.remove('hidden');
                colorUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        colorDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Color Dropdown Script -->

    <!-- Start Mobile Clarity Dropdown Script -->
    <script>
        const claritytyDropdownIcon = document.getElementById('claritytyDropdownIcon');
        const claritytyDropdown = document.getElementById('claritytyDropdown');
        const claritytyDownArrow = document.getElementById('claritytyDownArrow');
        const claritytyUpArrow = document.getElementById('claritytyUpArrow');

        // Toggle dropdown visibility
        claritytyDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            claritytyDropdown.classList.toggle('hidden');
            claritytyDownArrow.classList.toggle('hidden');
            claritytyUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!claritytyDropdownIcon.contains(e.target)) {
                claritytyDropdown.classList.add('hidden');
                claritytyDownArrow.classList.remove('hidden');
                claritytyUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        claritytyDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Clarity Dropdown Script -->

    <!-- Start Mobile Cut Dropdown Script -->
    <script>
        const cutDropdownIcon = document.getElementById('cutDropdownIcon');
        const cutDropdown = document.getElementById('cutDropdown');
        const cutDownArrow = document.getElementById('cutDownArrow');
        const cutUpArrow = document.getElementById('cutUpArrow');

        // Toggle dropdown visibility
        cutDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            cutDropdown.classList.toggle('hidden');
            cutDownArrow.classList.toggle('hidden');
            cutUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!cutDropdownIcon.contains(e.target)) {
                cutDropdown.classList.add('hidden');
                cutDownArrow.classList.remove('hidden');
                cutUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        cutDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Cut Dropdown Script  -->

    <!-- Start Mobile Carat Dropdown Script -->
    <script>
        const caratDropdownIcon = document.getElementById('caratDropdownIcon');
        const caratDropdown = document.getElementById('caratDropdown');
        const caratDownArrow = document.getElementById('caratDownArrow');
        const caratUpArrow = document.getElementById('caratUpArrow');

        // Toggle dropdown visibility
        caratDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            caratDropdown.classList.toggle('hidden');
            caratDownArrow.classList.toggle('hidden');
            caratUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!caratDropdownIcon.contains(e.target)) {
                caratDropdown.classList.add('hidden');
                caratDownArrow.classList.remove('hidden');
                caratUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        caratDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Mobile Carat Dropdown Script -->

    <!-- Start Mobile Advanced Options Dropdown Script -->
    <script>
        const advancedOptionsDropdownIcon = document.getElementById('advancedOptionsDropdownIcon');
        const advancedOptionsDropdown = document.getElementById('advancedOptionsDropdown');
        const advancedOptionsDownArrow = document.getElementById('advancedOptionsDownArrow');
        const advancedOptionsUpArrow = document.getElementById('advancedOptionsUpArrow');

        // Toggle dropdown visibility
        advancedOptionsDropdownIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click propagation
            advancedOptionsDropdown.classList.toggle('hidden');
            advancedOptionsDownArrow.classList.toggle('hidden');
            advancedOptionsUpArrow.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!advancedOptionsDropdownIcon.contains(e.target)) {
                advancedOptionsDropdown.classList.add('hidden');
                advancedOptionsDownArrow.classList.remove('hidden');
                advancedOptionsUpArrow.classList.add('hidden');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        advancedOptionsDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <!-- End Advanced Options Dropdown Script -->

     {{-- Add To WishList Icon Script --}}
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wishlistButtons = document.querySelectorAll('.wishlist-btn');

            wishlistButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    const productType = this.getAttribute('data-product-type');
                    const productId = this.getAttribute('data-product-id');
                    const icon = this.querySelector('.wishlist-icon');

                    toggleWishlist(productType, productId, icon);
                });
            });

            function toggleWishlist(productType, productId, iconElement) {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch('/wishlist/toggle', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            product_type: productType,
                            id: productId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            iconElement.setAttribute("fill", data.action === 'added' ? "red" : "white");
                            iconElement.querySelector('path').setAttribute("stroke", data.action === 'added' ?
                                "red" : "gray");
                        } else if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            alert(data.message || 'An error occurred');
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        });
    </script>
    {{-- Add To WishList Icon Script --}}
@endsection
