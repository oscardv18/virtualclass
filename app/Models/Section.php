<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Section extends Model
{
    use HasFactory;

    // relacion many to many con la tabla courses
    public function courses() {
        return $this->belongsToMany(Course::class);
    }
}
