<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function getData() {
        return [
            ['id' => 1, 'nama' => 'Ardhitya', 'kelas' => 'TI-4D'],
            ['id' => 2, 'nama' => 'Joel', 'kelas' => 'TI-4D'],
            ['id' => 3, 'nama' => 'Yusuf', 'kelas' => 'TI-4D'],
        ];
    }

    public function tampilkan() {
        $data = $this->getData();
        return view('siswa', compact('data'));
    }
}
