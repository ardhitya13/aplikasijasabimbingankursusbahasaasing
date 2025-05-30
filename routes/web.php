<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListProdukController;


Route::get('listproduk', [ListProdukController::class, 'show'] );
Route::post('/produk/simpan', [ListProdukController::class, 'simpan'])->name('produk.simpan');
// routes/web.php

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard',  function () {
//         return 'Admin dasboard';
// });


//     Route::get('/users', function () {
//         return 'Admin Users';
//     });
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
// return view('list_barang', compact('id', 'nama'));
// });

// Route::get('/', function () {
//     return view('pages.home', [
//         'title' => 'Halaman Home',
//         'page_title' => 'Selamat Datang di Bimbel Bahasa',
//         'imgsrc' => asset('images/gambar.jpg'),
//         'desc' => 'Ini adalah deskripsi menarik tentang kursus bahasa asing.',
//     ]);
// });

// Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
// Route::get('/', [HomeController::class, 'index']);

// //Route::get('/contact', [HomeController::class, 'contact']);
// Route::get('/siswa', [SiswaController::class, 'tampilkan']);
// Route::get('/list_product', [ProductController::class, 'show']);

