@extends('layouts.master')

@section('content')
    <div class="min-h-screen bg-white pt-12 pb-0">
        <div class="max-w-7xl mx-auto lg:px-36 px-4">
            <div class="flex flex-col">
                <div class="flex flex-col items-center text-center space-y-4">
                    <h3 class="text-3xl lg:text-5xl font-semibold text-gray-900 font-montserrat">How do we compare?</h3>
                    <img src="/images/banner-3.webp" alt="Roaya Diamonds" class="w-full h-auto object-cover rounded-lg">
                    <p class="text-gray-600 font-montserrat px-4 md:px-40">
                        Roaya Diamonds delivers the very best value. We believe we can make a difference by more carats
                        and less prices.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full mx-auto">
            <div class="bg-light-pink">
                <div class="flex flex-col justify-center items-center py-12">
                    <h3 class="text-3xl lg:text-5xl font-semibold text-gray-900 font-montserrat">Comparing Price</h3>
                    <p class="text-xl lg:text-3xl font-semibold lg:w-2/3 text-center py-4 font-montserrat px-4 md:px-40">
                        1.50 ct round stone in F color and VS2 clarity and minimum very good cut grade.
                    </p>
                    <div class="flex justify-center w-full px-4 md:px-20 mt-8">
                        <div class="overflow-x-auto">
                            <table class="mx-auto border-collapse">
                                <thead class="flex flex-row">
                                    <tr class="bg-light-pink">
                                        <th class="flex flex-col justify-between items-center border border-gray-300 p-4 text-sm font-normal font-montserrat h-40 w-40">
                                            <img src="/images/roaya-black.svg" alt="Lab Grown Diamond" class="h-12 object-cover mb-6">
                                            <p>Roaya Diamond</p>
                                        </th>
                                    </tr>
                                    @foreach(['Clean Origin', 'Miadonna', 'Ritani', '1215 Diamonds', 'Brilliant Earth', 'James Allen', 'With Clarity'] as $brand)
                                    <tr class="flex flex-row">
                                        <th class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                            <h5 class="font-bold uppercase">{{ $brand }}</h5>
                                            <p class="px-8">Roaya Diamonds</p>
                                        </th>
                                    </tr>
                                    @endforeach
                                </thead>
                                <tbody>
                                    <tr class="flex flex-row">
                                        @foreach([2814.00, 3000.00, 4568.00, 3237.00, 3407.00, 4230.00, 4630.00, 3276.00] as $price)
                                        <td class="border border-black p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-black text-white">
                                            ${{ number_format($price, 2) }}</td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-200 my-2 lg:my-4 mx-4 md:mx-40"></div>

                <div class="flex flex-col justify-center items-center py-8 lg:py-12">
                    <p class="text-xl lg:text-3xl font-semibold lg:w-2/3 text-center py-4 font-montserrat px-4 md:px-40">
                        2.00 ct round stone in H color and VS1 clarity and minimum very good cut grade.
                    </p>
                    <p class="text-sm font-normal w-2/3 text-center py-3 font-montserrat px-4 md:px-40">
                        (Miadonna Price stands for 2.01 ct stone)
                    </p>
                    <div class="flex justify-center w-full px-4 md:px-20 mt-4">
                        <div class="overflow-x-auto">
                        <table class="mx-auto border-collapse">
                            <thead class="flex flex-row">
                                <tr class="bg-light-pink">
                                    <th class="flex flex-col justify-between items-center border border-gray-300 p-4 text-sm font-normal font-montserrat h-40 w-40">
                                        <img src="/images/roaya-black.svg" alt="Roaya Diamonds" class="h-12 object-cover mb-6">
                                        <p>Roaya Diamonds</p>
                                    </th>
                                </tr>
                                @foreach(['Clean Origin', 'Miadonna', 'Ritani', '1215 Diamonds', 'Brilliant Earth', 'James Allen', 'With Clarity'] as $brand)
                                <tr class="flex flex-row">
                                    <th class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                        <h5 class="font-bold uppercase">{{ $brand }}</h5>
                                        <p class="px-8">Roaya Diamonds</p>
                                    </th>
                                </tr>
                                @endforeach
                            </thead>
                            <tbody>
                                <tr class="flex flex-row">
                                    @foreach([4060.00, 4783.00, 7857.00, 6095.00, 6573.00, 5790.00, 5470.00, 6922.00] as $price)
                                    <td class="border border-black p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-black text-white">
                                        ${{ number_format($price, 2) }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <p class="text-sm font-normal text-start py-7 font-montserrat px-4 md:px-20 xl:px-40">
                        Prices shown are for round, lab-created diamonds listed on roayadiamond.com for specified
                        characteristics vs. lowest priced round lab-created diamonds (as noted) listed on competitors’
                        websites as of July 5, 2021.
                    </p>
                    <div class="flex flex-col md:flex-row justify-between items-start px-4 md:px-20 xl:px-40 py-10">
                        <div class="w-full md:w-1/3">
                            <h2 class="text-3xl lg:text-5xl text-gray-800 leading-none font-semibold font-montserrat mb-6">So, why is
                                our pricing so amazing?</h2>
                        </div>
                        <div class="w-full md:w-2/3 space-y-6">
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
            <div class="flex flex-col justify-center items-center py-8 lg:py-12">
                <h3 class="text-2xl lg:text-5xl font-semibold text-gray-900 font-montserrat">Comparing Sourcing</h3>
                <p class="text-xl lg:text-2xl font-semibold lg:w-2/3 text-center py-4 font-montserrat px-4 md:px-40">
                    100% Conflict Free vs Ethically Sourced
                </p>
                <div class="flex justify-center w-full px-4 md:px-20 mt-8">
                    <div class="overflow-x-auto">
                    <table class="mx-auto border-collapse">
                        <thead class="flex flex-row">
                            <tr class="bg-light-pink">
                                <th class="flex flex-col justify-between items-center border border-gray-300 p-4 text-sm font-normal font-montserrat h-40 w-40">
                                    <img src="/images/roaya-black.svg" alt="Roaya Diamonds" class="h-12 object-cover mb-6">
                                    <p>Roaya Diamonds</p>
                                </th>
                            </tr>
                            @foreach(['Brilliant Earth', 'Miadonna', 'ADA Diamonds', 'Blue Nile', 'Brilliant Earth', 'James Allen', 'Ritani'] as $brand)
                            <tr class="flex flex-row">
                                <th class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">{{ $brand }}</h5>
                                    <p class="px-8">Roaya Diamonds</p>
                                </th>
                            </tr>
                            @endforeach
                        </thead>
                        <tbody>
                            <tr class="flex flex-row">
                                @foreach(['100% Conflict Free', '100% Conflict Free', '100% Conflict Free', '100% Conflict Free', '100% Conflict Free', '100% Conflict Free', '100% Conflict Free', '100% Conflict Free'] as $status)
                                <td class="border border-black p-4 flex justify-center items-center text-sm font-semibold text-center font-montserrat h-16 w-40 bg-black text-white">
                                    {{ $status }}</td>
                                @endforeach
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
                <p class="text-sm font-normal font-montserrat px-4 md:px-20 xl:px-40 py-7">
                    LGD diamonds are guaranteed conflict free, because our diamonds are created in a lab and are
                    independently verified as lab-created diamonds so that we can certify that they are guaranteed to not
                    fund conflict. We provide IGI/GIA Certificate for each lab created diamond.
                </p>
            </div>
            <div class="bg-light-pink py-12">
                <div class="flex flex-col justify-center items-center">
                    <h3 class="text-2xl text-center lg:text-left lg:text-6xl font-semibold text-gray-900 font-montserrat">Comparing Return Policies</h3>
                    <p class="text-xl lg:text-2xl font-semibold text-gray-900 lg:w-2/3 text-center py-4 font-montserrat px-4 md:px-20">
                        Roaya Diamonds return windows vs competitors.
                    </p>
                </div>
                <div class="flex justify-center w-full px-4 md:px-20 mt-8">
                    <div class="overflow-x-auto">
                    <table class="mx-auto border-collapse">
                        <thead class="flex flex-row">
                            <tr class="bg-light-pink">
                                <th class="flex flex-col justify-between items-center border border-gray-300 p-4 text-sm font-normal font-montserrat h-40 w-40">
                                    <img src="/images/roaya-black.svg" alt="Roaya Diamonds" class="h-12 object-cover mb-6">
                                    <p>Roaya Diamonds</p>
                                </th>
                            </tr>
                            @foreach(['Clean Origin', 'Miadonna', 'Ritani', '1215 Diamonds', 'Brilliant Earth', 'James Allen', 'With Clarity'] as $brand)
                            <tr class="flex flex-row">
                                <th class="flex flex-col justify-between items-center border border-gray-300 py-10 text-sm font-normal font-montserrat h-40 w-40 bg-white">
                                    <h5 class="font-bold uppercase">{{ $brand }}</h5>
                                    <p class="px-8">Roaya Diamonds</p>
                                </th>
                            </tr>
                            @endforeach
                        </thead>
                        <tbody>
                            <tr class="flex flex-row">
                                @foreach(['7 Days', '100 Days', '30 Days', '30 Days', '30 Days', '30 Days', '30 Days', '30 Days'] as $policy)
                                <td class="border border-black p-4 text-sm font-semibold text-center font-montserrat h-12 w-40 bg-black text-white">
                                    {{ $policy }}</td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex flex-col justify-start items-start py-7">
                    <p class="text-gray-600 text-sm font-normal font-montserrat px-4 md:px-20 xl:px-40 text-start">
                        1. Day counting starts once you receive the product.
                    </p>
                    <p class="text-gray-600 text-sm font-normal font-montserrat px-4 md:px-20 xl:px-40 mb-2 text-start">
                        Return policies as posted as of July 5, 2021.
                    </p>
                    <p class="text-gray-600 text-sm font-normal font-montserrat px-4 md:px-20 xl:px-40 mb-2 text-start">
                        As we are both diamond manufacturers and sellers it should be noted that we in no way include any
                        extra charges to our final prices, like 'middle-men fee'. Something which is commonly billed when
                        purchasing from a diamond retailer. With a minimal profit margin we are giving you the best quality
                        diamonds as swiftly as we can, hence we keep a 7-day return policy to ensure maximum efficiency for
                        all our customers.
                    </p>
                    <p class="text-gray-600 text-sm font-normal font-montserrat px-4 md:px-20 xl:px-40 text-start">
                        Many times 3-4 customers end up liking the same diamond/diamond jewelry, if we sell it to someone
                        and they want to return it within 7-days we are then able to sell that diamond to another interested
                        buyer. This helps us maintain the market balance.
                    </p>
                </div>
            </div>
            <div class="relative flex flex-col md:flex-row justify-center items-center py-12 px-4 md:px-16 lg:px-40">
                <h2 class="md:absolute text-2xl text-center lg:text-5xl leading-10 font-semibold text-gray-900 font-montserrat top-24">
                    Create your own ring
                </h2>
                <!-- First Column -->
                <div class="w-full md:w-1/2 bg-light-grey-1 p-8 flex flex-col items-center pt-24">
                    <img src="/images/diamond-2.webp" alt="Lab Grown Diamond" class="w-60 h-60 lg:w-64 lg:h-64 object-cover mb-6">
                    <p class="text-sm lg:w-2/3 h-16 font-montserrat text-gray-600 text-center mb-6">
                        Configure the perfect engagement ring the purest way with our lab-grown diamonds.
                    </p>
                    <button class="bg-black text-white text-sm lg:text-lg font-montserrat font-semibold hover:font-semibold tracking-wide py-3 px-10 rounded-sm hover:bg-white hover:text-black border border-black hover:border-black transition-all duration-300 uppercase">
                        Start With A Diamond
                    </button>
                </div>

                <!-- Second Column -->
                <div class="w-full md:w-1/2 bg-light-grey-2 p-8 flex flex-col items-center pt-24">
                    <img src="/images/ring-2.webp" alt="Natural Diamond" class="w-60 h-60 lg:w-64 lg:h-64 object-cover mb-6">
                    <p class="text-sm lg:w-2/3 h-16 font-montserrat text-gray-600 text-center mb-6">
                        Start with the ring design that suits your partner the best.
                    </p>
                    <button class="bg-black text-white text-sm lg:text-lg font-montserrat font-semibold hover:font-semibold tracking-wide py-3 px-10 rounded-sm hover:bg-white hover:text-black border border-black hover:border-black transition-all duration-300 uppercase">
                        Start With A Setting
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
