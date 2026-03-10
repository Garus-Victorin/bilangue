<?php

namespace App\GraphQL\Types;

use App\Models\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'description' => 'A user',
        'model' => User::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the user',
            ],
            'nom' => [
                'type' => Type::string(),
                'description' => 'The last name of the user',
            ],
            'prenom' => [
                'type' => Type::string(),
                'description' => 'The first name of the user',
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'The email of the user',
            ],
            'email_verified_at' => [
                'type' => Type::string(),
                'description' => 'The email verification date',
            ],
            'status' => [
                'type' => Type::string(),
                'description' => 'The status of the user (online/offline)',
            ],
            'type' => [
                'type' => Type::string(),
                'description' => 'The type of the user (admin/user)',
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
