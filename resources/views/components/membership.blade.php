@extends('layouts.master')
@section('content')

<div class="bg-sage-100 min-h-screen">
    {{-- Header Section --}}
    <div class="bg-sage relative mx-auto py-16 px-2 2xl:px-4 text-center">
        <p class="text-primary mb-4">Welcome to <span class="underline">episode 1</span> of my free & no-pitch series on...</p>
        <h1 class="text-primary font-literata font-medium text-3xl 2xl:text-5xl mb-16">
            How I Turned My Love of Planning into a<br class="hidden md:block">
            6-Figure Freelance Career
        </h1>
    </div>

    {{-- Video Section --}}
    <div class="bg-coral mx-auto px-4 md:px-16 2xl:px-36">
            <div class="2xl:max-w-5xl mx-auto -mt-10 pb-10 2xl:-mt-14 2xl:pb-16 overflow-hidden">
                <div class="relative aspect-video">
                    {{-- Video player placeholder - replace with your video component --}}
                    <div class="absolute inset-0">
                        <iframe class="w-full h-full" src="{{ asset('videos/membership_video_1.mp4') }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div> 
            </div>
        {{-- <div class="flex flex-col gap-4">
            <p class="text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
            </p>
            <p class="text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.
            </p>
        </div> --}}
    </div>

    {{-- Episodes Section --}}
    <div class="mx-auto px-4 md:px-16 2xl:px-40 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Episode 1 --}}
            <div class="text-center">
                <p class="text-gray-600 italic font-medium md:h-12 lg:h-8">You're watching episode 1!</p>
                <div class="mb-4 cursor-pointer">
                    <img src="{{ asset('images/Episode 1.png') }}" class="h-36 2xl:h-60 w-full" alt="Episode 1">
                </div>
                <p class="text-gray-500 uppercase text-sm mb-1">EPISODE 1:</p>
                <h3 class="text-primary text-xl font-literata w-2/3 mx-auto">The Chaotic Journey from $10/hr to 6 Figures</h3>
            </div>

            {{-- Episode 2 --}}
            <div class="text-center">
                <p class="text-gray-600 italic font-medium md:h-12 lg:h-8">Click <a href="#" class="text-coral-500 text-pitch font-semibold underline">here</a> to unlock episode 2.</p>
                <div class="mb-4 relative cursor-pointer" onclick="window.location.href = '{{ url('/subscription-plan') }}'">
                    <img src="{{ asset('images/Episode 2.png') }}" class="h-36 2xl:h-60 w-full" alt="Episode 2">
                    <div class="absolute inset-0 flex items-center justify-center bg-sage bg-opacity-50">
                        <svg class="w-16 h-16 text-pitch" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <p class="text-gray-500 uppercase text-sm mb-1">EPISODE 2:</p>
                <h3 class="text-primary font-literata text-xl w-2/3 mx-auto">How the $$$ Breaks Down & What I Charged</h3>
            </div>

            {{-- Episode 3 --}}
            <div class="text-center">
                <p class="text-gray-600 italic font-medium md:h-12 lg:h-8">Click <a href="#" class="text-coral-500 text-pitch font-semibold underline">here</a> to unlock episode 3.</p>
                <div class="mb-4 relative cursor-pointer" onclick="window.location.href = '{{ url('/subscription-plan') }}'">
                    <img src="{{ asset('images/Episode 3.png') }}" class="h-36 2xl:h-60 w-full" alt="Episode 3">
                    <div class="absolute inset-0 flex items-center justify-center bg-sage bg-opacity-50">
                        <svg class="w-16 h-16 text-pitch" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <p class="text-gray-500 uppercase text-sm mb-1">EPISODE 3:</p>
                <h3 class="text-primary font-literata text-xl w-2/3 mx-auto">Where I Found My 40+ Clients & My Advice</h3>
            </div>
        </div>
    </div>

    {{-- FAQ Section --}}
    <div class="bg-sage py-16 px-4 md:px-16 2xl:px-36">
        <div class="mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-primary font-medium 2xl:text-xl mb-4">"Why are you offering this for free?"</h3>
                    <p class="text-gray-700 text-sm  2xl:text-base ">Good question! Because I think a small percentage of those of you that would click & watch this series might be interested in my programs. So I created this series to deliver as much value as I could upfront to help you see if this is something for you. If not, 100% okay! I hope it's helpful to you regardless.</p>
                    <p class="text-gray-700 mt-4 text-sm 2xl:text-base">If you have any questions, you can message me on <a href="#" class="text-coral-500">Instagram</a> or email me: deya@dbmbootcamp.com</p>
                </div>
                <div>
                    <h3 class="text-primary font-medium 2xl:text-xl mb-4">Whenever it suits you, here are other ways I can help:</h3>
                    <ul class="text-gray-700 space-y-2">
                        <li>• <a href="#" class="text-primary font-semibold underline text-sm 2xl:text-base">Youtube Videos</a> (Free)</li>
                        <li>• <a href="#" class="text-primary font-semibold underline text-sm 2xl:text-base">Mini-DBM Challenge</a> (Paid)</li>
                        <li>• Request an <a href="#" class="text-primary font-semibold underline text-sm 2xl:text-base">Invitation to the Open House</a> of My Signature Program: DBM Bootcamp® (Paid)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- 
    <div class="bg-coral text-white py-8">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <p class="text-sm">© COPYRIGHT 2025 ROAYA DIAMONDS</p>
        </div>
    </div> --}}
</div>


@endsection