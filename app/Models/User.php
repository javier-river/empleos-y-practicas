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

       //RELACION UNO A UNO
       public function candidato(){
        return $this->hasOne('App\Models\Candidato');
    }
    
    public function ofertante(){
        return $this->hasOne('App\Models\Ofertante');
    }

    //RELACION UNO A MUCHOS
    public function ofertas(){
        return $this->hasMany('App\Models\Oferta');
    }

    //RELACION MUCHOS A MUCHOS 
    public function rols(){
        return $this->belongsToMany('App\Models\Rol');
    }

    //RELACION UNO A UNO POLIMORFICA
    public function image(){
        return $this->belongsTo('App\Models\Image','imageable');
    }
}
