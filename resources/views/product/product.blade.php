@extends('layouts.master')

@section('content')
    <div class="container">
        <nav class="flex items-center text-sm font-montserrat mb-4 px-4 md:px-8 lg:px-12 xl:px-16 2xl:px-24 py-4">
            <a href="/" class="text-dark-blue text-xs hover:underline">Home</a>
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z"
                        fill="#0F0F0F"></path>
                </g>
            </svg>
            <span class="text-dark-blue text-xs">Calibrated Diamond</span>
        </nav>

        <div class="flex flex-col lg:flex-row md:gap-5 px-4 md:px-8 lg:px-12 xl:px-16 2xl:px-24 xl:py-6 2xl:py-0">
            <!-- Left side - Photo -->
            <div class="flex flex-col gap-8 mb-12 w-full lg:w-4/6">    
                <!-- Thumbnail images -->
                <div class="grid grid-cols-2 gap-1">
                    <img src="/images/1.jpg" alt="Diamond 1" class="w-full cursor-pointer hover:opacity-75"
                        onclick="changeImage('/images/1.jpg')">
                    <img src="/images/2.jpg" alt="Diamond 2" class="w-full cursor-pointer hover:opacity-75"
                        onclick="changeImage('/images/2.jpg')">
                    <img src="/images/3.jpg" alt="Diamond 3" class="w-full cursor-pointer hover:opacity-75"
                        onclick="changeImage('/images/3.jpg')">
                    <img src="/images/4.jpg" alt="Diamond 4" class="w-full cursor-pointer hover:opacity-75"
                        onclick="changeImage('/images/4.jpg')">
                    <div class="flex flex-col justify-center items-center">
                        <div class="relative flex flex-col items-center">
                            <!-- Hand with diamond image container -->
                            <div class="relative w-full">
                                <img src="/images/hand-transparent-shadow.webp" alt="Hand model" class="w-full h-auto">
                                <!-- Diamond overlay with dynamic sizing -->
                                <div id="diamond-overlay" class="absolute left-[30%] top-[65%] md:left-[25%] md:top-[60%] lg:left-[30%] lg:top-[65%]">
                                    <img src="/images/diamonds/round.png" alt="Diamond"
                                        class="w-8 transition-all duration-300">
                                </div>
                            </div>

                            <!-- Carat size indicator -->
                            <div class="mt-4 text-center">
                                <span class="text-sm font-semibold">Diamond Size: </span>
                                <span id="carat-display" class="text-sm font-bold text-primary">2.0</span>
                                <span class="text-sm font-semibold"> carats</span>
                            </div>

                            <!-- Slider control -->
                            <div class="w-full max-w-md px-4">
                                <input type="range" min="0.5" max="8.0" step="0.1" value="2.0"
                                    class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer"
                                    id="diamond-size-slider">
                                <div class="flex justify-between text-xs text-gray-500 mt-1">
                                    <span>0.5ct</span>
                                    <span>8ct</span>
                                </div>
                            </div>
                        </div>

                        <!-- JavaScript for diamond size control -->
                        <script>
                            const slider = document.getElementById('diamond-size-slider');
                            const diamond = document.querySelector('#diamond-overlay img');
                            const caratDisplay = document.getElementById('carat-display');

                            slider.addEventListener('input', function() {
                                const value = parseFloat(this.value);

                                // Update carat display
                                caratDisplay.textContent = value.toFixed(1);

                                // Calculate size (base size is 2 carats = 32px)
                                const baseSize = 32; // 2 carats = 32px (w-8 in Tailwind)
                                const newSize = (baseSize * Math.sqrt(value / 2)); // Scale size proportionally to carat weight

                                // Apply new size
                                diamond.style.width = `${newSize}px`;
                            });
                        </script>
                        <style>
                            input[type="range"] {
                                -webkit-appearance: none;
                                height: 4px;
                                background: #301914;
                                border-radius: 5px;
                                outline: none;
                            }

                            input[type="range"]::-webkit-slider-thumb {
                                -webkit-appearance: none;
                                width: 20px;
                                height: 20px;
                                background: #301914;
                                border-radius: 50%;
                                cursor: pointer;
                            }
                        </style>

                    </div>
                </div>

                <!-- Add Try On Button below the main image -->
                <div class="mt-1 flex justify-center">
                    <p class="flex flex-row items-center text-sm text-primary font-semibold mb-2 cursor-pointer"
                        onclick="openTryOn()">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd"
                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                clip-rule="evenodd" />
                        </svg>
                        Virtual Try On
                    </p>
                </div>
            </div>

            <!-- Right side - Details -->
            <div class="w-full lg:w-1/3 space-y-2">
                <!-- Product Name -->
                <h1 class="text-xl lg:text-2xl 3xl:text-3xl font-semibold text-primary">The Trellis Three Stone Emerald Engagement Ring</h1>
                <!-- Product Price -->
                <h3 class="text-base lg:text-lg 3xl:text-xl font-semibold text-primary">Starting at CA $10,000</h3>
                <!-- Product Shape -->
                <div class="flex flex-col gap-2 py-2">
                    <p class="text-sm 3xl:text-base font-semibold text-primary">Shape : <span class="font-normal">Round</span></p>
                    <div class="grid grid-cols-10 gap-2">
                        <img src="{{ asset('Shape/round.svg') }}" alt="Round" class="w-7 h-7">
                        <img src="{{ asset('Shape/oval.svg') }}" alt="Round" class="w-7 h-7">
                        <img src="{{ asset('Shape/emerald.svg') }}" alt="Round" class="w-7 h-7">
                        <img src="{{ asset('Shape/pear.svg') }}" alt="Round" class="w-7 h-7">
                        <img src="{{ asset('Shape/cushion.svg') }}" alt="Round" class="w-7 h-7">
                        <img src="{{ asset('Shape/marquise.svg') }}" alt="Round" class="w-7 h-7">
                        <img src="{{ asset('Shape/asscher.svg') }}" alt="Round" class="w-7 h-7">
                        <img src="{{ asset('Shape/princess.svg') }}" alt="Round" class="w-7 h-7">
                        <img src="{{ asset('Shape/radiant.svg') }}" alt="Round" class="w-7 h-7">
                        <img src="{{ asset('Shape/heart.svg') }}" alt="Round" class="w-7 h-7">
                    </div>
                </div>
                <!-- Product Color -->
                <div class="flex flex-col gap-2 py-2">
                    <p class="text-sm 3xl:text-base font-semibold text-primary">Metal : <span class="font-normal">Platinum</span></p>
                    <div class="flex flex-row gap-2">
                        <img src="{{ asset('Shape/platinum.svg') }}" alt="Platinum" class="w-9 h-9"
                            style="fill: #E5E4E2;">
                        <img src="{{ asset('Shape/gold.svg') }}" alt="Gold" class="w-9 h-9" style="fill: #FFD700;">
                        <img src="{{ asset('Shape/silver.svg') }}" alt="Silver" class="w-9 h-9"
                            style="fill: #C0C0C0;">
                        <img src="{{ asset('Shape/rose-gold.svg') }}" alt="Rose Gold" class="w-9 h-9"
                            style="fill: #B76E79;">
                    </div>
                </div>
                <!-- Select Your Diamond Button -->
                <div class="flex justify-center">
                    <button
                        class="bg-primary 3xl:text-lg font-semibold text-gold w-full px-6 py-3 hover:bg-gold hover:text-primary transition duration-300">
                        Select Your Diamond
                    </button>
                </div>
                <!-- Consult with Diamond Expert Online Button -->
                <div class="flex justify-center">
                    <button
                        class="bg-gold 3xl:text-lg font-semibold text-primary w-full px-6 py-3 hover:bg-primary hover:text-gold transition duration-300">
                        Consult with Diamond Expert Online
                    </button>
                </div>
                <!-- Description -->
                <div class="flex flex-col gap-2 py-3">
                    <div class="flex flex-row items-center gap-2">
                        <img src="{{ asset('Shape/diamond.svg') }}" alt="Diamond" class="w-5 h-4">
                        <p class="text-sm 3xl:text-base text-primary flex flex-row items-center gap-1">
                            Roaya Created Diamond
                            <a href="/roaya-created-diamond" class="text-sm text-primary underline">
                                <img src="{{ asset('Shape/info.svg') }}" alt="Diamond" class="w-5 h-5">
                            </a>
                        </p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <img src="{{ asset('Shape/calender.svg') }}" alt="Diamond" class="w-5 h-5">
                        <p class="text-sm 3xl:text-base text-primary">Made-to-order. Ship by Wed, Jan 29</p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <img src="{{ asset('Shape/security.svg') }}" alt="Diamond" class="w-5 h-5">
                        <p class="text-sm 3xl:text-base text-primary underline">Lifetime warranty and value guarantee</p>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <img src="{{ asset('Shape/truck.svg') }}" alt="Diamond" class="w-5 h-5">
                        <a href="/shipping-policy" class="text-sm 3xl:text-base text-primary underline">Shipping Policy</a>
                    </div>
                    <div class="flex flex-row items-center gap-2">
                        <img src="{{ asset('Shape/return.svg') }}" alt="Diamond" class="w-5 h-5">
                        <a href="/return-policy" class="text-sm 3xl:text-base text-primary underline">Return Policy</a>
                    </div>
                </div>
                <!-- Need More Time To Think? -->
                <div class="flex flex-col gap-1 py-3">
                    <p class="text-xl 3xl:text-2xl text-primary uppercase font-medium">Need more time to think?</p>
                    <p class="text-sm 3xl:text-base text-primary">Email this piece to yourself or drop a hint.</p>
                    <div class="flex flex-row items-center gap-2 mt-2">
                        <input type="email" placeholder="Enter your email"
                            class="w-full px-4 py-2 border border-gray-300">
                        <button class="bg-primary 3xl:text-lg text-gold font-medium px-4 py-2">Submit</button>
                    </div>
                    <div class="flex flex-row items-center gap-2 mt-2">
                        <input type="checkbox" placeholder="Drop a hint"
                            class="w-4 h-4 px-4 py-2 border border-gray-300 accent-primary">
                        <p class="text-base 3xl:text-lg text-gray-500">
                            Accept
                            <a href="/privacy-policy" class="text-base 3xl:text-lg text-primary underline">Privacy Policy</a>
                        </p>
                    </div>
                </div>
                <!-- Product Description -->
                <div class="flex flex-col gap-2 py-3">
                    <p class="text-lg 3xl:text-xl text-primary font-semibold">The Trellis Three Stone Details</p>
                    <p class="text-base 3xl:text-lg text-primary font-semibold">The Trellis Three Stone three-stone ring in platinum
                        with a emerald diamond</p>
                    <p class="text-sm 3xl:text-base text-primary leading-6">
                        A contemporary take on our beloved Three Stone setting, the Trellis Three Stone engagement ring
                        highlights your center VRAI created diamond with two matching 0.25ct side stones for undeniable
                        brilliance. With curved, interwoven prongs and our signature low-set sling, our elegantly crafted
                        Trellis setting beautifully and securely connects this dazzling diamond trio. Choose between a plain
                        or pave band for a sophisticated and symbolic design that truly shines.
                    </p>
                    <p class="text-sm 3xl:text-base text-primary font-medium">Band width : <span class="font-normal">2.2mm</span></p>
                    <p class="text-sm 3xl:text-base text-primary font-medium">Band depth : <span class="font-normal">1.6mm</span></p>
                    <p class="text-sm 3xl:text-base text-primary font-medium">Setting height : <span class="font-normal">6.5mm</span>
                    </p>
                    <p class="text-sm 3xl:text-base text-primary font-medium">Gold/Platinum metal weight : <span
                            class="font-normal">6.17g (size 6)</span></p>
                    <p class="text-sm 3xl:text-base text-primary font-medium">Pavé carat weight : <span
                            class="font-normal">0.17ctw</span></p>
                    <p class="text-sm 3xl:text-base text-primary font-medium">Shown with : <span class="font-normal">1.5ct</span></p>
                    <a href="#" class="text-sm 3xl:text-base text-primary underline">For precise weight please see tolerance
                        specs.</a>
                </div>
            </div>
        </div>

        {{-- <div class="grid grid-cols-3 gap-2 py-2 px-16">
            <div class="flex flex-col gap-2 py-2">
                <p class="text-lg text-primary font-semibold">Impeccable origin</p>
                <p class="text-lg text-primary font-semibold">Roaya created diamonds are grown in our zero-emission foundry located in America’s beautiful Pacific Northwest.</p>
            </div>
            <div class="flex flex-col gap-2 py-2">
                <p class="text-lg text-primary font-semibold">Certified carbon neutral</p>
                <p class="text-lg text-primary font-semibold">We operate a zero-emission foundry using renewable energy from the majestic Columbia River.</p>
            </div>
            <div class="flex flex-col gap-2 py-2">
                <p class="text-lg text-primary font-semibold">Cut to perfection</p>
                <p class="text-lg text-primary font-semibold">Our fourth-generation master cutters meticulously guide the cutting and polishing of each VRAI created diamond. They follow a precise path of more than 243 work steps per diamond to ensure maximum scintillation.</p>
            </div>
        </div> --}}

        <!-- Related Products -->
        <div class="flex flex-col items-center gap-2 py-6 lg:py-6 px-4 md:px-8 lg:px-12 2xl:px-24">
            <p class="text-xl lg:text-2xl 3xl:text-3xl text-primary font-semibold ">Explore Engagement Rings</p>
            <div class="grid grid-cols-2 md:grid-cols-4 md:w-full gap-2 py-2">
                <div class="flex flex-col">
                    <img src="{{ asset('images/1.jpg') }}" alt="Diamond" class="w-full h-36 md:h-full mb-2">
                    <p class="text-sm md:text-base 3xl:text-lg text-primary font-semibold">The Twist Band</p>
                    <p class="text-sm md:text-sm 3xl:text-base text-primary">$800+</p>
                </div>
                <div class="flex flex-col">
                    <img src="{{ asset('images/2.jpg') }}" alt="Diamond" class="w-full h-36 md:h-full mb-2">
                    <p class="text-sm md:text-base 3xl:text-lg text-primary font-semibold">The Petal Crown Band</p>
                    <p class="text-sm md:text-sm 3xl:text-base text-primary">$800+</p>
                </div>
                <div class="flex flex-col">
                    <img src="{{ asset('images/3.jpg') }}" alt="Diamond" class="w-full h-36 md:h-full mb-2">
                    <p class="text-sm md:text-base 3xl:text-lg text-primary font-semibold">The Round</p>
                    <p class="text-sm md:text-sm 3xl:text-base text-primary">$600+</p>
                </div>
                <div class="flex flex-col">
                    <img src="{{ asset('images/1.jpg') }}" alt="Diamond" class="w-full h-36 md:h-full mb-2">
                    <p class="text-sm md:text-base 3xl:text-lg text-primary font-semibold">The Eternity Band</p>
                    <p class="text-sm md:text-sm 3xl:text-base text-primary">$900+</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-2 py-12 px-4 md:px-8 lg:px-12 2xl:px-24">
            {{-- Desktop Custom Engagement Rings --}}
            <img src="{{ asset('images/custom-jewellery.png') }}" alt="Diamond" class="hidden lg:flex relative w-full h-full mb-2">
            <div class="lg:flex hidden flex-col items-start gap-2 lg:py-36 lg:right-48 lg:w-[30rem] xl:py-24 xl:right-44 xl:w-[27rem] 2xl:py-36 2xl:right-48 2xl:w-[30rem] 3xl:py-40 absolute 3xl:right-44 3xl:w-[35rem] space-y-3">
                <h1 class="text-3xl 3xl:text-4xl text-white text-left font-semibold">Custom Engagement Rings</h1>
                <p class="text-base 3xl:text-lg text-white text-left">
                    If you’re not seeing exactly what you have in mind, our Diamond Experts will help you design a
                    completely custom engagement ring featuring Roaya created diamonds.
                </p>
                <button class="border border-white 3xl:text-xl text-center text-white font-medium w-4/5 px-4 py-3">
                    Create Your Own
                </button>
            </div>

            {{-- Mobile Custom Engagement Rings --}}
            <img src="{{ asset('images/custom-jewellery-mobile.png') }}" alt="Diamond" class="flex lg:hidden relative w-full h-full mb-2">
            <div class="flex lg:hidden flex-col items-start gap-2 px-4 space-y-3">
                <h1 class="text-xl text-primary text-left font-semibold">Custom Engagement Rings</h1>
                <p class="text-sm text-primary text-left">
                    If you’re not seeing exactly what you have in mind, our Diamond Experts will help you design a
                    completely custom engagement ring featuring VRAI created diamonds.
                </p>
                <button class="border border-primary text-center text-primary bg-gold font-medium w-full px-4 py-3">
                    Create Your Own
                </button>
            </div>
        </div>
    </div>
@endsection
