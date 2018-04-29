<?php

date_default_timezone_set("America/Mexico_City");
$conexion;
switch (gethostname()) {
    
    case "localhost.localdomain":
        
        $conexion = mysql_connect('localhost', 'root', 'Get7usa7') or die ('MySQL Not found // Could Not Connect.');
        mysql_select_db('gdd', $conexion);
        
        break;
        
    
    case "C":    
        $conexion = mysql_connect('localhost', 'root', 'root') or die ('MySQL Not found // Could Not Connect.');
        mysql_select_db('gdd2', $conexion);
        break;
        
        
}



function fechaNormal($fecha){
		$nfecha = date('d/m/Y',strtotime($fecha));
		return $nfecha;
}

function calculaFecha($fecha,$dias) {
    if($fecha=="") {
        $fecha= date('Y-m-d');

     }
    return date('Y-m-d', strtotime('+'.$dias.' day', strtotime($fecha)));
}
