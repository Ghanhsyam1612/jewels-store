<!-- resources/views/invoices/order-invoice.blade.php -->
<!DOCTYPE html>
<html>
<body>
    <h1>Tax Invoice</h1>
    
    <div>
        <h2>Bill To:</h2>
        <p>{{ $order->full_name }}</p>
        <p>{{ $order->address }}</p>
        <p>{{ $order->city }}, {{ $order->zip }}, {{ $order->country }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->orderItems as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->quantity * $item->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <h3>Total: {{ $order->total }}</h3>
    </div>
</body>
</html>