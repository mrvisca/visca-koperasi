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
            $table->id();
            $table->string('nama');
            $table->string('variant');
            $table->string('kode');
            $table->string('expired');
            $table->integer('stock');
            $table->string('foto');
            $table->bigInteger('modal');
            $table->bigInteger('harga_jual');
            $table->bigInteger('satuan_beli');
            $table->bigInteger('satuan_jual');
            $table->string('deskripsi');
            $table->timestamps();
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
