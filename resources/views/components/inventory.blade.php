@extends('layouts.master')

@section('content')
<div class="w-full mx-auto py-12">
    <h1
        class="text-xl lg:text-4xl text-primary font-montserrat font-bold text-center mb-3 px-4 md:px-8 lg:px-12 2xl:px-16 3xl:px-40">
        Certified Lab Grown Diamonds
    </h1>
    <p
        class="text-primary/80 text-center font-montserrat text-sm mb-4 md:mb-8 px-4 md:px-8 lg:px-12 2xl:px-16 3xl:px-40">
        Select your perfect lab grown diamond from thousands of ethically sourced diamonds.
    </p>

    <!-- Filter Button -->
    <div class="flex justify-center items-center lg:hidden px-4 md:px-8 lg:px-12 2xl:px-16 py-4">
        <button
            class="bg-white border border-primary font-montserrat text-primary hover:bg-primary hover:text-white w-full md:w-60 py-2"
            id="filterButton" onclick="showFilterDrawer()">Filter</button>
    </div>

    <!-- Filter Drawer -->
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
                    <a href="route('inventory', ['shape' => 'asscher'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/asscher.svg') }}" width="25" height="25" alt="Asscher Shape">
                    </a>

                    <!-- Cushion -->
                    <a href="{{ route('inventory', ['shape' => 'cushion']) }}"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/cushion.svg') }}" width="25" height="25" alt="Cushion Shape">
                    </a>

                    <!-- Oval -->
                    <a href="route('inventory', ['shape' => 'oval'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/oval.svg') }}" width="25" height="25" alt="Oval Shape">
                    </a>

                    <!-- Emerald -->
                    <a href="route('inventory', ['shape' => 'emerald'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/emerald.svg') }}" width="25" height="25" alt="Emerald Shape">
                    </a>

                    <!-- Pear -->
                    <a href="{{ route('inventory', ['shape' => 'pear']) }}"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/pear.svg') }}" width="25" height="25" alt="Pear Shape">
                    </a>

                    <!-- Marquise -->
                    <a href="route('inventory', ['shape' => 'marquise'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/marquise.svg') }}" width="25" height="25"
                            alt="Marquise Shape">
                    </a>

                    <!-- Heart -->
                    <a href="route('inventory', ['shape' => 'heart'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/heart.svg') }}" width="25" height="25" alt="Heart Shape">
                    </a>

                    <!-- Rose Cut -->
                    <a href="route('inventory', ['shape' => 'rose-cut'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/rose-cut.svg') }}" width="25" height="25"
                            alt="Rose Cut Shape">
                    </a>

                    <!-- Old European -->
                    <a href="route('inventory', ['shape' => 'old-european'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/old-european.svg') }}" width="25" height="25"
                            alt="Old European Shape">
                    </a>

                    <!-- Half Moon -->
                    <a href="route('inventory', ['shape' => 'half-moon'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/half-moon.svg') }}" width="25" height="25"
                            alt="Half Moon Shape">
                    </a>

                    <!-- Baguette Trapezoid -->
                    <a href="route('inventory', ['shape' => 'baguette-trapezoid'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center text-center hover:text-dark-blue group mr-2">
                        <img src="{{ asset('Shape/baguette-trapezoid.svg') }}" width="25" height="25"
                            alt="Baguette Trapezoid Shape">
                    </a>

                    <!-- Baguette -->
                    <a href="route('inventory', ['shape' => 'baguette'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/baguette.svg') }}" width="25" height="25"
                            alt="Baguette Shape">
                    </a>

                    <!-- Hexagon -->
                    <a href="route('inventory', ['shape' => 'hexagon'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/hexagon.svg') }}" width="25" height="25"
                            alt="Hexagon Shape">
                    </a>

                    <!-- Kite -->
                    <a href="route('inventory', ['shape' => 'kite'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/kite.svg') }}" width="25" height="25" alt="Kite Shape">
                    </a>

                    <!-- Old Mine -->
                    <a href="route('inventory', ['shape' => 'old-mine'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/old-mine.svg') }}" width="25" height="25"
                            alt="Old Mine Shape">
                    </a>

                    <!-- Trapezoid -->
                    <a href="route('inventory', ['shape' => 'trapezoid'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/trapezoid.svg') }}" width="25" height="25"
                            alt="Trapezoid Shape">
                    </a>

                    <!-- Triangular -->
                    <a href="route('inventory', ['shape' => ''])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/triangular.svg') }}" width="25" height="25"
                            alt="Triangular Shape">
                    </a>
                    <!-- End Shape Svg -->
                </div>
            </div>

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
                    <svg id="priceUpArrow" class="hidden" height="8" width="8" version="1.1" id="Layer_1"
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
                <div id="priceDropdown" class="hidden mt-4">
                    <div class="flex items-center">
                        <div class="mobile_range_container">
                            <div class="mobile_form_control">
                                <div class="mobile_form_control_container">
                                    <input class="mobile_form_control_container__time__input" type="number" id="mobile_fromInput"
                                        value="100" min="100" max="100000" />
                                </div>
                                <div class="mobile_form_control_container">
                                    <input class="mobile_form_control_container__time__input" type="number" id="mobile_toInput"
                                        value="100000" min="100" max="100000" />
                                </div>
                            </div>
                            <div class="mobile_sliders_control">
                                <input id="mobile_fromSlider" type="range" value="100" min="100"
                                    max="100000" />
                                <input id="mobile_toSlider" type="range" value="100000" min="100"
                                    max="100000" />
                            </div>
                            <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
                                <span>$100</span>
                                <span>$100,000</span>
                            </div>
                        </div>
                    </div>
                    <style>
                        .mobile_range_container {
                            display: flex;
                            flex-direction: column;
                            width: 80%;
                            margin: 5% auto;
                        }

                        .mobile_sliders_control {
                            position: relative;
                            min-height: 35px;
                            display: flex;
                            align-items: center;
                        }

                        .mobile_form_control {
                            position: relative;
                            display: flex;
                            justify-content: space-between;
                            font-size: 24px;
                            color: #635a5a;
                            width: 100%;
                        }

                        input[type="range"]::-webkit-slider-thumb {
                            -webkit-appearance: none;
                            pointer-events: all;
                            width: 16px;
                            height: 16px;
                            background-color: #fff;
                            border-radius: 100%;
                            box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                            cursor: pointer;
                        }

                        input[type="range"]::-moz-range-thumb {
                            -webkit-appearance: none;
                            pointer-events: all;
                            width: 24px;
                            height: 24px;
                            background-color: #fff;
                            border-radius: 50%;
                            box-shadow: 0 0 0 1px #c6c6c6;
                            cursor: pointer;
                        }

                        input[type="range"]::-webkit-slider-thumb:hover {
                            background: #f7f7f7;
                        }

                        input[type="range"]::-webkit-slider-thumb:active {
                            box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                        }

                        input[type="number"] {
                            color: #8a8383;
                            width: 100%;
                            font-size: 13px;
                            border: 1px solid #c6c6c6;
                            border-radius: 4px;
                            padding: 4px;
                        }

                        input[type="number"]::-webkit-inner-spin-button,
                        input[type="number"]::-webkit-outer-spin-button {
                            opacity: 1;
                        }

                        input[type="range"] {
                            -webkit-appearance: none;
                            appearance: none;
                            height: 4px;
                            width: 100%;
                            position: absolute;
                            background-color: #c6c6c6;
                            pointer-events: none;
                            border-radius: 8px;
                        }

                        #mobile_fromSlider {
                            height: 0;
                            z-index: 1;
                        }
                    </style>
                    <script>
                        const mobile_fromSlider = document.querySelector("#mobile_fromSlider");
                        const mobile_toSlider = document.querySelector("#mobile_toSlider");
                        const mobile_fromInput = document.querySelector("#mobile_fromInput");
                        const mobile_toInput = document.querySelector("#mobile_toInput");

                        function updateSliderColors() {
                            const min = parseInt(mobile_fromSlider.min);
                            const max = parseInt(mobile_toSlider.max);
                            const from = parseInt(mobile_fromInput.value);
                            const to = parseInt(mobile_toInput.value);

                            const percentFrom = ((from - min) / (max - min)) * 100;
                            const percentTo = ((to - min) / (max - min)) * 100;

                            // Show only the selected color between the two endpoints
                            mobile_fromSlider.style.background = `linear-gradient(to right, #733D80 ${percentFrom}%, #733D80 ${percentTo}%, #c6c6c6 ${percentTo}%)`;
                            mobile_toSlider.style.background = mobile_fromSlider.style.background;
                        }

                        function syncFromInput() {
                            let value = Math.min(parseInt(mobile_fromInput.value), parseInt(mobile_toInput.value));
                            mobile_fromInput.value = value;
                            mobile_fromSlider.value = value;
                            updateSliderColors();
                        }

                        function syncToInput() {
                            let value = Math.max(parseInt(mobile_toInput.value), parseInt(mobile_fromInput.value));
                            mobile_toInput.value = value;
                            mobile_toSlider.value = value;
                            updateSliderColors();
                        }

                        function syncFromSlider() {
                            mobile_fromInput.value = mobile_fromSlider.value;
                            updateSliderColors();
                        }

                        function syncToSlider() {
                            mobile_toInput.value = mobile_toSlider.value;
                            updateSliderColors();
                        }

                        mobile_fromInput.addEventListener("input", syncFromInput);
                        mobile_toInput.addEventListener("input", syncToInput);
                        mobile_fromSlider.addEventListener("input", syncFromSlider);
                        mobile_toSlider.addEventListener("input", syncToSlider);

                        updateSliderColors();
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
                    <svg id="caratUpArrow" class="hidden" height="8" width="8" version="1.1" id="Layer_1"
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
                <div id="caratDropdown" class="hidden mt-4">
                    <div class="flex items-center">
                        <div class="mobile_range_carat_container">
                            <div class="mobile_form_carat_control">
                                <div class="mobile_form_carat_control_container">
                                    <input class="mobile_form_carat_control_container__carat__input" type="number"
                                        id="mobile_fromCaratInput" value="0.00" min="0" max="60"
                                        step="0.01" />
                                </div>
                                <div class="mobile_form_carat_control_container">
                                    <input class="mobile_form_carat_control_container__carat__input" type="number"
                                        id="mobile_toCaratInput" value="60.00" min="0" max="60"
                                        step="0.01" />
                                </div>
                            </div>
                            <div class="mobile_sliders_carat_control">
                                <input id="mobile_fromCaratSlider" type="range" value="0" min="0"
                                    max="60" />
                                <input id="mobile_toCaratSlider" type="range" value="60" min="0"
                                    max="60" />
                            </div>
                            <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
                                <span>0ct</span>
                                <span>60ct</span>
                            </div>
                        </div>
                    </div>
                    <style>
                        .mobile_range_carat_container {
                            display: flex;
                            flex-direction: column;
                            width: 80%;
                            margin: 5% auto;
                        }

                        .mobile_sliders_carat_control {
                            position: relative;
                            min-height: 35px;
                            display: flex;
                            align-items: center;
                        }

                        .mobile_form_carat_control {
                            display: flex;
                            justify-content: space-between;
                            font-size: 24px;
                            color: #635a5a;
                        }

                        input[type="range"]#mobile_fromCaratSlider::-webkit-slider-thumb,
                        input[type="range"]#mobile_toCaratSlider::-webkit-slider-thumb {
                            -webkit-appearance: none;
                            pointer-events: all;
                            width: 16px;
                            height: 16px;
                            background-color: #fff;
                            border-radius: 100%;
                            box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                            cursor: pointer;
                            position: relative;
                            z-index: 5;
                        }

                        input[type="range"]#mobile_fromCaratSlider::-moz-range-thumb,
                        input[type="range"]#mobile_toCaratSlider::-moz-range-thumb {
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

                        input[type="range"]#mobile_fromCaratSlider::-webkit-slider-thumb:hover,
                        input[type="range"]#mobile_toCaratSlider::-webkit-slider-thumb:hover {
                            background: #f7f7f7;
                        }

                        input[type="range"]#mobile_fromCaratSlider::-webkit-slider-thumb:active,
                        input[type="range"]#mobile_toCaratSlider::-webkit-slider-thumb:active {
                            box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                            -webkit-box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                        }

                        input[type="number"]#mobile_fromCaratInput,
                        input[type="number"]#mobile_toCaratInput {
                            color: #8a8383;
                            width: 100%;
                            /* height: 30px; */
                            font-size: 13px;
                            border: 1px solid #c6c6c6;
                            border-radius: 4px;
                            padding: 4px;
                        }

                        input[type="number"]#mobile_fromCaratInput::-webkit-inner-spin-button,
                        input[type="number"]#mobile_fromCaratInput::-webkit-outer-spin-button {
                            opacity: 1;
                        }

                        input[type="number"]#mobile_toCaratInput::-webkit-inner-spin-button,
                        input[type="number"]#mobile_toCaratInput::-webkit-outer-spin-button {
                            opacity: 1;
                        }

                        input[type="range"]#mobile_fromCaratSlider,
                        input[type="range"]#mobile_toCaratSlider {
                            -webkit-appearance: none;
                            appearance: none;
                            height: 4px;
                            width: 100%;
                            position: absolute;
                            background-color: #c6c6c6;
                            pointer-events: all;
                            border-radius: 8px;
                        }

                        /* #fromCaratSlider {
                                                height: 0;
                                                z-index: 3;
                                            } */
                        #mobile_toCaratSlider {
                            height: 0;
                            z-index: 4;
                        }
                    </style>
                    <script>
                        // Controls the slider using from Input
                        function controlMobileFromInput(mobile_fromCaratSlider, mobile_fromCaratInput, mobile_toCaratInput, mobile_controlSlider) {
                            const [from, to] = getParsed(mobile_fromCaratInput, mobile_toCaratInput);
                            mobile_fromCaratSlider.value = from;
                            fillSlider(mobile_fromCaratSlider, mobile_toCaratSlider, "#C6C6C6", "#733D80", mobile_controlSlider); // <-- Dynamic Color Update
                            if (from > to) {
                                mobile_fromCaratSlider.value = to;
                                mobile_fromCaratInput.value = to;
                            } else {
                                mobile_fromCaratSlider.value = from;
                            }
                        }

                        // Controls the slider using to Input
                        function controlMobileToInput(mobile_toCaratSlider, mobile_fromCaratInput, mobile_toCaratInput, mobile_controlSlider) {
                            const [from, to] = getParsed(mobile_fromCaratInput, mobile_toCaratInput);
                            mobile_toCaratSlider.value = to;
                            fillSlider(mobile_fromCaratSlider, mobile_toCaratSlider, "#C6C6C6", "#733D80", mobile_controlSlider); // <-- Dynamic Color Update
                            setToggleAccessible(mobile_toCaratInput);
                            if (from <= to) {
                                mobile_toCaratSlider.value = to;
                                mobile_toCaratInput.value = to;
                            } else {
                                mobile_toCaratInput.value = from;
                            }
                        }

                        // Sliding event of the From slider
                        function controlMobileFromSlider(mobile_fromCaratSlider, mobile_toCaratSlider, mobile_fromCaratInput) {
                            const [from, to] = getParsed(mobile_fromCaratSlider, mobile_toCaratSlider);
                            fillSlider(mobile_fromCaratSlider, mobile_toCaratSlider, "#C6C6C6", "#733D80", mobile_toCaratSlider); // <-- Dynamic Color Update
                            mobile_fromCaratInput.value = from;
                            if (from > to) {
                                mobile_fromCaratInput.value = to;
                                mobile_toCaratInput.value = from;
                            }
                        }

                        // Sliding event of the To slider
                        function controlMobileToSlider(mobile_fromCaratSlider, mobile_toCaratSlider, mobile_toCaratInput) {
                            const [from, to] = getParsed(mobile_fromCaratSlider, mobile_toCaratSlider);
                            fillSlider(mobile_fromCaratSlider, mobile_toCaratSlider, "#C6C6C6", "#733D80", mobile_toCaratSlider); // <-- Dynamic Color Update
                            setToggleAccessible(mobile_toCaratInput);
                            mobile_toCaratSlider.value = to;
                            mobile_toCaratInput.value = to;
                            if (from > to) {
                                mobile_fromCaratInput.value = to;
                                mobile_toCaratInput.value = from;
                            }
                        }

                        // Parsing values of the Inputs with 2 decimal places
                        function getParsed(currentFrom, currentTo) {
                            const from = parseFloat(currentFrom.value).toFixed(2); // <-- Precision to 2 decimal places
                            const to = parseFloat(currentTo.value).toFixed(2); // <-- Precision to 2 decimal places
                            return [parseFloat(from), parseFloat(to)];
                        }

                        // Changing and Filling the color in the selected part
                        function fillSlider(mobile_fromCaratSlider, mobile_toCaratSlider, sliderColor, rangeColor, mobile_controlSlider) {
                            let rangeDistance = mobile_toCaratSlider.max - mobile_toCaratSlider.min;
                            let fromPosition = mobile_fromCaratSlider.value - mobile_toCaratSlider.min;
                            let toPosition = mobile_toCaratSlider.value - mobile_toCaratSlider.min;
                            if (fromPosition > toPosition) {
                                let spare = fromPosition;
                                fromPosition = toPosition;
                                toPosition = spare;
                            }
                            mobile_controlSlider.style.background = `linear-gradient(
                                    to right,
                                    ${sliderColor} 0%,
                                    ${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
                                    ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
                                    ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
                                    ${sliderColor} ${(toPosition / rangeDistance) * 100}%, 
                                    ${sliderColor} 100%)`; // <-- Updates color fill dynamically
                        }

                        // Ensures accessibility for toggles
                        function setToggleAccessible(currentTarget) {
                            const mobile_toCaratSlider = document.querySelector("#mobile_toCaratSlider");
                            if (Number(currentTarget.value) <= 0) {
                                mobile_toCaratSlider.style.zIndex = 4;
                            } else {
                                mobile_toCaratSlider.style.zIndex = 4;
                            }
                        }

                        // Element References
                        const mobile_fromCaratSlider = document.querySelector("#mobile_fromCaratSlider");
                        const mobile_toCaratSlider = document.querySelector("#mobile_toCaratSlider");
                        const mobile_fromCaratInput = document.querySelector("#mobile_fromCaratInput");
                        const mobile_toCaratInput = document.querySelector("#mobile_toCaratInput");

                        // Set step to 0.01 for finer control
                        mobile_fromCaratSlider.step = "0.01";
                        mobile_toCaratSlider.step = "0.01";
                        mobile_fromCaratInput.step = "0.01";
                        mobile_toCaratInput.step = "0.01";

                        // Initial slider fill and setup
                        fillSlider(mobile_fromCaratSlider, mobile_toCaratSlider, "#C6C6C6", "#733D80", mobile_toCaratSlider); // <-- Initial color setup
                        setToggleAccessible(mobile_toCaratSlider);

                        // Event Listeners for Sliders and Inputs
                        mobile_fromCaratSlider.oninput = () => controlMobileFromSlider(mobile_fromCaratSlider, mobile_toCaratSlider, mobile_fromCaratInput);
                        mobile_toCaratSlider.oninput = () => controlMobileToSlider(mobile_fromCaratSlider, mobile_toCaratSlider, mobile_toCaratInput);
                        mobile_fromCaratInput.oninput = () => {
                            controlMobileFromInput(mobile_fromCaratSlider, mobile_fromCaratInput, mobile_toCaratInput, mobile_toCaratSlider);
                            fillSlider(mobile_fromCaratSlider, mobile_toCaratSlider, "#C6C6C6", "#733D80", mobile_toCaratSlider); // <-- Instant color update
                        };
                        mobile_toCaratInput.oninput = () => {
                            controlMobileToInput(mobile_toCaratSlider, mobile_fromCaratInput, mobile_toCaratInput, mobile_fromCaratSlider);
                            fillSlider(mobile_fromCaratSlider, mobile_toCaratSlider, "#C6C6C6", "#733D80", mobile_toCaratSlider); // <-- Instant color update
                        };
                    </script>
                    <!-- End Carat Slider -->
                </div>
            </div>

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
                    <svg id="cutUpArrow" class="hidden" height="8" width="8" version="1.1" id="Layer_1"
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
                <div id="cutDropdown" class="hidden mt-4">
                    <div class="flex items-center">
                        <div class="mobile_range_cut_container">
                            <div class="mobile_sliders_cut_control">
                                <input id="mobile_fromCutSlider" type="range" value="0" min="0"
                                    max="4" step="1" />
                                <input id="mobile_toCutSlider" type="range" value="4" min="0" max="4"
                                    step="1" />
                            </div>
                            <div class="flex justify-center gap-10 font-montserrat text-xs text-gray-500 font-medium">
                                <span>Good</span>
                                <span>Very Good</span>
                                <span>Excellent</span>
                                <span>Ideal</span>
                            </div>
                        </div>
                    </div>
                    <style>
                        .mobile_range_cut_container {
                            display: flex;
                            flex-direction: column;
                            width: 80%;
                            margin: 5% auto;
                        }

                        .mobile_sliders_cut_control {
                            position: relative;
                            min-height: 35px;
                            display: flex;
                            align-items: center;
                        }

                        .mobile_form_cut_control {
                            display: flex;
                            justify-content: space-between;
                            font-size: 24px;
                            color: #635a5a;
                        }

                        input[type="range"]#mobile_fromCutSlider::-webkit-slider-thumb,
                        input[type="range"]#mobile_toCutSlider::-webkit-slider-thumb {
                            -webkit-appearance: none;
                            pointer-events: all;
                            width: 16px;
                            height: 16px;
                            background-color: #fff;
                            border-radius: 100%;
                            box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                            cursor: pointer;
                            position: relative;
                            z-index: 5;
                        }

                        input[type="range"]#mobile_fromCutSlider::-moz-range-thumb,
                        input[type="range"]#mobile_toCutSlider::-moz-range-thumb {
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
                    </style>
                    <script>
                        const mobile_fromCutSlider = document.querySelector("#mobile_fromCutSlider");
                        const mobile_toCutSlider = document.querySelector("#mobile_toCutSlider");
                        const mobile_fromCutInput = document.querySelector("#mobile_fromCutInput");
                        const mobile_toCutInput = document.querySelector("#mobile_toCutInput");



                        // Initially filling the slider using default values...
                        fillSlider(mobile_fromCutSlider, mobile_toCutSlider, "#C6C6C6", "#733D80", mobile_toCutSlider);
                        setToggleAccessible(mobile_toCutSlider);

                        // Assigning listener methods to respective events.
                        mobile_fromCutSlider.oninput = () => controlMobileFromSlider(mobile_fromCutSlider, mobile_toCutSlider, mobile_fromCutInput);
                        mobile_toCutSlider.oninput = () => controlMobileToSlider(mobile_fromCutSlider, mobile_toCutSlider, mobile_toCutInput);
                        mobile_fromCutInput.oninput = () =>
                            controlMobileFromInput(mobile_fromCutSlider, mobile_fromCutInput, mobile_toCutInput, mobile_toCutSlider);
                        mobile_toCutInput.oninput = () => controlMobileToInput(mobile_toCutSlider, mobile_fromCutInput, mobile_toCutInput, mobile_fromCutSlider);
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
                    <svg id="colorUpArrow" class="hidden" height="8" width="8" version="1.1" id="Layer_1"
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
                <div id="colorDropdown" class="hidden mt-4">
                    <div class="flex items-center">
                        <div class="mobile_range_color_container">
                            <div class="mobile_sliders_color_control">
                                <input id="mobile_fromColorSlider" type="range" value="0" min="0"
                                    max="10" step="1" />
                                <input id="mobile_toColorSlider" type="range" value="10" min="0"
                                    max="10" step="1" />
                            </div>
                            <div class="flex justify-center gap-7 font-montserrat text-xs text-gray-500 font-medium">
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
                        .mobile_range_color_container {
                            display: flex;
                            flex-direction: column;
                            width: 80%;
                            margin: 5% auto;
                        }

                        .mobile_sliders_color_control {
                            position: relative;
                            min-height: 35px;
                            display: flex;
                            align-items: center;
                        }

                        .mobile_form_color_control {
                            display: flex;
                            justify-content: space-between;
                            font-size: 24px;
                            color: #635a5a;
                        }

                        input[type="range"]#mobile_fromColorSlider::-webkit-slider-thumb,
                        input[type="range"]#mobile_toColorSlider::-webkit-slider-thumb {
                            -webkit-appearance: none;
                            pointer-events: all;
                            width: 16px;
                            height: 16px;
                            background-color: #fff;
                            border-radius: 100%;
                            box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                            cursor: pointer;
                            position: relative;
                            z-index: 5;
                        }

                        input[type="range"]#mobile_fromColorSlider::-moz-range-thumb,
                        input[type="range"]#mobile_toColorSlider::-moz-range-thumb {
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
                    </style>
                    <script>
                        const mobile_fromColorSlider = document.querySelector("#mobile_fromColorSlider");
                        const mobile_toColorSlider = document.querySelector("#mobile_toColorSlider");
                        const mobile_fromColorInput = document.querySelector("#mobile_fromColorInput");
                        const mobile_toColorInput = document.querySelector("#mobile_toColorInput");

                        // Initially filling the slider using default values...
                        fillSlider(mobile_fromColorSlider, mobile_toColorSlider, "#C6C6C6", "#733D80", mobile_toColorSlider);
                        setToggleAccessible(mobile_toColorSlider);

                        // Assigning listener methods to respective events.
                        mobile_fromColorSlider.oninput = () => controlMobileFromSlider(mobile_fromColorSlider, mobile_toColorSlider, mobile_fromColorInput);
                        mobile_toColorSlider.oninput = () => controlMobileToSlider(mobile_fromColorSlider, mobile_toColorSlider, mobile_toColorInput);
                        mobile_fromColorInput.oninput = () =>
                            controlMobileFromInput(mobile_fromColorSlider, mobile_fromColorInput, mobile_toColorInput, mobile_toColorSlider);
                        mobile_toColorInput.oninput = () => controlMobileToInput(mobile_toColorSlider, mobile_fromColorInput, mobile_toColorInput, mobile_fromColorSlider);
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
                    <svg id="claritytyUpArrow" class="hidden" height="8" width="8" version="1.1" id="Layer_1"
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
                <div id="claritytyDropdown" class="hidden mt-4">
                    <div class="flex items-center">
                        <div class="mobile_range_clarity_container">
                            <div class="mobile_sliders_clarity_control">
                                <input id="mobile_fromClaritySlider" type="range" value="0" min="0"
                                    max="11" step="1" />
                                <input id="mobile_toClaritySlider" type="range" value="11" min="0"
                                    max="11" step="1" />
                            </div>
                            <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
                                <span>I2</span>
                                <span>I1</span>
                                <span>SI3</span>
                                <span>S12</span>
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
                        .mobile_range_carat_container,
                        .mobile_range_clarity_container {
                            display: flex;
                            flex-direction: column;
                            width: 80%;
                            margin: 5% auto;
                        }

                        .mobile_sliders_clarity_control {
                            position: relative;
                            min-height: 35px;
                            display: flex;
                            align-items: center;
                        }

                        .mobile_form_clarity_control {
                            display: flex;
                            justify-content: space-between;
                            font-size: 24px;
                            color: #635a5a;
                        }

                        input[type="range"]#mobile_fromClaritySlider::-webkit-slider-thumb,
                        input[type="range"]#mobile_toClaritySlider::-webkit-slider-thumb {
                            -webkit-appearance: none;
                            pointer-events: all;
                            width: 16px;
                            height: 16px;
                            background-color: #fff;
                            border-radius: 100%;
                            box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                            cursor: pointer;
                            position: relative;
                            z-index: 5;
                        }

                        input[type="range"]#mobile_fromClaritySlider::-moz-range-thumb,
                        input[type="range"]#mobile_toClaritySlider::-moz-range-thumb {
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
                    </style>
                    <script>
                        const mobile_fromClaritySlider = document.querySelector("#mobile_fromClaritySlider");
                        const mobile_toClaritySlider = document.querySelector("#mobile_toClaritySlider");
                        const mobile_fromClarityInput = document.querySelector("#mobile_fromClarityInput");
                        const mobile_toClarityInput = document.querySelector("#mobile_toClarityInput");

                        // Initially filling the slider using default values...
                        fillSlider(mobile_fromClaritySlider, mobile_toClaritySlider, "#C6C6C6", "#733D80", mobile_toClaritySlider);
                        setToggleAccessible(mobile_toClaritySlider);

                        // Assigning listener methods to respective events.
                        mobile_fromClaritySlider.oninput = () => controlMobileFromSlider(mobile_fromClaritySlider, mobile_toClaritySlider, mobile_fromClarityInput);
                        mobile_toClaritySlider.oninput = () => controlMobileToSlider(mobile_fromClaritySlider, mobile_toClaritySlider, mobile_toClarityInput);
                        mobile_fromClarityInput.oninput = () =>
                            controlMobileFromInput(mobile_fromClaritySlider, mobile_fromClarityInput, mobile_toClarityInput, mobile_toClaritySlider);
                        mobile_toClarityInput.oninput = () => controlMobileToInput(mobile_toClaritySlider, mobile_fromClarityInput, mobile_toClarityInput, mobile_fromClaritySlider);
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
                    <svg id="advancedOptionsUpArrow" class="hidden" height="8" width="8" version="1.1" id="Layer_1"
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
                <div id="advancedOptionsDropdown" class="hidden mt-4">
                    <div class="flex flex-col items-center gap-4 mx-auto py-4">
                        <!-- Certificate Dropdown -->
                        <div id="styleDropdownIcon"
                            class="relative flex justify-between items-center border border-gray-300 rounded-full py-2 px-4 w-64 cursor-pointer">
                            <label
                                class="block text-sm text-gray-500 font-montserrat mr-3 cursor-pointer">Certificate</label>
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
                            <!-- Up Arrow -->
                            <svg id="upArrow" class="hidden" height="8" width="8" version="1.1"
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

                            <div id="styleDropdown"
                                class="hidden absolute top-full left-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
                                <div class="flex justify-between">
                                    <p class="text-sm font-montserrat font-semibold px-4 py-2">Certificate</p>

                                    <button class="p-2 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-black">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg>
                                    </button>
                                </div>
                                <div class="py-2">
                                    <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                        <input type="checkbox" class="mr-2 accent-black">
                                        <span class="text-sm font-montserrat">IGI</span>
                                    </label>
                                    <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                        <input type="checkbox" class="mr-2 accent-black">
                                        <span class="text-sm font-montserrat">GIA</span>
                                    </label>
                                    <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                        <input type="checkbox" class="mr-2 accent-black">
                                        <span class="text-sm font-montserrat">GCAL</span>
                                    </label>
                                    <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                        <input type="checkbox" class="mr-2 accent-black">
                                        <span class="text-sm font-montserrat">NON CERTIFIED</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- End Certificate Dropdown -->

                        <!-- Method Dropdown -->
                        <div id="methodDropdownIcon"
                            class="relative flex justify-between items-center border border-gray-300 rounded-full py-2 px-4 w-64 cursor-pointer">
                            <label
                                class="block text-sm text-gray-500 font-montserrat mr-3 cursor-pointer">Method</label>
                            <!-- Down Arrow -->
                            <svg id="methodDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                            <svg id="methodUpArrow" class="hidden" height="8" width="8" version="1.1"
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

                            <div id="methodDropdown"
                                class="hidden absolute top-full left-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
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
                                        <input type="checkbox" class="mr-2 accent-black">
                                        <span class="text-sm font-montserrat">HPHT</span>
                                    </label>
                                    <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                        <input type="checkbox" class="mr-2 accent-black">
                                        <span class="text-sm font-montserrat">CVD</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- End Method Dropdown -->

                        <!-- Table Dropdown -->
                        <div id="tableDropdownIcon"
                            class="relative flex justify-between items-center border border-gray-300 rounded-full py-2 px-4 w-64 cursor-pointer">
                            <label class="block text-sm text-gray-500 font-montserrat mr-3 cursor-pointer">Table
                                (%)</label>
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
                            <svg id="tableUpArrow" class="hidden" height="8" width="8" version="1.1"
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

                            <div id="tableDropdown"
                                class="hidden absolute top-full left-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
                                <div class="flex justify-between">
                                    <p class="text-sm font-montserrat font-semibold px-4 py-2">Table</p>

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
                                <div class="flex items-center">
                                    <div class="range_table_container">
                                        <div class="form_table_control">
                                            <div class="form_table_control_container">
                                                <input class="form_table_control_container__table__input"
                                                    type="number" id="fromTableInput" value="50" min="50"
                                                    max="80" onclick="event.stopPropagation();" />
                                            </div>
                                            <div class="form_table_control_container">
                                                <input class="form_table_control_container__table__input"
                                                    type="number" id="toTableInput" value="80" min="50"
                                                    max="80" onclick="event.stopPropagation();" />
                                            </div>
                                        </div>
                                        <div class="sliders_table_control">
                                            <input id="fromTableSlider" type="range" value="50" min="50"
                                                max="80" onclick="event.stopPropagation();" />
                                            <input id="toTableSlider" type="range" value="80" min="50"
                                                max="80" onclick="event.stopPropagation();" />
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .range_table_container {
                                        display: flex;
                                        flex-direction: column;
                                        width: 80%;
                                        margin: 5% auto;
                                    }

                                    .sliders_table_control {
                                        position: relative;
                                        min-height: 35px;
                                        display: flex;
                                        align-items: center;
                                    }

                                    .form_table_control {
                                        display: flex;
                                        justify-content: space-between;
                                        font-size: 24px;
                                        color: #635a5a;
                                    }

                                    input[type="range"]#fromTableSlider::-webkit-slider-thumb,
                                    input[type="range"]#toTableSlider::-webkit-slider-thumb {
                                        -webkit-appearance: none;
                                        pointer-events: all;
                                        width: 16px;
                                        height: 16px;
                                        background-color: #fff;
                                        border-radius: 100%;
                                        box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                                        cursor: pointer;
                                        position: relative;
                                        z-index: 5;
                                    }

                                    input[type="range"]#fromTableSlider::-moz-range-thumb,
                                    input[type="range"]#toTableSlider::-moz-range-thumb {
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

                                    input[type="range"]#fromTableSlider::-webkit-slider-thumb:hover,
                                    input[type="range"]#toTableSlider::-webkit-slider-thumb:hover {
                                        background: #f7f7f7;
                                    }

                                    input[type="range"]#fromTableSlider::-webkit-slider-thumb:active,
                                    input[type="range"]#toTableSlider::-webkit-slider-thumb:active {
                                        box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                                        -webkit-box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                                    }

                                    input[type="number"]#rangeInput,
                                    input[type="number"]#rangeInput {
                                        color: #8a8383;
                                        width: 100%;
                                        /* height: 30px; */
                                        font-size: 13px;
                                        border: 1px solid #c6c6c6;
                                        border-radius: 4px;
                                        padding: 4px;
                                    }

                                    input[type="number"]#fromTableInput::-webkit-inner-spin-button,
                                    input[type="number"]#fromTableInput::-webkit-outer-spin-button {
                                        opacity: 1;
                                    }

                                    input[type="number"]#toTableInput::-webkit-inner-spin-button,
                                    input[type="number"]#toTableInput::-webkit-outer-spin-button {
                                        opacity: 1;
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

                                    /* #fromCaratSlider {
                                                    height: 0;
                                                    z-index: 3;
                                                } */
                                    #toTableSlider {
                                        height: 0;
                                        z-index: 4;
                                    }
                                </style>
                                <script>
                                    // Controls the slider using from Input....
                                    function controlFromInput(fromTableSlider, fromTableInput, toTableInput, controlSlider) {
                                        const [from, to] = getParsed(fromTableInput, toTableInput);
                                        fillSlider(fromTableSlider, toTableSlider, "#C6C6C6", "#733D80", controlSlider);
                                        fromTableSlider.value = from;

                                        if (from > to) {
                                            fromTableSlider.value = to;
                                            fromTableInput.value = to;
                                        } else {
                                            fromTableSlider.value = from;
                                        }
                                    }

                                    // Controls the slider using to Input....
                                    function controlToInput(toTableSlider, fromTableInput, toTableInput, controlSlider) {
                                        const [from, to] = getParsed(fromTableInput, toTableInput);
                                        fillSlider(fromTableSlider, toTableSlider, "#C6C6C6", "#733D80", controlSlider);
                                        setToggleAccessible(toTableInput);
                                        toTableSlider.value = to;
                                        toTableInput.value = to;

                                        if (from <= to) {
                                            toTableSlider.value = to;
                                            toTableInput.value = to;
                                        } else {
                                            toTableInput.value = from;
                                        }
                                    }

                                    // Sliding event of the From slider
                                    function controlFromSlider(fromTableSlider, toTableSlider, fromTableInput) {
                                        const [from, to] = getParsed(fromTableSlider, toTableSlider);
                                        console.log([from, to]);
                                        fillSlider(fromTableSlider, toTableSlider, "#C6C6C6", "#733D80", toTableSlider);
                                        fromTableInput.value = from;
                                        if (from > to) {
                                            fromTableInput.value = to;
                                            toTableInput.value = from;
                                        }
                                    }

                                    // Sliding event of the To slider
                                    function controlToSlider(fromTableSlider, toTableSlider, toTableInput) {
                                        const [from, to] = getParsed(fromTableSlider, toTableSlider);
                                        fillSlider(fromTableSlider, toTableSlider, "#C6C6C6", "#733D80", toTableSlider);
                                        setToggleAccessible(toTableInput);
                                        toTableSlider.value = to;
                                        toTableInput.value = to;
                                        if (from > to) {
                                            fromTableInput.value = to;
                                            toTableInput.value = from;
                                        }
                                    }

                                    // Parsign values of the Inputs
                                    function getParsed(currentFrom, currentTo) {
                                        const from = parseInt(currentFrom.value, 10);
                                        const to = parseInt(currentTo.value, 10);
                                        return [from, to];
                                    }

                                    // Changing and Filling the color in the selected part...
                                    function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
                                        let rangeDistance = to.max - to.min;
                                        let fromPosition = from.value - to.min;
                                        let toPosition = to.value - to.min;
                                        if (fromPosition > toPosition) {
                                            let spare = fromPosition;
                                            fromPosition = toPosition;
                                            toPosition = spare;
                                        }
                                        controlSlider.style.background = `linear-gradient(
                              to right,
                              ${sliderColor} 0%,
                              ${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
                              ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
                              ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
                              ${sliderColor} ${(toPosition / rangeDistance) * 100}%, 
                              ${sliderColor} 100%)`;
                                    }

                                    // Making sure the toggle which we are using is accesible to change the range
                                    function setToggleAccessible(currentTarget) {
                                        const toTableSlider = document.querySelector("#toTableSlider");
                                        if (Number(currentTarget.value) <= 0) {
                                            toTableSlider.style.zIndex = 4;
                                        } else {
                                            toTableSlider.style.zIndex = 4;
                                        }
                                    }

                                    const fromTableSlider = document.querySelector("#fromTableSlider");
                                    const toTableSlider = document.querySelector("#toTableSlider");
                                    const fromTableInput = document.querySelector("#fromTableInput");
                                    const toTableInput = document.querySelector("#toTableInput");

                                    // Initially filling the slider using default values...
                                    fillSlider(fromTableSlider, toTableSlider, "#C6C6C6", "#733D80", toTableSlider);
                                    setToggleAccessible(toTableSlider);

                                    // Assigning listner methonds to respective events.
                                    fromTableSlider.oninput = () => controlFromSlider(fromTableSlider, toTableSlider, fromTableInput);
                                    toTableSlider.oninput = () => controlToSlider(fromTableSlider, toTableSlider, toTableInput);
                                    fromTableInput.oninput = () =>
                                        controlFromInput(fromTableSlider, fromTableInput, toTableInput, toTableSlider);
                                    toTableInput.oninput = () => controlToInput(toTableSlider, fromTableInput, toTableInput, toTableSlider);
                                </script>
                            </div>
                        </div>
                        <!-- End Table Dropdown -->

                        <!-- Depth Dropdown -->
                        <div id="depthDropdownIcon"
                            class="relative flex justify-between items-center border border-gray-300 rounded-full py-2 px-4 w-64 cursor-pointer">
                            <label class="block text-sm text-gray-500 font-montserrat mr-3 cursor-pointer">Depth
                                (%)</label>
                            <!-- Down Arrow -->
                            <svg id="depthDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                            <svg id="depthUpArrow" class="hidden" height="8" width="8" version="1.1"
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

                            <div id="depthDropdown"
                                class="hidden absolute top-full left-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
                                <div class="flex justify-between">
                                    <p class="text-sm font-montserrat font-semibold px-4 py-2">Depth</p>

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

                                <div class="flex items-center">
                                    <div class="range_depth_container">
                                        <div class="form_depth_control">
                                            <div class="form_depth_control_container">
                                                <input class="form_depth_control_container__depth__input"
                                                    type="number" id="fromDepthInput" value="46" min="46"
                                                    max="78" onclick="event.stopPropagation();" />
                                            </div>
                                            <div class="form_depth_control_container">
                                                <input class="form_depth_control_container__depth__input"
                                                    type="number" id="toDepthInput" value="78" min="46"
                                                    max="78" onclick="event.stopPropagation();" />
                                            </div>
                                        </div>
                                        <div class="sliders_depth_control">
                                            <input id="fromDepthSlider" type="range" value="46" min="46"
                                                max="78" onclick="event.stopPropagation();" />
                                            <input id="toDepthSlider" type="range" value="78" min="46"
                                                max="78" onclick="event.stopPropagation();" />
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .range_depth_container {
                                        display: flex;
                                        flex-direction: column;
                                        width: 80%;
                                        margin: 5% auto;
                                    }

                                    .sliders_depth_control {
                                        position: relative;
                                        min-height: 35px;
                                        display: flex;
                                        align-items: center;
                                    }

                                    .form_depth_control {
                                        display: flex;
                                        justify-content: space-between;
                                        font-size: 24px;
                                        color: #635a5a;
                                    }

                                    input[type="range"]#fromDepthSlider::-webkit-slider-thumb,
                                    input[type="range"]#toDepthSlider::-webkit-slider-thumb {
                                        -webkit-appearance: none;
                                        pointer-events: all;
                                        width: 16px;
                                        height: 16px;
                                        background-color: #fff;
                                        border-radius: 100%;
                                        box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                                        cursor: pointer;
                                        position: relative;
                                        z-index: 5;
                                    }

                                    input[type="range"]#fromDepthSlider::-moz-range-thumb,
                                    input[type="range"]#toDepthSlider::-moz-range-thumb {
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

                                    input[type="range"]#fromDepthSlider::-webkit-slider-thumb:hover,
                                    input[type="range"]#toDepthSlider::-webkit-slider-thumb:hover {
                                        background: #f7f7f7;
                                    }

                                    input[type="range"]#fromDepthSlider::-webkit-slider-thumb:active,
                                    input[type="range"]#toDepthSlider::-webkit-slider-thumb:active {
                                        box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                                        -webkit-box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                                    }

                                    input[type="number"]#rangeInput,
                                    input[type="number"]#rangeInput {
                                        color: #8a8383;
                                        width: 100%;
                                        /* height: 30px; */
                                        font-size: 13px;
                                        border: 1px solid #c6c6c6;
                                        border-radius: 4px;
                                        padding: 4px;
                                    }

                                    input[type="number"]#fromDepthInput::-webkit-inner-spin-button,
                                    input[type="number"]#fromDepthInput::-webkit-outer-spin-button {
                                        opacity: 1;
                                    }

                                    input[type="number"]#toDepthInput::-webkit-inner-spin-button,
                                    input[type="number"]#toDepthInput::-webkit-outer-spin-button {
                                        opacity: 1;
                                    }

                                    input[type="range"]#fromDepthSlider,
                                    input[type="range"]#toDepthSlider {
                                        -webkit-appearance: none;
                                        appearance: none;
                                        height: 4px;
                                        width: 100%;
                                        position: absolute;
                                        background-color: #c6c6c6;
                                        pointer-events: all;
                                        border-radius: 8px;
                                    }

                                    #toDepthSlider {
                                        height: 0;
                                        z-index: 4;
                                    }
                                </style>
                                <script>
                                    // Controls the slider using from Input....
                                    function controlFromInput(fromDepthSlider, fromDepthInput, toDepthInput, controlSlider) {
                                        const [from, to] = getParsed(fromDepthInput, toDepthInput);
                                        fillSlider(fromDepthSlider, toDepthSlider, "#C6C6C6", "#733D80", controlSlider);
                                        fromDepthSlider.value = from;

                                        if (from > to) {
                                            fromDepthSlider.value = to;
                                            fromDepthInput.value = to;
                                        } else {
                                            fromDepthSlider.value = from;
                                        }
                                    }

                                    // Controls the slider using to Input....
                                    function controlToInput(toDepthSlider, fromDepthInput, toDepthInput, controlSlider) {
                                        const [from, to] = getParsed(fromDepthInput, toDepthInput);
                                        fillSlider(fromDepthSlider, toDepthSlider, "#C6C6C6", "#733D80", controlSlider);
                                        setToggleAccessible(toDepthInput);
                                        toDepthSlider.value = to;
                                        toDepthInput.value = to;

                                        if (from <= to) {
                                            toDepthSlider.value = to;
                                            toDepthInput.value = to;
                                        } else {
                                            toDepthInput.value = from;
                                        }
                                    }

                                    // Sliding event of the From slider
                                    function controlFromSlider(fromDepthSlider, toDepthSlider, fromDepthInput) {
                                        const [from, to] = getParsed(fromDepthSlider, toDepthSlider);
                                        console.log([from, to]);
                                        fillSlider(fromDepthSlider, toDepthSlider, "#C6C6C6", "#733D80", toDepthSlider);
                                        fromDepthInput.value = from;
                                        if (from > to) {
                                            fromDepthInput.value = to;
                                            toDepthInput.value = from;
                                        }
                                    }

                                    // Sliding event of the To slider
                                    function controlToSlider(fromDepthSlider, toDepthSlider, toDepthInput) {
                                        const [from, to] = getParsed(fromDepthSlider, toDepthSlider);
                                        fillSlider(fromDepthSlider, toDepthSlider, "#C6C6C6", "#733D80", toDepthSlider);
                                        setToggleAccessible(toDepthInput);
                                        toDepthSlider.value = to;
                                        toDepthInput.value = to;
                                        if (from > to) {
                                            fromDepthInput.value = to;
                                            toDepthInput.value = from;
                                        }
                                    }

                                    // Parsign values of the Inputs
                                    function getParsed(currentFrom, currentTo) {
                                        const from = parseInt(currentFrom.value, 10);
                                        const to = parseInt(currentTo.value, 10);
                                        return [from, to];
                                    }

                                    // Changing and Filling the color in the selected part...
                                    function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
                                        let rangeDistance = to.max - to.min;
                                        let fromPosition = from.value - to.min;
                                        let toPosition = to.value - to.min;
                                        if (fromPosition > toPosition) {
                                            let spare = fromPosition;
                                            fromPosition = toPosition;
                                            toPosition = spare;
                                        }
                                        controlSlider.style.background = `linear-gradient(
                              to right,
                              ${sliderColor} 0%,
                              ${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
                              ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
                              ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
                              ${sliderColor} ${(toPosition / rangeDistance) * 100}%, 
                              ${sliderColor} 100%)`;
                                    }

                                    // Making sure the toggle which we are using is accesible to change the range
                                    function setToggleAccessible(currentTarget) {
                                        const toDepthSlider = document.querySelector("#toDepthSlider");
                                        if (Number(currentTarget.value) <= 0) {
                                            toDepthSlider.style.zIndex = 4;
                                        } else {
                                            toDepthSlider.style.zIndex = 4;
                                        }
                                    }

                                    const fromDepthSlider = document.querySelector("#fromDepthSlider");
                                    const toDepthSlider = document.querySelector("#toDepthSlider");
                                    const fromDepthInput = document.querySelector("#fromDepthInput");
                                    const toDepthInput = document.querySelector("#toDepthInput");

                                    // Initially filling the slider using default values...
                                    fillSlider(fromDepthSlider, toDepthSlider, "#C6C6C6", "#733D80", toDepthSlider);
                                    setToggleAccessible(toDepthSlider);

                                    // Assigning listner methonds to respective events.
                                    fromDepthSlider.oninput = () => controlFromSlider(fromDepthSlider, toDepthSlider, fromDepthInput);
                                    toDepthSlider.oninput = () => controlToSlider(fromDepthSlider, toDepthSlider, toDepthInput);
                                    fromDepthInput.oninput = () =>
                                        controlFromInput(fromDepthSlider, fromDepthInput, toDepthInput, toDepthSlider);
                                    toDepthInput.oninput = () => controlToInput(toDepthSlider, fromDepthInput, toDepthInput, toDepthSlider);
                                </script>
                            </div>
                        </div>
                        <!-- End Depth Dropdown -->

                        <!-- L/W Ratio Dropdown -->
                        <div id="lwDropdownIcon"
                            class="relative flex justify-between items-center border border-gray-300 rounded-full py-2 px-4 w-64 cursor-pointer">
                            <label class="block text-sm text-gray-500 font-montserrat mr-3 cursor-pointer">L/W
                                Ratio</label>
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
                            <svg id="lwUpArrow" class="hidden" height="8" width="8" version="1.1"
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

                            <div id="lwDropdown"
                                class="hidden absolute top-full left-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
                                <div class="flex justify-between">
                                    <p class="text-sm font-montserrat font-semibold px-4 py-2">L/W Ratio</p>

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

                                <div class="flex items-center">
                                    <div class="range_lw_container">
                                        <div class="form_lw_control">
                                            <div class="form_lw_control_container">
                                                <input class="form_lw_control_container__lw__input" type="number"
                                                    id="fromLwInput" value="1.00" min="1.00" max="3.00"
                                                    onclick="event.stopPropagation();" />
                                            </div>
                                            <div class="form_lw_control_container">
                                                <input class="form_lw_control_container__lw__input" type="number"
                                                    id="toLwInput" value="3.00" min="1.00" max="3.00"
                                                    onclick="event.stopPropagation();" />
                                            </div>
                                        </div>
                                        <div class="sliders_lw_control">
                                            <input id="fromLwSlider" type="range" value="1.00" min="1.00"
                                                max="3.00" onclick="event.stopPropagation();" />
                                            <input id="toLwSlider" type="range" value="3.00" min="1.00"
                                                max="3.00" onclick="event.stopPropagation();" />
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .range_lw_container {
                                        display: flex;
                                        flex-direction: column;
                                        width: 80%;
                                        margin: 5% auto;
                                    }

                                    .sliders_lw_control {
                                        position: relative;
                                        min-height: 35px;
                                        display: flex;
                                        align-items: center;
                                    }

                                    .form_lw_control {
                                        display: flex;
                                        justify-content: space-between;
                                        font-size: 24px;
                                        color: #635a5a;
                                    }

                                    input[type="range"]#fromLwSlider::-webkit-slider-thumb,
                                    input[type="range"]#toLwSlider::-webkit-slider-thumb {
                                        -webkit-appearance: none;
                                        pointer-events: all;
                                        width: 16px;
                                        height: 16px;
                                        background-color: #fff;
                                        border-radius: 100%;
                                        box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                                        cursor: pointer;
                                        position: relative;
                                        z-index: 5;
                                    }

                                    input[type="range"]#fromLwSlider::-moz-range-thumb,
                                    input[type="range"]#toLwSlider::-moz-range-thumb {
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

                                    input[type="range"]#fromLwSlider::-webkit-slider-thumb:hover,
                                    input[type="range"]#toLwSlider::-webkit-slider-thumb:hover {
                                        background: #f7f7f7;
                                    }

                                    input[type="range"]#fromLwSlider::-webkit-slider-thumb:active,
                                    input[type="range"]#toLwSlider::-webkit-slider-thumb:active {
                                        box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                                        -webkit-box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                                    }

                                    input[type="number"]#rangeInput,
                                    input[type="number"]#rangeInput {
                                        color: #8a8383;
                                        width: 100%;
                                        /* height: 30px; */
                                        font-size: 13px;
                                        border: 1px solid #c6c6c6;
                                        border-radius: 4px;
                                        padding: 4px;
                                    }

                                    input[type="number"]#fromLwInput::-webkit-inner-spin-button,
                                    input[type="number"]#fromLwInput::-webkit-outer-spin-button {
                                        opacity: 1;
                                    }

                                    input[type="number"]#toLwInput::-webkit-inner-spin-button,
                                    input[type="number"]#toLwInput::-webkit-outer-spin-button {
                                        opacity: 1;
                                    }

                                    input[type="range"]#fromLwSlider,
                                    input[type="range"]#toLwSlider {
                                        -webkit-appearance: none;
                                        appearance: none;
                                        height: 4px;
                                        width: 100%;
                                        position: absolute;
                                        background-color: #c6c6c6;
                                        pointer-events: all;
                                        border-radius: 8px;
                                    }

                                    #toLwSlider {
                                        height: 0;
                                        z-index: 4;
                                    }
                                </style>
                                <script>
                                    // Controls the slider using from Input....
                                    function controlFromInput(fromLwSlider, fromLwInput, toLwInput, controlSlider) {
                                        const [from, to] = getParsed(fromLwInput, toLwInput);
                                        fillSlider(fromLwSlider, toLwSlider, "#C6C6C6", "#733D80", controlSlider);
                                        fromLwSlider.value = from;

                                        if (from > to) {
                                            fromLwSlider.value = to;
                                            fromLwInput.value = to;
                                        } else {
                                            fromLwSlider.value = from;
                                        }
                                    }

                                    // Controls the slider using to Input....
                                    function controlToInput(toLwSlider, fromLwInput, toLwInput, controlSlider) {
                                        const [from, to] = getParsed(fromLwInput, toLwInput);
                                        fillSlider(fromLwSlider, toLwSlider, "#C6C6C6", "#733D80", controlSlider);
                                        setToggleAccessible(toLwInput);
                                        toLwSlider.value = to;
                                        toLwInput.value = to;

                                        if (from <= to) {
                                            toLwSlider.value = to;
                                            toLwInput.value = to;
                                        } else {
                                            toLwInput.value = from;
                                        }
                                    }

                                    // Sliding event of the From slider
                                    function controlFromSlider(fromLwSlider, toLwSlider, fromLwInput) {
                                        const [from, to] = getParsed(fromLwSlider, toLwSlider);
                                        console.log([from, to]);
                                        fillSlider(fromLwSlider, toLwSlider, "#C6C6C6", "#733D80", toLwSlider);
                                        fromLwInput.value = from;
                                        if (from > to) {
                                            fromLwInput.value = to;
                                            toLwInput.value = from;
                                        }
                                    }

                                    // Sliding event of the To slider
                                    function controlToSlider(fromLwSlider, toLwSlider, toLwInput) {
                                        const [from, to] = getParsed(fromLwSlider, toLwSlider);
                                        fillSlider(fromLwSlider, toLwSlider, "#C6C6C6", "#733D80", toLwSlider);
                                        setToggleAccessible(toLwInput);
                                        toLwSlider.value = to;
                                        toLwInput.value = to;
                                        if (from > to) {
                                            fromLwInput.value = to;
                                            toLwInput.value = from;
                                        }
                                    }

                                    // Parsing values of the Inputs with 2 decimal places
                                    function getParsed(currentFrom, currentTo) {
                                        const from = parseFloat(currentFrom.value).toFixed(2);
                                        const to = parseFloat(currentTo.value).toFixed(2);
                                        return [parseFloat(from), parseFloat(to)];
                                    }

                                    // Changing and Filling the color in the selected part...
                                    function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
                                        let rangeDistance = to.max - to.min;
                                        let fromPosition = from.value - to.min;
                                        let toPosition = to.value - to.min;
                                        if (fromPosition > toPosition) {
                                            let spare = fromPosition;
                                            fromPosition = toPosition;
                                            toPosition = spare;
                                        }
                                        controlSlider.style.background = `linear-gradient(
                              to right,
                              ${sliderColor} 0%,
                              ${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
                              ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
                              ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
                              ${sliderColor} ${(toPosition / rangeDistance) * 100}%, 
                              ${sliderColor} 100%)`;
                                    }

                                    // Making sure the toggle which we are using is accessible to change the range
                                    function setToggleAccessible(currentTarget) {
                                        const toLwSlider = document.querySelector("#toLwSlider");
                                        if (Number(currentTarget.value) <= 0) {
                                            toLwSlider.style.zIndex = 4;
                                        } else {
                                            toLwSlider.style.zIndex = 4;
                                        }
                                    }

                                    const fromLwSlider = document.querySelector("#fromLwSlider");
                                    const toLwSlider = document.querySelector("#toLwSlider");
                                    const fromLwInput = document.querySelector("#fromLwInput");
                                    const toLwInput = document.querySelector("#toLwInput");

                                    // Set step to 0.01 for finer control
                                    fromLwSlider.step = "0.01";
                                    toLwSlider.step = "0.01";
                                    fromLwInput.step = "0.01";
                                    toLwInput.step = "0.01";

                                    // Initially filling the slider using default values...
                                    fillSlider(fromLwSlider, toLwSlider, "#C6C6C6", "#733D80", toLwSlider);
                                    setToggleAccessible(toLwSlider);

                                    // Assigning listener methods to respective events.
                                    fromLwSlider.oninput = () => controlFromSlider(fromLwSlider, toLwSlider, fromLwInput);
                                    toLwSlider.oninput = () => controlToSlider(fromLwSlider, toLwSlider, toLwInput);
                                    fromLwInput.oninput = () =>
                                        controlFromInput(fromLwSlider, fromLwInput, toLwInput, toLwSlider);
                                    toLwInput.oninput = () => controlToInput(toLwSlider, fromLwInput, toLwInput, toLwSlider);
                                </script>
                            </div>
                        </div>
                        <!-- End L/W Ratio Dropdown -->
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
                    <svg id="typeFilterUpArrow" class="hidden" height="8" width="8" version="1.1" id="Layer_1"
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
                <div id="typeFilterDropdown" class="hidden">
                    <div class="flex flex-col items-center gap-3 py-4">
                        <a href="/inventory"
                            class="text-xs text-white w-64 bg-primary border border-gray-300 hover:bg-primary p-2 rounded-md font-montserrat transition-all duration-300">WHITE
                            DIAMONDS</a>
                        <a href="#"
                            class="text-xs text-primary w-64 hover:text-white border border-gray-500 hover:bg-primary p-2 rounded-md font-montserrat transition-all duration-300">FANCY
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
            document.getElementById('filterDrawer').classList.remove('hidden');
        }

        function hideFilterDrawer() {
            document.getElementById('filterDrawer').classList.add('hidden');
        }
    </script>

    <!-- Start Shape Svg , Price Range Slider , Carat Slider , Color Slider , Clarity Slider -->
    <div class="hidden lg:grid lg:grid-cols-3 px-4 md:px-8 lg:px-12 2xl:px-16 3xl:px-40">
        <!-- Shape Svg -->
        <div class="flex items-center">
            <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Shape</h5>
            <div class="flex flex-col">
                <div class="flex mb-1">
                    <!-- Round -->
                    <a href="{{ route('inventory', ['shape' => 'round']) }}"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/round.svg') }}" width="25" height="25" alt="Round Shape">
                    </a>

                    <!-- Princess -->
                    <a href="{{ route('inventory', ['shape' => 'princess']) }}"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/princess.svg') }}" width="25" height="25"
                            alt="Princess Shape">
                    </a>

                    <!-- Radiant -->
                    <a href="{{ route('inventory', ['shape' => 'radiant']) }}"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/radiant.svg') }}" width="25" height="25"
                            alt="Radiant Shape">
                    </a>

                    <!-- Asscher -->
                    <a href="route('inventory', ['shape' => 'asscher'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/asscher.svg') }}" width="25" height="25"
                            alt="Asscher Shape">
                    </a>

                    <!-- Cushion -->
                    <a href="{{ route('inventory', ['shape' => 'cushion']) }}"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/cushion.svg') }}" width="25" height="25"
                            alt="Cushion Shape">
                    </a>

                    <!-- Oval -->
                    <a href="route('inventory', ['shape' => 'oval'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/oval.svg') }}" width="25" height="25" alt="Oval Shape">
                    </a>

                    <!-- Emerald -->
                    <a href="route('inventory', ['shape' => 'emerald'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/emerald.svg') }}" width="25" height="25"
                            alt="Emerald Shape">
                    </a>

                    <!-- Pear -->
                    <a href="{{ route('inventory', ['shape' => 'pear']) }}"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/pear.svg') }}" width="25" height="25" alt="Pear Shape">
                    </a>

                    <!-- Marquise -->
                    <a href="route('inventory', ['shape' => 'marquise'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/marquise.svg') }}" width="25" height="25"
                            alt="Marquise Shape">
                    </a>

                    <!-- Heart -->
                    <a href="route('inventory', ['shape' => 'heart'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/heart.svg') }}" width="25" height="25" alt="Heart Shape">
                    </a>
                </div>
                <div class="flex">
                    <!-- Rose Cut -->
                    <a href="route('inventory', ['shape' => 'rose-cut'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/rose-cut.svg') }}" width="25" height="25"
                            alt="Rose Cut Shape">
                    </a>

                    <!-- Old European -->
                    <a href="route('inventory', ['shape' => 'old-european'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/old-european.svg') }}" width="25" height="25"
                            alt="Old European Shape">
                    </a>

                    <!-- Half Moon -->
                    <a href="route('inventory', ['shape' => 'half-moon'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/half-moon.svg') }}" width="25" height="25"
                            alt="Half Moon Shape">
                    </a>

                    <!-- Baguette Trapezoid -->
                    <a href="route('inventory', ['shape' => 'baguette-trapezoid'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center text-center hover:text-dark-blue group mr-2">
                        <img src="{{ asset('Shape/baguette-trapezoid.svg') }}" width="25" height="25"
                            alt="Baguette Trapezoid Shape">
                    </a>

                    <!-- Baguette -->
                    <a href="route('inventory', ['shape' => 'baguette'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/baguette.svg') }}" width="25" height="25"
                            alt="Baguette Shape">
                    </a>

                    <!-- Hexagon -->
                    <a href="route('inventory', ['shape' => 'hexagon'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/hexagon.svg') }}" width="25" height="25"
                            alt="Hexagon Shape">
                    </a>

                    <!-- Kite -->
                    <a href="route('inventory', ['shape' => 'kite'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/kite.svg') }}" width="25" height="25" alt="Kite Shape">
                    </a>

                    <!-- Old Mine -->
                    <a href="route('inventory', ['shape' => 'old-mine'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/old-mine.svg') }}" width="25" height="25"
                            alt="Old Mine Shape">
                    </a>

                    <!-- Trapezoid -->
                    <a href="route('inventory', ['shape' => 'trapezoid'])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/trapezoid.svg') }}" width="25" height="25"
                            alt="Trapezoid Shape">
                    </a>

                    <!-- Triangular -->
                    <a href="route('inventory', ['shape' => ''])"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/triangular.svg') }}" width="25" height="25"
                            alt="Triangular Shape">
                    </a>
                </div>
            </div>
        </div>
        <!-- End Shape Svg -->

        <!-- Price Range Slider -->
        <div class="flex items-center">
            <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Price</h5>
            <form id="priceFilterForm" action="{{ route('inventory') }}" method="GET" class="range_container">
                <div class="form_control">
                    <div class="form_control_container">
                        <input class="form_control_container__time__input"
                            type="number"
                            id="fromInput"
                            name="minPrice"
                            value="{{ request('minPrice', 100) }}"
                            min="100"
                            max="100000" />
                    </div>
                    <div class="form_control_container">
                        <input class="form_control_container__time__input"
                            type="number"
                            id="toInput"
                            name="maxPrice"
                            value="{{ request('maxPrice', 100000) }}"
                            min="100"
                            max="100000" />
                    </div>
                </div>
                <div class="sliders_control">
                    <input id="fromSlider"
                        name="fromSlider"
                        type="range"
                        value="{{ request('minPrice', 100) }}"
                        min="100"
                        max="100000" />
                    <input id="toSlider"
                        name="toSlider"
                        type="range"
                        value="{{ request('maxPrice', 100000) }}"
                        min="100"
                        max="100000" />
                </div>
                <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
                    <span>$100</span>
                    <span>$100,000</span>
                </div>
            </form>
        </div>
        <style>
            .range_container {
                display: flex;
                flex-direction: column;
                width: 80%;
                margin: 5% auto;
            }

            .sliders_control {
                position: relative;
                min-height: 35px;
                display: flex;
                align-items: center;
            }

            .form_control {
                display: flex;
                justify-content: space-between;
                width: 100%;
            }

            input[type="range"]::-webkit-slider-thumb {
                width: 16px;
                height: 16px;
                background-color: #fff;
                border-radius: 50%;
                box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                cursor: pointer;
                position: relative;
                z-index: 5;
            }

            input[type="number"] {
                width: 100%;
                font-size: 13px;
                border: 1px solid #c6c6c6;
                border-radius: 4px;
                padding: 4px;
            }

            input[type="range"] {
                height: 4px;
                width: 100%;
                position: absolute;
                background-color: #c6c6c6;
                border-radius: 8px;
            }
        </style>
        <script>
            const fromSlider = document.querySelector("#fromSlider");
            const toSlider = document.querySelector("#toSlider");
            const fromInput = document.querySelector("#fromInput");
            const toInput = document.querySelector("#toInput");
            const priceFilterForm = document.querySelector("#priceFilterForm");

            function updateSliderColors() {
                const min = parseInt(fromSlider.min);
                const max = parseInt(toSlider.max);
                const from = parseInt(fromInput.value);
                const to = parseInt(toInput.value);

                const percentFrom = ((from - min) / (max - min)) * 100;
                const percentTo = ((to - min) / (max - min)) * 100;

                fromSlider.style.background = `linear-gradient(to right, #c6c6c6 ${percentFrom}%, #733D80 ${percentFrom}%, #733D80 ${percentTo}%, #c6c6c6 ${percentTo}%)`;
                toSlider.style.background = fromSlider.style.background;
            }

            function syncFromInput() {
                let value = Math.min(parseInt(fromInput.value), parseInt(toInput.value));
                fromInput.value = value;
                fromSlider.value = value;
                updateSliderColors();
                priceFilterForm.submit();
            }

            function syncToInput() {
                let value = Math.max(parseInt(toInput.value), parseInt(fromInput.value));
                toInput.value = value;
                toSlider.value = value;
                updateSliderColors();
                priceFilterForm.submit();
            }

            function syncFromSlider() {
                fromInput.value = fromSlider.value;
                updateSliderColors();
                priceFilterForm.submit();
            }

            function syncToSlider() {
                toInput.value = toSlider.value;
                updateSliderColors();
            }

            fromInput.addEventListener("input", syncFromInput);
            toInput.addEventListener("input", syncToInput);
            fromSlider.addEventListener("input", syncFromSlider);
            toSlider.addEventListener("input", syncToSlider);

            updateSliderColors();
        </script>
        <!-- End Price Range Slider -->

        <!-- Carat Slider -->
        <div class="flex items-center">
            <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Carat</h5>
            <div class="range_carat_container">
                <div class="form_carat_control">
                    <div class="form_carat_control_container">
                        <input class="form_carat_control_container__carat__input" type="number"
                            id="fromCaratInput" value="0.00" min="0.00" max="60.00" step="0.01" />
                    </div>
                    <div class="form_carat_control_container">
                        <input class="form_carat_control_container__carat__input" type="number" id="toCaratInput"
                            value="60.00" min="0.00" max="60.00" step="0.01" />
                    </div>
                </div>
                <div class="sliders_carat_control">
                    <input id="fromCaratSlider" type="range" value="0" min="0" max="60" />
                    <input id="toCaratSlider" type="range" value="60" min="0" max="60" />
                </div>
                <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
                    <span>0ct</span>
                    <span>60ct</span>
                </div>
            </div>
        </div>
        <style>
            .range_carat_container {
                display: flex;
                flex-direction: column;
                width: 80%;
                margin: 5% auto;
            }

            .sliders_carat_control {
                position: relative;
                min-height: 35px;
                display: flex;
                align-items: center;
            }

            .form_carat_control {
                display: flex;
                justify-content: space-between;
                font-size: 24px;
                color: #635a5a;
            }

            input[type="range"]#fromCaratSlider::-webkit-slider-thumb,
            input[type="range"]#toCaratSlider::-webkit-slider-thumb {
                -webkit-appearance: none;
                pointer-events: all;
                width: 16px;
                height: 16px;
                background-color: #fff;
                border-radius: 100%;
                box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                cursor: pointer;
                position: relative;
                z-index: 5;
            }

            input[type="range"]#fromCaratSlider::-moz-range-thumb,
            input[type="range"]#toCaratSlider::-moz-range-thumb {
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

            input[type="range"]#fromCaratSlider::-webkit-slider-thumb:hover,
            input[type="range"]#toCaratSlider::-webkit-slider-thumb:hover {
                background: #f7f7f7;
            }

            input[type="range"]#fromCaratSlider::-webkit-slider-thumb:active,
            input[type="range"]#toCaratSlider::-webkit-slider-thumb:active {
                box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                -webkit-box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
            }

            input[type="number"]#rangeInput,
            input[type="number"]#rangeInput {
                color: #8a8383;
                width: 100%;
                /* height: 30px; */
                font-size: 13px;
                border: 1px solid #c6c6c6;
                border-radius: 4px;
                padding: 4px;
            }

            input[type="number"]#fromCaratInput::-webkit-inner-spin-button,
            input[type="number"]#fromCaratInput::-webkit-outer-spin-button {
                opacity: 1;
            }

            input[type="number"]#toCaratInput::-webkit-inner-spin-button,
            input[type="number"]#toCaratInput::-webkit-outer-spin-button {
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

            /* #fromCaratSlider {
                                    height: 0;
                                    z-index: 3;
                                } */
            #toCaratSlider {
                height: 0;
                z-index: 4;
            }
        </style>
        <script>
            // Controls the slider using from Input
            function controlFromInput(fromCaratSlider, fromCaratInput, toCaratInput, controlSlider) {
                const [from, to] = getParsed(fromCaratInput, toCaratInput);
                fromCaratSlider.value = from;
                fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", controlSlider); // <-- Dynamic Color Update
                if (from > to) {
                    fromCaratSlider.value = to;
                    fromCaratInput.value = to;
                } else {
                    fromCaratSlider.value = from;
                }
            }

            // Controls the slider using to Input
            function controlToInput(toCaratSlider, fromCaratInput, toCaratInput, controlSlider) {
                const [from, to] = getParsed(fromCaratInput, toCaratInput);
                toCaratSlider.value = to;
                fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", controlSlider); // <-- Dynamic Color Update
                setToggleAccessible(toCaratInput);
                if (from <= to) {
                    toCaratSlider.value = to;
                    toCaratInput.value = to;
                } else {
                    toCaratInput.value = from;
                }
            }

            // Sliding event of the From slider
            function controlFromSlider(fromCaratSlider, toCaratSlider, fromCaratInput) {
                const [from, to] = getParsed(fromCaratSlider, toCaratSlider);
                fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", toCaratSlider); // <-- Dynamic Color Update
                fromCaratInput.value = from;
                if (from > to) {
                    fromCaratInput.value = to;
                    toCaratInput.value = from;
                }
            }

            // Sliding event of the To slider
            function controlToSlider(fromCaratSlider, toCaratSlider, toCaratInput) {
                const [from, to] = getParsed(fromCaratSlider, toCaratSlider);
                fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", toCaratSlider); // <-- Dynamic Color Update
                setToggleAccessible(toCaratInput);
                toCaratSlider.value = to;
                toCaratInput.value = to;
                if (from > to) {
                    fromCaratInput.value = to;
                    toCaratInput.value = from;
                }
            }

            // Parsing values of the Inputs with 2 decimal places
            function getParsed(currentFrom, currentTo) {
                const from = parseFloat(currentFrom.value).toFixed(2); // <-- Precision to 2 decimal places
                const to = parseFloat(currentTo.value).toFixed(2); // <-- Precision to 2 decimal places
                return [parseFloat(from), parseFloat(to)];
            }

            // Changing and Filling the color in the selected part
            function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
                let rangeDistance = to.max - to.min;
                let fromPosition = from.value - to.min;
                let toPosition = to.value - to.min;
                if (fromPosition > toPosition) {
                    let spare = fromPosition;
                    fromPosition = toPosition;
                    toPosition = spare;
                }
                controlSlider.style.background = `linear-gradient(
                        to right,
                        ${sliderColor} 0%,
                        ${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
                        ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
                        ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
                        ${sliderColor} ${(toPosition / rangeDistance) * 100}%, 
                        ${sliderColor} 100%)`; // <-- Updates color fill dynamically
            }

            // Ensures accessibility for toggles
            function setToggleAccessible(currentTarget) {
                const toCaratSlider = document.querySelector("#toCaratSlider");
                if (Number(currentTarget.value) <= 0) {
                    toCaratSlider.style.zIndex = 4;
                } else {
                    toCaratSlider.style.zIndex = 4;
                }
            }

            // Element References
            const fromCaratSlider = document.querySelector("#fromCaratSlider");
            const toCaratSlider = document.querySelector("#toCaratSlider");
            const fromCaratInput = document.querySelector("#fromCaratInput");
            const toCaratInput = document.querySelector("#toCaratInput");

            // Set step to 0.01 for finer control
            fromCaratSlider.step = "0.01";
            toCaratSlider.step = "0.01";
            fromCaratInput.step = "0.01";
            toCaratInput.step = "0.01";

            // Initial slider fill and setup
            fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", toCaratSlider); // <-- Initial color setup
            setToggleAccessible(toCaratSlider);

            // Event Listeners for Sliders and Inputs
            fromCaratSlider.oninput = () => controlFromSlider(fromCaratSlider, toCaratSlider, fromCaratInput);
            toCaratSlider.oninput = () => controlToSlider(fromCaratSlider, toCaratSlider, toCaratInput);
            fromCaratInput.oninput = () => {
                controlFromInput(fromCaratSlider, fromCaratInput, toCaratInput, toCaratSlider);
                fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", toCaratSlider); // <-- Instant color update
            };
            toCaratInput.oninput = () => {
                controlToInput(toCaratSlider, fromCaratInput, toCaratInput, toCaratSlider);
                fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", toCaratSlider); // <-- Instant color update
            };
        </script>

        <!-- End Carat Slider -->

        <!-- Cut Slider -->
        <div class="flex items-center">
            <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Cut</h5>
            <div class="range_cut_container">
                <div class="sliders_cut_control">
                    <input id="fromCutSlider" type="range" value="0" min="0" max="4"
                        step="1" />
                    <input id="toCutSlider" type="range" value="4" min="0" max="4"
                        step="1" />
                </div>
                <div class="flex justify-center gap-10 font-montserrat text-xs text-gray-500 font-medium">
                    <span>Good</span>
                    <span>Very Good</span>
                    <span>Excellent</span>
                    <span>Ideal</span>
                </div>
            </div>
        </div>
        <style>
            .range_cut_container {
                display: flex;
                flex-direction: column;
                width: 80%;
                margin: 5% auto;
            }

            .sliders_cut_control {
                position: relative;
                min-height: 35px;
                display: flex;
                align-items: center;
            }

            .form_cut_control {
                display: flex;
                justify-content: space-between;
                font-size: 24px;
                color: #635a5a;
            }

            input[type="range"]#fromCutSlider::-webkit-slider-thumb,
            input[type="range"]#toCutSlider::-webkit-slider-thumb {
                -webkit-appearance: none;
                pointer-events: all;
                width: 16px;
                height: 16px;
                background-color: #fff;
                border-radius: 100%;
                box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                cursor: pointer;
                position: relative;
                z-index: 5;
            }

            input[type="range"]#fromCutSlider::-moz-range-thumb,
            input[type="range"]#toCutSlider::-moz-range-thumb {
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
        </style>
        <script>
            const fromCutSlider = document.querySelector("#fromCutSlider");
            const toCutSlider = document.querySelector("#toCutSlider");
            const fromCutInput = document.querySelector("#fromCutInput");
            const toCutInput = document.querySelector("#toCutInput");



            // Initially filling the slider using default values...
            fillSlider(fromCutSlider, toCutSlider, "#C6C6C6", "#733D80", toCutSlider);
            setToggleAccessible(toCutSlider);

            // Assigning listener methods to respective events.
            fromCutSlider.oninput = () => controlFromSlider(fromCutSlider, toCutSlider, fromCutInput);
            toCutSlider.oninput = () => controlToSlider(fromCutSlider, toCutSlider, toCutInput);
            fromCutInput.oninput = () =>
                controlFromInput(fromCutSlider, fromCutInput, toCutInput, toCutSlider);
            toCutInput.oninput = () => controlToInput(toCutSlider, fromCutInput, toCutInput, toCutSlider);
        </script>
        <!-- End Cut Slider -->

        <!-- Color Slider -->
        <div class="flex items-center">
            <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Color</h5>
            <div class="range_color_container">
                <div class="sliders_color_control">
                    <input id="fromColorSliderM" type="range" value="0" min="0" max="10"
                        step="1" />
                    <input id="toColorSliderM" type="range" value="10" min="0" max="10"
                        step="1" />
                </div>
                <div class="flex justify-center gap-7 font-montserrat text-xs text-gray-500 font-medium">
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
            .range_color_container {
                display: flex;
                flex-direction: column;
                width: 80%;
                margin: 5% auto;
            }

            .sliders_color_control {
                position: relative;
                min-height: 35px;
                display: flex;
                align-items: center;
            }

            .form_color_control {
                display: flex;
                justify-content: space-between;
                font-size: 24px;
                color: #635a5a;
            }

            input[type="range"]#fromColorSliderM::-webkit-slider-thumb,
            input[type="range"]#toColorSliderM::-webkit-slider-thumb {
                -webkit-appearance: none;
                pointer-events: all;
                width: 16px;
                height: 16px;
                background-color: #fff;
                border-radius: 100%;
                box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                cursor: pointer;
                position: relative;
                z-index: 5;
            }

            input[type="range"]#fromColorSliderM::-moz-range-thumb,
            input[type="range"]#toColorSliderM::-moz-range-thumb {
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
        </style>
        <script>
            const fromColorSliderM = document.querySelector("#fromColorSliderM");
            const toColorSliderM = document.querySelector("#toColorSliderM");
            const fromColorInputM = document.querySelector("#fromColorInputM");
            const toColorInputM = document.querySelector("#toColorInputM");

            // Initially filling the slider using default values...
            fillSlider(fromColorSliderM, toColorSliderM, "#C6C6C6", "#733D80", toColorSliderM);
            setToggleAccessible(toColorSliderM);

            // Assigning listener methods to respective events.
            fromColorSliderM.oninput = () => controlFromSlider(fromColorSliderM, toColorSliderM, fromColorInputM);
            toColorSliderM.oninput = () => controlToSlider(fromColorSliderM, toColorSliderM, toColorInputM);
            fromColorInputM.oninput = () =>
                controlFromInput(fromColorSliderM, fromColorInputM, toColorInputM, toColorSliderM);
            toColorInputM.oninput = () => controlToInput(toColorSliderM, fromColorInputM, toColorInputM, toColorSliderM);
        </script>
        <!-- End Color Slider -->

        <!-- Clarity Slider -->
        <div class="flex items-center">
            <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Clarity</h5>
            <div class="range_clarity_container">
                <div class="sliders_clarity_control">
                    <input id="fromClaritySlider" type="range" value="0" min="0" max="11"
                        step="1" />
                    <input id="toClaritySlider" type="range" value="11" min="0" max="11"
                        step="1" />
                </div>
                <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
                    <span>I2</span>
                    <span>I1</span>
                    <span>SI3</span>
                    <span>S12</span>
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
            .range_carat_container,
            .range_clarity_container {
                display: flex;
                flex-direction: column;
                width: 80%;
                margin: 5% auto;
            }

            .sliders_clarity_control {
                position: relative;
                min-height: 35px;
                display: flex;
                align-items: center;
            }

            .form_clarity_control {
                display: flex;
                justify-content: space-between;
                font-size: 24px;
                color: #635a5a;
            }

            input[type="range"]#fromClaritySlider::-webkit-slider-thumb,
            input[type="range"]#toClaritySlider::-webkit-slider-thumb {
                -webkit-appearance: none;
                pointer-events: all;
                width: 16px;
                height: 16px;
                background-color: #fff;
                border-radius: 100%;
                box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                cursor: pointer;
                position: relative;
                z-index: 5;
            }

            input[type="range"]#fromClaritySlider::-moz-range-thumb,
            input[type="range"]#toClaritySlider::-moz-range-thumb {
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
        </style>
        <script>
            const fromClaritySlider = document.querySelector("#fromClaritySlider");
            const toClaritySlider = document.querySelector("#toClaritySlider");
            const fromClarityInput = document.querySelector("#fromClarityInput");
            const toClarityInput = document.querySelector("#toClarityInput");

            // Initially filling the slider using default values...
            fillSlider(fromClaritySlider, toClaritySlider, "#C6C6C6", "#733D80", toClaritySlider);
            setToggleAccessible(toClaritySlider);

            // Assigning listener methods to respective events.
            fromClaritySlider.oninput = () => controlFromSlider(fromClaritySlider, toClaritySlider, fromClarityInput);
            toClaritySlider.oninput = () => controlToSlider(fromClaritySlider, toClaritySlider, toClarityInput);
            fromClarityInput.oninput = () =>
                controlFromInput(fromClaritySlider, fromClarityInput, toClarityInput, toClaritySlider);
            toClarityInput.oninput = () => controlToInput(toClaritySlider, fromClarityInput, toClarityInput, toClaritySlider);
        </script>
        <!-- End Clarity Slider -->
    </div>
    <!-- End Shape Svg , Price Range Slider , Carat Slider , Color Slider , Clarity Slider -->

    <!-- Start Advanced Options -->
    <div class="hidden lg:flex lg:felx-row items-center gap-3 px-4 md:px-8 lg:px-12 2xl:px-16 3xl:px-40 py-5">
        <h3 class="text-xs text-primary font-montserrat font-semibold">Advanced Options</h3>
        <div class="flex flex-col lg:flex-row lg:justify-between items-start w-full">
            <!-- Start Certificate Dropdown , Method Dropdown , Table Dropdown -->
            <div class="grid grid-cols-2 md:flex md:flex-row items-center gap-4">
                <!-- Certificate Dropdown -->
                <div id="styleDropdownIcon"
                    class="relative flex items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
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
                    <!-- Up Arrow -->
                    <svg id="upArrow" class="hidden" height="8" width="8" version="1.1"
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
                                <input type="checkbox" class="mr-2 accent-black">
                                <span class="text-sm font-montserrat">IGI</span>
                            </label>
                            <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <input type="checkbox" class="mr-2 accent-black">
                                <span class="text-sm font-montserrat">GIA</span>
                            </label>
                            <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <input type="checkbox" class="mr-2 accent-black">
                                <span class="text-sm font-montserrat">GCAL</span>
                            </label>
                            <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <input type="checkbox" class="mr-2 accent-black">
                                <span class="text-sm font-montserrat">NON CERTIFIED</span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- End Certificate Dropdown -->

                <!-- Method Dropdown -->
                <div id="methodDropdownIcon"
                    class="relative flex items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
                    <label class="block text-xs text-gray-500 font-montserrat mr-3 cursor-pointer">Method</label>
                    <!-- Down Arrow -->
                    <svg id="methodDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                    <svg id="methodUpArrow" class="hidden" height="8" width="8" version="1.1"
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

                    <div id="methodDropdown"
                        class="hidden absolute top-full left-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
                        <div class="flex justify-between">
                            <p class="text-sm font-montserrat font-semibold px-4 py-2">Method</p>

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
                                <input type="checkbox" class="mr-2 accent-black">
                                <span class="text-sm font-montserrat">HPHT</span>
                            </label>
                            <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <input type="checkbox" class="mr-2 accent-black">
                                <span class="text-sm font-montserrat">CVD</span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- End Method Dropdown -->

                <!-- Table Dropdown -->
                <div id="tableDropdownIcon"
                    class="relative flex items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
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
                    <svg id="tableUpArrow" class="hidden" height="8" width="8" version="1.1"
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

                    <div id="tableDropdown"
                        class="hidden absolute top-full left-0 mt-1 w-80 bg-white border border-gray-300 rounded shadow-lg z-10">
                        <div class="flex justify-between">
                            <p class="text-sm font-montserrat font-semibold px-4 py-2">Table</p>

                            <button class="p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center">
                            <div class="range_table_container">
                                <div class="form_table_control">
                                    <div class="form_table_control_container">
                                        <input class="form_table_control_container__table__input" type="number"
                                            id="fromTableInput" value="50" min="50" max="80"
                                            onclick="event.stopPropagation();" />
                                    </div>
                                    <div class="form_table_control_container">
                                        <input class="form_table_control_container__table__input" type="number"
                                            id="toTableInput" value="80" min="50" max="80"
                                            onclick="event.stopPropagation();" />
                                    </div>
                                </div>
                                <div class="sliders_table_control">
                                    <input id="fromTableSlider" type="range" value="50" min="50"
                                        max="80" onclick="event.stopPropagation();" />
                                    <input id="toTableSlider" type="range" value="80" min="50"
                                        max="80" onclick="event.stopPropagation();" />
                                </div>
                            </div>
                        </div>
                        <style>
                            .range_table_container {
                                display: flex;
                                flex-direction: column;
                                width: 80%;
                                margin: 5% auto;
                            }

                            .sliders_table_control {
                                position: relative;
                                min-height: 35px;
                                display: flex;
                                align-items: center;
                            }

                            .form_table_control {
                                display: flex;
                                justify-content: space-between;
                                font-size: 24px;
                                color: #635a5a;
                            }

                            input[type="range"]#fromTableSlider::-webkit-slider-thumb,
                            input[type="range"]#toTableSlider::-webkit-slider-thumb {
                                -webkit-appearance: none;
                                pointer-events: all;
                                width: 16px;
                                height: 16px;
                                background-color: #fff;
                                border-radius: 100%;
                                box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                                cursor: pointer;
                                position: relative;
                                z-index: 5;
                            }

                            input[type="range"]#fromTableSlider::-moz-range-thumb,
                            input[type="range"]#toTableSlider::-moz-range-thumb {
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

                            input[type="range"]#fromTableSlider::-webkit-slider-thumb:hover,
                            input[type="range"]#toTableSlider::-webkit-slider-thumb:hover {
                                background: #f7f7f7;
                            }

                            input[type="range"]#fromTableSlider::-webkit-slider-thumb:active,
                            input[type="range"]#toTableSlider::-webkit-slider-thumb:active {
                                box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                                -webkit-box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                            }

                            input[type="number"]#rangeInput,
                            input[type="number"]#rangeInput {
                                color: #8a8383;
                                width: 100%;
                                /* height: 30px; */
                                font-size: 13px;
                                border: 1px solid #c6c6c6;
                                border-radius: 4px;
                                padding: 4px;
                            }

                            input[type="number"]#fromTableInput::-webkit-inner-spin-button,
                            input[type="number"]#fromTableInput::-webkit-outer-spin-button {
                                opacity: 1;
                            }

                            input[type="number"]#toTableInput::-webkit-inner-spin-button,
                            input[type="number"]#toTableInput::-webkit-outer-spin-button {
                                opacity: 1;
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

                            /* #fromCaratSlider {
                                            height: 0;
                                            z-index: 3;
                                        } */
                            #toTableSlider {
                                height: 0;
                                z-index: 4;
                            }
                        </style>
                        <script>
                            // Controls the slider using from Input....
                            function controlFromInput(fromTableSlider, fromTableInput, toTableInput, controlSlider) {
                                const [from, to] = getParsed(fromTableInput, toTableInput);
                                fillSlider(fromTableSlider, toTableSlider, "#C6C6C6", "#733D80", controlSlider);
                                fromTableSlider.value = from;

                                if (from > to) {
                                    fromTableSlider.value = to;
                                    fromTableInput.value = to;
                                } else {
                                    fromTableSlider.value = from;
                                }
                            }

                            // Controls the slider using to Input....
                            function controlToInput(toTableSlider, fromTableInput, toTableInput, controlSlider) {
                                const [from, to] = getParsed(fromTableInput, toTableInput);
                                fillSlider(fromTableSlider, toTableSlider, "#C6C6C6", "#733D80", controlSlider);
                                setToggleAccessible(toTableInput);
                                toTableSlider.value = to;
                                toTableInput.value = to;

                                if (from <= to) {
                                    toTableSlider.value = to;
                                    toTableInput.value = to;
                                } else {
                                    toTableInput.value = from;
                                }
                            }

                            // Sliding event of the From slider
                            function controlFromSlider(fromTableSlider, toTableSlider, fromTableInput) {
                                const [from, to] = getParsed(fromTableSlider, toTableSlider);
                                console.log([from, to]);
                                fillSlider(fromTableSlider, toTableSlider, "#C6C6C6", "#733D80", toTableSlider);
                                fromTableInput.value = from;
                                if (from > to) {
                                    fromTableInput.value = to;
                                    toTableInput.value = from;
                                }
                            }

                            // Sliding event of the To slider
                            function controlToSlider(fromTableSlider, toTableSlider, toTableInput) {
                                const [from, to] = getParsed(fromTableSlider, toTableSlider);
                                fillSlider(fromTableSlider, toTableSlider, "#C6C6C6", "#733D80", toTableSlider);
                                setToggleAccessible(toTableInput);
                                toTableSlider.value = to;
                                toTableInput.value = to;
                                if (from > to) {
                                    fromTableInput.value = to;
                                    toTableInput.value = from;
                                }
                            }

                            // Parsign values of the Inputs
                            function getParsed(currentFrom, currentTo) {
                                const from = parseInt(currentFrom.value, 10);
                                const to = parseInt(currentTo.value, 10);
                                return [from, to];
                            }

                            // Changing and Filling the color in the selected part...
                            function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
                                let rangeDistance = to.max - to.min;
                                let fromPosition = from.value - to.min;
                                let toPosition = to.value - to.min;
                                if (fromPosition > toPosition) {
                                    let spare = fromPosition;
                                    fromPosition = toPosition;
                                    toPosition = spare;
                                }
                                controlSlider.style.background = `linear-gradient(
                      to right,
                      ${sliderColor} 0%,
                      ${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
                      ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
                      ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
                      ${sliderColor} ${(toPosition / rangeDistance) * 100}%, 
                      ${sliderColor} 100%)`;
                            }

                            // Making sure the toggle which we are using is accesible to change the range
                            function setToggleAccessible(currentTarget) {
                                const toTableSlider = document.querySelector("#toTableSlider");
                                if (Number(currentTarget.value) <= 0) {
                                    toTableSlider.style.zIndex = 4;
                                } else {
                                    toTableSlider.style.zIndex = 4;
                                }
                            }

                            const fromTableSlider = document.querySelector("#fromTableSlider");
                            const toTableSlider = document.querySelector("#toTableSlider");
                            const fromTableInput = document.querySelector("#fromTableInput");
                            const toTableInput = document.querySelector("#toTableInput");

                            // Initially filling the slider using default values...
                            fillSlider(fromTableSlider, toTableSlider, "#C6C6C6", "#733D80", toTableSlider);
                            setToggleAccessible(toTableSlider);

                            // Assigning listner methonds to respective events.
                            fromTableSlider.oninput = () => controlFromSlider(fromTableSlider, toTableSlider, fromTableInput);
                            toTableSlider.oninput = () => controlToSlider(fromTableSlider, toTableSlider, toTableInput);
                            fromTableInput.oninput = () =>
                                controlFromInput(fromTableSlider, fromTableInput, toTableInput, toTableSlider);
                            toTableInput.oninput = () => controlToInput(toTableSlider, fromTableInput, toTableInput, toTableSlider);
                        </script>
                    </div>
                </div>
                <!-- End Table Dropdown -->

                <!-- Depth Dropdown -->
                <div id="depthDropdownIcon"
                    class="relative flex items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
                    <label class="block text-xs text-gray-500 font-montserrat mr-3 cursor-pointer">Depth (%)</label>
                    <!-- Down Arrow -->
                    <svg id="depthDownArrow" fill="#000000" height="8" width="8" version="1.1"
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
                    <svg id="depthUpArrow" class="hidden" height="8" width="8" version="1.1"
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

                    <div id="depthDropdown"
                        class="hidden absolute top-full left-0 mt-1 w-80 bg-white border border-gray-300 rounded shadow-lg z-10">
                        <div class="flex justify-between">
                            <p class="text-sm font-montserrat font-semibold px-4 py-2">Depth</p>

                            <button class="p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>

                        <div class="flex items-center">
                            <div class="range_depth_container">
                                <div class="form_depth_control">
                                    <div class="form_depth_control_container">
                                        <input class="form_depth_control_container__depth__input" type="number"
                                            id="fromDepthInput" value="46" min="46" max="78"
                                            onclick="event.stopPropagation();" />
                                    </div>
                                    <div class="form_depth_control_container">
                                        <input class="form_depth_control_container__depth__input" type="number"
                                            id="toDepthInput" value="78" min="46" max="78"
                                            onclick="event.stopPropagation();" />
                                    </div>
                                </div>
                                <div class="sliders_depth_control">
                                    <input id="fromDepthSlider" type="range" value="46" min="46"
                                        max="78" onclick="event.stopPropagation();" />
                                    <input id="toDepthSlider" type="range" value="78" min="46"
                                        max="78" onclick="event.stopPropagation();" />
                                </div>
                            </div>
                        </div>
                        <style>
                            .range_depth_container {
                                display: flex;
                                flex-direction: column;
                                width: 80%;
                                margin: 5% auto;
                            }

                            .sliders_depth_control {
                                position: relative;
                                min-height: 35px;
                                display: flex;
                                align-items: center;
                            }

                            .form_depth_control {
                                display: flex;
                                justify-content: space-between;
                                font-size: 24px;
                                color: #635a5a;
                            }

                            input[type="range"]#fromDepthSlider::-webkit-slider-thumb,
                            input[type="range"]#toDepthSlider::-webkit-slider-thumb {
                                -webkit-appearance: none;
                                pointer-events: all;
                                width: 16px;
                                height: 16px;
                                background-color: #fff;
                                border-radius: 100%;
                                box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                                cursor: pointer;
                                position: relative;
                                z-index: 5;
                            }

                            input[type="range"]#fromDepthSlider::-moz-range-thumb,
                            input[type="range"]#toDepthSlider::-moz-range-thumb {
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

                            input[type="range"]#fromDepthSlider::-webkit-slider-thumb:hover,
                            input[type="range"]#toDepthSlider::-webkit-slider-thumb:hover {
                                background: #f7f7f7;
                            }

                            input[type="range"]#fromDepthSlider::-webkit-slider-thumb:active,
                            input[type="range"]#toDepthSlider::-webkit-slider-thumb:active {
                                box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                                -webkit-box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                            }

                            input[type="number"]#rangeInput,
                            input[type="number"]#rangeInput {
                                color: #8a8383;
                                width: 100%;
                                /* height: 30px; */
                                font-size: 13px;
                                border: 1px solid #c6c6c6;
                                border-radius: 4px;
                                padding: 4px;
                            }

                            input[type="number"]#fromDepthInput::-webkit-inner-spin-button,
                            input[type="number"]#fromDepthInput::-webkit-outer-spin-button {
                                opacity: 1;
                            }

                            input[type="number"]#toDepthInput::-webkit-inner-spin-button,
                            input[type="number"]#toDepthInput::-webkit-outer-spin-button {
                                opacity: 1;
                            }

                            input[type="range"]#fromDepthSlider,
                            input[type="range"]#toDepthSlider {
                                -webkit-appearance: none;
                                appearance: none;
                                height: 4px;
                                width: 100%;
                                position: absolute;
                                background-color: #c6c6c6;
                                pointer-events: all;
                                border-radius: 8px;
                            }

                            #toDepthSlider {
                                height: 0;
                                z-index: 4;
                            }
                        </style>
                        <script>
                            // Controls the slider using from Input....
                            function controlFromInput(fromDepthSlider, fromDepthInput, toDepthInput, controlSlider) {
                                const [from, to] = getParsed(fromDepthInput, toDepthInput);
                                fillSlider(fromDepthSlider, toDepthSlider, "#C6C6C6", "#733D80", controlSlider);
                                fromDepthSlider.value = from;

                                if (from > to) {
                                    fromDepthSlider.value = to;
                                    fromDepthInput.value = to;
                                } else {
                                    fromDepthSlider.value = from;
                                }
                            }

                            // Controls the slider using to Input....
                            function controlToInput(toDepthSlider, fromDepthInput, toDepthInput, controlSlider) {
                                const [from, to] = getParsed(fromDepthInput, toDepthInput);
                                fillSlider(fromDepthSlider, toDepthSlider, "#C6C6C6", "#733D80", controlSlider);
                                setToggleAccessible(toDepthInput);
                                toDepthSlider.value = to;
                                toDepthInput.value = to;

                                if (from <= to) {
                                    toDepthSlider.value = to;
                                    toDepthInput.value = to;
                                } else {
                                    toDepthInput.value = from;
                                }
                            }

                            // Sliding event of the From slider
                            function controlFromSlider(fromDepthSlider, toDepthSlider, fromDepthInput) {
                                const [from, to] = getParsed(fromDepthSlider, toDepthSlider);
                                console.log([from, to]);
                                fillSlider(fromDepthSlider, toDepthSlider, "#C6C6C6", "#733D80", toDepthSlider);
                                fromDepthInput.value = from;
                                if (from > to) {
                                    fromDepthInput.value = to;
                                    toDepthInput.value = from;
                                }
                            }

                            // Sliding event of the To slider
                            function controlToSlider(fromDepthSlider, toDepthSlider, toDepthInput) {
                                const [from, to] = getParsed(fromDepthSlider, toDepthSlider);
                                fillSlider(fromDepthSlider, toDepthSlider, "#C6C6C6", "#733D80", toDepthSlider);
                                setToggleAccessible(toDepthInput);
                                toDepthSlider.value = to;
                                toDepthInput.value = to;
                                if (from > to) {
                                    fromDepthInput.value = to;
                                    toDepthInput.value = from;
                                }
                            }

                            // Parsign values of the Inputs
                            function getParsed(currentFrom, currentTo) {
                                const from = parseInt(currentFrom.value, 10);
                                const to = parseInt(currentTo.value, 10);
                                return [from, to];
                            }

                            // Changing and Filling the color in the selected part...
                            function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
                                let rangeDistance = to.max - to.min;
                                let fromPosition = from.value - to.min;
                                let toPosition = to.value - to.min;
                                if (fromPosition > toPosition) {
                                    let spare = fromPosition;
                                    fromPosition = toPosition;
                                    toPosition = spare;
                                }
                                controlSlider.style.background = `linear-gradient(
                      to right,
                      ${sliderColor} 0%,
                      ${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
                      ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
                      ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
                      ${sliderColor} ${(toPosition / rangeDistance) * 100}%, 
                      ${sliderColor} 100%)`;
                            }

                            // Making sure the toggle which we are using is accesible to change the range
                            function setToggleAccessible(currentTarget) {
                                const toDepthSlider = document.querySelector("#toDepthSlider");
                                if (Number(currentTarget.value) <= 0) {
                                    toDepthSlider.style.zIndex = 4;
                                } else {
                                    toDepthSlider.style.zIndex = 4;
                                }
                            }

                            const fromDepthSlider = document.querySelector("#fromDepthSlider");
                            const toDepthSlider = document.querySelector("#toDepthSlider");
                            const fromDepthInput = document.querySelector("#fromDepthInput");
                            const toDepthInput = document.querySelector("#toDepthInput");

                            // Initially filling the slider using default values...
                            fillSlider(fromDepthSlider, toDepthSlider, "#C6C6C6", "#733D80", toDepthSlider);
                            setToggleAccessible(toDepthSlider);

                            // Assigning listner methonds to respective events.
                            fromDepthSlider.oninput = () => controlFromSlider(fromDepthSlider, toDepthSlider, fromDepthInput);
                            toDepthSlider.oninput = () => controlToSlider(fromDepthSlider, toDepthSlider, toDepthInput);
                            fromDepthInput.oninput = () =>
                                controlFromInput(fromDepthSlider, fromDepthInput, toDepthInput, toDepthSlider);
                            toDepthInput.oninput = () => controlToInput(toDepthSlider, fromDepthInput, toDepthInput, toDepthSlider);
                        </script>
                    </div>
                </div>
                <!-- End Depth Dropdown -->

                <!-- L/W Ratio Dropdown -->
                <div id="lwDropdownIcon"
                    class="relative flex items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
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
                    <svg id="lwUpArrow" class="hidden" height="8" width="8" version="1.1"
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

                    <div id="lwDropdown"
                        class="hidden absolute top-full left-0 mt-1 w-80 bg-white border border-gray-300 rounded shadow-lg z-10">
                        <div class="flex justify-between">
                            <p class="text-sm font-montserrat font-semibold px-4 py-2">L/W Ratio</p>

                            <button class="p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>

                        <div class="flex items-center">
                            <div class="range_lw_container">
                                <div class="form_lw_control">
                                    <div class="form_lw_control_container">
                                        <input class="form_lw_control_container__lw__input" type="number"
                                            id="fromLwInput" value="1.00" min="1.00" max="3.00"
                                            onclick="event.stopPropagation();" />
                                    </div>
                                    <div class="form_lw_control_container">
                                        <input class="form_lw_control_container__lw__input" type="number"
                                            id="toLwInput" value="3.00" min="1.00" max="3.00"
                                            onclick="event.stopPropagation();" />
                                    </div>
                                </div>
                                <div class="sliders_lw_control">
                                    <input id="fromLwSlider" type="range" value="1.00" min="1.00"
                                        max="3.00" onclick="event.stopPropagation();" />
                                    <input id="toLwSlider" type="range" value="3.00" min="1.00"
                                        max="3.00" onclick="event.stopPropagation();" />
                                </div>
                            </div>
                        </div>
                        <style>
                            .range_lw_container {
                                display: flex;
                                flex-direction: column;
                                width: 80%;
                                margin: 5% auto;
                            }

                            .sliders_lw_control {
                                position: relative;
                                min-height: 35px;
                                display: flex;
                                align-items: center;
                            }

                            .form_lw_control {
                                display: flex;
                                justify-content: space-between;
                                font-size: 24px;
                                color: #635a5a;
                            }

                            input[type="range"]#fromLwSlider::-webkit-slider-thumb,
                            input[type="range"]#toLwSlider::-webkit-slider-thumb {
                                -webkit-appearance: none;
                                pointer-events: all;
                                width: 16px;
                                height: 16px;
                                background-color: #fff;
                                border-radius: 100%;
                                box-shadow: 0 3px 6px rgb(0 0 0 / 32%);
                                cursor: pointer;
                                position: relative;
                                z-index: 5;
                            }

                            input[type="range"]#fromLwSlider::-moz-range-thumb,
                            input[type="range"]#toLwSlider::-moz-range-thumb {
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

                            input[type="range"]#fromLwSlider::-webkit-slider-thumb:hover,
                            input[type="range"]#toLwSlider::-webkit-slider-thumb:hover {
                                background: #f7f7f7;
                            }

                            input[type="range"]#fromLwSlider::-webkit-slider-thumb:active,
                            input[type="range"]#toLwSlider::-webkit-slider-thumb:active {
                                box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                                -webkit-box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                            }

                            input[type="number"]#rangeInput,
                            input[type="number"]#rangeInput {
                                color: #8a8383;
                                width: 100%;
                                /* height: 30px; */
                                font-size: 13px;
                                border: 1px solid #c6c6c6;
                                border-radius: 4px;
                                padding: 4px;
                            }

                            input[type="number"]#fromLwInput::-webkit-inner-spin-button,
                            input[type="number"]#fromLwInput::-webkit-outer-spin-button {
                                opacity: 1;
                            }

                            input[type="number"]#toLwInput::-webkit-inner-spin-button,
                            input[type="number"]#toLwInput::-webkit-outer-spin-button {
                                opacity: 1;
                            }

                            input[type="range"]#fromLwSlider,
                            input[type="range"]#toLwSlider {
                                -webkit-appearance: none;
                                appearance: none;
                                height: 4px;
                                width: 100%;
                                position: absolute;
                                background-color: #c6c6c6;
                                pointer-events: all;
                                border-radius: 8px;
                            }

                            #toLwSlider {
                                height: 0;
                                z-index: 4;
                            }
                        </style>
                        <script>
                            // Controls the slider using from Input....
                            function controlFromInput(fromLwSlider, fromLwInput, toLwInput, controlSlider) {
                                const [from, to] = getParsed(fromLwInput, toLwInput);
                                fillSlider(fromLwSlider, toLwSlider, "#C6C6C6", "#733D80", controlSlider);
                                fromLwSlider.value = from;

                                if (from > to) {
                                    fromLwSlider.value = to;
                                    fromLwInput.value = to;
                                } else {
                                    fromLwSlider.value = from;
                                }
                            }

                            // Controls the slider using to Input....
                            function controlToInput(toLwSlider, fromLwInput, toLwInput, controlSlider) {
                                const [from, to] = getParsed(fromLwInput, toLwInput);
                                fillSlider(fromLwSlider, toLwSlider, "#C6C6C6", "#733D80", controlSlider);
                                setToggleAccessible(toLwInput);
                                toLwSlider.value = to;
                                toLwInput.value = to;

                                if (from <= to) {
                                    toLwSlider.value = to;
                                    toLwInput.value = to;
                                } else {
                                    toLwInput.value = from;
                                }
                            }

                            // Sliding event of the From slider
                            function controlFromSlider(fromLwSlider, toLwSlider, fromLwInput) {
                                const [from, to] = getParsed(fromLwSlider, toLwSlider);
                                console.log([from, to]);
                                fillSlider(fromLwSlider, toLwSlider, "#C6C6C6", "#733D80", toLwSlider);
                                fromLwInput.value = from;
                                if (from > to) {
                                    fromLwInput.value = to;
                                    toLwInput.value = from;
                                }
                            }

                            // Sliding event of the To slider
                            function controlToSlider(fromLwSlider, toLwSlider, toLwInput) {
                                const [from, to] = getParsed(fromLwSlider, toLwSlider);
                                fillSlider(fromLwSlider, toLwSlider, "#C6C6C6", "#733D80", toLwSlider);
                                setToggleAccessible(toLwInput);
                                toLwSlider.value = to;
                                toLwInput.value = to;
                                if (from > to) {
                                    fromLwInput.value = to;
                                    toLwInput.value = from;
                                }
                            }

                            // Parsing values of the Inputs with 2 decimal places
                            function getParsed(currentFrom, currentTo) {
                                const from = parseFloat(currentFrom.value).toFixed(2);
                                const to = parseFloat(currentTo.value).toFixed(2);
                                return [parseFloat(from), parseFloat(to)];
                            }

                            // Changing and Filling the color in the selected part...
                            function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
                                let rangeDistance = to.max - to.min;
                                let fromPosition = from.value - to.min;
                                let toPosition = to.value - to.min;
                                if (fromPosition > toPosition) {
                                    let spare = fromPosition;
                                    fromPosition = toPosition;
                                    toPosition = spare;
                                }
                                controlSlider.style.background = `linear-gradient(
                      to right,
                      ${sliderColor} 0%,
                      ${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
                      ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
                      ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
                      ${sliderColor} ${(toPosition / rangeDistance) * 100}%, 
                      ${sliderColor} 100%)`;
                            }

                            // Making sure the toggle which we are using is accessible to change the range
                            function setToggleAccessible(currentTarget) {
                                const toLwSlider = document.querySelector("#toLwSlider");
                                if (Number(currentTarget.value) <= 0) {
                                    toLwSlider.style.zIndex = 4;
                                } else {
                                    toLwSlider.style.zIndex = 4;
                                }
                            }

                            const fromLwSlider = document.querySelector("#fromLwSlider");
                            const toLwSlider = document.querySelector("#toLwSlider");
                            const fromLwInput = document.querySelector("#fromLwInput");
                            const toLwInput = document.querySelector("#toLwInput");

                            // Set step to 0.01 for finer control
                            fromLwSlider.step = "0.01";
                            toLwSlider.step = "0.01";
                            fromLwInput.step = "0.01";
                            toLwInput.step = "0.01";

                            // Initially filling the slider using default values...
                            fillSlider(fromLwSlider, toLwSlider, "#C6C6C6", "#733D80", toLwSlider);
                            setToggleAccessible(toLwSlider);

                            // Assigning listener methods to respective events.
                            fromLwSlider.oninput = () => controlFromSlider(fromLwSlider, toLwSlider, fromLwInput);
                            toLwSlider.oninput = () => controlToSlider(fromLwSlider, toLwSlider, toLwInput);
                            fromLwInput.oninput = () =>
                                controlFromInput(fromLwSlider, fromLwInput, toLwInput, toLwSlider);
                            toLwInput.oninput = () => controlToInput(toLwSlider, fromLwInput, toLwInput, toLwSlider);
                        </script>
                    </div>
                </div>
                <!-- End L/W Ratio Dropdown -->
            </div>
            <!-- End Certificate Dropdown , Method Dropdown , Table Dropdown -->

            <!-- Start Type Dropdown -->
            <div class="flex flex-row items-center gap-3">
                <p class="font-montserrat font-semibold text-sm">Type</p>
                <a href="/inventory"
                    class="text-xs text-white bg-primary border border-gray-300 hover:bg-primary p-2 rounded-md font-montserrat transition-all duration-300">WHITE
                    DIAMONDS</a>
                <a href="#"
                    class="text-xs text-primary hover:text-white border border-gray-500 hover:bg-primary p-2 rounded-md font-montserrat transition-all duration-300">FANCY
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
            <input type="text" placeholder="Search by SKU/GIA/IGI/GCAL number"
                class="w-full md:w-96 px-4 py-2.5 border border-gray-300 font-montserrat text-sm placeholder:font-medium focus:outline-none focus:border-black">
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
        <button class="hidden md:flex items-center gap-2 text-sm font-montserrat text-primary hover:text-white">
            <span>Clear Filters</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
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
                    <!-- Start Loader -->
                    <div class="loader">
                        <div class="dot dot-1"></div>
                        <div class="dot dot-2"></div>
                        <div class="dot dot-3"></div>
                        <div class="dot dot-4"></div>
                        <div class="dot dot-5"></div>
                    </div>

                    <style>
                        .loader {
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            justify-content: center;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            align-items: center;
                            height: 100%;
                        }

                        .dot {
                            display: inline-block;
                            width: 12px;
                            height: 12px;
                            margin-right: 6px;
                            border-radius: 50%;
                            -webkit-animation: dot-pulse2 1.5s ease-in-out infinite;
                            animation: dot-pulse2 1.5s ease-in-out infinite;
                        }

                        .dot-1 {
                            background-color: #301914;
                            -webkit-animation-delay: 0s;
                            animation-delay: 0s;
                        }

                        .dot-2 {
                            background-color: #301914;
                            -webkit-animation-delay: 0.3s;
                            animation-delay: 0.3s;
                        }

                        .dot-3 {
                            background-color: #301914;
                            -webkit-animation-delay: 0.6s;
                            animation-delay: 0.6s;
                        }

                        .dot-4 {
                            background-color: #301914;
                            -webkit-animation-delay: 0.9s;
                            animation-delay: 0.9s;
                        }

                        .dot-5 {
                            background-color: #301914;
                            -webkit-animation-delay: 1.2s;
                            animation-delay: 1.2s;
                        }

                        @keyframes dot-pulse2 {
                            0% {
                                -webkit-transform: scale(0.5);
                                transform: scale(0.5);
                                opacity: 0.5;
                            }

                            50% {
                                -webkit-transform: scale(1);
                                transform: scale(1);
                                opacity: 1;
                            }

                            100% {
                                -webkit-transform: scale(0.5);
                                transform: scale(0.5);
                                opacity: 0.5;
                            }
                        }
                    </style>
                    <!-- End Loader -->

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
                            <button class="px-4 py-2 text-sm font-montserrat text-gold bg-primary rounded hover:bg-white border border-primary hover:text-primary transition-all duration-300">View
                                More</button>
                        </td>
                    </tr>

                    <tr id="details-{{ $diamond->id }}" class="content hidden transition-all duration-200 ease-in-out max-h-0 overflow-hidden opacity-0">
                        <td colspan="7" class="relative">
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
                                <div class="flex flex-col items-center gap-3">
                                    <div class="flex items-center justify-center">
                                        <img src="{{ asset($diamond->images) }}" class="w-40"
                                            alt="{{ $diamond->name }}">
                                    </div>

                                    <div class="text-center">
                                        <p class="text-2xl font-montserrat font-semibold text-gray-800">
                                            {{ ucwords($diamond->name) }}
                                        </p>
                                        <div class="mt-1">
                                            <span
                                                class="text-gray-600 line-through text-lg font-montserrat font-medium">${{ $diamond->mrp }}</span>
                                            <span
                                                class="text-xl ml-1 font-montserrat font-semibold">${{ $diamond->original_price }}</span>
                                        </div>
                                    </div>
                                    <div class="flex gap-4 justify-center mt-2">
                                        <form action="{{ route('cart.add') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $diamond->id }}">
                                            <input type="hidden" name="name"
                                                value="{{ $diamond->name }}">
                                            <input type="hidden" name="shape"
                                                value="{{ $diamond->shape }}">
                                            <input type="hidden" name="original_price"
                                                value="{{ $diamond->original_price }}">
                                            <input type="hidden" name="carat"
                                                value="{{ $diamond->carat }}">
                                            <input type="hidden" name="cut" value="{{ $diamond->cut }}">
                                            <input type="hidden" name="color"
                                                value="{{ $diamond->color }}">
                                            <input type="hidden" name="clarity"
                                                value="{{ $diamond->clarity }}">
                                            <input type="hidden" name="images"
                                                value="{{ $diamond->images }}">
                                            <input type="hidden" name="size"
                                                value="{{ $diamond->size }}">
                                            <input type="hidden" name="sku" value="{{ $diamond->sku }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="mrp" value="{{ $diamond->mrp }}">
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

                                    <a href="#"
                                        class="text-primary underline-offset-2 underline hover:text-blue-800 text-center mt-1 text-xs font-montserrat font-bold">
                                        View Diamond Certificate
                                    </a>

                                    <span class="text-xs text-gray-500 mt-1 font-montserrat ">Diamond photo is for
                                        visual purposes only. Play Video for a real diamond.</span>
                                </div>

                                <!-- Right Side -->
                                <div>
                                    <h3 class="text-lg font-montserrat font-semibold uppercase mb-4">Diamond
                                        Details</h3>
                                    <table class="w-full">
                                        <tbody>
                                            <tr class="border-b">
                                                <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Carat</td>
                                                <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">{{ $diamond->carat }}</td>
                                            </tr>
                                            <tr class="border-b">
                                                <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Size (mm)</td>
                                                <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">{{ $diamond->size }} mm</td>
                                            </tr>
                                            <tr class="border-b">
                                                <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Cut</td>
                                                <td class="py-2">
                                                    <span class="font-montserrat font-semibold text-gray-600">{{ $diamond->cut }}</span>
                                                    <span class="font-montserrat text-sm text-gray-500">{{ $diamond->cut_description }}</span>
                                                </td>
                                            </tr>
                                            <tr class="border-b">
                                                <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Color</td>
                                                <td class="py-2">
                                                    <span class="font-montserrat font-semibold text-gray-600">{{ $diamond->color }}</span>
                                                    <span class="font-montserrat text-sm text-gray-500">{{ $diamond->color_description }}</span>
                                                </td>
                                            </tr>
                                            <tr class="border-b">
                                                <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Clarity</td>
                                                <td class="py-2">
                                                    <span class="font-montserrat font-semibold text-gray-600">{{ $diamond->clarity }}</span>
                                                    <span class="font-montserrat text-sm text-gray-500">{{ $diamond->clarity_description }}</span>
                                                </td>
                                            </tr>
                                            <tr class="border-b">
                                                <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">In The Box</td>
                                                <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">Diamond, IGI Certificate.</td>
                                            </tr>
                                            <tr class="border-b">
                                                <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Table & Depth</td>
                                                <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">{{ $diamond->table }}%</td>
                                            </tr>
                                            <tr class="border-b">
                                                <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">L/W Ratio</td>
                                                <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">{{ $diamond->l_w_ratio }}</td>
                                            </tr>
                                            <tr class="border-b">
                                                <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">SKU</td>
                                                <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">{{ $diamond->sku }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Growth Type</td>
                                                <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">{{ $diamond->growth_type }}</td>
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
            {{-- Load More Button --}}
            <div class="flex justify-center mt-4">
                <button class="px-6 py-2.5 text-sm border border-primary bg-primary text-gold rounded-sm hover:bg-white hover:border-primary hover:text-primary transition-colors flex items-center font-montserrat gap-2">
                    Load More
                </button>
            </div>
        </div>
    </div>
    <!-- End Table -->

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
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    });
</script>
<!-- End Certificate Dropdown Script -->

