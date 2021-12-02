<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\File;

class Evaluation extends Model
{
    use HasFactory;

    public function evaluations() { // with evaluations table
        return $this->belongsTo(Course::class);
    }

    // relacion one to many polimorfica
    public function file() {
        return $this->morphMany(File::class, 'fileable');
    }
}
