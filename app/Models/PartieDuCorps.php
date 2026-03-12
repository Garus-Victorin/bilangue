<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartieDuCorps extends Model
{
    protected $table = 'partie_du_corps';

    protected $fillable = [
        'nom',
        'image',
        'francais',
        'goun',
        'fon',
        'yoruba',
        'dendi',
        'anglais',
        'emoji',
    ];
}
