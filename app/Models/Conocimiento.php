<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conocimiento extends Model
{
    use HasFactory;

     //RELACION UNO A MUCHOS
     public function Hojadevida(){
        return $this->belongsTo('App\Models\Hojadevida');
    }
}
