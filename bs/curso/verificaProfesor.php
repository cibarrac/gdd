<?php

include "../../model/common/common.php";
include '../QueryService.php';
include_once '../SQL.php'; 



  $correo = $_GET['correo'];
  $Estado = $_GET['estado'];


  switch ($Estado)

  {
    case 0:  $SQL = "UPDATE profesor SET Estado = 0 WHERE CorreoProfesor = '".$correo."'"; break;
    case 1:  $SQL = "UPDATE profesor SET Estado = 1 WHERE CorreoProfesor = '".$correo."'"; break;
  }

 queryUpdate($SQL);

  






 ?>