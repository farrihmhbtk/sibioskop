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
        Schema::create('kursi_pesanans', function (Blueprint $table) {
            $table->unsignedBigInteger('seatID');
            $table->unsignedBigInteger('orderNumber');
            
            $table->foreign('seatID')->references('seatID')->on('kursis')->onDelete('cascade');
            $table->foreign('orderNumber')->references('orderNumber')->on('pesanans')->onDelete('cascade');
            
            // Add other columns as needed
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursi_pesanans');
    }
};
