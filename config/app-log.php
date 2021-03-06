<?php

return [
    'channels' => [
        'filebeat' => [
            'driver' => 'daily',
            'path' => env('APP_LOG_PATH', '/application/logs/app.log'),
            'tap' => [Lucasrolff\Log\LogFormatter::class],
            'days' => 7,
        ],
    ],

    'except' => [
      'password',
      'password_confirmation',
    ],
];
