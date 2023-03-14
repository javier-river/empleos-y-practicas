<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hojadevida extends Model
{
    use HasFactory;

    //RELACIONES UNO A UNO
    public function candidato(){
        return $this->belongsTo('App\Models\Candidato');
    }

    //RELACION UNO A MUCHOS
    public function experiencias(){
        return $this->hasMany('App\Models\Experiencia');
    }

    //RELACION UNO A MUCHOS
    public function conocimientos(){
        return $this->hasMany('App\Models\Conocimiento');
    }
}

