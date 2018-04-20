<?php 

class alumnos { 
    private $id; 
    private $nombre; 
    private $apellidop; 
    private $apellidom; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class asistencias { 
    private $idprofesor; 
    private $idcurso; 
    private $asistencia; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class aulas { 
    private $id; 
    private $nombre; 
    private $capacidad; 
    private $tipo; 
    private $ubicacion; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class carreras { 
    private $id; 
    private $nombre; 
    private $departamento; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class cursos { 
    private $id; 
    private $nombre; 
    private $objetivo; 
    private $semanacantidad; 
    private $fechaalta; 
    private $fechaterm; 
    private $numerohoras; 
    private $idinstructor; 
    private $dirigidoa; 
    private $departamento; 
    private $asignatura; 
    private $periodo; 
    private $capacidad; 
    private $aula; 
    private $horainicio; 
    private $horafin; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class departamentos { 
    private $id; 
    private $nombre; 
    private $jefedepto; 
    public function __GETenty($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class diplomas { 
    private $id; 
    private $idprofesor; 
    private $idcurso; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class encuesta { 
    private $id; 
    private $pregunta1; 
    private $pregunta2; 
    private $pregunta3; 
    private $pregunta4; 
    private $pregunta5; 
    private $pregunta6; 
    private $pregunta7; 
    private $pregunta8; 
    private $pregunta9; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class grados { 
    private $id; 
    private $nombre; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class infoescuela { 
    private $id; 
    private $nombre; 
    private $telefono; 
    private $direccion; 
    private $correo; 
    private $extension; 
    private $estado; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class inscripciones { 
    private $id; 
    private $nombreprofesor; 
    private $nombrecurso; 
    private $nombreinstructor; 
    private $horario; 
    private $fechainicio; 
    private $aula; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class instructores { 
    private $id; 
    private $nombre; 
    private $apellidop; 
    private $apellidom; 
    private $titulo; 
    private $cargo; 
    private $area; 
    private $telefono; 
    private $rfc; 
    private $correo; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class materias { 
    private $id; 
    private $nombre; 
    private $carrera; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class objetivos { 
    private $id; 
    private $descripcion; 
    private $nombre; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    
    class diagnostico { 
        private $id; // agregar campos
        
    
        public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
        

    class profesores { 
    private $id; 
    private $nombre; 
    private $apellidop; 
    private $apellidom; 
    private $departamento; 
    private $area; 
    private $telefono; 
    private $rfc; 
    private $correo; 
    private $gradoestudios; 
    private $nombrecarrera; 
    private $generacion; 
    private $puestoactual; 
    private $horario; 
    private $asistencia; 
    private $estudiosmaximos; 
    private $jefeinmediato; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
     
    
    class temarios { 
    private $id; 
    private $tema; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class ubicacionesaulas { 
    private $id; 
    private $lugar; 
    private $capacidad; 
    private $nombre; 
    private $tipo; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    
    class usuarios { 
    private $id; 
    private $nombreusuario; 
    private $apellidop; 
    private $apellidom; 
    private $tipo; 
    private $contrasenia; 
    private $email; 
    public function __GET($k){ return $this->$k; } public function __SET($k, $v){ return $this->$k = $v; } } 
    


?>