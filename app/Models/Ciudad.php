<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    //RELACION UNO A UNO
    public function hvida(){
        return $this->hasOne('App\Models\Hojadevida');
    }
}
