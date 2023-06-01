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
        Schema::create('bioskops', function (Blueprint $table) {
            $table->id('bioskopID');
            $table->unsignedBigInteger('cinemaID');
            $table->foreign('cinemaID')->references('cinemaID')->on('cinemas')->onDelete('cascade');
            $table->string('bioskop');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bioskops');
    }
};
