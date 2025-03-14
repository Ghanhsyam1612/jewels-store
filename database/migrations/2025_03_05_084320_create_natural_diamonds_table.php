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
        Schema::create('natural_diamonds', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('lab')->nullable();
            $table->enum('shape', [
                'Baguette',
                'CUSHION',
                'EMERALD',
                'HEART',
                'MARQUISE',
                'OVAL',
                'PEAR',
                'PRINCESS',
                'RADIANT',
                'ROUND',
                'SQUARE EMERALD'
            ])->nullable();
            $table->string('carat')->nullable();
            $table->enum('color', ['M', 'L', 'K', 'J', 'I', 'H', 'G', 'F', 'E', 'D' , 'N'])->nullable();
            $table->enum('clarity', ['IF', 'VVS1', 'VVS2', 'VS1', 'VS2', 'SI1', 'SI2', 'I1', 'I2', 'I3' , 'FL'])->nullable();
            $table->enum('cut', ['GOOD', 'VERY GOOD', 'EXCELLENT', 'IDEAL'])->nullable();
            $table->decimal('mrp', 10, 2)->nullable();
            $table->decimal('original_price', 10, 2)->nullable();
            $table->string('table')->nullable();
            $table->string('depth')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('ratio')->nullable();
            $table->string('inscription')->nullable();
            $table->string('certificate_link')->nullable();
            $table->string('image_link')->nullable();
            $table->string('video_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('natural_diamonds');
    }
};
