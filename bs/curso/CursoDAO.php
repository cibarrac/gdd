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
        $result = querySelect(SQL::$VALIDA_FECHA_LIMITE."'".$IdCurso."'");
        if(isset($result)) {  return true; }
        else{ return false;}
    }
    
    //Validar que el aula propuesta no este ocupada en la misma hora por
    //otro curso
    public function validarEspacioEnElAula ($IdCurso){
        $result = querySelect(SQL::$VALIDAR_AULA_OCUPADA);
        if(isset($result)) {  return true; }
        else{ return false;}
    }
    
    //validar total de inscripciones
    public function validarTotalInscripciones ($idCurso){
        $result = querySelect(SQL::$TOTAL_INSCRPCIONES."'".$idCurso."'");
        if(isset($result)) { return $result; }    
    }
    
    
    //validar la capacidad maxima del curso 
    public function validarCapacidadMaximaCurso ($idCurso){
        $result = querySelect(SQL::$CAPACIDAD_MAXIMA_CURSO."'".$idCurso."'");
        if(isset($result)) { return $result; }
    }
    
}