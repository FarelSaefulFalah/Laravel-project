<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;
    protected $fillable= ['nama_penulis',"bio"];
    protected $visible = ['nama_penulis',"bio"];

    public function buku(){
        return $this->hasMany(Buku::class,'id_penullis');
    }
}
