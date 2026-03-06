<?php

namespace App\GraphQL\Types;

use App\Models\Presentation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PresentationType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Presentation',
        'description' => 'A presentation',
        'model' => Presentation::class,
    ];

    public function fields(): array
    {
        return [
            'id_presentation' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the presentation',
            ],
            'presentation' => [
                'type' => Type::string(),
                'description' => 'The presentation text',
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
