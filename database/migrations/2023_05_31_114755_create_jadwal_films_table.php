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
        Schema::create('jadwal_films', function (Blueprint $table) {
            $table->id('showID');
            $table->unsignedBigInteger('bioskopID');
            $table->unsignedBigInteger('startTimeID');
            $table->unsignedBigInteger('filmID');
            $table->unsignedBigInteger('showDateID');
            $table->unsignedBigInteger('studioID');
            $table->foreign('bioskopID')->references('bioskopID')->on('bioskops')->onDelete('cascade');
            $table->foreign('startTimeID')->references('startTimeID')->on('waktu_tayangs')->onDelete('cascade');
            $table->foreign('filmID')->references('filmID')->on('films')->onDelete('cascade');
            $table->foreign('showDateID')->references('showDateID')->on('tanggal_tayangs')->onDelete('cascade');
            $table->foreign('studioID')->references('studioID')->on('studios')->onDelete('cascade');
            $table->decimal('price', $precision = 8, $scale = 0);
            $table->string('endTime');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_films');
    }
};
