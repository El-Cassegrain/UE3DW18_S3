<?php

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => 'localhost',  
    'port'     => '3306',
    'dbname'   => 'docker',
    'user'     => 'watson',
    'password' => 'uUMygssup6pvtdjD'
);

// enable the debug mode
$app['debug'] = true;

// define log parameters
$app['monolog.level'] = 'INFO';
