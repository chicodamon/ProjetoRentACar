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
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->string('Model');
            $table->string('Color');  
            $table->string('LicensePlate')->unique();
            $table->integer('Year');
            $table->decimal('Price_per_Day', 10, 2);
            $table->string('FuelType');
            $table->string('Transmission');
            $table->integer('Mileage')->nullable();
            $table->integer('Status')->default(0); // 0 - 'available', 1 - 'sold', 2 - 'reserved'

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
