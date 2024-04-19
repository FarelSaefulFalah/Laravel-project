<?php

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
Route :: get('/About',function () {
    return '<h1>HAALOOO</h1>'
    . 'Selamat Datang Kawan Teman<br>'
    . 'Orang hitam bilang ini settingan';

 });

Route :: get('Sato',function (){
    $raja = "The Greatest Farel";
    $hewan = ["Monkey","FireFly","Niger","Butterfly","Crocodile"];
    return view('Animals_page', compact('raja','hewan'));
});