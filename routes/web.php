<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',[
        "title" => "Home"
    ]);
});

Route::get('/biodata', function () {
    return view('about',[
        "title" => "Biodata",
        "nama" => "R.Muhammad Azmi Herdi Shofiyullah",
        "ttl" => "Jember, 12 September 2001",
        "email" => "azmikamikaze@gmail.com",
        "okupasi" => "Mahasiswa Polinema",
        "alamat" => "Jl.Mangun Sarkoro Gg.III / 2448",
        "hobi" => "Menonton Anime, Bermain Game, Membaca Manga"
    ]);
});

Route::get('/komentar', function () {
    return view('comment',[
        "title" => "Comment"
    ]);
});
