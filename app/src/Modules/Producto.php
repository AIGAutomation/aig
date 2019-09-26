<?php
//
namespace App\Modules;
//
use App\Primitives\MongoConnection as Connection;
//
class Producto extends Connection{
    
    public function search($marca,$medida,$sector){

        $search=null;

        $marcas=explode("-",$marca);
        $medidas=explode("-",$medida);
        $sectores=explode("-",$sector);

        //0
        if($marcas===["*"]&&$medidas===["*"]&&$sectores===["*"]){

            $search = $this->mongo->query(
                'aig.producto',
                [],
                ['sort'=>['_id'=>1]]
            );

        }
        //1
        else if($marcas===["*"]&&$medidas===["*"]&&$sectores!==["*"]){

            $search = $this->mongo->query(
                'aig.producto',
                ['sector'=>['$in'=>$sectores]],
                ['sort'=>['_id'=>1]]
            );

        }
        //2
        else if($marcas===["*"]&&$medidas!==["*"]&&$sectores===["*"]){

            $search = $this->mongo->query(
                'aig.producto',
                ['medida'=>['$in'=>$medidas]],
                ['sort'=>['_id'=>1]]
            );

        }
        //3
        else if($marcas===["*"]&&$medidas!==["*"]&&$sectores!==["*"]){

            $search = $this->mongo->query(
                'aig.producto',
                ['medida'=>['$in'=>$medidas],'sector'=>['$in'=>$sectores]],
                ['sort'=>['_id'=>1]]
            );

        }
        //4
        else if($marcas!==["*"]&&$medidas===["*"]&&$sectores===["*"]){

            $search = $this->mongo->query(
                'aig.producto',
                ['marca'=>['$in'=>$marcas]],
                ['sort'=>['_id'=>1]]
            );

        }
        //5
        else if($marcas!==["*"]&&$medidas===["*"]&&$sectores!==["*"]){

            $search = $this->mongo->query(
                'aig.producto',
                ['marca'=>['$in'=>$marcas],'sector'=>['$in'=>$sectores]],
                ['sort'=>['_id'=>1]]
            );

        }
        //6
        else if($marcas!==["*"]&&$medidas!==["*"]&&$sectores===["*"]){

            $search = $this->mongo->query(
                'aig.producto',
                ['marca'=>['$in'=>$marcas],'medida'=>['$in'=>$medidas]],
                ['sort'=>['_id'=>1]]
            );

        }
        //7
        else if($marcas!==["*"]&&$medidas!==["*"]&&$sectores!==["*"]){

            $search = $this->mongo->query(
                'aig.producto',
                ['marca'=>['$in'=>$marcas],'medida'=>['$in'=>$medidas],'sector'=>['$in'=>$sectores]],
                ['sort'=>['_id'=>1]]
            );

        }

        return $search;

    }

}

?>