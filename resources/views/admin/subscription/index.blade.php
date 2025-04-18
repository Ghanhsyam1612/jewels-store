@extends('admin.layout.master')

@section('content')
<div class="mx-auto max-w-screen-2xl p-4 md:p-6">
    @if(session('success'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="bg-white rounded-xl border border-gray-200 p-4">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-4">
            <h3 class="text-xl font-medium text-gray-800">Subscription Plans</h3>
            <a href="{{ route('admin.subscription.plan.create') }}" class="mt-2 sm:mt-0 inline-flex items-center gap-2 rounded-lg bg-black px-4 py-2 text-white ">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add New Plan
            </a>
        </div>

        <div class="mb-4">
            <form method="GET" action="{{ route('admin.subscription.plan') }}">
                <div class="relative">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search plans..." class="w-full h-11 rounded-lg border border-gray-300 pl-10 pr-4" />
                </div>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="border-y border-gray-200 dark:border-gray-800">
                        @foreach(['name' => 'Name', 'monthly_price' => 'Monthly', 'yearly_price' => 'Yearly', 'is_active' => 'Status', 'created_at' => 'Created'] as $key => $label)
                            <th class="px-4 py-3 text-left text-gray-700 dark:text-gray-400">
                                <a href="{{ route('admin.subscription.plan', array_merge(request()->query(), ['sort' => $key, 'direction' => $sortColumn == $key && $sortDirection == 'asc' ? 'desc' : 'asc'])) }}" class="flex items-center gap-1">
                                    {{ $label }}
                                    <span class="flex flex-col">
                                        <svg class="h-2 w-2 {{ $sortColumn == $key && $sortDirection == 'asc' ? 'fill-brand-500' : 'fill-gray-400 dark:fill-gray-600' }}" viewBox="0 0 8 5"><path d="M4 0l4 5H0z" /></svg>
                                        <svg class="h-2 w-2 {{ $sortColumn == $key && $sortDirection == 'desc' ? 'fill-brand-500' : 'fill-gray-400 dark:fill-gray-600' }}" viewBox="0 0 8 5"><path d="M4 5l4-5H0z" /></svg>
                                    </span>
                                </a>
                            </th>
                        @endforeach
                        <th class="px-4 py-3 text-left text-gray-700 dark:text-gray-400">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($subscriptionPlans as $plan)
                        <tr class="border-b border-gray-200 hover:bg-gray-50 dark:border-gray-800 dark:hover:bg-gray-900/50">
                            <td class="px-4 py-3 text-gray-700 dark:text-gray-300">{{ $plan->name }}</td>
                            <td class="px-4 py-3 text-gray-700 dark:text-gray-300">${{ number_format($plan->monthly_price ?? 0, 2) }}</td>
                            <td class="px-4 py-3 text-gray-700 dark:text-gray-300">${{ number_format($plan->yearly_price ?? 0, 2) }}</td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 rounded-full text-xs {{ $plan->is_active ? 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-500' : 'bg-gray-100 text-gray-700 dark:bg-gray-900/30 dark:text-gray-400' }}">
                                    {{ $plan->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-gray-700 dark:text-gray-300">{{ $plan->created_at->format('Y-m-d') }}</td>
                            <td class="px-4 py-3 flex gap-2">
                                <a href="{{ route('admin.subscription.plan.view', $plan->id) }}" class="text-brand-500 hover:text-brand-600 dark:text-brand-400 dark:hover:text-brand-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                                <a href="{{ route('admin.subscription.plan.edit', $plan->id) }}" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <button type="submit" class="text-red-500 hover:text-red-600 dark:text-red-400 dark:hover:text-red-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-3 text-center text-gray-500 dark:text-gray-400">No plans found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $subscriptionPlans->links() }}
        </div>
    </div>
</div>
@endsection