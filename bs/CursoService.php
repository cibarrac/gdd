<?php
include "CursoDAO.php";

class CursoService
{

    public static function getCursos()
    {
        $cursoDao = new CursoDAO();
        try {
            return $cursoDao::getCursos();
        } 
        catch (Exception $e) {
            echo $e->getMessage();
            return array();
        }
    }
}
