<?php

include '../../bs/QueryService.php';
include '../../bs/SQL.php';
include 'Curso.php';

class CursoDAO {
    
    public function cargarCursos() {
       
        $result= querySelect(SQL::$CURSOS_OFERTADOS);
        $cursoList = array();
        foreach($result as $row)
        {
            $curso = new Curso();
            $curso->__SET("NumeroCurso", $row['NumeroCurso']); 
            $curso->__SET("NombreCurso", $row['NombreCurso']);
            $curso->__SET("ObjetivoCurso", $row['ObjetivoCurso']);
            $curso->__SET("FechaInicioCurso", $row['FechaInicioCurso']);
            $curso->__SET("FechaFinCurso", $row['FechaFinCurso']);
            $curso->__SET("TipoCurso", $row['TipoCurso']);
            $curso->__SET("PeriodoCurso", $row['PeriodoCurso']);
            $cursoList [] = $curso;
        }
        return $cursoList;
    }
    
    
    
    
    public function cargarAsistencias() {
        $result= querySelect(SQL::$LISTA_ASISTENCIA);
        $cursoList = array();
        foreach($result as $row)
        {
            $curso = new Curso();
            $curso->__SET("NumeroCurso", $row['NumeroCurso']); 
            $curso->__SET("NumeroTarjeta", $row['NumeroTarjetaProfesor']);
            $curso->__SET("Grado", $row['GradoEstudiosProfesor']);
            $curso->__SET("Participante", $row['NombreProfesor']." ".$row['ApellidoPaternoProfesor']." ".$row['ApellidoMaternoProfesor']);
            $curso->__SET("Carrera", $row['NombreCarrera']);
            $curso->__SET("RFC", $row['RFCProfesor']);
            $curso->__SET("Firma", $row[' ']);
            $cursoList [] = $curso;
        }
        return $cursoList;
    }
    
    
    //validar que el profesor no este incrito en otro en el mismo curso 2 veces 
    public function validarProfesorInscrito($IdProfesor, $IdCurso){
        $result = querySelect("SELECT * FROM inscripcion WHERE IdProfesor = '".$IdProfesor."' "
                . "AND NumeroCurso ='".$IdCurso."' ");
        if(count($result)>0) {  return false; }
        else{ return true;}
    }
    
    
    
    //validar la fecha limite de inscripcion de un cruso  
    public function validarFechaLimiteInscripcion ($IdCurso){
        $fechaLimite = querySelect("SELECT FechaLimite FROM curso WHERE NumeroCurso = '".$IdCurso."' ");
        if(count($fechaLimite)>0){return $fechaLimite;}
    }
    
    //valida la fecha actual
    public function validaFechaActual (){
        $fechaActual = querySelect("SELECT curdate()");
        if(count($fechaActual)>0) {return $fechaActual;}
    }
    
    
    
    
    //validar total de inscripciones
    public function validarTotalInscripciones ($idCurso){
        $result = querySelect("SELECT Count(NumeroCurso) AS cantidad FROM inscripcion "
                . "WHERE NumeroCurso= '".$idCurso."' ");
        if(count($result)>0) { return $result; }    
    }
    
    //validar la capacidad maxima del curso 
    public function validarCapacidadMaximaCurso ($idCurso){
        $result = querySelect("SELECT capacidadmaxima FROM curso WHERE "
                . "NumeroCurso= '".$idCurso."' ");
        if(count($result)>0) { return $result; }
    }
    
    
    
     //Validar que el aula propuesta no este ocupada en la misma hora por
    //otro curso
    public function validarAulaDisponible ($idAula, $turno){
        $result = querySelect("SELECT NumeroCurso, NombreCurso, AulaPropuesta, "
                . "Turno FROM curso WHERE AulaPropuesta = '".$idAula."'  AND "
                . "Turno = '".$turno."'");
        if(count($result)>0) {  return false; }
        else {  return true; }
    }
    
    
    
    public function validarTurnoCursoInscrito($idCurso, $idProfesor)
    {
        $result = querySelect("SELECT CURSO.Turno FROM curso CURSO, inscripcion INSCRIPCION "
            . "WHERE INSCRIPCION.IdProfesor = '".$idProfesor."' AND INSCRIPCION.NumeroCurso "
            . "= '".$idProfesor."' AND CURSO.NumeroCurso = '".$idCurso."' ");
        if(count($result)>0) { return $result; }
    }
    
    
    public function validarTurnoCursoPorInscribir($idCurso)
    {
        $result = querySelect("SELECT Turno FROM curso WHERE NumeroCurso = '".$idCurso."'");
        if(count($result)>0) {return $reulst; }
    }
}
