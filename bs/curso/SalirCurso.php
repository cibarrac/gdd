<?php

session_start();
include "model/common/common.php";
include 'bs/QueryService.php';
include_once 'bs/SQL.php';

borrar();

function borrar()
{

  $NumeroCurso = $_GET['idcurso'];
  $correo = $_SESSION['username'];

  $SQL = "DELETE inscripcion FROM inscripcion INNER JOIN profesor ON inscripcion.IdProfesor = profesor.IdProfesor WHERE profesor.CorreoProfesor = '$correo' AND inscripcion.NumeroCurso = '$NumeroCurso' ";

  queryDelete($SQL);

}
 ?>
