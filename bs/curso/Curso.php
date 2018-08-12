<?php
class Curso {
    private $NumeroCurso;
    private $NombreCurso;
    private $ObjetivoCurso;
    private $TipoCurso;
    private $HoraInicioCurso;
    private $HoraFinCurso;
    private $FechaInicioCurso;
    private $FechaFinCurso;
    private $FechaLimite; //Agregar a la bd del servidor del tec
    private $NumeroProfesoresCurso;
    private $PeriodoCurso;
    private $ispublic;
    private $sign1;
    private $sign2;
    private $ParaLosProfesoresDe;
    private $DelDepartamentoDe;
    private $NombreCompletoJefeDepto;
    private $NombreCompletoPresiAcad;
    private $NombreCompletoInstructor;
    private $AulaPropuesta;
    private $IdDepartamentoDe;
    public function __GET($k){ return $this->$k; } 
    public function __SET($k, $v) { return $this->$k = $v; } } 