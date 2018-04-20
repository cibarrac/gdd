<?php
include 'AbstractDAO.php';

class Curso { 
    private $nombre;  
    public function get($k){ return $this->$k; } public function set($k, $v){ return $this->$k = $v; } } 
    
class CursosDAO {
    
    function getCursos() {
        
     $conn = AbstractDAO::getConnect();
     $lista;
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $result = $conn->query("SELECT *FROM Profesor");

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                 $curso = new Curso;      
                 $curso->set("nombre",$row['NombreProfesor'] );
                $lista[] = $curso;
                
                
            }
        } else {
            echo "0 results";
        }
        $conn->close();
     return $lista;
    }
    
}