<?php

namespace App\Models;

use App\Models\File;
use App\Models\Team;
use App\Models\User;
use App\Models\Course;
use App\Models\PostType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    // relacion one to many con la tabla file
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

    public function teams() {
        return $this->belongsTo(Team::class);
    }
}
