<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evaluation;
use App\Models\Post;
use App\Models\Notification;
use App\Models\Area;

class Course extends Model
{
    use HasFactory;

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

    // relacion one to many inversa (belongsTo) con la tabla area
    public function area() {
        return $this->belongsTo(Area::class);
    }
}
