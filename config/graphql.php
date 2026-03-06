<?php

return [
    'prefix' => 'graphql',
    'routes' => 'graphql',
    'middleware' => [],
    'headers' => [],
    'json_encoding_options' => 0,
    'graphiql' => [
        'prefix' => 'graphiql',
        'controller' => \Rebing\GraphQL\GraphQLController::class.'@graphiql',
        'middleware' => [],
        'view' => 'graphql::graphiql',
        'display' => env('ENABLE_GRAPHIQL', true),
    ],
    'default_schema' => 'default',
    'schemas' => [
        'default' => [
            'query' => [
                'couleurs' => \App\GraphQL\Queries\CouleursQuery::class,
                'couleur' => \App\GraphQL\Queries\CouleurQuery::class,
                'nombres' => \App\GraphQL\Queries\NombresQuery::class,
                'nombre' => \App\GraphQL\Queries\NombreQuery::class,
                'salutations' => \App\GraphQL\Queries\SalutationsQuery::class,
                'partiesDuCorps' => \App\GraphQL\Queries\PartiesDuCorpsQuery::class,
            ],
            'mutation' => [
            ],
            'middleware' => [],
            'method' => ['GET', 'POST'],
        ],
    ],
    'types' => [
        'Couleur' => \App\GraphQL\Types\CouleurType::class,
        'Nombre' => \App\GraphQL\Types\NombreType::class,
        'Salutation' => \App\GraphQL\Types\SalutationType::class,
        'PartieDuCorps' => \App\GraphQL\Types\PartieDuCorpsType::class,
        'PhraseBasique' => \App\GraphQL\Types\PhraseBasiqueType::class,
        'ExpressionBasique' => \App\GraphQL\Types\ExpressionBasiqueType::class,
        'Presentation' => \App\GraphQL\Types\PresentationType::class,
        'DemandeAide' => \App\GraphQL\Types\DemandeAideType::class,
        'ExpressionEcole' => \App\GraphQL\Types\ExpressionEcoleType::class,
        'ExpressionVoyage' => \App\GraphQL\Types\ExpressionVoyageType::class,
        'ExpressionMaison' => \App\GraphQL\Types\ExpressionMaisonType::class,
        'Produit' => \App\GraphQL\Types\ProduitType::class,
        'User' => \App\GraphQL\Types\UserType::class,
    ],
    'error_formatter' => [\Rebing\GraphQL\GraphQL::class, 'formatError'],
    'errors_handler' => [\Rebing\GraphQL\GraphQL::class, 'handleErrors'],
    'security' => [
        'query_max_complexity' => null,
        'query_max_depth' => null,
        'disable_introspection' => false,
    ],
    'pagination_type' => \Rebing\GraphQL\Support\PaginationType::class,
    'simple_pagination_type' => \Rebing\GraphQL\Support\SimplePaginationType::class,
];
