<?php

namespace App\GraphQL\Queries;

use App\Models\Nombre;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;

class NombresQuery extends Query
{
    protected $attributes = [
        'name' => 'nombres',
        'description' => 'A query to get all nombres',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Nombre'));
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
        $query = Nombre::query();

        if (isset($args['limit'])) {
            $query->limit($args['limit']);
        }

        if (isset($args['offset'])) {
            $query->offset($args['offset']);
        }

        return $query->get();
    }
}
