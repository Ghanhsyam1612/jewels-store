@extends('layouts.master')

@section('content')
    <div class="max-w-screen-2xl mx-auto">
        <!-- Breadcrumb Navigation - Refined -->
        <nav class="flex items-center text-sm font-montserrat mb-4 px-4 md:px-8 lg:px-12 2xl:px-28 3xl:px-40 py-6">
            <a href="/" class="text-gray-600 text-xs lg:text-sm font-medium hover:text-gold transition duration-300">Home</a>
            <svg class="w-3 h-3 mx-2 text-gray-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" fill="currentColor"></path>
            </svg>
            <span class="text-gold text-xs lg:text-sm font-medium">Engagement Rings</span>
        </nav>

        <div class="flex flex-col lg:flex-row md:gap-5 px-4 md:px-8 lg:px-12 xl:px-16 2xl:px-24 xl:py-6 2xl:py-0">
            <!-- Left side - Photo -->
            <div class="flex flex-col gap-8 mb-12 w-full lg:w-4/6">
                <!-- Thumbnail images -->
                <div class="grid grid-cols-2 gap-1">
                    <img src="/images/1.jpg" alt="Diamond 1" class="w-full cursor-pointer hover:opacity-75" onclick="selectJewelry('/images/1.jpg')">
                        <img src="/images/2.jpg" alt="Diamond 2" class="w-full cursor-pointer hover:opacity-75" onclick="selectJewelry('/images/2.jpg')">
                        <img src="/images/3.jpg" alt="Diamond 3" class="w-full cursor-pointer hover:opacity-75" onclick="selectJewelry('/images/3.jpg')">
                        <img src="/images/4.jpg" alt="Diamond 4" class="w-full cursor-pointer hover:opacity-75" onclick="selectJewelry('/images/4.jpg')">

                    <div class="hidden lg:flex lg:flex-col lg:justify-center lg:items-center">
                        <div class="relative flex flex-col items-center">
                            <!-- Hand with diamond image container -->
                            <div class="relative w-full">
                                <img src="/images/hand-transparent-shadow.webp" alt="Hand model" class="w-full h-auto">
                                <!-- Diamond overlay with dynamic sizing -->
                                <div id="diamond-overlay"
                                    class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
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

                            // Base size (2 carats = 32px)
                            const baseSize = 32;
                            const newSize = (baseSize * Math.sqrt(value / 2));

                            // Apply new size
                            diamond.style.width = `${newSize}px`;
                        });
                    </script>

                    <style>
                        input[type="range"] {
                            -webkit-appearance: none;
                            height: 3px;
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

                        /* Ensuring the diamond image stays centered */
                        #diamond-overlay {
                            position: absolute;
                            left: 33.5%;
                            top: 66%;
                            transform: translate(-50%, -50%);
                        }
                    </style>
                </div>

                <!-- Start Mobile View -->
                <div class="flex flex-col justify-center items-center lg:hidden">
                    <div class="relative flex flex-col items-center">
                        <!-- Hand with diamond image container -->
                        <div class="relative w-full">
                            <img src="/images/hand-transparent-shadow.webp" alt="Hand model" class="w-full h-auto">
                            <!-- Diamond overlay with dynamic sizing -->
                            <div id="mobile-diamond-overlay"
                                class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <img src="/images/diamonds/round.png" alt="Diamond"
                                    class="w-8 transition-all duration-300">
                            </div>
                        </div>

                        <!-- Carat size indicator -->
                        <div class="mt-4 text-center">
                            <span class="text-sm font-semibold">Diamond Size: </span>
                            <span id="mobile-carat-display" class="text-sm font-bold text-primary">2.0</span>
                            <span class="text-sm font-semibold"> carats</span>
                        </div>

                        <!-- Slider control -->
                        <div class="w-full max-w-md px-4">
                            <input type="range" min="0.5" max="8.0" step="0.1" value="2.0"
                                class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer"
                                id="mobile-diamond-size-slider">
                            <div class="flex justify-between text-xs text-gray-500 mt-1">
                                <span>0.5ct</span>
                                <span>8ct</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- JavaScript for diamond size control -->
                <script>
                    const mobileSlider = document.getElementById('mobile-diamond-size-slider');
                    const mobileDiamond = document.querySelector('#mobile-diamond-overlay img');
                    const mobileCaratDisplay = document.getElementById('mobile-carat-display');

                    mobileSlider.addEventListener('input', function() {
                        const value = parseFloat(this.value);

                        // Update carat display
                        mobileCaratDisplay.textContent = value.toFixed(1);

                        // Base size (2 carats = 32px)
                        const baseSize = 32;
                        const newSize = (baseSize * Math.sqrt(value / 2));

                        // Apply new size
                        mobileDiamond.style.width = `${newSize}px`;
                    });
                </script>

                <style>
                    input[type="range"] {
                        -webkit-appearance: none;
                        height: 3px;
                        background: #301914;
                        border-radius: 5px;
                        outline: none;
                    }

                    input[type="range"]#mobile-diamond-size-slider::-webkit-slider-thumb {
                        -webkit-appearance: none;
                        width: 20px;
                        height: 20px;
                        background: #301914;
                        border-radius: 50%;
                        cursor: pointer;
                    }

                    /* Ensuring the diamond image stays centered */
                    #mobile-diamond-overlay {
                        position: absolute;
                        left: 33.5%;
                        top: 66%;
                        transform: translate(-50%, -50%);
                    }
                </style>
                <!-- End Mobile View -->

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
                <!-- Try On Modal -->
                {{-- <div id="tryOnModal"
                    class="hidden fixed inset-0 bg-black bg-opacity-75 z-50 flex items-center justify-center">
                    <div class="bg-white rounded-lg p-8 max-w-2xl w-full">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-xl font-semibold">Virtual Try On</h3>
                            <button onclick="closeTryOn()" class="text-gray-500 hover:text-gray-700">&times;</button>
                        </div>

                        <!-- Try On Options -->
                        <div id="tryOnOptions" class="flex gap-4 justify-center mb-6">
                            <button onclick="showUploadOption()"
                                class="bg-dark-blue text-white px-6 py-3 rounded-md hover:bg-opacity-90">
                                Upload Image
                            </button>
                            <button onclick="showCameraOption()"
                                class="bg-dark-blue text-white px-6 py-3 rounded-md hover:bg-opacity-90">
                                Take Photo
                            </button>
                        </div>

                        <!-- Upload Image Section -->
                        <div id="uploadSection" class="hidden">
                            <input type="file" id="imageUpload" accept="image/*" onchange="handleImageUpload(event)"
                                class="mb-4">
                            <div id="uploadPreview"
                                class="relative w-full h-[400px] bg-gray-100 flex items-center justify-center">
                                <img id="uploadedImage" class="max-h-full max-w-full" style="display: none;">
                                <img id="jewelryOverlay" src="" class="absolute w-20 h-20 cursor-move"
                                    style="display: none;">
                            </div>
                        </div>

                        <!-- Camera Section -->
                        <div id="cameraSection" class="hidden">
                            <video id="camera" autoplay playsinline class="w-full h-[400px] bg-gray-100 mb-4"></video>
                            <button onclick="capturePhoto()"
                                class="bg-dark-blue text-white px-6 py-2 rounded-md hover:bg-opacity-90">
                                Capture
                            </button>
                            <div id="capturePreview" class="relative w-full h-[400px] bg-gray-100 hidden">
                                <img id="capturedImage" class="max-h-full max-w-full">
                                <img id="jewelryOverlayCam" src="" class="absolute cursor-move"
                                    style="display: none;">
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- Modal -->
                {{-- <div id="imageModal"
                    class="hidden fixed inset-0 bg-black bg-opacity-75 z-50 flex items-center justify-center">
                    <div class="relative">
                        <img id="modalImage" src="" alt="Diamond Large View" class="max-h-[80vh] max-w-[90vw]">
                        <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-2xl">&times;</button>
                    </div>
                </div> --}}
            </div>

            <!-- Right side - Details -->
            <div class="w-full lg:w-1/3 space-y-3">
                <!-- Product Title and Price -->
                <div class="space-y-2">
                    <h1 class="text-3xl font-bold text-primary">The Trellis Three Stone Emerald Engagement Ring</h1>
                    <p class="text-xl font-semibold text-primary">Starting at CA $10,000</p>
                </div>

                <!-- Product Description Brief -->
                <p class="text-gray-600 italic">
                    A contemporary take on our beloved Three Stone setting, highlighting your center diamond with two matching side stones for undeniable brilliance.
                </p>

                <!-- Product Shape -->
                <div class="flex flex-col gap-2 py-2">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-800">Diamond Shape</h3>
                            <span class="text-primary font-medium">Round</span>
                        </div>
                        <div class="grid grid-cols-5 gap-3">
                            <div class="p-3 border-2 border-primary rounded-lg flex justify-center shape-option active">
                                <img src="{{ asset('Shape/round.svg') }}" alt="Round" class="w-7 h-7">
                            </div>
                            <div class="p-3 border-2 border-gray-200 rounded-lg flex justify-center shape-option">
                                <img src="{{ asset('Shape/oval.svg') }}" alt="Oval" class="w-7 h-7">
                            </div>
                            <div class="p-3 border-2 border-gray-200 rounded-lg flex justify-center shape-option">
                                <img src="{{ asset('Shape/emerald.svg') }}" alt="Emerald" class="w-7 h-7">
                            </div>
                            <div class="p-3 border-2 border-gray-200 rounded-lg flex justify-center shape-option">
                                <img src="{{ asset('Shape/pear.svg') }}" alt="Pear" class="w-7 h-7">
                            </div>
                            <div class="p-3 border-2 border-gray-200 rounded-lg flex justify-center shape-option">
                                <img src="{{ asset('Shape/cushion.svg') }}" alt="Cushion" class="w-7 h-7">
                            </div>
                            <div class="p-3 border-2 border-gray-200 rounded-lg flex justify-center shape-option">
                                <img src="{{ asset('Shape/marquise.svg') }}" alt="Cushion" class="w-7 h-7">
                            </div>
                            <div class="p-3 border-2 border-gray-200 rounded-lg flex justify-center shape-option">
                                <img src="{{ asset('Shape/asscher.svg') }}" alt="Cushion" class="w-7 h-7">
                            </div>
                            <div class="p-3 border-2 border-gray-200 rounded-lg flex justify-center shape-option">
                                <img src="{{ asset('Shape/princess.svg') }}" alt="Cushion" class="w-7 h-7">
                            </div>
                            <div class="p-3 border-2 border-gray-200 rounded-lg flex justify-center shape-option">
                                <img src="{{ asset('Shape/radiant.svg') }}" alt="Cushion" class="w-7 h-7">
                            </div>
                            <div class="p-3 border-2 border-gray-200 rounded-lg flex justify-center shape-option">
                                <img src="{{ asset('Shape/heart.svg') }}" alt="Cushion" class="w-7 h-7">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Metal Options -->
                <div class="space-y-3 my-2">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-800">Metal</h3>
                        <span class="text-primary font-medium">18K White Gold</span>
                    </div>
                    <div class="flex gap-4">
                        <div class="relative metal-option active">
                            <div class="w-10 h-10 rounded-full bg-gray-200 border-2 border-primary flex items-center justify-center cursor-pointer">
                                <img src="{{ asset('images/color/silver.png') }}" alt="White Gold" class="w-8 h-8 rounded-full">
                            </div>
                        </div>
                        <div class="relative metal-option">
                            <div class="w-10 h-10 rounded-full bg-gray-200 border-2 border-gray-200 flex items-center justify-center cursor-pointer">
                                <img src="{{ asset('images/color/gold.png') }}" alt="Yellow Gold" class="w-8 h-8 rounded-full">
                            </div>
                        </div>
                        <div class="relative metal-option">
                            <div class="w-10 h-10 rounded-full bg-gray-200 border-2 border-gray-200 flex items-center justify-center cursor-pointer">
                                <img src="{{ asset('images/color/rose-gold.png') }}" alt="Rose Gold" class="w-8 h-8 rounded-full">
                            </div>
                        </div>
                        <div class="relative metal-option">
                            <div class="w-10 h-10 rounded-full bg-gray-200 border-2 border-gray-200 flex items-center justify-center cursor-pointer">
                                <img src="{{ asset('images/color/platinum.png') }}" alt="Platinum" class="w-8 h-8 rounded-full">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Diamond Origin -->
                <div class="space-y-3 my-3">
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <h3 class="text-lg font-semibold text-gray-800">Diamond Origin</h3>
                            <button class="ml-2 text-gray-400 hover:text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center">
                            <h3 class="text-lg font-semibold text-gray-800 ml-5" id="selectedOrigin">Natural</h3>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <button id="naturalBtn" onclick="selectDiamondOrigin('Natural')" class="flex-1 py-3 px-4 rounded-full bg-primary text-white font-medium focus:outline-none hover:bg-primary hover:text-white focus:ring-offset-2 transition-colors">
                            Natural
                        </button>
                        <button id="labGrownBtn" onclick="selectDiamondOrigin('Lab Grown')" class="flex-1 py-3 px-4 rounded-full bg-white text-gray-700 font-medium border border-gray-300 focus:outline-none hover:bg-primary hover:text-white focus:ring-offset-2 transition-colors">
                            Lab Grown
                        </button>
                    </div>
                </div>

                <!-- Diamond Origin Script -->
                <script>
                    function selectDiamondOrigin(origin) {
                        document.getElementById('selectedOrigin').textContent = origin;

                        const naturalBtn = document.getElementById('naturalBtn');
                        const labGrownBtn = document.getElementById('labGrownBtn');

                        if (origin === 'Natural') {
                            naturalBtn.classList.add('bg-primary', 'text-white');
                            naturalBtn.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-300');

                            labGrownBtn.classList.remove('bg-primary', 'text-white');
                            labGrownBtn.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-300');
                        } else {
                            labGrownBtn.classList.add('bg-primary', 'text-white');
                            labGrownBtn.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-300');

                            naturalBtn.classList.remove('bg-primary', 'text-white');
                            naturalBtn.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-300');
                        }
                    }

                    window.addEventListener('load', () => {
                        selectDiamondOrigin('Natural');
                    });
                </script>
                
                <!-- Select and Consult button -->
                <div class="space-y-3">
                    <button class="w-full py-3 px-6 bg-primary text-white font-semibold rounded-md hover:bg-indigo-800 focus:outline-none transition-colors">
                        Select Your Diamond
                    </button>
                    <button class="w-full py-3 px-6 bg-white text-primary font-semibold rounded-md border border-primary hover:bg-indigo-50 transition-colors">
                        Consult with Diamond Expert
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
                        <a href="/shipping-policy" class="text-sm 3xl:text-base text-primary underline">Shipping
                            Policy</a>
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
                            <a href="/privacy-policy" class="text-base 3xl:text-lg text-primary underline">Privacy
                                Policy</a>
                        </p>
                    </div>
                </div>
                <!-- Product Description -->
                <div class="flex flex-col gap-2 py-3">
                    <p class="text-lg 3xl:text-xl text-primary font-semibold">The Trellis Three Stone Details</p>
                    <p class="text-base 3xl:text-lg text-primary font-semibold">The Trellis Three Stone three-stone ring in
                        platinum
                        with a emerald diamond</p>
                    <p class="text-sm 3xl:text-base text-primary leading-6">
                        A contemporary take on our beloved Three Stone setting, the Trellis Three Stone engagement ring
                        highlights your center VRAI created diamond with two matching 0.25ct side stones for undeniable
                        brilliance. With curved, interwoven prongs and our signature low-set sling, our elegantly crafted
                        Trellis setting beautifully and securely connects this dazzling diamond trio. Choose between a plain
                        or pave band for a sophisticated and symbolic design that truly shines.
                    </p>
                    <p class="text-sm 3xl:text-base text-primary font-medium">Band width : <span
                            class="font-normal">2.2mm</span></p>
                    <p class="text-sm 3xl:text-base text-primary font-medium">Band depth : <span
                            class="font-normal">1.6mm</span></p>
                    <p class="text-sm 3xl:text-base text-primary font-medium">Setting height : <span
                            class="font-normal">6.5mm</span>
                    </p>
                    <p class="text-sm 3xl:text-base text-primary font-medium">Gold/Platinum metal weight : <span
                            class="font-normal">6.17g (size 6)</span></p>
                    <p class="text-sm 3xl:text-base text-primary font-medium">Pavé carat weight : <span
                            class="font-normal">0.17ctw</span></p>
                    <p class="text-sm 3xl:text-base text-primary font-medium">Shown with : <span
                            class="font-normal">1.5ct</span></p>
                    <a href="#" class="text-sm 3xl:text-base text-primary underline">For precise weight please see
                        tolerance
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
        <div class="bg-gray-50 py-12">
            <div class="container mx-auto px-4 md:px-8 lg:px-12 xl:px-16 2xl:px-24">
                <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">You May Also Like</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Product 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://roayadiamond.com/images/1.jpg" alt="The Twist Band" class="w-full h-64 object-cover">
                            <div class="absolute top-2 right-2">
                                <button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">The Twist Band</h3>
                            <p class="text-gray-600 text-sm mb-2">A modern twist on a classic design</p>
                            <p class="text-primary font-semibold">From $800</p>
                        </div>
                    </div>
                    
                    <!-- Product 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://roayadiamond.com/images/2.jpg" alt="The Petal Crown Band" class="w-full h-64 object-cover">
                            <div class="absolute top-2 right-2">
                                <button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">The Petal Crown Band</h3>
                            <p class="text-gray-600 text-sm mb-2">Delicate floral-inspired design</p>
                            <p class="text-primary font-semibold">From $800</p>
                        </div>
                    </div>
                    
                    <!-- Product 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://roayadiamond.com/images/3.jpg" alt="The Round Solitaire" class="w-full h-64 object-cover">
                            <div class="absolute top-2 right-2">
                                <button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">The Round Solitaire</h3>
                            <p class="text-gray-600 text-sm mb-2">Timeless elegance</p>
                            <p class="text-primary font-semibold">From $600</p>
                        </div>
                    </div>
                    
                    <!-- Product 4 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <div class="relative">
                            <img src="https://roayadiamond.com/images/4.jpg" alt="The Eternity Band" class="w-full h-64 object-cover">
                            <div class="absolute top-2 right-2">
                                <button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">The Eternity Band</h3>
                            <p class="text-gray-600 text-sm mb-2">Continuous circle of diamonds</p>
                            <p class="text-primary font-semibold">From $900</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Customer Reviews Section -->
        <div class="bg-white py-12">
            <div class="w-full  mx-auto px-4 md:px-8 lg:px-12 xl:px-16 2xl:px-24">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Customer Reviews</h2>
                    <div class="flex items-center justify-center mb-2">
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-900 mr-2">4.8</span>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                        </div>
                        <span class="ml-2 text-sm text-gray-500">(128 reviews)</span>
                    </div>
                    <div class="flex justify-center space-x-4">
                        <button class="bg-primary text-white px-6 py-2 rounded-full hover:bg-opacity-90 transition-colors">Write a Review</button>
                        <button class="border border-primary text-primary px-6 py-2 rounded-full hover:bg-primary hover:text-white transition-colors">See All Reviews</button>
                    </div>
                </div>

                <!-- Rating Distribution -->
                <div class="max-w-2xl mx-auto mb-8">
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <span class="text-sm font-medium text-gray-500 w-14">5 stars</span>
                            <div class="flex-1 h-4 mx-2 bg-gray-200 rounded">
                                <div class="h-4 bg-yellow-400 rounded" style="width: 75%"></div>
                            </div>
                            <span class="text-sm font-medium text-gray-500 w-14">75%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm font-medium text-gray-500 w-14">4 stars</span>
                            <div class="flex-1 h-4 mx-2 bg-gray-200 rounded">
                                <div class="h-4 bg-yellow-400 rounded" style="width: 17%"></div>
                            </div>
                            <span class="text-sm font-medium text-gray-500 w-14">17%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm font-medium text-gray-500 w-14">3 stars</span>
                            <div class="flex-1 h-4 mx-2 bg-gray-200 rounded">
                                <div class="h-4 bg-yellow-400 rounded" style="width: 5%"></div>
                            </div>
                            <span class="text-sm font-medium text-gray-500 w-14">5%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm font-medium text-gray-500 w-14">2 stars</span>
                            <div class="flex-1 h-4 mx-2 bg-gray-200 rounded">
                                <div class="h-4 bg-yellow-400 rounded" style="width: 2%"></div>
                            </div>
                            <span class="text-sm font-medium text-gray-500 w-14">2%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm font-medium text-gray-500 w-14">1 star</span>
                            <div class="flex-1 h-4 mx-2 bg-gray-200 rounded">
                                <div class="h-4 bg-yellow-400 rounded" style="width: 1%"></div>
                            </div>
                            <span class="text-sm font-medium text-gray-500 w-14">1%</span>
                        </div>
                    </div>
                </div>

                <!-- Review Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Review Card 1 -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <div class="flex items-start mb-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-semibold text-xl">JD</div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold">John Doe</h4>
                                <div class="flex items-center">
                                    <div class="flex items-center text-yellow-400">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    </div>
                                    <span class="ml-2 text-sm text-gray-500">2 months ago</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">"Absolutely stunning ring! The craftsmanship is exceptional, and the diamonds are incredibly brilliant. The customer service was outstanding throughout the entire process. Highly recommend!"</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <span class="text-sm text-primary font-medium">Verified Purchase</span>
                                <button class="text-sm text-gray-500 hover:text-gray-700">Report</button>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="flex items-center space-x-1 text-gray-500 hover:text-gray-700">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                    </svg>
                                    <span>Helpful (24)</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Review Card 2 -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <div class="flex items-start mb-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-semibold text-xl">SM</div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold">Sarah Mitchell</h4>
                                <div class="flex items-center">
                                    <div class="flex items-center text-yellow-400">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    </div>
                                    <span class="ml-2 text-sm text-gray-500">1 week ago</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-700 mb-4">"The virtual try-on feature helped me make the perfect choice. The ring is exactly as pictured, and the quality is outstanding. The packaging was also very elegant."</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <span class="text-sm text-primary font-medium">Verified Purchase</span>
                                <button class="text-sm text-gray-500 hover:text-gray-700">Report</button>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="flex items-center space-x-1 text-gray-500 hover:text-gray-700">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                    </svg>
                                    <span>Helpful (18)</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="text-center mt-8">
                    <button class="bg-white text-primary px-6 py-2 border border-primary rounded-full hover:bg-primary hover:text-white transition-colors">Load More Reviews</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Try On Script -->
    <script>
        // Keep all existing scripts

        // Add new try-on functionality
        let isDragging = false;
        let currentX;
        let currentY;
        let initialX;
        let initialY;
        let xOffset = 0;
        let yOffset = 0;

        function openTryOn() {
            document.getElementById('tryOnModal').classList.remove('hidden');
        }

        function showUploadOption() {
            document.getElementById('uploadSection').classList.remove('hidden');
            document.getElementById('cameraSection').classList.add('hidden');
            document.getElementById('tryOnOptions').classList.add('hidden');
        }

        function showCameraOption() {
            document.getElementById('cameraSection').classList.remove('hidden');
            document.getElementById('uploadSection').classList.add('hidden');
            document.getElementById('tryOnOptions').classList.add('hidden');

            navigator.mediaDevices.getUserMedia({
                    video: true
                })
                .then(stream => {
                    document.getElementById('camera').srcObject = stream;
                })
                .catch(err => {
                    console.error('Error accessing camera:', err);
                    alert('Unable to access camera. Please ensure you have granted camera permissions.');
                });
        }

        function handleImageUpload(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const uploadedImage = document.getElementById('uploadedImage');
                    uploadedImage.src = e.target.result;
                    uploadedImage.style.display = 'block';

                    const jewelryOverlay = document.getElementById('jewelryOverlay');
                    jewelryOverlay.src = document.getElementById('mainImage').src;
                    jewelryOverlay.style.display = 'block';

                    // Reset position
                    xOffset = 0;
                    yOffset = 0;
                    setTranslate(0, 0, jewelryOverlay);

                    // Add drag events
                    jewelryOverlay.addEventListener('mousedown', dragStart);
                    jewelryOverlay.addEventListener('touchstart', dragStart);
                };
                reader.readAsDataURL(file);
            }
        }

        function capturePhoto() {
            const video = document.getElementById('camera');
            const canvas = document.createElement('canvas');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext('2d').drawImage(video, 0, 0);

            document.getElementById('capturedImage').src = canvas.toDataURL('image/png');
            document.getElementById('capturePreview').classList.remove('hidden');
            document.getElementById('camera').style.display = 'none';

            const jewelryOverlay = document.getElementById('jewelryOverlayCam');
            jewelryOverlay.src = document.getElementById('mainImage').src;
            jewelryOverlay.style.display = 'block';

            // Reset position
            xOffset = 0;
            yOffset = 0;
            setTranslate(0, 0, jewelryOverlay);

            // Add drag events
            jewelryOverlay.addEventListener('mousedown', dragStart);
            jewelryOverlay.addEventListener('touchstart', dragStart);
        }

        function dragStart(e) {
            if (e.type === "touchstart") {
                initialX = e.touches[0].clientX - xOffset;
                initialY = e.touches[0].clientY - yOffset;
            } else {
                initialX = e.clientX - xOffset;
                initialY = e.clientY - yOffset;
            }

            if (e.target === document.getElementById('jewelryOverlay') ||
                e.target === document.getElementById('jewelryOverlayCam')) {
                isDragging = true;
            }

            document.addEventListener('mousemove', drag);
            document.addEventListener('touchmove', drag);
            document.addEventListener('mouseup', dragEnd);
            document.addEventListener('touchend', dragEnd);
        }

        function drag(e) {
            if (isDragging) {
                e.preventDefault();

                if (e.type === "touchmove") {
                    currentX = e.touches[0].clientX - initialX;
                    currentY = e.touches[0].clientY - initialY;
                } else {
                    currentX = e.clientX - initialX;
                    currentY = e.clientY - initialY;
                }

                xOffset = currentX;
                yOffset = currentY;

                setTranslate(currentX, currentY, document.getElementById('jewelryOverlay'));
                setTranslate(currentX, currentY, document.getElementById('jewelryOverlayCam'));
            }
        }

        function setTranslate(xPos, yPos, el) {
            if (el && el.style) {
                el.style.transform = `translate3d(${xPos}px, ${yPos}px, 0)`;
            }
        }

        function dragEnd() {
            initialX = currentX;
            initialY = currentY;
            isDragging = false;

            document.removeEventListener('mousemove', drag);
            document.removeEventListener('touchmove', drag);
            document.removeEventListener('mouseup', dragEnd);
            document.removeEventListener('touchend', dragEnd);
        }

        function closeTryOn() {
            document.getElementById('tryOnModal').classList.add('hidden');
            document.getElementById('uploadSection').classList.add('hidden');
            document.getElementById('cameraSection').classList.add('hidden');
            document.getElementById('tryOnOptions').classList.remove('hidden');

            // Reset camera if active
            const camera = document.getElementById('camera');
            if (camera.srcObject) {
                camera.srcObject.getTracks().forEach(track => track.stop());
            }

            // Reset preview sections
            document.getElementById('uploadedImage').style.display = 'none';
            document.getElementById('jewelryOverlay').style.display = 'none';
            document.getElementById('capturePreview').classList.add('hidden');
            document.getElementById('camera').style.display = 'block';
            document.getElementById('jewelryOverlayCam').style.display = 'none';
        }
    </script>
    <!-- End Try On Script -->

    <!-- Start Background Remove Script -->

