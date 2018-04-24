<?php

require 'conn.php';

function fillOptionsInscription($nombre) {
    $lista = mysql_query("select NumeroCurso, FechaInicioCurso, FechaFinCurso, NombreCompletoInstructor1, NombreCompletoInstructor2, TipoCurso, AulaPropuesta from Curso where NombreCurso ='$nombre'");
    if(mysql_num_rows($lista)>0)
        return mysql_fetch_assoc($lista);
    else
        return ['numcurso' =>  $nombre, 'message' => 'No se obtuvieron datos'];
}


function fillOptionsInscriptionByNum($numero)
{

    $lista = mysql_query("select NombreCurso, NumeroCurso, FechaInicioCurso, FechaFinCurso, NombreCompletoInstructor1, NombreCompletoInstructor2, TipoCurso, AulaPropuesta from Curso where NumeroCurso ='$numero'");

    if (mysql_num_rows($lista)>0) {
        return mysql_fetch_assoc($lista);
    } else {
        return ['numcurso' =>  $numero, 'message' => 'No se obtuvieron datos'];
    }
}

/*
function ObtieneCarrera($CorreoJefe)
{

    $lista = mysql_query("select NombreCarrera from Carrera inner join JefeDepartamento on IdDepartamentoCarrera = IdDepartamentoJefe where CorreoJefe = '$CorreoJefe'");

    if (mysql_num_rows($lista)>0) {
        return mysql_fetch_assoc($lista);
    } else {
        return ['nomcarrera' =>  $CorreoJefe, 'message' => 'No se obtuvieron datos'];
    }
}
*/




if ($_GET['oper'])
{
    if ($_GET['oper']=='getcurso'){
      if (!isset($_GET['nomcurso']) && !isset($_GET['numcurso'])) {
          echo json_encode(['status'=> 500 , 'message'=>'Error al realizar petición, falta parametros']);
      } elseif (isset($_GET['numcurso'])) {
          $numcurso = $_GET['numcurso'];
          echo json_encode([ 'status'=> 200, 'data' => fillOptionsInscriptionByNum($numcurso)]);
      } else {
          $numcurso = $_GET['nomcurso'];
          echo json_encode([ 'status'=> 200, 'data' => fillOptionsInscription($numcurso)]);
      }

    }
}
 /*
if ($_GET['oper'])
  {
    $numcurso = $_GET['nomcarrera'];
    echo json_encode([ 'status'=> 200, 'data' => ObtieneCarrera($numcurso)]);

  }
*/

?>
