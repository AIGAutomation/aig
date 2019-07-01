<?php

//
namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

abstract class Controller{

    //container main dependency
    protected $container;
    //app config and order by json
    protected $config;
    //mysql databases
    protected $databases=[];
    //node js socket.io by elephant.io
    protected $views;

    public abstract function __construct(Container $container);

}

?>