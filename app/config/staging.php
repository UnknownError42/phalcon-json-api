<?php
// Override production configs for staging environment
// app/config/staging.php
$staging = [
    'application' => [
        'debugApp' => true
    ],    
    'dbname' => APPLICATION_PATH . 'database/sample-database.sqlite',
    'namespaces' => [
        'models' => "PhalconRest\\Models\\",
        'controllers' => "PhalconRest\\Controllers\\",
        'libraries' => "PhalconRest\\Libraries\\",
        'entities' => "PhalconRest\\Entities\\"
    ],
    'fileStorage' => [
        'basePath' => '/tmp/'
    ] // uses as a system wide prefix to all file storage paths
];

return $staging;