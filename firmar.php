<?php
session_start();
include "conn.php";
include "select.php";

update();

function update()
{
    $NumeroCurso = $_GET['curso'];
    $firma = "sign";
    $public = $_GET["ispublic"];

    switch (ismenu()) {
        case 'su': $firma.="1";break;
        case 'admin': $firma.="2";break;

        default:break;
    }

 $SQL_UPDATE1 = "UPDATE Curso SET $firma = 1 WHERE NumeroCurso = '$NumeroCurso'";
 $SQL_UPDATE2 = "UPDATE Curso SET ispublic = 1 WHERE sign1 = 1 AND sign2 = 1 AND NumeroCurso = '$NumeroCurso'";
 
 mysql_query($SQL_UPDATE1);
 mysql_query($SQL_UPDATE2);

}




?>
