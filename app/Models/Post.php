<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;
use App\Models\File;
use App\Models\PostType;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'content', 'user_id', 'post_type_id',
    ];

    // relacion one to many inversa (belongsTo) con la tabla user
    public function users() {
        return $this->belongsTo(User::class);
    }

    // relacion one to many con la tabla video
    public function file() {
        return $this->hasMany(File::class);
    }

    // relacion one to many inversa (belongsTo) con la tabla post_type
    public function post_type() {
        return $this->belongsTo(PostType::class);
    }

    // relacion many to many con la tabla course
    public function courses() {
        return $this->belongsToMany(Course::class);
    }
}
