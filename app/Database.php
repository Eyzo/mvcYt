<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'website',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
]);

$capsule->bootEloquent();
$capsule->setAsGlobal();