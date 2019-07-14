<?php
//
namespace App\Modules;
//
use App\Primitives\Connection as Connection;
use App\Interfaces\TableInterface as TableInterface;
//
class Sector extends Connection implements TableInterface{
    
    public function index(){

        return $this->database->select('Sector',['id','sector']);

    }

    public function get($id){

       return $this->database->get('Sector',['id','sector']);

    }

}

?>