<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Area extends Model
{
    use HasFactory;

    protected $table = "area";

    protected $fillable = [
        'area_name', 'description'
    ];

    // relacion one to many con la tabla course
    public function course() {
        return $this->hasMany(File::class);
    }

}
