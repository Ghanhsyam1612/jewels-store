<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::query();

        // Filter by status
        $status = $request->get('shipping_status', 'all');
        if ($status !== 'all') {
            $query->where('shipping_status', $status);
        }

        // Search
        if ($search = $request->get('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('order_number', 'like', "%$search%");
                //   ->orWhere('customer', 'like', "%$search%")
                //   ->orWhere('customer_email', 'like', "%$search%");
            });
        }

        // Sorting
        $sort = $request->get('sort', 'order_date');
        $direction = $request->get('direction', 'desc');
        $query->orderBy($sort, $direction);

        // Analytics
        $totalOrders = Order::count();
        $totalProcessOrder = Order::whereIn('shipping_status', ['pending', 'processing', 'shipped' , 'completed'])->count();
        $totalCompleteOrder = Order::where('shipping_status', 'completed')->count();
        $averagePrice = Order::avg('total_amount');

        // Paginate
        $orders = $query->paginate(5);

        return view('admin.order', compact(
            'orders',
            'totalOrders',
            'totalProcessOrder',
            'totalCompleteOrder',
            'averagePrice'
        ));
    }

    public function show(Order $order)
    {
        $order->load([
            'items.diamond', 
            'payments'
        ]);
      
        return view('admin.order-details', compact('order'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $order->shipping_status = $request->input('status');
        $order->save();
        return redirect()->back()->with('success', 'Order status updated successfully.');
    }

    public function printInvoice(Order $order)
    {
        $order->load([
            'items.diamond', 
            'payments'
        ]);
        
        // Generate the PDF
        $pdf = Pdf::loadView('admin.invoice-pdf', compact('order'));
        return $pdf->download('invoice-order-' . $order->order_number . '.pdf');
    }


}
