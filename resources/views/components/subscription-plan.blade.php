@extends('layouts.master')

@section('content')
    <section class="bg-white dark:bg-primary">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-primary dark:text-white">Roaya Diamond Membership
                </h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Join our exclusive membership program
                    to enjoy premium benefits, special access, and exceptional services.</p>
            </div>

            <!-- Billing Toggle -->
            <div class="flex justify-center mb-8">
                <div class="relative inline-flex">
                    <input type="checkbox" id="billing-toggle" class="hidden billing-toggle">
                    <label for="billing-toggle" class="flex items-center cursor-pointer">
                        <span class="mr-4 text-sm font-medium text-gray-900 dark:text-gray-300 monthly-label">Monthly</span>
                        <div class="relative">
                            <div class="w-14 h-7 bg-gray-200 rounded-full shadow-inner"></div>
                            <div
                                class="toggle-dot absolute w-6 h-6 bg-white rounded-full shadow-md top-0.5 left-0.5 transition-transform duration-300 ease-in-out">
                            </div>
                        </div>
                        <span class="ml-4 text-sm font-medium text-gray-900 dark:text-gray-300 yearly-label">Yearly <span
                                class="text-xs text-green-500">(Save 20%)</span></span>
                    </label>
                </div>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                <!-- Subscription Plan -->
                @foreach ($subscriptionPlan as $plan)
                    <div
                        class="flex flex-col p-6 mx-auto max-w-lg text-center text-primary bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                        <h3 class="mb-4 text-2xl font-semibold">{{ $plan->name }} Member</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">{{ $plan->description }}</p>
                        <div class="flex justify-center items-baseline my-8">
                            <span class="mr-2 text-4xl font-extrabold price-display"
                                data-monthly="{{ $plan->monthly_price }}" data-yearly="{{ $plan->yearly_price }}">
                                ${{ number_format($plan->yearly_price, 2) }}
                            </span>
                            <span class="text-gray-500 dark:text-gray-400 cycle-text">/year</span>
                        </div>
                        <ul role="list" class="mb-8 space-y-4 text-left">
                            @foreach (json_decode($plan->features) as $feature)
                                <li class="flex items-center space-x-3">
                                    <img src="{{ asset('Svg/Right.svg') }}" width="20" height="20" alt="Right" class="flex-shrink-0">
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <form action="{{ route('subscription.checkout') }}" method="POST">
                            @csrf
                            <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                            <input type="hidden" name="billing_cycle" value="yearly" class="billing-cycle-input">
                            <button type="submit"
                                class="mt-4 text-white bg-black hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">BUY
                                NOW</button>
                        </form>
                    </div>
                @endforeach

            </div>
            <div class="flex justify-center space-x-4 mt-8">
                <a href="#"
                    class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white dark:focus:ring-primary-900">Compare
                    Benefits</a>
                <a href="#"
                    class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white dark:focus:ring-primary-900">View
                    FAQ</a>
                <a href="#"
                    class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white dark:focus:ring-primary-900">Contact
                    Support</a>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const billingToggle = document.getElementById('billing-toggle');
            const billingCycleInputs = document.querySelectorAll('.billing-cycle-input');
            const priceDisplays = document.querySelectorAll('.price-display');
            const cycleTexts = document.querySelectorAll('.cycle-text');
            const toggleDot = document.querySelector('.toggle-dot');
            const monthlyLabel = document.querySelector('.monthly-label');
            const yearlyLabel = document.querySelector('.yearly-label');
            
            // Function to update prices and inputs based on toggle state
            function updatePricing() {
                const isYearly = !billingToggle.checked;
                const cycleType = isYearly ? 'yearly' : 'monthly';
                const cycleText = isYearly ? '/year' : '/month';
                
                // Update all billing cycle inputs
                billingCycleInputs.forEach(input => {
                    input.value = cycleType;
                });
                
                // Update prices
                priceDisplays.forEach((element) => {
                    const monthlyPrice = element.getAttribute('data-monthly');
                    const yearlyPrice = element.getAttribute('data-yearly');
                    const price = isYearly ? yearlyPrice : monthlyPrice;
                    
                    // Update price display
                    element.textContent = '$' + parseFloat(price).toFixed(2);
                });
                
                // Update cycle text
                cycleTexts.forEach((element) => {
                    element.textContent = cycleText;
                });
                
                // Toggle dot position for visual feedback
                if (isYearly) {
                    toggleDot.style.transform = 'translateX(28px)';
                    monthlyLabel.classList.remove('font-bold');
                    yearlyLabel.classList.add('font-bold');
                } else {
                    toggleDot.style.transform = 'translateX(0)';
                    monthlyLabel.classList.add('font-bold');
                    yearlyLabel.classList.remove('font-bold');
                }
            }
            
            // Set initial state to yearly by default
            billingToggle.checked = false;
            
            // Initialize with correct state
            updatePricing();
            
            // Update on toggle change
            billingToggle.addEventListener('change', updatePricing);
        });
    </script>
@endsection