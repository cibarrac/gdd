<?php
session_start();
include "../../model/common/common.php";
include '../QueryService.php';
include_once '../SQL.php'; 

update();

function update()
{

    $NumeroCurso = $_GET['curso'];
    $firma = "sign";
    //$public = $_GET["ispublic"];

    switch (getRoleOfUserMail($_SESSION['username'])) {
        case 'su': $firma.="1";break;
        case 'admin': $firma.="2";break;

    }

 $SQL_UPDATE1 = "UPDATE curso SET $firma = 2 WHERE NumeroCurso = '$NumeroCurso'";
 $SQL_UPDATE2 = "UPDATE curso SET ispublic = 2 WHERE (sign1 = 2 OR sign2 = 2) AND NumeroCurso = '$NumeroCurso'";
 
 queryUpdate($SQL_UPDATE1);
 queryUpdate($SQL_UPDATE2);
 
}

?>