<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpressionBasique extends Model
{
    protected $table = 'expressions_basiques';

    protected $primaryKey = 'id_expression_basique';

    protected $fillable = [
        'nom',
        'image',
        'francais',
        'goun',
        'fon',
        'yoruba',
        'dendi',
        'anglais',
    ];
}
