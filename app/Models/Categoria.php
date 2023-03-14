<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    //RELACION UNO A MUCHOS
public function Oferta(){
    return $this->hasMany('App\Models\Oferta');
}
}
