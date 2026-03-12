<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salutation extends Model
{
    use HasFactory;

    protected $fillable = [
        'francais',
        'goun',
        'fon',
        'yoruba',
        'dendi',
        'anglais',
        'bariba',
        'emoji',
    ];
}
