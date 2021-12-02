<?php
 


  include_once("controllers/controller_".$controller.".php");

  $objController="Controller".ucfirst($controller);

  $controller = new $objController();

  $controller->$accion();


?>