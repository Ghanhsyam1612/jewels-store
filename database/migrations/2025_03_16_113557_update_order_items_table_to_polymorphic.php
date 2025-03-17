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
        Schema::table('order_items', function (Blueprint $table) {
            // First, remove the existing diamond_id foreign key constraint
            $table->dropForeign(['diamond_id']);
            $table->dropColumn('diamond_id');

            // Add the polymorphic relationship columns
            $table->string('diamond_type');
            $table->unsignedBigInteger('diamond_id');

            // Create a composite index for better query performance
            $table->index(['diamond_type', 'diamond_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_items', function (Blueprint $table) {
            //
        });
    }
};
