<?php

class SQL {
    
    public static $CURSOS_OFERTADOS = "SELECT NumeroCurso, NombreCurso, ObjetivoCurso,"
            . " FechaInicioCurso, FechaFinCurso, TipoCurso,"
            . " PeriodoCurso FROM curso" ;
    
    
    public static $LISTA_ASISTENCIA = "SELECT INSCRIPCION.NombreCurso, "
            . "PROFESOR.NombreProfesor, PROFESOR.ApellidoPaternoProfesor, "
            . "PROFESOR.ApellidoMaternoProfesor, PROFESOR.RFCProfesor, "
            . "PROFESOR.NumeroTarjetaProfesor, PROFESOR.GradoEstudiosProfesor, "
            . "INSCRIPCION.NumeroCurso, CARRERA.NombreCarrera from profesor "
            . "PROFESOR, inscripcion INSCRIPCION, carrera CARRERA WHERE "
            . "PROFESOR.IdProfesor = INSCRIPCION.IdProfesor AND "
            . "INSCRIPCION.NumeroCurso = '9.1' AND "
            . "CARRERA.IdCarrera = PROFESOR.IdCarrera"; 

  
    public static $SELECCIONA_TODO = "SELECT * FROM";
    
    
    public static $CURSOS_POR_JEFE = "SELECT * FROM curso INNER JOIN jefedepartamento"
            . " ON NombreCompletoJefeDepto = concat(NombreJefeDepto,' ',ApellidoPaternoJefeDepto,"
            . "' ',ApellidoMaternoJefeDepto) where correojefe = ";
    
    
    public static $CURSOS_APROBADOS = "SELECT * FROM curso WHERE ispublic = 1";
    
    
    public static $SELECCIONA_ROLE = "SELECT role FROM members "
            . "WHERE email=";
    
    
    public static $NOMBRE_PROFESOR = "SELECT NombreProfesor, ApellidoPaternoProfesor, "
            . "ApellidoMaternoProfesor FROM profesor WHERE"
            . " CorreoProfesor =";
    
    
    public static $ID_PROFESOR_POR_CORREO = "SELECT IdProfesor FROM profesor WHERE"
            . " CorreoProfesor = ";
    
    
    public static $NOMBRE_JEFE_POR_CORREO = "SELECT NombreJefeDepto, ApellidoPaternoJefeDepto,"
            . " ApellidoMaternoJefeDepto FROM jefedepartamento WHERE"
            . " CorreoJefe = ";
    
    public static $CORREO_JEFE ="SELECT email FROM jefedepartamento";
    
    
    public static $PROFESORES_POR_DEPARTAMENTO = "SELECT IdProfesor, NombreProfesor,"
        . " ApellidoPaternoProfesor, ApellidoMaternoProfesor FROM profesor INNER JOIN"
        . " jefedepartamento ON IdJefeInmediatoProfesor = IdJefeDepartamento WHERE"
        . " CorreoJefe = ";
    
    public static $PRESIDENTE_ACADEMIA = "SELECT NombrePresidenteAcad, "
        . "ApellidoPaternoPresidenteAcad, ApellidoMaternoPresidenteAcad FROM"
        . " presidenteacademia INNER JOIN jefedepartamento ON"
        . " IdDepartamentoPresidente = IdDepartamentoJefe"
        . " WHERE CorreoJefe = ";
    
    public static $CARRERA_JEFE = "SELECT NombreCarrera FROM carrera INNER JOIN"
            . " jefedepartamento ON IdDepartamentoCarrera = IdDepartamentoJefe"
            . " WHERE CorreoJefe = ";
    
    public static $DEPARTAMENTO_JEFE = "SELECT NombreDepartamento FROM departamento"
            . " INNER JOIN jefedepartamento ON IdDepartamento = IdDepartamentoJefe"
            . " WHERE CorreoJefe = ";
    
    public static $CURSO_PUBLIC = "SELECT * FROM curso WHERE sign1=1 and sign2=1";
    
    
    public static $CURSO_POR_NOMBRE_API = "SELECT NumeroCurso, FechaInicioCurso, FechaFinCurso,"
            . " NombreCompletoInstructor1, NombreCompletoInstructor2,"
            . " TipoCurso, AulaPropuesta FROM curso WHERE "
            . "NombreCurso =";
    
    public static $CURSO_POR_NUMERO_API = "SELECT NombreCurso, NumeroCurso,"
            . " FechaInicioCurso, FechaFinCurso, NombreCompletoInstructor1, "
            . "NombreCompletoInstructor2, TipoCurso, AulaPropuesta FROM curso"
            . " WHERE NumeroCurso =";
    
    public static $DEPARTAMENTO = "SELECT * FROM departamento";
    
    public static $VALIDAR_PROFESOR = "SELECT * FROM inscripcion WHERE IdProfesor =";
    
    public static $VALIDAR_PROFESOR2 = "NumeroCurso = ";
}

