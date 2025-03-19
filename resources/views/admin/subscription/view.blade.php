@extends('admin.layout.master')

@section('content')
<div class="mx-auto max-w-screen-2xl p-4 md:p-6">
    <div class="bg-white rounded-xl border border-gray-200 p-6">
        <h3 class="text-xl font-medium text-gray-800 mb-6">Subscription Plan Details</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <p class="mt-1 text-gray-900">{{ $subscriptionPlan->name }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Stripe Product ID</label>
                <p class="mt-1 text-gray-900">{{ $subscriptionPlan->stripe_product_id }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Monthly Price ID</label>
                <p class="mt-1 text-gray-900">{{ $subscriptionPlan->stripe_price_id_monthly ?? 'N/A' }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Yearly Price ID</label>
                <p class="mt-1 text-gray-900">{{ $subscriptionPlan->stripe_price_id_yearly ?? 'N/A' }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Monthly Price</label>
                <p class="mt-1 text-gray-900">${{ number_format($subscriptionPlan->monthly_price ?? 0, 2) }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Yearly Price</label>
                <p class="mt-1 text-gray-900">${{ number_format($subscriptionPlan->monthly_price ?? 0, 2) }}</p>
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <p class="mt-1 text-gray-900">{{ $subscriptionPlan->description ?? 'N/A' }}</p>
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Features</label>
                <ul class="mt-1 text-gray-900 list-disc list-inside">
                    @forelse($subscriptionPlan->features ? (is_array($subscriptionPlan->features) ? $subscriptionPlan->features : json_decode($subscriptionPlan->features, true)) : [] as $feature)
                        <li>{{ $feature }}</li>
                    @empty
                        <li>No features specified</li>
                    @endforelse
                </ul>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Status</label>
                <p class="mt-1 text-gray-900">{{ $subscriptionPlan->is_active ? 'Active' : 'Inactive' }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Created At</label>
                <p class="mt-1 text-gray-900">{{ $subscriptionPlan->created_at->format('Y-m-d H:i:s') }}</p>
            </div>
        </div>

        <div class="mt-6 flex gap-2">
            <a href="{{ route('admin.subscription.plan.edit', $subscriptionPlan->id) }}" class="rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">Edit</a>
            <a href="{{ route('admin.subscription.plan') }}" class="rounded-lg bg-gray-200 px-4 py-2 text-gray-700 hover:bg-gray-300">Back</a>
        </div>
    </div>
</div>
@endsection