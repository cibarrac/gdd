<?php
include "CursoDAO.php";

class CursoService
{

    public static function getCursos()
    {   $cursoDAO = new CursoDAO();
        return $cursoDAO->getCursos();
        
    }
}
