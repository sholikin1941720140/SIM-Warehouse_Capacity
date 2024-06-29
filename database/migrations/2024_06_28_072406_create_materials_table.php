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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('rak');
            $table->string('item_number');
            $table->string('part_number');
            $table->string('product_name');
            $table->decimal('panjang', 9, 2);
            $table->decimal('lebar', 9, 2);
            $table->decimal('tinggi', 9, 2);
            $table->decimal('jr', 9, 2);
            $table->decimal('volume', 12, 4);
            $table->decimal('qty_box', 9, 2);
            $table->decimal('qty_pack', 9, 2);
            $table->decimal('qty_berat', 9, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
