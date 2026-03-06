<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modèle pour les expressions à la maison
 */
class ExpressionMaison extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'expressions_maison';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_expression_maison';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'francais',
        'goun',
        'fon',
        'yoruba',
        'dendi',
        'anglais',
    ];
}
