<?php

$container = $app->getContainer();

/* Container TWIG */
$container['view'] = require __DIR__ . '/twigContainer.php';
 
 /* Containers CONTROLLERS */

require __DIR__ . '/controllersContainer.php';

return $container ;