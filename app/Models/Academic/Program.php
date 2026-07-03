<?php

namespace App\Models\Academic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
     use HasFactory;

     protected $fillable = [
         'code',
         'libelle',
         'description',
         'type_diplome',
         'nombre_semestres'
     ];
}
