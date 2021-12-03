<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    // relacion one to many polimorfica con la tablas Post y Evaluations
    public function fileable() {
        return $this->morphTo();
    }
}
