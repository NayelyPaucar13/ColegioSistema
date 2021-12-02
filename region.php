<?php

class Region{

    public $id;
    public $departamento;
    public $estado;

    public function __construct($id,$departamento,$estado){
        $this->id=$id;
        $this->departamento=$departamento;
        $this->estado=$estado;

        
    }

    public static function consultar(){
        $listaRegiones=[];
        $conexionBD=BD::createInstacia();
        $sql= $conexionBD->query("SELECT * FROM region");

        foreach($sql->fetchAll() as $region){

            $listaRegiones[]= new region($region['ID'],$region['Departamento'],$region['Estado']);
        }

        return $listaRegiones;

    }

    public static function create($departamento, $estado){

        $conexionBD=BD::createInstacia();

        $sql= $conexionBD->prepare("INSERT INTO region(Departamento,Estado) Values(?,?) ");
        $sql->execute(array($departamento,$estado));
    }

    public static function borrar($id){
        $conexionBD=BD::createInstacia();
        $sql=$conexionBD->prepare(" DELETE FROM region WHERE ID=?");
        $sql->execute(array($id));
    }
    public static function buscar($id){

        $conexionBD=BD::createInstacia();
        $sql= $conexionBD->prepare(" SELECT * FROM region WHERE ID=?");
        $sql->execute(array($id));
        $region=$sql->fetch();
        return new region($region['ID'],$region['Departamento'],$region['Estado']);
    }

    public static function edit($id,$departamento,$estado){

        $conexionBD=BD::createInstacia();
        $sql= $conexionBD->prepare(" UPDATE region SET Departamento=?, Estado=? WHERE ID=? ");
        $sql->execute(array($departamento,$estado,$id));
    }

}

?>