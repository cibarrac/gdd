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
        return $cursoDAO->validarFechaLimiteInscripcion($IdCurso);
    }
    
    public static function getEspacioEnElAula($IdCurso){
        $cursoDAO = new CursoDAO();
        return $cursoDAO->validarEspacioEnElAula($IdCurso);
    }
    
    public static function getTotalInscripciones($idCurso){
        $cursoDAO = new CursoDAO();
        return $cursoDAO->validarTotalInscripciones($idCurso);
    }
    
    public static function getCapacidadMaximaCurso($idCurso){
        $cursoDAO = new CursoDAO();
        return $curdoDAO->validarCapacidadMaximaCurso($idCurso);
    }
    
    
}
