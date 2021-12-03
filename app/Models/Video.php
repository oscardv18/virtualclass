<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Video extends Model
{
    use HasFactory;

    // relacion one to many inversa (belongsTo) con la tabla Post
    public function post() {
        return $this->belongsTo(Post::class);
    }
}
