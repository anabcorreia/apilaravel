<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. Name, Age, Height, Weight, Sex, CPF, ID, Team
     */
    public function up(): void
    {
        Schema::create('_competitor', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('Height');
            $table->string('Weight');
            $table->string('sex');
            $table->string('CPF');
            $table->string('RG');
            $table->string('Team');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_competitor');
    }
};
