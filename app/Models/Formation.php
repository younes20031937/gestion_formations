<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = ["image" , "filiere" ,"prix" , "title" , "description" , "image_formateur" , "nom_formateur" , "followers" , "favoris"];
}
