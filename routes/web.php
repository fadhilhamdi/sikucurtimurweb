<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profil-nagari', function () {
    return view('profil-nagari');
})->name('profil.nagari');

Route::get('/kegiatan', function () {
    return view('kegiatan.index');
})->name('kegiatan.index');

Route::get('/kegiatan/{slug}', function ($slug) {
    return view('kegiatan.show', compact('slug'));
})->name('kegiatan.show');

Route::get('/wisata', function () {
    return view('wisata.index');
})->name('wisata.index');

Route::get('/wisata/{slug}', function ($slug) {
    return view('wisata.show', compact('slug'));
})->name('wisata.show');

Route::get('/umkm', function () {
    return view('umkm.index');
})->name('umkm.index');

Route::get('/umkm/{slug}', function ($slug) {
    return view('umkm.show', compact('slug'));
})->name('umkm.show');
