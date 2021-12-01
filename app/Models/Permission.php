<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rol;

class Permission extends Model
{
    use HasFactory;

    public function rol() {
        return $this->belongsToMany(Rol::class);
    }

}
