<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailFilem extends Model
{
    use HasFactory;

    public function film(){
        return $this->belongsTo(film::class);
    }
}
