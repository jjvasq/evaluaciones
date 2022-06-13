<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

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

    public function sector(){
        return $this->belongsTo('App\Models\Sector');
    }

    public function puesto(){
        return $this->belongsTo('App\Models\Puesto');
    }

    //Relación muchos a muchos.
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    public function evaluacion_evaluador(){
        return $this->hasOne('App\Models\Evaluacione', 'user_id_evaluador', 'id');//Con el has es de una forma y con el belongs es al reves.
    }

    public function evaluacion_evaluado(){
        return $this->hasOne('App\Models\Evaluacione', 'user_id_evaluado', 'id');
    }
}
