<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto space-y-8">
        <!-- Status Banner -->
        <div class="{{ $subscriptions->contains(fn($sub) => $sub->isActive()) ? 'bg-green-100 border-green-500' : 'bg-red-100 border-red-500' }} border-l-4 p-4 mb-4">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 {{ $subscriptions->contains(fn($sub) => $sub->isActive()) ? 'text-green-500' : 'text-red-500' }}" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm {{ $subscriptions->contains(fn($sub) => $sub->isActive()) ? 'text-green-700' : 'text-red-700' }}">
                        @if($subscriptions->contains(fn($sub) => $sub->isActive()))
                            You have an active subscription.
                        @else
                            You don't have any active subscriptions.
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <!-- Subscription Cards -->
        @if($subscriptions->isNotEmpty())
            @foreach($subscriptions as $subscription)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-purple-600 to-indigo-800 px-6 py-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-primary text-sm uppercase tracking-wider">Subscription Plan</span>
                            <h2 class="text-2xl font-bold text-grey mt-1">{{ ucfirst($subscription->plan_name ?? 'Basic') }} {{ ucfirst($subscription->plan_type ?? 'Monthly') }}</h2>
                        </div>
                        <span class="px-4 py-2 rounded-full bg-white text-indigo-800 font-semibold text-sm">
                            {{ $subscription->isActive() ? 'Active' : ($subscription->isCanceled() ? 'Canceled' : 'Inactive') }}
                        </span>
                    </div>
                </div>

                <div class="p-6">
                    <!-- Purchase Summary -->
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-4">
                            <div class="flex flex-col">
                                <span class="text-sm text-gray-500">Customer ID</span>
                                <span class="text-lg text-gray-800">#CUST-{{ $customer->id }}</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm text-gray-500">Start Date</span>
                                <span class="text-lg text-gray-800">{{ $subscription->current_period_start->format('M d, Y') }}</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm text-gray-500">End Date</span>
                                <span class="text-lg text-gray-800">{{ $subscription->current_period_end->format('M d, Y') }}</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm text-gray-500">Billing Cycle</span>
                                <span class="text-lg text-gray-800">{{ ucfirst($subscription->billing_cycle ?? 'Monthly') }}</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm text-gray-500">Total Amount</span>
                                <span class="text-2xl font-bold text-indigo-600">${{ number_format($subscription->amount, 2) }}</span>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-xl p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Plan Benefits</h3>
                            <ul class="space-y-3">
                                @if($subscription->benefits && is_array($subscription->benefits) && count($subscription->benefits) > 0)
                                    @foreach($subscription->benefits as $benefit)
                                    <li class="flex items-center">
                                        <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-indigo-100 text-indigo-600">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </span>
                                        <span class="ml-3 text-gray-700">{{ $benefit }}</span>
                                    </li>
                                    @endforeach
                                @else
                                    <li class="flex items-center">
                                        <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-indigo-100 text-indigo-600">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </span>
                                        <span class="ml-3 text-gray-700">No benefits available</span>
                                    </li>
                                @endif
                                <li class="flex items-center">
                                    <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-indigo-100 text-indigo-600">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </span>
                                    <span class="ml-3 text-gray-700">Valid until {{ $subscription->current_period_end->format('M d, Y') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 flex flex-col sm:flex-row justify-between items-center gap-4">
                        <button class="w-full sm:w-auto px-6 py-3 bg-primary text-white rounded-lg transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg font-semibold flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                            </svg>
                            <span>Download Invoice</span>
                        </button>
                        @if($subscription->isActive())
                        <button class="w-full sm:w-auto px-6 py-3 border-2 border-grey text-grey rounded-lg transition-all duration-300 ease-in-out font-semibold flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            <span>Cancel Subscription</span>
                        </button>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        @else
        <div class="bg-white rounded-xl shadow-lg p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">No Subscriptions Found</h3>
            <p class="text-gray-600">You currently don't have any subscription plans.</p>
        </div>
        @endif
    </div>
</div>