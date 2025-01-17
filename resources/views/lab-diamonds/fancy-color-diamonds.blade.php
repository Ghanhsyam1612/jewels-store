@extends('layouts.master')

@section('content')
<div class="container mx-auto px-4 lg:px-6 py-12">
    <h1 class="text-xl lg:text-4xl text-primary font-montserrat font-bold text-center mb-3 px-4 md:px-8 lg:px-12 2xl:px-16 3xl:px-40">
        Certified Fancy Color Lab Grown Diamonds
    </h1>
    <p class="text-primary/80 text-center font-montserrat text-sm mb-4 md:mb-8 px-4 md:px-8 lg:px-12 2xl:px-16 3xl:px-40">
        Select your perfect fancy color lab created diamond from thousands of ethically sourced diamonds.
    </p>

    {{-- Start Color --}}
    <div class="flex items-center px-10 xl:px-4">
        <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Color</h5>
        <div class="flex flex-col">
            <div class="mb-1 grid grid-cols-2 lg:grid-cols-10 gap-5">
                <!-- Color Options -->
                <a href="#"
                    class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="yellow">
                    <img src="{{ asset('images/color/yellow.png') }}" class="w-11 h-11" alt="Yellow">
                    <span class="text-primary">Yellow</span>
                </a>
    
                <a href="#"
                    class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="pink">
                    <img src="{{ asset('images/color/pink.png') }}" class="w-11 h-11" alt="Pink">
                    <span class="text-primary">Pink</span>
                </a>
    
                <a href="#"
                    class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="purple">
                    <img src="{{ asset('images/color/purple.png') }}" class="w-11 h-11" alt="Purple">
                    <span class="text-primary">Purple</span>
                </a>
    
                <a href="#"
                    class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="red">
                    <img src="{{ asset('images/color/red.png') }}" class="w-11 h-11" alt="Red">
                    <span class="text-primary">Red</span>
                </a>
    
                <a href="#"
                    class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="blue">
                    <img src="{{ asset('images/color/blue.png') }}" class="w-11 h-11" alt="Blue">
                    <span class="text-primary">Blue</span>
                </a>
    
                <a href="#"
                    class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="green">
                    <img src="{{ asset('images/color/green.png') }}" class="w-11 h-11" alt="Green">
                    <span class="text-primary">Green</span>
                </a>
    
                <a href="#"
                    class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="orange">
                    <img src="{{ asset('images/color/orange.png') }}" class="w-11 h-11" alt="Orange">
                    <span class="text-primary">Orange</span>
                </a>
    
                <a href="#"
                    class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="brown">
                    <img src="{{ asset('images/color/brown.png') }}" class="w-11 h-11" alt="Brown">
                    <span class="text-primary">Brown</span>
                </a>
    
                <a href="#"
                    class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="black">
                    <img src="{{ asset('images/color/black.png') }}" class="w-11 h-11" alt="Black">
                    <span class="text-primary">Black</span>
                </a>
    
                <a href="#"
                    class="color-item font-montserrat text-sm leading-5 font-normal gap-1.5 flex flex-col items-center text-center border border-gray-300 py-3 px-8 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="gray">
                    <img src="{{ asset('images/color/gray.png') }}" class="w-11 h-11" alt="Gray">
                    <span class="text-primary">Gray</span>
                </a>
            </div>
        </div>
    </div>
    {{-- End Color --}}

    {{-- Start Intensity Color --}}
    <div class="flex items-center px-10 xl:px-4">
        <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Intensity</h5>
        <div class="flex flex-col">
            <div class="grid grid-cols-2 lg:grid-cols-6 mb-1 gap-5">
                <!-- Fancy Light (0.20) -->
                <a href="#"
                    class="intensity-color-item font-montserrat text-sm leading-5 font-normal flex flex-col items-center text-center border border-gray-300 py-1.5 w-24 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="yellow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 53" class="w-7 h-7 fill-yellow-500/20">
                        <g transform="translate(0,53) scale(0.1,-0.1)">
                          <path d="M127 471 l-98 -58 36 -22 36 -21 65 36 c64 36 64 36 64 80 0 24 -1 44 -2 43 -2 0 -47 -26 -101 -58z"></path>
                          <path d="M262 483 c3 -43 5 -46 63 -79 l61 -33 36 22 36 22 -100 57 -99 57 3 -46z"></path>
                          <path d="M178 374 l-58 -35 0 -69 0 -70 41 -25 c79 -50 81 -51 145 -13 l59 34 3 71 3 72 -64 35 c-35 20 -66 36 -68 35 -2 0 -30 -16 -61 -35z"></path>
                          <path d="M10 270 c0 -60 3 -110 6 -110 4 0 22 9 40 21 33 20 34 22 34 89 0 67 0 68 -36 89 -19 12 -37 21 -40 21 -2 0 -4 -49 -4 -110z"></path>
                          <path d="M433 358 c-32 -19 -33 -22 -33 -89 0 -67 1 -70 33 -89 17 -11 35 -20 40 -20 4 0 7 50 7 110 0 61 -3 110 -7 109 -5 0 -23 -10 -40 -21z"></path>
                          <path d="M65 145 l-37 -22 58 -33 c33 -18 78 -44 102 -57 l42 -25 0 44 c0 42 -1 43 -64 79 l-64 37 -37 -23z"></path>
                          <path d="M322 132 c-61 -36 -62 -37 -62 -80 0 -44 0 -44 23 -30 12 8 57 34 99 58 43 24 77 44 75 45 -1 1 -18 11 -37 23 l-36 21 -62 -37z"></path>
                        </g>
                    </svg>
                    <span class="text-primary text-10px">Fancy Light</span>
                </a>
                
                <!-- Fancy (0.30) -->
                <a href="#"
                    class="intensity-color-item font-montserrat text-sm leading-5 font-normal flex flex-col items-center text-center border border-gray-300 py-1.5 w-24 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="yellow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 53" class="w-7 h-7 fill-yellow-500/30">
                        <g transform="translate(0,53) scale(0.1,-0.1)">
                          <path d="M127 471 l-98 -58 36 -22 36 -21 65 36 c64 36 64 36 64 80 0 24 -1 44 -2 43 -2 0 -47 -26 -101 -58z"></path>
                          <path d="M262 483 c3 -43 5 -46 63 -79 l61 -33 36 22 36 22 -100 57 -99 57 3 -46z"></path>
                          <path d="M178 374 l-58 -35 0 -69 0 -70 41 -25 c79 -50 81 -51 145 -13 l59 34 3 71 3 72 -64 35 c-35 20 -66 36 -68 35 -2 0 -30 -16 -61 -35z"></path>
                          <path d="M10 270 c0 -60 3 -110 6 -110 4 0 22 9 40 21 33 20 34 22 34 89 0 67 0 68 -36 89 -19 12 -37 21 -40 21 -2 0 -4 -49 -4 -110z"></path>
                          <path d="M433 358 c-32 -19 -33 -22 -33 -89 0 -67 1 -70 33 -89 17 -11 35 -20 40 -20 4 0 7 50 7 110 0 61 -3 110 -7 109 -5 0 -23 -10 -40 -21z"></path>
                          <path d="M65 145 l-37 -22 58 -33 c33 -18 78 -44 102 -57 l42 -25 0 44 c0 42 -1 43 -64 79 l-64 37 -37 -23z"></path>
                          <path d="M322 132 c-61 -36 -62 -37 -62 -80 0 -44 0 -44 23 -30 12 8 57 34 99 58 43 24 77 44 75 45 -1 1 -18 11 -37 23 l-36 21 -62 -37z"></path>
                        </g>
                    </svg>
                    <span class="text-primary text-10px">Fancy</span>
                </a>

                <!-- Fancy Intense (0.40) -->
                <a href="#"
                    class="intensity-color-item font-montserrat text-sm leading-5 font-normal flex flex-col items-center text-center border border-gray-300 py-1.5 w-24 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="yellow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 53" class="w-7 h-7 fill-yellow-500/40">
                        <g transform="translate(0,53) scale(0.1,-0.1)">
                          <path d="M127 471 l-98 -58 36 -22 36 -21 65 36 c64 36 64 36 64 80 0 24 -1 44 -2 43 -2 0 -47 -26 -101 -58z"></path>
                          <path d="M262 483 c3 -43 5 -46 63 -79 l61 -33 36 22 36 22 -100 57 -99 57 3 -46z"></path>
                          <path d="M178 374 l-58 -35 0 -69 0 -70 41 -25 c79 -50 81 -51 145 -13 l59 34 3 71 3 72 -64 35 c-35 20 -66 36 -68 35 -2 0 -30 -16 -61 -35z"></path>
                          <path d="M10 270 c0 -60 3 -110 6 -110 4 0 22 9 40 21 33 20 34 22 34 89 0 67 0 68 -36 89 -19 12 -37 21 -40 21 -2 0 -4 -49 -4 -110z"></path>
                          <path d="M433 358 c-32 -19 -33 -22 -33 -89 0 -67 1 -70 33 -89 17 -11 35 -20 40 -20 4 0 7 50 7 110 0 61 -3 110 -7 109 -5 0 -23 -10 -40 -21z"></path>
                          <path d="M65 145 l-37 -22 58 -33 c33 -18 78 -44 102 -57 l42 -25 0 44 c0 42 -1 43 -64 79 l-64 37 -37 -23z"></path>
                          <path d="M322 132 c-61 -36 -62 -37 -62 -80 0 -44 0 -44 23 -30 12 8 57 34 99 58 43 24 77 44 75 45 -1 1 -18 11 -37 23 l-36 21 -62 -37z"></path>
                        </g>
                    </svg>
                    <span class="text-primary text-10px">Fancy Intense</span>
                </a>

                <!-- Fancy Vivid (0.60) -->
                <a href="#"
                    class="intensity-color-item font-montserrat text-sm leading-5 font-normal flex flex-col items-center text-center border border-gray-300 py-1.5 w-24 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="yellow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 53" class="w-7 h-7 fill-yellow-500/60">
                        <g transform="translate(0,53) scale(0.1,-0.1)">
                          <path d="M127 471 l-98 -58 36 -22 36 -21 65 36 c64 36 64 36 64 80 0 24 -1 44 -2 43 -2 0 -47 -26 -101 -58z"></path>
                          <path d="M262 483 c3 -43 5 -46 63 -79 l61 -33 36 22 36 22 -100 57 -99 57 3 -46z"></path>
                          <path d="M178 374 l-58 -35 0 -69 0 -70 41 -25 c79 -50 81 -51 145 -13 l59 34 3 71 3 72 -64 35 c-35 20 -66 36 -68 35 -2 0 -30 -16 -61 -35z"></path>
                          <path d="M10 270 c0 -60 3 -110 6 -110 4 0 22 9 40 21 33 20 34 22 34 89 0 67 0 68 -36 89 -19 12 -37 21 -40 21 -2 0 -4 -49 -4 -110z"></path>
                          <path d="M433 358 c-32 -19 -33 -22 -33 -89 0 -67 1 -70 33 -89 17 -11 35 -20 40 -20 4 0 7 50 7 110 0 61 -3 110 -7 109 -5 0 -23 -10 -40 -21z"></path>
                          <path d="M65 145 l-37 -22 58 -33 c33 -18 78 -44 102 -57 l42 -25 0 44 c0 42 -1 43 -64 79 l-64 37 -37 -23z"></path>
                          <path d="M322 132 c-61 -36 -62 -37 -62 -80 0 -44 0 -44 23 -30 12 8 57 34 99 58 43 24 77 44 75 45 -1 1 -18 11 -37 23 l-36 21 -62 -37z"></path>
                        </g>
                    </svg>
                    <span class="text-primary text-10px">Fancy Vivid</span>
                </a>

                <!-- Fancy Deep (0.80) -->
                <a href="#"
                    class="intensity-color-item font-montserrat text-sm leading-5 font-normal flex flex-col items-center text-center border border-gray-300 py-1.5 w-24 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="yellow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 53" class="w-7 h-7 fill-yellow-500/80">
                        <g transform="translate(0,53) scale(0.1,-0.1)">
                          <path d="M127 471 l-98 -58 36 -22 36 -21 65 36 c64 36 64 36 64 80 0 24 -1 44 -2 43 -2 0 -47 -26 -101 -58z"></path>
                          <path d="M262 483 c3 -43 5 -46 63 -79 l61 -33 36 22 36 22 -100 57 -99 57 3 -46z"></path>
                          <path d="M178 374 l-58 -35 0 -69 0 -70 41 -25 c79 -50 81 -51 145 -13 l59 34 3 71 3 72 -64 35 c-35 20 -66 36 -68 35 -2 0 -30 -16 -61 -35z"></path>
                          <path d="M10 270 c0 -60 3 -110 6 -110 4 0 22 9 40 21 33 20 34 22 34 89 0 67 0 68 -36 89 -19 12 -37 21 -40 21 -2 0 -4 -49 -4 -110z"></path>
                          <path d="M433 358 c-32 -19 -33 -22 -33 -89 0 -67 1 -70 33 -89 17 -11 35 -20 40 -20 4 0 7 50 7 110 0 61 -3 110 -7 109 -5 0 -23 -10 -40 -21z"></path>
                          <path d="M65 145 l-37 -22 58 -33 c33 -18 78 -44 102 -57 l42 -25 0 44 c0 42 -1 43 -64 79 l-64 37 -37 -23z"></path>
                          <path d="M322 132 c-61 -36 -62 -37 -62 -80 0 -44 0 -44 23 -30 12 8 57 34 99 58 43 24 77 44 75 45 -1 1 -18 11 -37 23 l-36 21 -62 -37z"></path>
                        </g>
                    </svg>
                    <span class="text-primary text-10px">Fancy Deep</span>
                </a>

                <!-- Fancy Dark (100) -->
                <a href="#"
                    class="intensity-color-item font-montserrat text-sm leading-5 font-normal flex flex-col items-center text-center border border-gray-300 py-1.5 w-24 rounded-md hover:border-primary hover:text-primary transition"
                    data-color="yellow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 53" class="w-7 h-7 fill-yellow-500">
                        <g transform="translate(0,53) scale(0.1,-0.1)">
                          <path d="M127 471 l-98 -58 36 -22 36 -21 65 36 c64 36 64 36 64 80 0 24 -1 44 -2 43 -2 0 -47 -26 -101 -58z"></path>
                          <path d="M262 483 c3 -43 5 -46 63 -79 l61 -33 36 22 36 22 -100 57 -99 57 3 -46z"></path>
                          <path d="M178 374 l-58 -35 0 -69 0 -70 41 -25 c79 -50 81 -51 145 -13 l59 34 3 71 3 72 -64 35 c-35 20 -66 36 -68 35 -2 0 -30 -16 -61 -35z"></path>
                          <path d="M10 270 c0 -60 3 -110 6 -110 4 0 22 9 40 21 33 20 34 22 34 89 0 67 0 68 -36 89 -19 12 -37 21 -40 21 -2 0 -4 -49 -4 -110z"></path>
                          <path d="M433 358 c-32 -19 -33 -22 -33 -89 0 -67 1 -70 33 -89 17 -11 35 -20 40 -20 4 0 7 50 7 110 0 61 -3 110 -7 109 -5 0 -23 -10 -40 -21z"></path>
                          <path d="M65 145 l-37 -22 58 -33 c33 -18 78 -44 102 -57 l42 -25 0 44 c0 42 -1 43 -64 79 l-64 37 -37 -23z"></path>
                          <path d="M322 132 c-61 -36 -62 -37 -62 -80 0 -44 0 -44 23 -30 12 8 57 34 99 58 43 24 77 44 75 45 -1 1 -18 11 -37 23 l-36 21 -62 -37z"></path>
                        </g>
                    </svg>
                    <span class="text-primary text-10px">Fancy Dark</span>
                </a>
                
            </div>
        </div>
    </div>
    {{-- End Intensity Color --}}

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
                    <a href="{{ route('inventory', ['shape' => 'asscher']) }}"
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
                    <a href="{{ route('inventory', ['shape' => 'oval']) }}"
                        class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center hover:text-dark-blue group text-center mr-2">
                        <img src="{{ asset('Shape/oval.svg') }}" width="25" height="25" alt="Oval Shape">
                    </a>

                    <!-- Emerald -->
                    <a href="{{ route('inventory', ['shape' => 'emerald']) }}"
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
                </div>
                <div class="flex">
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
                    <a href="{{ route('inventory', ['shape' => '']) }}"
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
            <div class="range_price_container">
                <div class="form_price_control">
                    <div class="form_price_control_container">
                        <input class="form_price_control_container__carat__input small-input" type="number"
                            id="fromPriceInput" value="100" min="100" max="1000000" step="1" />
                    </div>
                    <div class="form_price_control_container">
                        <input class="form_price_control_container__carat__input small-input" type="number" id="toPriceInput"
                            value="1000000" min="100" max="1000000" step="1" />
                    </div>
                </div>
                <div class="sliders_price_control">
                    <input id="fromPriceSlider" type="range" value="100" min="100" max="1000000" />
                    <input id="toPriceSlider" type="range" value="1000000" min="100" max="1000000" />
                </div>
                <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
                    <span>100</span>
                    <span>1000000</span>
                </div>
            </div>
        </div>
        <style>
            .range_price_container {
                display: flex;
                flex-direction: column;
                width: 80%;
                margin: 5% auto;
            }

            .sliders_price_control {
                position: relative;
                min-height: 35px;
                display: flex;
                align-items: center;
            }

            .form_price_control {
                display: flex;
                justify-content: space-between;
                font-size: 24px;
                color: #635a5a;
            }

            .small-input {
                width: 80px; /* Adjust the width as needed */
                font-size: 14px; /* Optional: Adjust font size */
            }

            input[type="range"]#fromPriceSlider::-webkit-slider-thumb,
            input[type="range"]#toPriceSlider::-webkit-slider-thumb {
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

            input[type="range"]#fromPriceSlider::-webkit-slider-thumb:active,
            input[type="range"]#toPriceSlider::-webkit-slider-thumb:active {
                box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                -webkit-box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
            }

            input[type="number"]#rangeInput,
            input[type="number"]#rangeInput {
                color: #8a8383;
                width: 100%;
                font-size: 13px;
                border: 1px solid #c6c6c6;
                border-radius: 4px;
                padding: 4px;
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
            // Controls the slider using from Input
            function controlFromInput(fromPriceSlider, fromPriceInput, toPriceInput, controlSlider) {
                const [from, to] = getParsed(fromPriceInput, toPriceInput);
                fromPriceSlider.value = from;
                fillSlider(fromPriceSlider, toPriceSlider, "#C6C6C6", "#733D80", controlSlider); // <-- Dynamic Color Update to Purple
                if (from > to) {
                    fromPriceSlider.value = to;
                    fromPriceInput.value = to;
                } else {
                    fromPriceSlider.value = from;
                }
            }

            // Controls the slider using to Input
            function controlToInput(toPriceSlider, fromPriceInput, toPriceInput, controlSlider) {
                const [from, to] = getParsed(fromPriceInput, toPriceInput);
                toPriceSlider.value = to;
                fillSlider(fromPriceSlider, toPriceSlider, "#C6C6C6", "#733D80", controlSlider); // <-- Dynamic Color Update to Purple
                setToggleAccessible(toPriceInput);
                if (from <= to) {
                    toPriceSlider.value = to;
                    toPriceInput.value = to;
                } else {
                    toPriceInput.value = from;
                }
            }

            // Sliding event of the From slider
            function controlFromSlider(fromPriceSlider, toPriceSlider, fromPriceInput) {
                const [from, to] = getParsed(fromPriceSlider, toPriceSlider);
                fillSlider(fromPriceSlider, toPriceSlider, "#C6C6C6", "#733D80", toPriceSlider); // <-- Dynamic Color Update to Purple
                fromPriceInput.value = from;
                if (from > to) {
                    fromPriceInput.value = to;
                    toPriceInput.value = from;
                }
            }

            // Sliding event of the To slider
            function controlToSlider(fromPriceSlider, toPriceSlider, toPriceInput) {
                const [from, to] = getParsed(fromPriceSlider, toPriceSlider);
                fillSlider(fromPriceSlider, toPriceSlider, "#C6C6C6", "#733D80", toPriceSlider); // <-- Dynamic Color Update to Purple
                setToggleAccessible(toPriceInput);
                toPriceSlider.value = to;
                toPriceInput.value = to;
                if (from > to) {
                    fromPriceInput.value = to;
                    toPriceInput.value = from;
                }
            }

            // Parsing values of the Inputs with 2 decimal places
            function getParsed(currentFrom, currentTo) {
                const from = parseFloat(currentFrom.value).toFixed(2); // <-- Precision to 2 decimal places
                const to = parseFloat(currentTo.value).toFixed(2);     // <-- Precision to 2 decimal places
                return [parseFloat(from), parseFloat(to)];
            }

            // Changing and Filling the color in the selected part
            function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
                // Update the sliderColor to the new primary color
                const newSliderColor = "#733D80"; // New primary color to Purple
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
                    ${newSliderColor} 0%,
                    ${newSliderColor} ${(fromPosition / rangeDistance) * 100}%,
                    ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
                    ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
                    ${newSliderColor} ${(toPosition / rangeDistance) * 100}%, 
                    ${newSliderColor} 100%)`; // <-- Updates color fill dynamically
            }

            // Ensures accessibility for toggles
            function setToggleAccessible(currentTarget) {
                const toPriceSlider = document.querySelector("#toPriceSlider");
                if (Number(currentTarget.value) <= 0) {
                    toPriceSlider.style.zIndex = 4;
                } else {
                    toPriceSlider.style.zIndex = 4;
                }
            }

            // Element References
            const fromPriceSlider = document.querySelector("#fromPriceSlider");
            const toPriceSlider = document.querySelector("#toPriceSlider");
            const fromPriceInput = document.querySelector("#fromPriceInput");
            const toPriceInput = document.querySelector("#toPriceInput");

            // Set step to 0.01 for finer control
            fromPriceSlider.step = "0.01";
            toPriceSlider.step = "0.01";
            fromPriceInput.step = "0.01";
            toPriceInput.step = "0.01";

            // Initial slider fill and setup
            fillSlider(fromPriceSlider, toPriceSlider, "#C6C6C6", "#733D80", toPriceSlider); // <-- Initial color setup to Purple
            setToggleAccessible(toPriceSlider);

            // Event Listeners for Sliders and Inputs
            fromPriceSlider.oninput = () => controlFromSlider(fromPriceSlider, toPriceSlider, fromPriceInput);
            toPriceSlider.oninput = () => controlToSlider(fromPriceSlider, toPriceSlider, toPriceInput);
            fromPriceInput.oninput = () => {
                controlFromInput(fromPriceSlider, fromPriceInput, toPriceInput, toPriceSlider);
                fillSlider(fromPriceSlider, toPriceSlider, "#C6C6C6", "#733D80", toPriceSlider); // <-- Instant color update to Purple
            };
            toPriceInput.oninput = () => {
                controlToInput(toPriceSlider, fromPriceInput, toPriceInput, toPriceSlider);
                fillSlider(fromPriceSlider, toPriceSlider, "#C6C6C6", "#733D80", toPriceSlider); // <-- Instant color update to Purple
            };
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
                fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", controlSlider); // <-- Dynamic Color Update to Purple
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
                fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", controlSlider); // <-- Dynamic Color Update to Purple
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
                fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", toCaratSlider); // <-- Dynamic Color Update to Purple
                fromCaratInput.value = from;
                if (from > to) {
                    fromCaratInput.value = to;
                    toCaratInput.value = from;
                }
            }

            // Sliding event of the To slider
            function controlToSlider(fromCaratSlider, toCaratSlider, toCaratInput) {
                const [from, to] = getParsed(fromCaratSlider, toCaratSlider);
                fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", toCaratSlider); // <-- Dynamic Color Update to Purple
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
                const to = parseFloat(currentTo.value).toFixed(2);     // <-- Precision to 2 decimal places
                return [parseFloat(from), parseFloat(to)];
            }

            // Changing and Filling the color in the selected part
            function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
                // Update the sliderColor to the new primary color
                const newSliderColor = "#733D80"; // New primary color to Purple
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
                    ${newSliderColor} 0%,
                    ${newSliderColor} ${(fromPosition / rangeDistance) * 100}%,
                    ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
                    ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
                    ${newSliderColor} ${(toPosition / rangeDistance) * 100}%, 
                    ${newSliderColor} 100%)`; // <-- Updates color fill dynamically
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
            fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", toCaratSlider); // <-- Initial color setup to Purple
            setToggleAccessible(toCaratSlider);

            // Event Listeners for Sliders and Inputs
            fromCaratSlider.oninput = () => controlFromSlider(fromCaratSlider, toCaratSlider, fromCaratInput);
            toCaratSlider.oninput = () => controlToSlider(fromCaratSlider, toCaratSlider, toCaratInput);
            fromCaratInput.oninput = () => {
                controlFromInput(fromCaratSlider, fromCaratInput, toCaratInput, toCaratSlider);
                fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", toCaratSlider); // <-- Instant color update to Purple
            };
            toCaratInput.oninput = () => {
                controlToInput(toCaratSlider, fromCaratInput, toCaratInput, toCaratSlider);
                fillSlider(fromCaratSlider, toCaratSlider, "#C6C6C6", "#733D80", toCaratSlider); // <-- Instant color update to Purple
            };
        </script>
        <!-- End Carat Slider -->

        <!-- Cut Slider -->
        <div class="flex items-center">
            <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Cut</h5>
            <div class="range_cut_container">
                <div class="sliders_cut_control">
                    <input id="fromCutSlider" type="range" value="0" min="0" max="4" />
                    <input id="toCutSlider" type="range" value="4" min="0" max="4" />
                </div>
                <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
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

            input[type="range"]#fromCutSlider::-webkit-slider-thumb:hover,
            input[type="range"]#toCutSlider::-webkit-slider-thumb:hover {
                background: #f7f7f7;
            }

            input[type="range"]#fromCutSlider::-webkit-slider-thumb:active,
            input[type="range"]#toCutSlider::-webkit-slider-thumb:active {
                box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                -webkit-box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
            }

            input[type="range"]#fromCutSlider,
            input[type="range"]#toCutSlider {
                -webkit-appearance: none;
                appearance: none;
                height: 4px;
                width: 100%;
                position: absolute;
                background-color: #c6c6c6;
                pointer-events: all;
                border-radius: 8px;
            }

            #toCutSlider {
                height: 0;
                z-index: 4;
            }
        </style>
        <script>
            // Sliding event of the From slider
            function controlFromSlider(fromCutSlider, toCutSlider) {
                const from = fromCutSlider.value;
                const to = toCutSlider.value;
                fillSlider(fromCutSlider, toCutSlider, "#C6C6C6", "#733D80", toCutSlider); // <-- Dynamic Color Update to Purple
                if (from > to) {
                    toCutSlider.value = from;
                }
            }

            // Sliding event of the To slider
            function controlToSlider(fromCutSlider, toCutSlider) {
                const from = fromCutSlider.value;
                const to = toCutSlider.value;
                fillSlider(fromCutSlider, toCutSlider, "#C6C6C6", "#733D80", toCutSlider); // <-- Dynamic Color Update to Purple
                if (from > to) {
                    fromCutSlider.value = to;
                }
            }

            // Changing and Filling the color in the selected part
            function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
                const newSliderColor = "#800080"; // New primary color to Purple
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
                    ${newSliderColor} 0%,
                    ${newSliderColor} ${(fromPosition / rangeDistance) * 100}%,
                    ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
                    ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
                    ${newSliderColor} ${(toPosition / rangeDistance) * 100}%, 
                    ${newSliderColor} 100%)`; // <-- Updates color fill dynamically
            }

            // Element References
            const fromCutSlider = document.querySelector("#fromCutSlider");
            const toCutSlider = document.querySelector("#toCutSlider");

            // Initial slider fill and setup
            fillSlider(fromCutSlider, toCutSlider, "#C6C6C6", "#733D80", toCutSlider); // <-- Initial color setup to Purple

            // Event Listeners for Sliders
            fromCutSlider.oninput = () => controlFromSlider(fromCutSlider, toCutSlider);
            toCutSlider.oninput = () => controlToSlider(fromCutSlider, toCutSlider);
        </script>
        <!-- End Cut Slider -->

        <!-- Color Slider -->
        <div class="flex items-center">
            <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Color</h5>
            <div class="range_color_container">
                <div class="sliders_color_control">
                    <input id="fromColorSlider" type="range" value="0" min="0" max="10" />
                    <input id="toColorSlider" type="range" value="10" min="0" max="10" />
                </div>
                <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
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

            input[type="range"]#fromColorSlider::-webkit-slider-thumb,
            input[type="range"]#toColorSlider::-webkit-slider-thumb {
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

            input[type="range"]#fromColorSlider::-moz-range-thumb,
            input[type="range"]#toColorSlider::-moz-range-thumb {
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

            input[type="range"]#fromColorSlider::-webkit-slider-thumb:hover,
            input[type="range"]#toColorSlider::-webkit-slider-thumb:hover {
                background: #f7f7f7;
            }

            input[type="range"]#fromColorSlider::-webkit-slider-thumb:active,
            input[type="range"]#toColorSlider::-webkit-slider-thumb:active {
                box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                -webkit-box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
            }

            input[type="range"]#fromColorSlider,
            input[type="range"]#toColorSlider {
                -webkit-appearance: none;
                appearance: none;
                height: 4px;
                width: 100%;
                position: absolute;
                background-color: #c6c6c6;
                pointer-events: all;
                border-radius: 8px;
            }

            #toColorSlider {
                height: 0;
                z-index: 4;
            }
        </style>
        <script>
            // Sliding event of the From slider
            function controlFromSlider(fromColorSlider, toColorSlider) {
                const from = fromColorSlider.value;
                const to = toColorSlider.value;
                fillSlider(fromColorSlider, toColorSlider, "#C6C6C6", "#733D80", toColorSlider); // <-- Dynamic Color Update to Purple
                if (from > to) {
                    toColorSlider.value = from;
                }
            }

            // Sliding event of the To slider
            function controlToSlider(fromColorSlider, toColorSlider) {
                const from = fromColorSlider.value;
                const to = toColorSlider.value;
                fillSlider(fromColorSlider, toColorSlider, "#C6C6C6", "#733D80", toColorSlider); // <-- Dynamic Color Update to Purple
                if (from > to) {
                    fromColorSlider.value = to;
                }
            }

            // Changing and Filling the color in the selected part
            function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
                const newSliderColor = "#800080"; // New primary color to Purple
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
                    ${newSliderColor} 0%,
                    ${newSliderColor} ${(fromPosition / rangeDistance) * 100}%,
                    ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
                    ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
                    ${newSliderColor} ${(toPosition / rangeDistance) * 100}%, 
                    ${newSliderColor} 100%)`; // <-- Updates color fill dynamically
            }

            // Element References
            const fromColorSlider = document.querySelector("#fromColorSlider");
            const toColorSlider = document.querySelector("#toColorSlider");

            // Initial slider fill and setup
            fillSlider(fromColorSlider, toColorSlider, "#C6C6C6", "#733D80", toColorSlider); // <-- Initial color setup to Purple

            // Event Listeners for Sliders
            fromColorSlider.oninput = () => controlFromSlider(fromColorSlider, toColorSlider);
            toColorSlider.oninput = () => controlToSlider(fromColorSlider, toColorSlider);
        </script>   
        <!-- End Color Slider -->

        <!-- Clarity Slider -->
        <div class="flex items-center">
            <h5 class="text-sm text-primary font-montserrat font-semibold mr-3">Clarity</h5>
            <div class="range_clarity_container">
                <div class="sliders_clarity_control">
                    <input id="fromClaritySlider" type="range" value="0" min="0" max="10" />
                    <input id="toClaritySlider" type="range" value="10" min="0" max="10" />
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
                    <span>F</span>
                    <span>E</span>
                    <span>D</span>
                </div>
            </div>
        </div>
        <style>
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

            input[type="range"]#fromClaritySlider::-webkit-slider-thumb:hover,
            input[type="range"]#toClaritySlider::-webkit-slider-thumb:hover {
                background: #f7f7f7;
            }

            input[type="range"]#fromClaritySlider::-webkit-slider-thumb:active,
            input[type="range"]#toClaritySlider::-webkit-slider-thumb:active {
                box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
                -webkit-box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
            }

            input[type="range"]#fromClaritySlider,
            input[type="range"]#toClaritySlider {
                -webkit-appearance: none;
                appearance: none;
                height: 4px;
                width: 100%;
                position: absolute;
                background-color: #c6c6c6;
                pointer-events: all;
                border-radius: 8px;
            }

            #toClaritySlider {
                height: 0;
                z-index: 4;
            }
        </style>
        <script>
            // Sliding event of the From slider
            function controlFromSlider(fromClaritySlider, toClaritySlider) {
                const from = fromClaritySlider.value;
                const to = toClaritySlider.value;
                fillSlider(fromClaritySlider, toClaritySlider, "#C6C6C6", "#733D80", toClaritySlider); // <-- Dynamic Color Update to Purple
                if (from > to) {
                    toClaritySlider.value = from;
                }
            }

            // Sliding event of the To slider
            function controlToSlider(fromClaritySlider, toClaritySlider) {
                const from = fromClaritySlider.value;
                const to = toClaritySlider.value;
                fillSlider(fromClaritySlider, toClaritySlider, "#C6C6C6", "#733D80", toClaritySlider); // <-- Dynamic Color Update to Purple
                if (from > to) {
                    fromClaritySlider.value = to;
                }
            }

            // Changing and Filling the color in the selected part
            function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
                const newSliderColor = "#800080"; // New primary color to Purple
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
                    ${newSliderColor} 0%,
                    ${newSliderColor} ${(fromPosition / rangeDistance) * 100}%,
                    ${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
                    ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
                    ${newSliderColor} ${(toPosition / rangeDistance) * 100}%, 
                    ${newSliderColor} 100%)`; // <-- Updates color fill dynamically
            }

            // Element References
            const fromClaritySlider = document.querySelector("#fromClaritySlider");
            const toClaritySlider = document.querySelector("#toClaritySlider");

            // Initial slider fill and setup
            fillSlider(fromClaritySlider, toClaritySlider, "#C6C6C6", "#733D80", toClaritySlider); // <-- Initial color setup to Purple

            // Event Listeners for Sliders
            fromClaritySlider.oninput = () => controlFromSlider(fromClaritySlider, toClaritySlider);
            toClaritySlider.oninput = () => controlToSlider(fromClaritySlider, toClaritySlider);
        </script> 
        <!-- End Clarity Slider -->
    </div>
    <!-- End Shape Svg , Price Range Slider , Carat Slider , Color Slider , Clarity Slider -->

    <!-- Start Advanced Options -->
    <div class="flex flex-col lg:flex-row items-center gap-3 px-10 py-5">
        <h3 class="text-sm text-primary font-montserrat font-semibold">Advanced Options</h3>
        <div class="flex flex-col lg:flex-row justify-between items-center w-5/6">
            <!-- Start Certificate Dropdown , Method Dropdown , Table Dropdown -->
            <div class="flex flex-col lg:flex-row items-center gap-4">
                <!-- Certificate Dropdown -->
                <div id="styleDropdownIcon"
                    class="relative flex items-center border border-gray-300 rounded-full py-2 px-4 cursor-pointer">
                    <label class="block text-sm text-gray-500 font-montserrat mr-3 cursor-pointer">Certificate</label>
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
                    <svg id="upArrow" class="hidden" height="8" width="8" version="1.1" id="Layer_1"
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
                    <label class="block text-sm text-gray-500 font-montserrat mr-3 cursor-pointer">Method</label>
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
                    <svg id="methodUpArrow" class="hidden" height="8" width="8" version="1.1" id="Layer_1"
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
                    <label class="block text-sm text-gray-500 font-montserrat mr-3 cursor-pointer">Table (%)</label>
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
                    <svg id="tableUpArrow" class="hidden" height="8" width="8" version="1.1" id="Layer_1"
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
                    <label class="block text-sm text-gray-500 font-montserrat mr-3 cursor-pointer">Depth (%)</label>
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
                    <svg id="depthUpArrow" class="hidden" height="8" width="8" version="1.1" id="Layer_1"
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
                    <label class="block text-sm text-gray-500 font-montserrat mr-3 cursor-pointer">L/W Ratio</label>
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
                    <svg id="lwUpArrow" class="hidden" height="8" width="8" version="1.1" id="Layer_1"
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
                <a href="/inventory" class="text-xs text-white bg-primary border border-gray-300 hover:bg-primary p-2 rounded-md font-montserrat transition-all duration-300">WHITE DIAMONDS</a>
                <a href="/fancy-color-diamonds" class="text-xs text-primary hover:text-white border border-gray-500 hover:bg-primary p-2 rounded-md font-montserrat transition-all duration-300">FANCY COLOR DIAMONDS</a>
            </div>
            <!-- End Type Dropdown -->
        </div>
    </div>
    <!-- End Advanced Options -->

    <!-- Start Search Box And Clear Filters Button -->
    <div class="flex justify-between items-center md:px-10 py-5">
        <!-- Left side search box with icon -->
        <div class="relative flex items-center w-full md:w-96">
            <input type="text" placeholder="Search by SKU/GIA/IGI/GCAL number" class="w-96 px-4 py-2.5 border border-gray-300 font-montserrat text-sm placeholder:text-xs placeholder:font-medium focus:outline-none focus:border-black">
            <div class="absolute right-0 h-full flex items-center">
                <button class="h-full px-4 bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Right side clear filter button -->
        <button class="hidden md:flex items-center gap-2 text-sm font-montserrat text-gray-600 hover:text-primary">
            <span>Clear Filters</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="py-4 text-left">
                        <div class="flex items-center gap-1 text-gold cursor-pointer" onclick="sortTable(1)">
                            <span class="text-sm font-montserrat font-semibold">Carat</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="py-4 text-left">
                        <div class="flex items-center gap-1 text-gold cursor-pointer" onclick="sortTable(2)">
                            <span class="text-sm font-montserrat font-semibold">Cut</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="py-4 text-left">
                        <div class="flex items-center gap-1 text-gold cursor-pointer" onclick="sortTable(3)">
                            <span class="text-sm font-montserrat font-semibold">Color</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="py-4 text-left">
                        <div class="flex items-center gap-1 text-gold cursor-pointer" onclick="sortTable(4)">
                            <span class="text-sm font-montserrat font-semibold">Clarity</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="py-4 text-left">
                        <div class="flex items-center gap-1 text-gold cursor-pointer" onclick="sortTable(5)">
                            <span class="text-sm font-montserrat font-semibold">Price (USD)</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="py-4"></th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($diamonds as $diamond) --}}
                {{-- <tr class="border-b cursor-pointer" onclick="toggleDetails({{ $diamond->id }})"> --}}
                <tr class="border-b cursor-pointer" onclick="toggleDetails(1)">
                    <td class="py-4 flex flex-row gap-2 items-center text-sm font-montserrat">
                        <img src="/Shape/Round.svg" width="25" height="25" class="group-hover:text-dark-blue mb-2" alt="Round Shape">
                        <span class="pb-1 font-medium">Round</span>
                        <span class="text-xs text-red-600 uppercase pb-1">Sale</span>
                    </td>
                    <td class="py-4 text-sm font-montserrat">0.25</td>
                    <td class="py-4 text-sm font-montserrat">Good</td>
                    <td class="py-4 text-sm font-montserrat">G</td>
                    <td class="py-4 text-sm font-montserrat">SI2</td>
                    <td class="py-4 text-sm font-montserrat">

                        <span class="text-gray-600 line-through text-xs">$199</span>
                        <span class="text-red-600">$119</span>
                    </td>
                    <td class="py-4">
                        <button class="px-4 py-2 text-sm font-montserrat text-gold bg-primary rounded hover:bg-white border border-primary hover:text-primary hover:border-primary transition-all duration-300">View More</button>
                    </td>
                </tr>

                {{-- <tr id="details-{{ $diamond->id }}" class="hidden transition-all duration-300"> --}}
                <tr id="details-1" class="content hidden transition-all duration-200 ease-in-out max-h-0 overflow-hidden opacity-0">
                    <td colspan="7" class="relative">
                        <button onclick="toggleDetails(1)" class="absolute right-4 top-4 text-gray-500 hover:text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        <div class="grid grid-cols-2 gap-8 my-10">
                            <!-- Left Side -->
                            <div class="flex flex-col items-center gap-3">
                                <div class="flex items-center justify-center">
                                    <img src="/Shape/Round.svg" class="w-40" alt="Round Shape">
                                </div>

                                <div class="text-center">
                                    <p class="text-2xl font-montserrat font-semibold text-gray-800">Round</p>
                                    <div class="mt-1">
                                        <span class="text-gray-600 line-through text-lg font-montserrat font-medium">$199</span>
                                        <span class="text-xl ml-1 font-montserrat font-semibold">$119</span>
                                    </div>
                                </div>

                                <div class="flex gap-4 justify-center mt-2">
                                    <form action="{{ route('cart.add') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="1">
                                        <input type="hidden" name="images" value="/Shape/Round.svg">
                                        <input type="hidden" name="name" value="Round">
                                        <input type="hidden" name="original_price" value="$119">
                                        <input type="hidden" name="mrp" value="$199">
                                        <input type="hidden" name="quantity" value="1">
                                        <button class="px-6 py-2.5 bg-primary text-sm text-gold rounded-sm hover:bg-white hover:text-primary transition-colors duration-300 flex items-center font-montserrat border border-primary gap-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                        </svg>
                                            Add to Bag
                                        </button>
                                    </form>
                                    {{-- @if($diamond->video_url) --}}
                                    <a href="#" target="_blank">
                                    <button class="px-6 py-2.5 text-sm border border-primary text-primary rounded-sm hover:bg-primary hover:text-gold hover:border-primary transition-colors duration-300 flex items-center font-montserrat gap-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Play Video
                                    </button>
                                    </a>
                                    {{-- @endif --}}
                                </div>

                                <a href="#" class="text-primary underline-offset-2 underline text-center mt-1 text-xs font-montserrat font-bold">
                                    View Diamond Certificate
                                </a>

                                <span class="text-xs text-gray-500 mt-1 font-montserrat ">Diamond photo is for visual purposes only. Play Video for a real diamond.</span>
                            </div>

                            <!-- Right Side -->
                            <div>
                                <h3 class="text-lg text-primary font-montserrat font-semibold uppercase mb-4">Diamond Details</h3>
                                <table class="w-full border-collapse">
                                    <tbody>
                                        <tr class="border-b">
                                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Carat</td>
                                            <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">0.25</td>
                                        </tr>
                                        <tr class="border-b">
                                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Size (mm)</td>
                                            <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">0.25 mm</td>
                                        </tr>
                                        <tr class="border-b">
                                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Cut</td>
                                            <td class="py-2">
                                                <div class="flex flex-col">
                                                    <span class="font-montserrat font-semibold text-gray-600">Good</span>
                                                    <span class="font-montserrat text-sm text-gray-500">Good</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-b">
                                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Color</td>
                                            <td class="py-2">
                                                <div class="flex flex-col">
                                                    <span class="font-montserrat font-semibold text-gray-600">G</span>
                                                    <span class="font-montserrat text-sm text-gray-500">G</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-b">
                                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Clarity</td>
                                            <td class="py-2">
                                                <div class="flex flex-col">
                                                    <span class="font-montserrat font-semibold text-gray-600">SI2</span>
                                                    <span class="font-montserrat text-sm text-gray-500">SI2</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-b">
                                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">In The Box</td>
                                            <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">Diamond, IGI Certificate.</td>
                                        </tr>
                                        <tr class="border-b">
                                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Table & Depth</td>
                                            <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">58% & 62%</td>
                                        </tr>
                                        <tr class="border-b">
                                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">L/W Ratio</td>
                                            <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">1.00</td>
                                        </tr>
                                        <tr class="border-b">
                                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">SKU</td>
                                            <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">1234567890</td>
                                        </tr>
                                        <tr>
                                            <td class="font-montserrat text-base text-gray-500 uppercase w-40 py-2">Growth Type</td>
                                            <td class="font-montserrat font-semibold text-gray-600 uppercase py-2">HPHT</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
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

{{-- Start Color Selection --}}
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
{{-- End Color Selection --}}

{{-- Start Color Selection --}}
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
{{-- End Color Selection --}}

{{-- 
    <a href="/learn-why-they-are-unmatched" class="text-gold hover:text-white flex items-center font-montserrat text-12px font-semibold leading-[30px] tracking-wide transition-all" style="color: rgb(240,186,64);">LEARN WHY THEY ARE UNMATCHED</a>

<div x-data="{ isOpen: false }">
    <!-- Trigger Link -->
    <button @click="isOpen = true" class="text-blue-600 hover:text-blue-800">
        Open Drawer
    </button>

    <!-- Drawer Overlay -->
    <div x-show="isOpen" 
         class="fixed inset-0 bg-black bg-opacity-50 z-40 transition-opacity"
         @click="isOpen = false">
    </div>

    <!-- Drawer Content -->
    <div x-show="isOpen" 
         x-transition:enter="transform transition-transform ease-in-out duration-300"
         x-transition:enter-start="translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transform transition-transform ease-in-out duration-300"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full"
         class="fixed right-0 top-0 h-full w-full sm:w-96 bg-white z-50 shadow-lg">
        
        <!-- Drawer Header with Close Button -->
        <div class="p-4 border-b flex justify-between items-center">
            <h2 class="text-xl font-semibold">Drawer Title</h2>
            <button @click="isOpen = false; $dispatch('drawer-closed')" class="p-2 hover:bg-gray-100 rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div class="p-4">
            <p><x-drawer /></p>
        </div>

    </div>
</div> --}}
@endsection