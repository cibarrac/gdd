<?php

include '../../bs/QueryService.php';
include '../../bs/SQL.php';
include 'Curso.php';

class CursoDAO {
    
    public function cargarCursos() {
       
        $result= querySelect(SQL::$CURSOS_ACTIVOS);
        $cursoList = array();
        foreach($result as $row)
        {
            $curso = new Curso();
            $curso->__SET("NumeroCurso", $row['NumeroCurso']); 
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
        return array();
    }
}