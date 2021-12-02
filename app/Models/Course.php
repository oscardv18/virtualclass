<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evaluation;
use App\Models\Post;

class Course extends Model
{
    use HasFactory;

    public function evaluations() { // with evaluations table
        return $this->hasMany(Evaluation::class);
    }

    public function posts() { // with posts table
        return $this->belongsToMany(Post::class);
    }
}
