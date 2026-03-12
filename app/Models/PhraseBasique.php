<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhraseBasique extends Model
{
    protected $table = 'phrases_basiques';

    protected $primaryKey = 'id_phrase_basique';

    protected $fillable = [
        'phrase',
        'francais',
        'goun',
        'fon',
        'yoruba',
        'dendi',
        'anglais',
        'emoji',
    ];
}
