<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class PostType extends Model
{
    use HasFactory;

    protected $table = "post_type";

    // relacion one to many con la tabla o modelo Post
    public function post() {
        return $this->hasMany(Post::class);
    }
}
