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
                $table->id(); // Lebih baik menggunakan ini daripada unsignedInteger
                $table->string('nama', 100)->nullable();
                $table->text('deskripsi')->nullable();
                $table->integer('harga')->nullable();
                $table->timestamps(); // Akan membuat created_at dan updated_at
            });
        } else {
            // Jika tabel sudah ada, tambahkan kolom yang mungkin belum ada
            Schema::table('tblproduk', function (Blueprint $table) {
                if (!Schema::hasColumn('tblproduk', 'created_at')) {
                    $table->timestamp('created_at')->nullable();
                }
                if (!Schema::hasColumn('tblproduk', 'updated_at')) {
                    $table->timestamp('updated_at')->nullable();
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hanya drop tabel jika memang ingin dirollback sepenuhnya
        Schema::dropIfExists('tblproduk');
    }
};
