<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
        'murid' => [
            'driver' => 'session',
            'provider' => 'murids',
        ],
        'guruAuth' => [
            'driver' => 'session',
            'provider' => 'guru',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
        'murids' => [
            'driver' => 'eloquent',
            'model' => App\muridAuthDB::class,
        ],
        'guru' => [
            'driver' => 'eloquent',
            'model' => App\GuruDB::class,
        ],
    ],
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'murids' => [
            'provider' => 'murids',
            'table' => 'password_reset',
            'expire' => 60,
        ],
    ],

];
