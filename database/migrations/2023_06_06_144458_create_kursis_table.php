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
        Schema::create('kursis', function (Blueprint $table) {
            $table->id('seatID');
            $table->unsignedBigInteger('bioskopID');
            $table->foreign('bioskopID')->references('bioskopID')->on('bioskops')->onDelete('cascade');
            $table->string('seatNumber');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursis');
    }
};
