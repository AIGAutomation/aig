<?php
//
namespace App\Modules;
//
use App\Primitives\MongoConnection as Connection;
//
class Medida extends Connection{
    
    public function index(){

        $index = $this->mongo->query('aig.medida',[],['projection' => ['_id' => 1,'medida'=>1],'sort'=>['_id'=>1]]);
        
        return $index;

    }

}

?>