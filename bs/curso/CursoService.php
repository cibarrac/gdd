<?php
include "CursoDAO.php";

class CursoService
{
    public static function getCursos()
    {   $cursoDAO = new CursoDAO();
        return $cursoDAO->cargarCursos();   
    }
    
    public static function getAsistencias($id) {
        $cursoDAO = new CursoDAO();
        return $cursoDAO->cargarAsistencias($id);
    }
    
    public static function getProfesorInscrito($IdProfesor, $IdCurso){
        $cursoDAO = new CursoDAO();
        return $cursoDAO->validarProfesorInscrito($IdProfesor, $IdCurso);
        //return false;
    }
    
    public static function getFechaLimiteInscripcion($IdCurso){
        $cursoDAO = new CursoDAO();
        $fechaLimite = $cursoDAO->validarFechaLimiteInscripcion($IdCurso);
        $fechaActual = $cursoDAO->validaFechaActual();
        
        if($fechaActual > $fechaLimite )
        {
            return false;
        }
        else{ return true; }
    }
    
    
   public static function getLimiteCurso($IdCurso){
       $cursoDAO = new CursoDAO();
       $totalInscripciones = $cursoDAO->validarTotalInscripciones($IdCurso);
       $capacidadMaxima = $cursoDAO->validarCapacidadMaximaCurso($IdCurso);
       
       if ($totalInscripciones <= $capacidadMaxima)
       {
           return true;
       }
       else { return false;}
   }
   
   
   
    public static function  getAulaDisponible($idAula, $turno){
        $cursoDAO = new CursoDAO();
        return $cursoDAO->validarAulaDisponible($idAula, $turno);
    }
    
    
    
    public static function getTurnoCurso($IdCurso, $IdProfesor)
    {
        $cursoDAO = new CursoDAO();
        $turnoCursoInscrito = $cursoDAO->validarTurnoCursoInscrito($IdProfesor);
        $turnoInscripcion = $cursoDAO->validarTurnoCursoPorInscribir($IdCurso);
        
        if($turnoCursoInscrito == $turnoInscripcion)
        {
            return false;
        }
        else{ return true; }
    }
    
    
    public static function getNombreInstructor($NombreInstructor)
    {
       $cursoDAO = new CursoDAO();
       return $porfesor = $cursoDAO->validaInstructorCurso($NombreInstructor);
    }
    
    
    public static function getCursoAprobado($IdCurso)
    {
        $cursoDAO = new CursoDAO();
        return $cursoDAO->validaCursoAprobado($IdCurso);
    }
    
}