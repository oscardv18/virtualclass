<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Video;

class Post extends Model
{
    use HasFactory;

    public function post() { // with user table
        return $this->belongsTo(User::class);
    }

    public function video() { // with ROL table
        return $this->hasMany(Video::class);
    }
}
