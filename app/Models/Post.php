<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Video;
use App\Models\Course;
use App\Models\Image;
use App\Models\File;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'content', 'user_id'
    ];

    // relacion one to many inversa (belongsTo) con la tabla user
    public function users() {
        return $this->belongsTo(User::class);
    }

    // relacion one to many con la tabla video
    public function video() {
        return $this->hasMany(Video::class);
    }

    // relacion many to many con la tabla course
    public function courses() {
        return $this->belongsToMany(Course::class);
    }

    // relacion one to one polymorgica con Image
    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }

    // relacion one to many polimorfica con las tablas Evaluations y Files
    public function file() {
        return $this->morphMany(File::class, 'fileable');
    }
}
