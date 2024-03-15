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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_title');
            $table->text('description');
            $table->integer('rooms');
            $table->integer('bathrooms');
            $table->decimal('price', 10, 2); // Assuming the price is in decimal format
            $table->string('property_type');
            $table->string('location');
            $table->string('photo')->nullable(); // Assuming photo path will be stored
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
