<?php

namespace App\GraphQL\Queries;

use App\Models\Couleur;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CouleursQuery extends Query
{
    protected $attributes = [
        'name' => 'couleurs',
        'description' => 'A query to get all couleurs',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Couleur'));
    }

    public function args(): array
    {
        return [
            'limit' => [
                'name' => 'limit',
                'type' => Type::int(),
                'description' => 'Limit the number of results',
            ],
            'offset' => [
                'name' => 'offset',
                'type' => Type::int(),
                'description' => 'Offset the results',
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $query = Couleur::query();

        if (isset($args['limit'])) {
            $query->limit($args['limit']);
        }

        if (isset($args['offset'])) {
            $query->offset($args['offset']);
        }

        return $query->get();
    }
}
