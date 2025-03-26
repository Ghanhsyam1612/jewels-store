@extends('admin.layout.master')

@section('content')
<div class="mx-auto max-w-screen-2xl p-4 md:p-6">
    <div class="flex flex-col gap-4 md:gap-6">
        <div class="col-span-12">
            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
            @endif
            <div class="overflow-hidden border border-gray-200 bg-white rounded-xl pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="mb-4 flex flex-col gap-4 px-4 sm:flex-row sm:items-center sm:justify-between">
                    <h3 class="text-xl font-medium text-gray-800 dark:text-white/90">Customer Directory</h3>
                    <div x-data="{ isModalOpen: false, isEditMode: false, customerId: null }">
                        <button @click="isModalOpen = true; isEditMode = false;" class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Add New Customer
                        </button>

                        <div x-show="isModalOpen" class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto modal z-99999">
                            <div class="modal-close-btn fixed inset-0 h-full w-full bg-black/50 backdrop-blur-[25px]" @click="isModalOpen = false"></div>
                            <div class="relative w-full max-w-[584px] rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-10" @click.outside="isModalOpen = false">
                                <button @click="isModalOpen = false" class="group absolute right-3 top-3 z-999 flex h-9.5 w-9.5 items-center justify-center rounded-full bg-gray-200 text-gray-500 hover:bg-gray-300 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <svg class="transition-colors fill-current group-hover:text-gray-600 dark:group-hover:text-gray-200" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.04289 16.5413C5.65237 16.9318 5.65237 17.565 6.04289 17.9555C6.43342 18.346 7.06658 18.346 7.45711 17.9555L11.9987 13.4139L16.5408 17.956C16.9313 18.3466 17.5645 18.3466 17.955 17.956C18.3455 17.5655 18.3455 16.9323 17.955 16.5418L13.4129 11.9997L17.955 7.4576C18.3455 7.06707 18.3455 6.43391 17.955 6.04338C17.5645 5.65286 16.9313 5.65286 16.5408 6.04338L11.9987 10.5855L7.45711 6.0439C7.06658 5.65338 6.43342 5.65338 6.04289 6.0439C5.65237 6.43442 5.65237 7.06759 6.04289 7.45811L10.5845 11.9997L6.04289 16.5413Z" />
                                    </svg>
                                </button>
                                <form :action="isEditMode ? '/admin/customers/' + customerId : '/admin/customers'" method="POST">
                                    @csrf
                                    <template x-if="isEditMode">
                                        @method('PUT')
                                    </template>
                                    <h4 class="mb-6 text-lg font-medium text-gray-800 dark:text-white/90" x-text="isEditMode ? 'Edit Customer' : 'Customer Details'"></h4>
                                    <div>
                                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">First Name</label>
                                        <input type="text" name="first_name" id="first_name" class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:focus:border-brand-800" required />
                                        @error('first_name')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:focus:border-brand-800" required />
                                        @error('last_name')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Display Name</label>
                                        <input type="text" name="display_name" id="display_name" class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:focus:border-brand-800" required />
                                        @error('display_name')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Email Address</label>
                                        <input type="email" name="email" id="email" class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:focus:border-brand-800" required />
                                        @error('email')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Phone</label>
                                        <input type="text" name="phone" id="phone" class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:focus:border-brand-800" />
                                        @error('phone')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Password</label>
                                        <input type="password" name="password" id="password" class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:focus:border-brand-800" x-bind:required="!isEditMode" />
                                        <template x-if="isEditMode">
                                            <small class="text-gray-500">Leave blank to keep current password</small>
                                        </template>
                                        @error('password')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-2">
                                        <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">Email Verified</label>
                                        <select name="is_email_verified" id="is_email_verified" class="h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs focus:border-brand-300 focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:focus:border-brand-800">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                        @error('is_email_verified')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="mt-6 w-full rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700" x-text="isEditMode ? 'Update Customer' : 'Save Customer'"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4 px-4">
                    <form method="GET" action="{{ route('admin.customers.index') }}">
                        <div class="relative">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search customers..." class="h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pl-11 pr-4 text-sm text-gray-800 shadow-sm placeholder:text-gray-400 focus:border-blue-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90" />
                            <span class="absolute left-4 top-3.5 text-gray-500">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                                </svg>
                            </span>
                            <button type="submit" class="absolute right-4 top-2 rounded-lg bg-blue-500 px-3 py-1.5 text-xs text-white">Search</button>
                        </div>
                    </form>
                </div>

                <div class="max-w-full overflow-x-auto">
                    <table class="w-full min-w-[1000px] border-collapse">
                        <thead>
                            <tr class="border-y border-gray-200 bg-gray-50 text-left dark:border-gray-800 dark:bg-gray-900">
                                @foreach(['first_name' => 'First Name', 'last_name' => 'Last Name', 'display_name' => 'Display Name', 'email' => 'Email', 'phone' => 'Phone', 'is_email_verified' => 'Email Verified', 'created_at' => 'Created At'] as $key => $label)
                                    <th class="px-4 py-3">
                                        <a href="{{ route('admin.customers.index', array_merge(request()->query(), ['sort' => $key, 'direction' => request('sort') == $key && request('direction') == 'asc' ? 'desc' : 'asc'])) }}" class="flex cursor-pointer items-center gap-2">
                                            <span class="text-sm font-medium text-gray-700 dark:text-gray-400">{{ $label }}</span>
                                            <span class="flex flex-col gap-0.5">
                                                <svg class="h-2 w-2 {{ request('sort') == $key && request('direction') == 'asc' ? 'fill-blue-500' : 'fill-gray-400' }}" viewBox="0 0 8 5">
                                                    <path d="M4 0l4 5H0z" />
                                                </svg>
                                                <svg class="h-2 w-2 {{ request('sort') == $key && request('direction') == 'desc' ? 'fill-blue-500' : 'fill-gray-400' }}" viewBox="0 0 8 5">
                                                    <path d="M4 5l4-5H0z" />
                                                </svg>
                                            </span>
                                        </a>
                                    </th>
                                @endforeach
                                <th class="px-4 py-3 text-sm font-medium text-gray-700 dark:text-gray-400">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($customers as $customer)
                                <tr class="border-b border-gray-200 dark:border-gray-800">
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400">{{ $customer->first_name }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400">{{ $customer->last_name }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400">{{ $customer->display_name }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400">{{ $customer->email }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400">{{ $customer->phone }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400">{{ $customer->is_email_verified ? 'Yes' : 'No' }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400">{{ $customer->created_at->format('Y-m-d H:i:s') }}</td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center gap-2">
                                            <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this customer?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-gray-500 hover:text-error-500 dark:text-gray-400 dark:hover:text-error-500">
                                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                            <button @click="isModalOpen = true; isEditMode = true; customerId = {{ $customer->id }}; loadCustomer({{ $customer->id }})" class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white/90">
                                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400 text-center">No customers found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="border-t border-gray-200 px-4 py-4 dark:border-gray-800">
                    <div class="flex flex-col items-center justify-between gap-4 sm:flex-row">
                        <p class="text-sm text-gray-700 dark:text-gray-400">
                            Showing {{ $customers->firstItem() ?? 0 }} to {{ $customers->lastItem() ?? 0 }} of {{ $customers->total() }} entries
                        </p>
                        <div class="flex gap-2">
                            {{ $customers->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
    function loadCustomer(id) {
        fetch(`/admin/customers/${id}/edit`, {
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.json();
        })
        .then(data => {
            document.getElementById('first_name').value = data.first_name || '';
            document.getElementById('last_name').value = data.last_name || '';
            document.getElementById('display_name').value = data.display_name || '';
            document.getElementById('email').value = data.email || '';
            document.getElementById('phone').value = data.phone || '';
            document.getElementById('password').value = '';
            document.getElementById('is_email_verified').value = data.is_email_verified ? '1' : '0';
        })
        .catch(error => {
            console.error('Error loading customer data:', error);
            alert('Error loading customer data. Please try again.');
        });
    }
</script>
@endsection