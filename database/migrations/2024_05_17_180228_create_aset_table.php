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
        Schema::create('aset', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama_aset');
            $table->text('diskripsi');
            $table->integer('nominal_aset');
            $table->string('sumber_aset');
            $table->boolean('is_deleted');
            $table->year('tahun');
            $table->integer('kuantitas');
            $table->boolean('is_confirmed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aset');
    }
};