<!-- JavaScript -->
{{-- <script>
    let selectedJewelry = '';

    function selectJewelry(imageSrc) {
        selectedJewelry = imageSrc;
        console.log('Selected Jewelry:', selectedJewelry); // Debugging line
    }

    function handleImageUpload(event) {
        const file = event.target.files[0];
        if (file && selectedJewelry) {
            const reader = new FileReader();
            reader.onload = function(e) {
                // Display the uploaded hand image
                const uploadedImage = document.getElementById('uploadedImage');
                uploadedImage.src = e.target.result;
                uploadedImage.style.display = 'block';

                // Display the selected jewelry image as an overlay
                const jewelryOverlay = document.getElementById('jewelryOverlay');
                jewelryOverlay.src = selectedJewelry; // Use the selected jewelry image
                jewelryOverlay.style.display = 'block';

                // Reset position of the overlay
                xOffset = 0;
                yOffset = 0;
                setTranslate(0, 0, jewelryOverlay);

                // Add drag events to the overlay
                jewelryOverlay.addEventListener('mousedown', dragStart);
                jewelryOverlay.addEventListener('touchstart', dragStart);
            };
            reader.readAsDataURL(file);
        } else {
            alert('Please select a jewelry image first.');
        }
    }

    // Drag functionality
    let isDragging = false;
    let currentX, currentY, initialX, initialY, xOffset = 0, yOffset = 0;

    function dragStart(e) {
        if (e.type === "touchstart") {
            initialX = e.touches[0].clientX - xOffset;
            initialY = e.touches[0].clientY - yOffset;
        } else {
            initialX = e.clientX - xOffset;
            initialY = e.clientY - yOffset;
        }

        if (e.target === document.getElementById('jewelryOverlay')) {
            isDragging = true;
        }

        document.addEventListener('mousemove', drag);
        document.addEventListener('touchmove', drag);
        document.addEventListener('mouseup', dragEnd);
        document.addEventListener('touchend', dragEnd);
    }

    function drag(e) {
        if (isDragging) {
            e.preventDefault();

            if (e.type === "touchmove") {
                currentX = e.touches[0].clientX - initialX;
                currentY = e.touches[0].clientY - initialY;
            } else {
                currentX = e.clientX - initialX;
                currentY = e.clientY - initialY;
            }

            xOffset = currentX;
            yOffset = currentY;

            setTranslate(currentX, currentY, document.getElementById('jewelryOverlay'));
        }
    }

    function setTranslate(xPos, yPos, el) {
        if (el && el.style) {
            el.style.transform = `translate3d(${xPos}px, ${yPos}px, 0)`;
        }
    }

    function dragEnd() {
        initialX = currentX;
        initialY = currentY;
        isDragging = false;

        document.removeEventListener('mousemove', drag);
        document.removeEventListener('touchmove', drag);
        document.removeEventListener('mouseup', dragEnd);
        document.removeEventListener('touchend', dragEnd);
    }
</script> --}}
    <!-- End Background Remove Script -->
@endsection
