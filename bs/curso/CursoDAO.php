<?php

include '../../bs/QueryService.php';
include 'Curso.php';

class CursoDAO {
    
    public function getCursos() {
        $sql="SELECT NumeroCurso, NombreCurso, ObjetivoCurso, FechaInicioCurso, FechaFinCurso, TipoCurso, PeriodoCurso from curso";
        
        $result= querySelect($sql);
        $cursoList;
        foreach($result as $row)
        {
            $curso = new Curso();
            $curso->__SET("NumeroCurso", $row['NumeroCurso']); 
            $curso->__SET("ObjetivoCurso", $row['ObjetivoCurso']);
            $curso->__GET("ObjetivoCurso");
            $curso->__SET("FechaInicioCurso", $row['FechaInicioCurso']);
            $curso->__SET("FechaFinCurso", $row['FechaFinCurso']);
            $curso->__SET("TipoCurso", $row['TipoCurso']);
            $curso->__SET("PeriodoCurso", $row['PeriodoCurso']);
            $cursoList [] = $curso;
        }
        return $cursoList;
    }
}