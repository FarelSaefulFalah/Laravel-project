<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function introduce(){
        $data = [
            "Nama" => "Farel saeful falah",
            "Alamat" => "Bandung",
            "Agama" => "Islam",
            "JK" => "1",
            "Hobi" => [
                "Ngegame",
                "Nonton"
            ]
        ];
        return view('Latihan.Perkenalan', compact("data"));
    }
    public function Animals(){
        $animal = [
            "Rizkyyyyyyyyy(Buaya)",
            "Rabbit",
            "Snake",
            "Lion"
        ];
        return view('Latihan.Animals', ['Hewan' => $animal]);
    }
}
