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
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('desc');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // penambahan bank_name
        Schema::table('products', function (Blueprint $table) {
            $table->bigInteger('category_id')->default(0)->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoris');
    }
};
