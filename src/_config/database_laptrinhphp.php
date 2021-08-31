<?php

return array(
    'driver'    => $_ENV['DB_CONNECTION'] ?? env('DB_CONNECTION', 'mysql'),
    'host'      => $_ENV['DB_HOST'] ?? env('DB_HOST', 'localhost'),
    'port'      => $_ENV['DB_PORT'] ?? env('DB_PORT', '3306'),
    'database'  => $_ENV['DB_DATABASE'] ?? env('DB_DATABASE', ''),
    'username'  => $_ENV['DB_USERNAME'] ?? env('DB_USERNAME', 'root'),
    'password'  => $_ENV['DB_PASSWORD'] ?? env('DB_PASSWORD', ''),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
);
