<?php

namespace App\Primitives;

class MongoConnection{

    protected $mongo;

    public function __construct($mongo){

        $this->mongo=$mongo;

    }
    
}

?>