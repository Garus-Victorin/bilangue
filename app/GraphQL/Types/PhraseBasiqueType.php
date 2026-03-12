<?php

namespace App\GraphQL\Types;

use App\Models\PhraseBasique;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PhraseBasiqueType extends GraphQLType
{
    protected $attributes = [
        'name' => 'PhraseBasique',
        'description' => 'A phrase basique',
        'model' => PhraseBasique::class,
    ];

    public function fields(): array
    {
        return [
            'id_phrase_basique' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the phrase basique',
            ],
            'phrase' => [
                'type' => Type::string(),
                'description' => 'The phrase',
            ],
            'francais' => [
                'type' => Type::string(),
                'description' => 'The french translation',
            ],
            'goun' => [
                'type' => Type::string(),
                'description' => 'The goun translation',
            ],
            'fon' => [
                'type' => Type::string(),
                'description' => 'The fon translation',
            ],
            'yoruba' => [
                'type' => Type::string(),
                'description' => 'The yoruba translation',
            ],
            'dendi' => [
                'type' => Type::string(),
                'description' => 'The dendi translation',
            ],
            'anglais' => [
                'type' => Type::string(),
                'description' => 'The english translation',
            ],
            'emoji' => [
                'type' => Type::string(),
                'description' => 'The emoji representation',
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'The creation date',
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'The update date',
            ],
        ];
    }
}
