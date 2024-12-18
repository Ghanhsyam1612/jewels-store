<header class="bg-primary font-montserrat">
    <!-- Top bar -->
    <div class="bg-black text-white text-xs py-1 px-4">
        <div class="container mx-auto text-center">
            INTERNATIONAL SHIPPING & FREE RETURNS (USA) &nbsp; | &nbsp; WE PRICE MATCH &nbsp; | &nbsp; 100% MONEY BACK GUARANTEE
        </div>
    </div>

    <!-- Main header -->
    <div id="sticky-header" class="mx-auto flex items-center justify-between py-4 px-6 bg-primary max-w-screen-3xl">
        <!-- Hamburger menu for mobile -->
        <button id="hamburger-menu" class="lg:hidden text-gold">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
       
        <!-- Logo -->
        <a href="/" class="flex-shrink-0">
            <!-- <img src="/path-to-your-diamond-logo.svg" alt="Diamond Logo" class="h-8"> -->
            <img src="{{ asset('Shape/diamond-logo.svg') }}" width="44" height="30" alt="Diamond Logo">
        </a>

        <!-- Navigation for desktop -->
        <nav class="hidden lg:flex space-x-6">
            {{-- Diamonds --}}
            <div class="relative group">
                <a href="#" class="text-gold hover:text-white flex items-center font-montserrat text-12px font-semibold leading-[30px] tracking-wide transition-all">DIAMONDS
                    <span class="ml-1">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
                <!-- Dropdown menu -->
                <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10">
                    <div class="py-2">
                        <!-- Natural Diamond -->
                        <a href="#" class="block px-4 py-2 text-12px leading-[19px] font-sm text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200">Natural Diamond</a>
                        
                        <!-- Lab Diamond with submenu -->
                        <div class="group/lab relative">
                            <a href="#" class="block px-4 py-2 text-12px leading-[19px] font-sm text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200">Lab Diamond</a>
                            
                            <!-- Lab Diamond submenu -->
                            <div class="absolute left-full top-0 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover/lab:opacity-100 group-hover/lab:visible transition-all duration-300">
                                <div class="py-2">
                                    <a href="{{ route('inventory') }}" class="block px-4 py-2 text-12px leading-[19px] font-sm text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200">Solitaire Diamonds</a>
                                    <a href="{{ route('calibrated') }}" class="block px-4 py-2 text-12px leading-[19px] font-sm text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200">Calibrated Diamonds</a>
                                    <a href="{{ route('fancy-shapes-diamonds') }}" class="block px-4 py-2 text-12px leading-[19px] font-sm text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200">Fancy Shapes Diamonds</a>
                                    <a href="/fancy-color-diamonds" class="block px-4 py-2 text-12px leading-[19px] font-sm text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200">Fancy Color Diamonds</a>
                                    <a href="{{ route('color-melee-diamonds') }}" class="block px-4 py-2 text-12px leading-[19px] font-sm text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200">Color Melee Diamonds</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Inventory --}}
            <a href="{{ route('inventory')}}" class="text-gold hover:text-white flex items-center font-montserrat text-12px font-semibold leading-[30px] tracking-wide transition-all">INVENTORY</a>
            
            {{-- Engagement Rings --}}
            <div class="relative group">
                <a href="#" class="text-gold hover:text-white flex items-center font-montserrat text-12px font-semibold leading-[30px] tracking-wide transition-all">ENGAGEMENT RINGS
                    <span class="ml-1">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
                <!-- Dropdown menu -->
                <div class="absolute left-52 -translate-x-1/2 transform mt-2 lg:w-[900px] xl:w-[1000px] bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10">
                    <div class="grid grid-cols-3 py-6">
                        <!-- Column 1 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-primary text-12px leading-[19px] mb-2 pl-6">Create Your Diamond Ring</h3>
                            <div class="space-y-2">
                                <a href="{{ route('build-a-ring') }}" class="block text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-6">Start With A Setting</a>
                                <a href="{{ route('bespoke-jewellery') }}" class="block text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-6">Bespoke Jewellery</a>
                                <a href="{{ route('custom-engagement-rings') }}" class="block text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-6">Custom Engagement Ring</a>
                            </div>
                        </div>
                        <!-- Column 2 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-primary text-12px leading-[19px] mb-2 pl-3">Shop By Style</h3>
                            <div class="grid grid-cols-2 gap-2">
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Solitaire
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Halo
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Diamond Band
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Hidden Halo
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Three Stone
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Bezel
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Cluster
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Dainty
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Unique
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Vintage Inspired
                                </a>
                            </div>
                        </div>
                        <!-- Column 3 -->
                        <div>
                            <h3 class="font-semibold text-primary text-12px leading-[19px] mb-2 pl-3">Shop By Shape</h3>
                            <div class="grid grid-cols-2 gap-2">
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Solitaire
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Halo
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Diamond Band
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Hidden Halo
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Three Stone
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Bezel
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Cluster
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Dainty
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Unique
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Vintage Inspired
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Fine Jewellery --}}
            <div class="relative group">
                <a href="#" class="text-gold hover:text-white flex items-center font-montserrat text-12px font-semibold leading-[30px] tracking-wide transition-all">FINE JEWELRY
                    <span class="ml-1">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
                <!-- Dropdown menu -->
                <div class="absolute lg:left-12 xl:left-52 -translate-x-1/2 transform mt-2 lg:w-[900px] xl:w-[1000px] bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10">
                    <div class="grid grid-cols-4 py-6">
                        <!-- Column 1 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-primary text-12px leading-[19px] mb-2 pl-3">Earrings</h3>
                            <div class="space-y-2">
                                <a href="/stud-earrings" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Stud Earrings
                                </a>
                                <a href="/hoops-and-drops" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Hoops and Drops Earrings
                                </a>
                                <a href="halo" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Halo Earrings
                                </a>
                                <a href="cluster" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Cluster Earrings
                                </a>
                            </div>
                        </div>
                        <!-- Column 2 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-primary text-12px leading-[19px] mb-2 pl-3">Wedding Rings</h3>
                            <div class="space-y-2">
                                <a href="/diamond" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Diamond Rings
                                </a>
                                <a href="/anniversary" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Anniversary Rings
                                </a>
                                <a href="/eternity" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Eternity Rings
                                </a>
                                <a href="/stackable" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Stackable Rings
                                </a>
                            </div>
                        </div>
                        <!-- Column 3 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-primary text-12px leading-[19px] mb-2 pl-3">Pendants</h3>
                            <div class="space-y-2">
                                <a href="/solitaire" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Solitaire Pendants
                                </a>
                                <a href="/halo" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Halo Pendants
                                </a>
                                <a href="/diamond-pendants" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Diamond Pendants
                                </a>
                                <a href="/chains" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-semibold transition-all duration-200 py-1 pl-3">
                                    {{-- Diamond SVG --}}
                                    Chains
                                </a>
                            </div>
                        </div>
                        <!-- Column 4 -->
                        <div>
                            <div class="space-y-4">
                                <!-- First Row -->
                                <div>
                                    <h4 class="font-semibold text-primary text-12px leading-[19px] mb-2 pl-3">Bracelets</h4>
                                    <div class="space-y-2">
                                        <a href="/tennis-bracelets" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                            {{-- <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            </svg> --}}
                                            Tennis Bracelets
                                        </a>
                                        <a href="/solitaire-bracelets" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                            {{-- <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            </svg> --}}
                                            Solitaire Bracelets
                                        </a>
                                    </div>
                                </div>
                                <!-- Second Row -->
                                <div>
                                    <h4 class="font-semibold text-primary text-12px leading-[19px] mb-2 pl-3">Necklace</h4>
                                    <div class="space-y-2">
                                        <a href="/diamond-necklaces" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                            {{-- <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            </svg> --}}
                                            Diamond Necklaces
                                        </a>
                                        <a href="/tennis-necklaces" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                            {{-- <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            </svg> --}}
                                            Tennis Necklaces
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Ready To Ship --}}
            <a href="/ready-to-ship" class="text-gold hover:text-white flex items-center font-montserrat text-12px font-semibold leading-[30px] tracking-wide transition-all">READY TO SHIP</a>
            
            {{-- Precious Stones --}}
            <div class="relative group">
                <a href="#" class="text-gold hover:text-white flex items-center font-montserrat text-12px font-semibold leading-[30px] tracking-wide transition-all">PRECIOUS STONES    
                    <span class="ml-1">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
                <!-- Dropdown menu -->
                <div class="absolute lg:-left-40 xl:left-0 -translate-x-1/2 transform mt-2 w-[800px] bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10">
                    <div class="grid grid-cols-3 py-6">
                        <!-- Column 1 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-primary text-12px leading-[19px] mb-2 pl-6">Diamond 4C's</h3>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-6">
                                    Cut
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-6">
                                    Clarity
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-6">
                                    Color
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-6">
                                    Carat
                                </a>
                            </div>
                        </div>
                        <!-- Column 2 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-primary text-12px leading-[19px] mb-2 pl-3">Diamond Guide</h3>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    Diamond Certification
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    Diamond Clarity
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    Diamond Size Chart
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    Diamond Price Calculator
                                </a>
                            </div>
                        </div>
                        <!-- Column 3 -->
                        <div class="">
                            <h3 class="font-semibold text-primary text-12px leading-[19px] mb-2 pl-3">Helpful Guides</h3>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    Tips For Cleaning Lab Grown Diamonds
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    Facts & Misconceptions
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-primary hover:bg-primary hover:text-gold font-medium transition-all duration-200 py-1 pl-3">
                                    Blood Free Diamonds
                                </a>
                            </div>
                        </div>
                        <!-- Column 4 -->
                        {{-- <div>
                            <h3 class="font-semibold text-gray-900 text-12px leading-[19px] mb-2">Ring Collections By Carat</h3>
                            <div class="space-y-4">
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    1 Carat
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    1.25 Carat
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    1.75 Carat
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    2.5 Carat
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    4 Carat
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    5 Carat
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </nav>


        <!-- Mobile menu -->
        <div id="mobile-menu" class="fixed inset-0 bg-primary z-50 hidden">
            <div class="flex justify-end py-3 mx-3">
                <button id="close-menu" class="text-gold">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Main Menu -->
            <nav id="main-menu" class="flex flex-col items-start space-y-6 mt-8 mx-4">
                <button class="menu-item flex justify-between items-center w-full text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="lab-diamonds-menu">
                    <span class="mr-2">LAB DIAMONDS</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </button>
                <a href="{{ route('inventory') }}" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">INVENTORY</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </a>
                <button class="menu-item flex justify-between items-center w-full text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="engagement-rings-menu">
                    <span class="mr-2">ENGAGEMENT RINGS</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </button>
                <button class="menu-item flex justify-between items-center w-full text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="fine-jewelry-menu">
                    <span class="mr-2">FINE JEWELRY</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">READY TO SHIP</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </a>
                <button class="menu-item flex justify-between items-center w-full text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="precious-stones-menu">
                    <span class="mr-2">PRECIOUS STONES</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </button>
            </nav>

            {{-- Start Lab Diamonds Submenu --}}
            <!-- LAB DIAMONDS Submenu -->
            <nav id="lab-diamonds-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <button class="menu-item text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="lab-diamonds-options-menu">
                    <span class="mr-2">Lab Diamonds</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Natural Diamonds</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </a>
            </nav>

            <!-- LAB DIAMONDS Options Submenu -->
            <nav id="lab-diamonds-options-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <a href="{{ route('inventory') }}" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Solitaire Diamonds</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Calibrated Diamons</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Fancy Shape Diamonds</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Fancy Color Diamonds</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Color Melee Diamonds</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </a>
            </nav>
            {{-- End Lab Diamonds Submenu --}}

            {{-- Start Engagement Rings --}}
            <!-- ENGAGEMENT RINGS Submenu -->
            <nav id="engagement-rings-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <button class="menu-item text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="create-diamond-ring-menu">
                    <span class="mr-2">Create Your Diamond Ring</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </button>
                <button class="menu-item text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="shop-by-shape-menu">
                    <span class="mr-2">Shop by Shape</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </button>
                <button class="menu-item text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="shop-by-style-menu">
                    <span class="mr-2">Shop by Style</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </button>
            </nav>

            <!-- Create Your Diamond Ring Submenu -->
            <nav id="create-diamond-ring-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Start with a Setting</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Bespoke Jewellery</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Custom Engagement Ring</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </a>
            </nav>

            <!-- Shop by Shape Submenu -->
            <nav id="shop-by-shape-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Solitaire</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Diamond Band</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Three Stone</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Cluster</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Unique</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Halo</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Hidden Halo</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Bezel</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Dainty</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Vintage Inspired</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
            </nav>

            <!-- Shop by Style Submenu -->
            <nav id="shop-by-style-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Round</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Emerald</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Marquise</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Oval</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Radiant</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Princess</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Asscher</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Cushion</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Pear</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Heart</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
            </nav>
            {{-- End Engagement Rings --}}

            {{-- Start Fine Jewellry --}}
            <!-- FINE JEWELRY Submenu -->
            <nav id="fine-jewelry-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <button class="menu-item text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="earrings-menu">
                    <span class="mr-2">Earrings</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </button>
                <button class="menu-item text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="wedding-rings-menu">
                    <span class="mr-2">Wedding Rings</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </button>
                <button class="menu-item text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="pendants-menu">
                    <span class="mr-2">Pendants</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Chains</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <button class="menu-item text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="bracelets-menu">
                    <span class="mr-2">Bracelets</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </button>
                <button class="menu-item text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="necklaces-menu">
                    <span class="mr-2">Necklaces</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </button>
            </nav>

            <!-- Earrings Submenu -->
            <nav id="earrings-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Stud Earrings</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a> 
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Hoops and Drops Earrings</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Halo Earrings</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Cluster Earrings</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
            </nav>

            <!-- Wedding Rings Submenu -->
            <nav id="wedding-rings-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Diamond Rings</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Anniversary Rings</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Eternity Rings</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Stackable Rings</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
            </nav>

            <!-- Pendants Submenu -->
            <nav id="pendants-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Solitaire Pendants</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Halo Pendants</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Diamonds Pendants</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
            </nav>

            <!-- Bracelets Submenu -->
            <nav id="bracelets-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Tennis Bracelets</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Solitaire Bracelets</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
            </nav>

            <!-- Necklaces Submenu -->
            <nav id="necklaces-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Diamond Necklaces</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Tennis Necklaces</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
            </nav>
            {{-- End Fine Jewellery --}}

            {{-- Start Precious Stones --}}
            <!-- PRECIOUS STONES Submenu -->
            <nav id="precious-stones-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <button class="menu-item text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="diamond-4cs-menu">
                    <span class="mr-2">Diamond 4C's</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </button>
                <button class="menu-item text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="diamond-guide-menu">
                    <span class="mr-2">Diamond Guide</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </button>
                <button class="menu-item text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide" data-target="helpful-guides-menu">
                    <span class="mr-2">Helpful Guides</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </button>
            </nav>

            <!-- Diamond 4C's Submenu -->
            <nav id="diamond-4cs-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Cut</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Clarity</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Color</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Carat</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
            </nav>

            <!-- Diamond Guide Submenu -->
            <nav id="diamond-guide-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Diamond Certification</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                <span class="mr-2">Diamond Clarity</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Diamond Size Chart</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
            </nav>

            <!-- Helpful Guides Submenu -->
            <nav id="helpful-guides-menu" class="hidden flex flex-col items-start space-y-4 mt-8 mx-4">
                <button class="back-button flex flex-row items-center gap-2 text-gold hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <svg class="text-gold w-3 h-3" fill="currentColor" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492 492" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M198.608,246.104L382.664,62.04c5.068-5.056,7.856-11.816,7.856-19.024c0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12 C361.476,2.792,354.712,0,347.504,0s-13.964,2.792-19.028,7.864L109.328,227.008c-5.084,5.08-7.868,11.868-7.848,19.084 c-0.02,7.248,2.76,14.028,7.848,19.112l218.944,218.932c5.064,5.072,11.82,7.864,19.032,7.864c7.208,0,13.964-2.792,19.032-7.864 l16.124-16.12c10.492-10.492,10.492-27.572,0-38.06L198.608,246.104z"></path> </g> </g> </g></svg> 
                    <span class="ml-2">Back</span>
                </button>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Tips For Cleaning Lab Grown Diamonds</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Facts & Misconceptions</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
                <a href="#" class="text-gold flex justify-between items-center w-full hover:text-white font-montserrat text-12px font-semibold leading-[30px] tracking-wide">
                    <span class="mr-2">Blood Free Diamonds</span>
                    {{-- Right Arrow --}}
                    <svg class="text-gold w-4 h-4" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.004 492.004" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12 c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028 c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265 c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"></path> </g> </g> </g></svg></a>
                </a>
            </nav>
            {{-- End Precious Stones --}}
        </div>

        {{-- Start Search, Account, and Cart --}}
        <div class="flex items-center space-x-4">
            {{-- Search --}}
            {{-- <div class="relative">
                <input type="text" placeholder="Search"
                    class="hidden lg:block pl-2 px-10 font-montserrat text-12px py-2 border border-gray-300 rounded-md focus:outline-none placeholder:text-gray-400 placeholder:font-montserrat placeholder:font-medium">
                <svg class="w-6 h-6 lg:hidden text-gold cursor-pointer" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <img src="{{ asset('Shape/search.svg') }}" class="w-4 h-4 hidden lg:block absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer" alt="Diamond Logo">
            </div> --}}

            {{-- Account --}}
            <a href="{{ auth('customer')->check() ? route('account.my-account') : route('account') }}" class="text-gold hover:text-white cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke-width="2" />
                    <circle cx="12" cy="10" r="3" stroke-width="2" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.5 19.5C7 17 9.5 15.5 12 15.5s5 1.5 6.5 4" />
                </svg>
            </a>
            
            {{-- Cart --}}
            <a href="/cart" class="text-gold hover:text-white relative">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <span class="absolute -top-1 -right-1 bg-white text-dark-purple text-xs font-semibold rounded-full h-4 w-4 flex items-center justify-center">
                    {{ count(session('cart', [])) }}
                </span>
            </a>
        </div>
        {{-- End Search, Account, and Cart --}}
        
    </div>
</header>

{{-- Sticky Header --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburgerMenu = document.getElementById('hamburger-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenu = document.getElementById('close-menu');
        const stickyHeader = document.getElementById('sticky-header');
        let headerOffset = stickyHeader.offsetTop;

        hamburgerMenu.addEventListener('click', function() {
            mobileMenu.classList.remove('hidden');
        });

        closeMenu.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenu.contains(event.target) && !hamburgerMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Handle responsive behavior and sticky header
        function handleResponsive() {
            if (window.innerWidth >= 768) { // md breakpoint
                mobileMenu.classList.add('hidden');
            }
        }

        function handleStickyHeader() {
            if (window.pageYOffset > headerOffset) {
                stickyHeader.classList.add('fixed', 'top-0', 'left-0', 'right-0', 'z-50', 'shadow-md');
            } else {
                stickyHeader.classList.remove('fixed', 'top-0', 'left-0', 'right-0', 'z-50', 'shadow-md');
            }
        }

        window.addEventListener('resize', handleResponsive);
        window.addEventListener('scroll', handleStickyHeader);
        handleResponsive(); // Initial check
        handleStickyHeader(); // Initial check
    });
</script>

{{-- MObile Menu --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuItems = document.querySelectorAll(".menu-item");
        const backButtons = document.querySelectorAll(".back-button");
        const mobileMenu = document.getElementById("mobile-menu");
        const mainMenu = document.getElementById("main-menu");

        // Show submenu when clicking on menu items
        menuItems.forEach(item => {
            item.addEventListener("click", function () {
                const targetMenuId = this.dataset.target;
                const targetMenu = document.getElementById(targetMenuId);

                // Hide all menus
                document.querySelectorAll("nav").forEach(menu => menu.classList.add("hidden"));

                // Show the target menu
                targetMenu.classList.remove("hidden");
            });
        });

        // Go back to the parent menu
        backButtons.forEach(button => {
            button.addEventListener("click", function () {
                const currentMenu = this.closest("nav");

                // Hide current menu
                currentMenu.classList.add("hidden");

                // Show main menu or parent menu
                if (currentMenu.id === "lab-diamonds-menu") {
                    mainMenu.classList.remove("hidden");
                } else if (currentMenu.id === "lab-diamonds-options-menu") {
                    document.getElementById("lab-diamonds-menu").classList.remove("hidden");
                } else if (currentMenu.id === "engagement-rings-menu") {
                    document.getElementById("main-menu").classList.remove("hidden");
                } else if (currentMenu.id === "create-diamond-ring-menu") {
                    document.getElementById("engagement-rings-menu").classList.remove("hidden");
                } else if (currentMenu.id === "shop-by-shape-menu") {
                    document.getElementById("engagement-rings-menu").classList.remove("hidden");
                } else if (currentMenu.id === "shop-by-style-menu") {
                    document.getElementById("engagement-rings-menu").classList.remove("hidden");
                } else if (currentMenu.id === "shop-by-shape-menu") {
                    document.getElementById("engagement-rings-menu").classList.remove("hidden");
                } else if (currentMenu.id === "shop-by-style-menu") {
                    document.getElementById("engagement-rings-menu").classList.remove("hidden");
                } else if (currentMenu.id === "fine-jewelry-menu") {
                    document.getElementById("main-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "wedding-rings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "pendants-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "bracelets-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "necklaces-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if (currentMenu.id === "earrings-menu") {
                    document.getElementById("fine-jewelry-menu").classList.remove("hidden");
                } else if(currentMenu.id === "precious-stones-menu") {
                    document.getElementById("main-menu").classList.remove("hidden");
                } else if(currentMenu.id === "diamond-4cs-menu") {
                    document.getElementById("precious-stones-menu").classList.remove("hidden");
                } else if(currentMenu.id === "diamond-guide-menu") {
                    document.getElementById("precious-stones-menu").classList.remove("hidden");
                } else if(currentMenu.id === "helpful-guides-menu") {
                    document.getElementById("precious-stones-menu").classList.remove("hidden");
                } 
            });
        });

        // Close the mobile menu
        document.getElementById("close-menu").addEventListener("click", function () {
            mobileMenu.classList.add("hidden");
        });
    });
</script>
