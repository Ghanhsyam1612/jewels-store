@extends('admin.layout.master')

@section('content')

<div class="mx-auto max-w-screen-2xl p-4 md:p-6">
    <div class="flex flex-col gap-4 md:gap-6">
        <div class="col-span-12">
            <div class="overflow-hidden border border-gray-200 bg-white rounded-xl pt-4 dark:border-gray-800 dark:bg-white/[0.03]" x-data="diamondTable()">
                <!-- Header with Title and Buttons -->
                <div class="mb-4 flex flex-col gap-4 px-4 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h3 class="text-xl font-medium text-gray-800 dark:text-white/90">
                            Antique Cut Diamond Inventory
                        </h3>
                    </div>

                    <div x-data="{ isModalOpen: false }" class="flex flex-col gap-2 sm:flex-row sm:items-center">
                        <label for="fileUpload" class="inline-flex cursor-pointer items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                            </svg>
                            Upload Excel
                        </label>
                        <input type="file" id="fileUpload" class="hidden" accept=".xlsx, .xls">
                        <button @click="isModalOpen = !isModalOpen" class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                            Add New Diamond
                        </button>
                        {{-- Start Modal --}}
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
                                            Antique Cut Diamond Details
                                        </h4>

                                        <div class="grid grid-cols-1 gap-x-6 gap-y-5 sm:grid-cols-2">
                                            {{-- Stock --}}
                                            <div class="col-span-1">
                                                <label
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Stock
                                                </label>
                                                <input type="text" placeholder="Enter stock"
                                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                            </div>

                                            {{-- Shape --}}
                                            <div class="relative col-span-1" x-data="{ open: false, selected: 'Select Shape' }">
                                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Shape
                                                </label>
                                                <!-- Dropdown toggle styled like an input -->
                                                <button @click="open = !open" type="button"
                                                    class="w-full text-left dark:bg-dark-900 h-11 rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
                                                    <span x-text="selected"></span>
                                                    <svg class="inline-block float-right stroke-current transition-transform" :class="open ? '-rotate-180' : 'rotate-180'" width="20"
                                                        height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M4.792 7.396L10 12.604l5.208-5.208" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </button>

                                                <!-- Scrollable Dropdown Menu -->
                                                <div x-show="open" @click.outside="open = false"
                                                    class="absolute left-0 right-0 mt-2 z-40 rounded-lg border border-gray-300 bg-white shadow-theme-xs dark:border-gray-700 dark:bg-gray-900 max-h-[190px] overflow-y-auto">
                                                    <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        <template x-for="shape in ['Round', 'Princess', 'Radiant', 'Asscher', 'Cushion', 'Oval', 'Emerald', 'Pear', 'Marquise', 'Heart', 'Rose Cut', 'Old European', 'Half Moon', 'Baguette Trapezoid', 'Baguette', 'Hexagon', 'Kite', 'Old Mine', 'Trapezoid', 'Triangular']">
                                                            <li>
                                                                <a href="#" @click.prevent="selected = shape; open = false;"
                                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
                                                                    <span x-text="shape"></span>
                                                                </a>
                                                            </li>
                                                        </template>
                                                    </ul>
                                                </div>
                                            </div>

                                            {{-- Carat --}}
                                            <div class="col-span-1">
                                                <label
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Carat
                                                </label>
                                                <input type="text" placeholder="Enter carat"
                                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                            </div>

                                            {{-- Color --}}
                                            <div class="relative col-span-1" x-data="{ open: false, selected: 'Select Color' }">
                                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Color
                                                </label>
                                                <!-- Dropdown toggle styled like an input -->
                                                <button @click="open = !open" type="button"
                                                    class="w-full text-left dark:bg-dark-900 h-11 rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
                                                    <span x-text="selected"></span>
                                                    <svg class="inline-block float-right stroke-current transition-transform" :class="open ? '-rotate-180' : 'rotate-180'" width="20"
                                                        height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M4.792 7.396L10 12.604l5.208-5.208" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </button>

                                                <!-- Scrollable Dropdown Menu -->
                                                <div x-show="open" @click.outside="open = false"
                                                    class="absolute left-0 right-0 mt-2 z-40 rounded-lg border border-gray-300 bg-white shadow-theme-xs dark:border-gray-700 dark:bg-gray-900 max-h-[190px] overflow-y-auto">
                                                    <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        <template x-for="color in ['D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M']">
                                                            <li>
                                                                <a href="#" @click.prevent="selected = color; open = false;"
                                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
                                                                    <span x-text="color"></span>
                                                                </a>
                                                            </li>
                                                        </template>
                                                    </ul>
                                                </div>
                                            </div>

                                            {{-- Clarity --}}
                                            <div class="relative col-span-1" x-data="{ open: false, selected: 'Select Clarity' }">
                                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Clarity
                                                </label>
                                                <!-- Dropdown toggle styled like an input -->
                                                <button @click="open = !open" type="button"
                                                    class="w-full text-left dark:bg-dark-900 h-11 rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
                                                    <span x-text="selected"></span>
                                                    <svg class="inline-block float-right stroke-current transition-transform" :class="open ? '-rotate-180' : 'rotate-180'" width="20"
                                                        height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M4.792 7.396L10 12.604l5.208-5.208" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </button>

                                                <!-- Scrollable Dropdown Menu -->
                                                <div x-show="open" @click.outside="open = false"
                                                    class="absolute left-0 right-0 mt-2 z-40 rounded-lg border border-gray-300 bg-white shadow-theme-xs dark:border-gray-700 dark:bg-gray-900 max-h-[190px] overflow-y-auto">
                                                    <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        <template x-for="clarity in ['FL', 'IF', 'VVS1', 'VVS2', 'VS1', 'VS2', 'SI1', 'SI2', 'SI3', 'I1', 'I2']">
                                                            <li>
                                                                <a href="#" @click.prevent="selected = clarity; open = false;"
                                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
                                                                    <span x-text="clarity"></span>
                                                                </a>
                                                            </li>
                                                        </template>
                                                    </ul>
                                                </div>
                                            </div>

                                            {{-- Cut --}}
                                            <div class="relative col-span-1" x-data="{ open: false, selected: 'Select Cut' }">
                                                <label class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Cut
                                                </label>
                                                <!-- Dropdown toggle styled like an input -->
                                                <button @click="open = !open" type="button"
                                                    class="w-full text-left dark:bg-dark-900 h-11 rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800 flex justify-between items-center">
                                                    <span x-text="selected"></span>
                                                    <svg class="stroke-current transition-transform duration-200 ease-in-out"
                                                        :class="open ? '-rotate-180' : 'rotate-180'"
                                                        width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M4.792 7.396L10 12.604l5.208-5.208" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </button>

                                                <!-- Scrollable Dropdown Menu -->
                                                <div x-show="open" @click.outside="open = false"
                                                    class="absolute left-0 right-0 mt-2 z-40 rounded-lg border border-gray-300 bg-white shadow-theme-xs dark:border-gray-700 dark:bg-gray-900 max-h-[190px] overflow-y-auto">
                                                    <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                                                        <template x-for="cut in ['Ideal', 'Excellent', 'Very Good', 'Good', 'Fair', 'Poor']">
                                                            <li>
                                                                <a href="#" @click.prevent="selected = cut; open = false;"
                                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
                                                                    <span x-text="cut"></span>
                                                                </a>
                                                            </li>
                                                        </template>
                                                    </ul>
                                                </div>
                                            </div>

                                            {{-- Price --}}
                                            <div class="col-span-1">
                                                <label
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Price
                                                </label>
                                                <input type="text" placeholder="Enter price"
                                                    class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800" />
                                            </div>

                                            {{-- Status --}}
                                            <div class="relative col-span-1" x-data="{ open: false, selected: 'Select Status' }">
                                                <label
                                                    class="mb-1.5 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                                    Status
                                                </label>
                                                <!-- Dropdown toggle styled like an input -->
                                                <button @click="open = !open" type="button"
                                                  class="w-full text-left dark:bg-dark-900 h-11 rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800">
                                                  <span x-text="selected"></span>
                                                  <svg class="inline-block float-right stroke-current transition-transform" :class="open ? '-rotate-180' :  'rotate-180'"
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
                                                      <a href="#" @click.prevent="selected = 'In Stock'; open = false;"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
                                                        In Stock
                                                      </a>
                                                    </li>
                                                    <li>
                                                      <a href="#" @click.prevent="selected = 'Out of Stock'; open = false;"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
                                                        Out of Stock
                                                      </a>
                                                    </li>
                                                  </ul>
                                                </div>
                                            </div>

                                            {{-- Button --}}
                                            <button class="col-span-2 inline-flex items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700">
                                                Add
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        {{-- End Modal --}}
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="mb-4 px-4">
                    <div class="relative">
                        <input type="text" x-model="search" placeholder="Search diamonds..." class="h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2.5 pl-11 pr-4 text-sm text-gray-800 shadow-sm placeholder:text-gray-400 focus:border-blue-300 focus:outline-none dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" />
                        <span class="absolute left-4 top-3.5 text-gray-500">
                            <svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- Table -->
                <div class="max-w-full overflow-x-auto">
                    <table class="w-full min-w-[1000px] border-collapse">
                        <thead>
                            <tr class="border-y border-gray-200 bg-gray-50 text-left dark:border-gray-800 dark:bg-gray-900">
                                <template x-for="column in columns" :key="column.key">
                                    <th class="px-4 py-3">
                                        <div class="flex cursor-pointer items-center gap-2" @click="sortBy(column.key)">
                                            <span class="text-sm font-medium text-gray-700 dark:text-gray-400" x-text="column.label"></span>
                                            <span class="flex flex-col gap-0.5">
                                                <svg class="h-2 w-2 fill-gray-400" viewBox="0 0 8 5"><path d="M4 0l4 5H0z"/></svg>
                                                <svg class="h-2 w-2 fill-gray-400" viewBox="0 0 8 5"><path d="M4 5l4-5H0z"/></svg>
                                            </span>
                                        </div>
                                    </th>
                                </template>
                                <th class="px-4 py-3 text-sm font-medium text-gray-700 dark:text-gray-400">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for="diamond in paginatedData" :key="diamond.id">
                                <tr class="border-b border-gray-200 dark:border-gray-800">
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400" x-text="diamond.date_added"></td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400" x-text="diamond.stock_number"></td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400" x-text="diamond.shape"></td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400" x-text="diamond.carat"></td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400" x-text="diamond.color"></td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400" x-text="diamond.clarity"></td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400" x-text="diamond.cut"></td>
                                    <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-400" x-text="diamond.price"></td>
                                    <td class="px-4 py-3">
                                        <span
                                        :class="{
                                            'rounded-full px-3 py-1 text-xs font-medium': true,
                                            'bg-green-100 text-green-700 dark:bg-green-500/15 dark:text-green-500': diamond.status === 'In Stock',
                                            'bg-red-100 text-red-700 dark:bg-red-500/15 dark:text-red-500': diamond.status === 'Out of Stock'
                                        }"
                                        x-text="diamond.status"></span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center gap-2">
                                            <button class="text-gray-500 hover:text-error-500 dark:text-gray-400 dark:hover:text-error-500">
                                                <svg
                                                    class="fill-current"
                                                    width="21"
                                                    height="21"
                                                    viewBox="0 0 21 21"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M7.04142 4.29199C7.04142 3.04935 8.04878 2.04199 9.29142 2.04199H11.7081C12.9507 2.04199 13.9581 3.04935 13.9581 4.29199V4.54199H16.1252H17.166C17.5802 4.54199 17.916 4.87778 17.916 5.29199C17.916 5.70621 17.5802 6.04199 17.166 6.04199H16.8752V8.74687V13.7469V16.7087C16.8752 17.9513 15.8678 18.9587 14.6252 18.9587H6.37516C5.13252 18.9587 4.12516 17.9513 4.12516 16.7087V13.7469V8.74687V6.04199H3.8335C3.41928 6.04199 3.0835 5.70621 3.0835 5.29199C3.0835 4.87778 3.41928 4.54199 3.8335 4.54199H4.87516H7.04142V4.29199ZM15.3752 13.7469V8.74687V6.04199H13.9581H13.2081H7.79142H7.04142H5.62516V8.74687V13.7469V16.7087C5.62516 17.1229 5.96095 17.4587 6.37516 17.4587H14.6252C15.0394 17.4587 15.3752 17.1229 15.3752 16.7087V13.7469ZM8.54142 4.54199H12.4581V4.29199C12.4581 3.87778 12.1223 3.54199 11.7081 3.54199H9.29142C8.87721 3.54199 8.54142 3.87778 8.54142 4.29199V4.54199ZM8.8335 8.50033C9.24771 8.50033 9.5835 8.83611 9.5835 9.25033V14.2503C9.5835 14.6645 9.24771 15.0003 8.8335 15.0003C8.41928 15.0003 8.0835 14.6645 8.0835 14.2503V9.25033C8.0835 8.83611 8.41928 8.50033 8.8335 8.50033ZM12.9168 9.25033C12.9168 8.83611 12.581 8.50033 12.1668 8.50033C11.7526 8.50033 11.4168 8.83611 11.4168 9.25033V14.2503C11.4168 14.6645 11.7526 15.0003 12.1668 15.0003C12.581 15.0003 12.9168 14.6645 12.9168 14.2503V9.25033Z"
                                                    fill=""
                                                    />
                                                </svg>
                                                </button>

                                                <button
                                                class="text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-white/90"
                                                >
                                                <svg
                                                    class="fill-current"
                                                    width="21"
                                                    height="21"
                                                    viewBox="0 0 21 21"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M17.0911 3.53206C16.2124 2.65338 14.7878 2.65338 13.9091 3.53206L5.6074 11.8337C5.29899 12.1421 5.08687 12.5335 4.99684 12.9603L4.26177 16.445C4.20943 16.6931 4.286 16.9508 4.46529 17.1301C4.64458 17.3094 4.90232 17.3859 5.15042 17.3336L8.63507 16.5985C9.06184 16.5085 9.45324 16.2964 9.76165 15.988L18.0633 7.68631C18.942 6.80763 18.942 5.38301 18.0633 4.50433L17.0911 3.53206ZM14.9697 4.59272C15.2626 4.29982 15.7375 4.29982 16.0304 4.59272L17.0027 5.56499C17.2956 5.85788 17.2956 6.33276 17.0027 6.62565L16.1043 7.52402L14.0714 5.49109L14.9697 4.59272ZM13.0107 6.55175L6.66806 12.8944C6.56526 12.9972 6.49455 13.1277 6.46454 13.2699L5.96704 15.6283L8.32547 15.1308C8.46772 15.1008 8.59819 15.0301 8.70099 14.9273L15.0436 8.58468L13.0107 6.55175Z"
                                                    fill=""
                                                    />
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
                            Showing <span x-text="startIndex + 1"></span> to <span x-text="Math.min(endIndex, filteredData.length)"></span> of <span x-text="filteredData.length"></span> entries
                        </p>
                        <div class="flex gap-2">
                            <button @click="previousPage" :disabled="currentPage === 1" class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700">
                                Previous
                            </button>
                            <button @click="nextPage" :disabled="currentPage >= totalPages" class="inline-flex items-center justify-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function diamondTable() {
                return {
                    columns: [
                        { key: 'date_added', label: 'Date Added' },
                        { key: 'stock_number', label: 'Stock' },
                        { key: 'shape', label: 'Shape' },
                        { key: 'carat', label: 'Carat' },
                        { key: 'color', label: 'Color' },
                        { key: 'clarity', label: 'Clarity' },
                        { key: 'cut', label: 'Cut' },
                        { key: 'price', label: 'Price' },
                        { key: 'status', label: 'Status' }
                    ],
                    data: [
                        {
                            id: 1,
                            date_added: "2024-02-15",
                            stock_number: "DIA-001",
                            shape: "Round",
                            carat: "1.01",
                            color: "D",
                            clarity: "VVS1",
                            cut: "Excellent",
                            price: "$12,500.00",
                            status: "In Stock"
                        },
                        {
                            id: 2,
                            date_added: "2024-02-14",
                            stock_number: "DIA-002",
                            shape: "Oval",
                            carat: "1.52",
                            color: "E",
                            clarity: "VS1",
                            cut: "Very Good",
                            price: "$18,750.00",
                            status: "Out of Stock"
                        }
                    ],
                    search: '',
                    sortColumn: 'date_added',
                    sortDirection: 'asc',
                    currentPage: 1,
                    perPage: 10,

                    get filteredData() {
                        const searchLower = this.search.toLowerCase();
                        return this.data
                            .filter(diamond =>
                                Object.values(diamond).some(value =>
                                    String(value).toLowerCase().includes(searchLower)
                                )
                            )
                            .sort((a, b) => {
                                const aVal = a[this.sortColumn];
                                const bVal = b[this.sortColumn];

                                if (this.sortColumn === 'price') {
                                    const aPrice = parseFloat(aVal.replace(/[$,]/g, ''));
                                    const bPrice = parseFloat(bVal.replace(/[$,]/g, ''));
                                    return this.sortDirection === 'asc' ? aPrice - bPrice : bPrice - aPrice;
                                }

                                if (this.sortColumn === 'date_added') {
                                    return this.sortDirection === 'asc'
                                        ? new Date(aVal) - new Date(bVal)
                                        : new Date(bVal) - new Date(aVal);
                                }

                                return this.sortDirection === 'asc'
                                    ? String(aVal).localeCompare(String(bVal))
                                    : String(bVal).localeCompare(String(aVal));
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
