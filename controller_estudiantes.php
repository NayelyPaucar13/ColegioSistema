<?php

include_once("models/estudiante.php");
include_once("conexion.php");

BD::createInstacia();

class ControllerEstudiantes
{

  public function login()
  {


    $estudiante = (Estudiante::consultar());

    include_once("views/estudiantes/login.php");
  }

  public function create()
  {

    if ($_POST) {

      print_r($_POST);
      $nombres = $_POST['nombres'];
      $apellidos = $_POST['apellidos'];
      $correo = $_POST['correo'];
      $region = $_POST['region'];
      $distrito = $_POST['distrito'];
      Estudiante::create($nombres, $apellidos, $correo, $region, $distrito);
      header("Location:./?controller=estudiantes&accion=login");
    }
    include_once("views/estudiantes/create.php");
  }

  public function edit()
  {

    if ($_POST) {
      $id = $_POST['id'];
      $nombres = $_POST['nombres'];
      $apellidos = $_POST['apellidos'];
      $correo = $_POST['correo'];
      $region = $_POST['region'];
      $distrito = $_POST['distrito'];

      Estudiante::edit($id, $nombres, $apellidos, $correo, $region, $distrito);
      header("Location:./?controller=estudiantes&accion=edit");
    }
    $id = $_GET['id'];

    $estudiante = (Estudiante::buscar($id));

    include_once("views/estudiantes/edit.php");
    
  }
  public function borrar()
  {
    print_r($_GET);

    $id = $_GET['id'];

    Estudiante::borrar($id);
    header("Location:./?controller=estudiantes&accion=login");
  }
}
