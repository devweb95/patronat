<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    //
    protected $fillable=[
        'titre',
        'image_avant',
        'contenu',
        'galerie',
        'user_id',
        'date_de_publication',
    ];

    protected $casts=[
        'date_de_publication'=>'datetime',
        'galerie'=> 'array',
        'user_id'=>'integer',
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
