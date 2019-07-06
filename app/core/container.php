<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App(['settings' => [
    'displayErrorDetails' => true,
    'responseChunkSize' => 8096]
    ]
);
//
$container=$app->getContainer();
//
$container['config']=function($container){

    return new App\Config\Config('../app/src/Config/Config.json');

};

//
$container['views']=function($container){

    return new Slim\Views\PhpRenderer('../app/src/Views');

};
//
$container['database-pool']=function($container){

    return function($config){

        return App\Tools\DatabasePool::instanciate($config);

    };

};


?>