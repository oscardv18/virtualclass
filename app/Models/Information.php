<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Address;

class Informations extends Model
{
    use HasFactory;

    protected $table = "informations";

    // relación one to one con la tabla user
    public function user() {
        return $this->belongsTo(User::class);
    }

    // relación one to one con la tabla address
    public function address() {
        return $this->belongsTo(Address::class);
    }
}
