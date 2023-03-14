<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

//RELACIONES UNO A UNO
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //RELACION UNO A UNO
    public function hvida(){
        return $this->hasOne('App\Models\Hojadevida');
    }
}
