<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class AigController extends Controller{
    
    //mandamos llamar dependencias del container
    public function __construct(Container $container){

        //container yn sus dependencias
        $this->container=$container;
        $this->config=$this->container['config'];
        $this->views=$this->container['views'];

    }

    public function index($request,$response,$args){

        return $this->views->render($response, 'index.html', []);
        
    }

    public function catalogo($request,$response,$args){

        return $this->views->render($response, 'catalogo.html', []);
        
    }

    public function test($request,$response,$args){

        phpinfo();
        
    }

}

?>