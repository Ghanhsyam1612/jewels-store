<div class="bg-white p-6 rounded shadow-sm">
    <h2 class="text-xl font-montserrat font-semibold mb-4">Orders</h2>
    @if ($orders->count() > 0)
        <div class="overflow-x-auto">
            <table id="orders-table" class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order
                            Number</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date
                        </th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                        </th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total
                        </th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tracking Number</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($orders as $order)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $order->order_number }}</td>
                            <td class="px-4 py-2">{{ $order->order_date->format('Y-m-d') }}</td>
                            <td class="px-4 py-2">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    {{ $order->shipping_status instanceof \App\Enums\OrderStatus
                                        ? $order->shipping_status->getColorClasses()
                                        : match ($order->shipping_status) {
                                            'pending' => 'bg-yellow-100 text-yellow-800',
                                            'processing' => 'bg-blue-100 text-blue-800',
                                            'shipped', 'completed' => 'bg-green-100 text-green-800',
                                            'cancelled' => 'bg-red-100 text-red-800',
                                            default => 'bg-gray-100 text-gray-800',
                                        } }}">
                                    {{ ucfirst(
                                        $order->shipping_status instanceof \App\Enums\OrderStatus
                                            ? $order->shipping_status->value
                                            : $order->shipping_status,
                                    ) }}
                                </span>
                            </td>
                            <td class="px-4 py-2">${{ number_format($order->total_amount, 2) }}</td>
                            <td class="px-4 py-2">
                                @if ($order->tracking_number)
                                    <a href="{{ config('services.dhl.tracking_url') }}{{ $order->tracking_number }}"
                                        target="_blank" class="text-blue-600">
                                        {{ $order->tracking_number }}
                                    </a>
                                @else
                                    {{ __('Tracking Number Provided Soon') }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="px-2 py-1">
                                <div class="ml-4 border-l-4 border-gray-300 pl-4">
                                    <div class="text-sm font-medium text-gray-600 mb-2">Order Items:</div>
                                    <div class="overflow-x-auto">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-100">
                                                <tr>
                                                    <th
                                                        class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Diamond Type</th>
                                                    <th
                                                        class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Details</th>
                                                    <th
                                                        class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Specs</th>
                                                    <th
                                                        class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Price</th>
                                                    <th
                                                        class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Quantity</th>
                                                    <th
                                                        class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($order->items as $item)
                                                    <tr class="hover:bg-gray-50">
                                                        <td class="px-3 py-2 text-sm">
                                                            {{ class_basename($item->diamond_type) }}</td>
                                                        <td class="px-3 py-2 text-sm">
                                                            @if ($item->diamond)
                                                                <div class="flex items-start">
                                                                    @if (isset($item->diamond->image_link) && !empty($item->diamond->image_link))
                                                                        <img src="{{ str_replace('"', '', $item->diamond->image_link) }}"
                                                                            alt="Diamond"
                                                                            class="w-16 h-16 object-cover mr-3">
                                                                    @endif
                                                                    <div>
                                                                        <p class="font-medium">
                                                                            {{ $item->diamond->name ?? 'Diamond' }}</p>
                                                                        <p class="text-xs text-gray-500">SKU:
                                                                            {{ $item->diamond->sku ?? 'N/A' }}</p>
                                                                        <p class="text-xs text-gray-500">ID:
                                                                            {{ $item->diamond->id ?? 'N/A' }}</p>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                Diamond Information Not Available
                                                            @endif
                                                        </td>
                                                        <td class="px-3 py-2 text-xs">
                                                            @if ($item->diamond)
                                                                <div>
                                                                    <p><span class="font-medium">Shape:</span>
                                                                        {{ $item->diamond->shape ?? 'N/A' }}</p>
                                                                    <p><span class="font-medium">Carat:</span>
                                                                        {{ $item->diamond->carat ?? 'N/A' }}</p>
                                                                    <p><span class="font-medium">Color:</span>
                                                                        {{ $item->diamond->color ?? 'N/A' }}</p>
                                                                    <p><span class="font-medium">Clarity:</span>
                                                                        {{ $item->diamond->clarity ?? 'N/A' }}</p>
                                                                    <p><span class="font-medium">Cut:</span>
                                                                        {{ $item->diamond->cut ?? 'N/A' }}</p>
                                                                    <p><span class="font-medium">Lab:</span>
                                                                        {{ $item->diamond->lab ?? 'N/A' }}</p>
                                                                    <p><span class="font-medium">Certificate:</span>
                                                                        {{ $item->diamond->certificate_number ?? 'N/A' }}
                                                                    </p>
                                                                </div>
                                                            @endif
                                                        </td>
                                                        <td class="px-3 py-2 text-sm">
                                                            ${{ number_format($item->diamond->original_price ?? ($item->price ?? 0.0), 2) }}
                                                        </td>
                                                        <td class="px-3 py-2 text-sm">{{ $item->quantity ?? 1 }}</td>
                                                        <td class="px-3 py-2 text-sm">
                                                            ${{ number_format($item->subtotal ?? 0.0, 2) }}</td>
                                                    </tr>
                                                    <tr class="bg-gray-50">
                                                        <td colspan="6" class="px-3 py-2 text-xs">
                                                            @if ($item->diamond && (isset($item->diamond->certificate_link) || isset($item->diamond->video_url)))
                                                                <div class="flex space-x-3">
                                                                    @if (isset($item->diamond->certificate_link) && !empty($item->diamond->certificate_link))
                                                                        <a href="{{ str_replace('"', '', $item->diamond->certificate_link) }}"
                                                                            target="_blank"
                                                                            class="text-blue-600 hover:underline flex items-center">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="h-4 w-4 mr-1" fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                                            </svg>
                                                                            View Certificate
                                                                        </a>
                                                                    @endif
                                                                    @if (isset($item->diamond->video_url) && !empty($item->diamond->video_url))
                                                                        <a href="{{ str_replace('"', '', $item->diamond->video_url) }}"
                                                                            target="_blank"
                                                                            class="text-blue-600 hover:underline flex items-center">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="h-4 w-4 mr-1" fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                                                            </svg>
                                                                            View 360° Video
                                                                        </a>
                                                                    @endif
                                                                </div>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-gray-600">No order has been made yet.</p>
    @endif
</div>
