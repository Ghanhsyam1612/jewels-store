@extends('layouts.master')

@section('content')
    <div class="container mb-10">
        <nav class="flex items-center text-sm font-montserrat mb-4 bg-light-grey-1 px-40 py-3">
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
            <span class="text-dark-blue text-xs">Engagement Rings</span>
        </nav>

        <div class="flex flex-col items-center justify-center px-40 my-12">
            <h2 class="text-3xl font-montserrat font-semibold mb-2">Engagement Rings</h2>
            <p class="text-sm font-montserrat text-center">' Indication of promising relation for infinity. ' Engagement
                rings designate if a person is tied in a bond of love and marriage, where they prevail to adore their
                relationship through a means of token designers, especially for love.</p>
        </div>

        {{-- Start Stepper Bar --}}
        <div class="my-7 px-40">
            <div class="flex border border-gray-200 rounded-sm">
                <!-- Section 1: BUILD YOUR RING -->
                <div class="bg-amber-400 text-center relative flex-shrink-0 w-[180px]">
                    <div class="flex items-center py-4 px-4 h-full min-h-16">
                        <h1 class="text-13px uppercase font-montserrat font-semibold">Build your Ring</h1>
                    </div>
                    <!-- Right arrow -->
                    <div class="absolute right-[-15px] top-0 h-full w-[15px] z-10">
                        <div class="w-0 h-0 absolute
                            border-t-[37px] border-t-transparent
                            border-l-[15px] border-l-amber-400
                            border-b-[37px] border-b-transparent">  
                        </div>
                    </div>
                </div>

                <!-- Section 2: CHOOSE SETTING -->
                <div class="relative flex-1">
                    <div class="bg-slate-300 flex items-center justify-between py-4 px-8 h-full min-h-16">
                        <!-- Left arrow shape -->
                        <div class="absolute left-0 top-0 h-full w-[15px] bg-slate-300 clip-path-arrow-left"></div>
                        
                        <div class="flex items-center justify-center">
                            <span class="text-3xl font-montserrat font-semibold pr-4">1</span>
                            <div class="text-sm font-montserrat text-gray-400">
                                <span>Choose a</span><br>
                                <a href="#" class="uppercase text-gray-800 hover:text-amber-600 tracking-wide font-semibold">Setting</a>
                            </div>
                        </div>
                        <div class="mr-1">
                            <svg class="w-7 text-primary" fill="currentColor" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 49.94"><defs></defs><path class="text-primary" d="M28.32,18.75c5.77,1.45,9.87,4.79,12,10.28a15.69,15.69,0,0,1,.22,11.11c.11-1,.28-1.88.33-2.83a15.53,15.53,0,0,0-3.75-11.25,15.84,15.84,0,0,0-9.6-5.48.84.84,0,0,0-1,.4c-.5.7-1,1.38-1.61,2.15-.61-.8-1.19-1.48-1.69-2.23-.26-.41-.56-.38-.93-.32a16,16,0,0,0-13,18.8c0,.17,0,.34.09.61-2.73-6.73.5-18.44,12.2-21.24-.2-.3-.37-.58-.57-.85-1.31-1.71-2.61-3.43-3.93-5.13a.47.47,0,0,1,0-.71c.66-.76,1.28-1.55,1.95-2.29a1,1,0,0,1,.68-.31q5.22,0,10.44,0a1.18,1.18,0,0,1,.77.36c.68.75,1.29,1.55,1.95,2.3.24.28.09.44-.07.65L28.89,18ZM22.44,13l2.48,7.9h.13l2.48-7.93Zm3.8,6.87.14.09L31.72,13l-.09-.18c-.87,0-1.73.06-2.6,0-.46,0-.71.09-.8.58a12.74,12.74,0,0,1-.41,1.33C27.3,16.43,26.77,18.13,26.24,19.82ZM23.61,20l.13-.08c-.7-2.26-1.4-4.53-2.13-6.78a.57.57,0,0,0-.43-.25c-.54,0-1.09,0-1.63,0l-1.34,0Zm3.88-8.07c-.15-.44-.29-.89-.47-1.34a.5.5,0,0,0-.37-.26q-1.68,0-3.36,0a.44.44,0,0,0-.34.23c-.19.45-.34.93-.49,1.37Zm.33-1.64c.19.58.35,1.07.53,1.55a.37.37,0,0,0,.24.2l3.12,0c-.5-.61-.88-1.09-1.29-1.54a.66.66,0,0,0-.39-.19C29.32,10.26,28.61,10.26,27.82,10.25Zm-5.67-.05L20,10.28c-.13,0-.31,0-.38.08-.45.49-.87,1-1.3,1.5l.07.17,2.93,0a.32.32,0,0,0,.25-.19C21.78,11.32,21.94,10.83,22.15,10.2Z" transform="translate(-8.5)"/><path class="cls-1" d="M12.94,28.44A13.21,13.21,0,0,0,32.63,44.61a12.9,12.9,0,0,0,5.1-7.39,13.38,13.38,0,0,0-.76-8.9,14,14,0,0,1-2.38,17.9A14.21,14.21,0,0,1,15.18,46C9.56,40.57,10.08,32.52,12.94,28.44Z" transform="translate(-8.5)"/><path class="cls-1" d="M37.58,6.43c-.13.09-.24.23-.39.27-1.5.42-3,.82-4.53,1.21a.55.55,0,0,1-.46-.13,47.48,47.48,0,0,1,5.28-1.55Z" transform="translate(-8.5)"/><path class="cls-1" d="M17.66,7.94c-.12,0-.25,0-.37,0L12.76,6.69c-.13,0-.22-.2-.32-.31a1,1,0,0,1,.45-.07c1.49.39,3,.79,4.46,1.2a1.71,1.71,0,0,1,.41.27Z" transform="translate(-8.5)"/><path class="cls-1" d="M21.1,6.09a4,4,0,0,1-.37-.45L18.54,1.85a.51.51,0,0,1-.07-.15c0-.15,0-.3,0-.45a1.34,1.34,0,0,1,.32.24c.22.34.43.69.63,1,.57,1,1.15,2,1.71,3a1.71,1.71,0,0,1,.13.47Z" transform="translate(-8.5)"/><path class="cls-1" d="M31.59,1.31a3,3,0,0,1-.14.45q-1.14,2-2.29,4c-.08.13-.27.21-.41.31a1.15,1.15,0,0,1,.06-.5q1.11-2,2.25-3.91a3.29,3.29,0,0,1,.33-.41Z" transform="translate(-8.5)"/><path class="cls-1" d="M25.23,5.46c-.17,0-.26.06-.31,0a.3.3,0,0,1-.14-.21c0-1.66,0-3.32,0-5,0-.1.13-.2.2-.3.07.14.19.27.19.41,0,1.35,0,2.71,0,4.06C25.16,4.79,25.2,5.12,25.23,5.46Z" transform="translate(-8.5)"/></svg>
                        </div>
                        
                        <!-- Right arrow shape -->
                        <div class="absolute right-[-15px] top-0 h-full w-[15px] z-10">
                            <div class="w-0 h-0 absolute
                                border-t-[37px] border-t-transparent
                                border-l-[15px] border-l-slate-300
                                border-b-[37px] border-b-transparent">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3: CHOOSE DIAMOND -->
                <div class="relative flex-1">
                    <div class="bg-slate-200 flex items-center justify-between py-4 px-8 h-full min-h-16">
                        <!-- Left arrow shape -->
                        <div class="absolute left-0 top-0 h-full w-[15px] bg-slate-200 clip-path-arrow-left"></div>
                        
                        <div class="flex items-center justify-center">
                            <span class="text-3xl font-montserrat font-semibold pr-4">2</span>
                            <div class="text-sm font-montserrat text-gray-400">
                                <span>Choose a</span><br>
                                <a href="#" class="uppercase text-gray-800 hover:text-amber-600 tracking-wide font-semibold">Diamond</a>
                            </div>
                        </div>
                        <div class="mr-1">
                            <svg class="w-8" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36.5 30.82"><defs></defs><path class="text-primary" d="M39.62,9.14,32.69.31a.62.62,0,0,0-.47-.22H10.78a.62.62,0,0,0-.47.22L3.38,9.14a.59.59,0,0,0,0,.75L21.05,30.7a.59.59,0,0,0,.9,0L39.61,9.89A.59.59,0,0,0,39.62,9.14ZM31.38,1.27,28.83,8.32l-6-7Zm-3.6,7.65H15.22L21.5,1.59ZM20.21,1.27l-6,7.05-2.55-7Zm-9.63.61,2.55,7H5.06ZM5.12,10.1h8.44l6.27,17.34ZM21.5,28.58,14.81,10.1H28.19Zm1.67-1.14L29.44,10.1h8.44Zm6.7-18.52,2.54-7,5.53,7Z" transform="translate(-3.25 -0.09)"/></svg>
                        </div>
                        
                        <!-- Right arrow shape -->
                        <div class="absolute right-[-15px] top-0 h-full w-[15px] z-10">
                            <div class="w-0 h-0 absolute
                                border-t-[36px] border-t-transparent
                                border-l-[15px] border-l-slate-200
                                border-b-[37px] border-b-transparent">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 4: COMPLETE RING -->
                <div class="relative flex-1">
                    <div class="flex items-center py-4 px-8 h-full min-h-16">
                        <!-- Left arrow shape -->
                        <div class="absolute left-0 top-0 h-full w-[15px] bg-white clip-path-arrow-left"></div>
                        
                        <div class="flex items-center justify-center">
                            <span class="text-3xl font-montserrat font-semibold pr-4">3</span>
                            <div class="text-sm font-montserrat text-gray-400">
                                <span>Complete</span><br>
                                <a href="#" class="uppercase text-gray-800 hover:text-amber-600 tracking-wide font-semibold">Ring</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Stepper Bar --}}


        <div class="flex items-center justify-between mx-40 py-5 border-b border-gray-600">
            <div class="flex flex-row items-center justify-between gap-5">
                <h5 class="text-sm font-montserrat font-semibold uppercase">Filter By : </h5>
                <!-- Style Filter -->
                <div class="relative flex items-center">
                    <label class="block text-13px font-montserrat font-semibold uppercase mr-3">Style</label>
                    {{-- Down Arrow --}}
                    <svg id="styleDropdownIcon" fill="#000000" height="8" width="8" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 330.002 330.002" xml:space="preserve" class="cursor-pointer">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path id="XMLID_23_"
                                d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z">
                            </path>
                        </g>
                    </svg>
                    {{-- Up Arrow --}}
                    <svg class="hidden" height="8" width="8" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path style="fill:#000000;"
                                d="M503.265,330.918L270.532,144.737c-8.501-6.8-20.579-6.8-29.075,0L8.736,330.918 c-7.719,6.173-10.695,16.55-7.422,25.876c3.271,9.326,12.077,15.569,21.96,15.569h465.453c9.883,0,18.689-6.242,21.96-15.569 C513.958,347.466,510.982,337.091,503.265,330.918z">
                            </path>
                        </g>
                    </svg>

                    <div id="styleDropdown"
                        class="hidden absolute top-full left-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
                        <div class="py-2">
                            <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <input type="checkbox" class="mr-2">
                                <span class="text-sm font-montserrat">Bezel</span>
                            </label>
                            <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <input type="checkbox" class="mr-2">
                                <span class="text-sm font-montserrat">Cluster</span>
                            </label>
                            <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <input type="checkbox" class="mr-2">
                                <span class="text-sm font-montserrat">Dainty</span>
                            </label>
                            <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <input type="checkbox" class="mr-2">
                                <span class="text-sm font-montserrat">Diamond Band</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Diamond Shape Filter -->
                <div class="relative flex items-center">
                    <label class="block text-13px font-montserrat font-semibold uppercase mr-3">Diamond Shape</label>
                    {{-- Down Arrow --}}
                    <svg id="shapeDropdownIcon" fill="#000000" height="8" width="8" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 330.002 330.002" xml:space="preserve" class="cursor-pointer">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path id="XMLID_23_"
                                d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z">
                            </path>
                        </g>
                    </svg>
                    {{-- Up Arrow --}}
                    <svg class="hidden" height="8" width="8" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path style="fill:#000000;"
                                d="M503.265,330.918L270.532,144.737c-8.501-6.8-20.579-6.8-29.075,0L8.736,330.918 c-7.719,6.173-10.695,16.55-7.422,25.876c3.271,9.326,12.077,15.569,21.96,15.569h465.453c9.883,0,18.689-6.242,21.96-15.569 C513.958,347.466,510.982,337.091,503.265,330.918z">
                            </path>
                        </g>
                    </svg>

                    <div id="shapeDropdown"
                        class="hidden absolute top-full left-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
                        <div class="py-2">
                            <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <input type="checkbox" class="mr-2">
                                <span class="text-sm font-montserrat">Asscher</span>
                            </label>
                            <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <input type="checkbox" class="mr-2">
                                <span class="text-sm font-montserrat">Cushion</span>
                            </label>
                            <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <input type="checkbox" class="mr-2">
                                <span class="text-sm font-montserrat">Emerald</span>
                            </label>
                            <label class="flex items-center px-4 py-2 hover:bg-gray-100">
                                <input type="checkbox" class="mr-2">
                                <span class="text-sm font-montserrat">Heart</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Price Filter -->
                <div class="relative flex items-center">
                    <label class="block text-13px font-montserrat font-semibold uppercase mr-3">Price</label>
                    {{-- Down Arrow --}}
                    <svg id="priceDropdownIcon" fill="#000000" height="8" width="8" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 330.002 330.002" xml:space="preserve" class="cursor-pointer">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path id="XMLID_23_"
                                d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z">
                            </path>
                        </g>
                    </svg>
                    {{-- Up Arrow --}}
                    <svg class="hidden" height="8" width="8" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path style="fill:#000000;"
                                d="M503.265,330.918L270.532,144.737c-8.501-6.8-20.579-6.8-29.075,0L8.736,330.918 c-7.719,6.173-10.695,16.55-7.422,25.876c3.271,9.326,12.077,15.569,21.96,15.569h465.453c9.883,0,18.689-6.242,21.96-15.569 C513.958,347.466,510.982,337.091,503.265,330.918z">
                            </path>
                        </g>
                    </svg>

                    <div id="priceDropdown"
                        class="hidden absolute top-full left-0 mt-1 w-64 bg-white border border-gray-300 rounded shadow-lg z-10">
                        <div class="py-4 px-4">
                            <div class="flex justify-between mb-2">
                                <span class="text-sm font-montserrat">$<span id="minPrice">0</span></span>
                                <span class="text-sm font-montserrat">$<span id="maxPrice">50,000</span></span>
                            </div>
                            <div class="relative h-2 bg-gray-200 rounded">
                                <div class="absolute h-2 w-56 bg-gray-200 rounded"></div>
                                <div class="absolute h-2 w-56 bg-blue-500 rounded" id="range-selected"></div>
                                <input type="range" min="0" max="50000" value="0"
                                    class="absolute w-full h-2 opacity-0 cursor-pointer" id="min-price-range">
                                <input type="range" min="0" max="50000" value="50000"
                                    class="absolute w-full h-2 opacity-0 cursor-pointer" id="max-price-range">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sort By -->
            <div class="relative flex items-center">
                <label class="block text-13px font-montserrat font-semibold uppercase mr-3">Sort By Price</label>
                {{-- Down Arrow --}}
                <svg id="sortDropdownIcon" fill="#000000" height="8" width="8" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 330.002 330.002" xml:space="preserve" class="cursor-pointer">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path id="XMLID_23_"
                            d="M329.155,100.036c-2.108-6.011-7.784-10.035-14.154-10.035h-300c-6.371,0-12.046,4.024-14.154,10.035 c-2.109,6.011-0.19,12.699,4.784,16.678l150.004,120c2.739,2.191,6.055,3.287,9.37,3.287c3.316,0,6.631-1.096,9.371-3.287 l149.996-120C329.346,112.734,331.264,106.047,329.155,100.036z">
                        </path>
                    </g>
                </svg>
                {{-- Up Arrow --}}
                <svg class="hidden" height="8" width="8" version="1.1" id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                    xml:space="preserve" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path style="fill:#000000;"
                            d="M503.265,330.918L270.532,144.737c-8.501-6.8-20.579-6.8-29.075,0L8.736,330.918 c-7.719,6.173-10.695,16.55-7.422,25.876c3.271,9.326,12.077,15.569,21.96,15.569h465.453c9.883,0,18.689-6.242,21.96-15.569 C513.958,347.466,510.982,337.091,503.265,330.918z">
                        </path>
                    </g>
                </svg>

                <div id="sortDropdown"
                    class="hidden absolute top-full left-0 mt-1 w-48 bg-white border border-gray-300 rounded shadow-lg z-10">
                    <div class="py-2">
                        <button class="w-full text-left px-4 py-2 text-sm font-montserrat hover:bg-gray-100">
                            Price: Low to High
                        </button>
                        <button class="w-full text-left px-4 py-2 text-sm font-montserrat hover:bg-gray-100">
                            Price: High to Low
                        </button>
                        <button class="w-full text-left px-4 py-2 text-sm font-montserrat hover:bg-gray-100">
                            Most Popular
                        </button>
                        <button class="w-full text-left px-4 py-2 text-sm font-montserrat hover:bg-gray-100">
                            Newest First
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const styleIcon = document.getElementById('styleDropdownIcon');
            const styleDropdown = document.getElementById('styleDropdown');

            styleIcon.addEventListener('click', () => {
                styleDropdown.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (e) => {
                if (!styleIcon.contains(e.target) && !styleDropdown.contains(e.target)) {
                    styleDropdown.classList.add('hidden');
                }
            });
        </script>

        <span class="text-sm font-montserrat text-gray-400 mx-40">
            Showing 1-12 of 100 results
        </span>

        <!-- Product Grid Container -->
        <div class="grid grid-cols-4 mx-40 my-5 gap-6">
            <!-- Product Card 1 -->
            <div class="flex flex-col items-center justify-center">
                <a href="/product">
                    {{-- Product Image Slider --}}
                    <div id="default-carousel" class="relative w-full">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden md:h-72">
                            <!-- Item 1 -->
                            <div class="block duration-700 ease-in-out" data-carousel-item>
                                <img src="/images/1.jpg"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Items 2-4 (hidden by default) -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/images/2.jpg"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/images/3.jpg"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="/images/4.jpg"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators (hidden by default) -->
                        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse opacity-0 transition-opacity duration-300"
                            id="carousel-indicators">
                            <button type="button" class="w-2 h-2 rounded-full bg-gray-300 hover:bg-white"
                                aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-2 h-2 rounded-full bg-gray-300 hover:bg-white"
                                aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-2 h-2 rounded-full bg-gray-300 hover:bg-white"
                                aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-2 h-2 rounded-full bg-gray-300 hover:bg-white"
                                aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        </div>
                    </div>
                    <h3 class="mt-3 text-sm font-montserrat font-semibold text-gray-600 px-3 h-11 text-center">Adaya
                        Asscher Solitaire Engagement Ring</h3>
                </a>
                <div class="flex flex-row items-center justify-center gap-2">
                    <p class="text-gray-500 font-montserrat text-sm line-through">$2,999</p>
                    <p class="text-gray-800 font-montserrat font-semibold text-sm">$2,499</p>
                </div>
            </div>
        </div>

        {{-- Style Script --}}


        {{-- Diamond Shape --}}
        <script>
            const shapeIcon = document.getElementById('shapeDropdownIcon');
            const shapeDropdown = document.getElementById('shapeDropdown');

            shapeIcon.addEventListener('click', () => {
                shapeDropdown.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (e) => {
                if (!shapeIcon.contains(e.target) && !shapeDropdown.contains(e.target)) {
                    shapeDropdown.classList.add('hidden');
                }
            });
        </script>

        {{-- Price Filter --}}
        <script>
            const priceIcon = document.getElementById('priceDropdownIcon');
            const priceDropdown = document.getElementById('priceDropdown');
            const minPrice = document.getElementById('minPrice');
            const maxPrice = document.getElementById('maxPrice');
            const minPriceRange = document.getElementById('min-price-range');
            const maxPriceRange = document.getElementById('max-price-range');
            const rangeSelected = document.getElementById('range-selected');

            minPriceRange.addEventListener('input', () => {
                minPrice.textContent = minPriceRange.value;
                updateRangeSelected();
            });

            maxPriceRange.addEventListener('input', () => {
                maxPrice.textContent = maxPriceRange.value;
                updateRangeSelected();
            });

            function updateRangeSelected() {
                const minVal = minPriceRange.value;
                const maxVal = maxPriceRange.value;
                rangeSelected.style.left = `${minVal}%`;
                rangeSelected.style.right = `${100 - maxVal}%`;
            }

            priceIcon.addEventListener('click', () => {
                priceDropdown.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (e) => {
                if (!priceIcon.contains(e.target) && !priceDropdown.contains(e.target)) {
                    priceDropdown.classList.add('hidden');
                }
            });

            updateRangeSelected();
        </script>

        {{-- Sort By --}}
        <script>
            const sortIcon = document.getElementById('sortDropdownIcon');
            const sortDropdown = document.getElementById('sortDropdown');

            sortIcon.addEventListener('click', () => {
                sortDropdown.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (e) => {
                if (!sortIcon.contains(e.target) && !sortDropdown.contains(e.target)) {
                    sortDropdown.classList.add('hidden');
                }
            });
        </script>

        {{-- Product Image Slider --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const carousel = document.getElementById('default-carousel');
                const items = carousel.querySelectorAll('[data-carousel-item]');
                const indicators = carousel.querySelectorAll('[data-carousel-slide-to]');
                const indicatorsContainer = document.getElementById('carousel-indicators');
                let currentIndex = 0;
                let interval;
                let isHovered = false;

                // Show only first slide initially
                showSlide(0);

                // Show carousel controls and start autoplay only on hover
                carousel.addEventListener('mouseenter', () => {
                    isHovered = true;
                    indicatorsContainer.style.opacity = '1';
                    startAutoPlay();
                });

                carousel.addEventListener('mouseleave', () => {
                    isHovered = false;
                    indicatorsContainer.style.opacity = '0';
                    clearInterval(interval);
                    // Reset to first slide when mouse leaves
                    currentIndex = 0;
                    showSlide(0);
                });

                // Indicator clicks
                indicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', () => {
                        if (isHovered) {
                            currentIndex = index;
                            showSlide(currentIndex);
                            resetAutoPlay();
                        }
                    });
                });

                function showSlide(index) {
                    items.forEach((item, i) => {
                        if (i === index) {
                            item.classList.remove('hidden');
                            item.classList.add('opacity-100');
                            indicators[i].classList.add('bg-white');
                            indicators[i].classList.remove('bg-gray-300');
                        } else {
                            item.classList.add('hidden');
                            item.classList.remove('opacity-100');
                            indicators[i].classList.remove('bg-white');
                            indicators[i].classList.add('bg-gray-300');
                        }
                        indicators[i].setAttribute('aria-current', i === index);
                    });
                }

                function startAutoPlay() {
                    interval = setInterval(() => {
                        if (isHovered) {
                            currentIndex = (currentIndex + 1) % items.length;
                            showSlide(currentIndex);
                        }
                    }, 1300); // Change slide every 3 seconds while hovered
                }

                function resetAutoPlay() {
                    clearInterval(interval);
                    startAutoPlay();
                }
            });
        </script>
    @endsection

<style>
.clip-path-arrow-left {
    clip-path: polygon(0 0, 100% 50%, 0 100%);
}
</style>
