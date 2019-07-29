<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class ApiController extends Controller{
    
  //mandamos llamar dependencias del container
  public function __construct(Container $container){

    //container y sus dependencias
    $this->container=$container;
    $this->config=$this->container['config'];
    $this->mongo=$this->container['mongo-db']('mongodb://localhost:27017');
    $this->modules['marca']=$this->container['marca']($this->mongo);
    $this->modules['medida']=$this->container['medida']($this->mongo);
    $this->modules['sector']=$this->container['sector']($this->mongo);
    $this->modules['producto']=$this->container['producto']($this->mongo);


  }

  public function marca($request,$response,$args){

    $index = $this->modules['marca']->index();

    //respuesta con cabeceras http
    $response1 = $response->withJson($index,201);
    $response2 = $response1
    ->withHeader('Access-Control-Allow-Origin', '*')
    ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

    return $response2;

  }

  public function medida($request,$response,$args){

    $index = $this->modules['medida']->index();

    //respuesta con cabeceras http
    $response1 = $response->withJson($index,201);
    $response2 = $response1
    ->withHeader('Access-Control-Allow-Origin', '*')
    ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

    return $response2;

  }

  public function sector($request,$response,$args){

    $index = $this->modules['sector']->index();

    //respuesta con cabeceras http
    $response1 = $response->withJson($index,201);
    $response2 = $response1
    ->withHeader('Access-Control-Allow-Origin', '*')
    ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

    return $response2;

  }

  public function producto($request,$response,$args){

    $marca=$args['marca'];
    $medida=$args['medida'];
    $sector=$args['sector'];

    $search = $this->modules['producto']->search($marca,$medida,$sector);

    //respuesta con cabeceras http
    $response1 = $response->withJson($search,201);
    $response2 = $response1
    ->withHeader('Access-Control-Allow-Origin', '*')
    ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');

    return $response2;

  }

}

?>