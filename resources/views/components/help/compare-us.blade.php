@extends('layouts.master')

@section('content')
    <div class="min-h-screen bg-white pt-12 pb-0">
        <div class="max-w-7xl mx-auto lg:px-36">
            <div class="flex flex-col">
                <div class="flex flex-col items-center text-center space-y-4">
                    <h3 class="text-5xl font-semibold text-gray-900 font-montserrat">How do we compare?</h3>
                    <img src="/images/banner-3.webp" alt="Lab Grown Diamonds" class="w-full h-auto object-cover rounded-lg">
                    <p class="text-gray-600 font-montserrat px-40">
                        Loose Grown Diamond delivers the very best value. We believe we can make a difference by more carats
                        and less prices.
                    </p>
                </div>
            </div>

        </div>
        <div class="w-full mx-auto">
            <div class="bg-light-pink">
                <div class="flex flex-col justify-center items-center py-12">
                    <h3 class="text-6xl font-semibold text-gray-900 font-montserrat">Comparing Price</h3>
                    <p class="text-3xl font-semibold w-2/3 text-center py-4 font-montserrat px-40">
                        1.50 ct round stone in F color and VS2 clarity and minimum very good cut grade.
                    </p>
                    <div class="flex justify-center w-full px-20 mt-8">
                        <table class="mx-auto border-collapse">
                            <thead class="flex flex-row">
                                <tr class="bg-light-pink">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 p-8 text-sm font-normal font-montserrat h-40 w-40">
                                        <svg version="1.1" id="Layer_1" width="44" height="30"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" viewBox="0 0 44 30" style="enable-background:new 0 0 44 30;"
                                            xml:space="preserve">
                                            <style type="text/css">
                                                .st0 {
                                                    fill: #231F20;
                                                }
                                            </style>
                                            <g>
                                                <g>
                                                    <path class="st0"
                                                        d="M22.03,30L2.24,10.2L12.44,0h19.28l10.05,10.05l-4.69,4.69l-1.82-1.82l2.87-2.87l-7.47-7.47H13.51L5.88,10.2    l16.15,16.15l8.57-8.57l-6.7-6.7l0,0c1.01-1.01,2.64-1.01,3.65,0l6.7,6.7L22.03,30z" />
                                                </g>
                                                <g>
                                                    <path class="st0"
                                                        d="M21.85,22.63L10.17,10.96L12,9.13l9.85,9.85l3.5-3.5l0,0c1.01,1.01,1.01,2.64,0,3.65L21.85,22.63z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <p>Lab Grown Diamond</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">Clean Origin</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">Miadonna</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">Ritani</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">1215 Diamonds</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">Brilliant Earth</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">James Allen</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">With Clarity</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="flex flex-row">
                                    <td
                                        class="border border-black p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-black text-white">
                                        $2,814.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $3,000.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $4,568.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $3,237.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $3,407.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $4,230.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $4,630.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $3,276.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="border-t border-gray-200 my-4 mx-40"></div>

                <div class="flex flex-col justify-center items-center py-12">
                    <p class="text-3xl font-semibold w-2/3 text-center py-4 font-montserrat px-40">
                        2.00 ct round stone in H color and VS1 clarity and minimum very good cut grade.
                    </p>
                    <p class="text-sm font-normal w-2/3 text-center py-3 font-montserrat px-40">
                        (Miadonna Price stands for 2.01 ct stone)
                    </p>
                    <div class="flex justify-center w-full px-20 mt-4">
                        <table class="mx-auto border-collapse">
                            <thead class="flex flex-row">
                                <tr class="bg-light-pink">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 p-8 text-sm font-normal font-montserrat h-40 w-40">
                                        <svg version="1.1" id="Layer_1" width="44" height="30"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" viewBox="0 0 44 30" style="enable-background:new 0 0 44 30;"
                                            xml:space="preserve">
                                            <style type="text/css">
                                                .st0 {
                                                    fill: #231F20;
                                                }
                                            </style>
                                            <g>
                                                <g>
                                                    <path class="st0"
                                                        d="M22.03,30L2.24,10.2L12.44,0h19.28l10.05,10.05l-4.69,4.69l-1.82-1.82l2.87-2.87l-7.47-7.47H13.51L5.88,10.2    l16.15,16.15l8.57-8.57l-6.7-6.7l0,0c1.01-1.01,2.64-1.01,3.65,0l6.7,6.7L22.03,30z" />
                                                </g>
                                                <g>
                                                    <path class="st0"
                                                        d="M21.85,22.63L10.17,10.96L12,9.13l9.85,9.85l3.5-3.5l0,0c1.01,1.01,1.01,2.64,0,3.65L21.85,22.63z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <p>Lab Grown Diamond</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">Clean Origin</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">Miadonna</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">Ritani</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">1215 Diamonds</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">Brilliant Earth</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">James Allen</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                                <tr class="flex flex-row">
                                    <th
                                        class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">With Clarity</h5>
                                        <p class="px-8">Lab Grown Diamonds</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="flex flex-row">
                                    <td
                                        class="border border-black p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-black text-white">
                                        $4,060.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $4,783.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $7,857.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $6,095.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $6,573.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $5,790.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $5,470.00</td>
                                    <td
                                        class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                        $6,922.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-sm font-normal text-start py-7 font-montserrat px-40">
                        Prices shown are for round, lab-created diamonds listed on LooseGrownDiamond.com for specified
                        characteristics vs. lowest priced round lab-created diamonds (as noted) listed on competitors’
                        websites as of July 5, 2021.
                    </p>
                    <div class="flex flex-row justify-between items-start px-40 py-10">
                        <div class="w-1/3">
                            <h2 class="text-6xl text-gray-800 leading-none font-semibold font-montserrat mb-6">So, why is
                                our pricing so amazing?</h2>
                        </div>
                        <div class="w-2/3 space-y-6">
                            <p class="text-sm font-normal font-montserrat">
                                We have over 40+ years of diamond jewelry experience. We are diamond manufacturers. We
                                believe we can make a difference by giving more carats at less prices.
                            </p>
                            <p class="text-sm font-normal font-montserrat">
                                The diamond jewelry industry is a global business with ethical and environmental impact
                                around the world. The folks at Loose Grown Diamond believe that we, as consumers, have an
                                obligation to consider this impact when purchasing any diamond.
                            </p>
                            <p class="text-sm font-normal font-montserrat">
                                By using 100% lab-grown diamonds in all of our product we ensure that your purchase is 100%
                                conflict free giving you the choice to make a difference!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center py-12">
                <h3 class="text-5xl font-semibold text-gray-900 font-montserrat">Comparing Sourcing</h3>
                <p class="text-2xl font-semibold w-2/3 text-center py-4 font-montserrat px-40">
                    100% Conflict Free vs Ethically Sourced
                </p>
                <div class="flex justify-center w-full px-20 mt-8">
                    <table class="mx-auto border-collapse">
                        <thead class="flex flex-row">
                            <tr class="bg-light-pink">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 p-8 text-sm font-normal font-montserrat h-40 w-40">
                                    <svg version="1.1" id="Layer_1" width="44" height="30"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 44 30" style="enable-background:new 0 0 44 30;"
                                        xml:space="preserve">
                                        <style type="text/css">
                                            .st0 {
                                                fill: #231F20;
                                            }
                                        </style>
                                        <g>
                                            <g>
                                                <path class="st0"
                                                    d="M22.03,30L2.24,10.2L12.44,0h19.28l10.05,10.05l-4.69,4.69l-1.82-1.82l2.87-2.87l-7.47-7.47H13.51L5.88,10.2    l16.15,16.15l8.57-8.57l-6.7-6.7l0,0c1.01-1.01,2.64-1.01,3.65,0l6.7,6.7L22.03,30z" />
                                            </g>
                                            <g>
                                                <path class="st0"
                                                    d="M21.85,22.63L10.17,10.96L12,9.13l9.85,9.85l3.5-3.5l0,0c1.01,1.01,1.01,2.64,0,3.65L21.85,22.63z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <p>Lab Grown Diamond</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">Brilliant Earth</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">Miadonna</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">ADA Diamonds</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">Blue Nile</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">Brilliant Earth</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">James Allen</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">Ritani</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="flex flex-row">
                                <td
                                    class="border border-black p-4 flex justify-center items-center text-sm font-semibold text-center font-montserrat h-16 w-40 bg-black text-white">
                                    100% Conflict Free</td>
                                <td
                                    class="border border-gray-300 p-4 flex justify-center items-center text-sm font-semibold text-center font-montserrat h-16 w-40 bg-white">
                                    100% Conflict Free</td>
                                <td
                                    class="border border-gray-300 p-4 flex justify-center items-center text-sm font-semibold text-center font-montserrat h-16 w-40 bg-white">
                                    100% Conflict Free</td>
                                <td
                                    class="border border-gray-300 p-4 flex justify-center items-center text-sm font-semibold text-center font-montserrat h-16 w-40 bg-white">
                                    100% Conflict Free</td>
                                <td
                                    class="border border-gray-300 p-4 flex justify-center items-center text-sm font-semibold text-center font-montserrat h-16 w-40 bg-white">
                                    100% Conflict Free</td>
                                <td
                                    class="border border-gray-300 p-4 flex justify-center items-center text-sm font-semibold text-center font-montserrat h-16 w-40 bg-white">
                                    100% Conflict Free</td>
                                <td
                                    class="border border-gray-300 p-4 flex justify-center items-center text-sm font-semibold text-center font-montserrat h-16 w-40 bg-white">
                                    100% Conflict Free</td>
                                <td
                                    class="border border-gray-300 p-4 flex justify-center items-center text-sm font-semibold text-center font-montserrat h-16 w-40 bg-white">
                                    100% Conflict Free</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-sm font-normal font-montserrat px-40 py-7">
                    LGD diamonds are guaranteed conflict free, because our diamonds are created in a lab and are
                    independently verified as lab-created diamonds so that we can certify that they are guaranteed to not
                    fund conflict. We provide IGI/GIA Certificate for each lab created diamond.
                </p>
            </div>
            <div class=" bg-light-pink py-12">
                <div class="flex flex-col justify-center items-center">
                    <h3 class="text-6xl font-semibold text-gray-900 font-montserrat">Comparing Return Policies</h3>
                    <p class="text-3xl font-semibold text-gray-900 w-2/3 text-center py-4 font-montserrat px-20">
                        Loose Grown Diamond return windows vs competitors.
                    </p>
                </div>
                <div class="flex justify-center w-full px-20 mt-8">
                    <table class="mx-auto border-collapse">
                        <thead class="flex flex-row">
                            <tr class="bg-light-pink">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 p-8 text-sm font-normal font-montserrat h-40 w-40">
                                    <svg version="1.1" id="Layer_1" width="44" height="30"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 44 30" style="enable-background:new 0 0 44 30;"
                                        xml:space="preserve">
                                        <style type="text/css">
                                            .st0 {
                                                fill: #231F20;
                                            }
                                        </style>
                                        <g>
                                            <g>
                                                <path class="st0"
                                                    d="M22.03,30L2.24,10.2L12.44,0h19.28l10.05,10.05l-4.69,4.69l-1.82-1.82l2.87-2.87l-7.47-7.47H13.51L5.88,10.2    l16.15,16.15l8.57-8.57l-6.7-6.7l0,0c1.01-1.01,2.64-1.01,3.65,0l6.7,6.7L22.03,30z" />
                                            </g>
                                            <g>
                                                <path class="st0"
                                                    d="M21.85,22.63L10.17,10.96L12,9.13l9.85,9.85l3.5-3.5l0,0c1.01,1.01,1.01,2.64,0,3.65L21.85,22.63z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <p>Lab Grown Diamond</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">Clean Origin</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">Miadonna</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">Ritani</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">1215 Diamonds</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">Brilliant Earth</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">James Allen</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                            <tr class="flex flex-row">
                                <th
                                    class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">With Clarity</h5>
                                    <p class="px-8">Lab Grown Diamonds</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="flex flex-row">
                                <td
                                    class="border border-black p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-black text-white">
                                    7 Days</td>
                                <td
                                    class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                    100 Days</td>
                                <td
                                    class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                    30 Days</td>
                                <td
                                    class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                    30 Days</td>
                                <td
                                    class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                    30 Days</td>
                                <td
                                    class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                    30 Days</td>
                                <td
                                    class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                    30 Days</td>
                                <td
                                    class="border border-gray-300 p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-white">
                                    30 Days</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-col justify-start items-start py-7">
                    <p class="text-gray-600 text-13px font-normal font-montserrat px-40 text-start">
                        1. Day counting starts once you receive the product.
                    </p>
                    <p class="text-gray-600 text-13px font-normal font-montserrat px-40 mb-2 text-start">
                        Return policies as posted as of July 5, 2021.
                    </p>
                    <p class="text-gray-600 text-13px font-normal font-montserrat px-40 mb-2 text-start">
                        As we are both diamond manufacturers and sellers it should be noted that we in no way include any
                        extra charges to our final prices, like 'middle-men fee'. Something which is commonly billed when
                        purchasing from a diamond retailer. With a minimal profit margin we are giving you the best quality
                        diamonds as swiftly as we can, hence we keep a 7-day return policy to ensure maximum efficiency for
                        all our customers.
                    </p>
                    <p class="text-gray-600 text-13px font-normal font-montserrat px-40 text-start">
                        Many times 3-4 customers end up liking the same diamond/diamond jewelry, if we sell it to someone
                        and they want to return it within 7-days we are then able to sell that diamond to another interested
                        buyer. This helps us maintain the market balance.
                    </p>
                </div>
            </div>
            <div class="relative flex justify-center items-center py-12 px-40">
                <h2 class="absolute text-5xl leading-10 font-semibold text-gray-900 font-montserrat top-24">
                    Create your own ring
                </h2>
                <!-- First Column -->
                <div class="w-1/2 bg-light-grey-1 p-8 flex flex-col items-center pt-24">
                    <img src="/images/diamond-2.webp" alt="Lab Grown Diamond" class="w-64 h-64 object-cover mb-6">
                    <p class="text-sm w-2/3 font-montserrat text-gray-600 text-center mb-6">
                        Configure the perfect engagement ring the purest way with our lab-grown diamonds.
                    </p>
                    <button class="bg-black text-white font-montserrat font-semibold hover:font-semibold tracking-wide py-3 px-10 rounded-sm hover:bg-white hover:text-black border border-black hover:border-black transition-all duration-300 uppercase">
                        Start With A Diamond
                    </button>
                </div>

                <!-- Second Column -->
                <div class="w-1/2 bg-light-grey-2 p-8 flex flex-col items-center pt-24">
                    <img src="/images/ring-2.webp" alt="Natural Diamond" class="w-64 h-64 object-cover mb-6">
                    <p class="text-sm w-2/3 font-montserrat text-gray-600 text-center mb-6">
                        Start with the ring design that suits your partner the best.
                    </p>
                    <button class="bg-black text-white font-montserrat font-semibold hover:font-semibold tracking-wide py-3 px-10 rounded-sm hover:bg-white hover:text-black border border-black hover:border-black transition-all duration-300 uppercase">
                        Start With A Setting
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
