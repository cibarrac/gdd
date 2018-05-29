<?php
include 'bs/QueryService.php';
include 'bs/curso/CursoService.php';

/**
 * COMO PARAMETRO SE RECIBE EL NOMBRE DE LA TABLA EN LA BASE DE DATOS
 * CADA CAMPO SE LEERA DEL ARREGLO POST O GET PARA CONCATENARLO EN UNA CADENA PARA CREAR UN INSERT
 */

function validation(){
    $formData = getPOST_GET();
    $table = $formData['table'];
    
    if($table=="inscripcion") {
        $IdCurso = $formData['NumeroCurso'];
        $IdProfesor = $formData['IdProfesor']; 
     return CursoService::getProfesorInscrito($IdProfesor, $IdCurso);    
    }
   
     if($table == "incripcion"){
        $idCurso = $formData['NumeroCurso'];
        return CursoService::getFechaLimiteInscripcion($IdCurso);
    }
    
    if($talbe == "inscripcion"){
        $idCurso = $formData['NumeroCurso'];
        return CursoService::getLimiteCurso($idCurso);
    }
    
    if($table=="curso"){
        $idAula = $formData['AulaPropuesta'];
        $turno = $formData['Turno'];
    return CursoService::getAulaDisponible($idAula, $turno);
    }
    
    
    
}
function save($table) {

             $config = ["fields"=>"(","values"=>"(","update_v"=>" "];
             $i = 0; $id_use = 3;
              $_HTTP = getPOST_GET();

                  foreach($_HTTP as $KEY => $VALUE){
                       if($i<(count($_HTTP )) && $i > $id_use) {
                                if ($i<(count($_HTTP)-1)) {  $coma = ",";}
                                   else {
                                        $coma = "";

                                   }
                                 $config['fields'].=$KEY.$coma;
                                 $config['values'].="'".$VALUE."'".$coma;

                               }
                               $i++;
                  }
                  if(validation()) {
                  $SQL_INSERT = "INSERT INTO ". $table." ".$config['fields'].") VALUES ".$config['values'].")";
                  queryInsert($SQL_INSERT);
                  echo $SQL_INSERT;
                  }
                  else{echo "No se guardó"; }
                 


}
/**
 * METODO QUE UTILIZA UNA PETICION POST O GET COMO ARREGLO DE VALORES PARA CREAR UNA CONSULTA
 * DONDE SE EVALUA CADA CAMPO DEL FORMULARIO Y NOS PERMITE REALIZAR UNA ACTUALIZACION EN LA BASE DE DATOS
 *
 */
function update($id,$table) {
     $config = ["fields"=>"(","values"=>"","update_v"=>" "];
     $values =  $config['values'];
     $_HTTP = getPOST_GET();   $i=0; $id_use = 3;

     foreach($_HTTP as $KEY => $VALUE){
          if($i<(count($_HTTP)) && $i > $id_use) {
                  if ($i<(count($_HTTP)-1)) {  $coma = ",";}
                  else { $coma = ""; }
                    //$config['fields'].=$KEY.$coma;
                    $values.="$KEY='".$VALUE."' ".$coma;

                  }
                  $i++;
      }


                    $SQL_UPDATE = "UPDATE ". $table." SET ".$values." WHERE id = '".$id."'";
                    echo $SQL_UPDATE;
                    queryUpdate($SQL_UPDATE);

}

/**
 *
 *
 * METODOS QUE OPTIMIZAN EL CODIGO PARA REDUCIR EL TAMAÑO RELATIVO A LA FUNCION PRINCIPAL
 *  * METODOS QUE OPTIMIZAN EL CODIGO PARA REDUCIR EL TAMAÑO RELATIVO A LA FUNCION PRINCIPAL
 *
 */
function show($list) {

  foreach($list as $KEY => $VALUE){


             echo $KEY;



}
}

function getPOST_GET() {
    if(!empty($_POST)){
         echo "Es un post <br>";
         return $_POST;
    }
    else if(!empty($_GET)) {
      echo "Es un get<br>";
      return $_GET;
    }
    echo '<script type="text/javascript">alert("Guardado");</script>';
}


function isvalid() {


               foreach($_POST as $KEY => $VALUE){

                            if($VALUE=='') {
                             return false;
                             echo "Falta un campo";
                            }


               }


               return true;

}


switch ($_POST['action']) {

          case 'save':  save($_POST['table']); break;
          case 'update':  update($_POST['id'],$_POST['table']); break;

          default: echo "Falta el atributo action en el formulario"; break;
}
$view = $_POST['view'];
header('location:index.php?view='.$view);
