<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - Order #{{ $order->order_number }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 20px;
            color: #000000;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px dashed #000;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .header h1 {
            font-size: 16px;
            font-weight: bold;
            margin: 0;
        }

        .header .cod {
            font-size: 12px;
            font-weight: bold;
            border: 1px solid #000;
            padding: 3px 5px;
        }

        .address {
            margin-bottom: 10px;
        }

        .address p {
            margin: 1px 0;
            line-height: 1.2;
        }

        .address strong {
            font-weight: bold;
        }

        .delivery {
            margin-bottom: 10px;
        }

        .delivery p {
            margin: 1px 0;
            line-height: 1.2;
        }

        .barcode {
            text-align: center;
            margin: 10px 0;
            font-size: 14px;
            font-weight: bold;
        }

        .fold-line {
            text-align: center;
            border-top: 1px dashed #000;
            margin: 10px 0;
            font-size: 10px;
            color: #000;
        }

        .product-image-section {
            border: 1px solid #000;
            display: flex;
        }

        .product-image {
            width: 40%;
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-image img {
            max-width: 100%;
            max-height: 100px;
            object-fit: contain;
        }

        .product-details-section {
            width: 60%;
            padding: 5px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        .product-details-section p {
            margin: 2px 0;
            line-height: 1.2;
        }

        .product-details-section strong {
            margin-right: 5px;
        }

        .invoice-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .invoice-details h2 {
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 3px;
        }

        .invoice-details p {
            margin: 1px 0;
            line-height: 1.2;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 3px;
            text-align: left;
            font-size: 11px;
        }

        .table th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .table .total {
            font-weight: bold;
        }

        .footer {
            font-size: 10px;
            text-align: center;
            margin-top: 10px;
        }

        .footer p {
            margin: 1px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Roaya Diamond</h1>
            <div class="cod">
                Amount ${{ number_format($order->total_amount ?? 0, 2) }}
            </div>
        </div>

        <!-- Customer Address -->
        <div class="address">
            <p><strong>{{ $order->customer->first_name ?? 'Unknown' }} {{ $order->customer->last_name ?? '' }}</strong>
            </p>
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
        </div>

        <!-- Delivery Details -->
        <div class="delivery">
            <p><strong>DELHIVERY</strong></p>
            <p><strong>Delivery Destination:</strong> {{ $address['postal_code'] ?? '' }} </p>
            <p><strong>Return Code:</strong> 110095, 135002</p>
        </div>

        <!-- Barcode -->
        <div class="barcode">
            149086448052363
        </div>

        <!-- Fold Line -->
        <div class="fold-line">
            Fold Here
        </div>

        <!-- Product Image and Details -->
        <div class="product-image-section">
            <div class="product-image">
                @if (
                    $order->items->isNotEmpty() &&
                        isset($order->items->first()->diamond->image_link) &&
                        !empty($order->items->first()->diamond->image_link))
                    <img src="{{ str_replace('"', '', $order->items->first()->diamond->image_link) }}"
                        alt="Product Image">
                @else
                    <img src="placeholder.jpg" alt="Product Image">
                @endif
            </div>
            <div class="product-details-section">
                @if ($order->items->isNotEmpty() && $order->items->first()->diamond)
                    <p><strong>SKU:</strong> {{ $order->items->first()->diamond->sku ?? 'No SKU' }}</p>
                    <p><strong>Shape:</strong> {{ $order->items->first()->diamond->shape ?? 'N/A' }}</p>
                    <p><strong>Carat:</strong> {{ $order->items->first()->diamond->carat ?? 'N/A' }}</p>
                    <p><strong>Color:</strong> {{ $order->items->first()->diamond->color ?? 'N/A' }}</p>
                    <p><strong>Clarity:</strong> {{ $order->items->first()->diamond->clarity ?? 'N/A' }}</p>
                    <p><strong>Cut:</strong> {{ $order->items->first()->diamond->cut ?? 'N/A' }}</p>
                    <p><strong>Quantity:</strong> {{ $order->items->sum('quantity') }}</p>
                    <p><strong>Order Number:</strong> {{ $order->order_number }}</p>
                @else
                    <p class="my-0.5 leading-tight">No items available</p>
                @endif
            </div>
        </div>

        <!-- Invoice Details -->
        <div class="invoice-details">
            <div>
                <h2>BILL TO</h2>
                <p>Roaya Diamond CA</p>
                <p>Ontario, Canada, N0K 1P0</p>
            </div>
            <div style="text-align: right;">
                <h2>TAX INVOICE</h2>
                <p>Original For Recipient</p>
                <p><strong>Purchase Order Number:</strong> 174750978</p>
                <p><strong>Invoice Number:</strong> wjav22156</p>
                <p><strong>Order Date:</strong> 2021-08-08</p>
                <p><strong>Invoice Date:</strong> 2021-08-07 23:55:38</p>
            </div>
        </div>

        <!-- Shipping Address -->
        <div class="address">
            <p><strong>SHIP TO</strong></p>
            <p>{{ $order->customer->first_name ?? 'Unknown' }} {{ $order->customer->last_name ?? '' }}</p>
            <p>
                @if ($order->shipping_address)
                    @php
                        $address = is_array($order->shipping_address)
                            ? $order->shipping_address
                            : json_decode($order->shipping_address, true);
                        $formattedAddress = implode(
                            ', ',
                            array_filter([
                                $address['address'] ?? '',
                                $address['city'] ?? '',
                                $address['country'] ?? '',
                                $address['postal_code'] ?? '',
                            ]),
                        );
                    @endphp
                    {{ $formattedAddress }}
                @else
                    No address provided
                @endif
            </p>
        </div>

        <!-- Product Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>HSN</th>
                    <th>Product Value</th>
                    <th>Unit Price</th>
                    <th>Qty</th>
                    <th>Taxes</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @forelse($order->items as $item)
                    <tr>
                        <td>940510</td>
                        <td>{{ $item->diamond->name ?? 'No Diamond Name' }}</td>
                        <td>${{ number_format($item->diamond->original_price ?? 0, 2) }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>IGST @12.0%
                            ${{ number_format($item->diamond->original_price * $item->quantity * 0.12 ?? 0, 2) }}
                        </td>
                        <td>${{ number_format($item->diamond->original_price * $item->quantity * 1.12 ?? 0, 2) }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="border border-black p-1 text-[11px]">No items available</td>
                    </tr>
                @endforelse
                <tr>
                    <td colspan="5" class="total">Total</td>
                    <td class="total">
                        ${{ number_format($order->items->sum(function ($item) {return ($item->diamond->original_price ?? 0) * $item->quantity * 1.12;}) ?? 0,2) }}
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Footer -->
        <div class="footer">
            <p>Sold by: Roaya Diamond , Ontario , N0K 1P0 , Canada.</p>
            <p>Tax is not payable on reverse charge basis</p>
            <p>This is a computer generated invoice and does not require signature</p>
        </div>
    </div>
</body>

</html>
