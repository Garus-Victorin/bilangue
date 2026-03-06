<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nombre extends Model
{
    use HasFactory;

    /**
     * La clé primaire de la table.
     *
     * @var string
     */
    protected $primaryKey = 'id_nombre';

    /**
     * Les attributs qui peuvent être assignés en masse.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'francais',
        'goun',
        'fon',
        'yoruba',
        'dendi',
        'anglais',
    ];
}
