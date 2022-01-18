<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Permission;

class Rol extends Model
{
    use HasFactory;
    protected $table = "rols";

    // relación one to many con users table
    public function user() {
        return $this->hasMany(User::class);
    }

    // relacion many to many con la tabla permission
    public function permissions() {
        return $this->belongsToMany(Permission::class);
    }
}
