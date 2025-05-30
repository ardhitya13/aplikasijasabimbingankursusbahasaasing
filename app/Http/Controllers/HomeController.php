<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
       //  $data = [
       //   'nama' => 'Ardhitya',
       //   'pekerjaan' => 'Developer',
       //  ];

       //  return view('home')->with($data);

       //$nama = 'Danur';
       //$pekerjaan = 'Student';
       //return view('home', compact('nama','pekerjaan'));

       //return view('home');

       return view('pages.home', [
        'title' => 'Halaman Home',
        'page_title' => 'Selamat Datang di Bimbel Bahasa',
        'imgsrc' => asset('images/gambar.jpg'),
        'desc' => 'Ini adalah deskripsi menarik tentang kursus bahasa asing.',
    ]);

   }

   }

// //    public function contact()
// //    {
// //     // return view('contact');
// //     //return view('home');
// //    }
// }
