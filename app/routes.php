<?php

 $app->get('/home', 'HomeController:index') ;

/*
$app->get('/first', function($request, $response) {
    return 'My first route' ;
 }) ;
*/

 /* Vieille méthode :
 $app->get('/home', function ($request, $response) {
   return $this->view->render($response, 'home.twig');
}) ;
*/