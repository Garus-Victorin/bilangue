<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produits';

    protected $primaryKey = 'id_produit';

    protected $fillable = [
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
