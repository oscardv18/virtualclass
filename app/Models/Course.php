<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evaluation;
use App\Models\Post;
use App\Models\Notification;

class Course extends Model
{
    use HasFactory;

    public function evaluations() {
        return $this->hasMany(Evaluation::class);
    }

    // relacion many to many con la tabla post
    public function posts() {
        return $this->belongsToMany(Post::class);
    }

        // relacion many to many con la tabla sections
    public function sections() {
        return $this->belongsToMany(Section::class);
    }

    // relacion many to many polimorfica con las tablas notifications, user, notificable
    public function courses() {
        return $this->morphToMany(Notification::class, 'notificable');
    }
}
