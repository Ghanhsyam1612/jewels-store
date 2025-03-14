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
        Schema::create('antique_cut_diamonds', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('shape')->nullable();
            $table->string('carat')->nullable();
            $table->enum('color', ['D', 'E', 'F', 'G', 'I', 'H'])->nullable();
            $table->enum('clarity', ['IF', 'VVS1', 'VVS2', 'VS1', 'VS2', 'SI1', 'SI2'])->nullable();
            $table->enum('cut', ['GOOD', 'VERY GOOD', 'EXCELLENT', 'IDEAL'])->nullable();
            $table->string('lab')->nullable();
            $table->string('certificate_number')->nullable();
            $table->decimal('original_price', 10, 2)->nullable();
            $table->string('size')->nullable();
            $table->string('growth_type')->nullable();
            $table->string('depth')->nullable();
            $table->string('table')->nullable();
            $table->string('video_url')->nullable();
            $table->string('certificate_link')->nullable();
            $table->string('image_link')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antique_cut_diamonds');
    }
};
