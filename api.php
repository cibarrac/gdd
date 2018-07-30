<?php

require 'bs/QueryService.php';
 
function fillOptionsInscription($nombre)
{
    $lista = querySelect("SELECT NumeroCurso, FechaInicioCurso, FechaFinCurso, "
            . "NombreCompletoInstructor, TipoCurso, AulaPropuesta FROM curso"
            . " WHERE  NombreCurso = '".$nombre."'");
    
    if (count($lista) > 0) {
        return $lista[0];
    } else {
        
        return ['numcurso' => $nombre, 'message' => 'No se obtuvieron datos 1'];
    }
}


function fillOptionsInscriptionByNum($numero)
{
    $lista = querySelect("SELECT NombreCurso, NumeroCurso,"
            . " FechaInicioCurso, FechaFinCurso, NombreCompletoInstructor, "
            . " TipoCurso, AulaPropuesta FROM curso"
            . " WHERE NumeroCurso = '".$numero."' ");
    if (count($lista)>0) {
        return $lista[0];
    } else {
        return ['numcurso' =>  $numero, 'message' => 'No se obtuvieron datos 2'];
    }
}

function NombresJefePresi($idDepartamento)
{
    $lista = querySelect("SELECT concat(JEFE.NombreJefeDepto,' ',JEFE.ApellidoPaternoJefeDepto,' '"
            . ",JEFE.ApellidoMaternoJefeDepto) AS NombreJefe, concat(PRESI.NombrePresidenteAcad,' '"
            . ",PRESI.ApellidoPaternoPresidenteAcad,' ',PRESI.ApellidoMaternoPresidenteAcad)"
            . " AS NombrePresidente FROM  jefedepartamento JEFE, presidenteacademia PRESI "
            . "WHERE JEFE.IdDepartamentoJefe ='".$idDepartamento."' AND "
            . "PRESI.IdDepartamentoPresidente = '".$idDepartamento."' ");
        if (count($lista)>0) {
            return $lista[0]; 
        } else {
            return ['idDepartamento' => $idDepartamento, 'message' => 'No se obtuvieron datos 3'];
        }
}


function DatosLaborales ($idDepartamento)
{
    $lista = querySelect("SELECT CARRERA.IdCarrera, CARRERA.NombreCarrera, "
        . "JEFE.IdJefeDepartamento, concat(JEFE.NombreJefeDepto,' ',JEFE.ApellidoPaternoJefeDepto,"
        . "' ',JEFE.ApellidoMaternoJefeDepto) AS NombreJefe from carrera CARRERA, "
        . "jefedepartamento JEFE WHERE CARRERA.IdDepartamentoCarrera = '".$idDepartamento."' "
        . " AND JEFE.IdDepartamentoJefe = '".$idDepartamento."'   ");
    if(count($lista)>0) {
        return $lista[0];       
    } else {
        return ['idDepartamento' => $idDepartamento, 'message' => 'No datos 4'];
    }
}



function getProfeCarrera($IdCarrera)
{
    $col = 0;
    $lista = querySelect("SELECT CONCAT(NombreProfesor,' ',ApellidoPaternoProfesor,' '"
            . ",ApellidoMaternoProfesor) AS NombreProfe FROM profesor "
            . "WHERE IdCarrera = '".$IdCarrera."'  ");
    foreach ($lista as $fila) { ?>
         <option value ="<?php echo $fila[$col]; ?>">
            <?php echo $fila[$col]; ?>
        </option> <?php 
    }
}


function getIdProfesor ($NombreProfe)
{
    $lista = querySelect("SELECT IdProfesor, IdCarrera FROM profesor WHERE "
            . "CONCAT(NombreProfesor,' ', ApellidoPaternoProfesor,' ', "
            . "ApellidoMaternoProfesor ) = '".$NombreProfe."' ");
    
    if(count($lista)>0) {
        return $lista[0];       
    } else {
        return ['idDepartamento' => $NombreProfe, 'message' => 'No datos 6'];
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
    elseif ($_GET['oper']=='getnombres'){
        $idDepartamento = $_GET['idDepartamento'];
        echo json_encode([ 'status' => 200, 'data' => NombresJefePresi($idDepartamento)]);
    }
    
    elseif ($_GET ['oper']=='getDatosLaborales'){
        $idDepartamento = $_GET['idDepartamento'];
        echo json_encode(['status' => 200, 'data' => DatosLaborales($idDepartamento)]);
    }
    
    elseif ($_GET ['oper']=='getIdProfesor'){
        $nombreProfe = $_GET['nombreProfe'];
        echo json_encode(['status' => 200, 'data' => getIdProfesor($nombreProfe)]);
    }
    
    elseif ($_GET ['oper']=='getProfeCarrera'){
        $IdCarrera = $_GET['IdCarrera'];
        echo json_encode(['status' => 200, 'data' => getProfeCarrera($IdCarrera)]);
    }
    
    
    
} else {
    echo json_encode(['status' => 200, 'message' => 'Bienvenido a la aplicaci&oacute;n de GDD.']);
}

?>
