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
        if (!Schema::hasTable('tblproduk')) {
        Schema::create('tblproduk', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100)->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('harga')->nullable();
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         // Jangan hapus tabel jika rollback
         // Schema::dropIfExists('tblproduk');
    }
};
