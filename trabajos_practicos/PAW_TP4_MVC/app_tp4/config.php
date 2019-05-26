<?php

use Monolog\Logger as MonologLogger;

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

return [
    'database' => [
        'name' => getenv('DB_NAME'),
        'username' => getenv('DB_USER'),
        'password' => getenv('DB_PASS'),
        'connection' => getenv('DB_CONNECTION'),
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
    'logger' => [
        'level' => MonologLogger::INFO
    ],
    'twig' => [
        'templates_dir' => __DIR__ . '/app/views',
        'templates_cache_dir' => __DIR__ . '/app/views/cache'
    ]
];
