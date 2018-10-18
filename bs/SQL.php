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

    public static $NOMBRE_COMPLETO_PROFESOR = "SELECT CONCAT(NombreProfesor,' '"
            . ",ApellidoPaternoProfesor,' ', ApellidoMaternoProfesor ) AS "
            . "NombreCompleto FROM profesor";


    public static $PROFESORES_POR_CARRERA = "SELECT CONCAT(NombreProfesor,' ',ApellidoPaternoProfesor,' '"
            . ",ApellidoMaternoProfesor) AS NombreProfe FROM profesor "
            . "WHERE IdCarrera = ";


    public static $CURSOS_POR_CARRERA = "SELECT * FROM curso WHERE  ispublic = 1  AND (DirigidoA like '%0%' "
            . "OR DirigidoA like ";

    public static $CURSOS_PARA_JEFE = "SELECT * FROM curso WHERE DirigidoA like '%0%' "
            . "OR DirigidoA like ";

    public static $ID_CARRERA_PROFESOR = "SELECT IdCarrera FROM profesor WHERE"
            . " CorreoProfesor = ";

    public static $ID_JEFE ="SELECT IdJefeDepartamento FROM jefedepartamento "
            . "WHERE CorreoJefe =";

    public static $PROFESORES_POR_JEFE = "SELECT CONCAT(NombreProfesor,' ',ApellidoPaternoProfesor,' ',ApellidoMaternoProfesor),"
    ." RFCProfesor, NumeroTelefonoProfesor, CorreoProfesor, NumeroTarjetaProfesor, Estado FROM profesor WHERE "
            . "IdJefeInmediatoProfesor =";

    public static $PERFIL_PROFESOR = "SELECT * FROM profesor WHERE CorreoProfesor =";

    public static $INSCRIPCIONES_PROFESOR = "SELECT curso.NumeroCurso, curso.NombreCurso,"
    ." curso.PeriodoCurso, curso.NombreCompletoInstructor, curso.AulaPropuesta FROM"
    ." curso, inscripcion WHERE curso.NumeroCurso = inscripcion.NumeroCurso AND"
    ." inscripcion.IdProfesor = (SELECT IdProfesor from profesor WHERE CorreoProfesor =";

    public static $ID_CARRERA_JEFE = "SELECT IdCarrera FROM carrera INNER JOIN"
            . " jefedepartamento ON IdDepartamentoCarrera = IdDepartamentoJefe"
            . " WHERE CorreoJefe =";

    public static $INSCRIPCIONES_POR_JEFE = "SELECT NumeroCurso, NombreProfesorInscrito,"
            . " NombreCurso,Aula FROM inscripcion WHERE IdCarrera =";

    public static $FILTRO_PROFESORES ="SELECT * FROM profesor WHERE IdCarrera =";

    public static $ID_CARRERA ="SELECT IdCarrera FROM carrera WHERE Abreviacion =";

    public static $ID_CARRERA_SU_ADMIN = "SELECT IdCarrera, NombreCarrera FROM carrera";

    public static $DIRIGIDO_A = "SELECT DirigidoA FROM curso WHERE DirigidoA like ";

    public static $ANIO ="SELECT YEAR(NOW())";

    public static $INSCRITOTrueFalse ="SELECT COUNT(NumeroCurso) as confirm FROM"
    ." inscripcion INNER JOIN profesor ON inscripcion.IdProfesor = profesor.IdProfesor"
    ." WHERE profesor.CorreoProfesor =";

    public static $DatosProfesorBoss ="SELECT NombreProfesor, ApellidoPaternoProfesor,"
    ." ApellidoMaternoProfesor, RFCProfesor, NumeroTelefonoProfesor, CorreoProfesor,"
    ." NumeroTarjetaProfesor, Estado FROM profesor";

    public static $HEADER_INSCRIPCION = "SELECT COLUMN_NAME FROM"
    ." INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'inscripcion' AND"
    ." (COLUMN_NAME='NumeroCurso' OR COLUMN_NAME='NombreCurso' OR"
    ." COLUMN_NAME='NombreProfesorInscrito' OR COLUMN_NAME='Aula')";

    public static $HEADER_INSTRUCTOR = "SELECT COLUMN_NAME FROM"
    ." INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'instructor' AND"
    ." (COLUMN_NAME='NombreInstructor' OR COLUMN_NAME='NumeroTelefonoInstructor' OR"
    ." COLUMN_NAME='CorreoInstructor')";

    public static $SELEC_INSTRUCTOR = "SElECT CONCAT(NombreInstructor,' ',ApellidoPaternoInstructor"
      .",' ',ApellidoMaternoInstructor) AS NombreInstructor, NumeroTelefonoInstructor, CorreoInstructor"
      ." FROM instructor";

      public static $HEADER_PROFESOR = "SELECT COLUMN_NAME FROM"
      ." INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'profesor' AND"
      ." (COLUMN_NAME='NombreProfesor' OR COLUMN_NAME='RFCProfesor' OR"
      ." COLUMN_NAME='NumeroTelefonoProfesor' OR COLUMN_NAME='CorreoProfesor' OR"
      ." COLUMN_NAME='NumeroTarjetaProfesor' OR COLUMN_NAME='Estado')";

      public static $HEADER_CURSOS = "SELECT COLUMN_NAME FROM"
      ." INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'curso' AND"
      ." (COLUMN_NAME='NumeroCurso' OR COLUMN_NAME='NombreCurso' OR COLUMN_NAME='PeriodoCurso' OR"
      ." COLUMN_NAME='NombreCompletoInstructor' OR COLUMN_NAME='AulaPropuesta')";

      public static $INFO_ITA ="SELECT NombreInstitucion, NumeroTelefono, DireccionInstitucion,"
      ." CorreoInstitucion, CONCAT(NombreDirector,' ',ApellidoPaternoDirector,' ',ApellidoMaternoDirector),"
      ." CONCAT(NombreSubdirector,' ',ApellidoPaternoSubdirector,' ',ApellidoMaternoSubdirector)"
      ." FROM infoescuela";

      public static $HEADER_INFOITA = "SELECT COLUMN_NAME FROM"
      ." INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'infoescuela' AND"
      ." (COLUMN_NAME='NombreInstitucion' OR COLUMN_NAME='NumeroTelefono' OR COLUMN_NAME='DireccionInstitucion' OR"
      ." COLUMN_NAME='CorreoInstitucion' OR COLUMN_NAME='NombreDirector' OR COLUMN_NAME='NombreSubdirector')";

      public static $SELECT_CARRERA ="SELECT NombreCarrera, Abreviacion FROM carrera";

      public static $HEADER_CARRERA ="SELECT COLUMN_NAME FROM"
      ." INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'carrera' AND"
      ." (COLUMN_NAME='NombreCarrera' OR COLUMN_NAME='Abreviacion')";

      public static $SELECT_JEFE = "SELECT CONCAT(NombreJefeDepto,' ',ApellidoPaternoJefeDepto,"
      ." ' ',ApellidoMaternoJefeDepto), CorreoJefe, NombreDepartamento FROM jefedepartamento"
      ." INNER JOIN departamento ON IdDepartamentoJefe = IdDepartamento ";

      public static $HEADER_JEFE = "SELECT COLUMN_NAME FROM"
      ." INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'jefedepartamento' AND"
      ." (COLUMN_NAME='NombreJefeDepto' OR COLUMN_NAME='CorreoJefe' OR"
      ." COLUMN_NAME='IdDepartamentoJefe')";

      public static $SELECT_PROFE_SU = "SELECT CONCAT(NombreProfesor,' ',ApellidoPaternoProfesor,' ',ApellidoMaternoProfesor),"
      ." RFCProfesor, NumeroTelefonoProfesor, CorreoProfesor, NumeroTarjetaProfesor, Estado FROM profesor";

      public static $INSCRIPCION_SU ="SELECT NumeroCurso, NombreProfesorInscrito,"
              . " NombreCurso,Aula FROM inscripcion";

      public static $VERIFICAR_ESTATUS_PROFESOR ="SELECT Estado FROM profesor where CorreoProfesor = ";
}
