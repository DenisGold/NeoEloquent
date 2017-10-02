<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Neo4j Database Connection Setup
    |--------------------------------------------------------------------------
    */
    'connection' => [
        'host' => 	  env('NEO4j_DB_HOST', '127.0.0.1'),
        'port' => 	  env('NEO4j_DB_PORT', 7474),
        'username' => env('NEO4j_DB_USERNAME', 'neo4j'),
        'password' => env('NEO4j_DB_PASSWORD', 'neo4j'),
        'ssl' => 	  env('NEO4j_DB_SSL', false)
    ],

];
