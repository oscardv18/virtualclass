<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $guarded = [];

    use HasFactory;

    // relacion polimorfica one to one con las tablas User, Post e Images
    public function imageable() {
        return $this->morphTo();
    }
}
