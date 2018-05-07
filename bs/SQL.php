<?php
class SQL {
    
    public static $CURSOS_OFERTADOS = "SELECT NumeroCurso, NombreCurso, ObjetivoCurso,"
            . " FechaInicioCurso, FechaFinCurso, TipoCurso,"
            . " PeriodoCurso from curso";
    
    
    public static $LISTA_ASISTENCIA = "SELECT INSCRIPCION.NombreCurso, "
            . "PROFESOR.NombreProfesor, PROFESOR.ApellidoPaternoProfesor, "
            . "PROFESOR.ApellidoMaternoProfesor, PROFESOR.RFCProfesor, "
            . "PROFESOR.NumeroTarjetaProfesor, PROFESOR.GradoEstudiosProfesor, "
            . "INSCRIPCION.NumeroCurso, CARRERA.NombreCarrera from profesor "
            . "PROFESOR, inscripcion INSCRIPCION, carrera CARRERA WHERE "
            . "PROFESOR.IdProfesor = INSCRIPCION.IdProfesor AND "
            . "INSCRIPCION.NumeroCurso = '9.1' AND "
            . "CARRERA.IdCarrera = PROFESOR.IdCarrera"; 

     
    
}