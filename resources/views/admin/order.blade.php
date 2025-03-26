@extends('admin.layout.master')

@section('content')
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6">
        <!-- Analytics Cards -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-4 mb-6">
            <div class="bg-white p-4 rounded-lg shadow border dark:bg-gray-800">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-gray-100 dark:bg-gray-700">
                        <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- SVG Path remains the same -->
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.80443 5.60156C7.59109 5.60156 6.60749 6.58517 6.60749 7.79851C6.60749 9.01185 7.59109 9.99545 8.80443 9.99545C10.0178 9.99545 11.0014 9.01185 11.0014 7.79851C11.0014 6.58517 10.0178 5.60156 8.80443 5.60156ZM5.10749 7.79851C5.10749 5.75674 6.76267 4.10156 8.80443 4.10156C10.8462 4.10156 12.5014 5.75674 12.5014 7.79851C12.5014 9.84027 10.8462 11.4955 8.80443 11.4955C6.76267 11.4955 5.10749 9.84027 5.10749 7.79851ZM4.86252 15.3208C4.08769 16.0881 3.70377 17.0608 3.51705 17.8611C3.48384 18.0034 3.5211 18.1175 3.60712 18.2112C3.70161 18.3141 3.86659 18.3987 4.07591 18.3987H13.4249C13.6343 18.3987 13.7992 18.3141 13.8937 18.2112C13.9797 18.1175 14.017 18.0034 13.9838 17.8611C13.7971 17.0608 13.4132 16.0881 12.6383 15.3208C11.8821 14.572 10.6899 13.955 8.75042 13.955C6.81096 13.955 5.61877 14.572 4.86252 15.3208ZM3.8071 14.2549C4.87163 13.2009 6.45602 12.455 8.75042 12.455C11.0448 12.455 12.6292 13.2009 13.6937 14.2549C14.7397 15.2906 15.2207 16.5607 15.4446 17.5202C15.7658 18.8971 14.6071 19.8987 13.4249 19.8987H4.07591C2.89369 19.8987 1.73504 18.8971 2.05628 17.5202C2.28015 16.5607 2.76117 15.2906 3.8071 14.2549ZM15.3042 11.4955C14.4702 11.4955 13.7006 11.2193 13.0821 10.7533C13.3742 10.3314 13.6054 9.86419 13.7632 9.36432C14.1597 9.75463 14.7039 9.99545 15.3042 9.99545C16.5176 9.99545 17.5012 9.01185 17.5012 7.79851C17.5012 6.58517 16.5176 5.60156 15.3042 5.60156C14.7039 5.60156 14.1597 5.84239 13.7632 6.23271C13.6054 5.73284 13.3741 5.26561 13.082 4.84371C13.7006 4.37777 14.4702 4.10156 15.3042 4.10156C17.346 4.10156 19.0012 5.75674 19.0012 7.79851C19.0012 9.84027 17.346 11.4955 15.3042 11.4955ZM19.9248 19.8987H16.3901C16.7014 19.4736 16.9159 18.969 16.9827 18.3987H19.9248C20.1341 18.3987 20.2991 18.3141 20.3936 18.2112C20.4796 18.1175 20.5169 18.0034 20.4837 17.861C20.2969 17.0607 19.913 16.088 19.1382 15.3208C18.4047 14.5945 17.261 13.9921 15.4231 13.9566C15.2232 13.6945 14.9995 13.437 14.7491 13.1891C14.5144 12.9566 14.262 12.7384 13.9916 12.5362C14.3853 12.4831 14.8044 12.4549 15.2503 12.4549C17.5447 12.4549 19.1291 13.2008 20.1936 14.2549C21.2395 15.2906 21.7206 16.5607 21.9444 17.5202C22.2657 18.8971 21.107 19.8987 19.9248 19.8987Z"
                                fill="" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-600 dark:text-gray-400">Total Orders</p>
                        <p class="text-xl font-semibold text-gray-800 dark:text-white">{{ number_format($totalOrders) }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow border dark:bg-gray-800">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-gray-100 dark:bg-gray-700">
                        <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.665 3.75621C11.8762 3.65064 12.1247 3.65064 12.3358 3.75621L18.7807 6.97856L12.3358 10.2009C12.1247 10.3065 11.8762 10.3065 11.665 10.2009L5.22014 6.97856L11.665 3.75621ZM4.29297 8.19203V16.0946C4.29297 16.3787 4.45347 16.6384 4.70757 16.7654L11.25 20.0366V11.6513C11.1631 11.6205 11.0777 11.5843 10.9942 11.5426L4.29297 8.19203ZM12.75 20.037L19.2933 16.7654C19.5474 16.6384 19.7079 16.3787 19.7079 16.0946V8.19202L13.0066 11.5426C12.9229 11.5844 12.8372 11.6208 12.75 11.6516V20.037ZM13.0066 2.41456C12.3732 2.09786 11.6277 2.09786 10.9942 2.41456L4.03676 5.89319C3.27449 6.27432 2.79297 7.05342 2.79297 7.90566V16.0946C2.79297 16.9469 3.27448 17.726 4.03676 18.1071L10.9942 21.5857L11.3296 20.9149L10.9942 21.5857C11.6277 21.9024 12.3732 21.9024 13.0066 21.5857L19.9641 18.1071C20.7264 17.726 21.2079 16.9469 21.2079 16.0946V7.90566C21.2079 7.05342 20.7264 6.27432 19.9641 5.89319L13.0066 2.41456Z"
                                fill="" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-600 dark:text-gray-400">Open Orders</p>
                        <p class="text-xl font-semibold text-gray-800 dark:text-white">
                            {{ number_format($totalProcessOrder) }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow border dark:bg-gray-800">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-gray-100 dark:bg-gray-700">
                        <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.665 3.75621C11.8762 3.65064 12.1247 3.65064 12.3358 3.75621L18.7807 6.97856L12.3358 10.2009C12.1247 10.3065 11.8762 10.3065 11.665 10.2009L5.22014 6.97856L11.665 3.75621ZM4.29297 8.19203V16.0946C4.29297 16.3787 4.45347 16.6384 4.70757 16.7654L11.25 20.0366V11.6513C11.1631 11.6205 11.0777 11.5843 10.9942 11.5426L4.29297 8.19203ZM12.75 20.037L19.2933 16.7654C19.5474 16.6384 19.7079 16.3787 19.7079 16.0946V8.19202L13.0066 11.5426C12.9229 11.5844 12.8372 11.6208 12.75 11.6516V20.037ZM13.0066 2.41456C12.3732 2.09786 11.6277 2.09786 10.9942 2.41456L4.03676 5.89319C3.27449 6.27432 2.79297 7.05342 2.79297 7.90566V16.0946C2.79297 16.9469 3.27448 17.726 4.03676 18.1071L10.9942 21.5857L11.3296 20.9149L10.9942 21.5857C11.6277 21.9024 12.3732 21.9024 13.0066 21.5857L19.9641 18.1071C20.7264 17.726 21.2079 16.9469 21.2079 16.0946V7.90566C21.2079 7.05342 20.7264 6.27432 19.9641 5.89319L13.0066 2.41456Z"
                                fill="" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-600 dark:text-gray-400">Delivered</p>
                        <p class="text-xl font-semibold text-gray-800 dark:text-white">
                            {{ number_format($totalCompleteOrder) }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow border dark:bg-gray-800">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-gray-100 dark:bg-gray-700">
                        <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24" viewBox="0 0 24 24"
                            id="dollar-symbol" data-name="Line Color" xmlns="http://www.w3.org/2000/svg"
                            class="icon line-color">
                            <path id="primary"
                                d="M7,15.5A3.5,3.5,0,0,0,10.5,19h3A3.5,3.5,0,0,0,17,15.5h0A3.5,3.5,0,0,0,13.5,12h-3A3.5,3.5,0,0,1,7,8.5H7A3.5,3.5,0,0,1,10.5,5h3A3.5,3.5,0,0,1,17,8.5"
                                style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                            </path>
                            <line id="secondary" x1="12" y1="21" x2="12" y2="3"
                                style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
                            </line>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-600 dark:text-gray-400">Avg Price</p>
                        <p class="text-xl font-semibold text-gray-800 dark:text-white">
                            ${{ number_format($averagePrice, 2) }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Orders Section -->
        <div class="bg-white rounded-lg shadow border dark:bg-gray-800">
            <!-- Tabs -->
            <div class="border-b dark:border-gray-700 bg-gray-50 dark:bg-gray-800">
                <nav class="flex justify-center -mb-px space-x-2 p-2">
                    @foreach (['all' => 'All', 'pending' => 'Pending', 'processing' => 'Processing', 'shipped' => 'Shipped', 'completed' => 'Ccompleted', 'cancelled' => 'Cancelled'] as $tab => $label)
                        <a href="{{ route('admin.order', ['shipping_status' => $tab]) }}"
                            class="inline-block px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200 
                                {{ request('shipping_status', 'all') === $tab ? 'bg-black text-white' : 'bg-white text-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600' }} 
                                     dark:border-gray-600">
                            {{ $label }}
                        </a>
                    @endforeach
                </nav>
            </div>

            <div class="p-4">
                <!-- Search and Filters -->

                <form method="GET" action="{{ route('admin.order') }}" class="flex items-center gap-3 mb-4">
                    <input type="hidden" name="status" value="{{ request('shipping_status', 'all') }}">

                    <!-- Search Input -->
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search orders..."
                        class="flex-1 p-2.5 border border-gray-300 rounded-lg text-sm text-gray-600 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400">

                    <!-- Sort Dropdown -->
                    <select name="sort"
                        class="p-2.5 border border-gray-300 rounded-lg text-sm text-gray-600 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <option value="order_date" {{ request('sort') === 'order_date' ? 'selected' : '' }}>Order Date
                        </option>
                        <option value="order_number" {{ request('sort') === 'order_number' ? 'selected' : '' }}>Order
                            Number</option>
                        <option value="total_amount" {{ request('sort') === 'total_amount' ? 'selected' : '' }}>Total Price
                        </option>
                    </select>

                    <!-- Direction Dropdown -->
                    <select name="direction"
                        class="p-2.5 border border-gray-300 rounded-lg text-sm text-gray-600 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <option value="asc" {{ request('direction', 'desc') === 'asc' ? 'selected' : '' }}>Ascending
                        </option>
                        <option value="desc" {{ request('direction', 'desc') === 'desc' ? 'selected' : '' }}>Descending
                        </option>
                    </select>

                    <!-- Filter Button -->
                    <button type="submit"
                        class="p-2.5 bg-white border border-gray-300 text-gray-600 rounded-lg text-sm font-medium hover:bg-gray-100 transition-colors duration-200">
                        Filter
                    </button>

                    <!-- Clear Filters Button  -->
                    <button type="button" onclick="clearFilters()"
                        class="p-2.5 bg-gray-500 text-white rounded-lg text-sm font-medium hover:bg-gray-600 transition-colors duration-200">
                        Clear Filters
                    </button>
                </form>

                <!-- Orders Table -->
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 text-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="p-4">Order Date</th>
                                <th class="p-4">Order Number</th>
                                <th class="p-4">Customer</th>
                                <th class="p-4">Shipping Status</th>
                                <th class="p-4">Total</th>
                                <th class="p-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $order)
                                <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="p-4">{{ $order->order_date }}</td>
                                    <td class="p-4">{{ $order->order_number }}</td>
                                    <td class="p-4">
                                        {{ $order->customer->first_name }}
                                    </td>
                                    <td
                                        class="col-span-1 flex justify-center items-center border-r border-gray-100 px-4 py-3 dark:border-gray-800">
                                        <p class="flex justify-center items-center gap-1 rounded-full px-4 py-1 text-xs font-medium"
                                            :class="{
                                                'bg-blue-100 dark:bg-blue-500/15 text-blue-700 dark:text-blue-500': '{{ $order->shipping_status }}'
                                                === 'Pending',
                                                'bg-orange-100 dark:bg-orange-500/15 text-orange-700 dark:text-orange-400': '{{ $order->shipping_status }}'
                                                === 'Processing',
                                                'bg-emerald-100 dark:bg-emerald-500/15 text-emerald-600 dark:text-emerald-500': '{{ $order->shipping_status }}'
                                                === 'Shipped',
                                                'bg-green-100 dark:bg-green-500/15 text-green-600 dark:text-green-500': '{{ $order->shipping_status }}'
                                                === 'Delivered',
                                                'bg-red-100 dark:bg-red-500/15 text-red-500 dark:text-red-500': '{{ $order->shipping_status }}'
                                                === 'Cancelled'
                                            }">
                                            <img src="{{ asset('/Shape/' . $order->shipping_status . '.svg') }}"
                                                alt="Status Icon" class="w-4 h-4">
                                            <span>{{ ucfirst($order->shipping_status) }}</span>
                                        </p>
                                    </td>
                                    <td class="p-4">${{ number_format($order->total_amount, 2) }}</td>
                                    <td class="p-4">
                                        <div class="flex items-center gap-3">
                                            <!-- Cancel Button -->
                                            <form
                                                action="{{ route('admin.order.update-status', ['order' => $order->id]) }}"
                                                method="POST" class="inline-block">
                                                @csrf
                                                <input type="hidden" name="status" value="Cancelled">
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-800 text-xs font-medium"
                                                    title="Cancel">
                                                    Cancel
                                                </button>
                                            </form>

                                            <!-- Accept Button -->
                                            <form
                                                action="{{ route('admin.order.update-status', ['order' => $order->id]) }}"
                                                method="POST" class="inline-block">
                                                @csrf
                                                <input type="hidden" name="status" value="Processing">
                                                <button type="submit"
                                                    class="text-green-600 hover:text-green-800 text-xs font-medium"
                                                    title="Accept">
                                                    Accept
                                                </button>
                                            </form>

                                            <!-- Details Button -->
                                            <a href="{{ route('admin.order.view', ['order' => $order->id]) }}"
                                                class="text-blue-600 hover:text-blue-800 text-xs font-medium"
                                                title="Details">
                                                Details
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="p-4 text-center text-gray-500 dark:text-gray-400">No orders
                                        found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- End Orders Table -->

                <!-- Pagination -->
                <div class="p-4">
                    {{ $orders->appends(request()->query())->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
    <script>
        function clearFilters() {
            window.location.href = "{{ route('admin.order') }}";
        }
    </script>
@endsection
