<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\File;

class Evaluation extends Model
{
    use HasFactory;

    // relacion one to many inversa (belongsTo) con la tabla Course
    public function course() {
        return $this->belongsTo(Course::class);
    }

    // relacion one to many polimorfica con la tabla file y post
    public function file() {
        return $this->morphMany(File::class, 'fileable');
    }
}
