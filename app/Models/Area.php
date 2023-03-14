<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    //RELACIONES UNO A UNO
    public function oferta(){
        return $this->belongsTo('App\Models\Oferta');
    }
}
