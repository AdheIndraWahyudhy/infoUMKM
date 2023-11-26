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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_product');
            $table->unsignedBigInteger('store_id'); // Kolom store_id sebagai referensi ke id_toko pada tabel stores
            $table->string('product_name'); // Kolom nama produk
            $table->string('product_image'); // Kolom gambar produk
            $table->decimal('product_price', 10, 2); // Kolom harga produk dengan dua angka desimal
            $table->text('description'); // Kolom deskripsi
            $table->timestamps(); // Kolom timestamps (created_at dan updated_at)

            // Menambahkan foreign key constraints
            $table->foreign('store_id')->references('id_store')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
