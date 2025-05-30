<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

     /**
     * Nama tabel yang digunakan
     */
    protected $table = 'tblproduk';

    /**
     * Nonaktifkan timestamps
     */
    public $timestamps = false;

    /**
     * Kolom yang bisa diisi
     */
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga'
        // Tambahkan kolom lain yang ada di tabel
    ];
     /**
     * Format tanggal yang digunakan
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * Konfigurasi default timestamp
     * (tidak perlu ditulis karena defaultnya true)
     */
    // public $timestamps = true;
}
