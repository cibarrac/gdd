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
}