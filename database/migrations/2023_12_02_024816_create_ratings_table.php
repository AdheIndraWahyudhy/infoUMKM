<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('id_rating'); // Kolom id rating
            $table->unsignedBigInteger('store_id'); // Kolom id store
            $table->integer('rating'); // Kolom rating
            $table->timestamps(); // Kolom timestamp

            // Definisi foreign key untuk menghubungkan dengan tabel store
            $table->foreign('store_id')->references('id_store')->on('stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
};
