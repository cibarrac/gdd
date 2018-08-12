<?php
class CursoInfo {
    private $NumeroCurso;
    private $NombreCurso;
    private $AulaPropuesta;
    private $HoraInicioCurso;
    private $HoraFinCurso;
    private $PeriodoCurso;
    private $NombreCompletoInstructor;  
    public function __GET($k){ return $this->$k; } 
    public function __SET($k, $v) { return $this->$k = $v; } } 