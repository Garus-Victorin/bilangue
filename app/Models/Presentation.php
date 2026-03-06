<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_presentation';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'presentation',
        'francais',
        'goun',
        'fon',
        'yoruba',
        'dendi',
        'anglais',
    ];

    /**
     * Get the presentation's logical key.
     *
     * @return string
     */
    public function getLogicalKeyAttribute()
    {
        return $this->presentation;
    }
}
