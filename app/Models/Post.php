<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

 //Relacion uno a muchos (inversa) o Relacion muchos a uno
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
 //Relacion uno a muchos (inversa) o Relacion muchos a uno
    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

     //Relacion uno a uno polimorfica
     public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }
}
