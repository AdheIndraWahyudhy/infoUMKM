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
        Schema::create('suggestions_reports', function (Blueprint $table) {
            $table->id('id_sr');
            $table->unsignedBigInteger('store_id'); 
            $table->enum('type', ['saran', 'laporan']);
            $table->text('message');
            $table->timestamps(); 

            // Menambahkan foreign key constraints
            $table->foreign('store_id')->references('id_store')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suggestions_reports');
    }
};
