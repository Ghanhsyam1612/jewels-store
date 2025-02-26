@extends('admin.layout.master')

@section('content')
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6">
        <div class="flex flex-col gap-4 md:gap-6">
            <div class="col-span-12">
                <div class="overflow-hidden border border-gray-200 bg-white rounded-xl pt-4 dark:border-gray-800 dark:bg-white/[0.03]"
                    x-data="customerTable()">
                    <!-- Header with Title and Buttons -->
                    <div class="mb-4 flex flex-col gap-4 px-4 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h3 class="text-xl font-medium text-gray-800 dark:text-white/90">
                                Customer Directory
                            </h3>
                        </div>
                        {{-- Start Cutomer Add Form Modal --}}
                        <div class="flex flex-col gap-2 sm:flex-row sm:items-center" x-data="{ isModalOpen: false }">
                            <button @click="isModalOpen = !isModalOpen"
                                class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                                Add New Customer
                            </button>
                            <div x-show="isModalOpen"
                                class="fixed inset-0 flex items-center justify-center p-5 overflow-y-auto modal z-99999">
                                <div class="modal-close-btn fixed inset-0 h-full w-full bg-black/50 backdrop-blur-[25px]">
                                </div>
                                <div @click.outside="isModalOpen = false"
                                    class="relative w-full max-w-[584px] rounded-3xl bg-white p-6 dark:bg-gray-900 lg:p-10">
                                    <!-- close btn -->
                                    <button @click="isModalOpen = false"
                                        class="group absolute right-3 top-3 z-999 flex h-9.5 w-9.5 items-center justify-center rounded-full bg-gray-200 text-gray-500 transition-colors hover:bg-gray-300 hover:text-gray-500 dark:bg-gray-800 dark:hover:bg-gray-700 sm:right-6 sm:top-6 sm:h-11 sm:w-11">
                                        <svg class="transition-colors fill-current group-hover:text-gray-600 dark:group-hover:text-gray-200"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.04289 16.5413C5.65237 16.9318 5.65237 17.565 6.04289 17.9555C6.43342 18.346 7.06658 18.346 7.45711 17.9555L11.9987 13.4139L16.5408 17.956C16.9313 18.3466 17.5645 18.3466 17.955 17.956C18.3455 17.5655 18.3455 16.9323 17.955 16.5418L13.4129 11.9997L17.955 7.4576C18.3455 7.06707 18.3455 6.43391 17.955 6.04338C17.5645 5.65286 16.9313 5.65286 16.5408 6.04338L11.9987 10.5855L7.45711 6.0439C7.06658 5.65338 6.43342 5.65338 6.04289 6.0439C5.65237 6.43442 5.65237 7.06759 6.04289 7.45811L10.5845 11.9997L6.04289 16.5413Z"
                                                fill="" />
                                        </svg>
                                    </button>

                                    <form class="">
                                        <h4 class="mb-6 text-lg font-medium text-gray-800 dark:text-white/90">
                                            Customer Details
                                        </h4>

                                        <div class="grid grid-cols-1 gap-x-6 gap-y-5 sm:grid-cols-2">
                                            <div class="col-span-1">
                                                <label
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Name
                                                </label>
                                                <input type="text" placeholder="Full Name"
                                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                            </div>

                                            <div class="col-span-1">
                                                <label
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Email Address
                                                </label>
                                                <input type="email" placeholder="example@gmail.com"
                                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                            </div>

                                            <div class="col-span-1">
                                                <label
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Phone
                                                </label>
                                                <input type="text" placeholder="+09 363 398 46"
                                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                            </div>

                                            <div class="col-span-1">
                                                <label
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Location
                                                </label>
                                                <input type="text" placeholder="Location"
                                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                            </div>

                                            <div class="col-span-1">
                                                <label
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Order
                                                </label>
                                                <input type="text" placeholder="Total Order"
                                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                            </div>

                                            <div class="col-span-1">
                                                <label
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Total Spent
                                                </label>
                                                <input type="text" placeholder="Total Spent"
                                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                            </div>

                                            <div class="relative col-span-2" x-data="{ open: false, selected: 'Select Status' }">
                                                <label
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Status
                                                </label>
                                                <!-- Dropdown toggle styled like an input -->
                                                <button @click="open = !open" type="button"
                                                  class="w-full text-left dark:bg-dark-900 h-11 rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
                                                  <span x-text="selected"></span>
                                                  <svg class="inline-block float-right stroke-current transition-transform" :class="open ? '-rotate-180' : 'rotate-180'"
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M4.792 7.396L10 12.604l5.208-5.208" stroke-width="1.5" stroke-linecap="round"
                                                      stroke-linejoin="round" />
                                                  </svg>
                                                </button>

                                                <!-- Dropdown menu -->
                                                <div x-show="open" @click.outside="open = false"
                                                  class="absolute left-0 right-0 mt-2 z-40 rounded-lg border border-gray-300 bg-white shadow-theme-xs dark:border-gray-700 dark:bg-gray-900">
                                                  <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                                                    <li>
                                                      <a href="#" @click.prevent="selected = 'Active'; open = false;"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
                                                        Active
                                                      </a>
                                                    </li>
                                                    <li>
                                                      <a href="#" @click.prevent="selected = 'Inactive'; open = false;"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
                                                        Inactive
                                                      </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" @click.prevent="selected = 'Pending'; open = false;"
                                                          class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
                                                          Pending
                                                        </a>
                                                      </li>
                                                  </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Search Bar -->
                    <div class="mb-4 px-4">
                        <div class="relative">
                            <input type="text" x-model="search" placeholder="Search customers..."
                                class="h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pl-11 pr-4 text-sm text-gray-800 shadow-sm placeholder:text-gray-400 focus:border-blue-300 focus:outline-none dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" />
                            <span class="absolute left-4 top-3.5 text-gray-500">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="max-w-full overflow-x-auto">
                        <table class="w-full min-w-[1000px] border-collapse">
                            <thead>
                                <tr
                                    class="border-y border-gray-200 bg-gray-50 text-left dark:border-gray-800 dark:bg-gray-900">
                                    <template x-for="column in columns" :key="column.key">
                                        <th class="px-4 py-3">
                                            <div class="flex cursor-pointer items-center gap-2"
                                                @click="sortBy(column.key)">
                                                <span class="text-sm font-medium text-gray-700 dark:text-gray-400"
                                                    x-text="column.label"></span>
                                                <span class="flex flex-col gap-0.5">
                                                    <svg class="h-2 w-2 fill-gray-400" viewBox="0 0 8 5">
                                                        <path d="M4 0l4 5H0z" />
                                                    </svg>
                                                    <svg class="h-2 w-2 fill-gray-400" viewBox="0 0 8 5">
                                                        <path d="M4 5l4-5H0z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </th>
                                    </template>
                                    <th class="px-4 py-3 text-sm font-medium text-gray-700 dark:text-gray-400">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="customer in paginatedData" :key="customer.id">
                                    <tr class="border-b border-gray-200 dark:border-gray-800">
                                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400"
                                            x-text="customer.joined_date"></td>
                                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400"
                                            x-text="customer.name"></td>
                                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400"
                                            x-text="customer.email"></td>
                                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400"
                                            x-text="customer.phone"></td>
                                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400"
                                            x-text="customer.location"></td>
                                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400"
                                            x-text="customer.total_orders"></td>
                                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400"
                                            x-text="customer.total_spent"></td>
                                        <td class="px-4 py-3">
                                            <span
                                                :class="{
                                                    'rounded-full px-3 py-1 text-xs font-medium': true,
                                                    'bg-green-100 text-green-700 dark:bg-green-500/15 dark:text-green-500': customer
                                                        .status === 'Active',
                                                    'bg-yellow-100 text-yellow-700 dark:bg-yellow-500/15 dark:text-yellow-500': customer
                                                        .status === 'Pending',
                                                    'bg-red-100 text-red-700 dark:bg-red-500/15 dark:text-red-500': customer
                                                        .status === 'Inactive'
                                                }"
                                                x-text="customer.status"></span>
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center gap-2">
                                                <button
                                                    class="text-gray-500 hover:text-error-500 dark:text-gray-400 dark:hover:text-error-500">
                                                    <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                                <button
                                                    class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white/90">
                                                    <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="border-t border-gray-200 px-4 py-4 dark:border-gray-800">
                        <div class="flex flex-col items-center justify-between gap-4 sm:flex-row">
                            <p class="text-sm text-gray-700 dark:text-gray-400">
                                Showing <span x-text="startIndex + 1"></span> to <span
                                    x-text="Math.min(endIndex, filteredData.length)"></span> of <span
                                    x-text="filteredData.length"></span> entries
                            </p>
                            <div class="flex gap-2">
                                <button @click="previousPage" :disabled="currentPage === 1"
                                    class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700">
                                    Previous
                                </button>
                                <button @click="nextPage" :disabled="currentPage >= totalPages"
                                    class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <script>
                function customerTable() {
                    return {
                        columns: [{
                                key: 'joined_date',
                                label: 'Join Date'
                            },
                            {
                                key: 'name',
                                label: 'Name'
                            },
                            {
                                key: 'email',
                                label: 'Email'
                            },
                            {
                                key: 'phone',
                                label: 'Phone'
                            },
                            {
                                key: 'location',
                                label: 'Location'
                            },
                            {
                                key: 'total_orders',
                                label: 'Orders'
                            },
                            {
                                key: 'total_spent',
                                label: 'Total Spent'
                            },
                            {
                                key: 'status',
                                label: 'Status'
                            }
                        ],
                        data: [{
                                id: 1,
                                joined_date: "2024-01-15",
                                name: "John Smith",
                                email: "john.smith@email.com",
                                phone: "+1 (555) 123-4567",
                                location: "New York, USA",
                                total_orders: "12",
                                total_spent: "$1,250.00",
                                status: "Active"
                            },
                            {
                                id: 2,
                                joined_date: "2024-01-20",
                                name: "Sarah Johnson",
                                email: "sarah.j@email.com",
                                phone: "+1 (555) 987-6543",
                                location: "Los Angeles, USA",
                                total_orders: "8",
                                total_spent: "$890.00",
                                status: "Pending"
                            }
                        ],
                        search: '',
                        sortColumn: 'joined_date',
                        sortDirection: 'asc',
                        currentPage: 1,
                        perPage: 10,

                        get filteredData() {
                            const searchLower = this.search.toLowerCase();
                            return this.data
                                .filter(customer =>
                                    Object.values(customer).some(value =>
                                        String(value).toLowerCase().includes(searchLower)
                                    )
                                )
                                .sort((a, b) => {
                                    const aVal = a[this.sortColumn];
                                    const bVal = b[this.sortColumn];

                                    if (this.sortColumn === 'total_spent') {
                                        const aPrice = parseFloat(aVal.replace(/[$,]/g, ''));
                                        const bPrice = parseFloat(bVal.replace(/[$,]/g, ''));
                                        return this.sortDirection === 'asc' ? aPrice - bPrice : bPrice - aPrice;
                                    }

                                    if (this.sortColumn === 'joined_date') {
                                        return this.sortDirection === 'asc' ?
                                            new Date(aVal) - new Date(bVal) :
                                            new Date(bVal) - new Date(aVal);
                                    }

                                    if (this.sortColumn === 'total_orders') {
                                        return this.sortDirection === 'asc' ?
                                            parseInt(aVal) - parseInt(bVal) :
                                            parseInt(bVal) - parseInt(aVal);
                                    }

                                    return this.sortDirection === 'asc' ?
                                        String(aVal).localeCompare(String(bVal)) :
                                        String(bVal).localeCompare(String(aVal));
                                });
                        },

                        get paginatedData() {
                            return this.filteredData.slice(this.startIndex, this.endIndex);
                        },

                        get startIndex() {
                            return (this.currentPage - 1) * this.perPage;
                        },

                        get endIndex() {
                            return this.startIndex + this.perPage;
                        },

                        get totalPages() {
                            return Math.ceil(this.filteredData.length / this.perPage);
                        },

                        previousPage() {
                            if (this.currentPage > 1) {
                                this.currentPage--;
                            }
                        },

                        nextPage() {
                            if (this.currentPage < this.totalPages) {
                                this.currentPage++;
                            }
                        },

                        sortBy(column) {
                            if (this.sortColumn === column) {
                                this.sortDirection = this.sortDirection === 'asc' ? 'desc' : 'asc';
                            } else {
                                this.sortColumn = column;
                                this.sortDirection = 'asc';
                            }
                        }
                    };
                }
            </script>
        </div>
    </div>
@endsection
