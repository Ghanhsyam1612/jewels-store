<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->string('order_number')->unique();
            $table->dateTime('order_date')->nullable();
            $table->enum('shipping_status', ['pending', 'processing', 'shipped', 'completed', 'cancelled' , 'ready_to_ship', 'schedule_pickup'])->default('pending');
            $table->decimal('shipping_cost', 10, 2)->default(0);
            $table->decimal('tax_amount', 10, 2)->default(0);   
            $table->decimal('total_amount', 10, 2);
            $table->decimal('discount_amount', 10, 2)->default(0);
            $table->enum('payment_status', ['pending', 'completed', 'failed'])->default('pending');
            $table->json('shipping_address')->nullable();
            $table->json('billing_address')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('shipping_label_url')->nullable();
            $table->string('carrier')->nullable();
            $table->string('coupon_code')->nullable();
            $table->string('notes')->nullable();
            $table->dateTime('pickup_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
