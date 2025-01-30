@extends('layouts.master')

@section('content')

<div class="container mx-auto px-4 py-8">
    {{-- Header Section --}}
    <h1 class="text-4xl text-center font-literata text-primary font-semibold mb-8">ROAYA CREATED DIAMONDS</h1>
    
    {{-- Features Section --}}
    <div class="flex justify-center items-center gap-8 mb-12">
        <div class="flex items-center gap-2 font-medium text-primary">
            <img src="{{ asset('images/Impeccable origin.png') }}" alt="Impeccable Origin" class="w-6 h-6">
            <span>Impeccable origin</span>
        </div>
        <div class="flex items-center gap-2 font-medium text-primary">
            <img src="{{ asset('images/Master Cutter.png') }}" alt="Master cutters" class="w-6 h-6">
            <span>Master cutters</span>
        </div>
        <div class="flex items-center gap-2 font-medium text-primary">
            <img src="{{ asset('images/Value Guarantee.png') }}" alt="100% value guarantee" class="w-6 h-6">
            <span>100% value guarantee</span>
        </div>
        <a href="#" id="openDrawer" class="text-primary font-medium underline-offset-4 underline decoration-2 decoration-primary">Learn why they are unmatched</a>
    </div>

    {{-- Filter Section --}}
    <div class="flex flex-row gap-10">
        <div class="flex flex-col gap-2">
            <span class="font-medium" id="diamondShape">Shape : Round</span>
            <div class="grid grid-cols-10 gap-2">
                @foreach(['round', 'oval', 'cushion', 'pear', 'princess', 'emerald', 'heart', 'radiant', 'triangular', 'asscher'] as $shape)
                    <img 
                        src="{{ asset('Shape/' . $shape . '.svg') }}" 
                        alt="{{ ucfirst($shape) }}" 
                        class="w-7 cursor-pointer diamond-shape {{ $shape === 'round'}}"
                        data-shape="{{ ucfirst($shape) }}"
                        onclick="selectDiamondShape('{{ ucfirst($shape) }}', this)"
                    >
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

        <div class="w-1/3 grid grid-cols-6 gap-4 mb-4">
            <div class="flex flex-col gap-3">
                <label for="carat" class="text-base text-gray-500">Carat</label>
                <div class="flex flex-row gap-3 cursor-pointer" onclick="openFilterDrawer('carat')">
                    <label for="carat" class="text-base font-medium">All</label>
                    <img src="{{ asset('Shape/down-arrow.svg') }}" alt="carat" class="w-5 h-5">
                </div>
            </div>
            <div class="flex flex-col gap-3">
                <label for="price" class="text-base text-gray-500">Price</label>
                <div class="flex flex-row gap-3 cursor-pointer" onclick="openFilterDrawer('price')">
                    <label for="price" class="text-base font-medium">All</label>
                    <img src="{{ asset('Shape/down-arrow.svg') }}" alt="price" class="w-5 h-5">
                </div>
            </div>
            <div class="flex flex-col gap-3">
                <label for="cut" class="text-base text-gray-500">Cut</label>
                <div class="flex flex-row gap-3 cursor-pointer" onclick="openFilterDrawer('cut')">
                    <label for="cut" class="text-base font-medium">All</label>
                    <img src="{{ asset('Shape/down-arrow.svg') }}" alt="cut" class="w-5 h-5">
                </div>
            </div>
            <div class="flex flex-col gap-3">
                <label for="clarity" class="text-base text-gray-500">Clarity</label>
                <div class="flex flex-row gap-3 cursor-pointer" onclick="openFilterDrawer('clarity')">
                    <label for="clarity" class="text-base font-medium">All</label>
                    <img src="{{ asset('Shape/down-arrow.svg') }}" alt="clarity" class="w-5 h-5">
                </div>
            </div>
            <div class="flex flex-col gap-3">
                <label for="color" class="text-base text-gray-500">Color</label>
                <div class="flex flex-row gap-3 cursor-pointer" onclick="openFilterDrawer('color')">
                    <label for="color" class="text-base font-medium">All</label>
                    <img src="{{ asset('Shape/down-arrow.svg') }}" alt="color" class="w-5 h-5">
                </div>
            </div>
        </div>
    </div>

    {{-- Diamond Listing Table --}}
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b">
                    <th class="text-left py-4 px-4">SHAPE</th>
                    <th class="text-left py-4 px-4">CARAT</th>
                    <th class="text-left py-4 px-4">COLOR</th>
                    <th class="text-left py-4 px-4">CUT</th>
                    <th class="text-left py-4 px-4">CLARITY</th>
                    <th class="text-right py-4 px-4">PRICE</th>
                </tr>
            </thead>
            <tbody>
                @foreach([
                    ['Oval', '2.04', 'VVS2', 'CA$5,936'],
                    ['Round', '1.85', 'VS1', 'CA$4,707'],
                    ['Cushion', '1.05', 'VVS2', 'CA$2,343'],
                    ['Pear', '0.74', 'VVS2', 'CA$1,619'],
                    ['Princess', '3.29', 'VS2', 'CA$10,047'],
                    ['Emerald', '4.33', 'VS1', 'CA$15,478']
                ] as [$shape, $carat, $clarity, $price])
                    <tr class="border-b hover:bg-gray-50" data-shape="{{ $shape }}">
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-2">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2L2 12l10 10 10-10L12 2z"/>
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
</div>

