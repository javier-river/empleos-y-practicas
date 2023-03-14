<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ofertante extends Model
{
    use HasFactory;

    //RELACIONES UNO A UNO
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
