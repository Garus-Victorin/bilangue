<?php

namespace App\GraphQL\Types;

use App\Models\Couleur;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class CouleurType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Couleur',
        'description' => 'A couleur',
        'model' => Couleur::class,
    ];

    public function fields(): array
    {
        return [
            'id_couleur' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the couleur',
            ],
            'couleur' => [
                'type' => Type::string(),
                'description' => 'The couleur name',
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
            'typecouleur' => [
                'type' => Type::string(),
                'description' => 'The type of couleur',
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
