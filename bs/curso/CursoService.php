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
}
