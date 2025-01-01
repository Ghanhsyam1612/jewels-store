@extends('layouts.master')

@section('content')
<div class="bg-gray-50">
    <!-- Hero Section -->
    <section class="relative h-[550px] md:h-[600px] lg:h-[450px] xl:h-[480px] flex md:pt-12 lg:items-center justify-center">
        <div class="absolute inset-0">
            <img src="/images/Certified-bnr.png" alt="Certified Banner" class="w-full h-full object-cover xl:object-cover">
        </div>
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Text Rows -->
            <div class="text-center mt-4 py-8 md:px-14">
                <h1
                    class="font-literata text-3xl md:text-44px md:leading-[59px] lg:text-5xl tracking-wide font-medium text-primary mb-4">
                    Beautiful, Certified Lab Grown Diamonds
                </h1>
                <p class="font-montserrat text-lg md:text-xl text-primary max-w-3xl mx-auto">
                    Mining free. Direct to you. No middlemen
                </p>
            </div>

            <!-- Buttons Row -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-8">
                <a href="{{ route('inventory') }}"
                    class="font-montserrat font-semibold tracking-wide text-center w-full md:w-3/5 lg:w-2/5 xl:w-2/6 md:px-8 lg:px-8 py-4 bg-primary text-gold rounded-md hover:bg-white hover:text-primary border hover:border-primary transition duration-300">
                    Shop Lab Grown Diamonds
                </a>
                <a href="{{ route('build-a-ring') }}"
                    class="font-montserrat font-semibold tracking-wide text-center w-full md:w-3/5 lg:w-2/5 xl:w-2/6 md:px-8 lg:px-8 py-4 bg-primary text-gold rounded-md hover:bg-white hover:text-primary border hover:border-primary transition duration-300">
                    Shop Engagement Rings
                </a>
            </div>
        </div>
        <div class="absolute px-6 bottom-10 md:bottom-8 lg:bottom-0 ">
            <img src="/images/Certified-bnr-tablet.png" alt="Certified Banner" class="lg:hidden">
        </div>
    </section>

    <!-- Learn More Section -->
    <section class="py-4 bg-light-grey">
        <div class="container mx-auto px-6">
            <p class="text-xs md:text-sm tracking-wide font-montserrat leading-5 text-center text-gray-800">
                Buy now, pay later with Klarna.
                <a href="#" class="hover:text-blue-800 underline">Learn More</a>
            </p>
        </div>
    </section>

    <!-- Shop Engagement Rings Section -->
    <section class="py-7 lg:py-16">
        <div class="container mx-auto px-4 md:px-10">
            <h3 class="text-center text-base md:text-2xl font-montserrat font-medium text-primary uppercase py-6">
                Shop Engagement Rings
            </h3>
            <div class="mx-auto grid grid-cols-2 gap-4 md:gap-9 md:w-full lg:w-5/6">
                <!-- First Image Card -->
                <div class="flex flex-col items-start">
                    <img src="/images/Start-with-diamonds.webp" alt="Engagement Ring"
                        class="w-full h-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-5">
                    <h4 class="text-xs md:text-base uppercase font-medium font-montserrat tracking-widest text-primary">Start with
                        Diamonds</h4>
                </div>

                <!-- Second Image Card -->
                <div class="flex flex-col items-start">
                    <img src="/images/Start-with-setting.webp" alt="Engagement Ring"
                        class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-5">
                    <h4 class="text-xs md:text-base uppercase font-medium font-montserrat tracking-widest text-primary">Start with
                        Setting</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Lab Diamonds in Customisable Shapes Section -->
    <section class="py-7 xl:py-10 2xl:py-16 bg-light-blue-2">
        <div class="container mx-auto px-10">
            <h3 class="text-center text-2xl md:text-4xl lg:text-40px font-literata font-medium md:leading-[59px] text-primary/90 py-3">
                Lab Diamonds in Customisable Shapes</h3>
            <p class="text-center text-base md:text-lg font-montserrat text-primary/80">
                Explore our collection of 950,000+ IGI/GIA/GCAL certified diamonds
            </p>
        </div>
        <div class="flex flex-col mx-5 my-8 md:mx-8 lg:mx-20">
            <div class="grid grid-cols-3 gap-7 md:gap-2 lg:gap-5 md:grid-cols-5 lg:grid-cols-10 lg:mb-5">
                <!-- Round -->
                <div class="hover:bg-light-blue-1 p-4">
                    <a href="{{ route('inventory', ['shape' => 'round']) }}"
                        class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/round.svg') }}" class="mb-2" width="60" height="60" alt="Round Shape">
                        Round
                    </a>
                </div>

                <!-- Princess -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{ route('inventory', ['shape' => 'princess']) }}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                    <img src="{{ asset('Shape/princess.svg') }}" class="mb-2" width="60" height="60" alt="Princess Shape">
                    Princess
                </a>
                </div>

                <!-- Radiant -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'radiant'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/radiant.svg') }}" class="mb-2" width="60" height="60" alt="Radiant Shape">
                        Radiant
                    </a>
                </div>

                <!-- Asscher -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{ route('inventory', ['shape' => 'asscher']) }}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                    <img src="{{ asset('Shape/asscher.svg') }}" class="mb-2" width="60" height="60" alt="Asscher Shape">
                    Asscher
                    </a>
                </div>

                <!-- Cushion -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{ route('inventory', ['shape' => 'cushion'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                    <img src="{{ asset('Shape/cushion.svg') }}" class="mb-2" width="60" height="60" alt="Cushion Shape">
                    Cushion
                </a>
                </div>

                <!-- Oval -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'oval'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/oval.svg') }}" class="mb-2" width="60" height="60" alt="Oval Shape">
                        Oval
                    </a>
                </div>

                <!-- Emerald -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'emerald'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/emerald.svg') }}" class="mb-2" width="60" height="60" alt="Emerald Shape">
                        Emerald
                    </a>
                </div>

                <!-- Pear -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{ route('inventory', ['shape' => 'pear' ])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/pear.svg') }}" class="mb-2" width="60" height="60" alt="Pear Shape">
                        Pear
                    </a>
                </div>

                <!-- Marquise -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'marquise'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/marquise.svg') }}" class="mb-2" width="60" height="60" alt="Marquise Shape">
                        Marquise
                    </a>
                </div>

                <!-- Heart -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'heart'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/heart.svg') }}" class="mb-2" width="60" height="60" alt="Heart Shape">
                        Heart
                    </a>
                </div>
                
                <!-- Rose Cut -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'rose-cut'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/rose-cut.svg') }}" class="mb-2" width="60" height="60" alt="Rose Cut Shape">
                        Rose Cut
                    </a>
                </div>

                <!-- Old European -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'old-european'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                    <img src="{{ asset('Shape/old-european.svg') }}" class="mb-2" width="60" height="60" alt="Old European Shape">
                    Old European
                </a>
                </div>

                <!-- Half Moon -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'half-moon'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/half-moon.svg') }}" class="mb-2" width="60" height="60" alt="Half Moon Shape">
                        Half Moon
                    </a>
                </div>

                <!-- Baguette Trapezoid -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'baguette-trapezoid'])}}"
                    class="uppercase font-montserrat text-13px leading-5 font-medium flex flex-col items-center text-center">
                        <img src="{{ asset('Shape/baguette-trapezoid.svg') }}" class="mb-2" width="60" height="60" alt="Baguette Trapezoid Shape">
                        Baguette Trapezoid
                    </a>
                </div>

                <!-- Baguette -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'baguette'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/baguette.svg') }}" class="mb-2" width="60" height="60" alt="Baguette Shape">
                        Baguette
                    </a>
                </div>

                <!-- Hexagon -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'hexagon'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/hexagon.svg') }}" class="mb-2" width="60" height="60" alt="Hexagon Shape">
                        Hexagon
                    </a>
                </div>

                <!-- Kite -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'kite'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                    <img src="{{ asset('Shape/kite.svg') }}" class="mb-2" width="60" height="60" alt="Kite Shape">
                    Kite
                    </a>
                </div>

                <!-- Old Mine -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'old-mine'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/old-mine.svg') }}" class="mb-2" width="60" height="60" alt="Old Mine Shape">
                        Old Mine
                    </a>
                </div>

                <!-- Trapezoid -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'trapezoid'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/trapezoid.svg') }}" class="mb-2" width="60" height="60" alt="Trapezoid Shape">
                        Trapezoid
                    </a>
                </div>

                <!-- Triangular -->
                <div class="hover:bg-light-blue-1 p-4">
                <a href="{{route('inventory', ['shape' => 'triangular'])}}"
                    class="uppercase font-montserrat text-13px text-center leading-5 font-medium flex flex-col items-center">
                        <img src="{{ asset('Shape/triangular.svg') }}" class="mb-2" width="60" height="60" alt="Triangular Shape">
                        Triangular
                    </a>
                </div>
            </div>
        </div>

        </div>
        <div class="flex justify-center">
            <a href="{{route('inventory')}}"
                class="font-montserrat font-semibold tracking-wide px-8 py-5 bg-primary text-sm text-gold hover:text-primary rounded-md border border-primary hover:border-primary hover:bg-white transition duration-300">
                Shop Lab Grown Diamonds
            </a>
        </div>
    </section>

    <!-- Fine Jewellery Section -->
    <section class="py-7 md:py-16">
        <div class="container mx-auto px-6 pb-7">
            <h2 class="text-base md:text-xl lg:text-2xl 2xl:text-3xl font-montserrat font-medium uppercase text-center text-primary">Fine Jewelry</h2>
        </div>
        <div class="mx-4 md:mx-auto grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-9 md:w-5/6">
            <!-- First Image Card -->
            <div class="flex flex-col items-start">
                <img src="/images/Wedding-Rings-01.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-3">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary">Wedding Rings</h4>
            </div>

            <!-- Second Image Card -->
            <div class="flex flex-col items-start">
                <img src="/images/Necklaces-01.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-3">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary">Necklaces</h4>
            </div>

            <!-- Third Image Card -->
            <div class="flex flex-col items-start">
                <img src="/images/Earrings-01.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-3">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary">Earrings</h4>
            </div>

            <!-- Second Row -->
            <!-- Fourth Image Card -->
            <div class="flex flex-col items-start">
                <img src="/images/Bracelets-01.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-3">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary">Bracelets</h4>
            </div>

            <!-- Fifth Image Card -->
            <div class="flex flex-col items-start">
                <img src="/images/Pendants-001.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-3">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary">Pendants</h4>
            </div>

            <!-- Sixth Image Card -->
            <div class="flex flex-col items-start">
                <img src="/images/Custom-Fine-jewellery-01.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-3">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary">Custom Fine Jewelry</h4>
            </div>
        </div>
    </section>

    <!-- Engagement Rings By Style Section -->
    <section class="py-7 xl:py-10 2xl:py-16">
        <div class="container mx-auto px-6 py-8">
            <h2 class="text-2xl md:text-3xl lg:text-40px font-literata font-medium text-center text-primary">Engagement Rings By Style</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 md:gap-7 lg:gap-9 mx-4 md:mx-4 lg:mx-auto lg:w-5/6">

            <!-- First Image Card -->
            <div class="flex flex-col items-center">
                <img src="/images/Solitaire-ring.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-2">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary text-center">Solitaire</h4>
            </div>

            <!-- Second Image Card -->
            <div class="flex flex-col items-center">
                <img src="/images/Hidden-Halo-ring.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-2">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary text-center">Halo</h4>
            </div>

            <!-- Third Image Card -->
            <div class="flex flex-col items-center">
                <img src="/images/Bezel-ring.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-2">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary text-center">Bezel</h4>
            </div>

            <!-- Fourth Image Card -->
            <div class="flex flex-col items-center">
                <img src="/images/Cluster.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-2">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary text-center">Cluster</h4>
            </div>

            <!-- Fifth Image Card -->
            <div class="flex flex-col items-center">
                <img src="/images/Three-Stone-ring.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-2">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary text-center">Three Stone</h4>
            </div>

            <!-- Sixth Image Card -->
            <div class="flex flex-col items-center">
                <img src="/images/DiamondBand-ring-01.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-2">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary text-center">Diamond Band</h4>
            </div>

            <!-- Seventh Image Card -->
            <div class="flex flex-col items-center">
                <img src="/images/Unique-ring.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-2">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary text-center">Unique</h4>
            </div>

            <!-- Eighth Image Card -->
            <div class="flex flex-col items-center">
                <img src="/images/Hidden-Halo-ring.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-2">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary text-center">Hidden Halo</h4>
            </div>

            <!-- Ninth Image Card -->
            <div class="flex flex-col items-center">
                <img src="/images/Dainty-ring.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-2">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary text-center">Dainty</h4>
            </div>

            <!-- Tenth Image Card -->
            <div class="flex flex-col items-center">
                <img src="/images/Vintage-Inspired-ring.webp" alt="Engagement Ring"
                    class="w-full object-cover rounded-lg transition duration-300 hover:scale-105 mb-2">
                <h4 class="text-xs md:text-sm uppercase font-semibold font-montserrat tracking-widest text-primary text-center">Vintage Inspired</h4>
            </div>
        </div>
    </section>

    <!-- Diamond Buying Resources -->
    <section class="py-5 lg:py-10 xl:py-16 bg-light-blue-3">
        <div class="container mx-auto px-6 py-8">
            <h2 class="text-2xl md:text-40px font-literata font-medium text-center text-primary">Diamond Buying Resources</h2>
        </div>
        <!-- First Row - Two Cards -->
        <div class="container px-4 md:mx-auto md:px-8 lg:px-14 xl:px-24 2xl:px-28 grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <!-- First Card -->
            <div class="flex flex-col rounded-lg overflow-hidden shadow-lg bg-white">
                <div class="relative">
                    <img src="/images/Why-Choose-Lab-Grown-Diamonds1.webp" alt="Diamond Education" class="w-full h-[300px] object-cover">
                    <div class="absolute inset-0 flex flex-col justify-end items-start text-primary pb-5">
                        <h3 class="font-montserrat text-xl font-semibold mb-4 px-6">Why Choose Lab-Created Diamonds?</h3>
                        <p class="text-start px-6 font-montserrat text-sm">Lab-grown diamonds are environmentally friendly and cost-efficient. They undergo the same processing and grading standards as mined diamonds, based on the 4Cs of diamond certification.</p>
                    </div>
                </div>
                <a href="#" class="font-montserrat text-sm font-semibold tracking-wide hover:text-dark-blue transition duration-300 my-4 text-start px-6 underline">
                    Read More
                </a>
            </div>

            <!-- Second Card -->
            <div class="flex flex-col rounded-lg overflow-hidden shadow-lg bg-white">
                <div class="relative">
                    <img src="/images/What-are-Lab-Grwon-Diamonds.webp" alt="Diamond Buying Guide" class="w-full h-[300px] object-cover">
                    <div class="absolute inset-0 flex flex-col justify-end items-start text-primary pb-5">
                        <h3 class="font-montserrat text-xl font-semibold mb-4 px-6">What are Lab Grown Diamonds?</h3>
                        <p class="text-start px-6 font-montserrat text-sm">Lab-grown diamonds are created in a lab using two methods: High-Pressure High-Temperature and Chemical Vapor Deposition, and differ from mined diamonds which are extracted from the earth.</p>
                    </div>
                </div>
                <a href="#" class="font-montserrat text-sm font-semibold tracking-wide hover:text-dark-blue transition duration-300 my-4 text-start px-6 underline">
                    Read More
                </a>
            </div>
        </div>

        <!-- Second Row - Single Card with Image and Text -->
        <div class="container px-4 md:mx-auto md:px-8 lg:px-14 xl:px-24 2xl:px-28">
            <div class="bg-white rounded-lg overflow-hidden shadow-lg flex flex-col md:flex-row">
                <div class="md:w-1/2">
                    <img src="/images/Lab-Grown-Diamond-Grading-and-Report1.webp" alt="Lab Grown Diamond Guide" class="w-full h-full object-cover">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-center text-primary">
                    <h3 class="font-montserrat text-xl font-semibold mb-4">Lab Created Diamonds Grading & Certification</h3>
                    <p class="mb-6 text-sm font-montserrat">We send all of our lab-grown diamonds for inspection to renowned institutions such as GIA, IGI, and GCAL.</p>
                    <a href="#" class="font-montserrat text-sm font-semibold tracking-wide hover:text-dark-blue transition duration-300 text-start underline">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Colored Lab Diamonds -->
    <section class="relative h-[400px] mb-12">
        <!-- Background Image -->
        <div class="absolute inset-0 hidden md:block">
            <img src="/images/Lab-Grown-Color-Diamond-1-scaled-1.webp" alt="Colored Lab Diamonds" class="w-full h-full object-cover">
        </div>

        <!-- Content Container -->
        <div class="container mx-auto md:pl-8 md:pr-72 lg:px-14 xl:px-24 2xl:px-44 relative h-full">
            <img src="/images/mobile-Lab-Grown-Color-Diamond.webp" alt="Colored Lab Diamonds" class="w-full h-1/2 object-cover md:hidden">
            <div class="flex flex-col justify-center items-center md:items-start h-4/6 md:h-full max-w-2xl bg-black md:bg-transparent">
                <h2 class="font-literata text-white text-xl md:text-40px md:leading-10 font-medium mb-4">
                    Shop Colored Lab Diamonds
                </h2>
                <p class="text-center md:text-left font-montserrat text-white text-sm mb-8 px-3 md:px-0 lg:w-2/3">
                    Select your perfect fancy color lab created diamond from thousands of ethically sourced diamonds.
                </p>
                <a href="#" class="inline-block bg-white text-primary font-montserrat text-sm font-semibold px-4 md:px-8 py-4 rounded-md hover:bg-black hover:border-white hover:border-2 border-2 border-white hover:text-white transition duration-300 w-fit">
                    Shop Colored Lab Grown Diamonds
                </a>
            </div>
        </div>
    </section>

    <!-- What Our Customers Say -->
    <section class="py-5 xl:py-12 bg-light-blue-3">
        <div class="container mx-auto px-4 py-8">
            <h2 class="text-2xl md:text-3xl lg:text-40px font-literata font-medium text-center text-primary mb-3">What Our Customers Say</h2>
            <p class="text-center font-montserrat text-base md:text-lg text-primary/80 tracking-wide">We've served 15631+ customers worldwide and counting</p>
        </div>
        <div class="container mx-auto px-4 md:px-4 lg:px-14 xl:px-24 2xl:px-44 mb-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8">
                <!-- Review Card 1 -->
                <div class="bg-white rounded-lg p-6 shadow-lg h-full flex flex-col">
                    <h3 class="font-montserrat text-lg font-semibold mb-3 text-primary">Reliable, definitely recommend!</h3>
                    <p class="font-montserrat text-sm text-primary/90 mb-6 flex-grow">
                        I was really scared to make this kind of purchase online. I read all the positive reviews and decided to give them a chance. I’m so glad I did!! My diamond is beautiful! The payment process was quick and easy, my diamond was delivered 10 days after my order was placed.
                    </p>
                    <div class="flex items-center mt-auto">
                        <img src="/images/users/user-1.jpg" alt="Customer" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <div class="flex items-center">
                                <p class="font-montserrat font-semibold text-primary md:w-20 md:text-13px lg:w-full lg:text-sm">Anuschka Grobler</p>
                                <svg class="w-5 h-5 ml-1 text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="font-montserrat md:text-13px lg:text-sm text-primary/70">Kentucky</p>
                        </div>
                    </div>
                </div>

                <!-- Review Card 2 -->
                <div class="bg-white rounded-lg p-6 shadow-lg h-full flex flex-col">
                    <h3 class="font-montserrat text-lg font-semibold mb-3 text-primary">I had an extremely positive experience…</h3>
                    <p class="font-montserrat text-sm text-primary/90 mb-6 flex-grow">
                        I was looking for rings online and nothing came up within my style/budget until I came across this site. I was skeptical from it being online, but I was always notified of what was happening behind the scenes. I couldn’t be happier with this company.
                    </p>
                    <div class="flex items-center mt-auto">
                        <img src="/images/users/user-2.jpg" alt="Customer" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <div class="flex items-center">
                                <p class="font-montserrat font-semibold text-primary md:w-20 md:text-13px lg:w-full lg:text-sm">Evan Onuskanych</p>
                                <svg class="w-5 h-5 ml-1 text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="font-montserrat md:text-13px lg:text-sm text-primary/70">New York</p>
                        </div>
                    </div>
                </div>

                <!-- Review Card 3 -->
                <div class="bg-white rounded-lg p-6 shadow-lg h-full flex flex-col">
                    <h3 class="font-montserrat text-lg font-semibold mb-3">Great prices, great customer service!</h3>
                    <p class="font-montserrat text-sm text-gray-600 mb-6 flex-grow">
                        The prices on this site are significantly lower than other retailers for the exact same diamond. Shipping does take longer than expected, but it was worth the wait, and Sarah did keep me updated the entire process.
                    </p>
                    <div class="flex items-center mt-auto">
                        <img src="/images/users/user-3.jpg" alt="Customer" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <div class="flex items-center">
                                <p class="font-montserrat font-semibold md:w-20 md:text-13px lg:w-full lg:text-sm">Samantha A</p>
                                <svg class="w-5 h-5 ml-1 text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <p class="font-montserrat md:text-13px lg:text-sm text-gray-500">Massachusetts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="flex justify-center cursor-pointer">
            <svg class="w-2/3 md:w-2/5 lg:w-60" viewBox="0 0 311 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="311" height="48" rx="5" fill="#00B67A" />
                <g clip-path="url(#clip0_107_42)">
                    <path d="M208.682 18.5061H218.577V20.3523H214.686V30.7304H212.547V20.3523H208.673V18.5061H208.682ZM218.154 21.8792H219.983V23.5873H220.018C220.078 23.3458 220.19 23.1129 220.354 22.8886C220.518 22.6643 220.716 22.4486 220.949 22.2674C221.182 22.0776 221.441 21.931 221.726 21.8102C222.011 21.6981 222.304 21.6377 222.597 21.6377C222.821 21.6377 222.985 21.6463 223.072 21.6549C223.158 21.6635 223.244 21.6808 223.339 21.6894V23.5701C223.201 23.5442 223.063 23.527 222.916 23.5097C222.77 23.4924 222.632 23.4838 222.494 23.4838C222.166 23.4838 221.855 23.5528 221.562 23.6822C221.269 23.8116 221.018 24.0101 220.803 24.2602C220.587 24.519 220.415 24.8296 220.285 25.2092C220.156 25.5888 220.095 26.0201 220.095 26.5119V30.7218H218.146V21.8792H218.154ZM232.302 30.7304H230.387V29.4968H230.353C230.111 29.9454 229.757 30.2991 229.283 30.5665C228.808 30.8339 228.325 30.972 227.834 30.972C226.669 30.972 225.824 30.6873 225.306 30.1093C224.788 29.5313 224.53 28.6599 224.53 27.4953V21.8792H226.479V27.3055C226.479 28.0819 226.626 28.6341 226.928 28.9533C227.221 29.2725 227.644 29.4364 228.179 29.4364C228.593 29.4364 228.929 29.376 229.205 29.2466C229.481 29.1172 229.706 28.9533 229.87 28.7376C230.042 28.5305 230.163 28.2717 230.241 27.9784C230.318 27.6851 230.353 27.3659 230.353 27.0208V21.8878H232.302V30.7304ZM235.624 27.8922C235.684 28.4615 235.9 28.8584 236.271 29.0913C236.65 29.3156 237.099 29.4364 237.625 29.4364C237.806 29.4364 238.013 29.4191 238.246 29.3932C238.479 29.3674 238.704 29.307 238.902 29.2293C239.109 29.1517 239.273 29.0309 239.411 28.8756C239.54 28.7203 239.601 28.5219 239.592 28.2717C239.583 28.0216 239.489 27.8145 239.316 27.6592C239.143 27.4953 238.928 27.3745 238.66 27.271C238.393 27.1761 238.091 27.0899 237.746 27.0208C237.401 26.9518 237.056 26.8742 236.702 26.7965C236.34 26.7189 235.986 26.6154 235.65 26.5032C235.313 26.3911 235.011 26.2358 234.744 26.0374C234.476 25.8476 234.261 25.5974 234.105 25.2955C233.941 24.9935 233.864 24.6226 233.864 24.174C233.864 23.6909 233.985 23.294 234.218 22.9662C234.45 22.6384 234.752 22.3796 235.106 22.1812C235.468 21.9827 235.865 21.8447 236.305 21.7584C236.745 21.6808 237.168 21.6377 237.565 21.6377C238.022 21.6377 238.462 21.6894 238.876 21.7843C239.29 21.8792 239.67 22.0345 240.006 22.2588C240.343 22.4745 240.619 22.7592 240.843 23.1042C241.067 23.4493 241.205 23.872 241.266 24.3638H239.23C239.135 23.8979 238.928 23.5787 238.591 23.4234C238.255 23.2595 237.867 23.1819 237.435 23.1819C237.297 23.1819 237.133 23.1905 236.944 23.2164C236.754 23.2423 236.581 23.2854 236.409 23.3458C236.245 23.4062 236.107 23.5011 235.986 23.6218C235.874 23.7426 235.814 23.8979 235.814 24.0963C235.814 24.3379 235.9 24.5277 236.064 24.6743C236.228 24.821 236.443 24.9418 236.711 25.0453C236.978 25.1402 237.28 25.2264 237.625 25.2955C237.97 25.3645 238.324 25.4421 238.686 25.5198C239.04 25.5974 239.385 25.7009 239.73 25.8131C240.075 25.9252 240.377 26.0805 240.645 26.2789C240.912 26.4773 241.128 26.7189 241.292 27.0122C241.456 27.3055 241.542 27.6765 241.542 28.1078C241.542 28.6341 241.421 29.074 241.179 29.445C240.938 29.8073 240.627 30.1093 240.248 30.3336C239.868 30.5579 239.437 30.7304 238.971 30.8339C238.505 30.9374 238.039 30.9892 237.582 30.9892C237.021 30.9892 236.504 30.9288 236.029 30.7994C235.555 30.67 235.141 30.4802 234.796 30.23C234.45 29.9712 234.174 29.652 233.976 29.2725C233.778 28.8929 233.674 28.4356 233.657 27.9094H235.624V27.8922ZM242.059 21.8792H243.535V19.2221H245.484V21.8792H247.244V23.3372H245.484V28.0647C245.484 28.2717 245.493 28.4443 245.51 28.5996C245.527 28.7462 245.571 28.8756 245.631 28.9791C245.691 29.0827 245.786 29.1603 245.916 29.2121C246.045 29.2638 246.209 29.2897 246.433 29.2897C246.571 29.2897 246.709 29.2897 246.847 29.2811C246.985 29.2725 247.123 29.2552 247.261 29.2207V30.7304C247.046 30.7563 246.83 30.7735 246.632 30.7994C246.425 30.8253 246.218 30.8339 246.002 30.8339C245.484 30.8339 245.07 30.7822 244.76 30.6873C244.449 30.5924 244.199 30.4457 244.026 30.2559C243.845 30.0661 243.733 29.8332 243.664 29.5485C243.604 29.2638 243.56 28.936 243.552 28.5737V23.3544H242.077V21.8792H242.059ZM248.624 21.8792H250.471V23.0784H250.505C250.781 22.5607 251.161 22.1984 251.652 21.9741C252.144 21.7498 252.67 21.6377 253.248 21.6377C253.947 21.6377 254.551 21.7584 255.069 22.0086C255.586 22.2502 256.018 22.5866 256.363 23.018C256.708 23.4493 256.958 23.9497 257.131 24.519C257.303 25.0884 257.389 25.7009 257.389 26.3479C257.389 26.9432 257.312 27.5212 257.156 28.0733C257.001 28.6341 256.768 29.1258 256.458 29.5571C256.147 29.9885 255.75 30.3249 255.267 30.5837C254.784 30.8426 254.223 30.972 253.568 30.972C253.283 30.972 252.998 30.9461 252.714 30.8943C252.429 30.8426 252.153 30.7563 251.894 30.6441C251.635 30.532 251.385 30.3853 251.169 30.2042C250.945 30.023 250.764 29.816 250.609 29.583H250.574V34H248.624V21.8792ZM255.44 26.3134C255.44 25.9166 255.388 25.5284 255.284 25.1488C255.181 24.7692 255.026 24.4414 254.819 24.1481C254.612 23.8548 254.353 23.6218 254.051 23.4493C253.74 23.2768 253.386 23.1819 252.99 23.1819C252.17 23.1819 251.549 23.4666 251.135 24.0359C250.721 24.6053 250.514 25.3645 250.514 26.3134C250.514 26.762 250.565 27.1761 250.678 27.5557C250.79 27.9353 250.945 28.2631 251.169 28.5392C251.385 28.8152 251.644 29.0309 251.946 29.1862C252.248 29.3501 252.601 29.4277 252.998 29.4277C253.447 29.4277 253.818 29.3328 254.128 29.1517C254.439 28.9705 254.689 28.729 254.888 28.4443C255.086 28.151 255.233 27.8231 255.319 27.4522C255.397 27.0812 255.44 26.7016 255.44 26.3134ZM258.882 18.5061H260.831V20.3523H258.882V18.5061ZM258.882 21.8792H260.831V30.7304H258.882V21.8792ZM262.574 18.5061H264.524V30.7304H262.574V18.5061ZM270.502 30.972C269.795 30.972 269.165 30.8512 268.613 30.6183C268.061 30.3853 267.595 30.0575 267.207 29.652C266.827 29.238 266.534 28.7462 266.335 28.1768C266.137 27.6075 266.034 26.9777 266.034 26.2962C266.034 25.6233 266.137 25.0021 266.335 24.4328C266.534 23.8634 266.827 23.3717 267.207 22.9576C267.586 22.5435 268.061 22.2243 268.613 21.9914C269.165 21.7584 269.795 21.6377 270.502 21.6377C271.21 21.6377 271.839 21.7584 272.392 21.9914C272.944 22.2243 273.409 22.5521 273.798 22.9576C274.177 23.3717 274.471 23.8634 274.669 24.4328C274.867 25.0021 274.971 25.6233 274.971 26.2962C274.971 26.9777 274.867 27.6075 274.669 28.1768C274.471 28.7462 274.177 29.238 273.798 29.652C273.418 30.0661 272.944 30.3853 272.392 30.6183C271.839 30.8512 271.21 30.972 270.502 30.972ZM270.502 29.4277C270.934 29.4277 271.313 29.3328 271.632 29.1517C271.952 28.9705 272.21 28.729 272.417 28.4356C272.624 28.1423 272.771 27.8059 272.875 27.4349C272.97 27.064 273.021 26.6844 273.021 26.2962C273.021 25.9166 272.97 25.5456 272.875 25.1661C272.78 24.7865 272.624 24.4587 272.417 24.1653C272.21 23.872 271.952 23.6391 271.632 23.4579C271.313 23.2768 270.934 23.1819 270.502 23.1819C270.071 23.1819 269.691 23.2768 269.372 23.4579C269.053 23.6391 268.794 23.8807 268.587 24.1653C268.38 24.4587 268.233 24.7865 268.13 25.1661C268.035 25.5456 267.983 25.9166 267.983 26.2962C267.983 26.6844 268.035 27.064 268.13 27.4349C268.225 27.8059 268.38 28.1423 268.587 28.4356C268.794 28.729 269.053 28.9705 269.372 29.1517C269.691 29.3415 270.071 29.4277 270.502 29.4277ZM275.54 21.8792H277.016V19.2221H278.965V21.8792H280.725V23.3372H278.965V28.0647C278.965 28.2717 278.974 28.4443 278.991 28.5996C279.008 28.7462 279.051 28.8756 279.112 28.9791C279.172 29.0827 279.267 29.1603 279.397 29.2121C279.526 29.2638 279.69 29.2897 279.914 29.2897C280.052 29.2897 280.19 29.2897 280.328 29.2811C280.466 29.2725 280.604 29.2552 280.742 29.2207V30.7304C280.527 30.7563 280.311 30.7735 280.113 30.7994C279.906 30.8253 279.698 30.8339 279.483 30.8339C278.965 30.8339 278.551 30.7822 278.241 30.6873C277.93 30.5924 277.68 30.4457 277.507 30.2559C277.326 30.0661 277.214 29.8332 277.145 29.5485C277.085 29.2638 277.041 28.936 277.033 28.5737V23.3544H275.558V21.8792H275.54Z" fill="white" />
                    <path d="M206.405 18.5061H197.467L194.707 10L191.937 18.5061L183 18.4975L190.238 23.7599L187.469 32.2574L194.707 27.0036L201.936 32.2574L199.175 23.7599L206.405 18.5061Z" fill="white" />
                    <path d="M199.796 25.6837L199.175 23.7599L194.707 27.0036L199.796 25.6837Z" fill="#005128" />
                </g>
                <path d="M32.4062 28.8242V16.5811C32.4062 16.4639 32.4648 16.4023 32.582 16.3965H34.542C34.6885 16.3965 34.7852 16.458 34.832 16.5811L38.1807 24.2627L41.5293 16.5811C41.5762 16.4639 41.6729 16.4023 41.8193 16.3965H43.7793C43.8965 16.3965 43.958 16.458 43.9639 16.5811V28.8242C43.9639 28.9414 43.9023 29 43.7793 29H42.2676C42.1504 29 42.0918 28.9414 42.0918 28.8242V19.6572L39.0068 26.7324C38.96 26.8379 38.8838 26.8906 38.7783 26.8906H37.5918C37.4863 26.8906 37.4072 26.8379 37.3545 26.7324L34.2783 19.6572V28.8242C34.2783 28.9414 34.2168 29 34.0938 29H32.582C32.4648 29 32.4062 28.9414 32.4062 28.8242ZM47.4795 27.8662C46.5947 26.9873 46.1523 25.8594 46.1523 24.4824C46.1523 23.0996 46.5947 21.9717 47.4795 21.0986C48.3701 20.2197 49.4922 19.7803 50.8457 19.7803C52.2051 19.7803 53.3271 20.2197 54.2119 21.0986C55.1025 21.9717 55.5479 23.0996 55.5479 24.4824C55.5479 25.8594 55.1025 26.9873 54.2119 27.8662C53.3271 28.7393 52.2051 29.1758 50.8457 29.1758C49.4922 29.1758 48.3701 28.7393 47.4795 27.8662ZM48.8154 22.3027C48.2881 22.8535 48.0244 23.5801 48.0244 24.4824C48.0244 25.3848 48.2881 26.1113 48.8154 26.6621C49.3428 27.2129 50.0195 27.4883 50.8457 27.4883C51.6777 27.4883 52.3574 27.2129 52.8848 26.6621C53.4121 26.1113 53.6758 25.3848 53.6758 24.4824C53.6758 23.5801 53.4121 22.8535 52.8848 22.3027C52.3574 21.752 51.6777 21.4766 50.8457 21.4766C50.0195 21.4766 49.3428 21.752 48.8154 22.3027ZM57.6836 28.8242V20.1406C57.6836 20.0234 57.7422 19.9648 57.8594 19.9648H59.2656C59.3828 19.9648 59.4414 20.0234 59.4414 20.1406V20.8438C60.1152 20.1348 60.9092 19.7803 61.8232 19.7803C62.374 19.7803 62.9072 19.877 63.4229 20.0703C63.5693 20.1289 63.6396 20.2373 63.6338 20.3955V21.8193C63.6338 21.9541 63.5869 22.0186 63.4932 22.0127C63.4697 22.0127 63.4287 22.001 63.3701 21.9775C62.6846 21.6436 62.0547 21.4766 61.4805 21.4766C60.8711 21.4766 60.3789 21.7051 60.0039 22.1621C59.6289 22.6191 59.4414 23.2725 59.4414 24.1221V28.8242C59.4414 28.9414 59.3828 29 59.2656 29H57.8594C57.7422 29 57.6836 28.9414 57.6836 28.8242ZM64.9082 24.4824C64.9082 23.1289 65.3389 22.0068 66.2002 21.1162C67.0674 20.2256 68.1602 19.7803 69.4785 19.7803C70.8613 19.7803 71.9658 20.2402 72.792 21.1602C73.6182 22.0801 74.0312 23.2051 74.0312 24.5352V24.8779C74.0312 24.9951 73.9727 25.0537 73.8555 25.0537H66.7803C66.874 25.8096 67.1611 26.4043 67.6416 26.8379C68.1221 27.2715 68.7402 27.4883 69.4961 27.4883C70.709 27.4883 71.5264 27.0371 71.9482 26.1348C72.0068 26.0293 72.0918 25.9766 72.2031 25.9766H73.7324C73.8145 25.9766 73.8555 26.0176 73.8555 26.0996C73.8555 26.1465 73.8438 26.208 73.8203 26.2842C73.0996 28.2178 71.6582 29.1816 69.4961 29.1758C68.1543 29.1758 67.0527 28.7363 66.1914 27.8574C65.3359 26.9727 64.9082 25.8477 64.9082 24.4824ZM66.8506 23.4365H72.1064C71.96 22.7979 71.6494 22.3115 71.1748 21.9775C70.7061 21.6436 70.1406 21.4766 69.4785 21.4766C68.8809 21.4766 68.3359 21.6406 67.8438 21.9688C67.3516 22.2969 67.0205 22.7861 66.8506 23.4365ZM80.7812 28.8242V16.5811C80.7812 16.4639 80.8398 16.4023 80.957 16.3965H85.6592C86.8486 16.3965 87.7744 16.6924 88.4365 17.2842C89.1045 17.8701 89.4385 18.7021 89.4385 19.7803C89.4385 20.583 89.2188 21.2686 88.7793 21.8369C88.3398 22.3994 87.7861 22.7949 87.1182 23.0234L89.834 28.8242C89.8457 28.8535 89.8516 28.877 89.8516 28.8945C89.8516 28.9648 89.7988 29 89.6934 29H88.0322C87.9385 29 87.8535 28.9414 87.7773 28.8242L85.0088 23.1641H82.6533V28.8242C82.6533 28.9414 82.5918 29 82.4688 29H80.957C80.8398 29 80.7812 28.9414 80.7812 28.8242ZM82.6533 21.3711H85.7295C86.3154 21.3711 86.7666 21.2334 87.083 20.958C87.4053 20.6768 87.5664 20.2842 87.5664 19.7803C87.5664 19.2764 87.4053 18.8867 87.083 18.6113C86.7666 18.3359 86.3154 18.1982 85.7295 18.1982H82.6533V21.3711ZM91.2402 24.4824C91.2402 23.1289 91.6709 22.0068 92.5322 21.1162C93.3994 20.2256 94.4922 19.7803 95.8105 19.7803C97.1934 19.7803 98.2979 20.2402 99.124 21.1602C99.9502 22.0801 100.363 23.2051 100.363 24.5352V24.8779C100.363 24.9951 100.305 25.0537 100.188 25.0537H93.1123C93.2061 25.8096 93.4932 26.4043 93.9736 26.8379C94.4541 27.2715 95.0723 27.4883 95.8281 27.4883C97.041 27.4883 97.8584 27.0371 98.2803 26.1348C98.3389 26.0293 98.4238 25.9766 98.5352 25.9766H100.064C100.146 25.9766 100.188 26.0176 100.188 26.0996C100.188 26.1465 100.176 26.208 100.152 26.2842C99.4316 28.2178 97.9902 29.1816 95.8281 29.1758C94.4863 29.1758 93.3848 28.7363 92.5234 27.8574C91.668 26.9727 91.2402 25.8477 91.2402 24.4824ZM93.1826 23.4365H98.4385C98.292 22.7979 97.9814 22.3115 97.5068 21.9775C97.0381 21.6436 96.4727 21.4766 95.8105 21.4766C95.2129 21.4766 94.668 21.6406 94.1758 21.9688C93.6836 22.2969 93.3525 22.7861 93.1826 23.4365ZM101.189 20.123C101.189 20.0176 101.245 19.9648 101.356 19.9648H102.921C103.056 19.9648 103.138 20.0234 103.167 20.1406L105.496 26.6445L107.816 20.1406C107.852 20.0234 107.937 19.9648 108.071 19.9648H109.636C109.741 19.9648 109.794 20.0176 109.794 20.123C109.794 20.1582 109.788 20.2021 109.776 20.2549L106.516 28.8242C106.469 28.9414 106.398 29 106.305 29H104.688C104.594 29 104.521 28.9414 104.468 28.8242L101.207 20.2549C101.195 20.2021 101.189 20.1582 101.189 20.123ZM110.717 18.3828V16.5811C110.717 16.4639 110.778 16.4023 110.901 16.3965H112.703C112.82 16.3965 112.879 16.458 112.879 16.5811V18.3828C112.879 18.5 112.82 18.5586 112.703 18.5586H110.901C110.778 18.5586 110.717 18.5 110.717 18.3828ZM110.919 28.8242V20.1406C110.919 20.0234 110.978 19.9648 111.095 19.9648H112.501C112.618 19.9648 112.677 20.0234 112.677 20.1406V28.8242C112.677 28.9414 112.618 29 112.501 29H111.095C110.978 29 110.919 28.9414 110.919 28.8242ZM114.514 24.4824C114.514 23.1289 114.944 22.0068 115.806 21.1162C116.673 20.2256 117.766 19.7803 119.084 19.7803C120.467 19.7803 121.571 20.2402 122.397 21.1602C123.224 22.0801 123.637 23.2051 123.637 24.5352V24.8779C123.637 24.9951 123.578 25.0537 123.461 25.0537H116.386C116.479 25.8096 116.767 26.4043 117.247 26.8379C117.728 27.2715 118.346 27.4883 119.102 27.4883C120.314 27.4883 121.132 27.0371 121.554 26.1348C121.612 26.0293 121.697 25.9766 121.809 25.9766H123.338C123.42 25.9766 123.461 26.0176 123.461 26.0996C123.461 26.1465 123.449 26.208 123.426 26.2842C122.705 28.2178 121.264 29.1816 119.102 29.1758C117.76 29.1758 116.658 28.7363 115.797 27.8574C114.941 26.9727 114.514 25.8477 114.514 24.4824ZM116.456 23.4365H121.712C121.565 22.7979 121.255 22.3115 120.78 21.9775C120.312 21.6436 119.746 21.4766 119.084 21.4766C118.486 21.4766 117.941 21.6406 117.449 21.9688C116.957 22.2969 116.626 22.7861 116.456 23.4365ZM124.498 20.0879C124.498 20.0059 124.548 19.9648 124.647 19.9648H126.177C126.312 19.9648 126.394 20.0234 126.423 20.1406L128.225 26.6973L130.079 20.5801C130.114 20.4629 130.182 20.4014 130.281 20.3955H131.934C132.027 20.3955 132.095 20.457 132.136 20.5801L133.99 26.6973L135.783 20.1406C135.818 20.0234 135.903 19.9648 136.038 19.9648H137.567C137.661 19.9648 137.711 20.0059 137.717 20.0879C137.717 20.1348 137.708 20.1846 137.69 20.2373L134.992 28.8242C134.957 28.9414 134.881 29 134.764 29H133.138C133.021 29 132.944 28.9414 132.909 28.8242L131.107 22.7686L129.306 28.8242C129.271 28.9414 129.191 29 129.068 29H127.451C127.334 29 127.258 28.9414 127.223 28.8242L124.516 20.2373C124.504 20.1846 124.498 20.1348 124.498 20.0879ZM138.455 26.1348C138.455 26.0176 138.514 25.959 138.631 25.959H140.143C140.248 25.959 140.31 26.0176 140.327 26.1348C140.485 27.0371 141.168 27.4883 142.375 27.4883C143.6 27.4883 144.212 27.1104 144.212 26.3545C144.212 26.0439 144.027 25.7949 143.658 25.6074C143.295 25.4199 142.677 25.2559 141.804 25.1152C140.726 24.9336 139.935 24.6348 139.431 24.2188C138.933 23.7969 138.684 23.2197 138.684 22.4873C138.684 21.5967 139.026 20.9229 139.712 20.4658C140.397 20.0088 141.227 19.7803 142.199 19.7803C143.23 19.7803 144.065 20.0293 144.704 20.5273C145.349 21.0254 145.712 21.6787 145.794 22.4873C145.794 22.6045 145.735 22.6631 145.618 22.6631H144.089C144.007 22.6631 143.945 22.6045 143.904 22.4873C143.676 21.8135 143.075 21.4766 142.103 21.4766C141.634 21.4766 141.241 21.5527 140.925 21.7051C140.608 21.8516 140.45 22.0801 140.45 22.3906C140.45 22.7363 140.62 23.0088 140.96 23.208C141.306 23.4072 141.927 23.5859 142.823 23.7441C143.89 23.9375 144.698 24.2246 145.249 24.6055C145.806 24.9805 146.084 25.5635 146.084 26.3545C146.084 27.2334 145.738 27.9248 145.047 28.4287C144.361 28.9268 143.453 29.1758 142.322 29.1758C141.232 29.1758 140.333 28.9033 139.624 28.3584C138.915 27.8135 138.525 27.0723 138.455 26.1348ZM153.528 27.8662C152.644 26.9873 152.201 25.8594 152.201 24.4824C152.201 23.0996 152.644 21.9717 153.528 21.0986C154.419 20.2197 155.541 19.7803 156.895 19.7803C158.254 19.7803 159.376 20.2197 160.261 21.0986C161.151 21.9717 161.597 23.0996 161.597 24.4824C161.597 25.8594 161.151 26.9873 160.261 27.8662C159.376 28.7393 158.254 29.1758 156.895 29.1758C155.541 29.1758 154.419 28.7393 153.528 27.8662ZM154.864 22.3027C154.337 22.8535 154.073 23.5801 154.073 24.4824C154.073 25.3848 154.337 26.1113 154.864 26.6621C155.392 27.2129 156.068 27.4883 156.895 27.4883C157.727 27.4883 158.406 27.2129 158.934 26.6621C159.461 26.1113 159.725 25.3848 159.725 24.4824C159.725 23.5801 159.461 22.8535 158.934 22.3027C158.406 21.752 157.727 21.4766 156.895 21.4766C156.068 21.4766 155.392 21.752 154.864 22.3027ZM163.732 28.8242V20.1406C163.732 20.0234 163.791 19.9648 163.908 19.9648H165.314C165.432 19.9648 165.49 20.0234 165.49 20.1406V20.958C166.305 20.1787 167.26 19.7861 168.355 19.7803C169.34 19.7803 170.104 20.0586 170.649 20.6152C171.194 21.166 171.467 21.9395 171.467 22.9355V28.8242C171.467 28.9414 171.408 29 171.291 29H169.885C169.768 29 169.706 28.9414 169.7 28.8242V23.4541C169.7 22.1357 169.103 21.4766 167.907 21.4766C167.222 21.4766 166.647 21.7432 166.185 22.2764C165.722 22.8096 165.49 23.5684 165.49 24.5527V28.8242C165.49 28.9414 165.432 29 165.314 29H163.908C163.791 29 163.732 28.9414 163.732 28.8242Z" fill="white" />
                <defs>
                    <clipPath id="clip0_107_42">
                        <rect width="97.7254" height="24" fill="white" transform="translate(183 10)" />
                    </clipPath>
                </defs>
            </svg>
        </a>
    </section>

    <!-- We’ve been featured in -->
    <section class="py-6 md:py-8 lg:py-12 2xl:py-20 bg-gray-50">
        <div class="container mx-auto px-6 md:px-20 lg:px-24 xl:px-[180px]">
            <h2 class="text-center font-montserrat text-primary text-lg lg:text-2xl font-medium uppercase mb-5 md:mb-8">We've been featured in</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 lg:gap-10 items-center justify-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[130px] md:w-[180px] lg:w-[228px]" viewBox="0 0 228 27" fill="none">
                    <path d="M14.2404 11.0073C14.2404 14.0255 14.204 17.0437 14.2631 20.0619C14.2631 20.971 14.0358 21.2073 13.1222 21.1982C9.39492 21.1437 5.66462 21.1437 1.93128 21.1982C1.09492 21.2028 0.872192 20.9528 0.872192 20.1346C0.908556 13.9982 0.908556 7.86339 0.872192 1.73006C0.872192 0.848239 1.08128 0.566422 2.00856 0.580058C5.73583 0.628543 9.46613 0.628543 13.1995 0.580058C14.054 0.580058 14.2676 0.843694 14.2586 1.65733C14.2176 4.77551 14.2404 7.89369 14.2404 11.0073Z" fill="#D02800" />
                    <path d="M165.459 0.693743C166.786 0.693743 168.113 0.634652 169.436 0.693743C171.709 0.811925 173.672 1.60283 174.836 3.66192C176.263 6.23011 175.177 9.41192 172.259 10.7756C171.045 11.3437 171.118 11.8665 171.563 12.8256C172.65 15.0093 173.998 17.053 175.577 18.9119C175.72 19.1077 175.915 19.2593 176.14 19.3494C176.365 19.4394 176.611 19.4642 176.849 19.421C177.436 19.3528 177.59 19.6165 177.604 20.1756C177.618 20.7347 177.34 20.9074 176.813 20.8937C175.831 20.8937 174.845 20.8392 173.868 20.8937C173.581 20.9164 173.293 20.855 173.041 20.7169C172.788 20.5789 172.581 20.3702 172.445 20.1165C170.657 17.7419 169.162 15.1594 167.995 12.4256C167.472 11.121 166.536 11.5165 165.722 11.5483C164.745 11.6165 165.304 12.4847 165.268 12.9483C165.186 14.7665 165.236 16.5483 165.231 18.3483C165.231 18.9256 165.09 19.5892 166.077 19.4165C166.777 19.2892 166.686 19.7937 166.718 20.2392C166.759 20.7756 166.513 20.8892 166.027 20.8801C164.359 20.8801 162.69 20.8801 161.027 20.8801C160.622 20.8801 160.24 20.9028 160.263 20.2937C160.286 19.8119 160.295 19.3847 160.949 19.471C161.677 19.571 161.704 19.1528 161.704 18.6028C161.704 13.3937 161.704 8.18465 161.704 2.97556C161.704 2.43465 161.704 1.99829 160.959 2.09374C160.318 2.17556 160.281 1.75283 160.268 1.26192C160.245 0.521016 160.781 0.698289 161.177 0.693743C162.613 0.684652 164.054 0.693743 165.459 0.693743ZM165.245 6.08011V7.68465C165.245 10.0574 165.245 9.95738 167.709 10.0892C169.527 10.1847 170.704 9.45738 171.427 7.88011C171.802 7.13635 171.949 6.29857 171.85 5.47152C171.752 4.64446 171.412 3.86484 170.872 3.23011C170.086 2.21193 167.122 1.46647 165.681 2.16647C164.659 2.66193 165.445 3.89374 165.263 4.77102C165.212 5.20556 165.205 5.6443 165.245 6.08011Z" fill="#040404" />
                    <path d="M21.8722 0.694048C23.3358 0.798594 25.1131 0.494048 26.8722 0.898594C29.4858 1.50314 31.2449 3.02587 31.9358 5.62587C32.8949 9.11992 32.854 12.813 31.8177 16.285C30.9722 19.1441 28.5449 20.8031 25.2131 20.8713C22.7086 20.9259 20.2131 20.8986 17.704 20.8713C17.2995 20.8713 16.6722 21.1759 16.6131 20.3304C16.5631 19.6486 16.7677 19.3168 17.4949 19.4213C18.1358 19.5077 18.0449 19.044 18.0449 18.6668C18.0449 13.4122 18.0449 8.15314 18.0449 2.89859C18.0449 2.2395 17.8267 2.04405 17.2086 2.09859C16.5904 2.15314 16.6313 1.75768 16.5995 1.33496C16.5631 0.780412 16.8495 0.689503 17.3086 0.694048C18.7313 0.703139 20.154 0.694048 21.8722 0.694048ZM21.5722 10.7759C21.5722 13.3577 21.5722 15.9395 21.5722 18.5031C21.5722 18.8713 21.3313 19.3395 22.0677 19.485C25.4404 20.1668 27.7767 18.7713 28.5904 15.4259C29.2304 12.7148 29.3139 9.90199 28.8358 7.15769C28.1722 3.10314 26.7131 2.00314 22.5586 2.07587C21.6767 2.07587 21.5313 2.39405 21.5449 3.16223C21.5995 5.69859 21.5722 8.23496 21.5722 10.7759Z" fill="#030303" />
                    <path d="M141.69 10.6849C141.834 12.7809 141.524 14.8833 140.781 16.8486C139.622 19.7167 137.313 21.1895 133.963 21.2213C130.613 21.2531 128.054 19.7986 127.004 16.8667C125.578 13.0394 125.539 8.83324 126.895 4.98038C128.009 1.73493 130.422 0.284927 134.086 0.344018C137.568 0.403109 139.886 2.02584 140.986 5.21675C141.566 6.97806 141.805 8.83398 141.69 10.6849ZM138.149 10.9122C138.199 8.83038 138.118 6.82129 137.472 4.9122C136.745 2.74856 135.549 1.77129 133.731 1.8122C132.054 1.85311 130.777 2.89856 130.218 4.99402C129.16 8.82241 129.183 12.8691 130.286 16.6849C130.904 18.7895 132.177 19.7667 133.922 19.744C135.577 19.744 136.79 18.7304 137.459 16.7395C138.036 14.8541 138.268 12.8801 138.145 10.9122H138.149Z" fill="#050505" />
                    <path d="M191.204 13.8801C191.204 10.1892 191.204 6.49832 191.204 2.80741C191.204 2.19832 190.959 2.05286 190.427 2.10286C189.763 2.15741 189.777 1.70741 189.763 1.23923C189.763 0.611955 190.181 0.698319 190.559 0.693773C191.54 0.693773 192.527 0.693773 193.509 0.693773C193.845 0.693773 194.245 0.634682 194.195 1.14832C194.159 1.49832 194.359 2.08468 193.772 2.05741C192.49 1.98468 192.809 2.85741 192.809 3.5165C192.809 8.83468 192.809 14.1483 192.777 19.462C192.777 19.9165 193.231 20.7165 192.281 20.862C191.907 20.9617 191.509 20.925 191.16 20.7585C190.81 20.5919 190.531 20.3063 190.372 19.9529C187.736 15.2847 185.018 10.662 182.327 6.02559C182.209 5.82559 182.09 5.63468 181.922 5.36196C181.581 5.76196 181.709 6.15741 181.709 6.50286C181.709 10.4423 181.709 14.3923 181.709 18.3529C181.709 18.8574 181.527 19.5029 182.445 19.3847C183.154 19.2983 183.049 19.8074 183.077 20.2438C183.109 20.8165 182.768 20.8574 182.327 20.8529C181.345 20.8529 180.363 20.8529 179.381 20.8529C178.895 20.8529 178.522 20.8529 178.545 20.1756C178.568 19.6574 178.636 19.2665 179.259 19.3847C180.031 19.5029 179.99 19.0256 179.99 18.5029C179.99 13.3332 179.99 8.16499 179.99 2.99832C179.99 2.37105 179.949 1.95286 179.149 2.05741C178.586 2.13014 178.581 1.70286 178.549 1.28468C178.509 0.721046 178.813 0.648319 179.263 0.652864C180.345 0.652864 181.431 0.711955 182.509 0.652864C183.327 0.593773 183.463 1.21196 183.74 1.68014C186.146 5.75287 188.54 9.82862 190.922 13.9074L191.204 13.8801Z" fill="#050505" />
                    <path d="M40.8722 10.8621C40.8106 8.71604 41.1704 6.57876 41.9313 4.57117C44.1767 -0.8061 51.7494 -0.333371 54.5949 1.94845C54.9222 2.21208 55.5858 5.18027 55.4131 5.5439C55.2404 5.90754 54.8176 5.75754 54.504 5.7939C54.0494 5.84845 53.7994 5.69845 53.7313 5.18026C53.3994 2.67117 51.2449 1.68936 49.1858 1.7939C47.5767 1.87117 46.404 2.61663 45.8176 3.98936C44.8586 6.12687 44.3567 8.44118 44.3442 10.7839C44.3317 13.1267 44.8088 15.4463 45.7449 17.5939C46.5267 19.4575 48.0176 20.0484 49.9494 19.7394C51.8813 19.4303 52.4131 18.8303 52.4176 16.8757C52.4176 16.1939 52.3676 15.5121 52.4176 14.8303C52.504 13.7939 52.4494 12.9712 51.0267 13.2257C50.4585 13.3257 50.4267 12.903 50.4131 12.4757C50.3994 12.0484 50.4949 11.753 51.0449 11.7575C52.8631 11.7575 54.6813 11.7575 56.4994 11.7575C56.9267 11.7575 57.1358 11.9166 57.104 12.3621C57.104 12.6939 57.154 13.1212 56.6494 13.103C55.6858 13.0484 55.8722 13.7212 55.8722 14.2848C55.8722 14.6257 55.8722 14.9666 55.8722 15.3075C55.8722 18.8121 54.054 20.8075 50.4813 21.1757C44.8767 21.7439 41.4949 18.9939 41.0176 13.503C40.9404 12.5939 40.9176 11.7348 40.8722 10.8621Z" fill="#050505" />
                    <path d="M155.559 8.5803C155.559 6.76212 155.559 4.97576 155.559 3.17121C155.559 2.56666 155.631 1.99394 154.695 2.08939C154.077 2.15303 154.24 1.63485 154.19 1.25303C154.149 0.798482 154.418 0.680301 154.827 0.689392C155.904 0.689392 156.986 0.689392 158.068 0.689392C158.522 0.689392 158.822 0.762118 158.759 1.31666C158.713 1.69394 158.827 2.1803 158.204 2.10303C157.295 1.99394 157.327 2.55757 157.327 3.18485C157.327 6.64394 157.327 10.0985 157.281 13.5576C157.257 14.3835 157.155 15.2053 156.977 16.0121C156.286 19.4121 154.013 21.2303 150.54 21.1758C146.904 21.1303 144.681 19.3167 143.981 15.9121C143.631 14.2212 143.718 12.5167 143.709 10.8167C143.709 8.28485 143.709 5.75303 143.709 3.22121C143.709 2.5303 143.749 1.95303 142.759 2.09394C142.14 2.1803 142.263 1.67121 142.218 1.29848C142.149 0.725756 142.477 0.6803 142.927 0.684846C144.545 0.684846 146.168 0.684846 147.786 0.684846C148.199 0.684846 148.586 0.662119 148.563 1.26212C148.563 1.71666 148.563 2.17121 147.89 2.10303C147.099 2.00757 147.186 2.55757 147.19 3.01212C147.213 6.95757 147.218 10.903 147.259 14.8303C147.265 15.7091 147.431 16.5793 147.749 17.3985C148.295 18.8348 149.399 19.5258 150.895 19.6439C152.39 19.7621 153.599 19.2894 154.404 17.9848C155.102 16.8049 155.474 15.4605 155.481 14.0894C155.54 12.2394 155.481 10.3894 155.481 8.53939L155.559 8.5803Z" fill="#070707" />
                    <path d="M92.1722 20.8846C91.3858 20.8846 90.5994 20.8846 89.8131 20.8846C89.554 20.8846 89.1631 21.0028 89.1494 20.5573C89.1494 20.1982 88.9449 19.5801 89.3813 19.5301C90.5813 19.4028 89.8722 18.7619 89.7994 18.3073C89.7363 18.0237 89.6465 17.7468 89.5313 17.4801C89.1313 16.3982 89.1858 14.721 88.3131 14.3437C87.1085 13.8255 85.5267 14.2028 84.104 14.1528C83.4858 14.1255 83.3949 14.5482 83.2631 14.9573C82.9449 15.9755 82.6176 16.9982 82.354 18.0301C82.1949 18.6073 81.4449 19.3573 82.8085 19.5982C83.1176 19.6528 82.9631 20.2119 82.954 20.5391C82.954 20.9937 82.5722 20.8846 82.304 20.8846C81.3222 20.8846 80.3403 20.8846 79.3585 20.8846C78.8313 20.8846 78.6722 20.6846 78.6949 20.1937C78.7176 19.7028 78.7585 19.3755 79.3222 19.4664C80.3313 19.6346 80.3813 18.871 80.5813 18.2391C82.3055 12.7331 84.0358 7.2149 85.7722 1.6846C85.9585 1.09823 86.054 0.634595 86.8813 0.643686C87.7085 0.652777 87.7903 1.09823 87.9949 1.68914C89.7646 7.1952 91.5494 12.6967 93.3494 18.1937C93.5676 18.8619 93.6494 19.6619 94.7449 19.4801C95.3267 19.3801 95.2494 19.9073 95.2813 20.2891C95.3267 20.7437 95.0813 20.8755 94.6767 20.871L92.1722 20.8846ZM87.8994 12.621C87.8978 12.4819 87.8826 12.3434 87.854 12.2073C87.2722 10.4255 86.6813 8.64823 86.004 6.59823C85.6222 7.69369 85.2994 8.53914 85.0313 9.40278C83.904 13.0391 83.9085 13.0391 87.7585 12.6891C87.8084 12.6731 87.8559 12.6501 87.8994 12.621Z" fill="#080808" />
                    <path d="M208.304 20.8848C207.568 20.8848 206.827 20.8848 206.095 20.8848C205.79 20.8848 205.318 21.0348 205.377 20.4575C205.409 20.1166 205.14 19.5484 205.722 19.5075C206.49 19.4439 206.281 19.053 206.154 18.6257C206.059 18.2984 205.959 17.9712 205.849 17.6484C204.599 13.8939 204.604 13.9121 200.531 14.1394C200.294 14.116 200.057 14.1825 199.867 14.3256C199.677 14.4687 199.547 14.678 199.504 14.9121C199.195 15.9894 198.84 17.0484 198.549 18.1303C198.413 18.653 197.64 19.3939 199.004 19.5666C199.327 19.6075 199.186 20.1712 199.186 20.4757C199.186 21.0394 198.731 20.853 198.427 20.8575C197.54 20.8848 196.659 20.8575 195.772 20.8575C195.318 20.8575 194.886 20.9121 194.913 20.2166C194.913 19.6894 195.04 19.3439 195.649 19.4394C196.622 19.5984 196.613 18.8166 196.79 18.2575C198.49 12.8803 200.163 7.49845 201.895 2.13026C202.081 1.5439 201.895 0.643899 203.09 0.621172C204.349 0.593899 204.199 1.55753 204.409 2.18481C206.181 7.53935 207.904 12.9075 209.636 18.2757C209.845 18.9303 209.972 19.6121 210.954 19.453C211.522 19.3621 211.504 19.8212 211.54 20.2303C211.586 20.7939 211.272 20.8621 210.827 20.8575C209.963 20.8757 209.136 20.8848 208.304 20.8848ZM202.236 6.48935C201.781 7.85299 201.481 8.88026 201.163 9.88481C200.204 12.903 200.204 12.8803 203.345 12.7621C204.059 12.7303 204.29 12.6484 204.004 11.853C203.386 10.2439 202.895 8.57572 202.236 6.48935Z" fill="#080808" />
                    <path d="M74.3813 10.8576C74.3813 13.3939 74.3813 15.9258 74.3813 18.4576C74.3813 19.0167 74.3131 19.553 75.1676 19.4258C75.854 19.3258 75.7858 19.8167 75.8176 20.2712C75.854 20.8485 75.5131 20.8849 75.0813 20.8849C73.4131 20.8849 71.7449 20.8849 70.0813 20.8849C69.5676 20.8849 69.3904 20.6849 69.4176 20.1894C69.4404 19.7849 69.4176 19.3349 69.9904 19.4258C70.9495 19.5803 70.854 18.9712 70.854 18.3803C70.854 13.3121 70.8222 8.24849 70.854 3.18486C70.854 2.27577 70.5904 2.04849 69.704 2.07577C68.1904 2.12577 66.5585 1.78031 66.254 3.99849C66.1904 4.45304 65.6131 4.33031 65.2358 4.30759C64.7176 4.27577 64.7813 3.92122 64.854 3.56668C64.854 3.47122 64.8767 3.37577 64.8858 3.28031C65.1176 0.689403 65.1176 0.689404 67.7267 0.689404C71.3085 0.689404 74.8995 0.771221 78.4767 0.643949C79.804 0.598494 80.1949 1.09849 80.2222 2.22122C80.2222 2.60759 80.3404 2.99395 80.3449 3.38486C80.3495 3.77577 80.7313 4.1985 80.054 4.29395C79.5767 4.36213 79.1449 4.41213 78.8585 3.78486C78.2267 2.35759 76.0404 1.51213 74.6858 2.11213C74.154 2.3394 74.3858 2.77577 74.3858 3.11213C74.3722 5.69849 74.3813 8.28031 74.3813 10.8576Z" fill="#030303" />
                    <path d="M103.736 20.8849C101.672 20.8849 99.6086 20.8849 97.5449 20.8849C97.0904 20.8849 96.5404 21.0804 96.5404 20.244C96.5404 19.594 96.754 19.3349 97.3813 19.4304C98.0086 19.5258 97.9859 19.1485 97.9859 18.7213C97.9859 13.4122 97.9859 8.10915 97.9859 2.81218C97.9859 2.35764 97.8768 2.06673 97.3404 2.13036C96.6495 2.21673 96.5268 1.82582 96.5495 1.22127C96.5813 0.471272 97.1404 0.716726 97.5131 0.707635C99.0359 0.684908 100.559 0.707635 102.059 0.707635C102.481 0.707635 102.854 0.707636 102.804 1.29855C102.772 1.68945 102.84 2.16673 102.254 2.10764C101.345 2.01673 101.495 2.58945 101.495 3.12127C101.495 8.23491 101.495 13.3485 101.472 18.4667C101.472 19.3758 101.822 19.4758 102.581 19.4531C104.249 19.4031 105.922 19.3895 107.581 19.4531C108.627 19.494 109.318 19.144 109.531 18.1258C109.681 17.4076 110.063 17.1122 110.754 17.2713C111.663 17.4804 111.099 18.1304 111.04 18.5485C110.704 20.8985 110.681 20.8985 108.268 20.8985L103.736 20.8849Z" fill="#020202" />
                    <path d="M219.472 20.8846C217.509 20.8846 215.545 20.8846 213.563 20.8846C213.159 20.8846 212.536 21.1937 212.472 20.3437C212.422 19.6574 212.636 19.3392 213.381 19.4346C214.022 19.521 213.922 19.0483 213.922 18.6756C213.922 13.4149 213.922 8.15434 213.922 2.89374C213.922 2.37101 213.849 2.03919 213.222 2.11647C212.595 2.19374 212.499 1.86192 212.477 1.3301C212.449 0.598284 212.931 0.716464 213.359 0.716464C214.874 0.716464 216.396 0.716464 217.927 0.716464C218.281 0.716464 218.768 0.571011 218.754 1.20737C218.754 1.63465 218.859 2.1801 218.159 2.11647C217.363 2.03919 217.454 2.54374 217.454 3.02556C217.454 8.18919 217.477 13.3528 217.431 18.5165C217.431 19.3437 217.736 19.4619 218.449 19.4256C220.118 19.3846 221.79 19.3574 223.449 19.4256C224.54 19.471 225.304 19.1483 225.504 18.0619C225.649 17.2756 226.136 17.121 226.763 17.271C227.559 17.4574 227.081 18.0483 227.022 18.4483C226.663 20.8892 226.654 20.8892 224.172 20.8892L219.472 20.8846Z" fill="#020202" />
                    <path d="M123.599 11.9577C123.454 14.685 123.863 18.0032 123.377 21.3032C122.954 24.1895 121.527 25.8486 119.027 26.3532C118.449 26.4759 117.913 26.6395 117.577 25.8577C117.24 25.0759 117.945 25.1395 118.286 24.9168C118.665 24.6461 118.984 24.3009 119.225 23.9023C119.466 23.5036 119.623 23.06 119.686 22.5986C119.895 21.6469 120.012 20.6773 120.036 19.7032C120.068 14.2486 120.036 8.79407 120.036 3.33952C120.036 2.73498 120.24 1.97589 119.159 2.1168C118.577 2.18498 118.586 1.77134 118.554 1.35771C118.518 0.84407 118.727 0.689526 119.227 0.698617C120.945 0.698617 122.668 0.698617 124.386 0.698617C124.877 0.698617 125.095 0.848617 125.072 1.37134C125.072 1.82589 124.977 2.18043 124.436 2.11225C123.509 1.97589 123.599 2.59407 123.599 3.18498C123.599 5.91225 123.599 8.64407 123.599 11.9577Z" fill="#070707" />
                    <path d="M36.7267 0.693859C37.6085 0.693859 38.4949 0.693859 39.3767 0.693859C39.8722 0.693859 40.204 0.721133 40.1767 1.37113C40.1767 1.93477 39.9767 2.18931 39.404 2.1075C38.4949 1.97568 38.4949 2.53022 38.4949 3.17568C38.4949 8.23325 38.4949 13.2954 38.4949 18.362C38.4949 18.9893 38.4585 19.5802 39.3767 19.4257C40.0813 19.3029 40.1449 19.6848 40.1631 20.262C40.1631 20.9757 39.7494 20.8893 39.3085 20.8893C37.5403 20.8893 35.7722 20.8893 34.0085 20.8893C33.4813 20.8893 33.1994 20.7984 33.2176 20.1848C33.2358 19.5711 33.354 19.3211 33.954 19.4257C34.9813 19.6029 35.0176 19.0166 35.0131 18.2348C34.9888 13.3196 34.9888 8.40295 35.0131 3.48477C35.0131 2.63931 35.0722 1.89386 33.8403 2.09386C33.2722 2.18477 33.2494 1.76659 33.2267 1.34386C33.1994 0.825678 33.4267 0.675678 33.9131 0.689315C34.8585 0.712042 35.7949 0.693859 36.7267 0.693859Z" fill="#010101" />
                    <path d="M62.4131 10.7757C62.4131 13.3075 62.4131 15.8393 62.4131 18.3711C62.4131 19.0393 62.4586 19.5484 63.3222 19.403C64.0677 19.2757 64.0495 19.7348 64.0722 20.2711C64.104 21.0166 63.6177 20.8575 63.1904 20.862C61.4722 20.862 59.754 20.862 58.0359 20.862C57.4995 20.862 57.1268 20.862 57.1268 20.1257C57.1268 19.3893 57.5222 19.3302 58.0359 19.3984C58.7949 19.4984 58.9449 19.1257 58.9177 18.4893C58.8995 13.3378 58.8995 8.17871 58.9177 3.01204C58.9177 2.32568 58.7268 2.00295 58.0086 2.10295C57.4086 2.18477 57.1222 1.98022 57.1268 1.31204C57.1268 0.471132 57.7177 0.707495 58.1449 0.70295C59.8177 0.684768 61.4843 0.684768 63.1449 0.70295C63.5268 0.70295 64.054 0.484767 64.054 1.25295C64.054 1.83477 63.9495 2.20749 63.254 2.10295C62.3177 1.96659 62.3949 2.59386 62.3949 3.20295C62.4177 5.73022 62.4131 8.26204 62.4131 10.7757Z" fill="#010101" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-[130px] md:w-[120px] lg:w-[161px]" viewBox="0 0 161 59" fill="none">
                    <path d="M66.5543 12.9727C69.0088 10.2682 72.0906 9.75909 75.4179 10.7C78.7452 11.6409 80.277 14.1955 80.9088 17.4045C81.0504 18.1248 81.1235 18.8569 81.127 19.5909C81.127 24.5545 81.127 29.5182 81.1497 34.4818C81.1497 35.1818 81.0043 35.4455 80.2406 35.4273C77.9861 35.3788 75.7285 35.3788 73.4679 35.4273C72.6952 35.4273 72.4634 35.2455 72.4725 34.45C72.5134 30.5273 72.4997 26.6045 72.4725 22.6864C72.4797 22.0272 72.4295 21.3687 72.3225 20.7182C72.0543 19.2773 71.1361 18.4455 69.8225 18.3227C69.1627 18.2246 68.4892 18.3562 67.9149 18.6955C67.3406 19.0348 66.9004 19.5611 66.6679 20.1864C66.3722 20.9678 66.2407 21.8018 66.2816 22.6364C66.2816 26.5591 66.2816 30.4773 66.3043 34.4C66.3043 35.2409 66.0725 35.45 65.2588 35.4318C63.0709 35.3712 60.8831 35.3712 58.6952 35.4318C57.8497 35.4318 57.5861 35.2364 57.5906 34.35C57.627 26.5773 57.6179 18.8 57.5906 11.0273C57.5906 7.35 57.5543 3.67727 57.5361 0H57.9543C58.2588 0.336364 58.6634 0.186364 59.027 0.190909C61.4316 0.190909 63.8407 0.218182 66.2497 0.227273L66.2906 12.9545L66.4179 13.1136L66.5543 12.9727Z" fill="#3E0289" />
                    <path d="M0.217926 10.8364C2.9452 10.8364 5.70429 10.9001 8.4452 10.8637C9.28156 10.8637 9.71793 11.0546 10.0316 11.9046C11.5407 15.9319 13.1316 19.9273 14.6952 23.9319C14.8316 24.2728 14.977 24.6092 15.1497 24.9728C15.527 24.7273 15.5543 24.3546 15.677 24.0637C17.2952 19.9728 18.9225 15.8819 20.5088 11.7637C20.5632 11.4784 20.7252 11.2249 20.9612 11.0557C21.1973 10.8865 21.4894 10.8145 21.777 10.8546C24.1361 10.9137 26.4997 10.8773 28.8634 10.8773C30.0543 10.8773 30.0588 10.8773 29.6043 11.9728L16.8225 42.7273C16.127 44.4682 16.127 44.4682 14.2543 44.4682H7.99974C6.88611 44.4682 6.88156 44.4682 7.33156 43.3955C8.33156 41.0319 9.33156 38.6682 10.3497 36.3092C10.4589 36.0998 10.5197 35.8685 10.5275 35.6325C10.5354 35.3965 10.4902 35.1617 10.3952 34.9455C7.11944 27.2485 3.85277 19.5501 0.595199 11.8501C0.50429 11.6364 0.472471 11.3637 0.217926 11.2546V10.8364Z" fill="#40048A" />
                    <path d="M160.218 0.454545C157.273 7.52727 154.329 14.6045 151.386 21.6864C151.168 22.2227 150.823 22.2727 150.336 22.2727C147.523 22.2727 144.704 22.2273 141.895 22.2727C140.9 22.2727 140.913 21.9955 141.236 21.2273C144.054 14.5091 146.854 7.78333 149.636 1.05C149.844 0.738482 149.959 0.374359 149.968 0L150.386 0C150.691 0.35 151.1 0.195455 151.463 0.2C154.027 0.2 156.595 0.2 159.159 0.2C159.523 0.213636 159.936 0.0727273 160.218 0.454545Z" fill="#40048A" />
                    <path d="M101.582 58.7773C101.359 58.3864 100.927 58.45 100.586 58.3227C97.3725 57.1909 95.6316 54.3137 96.0952 50.8682C96.2799 49.3561 96.9753 47.9524 98.0664 46.8894C99.1575 45.8264 100.579 45.1679 102.095 45.0227C105.641 44.7546 108.482 46.6046 109.368 49.7773C109.591 50.6881 109.663 51.6294 109.582 52.5636C109.545 53.3091 109.3 53.5637 108.518 53.5455C106.368 53.4864 104.213 53.5182 102.059 53.5455C101.724 53.4798 101.377 53.5113 101.059 53.6364C101.927 54.9182 103.518 55.2409 105.091 54.3409C105.181 54.2677 105.285 54.2131 105.396 54.1803C105.507 54.1475 105.624 54.1371 105.74 54.1498C105.855 54.1625 105.967 54.198 106.068 54.2542C106.17 54.3104 106.259 54.3862 106.332 54.4773C106.933 55.0553 107.571 55.5943 108.241 56.0909C108.891 56.5455 108.695 56.8455 108.186 57.2227C107.513 57.7169 106.772 58.1105 105.986 58.3909C105.75 58.4773 105.404 58.4227 105.327 58.7864L101.582 58.7773ZM102.986 50.4546C103.504 50.4546 104.027 50.4546 104.545 50.4546C105.222 50.4864 105.113 50.1682 104.863 49.7773C104.227 48.7864 102.418 48.6273 101.432 49.4818C101.195 49.6818 100.872 49.9364 100.945 50.2273C101.045 50.65 101.468 50.4136 101.745 50.4364C102.154 50.4546 102.572 50.4546 102.986 50.4546Z" fill="#242B31" />
                    <path d="M134.763 58.7772C134.413 58.3772 133.854 58.4908 133.45 58.2817C132.94 58.0631 132.448 57.8063 131.977 57.5135C130.236 56.2681 130.291 55.6954 132.163 54.859C132.477 54.7181 132.795 54.5681 133.113 54.4408C133.886 54.1226 134.695 53.4044 135.318 54.6772C135.477 54.8624 135.702 54.9782 135.945 54.9999C136.4 55.0681 137.059 55.2544 137.232 54.6817C137.454 53.9544 136.691 54.0226 136.282 53.8954C135.395 53.6044 134.463 53.4408 133.586 53.1181C133 52.9019 132.474 52.5484 132.053 52.0872C131.632 51.626 131.327 51.0705 131.165 50.4674C131.002 49.8642 130.987 49.2309 131.119 48.6205C131.252 48.0101 131.529 47.4403 131.927 46.959C133.791 44.6226 139.454 43.8135 141.709 47.6181C142.032 48.159 142.05 48.4408 141.363 48.6226C140.731 48.8089 140.11 49.0335 139.504 49.2954C138.804 49.5772 138.118 49.9772 137.572 49.0272C137.482 48.859 137.159 48.7772 136.927 48.7454C136.522 48.6863 135.991 48.6272 135.882 49.1363C135.772 49.6454 136.304 49.7135 136.654 49.7954C137.747 49.9838 138.823 50.2589 139.872 50.6181C140.6 50.8741 141.227 51.3546 141.663 51.9903C142.099 52.6259 142.322 53.3838 142.3 54.1544C142.354 55.9181 141.632 57.2499 139.977 57.9817C139.295 58.2817 138.586 58.5135 137.891 58.7772H134.763Z" fill="#242B31" />
                    <path d="M46.1816 12.8862C46.2907 12.8089 46.3316 12.7953 46.3361 12.7726C46.5361 12.1817 46.0725 11.2999 46.5816 11.0089C47.0907 10.718 47.9452 10.8862 48.6179 10.8817C50.3225 10.8817 52.0225 10.918 53.727 10.8817C54.5043 10.8817 54.7997 11.0271 54.7952 11.8908C54.7588 19.3908 54.7588 26.8908 54.7952 34.3908C54.7952 35.1726 54.6452 35.4817 53.777 35.4544C51.6952 35.3817 49.6043 35.3771 47.5225 35.4544C46.6134 35.4862 46.2452 35.2317 46.3907 34.309C46.4061 33.9825 46.3909 33.6553 46.3452 33.3317C45.0134 34.5999 43.6179 35.5771 41.9134 35.868C37.8225 36.559 34.2725 35.3908 31.4588 32.3044C26.8725 27.2726 26.9407 18.8589 31.627 13.9226C34.5861 10.8044 38.227 9.67258 42.4407 10.6453C43.8755 11.021 45.1733 11.7984 46.1816 12.8862ZM46.5725 23.2044C46.5809 22.5451 46.4588 21.8907 46.2133 21.2788C45.9678 20.6669 45.6037 20.1096 45.1419 19.6389C44.6801 19.1683 44.1299 18.7936 43.5227 18.5365C42.9156 18.2794 42.2636 18.1449 41.6043 18.1408C40.945 18.1372 40.2915 18.2635 39.681 18.5125C39.0705 18.7615 38.515 19.1283 38.0463 19.5919C37.0997 20.5283 36.5638 21.8024 36.5566 23.1339C36.5493 24.4655 37.0713 25.7453 38.0077 26.6919C38.9441 27.6386 40.2182 28.1744 41.5498 28.1817C42.211 28.2002 42.8691 28.0845 43.4843 27.8417C44.0996 27.5988 44.6593 27.2337 45.1295 26.7686C45.5998 26.3034 45.9709 25.7477 46.2205 25.1352C46.47 24.5226 46.5929 23.8658 46.5816 23.2044H46.5725Z" fill="#40048A" />
                    <path d="M95.9679 36.2772C93.3729 36.2781 90.8358 35.5096 88.6775 34.0688C86.5192 32.628 84.8365 30.5796 83.8422 28.1826C82.8479 25.7856 82.5865 23.1476 83.0913 20.6022C83.596 18.0567 84.8441 15.718 86.6778 13.8817C88.5115 12.0455 90.8485 10.7941 93.3933 10.2859C95.938 9.77764 98.5764 10.0353 100.975 11.0263C103.373 12.0173 105.424 13.6972 106.868 15.8535C108.311 18.0098 109.083 20.5458 109.086 23.1408C109.085 26.6213 107.703 29.9591 105.244 32.4219C102.784 34.8847 99.4484 36.2712 95.9679 36.2772ZM91.127 23.1272C91.12 24.084 91.3962 25.0216 91.9208 25.8218C92.4455 26.6221 93.1951 27.2492 94.0753 27.6244C94.9556 27.9996 95.9272 28.1059 96.8678 27.9302C97.8084 27.7544 98.676 27.3044 99.3613 26.6366C100.047 25.9689 100.519 25.1134 100.72 24.1777C100.92 23.242 100.839 22.268 100.487 21.3782C100.135 20.4885 99.5272 19.7227 98.7409 19.1774C97.9547 18.6321 97.0246 18.3315 96.0679 18.3136C95.4252 18.2966 94.7855 18.4085 94.1867 18.6428C93.5879 18.8771 93.0422 19.229 92.5816 19.6776C92.1211 20.1263 91.7551 20.6628 91.5052 21.2552C91.2554 21.8477 91.1268 22.4842 91.127 23.1272Z" fill="#3F0389" />
                    <path d="M136.7 23.1816C136.686 25.768 135.907 28.2924 134.46 30.4363C133.013 32.5802 130.964 34.2475 128.57 35.2277C126.177 36.208 123.547 36.4572 121.012 35.9441C118.477 35.4309 116.151 34.1783 114.327 32.3444C112.503 30.5104 111.263 28.1774 110.764 25.6395C110.265 23.1017 110.529 20.473 111.522 18.085C112.516 15.697 114.194 13.6568 116.346 12.2219C118.498 10.7869 121.027 10.0216 123.613 10.0225C125.339 10.0188 127.048 10.3572 128.642 11.0182C130.237 11.6791 131.684 12.6494 132.901 13.873C134.118 15.0966 135.08 16.5493 135.732 18.147C136.384 19.7448 136.713 21.4559 136.7 23.1816ZM123.627 18.3134C122.666 18.3152 121.728 18.6023 120.931 19.1381C120.134 19.674 119.513 20.4345 119.149 21.3233C118.784 22.212 118.692 23.189 118.884 24.1303C119.075 25.0716 119.542 25.9348 120.225 26.6105C120.907 27.2863 121.775 27.744 122.719 27.9258C123.662 28.1075 124.638 28.0051 125.523 27.6315C126.408 27.2578 127.162 26.6299 127.689 25.8271C128.217 25.0244 128.494 24.083 128.486 23.1225C128.472 21.8428 127.954 20.6204 127.044 19.7202C126.134 18.82 124.907 18.3145 123.627 18.3134Z" fill="#3F0389" />
                    <path d="M116.459 52.1273C117.341 50.0591 117.7 48.1546 118.2 46.2955C118.4 45.5637 118.704 45.3864 119.409 45.3864C122.113 45.4137 122.113 45.3864 122.822 48.0001C123.177 49.294 123.529 50.5864 123.877 51.8773H124.136C124.468 50.1228 124.859 48.3773 125.095 46.6091C125.222 45.6591 125.55 45.3046 126.522 45.391C127.597 45.4523 128.675 45.4523 129.75 45.391C130.291 45.391 130.386 45.5273 130.232 46.0501C129.083 49.947 127.954 53.8455 126.845 57.7455C126.695 58.2773 126.422 58.3682 125.936 58.3591C124.791 58.3364 123.641 58.3228 122.495 58.3591C122.388 58.3779 122.278 58.3738 122.172 58.3472C122.066 58.3206 121.967 58.2721 121.882 58.2048C121.796 58.1375 121.725 58.053 121.674 57.9566C121.623 57.8602 121.593 57.7543 121.586 57.6455C121.194 55.9776 120.701 54.3351 120.109 52.7273C119.704 54.2546 119.25 55.7728 118.904 57.3091C118.727 58.1182 118.45 58.4819 117.541 58.3955C116.499 58.3296 115.455 58.3296 114.413 58.3955C114.314 58.4143 114.212 58.4127 114.114 58.3907C114.015 58.3687 113.923 58.3269 113.841 58.2677C113.759 58.2086 113.69 58.1334 113.639 58.0467C113.587 57.96 113.554 57.8637 113.541 57.7637C112.435 53.897 111.312 50.0319 110.172 46.1682C109.977 45.5137 110.218 45.4091 110.8 45.4273C111.977 45.4591 113.163 45.4637 114.341 45.4273C114.913 45.4273 115.109 45.6137 115.209 46.1637C115.572 48.0501 115.995 49.941 116.459 52.1273Z" fill="#232A30" />
                    <path d="M86.5225 46.6136C88.0316 45.0318 89.5952 44.7454 91.2816 45.1408C93.2634 45.5954 94.6089 47.3636 94.6816 49.7318C94.7634 52.4045 94.6816 55.0772 94.7088 57.7499C94.7088 58.2727 94.4998 58.3908 94.0316 58.3818C92.8861 58.3545 91.7589 58.3454 90.5907 58.3818C90.0179 58.3818 89.8952 58.1727 89.9043 57.6499C89.927 55.709 89.9043 53.7636 89.9043 51.8227C89.9043 50.2818 89.4088 49.6408 88.2861 49.6545C87.1634 49.6681 86.5816 50.4408 86.5725 51.9272C86.5725 53.7681 86.5452 55.609 86.5725 57.4454C86.5725 58.1408 86.4407 58.4363 85.6634 58.3908C84.5907 58.3227 83.5088 58.3454 82.4361 58.3908C81.877 58.4136 81.727 58.2136 81.7316 57.6772C81.7498 53.8227 81.7498 49.9711 81.7316 46.1227C81.7316 45.5636 81.9179 45.4045 82.4498 45.4227C83.4907 45.4545 84.5361 45.4681 85.577 45.4227C86.2816 45.3818 86.7816 45.4545 86.5225 46.6136Z" fill="#232A30" />
                    <path d="M143.668 24.3499C144.41 24.3419 145.147 24.4829 145.833 24.7645C146.52 25.0461 147.144 25.4626 147.667 25.9895C148.19 26.5163 148.602 27.1426 148.878 27.8315C149.155 28.5204 149.29 29.2577 149.277 29.9999C149.267 31.5608 148.641 33.0545 147.533 34.1548C146.426 35.2551 144.929 35.8727 143.368 35.8727C142.619 35.8729 141.877 35.7233 141.187 35.4328C140.497 35.1422 139.871 34.7165 139.348 34.1808C138.824 33.6451 138.413 33.0101 138.139 32.3131C137.865 31.6162 137.732 30.8715 137.75 30.1227C137.778 28.5754 138.416 27.1017 139.524 26.0211C140.631 24.9406 142.12 24.3401 143.668 24.3499Z" fill="#40048A" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-[130px] md:w-[155px] lg:w-[139px]" viewBox="0 0 139 29" fill="none">
                    <path d="M43.2925 28.0645H36.0197C37.7106 27.2964 37.4516 25.7918 37.4379 24.4282C37.4152 21.8509 37.4379 19.2736 37.4379 16.7009C37.4379 14.3873 36.1606 13.3509 33.8697 13.81C32.4516 14.0918 32.4516 14.0918 32.4516 15.5373C32.4516 18.7191 32.4516 21.9009 32.4516 25.0827C32.4516 26.2782 32.6152 27.3555 33.7652 28.0509H26.5697C28.2561 27.2191 28.1152 25.8645 28.1106 24.5373C28.0834 18.3736 28.0561 12.21 28.0834 6.04636C28.0834 4.72363 27.6879 3.77363 26.3243 3.31909C28.4925 3.11454 30.6606 2.99181 32.5061 1.22363V13.2555C32.8925 13.1327 33.1243 13.0691 33.3425 12.9873C34.2475 12.595 35.1731 12.2521 36.1152 11.96C36.7538 11.7849 37.4239 11.7571 38.0749 11.8787C38.7258 12.0004 39.3406 12.2683 39.8729 12.6623C40.4052 13.0563 40.8411 13.566 41.1476 14.153C41.4542 14.74 41.6234 15.389 41.6425 16.0509C41.747 18.8827 41.6879 21.7191 41.6834 24.5509C41.6697 25.9509 42.0243 27.1827 43.2925 28.0645Z" fill="black" />
                    <path d="M23.2015 1.84155V10.8188C22.6472 8.77963 21.6682 6.88058 20.3288 5.2461C18.5106 3.16428 16.3424 1.837 13.4743 1.89609C10.6061 1.95519 8.70153 3.2961 7.60608 5.86428C6.79484 7.88333 6.43342 10.0549 6.54699 12.2279C6.61972 14.9552 6.62426 17.6825 6.88335 20.3597C7.08335 22.437 7.8879 24.3688 9.6379 25.6915C12.4197 27.7915 17.1379 28.2915 20.547 24.1325C21.789 22.5625 22.6984 20.7561 23.2197 18.8234C23.2788 18.6279 23.3243 18.4325 23.3834 18.2416C23.3834 18.1915 23.4424 18.1552 23.5379 18.0325V27.7506C23.4879 27.7506 23.4106 27.7506 23.3924 27.7188C22.4152 26.0188 21.8424 25.8188 20.0243 26.5961C18.3243 27.3188 16.6424 28.1234 14.7515 28.1643C5.82881 28.3552 -0.389376 21.1688 0.26517 13.7825C0.801534 7.77337 4.47426 2.62791 11.4697 1.41428C14.0093 0.901217 16.647 1.23493 18.9788 2.36428C19.3697 2.55519 19.7697 2.72791 20.1697 2.8961C21.7379 3.55519 22.1833 3.41882 23.2015 1.84155Z" fill="black" />
                    <path d="M74.8152 28.0279C76.5288 27.2961 76.7743 26.0688 76.7425 24.6006C76.6834 21.6188 76.7425 18.637 76.7425 15.6597C76.7499 15.2305 76.6051 14.8125 76.3339 14.4797C76.0627 14.1469 75.6825 13.9209 75.2606 13.8415L80.9106 12.3279L80.9925 13.437C81.5801 13.1354 82.1875 12.8742 82.8106 12.6552C83.8925 12.3642 85.0016 11.9779 86.097 11.987C88.5152 11.987 90.5061 14.2006 90.5243 16.6824C90.5243 19.4097 90.5606 22.1824 90.5243 24.9279C90.5015 26.187 90.747 27.2597 92.1106 28.0097H84.647C86.0106 27.1779 86.2061 25.9915 86.1834 24.6642C86.1379 21.937 86.1834 19.2097 86.1834 16.4824C86.1834 14.487 85.2743 13.6324 83.2743 13.7552H83.1015C81.0652 13.9461 80.9697 14.0415 80.9743 16.0779C80.9743 19.087 80.9819 22.0961 80.997 25.1052C80.997 26.7506 81.1106 26.9961 82.4288 28.0324L74.8152 28.0279Z" fill="black" />
                    <path d="M123.252 28.0597C123.083 28.0597 122.92 28.087 122.752 28.087H115.42C115.788 27.837 115.965 27.7234 116.133 27.6006C116.512 27.3568 116.823 27.0198 117.034 26.6219C117.246 26.224 117.352 25.7785 117.342 25.3279C117.321 19.0794 117.321 12.8294 117.342 6.57792C117.342 5.34156 117.292 4.23247 115.756 3.80974C117.983 3.53701 120.033 3.06428 121.765 1.43701C121.765 1.81428 121.806 2.05974 121.806 2.30519C121.806 9.88701 121.829 17.4688 121.806 25.0325C121.788 26.337 122.07 27.337 123.252 28.0597Z" fill="black" />
                    <path d="M75.2061 20.0415C75.1334 24.7324 71.4834 28.3778 66.9334 28.296C62.2607 28.2142 58.6061 24.5688 58.7061 20.0869C58.8107 15.2551 62.447 11.5597 67.0152 11.6369C69.2093 11.6857 71.2966 12.5936 72.8283 14.1652C74.36 15.7369 75.2138 17.8469 75.2061 20.0415ZM71.0379 19.9824C70.7879 18.3006 70.647 16.5097 70.2243 14.7869C70.1144 14.1338 69.7705 13.543 69.257 13.1248C68.7434 12.7066 68.0952 12.4896 67.4334 12.5142C65.6152 12.4506 64.4879 13.0187 63.8925 14.5642C63.5306 15.5332 63.2939 16.5444 63.1879 17.5733C62.9379 19.9915 62.8925 22.4233 63.5834 24.7915C64.1016 26.5778 65.3016 27.4597 66.9925 27.4278C67.7847 27.4601 68.5618 27.2044 69.1801 26.708C69.7985 26.2117 70.2162 25.5083 70.3561 24.7278C70.7016 23.2051 70.8061 21.6642 71.0334 19.9824H71.0379Z" fill="black" />
                    <path d="M138.388 19.5777H127.638C127.692 21.9323 128.411 23.9095 130.397 25.0323C133.292 26.6823 135.652 25.2686 137.783 23.2414L138.029 23.4323C137.75 24.0967 137.414 24.7355 137.024 25.3414C135.074 27.855 131.424 28.9777 128.611 27.9641C127.112 27.367 125.822 26.3441 124.899 25.0217C123.975 23.6993 123.46 22.1354 123.415 20.5232C123.415 17.8504 124.029 15.4186 126.247 13.6505C129.156 11.3414 134.033 11.6141 136.633 14.2459C138.052 15.6868 138.483 17.4595 138.388 19.5777ZM127.565 18.6368H134.752C134.905 17.1666 134.603 15.6848 133.888 14.3914C133.664 13.9832 133.346 13.6343 132.96 13.3733C132.574 13.1123 132.132 12.9468 131.67 12.8904C131.208 12.834 130.739 12.8884 130.302 13.049C129.864 13.2096 129.472 13.4718 129.156 13.8141C127.883 15.1414 127.606 16.7914 127.547 18.6368H127.565Z" fill="black" />
                    <path d="M52.6242 28.0282H44.897C46.2606 27.1918 46.6151 26.0509 46.5924 24.7055C46.547 21.7827 46.497 18.86 46.5515 15.9373C46.5515 14.8464 46.1788 14.1782 45.1879 13.7827C45.0697 13.7327 44.9561 13.66 44.6288 13.4873C46.9187 13.505 49.1522 12.7775 50.9924 11.4146V13.0873C52.5833 12.6327 54.0788 12.0782 55.6197 11.76C57.8333 11.3055 59.4606 13.01 58.9606 15.1191C58.6606 16.3873 57.8424 17.1055 56.6879 17.1282C56.1443 17.0932 55.6224 16.9023 55.1846 16.5782C54.7468 16.2541 54.4118 15.8106 54.2197 15.3009C54.1652 15.1368 54.1197 14.9699 54.0833 14.8009C53.8697 13.7964 53.547 13.5191 52.6742 13.6009C52.2575 13.6102 51.8587 13.7724 51.5537 14.0564C51.2486 14.3405 51.0586 14.7268 51.0197 15.1418C51.0197 18.5282 51.0197 21.9145 51.0197 25.2964C51.0061 26.5191 51.4515 27.4691 52.6242 28.0282Z" fill="black" />
                    <path d="M115.852 23.4373C115.475 24.8578 114.578 26.0846 113.338 26.8736C108.602 30.1009 102.374 27.3009 101.52 21.5736C100.888 17.3736 102.883 13.56 106.52 12.2827C109.247 11.3236 111.838 11.7827 114.192 13.4327C114.68 13.7297 115.054 14.1819 115.255 14.7168C115.455 15.2517 115.47 15.8384 115.297 16.3827C115.149 16.8545 114.841 17.2597 114.426 17.5286C114.011 17.7975 113.515 17.9131 113.024 17.8555C112.577 17.7844 112.169 17.5567 111.873 17.2129C111.578 16.8691 111.414 16.4315 111.411 15.9782C111.395 15.689 111.395 15.3992 111.411 15.11C111.47 13.8464 110.956 13.0509 109.874 12.7236C108.606 12.3373 107.252 12.7236 106.847 13.8964C106.381 15.2856 106.076 16.7238 105.938 18.1827C105.683 19.9162 105.959 21.6862 106.729 23.26C108.029 25.71 110.365 26.4418 113.006 25.2009C113.986 24.6648 114.936 24.0761 115.852 23.4373Z" fill="black" />
                    <path d="M101.342 27.9782H93.8425C95.1834 27.2009 95.3334 26.0918 95.3152 24.8554C95.2697 22.1282 95.2516 19.3554 95.3152 16.6054C95.3425 15.41 95.0652 14.5009 93.9516 14.0872L99.697 12.4009C99.697 12.4963 99.7288 12.7645 99.7288 13.0372C99.7288 17.0918 99.7288 21.1418 99.7288 25.1963C99.6787 25.7697 99.8068 26.3446 100.096 26.8425C100.384 27.3404 100.82 27.737 101.342 27.9782Z" fill="black" />
                    <path d="M40.9834 9.1232C41.3745 6.40536 41.3208 3.64197 40.8243 0.941383C42.1879 0.941383 43.7925 0.786838 45.3697 0.977747C47.1288 1.20047 48.4652 3.20956 48.3788 5.10502C48.2834 7.13229 46.7197 8.95957 44.8152 9.10047C43.4743 9.20047 42.1425 9.1232 40.9834 9.1232ZM42.9834 1.48229C42.9834 3.75502 42.9834 6.0732 43.0106 8.3732C43.0106 8.51865 43.3925 8.7732 43.597 8.7732C44.1086 8.79231 44.6131 8.64917 45.0385 8.36425C45.4638 8.07933 45.7882 7.66722 45.9652 7.18684C46.2665 6.51212 46.4188 5.78037 46.4118 5.04147C46.4047 4.30256 46.2384 3.57386 45.9243 2.90502C45.6917 2.3502 45.2645 1.89944 44.7229 1.63745C44.1813 1.37546 43.5627 1.32028 42.9834 1.48229Z" fill="black" />
                    <path d="M94.7516 5.75541C94.7834 4.50541 95.1652 3.4236 96.3561 2.80996C96.6415 2.6476 96.9587 2.54901 97.2859 2.52099C97.6131 2.49296 97.9424 2.53616 98.2513 2.64761C98.5602 2.75907 98.8412 2.93612 99.0751 3.1666C99.309 3.39707 99.4901 3.67549 99.6061 3.98269C99.9429 4.7706 100.083 5.62852 100.015 6.48269C99.847 8.27359 98.8289 9.24178 97.4516 9.20996C96.0743 9.17814 94.9152 7.91905 94.7516 6.30087C94.7417 6.11919 94.7417 5.9371 94.7516 5.75541Z" fill="black" />
                    <path d="M55.2061 6.99611C54.8561 9.1552 54.8561 9.15066 52.7243 9.13247C51.4243 9.13247 50.1198 9.13247 48.8152 9.13247C48.7652 9.13247 48.7152 9.08702 48.6652 9.05975C49.4016 7.85066 49.2607 2.01429 48.3879 0.87793C50.247 0.87793 52.0243 0.87793 53.8061 0.87793C53.9097 0.895219 54.0079 0.936213 54.0931 0.997713C54.1783 1.05921 54.248 1.13956 54.297 1.23247C54.5025 1.7161 54.6549 2.22056 54.7516 2.73702C54.3234 2.18165 53.7411 1.76474 53.0774 1.53839C52.4137 1.31203 51.698 1.28626 51.0198 1.46429V4.52338C52.1061 4.81429 52.497 4.63702 53.2652 3.40975V6.29157C52.7834 5.38247 52.1061 4.99611 51.097 5.2552V8.67793C52.8289 8.87793 54.2652 8.56429 55.2061 6.99611Z" fill="black" />
                    <path d="M80.2561 2.70548C80.2561 4.56912 80.2106 6.17821 80.2925 7.77821C80.2925 8.16457 80.747 8.52821 81.0334 8.94639H79.0152C80.0743 8.21912 79.897 7.29639 79.9243 6.42366C79.9243 5.75548 79.897 5.0873 79.9243 4.42366C79.997 3.06003 80.0152 1.74639 78.4788 0.787298C79.8834 0.628207 80.9425 0.332753 81.8152 1.62366C82.8372 3.00169 83.9632 4.29943 85.1834 5.50548C85.1834 3.89639 85.6652 2.27821 84.8606 0.682753H85.9061C85.8152 1.52821 85.6697 2.35093 85.6515 3.18275C85.6106 5.00094 85.6516 6.86457 85.4561 8.80094L80.2561 2.70548Z" fill="black" />
                    <path d="M74.9925 0.450684C75.747 2.44159 76.4697 4.44614 77.2652 6.41886C77.6334 7.32796 78.1743 8.15977 78.5925 9.00068H75.1379C75.3278 8.80513 75.5025 8.59544 75.6606 8.37341C75.7521 8.25378 75.807 8.11029 75.8189 7.96019C75.8307 7.81009 75.799 7.65976 75.7274 7.52726C75.6559 7.39477 75.5476 7.28575 75.4157 7.2133C75.2837 7.14085 75.1336 7.10806 74.9834 7.11887C74.5794 7.0893 74.1737 7.0893 73.7697 7.11887C73.4288 7.15523 72.8607 7.23705 72.8197 7.3825C72.7959 7.81585 72.8497 8.24996 72.9788 8.66432C72.9788 8.75977 73.1016 8.83705 73.2334 9.00523H71.3425C72.6561 7.32341 73.1334 5.30977 73.6152 3.36886C73.897 2.31432 74.5379 1.48705 74.9925 0.450684ZM72.9334 6.70523H75.3516C74.947 5.56886 74.5697 4.52341 74.1925 3.47796H74.0061L72.9334 6.70523Z" fill="black" />
                    <path d="M70.6606 1.15056V3.50511C70.3334 3.00965 70.1061 2.59602 69.8152 2.24147C68.3879 0.468742 66.3788 0.773287 65.5788 2.90511C65.0701 4.22403 65.0847 5.68752 65.6197 6.99601C65.752 7.44383 66.0114 7.84364 66.3664 8.147C66.7214 8.45035 67.1568 8.64422 67.6197 8.70511C68.6925 8.83692 69.3652 8.25056 69.8925 7.42783C70.1197 7.06874 70.3197 6.69601 70.6197 6.17783V8.69602C70.15 8.72266 69.6841 8.79574 69.2288 8.9142C68.3554 9.25038 67.3966 9.29526 66.4956 9.04215C65.5946 8.78904 64.7995 8.25149 64.2288 7.50965C63.693 6.74944 63.41 5.83993 63.4198 4.90994C63.4296 3.97995 63.7317 3.0766 64.2834 2.32783C64.8318 1.6295 65.5865 1.12184 66.4401 0.877027C67.2937 0.632218 68.2027 0.66272 69.0379 0.964196C69.572 1.07588 70.1152 1.13826 70.6606 1.15056Z" fill="black" />
                    <path d="M62.7834 1.20954V3.38227C62.3976 2.83628 61.9754 2.31693 61.5198 1.82772C61.2796 1.57116 60.9806 1.37682 60.6486 1.26146C60.3167 1.1461 59.9616 1.11317 59.6141 1.1655C59.2666 1.21783 58.937 1.35385 58.6537 1.56186C58.3704 1.76987 58.1419 2.04362 57.9879 2.35954C57.5419 3.12798 57.3032 3.99914 57.2952 4.88762C57.2872 5.77611 57.5103 6.65141 57.9425 7.42772C58.8198 9.10045 60.6698 9.24591 61.8516 7.79591C62.2027 7.31384 62.5274 6.81311 62.8243 6.29591V8.69136C62.3508 8.73322 61.8822 8.81843 61.4243 8.94591C60.5583 9.29044 59.6052 9.35107 58.7025 9.11907C57.7999 8.88706 56.9942 8.37441 56.4016 7.655C55.8459 6.87292 55.5518 5.93505 55.5616 4.97569C55.5714 4.01632 55.8845 3.08465 56.4561 2.31409C57.5243 0.900452 59.538 0.414087 61.4016 1.06863C61.8557 1.16588 62.319 1.21313 62.7834 1.20954Z" fill="black" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-[130px] md:w-[140px] lg:w-[159px]" viewBox="0 0 159 31" fill="none">
                    <path d="M16.6596 5.77715C16.4256 4.88526 16.0788 4.02684 15.6278 3.2226C15.1414 2.44988 14.8505 2.23624 13.1914 2.23624H10.4232V16.6544C10.4232 19.0135 10.6732 19.3135 13.4732 19.4953V20.3862H4.58233V19.4771C7.3096 19.2953 7.55051 19.0226 7.55051 16.6362V2.23624H5.00051C3.3596 2.23624 2.88233 2.43169 2.36415 3.29079C1.93586 4.08302 1.59157 4.91786 1.33688 5.78169H0.400513C0.586876 3.89988 0.768694 1.94078 0.855058 0.327148H1.57779C2.03233 1.03624 2.35506 1.0226 3.20051 1.0226H15.0187C15.846 1.0226 16.1187 0.890785 16.5732 0.327148H17.3187C17.3187 1.69078 17.4414 3.92715 17.5914 5.69533L16.6596 5.77715Z" fill="#010101" />
                    <path d="M29.2641 8.59987C27.7641 8.75441 27.6278 8.86805 27.6278 10.4635V17.8226C27.6278 19.418 27.7823 19.5317 29.2641 19.668V20.3862H23.3278V19.668C24.846 19.4771 24.9641 19.418 24.9641 17.8226V14.1862H19.7732V17.8226C19.7732 19.418 19.946 19.5135 21.3869 19.668V20.3862H15.4778V19.668C16.9005 19.5135 17.1096 19.418 17.1096 17.8226V10.4635C17.1096 8.86805 16.9369 8.7135 15.4778 8.59987V7.88623H21.3869V8.59987C19.9278 8.73168 19.7732 8.86805 19.7732 10.4635V13.1908H24.9641V10.4635C24.9641 8.86805 24.7687 8.75441 23.3278 8.59987V7.88623H29.2641V8.59987Z" fill="#010101" />
                    <path d="M41.4505 17.1137C41.3551 17.6319 40.8187 19.841 40.646 20.3774H30.646V19.6865C32.396 19.5137 32.5096 19.4183 32.5096 17.8046V10.4637C32.5096 8.82737 32.2824 8.71373 30.9733 8.6001V7.88646H37.2415C39.2596 7.88646 39.9324 7.88646 40.2051 7.8501C40.2051 8.19555 40.3187 9.77283 40.396 10.9637L39.646 11.0592C39.4939 10.4123 39.2091 9.80396 38.8096 9.27283C38.4642 8.88646 38.2142 8.77283 37.2324 8.77283H35.9915C35.2642 8.77283 35.1869 8.80919 35.1869 9.46374V13.4819H37.0687C38.146 13.4819 38.3369 13.191 38.6278 11.8274H39.3778V16.1137H38.6278C38.3187 14.691 38.1733 14.4592 37.0505 14.4592H35.1733V17.7637C35.1733 19.091 35.2096 19.4956 36.4051 19.5137H37.7687C38.8414 19.5137 39.1324 19.3819 39.5551 18.8637C40.0275 18.2763 40.4217 17.6299 40.7278 16.941L41.4505 17.1137Z" fill="#010101" />
                    <path d="M58.9824 20.3862V19.4771C60.9096 19.2362 61.1051 18.9317 60.6869 17.7726C60.2687 16.6135 59.7415 15.1953 59.1505 13.4408H52.8278C52.3733 14.709 51.9187 15.8635 51.5369 17.0317C50.8869 18.959 51.3596 19.1953 53.8096 19.4771V20.3862H46.8187V19.4771C48.696 19.2408 49.1733 19.0226 50.2096 16.3726L56.3824 0.772603L57.4233 0.577148L63.2415 16.3817C64.2233 19.009 64.4915 19.2408 66.5733 19.4771V20.3862H58.9824ZM56.0824 4.79533C55.146 7.28169 54.1642 9.86351 53.296 12.1862H58.7187L56.0824 4.79533Z" fill="#010101" />
                    <path d="M74.3732 10.7725C73.9914 9.54063 73.4642 8.13609 71.6823 8.13609C71.4356 8.12562 71.1895 8.16681 70.9596 8.25701C70.7298 8.3472 70.5213 8.48442 70.3476 8.65987C70.1738 8.83533 70.0387 9.04514 69.9507 9.27586C69.8628 9.50659 69.824 9.75314 69.8369 9.99973C69.8369 11.0588 70.5505 11.6906 72.2414 12.5406C74.296 13.5588 75.6051 14.5543 75.6051 16.4588C75.6051 18.7315 73.7232 20.377 70.9732 20.377C69.8737 20.3418 68.7857 20.141 67.746 19.7815C67.6278 19.327 67.2914 17.3452 67.1687 16.4406L67.9187 16.2679C68.3005 17.477 69.3778 19.5725 71.2596 19.5725C72.4323 19.5725 73.146 18.8406 73.146 17.6134C73.146 16.4997 72.4551 15.8452 70.8369 14.977C68.8414 13.9043 67.5323 12.9406 67.5323 10.9452C67.5323 8.94973 69.1096 7.33154 71.9914 7.33154C72.9172 7.35604 73.8383 7.47176 74.7414 7.677C74.8187 8.38609 74.9505 9.38609 75.1051 10.5952L74.3732 10.7725Z" fill="#010101" />
                    <path d="M77.1232 20.3862V19.668C78.5823 19.5317 78.7551 19.418 78.7551 17.8044V10.4817C78.7551 8.86805 78.5641 8.7135 77.1232 8.59987V7.88623H83.0596V8.59987C81.6187 8.73168 81.4278 8.86805 81.4278 10.4817V17.8044C81.4278 19.3999 81.6005 19.5135 83.0596 19.668V20.3862H77.1232Z" fill="#010101" />
                    <path d="M91.0824 20.3863V19.6682C92.2914 19.4954 92.2915 19.2863 92.0233 18.4591C91.8324 17.8818 91.5233 17.0182 91.2324 16.2454H87.4869C87.2733 16.8454 87.0051 17.5727 86.8142 18.1682C86.4096 19.3818 86.8733 19.5318 88.3915 19.6682V20.3863H83.6369V19.6682C84.8505 19.5136 85.1596 19.3409 85.8096 17.7273L89.8096 7.79089L90.7187 7.61816C91.946 10.9636 93.2551 14.3818 94.5051 17.5909C95.2142 19.3818 95.3869 19.5136 96.6369 19.6682V20.3863H91.0824ZM89.3914 11.2C88.8324 12.5636 88.296 13.8727 87.8142 15.2909H90.8687L89.3914 11.2Z" fill="#010101" />
                    <path d="M110.737 8.38645C109.564 8.541 109.201 8.791 109.141 9.65463C109.087 10.4046 109.028 11.0592 109.028 12.7319V20.3865H107.951L99.9369 10.7683V15.1137C99.9172 16.1071 99.9491 17.1009 100.032 18.091C100.11 18.9365 100.514 19.3819 101.937 19.4546V20.1637H97.1687V19.4774C98.2642 19.3774 98.746 19.091 98.8596 18.1865C98.9578 17.1714 98.9957 16.1514 98.9733 15.1319V10.5865C99.0312 10.0356 98.8893 9.48226 98.5733 9.02736C98.2278 8.55009 97.7642 8.491 96.9551 8.41373V7.65918H100.705L108.028 16.1728V12.7319C108.028 11.0592 108.028 10.4228 107.951 9.71373C107.891 8.88645 107.587 8.48191 105.991 8.38645V7.65918H110.737V8.38645Z" fill="#010101" />
                    <path d="M127.123 20.3862V19.4771C129.051 19.2362 129.246 18.9317 128.828 17.7726C128.41 16.6135 127.882 15.1953 127.291 13.4408H120.969C120.514 14.709 120.06 15.8635 119.678 17.0317C119.028 18.959 119.5 19.1953 121.928 19.4771V20.3862H114.96V19.4771C116.837 19.2408 117.314 19.0226 118.351 16.3726L124.523 0.772603L125.564 0.577148L131.382 16.3817C132.364 19.0226 132.632 19.259 134.719 19.4771V20.3862H127.123ZM124.21 4.79533C123.273 7.28169 122.291 9.86351 121.423 12.1862H126.846L124.21 4.79533Z" fill="#010101" />
                    <path d="M146.232 14.8272C145.132 15.0181 145.001 15.0954 145.001 16.3999V17.8817C144.985 18.505 145.023 19.1285 145.114 19.7454C143.584 20.0833 142.029 20.2976 140.464 20.3863C135.951 20.3863 133.355 17.659 133.355 13.8363C133.355 9.509 136.869 7.34082 140.964 7.34082C142.267 7.4084 143.563 7.56023 144.846 7.79537C144.887 8.64082 145.041 10.0999 145.173 11.159L144.423 11.2908C143.969 9.659 143.251 8.83173 142.06 8.43173C141.53 8.27656 140.98 8.19848 140.428 8.19991C138.101 8.19991 136.337 10.2181 136.337 13.5226C136.337 16.9045 137.528 19.5772 140.682 19.5772C141.108 19.5933 141.53 19.501 141.91 19.309C142.201 19.1363 142.364 18.809 142.364 18.209V16.4999C142.364 15.1363 142.096 15.0181 140.478 14.8272V14.1135H146.228L146.232 14.8272Z" fill="#010101" />
                    <path d="M158.128 17.1137C158.032 17.6319 157.491 19.841 157.319 20.3774H147.346V19.6865C149.096 19.5137 149.21 19.4183 149.21 17.8046V10.4637C149.21 8.82737 148.978 8.71373 147.673 8.6001V7.88646H153.919C155.937 7.88646 156.61 7.88646 156.878 7.8501C156.878 8.19555 156.991 9.77283 157.069 10.9637L156.319 11.0592C156.173 10.4127 155.892 9.80409 155.496 9.27283C155.15 8.88646 154.896 8.77283 153.919 8.77283H152.669C151.937 8.77283 151.864 8.80919 151.864 9.46374V13.4819H153.746C154.823 13.4819 155.014 13.191 155.3 11.8274H156.05V16.1137H155.3C154.996 14.691 154.846 14.4592 153.728 14.4592H151.864V17.7637C151.864 19.091 151.9 19.4956 153.091 19.5137H154.455C155.532 19.5137 155.819 19.3819 156.241 18.8637C156.715 18.2774 157.11 17.6308 157.414 16.941L158.128 17.1137Z" fill="#010101" />
                    <path d="M32.7005 24.5907C33.1294 24.5243 33.5621 24.4864 33.996 24.477C34.3622 24.4472 34.7306 24.4936 35.0779 24.6133C35.4253 24.733 35.7441 24.9234 36.0142 25.1725C36.1911 25.3641 36.3284 25.5889 36.4182 25.8339C36.5079 26.0788 36.5482 26.3391 36.5369 26.5997C36.5431 27.1824 36.3287 27.7458 35.9369 28.177C35.6489 28.4335 35.3119 28.629 34.9463 28.7516C34.5807 28.8743 34.194 28.9216 33.8096 28.8907C33.4187 28.8907 33.0596 28.8907 32.6869 28.8543L32.7005 24.5907ZM33.0142 28.5907C33.2993 28.6237 33.5863 28.6373 33.8733 28.6316C35.5142 28.6316 36.2142 27.7225 36.2142 26.6043C36.2142 25.4861 35.546 24.7588 33.9733 24.7588C33.6517 24.7571 33.3307 24.7844 33.0142 24.8407V28.5907Z" fill="#4D4D4D" />
                    <path d="M37.3915 27.3179C37.3719 27.4963 37.3916 27.6768 37.4491 27.8467C37.5066 28.0167 37.6005 28.1721 37.7244 28.302C37.8482 28.4319 37.9989 28.5331 38.1659 28.5987C38.333 28.6643 38.5123 28.6925 38.6915 28.6815C39.0307 28.696 39.3685 28.6306 39.6778 28.4906L39.7642 28.7361C39.418 28.8933 39.0395 28.9665 38.6596 28.9497C38.4525 28.9632 38.2448 28.9331 38.0501 28.8612C37.8553 28.7893 37.6778 28.6774 37.5291 28.5325C37.3804 28.3877 37.2638 28.2132 37.1868 28.0204C37.1099 27.8276 37.0743 27.6208 37.0824 27.4133C37.0614 27.1985 37.0857 26.9817 37.1536 26.7768C37.2216 26.572 37.3317 26.3836 37.4768 26.2239C37.622 26.0642 37.799 25.9366 37.9965 25.8495C38.1939 25.7623 38.4074 25.7175 38.6233 25.7179C38.8089 25.7123 38.9937 25.7458 39.1656 25.8161C39.3376 25.8864 39.4928 25.992 39.6213 26.1261C39.7499 26.2602 39.8488 26.4198 39.9118 26.5946C39.9748 26.7693 40.0004 26.9553 39.9869 27.1406C39.9955 27.2055 39.9955 27.2712 39.9869 27.3361L37.3915 27.3179ZM39.6369 27.0679C39.65 26.9236 39.6321 26.7782 39.5845 26.6414C39.5368 26.5046 39.4606 26.3796 39.3608 26.2746C39.2609 26.1696 39.1399 26.0871 39.0056 26.0327C38.8714 25.9782 38.7271 25.953 38.5824 25.9588C38.2833 25.9627 37.9967 26.0789 37.7795 26.2844C37.5622 26.4898 37.4302 26.7695 37.4096 27.0679H39.6369Z" fill="#4D4D4D" />
                    <path d="M40.8141 24.2681H41.1278V28.8544H40.8141V24.2681Z" fill="#4D4D4D" />
                    <path d="M42.2551 24.2681H42.5687V26.3999C42.6711 26.1944 42.8284 26.0213 43.0233 25.8999C43.2309 25.7711 43.4699 25.7019 43.7142 25.6999C44.0096 25.6999 44.9142 25.8317 44.9142 27.0999V28.8544H44.6005V27.1135C44.6005 26.5135 44.346 25.9772 43.6324 25.9772C43.4069 25.9839 43.1883 26.0557 43.0027 26.1839C42.8172 26.3122 42.6728 26.4914 42.5869 26.6999C42.5494 26.8048 42.5324 26.9159 42.5369 27.0272V28.8453H42.2233L42.2551 24.2681Z" fill="#4D4D4D" />
                    <path d="M46.4551 24.8681C46.4551 24.9368 46.4278 25.0027 46.3792 25.0513C46.3306 25.0999 46.2647 25.1272 46.196 25.1272C46.1273 25.1272 46.0614 25.0999 46.0128 25.0513C45.9642 25.0027 45.9369 24.9368 45.9369 24.8681C45.9368 24.7969 45.9641 24.7283 46.0132 24.6767C46.0623 24.6251 46.1294 24.5943 46.2005 24.5908C46.2709 24.5944 46.337 24.6254 46.3846 24.6773C46.4322 24.7292 46.4575 24.7977 46.4551 24.8681ZM46.0414 28.8545V25.7772H46.3551V28.8545H46.0414Z" fill="#4D4D4D" />
                    <path d="M49.2959 24.0498V30.4589H49.0187V24.0498H49.2959Z" fill="#4D4D4D" />
                    <path d="M55.9506 26.8181C55.9096 26.1772 55.8506 25.3408 55.8506 24.8817C55.6778 25.3363 55.4778 25.8408 55.2051 26.4954L54.2051 28.8545H53.9687L53.0324 26.5272C52.7642 25.8545 52.5778 25.3408 52.4233 24.8817C52.4233 25.3817 52.3733 26.1681 52.3142 26.8817L52.1597 28.8545H51.8551L52.2006 24.5363H52.5596L53.596 27.1136C53.8142 27.6499 53.9824 28.0999 54.1097 28.4772C54.2631 28.0137 54.4406 27.5586 54.6415 27.1136L55.7278 24.5317H56.0824L56.3915 28.8499H56.0824L55.9506 26.8181Z" fill="#4D4D4D" />
                    <path d="M60.0323 28.1137C60.0323 28.3592 60.0323 28.6046 60.0596 28.8546H59.7641V28.2319C59.6475 28.4474 59.4739 28.6266 59.2622 28.7501C59.0506 28.8735 58.8091 28.9364 58.5641 28.9319C58.2141 28.9319 57.405 28.8092 57.405 27.5046V25.7773H57.7187V27.441C57.7187 28.1546 57.9687 28.6546 58.6505 28.6546C58.8646 28.6522 59.0737 28.5901 59.2544 28.4753C59.4351 28.3604 59.5801 28.1974 59.6732 28.0046C59.7091 27.8932 59.7245 27.7761 59.7187 27.6592V25.7773H60.0323V28.1137Z" fill="#4D4D4D" />
                    <path d="M61.1596 26.5224C61.1596 26.2724 61.1596 26.027 61.1323 25.777H61.4278L61.4551 26.3724C61.5565 26.1662 61.7148 25.9932 61.9113 25.874C62.1078 25.7548 62.3344 25.6943 62.5641 25.6997C62.782 25.7044 62.9928 25.7777 63.1666 25.9091C63.3404 26.0404 63.4684 26.2232 63.5323 26.4315C63.6091 26.2682 63.719 26.1227 63.8551 26.0042C63.9679 25.9001 64.1004 25.8195 64.2448 25.7672C64.3892 25.7149 64.5426 25.692 64.696 25.6997C64.9823 25.6997 65.796 25.8542 65.796 27.1361V28.8542H65.4823V27.1452C65.4823 26.3679 65.1505 25.9724 64.5732 25.9724C64.3783 25.9771 64.1888 26.0379 64.0276 26.1476C63.8664 26.2572 63.7402 26.411 63.6641 26.5906C63.6246 26.6874 63.603 26.7906 63.6005 26.8952V28.8542H63.3551V26.9815C63.3551 26.3815 63.0278 25.9724 62.5096 25.9724C62.2986 25.9845 62.0958 26.058 61.9262 26.1841C61.7565 26.3101 61.6275 26.483 61.555 26.6815C61.518 26.7773 61.498 26.8788 61.496 26.9815V28.8542H61.1823L61.1596 26.5224Z" fill="#4D4D4D" />
                    <path d="M66.8823 28.8544C66.8823 28.6044 66.9051 28.359 66.9051 28.1135V24.2681H67.2187V26.4135C67.3421 26.1848 67.5284 25.9961 67.7555 25.8696C67.9826 25.7432 68.2411 25.6843 68.5005 25.6999C68.703 25.6995 68.9034 25.7406 69.0894 25.8207C69.2754 25.9008 69.443 26.0182 69.5818 26.1655C69.7207 26.3129 69.8278 26.4872 69.8967 26.6776C69.9656 26.868 69.9948 27.0705 69.9823 27.2726C69.9979 27.4838 69.9699 27.6959 69.9001 27.8958C69.8303 28.0957 69.7202 28.2791 69.5765 28.4347C69.4329 28.5902 69.2588 28.7146 69.0651 28.8001C68.8714 28.8856 68.6622 28.9304 68.4505 28.9317C68.1982 28.9477 67.9465 28.8933 67.7233 28.7745C67.5002 28.6557 67.3144 28.4772 67.1869 28.259V28.8544H66.8823ZM67.2187 27.6317C67.2203 27.7114 67.231 27.7907 67.2505 27.8681C67.3341 28.1086 67.4917 28.3165 67.7007 28.4619C67.9098 28.6072 68.1596 28.6826 68.4141 28.6772C68.7758 28.682 69.1246 28.5429 69.3837 28.2906C69.6428 28.0383 69.7911 27.6934 69.796 27.3317C69.8008 26.97 69.6617 26.6213 69.4094 26.3621C69.1571 26.103 68.8122 25.9547 68.4505 25.9499C68.1872 25.944 67.9293 26.025 67.7165 26.1802C67.5038 26.3355 67.348 26.5564 67.2732 26.809C67.2381 26.8988 67.2196 26.9943 67.2187 27.0908V27.6317Z" fill="#4D4D4D" />
                    <path d="M72.7005 28.8544L72.646 28.3999C72.5157 28.5692 72.3474 28.7056 72.1548 28.798C71.9621 28.8903 71.7505 28.9362 71.5369 28.9317C71.416 28.9456 71.2935 28.9343 71.1772 28.8985C71.0608 28.8627 70.9532 28.8033 70.8609 28.7239C70.7687 28.6444 70.6939 28.5468 70.6413 28.4371C70.5886 28.3273 70.5593 28.2079 70.5551 28.0863C70.5551 27.3863 71.2051 26.9317 72.6414 26.9499V26.8817C72.6543 26.7623 72.6409 26.6415 72.6021 26.5279C72.5633 26.4142 72.5001 26.3104 72.4169 26.2238C72.3338 26.1371 72.2326 26.0697 72.1206 26.0264C72.0087 25.983 71.8885 25.9646 71.7687 25.9726C71.4537 25.9663 71.1443 26.0568 70.8823 26.2317L70.7823 26.0044C71.085 25.811 71.4368 25.7085 71.796 25.709C72.8369 25.709 72.9551 26.5181 72.9551 27.0044V28.1135C72.9538 28.3614 72.9705 28.609 73.0051 28.8544H72.7005ZM72.6232 27.2044C71.8096 27.1772 70.8732 27.309 70.8732 28.0181C70.8679 28.1064 70.8814 28.1949 70.9129 28.2776C70.9444 28.3603 70.9932 28.4353 71.056 28.4977C71.1188 28.5601 71.1942 28.6083 71.2771 28.6393C71.36 28.6702 71.4486 28.6831 71.5369 28.6772C71.7529 28.687 71.9669 28.6321 72.1515 28.5195C72.3362 28.4069 72.483 28.2418 72.5732 28.0453C72.5987 27.9896 72.6126 27.9293 72.6141 27.8681L72.6232 27.2044Z" fill="#4D4D4D" />
                    <path d="M74.4278 24.8681C74.429 24.9041 74.423 24.9399 74.4101 24.9735C74.3971 25.0071 74.3776 25.0378 74.3525 25.0636C74.3275 25.0895 74.2975 25.1101 74.2644 25.1241C74.2312 25.1382 74.1956 25.1454 74.1596 25.1454C74.125 25.1436 74.091 25.1351 74.0597 25.1202C74.0284 25.1053 74.0003 25.0844 73.9771 25.0586C73.9539 25.0328 73.9359 25.0028 73.9244 24.9701C73.9128 24.9374 73.9078 24.9027 73.9096 24.8681C73.9095 24.7969 73.9369 24.7283 73.9859 24.6767C74.035 24.6251 74.1021 24.5943 74.1732 24.5908C74.2436 24.5944 74.3097 24.6254 74.3573 24.6773C74.405 24.7292 74.4303 24.7977 74.4278 24.8681ZM74.0096 28.8545V25.7772H74.3232V28.8545H74.0096Z" fill="#4D4D4D" />
                    <path d="M77.2642 24.0498V30.4589H76.9915V24.0498H77.2642Z" fill="#4D4D4D" />
                    <path d="M79.9324 24.5361H80.246V26.7497H80.2687C80.4006 26.5816 80.5415 26.4452 80.6596 26.2952L82.3869 24.5225H82.7824L80.9642 26.3406L82.9733 28.8225H82.5824L80.7642 26.5497L80.2642 27.0497V28.8316H79.9506L79.9324 24.5361Z" fill="#4D4D4D" />
                    <path d="M86.4641 27.277C86.4724 27.4961 86.4354 27.7146 86.3555 27.9188C86.2755 28.1229 86.1543 28.3084 85.9995 28.4637C85.8447 28.6189 85.6595 28.7406 85.4556 28.8211C85.2516 28.9016 85.0333 28.9392 84.8141 28.9316C84.6045 28.9385 84.3957 28.9024 84.2007 28.8253C84.0056 28.7483 83.8284 28.6321 83.6801 28.4838C83.5318 28.3355 83.4156 28.1583 83.3385 27.9632C83.2615 27.7682 83.2254 27.5594 83.2323 27.3498C83.2242 27.1328 83.2606 26.9165 83.3392 26.7142C83.4178 26.5118 83.537 26.3277 83.6894 26.1731C83.8418 26.0185 84.0243 25.8968 84.2255 25.8154C84.4268 25.734 84.6426 25.6946 84.8596 25.6998C85.0708 25.6889 85.282 25.7221 85.4798 25.7972C85.6775 25.8722 85.8575 25.9876 86.0084 26.1359C86.1592 26.2841 86.2776 26.4621 86.3561 26.6586C86.4345 26.855 86.4713 27.0656 86.4641 27.277ZM83.546 27.3316C83.5333 27.5073 83.5574 27.6838 83.6165 27.8498C83.6757 28.0158 83.7687 28.1677 83.8896 28.2959C84.0105 28.4241 84.1568 28.5258 84.3191 28.5945C84.4813 28.6633 84.6561 28.6975 84.8323 28.6952C85.0099 28.6972 85.186 28.663 85.3498 28.5946C85.5137 28.5262 85.6618 28.4251 85.7852 28.2974C85.9087 28.1698 86.0047 28.0183 86.0675 27.8522C86.1303 27.6861 86.1586 27.5089 86.1505 27.3316C86.1586 27.1541 86.1303 26.9768 86.0675 26.8107C86.0046 26.6445 85.9085 26.4929 85.785 26.3652C85.6615 26.2375 85.5132 26.1364 85.3492 26.068C85.1852 25.9997 85.009 25.9656 84.8314 25.9677C84.6537 25.9699 84.4784 26.0083 84.3161 26.0807C84.1539 26.153 84.0081 26.2577 83.8877 26.3884C83.7674 26.5191 83.675 26.673 83.6162 26.8406C83.5574 27.0083 83.5335 27.1862 83.546 27.3634V27.3316Z" fill="#4D4D4D" />
                    <path d="M87.3051 24.2681H87.6187V28.8544H87.3051V24.2681Z" fill="#4D4D4D" />
                    <path d="M89.0596 27.259C89.1414 27.1635 89.2914 27.009 89.4005 26.9044L90.6278 25.7772H91.0278L89.6642 27.0453L91.2323 28.8635H90.8414L89.4414 27.2362L89.0869 27.5772V28.8635H88.7733V24.2681H89.0869L89.0596 27.259Z" fill="#4D4D4D" />
                    <path d="M93.7687 28.8543L93.7187 28.3998C93.5899 28.5731 93.4217 28.7133 93.2281 28.8089C93.0345 28.9046 92.821 28.9528 92.605 28.9498C92.4841 28.9637 92.3617 28.9524 92.2453 28.9166C92.129 28.8808 92.0213 28.8213 91.9291 28.7419C91.8369 28.6625 91.7621 28.5649 91.7095 28.4551C91.6568 28.3454 91.6275 28.226 91.6232 28.1043C91.6232 27.4043 92.2687 26.9498 93.705 26.968V26.8998C93.7179 26.7804 93.7045 26.6596 93.6657 26.5459C93.6269 26.4323 93.5637 26.3285 93.4806 26.2418C93.3974 26.1552 93.2963 26.0878 93.1843 26.0444C93.0723 26.001 92.9522 25.9827 92.8323 25.9907C92.5188 25.9845 92.2109 26.0749 91.9505 26.2498L91.846 26.0225C92.1486 25.8291 92.5004 25.7265 92.8596 25.7271C93.905 25.7271 94.0187 26.5361 94.0187 27.0225V28.1134C94.0166 28.3615 94.0349 28.6093 94.0732 28.8543H93.7687ZM93.6914 27.2043C92.8778 27.1771 91.9414 27.3089 91.9414 28.018C91.9372 28.1064 91.952 28.1947 91.9846 28.277C92.0173 28.3592 92.0671 28.4336 92.1307 28.4951C92.1944 28.5566 92.2704 28.6039 92.3538 28.6337C92.4372 28.6635 92.5259 28.6752 92.6141 28.668C92.8308 28.6781 93.0455 28.6233 93.2309 28.5108C93.4164 28.3983 93.564 28.233 93.655 28.0361C93.6767 27.9794 93.689 27.9195 93.6914 27.8589V27.2043Z" fill="#4D4D4D" />
                    <path d="M95.5233 24.8633V25.7724H96.496V26.0224H95.5233V27.9906C95.5233 28.3678 95.6415 28.6587 96.0187 28.6587C96.156 28.6622 96.2928 28.6423 96.4233 28.5996L96.4596 28.8451C96.3139 28.898 96.1602 28.9257 96.0051 28.9269C95.8983 28.934 95.7913 28.9168 95.6921 28.8767C95.593 28.8365 95.5042 28.7744 95.4324 28.6951C95.2795 28.4797 95.2071 28.2175 95.2278 27.9542V26.0269H94.6642V25.7769H95.2278V24.9587L95.5233 24.8633Z" fill="#4D4D4D" />
                    <path d="M99.1187 28.8543L99.0687 28.3998C98.9399 28.5731 98.7718 28.7133 98.5782 28.8089C98.3845 28.9046 98.171 28.9528 97.9551 28.9498C97.8342 28.9637 97.7117 28.9524 97.5954 28.9166C97.479 28.8808 97.3714 28.8213 97.2791 28.7419C97.1869 28.6625 97.1121 28.5649 97.0595 28.4551C97.0068 28.3454 96.9775 28.226 96.9733 28.1043C96.9733 27.4043 97.6187 26.9498 99.0551 26.968V26.8998C99.068 26.7804 99.0545 26.6596 99.0157 26.5459C98.977 26.4323 98.9138 26.3285 98.8306 26.2418C98.7474 26.1552 98.6463 26.0878 98.5343 26.0444C98.4223 26.001 98.3022 25.9827 98.1824 25.9907C97.8688 25.9845 97.5609 26.0749 97.3005 26.2498L97.196 26.0225C97.4986 25.8291 97.8504 25.7265 98.2096 25.7271C99.2551 25.7271 99.3687 26.5361 99.3687 27.0225V28.1134C99.3674 28.3613 99.3841 28.6089 99.4187 28.8543H99.1187ZM99.0414 27.2043C98.2278 27.1771 97.2914 27.3089 97.2914 28.018C97.2873 28.1064 97.302 28.1947 97.3347 28.277C97.3673 28.3592 97.4171 28.4336 97.4808 28.4951C97.5444 28.5566 97.6205 28.6039 97.7038 28.6337C97.7872 28.6635 97.8759 28.6752 97.9642 28.668C98.1808 28.6781 98.3956 28.6233 98.581 28.5108C98.7664 28.3983 98.914 28.233 99.0051 28.0361C99.0267 27.9794 99.039 27.9195 99.0414 27.8589V27.2043Z" fill="#4D4D4D" />
                    <path d="M102.246 24.0498V30.4589H101.991V24.0498H102.246Z" fill="#4D4D4D" />
                    <path d="M104.91 24.5361H105.223V28.5907H107.364V28.8543H104.91V24.5361Z" fill="#4D4D4D" />
                    <path d="M110.901 27.2772C110.909 27.4951 110.872 27.7124 110.793 27.9156C110.714 28.1188 110.594 28.3037 110.441 28.4587C110.287 28.6138 110.104 28.7357 109.901 28.8171C109.699 28.8985 109.482 28.9375 109.264 28.9317C109.055 28.938 108.846 28.9014 108.651 28.8241C108.457 28.7469 108.28 28.6306 108.132 28.4824C107.983 28.3343 107.867 28.1574 107.79 27.9626C107.713 27.7678 107.676 27.5593 107.682 27.3499C107.674 27.133 107.711 26.9167 107.789 26.7143C107.868 26.5119 107.987 26.3278 108.139 26.1733C108.292 26.0187 108.474 25.897 108.676 25.8155C108.877 25.7341 109.093 25.6948 109.31 25.6999C109.52 25.6917 109.729 25.7268 109.925 25.803C110.121 25.8791 110.299 25.9948 110.448 26.1427C110.597 26.2907 110.714 26.4677 110.792 26.6629C110.87 26.8581 110.907 27.0671 110.901 27.2772ZM107.978 27.3317C107.966 27.5073 107.99 27.6835 108.05 27.8492C108.109 28.0149 108.202 28.1666 108.323 28.2946C108.444 28.4226 108.59 28.5243 108.752 28.5933C108.914 28.6623 109.088 28.697 109.264 28.6954C109.442 28.698 109.619 28.6642 109.783 28.5961C109.947 28.528 110.096 28.427 110.22 28.2993C110.344 28.1715 110.44 28.0198 110.503 27.8534C110.567 27.687 110.595 27.5095 110.587 27.3317C110.583 26.9857 110.441 26.6556 110.194 26.4139C109.946 26.1723 109.612 26.0389 109.266 26.0431C108.92 26.0473 108.59 26.1888 108.349 26.4364C108.107 26.6841 107.974 27.0175 107.978 27.3635V27.3317Z" fill="#4D4D4D" />
                    <path d="M111.737 26.5228C111.737 26.2728 111.737 26.0274 111.714 25.7774H111.991L112.014 26.3956C112.128 26.1807 112.299 26.0017 112.508 25.8788C112.718 25.756 112.958 25.6941 113.201 25.7001C113.482 25.7001 114.401 25.8319 114.401 27.1047V28.8547H114.082V27.1047C114.082 26.5047 113.823 25.9728 113.119 25.9728C112.892 25.9752 112.67 26.0458 112.484 26.1755C112.298 26.3052 112.154 26.488 112.073 26.7001C112.04 26.7889 112.021 26.8826 112.019 26.9774V28.8547H111.705L111.737 26.5228Z" fill="#4D4D4D" />
                    <path d="M118.255 24.2681V28.1135C118.255 28.359 118.255 28.6044 118.282 28.8544H117.991V28.2135C117.877 28.4413 117.699 28.6307 117.478 28.7584C117.258 28.886 117.005 28.9463 116.751 28.9317C116.55 28.9319 116.352 28.8916 116.168 28.8131C115.984 28.7347 115.818 28.6198 115.68 28.4754C115.541 28.331 115.433 28.1601 115.363 27.9729C115.292 27.7857 115.26 27.5861 115.269 27.3862C115.253 27.1723 115.282 26.9574 115.352 26.7548C115.423 26.5522 115.534 26.3662 115.679 26.2082C115.825 26.0503 116.001 25.9237 116.196 25.8363C116.392 25.7488 116.604 25.7024 116.819 25.6999C117.044 25.6869 117.269 25.7349 117.47 25.8389C117.671 25.9428 117.84 26.0989 117.96 26.2908V24.2681H118.255ZM117.941 26.9953C117.941 26.894 117.927 26.7931 117.901 26.6953C117.822 26.4665 117.672 26.2693 117.472 26.1333C117.272 25.9972 117.033 25.9297 116.791 25.9408C116.616 25.9424 116.443 25.9806 116.283 26.0531C116.123 26.1256 115.98 26.2307 115.863 26.3616C115.746 26.4926 115.658 26.6466 115.604 26.8136C115.55 26.9807 115.532 27.1571 115.551 27.3317C115.535 27.5021 115.556 27.6739 115.611 27.8358C115.667 27.9977 115.756 28.1461 115.872 28.2713C115.989 28.3966 116.131 28.4958 116.288 28.5626C116.446 28.6294 116.616 28.6622 116.787 28.659C117.037 28.6604 117.281 28.5805 117.482 28.4313C117.683 28.282 117.83 28.0716 117.901 27.8317C117.929 27.7436 117.943 27.6515 117.941 27.559V26.9953Z" fill="#4D4D4D" />
                    <path d="M122.328 27.277C122.336 27.4961 122.299 27.7146 122.219 27.9188C122.139 28.1229 122.018 28.3084 121.863 28.4637C121.708 28.6189 121.523 28.7406 121.319 28.8211C121.115 28.9016 120.897 28.9392 120.678 28.9316C120.468 28.9385 120.259 28.9024 120.064 28.8254C119.868 28.7484 119.691 28.6322 119.542 28.484C119.394 28.3357 119.277 28.1586 119.199 27.9636C119.122 27.7685 119.085 27.5596 119.091 27.3498C119.084 27.1326 119.121 26.9162 119.2 26.7138C119.279 26.5115 119.399 26.3274 119.552 26.1729C119.704 26.0184 119.887 25.8967 120.089 25.8154C120.29 25.734 120.506 25.6947 120.723 25.6998C120.934 25.6889 121.146 25.7221 121.343 25.7972C121.541 25.8722 121.721 25.9876 121.872 26.1359C122.023 26.2841 122.141 26.4621 122.22 26.6586C122.298 26.855 122.335 27.0656 122.328 27.277ZM119.405 27.3316C119.393 27.5076 119.418 27.6842 119.477 27.8502C119.537 28.0162 119.631 28.168 119.752 28.2961C119.873 28.4243 120.02 28.5259 120.182 28.5945C120.345 28.6632 120.52 28.6975 120.696 28.6952C120.873 28.6972 121.05 28.663 121.213 28.5946C121.377 28.5262 121.525 28.4251 121.649 28.2974C121.772 28.1698 121.868 28.0183 121.931 27.8522C121.994 27.6861 122.022 27.5089 122.014 27.3316C122.01 26.9856 121.868 26.6554 121.621 26.4138C121.373 26.1721 121.04 26.0387 120.694 26.0429C120.348 26.0472 120.018 26.1886 119.776 26.4363C119.534 26.6839 119.401 27.0174 119.405 27.3634V27.3316Z" fill="#4D4D4D" />
                    <path d="M123.169 26.5228C123.169 26.2728 123.169 26.0274 123.141 25.7774H123.437L123.464 26.3956C123.578 26.1807 123.749 26.0017 123.958 25.8788C124.168 25.756 124.408 25.6941 124.651 25.7001C124.932 25.7001 125.851 25.8319 125.851 27.1047V28.8547H125.537V27.1047C125.537 26.5047 125.273 25.9728 124.569 25.9728C124.342 25.9752 124.12 26.0458 123.934 26.1755C123.748 26.3052 123.604 26.488 123.523 26.7001C123.491 26.7892 123.475 26.8828 123.473 26.9774V28.8547H123.16L123.169 26.5228Z" fill="#4D4D4D" />
                </svg>
            </div>
        </div>
    </section>

    <!-- Follow us on Instagram -->
    <section class="py-6 md:py-8 lg:py-12">
        <div class="container mx-auto">
            <h2 class="text-center font-medium font-montserrat text-primary text-xl md:text-3xl">Follow us on Instagram</h2>
        </div>
        <div class="flex items-center justify-center mt-2 md:mt-4 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M12 2.163C15.204 2.163 15.584 2.175 16.85 2.233C20.102 2.381 21.621 3.924 21.769 7.152C21.827 8.417 21.838 8.797 21.838 12.001C21.838 15.206 21.826 15.585 21.769 16.85C21.62 20.075 20.105 21.621 16.85 21.769C15.584 21.827 15.206 21.839 12 21.839C8.796 21.839 8.416 21.827 7.151 21.769C3.891 21.62 2.38 20.07 2.232 16.849C2.174 15.584 2.162 15.205 2.162 12C2.162 8.796 2.175 8.417 2.232 7.151C2.381 3.924 3.896 2.38 7.151 2.232C8.417 2.175 8.796 2.163 12 2.163ZM12 0C8.741 0 8.333 0.014 7.053 0.072C2.695 0.272 0.273 2.69 0.073 7.052C0.014 8.333 0 8.741 0 12C0 15.259 0.014 15.668 0.072 16.948C0.272 21.306 2.69 23.728 7.052 23.928C8.333 23.986 8.741 24 12 24C15.259 24 15.668 23.986 16.948 23.928C21.302 23.728 23.73 21.31 23.927 16.948C23.986 15.668 24 15.259 24 12C24 8.741 23.986 8.333 23.928 7.053C23.732 2.699 21.311 0.273 16.949 0.073C15.668 0.014 15.259 0 12 0ZM12 5.838C8.597 5.838 5.838 8.597 5.838 12C5.838 15.403 8.597 18.163 12 18.163C15.403 18.163 18.162 15.404 18.162 12C18.162 8.597 15.403 5.838 12 5.838ZM12 16C9.791 16 8 14.209 8 12C8 9.791 9.791 8 12 8C14.209 8 16 9.791 16 12C16 14.209 14.209 16 12 16ZM18.406 4.155C17.61 4.155 16.965 4.8 16.965 5.595C16.965 6.39 17.61 7.035 18.406 7.035C19.201 7.035 19.845 6.39 19.845 5.595C19.845 4.8 19.201 4.155 18.406 4.155Z" fill="black" />
            </svg>
            <a href="#" class="font-montserrat text-primary underline">@thejewelstore</a>
        </div>
        <div class="container mx-auto mt-4 md:mt-10">
            <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
                <div>
                    <img class="w-full h-5/6 object-cover" src="/images/instagram/Image-1.webp" alt="Instagram post 1">
                </div>
                <div>
                    <img class="w-full h-5/6 object-cover" src="/images/instagram/Image-2.jpg" alt="Instagram post 2">
                </div>
                <div>
                    <img class="w-full h-5/6 object-cover" src="/images/instagram/Image-3.jpg" alt="Instagram post 3">
                </div>
                <div>
                    <img class="w-full h-5/6 object-cover" src="/images/instagram/Image-4.webp" alt="Instagram post 4">
                </div>
                <div>
                    <img class="w-full h-5/6 object-cover" src="/images/instagram/Image-5.webp" alt="Instagram post 5">
                </div>
                <div>
                    <img class="w-full h-5/6 object-cover" src="/images/instagram/Image-6.webp" alt="Instagram post 6">
                </div>
            </div>
        </div>
    </section>

</div>
@endsection