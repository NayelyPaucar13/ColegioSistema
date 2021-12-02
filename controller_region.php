<?php

include_once("models/region.php");
include_once("conexion.php");

BD::createInstacia();

   class ControllerRegion{

       public function login(){

        $region=Region::consultar();

        include_once("views/regiones/login.php");



       }
 
       public function create(){

         if($_POST){

           print_r($_POST);
           $departamento=$_POST['departamento'];
           $estado=$_POST['estado'];
 
           Region::create($departamento, $estado);
           header("Location:./?controller=region&accion=login");

         }
        include_once("views/regiones/create.php");



       }

      public function edit(){
        include_once("views/regiones/edit.php");

        if($_POST){
          $id=$_POST['id'];
          $departamento=$_POST['departamento'];
          $estado=$_POST['estado'];

          Region::create($id,$departamento, $estado);
         }
         $id=$_GET['id'];

        $region=(Region::buscar($id));

        include_once("views/regiones/edit.php");
        header("Location:./?controller=regiones&accion=login");
       }

       public function borrar (){
        print_r($_GET);

        $id=$_GET['id'];

        Estudiante::borrar($id);
        header("Location:./?controller=region&accion=login");

      }


       

   }
