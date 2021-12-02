<?php

class BD{

    private static $instancia=NULL;

    public static function createInstacia(){
        if(!isset( self::$instancia)){
            
            $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;

            self::$instancia=new PDO('mysql:host=localhost;dbname=colegio', 'root','', $opcionesPDO);
           

        }
        return self::$instancia;
    }
}


?>