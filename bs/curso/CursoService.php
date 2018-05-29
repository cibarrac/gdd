<?php
include "CursoDAO.php";

class CursoService
{
    public static function getCursos()
    {   $cursoDAO = new CursoDAO();
        return $cursoDAO->cargarCursos();   
    }
    
    public static function getAsistencias() {
        $cursoDAO = new CursoDAO();
        return $cursoDAO->cargarAsistencias();
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
        
        if($fechaLimite == $fechaActual)
        {
            return false;
        }
        else{ return true; }
    }
    
    
    
   public static function getLimiteCurso($idCurso){
       $cursoDAO = new CursoDAO();
       $totalInscripciones = $cursoDAO->validarTotalInscripciones($idCurso);
       $capacidadMaxima = $cursoDAO->validarCapacidadMaximaCurso($idCurso);
       
       if ($totalInscripciones <= $capacidadMaxima)
       {
           return true;
       }
       else { return false;}
   }
   
   
   
    public static function getAulaDisponible($idAula, $turno){
        $cursoDAO = new CursoDAO();
        return $cursoDAO->validarAulaDisponible($idAula, $turno);
    }
    
    
}
