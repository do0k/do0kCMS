<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'editor' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'author' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'contributor' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'supporter' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'subscriber' => [
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
