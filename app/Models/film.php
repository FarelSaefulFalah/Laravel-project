<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;

    public function DetailFilem()
    {
        return $this->hasOne(DetailFilem::class);
    }
    public function Media()
    {
        return $this->HasMany(Media::class);
    }
}
