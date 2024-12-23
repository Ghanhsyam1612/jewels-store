@extends('layouts.master')

@section('content')

<div class="w-full mx-auto mb-10">
    <nav class="flex items-center text-sm font-montserrat mb-4 px-4 md:px-8 lg:px-12 xl:px-16 2xl:px-20 py-5">
        <a href="/" class="text-primary text-xs lg:text-base hover:underline">Home</a> 
        <svg class="w-4 h-4 text-primary" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" fill="currentColor"></path> </g></svg>
        <span class="text-primary text-xs lg:text-base">Fancy Shapes Diamonds</span>
    </nav>

    <div class="flex flex-col items-center justify-center px-4 md:px-8 lg:px-12 xl:px-16 2xl:px-20 my-12">
        <h2 class="text-xl md:text-2xl xl:text-3xl 3xl:text-4xl font-montserrat text-center font-semibold mb-2 text-primary">Melee Fancy Shape Lab Created Diamonds</h2>
        <p class="text-sm lg:text-lg xl:text-xl 3xl:text-2xl text-center font-montserrat text-primary">Looking for a ‘not so mainstream’ stone to stand out and radiate elegance? These melee fancy shaped diamonds will get the work done for you.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-8 px-4 md:px-8 lg:px-12 xl:px-28 3xl:px-40">
        <div class="relative border border-light-grey-1">
            <img src="/images/Princess-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Princess Cut Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Cushion-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white rounded-lg px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Cushion Cut Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Heart-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Heart Shape Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Marquise-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white rounded-lg px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Marquise Shape Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Loose-Pear-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Pear Shape Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Loose-Oval-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white rounded-lg px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Oval Cut Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Loose-Emerald-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Emerald Cut Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Loose-baguette-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white rounded-lg px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Baguette Cut Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Loose-Old-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Old Mine Cut Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Loose-Old-European-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white rounded-lg px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Old European Cut Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/triangle-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Triangle Shape Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Loose-Shield-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white rounded-lg px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Shield Shape Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Loose-Hexagon-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Hexagon Shape Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Trapezoid-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white rounded-lg px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Trapezoid Shape Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Loose-baguette-cut-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white rounded-lg px-8">
                <h3 class="text-base md:text-lg lg:text-3xl xl:text-4xl 3xl:text-5xl font-montserrat font-bold mb-4 text-primary w-1/2">Tapper Baguette Diamonds</h3>
                <a href="#" class="bg-white text-primary text-xs md:text-sm lg:text-base 2xl:text-lg 3xl:text-xl font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-4 py-2 lg:px-8 lg:py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>
    </div>
</div>

@endsection
