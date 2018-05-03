<?php

$capsule = new \Illuminate\Database\Capsule\Manager ;

$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal() ; //un coup cette ligne fait buguer, un coup ça résout tout...
$capsule->bootEloquent() ;

$container['db'] = function($container) use ($capsule) {
    return $capsule ;
} ;