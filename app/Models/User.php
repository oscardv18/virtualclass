<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Informations;
use App\Models\Rol;
use App\Models\Post;
use App\Models\Image;
use App\Models\Notification;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    ###### RELATIONSHIPS USER ###########

    // relación one to one con la tabla informations
    public function informations() {
        return $this->hasOne(Informations::class);
    }

    // relacion one to many con la tabla rol (1 usuario puede tener más de 1 rol)
    public function rol() {
        return $this->belongsTo(Rol::class);
    }

    // relacion one to many con la tabla o modelo Post
    public function post() {
        return $this->hasMany(Post::class);
    }

    // relacion one to one polimorfica con la tabla image
    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }

    // relacion many to many polimorfica con las tablas courses, notifications y notificable
    public function courses() {
        return $this->morphToMany(Notification::class, 'notificable');
    }
}
