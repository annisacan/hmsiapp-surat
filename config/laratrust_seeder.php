<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
    
        'sekretaris' => [
            'suratkeluar' => 'c,r,u,d',
            'suratmasuk' => 'r,d',
            'roles' => 'c,r,u,d',
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
            'request' => 'r,u,d',
            'divisi' => 'c,r,u,d',
        ],
        'anggota' => [
            'profile' => 'r,u',
            'request' => 'c,r,u,d',
            'ajuan' => 'c,r,u,d',
            'suratmasuk' => 'c,r',
        ],

        'bendahara' => [
            'profile' => 'r,u',
            'ajuan' => 'r,u,d',
        ],

        'kahim' => [
            'profile' => 'r,u',
            'suratkeluar' => 'r',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
