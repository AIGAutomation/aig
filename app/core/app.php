<?php
/************************/
/*****PSR-7-INTERFACE****/
/************************/
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/************************/
/*****SLIM-INSTANCE******/
/************************/
$app = new \Slim\App([

    'settings' => [
        'displayErrorDetails' => true,
        'responseChunkSize' => 8096
    ]

]);

/*********************/
/******CONTAINER******/
/*********************/
require_once '../app/core/container.php';
/******************/
/****ROUTER********/
/******************/
//
$app->get('/', \App\Controllers\AigController::class.':index');
$app->get('/catalogo', \App\Controllers\AigController::class.':catalogo');
$app->get('/api/marca', \App\Controllers\ApiController::class.':marca');
$app->get('/api/sector', \App\Controllers\ApiController::class.':sector');
$app->get('/api/medida', \App\Controllers\ApiController::class.':medida');
$app->get('/api/producto/{marca}/{medida}/{sector}', \App\Controllers\ApiController::class.':producto');
$app->get('/test', \App\Controllers\AigController::class.':test');

//
/******************/
/****EJECUTAMOS****/
/******************/
$app->run();

?>