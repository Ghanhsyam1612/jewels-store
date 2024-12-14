@extends('layouts.master')

@section('content')

<div class="container mb-14">
    <nav class="flex items-center text-sm font-montserrat mb-4 px-40 py-5">
        <a href="/" class="text-primary text-xs hover:underline">Home</a> 
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" fill="#0F0F0F"></path> </g></svg>
        <span class="text-primary text-xs">Custom Shape Diamonds</span>
    </nav>

    <div class="flex flex-col items-center justify-center px-40 my-12">
        <h2 class="text-3xl font-montserrat font-semibold text-primary mb-2">Custom Shape Lab Created Diamonds</h2>
    </div>

    <div class="grid grid-cols-2 gap-8 px-40">
        <div class="relative border border-light-grey-1">
            <img src="/images/triangle-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-8">
                <h3 class="text-4xl font-bold mb-4 text-primary w-1/2">Triangle Shape Diamonds</h3>
                <a href="#" class="bg-white text-primary font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-8 py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Loose-Shield-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white rounded-lg px-8">
                <h3 class="text-4xl font-bold mb-4 text-primary w-1/2">Shield Shape Diamonds</h3>
                <a href="#" class="bg-white text-primary font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-8 py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Loose-Hexagon-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white px-8">
                <h3 class="text-4xl font-bold mb-4 text-primary w-1/2">Hexagon Shape Diamonds</h3>
                <a href="#" class="bg-white text-primary font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-8 py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Trapezoid-Shape-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white rounded-lg px-8">
                <h3 class="text-4xl font-bold mb-4 text-primary w-1/2">Trapezoid Shape Diamonds</h3>
                <a href="#" class="bg-white text-primary font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-8 py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>

        <div class="relative border border-light-grey-1">
            <img src="/images/Loose-baguette-cut-Diamond.webp" alt="Marquise Diamond" class="w-full h-auto">
            <div class="absolute inset-0 flex flex-col items-start justify-center text-white rounded-lg px-8">
                <h3 class="text-4xl font-bold mb-4 text-primary w-1/2">Tapper Baguette Diamonds</h3>
                <a href="#" class="bg-white text-primary font-bold font-montserrat border border-primary hover:bg-primary hover:text-white hover:border-primary px-8 py-3 rounded-md transition">Shop Now</a>
            </div>
        </div>
    </div>
</div>

@endsection
