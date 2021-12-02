<?php

class Estudiante{

    public $id;
    public $nombres;
    public $apellidos;
    public $correo;
    public $region;
    public $distrito;

    public function __construct( $id, $nombres, $apellidos, $correo, $region, $distrito){
        $this->id=$id;
        $this->nombres=$nombres;
        $this->apellidos=$apellidos;
        $this->correo=$correo;
        $this->region=$region;
        $this->distrito=$distrito;
        
    }

    public static function consultar(){
        $listaEstudiantes=[];
        $conexionBD=BD::createInstacia();
        $sql= $conexionBD->query("SELECT * FROM estudiante");

        foreach($sql->fetchAll() as $estudiante){

            $listaEstudiantes[]= new estudiante($estudiante['ID'],$estudiante['NOMBRES'],$estudiante['APELLIDOS'],$estudiante['CORREO'],$estudiante['REGION'],$estudiante['DISTRITO']);
        }

        return $listaEstudiantes;

    }

    public static function create($nombres, $apellidos, $correo, $region, $distrito){

        $conexionBD=BD::createInstacia();

        $sql= $conexionBD->prepare("INSERT INTO estudiante (NOMBRES, APELLIDOS, CORREO, REGION, DISTRITO) Values(?,?,?,?,?) ");
        $sql->execute(array($nombres, $apellidos, $correo, $region, $distrito));
    }
    public static function borrar($id){
        $conexionBD=BD::createInstacia();
        $sql=$conexionBD->prepare(" DELETE FROM estudiante WHERE ID=?");
        $sql->execute(array($id));
    }
    
    public static function buscar($id){

        $conexionBD=BD::createInstacia();

        $sql= $conexionBD->prepare(" SELECT * FROM estudiante WHERE ID=?");
        $sql->execute(array($id));
        $estudiante=$sql->fetch();
        return new Estudiante($estudiante['id'],$estudiante['nombres'],$estudiante['apellidos'],$estudiante['correo'],$estudiante['region'],$estudiante['distrito']);
    }

    public static function edit($id,$nombres,$apellidos,$correo,$region,$distrito){

        $conexionBD=BD::createInstacia();
        $sql= $conexionBD->prepare("UPDATE estudiante SET NOMBRES=?, APELLIDOS=?, CORREO=?, REGION=?, DISTRITO=? WHERE ID=? ");
        $sql->execute(array($nombres, $apellidos, $correo, $region, $distrito,$id));
    }
}

?>