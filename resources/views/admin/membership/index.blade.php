@extends('admin.layout.master')

@section('content')
<div class="mx-auto max-w-screen-2xl p-4 md:p-6">
    <div class="rounded-xl border border-gray-200 bg-white p-4 dark:border-gray-800 dark:bg-gray-900">
        <div class="mb-4 flex flex-col items-center justify-between sm:flex-row">
            <h3 class="text-xl font-medium text-gray-800 dark:text-white">Membership Users</h3>
            <div class="mt-2 flex items-center gap-2 sm:mt-0">
                <div class="relative">
                    <select name="filter_status" onchange="applyFilters()" id="filter_status" class="appearance-none rounded-lg border border-gray-200 px-3 py-2 pr-8 text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300">
                        <option value="">All Status</option>
                        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                <div class="relative">
                    <select name="filter_plan" onchange="applyFilters()" id="filter_plan" class="appearance-none rounded-lg border border-gray-200 px-3 py-2 pr-8 text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300">
                        <option value="">All Plans</option>
                        <option value="basic" {{ request('plan') == 'basic' ? 'selected' : '' }}>Basic</option>
                        <option value="premium" {{ request('plan') == 'premium' ? 'selected' : '' }}>Premium</option>
                        <option value="pro" {{ request('plan') == 'pro' ? 'selected' : '' }}>Pro</option>
                    </select>
                </div>
                <button type="button" onclick="clearFilters()" class="flex items-center gap-2 rounded-lg border border-gray-200 px-3 py-2 text-sm text-gray-600 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    Clear Filters
                </button>
            </div>

<!-- Add this script if not already present -->
<script>
function clearFilters() {
    window.location.href = "{{ route('admin.membership.index') }}";
}
</script>
        </div>

        <div class="mb-4">
            <form method="GET" action="{{ route('admin.membership.index') }}" id="filterForm">
                <input type="hidden" name="status" id="status_input" value="{{ request('status') }}">
                <input type="hidden" name="plan" id="plan_input" value="{{ request('plan') }}">
                <div class="relative">
                    <input type="search" name="search" value="{{ request('search') }}" placeholder="Search users..." 
                        class="h-11 w-full rounded-lg border border-gray-200 bg-transparent py-2 pl-10 pr-4 text-sm text-gray-800 placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-800 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                </div>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="border-y border-gray-200 dark:border-gray-800">
                        <th class="px-4 py-3 text-left text-gray-700 dark:text-gray-400">User Name</th>
                        <th class="px-4 py-3 text-left text-gray-700 dark:text-gray-400">Subscription</th>
                        <th class="px-4 py-3 text-left text-gray-700 dark:text-gray-400">Start Date</th>
                        <th class="px-4 py-3 text-left text-gray-700 dark:text-gray-400">Expiry Date</th>
                        <th class="px-4 py-3 text-left text-gray-700 dark:text-gray-400">Status</th>
                        <th class="px-4 py-3 text-left text-gray-700 dark:text-gray-400">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200 hover:bg-gray-50 dark:border-gray-800 dark:hover:bg-gray-900/50">
                        <td class="px-4 py-3 text-gray-700 dark:text-gray-300">John Doe</td>
                        <td class="px-4 py-3 text-gray-700 dark:text-gray-300">Premium</td>
                        <td class="px-4 py-3 text-gray-700 dark:text-gray-300">2024-01-01</td>
                        <td class="px-4 py-3 text-gray-700 dark:text-gray-300">2024-12-31</td>
                        <td class="px-4 py-3">
                            <span class="rounded-full px-2 py-1 text-xs bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-500">
                                Active
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex gap-2">
                                <a href="#" class="text-brand-500 hover:text-brand-600 dark:text-brand-400 dark:hover:text-brand-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50 dark:border-gray-800 dark:hover:bg-gray-900/50">
                        <td class="px-4 py-3 text-gray-700 dark:text-gray-300">Jane Smith</td>
                        <td class="px-4 py-3 text-gray-700 dark:text-gray-300">Basic</td>
                        <td class="px-4 py-3 text-gray-700 dark:text-gray-300">2024-02-01</td>
                        <td class="px-4 py-3 text-gray-700 dark:text-gray-300">2024-02-28</td>
                        <td class="px-4 py-3">
                            <span class="rounded-full px-2 py-1 text-xs bg-gray-100 text-gray-700 dark:bg-gray-900/30 dark:text-gray-400">
                                Inactive
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex gap-2">
                                <a href="#" class="text-brand-500 hover:text-brand-600 dark:text-brand-400 dark:hover:text-brand-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50 dark:border-gray-800 dark:hover:bg-gray-900/50">
                        <td class="px-4 py-3 text-gray-700 dark:text-gray-300">Mike Johnson</td>
                        <td class="px-4 py-3 text-gray-700 dark:text-gray-300">Pro</td>
                        <td class="px-4 py-3 text-gray-700 dark:text-gray-300">2024-01-15</td>
                        <td class="px-4 py-3 text-gray-700 dark:text-gray-300">2025-01-14</td>
                        <td class="px-4 py-3">
                            <span class="rounded-full px-2 py-1 text-xs bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-500">
                                Active
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex gap-2">
                                <a href="#" class="text-brand-500 hover:text-brand-600 dark:text-brand-400 dark:hover:text-brand-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                                <a href="#" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <nav class="flex items-center justify-between">
                <span class="text-sm text-gray-700 dark:text-gray-400">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span class="font-medium">3</span> results
                </span>
            </nav>
        </div>
    </div>
</div>


<script>
function applyFilters() {
    const statusSelect = document.getElementById('filter_status');
    const planSelect = document.getElementById('filter_plan');
    const statusInput = document.getElementById('status_input');
    const planInput = document.getElementById('plan_input');
    
    statusInput.value = statusSelect.value;
    planInput.value = planSelect.value;
    
    document.getElementById('filterForm').submit();
}
</script>
@endsection