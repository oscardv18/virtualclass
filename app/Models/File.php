<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'url_file', 'post_id',
    ];

    // relacion one to many inversa (belongsTo) con la tabla post
    public function posts() {
        return $this->belongsTo(Post::class);
    }
}
