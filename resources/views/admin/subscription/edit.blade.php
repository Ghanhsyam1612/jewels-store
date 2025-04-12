@extends('admin.layout.master')

@section('content')
<div class="mx-auto max-w-screen-2xl p-4 md:p-6">
    <div class="bg-white rounded-xl border border-gray-200 p-6">
        <h3 class="text-xl font-medium text-gray-800 mb-6">Edit Subscription Plan</h3>
        
        <form action="{{ route('admin.subscription.plan.update', $subscriptionPlan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" value="{{ old('name', $subscriptionPlan->name) }}" class="mt-1 w-full rounded-lg border border-gray-300 p-2 @error('name') border-red-500 @enderror" />
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Stripe Product ID</label>
                    <input type="text" name="stripe_product_id" value="{{ old('stripe_product_id', $subscriptionPlan->stripe_product_id) }}" class="mt-1 w-full rounded-lg border border-gray-300 p-2 @error('stripe_product_id') border-red-500 @enderror" />
                    @error('stripe_product_id')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Monthly Price ID</label>
                    <input type="text" name="stripe_price_id_monthly" value="{{ old('stripe_price_id_monthly', $subscriptionPlan->stripe_price_id_monthly) }}" class="mt-1 w-full rounded-lg border border-gray-300 p-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Yearly Price ID</label>
                    <input type="text" name="stripe_price_id_yearly" value="{{ old('stripe_price_id_yearly', $subscriptionPlan->stripe_price_id_yearly) }}" class="mt-1 w-full rounded-lg border border-gray-300 p-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Monthly Price</label>
                    <input type="number" step="0.01" name="monthly_price" value="{{ old('monthly_price', $subscriptionPlan->monthly_price) }}" class="mt-1 w-full rounded-lg border border-gray-300 p-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Yearly Price</label>
                    <input type="number" step="0.01" name="yearly_price" value="{{ old('yearly_price', $subscriptionPlan->yearly_price) }}" class="mt-1 w-full rounded-lg border border-gray-300 p-2" />
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" class="mt-1 w-full rounded-lg border border-gray-300 p-2" rows="3">{{ old('description', $subscriptionPlan->description) }}</textarea>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700">Features (comma separated)</label>
                    <input type="text" name="features" value="{{ old('features', is_array($subscriptionPlan->features) ? implode(', ', $subscriptionPlan->features) : $subscriptionPlan->features) }}" class="mt-1 w-full rounded-lg border border-gray-300 p-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="is_active" class="mt-1 w-full rounded-lg border border-gray-300 p-2">
                        <option value="1" {{ old('is_active', $subscriptionPlan->is_active) == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('is_active', $subscriptionPlan->is_active) == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="mt-6 flex gap-2">
                <button type="submit" class="rounded-lg  bg-blue-600 px-4 py-2 text-black hover:bg-blue-700">Update</button>
                <a href="{{ route('admin.subscription.plan') }}" class="rounded-lg bg-gray-200 px-4 py-2 text-gray-700 hover:bg-gray-300">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection