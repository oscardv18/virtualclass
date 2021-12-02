<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Evaluation extends Model
{
    use HasFactory;

    public function evaluations() { // with Courses table
        return $this->belongsTo(Course::class);
    }
}
