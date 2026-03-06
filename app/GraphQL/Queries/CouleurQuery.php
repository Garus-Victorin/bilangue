<?php

namespace App\GraphQL\Queries;

use App\Models\Couleur;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CouleurQuery extends Query
{
    protected $attributes = [
        'name' => 'couleur',
        'description' => 'A query to get a single couleur',
    ];

    public function type(): Type
    {
        return GraphQL::type('Couleur');
    }

    public function args(): array
    {
        return [
            'id_couleur' => [
                'name' => 'id_couleur',
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the couleur',
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return Couleur::find($args['id_couleur']);
    }
}
