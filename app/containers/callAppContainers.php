<?php

$container = $app->getContainer();

/* Container TWIG */
$container['view'] = function ($container) {
 
    $view = new \Slim\Views\Twig(__DIR__ . '/../../templates', [
        'cache' => false
    ]);
  
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));
  
    return $view;
 };
 
 /* Containers CONTROLLERS */

 $container['HomeController'] = function ($container) {
    return new \App\Controllers\HomeController($container);
} ;

return $container ;