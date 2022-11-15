<?php

return [

    'roles_structure' => [
        'super_admin' => [
            'products' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'users' => 'c,r,u,d',
            'clients' => 'c,r,u,d',
            'orders' => 'c,r,u,d',

        ],
        'admin' => []
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];