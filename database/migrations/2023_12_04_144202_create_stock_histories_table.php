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
        Schema::create('stock_histories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->bigInteger('stock_transaksi');
            $table->bigInteger('real_stock');
            $table->bigInteger('unit_id');
            $table->enum('tipe',['pengurangan','penambahan','penyesuaian']);
            $table->bigInteger('modal_lama');
            $table->bigInteger('modal_baru');
            $table->bigInteger('rata-rata');
            $table->string('keterangan');
            $table->bigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_histories');
    }
};
