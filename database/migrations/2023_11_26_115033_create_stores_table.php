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
        Schema::create('stores', function (Blueprint $table) {
            $table->id('id_store'); 
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('category_id');
            $table->string('owner'); 
            $table->string('store_name'); 
            $table->string('store_address'); 
            $table->string('store_image'); 
            $table->text('description')->nullable(); 
            $table->integer('total_reports')->default(0); 
            $table->decimal('rating', 3, 2)->default(0.00); 
            $table->timestamps();
            
            // Menambahkan foreign key constraints
            $table->foreign('user_id')->references('id_user')->on('users');
            $table->foreign('category_id')->references('id_category')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
