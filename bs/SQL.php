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
            . "CARRERA.IdCarrera = PROFESOR.IdCarrera AND "
            . "INSCRIPCION.NumeroCurso = "; 
    
    public static $INFO_CURSO = "SELECT NumeroCurso, NombreCurso, AulaPropuesta,"
            . " HoraInicioCurso, HoraFinCurso, PeriodoCurso, NombreCompletoInstructor"
            . " FROM curso WHERE NumeroCurso = ";

  
    public static $SELECCIONA_TODO = "SELECT * FROM";
    
    
    public static $CURSOS_APROBADOS = "SELECT * FROM curso WHERE ispublic = 1";
    
    
    public static $SELECCIONA_ROLE = "SELECT role FROM members "
            . "WHERE email= ";
    
    
    public static $NOMBRE_PROFESOR = "SELECT NombreProfesor, ApellidoPaternoProfesor, "
            . "ApellidoMaternoProfesor FROM profesor WHERE"
            . " CorreoProfesor =";
    
    
    public static $ID_PROFESOR_POR_CORREO = "SELECT IdProfesor FROM profesor WHERE"
            . " CorreoProfesor =";
    
    
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
    
    public static $ID_DEPARTAMENTO_JEFE = "SELECT IdDepartamento FROM departamento"
            . " INNER JOIN jefedepartamento ON IdDepartamento = IdDepartamentoJefe"
            . " WHERE CorreoJefe = ";
    
    public static $CURSO_PUBLIC = "SELECT * FROM curso WHERE sign1=1 and sign2=1";
    
    
    public static $CURSO_POR_NOMBRE_API = "SELECT NumeroCurso, FechaInicioCurso, FechaFinCurso, "
            . "NombreCompletoInstructor, TipoCurso, AulaPropuesta FROM curso"
            . " WHERE  NombreCurso =";
    
    public static $CURSO_POR_NUMERO_API = "SELECT NombreCurso, NumeroCurso,"
            . " FechaInicioCurso, FechaFinCurso, NombreCompletoInstructor, "
            . " TipoCurso, AulaPropuesta FROM curso"
            . " WHERE NumeroCurso =";
    
    public static $DEPARTAMENTO = "SELECT * FROM departamento";
    
    public static $VALIDAR_PROFESOR = "SELECT * FROM inscripcion WHERE IdProfesor =";
    
    public static $VALIDAR_PROFESOR2 = "NumeroCurso = ";
    
    public static $TOTAL_INSCRPCIONES=  "select Count(NumeroCurso) as cantidad from inscripcion where NumeroCurso=";
    
    public static $CAPACIDAD_MAXIMA_CURSO = "select capacidadmaxima from curso where NumeroCurso= ";
    
    public static $AULA_OCUPADA = "SELECT NumeroCurso, NombreCurso, AulaPropuesta, Turno FROM curso WHERE AulaPropuesta = ";
    
    public static $NOMBRE_COMPLETO_PROFESOR_POR_JEFE = "SELECT CONCAT(NombreProfesor,' '"
            . ",ApellidoPaternoProfesor,' ', ApellidoMaternoProfesor ) AS "
            . "NombreCompleto FROM profesor INNER JOIN jefedepartamento "
            . "ON IdJefeInmediatoProfesor = IdJefeDepartamento WHERE CorreoJefe =";
    
    
    public static $PROFESORES_POR_CARRERA = "SELECT CONCAT(NombreProfesor,' ',ApellidoPaternoProfesor,' '"
            . ",ApellidoMaternoProfesor) AS NombreProfe FROM profesor "
            . "WHERE IdCarrera = ";
    
    
    public static $CURSOS_POR_CARRERA = "SELECT * FROM curso WHERE (DirigidoA like '%0%' "
            . "OR DirigidoA like ";
    
    public static $ID_CARRERA_PROFESOR = "SELECT IdCarrera FROM profesor WHERE"
            . " CorreoProfesor = ";
    
    public static $ID_JEFE ="SELECT IdJefeDepartamento FROM jefedepartamento "
            . "WHERE CorreoJefe =";
    
    public static $PROFESORES_POR_JEFE = "SELECT * FROM profesor WHERE "
            . "IdJefeInmediatoProfesor =";
    
    public static $PERFIL_PROFESOR = "SELECT * FROM profesor WHERE CorreoProfesor =";
    
    public static $INSCRIPCIONES_PROFESOR = "SELECT * FROM inscripcion WHERE "
            . "IdProfesor = (SELECT IdProfesor from profesor WHERE CorreoProfesor =";
    
    public static $ID_CARRERA_JEFE = "SELECT IdCarrera FROM carrera INNER JOIN"
            . " jefedepartamento ON IdDepartamentoCarrera = IdDepartamentoJefe"
            . " WHERE CorreoJefe =";
    
    public static $INSCRIPCIONES_POR_JEFE = "SELECT * FROM inscripcion WHERE IdCarrera =";
    
    public static $FILTRO_PROFESORES ="SELECT * FROM profesor WHERE IdCarrera =";
    
    public static $ID_CARRERA ="SELECT IdCarrera FROM carrera WHERE Abreviacion =";
    
    public static $ID_CARRERA_SU_ADMIN = "SELECT IdCarrera, NombreCarrera FROM carrera";
    
    public static $DIRIGIDO_A = "SELECT DirigidoA FROM curso WHERE DirigidoA like ";
    
}

