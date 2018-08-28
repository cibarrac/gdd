<?php
session_start();
include "model/common/common.php";
include 'bs/QueryService.php';
include_once 'bs/SQL.php'; 
//
update();

function update()
{
    $NumeroCurso = $_GET['curso'];
    $firma = "sign";
    //$public = $_GET["ispublic"];

    switch (ismenu($_SESSION['username'])) {
        case 'su': $firma.="1";break;
        case 'admin': $firma.="2";break;

    }

 $SQL_UPDATE1 = "UPDATE curso SET $firma = 1 WHERE NumeroCurso = '$NumeroCurso'";
 $SQL_UPDATE2 = "UPDATE curso SET ispublic = 1 WHERE sign1 = 1 AND sign2 = 1 AND NumeroCurso = '$NumeroCurso'";
 
 queryUpdate($SQL_UPDATE1);
 queryUpdate($SQL_UPDATE2);
 
}

?>
