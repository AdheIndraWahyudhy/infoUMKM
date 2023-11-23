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
        Schema::create('shops', function (Blueprint $table) {
            $table->id('id_toko');
            $table->unsignedBigInteger('user_id');
            $table->string('owner');
            $table->string('shop_name');
            $table->text('shop_address');
            $table->string('order_image')->nullable();
            $table->text('description');
            $table->integer('total_suggestions')->default(0);
            $table->integer('total_reports')->default(0);
            $table->integer('rating')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
