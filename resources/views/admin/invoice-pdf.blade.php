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
        .table th, .table td {
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
            <h1>MC Mayur Collection</h1>
            <div class="cod">
                COD: Collect Amount Rs. {{ number_format($order->total ?? 0, 2) }}/-
            </div>
        </div>

        <!-- Customer Address -->
        <div class="address">
            <p><strong>{{ $order->customer->first_name ?? 'Unknown' }} {{ $order->customer->last_name ?? '' }}</strong></p>
            @if($order->shipping_address)
                @php
                    $address = is_array($order->shipping_address) ? $order->shipping_address : json_decode($order->shipping_address, true);
                @endphp
                <p>house no. 8/89</p>
                <p>{{ $address['address'] ?? '' }}</p>
                <p>{{ $address['city'] ?? '' }}, {{ $address['country'] ?? '' }}, {{ $address['postal_code'] ?? '' }}</p>
            @else
                <p>No address provided</p>
            @endif
        </div>

        <!-- Delivery Details -->
        <div class="delivery">
            <p><strong>DELHIVERY</strong></p>
            <p><strong>Delivery Destination:</strong> 10095, 135002</p>
            <p><strong>Return Code:</strong> 110095, 135002</p>
        </div>

        <!-- Barcode -->
        <div class="barcode">
            149808444852963
            <!-- Note: For a real barcode, you'd need a barcode generation library -->
        </div>

        <!-- Fold Line -->
        <div class="fold-line">
            Fold Here
        </div>

        <!-- Product Image and Details -->
        <div class="product-image-section">
            <div class="product-image">
                <img src="{{ $order->items->first()->product_image ?? 'placeholder.jpg' }}" alt="Product Image">
            </div>
            <div class="product-details-section">
                @if($order->items->isNotEmpty())
                    <p><strong>SKU:</strong> {{ $order->items->first()->sku ?? 'SOHiXeUe' }}</p>
                    <p><strong>Size:</strong> Free Size</p>
                    <p><strong>Quantity:</strong> {{ $order->items->sum('quantity') }}</p>
                    <p><strong>Color:</strong> WHITE</p>
                    <p><strong>Order Number:</strong> {{ $order->order_number }}</p>
                @else
                    <p>No items available</p>
                @endif
            </div>
        </div>

        <!-- Invoice Details -->
        <div class="invoice-details">
            <div>
                <h2>BILL TO</h2>
                <p>MAYUR Collection</p>
                <p>Bengauru, Karnataka, 530068</p>
                <p>Place of Supply: 29 Karnataka</p>
            </div>
            <div style="text-align: right;">
                <h2>TAX INVOICE</h2>
                <p>Original For Recipient</p>
                <p><strong>Purchase Order Number:</strong> 174750978</p>
                <p><strong>Invoice Number:</strong> wjav22156</p>
                <p><strong>Order Date:</strong> {{ $order->created_at->format('Y-m-d') }}</p>
                <p><strong>Invoice Date:</strong> {{ now()->format('Y-m-d H:i:s') }}</p>
            </div>
        </div>

        <!-- Shipping Address -->
        <div class="address">
            <p><strong>SHIP TO</strong></p>
            <p>{{ $order->customer->first_name ?? 'Unknown' }} {{ $order->customer->last_name ?? '' }}</p>
            @if($order->shipping_address)
                <p>{{ $address['address'] ?? '' }}, {{ $address['city'] ?? '' }}, {{ $address['country'] ?? '' }}, {{ $address['postal_code'] ?? '' }}</p>
            @else
                <p>No address provided</p>
            @endif
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
                        <td>{{ $item->product_name ?? 'Fabulous Bulbs & Fixtures' }}</td>
                        <td>Rs. {{ number_format($item->unit_price ?? 0, 2) }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>IGST @12.0% Rs. {{ number_format(($item->unit_price * $item->quantity * 0.12) ?? 0, 2) }}</td>
                        <td>Rs. {{ number_format(($item->unit_price * $item->quantity * 1.12) ?? 0, 2) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No items available</td>
                    </tr>
                @endforelse
                <tr>
                    <td colspan="5" class="total">Total</td>
                    <td class="total">Rs. {{ number_format($order->total ?? 0, 2) }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Footer -->
        <div class="footer">
            <p>Sold by: YUVILEX, East Delhi, Delhi, 110095, 07KPSXPSV41P1Z1</p>
            <p>Tax is not payable on reverse charge basis</p>
            <p>This is a computer generated invoice and does not require signature</p>
        </div>
    </div>
</body>
</html>