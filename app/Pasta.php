<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasta extends Model
{
    protected $fillable = [
        'src',
        'src-h',
        'src-p',
        'titolo',
        'slug',
        'tipo',
        'cottura',
        'peso',
        'descrizione'
    ];
}
