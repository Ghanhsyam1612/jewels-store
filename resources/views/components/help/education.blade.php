@extends('layouts.master')

@section('content')
    <div class="container mx-auto px-2 lg:px-6 py-10">
        {{-- Header Section --}}
        <h1 class="text-3xl text-center font-montserrat text-primary font-semibold mb-8">ROAYA CREATED DIAMONDS</h1>

        {{-- Features Section --}}
        <div class="flex flex-col lg:flex-row justify-center items-center gap-8 mb-12">
            <div class="flex justify-center items-center">
                <div class="flex flex-col lg:flex-row justify-center items-center mr-2 text-center gap-1 font-medium text-sm text-primary">
                    <img src="{{ asset('images/Impeccable origin.png') }}" alt="Impeccable Origin" class="w-6 h-6">
                    <span>Impeccable origin</span>
                </div>
                <div class="flex flex-col lg:flex-row justify-center items-center mr-2 text-center gap-1 font-medium text-sm text-primary">
                    <img src="{{ asset('images/Master Cutter.png') }}" alt="Master cutters" class="w-6 h-6">
                    <span>Master cutters</span>
                </div>
                <div class="flex flex-col lg:flex-row justify-center items-center mr-2 text-center gap-1 font-medium text-sm text-primary">
                    <img src="{{ asset('images/Value Guarantee.png') }}" alt="100% value guarantee" class="w-6 h-6">
                    <span>100% value guarantee</span>
                </div>
            </div>
            <a href="#" id="openDrawer"
                class="text-primary text-xs lg:text-sm font-medium underline-offset-4 underline decoration-2 decoration-primary">Learn why they
                are unmatched</a>
        </div>

        {{-- Start Mobile Filter Button --}}
        <div class="flex justify-center items-center lg:hidden px-4 md:px-8 lg:px-12 2xl:px-16 py-4">
            <button class="bg-white border border-primary font-montserrat text-primary hover:bg-primary hover:text-white w-full md:w-60 py-2" id="filterButton" onclick="openFilterDrawer()">Filter</button>
        </div>
        {{-- End Mobile Filter Button --}}

        {{-- Start Desktop Filter Section --}}
        <div class="hidden lg:flex flex-row gap-10">
            {{-- Shape --}}
            <div class="flex flex-col gap-2">
                <span class="font-medium text-sm" id="diamondShape">Shape : Round</span>
                <div class="grid grid-cols-10 gap-2">
                    @foreach (['round', 'oval', 'cushion', 'pear', 'princess', 'emerald', 'heart', 'radiant', 'triangular', 'asscher'] as $shape)
                        <img src="{{ asset('Shape/' . $shape . '.svg') }}" alt="{{ ucfirst($shape) }}"
                            class="w-6 cursor-pointer diamond-shape {{ $shape === 'round' }}"
                            data-shape="{{ ucfirst($shape) }}" onclick="selectDiamondShape('{{ ucfirst($shape) }}', this)">
                    @endforeach
                </div>
            </div>
            <script>
                function selectDiamondShape(shape, element) {
                    // Update shape text
                    document.getElementById('diamondShape').innerText = 'Shape : ' + shape;

                    // Remove active border from all shapes
                    document.querySelectorAll('.diamond-shape').forEach(img => {
                        img.classList.remove('border-2', 'border-primary');
                    });

                    // Add active border to selected shape
                    element.classList.add('border-2', 'border-primary');

                    // Filter table rows
                    const rows = document.querySelectorAll('tbody tr');
                    rows.forEach(row => {
                        const shapeCell = row.querySelector('td:first-child');
                        if (shapeCell.textContent.trim() === shape) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                }

                // Remove the previous hover functions since we're using click instead
                function updateDiamondShape(shape) {
                    document.getElementById('diamondShape').innerText = 'Shape: ' + shape;
                }

                function resetDiamondShape() {
                    // This function is no longer needed but kept for compatibility
                }
            </script>

            {{-- Filter --}}
            <div class="w-1/3 grid grid-cols-6 gap-4 mb-4">
                <div class="flex flex-col gap-3">
                    <label for="carat" class="text-sm text-gray-500">Carat</label>
                    <div class="flex flex-row gap-3 cursor-pointer" onclick="openFilterDrawer('carat')">
                        <label for="carat" class="text-sm font-medium">All</label>
                        <img src="{{ asset('Shape/down-arrow.svg') }}" alt="carat" class="w-4 h-4">
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label for="price" class="text-sm text-gray-500">Price</label>
                    <div class="flex flex-row gap-3 cursor-pointer" onclick="openFilterDrawer('price')">
                        <label for="price" class="text-sm font-medium">All</label>
                        <img src="{{ asset('Shape/down-arrow.svg') }}" alt="price" class="w-4 h-4">
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label for="cut" class="text-sm text-gray-500">Cut</label>
                    <div class="flex flex-row gap-3 cursor-pointer" onclick="openFilterDrawer('cut')">
                        <label for="cut" class="text-sm font-medium">All</label>
                        <img src="{{ asset('Shape/down-arrow.svg') }}" alt="cut" class="w-4 h-4">
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label for="clarity" class="text-sm text-gray-500">Clarity</label>
                    <div class="flex flex-row gap-3 cursor-pointer" onclick="openFilterDrawer('clarity')">
                        <label for="clarity" class="text-sm font-medium">All</label>
                        <img src="{{ asset('Shape/down-arrow.svg') }}" alt="clarity" class="w-4 h-4">
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <label for="color" class="text-sm text-gray-500">Color</label>
                    <div class="flex flex-row gap-3 cursor-pointer" onclick="openFilterDrawer('color')">
                        <label for="color" class="text-sm font-medium">All</label>
                        <img src="{{ asset('Shape/down-arrow.svg') }}" alt="color" class="w-4 h-4">
                    </div>
                </div>
            </div>
        </div>
        {{-- End Desktop Filter Section --}}

        {{-- Start Diamond Listing Table --}}
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-primary text-gold">
                        <th class="text-left text-sm py-3 px-4">SHAPE</th>
                        <th class="text-left text-sm py-3 px-4">CARAT</th>
                        <th class="text-left text-sm py-3 px-4">COLOR</th>
                        <th class="text-left text-sm py-3 px-4">CUT</th>
                        <th class="text-left text-sm py-3 px-4">CLARITY</th>
                        <th class="text-right text-sm py-3 px-4">PRICE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ([['Oval', '2.04', 'VVS2', 'CA$5,936'], ['Round', '1.85', 'VS1', 'CA$4,707'], ['Cushion', '1.05', 'VVS2', 'CA$2,343'], ['Pear', '0.74', 'VVS2', 'CA$1,619'], ['Princess', '3.29', 'VS2', 'CA$10,047'], ['Emerald', '4.33', 'VS1', 'CA$15,478']] as [$shape, $carat, $clarity, $price])
                        <tr class="border-b hover:bg-gray-50" data-shape="{{ $shape }}">
                            <td class="py-4 px-4">
                                <div class="flex items-center gap-2">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2L2 12l10 10 10-10L12 2z" />
                                    </svg>
                                    {{ $shape }}
                                </div>
                            </td>
                            <td class="py-4 px-4">{{ $carat }}</td>
                            <td class="py-4 px-4">D - Colorless</td>
                            <td class="py-4 px-4">Excellent</td>
                            <td class="py-4 px-4">{{ $clarity }}</td>
                            <td class="py-4 px-4 text-right">{{ $price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- End Diamond Listing Table --}}
    </div>

    {{-- Start Learn Drawer --}}
    <div id="drawer"
        class="fixed top-0 right-0 h-screen w-full md:w-3/5 lg:w-1/2 xl:w-2/5  bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-50">
        <div class="flex flex-col p-4">
            <div class="flex justify-between bg-white">
                <p class="text-primary text-base lg:text-lg font-montserrat font-semibold">Why Roaya created diamonds are
                    unmatched</p>
                <button id="closeDrawer" class="text-gray-500 hover:text-gray-800">
                    <img src="{{ asset('Shape/close.svg') }}" alt="Close" class="w-7 h-7">
                </button>
            </div>
            <div>
                <p class="text-primary text-xs lg:text-sm font-montserrat">Each Roaya created diamond is unique — its
                    provenance and craftsmanship signify a choice that is true to the future.</p>
            </div>
        </div>

        <div class="px-4">
            <div class="tab flex justify-between text-primary border-b border-primary py-2">
                <button class="tab-button active font-semibold text-sm lg:text-base" onclick="showTab('tab1')">Impeccable
                    Origin</button>
                <button class="tab-button text-sm lg:text-base" onclick="showTab('tab2')">Master Cutters</button>
                <button class="tab-button text-sm lg:text-base" onclick="showTab('tab3')">100% Guarantee</button>
            </div>
            <div id="tab1" class="tab-content py-2">
                <p class="text-primary text-sm lg:text-lg font-montserrat font-semibold">Impeccable Origin of Diamonds</p>
                <p class="text-primary text-sm lg:text-base leading-tight font-montserrat">
                    Our diamonds are ethically sourced, ensuring they are conflict-free and meet the highest standards of
                    environmental and social responsibility. Certified under the Kimberley Process, each diamond boasts a
                    traceable supply chain and exceptional quality, reflecting both brilliance and integrity.
                </p>
                <div class="flex flex-col gap-4 py-4">
                    <div class="flex flex-col items-start">
                        <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">1. Natural Formation</p>
                        <p class="text-primary text-sm lg:text-base font-montserrat">
                            Our diamonds are formed under the earths surface, through a process that takes millions of
                            years. This unique formation ensures that each diamond is a true representation of its natural
                            origin.
                        </p>
                    </div>
                    <div class="flex flex-col items-start">
                        <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">2. Kimberley Process</p>
                        <p class="text-primary text-sm lg:text-base font-montserrat">
                            Our diamonds are certified under the Kimberley Process, ensuring they are conflict-free and meet
                            the highest standards of environmental and social responsibility.
                        </p>
                    </div>
                    <div class="flex flex-col items-start">
                        <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">3. Traceable Supply
                            Chain</p>
                        <p class="text-primary text-sm lg:text-base font-montserrat">
                            Each diamond has a unique traceable supply chain, from its origin to its final destination. This
                            ensures that each diamond is a true representation of its natural origin.
                        </p>
                    </div>
                </div>
            </div>
            <div id="tab2" class="tab-content hidden py-2">
                <p class="text-primary text-sm lg:text-lg font-montserrat font-semibold">Master Cutters: The Artisans
                    Behind Perfect Diamonds</p>
                <p class="text-primary text-sm lg:text-base leading-tight font-montserrat">
                    Behind every radiant diamond lies the skill and expertise of master cutters—artisans who dedicate their
                    craft to unlocking the full potential of a diamonds brilliance. Their precision and attention to detail
                    transform rough stones into timeless treasures that captivate the world.
                </p>
                <div class="flex flex-col gap-4 py-4">
                    <div class="flex flex-col items-start">
                        <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">1. The Role of a Master
                            Cutter</p>
                        <p class="text-primary text-sm lg:text-base font-montserrat">
                            A master cutter is a highly skilled professional responsible for shaping and polishing diamonds
                            to enhance their beauty and value. By carefully analyzing the natural characteristics of each
                            rough diamond, they determine the optimal cut that maximizes brilliance, fire, and symmetry.
                        </p>
                    </div>
                    <div class="flex flex-col items-start">
                        <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">2. Kimberley Process</p>
                        <p class="text-primary text-sm lg:text-base font-montserrat">
                            Diamond cutting is both an art and a science. It involves meticulous calculations and expert
                            craftsmanship to create facets that interact with light in the most captivating way. The most
                            common diamond cuts include:
                        <ul class="list-disc list-inside text-primary text-sm lg:text-base font-montserrat">
                            <li>
                                <span class="font-semibold">Round Brilliant:</span>
                                <span class="font-normal">Known for its unmatched sparkle, with 58 perfectly aligned
                                    facets.</span>
                            </li>
                            <li>
                                <span class="font-semibold">Princess Cut:</span>
                                <span class="font-normal">A square shape that combines modern elegance with radiant light
                                    performance.</span>
                            </li>
                            <li>
                                <span class="font-semibold">Emerald Cut:</span>
                                <span class="font-normal">A sophisticated rectangular cut that highlights clarity and
                                    depth.</span>
                            </li>
                            <li>
                                <span class="font-semibold">Cushion Cut:</span>
                                <span class="font-normal">A timeless design that blends vintage charm with a soft,
                                    pillow-like shape.</span>
                            </li>
                        </ul>
                        <p class="text-primary text-sm lg:text-base font-montserrat">
                            Each cut requires precise angles and proportions, which only master cutters can achieve.
                        </p>
                        </p>
                    </div>
                    <div class="flex flex-col items-start">
                        <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">3. Traceable Supply
                            Chain</p>
                        <p class="text-primary text-sm lg:text-base font-montserrat">
                            Each diamond has a unique traceable supply chain, from its origin to its final destination. This
                            ensures that each diamond is a true representation of its natural origin.
                        </p>
                    </div>
                </div>
            </div>
            <div id="tab3" class="tab-content hidden py-2">
                <p class="text-primary text-sm lg:text-lg font-montserrat font-semibold">100% Value Guarantee for Diamonds
                </p>
                <p class="text-primary text-sm lg:text-base leading-tight font-montserrat">
                    When investing in a diamond, peace of mind and assurance of value are paramount. Our 100% Value
                    Guarantee ensures that your purchase is not only a symbol of timeless elegance but also a secure and
                    worthwhile investment.
                </p>
                <div class="flex flex-col gap-4 py-4">
                    <div class="flex flex-col items-start">
                        <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">1. Unmatched Quality
                            Assurance</p>
                        <p class="text-primary text-sm lg:text-base font-montserrat">
                            We guarantee that every diamond meets the highest standards of quality, backed by certifications
                            from renowned gemological institutes such as GIA, AGS, or IGI. These certifications provide a
                            comprehensive assessment of the diamonds cut, color, clarity, and carat weight, ensuring its
                            value and authenticity.
                        </p>
                    </div>
                    <div class="flex flex-col items-start">
                        <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">2. Transparency and
                            Ethical Sourcing</p>
                        <p class="text-primary text-sm lg:text-base font-montserrat">
                            Our diamonds are ethically sourced and fully traceable, adhering to the highest standards of
                            environmental and social responsibility. With our 100% Value Guarantee, you can trust that your
                            diamond purchase is conflict-free and ethically mined.
                        </p>
                    </div>
                    <div class="flex flex-col items-start">
                        <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">3. Lifetime Trade-In and
                            Buyback Options</p>
                        <p class="text-primary text-sm lg:text-base font-montserrat">
                            We stand by the enduring value of our diamonds by offering lifetime trade-in and buyback
                            options. Should you choose to upgrade or exchange your diamond in the future, you will receive
                            full credit for your original purchase price toward your new selection.
                        </p>
                    </div>
                    <p class="text-primary text-sm lg:text-base font-montserrat">
                        With our 100% Value Guarantee, your diamond is more than just a purchase—its a promise of quality,
                        authenticity, and enduring worth.
                    </p>
                    <p class="text-primary text-sm lg:text-base font-montserrat">
                        Invest in a diamond with confidence, knowing you are backed by our unwavering commitment to
                        excellence and value.
                    </p>
                </div>
            </div>
        </div>
        <script>
            function showTab(tabId) {
                const tabs = document.querySelectorAll('.tab-content');
                tabs.forEach(tab => {
                    tab.classList.add('hidden');
                });
                document.getElementById(tabId).classList.remove('hidden');

                const buttons = document.querySelectorAll('.tab-button');
                buttons.forEach(button => {
                    button.classList.remove('active', 'font-semibold');
                });
                event.target.classList.add('active', 'font-semibold');
            }
        </script>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const drawer = document.getElementById("drawer");
            const openDrawer = document.getElementById("openDrawer");
            const closeDrawer = document.getElementById("closeDrawer");
            const overlay = document.getElementById("overlay");

            // Open the drawer
            openDrawer.addEventListener("click", (e) => {
                e.preventDefault();
                drawer.classList.remove("translate-x-full");
                drawer.classList.add("translate-x-0");
                drawer.classList.add("overflow-y-auto"); // Enable drawer scroll
                document.body.style.overflow = 'hidden'; // Disable background scroll
                overlay.classList.remove("hidden");
            });

            // Close the drawer
            closeDrawer.addEventListener("click", (e) => {
                e.preventDefault();
                drawer.classList.remove("translate-x-0");
                drawer.classList.add("translate-x-full");
                drawer.classList.remove("overflow-y-auto"); // Disable drawer scroll
                document.body.style.overflow = ''; // Re-enable background scroll
                overlay.classList.add("hidden");
            });

            // Close drawer when clicking overlay
            overlay.addEventListener("click", () => {
                drawer.classList.remove("translate-x-0");
                drawer.classList.add("translate-x-full");
                drawer.classList.remove("overflow-y-auto"); // Disable drawer scroll
                document.body.style.overflow = ''; // Re-enable background scroll
                overlay.classList.add("hidden");
            });
        });
    </script>

    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

    <script>
        const overlay = document.getElementById("overlay");

        // Open the drawer and show overlay
        openDrawer.addEventListener("click", (e) => {
            e.preventDefault();
            drawer.classList.remove("translate-x-full");
            drawer.classList.add("translate-x-0");
            overlay.classList.remove("hidden");
        });

        // Close the drawer and hide overlay
        closeDrawer.addEventListener("click", (e) => {
            e.preventDefault();
            drawer.classList.remove("translate-x-0");
            drawer.classList.add("translate-x-full");
            overlay.classList.add("hidden");
        });

        overlay.addEventListener("click", () => {
            drawer.classList.remove("translate-x-0");
            drawer.classList.add("translate-x-full");
            overlay.classList.add("hidden");
        });
    </script>
    {{-- End Learn Drawer --}}

    {{-- Start Diamond Filter Drawer --}}
    <div id="filterDrawer"
        class="overflow-y-auto fixed top-0 right-0 h-screen w-full md:w-3/5 lg:w-1/2 xl:w-2/5 bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-50">
        <div class="flex flex-col p-6">
            {{-- Header --}}
            <div class="flex justify-between items-center mb-5 lg:mb-8">
                <h2 class="text-lg lg:text-2xl font-medium">Filter</h2>
                <button id="closeFilterDrawer" class="text-gray-500 hover:text-gray-800">
                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            {{-- Whats most important section  --}}
            <div class="mb-8">
                <h3 class="text-sm lg:text-lg mb-4">Whats most important to you?</h3>
                <div class="flex gap-3">
                    <button class="px-4 py-2 text-xs lg:text-base border-2 border-gray-300 rounded hover:border-primary">Most brilliant</button>
                    <button class="px-4 py-2 text-xs lg:text-base border-2 border-gray-300 rounded hover:border-primary">Best color</button>
                    <button class="px-4 py-2 text-xs lg:text-base border-2 border-gray-300 rounded hover:border-primary">Best balance</button>
                </div>
            </div>

            {{-- Filter Options  --}}
            <div class="flex flex-col divide-y">
                {{-- Start Shape Filter --}}
                <div class="py-4 flex justify-between items-center cursor-pointer">
                    <span>Shape</span>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-500">Round Brilliant</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="hidden py-2 text-gray-600 transition-all duration-300 ease-in-out">
                    <div class="grid grid-cols-3 lg:grid-cols-4 gap-4 md:gap-1">
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-light-grey-1 px-4 lg:px-6 py-8">
                                <img src="{{ asset('images/diamonds/round.png') }}" class="w-12 h-12 lg:w-16 lg:h-16" alt="Round">
                            </div>
                            <span>Round</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-light-grey-1 px-4 lg:px-6 py-8">
                                <img src="{{ asset('images/diamonds/oval.png') }}" class="w-12 h-12 lg:w-16 lg:h-16" alt="Oval">
                            </div>
                            <span>Oval</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-light-grey-1 px-4 lg:px-6 py-8">
                                <img src="{{ asset('images/diamonds/cushion.png') }}" class="w-12 h-12 lg:w-16 lg:h-16" alt="Cushion">
                            </div>
                            <span>Cushion</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-light-grey-1 px-4 lg:px-6 py-8">
                                <img src="{{ asset('images/diamonds/pear.png') }}" class="w-12 h-12 lg:w-16 lg:h-16" alt="Pear">
                            </div>
                            <span>Pear</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-light-grey-1 px-4 lg:px-6 py-8">
                                <img src="{{ asset('images/diamonds/princess.png') }}" class="w-12 h-12 lg:w-16 lg:h-16" alt="Princess">
                            </div>
                            <span>Princess</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-light-grey-1 px-4 lg:px-6 py-8">
                                <img src="{{ asset('images/diamonds/emerald.png') }}" class="w-12 h-12 lg:w-16 lg:h-16" alt="Emerald">
                            </div>
                            <span>Emerald</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-light-grey-1 px-4 lg:px-6 py-8">
                                <img src="{{ asset('images/diamonds/heart.png') }}" class="w-12 h-12 lg:w-16 lg:h-16" alt="Heart">
                            </div>
                            <span>Heart</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-light-grey-1 px-4 lg:px-6 py-8">
                                <img src="{{ asset('images/diamonds/radiant.png') }}" class="w-12 h-12 lg:w-16 lg:h-16" alt="Radiant">
                            </div>
                            <span>Radiant</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-light-grey-1 px-4 lg:px-6 py-8">
                                <img src="{{ asset('images/diamonds/triangular.png') }}" class="w-12 h-12 lg:w-16 lg:h-16"
                                    alt="Triangular">
                            </div>
                            <span>Triangular</span>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-light-grey-1 px-4 lg:px-6 py-8">
                                <img src="{{ asset('images/diamonds/asscher.png') }}" class="w-12 h-12 lg:w-16 lg:h-16" alt="Asscher">
                            </div>
                            <span>Asscher</span>
                        </div>
                    </div>
                </div>
                <!-- End Shape Filter -->

                <!-- Start Carat Filter -->
                <div class="py-4 flex justify-between items-center cursor-pointer">
                    <span>Carat</span>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-500">1.3 - 5.0</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="hidden py-2 text-gray-600 transition-all duration-300">
                    <span class="text-sm">Carat refers to a diamond’s weight. One carat equals 0.2 grams.</span>
                    <div class="flex flex-col items-center">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <div>
                                    <input
                                        class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                        type="number" id="fromCaratInput" value="0.00" min="0.00" max="60.00"
                                        step="0.01" />
                                </div>
                                <div>
                                    <input
                                        class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                        type="number" id="toCaratInput" value="60.00" min="0.00" max="60.00"
                                        step="0.01" />
                                </div>
                            </div>
                            <div class="relative min-h-7 flex items-center">
                                <input id="fromCaratSlider" type="range" value="0" min="0" max="60"
                                    step="0.01" />
                                <input id="toCaratSlider" type="range" value="60" min="0" max="60"
                                    step="0.01" />
                            </div>
                            <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
                                <span>0ct</span>
                                <span>60ct</span>
                            </div>
                        </div>
                    </div>
                    <style>
                        input[type="range"]#fromCaratSlider::-webkit-slider-thumb,
                        input[type="range"]#toCaratSlider::-webkit-slider-thumb {
                            -webkit-appearance: none;
                            pointer-events: all;
                            width: 16px;
                            height: 16px;
                            background-color: #fff;
                            border-radius: 100%;
                            border: 2px solid #733D80;
                            cursor: pointer;
                            position: relative;
                            z-index: 5;
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

                        #toCaratSlider {
                            height: 0;
                            z-index: 4;
                        }
                    </style>
                    <script>
                        function updateCaratSliderColors() {
                            const fromValue = parseFloat(fromCaratSlider.value);
                            const toValue = parseFloat(toCaratSlider.value);
                            const range = toCaratSlider.max - toCaratSlider.min;

                            const percentFrom = ((fromValue - toCaratSlider.min) / range) * 100;
                            const percentTo = ((toValue - toCaratSlider.min) / range) * 100;

                            const gradient = `linear-gradient(to right,
                            #C6C6C6 0%,
                            #C6C6C6 ${percentFrom}%,
                            #733D80 ${percentFrom}%,
                            #733D80 ${percentTo}%,
                            #C6C6C6 ${percentTo}%,
                            #C6C6C6 100%)`;

                            fromCaratSlider.style.background = gradient;
                            toCaratSlider.style.background = gradient;
                        }

                        function syncCaratFromInput() {
                            let value = Math.min(parseFloat(fromCaratInput.value), parseFloat(toCaratInput.value));
                            fromCaratInput.value = value.toFixed(2);
                            fromCaratSlider.value = value;
                            updateCaratSliderColors();
                        }

                        function syncCaratToInput() {
                            let value = Math.max(parseFloat(toCaratInput.value), parseFloat(fromCaratInput.value));
                            toCaratInput.value = value.toFixed(2);
                            toCaratSlider.value = value;
                            updateCaratSliderColors();
                        }

                        function syncCaratFromSlider() {
                            fromCaratInput.value = parseFloat(fromCaratSlider.value).toFixed(2);
                            updateCaratSliderColors();
                        }

                        function syncCaratToSlider() {
                            toCaratInput.value = parseFloat(toCaratSlider.value).toFixed(2);
                            updateCaratSliderColors();
                        }

                        const fromCaratSlider = document.querySelector("#fromCaratSlider");
                        const toCaratSlider = document.querySelector("#toCaratSlider");
                        const fromCaratInput = document.querySelector("#fromCaratInput");
                        const toCaratInput = document.querySelector("#toCaratInput");

                        fromCaratInput.addEventListener("input", syncCaratFromInput);
                        toCaratInput.addEventListener("input", syncCaratToInput);
                        fromCaratSlider.addEventListener("input", syncCaratFromSlider);
                        toCaratSlider.addEventListener("input", syncCaratToSlider);

                        // Initialize slider colors
                        updateCaratSliderColors();
                    </script>
                </div>
                <!-- End Carat Filter -->

                <!-- Start Price Filter -->
                <div class="py-4 flex justify-between items-center cursor-pointer">
                    <span>Price</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14">
                        </path>
                    </svg>
                </div>
                <div class="hidden py-2 text-gray-600 transition-all duration-300">
                    <div class="flex items-center">
                        <div class="w-full">
                            <div class="w-full">
                                <div class="mb-3">
                                    <div class="flex justify-between">
                                        <div class="pr-2">
                                            <input type="number" id="fromPriceInput" name="minPrice"
                                                value="100" min="100" max="100000"
                                                class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                                        </div>
                                        <div class="pl-2">
                                            <input type="number" id="toPriceInput" name="maxPrice"
                                                value="100000" min="100" max="100000"
                                                class="px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary" />
                                        </div>
                                    </div>
                                </div>

                                <div class="relative mb-7">
                                    <input id="fromPriceSlider" type="range" value="100"
                                        min="100" max="100000"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                    <input id="toPriceSlider" type="range" value="100000"
                                        min="100" max="100000"
                                        class="absolute w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer" />
                                </div>

                                <div class="flex justify-between text-xs text-gray-500 font-montserrat font-medium">
                                    <span>$100</span>
                                    <span>$100,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        input[type="range"]#fromPriceSlider::-webkit-slider-thumb,
                        input[type="range"]#toPriceSlider::-webkit-slider-thumb {
                            -webkit-appearance: none;
                            pointer-events: all;
                            width: 16px;
                            height: 16px;
                            background-color: #fff;
                            border-radius: 100%;
                            border: 2px solid #733D80;
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
                        const fromPriceSlider = document.querySelector("#fromPriceSlider");
                        const toPriceSlider = document.querySelector("#toPriceSlider");
                        const fromPriceInput = document.querySelector("#fromPriceInput");
                        const toPriceInput = document.querySelector("#toPriceInput");

                        let updatePending = false;

                        function updateSliderColors() {
                            if (updatePending) return;

                            updatePending = true;
                            requestAnimationFrame(() => {
                                const min = parseInt(fromPriceSlider.min);
                                const max = parseInt(toPriceSlider.max);
                                const from = parseInt(fromPriceInput.value);
                                const to = parseInt(toPriceInput.value);

                                const percentFrom = ((from - min) / (max - min)) * 100;
                                const percentTo = ((to - min) / (max - min)) * 100;

                                const gradient = `linear-gradient(to right,
                                #C6C6C6 0%,
                                #C6C6C6 ${percentFrom}%,
                                #733D80 ${percentFrom}%,
                                #733D80 ${percentTo}%,
                                #C6C6C6 ${percentTo}%,
                                #C6C6C6 100%)`;

                                fromPriceSlider.style.background = gradient;
                                toPriceSlider.style.background = gradient;
                                updatePending = false;
                            });
                        }

                        function syncFromInput() {
                            let value = Math.min(parseInt(fromPriceInput.value), parseInt(toPriceInput.value));
                            fromPriceInput.value = value;
                            fromPriceSlider.value = value;
                            updateSliderColors();
                        }

                        function syncToInput() {
                            let value = Math.max(parseInt(toPriceInput.value), parseInt(fromPriceInput.value));
                            toPriceInput.value = value;
                            toPriceSlider.value = value;
                            updateSliderColors();
                        }

                        function syncFromSlider() {
                            fromPriceInput.value = fromPriceSlider.value;
                            updateSliderColors();
                        }

                        function syncToSlider() {
                            toPriceInput.value = toPriceSlider.value;
                            updateSliderColors();
                        }

                        function handleSliderChange() {
                            priceFilterForm.submit();
                        }

                        // Use passive event listeners for better performance
                        fromPriceInput.addEventListener("input", syncFromInput, {
                            passive: true
                        });
                        toPriceInput.addEventListener("input", syncToInput, {
                            passive: true
                        });

                        // Update color while dragging
                        fromPriceSlider.addEventListener("input", syncFromSlider, {
                            passive: true
                        });
                        toPriceSlider.addEventListener("input", syncToSlider, {
                            passive: true
                        });

                        // Submit form when slider is released
                        fromPriceSlider.addEventListener("change", handleSliderChange);
                        toPriceSlider.addEventListener("change", handleSliderChange);

                        // Initialize slider colors
                        updateSliderColors();
                    </script>
                </div>
                <!-- End Price Filter -->

                <!-- Start Cut Filter -->
                <div class="py-4 flex justify-between items-center cursor-pointer">
                    <span>Cut</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14">
                        </path>
                    </svg>
                </div>
                <div class="hidden py-2 text-gray-600 transition-all duration-300">
                    <span class="text-sm">Cut refers to how well a diamond’s facets are cut to reflect light. We always cut for maximum
                        brilliance.</span>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-2 lg:px-4 py-5 gap-9">
                            <img src="{{ asset('images/style-shape/ideal-heart-diamond-shape.png') }}" class="w-20 lg:w-32"
                                alt="Round">
                            <span>Ideal + Heart</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-2 lg:px-4 py-5 gap-9">
                            <img src="{{ asset('images/style-shape/ideal-diamond-shape.png') }}" class="w-20 lg:w-32"
                                alt="Oval">
                            <span>Ideal</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-2 lg:px-4 py-5 gap-9">
                            <img src="{{ asset('images/style-shape/excellent-diamond-shape.png') }}" class="w-20 lg:w-32"
                                alt="Cushion">
                            <span>Excellent</span>
                        </div>
                    </div>
                </div>
                <!-- End Cut Filter -->

                <!-- Start Clarity Filter -->
                <div class="py-4 flex justify-between items-center cursor-pointer">
                    <span>Clarity</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14">
                        </path>
                    </svg>
                </div>
                <div class="hidden py-2 text-gray-600 transition-all duration-300">
                    <span class="text-sm">Clarity grades the internal inclusions and surface blemishes on a diamond.</span>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-4 py-5">
                            <img src="{{ asset('images/style-shape/clarity-diamond-shape.png') }}" class="w-32"
                                alt="Round">
                            <span class="border-b border-gray-300 w-full pt-5 pb-2 text-black text-center">VVS1</span>
                            <span class="uppercase text-xs lg:text-sm text-center h-14">Very Very Slightly (Not Eye Visible)</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-between items-center px-4 py-5">
                            <img src="{{ asset('images/style-shape/clarity-diamond-shape.png') }}" class="w-32"
                                alt="Oval">
                            <span class="border-b border-gray-300 w-full pt-5 pb-2 text-black text-center">VVS2</span>
                            <span class="uppercase text-xs lg:text-sm text-center h-14">Very Very Slightly (Not Eye Visible)</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-4 py-5">
                            <img src="{{ asset('images/style-shape/clarity-diamond-shape.png') }}" class="w-32"
                                alt="Cushion">
                            <span class="border-b border-gray-300 w-full pt-5 pb-2 text-black text-center">VS1</span>
                            <span class="uppercase text-xs lg:text-sm text-center h-14">Very Slightly (Not Eye Visible)</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-4 py-5">
                            <img src="{{ asset('images/style-shape/clarity-diamond-shape.png') }}" class="w-32"
                                alt="Round">
                            <span class="border-b border-gray-300 w-full pt-5 pb-2 text-black text-center">VS2</span>
                            <span class="uppercase text-xs lg:text-sm text-center h-14">Very Slightly (Not Eye Visible)</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-between items-center px-4 py-5">
                            <img src="{{ asset('images/style-shape/clarity-diamond-shape.png') }}" class="w-32"
                                alt="Oval">
                            <span class="border-b border-gray-300 w-full pt-5 pb-2 text-black text-center">SI1</span>
                            <span class="uppercase text-xs lg:text-sm text-center h-14">Slightly Included (Not Eye Visible)</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-4 py-5">
                            <img src="{{ asset('images/style-shape/clarity-diamond-shape.png') }}" class="w-32"
                                alt="Cushion">
                            <span class="border-b border-gray-300 w-full pt-5 pb-2 text-black text-center">SI2</span>
                            <span class="uppercase text-xs lg:text-sm text-center h-14">Slightly Included (Not Eye Visible)</span>
                        </div>
                    </div>
                </div>
                <!-- End Clarity Filter -->

                <!-- Start Color Filter -->
                <div class="py-4 flex justify-between items-center cursor-pointer">
                    <span>Color</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14">
                        </path>
                    </svg>
                </div>
                <div class="hidden py-2 text-gray-600 transition-all duration-300">
                    <span class="text-sm">Color grades slight variances in a diamond’s color saturation. Individual grades are hard to distinguish by the human eye.</span>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-4 py-5">
                            <img src="{{ asset('images/style-shape/color-diamond-shape.png') }}" class="w-32"
                                alt="Round">
                            <span class="border-b border-gray-300 w-full pb-4 text-black text-center">D</span>
                            <span class="uppercase text-sm text-center h-14">Colorless</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-between items-center px-4 py-5">
                            <img src="{{ asset('images/style-shape/color-diamond-shape.png') }}" class="w-32"
                                alt="Oval">
                            <span class="border-b border-gray-300 w-full pb-4 text-black text-center">E</span>
                            <span class="uppercase text-sm text-center h-14">Colorless</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-4 py-5">
                            <img src="{{ asset('images/style-shape/color-diamond-shape.png') }}" class="w-32"
                                alt="Cushion">
                            <span class="border-b border-gray-300 w-full pb-4 text-black text-center">F</span>
                            <span class="uppercase text-sm text-center h-14">Colorless</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-4 py-5">
                            <img src="{{ asset('images/style-shape/color-diamond-shape.png') }}" class="w-32"
                                alt="Round">
                            <span class="border-b border-gray-300 w-full pb-4 text-black text-center">G</span>
                            <span class="uppercase text-sm text-center h-14">Near Colorless</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-between items-center px-4 py-5">
                            <img src="{{ asset('images/style-shape/color-diamond-shape.png') }}" class="w-32"
                                alt="Oval">
                            <span class="border-b border-gray-300 w-full pb-4 text-black text-center">H</span>
                            <span class="uppercase text-sm text-center h-14">Near Colorless</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-4 py-5">
                            <img src="{{ asset('images/style-shape/color-diamond-shape.png') }}" class="w-32"
                                alt="Cushion">
                            <span class="border-b border-gray-300 w-full pb-4 text-black text-center">I</span>
                            <span class="uppercase text-sm text-center h-14">Near Colorless</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-4 py-5">
                            <img src="{{ asset('images/style-shape/color-diamond-shape.png') }}" class="w-32"
                                alt="Cushion">
                            <span class="border-b border-gray-300 w-full pb-4 text-black text-center">J</span>
                            <span class="uppercase text-sm text-center h-14">Near Colorless</span>
                        </div>
                    </div>
                </div>
                <!-- End Color Filter -->

                <!-- Start Ratio Filter -->
                <div class="py-4 flex justify-between items-center cursor-pointer">
                    <span>Ratio</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14">
                        </path>
                    </svg>
                </div>
                <div class="hidden py-2 text-gray-600 transition-all duration-300">
                    <span class="text-sm">Ratio describes the proportions of a diamond It measures length over width when viewed from the top and is considered a matter of personal preference.</span>
                    <div class="flex flex-col items-center">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <div class="">
                                    <input
                                        class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                        type="number" id="fromRatioInput" value="0.5" min="0.5" max="2.2"
                                        step="0.01" />
                                </div>
                                <div class="form_carat_control_container">
                                    <input
                                        class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                        type="number" id="toRatioInput" value="2.2" min="0.5" max="2.2"
                                        step="0.01" />
                                </div>
                            </div>
                            <div class="relative min-h-7 flex items-center">
                                <input id="fromRatioSlider" type="range" value="0.5" min="0.5" max="2.2"
                                    step="0.01" />
                                <input id="toRatioSlider" type="range" value="2.2" min="0.5" max="2.2"
                                    step="0.01" />
                            </div>
                            <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
                                <span>0.5</span>
                                <span>2.2</span>
                            </div>
                        </div>
                    </div>
                    <style>
                        input[type="range"]#fromRatioSlider::-webkit-slider-thumb,
                        input[type="range"]#toRatioSlider::-webkit-slider-thumb {
                            -webkit-appearance: none;
                            pointer-events: all;
                            width: 16px;
                            height: 16px;
                            background-color: #fff;
                            border-radius: 100%;
                            border: 2px solid #733D80;
                            cursor: pointer;
                            position: relative;
                            z-index: 5;
                        }

                        input[type="range"]#fromRatioSlider,
                        input[type="range"]#toRatioSlider {
                            -webkit-appearance: none;
                            appearance: none;
                            height: 4px;
                            width: 100%;
                            position: absolute;
                            background-color: #c6c6c6;
                            pointer-events: all;
                            border-radius: 8px;
                        }

                        #toRatioSlider {
                            height: 0;
                            z-index: 4;
                        }
                    </style>
                    <script>
                        function updateRatioSliderColors() {
                            const fromValue = parseFloat(fromRatioSlider.value);
                            const toValue = parseFloat(toRatioSlider.value);
                            const range = toRatioSlider.max - toRatioSlider.min;

                            const percentFrom = ((fromValue - toRatioSlider.min) / range) * 100;
                            const percentTo = ((toValue - toRatioSlider.min) / range) * 100;

                            const gradient = `linear-gradient(to right,
                            #C6C6C6 0%,
                            #C6C6C6 ${percentFrom}%,
                            #733D80 ${percentFrom}%,
                            #733D80 ${percentTo}%,
                            #C6C6C6 ${percentTo}%,
                            #C6C6C6 100%)`;

                            fromRatioSlider.style.background = gradient;
                            toRatioSlider.style.background = gradient;
                        }

                        function syncRatioFromInput() {
                            let value = Math.min(parseFloat(fromRatioInput.value), parseFloat(toRatioInput.value));
                            fromRatioInput.value = value.toFixed(2);
                            fromRatioSlider.value = value;
                            updateRatioSliderColors();
                            
                        }

                        function syncRatioToInput() {
                            let value = Math.max(parseFloat(toRatioInput.value), parseFloat(fromRatioInput.value));
                            toRatioInput.value = value.toFixed(2);
                            toRatioSlider.value = value;
                            updateRatioSliderColors();
                            
                        }

                        function syncRatioFromSlider() {
                            fromRatioInput.value = parseFloat(fromRatioSlider.value).toFixed(2);
                            updateRatioSliderColors();
                            
                        }

                        function syncRatioToSlider() {
                            toRatioInput.value = parseFloat(toRatioSlider.value).toFixed(2);
                            updateRatioSliderColors();
                        }

                        const fromRatioSlider = document.querySelector("#fromRatioSlider");
                        const toRatioSlider = document.querySelector("#toRatioSlider");
                        const fromRatioInput = document.querySelector("#fromRatioInput");
                        const toRatioInput = document.querySelector("#toRatioInput");

                        fromRatioInput.addEventListener("input", syncRatioFromInput);
                        toRatioInput.addEventListener("input", syncRatioToInput);
                        fromRatioSlider.addEventListener("input", syncRatioFromSlider);
                        toRatioSlider.addEventListener("input", syncRatioToSlider);

                        // Initialize slider colors
                        updateRatioSliderColors();
                    </script>
                </div>
                <!-- End Ratio Filter -->

                <!-- Start Table Filter -->
                <div class="py-4 flex justify-between items-center cursor-pointer">
                    <span>Table</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14">
                        </path>
                    </svg>
                </div>
                <div class="hidden py-2 text-gray-600 transition-all duration-300">
                    <span class="text-sm">The table describes the top, flat surface of the diamond. Table % is calculated as the table width divided by the girdle diameter.</span>
                    <div class="flex flex-col items-center">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <div class="">
                                    <input
                                        class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                        type="number" id="fromTableInput" value="3" min="3" max="88"
                                        step="0.01" />
                                </div>
                                <div class="form_carat_control_container">
                                    <input
                                        class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                        type="number" id="toTableInput" value="88" min="3" max="88"
                                        step="0.01" />
                                </div>
                            </div>
                            <div class="relative min-h-7 flex items-center">
                                <input id="fromTableSlider" type="range" value="3" min="3" max="88"
                                    step="0.01" />
                                <input id="toTableSlider" type="range" value="88" min="3" max="88"
                                    step="0.01" />
                            </div>
                            <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
                                <span>3%</span>
                                <span>88%</span>
                            </div>
                        </div>
                    </div>
                    <style>
                        input[type="range"]#fromTableSlider::-webkit-slider-thumb,
                        input[type="range"]#toTableSlider::-webkit-slider-thumb {
                            -webkit-appearance: none;
                            pointer-events: all;
                            width: 16px;
                            height: 16px;
                            background-color: #fff;
                            border-radius: 100%;
                            border: 2px solid #733D80;
                            cursor: pointer;
                            position: relative;
                            z-index: 5;
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

                        #toTableSlider {
                            height: 0;
                            z-index: 4;
                        }
                    </style>
                    <script>
                        function updateTableSliderColors() {
                            const fromValue = parseFloat(fromTableSlider.value);
                            const toValue = parseFloat(toTableSlider.value);
                            const range = toTableSlider.max - toTableSlider.min;

                            const percentFrom = ((fromValue - toTableSlider.min) / range) * 100;
                            const percentTo = ((toValue - toTableSlider.min) / range) * 100;

                            const gradient = `linear-gradient(to right,
                            #C6C6C6 0%,
                            #C6C6C6 ${percentFrom}%,
                            #733D80 ${percentFrom}%,
                            #733D80 ${percentTo}%,
                            #C6C6C6 ${percentTo}%,
                            #C6C6C6 100%)`;

                            fromTableSlider.style.background = gradient;
                            toTableSlider.style.background = gradient;
                        }

                        function syncTableFromInput() {
                            let value = Math.min(parseFloat(fromTableInput.value), parseFloat(toTableInput.value));
                            fromTableInput.value = value.toFixed(2);
                            fromTableSlider.value = value;
                            updateTableSliderColors();
                            
                        }

                        function syncTableToInput() {
                            let value = Math.max(parseFloat(toTableInput.value), parseFloat(fromTableInput.value));
                            toTableInput.value = value.toFixed(2);
                            toTableSlider.value = value;
                            updateTableSliderColors();
                            
                        }

                        function syncTableFromSlider() {
                            fromTableInput.value = parseFloat(fromTableSlider.value).toFixed(2);
                            updateTableSliderColors();
                            
                        }

                        function syncTableToSlider() {
                            toTableInput.value = parseFloat(toTableSlider.value).toFixed(2);
                            updateTableSliderColors();
                        }

                        const fromTableSlider = document.querySelector("#fromTableSlider");
                        const toTableSlider = document.querySelector("#toTableSlider");
                        const fromTableInput = document.querySelector("#fromTableInput");
                        const toTableInput = document.querySelector("#toTableInput");

                        fromTableInput.addEventListener("input", syncTableFromInput);
                        toTableInput.addEventListener("input", syncTableToInput);
                        fromTableSlider.addEventListener("input", syncTableFromSlider);
                        toTableSlider.addEventListener("input", syncTableToSlider);

                        // Initialize slider colors
                        updateTableSliderColors();
                    </script>
                </div>
                <!-- End Table Filter -->

                <!-- Start Depth Filter -->
                {{-- <div class="py-4 flex justify-between items-center cursor-pointer">
                    <span>Depth</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14">
                        </path>
                    </svg>
                </div>
                <div class="hidden px-4 py-2 text-gray-600 transition-all duration-300">
                    <span class="text-sm">The overall height of the diamond. Depth % is calculated as the height of the diamond divided by the girdle diameter.</span>
                    <div class="flex flex-col items-center">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <div>
                                    <input
                                        class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                        type="number" id="fromDepthInput" value="33" min="33" max="917"
                                        step="0.01" />
                                </div>
                                <div>
                                    <input
                                        class="small-input px-1 py-1 text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-primary"
                                        type="number" id="toDepthInput" value="917" min="33" max="917"
                                        step="0.01" />
                                </div>
                            </div>
                            <div class="relative min-h-7 flex items-center">
                                <input id="fromDepthSlider" type="range" value="33" min="33" max="917"
                                    step="0.01" />
                                <input id="toDepthSlider" type="range" value="917" min="33" max="917"
                                    step="0.01" />
                            </div>
                            <div class="flex justify-between font-montserrat text-xs text-gray-500 font-medium">
                                <span>33%</span>
                                <span>917%</span>
                            </div>
                        </div>
                    </div>
                    <style>
                        input[type="range"]#fromDepthSlider::-webkit-slider-thumb,
                        input[type="range"]#toDepthSlider::-webkit-slider-thumb {
                            -webkit-appearance: none;
                            pointer-events: all;
                            width: 16px;
                            height: 16px;
                            background-color: #fff;
                            border-radius: 100%;
                            border: 2px solid #733D80;
                            cursor: pointer;
                            position: relative;
                            z-index: 5;
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
                        function updateDepthSliderColors() {
                            const fromValue = parseFloat(fromDepthSlider.value);
                            const toValue = parseFloat(toDepthSlider.value);
                            const range = toDepthSlider.max - toDepthSlider.min;

                            const percentFrom = ((fromValue - toDepthSlider.min) / range) * 100;
                            const percentTo = ((toValue - toDepthSlider.min) / range) * 100;

                            const gradient = `linear-gradient(to right,
                            #C6C6C6 0%,
                            #C6C6C6 ${percentFrom}%,
                            #733D80 ${percentFrom}%,
                            #733D80 ${percentTo}%,
                            #C6C6C6 ${percentTo}%,
                            #C6C6C6 100%)`;

                            fromDepthSlider.style.background = gradient;
                            toDepthSlider.style.background = gradient;
                        }

                        function syncDepthFromInput() {
                            let value = Math.min(parseFloat(fromDepthInput.value), parseFloat(toDepthInput.value));
                            fromDepthInput.value = value.toFixed(2);
                            fromDepthSlider.value = value;
                            updateDepthSliderColors();
                        }

                        function syncDepthToInput() {
                            let value = Math.max(parseFloat(toDepthInput.value), parseFloat(fromDepthInput.value));
                            toDepthInput.value = value.toFixed(2);
                            toDepthSlider.value = value;
                            updateDepthSliderColors();
                        }

                        function syncDepthFromSlider() {
                            fromDepthInput.value = parseFloat(fromDepthSlider.value).toFixed(2);
                            updateDepthSliderColors();
                        }

                        function syncDepthToSlider() {
                            toDepthInput.value = parseFloat(toDepthSlider.value).toFixed(2);
                            updateDepthSliderColors();
                        }

                        const fromDepthSlider = document.querySelector("#fromDepthSlider");
                        const toDepthSlider = document.querySelector("#toDepthSlider");
                        const fromDepthInput = document.querySelector("#fromDepthInput");
                        const toDepthInput = document.querySelector("#toDepthInput");

                        fromDepthInput.addEventListener("input", syncDepthFromInput);
                        toDepthInput.addEventListener("input", syncDepthToInput);
                        fromDepthSlider.addEventListener("input", syncDepthFromSlider);
                        toDepthSlider.addEventListener("input", syncDepthToSlider);

                        // Initialize slider colors
                        updateDepthSliderColors();
                    </script>
                </div> --}}
                <!-- End Depth Filter -->

                <!-- Start Fancy colors Filter -->
                <div class="py-4 flex justify-between items-center cursor-pointer">
                    <span>Fancy colors</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14">
                        </path>
                    </svg>
                </div>
                <div class="hidden py-2 text-gray-600 transition-all duration-300">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-4 py-5 gap-9">
                            <img src="{{ asset('images/diamonds/blue.png') }}" class="w-32"
                                alt="Blue">
                            <span>Blue</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-between items-center px-4 py-5 gap-9">
                            <img src="{{ asset('images/diamonds/pink.png') }}" class="w-32"
                                alt="Pink">
                            <span>Pink</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-4 py-5 gap-9">
                            <img src="{{ asset('images/diamonds/green.png') }}" class="w-32"
                                alt="Green">
                            <span>Green</span>
                        </div>
                        <div class="bg-light-grey-1 flex flex-col justify-center items-center px-4 py-5 gap-9">
                            <img src="{{ asset('images/diamonds/orange.png') }}" class="w-32"
                                alt="Orange">
                            <span>Orange</span>
                        </div>
                    </div>
                </div>
                <!-- End Fancy colors Filter -->


                <!-- Start Sorting By Filter -->
                <div class="py-4 flex justify-between items-center cursor-pointer">
                    <span>Sorting By</span>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-500">Featured</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="hidden flex flex-col gap-3 py-2 text-gray-600 transition-all duration-300"> 
                    <button class="px-4 py-2 w-28 lg:w-36 text-sm lg:text-base border-2 border-gray-300 rounded hover:border-primary transition-all">Featured</button>
                    <div class="flex flex-col gap-1">
                        <span class="text-xs font-medium uppercase">Price</span>
                        <div class="flex flex-row gap-1">
                            <button class="px-4 py-2 w-40 lg:w-48 text-sm lg:text-base border-2 border-gray-300 rounded hover:border-primary transition-all">Price hight to low</button>
                            <button class="px-4 py-2 w-40 lg:w-48 text-sm lg:text-base border-2 border-gray-300 rounded hover:border-primary transition-all">Price low to high</button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-xs font-medium uppercase">Carat</span>
                        <div class="flex flex-row gap-1">
                            <button class="px-4 py-2 w-40 lg:w-48 text-sm lg:text-base border-2 border-gray-300 rounded hover:border-primary transition-all">Carat hight to low</button>
                            <button class="px-4 py-2 w-40 lg:w-48 text-sm lg:text-base border-2 border-gray-300 rounded hover:border-primary transition-all">Carat low to high</button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-xs font-medium uppercase">Color</span>
                        <div class="flex flex-row gap-1">
                            <button class="px-4 py-2 w-40 lg:w-48 text-sm lg:text-base border-2 border-gray-300 rounded hover:border-primary transition-all">Color hight to low</button>
                            <button class="px-4 py-2 w-40 lg:w-48 text-sm lg:text-base border-2 border-gray-300 rounded hover:border-primary transition-all">Color low to high</button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-xs font-medium uppercase">Cut</span>
                        <div class="flex flex-row gap-1">
                            <button class="px-4 py-2 w-40 lg:w-48 text-sm lg:text-base border-2 border-gray-300 rounded hover:border-primary transition-all">Cut hight to low</button>
                            <button class="px-4 py-2 w-40 lg:w-48 text-sm lg:text-base border-2 border-gray-300 rounded hover:border-primary transition-all">Cut low to high</button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-xs font-medium uppercase">Clarity</span>
                        <div class="flex flex-row gap-1">
                            <button class="px-4 py-2 w-40 lg:w-48 text-sm lg:text-base border-2 border-gray-300 rounded hover:border-primary transition-all">Clarity hight to low</button>
                            <button class="px-4 py-2 w-40 lg:w-48 text-sm lg:text-base border-2 border-gray-300 rounded hover:border-primary transition-all">Clarity low to high</button>
                        </div>
                    </div>
                </div>
                <!-- End Sorting By Filter -->
            </div>

            <!-- Bottom Buttons -->
            <div class="mt-auto flex gap-4 pt-6">
                <button class="flex-1 py-3 border-2 border-gray-300 rounded hover:border-primary">Clear filters</button>
                <button class="flex-1 py-3 bg-primary text-white rounded hover:bg-primary-dark">Apply filters</button>
            </div>
        </div>
    </div>
    <!-- End Diamond Filter Drawer -->

    <!-- Start Open Drawer Script -->
    <script>
        function openFilterDrawer(filterType) {
            const drawer = document.getElementById('filterDrawer');
            const overlay = document.getElementById('overlay');

            drawer.classList.remove('translate-x-full');
            drawer.classList.add('translate-x-0');
            overlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        document.getElementById('closeFilterDrawer').addEventListener('click', () => {
            const drawer = document.getElementById('filterDrawer');
            const overlay = document.getElementById('overlay');

            drawer.classList.remove('translate-x-0');
            drawer.classList.add('translate-x-full');
            overlay.classList.add('hidden');
            document.body.style.overflow = '';
        });
    </script>
    <!-- End Open Drawer Script -->

    <!-- Start toggle For Filter Drawer Options Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filterItems = document.querySelectorAll(".cursor-pointer");

            filterItems.forEach(item => {
                const icon = item.querySelector("svg");
                const content = item.nextElementSibling;
                let isOpen = false;

                item.addEventListener("click", function() {
                    isOpen = !isOpen;

                    if (isOpen) {
                        content.classList.remove("hidden");
                        content.classList.add("block");
                        content.style.opacity = '1';
                        icon.innerHTML =
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14"></path>';
                    } else {
                        content.classList.remove("block");
                        content.classList.add("hidden");
                        content.style.opacity = '0';
                        icon.innerHTML =
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m-7-7h14"></path>';
                    }
                });
            });
        });
    </script>
    <!-- End toggle For Filter Drawer Options Script -->
@endsection
