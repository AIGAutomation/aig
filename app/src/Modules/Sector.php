<?php
//
namespace App\Modules;
//
use App\Primitives\MongoConnection as Connection;
//
class Sector extends Connection{
    
    public function index(){

        $index = $this->mongo->query('aig.sector',[],['projection' => ['_id' => 1,'sector'=>1],'sort'=>['_id'=>1]]);

        return $index;

    }

}

?>