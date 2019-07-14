<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class ApiController extends Controller{
    
  //mandamos llamar dependencias del container
  public function __construct(Container $container){

    //container yn sus dependencias
    $this->container=$container;
    $this->config=$this->container['config'];
    $this->databases['aig']=$this->container['database-pool'](['aig'=>$this->config->database('aig')]);
    $this->modules['marca']=$this->container['marca']($this->databases['aig']);
    $this->modules['medida']=$this->container['medida']($this->databases['aig']);
    $this->modules['sector']=$this->container['sector']($this->databases['aig']);

  }

  public function marca($request,$response,$args){

    //
    $index=$this->modules['marca']->index();

    //respuesta con cabeceras http
    $response1 = $response->withJson($index,201);
    $response2 = $response1
    ->withHeader('Access-Control-Allow-Origin', '*')
    ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

    return $response2;
        
  }

  public function sector($request,$response,$args){

    //indice de sector
    $index=$this->modules['sector']->index();

    //respuesta con cabeceras http
    $response1 = $response->withJson($index,201);
    $response2 = $response1
    ->withHeader('Access-Control-Allow-Origin', '*')
    ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

    return $response2;
        
  }

  public function medida($request,$response,$args){

    //respuesta de medida
    $index=$this->modules['medida']->index();

    //respuesta con cabeceras http
    $response1 = $response->withJson($index,201);
    $response2 = $response1
    ->withHeader('Access-Control-Allow-Origin', '*')
    ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

    return $response2;
        
  }

}

?>