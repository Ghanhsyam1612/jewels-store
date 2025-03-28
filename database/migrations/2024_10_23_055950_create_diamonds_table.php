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
        Schema::create('diamonds', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->enum('shape', [
                'ROUND',
                'PRINCESS',
                'RADIANT',
                'ASSCHER',
                'CUSHION',
                'OVAL',
                'EMERALD',
                'PEAR',
                'MARQUISE',
                'HEART',
                'ROSE_CUT',
                'OLD_EUROPEAN',
                'HALF_MOON',
                'BAGUETTE_TRAPEZOID',
                'BAGUETTE',
                'HEXAGON',
                'KITE',
                'OLD_MINE',
                'TRAPEZOID',
                'TRIANGULAR',
                'EUROPEAN',
                'LOZENGE',
                'CRISS'
            ])->nullable();
            $table->decimal('original_price', 10, 2)->nullable();
            $table->decimal('mrp', 10, 2)->nullable();
            $table->string('carat')->nullable();
            $table->enum('cut', ['GOOD', 'VERY GOOD', 'EXCELLENT', 'IDEAL'])->nullable();
            $table->enum('color', ['M', 'L', 'K', 'J', 'I', 'H', 'G', 'F', 'E', 'D'])->nullable();
            $table->enum('clarity', ['IF', 'VVS1', 'VVS2', 'VS1', 'VS2', 'SI1', 'SI2', 'I1', 'I2', 'I3'])->nullable();
            $table->json('image_link')->nullable();
            $table->string('size')->nullable();
            $table->string('l_w_ratio')->nullable();
            $table->string('table')->nullable();
            $table->string('sku')->nullable();
            $table->string('lab')->nullable();
            $table->string('certificate_number')->nullable();
            $table->json('video_url')->nullable();
            $table->json('certificate_link')->nullable();
            $table->string('growth_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diamonds');
    }
};
