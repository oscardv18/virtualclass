<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Video extends Model
{
    use HasFactory;

    public function post() { // with user table
        return $this->belongsTo(Post::class);
    }
}
