<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    //
    protected $fillable=[
        'definition',
        'adresse',
        'email',
        'numero',
    ];
}
