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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete();
            $table->string('payment_method');
            $table->enum('payment_status', ['pending', 'paid', 'failed'])->default('pending');
            $table->string('transaction_id')->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->decimal('payment_amount', 10, 2);
            $table->string('currency')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->enum('refund_status', ['pending', 'refunded', 'failed' , 'cancelled' , 'refunded_partially' , 'refunded_fully'])->default('pending');
            $table->decimal('refund_amount', 10, 2)->default(0);
            $table->dateTime('refund_date')->nullable();
            $table->string('refund_reason')->nullable();
            $table->json('payment_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
