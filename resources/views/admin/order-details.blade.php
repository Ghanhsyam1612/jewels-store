@extends('admin.layout.master')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Order Header -->

        <div class="bg-white shadow-md rounded-lg mb-6">
            <div class="flex flex-col md:flex-row justify-between items-center p-6 border-b">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Order #{{ $order->order_number }}</h1>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-600">Status:</span>
                        <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">
                            {{ ucfirst($order->shipping_status) }}
                        </span>
                    </div>
                </div>

                <div class="flex flex-row gap-5 space-x-3 mt-4 md:mt-0">
                    <button
                        class="flex items-center px-6 py-2.5 bg-white text-gray-700 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50 hover:shadow-md transition-all duration-200 transform hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        <span class="font-semibold">Export</span>
                    </button>
                    <button onclick="window.location.href='{{ route('admin.order.invoice', ['order' => $order->id]) }}'"
                        class="flex items-center px-6 py-2.5 bg-white text-blue-600 border border-blue-500 rounded-lg shadow-sm hover:bg-blue-50 hover:shadow-md transition-all duration-200 transform hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H5a2 2 0 00-2 2v4h18z" />
                        </svg>
                        <span class="font-semibold">Print Invoice</span>
                    </button>
                </div>
            </div>

            <!-- Customer & Order Details -->
            <div class="grid md:grid-cols-3 gap-6 p-6">
                <!-- Customer Information -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Customer Details</h3>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-blue-500 text-white rounded-full flex items-center justify-center mr-4">
                                {{ strtoupper(substr($order->customer->first_name ?? 'NC', 0, 2)) }}
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">{{ $order->customer->first_name ?? 'Unknown Customer' }}
                                </h4>
                                <p class="text-sm text-gray-600">{{ $order->customer->email ?? 'No email provided' }}</p>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span>{{ $order->customer->phone ?? 'No phone number' }}</span>
                            </div>
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2 text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>
                                    @if ($order->shipping_address)
                                        @php
                                            $address = is_array($order->shipping_address)
                                                ? $order->shipping_address
                                                : json_decode($order->shipping_address, true);
                                        @endphp
                                        {{ $address['address'] ?? '' }}<br>
                                        {{ $address['city'] ?? '' }}, {{ $address['postal_code'] ?? '' }},<br>
                                        {{ $address['country'] ?? '' }}.
                                    @else
                                        No address provided
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Information -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Order Information</h3>
                    <div class="bg-gray-50 p-4 rounded-lg space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Order Date</span>
                            <span class="font-medium">{{ $order->created_at->format('d M Y, H:i') }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Payment Method</span>
                            @if ($order->payments)
                                <span class="font-medium">{{ ucfirst($order->payments->payment_method) }}</span>
                            @else
                                <span class="font-medium">Not specified</span>
                            @endif
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Payment Status</span>
                            @if ($order->payments)
                                <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">
                                    {{ ucfirst($order->payments->payment_status) }}
                                </span>
                            @else
                                <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">
                                    Not available
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Payment Summary -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Payment Summary</h3>
                    <div class="bg-gray-50 p-4 rounded-lg space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal</span>
                            <span>${{ number_format($order->items->sum('subtotal') ?? 0, 2) }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Discount</span>
                            <span class="text-red-600">-${{ number_format($order->discount_amount ?? 0, 2) }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Shipping</span>
                            <span>${{ number_format($order->shipping_cost ?? 0, 2) }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tax</span>
                            <span>${{ number_format($order->items->sum('total_amount') ?? 0, 2) }}</span>
                        </div>
                        <div class="border-t pt-2 flex justify-between font-bold">
                            <span>Total</span>
                            <span>
                                ${{ number_format(
                                    ($order->items->sum('subtotal') ?? 0) +
                                        ($order->shipping_cost ?? 0) +
                                        ($order->items->sum('total_amount') ?? 0) -
                                        ($order->discount_amount ?? 0),
                                    2,
                                ) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details -->
        <div class="bg-white shadow-md rounded-lg">
            <div class="p-6 border-b bg-gray-50">
                <h3 class="text-xl font-bold text-gray-800">Order Items ({{ $order->items->count() }})</h3>
            </div>
            <div class="overflow-x-auto p-4">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-100 border-b-2 border-gray-200">
                            <th class="p-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">Product
                            </th>
                            <th class="p-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">Specs
                            </th>
                            <th class="p-4 text-center text-sm font-semibold text-gray-600 uppercase tracking-wider">
                                Quantity</th>
                            <th class="p-4 text-center text-sm font-semibold text-gray-600 uppercase tracking-wider">Unit
                                Price</th>
                            <th class="p-4 text-center text-sm font-semibold text-gray-600 uppercase tracking-wider">Total
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($order->items as $item)
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="p-4">
                                    <div class="flex items-center space-x-4">
                                        @if (isset($item->diamond->image_link) && !empty($item->diamond->image_link))
                                            <img src="{{ str_replace('"', '', $item->diamond->image_link) }}"
                                                alt="Diamond" class="w-16 h-16 object-cover rounded-lg shadow-sm">
                                        @endif
                                        <div>
                                            <div class="font-semibold text-gray-800">{{ $item->diamond->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $item->diamond->sku ?? 'No SKU' }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">
                                    @if ($item->diamond)
                                        <div class="grid grid-cols-2 gap-2 text-sm">
                                            <p class="flex items-center"><span
                                                    class="font-medium text-gray-700 mr-2">Shape:</span>
                                                <span class="text-gray-600">{{ $item->diamond->shape ?? 'N/A' }}</span>
                                            </p>
                                            <p class="flex items-center"><span
                                                    class="font-medium text-gray-700 mr-2">Carat:</span>
                                                <span class="text-gray-600">{{ $item->diamond->carat ?? 'N/A' }}</span>
                                            </p>
                                            <p class="flex items-center"><span
                                                    class="font-medium text-gray-700 mr-2">Color:</span>
                                                <span class="text-gray-600">{{ $item->diamond->color ?? 'N/A' }}</span>
                                            </p>
                                            <p class="flex items-center"><span
                                                    class="font-medium text-gray-700 mr-2">Clarity:</span>
                                                <span class="text-gray-600">{{ $item->diamond->clarity ?? 'N/A' }}</span>
                                            </p>
                                            <p class="flex items-center"><span
                                                    class="font-medium text-gray-700 mr-2">Cut:</span>
                                                <span class="text-gray-600">{{ $item->diamond->cut ?? 'N/A' }}</span>
                                            </p>
                                            <p class="flex items-center"><span
                                                    class="font-medium text-gray-700 mr-2">Lab:</span>
                                                <span class="text-gray-600">{{ $item->diamond->lab ?? 'N/A' }}</span>
                                            </p>
                                            <p class="col-span-2 flex items-center"><span
                                                    class="font-medium text-gray-700 mr-2">Certificate:</span>
                                                <span
                                                    class="text-gray-600">{{ $item->diamond->certificate_number ?? 'N/A' }}</span>
                                            </p>
                                        </div>
                                    @else
                                        <span class="text-gray-500">No Diamond</span>
                                    @endif
                                </td>
                                <td class="p-4 text-center font-medium text-gray-700">{{ $item->quantity }}</td>
                                <td class="p-4 text-center font-medium text-gray-700">
                                    ${{ number_format($item->diamond->original_price ?? 0, 2) }}
                                </td>
                                <td class="p-4 text-center font-semibold text-gray-800">
                                    ${{ number_format($item->quantity * $item->diamond->original_price ?? 0, 2) }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="p-8 text-center text-gray-500 text-lg">No items in this order
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Order Tracking -->
        <div class="bg-white shadow-md rounded-lg mt-6 p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Order Tracking</h3>
            <div class="relative pl-8 border-l-2 border-gray-200">
                @php
                    $statuses = [
                        ['title' => 'Order Placed', 'date' => $order->created_at, 'completed' => true],
                        [
                            'title' => 'Processing',
                            'date' =>
                                $order->shipping_status === 'processing' || $order->tracking_number
                                    ? $order->updated_at
                                    : null,
                            'completed' => $order->shipping_status === 'processing' || $order->tracking_number,
                        ],
                        [
                            'title' => 'Shipped',
                            'date' => $order->tracking_number ? $order->updated_at : null,
                            'completed' => $order->shipping_status === 'shipped',
                        ],
                        [
                            'title' => 'Delivered',
                            'date' =>
                                $trackingInfo && $trackingInfo['status'] === 'Delivered'
                                    ? \Carbon\Carbon::parse($trackingInfo['timestamp'])
                                    : null,
                            'completed' => $order->shipping_status === 'completed',
                        ],
                    ];
                @endphp

                @foreach ($statuses as $status)
                    <div class="mb-4 pl-4 relative">
                        <div
                            class="absolute left-[-26px] top-1 w-4 h-4 rounded-full border-4 border-white {{ $status['completed'] ? 'bg-blue-500' : 'bg-gray-300' }}">
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-gray-800">{{ $status['title'] }}</span>
                            <span class="text-sm text-gray-500">
                                {{ $status['date'] ? $status['date']->format('d M Y, H:i') : 'Pending' }}
                            </span>
                        </div>
                        @if ($status['title'] === 'Shipped' && $order->tracking_number)
                            <div class="text-sm text-gray-600 mt-1">
                                Tracking: <a
                                    href="{{ config('services.dhl.tracking_url') }}{{ $order->tracking_number }}"
                                    target="_blank" class="text-blue-600">{{ $order->tracking_number }}</a>
                            </div>
                        @endif
                        @if ($status['title'] === 'Delivered' && $trackingInfo && $trackingInfo['status'])
                            <div class="text-sm text-gray-600 mt-1">
                                Status: {{ $trackingInfo['status'] }} ({{ $trackingInfo['location'] ?? 'N/A' }})
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
