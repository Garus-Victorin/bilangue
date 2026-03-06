<?php

namespace App\GraphQL\Types;

use App\Models\ExpressionVoyage;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ExpressionVoyageType extends GraphQLType
{
    protected $attributes = [
        'name' => 'ExpressionVoyage',
        'description' => 'An expression voyage',
        'model' => ExpressionVoyage::class,
    ];

    public function fields(): array
    {
        return [
            'id_expression_voyage' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the expression voyage',
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
