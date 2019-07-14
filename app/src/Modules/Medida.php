<?php
//
namespace App\Modules;
//
use App\Primitives\Connection as Connection;
use App\Interfaces\TableInterface as TableInterface;
//
class Medida extends Connection implements TableInterface{
    
    public function index(){

        return $this->database->select('Medida',['id','variable']);

    }

    public function get($id){

       return $this->database->get('Medida',['id','variable']);

    }

}

?>