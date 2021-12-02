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

    public function post() { // with post table
        return $this->belongsTo(User::class); // todo: refactorizar este metodo
    }

    public function video() { // with video table
        return $this->hasMany(Video::class);
    }

    public function courses() { // with courses table
        return $this->belongsToMany(Course::class);
    }

    // relacion one to one con image
    public function image() { // with image table
        return $this->morphOne(Image::class, 'imageable');
    }

    // relacion one to many polimorfica
    public function file() {
        return $this->morphMany(File::class, 'fileable');
    }
}
