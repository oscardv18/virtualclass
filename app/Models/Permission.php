<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rol;

class Permission extends Model
{
    use HasFactory;

    // relacion many to many con la tabla rols
    public function rols() {
        return $this->belongsToMany(Rol::class);
    }

}
