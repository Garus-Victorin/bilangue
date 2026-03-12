<?php

namespace App\GraphQL\Types;

use App\Models\ExpressionMaison;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ExpressionMaisonType extends GraphQLType
{
    protected $attributes = [
        'name' => 'ExpressionMaison',
        'description' => 'An expression maison',
        'model' => ExpressionMaison::class,
    ];

    public function fields(): array
    {
        return [
            'id_expression_maison' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the expression maison',
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
