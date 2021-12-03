<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    ## relacion many to many con las tablas users, notification, notificable, courses

    public function users() {
        return $this->morphedByMany(User::class, 'notificable');
    }

    public function courses() {
        return $this->morphedByMany(Course::class, 'notificable');
    }
}
