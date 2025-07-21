<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Actualite extends Model
{
    //
    protected $fillable = [
        'titre',
        'image_avant',
        'contenu',
        'date_de_publication',
        'user_id',
    ];

    protected $casts = [
        'date_de_publication' => 'datetime',
        'user_id' => 'integer',

    ];

   public function user():BelongsTo{
        return $this->belongsTo(User::class);

    }
}
