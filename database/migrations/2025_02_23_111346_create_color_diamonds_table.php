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
        Schema::create('color_diamonds', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->enum('shape', [
                'ROUND', 
                'ROSE' , 
                'ASHOKA',
                'PRINCESS', 
                'RADIANT',
                'ASSCHER', 
                'CUSHION',
                'OVAL', 
                'EMERALD', 
                'FLOWER',
                'PEAR', 
                'MARQUISE', 
                'HEART', 
                'TRILLIANT',
                'TRAPEZOID', 
                'TRIANGULAR' 
            ])->nullable();
            $table->string('carat')->nullable();
            $table->enum('color',['Yellow','Pink','Purple','Red','Blue','Green','Orange','Brown','Black','Gray'])->nullable();
            $table->enum('intensity',['FANCY LIGHT' ,'FANCY','FANCY INTENSE','FANCY VIVID','FANCY DEEP','FANCY DARK'])->nullable();
            $table->enum('clarity', ['IF', 'VVS1', 'VVS2', 'VS1', 'VS2', 'SI1', 'SI2', 'I1', 'I2', 'I3'])->nullable();
            $table->enum('cut', ['GOOD', 'VERY GOOD', 'EXCELLENT', 'IDEAL'])->nullable();
            $table->string('size')->nullable();
            $table->decimal('original_price', 10, 2)->nullable();
            $table->string('growth_type')->nullable();
            $table->string('depth')->nullable();
            $table->string('table')->nullable();
            $table->string('certificate_number')->nullable();
            $table->json('certificate_link')->nullable();
            $table->json('video_url')->nullable();
            $table->json('image_link')->nullable();
            $table->string('lab')->nullable();
            $table->string('sku')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('color_diamonds');
    }
};
