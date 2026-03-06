<?php

namespace App\GraphQL\Queries;

use App\Models\PartieDuCorps;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;

class PartiesDuCorpsQuery extends Query
{
    protected $attributes = [
        'name' => 'partiesDuCorps',
        'description' => 'A query to get all parties du corps',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('PartieDuCorps'));
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
        $query = PartieDuCorps::query();

        if (isset($args['limit'])) {
            $query->limit($args['limit']);
        }

        if (isset($args['offset'])) {
            $query->offset($args['offset']);
        }

        return $query->get();
    }
}
