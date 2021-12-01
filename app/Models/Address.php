<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Informations;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';

    public function informations() {
        return $this->hasOne(Informations::class);
    }
}
