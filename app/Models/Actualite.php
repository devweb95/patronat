<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    //
    protected $fillable = [
        'titre',
        'image_avant',
        'contenu',
        'date_de_publication',
    ];

     protected $casts = [
        'date_de_publication' => 'date',
    ];

}
