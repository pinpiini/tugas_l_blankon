<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $html = "
        <h1>Aplikasi Kontak</h1>
        <div>
            <a href='/contacts'>Kontak</a>
            <a href='/contacts/create'>Kontak Baru</a>
            <a href='/contacts/2'>Tampilan Kontak</a>
            <a href='/students/kevinn'>Tampilan Nama</a>
        </div>
    ";
    return $html;
});

Route::get('contacts', function() {
    return "<h1><marquee>Hallo Hallooo</marquee></h1>";
});

Route::get('contacts/create', function() {
    return "<h1>Tambah Kontak Baru</h1>";
});

Route::get('/contacts/{id}', function($id) {
    return "Halaman Kontak dengan ID".$id;
});

Route::get('/students/{name}', function($name=null) {
    if ($name) {
        return "<h1>Nama Lengkap: </h1>".$name;
    }else {
        return "Nama Lengkap Belum di Isi";
    }
});