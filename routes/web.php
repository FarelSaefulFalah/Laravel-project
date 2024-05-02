<?php

use App\Models\AlbumMusic;
use App\Models\Sekolah;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
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

//route basic
Route :: get('/samarinda',function () {
    return '<h1>HAALOOO</h1>'
    . 'Selamat Datang Kawan Teman<br>'
    . 'Orang hitam bilang ini settingan';

 });

Route::get('/HAL2', function () {
    return view('animals2');
});

Route::get('/HAL3', function () {
    return view('tokobuah_page');
});

Route::get('/datadiri', function () {
    $nama = "Abigail";
    $jenis_kelamin = "Laki-Laki";
    $pendidikan_terakhir = "SMK";
    $pekerjaan = "i am a student bro";
    return view('biodata_page',compact('nama','jenis_kelamin','pendidikan_terakhir','pekerjaan'));
});

Route::get('/xample/{nama}/{kelas}/{jurusan}', function(Request $request,$nama,$kelas,$jurusan) {
    $nama2 = $nama;
    $kelas2 = $kelas;
    $jurusan2 = $jurusan;
    return view('xample',compact('nama2','kelas2','jurusan2'));
});

//parameter
Route::get('/halo/{nama}/{kelas}', function (Request $request, $nama, $kelas) {
    $nama2 = $nama;
    $kelas2 = $kelas;
    return view('halo_page',compact('nama2','kelas2'));
    });


Route::get('/sekolah', function () {
    return Sekolah::all();
});

Route::get('/siswa', function () {
    return view('Siswa');
});                                                                                                                                                                                                                         

Route::get('/musik', function () {
    //return view('AlbumMusic');
        return AlbumMusic::all();
}); 
