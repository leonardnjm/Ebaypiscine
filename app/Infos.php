<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infos extends Model
{
    protected $table ='infos';
     
     protected $fillable = ['description', 'adresse', 'ville', 'codePostal', 'pays'];
}
