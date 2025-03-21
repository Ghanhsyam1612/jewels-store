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
        Schema::table('customers', function (Blueprint $table) {
            $table->string('stripe_customer_id')->nullable();
            $table->string('subscription_status')->nullable();
            $table->string('subscription_plan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('stripe_customer_id');
            $table->dropColumn('subscription_status');
            $table->dropColumn('subscription_plan');
        });
    }
};
