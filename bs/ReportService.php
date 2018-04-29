<?php 
class ReportService {
    
    public static function getList() {
        
        $profeList = array();
        $idcurso= $_GET['curso'];
        $SQL = "SELECT
                CURSO.nombre,
                PROFESORES.id,
                PROFESORES.gradoestudios,
                PROFESORES.nombre,
                PROFESORES.apellidop,
                PROFESORES.apellidom,
                PROFESORES.departamento,
                PROFESORES.numerotarjeta,
                PROFESORES.rfc
            
                FROM profesores PROFESORES,
                  inscripciones INSCRIPCIONES,
                         cursos CURSO
              WHERE  PROFESORES.id =INSCRIPCIONES.nombreprofesor
      AND INSCRIPCIONES.nombrecurso='".$idcurso."'
   GROUP BY PROFESORES.id";
        $lista = querySelect($SQL);
        foreach ($array_expression as $value) {
            $profesor = new profesores();
            $profesor->__SET('nombrecurso',$fila['nombrecurso']);
            $profesor->__SET('id',$fila['id']);
            $profesor->__SET('gradoestudios',$fila['gradoestudios']);
            $profesor->__SET('nombre',$fila['nombre']." ".$fila['apellidop']." ".$fila['apellidom']);
            $profesor->__SET('departamento',$fila['departamento']);
            $profesor->__SET('numerotarjeta',$fila['numerotarjeta']);
            $profesor->__SET('rfc',$fila['rfc']);
            $profeList [] = $profesor;
        }
        return $profeList;
    }
}

?>