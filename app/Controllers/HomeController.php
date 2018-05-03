<?php

namespace App\Controllers ;
 
use Slim\Views\Twig as View ;

use App\Models\Recetsscateg ;
 
class HomeController extends BaseController {
 
    public function index($request, $response) {
        
        return $this->container->view->render($response, 'home.twig');
        
    }

    public function create($request, $response) {

        $create = Recetsscateg::create([
            'titre' => 'test 2 depuis controller',
            'affiche' => 1
        ]) ;

        var_dump($create);
    }

    public function getall($request, $response) {

        $sousCategs = $this->container->db->table('recetsscategs')->get();

        foreach ($sousCategs as $aSsCateg){
           echo $aSsCateg->titre . "</br>";
       
        }
    }
 
}