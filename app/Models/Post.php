<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Video;
use App\Models\Course;

class Post extends Model
{
    use HasFactory;

    public function post() { // with user table
        return $this->belongsTo(User::class);
    }

    public function video() { // with video table
        return $this->hasMany(Video::class);
    }

    public function courses() { // with courses table
        return $this->belongsToMany(Course::class);
    }
}
