<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;
use App\Mail\OrderInvoiceMail;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;

class SendOrderInvoiceJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $order;

    /**
     * Create a new job instance.
     *
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        // Generate PDF Invoice
        // $pdf = Pdf::loadView('invoices.order-invoice', ['order' => $this->order]);
        // $invoicePath = 'invoices/invoice_' . $this->order->id . '.pdf';
        // $pdf->save(storage_path('app/' . $invoicePath));

        // // Update order with invoice path
        // $this->order->update(['invoice_pdf_path' => $invoicePath]);

        // Send Email with the PDF attachment
        Mail::to($this->order->customer->email)->send(new OrderInvoiceMail($this->order));
    }
}
