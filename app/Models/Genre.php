<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    public $fillable = ['nama_genre', "judul"];
    public $visible = ['nama_genre', "judul"];
    public $timestapms = true;

    public function genre()
    {
        return $this->hasMany(Buku::class, 'id_genre');
    }
}
