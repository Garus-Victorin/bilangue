<?php

namespace App\GraphQL\Queries;

use App\Models\Nombre;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;

class NombreQuery extends Query
{
    protected $attributes = [
        'name' => 'nombre',
        'description' => 'A query to get a single nombre',
    ];

    public function type(): Type
    {
        return GraphQL::type('Nombre');
    }

    public function args(): array
    {
        return [
            'id_nombre' => [
                'name' => 'id_nombre',
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the nombre',
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return Nombre::find($args['id_nombre']);
    }
}
