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
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->string('id_detail_transaksi', 20)->primary();
            $table->string('transaksiId',20);
            $table->string('produkKode',20);
            $table->foreign('transaksiId')->references('id_transaksi')->on('transaksis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('produkKode')->references('kode_produk')->on('produks')->onDelete('cascade')->onUpdate('cascade');
            $table->string('foto_produk');
            $table->string('nama_produk');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksis');
    }
};
