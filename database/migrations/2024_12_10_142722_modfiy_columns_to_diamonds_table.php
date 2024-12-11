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
        Schema::table('diamonds', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->nullable()->change();
            $table->decimal('carat', 10, 2)->nullable()->change();
            $table->string('size')->nullable()->change();
            $table->decimal('l_w_ratio', 10, 2)->nullable()->change();
            $table->decimal('table', 10, 2)->nullable()->change();

            $table->renameColumn('price', 'original_price');

            $table->decimal('mrp', 10, 2)->nullable();
            $table->string('growth_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('diamonds', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->nullable()->change();
            $table->decimal('carat', 10, 2)->nullable()->change();
            $table->string('size')->nullable()->change();
            $table->decimal('l_w_ratio', 10, 2)->nullable()->change();
            $table->string('table')->nullable()->change();

            $table->renameColumn('original_price', 'price');

            $table->dropColumn('mrp');
            $table->dropColumn('growth_type');
        });
    }
};
