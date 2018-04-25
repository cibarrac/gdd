<?php
include "conn.php";
include "model/enty.php";

/*
$horainicio = "08:00PM";
$nombre = "POO";
$aula = "Lab-ISC";
$idinstructor= "Juan Miguel";
$periodo = "Ago-Dic";
$fechaalta = "17/01/18";

*/

function getList() {
  /**
   * SELECT C.id, gradoestudios, nombre, apellidop, apellidom, departamento, numerotarjeta, rfc   FROM profesores C, inscripciones O
* WHERE C.id = O.nombreprofesor
   */
  $profeList = array();
  $idcurso= $_GET['curso'];
  $SQL = " SELECT NumeroCurso, NombreProfesorInscrito, "
          . "RFCProfesor from Inscripcion, Profesor where "
          . "NombreProfesorInscrito = concat(NombreProfesor,' ',"
          . "ApellidoPaternoProfesor,' ',ApellidoMaternoProfesor) and NumeroCurso= '$idcurso';";
  $lista = mysql_query($SQL);

  if(mysql_num_rows($lista)>0){
       while($fila = mysql_fetch_array($lista)){
        $profesor = new profesores();
               $horainicio  = $fila['horainicio'];
               $nombre  = $fila['NombreCurso'];
               $aula  = $fila['aula'];
               $idinstructor  = $fila['idinstructor'];
               $periodo  = $fila['periodo'];
               $fechaalta  = $fila['fechaalta'];
               $profesor->__SET('NombeCurso',$fila['nombrecurso']);
               $profesor->__SET('id',$fila['id']);
               $profesor->__SET('gradoestudios',$fila['gradoestudios']);
               $profesor->__SET('NombreProfesorInscrito',$fila['nombre']);
               $profesor->__SET('departamento',$fila['departamento']);
               $profesor->__SET('NumeroTarjeta',$fila['numerotarjeta']);
               $profesor->__SET('RFCProfesor',$fila['rfc']);





        $profeList [] = $profesor;
             }}
         return $profeList;
        }?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Bootstrap -->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="assets/js/jquery-1.11.3.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="assets/js/bootstrap.js"></script>
</head>
<body>
     <div class="container">
     <br><br>
     <div class="row">
        <div class="col-md-12">

             <label for="">Nombre del curso  <u> <?php  echo $nombre;?> </u> </label>
             <label for="">Lugar  <u><?php echo $aula;?> </u></label>
             <label for="">Instructor (s)  <u><?php echo $idinstructor;?> </u> </label>
             <label for="">Periodo  <u><?php echo $periodo;?></u></label>
             <label for="">Fecha <u> <?php echo $fechaalta;?></u> </label>
             <label for="">Horario  <u><?php echo $horainicio;?> </u></label>



        </div>
     </div>
     <br>

     <div class="row">

            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead style="background:#dad9d9">
                        <tr>
                            <th>No.</th>
                            <th>Grado Academico</th>
                            <th>Docente</th>
                            <th>Area</th>
                            <th>No. Tarjeta</th>
                            <th>RFC</th>
                            <th>Firma</th>
                        </tr>


                    </thead>
                    <tbody>
                       <?php  $list = getList();
                       $i=1;
                        foreach ($list as $profe) { ?>
                                 <tr>
                                   <td> <?php echo $i;?> </td>
                                   <td> <?php echo $profe->__GET('gradoestudios');?> </td>
                                   <td> <?php echo $profe->__GET('nombre');?> </td>
                                   <td> <?php echo $profe->__GET('departamento');?> </td>
                                   <td> <?php echo $profe->__GET('numerotarjeta');?> </td>
                                   <td> <?php echo $profe->__GET('rfc');?> </td>
                                   <td> <?php echo ""; ?> </td>

                                 </tr>
                             <?php $i++;}
                           ?>

                    </tbody>
                </table>
            </div>

            </div>

      <div class="row">
           <div class="col-md-6">
               <label for="">MC. DANIEL MULATO AGUERO</label>
           </div>
           <div class="col-md-6">
              <label for="">  MC. NOE CASTELLANOS BEBOLLEDO</div>
          </label>
      </div>

      </div>
</body>
</html>
