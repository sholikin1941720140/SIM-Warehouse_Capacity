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
        Schema::create('raks', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('alamat');
            $table->decimal('panjang', 20, 2);
            $table->decimal('lebar', 20, 2);
            $table->decimal('tinggi', 20, 2);
            $table->decimal('tinggiAts', 20, 2);
            $table->decimal('tinggiTtl', 20, 2);
            $table->decimal('volume', 35, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raks');
    }
};
