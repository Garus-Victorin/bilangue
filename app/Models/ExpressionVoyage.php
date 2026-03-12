<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpressionVoyage extends Model
{
    protected $table = 'expressions_voyage';

    protected $primaryKey = 'id_expression_voyage';

    protected $fillable = [
        'francais',
        'goun',
        'fon',
        'yoruba',
        'dendi',
        'anglais',
        'emoji',
    ];
}
