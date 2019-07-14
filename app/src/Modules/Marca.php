<?php
//
namespace App\Modules;
//
use App\Primitives\Connection as Connection;
use App\Interfaces\TableInterface as TableInterface;
//
class Marca extends Connection implements TableInterface{
    
    public function index(){

        return $this->database->select('Marca',['id','nombre']);

    }

    public function get($id){

       return $this->database->get('Marca',['id','nombre']);

    }

}

?>