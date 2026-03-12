<?php

namespace App\GraphQL\Types;

use App\Models\PartieDuCorps;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PartieDuCorpsType extends GraphQLType
{
    protected $attributes = [
        'name' => 'PartieDuCorps',
        'description' => 'A partie du corps',
        'model' => PartieDuCorps::class,
    ];

    public function fields(): array
    {
        return [
            'id_partie_du_corps' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the partie du corps',
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
            'image' => [
                'type' => Type::string(),
                'description' => 'The image path',
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
