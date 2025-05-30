@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Berita Batam')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>

    @include('components.card', [
        'imgsrc' => 'images/gonggong.jpg',
        'title' => 'Gonggong goreng Tepung mak Limah',
        'description' => 'Kuliner unik ini wajib dicoba untuk enguji ketahanan gigi.'
    ])
@endsection
