@extends('admin.layout.master')

@section('content')

<div class="mx-auto max-w-screen-2xl p-4 md:p-6">
    <div class="flex flex-col gap-4 md:gap-6">
        {{-- Start Analytics Cards --}}
        <div class="col-span-12 space-y-6">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-4 md:gap-2">
                <!-- Start Customer Card -->
                <div
                    class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
                        <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.80443 5.60156C7.59109 5.60156 6.60749 6.58517 6.60749 7.79851C6.60749 9.01185 7.59109 9.99545 8.80443 9.99545C10.0178 9.99545 11.0014 9.01185 11.0014 7.79851C11.0014 6.58517 10.0178 5.60156 8.80443 5.60156ZM5.10749 7.79851C5.10749 5.75674 6.76267 4.10156 8.80443 4.10156C10.8462 4.10156 12.5014 5.75674 12.5014 7.79851C12.5014 9.84027 10.8462 11.4955 8.80443 11.4955C6.76267 11.4955 5.10749 9.84027 5.10749 7.79851ZM4.86252 15.3208C4.08769 16.0881 3.70377 17.0608 3.51705 17.8611C3.48384 18.0034 3.5211 18.1175 3.60712 18.2112C3.70161 18.3141 3.86659 18.3987 4.07591 18.3987H13.4249C13.6343 18.3987 13.7992 18.3141 13.8937 18.2112C13.9797 18.1175 14.017 18.0034 13.9838 17.8611C13.7971 17.0608 13.4132 16.0881 12.6383 15.3208C11.8821 14.572 10.6899 13.955 8.75042 13.955C6.81096 13.955 5.61877 14.572 4.86252 15.3208ZM3.8071 14.2549C4.87163 13.2009 6.45602 12.455 8.75042 12.455C11.0448 12.455 12.6292 13.2009 13.6937 14.2549C14.7397 15.2906 15.2207 16.5607 15.4446 17.5202C15.7658 18.8971 14.6071 19.8987 13.4249 19.8987H4.07591C2.89369 19.8987 1.73504 18.8971 2.05628 17.5202C2.28015 16.5607 2.76117 15.2906 3.8071 14.2549ZM15.3042 11.4955C14.4702 11.4955 13.7006 11.2193 13.0821 10.7533C13.3742 10.3314 13.6054 9.86419 13.7632 9.36432C14.1597 9.75463 14.7039 9.99545 15.3042 9.99545C16.5176 9.99545 17.5012 9.01185 17.5012 7.79851C17.5012 6.58517 16.5176 5.60156 15.3042 5.60156C14.7039 5.60156 14.1597 5.84239 13.7632 6.23271C13.6054 5.73284 13.3741 5.26561 13.082 4.84371C13.7006 4.37777 14.4702 4.10156 15.3042 4.10156C17.346 4.10156 19.0012 5.75674 19.0012 7.79851C19.0012 9.84027 17.346 11.4955 15.3042 11.4955ZM19.9248 19.8987H16.3901C16.7014 19.4736 16.9159 18.969 16.9827 18.3987H19.9248C20.1341 18.3987 20.2991 18.3141 20.3936 18.2112C20.4796 18.1175 20.5169 18.0034 20.4837 17.861C20.2969 17.0607 19.913 16.088 19.1382 15.3208C18.4047 14.5945 17.261 13.9921 15.4231 13.9566C15.2232 13.6945 14.9995 13.437 14.7491 13.1891C14.5144 12.9566 14.262 12.7384 13.9916 12.5362C14.3853 12.4831 14.8044 12.4549 15.2503 12.4549C17.5447 12.4549 19.1291 13.2008 20.1936 14.2549C21.2395 15.2906 21.7206 16.5607 21.9444 17.5202C22.2657 18.8971 21.107 19.8987 19.9248 19.8987Z"
                                fill="" />
                        </svg>
                    </div>

                    <div class="mt-5 flex items-end justify-between">
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Customers</span>
                            <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">
                            {{ number_format($totalCustomers) }} 
                            </h4>
                        </div>

                        <span
                            class="flex items-center gap-1 rounded-full bg-success-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-success-600 dark:bg-success-500/15 dark:text-success-500">
                            <svg class="fill-current" width="12" height="12"
                                viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.56462 1.62393C5.70193 1.47072 5.90135 1.37432 6.12329 1.37432C6.1236 1.37432 6.12391 1.37432 6.12422 1.37432C6.31631 1.37415 6.50845 1.44731 6.65505 1.59381L9.65514 4.5918C9.94814 4.88459 9.94831 5.35947 9.65552 5.65246C9.36273 5.94546 8.88785 5.94562 8.59486 5.65283L6.87329 3.93247L6.87329 10.125C6.87329 10.5392 6.53751 10.875 6.12329 10.875C5.70908 10.875 5.37329 10.5392 5.37329 10.125L5.37329 3.93578L3.65516 5.65282C3.36218 5.94562 2.8873 5.94547 2.5945 5.65248C2.3017 5.35949 2.30185 4.88462 2.59484 4.59182L5.56462 1.62393Z"
                                    fill="" />
                            </svg>

                            {{ number_format($percentageChange, 2) }}%
                        </span>
                    </div>
                </div>
                <!-- End Customer Card -->

                <!-- Start New Order Card -->
                <div
                    class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
                        <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.665 3.75621C11.8762 3.65064 12.1247 3.65064 12.3358 3.75621L18.7807 6.97856L12.3358 10.2009C12.1247 10.3065 11.8762 10.3065 11.665 10.2009L5.22014 6.97856L11.665 3.75621ZM4.29297 8.19203V16.0946C4.29297 16.3787 4.45347 16.6384 4.70757 16.7654L11.25 20.0366V11.6513C11.1631 11.6205 11.0777 11.5843 10.9942 11.5426L4.29297 8.19203ZM12.75 20.037L19.2933 16.7654C19.5474 16.6384 19.7079 16.3787 19.7079 16.0946V8.19202L13.0066 11.5426C12.9229 11.5844 12.8372 11.6208 12.75 11.6516V20.037ZM13.0066 2.41456C12.3732 2.09786 11.6277 2.09786 10.9942 2.41456L4.03676 5.89319C3.27449 6.27432 2.79297 7.05342 2.79297 7.90566V16.0946C2.79297 16.9469 3.27448 17.726 4.03676 18.1071L10.9942 21.5857L11.3296 20.9149L10.9942 21.5857C11.6277 21.9024 12.3732 21.9024 13.0066 21.5857L19.9641 18.1071C20.7264 17.726 21.2079 16.9469 21.2079 16.0946V7.90566C21.2079 7.05342 20.7264 6.27432 19.9641 5.89319L13.0066 2.41456Z"
                                fill="" />
                        </svg>
                    </div>

                    <div class="mt-5 flex items-end justify-between">
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">New Orders</span>
                            <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">
                            {{ number_format($todayOrders) }}
                            </h4>
                        </div>

                        @php
                            $isOrderIncrease = $orderPercentageChange >= 0;
                            $orderColorClass = $isOrderIncrease 
                                ? 'bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500' 
                                : 'bg-error-50 text-error-600 dark:bg-error-500/15 dark:text-error-500';
                        @endphp

                        <span class="flex items-center gap-1 rounded-full py-0.5 pl-2 pr-2.5 text-sm font-medium {{ $orderColorClass }}">
                            <svg class="fill-current" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                             @if($isOrderIncrease)
                                {{-- Up Arrow (Increase) --}}
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.56462 1.62393C5.70193 1.47072 5.90135 1.37432 6.12329 1.37432C6.1236 1.37432 6.12391 1.37432 6.12422 1.37432C6.31631 1.37415 6.50845 1.44731 6.65505 1.59381L9.65514 4.5918C9.94814 4.88459 9.94831 5.35947 9.65552 5.65246C9.36273 5.94546 8.88785 5.94562 8.59486 5.65283L6.87329 3.93247L6.87329 10.125C6.87329 10.5392 6.53751 10.875 6.12329 10.875C5.70908 10.875 5.37329 10.5392 5.37329 10.125L5.37329 3.93578L3.65516 5.65282C3.36218 5.94562 2.8873 5.94547 2.5945 5.65248C2.3017 5.35949 2.30185 4.88462 2.59484 4.59182L5.56462 1.62393Z"
                                    fill="" />
                              @else
                                 {{-- Down Arrow (Decrease) --}}
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                 d="M5.31462 10.3761C5.45194 10.5293 5.65136 10.6257 5.87329 10.6257C5.8736 10.6257 5.8739 10.6257 5.87421 10.6257C6.0663 10.6259 6.25845 10.5527 6.40505 10.4062L9.40514 7.4082C9.69814 7.11541 9.69831 6.64054 9.40552 6.34754C9.11273 6.05454 8.63785 6.05438 8.34486 6.34717L6.62329 8.06753L6.62329 1.875C6.62329 1.46079 6.28751 1.125 5.87329 1.125C5.45908 1.125 5.12329 1.46079 5.12329 1.875L5.12329 8.06422L3.40516 6.34719C3.11218 6.05439 2.6373 6.05454 2.3445 6.34752C2.0517 6.64051 2.05185 7.11538 2.34484 7.40818L5.31462 10.3761Z"
                                fill="" />
                            @endif
                            </svg>
                                {{ number_format($orderPercentageChange, 2) }}%
                        </span>
                    </div>
                </div>
                <!-- End Order Card -->

                <!-- Start Total Order Card -->
                <div
                    class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
                        <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.665 3.75621C11.8762 3.65064 12.1247 3.65064 12.3358 3.75621L18.7807 6.97856L12.3358 10.2009C12.1247 10.3065 11.8762 10.3065 11.665 10.2009L5.22014 6.97856L11.665 3.75621ZM4.29297 8.19203V16.0946C4.29297 16.3787 4.45347 16.6384 4.70757 16.7654L11.25 20.0366V11.6513C11.1631 11.6205 11.0777 11.5843 10.9942 11.5426L4.29297 8.19203ZM12.75 20.037L19.2933 16.7654C19.5474 16.6384 19.7079 16.3787 19.7079 16.0946V8.19202L13.0066 11.5426C12.9229 11.5844 12.8372 11.6208 12.75 11.6516V20.037ZM13.0066 2.41456C12.3732 2.09786 11.6277 2.09786 10.9942 2.41456L4.03676 5.89319C3.27449 6.27432 2.79297 7.05342 2.79297 7.90566V16.0946C2.79297 16.9469 3.27448 17.726 4.03676 18.1071L10.9942 21.5857L11.3296 20.9149L10.9942 21.5857C11.6277 21.9024 12.3732 21.9024 13.0066 21.5857L19.9641 18.1071C20.7264 17.726 21.2079 16.9469 21.2079 16.0946V7.90566C21.2079 7.05342 20.7264 6.27432 19.9641 5.89319L13.0066 2.41456Z"
                                fill="" />
                        </svg>
                    </div>

                    <div class="mt-5 flex items-end justify-between">
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Total Orders</span>
                            <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">
                            {{ number_format($totalOrders) }} 
                            </h4>
                        </div>

                        <span
                            class="flex items-center gap-1 rounded-full bg-error-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-error-600 dark:bg-error-500/15 dark:text-error-500">
                            <svg class="fill-current" width="12" height="12"
                                viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.31462 10.3761C5.45194 10.5293 5.65136 10.6257 5.87329 10.6257C5.8736 10.6257 5.8739 10.6257 5.87421 10.6257C6.0663 10.6259 6.25845 10.5527 6.40505 10.4062L9.40514 7.4082C9.69814 7.11541 9.69831 6.64054 9.40552 6.34754C9.11273 6.05454 8.63785 6.05438 8.34486 6.34717L6.62329 8.06753L6.62329 1.875C6.62329 1.46079 6.28751 1.125 5.87329 1.125C5.45908 1.125 5.12329 1.46079 5.12329 1.875L5.12329 8.06422L3.40516 6.34719C3.11218 6.05439 2.6373 6.05454 2.3445 6.34752C2.0517 6.64051 2.05185 7.11538 2.34484 7.40818L5.31462 10.3761Z"
                                    fill="" />
                            </svg>
                            {{ number_format($percentageChange, 2) }}%
                        </span>
                    </div>
                </div>
                <!-- End Total Order Card -->

                <!-- Start Total Revenue Card -->
                <div
                    class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
                        <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.665 3.75621C11.8762 3.65064 12.1247 3.65064 12.3358 3.75621L18.7807 6.97856L12.3358 10.2009C12.1247 10.3065 11.8762 10.3065 11.665 10.2009L5.22014 6.97856L11.665 3.75621ZM4.29297 8.19203V16.0946C4.29297 16.3787 4.45347 16.6384 4.70757 16.7654L11.25 20.0366V11.6513C11.1631 11.6205 11.0777 11.5843 10.9942 11.5426L4.29297 8.19203ZM12.75 20.037L19.2933 16.7654C19.5474 16.6384 19.7079 16.3787 19.7079 16.0946V8.19202L13.0066 11.5426C12.9229 11.5844 12.8372 11.6208 12.75 11.6516V20.037ZM13.0066 2.41456C12.3732 2.09786 11.6277 2.09786 10.9942 2.41456L4.03676 5.89319C3.27449 6.27432 2.79297 7.05342 2.79297 7.90566V16.0946C2.79297 16.9469 3.27448 17.726 4.03676 18.1071L10.9942 21.5857L11.3296 20.9149L10.9942 21.5857C11.6277 21.9024 12.3732 21.9024 13.0066 21.5857L19.9641 18.1071C20.7264 17.726 21.2079 16.9469 21.2079 16.0946V7.90566C21.2079 7.05342 20.7264 6.27432 19.9641 5.89319L13.0066 2.41456Z"
                                fill="" />
                        </svg>
                    </div>

                    <div class="mt-5 flex items-end justify-between">
                        <div>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Total Revenue</span>
                            <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">
                            ${{ number_format($totalRevenue, 2) }}
                            </h4>
                        </div>

                        <span
                            class="flex items-center gap-1 rounded-full bg-error-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-error-600 dark:bg-error-500/15 dark:text-error-500">
                            <svg class="fill-current" width="12" height="12"
                                viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.31462 10.3761C5.45194 10.5293 5.65136 10.6257 5.87329 10.6257C5.8736 10.6257 5.8739 10.6257 5.87421 10.6257C6.0663 10.6259 6.25845 10.5527 6.40505 10.4062L9.40514 7.4082C9.69814 7.11541 9.69831 6.64054 9.40552 6.34754C9.11273 6.05454 8.63785 6.05438 8.34486 6.34717L6.62329 8.06753L6.62329 1.875C6.62329 1.46079 6.28751 1.125 5.87329 1.125C5.45908 1.125 5.12329 1.46079 5.12329 1.875L5.12329 8.06422L3.40516 6.34719C3.11218 6.05439 2.6373 6.05454 2.3445 6.34752C2.0517 6.64051 2.05185 7.11538 2.34484 7.40818L5.31462 10.3761Z"
                                    fill="" />
                            </svg>
                             {{ number_format($revenuePercentageChange, 2) }}%
                        </span>
                    </div>
                </div>
                <!-- End Total Revenue Card -->
            </div>
        </div>
        {{-- End Analytics Cards --}}

        {{-- Start Charts Section --}}
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- First Chart (Monthly Order - Bar Chart) -->
            <div class="w-full">
                <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white px-5 pt-5 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6 sm:pt-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                        Monthly Order
                    </h3>
                    <div id="chartOne" class="w-full"></div>
                </div>
            </div>

            <!-- Second Chart (Total Customers - Bar Chart) -->
            <div class="w-full">
                <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white px-5 pt-5 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6 sm:pt-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                        Total Customers
                    </h3>
                    <div id="chartTwo" class="w-full"></div>
                </div>
            </div>
        </div>

        <!-- Start Charat Script -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                if (typeof ApexCharts !== "undefined") {
                    // First Chart (Monthly Orders - Bar Chart)
                    var optionsOne = {
                        series: [{
                            name: 'Orders',
                            data: [100, 300, 150, 200, 180, 190, 250, 120, 230, 340, 260, 140]
                        }],
                        chart: {
                            type: 'bar',
                            height: 350
                        },
                        xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                        },
                        colors: ['#007bff'] // Blue color
                    };
                    var chartOne = new ApexCharts(document.querySelector("#chartOne"), optionsOne);
                    chartOne.render();

                    // Second Chart (Total Customers - Bar Chart)
                    var optionsTwo = {
                        series: [{
                            name: 'Customers',
                            data: [50, 100, 75, 90, 110, 130, 170, 140, 180, 200, 150, 90]
                        }],
                        chart: {
                            type: 'bar',
                            height: 350
                        },
                        xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                        },
                        colors: ['#ff5733'] // Orange color
                    };
                    var chartTwo = new ApexCharts(document.querySelector("#chartTwo"), optionsTwo);
                    chartTwo.render();
                } else {
                    console.error("ApexCharts is not loaded.");
                }
            });
        </script>
        <!-- End Start Script -->
        {{-- End Charts Section --}}

        {{-- Start Recent Order --}}
            <div class="col-span-12">
                <div class="border-t border-gray-100 dark:border-gray-800">
                    <!-- DataTable Three -->
                    <div x-data="recentOrderTable()"
                        class="overflow-hidden rounded-xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
                        
                        <div class="mb-4 flex flex-col gap-2 px-4 sm:flex-row sm:items-center sm:justify-between">
                            <div>
                                <h3 class="text-base font-medium text-gray-800 dark:text-white/90">
                                    Recent Orders
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
                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="sortBy('order_date')">
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
                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="sortBy('order_number')">
                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Order Number</p>
                                            <span class="flex flex-col gap-0.5">
                                            
                                            </span>
                                        </div>
                                    </div>
                                    

                                    <!-- Customer -->
                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="sortBy('customer')">
                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Customer</p>
                                            <span class="flex flex-col gap-0.5">
                                                <!-- Same SVG icons -->
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Status -->
                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="sortBy('status')">
                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Status</p>
                                            <span class="flex flex-col gap-0.5">
                                                <!-- Same SVG icons -->
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Currency -->
                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="sortBy('currency')">
                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Currency</p>
                                            <span class="flex flex-col gap-0.5">
                                                <!-- Same SVG icons -->
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Total Price -->
                                    <div class="flex col-span-2 items-center border-r border-gray-200 px-3 py-3 dark:border-gray-800">
                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="sortBy('total_price')">
                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Total Price</p>
                                            <span class="flex flex-col gap-0.5">
                                                <!-- Same SVG icons -->
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Shipping Cost -->
                                    <div class="flex col-span-1 items-center border-r border-gray-200 px-4 py-3 dark:border-gray-800">
                                        <div class="flex w-full cursor-pointer items-center justify-between" @click="sortBy('shipping_cost')">
                                            <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Shipping Cost</p>
                                            <span class="flex flex-col gap-0.5">
                                                <!-- Same SVG icons -->
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="flex col-span-1 items-center px-4 py-3">
                                        <p class="text-theme-xs font-medium text-gray-700 dark:text-gray-400">Actions</p>
                                    </div>
                                </div>

                                <!-- Table Body -->
                                @foreach($dailyOrders as $order)
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
                                                    <p class="block text-theme-sm font-medium text-gray-800 dark:text-white/90">{{ \Carbon\Carbon::parse($order->created_at)->format('Y-m-d') }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Order Number -->
                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400">{{ $order->order_number }}</p>
                                        </div>

                                        <!-- Customer -->
                                        <div class="col-span-2 flex flex-col items-start border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400">{{ $order->full_name }}</p>
                                            <span class="text-xs text-gray-500 dark:text-gray-400">{{ $order->customer->email }}</span>
                                        </div>

                                        <!-- Status -->
                                        <div class="col-span-1 flex justify-center items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                            <p class="flex justify-center items-center gap-1 rounded-full px-4 py-1 text-xs font-medium"
                                                :class="{
                                                    'bg-blue-100 dark:bg-blue-500/15 text-blue-700 dark:text-blue-500': '{{ $order->shipping_status }}' === 'New',
                                                    'bg-orange-100 dark:bg-orange-500/15 text-orange-700 dark:text-orange-400': '{{ $order->shipping_status }}' === 'Processing',
                                                    'bg-emerald-100 dark:bg-emerald-500/15 text-emerald-600 dark:text-emerald-500': '{{ $order->shipping_status }}' === 'Shipped',
                                                    'bg-green-100 dark:bg-green-500/15 text-green-600 dark:text-green-500': '{{ $order->shipping_status }}' === 'Delivered',
                                                    'bg-red-100 dark:bg-red-500/15 text-red-500 dark:text-red-500': '{{ $order->shipping_status }}' === 'Cancelled'
                                                }">
                                                <img src="{{ asset('/Shape/' . $order->shipping_status . '.svg') }}" alt="Status Icon" class="w-4 h-4">
                                                <span>{{ ucfirst($order->shipping_status) }}</span>
                                            </p>
                                        </div>

                                        <!-- Currency -->
                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400">{{ $order->currency }}</p>
                                        </div>

                                        <!-- Total Price -->
                                        <div class="col-span-2 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400">{{ $order->currency }}{{ number_format($order->total_amount, 2) }}</p>
                                        </div>

                                        <!-- Shipping Cost -->
                                        <div class="col-span-1 flex items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                            <p class="text-theme-sm text-gray-700 dark:text-gray-400">{{ $order->currency }}{{ number_format($order->shipping_cost, 2) }}</p>
                                        </div>

                                        <!-- Actions -->
                                        <div class="col-span-1 flex items-center px-4 py-3">
                                            <div class="flex w-full items-center gap-2">
                                            <a href="#" class="text-purple-500 hover:underline">Open</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <!-- Pagination Controls -->
                                <div class="border-t border-gray-100 py-4 pl-[18px] pr-4 dark:border-gray-800">
                                    <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between">
                                        <p class="border-b border-gray-100 pb-3 text-center text-sm font-medium text-gray-500 dark:border-gray-800 dark:text-gray-400 xl:border-b-0 xl:pb-0 xl:text-left">
                                            Showing {{ $dailyOrders->firstItem() ?? 0 }} to
                                            {{ $dailyOrders->lastItem() ?? 0 }} of
                                            {{ $dailyOrders->total() }} entries
                                        </p>
                                        <div class="flex items-center justify-center gap-0.5 pt-3 xl:justify-end xl:pt-0">
                                            @if($dailyOrders->previousPageUrl())
                                                <a href="{{ $dailyOrders->previousPageUrl() }}"
                                                    class="mr-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]">
                                                    Previous
                                                </a>
                                            @else
                                                <button disabled
                                                    class="mr-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400">
                                                    Previous
                                                </button>
                                            @endif

                                            @for($i = 1; $i <= $dailyOrders->lastPage(); $i++)
                                                <a href="{{ $dailyOrders->url($i) }}"
                                                    class="flex h-10 w-10 items-center justify-center rounded-lg text-sm font-medium
                                                    {{ $dailyOrders->currentPage() == $i ? 'bg-blue-500/[0.08] text-brand-500' : 'text-gray-700 dark:text-gray-400 hover:bg-blue-500/[0.08] hover:text-brand-500 dark:hover:text-brand-500' }}">
                                                    {{ $i }}
                                                </a>
                                            @endfor

                                            @if($dailyOrders->nextPageUrl())
                                                <a href="{{ $dailyOrders->nextPageUrl() }}"
                                                    class="ml-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03]">
                                                    Next
                                                </a>
                                            @else
                                                <button disabled
                                                    class="ml-2.5 flex items-center justify-center rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-gray-700 shadow-theme-xs opacity-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400">
                                                    Next
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- End Recent Order --}}
    </div>
</div>

@endsection

