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
        Schema::create('balasans', function (Blueprint $table) {
            $table->string('id_balasan')->primary();
            $table->string('komentarId',20);
            $table->foreign('komentarId')->references('id_komentar')->on('komentars')->onDelete('cascade')->onUpdate('cascade');
            $table->text('balasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balasans');
    }
};
