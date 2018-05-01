<?php
class SQL {
    
    public static $CURSOS_ACTIVOS = "SELECT NumeroCurso, NombreCurso, ObjetivoCurso,"
                . " FechaInicioCurso, FechaFinCurso, TipoCurso,"
                . " PeriodoCurso from curso";
    
}