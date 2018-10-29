 <?php



function evaluaProfesor($table, $Estado, $CorreoProfe)

{

  if($table == "profesor" && $Estado == 0)

  { ?>

     <button class="btn btn-success"  onclick="verificarCuenta(1, <?php echo "'".$CorreoProfe."'";?>);" > Activar </button> 

    <?php

  }

  elseif($table == "profesor" && $Estado == 1){ ?>

       <button class="btn btn-info"  onclick="verificarCuenta(0, <?php echo "'".$CorreoProfe."'";?>);" > Desactivar </button> 


  <?php }

  else{

    

  }

}
 function createTable($view){



         include 'listViews.php';

         $table = $table[$view];



        // include "Buscar.php";

         ?>





       <div class="col-md-3">



              <?php  
              
              $modal = new Modal('btn1',$view,$view,"Insertar ".$view);

              $modal->getContent();



              $_subscribe = new Modal('inscripcion_modal', 'Inscripción al curso', '_InscripcionesBoss', 'Inscribir');

              $_subscribe->getContent(true);



              $_subscribe = new Modal('JefeDepto', 'Editar Jefe de departamento', '_JefedeptoBoss', 'editarBoss');

              $_subscribe->getContent(true);



              ?>

        </div>





        <br> <br>

        <?php

            if($table == "curso")

            {

                $idCarreraJefeDepto = getIdCarreraJefe( $_SESSION['username'] );



                $list = querySelect(SQL::$CURSOS_PARA_JEFE." '%".$idCarreraJefeDepto."%' ");

                 foreach($list as $row) {

                     $result = querySelect(SQL::$TOTAL_INSCRPCIONES." ". $row['NumeroCurso'] );

                     ?>





                        <div class="col-md-4 ">

                            <div class="thumbnail"  <?php

                            if($row['ispublic']==1){ echo "style= 'background-color: #b9f6ca;'" ;}

                                 else {echo "style= 'background-color: #fff9c4;'";} ?> >



                                <div class="caption">

                                    <h3><p align="center"><b><?php echo $row['NumeroCurso']." ".$row['NombreCurso'];?></b></p></h3>

                                <h4>Objetivo:</h4>

                                <p ALIGN="justify"><?php echo $row['ObjetivoCurso']; ?></p>

                                <p>Horario: de <?php echo $row['HoraInicioCurso']." a ".$row['HoraFinCurso'];?> <br>  Fecha: del <?php echo $row['FechaInicioCurso']." al ".$row['FechaFinCurso'];?></p>

                                <p> <b>Desarrollo academico: <?php if($row['sign1']==1){ echo ' Autorizado  - '; } else { echo ' En revision  - '; }?>

                                Subdireccion academica: <?php if($row['sign2']==1){ echo ' Autorizado  - '; } else { echo ' En revision  - '; } ?></p></b>

                                <p>Cupo para <?php echo $row['capacidadmaxima']." profesores    -"; ?>

                                Profesores inscritos: <?php  foreach ($result as $cantidad)

                                {

                                if($cantidad['cantidad'] == $row['capacidadmaxima']){ echo $cantidad['cantidad']." curso lleno"; }

                                elseif ($cantidad['cantidad'] > 0) { echo $cantidad['cantidad']; }

                                else { echo 'No hay inscripciones'; }



                                 } ?> </p>

                                <h4><p align="right"> <u><b>Instructor (a): <?php echo $row['NombreCompletoInstructor']; ?> </b></u></p></h4>

                                <br><button class="btn btn-info fa fa-print" onclick="reportBy(<?php echo $row['NumeroCurso'];?>);"> Mostrar lista

                                </button>

                                <button  type="checkbox" class="btn btn-default fa fa-drivers-license"  data-toggle="modal" data-target="#inscripcion_modal" onclick="inscribir('<?php echo $row['NumeroCurso'];?>');"> Inscribir

                                </button>



                               <!-- <button type="checkbox" class="btn btn-success fa fa-pencil" data-toggle="modal" data-target="#editar_modal" onclick="infoCurso('<?php echo $row['NumeroCurso'];?>');" > Editar contenido

                                </button> -->





                                </div>

                            </div>

                        </div>

                   <?php }  }



            else{



        ?>

   <div class="container-fluid">

    <table class="table table-striped table-responsive table-bordered" id="tabla">

     <thead >

        <tr class="info"  >

          <?php getheaders($table); ?>

        </tr>

     </thead>

     <tbody>





    <?php





    if($table == "profesor")

    {

        $idJefeDepto = getIdJefe($_SESSION['username']);

        $list = querySelect(SQL::$PROFESORES_POR_JEFE." ".$idJefeDepto);

    }



     elseif($table == "inscripcion")

    {

        $idCarreraJefe = getIdCarreraJefe($_SESSION['username']);

        $list = querySelect(SQL::$INSCRIPCIONES_POR_JEFE." ".$idCarreraJefe);

    }



    elseif($table == "instructor")

   {

       $list = querySelect(SQL::$SELEC_INSTRUCTOR);

   }





    else

    {

      $list = querySelect(SQL::$SELECCIONA_TODO." ".$table);

    }



    $i = 0;

    foreach($list as $row) {   ?>

                    <tr>

                        <?php $flag = true;

                        foreach ($row as $col) {

                            if($flag) { ?>

                        <td> <?php  if($row['Estado']!=$col) { echo $col; }  if($row['Estado']==$col) { evaluaProfesor($table, $row['Estado'], $row['CorreoProfesor']); }   ?> </td>

                                 <?php $flag = false; } else { $flag=true;} }  ?>

                                  

                    </tr> <?php $i++; }  ?>

            </tbody>

    </table>

 </div>

 <?php  } }?>

<script>



$(document).ready(function() {

   $('#tabla').DataTable( {

       "oLanguage": {

          "sSearch": "Buscar "

          }





    });





});



  function inscribir(numerocurso) {

    var request = new XMLHttpRequest();

    request.onload = function () {

      var response = this.response;



      if (typeof response === 'undefined' || response === "")

      throw "No se recuperó la información de la respuesta a la petición."



      var res = JSON.parse(response);



      if (res.status == 200) {

        var data = res.data;



        if (data.length == 0)

        return;



     // Las propiedades del objeto 'data' deben ser igual al nombre del campo SQL

        document.querySelector('#NombreCurso').value = data.NombreCurso;

        document.querySelector('#NumeroCurso').value = data.NumeroCurso;

        document.querySelector('#FechaInicio').value = data.FechaInicioCurso;

        document.querySelector('#FechaFin').value = data.FechaFinCurso;

        document.querySelector('#NombreInstructor').value = data.NombreCompletoInstructor;

        //document.querySelector('#NombreInstructor2').value = data.NombreCompletoInstructor2;

        document.querySelector('#TipoCurso').value = data.TipoCurso;

        //document.querySelector('#horario').value = data.horainicio;

        document.querySelector('#Aula').value = data.AulaPropuesta;

      }

    };

    request.open('GET', 'api.php?oper=getcurso&numcurso='  + numerocurso, true);

    request.send();

  }



</script>