<!-- Start Learn Drawer -->
<div id="drawer" class="fixed top-0 right-0 h-screen w-full md:w-3/5 lg:w-1/2 xl:w-2/5  bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-50">
    <div class="flex flex-col p-4">
        <div class="flex justify-between bg-white">
            <p class="text-primary text-base lg:text-lg font-montserrat font-semibold">Why Roaya created diamonds are unmatched</p>
            <button id="closeDrawer" class="text-gray-500 hover:text-gray-800">
                <img src="{{ asset('Shape/close.svg') }}" alt="Close" class="w-7 h-7">
            </button>
        </div>
        <div>
            <p class="text-primary text-xs lg:text-sm font-montserrat">Each Roaya created diamond is unique — its provenance and craftsmanship signify a choice that is true to the future.</p>
        </div>
    </div>
    
    <div class="px-4">
        <div class="tab flex justify-between text-primary border-b border-primary py-2">
            <button class="tab-button active font-semibold text-sm lg:text-base" onclick="showTab('tab1')">Impeccable Origin</button>
            <button class="tab-button text-sm lg:text-base" onclick="showTab('tab2')">Master Cutters</button>
            <button class="tab-button text-sm lg:text-base" onclick="showTab('tab3')">100% Guarantee</button>
        </div>
        <div id="tab1" class="tab-content py-2">
            <p class="text-primary text-sm lg:text-lg font-montserrat font-semibold">Impeccable Origin of Diamonds</p>
            <p class="text-primary text-sm lg:text-base leading-tight font-montserrat">
                Our diamonds are ethically sourced, ensuring they are conflict-free and meet the highest standards of environmental and social responsibility. Certified under the Kimberley Process, each diamond boasts a traceable supply chain and exceptional quality, reflecting both brilliance and integrity.
            </p>
            <div class="flex flex-col gap-4 py-4">
                <div class="flex flex-col items-start">
                    <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">1. Natural Formation</p>
                    <p class="text-primary text-sm lg:text-base font-montserrat">
                        Our diamonds are formed under the earth's surface, through a process that takes millions of years. This unique formation ensures that each diamond is a true representation of its natural origin.
                    </p>
                </div>
                <div class="flex flex-col items-start">
                    <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">2. Kimberley Process</p>
                    <p class="text-primary text-sm lg:text-base font-montserrat">
                        Our diamonds are certified under the Kimberley Process, ensuring they are conflict-free and meet the highest standards of environmental and social responsibility.
                    </p>
                </div>
                <div class="flex flex-col items-start">
                    <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">3. Traceable Supply Chain</p>
                    <p class="text-primary text-sm lg:text-base font-montserrat">
                        Each diamond has a unique traceable supply chain, from its origin to its final destination. This ensures that each diamond is a true representation of its natural origin.
                    </p>
                </div>
            </div>
        </div>
        <div id="tab2" class="tab-content hidden py-2">
            <p class="text-primary text-sm lg:text-lg font-montserrat font-semibold">Master Cutters: The Artisans Behind Perfect Diamonds</p>
            <p class="text-primary text-sm lg:text-base leading-tight font-montserrat">
                Behind every radiant diamond lies the skill and expertise of master cutters—artisans who dedicate their craft to unlocking the full potential of a diamond's brilliance. Their precision and attention to detail transform rough stones into timeless treasures that captivate the world.
            </p>
            <div class="flex flex-col gap-4 py-4">
                <div class="flex flex-col items-start">
                    <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">1. The Role of a Master Cutter</p>
                    <p class="text-primary text-sm lg:text-base font-montserrat">
                        A master cutter is a highly skilled professional responsible for shaping and polishing diamonds to enhance their beauty and value. By carefully analyzing the natural characteristics of each rough diamond, they determine the optimal cut that maximizes brilliance, fire, and symmetry.
                    </p>
                </div>
                <div class="flex flex-col items-start">
                    <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">2. Kimberley Process</p>
                    <p class="text-primary text-sm lg:text-base font-montserrat">
                        Diamond cutting is both an art and a science. It involves meticulous calculations and expert craftsmanship to create facets that interact with light in the most captivating way. The most common diamond cuts include:
                        <ul class="list-disc list-inside text-primary text-sm lg:text-base font-montserrat">
                            <li>
                                <span class="font-semibold">Round Brilliant:</span>
                                <span class="font-normal">Known for its unmatched sparkle, with 58 perfectly aligned facets.</span>
                            </li>
                            <li>
                                <span class="font-semibold">Princess Cut:</span>
                                <span class="font-normal">A square shape that combines modern elegance with radiant light performance.</span>
                            </li>
                            <li>
                                <span class="font-semibold">Emerald Cut:</span>
                                <span class="font-normal">A sophisticated rectangular cut that highlights clarity and depth.</span>
                            </li>
                            <li>
                                <span class="font-semibold">Cushion Cut:</span>
                                <span class="font-normal">A timeless design that blends vintage charm with a soft, pillow-like shape.</span>
                            </li>
                        </ul>
                        <p class="text-primary text-sm lg:text-base font-montserrat">
                            Each cut requires precise angles and proportions, which only master cutters can achieve.
                        </p>
                    </p>
                </div>
                <div class="flex flex-col items-start">
                    <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">3. Traceable Supply Chain</p>
                    <p class="text-primary text-sm lg:text-base font-montserrat">
                        Each diamond has a unique traceable supply chain, from its origin to its final destination. This ensures that each diamond is a true representation of its natural origin.
                    </p>
                </div>
            </div>
        </div>
        <div id="tab3" class="tab-content hidden py-2">
            <p class="text-primary text-sm lg:text-lg font-montserrat font-semibold">100% Value Guarantee for Diamonds</p>
            <p class="text-primary text-sm lg:text-base leading-tight font-montserrat">
                When investing in a diamond, peace of mind and assurance of value are paramount. Our 100% Value Guarantee ensures that your purchase is not only a symbol of timeless elegance but also a secure and worthwhile investment.
            </p>
            <div class="flex flex-col gap-4 py-4">
                <div class="flex flex-col items-start">
                    <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">1. Unmatched Quality Assurance</p>
                    <p class="text-primary text-sm lg:text-base font-montserrat">
                        We guarantee that every diamond meets the highest standards of quality, backed by certifications from renowned gemological institutes such as GIA, AGS, or IGI. These certifications provide a comprehensive assessment of the diamond's cut, color, clarity, and carat weight, ensuring its value and authenticity.
                    </p>
                </div>
                <div class="flex flex-col items-start">
                    <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">2. Transparency and Ethical Sourcing</p>
                    <p class="text-primary text-sm lg:text-base font-montserrat">
                        Our diamonds are ethically sourced and fully traceable, adhering to the highest standards of environmental and social responsibility. With our 100% Value Guarantee, you can trust that your diamond purchase is conflict-free and ethically mined.
                    </p>
                </div>
                <div class="flex flex-col items-start">
                    <p class="text-primary text-sm lg:text-base font-montserrat font-semibold">3. Lifetime Trade-In and Buyback Options</p>
                    <p class="text-primary text-sm lg:text-base font-montserrat">
                        We  stand by the enduring value of our diamonds by offering lifetime trade-in and buyback options. Should you choose to upgrade or exchange your diamond in the future, you'll receive full credit for your original purchase price toward your new selection.
                    </p>
                </div>
                <p class="text-primary text-sm lg:text-base font-montserrat">
                    With our 100% Value Guarantee, your diamond is more than just a purchase—it's a promise of quality, authenticity, and enduring worth.
                </p>
                <p class="text-primary text-sm lg:text-base font-montserrat">
                    Invest in a diamond with confidence, knowing you are backed by our unwavering commitment to excellence and value.
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
    document.addEventListener("DOMContentLoaded", function () {
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
<!-- End Learn Drawer -->

<!-- Start Filter Drawer -->
<div id="filterDrawer" class="fixed top-0 right-0 h-screen w-full md:w-3/5 lg:w-1/2 xl:w-2/5 bg-white shadow-lg transform translate-x-full transition-transform duration-300 z-50">
    <div class="flex flex-col p-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-medium">FILTER</h2>
            <button id="closeFilterDrawer" class="text-gray-500 hover:text-gray-800">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- What's most important section -->
        <div class="mb-8">
            <h3 class="text-lg mb-4">What's most important to you?</h3>
            <div class="flex gap-3">
                <button class="px-4 py-2 border-2 border-gray-300 rounded hover:border-primary">Most brilliant</button>
                <button class="px-4 py-2 border-2 border-gray-300 rounded hover:border-primary">Best color</button>
                <button class="px-4 py-2 border-2 border-gray-300 rounded hover:border-primary">Best balance</button>
            </div>
        </div>

        <!-- Filter Options -->
        <div class="flex flex-col divide-y">
            <div class="py-4 flex justify-between items-center cursor-pointer">
                <span>Shape</span>
                <div class="flex items-center gap-2">
                    <span class="text-gray-500">Round Brilliant</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
            
            <div class="py-4 flex justify-between items-center cursor-pointer">
                <span>Carat</span>
                <div class="flex items-center gap-2">
                    <span class="text-gray-500">1.3 - 5.0</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>

            <!-- Add other filter options similarly -->
            <div class="py-4 flex justify-between items-center cursor-pointer">
                <span>Price</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </div>

            <!-- Repeat for Cut, Clarity, Color, Ratio, Table, Depth, Fancy colors -->
            
            <div class="py-4 flex justify-between items-center cursor-pointer">
                <span>Sorting By</span>
                <div class="flex items-center gap-2">
                    <span class="text-gray-500">Featured</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Bottom Buttons -->
        <div class="mt-auto flex gap-4 pt-6">
            <button class="flex-1 py-3 border-2 border-gray-300 rounded hover:border-primary">Clear filters</button>
            <button class="flex-1 py-3 bg-primary text-white rounded hover:bg-primary-dark">Apply filters</button>
        </div>
    </div>
</div>

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
<!-- End Filter Drawer -->
@endsection