<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
//    Con fillable debemos colocar los campos permitidos e ignorar los campos protegidos
//    protected $fillable = ['name', 'descripcion','categoria'];

 //Con guarded debemos colocar los campos protegidos e ignorar los campos permitidos
    protected $guarded = [];
}
