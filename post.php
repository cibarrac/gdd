

<?php

include 'bs/QueryService.php';

include 'bs/curso/CursoService.php';

include 'login/register.php';

/**

 * COMO PARAMETRO SE RECIBE EL NOMBRE DE LA TABLA EN LA BASE DE DATOS

 * CADA CAMPO SE LEERA DEL ARREGLO POST O GET PARA CONCATENARLO EN UNA CADENA PARA CREAR UN INSERT

 */



function dialog($msg)

{
    $view = $_POST['view'];
    echo '<script> alert("'.$msg.'");
        window.location.href="index.php";
         </script> ';


  

}



function validation(){

    $formData = getPOST_GET();

    $table = $formData['table'];

    

    

    if($table=="inscripcion")

    {

        $IdCurso = $formData['NumeroCurso'];

        $IdProfesor = $formData['IdProfesor'];

        

        $cursoAprobado = CursoService::getCursoAprobado($IdCurso);

        $profesor = CursoService::getProfesorInscrito($IdProfesor, $IdCurso); 

        $fechalimite = CursoService::getFechaLimiteInscripcion($IdCurso);

        $cupo = CursoService::getLimiteCurso($IdCurso);

        $turno = CursoService::getTurnoCurso($IdCurso, $IdProfesor);

       

       

        

        if($cursoAprobado == false)

        {

            dialog('No puede hacer una inscripcion, el curso no esta apobado');

            return false;

        }

        

        

        if($profesor == false)

        {

            dialog('No se puede inscribir, ya esta inscrito');

            return false;

        } 

        

        elseif($fechalimite == false)

        {

            dialog('No puede inscribirse al curso, la fecha limite expiro ');

            return false;   

        }

        

        elseif($cupo == false)

        {

            dialog('No puede inscribirse al curso, el curso esta lleno');

            return false;

        }

        

        elseif($turno == false)

        {

            dialog('No puede inscrirse al curso, ya tiene un curso en el mismo turno');

            return false;

        }

        

        else { return true; }

    }



    

    if($table=="curso")

    {

        $idAula = $formData['AulaPropuesta'];

        $turno = $formData['Turno'];

        

        $aula = CursoService::getAulaDisponible($idAula, $turno);

        

        if($aula == false)

        {

            dialog('El aula propuesta esta ocupada, seleccione otra');

            return false;

        }

        

        else { return true; }

      

    }

    

    

    if($table == "profesor" )

    {

        $email = $formData['CorreoProfesor'];

        $profesorRegistrado = CursoService::getProfesorRegistrado($email);

        

        if($profesorRegistrado == false)

        {

            dialog('Usted ya se encuetra registrado');

            return false;

        }

        else { return true; }

    }

    

    

    if($table == "jefedepartamento")

    {

        $idDepartamento = $formData['IdDepartamentoJefe'];     

        $jefeRegistrado = CursoService::getJefeDepartamentoRegistrado($idDepartamento);

        

        if($jefeRegistrado == false)

        {

            dialog('El departamento ya cuenta con un jefe registrado');

            return false;

        }

        else { return true; }

    }

    

    

    if($table == "departamento")

    {

        $nombreDepto = $formData['NombreDepartamento'];

        $departamentoRegistrado = CursoService::getDepartamentoRegistrado($nombreDepto);

        

        if($departamentoRegistrado == false)

        {

            dialog('El departamento ya esta registrado');

            return false;

        }

        else { return true; }

    }

    

    

    if($table == "carrera")

    {

        $nombreCarrera = $formData['NombreCarrera'];

        $carreraRegistrada = CursoService::getCarreraRegistrada($nombreCarrera);

        

        if($carreraRegistrada == false)

        {

           dialog('La carrera ya esta registrada');

           return false; 

        }

        else { return true; }

    }

    

    if($table == "infoescuela")

    {

        $infoEscuela = CursoService::getInfoEscuela();

        

        if($infoEscuela == false)

        {

            dialog('La inforamcion de la institucion ya esta en el sistema');

            return false;

        }

        else { return true; }

    }

    

    

    else { return true; }

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

                    $SQL_UPDATE = "UPDATE ". $table." SET ".$values." WHERE IdProfesor = '".$id."'";

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

         echo " <br>";

         return $_POST;

    }

    else if(!empty($_GET)) {

      echo " <br>";

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

          case 'update':  update($_POST['IdProfesor'],$_POST['table']); break;

          default: echo "Falta el atributo action en el formulario"; break;

}
















