<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandeAide extends Model
{
    protected $table = 'demandes_aide';

    protected $primaryKey = 'id_demande_aide';

    protected $fillable = [
        'demande_aide',
        'francais',
        'goun',
        'fon',
        'yoruba',
        'dendi',
        'anglais',
    ];
}
