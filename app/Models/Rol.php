<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    //RELACION MUCHOS A MUCHOS
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    public function permisos(){
        return $this->belongsToMany('App\Models\Permiso');
    }
}
