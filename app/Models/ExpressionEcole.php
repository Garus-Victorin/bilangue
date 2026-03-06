<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpressionEcole extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'expressions_ecole';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_expression_ecole';

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
