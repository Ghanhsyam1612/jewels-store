<header class="bg-white font-montserrat">
    <!-- Top bar -->
    <div class="bg-black text-white text-xs py-1 px-4">
        <div class="container mx-auto text-center">
            INTERNATIONAL SHIPPING & FREE RETURNS (USA) &nbsp; | &nbsp; WE PRICE MATCH &nbsp; | &nbsp; 100% MONEY BACK GUARANTEE
        </div>
    </div>

    <!-- Main header -->
    <div id="sticky-header" class="container mx-auto flex items-center justify-between py-4 px-6 border-b bg-dark-purple">
        <!-- Hamburger menu for mobile -->
        <button id="hamburger-menu" class="md:hidden text-gray-700 hover:text-gray-900">
            {{-- <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg> --}}
            <img src="{{ asset('Shape/hamburger.svg') }}" width="24" height="24" class="group-hover:text-dark-blue mb-2" alt="Hamburger Menu">
        </button>
       
        <!-- Logo -->
        <a href="/" class="flex-shrink-0">
            <!-- <img src="/path-to-your-diamond-logo.svg" alt="Diamond Logo" class="h-8"> -->
            <img src="{{ asset('Shape/diamond-logo.svg') }}" width="44" height="30" alt="Diamond Logo">
        </a>

        <!-- Navigation for desktop -->
        <nav class="hidden md:flex space-x-6">
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
                        <a href="{{ route('inventory') }}" class="block px-4 py-2 text-12px leading-[19px] font-sm text-gray-700 hover:bg-gray-100 font-medium">Solitaire Diamonds</a>
                        <a href="{{ route('calibrated') }}" class="block px-4 py-2 text-12px leading-[19px] font-sm text-gray-700 hover:bg-gray-100 font-medium">Calibrated Diamonds</a>
                        <a href="{{ route('fancy-shapes-diamonds') }}" class="block px-4 py-2 text-12px leading-[19px] font-sm text-gray-700 hover:bg-gray-100 font-medium">Fancy Shapes Diamonds</a>
                        <a href="#" class="block px-4 py-2 text-12px leading-[19px] font-sm text-gray-700 hover:bg-gray-100 font-medium">Fancy Color Diamonds</a>
                        <a href="{{ route('fancy-color-melee-diamonds') }}" class="block px-4 py-2 text-12px leading-[19px] font-sm text-gray-700 hover:bg-gray-100 font-medium">Color Melee Diamonds</a>
                    </div>
                </div>
            </div>
            <a href="{{ route('inventory')}}" class="text-gold hover:text-white flex items-center font-montserrat text-12px font-semibold leading-[30px] tracking-wide transition-all">INVENTORY</a>
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
                <div class="absolute left-52 -translate-x-1/2 transform mt-2 w-[1000px] bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10">
                    <div class="grid grid-cols-3 gap-4 p-6">
                        <!-- Column 1 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-gray-900 text-12px leading-[19px] mb-2">Create Your Diamond Ring</h3>
                            <div class="space-y-2">
                                <a href="{{ route('build-a-ring') }}" class="block text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">Start With A Setting</a>
                                <a href="{{ route('bespoke-jewellery') }}" class="block text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">Bespoke Jewellery</a>
                                <a href="{{ route('custom-engagement-rings') }}" class="block text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">Custom Engagement Ring</a>
                            </div>
                        </div>
                        <!-- Column 2 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-gray-900 text-12px leading-[19px] mb-2">Shop By Style</h3>
                            <div class="grid grid-cols-2 gap-2">
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Solitaire
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Halo
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Diamond Band
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Hidden Halo
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Three Stone
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Bezel
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Cluster
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Dainty
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Unique
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Vintage Inspired
                                </a>
                            </div>
                        </div>
                        <!-- Column 3 -->
                        <div>
                            <h3 class="font-semibold text-gray-900 text-12px leading-[19px] mb-2">Shop By Shape</h3>
                            <div class="grid grid-cols-2 gap-2">
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Solitaire
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Halo
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Diamond Band
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Hidden Halo
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Three Stone
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Bezel
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Cluster
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Dainty
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Unique
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Vintage Inspired
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="absolute left-52 -translate-x-1/2 transform mt-2 w-[1000px] bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10">
                    <div class="grid grid-cols-4 gap-4 p-6">
                        <!-- Column 1 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-gray-900 text-12px leading-[19px] mb-2">Earrings</h3>
                            <div class="space-y-2">
                                <a href="/stud-earrings" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Stud Earrings
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Hoops and Drops Earrings
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Halo Earrings
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Cluster Earrings
                                </a>
                            </div>
                        </div>
                        <!-- Column 2 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-gray-900 text-12px leading-[19px] mb-2">Wedding Rings</h3>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Diamond Rings
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Anniversary Rings
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Eternity Rings
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Stackable Rings
                                </a>
                            </div>
                        </div>
                        <!-- Column 3 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-gray-900 text-12px leading-[19px] mb-2">Pendants</h3>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Solitaire Pendants
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Halo Pendants
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Diamond Pendants
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                    Chains
                                </a>
                            </div>
                        </div>
                        <!-- Column 4 -->
                        <div>
                            <div class="space-y-4">
                                <!-- First Row -->
                                <div>
                                    <h4 class="font-semibold text-gray-900 text-12px leading-[19px] mb-2">Bracelets</h4>
                                    <div class="space-y-2">
                                        <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                            <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            </svg>
                                            Tennis Bracelets
                                        </a>
                                        <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                            <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            </svg>
                                            Solitaire Bracelets
                                        </a>
                                    </div>
                                </div>
                                <!-- Second Row -->
                                <div>
                                    <h4 class="font-semibold text-gray-900 text-12px leading-[19px] mb-2">Necklace</h4>
                                    <div class="space-y-2">
                                        <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                            <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            </svg>
                                            Diamond Necklaces
                                        </a>
                                        <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                            <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 6v12m-6-6h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            </svg>
                                            Tennis Necklaces
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="text-gold hover:text-white flex items-center font-montserrat text-12px font-semibold leading-[30px] tracking-wide transition-all">READY TO SHIP</a>
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
                <div class="absolute left-0 -translate-x-1/2 transform mt-2 w-[1000px] bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10">
                    <div class="grid grid-cols-4 gap-4 p-6">
                        <!-- Column 1 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-gray-900 text-12px leading-[19px] mb-2">Diamond 4C's</h3>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100d py-1">
                                    Cut
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100d py-1">
                                    Clarity
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100d py-1">
                                    Color
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    Carat
                                </a>
                            </div>
                        </div>
                        <!-- Column 2 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-gray-900 text-12px leading-[19px] mb-2">Diamond Guide</h3>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    Diamond Certification
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    Diamond Clarity
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    Diamond Size Chart
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    Diamond Price Calculator
                                </a>
                            </div>
                        </div>
                        <!-- Column 3 -->
                        <div class="border-r border-gray-200">
                            <h3 class="font-semibold text-gray-900 text-12px leading-[19px] mb-2">Helpful Guides</h3>
                            <div class="space-y-2">
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    Tips For Cleaning Lab Grown Diamonds
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
                                    Facts & Misconceptions
                                </a>
                                <a href="#" class="flex items-center text-12px leading-[19px] text-gray-700 hover:bg-gray-100 py-1">
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
        <div id="mobile-menu" class="fixed inset-0 bg-white z-50 hidden">
            <div class="flex justify-end p-4 mx-4">
                <button id="close-menu" class="text-gray-700 hover:text-gray-900">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <nav class="flex flex-col items-start space-y-4 mt-8 mx-4">
                
                <a href="#" class="text-gray-700 hover:text-gray-900 font-montserrat text-12px font-semibold leading-[30px] tracking-wide">LAB DIAMONDS</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 font-montserrat text-12px font-semibold leading-[30px] tracking-wide">INVENTORY</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 font-montserrat text-12px font-semibold leading-[30px] tracking-wide">ENGAGEMENT RINGS</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 font-montserrat text-12px font-semibold leading-[30px] tracking-wide">FINE JEWELRY</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 font-montserrat text-12px font-semibold leading-[30px] tracking-wide">READY TO SHIP</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 font-montserrat text-12px font-semibold leading-[30px] tracking-wide">EDUCATION</a>
            </nav>
        </div>

        <!-- Search, Account, and Cart -->
        <div class="flex items-center space-x-4">
            <div class="relative">
                <input type="text" placeholder="Search"
                    class="hidden lg:block pl-2 px-10 font-montserrat text-12px py-2 border border-gray-300 rounded-md focus:outline-none placeholder:text-gray-400 placeholder:font-montserrat placeholder:font-medium">
                <svg class="w-6 h-6 lg:hidden text-gray-700 hover:text-gray-900 cursor-pointer" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <svg class="w-4 h-4 hidden lg:block absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>

            <a href="{{ auth('customer')->check() ? route('account.my-account') : route('account') }}" class="text-gray-700 hover:text-gray-900 cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke-width="2" />
                    <circle cx="12" cy="10" r="3" stroke-width="2" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.5 19.5C7 17 9.5 15.5 12 15.5s5 1.5 6.5 4" />
                </svg>
            </a>
            <a href="/cart" class="text-gray-700 hover:text-gray-900 relative">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <span
                    class="absolute -top-1 -right-1 bg-black text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">0</span>
            </a>
        </div>
    </div>
</header>

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
