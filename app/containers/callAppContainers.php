<?php

$container = $app->getContainer();

/* Container TWIG */
$container['view'] = require __DIR__ . '/twigContainer.php';
 
 /* Containers CONTROLLERS */
require __DIR__ . '/controllersContainer.php';

/* Container ELOQUENT (illuminate ORM from Laravel) */
require __DIR__ . '/eloquentContainer.php' ;

return $container ;