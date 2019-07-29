<?php
//
namespace App\Modules;
//
use App\Primitives\MongoConnection as Connection;
//
class Marca extends Connection{
    
    public function index(){

        $index = $this->mongo->query('aig.marca',[],['projection' => ['_id' => 1,'marca'=>1],'sort'=>['_id'=>1]]);
        
        return $index;

    }

}

?>