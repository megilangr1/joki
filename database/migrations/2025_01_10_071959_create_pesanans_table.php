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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelanggan');
            $table->string('kode_pesanan')->unique();
            $table->date('tanggal_pesanan');
            $table->string('ign');
            $table->string('hero_request')->default('Bebas');
            $table->string('start_rank');
            $table->string('target_rank');
            $table->smallInteger('jumlah_stars');
            $table->double('harga');
            $table->tinyInteger('status_pesanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
