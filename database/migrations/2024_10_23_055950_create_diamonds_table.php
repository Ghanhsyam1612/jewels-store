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
            $table->string('name');
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
                'TRIANGULAR'
            ]);
            $table->integer('price');
            $table->integer('carat');
            $table->enum('cut', ['GOOD', 'VERY GOOD', 'EXCELLENT', 'IDEAL']);
            $table->enum('color', ['M' ,'L' ,'K' , 'J' , 'I' ,'H' , 'G' , 'F' , 'E' , 'D']);
            $table->enum('clarity', ['IF', 'VVS1', 'VVS2', 'VS1', 'VS2', 'SI1', 'SI2', 'I1', 'I2', 'I3']);
            $table->json('images');
            $table->integer('size');
            $table->integer('l_w_ratio');
            $table->integer('table');
            $table->string('sku');
            $table->json('video_url');
            $table->timestamps();
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
