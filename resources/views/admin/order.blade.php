@extends('admin.layout.master')

@section('content')
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6">
        <div class="flex flex-col gap-4 md:gap-6">
            {{-- Start Analytics Cards --}}
            {{-- <div class="col-span-12 space-y-6"> --}}
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 md:gap-2">
                <!-- Start Total Order Card -->
                <div
                    class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
                        <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.80443 5.60156C7.59109 5.60156 6.60749 6.58517 6.60749 7.79851C6.60749 9.01185 7.59109 9.99545 8.80443 9.99545C10.0178 9.99545 11.0014 9.01185 11.0014 7.79851C11.0014 6.58517 10.0178 5.60156 8.80443 5.60156ZM5.10749 7.79851C5.10749 5.75674 6.76267 4.10156 8.80443 4.10156C10.8462 4.10156 12.5014 5.75674 12.5014 7.79851C12.5014 9.84027 10.8462 11.4955 8.80443 11.4955C6.76267 11.4955 5.10749 9.84027 5.10749 7.79851ZM4.86252 15.3208C4.08769 16.0881 3.70377 17.0608 3.51705 17.8611C3.48384 18.0034 3.5211 18.1175 3.60712 18.2112C3.70161 18.3141 3.86659 18.3987 4.07591 18.3987H13.4249C13.6343 18.3987 13.7992 18.3141 13.8937 18.2112C13.9797 18.1175 14.017 18.0034 13.9838 17.8611C13.7971 17.0608 13.4132 16.0881 12.6383 15.3208C11.8821 14.572 10.6899 13.955 8.75042 13.955C6.81096 13.955 5.61877 14.572 4.86252 15.3208ZM3.8071 14.2549C4.87163 13.2009 6.45602 12.455 8.75042 12.455C11.0448 12.455 12.6292 13.2009 13.6937 14.2549C14.7397 15.2906 15.2207 16.5607 15.4446 17.5202C15.7658 18.8971 14.6071 19.8987 13.4249 19.8987H4.07591C2.89369 19.8987 1.73504 18.8971 2.05628 17.5202C2.28015 16.5607 2.76117 15.2906 3.8071 14.2549ZM15.3042 11.4955C14.4702 11.4955 13.7006 11.2193 13.0821 10.7533C13.3742 10.3314 13.6054 9.86419 13.7632 9.36432C14.1597 9.75463 14.7039 9.99545 15.3042 9.99545C16.5176 9.99545 17.5012 9.01185 17.5012 7.79851C17.5012 6.58517 16.5176 5.60156 15.3042 5.60156C14.7039 5.60156 14.1597 5.84239 13.7632 6.23271C13.6054 5.73284 13.3741 5.26561 13.082 4.84371C13.7006 4.37777 14.4702 4.10156 15.3042 4.10156C17.346 4.10156 19.0012 5.75674 19.0012 7.79851C19.0012 9.84027 17.346 11.4955 15.3042 11.4955ZM19.9248 19.8987H16.3901C16.7014 19.4736 16.9159 18.969 16.9827 18.3987H19.9248C20.1341 18.3987 20.2991 18.3141 20.3936 18.2112C20.4796 18.1175 20.5169 18.0034 20.4837 17.861C20.2969 17.0607 19.913 16.088 19.1382 15.3208C18.4047 14.5945 17.261 13.9921 15.4231 13.9566C15.2232 13.6945 14.9995 13.437 14.7491 13.1891C14.5144 12.9566 14.262 12.7384 13.9916 12.5362C14.3853 12.4831 14.8044 12.4549 15.2503 12.4549C17.5447 12.4549 19.1291 13.2008 20.1936 14.2549C21.2395 15.2906 21.7206 16.5607 21.9444 17.5202C22.2657 18.8971 21.107 19.8987 19.9248 19.8987Z"
                                fill="" />
                        </svg>
                    </div>

                    <div class="mt-5 flex items-end justify-between">
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Total Order</span>
                            <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">
                                3,782
                            </h4>
                        </div>

                        <span
                            class="flex items-center gap-1 rounded-full bg-success-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500">
                            <svg class="fill-current" width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.56462 1.62393C5.70193 1.47072 5.90135 1.37432 6.12329 1.37432C6.1236 1.37432 6.12391 1.37432 6.12422 1.37432C6.31631 1.37415 6.50845 1.44731 6.65505 1.59381L9.65514 4.5918C9.94814 4.88459 9.94831 5.35947 9.65552 5.65246C9.36273 5.94546 8.88785 5.94562 8.59486 5.65283L6.87329 3.93247L6.87329 10.125C6.87329 10.5392 6.53751 10.875 6.12329 10.875C5.70908 10.875 5.37329 10.5392 5.37329 10.125L5.37329 3.93578L3.65516 5.65282C3.36218 5.94562 2.8873 5.94547 2.5945 5.65248C2.3017 5.35949 2.30185 4.88462 2.59484 4.59182L5.56462 1.62393Z"
                                    fill="" />
                            </svg>

                            11.01%
                        </span>
                    </div>
                </div>
                <!-- End Total Order Card -->

                <!-- Start Open Order Card -->
                <div
                    class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
                        <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.665 3.75621C11.8762 3.65064 12.1247 3.65064 12.3358 3.75621L18.7807 6.97856L12.3358 10.2009C12.1247 10.3065 11.8762 10.3065 11.665 10.2009L5.22014 6.97856L11.665 3.75621ZM4.29297 8.19203V16.0946C4.29297 16.3787 4.45347 16.6384 4.70757 16.7654L11.25 20.0366V11.6513C11.1631 11.6205 11.0777 11.5843 10.9942 11.5426L4.29297 8.19203ZM12.75 20.037L19.2933 16.7654C19.5474 16.6384 19.7079 16.3787 19.7079 16.0946V8.19202L13.0066 11.5426C12.9229 11.5844 12.8372 11.6208 12.75 11.6516V20.037ZM13.0066 2.41456C12.3732 2.09786 11.6277 2.09786 10.9942 2.41456L4.03676 5.89319C3.27449 6.27432 2.79297 7.05342 2.79297 7.90566V16.0946C2.79297 16.9469 3.27448 17.726 4.03676 18.1071L10.9942 21.5857L11.3296 20.9149L10.9942 21.5857C11.6277 21.9024 12.3732 21.9024 13.0066 21.5857L19.9641 18.1071C20.7264 17.726 21.2079 16.9469 21.2079 16.0946V7.90566C21.2079 7.05342 20.7264 6.27432 19.9641 5.89319L13.0066 2.41456Z"
                                fill="" />
                        </svg>
                    </div>

                    <div class="mt-5 flex items-end justify-between">
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Open Orders</span>
                            <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">
                                5,359
                            </h4>
                        </div>

                        <span
                            class="flex items-center gap-1 rounded-full bg-error-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-error-600 dark:bg-error-500/15 dark:text-error-500">
                            <svg class="fill-current" width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.31462 10.3761C5.45194 10.5293 5.65136 10.6257 5.87329 10.6257C5.8736 10.6257 5.8739 10.6257 5.87421 10.6257C6.0663 10.6259 6.25845 10.5527 6.40505 10.4062L9.40514 7.4082C9.69814 7.11541 9.69831 6.64054 9.40552 6.34754C9.11273 6.05454 8.63785 6.05438 8.34486 6.34717L6.62329 8.06753L6.62329 1.875C6.62329 1.46079 6.28751 1.125 5.87329 1.125C5.45908 1.125 5.12329 1.46079 5.12329 1.875L5.12329 8.06422L3.40516 6.34719C3.11218 6.05439 2.6373 6.05454 2.3445 6.34752C2.0517 6.64051 2.05185 7.11538 2.34484 7.40818L5.31462 10.3761Z"
                                    fill="" />
                            </svg>

                            9.05%
                        </span>
                    </div>
                </div>
                <!-- End Open Order Card -->

                <!-- Start Total Delivered Card -->
                <div
                    class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
                        <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.665 3.75621C11.8762 3.65064 12.1247 3.65064 12.3358 3.75621L18.7807 6.97856L12.3358 10.2009C12.1247 10.3065 11.8762 10.3065 11.665 10.2009L5.22014 6.97856L11.665 3.75621ZM4.29297 8.19203V16.0946C4.29297 16.3787 4.45347 16.6384 4.70757 16.7654L11.25 20.0366V11.6513C11.1631 11.6205 11.0777 11.5843 10.9942 11.5426L4.29297 8.19203ZM12.75 20.037L19.2933 16.7654C19.5474 16.6384 19.7079 16.3787 19.7079 16.0946V8.19202L13.0066 11.5426C12.9229 11.5844 12.8372 11.6208 12.75 11.6516V20.037ZM13.0066 2.41456C12.3732 2.09786 11.6277 2.09786 10.9942 2.41456L4.03676 5.89319C3.27449 6.27432 2.79297 7.05342 2.79297 7.90566V16.0946C2.79297 16.9469 3.27448 17.726 4.03676 18.1071L10.9942 21.5857L11.3296 20.9149L10.9942 21.5857C11.6277 21.9024 12.3732 21.9024 13.0066 21.5857L19.9641 18.1071C20.7264 17.726 21.2079 16.9469 21.2079 16.0946V7.90566C21.2079 7.05342 20.7264 6.27432 19.9641 5.89319L13.0066 2.41456Z"
                                fill="" />
                        </svg>
                    </div>

                    <div class="mt-5 flex items-end justify-between">
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Total Delivered</span>
                            <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">
                                5,359
                            </h4>
                        </div>

                        <span
                            class="flex items-center gap-1 rounded-full bg-error-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-error-600 dark:bg-error-500/15 dark:text-error-500">
                            <svg class="fill-current" width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.31462 10.3761C5.45194 10.5293 5.65136 10.6257 5.87329 10.6257C5.8736 10.6257 5.8739 10.6257 5.87421 10.6257C6.0663 10.6259 6.25845 10.5527 6.40505 10.4062L9.40514 7.4082C9.69814 7.11541 9.69831 6.64054 9.40552 6.34754C9.11273 6.05454 8.63785 6.05438 8.34486 6.34717L6.62329 8.06753L6.62329 1.875C6.62329 1.46079 6.28751 1.125 5.87329 1.125C5.45908 1.125 5.12329 1.46079 5.12329 1.875L5.12329 8.06422L3.40516 6.34719C3.11218 6.05439 2.6373 6.05454 2.3445 6.34752C2.0517 6.64051 2.05185 7.11538 2.34484 7.40818L5.31462 10.3761Z"
                                    fill="" />
                            </svg>

                            9.05%
                        </span>
                    </div>
                </div>
                <!-- End Total Delivered Card -->

                <!-- Start Average Price Card -->
                <div
                    class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
                        <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.665 3.75621C11.8762 3.65064 12.1247 3.65064 12.3358 3.75621L18.7807 6.97856L12.3358 10.2009C12.1247 10.3065 11.8762 10.3065 11.665 10.2009L5.22014 6.97856L11.665 3.75621ZM4.29297 8.19203V16.0946C4.29297 16.3787 4.45347 16.6384 4.70757 16.7654L11.25 20.0366V11.6513C11.1631 11.6205 11.0777 11.5843 10.9942 11.5426L4.29297 8.19203ZM12.75 20.037L19.2933 16.7654C19.5474 16.6384 19.7079 16.3787 19.7079 16.0946V8.19202L13.0066 11.5426C12.9229 11.5844 12.8372 11.6208 12.75 11.6516V20.037ZM13.0066 2.41456C12.3732 2.09786 11.6277 2.09786 10.9942 2.41456L4.03676 5.89319C3.27449 6.27432 2.79297 7.05342 2.79297 7.90566V16.0946C2.79297 16.9469 3.27448 17.726 4.03676 18.1071L10.9942 21.5857L11.3296 20.9149L10.9942 21.5857C11.6277 21.9024 12.3732 21.9024 13.0066 21.5857L19.9641 18.1071C20.7264 17.726 21.2079 16.9469 21.2079 16.0946V7.90566C21.2079 7.05342 20.7264 6.27432 19.9641 5.89319L13.0066 2.41456Z"
                                fill="" />
                        </svg>
                    </div>

                    <div class="mt-5 flex items-end justify-between">
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Average Price</span>
                            <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">
                                5,359
                            </h4>
                        </div>

                        <span
                            class="flex items-center gap-1 rounded-full bg-error-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-error-600 dark:bg-error-500/15 dark:text-error-500">
                            <svg class="fill-current" width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.31462 10.3761C5.45194 10.5293 5.65136 10.6257 5.87329 10.6257C5.8736 10.6257 5.8739 10.6257 5.87421 10.6257C6.0663 10.6259 6.25845 10.5527 6.40505 10.4062L9.40514 7.4082C9.69814 7.11541 9.69831 6.64054 9.40552 6.34754C9.11273 6.05454 8.63785 6.05438 8.34486 6.34717L6.62329 8.06753L6.62329 1.875C6.62329 1.46079 6.28751 1.125 5.87329 1.125C5.45908 1.125 5.12329 1.46079 5.12329 1.875L5.12329 8.06422L3.40516 6.34719C3.11218 6.05439 2.6373 6.05454 2.3445 6.34752C2.0517 6.64051 2.05185 7.11538 2.34484 7.40818L5.31462 10.3761Z"
                                    fill="" />
                            </svg>

                            9.05%
                        </span>
                    </div>
                </div>
                <!-- End Average Price Card -->
            </div>
            {{-- End Analytics Cards --}}

            {{-- Start Orders Tables --}}
            <div class="border-t border-gray-100 dark:border-gray-800">
                <div x-data="{ activeTab: 'all' }">
                    <div class="rounded-t-xl bg-white border border-gray-200 p-3 dark:border-gray-800">
                        <nav class="flex overflow-x-auto rounded-lg bg-gray-200 p-1 dark:bg-gray-900">
                            <button class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200 ease-in-out"
                                :class="activeTab === 'all' ? 'bg-white text-gray-900 shadow dark:bg-gray-700 dark:text-white' : 'bg-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                                @click="activeTab = 'all'">All</button>
                            <button class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200 ease-in-out"
                                :class="activeTab === 'new' ? 'bg-white text-gray-900 shadow dark:bg-gray-700 dark:text-white' : 'bg-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                                @click="activeTab = 'new'">New</button>
                            <button class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200 ease-in-out"
                                :class="activeTab === 'processing' ? 'bg-white text-gray-900 shadow dark:bg-gray-700 dark:text-white' : 'bg-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                                @click="activeTab = 'processing'">Processing</button>
                            <button class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200 ease-in-out"
                                :class="activeTab === 'shipped' ? 'bg-white text-gray-900 shadow dark:bg-gray-700 dark:text-white' : 'bg-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                                @click="activeTab = 'shipped'">Shipped</button>
                            <button class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200 ease-in-out"
                                :class="activeTab === 'delivered' ? 'bg-white text-gray-900 shadow dark:bg-gray-700 dark:text-white' : 'bg-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                                @click="activeTab = 'delivered'">Delivered</button>
                            <button class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200 ease-in-out"
                                :class="activeTab === 'cancelled' ? 'bg-white text-gray-900 shadow dark:bg-gray-700 dark:text-white' : 'bg-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200'"
                                @click="activeTab = 'cancelled'">Cancelled</button>
                        </nav>
                    </div>
                    <div class="rounded-b-xl border border-t-0 border-gray-200pt-4 dark:border-gray-800">
                        <div x-show="activeTab === 'all'">
                            <div class="col-span-12">
                                <div class="">
                                    <!-- DataTable Three -->
                                    <div x-data="allOrderTable()"
                                        class="overflow-hidden border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
                                        
                                        <div class="mb-4 flex flex-col gap-2 px-4 sm:flex-row sm:items-center sm:justify-between">
                                            <div>
                                                <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                                                    All Orders
                                                </h3>
                                            </div>
                            
                                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                                                <div class="relative flex items-center">
                                                    <!-- Search Icon -->
                                                    <button class="absolute left-4 flex items-center text-gray-500 dark:text-gray-400">
                                                        <svg class="fill-current w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" 
                                                                d="M3.04199 9.37363C3.04199 5.87693 5.87735 3.04199 9.37533 3.04199C12.8733 3.04199 15.7087 5.87693 15.7087 9.37363C15.7087 12.8703 12.8733 15.7053 9.37533 15.7053C5.87735 15.7053 3.04199 12.8703 3.04199 9.37363ZM9.37533 1.54199C5.04926 1.54199 1.54199 5.04817 1.54199 9.37363C1.54199 13.6991 5.04926 17.2053 9.37533 17.2053C11.2676 17.2053 13.0032 16.5344 14.3572 15.4176L17.1773 18.238C17.4702 18.5309 17.945 18.5309 18.2379 18.238C18.5308 17.9451 18.5309 17.4703 18.238 17.1773L15.4182 14.3573C16.5367 13.0033 17.2087 11.2669 17.2087 9.37363C17.2087 5.04817 13.7014 1.54199 9.37533 1.54199Z"/>
                                                        </svg>
                                                    </button>

                                                    <!-- Search Input -->
                                                    <input type="text" x-model="search" placeholder="Search..." 
                                                        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2 pl-12 pr-4 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800 xl:w-[300px]" />
                                                </div>

                                            </div>
                                        </div>
                            
                                        <div class="max-w-full overflow-x-auto">
                                            <div class="min-w-[1102px]">
                                                <!-- Table Header -->
                                                <div class="grid grid-cols-12 border-t border-gray-200 dark:border-gray-800">
                                                    <!-- Order Date -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="allSortBy('order_date')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Order Date</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Order Number -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="allSortBy('order_number')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Order Number</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Customer -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="allSortBy('customer')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Customer</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Status -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="allSortBy('status')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Status</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Currency -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="allSortBy('currency')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Currency</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Total Price -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-3 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="allSortBy('total_price')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Total Price</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Shipping Cost -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="allSortBy('shipping_cost')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Shipping Cost</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Actions -->
                                                    <div class="flex col-span-1 items-center px-4 py-3">
                                                        <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Actions</p>
                                                    </div>
                                                </div>
                            
                                                <!-- Table Body -->
                                                <template x-for="order in allPaginatedData" :key="order.id">
                                                    <div x-data="{ checkboxToggle: false }" class="grid grid-cols-12 border-t border-gray-100 dark:border-gray-800" :class="checkboxToggle ? 'bg-gray-50 dark:bg-gray-900' : ''">
                                                        <!-- Order Date -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <div class="flex gap-3">
                                                                <div class="mt-1">
                                                                    <label class="flex cursor-pointer select-none items-center text-sm font-medium text-gray-700 dark:text-gray-400">
                                                                        <input type="checkbox" class="sr-only" @change="checkboxToggle = !checkboxToggle" />
                                                                        <span :class="checkboxToggle ? 'border-brand-500 bg-brand-500' : 'bg-transparent border-gray-300 dark:border-gray-700'" class="flex h-4 w-4 items-center justify-center rounded border-[1.25px]">
                                                                            <span :class="checkboxToggle ? '' : 'opacity-0'">
                                                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M10 3L4.5 8.5L2 6" stroke="white" stroke-width="1.6666" stroke-linecap="round" stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <p class="block text-theme-sm font-medium text-gray-800 dark:text-white/90" x-text="order.order_date"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <!-- Order Number -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.order_number"></p>
                                                        </div>
                            
                                                        <!-- Customer -->
                                                        <div class="col-span-2 flex flex-col items-start border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.customer"></p>
                                                            <span class="text-xs text-gray-500 dark:text-gray-400" x-text="order.customer_email"></span>
                                                        </div>
                            
                                                        <!-- Status -->
                                                        <div class="col-span-1 flex justify-center items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="flex justify-center items-center gap-1 rounded-full px-4 py-1 text-xs font-medium"
                                                               :class="{
                                                                   'bg-blue-100 dark:bg-blue-500/15 text-blue-700 dark:text-blue-500': order.status === 'New',
                                                                   'bg-orange-100 dark:bg-orange-500/15 text-orange-700 dark:text-orange-400': order.status === 'Processing',
                                                                   'bg-emerald-100 dark:bg-emerald-500 text-emerald-600 dark:text-emerald-500': order.status === 'Shipped',
                                                                   'bg-green-100 dark:bg-green-500 text-green-600 dark:text-green-500': order.status === 'Delivered',
                                                                   'bg-red-100 dark:bg-red-500 text-red-500 dark:text-red-500': order.status === 'Cancelled'
                                                               }">
                                                               <img :src="getStatusIcon(order.status)" alt="Status Icon" class="w-4 h-4">
                                                               <span x-text="order.status"></span>
                                                            </p>
                                                        </div>
                                                        
                                                        <script>
                                                            function getStatusIcon(status) {
                                                                const icons = {
                                                                    "New": "{{ asset('/Shape/new.svg') }}",
                                                                    "Processing": "{{ asset('/Shape/processing.svg') }}",
                                                                    "Shipped": "{{ asset('/Shape/shipped.svg') }}",
                                                                    "Delivered": "{{ asset('/Shape/delivered.svg') }}",
                                                                    "Cancelled": "{{ asset('/Shape/cancelled.svg') }}"
                                                                };
                                                                return icons[status] || "{{ asset('icons/default.png') }}";
                                                            }
                                                        </script>
                                                        
                            
                                                        <!-- Currency -->
                                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.currency"></p>
                                                        </div>
                            
                                                        <!-- Total Price -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.total_price"></p>
                                                        </div>
                            
                                                        <!-- Shipping Cost -->
                                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.shipping_cost"></p>
                                                        </div>
                            
                                                        <!-- Actions -->
                                                        <div class="col-span-1 flex items-center px-4 py-3">
                                                            <div class="flex w-full items-center gap-2">
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
                                                        </div>
                                                    </div>
                                                </template>
                            
                                                <!-- Pagination Controls -->
                                                <div class="border-t border-gray-100 py-4 pl-[18px] pr-4 dark:border-gray-800">
                                                    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between">
                                                        <p class="border-b border-gray-100 pb-3 text-center text-sm font-medium text-gray-500 dark:border-gray-800 dark:text-gray-400 xl:border-b-0 xl:pb-0 xl:text-left">
                                                            Showing <span x-text="allStartEntry"></span> to
                                                            <span x-text="allEndEntry"></span> of
                                                            <span x-text="allTotalEntries"></span> entries
                                                        </p>
                                                        <div class="flex items-center justify-center gap-0.5 pt-3 xl:justify-end xl:pt-0">
                                                            <button @click="allPrevPage()"
                                                                class="mr-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                                                :disabled="currentPage === 1">
                                                                Previous
                                                            </button>
                            
                                                            <template x-for="page in allPagesAroundCurrent" :key="page">
                                                                <button @click="allGoToPage(page)"
                                                                    :class="currentPage === page ? 'bg-blue-500/[0.08] text-brand-500' : 'text-gray-700 dark:text-gray-400'"
                                                                    class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium hover:bg-blue-500/[0.08] hover:text-brand-500 dark:hover:text-brand-500">
                                                                    <span x-text="page"></span>
                                                                </button>
                                                            </template>
                            
                                                            <button @click="allNextPage()"
                                                                class="ml-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                                                :disabled="currentPage === allTotalPages">
                                                                Next
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    {{-- Start Table Records Data Script and Sort Script --}}
                                    <script>
                                        function allOrderTable() {
                                            return {
                                                search: "",
                                                sortColumn: "order_date",
                                                sortDirection: "asc",
                                                currentPage: 1,
                                                perPage: 5,
                                                data: [
                                                    {
                                                        id: 1,
                                                        order_date: "2024-02-15",
                                                        customer_email: "john.smith@example.com",
                                                        order_number: "ORD-001",
                                                        customer: "John Smith",
                                                        status: "New",
                                                        currency: "USD",
                                                        total_price: "$1,250.00",
                                                        shipping_cost: "$25.00"
                                                    },
                                                    {
                                                        id: 2,
                                                        order_date: "2024-02-14",
                                                        customer_email: "jane.doe@example.com",
                                                        order_number: "ORD-002",
                                                        customer: "Jane Doe",
                                                        status: "Processing",
                                                        currency: "EUR",
                                                        total_price: "$2,850.00",
                                                        shipping_cost: "$35.00"
                                                    },
                                                    {
                                                        id: 3,
                                                        order_date: "2024-02-13",
                                                        customer_email: "robert.johnson@example.com",
                                                        order_number: "ORD-003",
                                                        customer: "Robert Johnson",
                                                        status: "Shipped",
                                                        currency: "GBP",
                                                        total_price: "$750.00",
                                                        shipping_cost: "$15.00"
                                                    },
                                                    {
                                                        id: 4,
                                                        order_date: "2024-02-12",
                                                        customer_email: "emma.wilson@example.com",
                                                        order_number: "ORD-004",
                                                        customer: "Emma Wilson",
                                                        status: "Delivered",
                                                        currency: "USD",
                                                        total_price: "$3,450.00",
                                                        shipping_cost: "$45.00"
                                                    },
                                                    {
                                                        id: 5,
                                                        order_date: "2024-02-11",
                                                        customer_email: "michael.brown@example.com",
                                                        order_number: "ORD-005",
                                                        customer: "Michael Brown",
                                                        status: "Cancelled",
                                                        currency: "USD",
                                                        total_price: "$9881000.00",
                                                        shipping_cost: "$20.00"
                                                    }
                                                ],
                            
                                                get allfilteredData() {
                                                    const searchLower = this.search.toLowerCase();
                                                    return this.data
                                                        .filter(order => 
                                                            order.order_date.toLowerCase().includes(searchLower) ||
                                                            order.order_number.toLowerCase().includes(searchLower) ||
                                                            order.customer.toLowerCase().includes(searchLower) ||
                                                            order.customer_email.toLowerCase().includes(searchLower)
                                                        )
                                                        .sort((a, b) => {
                                                            let modifier = this.sortDirection === "asc" ? 1 : -1;
                                                            
                                                            if (this.sortColumn === "total_price" || this.sortColumn === "shipping_cost") {
                                                                const aValue = parseFloat(a[this.sortColumn].replace(/[$,]/g, ''));
                                                                const bValue = parseFloat(b[this.sortColumn].replace(/[$,]/g, ''));
                                                                return (aValue - bValue) * modifier;
                                                            }
                                                            
                                                            if (this.sortColumn === "order_date") {
                                                                return (new Date(a.order_date) - new Date(b.order_date)) * modifier;
                                                            }
                                                            
                                                            return a[this.sortColumn].localeCompare(b[this.sortColumn]) * modifier;
                                                        });
                                                },
                            
                                                get allPaginatedData() {
                                                    const start = (this.currentPage - 1) * this.perPage;
                                                    const end = start + this.perPage;
                                                    return this.allfilteredData.slice(start, end);
                                                },
                            
                                                get allTotalEntries() {
                                                    return this.allfilteredData.length;
                                                },
                            
                                                get allStartEntry() {
                                                    return Math.min((this.currentPage - 1) * this.perPage + 1, this.allTotalEntries);
                                                },
                            
                                                get allEndEntry() {
                                                    return Math.min(this.currentPage * this.perPage, this.allTotalEntries);
                                                },
                            
                                                get allTotalPages() {
                                                    return Math.ceil(this.allfilteredData.length / this.perPage);
                                                },
                            
                                                get allPagesAroundCurrent() {
                                                    const pages = [];
                                                    const startPage = Math.max(2, this.currentPage - 2);
                                                    const endPage = Math.min(this.allTotalPages - 1, this.currentPage + 2);
                            
                                                    for (let i = startPage; i <= endPage; i++) {
                                                        pages.push(i);
                                                    }
                                                    return pages;
                                                },
                            
                                                allSortBy(column) {
                                                    if (this.sortColumn === column) {
                                                        this.sortDirection = this.sortDirection === "asc" ? "desc" : "asc";
                                                    } else {
                                                        this.sortDirection = "asc";
                                                        this.sortColumn = column;
                                                    }
                                                },
                            
                                                allGoToPage(page) {
                                                    if (page >= 1 && page <= this.allTotalPages) {
                                                        this.currentPage = page;
                                                    }
                                                },
                            
                                                allNextPage() {
                                                    if (this.currentPage < this.allTotalPages) {
                                                        this.currentPage++;
                                                    }
                                                },
                            
                                                allPrevPage() {
                                                    if (this.currentPage > 1) {
                                                        this.currentPage--;
                                                    }
                                                }
                                            };
                                        }
                                    </script>
                                    {{-- End Table Records Data Script and Sort Script --}}
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'new'">
                            <div class="col-span-12">
                                <div class="">
                                    <!-- DataTable Three -->
                                    <div x-data="newOrderTable()"
                                        class="overflow-hidden border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
                                        
                                        <div class="mb-4 flex flex-col gap-2 px-4 sm:flex-row sm:items-center sm:justify-between">
                                            <div>
                                                <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                                                    New Orders
                                                </h3>
                                            </div>
                            
                                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                                                <div class="relative flex items-center">
                                                    <!-- Search Icon -->
                                                    <button class="absolute left-4 flex items-center text-gray-500 dark:text-gray-400">
                                                        <svg class="fill-current w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" 
                                                                d="M3.04199 9.37363C3.04199 5.87693 5.87735 3.04199 9.37533 3.04199C12.8733 3.04199 15.7087 5.87693 15.7087 9.37363C15.7087 12.8703 12.8733 15.7053 9.37533 15.7053C5.87735 15.7053 3.04199 12.8703 3.04199 9.37363ZM9.37533 1.54199C5.04926 1.54199 1.54199 5.04817 1.54199 9.37363C1.54199 13.6991 5.04926 17.2053 9.37533 17.2053C11.2676 17.2053 13.0032 16.5344 14.3572 15.4176L17.1773 18.238C17.4702 18.5309 17.945 18.5309 18.2379 18.238C18.5308 17.9451 18.5309 17.4703 18.238 17.1773L15.4182 14.3573C16.5367 13.0033 17.2087 11.2669 17.2087 9.37363C17.2087 5.04817 13.7014 1.54199 9.37533 1.54199Z"/>
                                                        </svg>
                                                    </button>

                                                    <!-- Search Input -->
                                                    <input type="text" x-model="search" placeholder="Search..." 
                                                        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2 pl-12 pr-4 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800 xl:w-[300px]" />
                                                </div>

                                            </div>
                                        </div>
                            
                                        <div class="max-w-full overflow-x-auto">
                                            <div class="min-w-[1102px]">
                                                <!-- Table Header -->
                                                <div class="grid grid-cols-12 border-t border-gray-200 dark:border-gray-800">
                                                    <!-- Order Date -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="newSortBy('order_date')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Order Date</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Order Number -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="newSortBy('order_number')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Order Number</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Customer -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="newSortBy('customer')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Customer</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Status -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="newSortBy('status')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Status</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Currency -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="newSortBy('currency')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Currency</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Total Price -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-3 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="newSortBy('total_price')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Total Price</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Shipping Cost -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="newSortBy('shipping_cost')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Shipping Cost</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Actions -->
                                                    <div class="flex col-span-1 items-center px-4 py-3">
                                                        <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Actions</p>
                                                    </div>
                                                </div>
                            
                                                <!-- Table Body -->
                                                <template x-for="order in newPaginatedData" :key="order.id">
                                                    <div x-data="{ checkboxToggle: false }" class="grid grid-cols-12 border-t border-gray-100 dark:border-gray-800" :class="checkboxToggle ? 'bg-gray-50 dark:bg-gray-900' : ''">
                                                        <!-- Order Date -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <div class="flex gap-3">
                                                                <div class="mt-1">
                                                                    <label class="flex cursor-pointer select-none items-center text-sm font-medium text-gray-700 dark:text-gray-400">
                                                                        <input type="checkbox" class="sr-only" @change="checkboxToggle = !checkboxToggle" />
                                                                        <span :class="checkboxToggle ? 'border-brand-500 bg-brand-500' : 'bg-transparent border-gray-300 dark:border-gray-700'" class="flex h-4 w-4 items-center justify-center rounded border-[1.25px]">
                                                                            <span :class="checkboxToggle ? '' : 'opacity-0'">
                                                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M10 3L4.5 8.5L2 6" stroke="white" stroke-width="1.6666" stroke-linecap="round" stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <p class="block text-theme-sm font-medium text-gray-800 dark:text-white/90" x-text="order.order_date"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <!-- Order Number -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.order_number"></p>
                                                        </div>
                            
                                                        <!-- Customer -->
                                                        <div class="col-span-2 flex flex-col items-start border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.customer"></p>
                                                            <span class="text-xs text-gray-500 dark:text-gray-400" x-text="order.customer_email"></span>
                                                        </div>
                            
                                                        <!-- Status -->
                                                        <div class="col-span-1 flex justify-center items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="flex justify-center items-center gap-1 rounded-full px-4 py-1 text-xs font-medium"
                                                               :class="{
                                                                   'bg-blue-100 dark:bg-blue-500/15 text-blue-700 dark:text-blue-500': order.status === 'New',
                                                               }">
                                                               <img :src="getStatusIcon(order.status)" alt="Status Icon" class="w-4 h-4">
                                                               <span x-text="order.status"></span>
                                                            </p>
                                                        </div>
                                                        
                                                        <script>
                                                            function getStatusIcon(status) {
                                                                const icons = {
                                                                    "New": "{{ asset('/Shape/new.svg') }}",
                                                                };
                                                                return icons[status] || "{{ asset('icons/default.png') }}";
                                                            }
                                                        </script>
                                                        
                            
                                                        <!-- Currency -->
                                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.currency"></p>
                                                        </div>
                            
                                                        <!-- Total Price -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.total_price"></p>
                                                        </div>
                            
                                                        <!-- Shipping Cost -->
                                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.shipping_cost"></p>
                                                        </div>
                            
                                                        <!-- Actions -->
                                                        <div class="col-span-1 flex items-center px-4 py-3">
                                                            <div class="flex w-full items-center gap-2">
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
                                                        </div>
                                                    </div>
                                                </template>
                            
                                                <!-- Pagination Controls -->
                                                <div class="border-t border-gray-100 py-4 pl-[18px] pr-4 dark:border-gray-800">
                                                    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between">
                                                        <p class="border-b border-gray-100 pb-3 text-center text-sm font-medium text-gray-500 dark:border-gray-800 dark:text-gray-400 xl:border-b-0 xl:pb-0 xl:text-left">
                                                            Showing <span x-text="newStartEntry"></span> to
                                                            <span x-text="newEndEntry"></span> of
                                                            <span x-text="newTotalEntries"></span> entries
                                                        </p>
                                                        <div class="flex items-center justify-center gap-0.5 pt-3 xl:justify-end xl:pt-0">
                                                            <button @click="newPrevPage()"
                                                                class="mr-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                                                :disabled="currentPage === 1">
                                                                Previous
                                                            </button>
                            
                                                            <template x-for="page in newPagesAroundCurrent" :key="page">
                                                                <button @click="newGoToPage(page)"
                                                                    :class="currentPage === page ? 'bg-blue-500/[0.08] text-brand-500' : 'text-gray-700 dark:text-gray-400'"
                                                                    class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium hover:bg-blue-500/[0.08] hover:text-brand-500 dark:hover:text-brand-500">
                                                                    <span x-text="page"></span>
                                                                </button>
                                                            </template>
                            
                                                            <button @click="newNextPage()"
                                                                class="ml-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                                                :disabled="currentPage === newTotalPages">
                                                                Next
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    {{-- Start Table Records Data Script and Sort Script --}}
                                    <script>
                                        function newOrderTable() {
                                            return {
                                                search: "",
                                                sortColumn: "order_date",
                                                sortDirection: "asc",
                                                currentPage: 1,
                                                perPage: 5,
                                                data: [
                                                    {
                                                        id: 1,
                                                        order_date: "2024-02-15",
                                                        customer_email: "john.smith@example.com",
                                                        order_number: "ORD-001",
                                                        customer: "John Smith",
                                                        status: "New",
                                                        currency: "USD",
                                                        total_price: "$1,250.00",
                                                        shipping_cost: "$25.00"
                                                    },
                                                    {
                                                        id: 2,
                                                        order_date: "2024-02-14",
                                                        customer_email: "jane.doe@example.com",
                                                        order_number: "ORD-002",
                                                        customer: "Jane Doe",
                                                        status: "New",
                                                        currency: "EUR",
                                                        total_price: "$2,850.00",
                                                        shipping_cost: "$35.00"
                                                    },
                                                ],
                            
                                                get newfilteredData() {
                                                    const searchLower = this.search.toLowerCase();
                                                    return this.data
                                                        .filter(order => 
                                                            order.order_date.toLowerCase().includes(searchLower) ||
                                                            order.order_number.toLowerCase().includes(searchLower) ||
                                                            order.customer.toLowerCase().includes(searchLower) ||
                                                            order.customer_email.toLowerCase().includes(searchLower)
                                                        )
                                                        .sort((a, b) => {
                                                            let modifier = this.sortDirection === "asc" ? 1 : -1;
                                                            
                                                            if (this.sortColumn === "total_price" || this.sortColumn === "shipping_cost") {
                                                                const aValue = parseFloat(a[this.sortColumn].replace(/[$,]/g, ''));
                                                                const bValue = parseFloat(b[this.sortColumn].replace(/[$,]/g, ''));
                                                                return (aValue - bValue) * modifier;
                                                            }
                                                            
                                                            if (this.sortColumn === "order_date") {
                                                                return (new Date(a.order_date) - new Date(b.order_date)) * modifier;
                                                            }
                                                            
                                                            return a[this.sortColumn].localeCompare(b[this.sortColumn]) * modifier;
                                                        });
                                                },
                            
                                                get newPaginatedData() {
                                                    const start = (this.currentPage - 1) * this.perPage;
                                                    const end = start + this.perPage;
                                                    return this.newfilteredData.slice(start, end);
                                                },
                            
                                                get newTotalEntries() {
                                                    return this.newfilteredData.length;
                                                },
                            
                                                get newStartEntry() {
                                                    return Math.min((this.currentPage - 1) * this.perPage + 1, this.newTotalEntries);
                                                },
                            
                                                get newEndEntry() {
                                                    return Math.min(this.currentPage * this.perPage, this.newTotalEntries);
                                                },
                            
                                                get newTotalPages() {
                                                    return Math.ceil(this.newfilteredData.length / this.perPage);
                                                },
                            
                                                get newPagesAroundCurrent() {
                                                    const pages = [];
                                                    const startPage = Math.max(2, this.currentPage - 2);
                                                    const endPage = Math.min(this.newTotalPages - 1, this.currentPage + 2);
                            
                                                    for (let i = startPage; i <= endPage; i++) {
                                                        pages.push(i);
                                                    }
                                                    return pages;
                                                },
                            
                                                newSortBy(column) {
                                                    if (this.sortColumn === column) {
                                                        this.sortDirection = this.sortDirection === "asc" ? "desc" : "asc";
                                                    } else {
                                                        this.sortDirection = "asc";
                                                        this.sortColumn = column;
                                                    }
                                                },
                            
                                                newGoToPage(page) {
                                                    if (page >= 1 && page <= this.newTotalPages) {
                                                        this.currentPage = page;
                                                    }
                                                },
                            
                                                newNextPage() {
                                                    if (this.currentPage < this.newTotalPages) {
                                                        this.currentPage++;
                                                    }
                                                },
                            
                                                newPrevPage() {
                                                    if (this.currentPage > 1) {
                                                        this.currentPage--;
                                                    }
                                                }
                                            };
                                        }
                                    </script>
                                    {{-- End Table Records Data Script and Sort Script --}}
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'processing'">
                            <div class="col-span-12">
                                <div class="">
                                    <!-- DataTable Three -->
                                    <div x-data="processingOrderTable()"
                                        class="overflow-hidden border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
                                        
                                        <div class="mb-4 flex flex-col gap-2 px-4 sm:flex-row sm:items-center sm:justify-between">
                                            <div>
                                                <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                                                    Processing Orders
                                                </h3>
                                            </div>
                            
                                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                                                <div class="relative flex items-center">
                                                    <!-- Search Icon -->
                                                    <button class="absolute left-4 flex items-center text-gray-500 dark:text-gray-400">
                                                        <svg class="fill-current w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" 
                                                                d="M3.04199 9.37363C3.04199 5.87693 5.87735 3.04199 9.37533 3.04199C12.8733 3.04199 15.7087 5.87693 15.7087 9.37363C15.7087 12.8703 12.8733 15.7053 9.37533 15.7053C5.87735 15.7053 3.04199 12.8703 3.04199 9.37363ZM9.37533 1.54199C5.04926 1.54199 1.54199 5.04817 1.54199 9.37363C1.54199 13.6991 5.04926 17.2053 9.37533 17.2053C11.2676 17.2053 13.0032 16.5344 14.3572 15.4176L17.1773 18.238C17.4702 18.5309 17.945 18.5309 18.2379 18.238C18.5308 17.9451 18.5309 17.4703 18.238 17.1773L15.4182 14.3573C16.5367 13.0033 17.2087 11.2669 17.2087 9.37363C17.2087 5.04817 13.7014 1.54199 9.37533 1.54199Z"/>
                                                        </svg>
                                                    </button>

                                                    <!-- Search Input -->
                                                    <input type="text" x-model="search" placeholder="Search..." 
                                                        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2 pl-12 pr-4 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800 xl:w-[300px]" />
                                                </div>

                                            </div>
                                        </div>
                            
                                        <div class="max-w-full overflow-x-auto">
                                            <div class="min-w-[1102px]">
                                                <!-- Table Header -->
                                                <div class="grid grid-cols-12 border-t border-gray-200 dark:border-gray-800">
                                                    <!-- Order Date -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="processingSortBy('order_date')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Order Date</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Order Number -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="processingSortBy('order_number')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Order Number</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Customer -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="processingSortBy('customer')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Customer</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Status -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="processingSortBy('status')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Status</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Currency -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="processingSortBy('currency')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Currency</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Total Price -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-3 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="processingSortBy('total_price')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Total Price</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Shipping Cost -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="processingSortBy('shipping_cost')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Shipping Cost</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Actions -->
                                                    <div class="flex col-span-1 items-center px-4 py-3">
                                                        <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Actions</p>
                                                    </div>
                                                </div>
                            
                                                <!-- Table Body -->
                                                <template x-for="order in processingPaginatedData" :key="order.id">
                                                    <div x-data="{ checkboxToggle: false }" class="grid grid-cols-12 border-t border-gray-100 dark:border-gray-800" :class="checkboxToggle ? 'bg-gray-50 dark:bg-gray-900' : ''">
                                                        <!-- Order Date -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <div class="flex gap-3">
                                                                <div class="mt-1">
                                                                    <label class="flex cursor-pointer select-none items-center text-sm font-medium text-gray-700 dark:text-gray-400">
                                                                        <input type="checkbox" class="sr-only" @change="checkboxToggle = !checkboxToggle" />
                                                                        <span :class="checkboxToggle ? 'border-brand-500 bg-brand-500' : 'bg-transparent border-gray-300 dark:border-gray-700'" class="flex h-4 w-4 items-center justify-center rounded border-[1.25px]">
                                                                            <span :class="checkboxToggle ? '' : 'opacity-0'">
                                                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M10 3L4.5 8.5L2 6" stroke="white" stroke-width="1.6666" stroke-linecap="round" stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <p class="block text-theme-sm font-medium text-gray-800 dark:text-white/90" x-text="order.order_date"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <!-- Order Number -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.order_number"></p>
                                                        </div>
                            
                                                        <!-- Customer -->
                                                        <div class="col-span-2 flex flex-col items-start border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.customer"></p>
                                                            <span class="text-xs text-gray-500 dark:text-gray-400" x-text="order.customer_email"></span>
                                                        </div>
                            
                                                        <!-- Status -->
                                                        <div class="col-span-1 flex justify-center items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="flex justify-center items-center gap-1 rounded-full px-4 py-1 text-xs font-medium"
                                                               :class="{
                                                                   'bg-orange-100 dark:bg-orange-500/15 text-orange-700 dark:text-orange-400': order.status === 'Processing',
                                                               }">
                                                               <img :src="getStatusIcon(order.status)" alt="Status Icon" class="w-4 h-4">
                                                               <span x-text="order.status"></span>
                                                            </p>
                                                        </div>
                                                        
                                                        <script>
                                                            function getStatusIcon(status) {
                                                                const icons = {
                                                                    "Processing": "{{ asset('/Shape/processing.svg') }}",
                                                                };
                                                                return icons[status] || "{{ asset('icons/default.png') }}";
                                                            }
                                                        </script>
                                                        
                            
                                                        <!-- Currency -->
                                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.currency"></p>
                                                        </div>
                            
                                                        <!-- Total Price -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.total_price"></p>
                                                        </div>
                            
                                                        <!-- Shipping Cost -->
                                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.shipping_cost"></p>
                                                        </div>
                            
                                                        <!-- Actions -->
                                                        <div class="col-span-1 flex items-center px-4 py-3">
                                                            <div class="flex w-full items-center gap-2">
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
                                                        </div>
                                                    </div>
                                                </template>
                            
                                                <!-- Pagination Controls -->
                                                <div class="border-t border-gray-100 py-4 pl-[18px] pr-4 dark:border-gray-800">
                                                    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between">
                                                        <p class="border-b border-gray-100 pb-3 text-center text-sm font-medium text-gray-500 dark:border-gray-800 dark:text-gray-400 xl:border-b-0 xl:pb-0 xl:text-left">
                                                            Showing <span x-text="processingStartEntry"></span> to
                                                            <span x-text="processingEndEntry"></span> of
                                                            <span x-text="processingTotalEntries"></span> entries
                                                        </p>
                                                        <div class="flex items-center justify-center gap-0.5 pt-3 xl:justify-end xl:pt-0">
                                                            <button @click="processingPrevPage()"
                                                                class="mr-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                                                :disabled="currentPage === 1">
                                                                Previous
                                                            </button>
                            
                                                            <template x-for="page in processingPagesAroundCurrent" :key="page">
                                                                <button @click="processingGoToPage(page)"
                                                                    :class="currentPage === page ? 'bg-blue-500/[0.08] text-brand-500' : 'text-gray-700 dark:text-gray-400'"
                                                                    class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium hover:bg-blue-500/[0.08] hover:text-brand-500 dark:hover:text-brand-500">
                                                                    <span x-text="page"></span>
                                                                </button>
                                                            </template>
                            
                                                            <button @click="processingNextPage()"
                                                                class="ml-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                                                :disabled="currentPage === processingTotalPages">
                                                                Next
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    {{-- Start Table Records Data Script and Sort Script --}}
                                    <script>
                                        function processingOrderTable() {
                                            return {
                                                search: "",
                                                sortColumn: "order_date",
                                                sortDirection: "asc",
                                                currentPage: 1,
                                                perPage: 5,
                                                data: [
                                                    {
                                                        id: 1,
                                                        order_date: "2024-02-15",
                                                        customer_email: "john.smith@example.com",
                                                        order_number: "ORD-001",
                                                        customer: "John Smith",
                                                        status: "Processing",
                                                        currency: "USD",
                                                        total_price: "$1,250.00",
                                                        shipping_cost: "$25.00"
                                                    },
                                                    {
                                                        id: 2,
                                                        order_date: "2024-02-14",
                                                        customer_email: "jane.doe@example.com",
                                                        order_number: "ORD-002",
                                                        customer: "Jane Doe",
                                                        status: "Processing",
                                                        currency: "EUR",
                                                        total_price: "$2,850.00",
                                                        shipping_cost: "$35.00"
                                                    },
                                                ],
                            
                                                get processingfilteredData() {
                                                    const searchLower = this.search.toLowerCase();
                                                    return this.data
                                                        .filter(order => 
                                                            order.order_date.toLowerCase().includes(searchLower) ||
                                                            order.order_number.toLowerCase().includes(searchLower) ||
                                                            order.customer.toLowerCase().includes(searchLower) ||
                                                            order.customer_email.toLowerCase().includes(searchLower)
                                                        )
                                                        .sort((a, b) => {
                                                            let modifier = this.sortDirection === "asc" ? 1 : -1;
                                                            
                                                            if (this.sortColumn === "total_price" || this.sortColumn === "shipping_cost") {
                                                                const aValue = parseFloat(a[this.sortColumn].replace(/[$,]/g, ''));
                                                                const bValue = parseFloat(b[this.sortColumn].replace(/[$,]/g, ''));
                                                                return (aValue - bValue) * modifier;
                                                            }
                                                            
                                                            if (this.sortColumn === "order_date") {
                                                                return (new Date(a.order_date) - new Date(b.order_date)) * modifier;
                                                            }
                                                            
                                                            return a[this.sortColumn].localeCompare(b[this.sortColumn]) * modifier;
                                                        });
                                                },
                            
                                                get processingPaginatedData() {
                                                    const start = (this.currentPage - 1) * this.perPage;
                                                    const end = start + this.perPage;
                                                    return this.processingfilteredData.slice(start, end);
                                                },
                            
                                                get processingTotalEntries() {
                                                    return this.processingfilteredData.length;
                                                },
                            
                                                get processingStartEntry() {
                                                    return Math.min((this.currentPage - 1) * this.perPage + 1, this.processingTotalEntries);
                                                },
                            
                                                get processingEndEntry() {
                                                    return Math.min(this.currentPage * this.perPage, this.processingTotalEntries);
                                                },
                            
                                                get processingTotalPages() {
                                                    return Math.ceil(this.processingfilteredData.length / this.perPage);
                                                },
                            
                                                get processingPagesAroundCurrent() {
                                                    const pages = [];
                                                    const startPage = Math.max(2, this.currentPage - 2);
                                                    const endPage = Math.min(this.processingTotalPages - 1, this.currentPage + 2);
                            
                                                    for (let i = startPage; i <= endPage; i++) {
                                                        pages.push(i);
                                                    }
                                                    return pages;
                                                },
                            
                                                processingSortBy(column) {
                                                    if (this.sortColumn === column) {
                                                        this.sortDirection = this.sortDirection === "asc" ? "desc" : "asc";
                                                    } else {
                                                        this.sortDirection = "asc";
                                                        this.sortColumn = column;
                                                    }
                                                },
                            
                                                processingGoToPage(page) {
                                                    if (page >= 1 && page <= this.processingTotalPages) {
                                                        this.currentPage = page;
                                                    }
                                                },
                            
                                                processingNextPage() {
                                                    if (this.currentPage < this.processingTotalPages) {
                                                        this.currentPage++;
                                                    }
                                                },
                            
                                                processingPrevPage() {
                                                    if (this.currentPage > 1) {
                                                        this.currentPage--;
                                                    }
                                                }
                                            };
                                        }
                                    </script>
                                    {{-- End Table Records Data Script and Sort Script --}}
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'shipped'">
                            <div class="col-span-12">
                                <div class="">
                                    <!-- DataTable Three -->
                                    <div x-data="shippedOrderTable()"
                                        class="overflow-hidden border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
                                        
                                        <div class="mb-4 flex flex-col gap-2 px-4 sm:flex-row sm:items-center sm:justify-between">
                                            <div>
                                                <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                                                    Shipped Orders
                                                </h3>
                                            </div>
                            
                                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                                                <div class="relative flex items-center">
                                                    <!-- Search Icon -->
                                                    <button class="absolute left-4 flex items-center text-gray-500 dark:text-gray-400">
                                                        <svg class="fill-current w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" 
                                                                d="M3.04199 9.37363C3.04199 5.87693 5.87735 3.04199 9.37533 3.04199C12.8733 3.04199 15.7087 5.87693 15.7087 9.37363C15.7087 12.8703 12.8733 15.7053 9.37533 15.7053C5.87735 15.7053 3.04199 12.8703 3.04199 9.37363ZM9.37533 1.54199C5.04926 1.54199 1.54199 5.04817 1.54199 9.37363C1.54199 13.6991 5.04926 17.2053 9.37533 17.2053C11.2676 17.2053 13.0032 16.5344 14.3572 15.4176L17.1773 18.238C17.4702 18.5309 17.945 18.5309 18.2379 18.238C18.5308 17.9451 18.5309 17.4703 18.238 17.1773L15.4182 14.3573C16.5367 13.0033 17.2087 11.2669 17.2087 9.37363C17.2087 5.04817 13.7014 1.54199 9.37533 1.54199Z"/>
                                                        </svg>
                                                    </button>

                                                    <!-- Search Input -->
                                                    <input type="text" x-model="search" placeholder="Search..." 
                                                        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2 pl-12 pr-4 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800 xl:w-[300px]" />
                                                </div>

                                            </div>
                                        </div>
                            
                                        <div class="max-w-full overflow-x-auto">
                                            <div class="min-w-[1102px]">
                                                <!-- Table Header -->
                                                <div class="grid grid-cols-12 border-t border-gray-200 dark:border-gray-800">
                                                    <!-- Order Date -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="shippedSortBy('order_date')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Order Date</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Order Number -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="shippedSortBy('order_number')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Order Number</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Customer -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="shippedSortBy('customer')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Customer</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Status -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="shippedSortBy('status')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Status</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Currency -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="shippedSortBy('currency')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Currency</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Total Price -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-3 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="shippedSortBy('total_price')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Total Price</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Shipping Cost -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="shippedSortBy('shipping_cost')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Shipping Cost</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Actions -->
                                                    <div class="flex col-span-1 items-center px-4 py-3">
                                                        <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Actions</p>
                                                    </div>
                                                </div>
                            
                                                <!-- Table Body -->
                                                <template x-for="order in shippedPaginatedData" :key="order.id">
                                                    <div x-data="{ checkboxToggle: false }" class="grid grid-cols-12 border-t border-gray-100 dark:border-gray-800" :class="checkboxToggle ? 'bg-gray-50 dark:bg-gray-900' : ''">
                                                        <!-- Order Date -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <div class="flex gap-3">
                                                                <div class="mt-1">
                                                                    <label class="flex cursor-pointer select-none items-center text-sm font-medium text-gray-700 dark:text-gray-400">
                                                                        <input type="checkbox" class="sr-only" @change="checkboxToggle = !checkboxToggle" />
                                                                        <span :class="checkboxToggle ? 'border-brand-500 bg-brand-500' : 'bg-transparent border-gray-300 dark:border-gray-700'" class="flex h-4 w-4 items-center justify-center rounded border-[1.25px]">
                                                                            <span :class="checkboxToggle ? '' : 'opacity-0'">
                                                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M10 3L4.5 8.5L2 6" stroke="white" stroke-width="1.6666" stroke-linecap="round" stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <p class="block text-theme-sm font-medium text-gray-800 dark:text-white/90" x-text="order.order_date"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <!-- Order Number -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.order_number"></p>
                                                        </div>
                            
                                                        <!-- Customer -->
                                                        <div class="col-span-2 flex flex-col items-start border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.customer"></p>
                                                            <span class="text-xs text-gray-500 dark:text-gray-400" x-text="order.customer_email"></span>
                                                        </div>
                            
                                                        <!-- Status -->
                                                        <div class="col-span-1 flex justify-center items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="flex justify-center items-center gap-1 rounded-full px-4 py-1 text-xs font-medium"
                                                               :class="{
                                                                   'bg-emerald-100 dark:bg-emerald-500 text-emerald-600 dark:text-emerald-500': order.status === 'Shipped',
                                                               }">
                                                               <img :src="getStatusIcon(order.status)" alt="Status Icon" class="w-4 h-4">
                                                               <span x-text="order.status"></span>
                                                            </p>
                                                        </div>
                                                        
                                                        <script>
                                                            function getStatusIcon(status) {
                                                                const icons = {
                                                                    "Shipped": "{{ asset('/Shape/shipped.svg') }}",
                                                                };
                                                                return icons[status] || "{{ asset('icons/default.png') }}";
                                                            }
                                                        </script>
                                                        
                            
                                                        <!-- Currency -->
                                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.currency"></p>
                                                        </div>
                            
                                                        <!-- Total Price -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.total_price"></p>
                                                        </div>
                            
                                                        <!-- Shipping Cost -->
                                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.shipping_cost"></p>
                                                        </div>
                            
                                                        <!-- Actions -->
                                                        <div class="col-span-1 flex items-center px-4 py-3">
                                                            <div class="flex w-full items-center gap-2">
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
                                                        </div>
                                                    </div>
                                                </template>
                            
                                                <!-- Pagination Controls -->
                                                <div class="border-t border-gray-100 py-4 pl-[18px] pr-4 dark:border-gray-800">
                                                    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between">
                                                        <p class="border-b border-gray-100 pb-3 text-center text-sm font-medium text-gray-500 dark:border-gray-800 dark:text-gray-400 xl:border-b-0 xl:pb-0 xl:text-left">
                                                            Showing <span x-text="shippedStartEntry"></span> to
                                                            <span x-text="shippedEndEntry"></span> of
                                                            <span x-text="shippedTotalEntries"></span> entries
                                                        </p>
                                                        <div class="flex items-center justify-center gap-0.5 pt-3 xl:justify-end xl:pt-0">
                                                            <button @click="shippedPrevPage()"
                                                                class="mr-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                                                :disabled="currentPage === 1">
                                                                Previous
                                                            </button>
                            
                                                            <template x-for="page in shippedPagesAroundCurrent" :key="page">
                                                                <button @click="shippedGoToPage(page)"
                                                                    :class="currentPage === page ? 'bg-blue-500/[0.08] text-brand-500' : 'text-gray-700 dark:text-gray-400'"
                                                                    class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium hover:bg-blue-500/[0.08] hover:text-brand-500 dark:hover:text-brand-500">
                                                                    <span x-text="page"></span>
                                                                </button>
                                                            </template>
                            
                                                            <button @click="shippedNextPage()"
                                                                class="ml-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                                                :disabled="currentPage === shippedTotalPages">
                                                                Next
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    {{-- Start Table Records Data Script and Sort Script --}}
                                    <script>
                                        function shippedOrderTable() {
                                            return {
                                                search: "",
                                                sortColumn: "order_date",
                                                sortDirection: "asc",
                                                currentPage: 1,
                                                perPage: 5,
                                                data: [
                                                    {
                                                        id: 1,
                                                        order_date: "2024-02-15",
                                                        customer_email: "john.smith@example.com",
                                                        order_number: "ORD-001",
                                                        customer: "John Smith",
                                                        status: "Shipped",
                                                        currency: "USD",
                                                        total_price: "$1,250.00",
                                                        shipping_cost: "$25.00"
                                                    },
                                                    {
                                                        id: 2,
                                                        order_date: "2024-02-14",
                                                        customer_email: "jane.doe@example.com",
                                                        order_number: "ORD-002",
                                                        customer: "Jane Doe",
                                                        status: "Shipped",
                                                        currency: "EUR",
                                                        total_price: "$2,850.00",
                                                        shipping_cost: "$35.00"
                                                    },
                                                ],
                            
                                                get shippedfilteredData() {
                                                    const searchLower = this.search.toLowerCase();
                                                    return this.data
                                                        .filter(order => 
                                                            order.order_date.toLowerCase().includes(searchLower) ||
                                                            order.order_number.toLowerCase().includes(searchLower) ||
                                                            order.customer.toLowerCase().includes(searchLower) ||
                                                            order.customer_email.toLowerCase().includes(searchLower)
                                                        )
                                                        .sort((a, b) => {
                                                            let modifier = this.sortDirection === "asc" ? 1 : -1;
                                                            
                                                            if (this.sortColumn === "total_price" || this.sortColumn === "shipping_cost") {
                                                                const aValue = parseFloat(a[this.sortColumn].replace(/[$,]/g, ''));
                                                                const bValue = parseFloat(b[this.sortColumn].replace(/[$,]/g, ''));
                                                                return (aValue - bValue) * modifier;
                                                            }
                                                            
                                                            if (this.sortColumn === "order_date") {
                                                                return (new Date(a.order_date) - new Date(b.order_date)) * modifier;
                                                            }
                                                            
                                                            return a[this.sortColumn].localeCompare(b[this.sortColumn]) * modifier;
                                                        });
                                                },
                            
                                                get shippedPaginatedData() {
                                                    const start = (this.currentPage - 1) * this.perPage;
                                                    const end = start + this.perPage;
                                                    return this.shippedfilteredData.slice(start, end);
                                                },
                            
                                                get shippedTotalEntries() {
                                                    return this.shippedfilteredData.length;
                                                },
                            
                                                get shippedStartEntry() {
                                                    return Math.min((this.currentPage - 1) * this.perPage + 1, this.shippedTotalEntries);
                                                },
                            
                                                get shippedEndEntry() {
                                                    return Math.min(this.currentPage * this.perPage, this.shippedTotalEntries);
                                                },
                            
                                                get shippedTotalPages() {
                                                    return Math.ceil(this.shippedfilteredData.length / this.perPage);
                                                },
                            
                                                get shippedPagesAroundCurrent() {
                                                    const pages = [];
                                                    const startPage = Math.max(2, this.currentPage - 2);
                                                    const endPage = Math.min(this.shippedTotalPages - 1, this.currentPage + 2);
                            
                                                    for (let i = startPage; i <= endPage; i++) {
                                                        pages.push(i);
                                                    }
                                                    return pages;
                                                },
                            
                                                shippedSortBy(column) {
                                                    if (this.sortColumn === column) {
                                                        this.sortDirection = this.sortDirection === "asc" ? "desc" : "asc";
                                                    } else {
                                                        this.sortDirection = "asc";
                                                        this.sortColumn = column;
                                                    }
                                                },
                            
                                                shippedGoToPage(page) {
                                                    if (page >= 1 && page <= this.shippedTotalPages) {
                                                        this.currentPage = page;
                                                    }
                                                },
                            
                                                shippedNextPage() {
                                                    if (this.currentPage < this.shippedTotalPages) {
                                                        this.currentPage++;
                                                    }
                                                },
                            
                                                shippedPrevPage() {
                                                    if (this.currentPage > 1) {
                                                        this.currentPage--;
                                                    }
                                                }
                                            };
                                        }
                                    </script>
                                    {{-- End Table Records Data Script and Sort Script --}}
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'delivered'">
                            <div class="col-span-12">
                                <div class="">
                                    <!-- DataTable Three -->
                                    <div x-data="deliveredOrderTable()"
                                        class="overflow-hidden border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
                                        
                                        <div class="mb-4 flex flex-col gap-2 px-4 sm:flex-row sm:items-center sm:justify-between">
                                            <div>
                                                <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                                                    Delivered Orders
                                                </h3>
                                            </div>
                            
                                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                                                <div class="relative flex items-center">
                                                    <!-- Search Icon -->
                                                    <button class="absolute left-4 flex items-center text-gray-500 dark:text-gray-400">
                                                        <svg class="fill-current w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" 
                                                                d="M3.04199 9.37363C3.04199 5.87693 5.87735 3.04199 9.37533 3.04199C12.8733 3.04199 15.7087 5.87693 15.7087 9.37363C15.7087 12.8703 12.8733 15.7053 9.37533 15.7053C5.87735 15.7053 3.04199 12.8703 3.04199 9.37363ZM9.37533 1.54199C5.04926 1.54199 1.54199 5.04817 1.54199 9.37363C1.54199 13.6991 5.04926 17.2053 9.37533 17.2053C11.2676 17.2053 13.0032 16.5344 14.3572 15.4176L17.1773 18.238C17.4702 18.5309 17.945 18.5309 18.2379 18.238C18.5308 17.9451 18.5309 17.4703 18.238 17.1773L15.4182 14.3573C16.5367 13.0033 17.2087 11.2669 17.2087 9.37363C17.2087 5.04817 13.7014 1.54199 9.37533 1.54199Z"/>
                                                        </svg>
                                                    </button>

                                                    <!-- Search Input -->
                                                    <input type="text" x-model="search" placeholder="Search..." 
                                                        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2 pl-12 pr-4 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800 xl:w-[300px]" />
                                                </div>

                                            </div>
                                        </div>
                            
                                        <div class="max-w-full overflow-x-auto">
                                            <div class="min-w-[1102px]">
                                                <!-- Table Header -->
                                                <div class="grid grid-cols-12 border-t border-gray-200 dark:border-gray-800">
                                                    <!-- Order Date -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="deliveredSortBy('order_date')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Order Date</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Order Number -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="deliveredSortBy('order_number')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Order Number</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Customer -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="deliveredSortBy('customer')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Customer</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Status -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="deliveredSortBy('status')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Status</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Currency -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="deliveredSortBy('currency')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Currency</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Total Price -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-3 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="deliveredSortBy('total_price')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Total Price</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Shipping Cost -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="deliveredSortBy('shipping_cost')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Shipping Cost</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Actions -->
                                                    <div class="flex col-span-1 items-center px-4 py-3">
                                                        <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Actions</p>
                                                    </div>
                                                </div>
                            
                                                <!-- Table Body -->
                                                <template x-for="order in deliveredPaginatedData" :key="order.id">
                                                    <div x-data="{ checkboxToggle: false }" class="grid grid-cols-12 border-t border-gray-100 dark:border-gray-800" :class="checkboxToggle ? 'bg-gray-50 dark:bg-gray-900' : ''">
                                                        <!-- Order Date -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <div class="flex gap-3">
                                                                <div class="mt-1">
                                                                    <label class="flex cursor-pointer select-none items-center text-sm font-medium text-gray-700 dark:text-gray-400">
                                                                        <input type="checkbox" class="sr-only" @change="checkboxToggle = !checkboxToggle" />
                                                                        <span :class="checkboxToggle ? 'border-brand-500 bg-brand-500' : 'bg-transparent border-gray-300 dark:border-gray-700'" class="flex h-4 w-4 items-center justify-center rounded border-[1.25px]">
                                                                            <span :class="checkboxToggle ? '' : 'opacity-0'">
                                                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M10 3L4.5 8.5L2 6" stroke="white" stroke-width="1.6666" stroke-linecap="round" stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <p class="block text-theme-sm font-medium text-gray-800 dark:text-white/90" x-text="order.order_date"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <!-- Order Number -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.order_number"></p>
                                                        </div>
                            
                                                        <!-- Customer -->
                                                        <div class="col-span-2 flex flex-col items-start border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.customer"></p>
                                                            <span class="text-xs text-gray-500 dark:text-gray-400" x-text="order.customer_email"></span>
                                                        </div>
                            
                                                        <!-- Status -->
                                                        <div class="col-span-1 flex justify-center items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="flex justify-center items-center gap-1 rounded-full px-4 py-1 text-xs font-medium"
                                                               :class="{
                                                                   'bg-green-100 dark:bg-green-500 text-green-600 dark:text-green-500': order.status === 'Delivered',
                                                               }">
                                                               <img :src="getStatusIcon(order.status)" alt="Status Icon" class="w-4 h-4">
                                                               <span x-text="order.status"></span>
                                                            </p>
                                                        </div>
                                                        
                                                        <script>
                                                            function getStatusIcon(status) {
                                                                const icons = {
                                                                    "Delivered": "{{ asset('/Shape/delivered.svg') }}",
                                                                };
                                                                return icons[status] || "{{ asset('icons/default.png') }}";
                                                            }
                                                        </script>
                                                        
                            
                                                        <!-- Currency -->
                                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.currency"></p>
                                                        </div>
                            
                                                        <!-- Total Price -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.total_price"></p>
                                                        </div>
                            
                                                        <!-- Shipping Cost -->
                                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.shipping_cost"></p>
                                                        </div>
                            
                                                        <!-- Actions -->
                                                        <div class="col-span-1 flex items-center px-4 py-3">
                                                            <div class="flex w-full items-center gap-2">
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
                                                        </div>
                                                    </div>
                                                </template>
                            
                                                <!-- Pagination Controls -->
                                                <div class="border-t border-gray-100 py-4 pl-[18px] pr-4 dark:border-gray-800">
                                                    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between">
                                                        <p class="border-b border-gray-100 pb-3 text-center text-sm font-medium text-gray-500 dark:border-gray-800 dark:text-gray-400 xl:border-b-0 xl:pb-0 xl:text-left">
                                                            Showing <span x-text="deliveredStartEntry"></span> to
                                                            <span x-text="deliveredEndEntry"></span> of
                                                            <span x-text="deliveredTotalEntries"></span> entries
                                                        </p>
                                                        <div class="flex items-center justify-center gap-0.5 pt-3 xl:justify-end xl:pt-0">
                                                            <button @click="deliveredPrevPage()"
                                                                class="mr-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                                                :disabled="currentPage === 1">
                                                                Previous
                                                            </button>
                            
                                                            <template x-for="page in deliveredPagesAroundCurrent" :key="page">
                                                                <button @click="deliveredGoToPage(page)"
                                                                    :class="currentPage === page ? 'bg-blue-500/[0.08] text-brand-500' : 'text-gray-700 dark:text-gray-400'"
                                                                    class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium hover:bg-blue-500/[0.08] hover:text-brand-500 dark:hover:text-brand-500">
                                                                    <span x-text="page"></span>
                                                                </button>
                                                            </template>
                            
                                                            <button @click="deliveredNextPage()"
                                                                class="ml-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                                                :disabled="currentPage === deliveredTotalPages">
                                                                Next
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    {{-- Start Table Records Data Script and Sort Script --}}
                                    <script>
                                        function deliveredOrderTable() {
                                            return {
                                                search: "",
                                                sortColumn: "order_date",
                                                sortDirection: "asc",
                                                currentPage: 1,
                                                perPage: 5,
                                                data: [
                                                    {
                                                        id: 1,
                                                        order_date: "2024-02-15",
                                                        customer_email: "john.smith@example.com",
                                                        order_number: "ORD-001",
                                                        customer: "John Smith",
                                                        status: "Delivered",
                                                        currency: "USD",
                                                        total_price: "$1,250.00",
                                                        shipping_cost: "$25.00"
                                                    },
                                                    {
                                                        id: 2,
                                                        order_date: "2024-02-14",
                                                        customer_email: "jane.doe@example.com",
                                                        order_number: "ORD-002",
                                                        customer: "Jane Doe",
                                                        status: "Delivered",
                                                        currency: "EUR",
                                                        total_price: "$2,850.00",
                                                        shipping_cost: "$35.00"
                                                    },
                                                ],
                            
                                                get deliveredfilteredData() {
                                                    const searchLower = this.search.toLowerCase();
                                                    return this.data
                                                        .filter(order => 
                                                            order.order_date.toLowerCase().includes(searchLower) ||
                                                            order.order_number.toLowerCase().includes(searchLower) ||
                                                            order.customer.toLowerCase().includes(searchLower) ||
                                                            order.customer_email.toLowerCase().includes(searchLower)
                                                        )
                                                        .sort((a, b) => {
                                                            let modifier = this.sortDirection === "asc" ? 1 : -1;
                                                            
                                                            if (this.sortColumn === "total_price" || this.sortColumn === "shipping_cost") {
                                                                const aValue = parseFloat(a[this.sortColumn].replace(/[$,]/g, ''));
                                                                const bValue = parseFloat(b[this.sortColumn].replace(/[$,]/g, ''));
                                                                return (aValue - bValue) * modifier;
                                                            }
                                                            
                                                            if (this.sortColumn === "order_date") {
                                                                return (new Date(a.order_date) - new Date(b.order_date)) * modifier;
                                                            }
                                                            
                                                            return a[this.sortColumn].localeCompare(b[this.sortColumn]) * modifier;
                                                        });
                                                },
                            
                                                get deliveredPaginatedData() {
                                                    const start = (this.currentPage - 1) * this.perPage;
                                                    const end = start + this.perPage;
                                                    return this.deliveredfilteredData.slice(start, end);
                                                },
                            
                                                get deliveredTotalEntries() {
                                                    return this.deliveredfilteredData.length;
                                                },
                            
                                                get deliveredStartEntry() {
                                                    return Math.min((this.currentPage - 1) * this.perPage + 1, this.deliveredTotalEntries);
                                                },
                            
                                                get deliveredEndEntry() {
                                                    return Math.min(this.currentPage * this.perPage, this.deliveredTotalEntries);
                                                },
                            
                                                get deliveredTotalPages() {
                                                    return Math.ceil(this.deliveredfilteredData.length / this.perPage);
                                                },
                            
                                                get deliveredPagesAroundCurrent() {
                                                    const pages = [];
                                                    const startPage = Math.max(2, this.currentPage - 2);
                                                    const endPage = Math.min(this.deliveredTotalPages - 1, this.currentPage + 2);
                            
                                                    for (let i = startPage; i <= endPage; i++) {
                                                        pages.push(i);
                                                    }
                                                    return pages;
                                                },
                            
                                                deliveredSortBy(column) {
                                                    if (this.sortColumn === column) {
                                                        this.sortDirection = this.sortDirection === "asc" ? "desc" : "asc";
                                                    } else {
                                                        this.sortDirection = "asc";
                                                        this.sortColumn = column;
                                                    }
                                                },
                            
                                                deliveredGoToPage(page) {
                                                    if (page >= 1 && page <= this.deliveredTotalPages) {
                                                        this.currentPage = page;
                                                    }
                                                },
                            
                                                deliveredNextPage() {
                                                    if (this.currentPage < this.deliveredTotalPages) {
                                                        this.currentPage++;
                                                    }
                                                },
                            
                                                deliveredPrevPage() {
                                                    if (this.currentPage > 1) {
                                                        this.currentPage--;
                                                    }
                                                }
                                            };
                                        }
                                    </script>
                                    {{-- End Table Records Data Script and Sort Script --}}
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'cancelled'">
                            <div class="col-span-12">
                                <div class="">
                                    <!-- DataTable Three -->
                                    <div x-data="cancelledOrderTable()"
                                        class="overflow-hidden border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
                                        
                                        <div class="mb-4 flex flex-col gap-2 px-4 sm:flex-row sm:items-center sm:justify-between">
                                            <div>
                                                <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                                                    Cancelled Orders
                                                </h3>
                                            </div>
                            
                                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                                                <div class="relative flex items-center">
                                                    <!-- Search Icon -->
                                                    <button class="absolute left-4 flex items-center text-gray-500 dark:text-gray-400">
                                                        <svg class="fill-current w-5 h-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" 
                                                                d="M3.04199 9.37363C3.04199 5.87693 5.87735 3.04199 9.37533 3.04199C12.8733 3.04199 15.7087 5.87693 15.7087 9.37363C15.7087 12.8703 12.8733 15.7053 9.37533 15.7053C5.87735 15.7053 3.04199 12.8703 3.04199 9.37363ZM9.37533 1.54199C5.04926 1.54199 1.54199 5.04817 1.54199 9.37363C1.54199 13.6991 5.04926 17.2053 9.37533 17.2053C11.2676 17.2053 13.0032 16.5344 14.3572 15.4176L17.1773 18.238C17.4702 18.5309 17.945 18.5309 18.2379 18.238C18.5308 17.9451 18.5309 17.4703 18.238 17.1773L15.4182 14.3573C16.5367 13.0033 17.2087 11.2669 17.2087 9.37363C17.2087 5.04817 13.7014 1.54199 9.37533 1.54199Z"/>
                                                        </svg>
                                                    </button>

                                                    <!-- Search Input -->
                                                    <input type="text" x-model="search" placeholder="Search..." 
                                                        class="dark:bg-dark-900 h-11 w-full rounded-lg border border-gray-300 bg-transparent py-2 pl-12 pr-4 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-brand-300 focus:outline-none focus:ring focus:ring-brand-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-brand-800 xl:w-[300px]" />
                                                </div>

                                            </div>
                                        </div>
                            
                                        <div class="max-w-full overflow-x-auto">
                                            <div class="min-w-[1102px]">
                                                <!-- Table Header -->
                                                <div class="grid grid-cols-12 border-t border-gray-200 dark:border-gray-800">
                                                    <!-- Order Date -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="cancelledSortBy('order_date')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Order Date</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Order Number -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="cancelledSortBy('order_number')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Order Number</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Customer -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="cancelledSortBy('customer')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Customer</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Status -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="cancelledSortBy('status')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Status</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Currency -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="cancelledSortBy('currency')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Currency</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Total Price -->
                                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-3 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="cancelledSortBy('total_price')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Total Price</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Shipping Cost -->
                                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="cancelledSortBy('shipping_cost')">
                                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Shipping Cost</p>
                                                            <span class="flex flex-col gap-0.5">
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 0.585167C4.21057 0.300808 3.78943 0.300807 3.59038 0.585166L1.05071 4.21327C0.81874 4.54466 1.05582 5 1.46033 5H6.53967C6.94418 5 7.18126 4.54466 6.94929 4.21327L4.40962 0.585167Z" fill="" />
                                                                </svg>
                                                                <svg class="fill-gray-300 dark:fill-gray-700" width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M4.40962 4.41483C4.21057 4.69919 3.78943 4.69919 3.59038 4.41483L1.05071 0.786732C0.81874 0.455343 1.05582 0 1.46033 0H6.53967C6.94418 0 7.18126 0.455342 6.94929 0.786731L4.40962 4.41483Z" fill="" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                            
                                                    <!-- Actions -->
                                                    <div class="flex col-span-1 items-center px-4 py-3">
                                                        <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Actions</p>
                                                    </div>
                                                </div>
                            
                                                <!-- Table Body -->
                                                <template x-for="order in cancelledPaginatedData" :key="order.id">
                                                    <div x-data="{ checkboxToggle: false }" class="grid grid-cols-12 border-t border-gray-100 dark:border-gray-800" :class="checkboxToggle ? 'bg-gray-50 dark:bg-gray-900' : ''">
                                                        <!-- Order Date -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <div class="flex gap-3">
                                                                <div class="mt-1">
                                                                    <label class="flex cursor-pointer select-none items-center text-sm font-medium text-gray-700 dark:text-gray-400">
                                                                        <input type="checkbox" class="sr-only" @change="checkboxToggle = !checkboxToggle" />
                                                                        <span :class="checkboxToggle ? 'border-brand-500 bg-brand-500' : 'bg-transparent border-gray-300 dark:border-gray-700'" class="flex h-4 w-4 items-center justify-center rounded border-[1.25px]">
                                                                            <span :class="checkboxToggle ? '' : 'opacity-0'">
                                                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M10 3L4.5 8.5L2 6" stroke="white" stroke-width="1.6666" stroke-linecap="round" stroke-linejoin="round" />
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <p class="block text-theme-sm font-medium text-gray-800 dark:text-white/90" x-text="order.order_date"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                            
                                                        <!-- Order Number -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.order_number"></p>
                                                        </div>
                            
                                                        <!-- Customer -->
                                                        <div class="col-span-2 flex flex-col items-start border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.customer"></p>
                                                            <span class="text-xs text-gray-500 dark:text-gray-400" x-text="order.customer_email"></span>
                                                        </div>
                            
                                                        <!-- Status -->
                                                        <div class="col-span-1 flex justify-center items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="flex justify-center items-center gap-1 rounded-full px-4 py-1 text-xs font-medium"
                                                               :class="{
                                                                   'bg-red-100 dark:bg-red-500 text-red-500 dark:text-red-500': order.status === 'Cancelled'
                                                               }">
                                                               <img :src="getStatusIcon(order.status)" alt="Status Icon" class="w-4 h-4">
                                                               <span x-text="order.status"></span>
                                                            </p>
                                                        </div>
                                                        
                                                        <script>
                                                            function getStatusIcon(status) {
                                                                const icons = {
                                                                    "Cancelled": "{{ asset('/Shape/cancelled.svg') }}"
                                                                };
                                                                return icons[status] || "{{ asset('icons/default.png') }}";
                                                            }
                                                        </script>
                                                        
                            
                                                        <!-- Currency -->
                                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.currency"></p>
                                                        </div>
                            
                                                        <!-- Total Price -->
                                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.total_price"></p>
                                                        </div>
                            
                                                        <!-- Shipping Cost -->
                                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400" x-text="order.shipping_cost"></p>
                                                        </div>
                            
                                                        <!-- Actions -->
                                                        <div class="col-span-1 flex items-center px-4 py-3">
                                                            <div class="flex w-full items-center gap-2">
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
                                                        </div>
                                                    </div>
                                                </template>
                            
                                                <!-- Pagination Controls -->
                                                <div class="border-t border-gray-100 py-4 pl-[18px] pr-4 dark:border-gray-800">
                                                    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between">
                                                        <p class="border-b border-gray-100 pb-3 text-center text-sm font-medium text-gray-500 dark:border-gray-800 dark:text-gray-400 xl:border-b-0 xl:pb-0 xl:text-left">
                                                            Showing <span x-text="cancelledStartEntry"></span> to
                                                            <span x-text="cancelledEndEntry"></span> of
                                                            <span x-text="cancelledTotalEntries"></span> entries
                                                        </p>
                                                        <div class="flex items-center justify-center gap-0.5 pt-3 xl:justify-end xl:pt-0">
                                                            <button @click="cancelledPrevPage()"
                                                                class="mr-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                                                :disabled="currentPage === 1">
                                                                Previous
                                                            </button>
                            
                                                            <template x-for="page in cancelledPagesAroundCurrent" :key="page">
                                                                <button @click="cancelledGoToPage(page)"
                                                                    :class="currentPage === page ? 'bg-blue-500/[0.08] text-brand-500' : 'text-gray-700 dark:text-gray-400'"
                                                                    class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium hover:bg-blue-500/[0.08] hover:text-brand-500 dark:hover:text-brand-500">
                                                                    <span x-text="page"></span>
                                                                </button>
                                                            </template>
                            
                                                            <button @click="cancelledNextPage()"
                                                                class="ml-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 disabled:opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]"
                                                                :disabled="currentPage === cancelledTotalPages">
                                                                Next
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    {{-- Start Table Records Data Script and Sort Script --}}
                                    <script>
                                        function cancelledOrderTable() {
                                            return {
                                                search: "",
                                                sortColumn: "order_date",
                                                sortDirection: "asc",
                                                currentPage: 1,
                                                perPage: 5,
                                                data: [
                                                    {
                                                        id: 1,
                                                        order_date: "2024-02-15",
                                                        customer_email: "john.smith@example.com",
                                                        order_number: "ORD-001",
                                                        customer: "John Smith",
                                                        status: "Cancelled",
                                                        currency: "USD",
                                                        total_price: "$1,250.00",
                                                        shipping_cost: "$25.00"
                                                    },
                                                    {
                                                        id: 2,
                                                        order_date: "2024-02-14",
                                                        customer_email: "jane.doe@example.com",
                                                        order_number: "ORD-002",
                                                        customer: "Jane Doe",
                                                        status: "Cancelled",
                                                        currency: "EUR",
                                                        total_price: "$2,850.00",
                                                        shipping_cost: "$35.00"
                                                    },
                                                ],
                            
                                                get cancelledfilteredData() {
                                                    const searchLower = this.search.toLowerCase();
                                                    return this.data
                                                        .filter(order => 
                                                            order.order_date.toLowerCase().includes(searchLower) ||
                                                            order.order_number.toLowerCase().includes(searchLower) ||
                                                            order.customer.toLowerCase().includes(searchLower) ||
                                                            order.customer_email.toLowerCase().includes(searchLower)
                                                        )
                                                        .sort((a, b) => {
                                                            let modifier = this.sortDirection === "asc" ? 1 : -1;
                                                            
                                                            if (this.sortColumn === "total_price" || this.sortColumn === "shipping_cost") {
                                                                const aValue = parseFloat(a[this.sortColumn].replace(/[$,]/g, ''));
                                                                const bValue = parseFloat(b[this.sortColumn].replace(/[$,]/g, ''));
                                                                return (aValue - bValue) * modifier;
                                                            }
                                                            
                                                            if (this.sortColumn === "order_date") {
                                                                return (new Date(a.order_date) - new Date(b.order_date)) * modifier;
                                                            }
                                                            
                                                            return a[this.sortColumn].localeCompare(b[this.sortColumn]) * modifier;
                                                        });
                                                },
                            
                                                get cancelledPaginatedData() {
                                                    const start = (this.currentPage - 1) * this.perPage;
                                                    const end = start + this.perPage;
                                                    return this.cancelledfilteredData.slice(start, end);
                                                },
                            
                                                get cancelledTotalEntries() {
                                                    return this.cancelledfilteredData.length;
                                                },
                            
                                                get cancelledStartEntry() {
                                                    return Math.min((this.currentPage - 1) * this.perPage + 1, this.cancelledTotalEntries);
                                                },
                            
                                                get cancelledEndEntry() {
                                                    return Math.min(this.currentPage * this.perPage, this.cancelledTotalEntries);
                                                },
                            
                                                get cancelledTotalPages() {
                                                    return Math.ceil(this.cancelledfilteredData.length / this.perPage);
                                                },
                            
                                                get cancelledPagesAroundCurrent() {
                                                    const pages = [];
                                                    const startPage = Math.max(2, this.currentPage - 2);
                                                    const endPage = Math.min(this.cancelledTotalPages - 1, this.currentPage + 2);
                            
                                                    for (let i = startPage; i <= endPage; i++) {
                                                        pages.push(i);
                                                    }
                                                    return pages;
                                                },
                            
                                                cancelledSortBy(column) {
                                                    if (this.sortColumn === column) {
                                                        this.sortDirection = this.sortDirection === "asc" ? "desc" : "asc";
                                                    } else {
                                                        this.sortDirection = "asc";
                                                        this.sortColumn = column;
                                                    }
                                                },
                            
                                                cancelledGoToPage(page) {
                                                    if (page >= 1 && page <= this.cancelledTotalPages) {
                                                        this.currentPage = page;
                                                    }
                                                },
                            
                                                cancelledNextPage() {
                                                    if (this.currentPage < this.cancelledTotalPages) {
                                                        this.currentPage++;
                                                    }
                                                },
                            
                                                cancelledPrevPage() {
                                                    if (this.currentPage > 1) {
                                                        this.currentPage--;
                                                    }
                                                }
                                            };
                                        }
                                    </script>
                                    {{-- End Table Records Data Script and Sort Script --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            {{-- End Orders Tables --}}


        </div>
    </div>
@endsection
