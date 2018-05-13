<?php

require 'bs/QueryService.php';

function fillOptionsInscription($nombre)
{
    $lista = sql_query(SQL::$CURSO_POR_NOMBRE_API." ".$nombre);
    
    if (count($lista) > 0) {
        return $lista[0];
    } else {
        return ['numcurso' => $nombre, 'message' => 'No se obtuvieron datos'];
    }
}
function fillOptionsInscriptionByNum($numero)
{
    $lista = querySelect(SQL::$CURSO_POR_NUMERO_API." ".$numero);
    if (count($lista)>0) {
        return $lista[0];
    } else {
        return ['numcurso' =>  $numero, 'message' => 'No se obtuvieron datos'];
    }
}



if ($_GET['oper']) {
    if ($_GET['oper']=='getcurso') {
        if (!isset($_GET['nomcurso']) && !isset($_GET['numcurso'])) {
            echo json_encode(['status'=> 500 , 'message'=>'Error al realizar petici&oacute;n, falta parametros']);
        } elseif (isset($_GET['numcurso'])) {
            $numcurso = $_GET['numcurso'];
            echo json_encode([ 'status'=> 200, 'data' => fillOptionsInscriptionByNum($numcurso)]);
        } else {
            $numcurso = $_GET['nomcurso'];
            echo json_encode([ 'status'=> 200, 'data' => fillOptionsInscription($numcurso)]);
        }
    }
} else {
    echo json_encode(['status' => 200, 'message' => 'Bienvenido a la aplicaci&oacute;n de GDD.']);
}
 /*
if ($_GET['oper'])
  {
    $numcurso = $_GET['nomcarrera'];
    echo json_encode([ 'status'=> 200, 'data' => ObtieneCarrera($numcurso)]);

  }
*/
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


?>
