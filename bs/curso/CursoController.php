<?php  
include "../../model/common/common.php";
include '../QueryService.php';
include_once '../SQL.php'; 

session_start();

function sign_curso()
{
    $NumeroCurso = $_GET['curso'];
    $firma = "sign";
    //$public = $_GET["ispublic"];

    switch (getRoleOfUserMail($_SESSION['username'])) {
        case 'su': $firma.="1";break;
        case 'admin': $firma.="2";break;

    }

 $SQL_UPDATE1 = "UPDATE curso SET $firma = 1 WHERE NumeroCurso = '$NumeroCurso'";
 $SQL_UPDATE2 = "UPDATE curso SET ispublic = 1 WHERE sign1 = 1 AND sign2 = 1 AND NumeroCurso = '$NumeroCurso'";
 
 queryUpdate($SQL_UPDATE1);
 queryUpdate($SQL_UPDATE2);
}
function exit_curso()
{

    $NumeroCurso = $_GET['idcurso'];
    $correo = $_SESSION['username'];
  
    $SQL = "DELETE inscripcion FROM inscripcion INNER JOIN profesor ON inscripcion.IdProfesor = profesor.IdProfesor WHERE profesor.CorreoProfesor = '$correo' AND inscripcion.NumeroCurso = '$NumeroCurso' ";
  
    queryDelete($SQL);
}
function cancel_curso()
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

function revision()
{
    $NumeroCurso = $_GET['curso'];
    $firma = "sign";
    //$public = $_GET["ispublic"];

    switch (getRoleOfUserMail($_SESSION['username'])) {
        case 'su': $firma.="1";break;
        case 'admin': $firma.="2";break;

    }

 $SQL_UPDATE1 = "UPDATE curso SET $firma = 0 WHERE NumeroCurso = '$NumeroCurso'";
 $SQL_UPDATE2 = "UPDATE curso SET ispublic = 0 WHERE (sign1 = 0 OR sign2 = 0) AND NumeroCurso = '$NumeroCurso'";

 queryUpdate($SQL_UPDATE1);
 queryUpdate($SQL_UPDATE2);
    
}

function CursoController($action)
{

    switch ($action) 
    {
        case 'exit' : exit_curso();     break;
        case 'cancel': cancel_curso();  break;
        case 'revision': revision(); break;
        case 'sign' : sign_curso(); break;
        
        default:
           
            break;
    }
        
}

if (isset($_GET['action'])) {
       CursoController($_GET['action']);   
    }

?>