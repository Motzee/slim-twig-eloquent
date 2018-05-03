<?php

$app->get('/home', 'HomeController:index') ;

$app->get('/create', 'HomeController:create') ;

$app->get('/read', 'HomeController:getall') ;

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