<?php
include "CursosDAO.php";
class Curso { 
    private $nombre;  
    public function get($k){ return $this->$k; } public function set($k, $v){ return $this->$k = $v; } } 
    
class CursosService {
function listarCursos() {
  
    $cursosDao =  new CursosDAO; 
    $listaCursos = $cursosDao->getCursos();
    foreach ($listaCursos as $curso) {
        echo $curso->get("nombre");
    }
    
   
}

}

$cursos = new CursosService();
$cursos->listarCursos();