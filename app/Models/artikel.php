<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;

     //Kolom (field) mana saja yang boleh di isi
    public $fillable = ['judul', 'foto', 'kategori', 'konten', 'penulis'];
    //kolom (field) mana sja yang boleh di perlihatkan
    public $visible = ['judul', 'foto', 'kategori', 'konten', 'penulis'];
}