<!-- Start Method Dropdown Script -->
<script>
    const methodIcon = document.getElementById('methodDropdownIcon');
    const methodDropdown = document.getElementById('methodDropdown');
    const methodDownArrow = document.getElementById('methodDownArrow');
    const methodUpArrow = document.getElementById('methodUpArrow');

    methodIcon.addEventListener('click', () => {
        methodDropdown.classList.toggle('hidden');
        methodDownArrow.classList.toggle('hidden');
        methodUpArrow.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
        if (!methodIcon.contains(e.target) && !methodDropdown.contains(e.target)) {
            methodDropdown.classList.add('hidden');
            methodDownArrow.classList.remove('hidden');
            methodUpArrow.classList.add('hidden');
        }
    });

    // Prevent dropdown from closing when clicking checkboxes
    const methodCheckboxes = methodDropdown.querySelectorAll('input[type="checkbox"]');
    methodCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    });
</script>
<!-- End Method Dropdown Script -->

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
        if (!tableIcon.contains(e.target) && !tableDropdown.contains(e.target)) {
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

<!-- Start Depth Dropdown Script -->
<script>
    const depthIcon = document.getElementById('depthDropdownIcon');
    const depthDropdown = document.getElementById('depthDropdown');
    const depthDownArrow = document.getElementById('depthDownArrow');
    const depthUpArrow = document.getElementById('depthUpArrow');

    depthIcon.addEventListener('click', () => {
        depthDropdown.classList.toggle('hidden');
        depthDownArrow.classList.toggle('hidden');
        depthUpArrow.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
        if (!depthIcon.contains(e.target) && !depthDropdown.contains(e.target)) {
            depthDropdown.classList.add('hidden');
            depthDownArrow.classList.remove('hidden');
            depthUpArrow.classList.add('hidden');
        }
    });

    // Prevent dropdown from closing when clicking checkboxes
    const depthCheckboxes = depthDropdown.querySelectorAll('input[type="checkbox"]');
    depthCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    });
</script>
<!-- End Depth Dropdown Script -->

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

<!-- Start Shape Dropdown Script -->
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
<!-- End Shape Dropdown Script  -->

<!-- Start Price Dropdown Script  -->
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
<!-- End Price Dropdown Script -->

<!-- Start Type Dropdown Script -->
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
<!-- End Type Dropdown Script -->

<!-- Start Color Dropdown Script  -->
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
<!-- End Color Dropdown Script -->

<!-- Start Clarity Dropdown Script -->
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
<!-- End Clarity Dropdown Script -->

<!-- Start Cut Dropdown Script -->
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
<!-- End Cut Dropdown Script  -->

<!-- Start Carat Dropdown Script -->
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
<!-- End Carat Dropdown Script -->

<!-- Start Advanced Options Dropdown Script -->
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




@endsection