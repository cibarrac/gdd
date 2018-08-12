<?php

include '../../bs/QueryService.php';
include '../../bs/SQL.php';
include 'Curso.php';
include 'CursoInfo.php';

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
    
    
    
    
    public function cargarAsistencias($id) {
        $result= querySelect(SQL::$LISTA_ASISTENCIA." ".$id);
        $cursoList = array();
        
        foreach($result as $row)
        {
            $curso = new Curso(); 
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
    
    
    public function cargarInfoCurso($id) {
        $result = querySelect(SQL::$INFO_CURSO." ".$id);
        $infoCurso = array();
        foreach($result as $row)
        {
            $info = new CursoInfo();
            $info->__SET("NumeroyNombreCurso", $row['NumeroCurso']." ".$row['NombreCurso']);
            $info->__SET("Lugar", $row['AulaPropuesta']);
            $info->__SET("Horario", $row['HoraInicioCurso']." ".$row['HoraFinCurso']);
            $info->__SET("Periodo", $row['PeriodoCurso']);
            $info->__SET("Instructor", $row['NombreCompletoInstructor']);
            $infoCurso [] = $info;
        }
        return $infoCurso;
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
    public function validarTotalInscripciones ($IdCurso){
        $result = querySelect("SELECT Count(NumeroCurso) AS cantidad FROM inscripcion "
                . "WHERE NumeroCurso= '".$IdCurso."' ");
        if(count($result)>0) { return $result; }    
    }
    
    //validar la capacidad maxima del curso 
    public function validarCapacidadMaximaCurso ($IdCurso){
        $result = querySelect("SELECT capacidadmaxima FROM curso WHERE "
                . "NumeroCurso= '".$IdCurso."' ");
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
    
    
    
    public function validarTurnoCursoInscrito($IdProfesor)
    {
        $result = querySelect("SELECT Turno FROM curso INNER JOIN inscripcion "
                . "on curso.NumeroCurso = inscripcion.NumeroCurso WHERE "
                . "inscripcion.IdProfesor = '".$IdProfesor."' ");
        if(count($result)>0) { return $result; }
    }
    
    
    public function validarTurnoCursoPorInscribir($IdCurso)
    {
        $result = querySelect("SELECT Turno FROM curso WHERE NumeroCurso = '".$IdCurso."'");
        if(count($result)>0) {return $result; }
    }
    
    public function validaInstructorCurso($NombreInstructor)
    {
        $result = querySelect("SELECT NombreCompletoInstructor FROM curso WHERE "
                . "NombreCompletoInstructor = '".$NombreInstructor."' ");
        if(count($result)>0) { return false; }
        else { return true; }
    }
    
    
    public function validaCursoAprobado($IdCurso)
    {
        $result = querySelect("SELECT NumeroCurso, NombreCurso FROM curso"
                . " WHERE ispublic = 1 AND NumeroCurso = '".$IdCurso."'  ");
        if(count($result)>0) { return true; }
        else { return false; }
    }
    
    public function validarProfesorRegistrado ($email)
    {
        $result = querySelect("SELECT CorreoProfesor FROM profesor WHERE "
                . "CorreoProfesor = '".$email."' ");
        if(count($result)>0) { return false; }
        else { return true; }
    }
    
}
