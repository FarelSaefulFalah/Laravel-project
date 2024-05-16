<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    public $fillable = ['judul','isbn','deskripsi','jml_halaman','cover','tgl_terbit','id_penulis'];
    public $visiable = ['judul','isbn','deskripsi','jml_halaman','cover','tgl_terbit','id_penulis'];

    //relasi
    public function Genre(){
        //model genre memiliki banyyak data dari model buku
        // melalui table 'pivot' genre_buku yang diawakili
        //ole id_genre & id_buku
        return $this->belongsToMany(Genre::class, 'genre_buku','id_genre','id_buku');
    }
    public function Penulis(){
        return $this->belongsTo(Penulis::class,'id_penulis');
    }
    public function deleteImage(){
        if ($this->cover && file_exists(public_path('images/buku/'. $this->cover))){
            return unlink(public_path('images/buku/' . $this->cover));
        }
    }

}
