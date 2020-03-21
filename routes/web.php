<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function(){
    return view('home');
});

Route::get('data_mahasiswa', function(){
    $halaman = 'data_mahasiswa';
    return view('mahasiswa/data_mahasiswa', compact('halaman'));
});

Route::get('lihat_data_mahasiswa', function(){
    $halaman = 'lihat_data_mahasiswa';
    $mahasiswa = ['Dwi',
    'Hapsari',
    'Isyana',
    'Raisa'
];
return view('mahasiswa/lihat_data_mahasiswa', compact('halaman','mahasiswa'));
});

Route::get('lihat_data_mahasiswa2', function(){
    $mahasiswa =['Dwi',
    'Hapsari',
    'Isyana',
    'Raisa'
];
return view('mahasiswa/lihat_data_mahasiswa2')-> with('mahasiswa',$mahasiswa);
});
