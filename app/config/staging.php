<?php
// Override base configs for staging environment
// app/config/staging.php
$staging = [
    'application' => [
        'loggingDir' => '/tmp/',
        'baseUri' => '/',
        'basePath' => '/',
        'publicUrl' => 'http://base-api.dev:8080',
        'debugApp' => false,
        'corsOrigin' => 'http://base-api.dev:8080'
    ],
    // user local database for easy example
    'dbname' => APPLICATION_PATH . 'database/sample-database.sqlite',
    //
    'fileStorage' => [
        'basePath' => '/tmp/'
    ]
];

return $staging;