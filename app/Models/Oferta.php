<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

//RELACION UNO A UNO
public function area(){
    return $this->hasOne('App\Models\Area');
}

//RELACION UNO A MUCHOS INVERSA
public function user(){
    return $this->belongsTo('App\Models\User');
}

public function categoria(){
    return $this->belongsTo('App\Models\Categoria');
}

//RELACION UNO A UNO POLIMORFICA
    public function image(){
    return $this->belongsTo('App\Models\Image','imageable');
    }


}
