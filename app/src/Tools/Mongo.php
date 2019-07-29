<?php
/** 
*
*/
namespace App\Tools;
/**
*
*/
use MongoDB\Driver\Manager;
use MongoDB\Driver\Query;

/**SINGLETON CLASS (CHECK DATABASE POOL FOR MULTITON DATABASES)
 * 
 */
class Mongo{

    private $mongo;

    //singleton instance property
    protected static $instance;

    /* SINGLETON CONTRUCTOR
    * options: ['databaseName'=>[medoo options]]
    */
    public static function instanciate($options){

        if (!self::$instance instanceof self){

            self::$instance = new self($options);
   
        }

       return self::$instance;

    }

    public function __construct($options){

        $this->mongo=new Manager($options);

    }

    public function query($namespace,$filter,$options){

        $query = new Query($filter, $options);
        $rows = $this->mongo->executeQuery($namespace, $query);

        //
        $table=[];

        foreach ($rows as $row) {

            $line=[];

            foreach ($row as $key => $value) {
                
                $line[$key]=$value;
                
            }

            $table[]=$line;

        }

        return $table;
        
    }
    
}


?>