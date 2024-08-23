<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. Street, Neighborhood,Neighborhood, Zip Code,
     *  City, State, Country
     */
    public function up(): void
    {
        Schema::create('_location', function (Blueprint $table) {
            $table->id();
            $table->string('Street');
            $table->string('Neighborhood');
            $table->string('Number');
            $table->string('Zip Code');
            $table->string('City');
            $table->string('State');
            $table->string('Country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_location');
    }
};
