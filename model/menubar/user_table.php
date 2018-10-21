<style>
   .thumbnail{border: 0px solid #f00; padding: 20px 22px;
-webkit-box-shadow: 20px 10px 26px 5px rgba(0,0,0,0.44);
-moz-box-shadow: 14px 10px 26px 5px rgba(0,0,0,0.44);
box-shadow: 10px 10px 26px 5px rgba(0,0,0,0.44);

height: 400px;
width: 650px;
    }
</style>





 <?php
session_start();



function getheaders($table) {

     $fields = querySelect(SQL::$HEADER_CURSOS);

     foreach ($fields as $field) {
         echo "<th class='header'>". $field[0] ."</th>";
     }

 }
 


 function createTable($view){
         include 'listViews.php';
         $table = $table[$view];

        // include "Buscar.php";
         ?>


         <div class="col-md-3">

              <?php
              if($table == "curso")
              {
              $_subscribe = new Modal('inscripcion_modal', 'Inscripción al curso', '_InscripcionesUser', 'Inscribir');
              $_subscribe->getContent(true);
              }

              if($table == "profesor")
              {
                $acount = querySelect(SQL::$PERFIL_PROFESOR." '".$_SESSION['username']."' ");
                if(count($acount)>0){
                    $_perfil = new Modal('editar_perfil', 'Mis datos', '_Profesor', 'Editar');
                    $_perfil->getContent(true);
                }
                else{
                    $modal = new Modal('btn1',$view,$view,"Insertar ".$view);
                    $modal->getContent();
                }

              }

              ?>
        </div>


        <br> <br>

        <?php
      if($table == "curso")
      {

      $idCarreraProfe = getIdCArreraProfe( $_SESSION['username'] );
      $list = querySelect(SQL::$CURSOS_POR_CARRERA." '%".$idCarreraProfe."%') AND ispublic = 1");

      foreach($list as $row) {
          $result = querySelect(SQL::$TOTAL_INSCRPCIONES." ". $row['NumeroCurso'] );
          ?>


                        <div class="col-md-6 ">
                            <div class="thumbnail"  <?php
                            if($row['ispublic']==1){ echo "style= 'background-color: #b9f6ca;'" ;}
                                 else {echo "style= 'background-color: #fff9c4;'";} ?> >

                                <div class="caption">
                                <h3><?php echo $row['NumeroCurso']." ".$row['NombreCurso'];?></h3>
                                <h4>Objetivo:</h4>
                                <p><?php echo $row['ObjetivoCurso']; ?></p>
                                <p>Horario: de <?php echo $row['HoraInicioCurso']." a ".$row['HoraFinCurso'];?> <br>  Fecha: del <?php echo $row['FechaInicioCurso']." al ".$row['FechaFinCurso'];?></p>
                                <p>Fecha limite para inscribirse: <?php echo $row['FechaLimite']; ?> </p>
                                <p>
                                 <?php  foreach ($result as $cantidad)
                                {
                                if($cantidad['cantidad'] == $row['capacidadmaxima']){ echo " Curso lleno"; }
                                else { echo 'Cupo disponible'; }

                                 } ?> </p>

                                <h4><p align="right"> Instructor (a): <?php echo $row['NombreCompletoInstructor']; ?> </p></h4>

                                <?php
                                  $consultaTF = querySelect(SQL::$INSCRITOTrueFalse." '".$_SESSION['username']."' AND inscripcion.NumeroCurso = ".$row['NumeroCurso']);
                                  foreach($consultaTF as $confirma)
                                  {
                                 ?>

                                <button  type="checkbox" class="btn btn-default fa fa-drivers-license"  data-toggle="modal"
                                <?php
                                if($confirma['confirm'] == 0)
                                {echo ' style="display: inline" ' ; } else { echo ' style="display: none" '; }
                                 ?>
                                data-target="#inscripcion_modal" onclick="inscribir('<?php echo $row['NumeroCurso'];?>');">
                                Inscribirme
                                </button>

                                <button type="checkbox" class="btn btn-danger fa fa-ban"
                                    <?php if($confirma['confirm'] == 1)
                                    {echo ' style="display: inline" ' ; } else { echo ' style="display: none" '; }

                                    ?>
                                         onclick="salircurso('<?php echo $row['NumeroCurso']; ?>');">
                                Salir del curso
                              </button>

                              <?php } ?>

                                </div>
                            </div>
                        </div>
                     <?php
    } }
    elseif($table == "profesor"){

        $list = querySelect(SQL::$PERFIL_PROFESOR." '".$_SESSION['username']."' ");
         foreach($list as $row) {
        ?>
            
        <div class="container">
            <div class="row">
                <div class="col-md-5  toppad  pull-right col-md-offset-3 "> </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >



                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            <h3 class="panel-title">Mis datos</h3>
                            </div>


                             <div class="panel-body">
                                 <div class="row">

                                   <div class="col-md-3 col-lg-3 " align="center"> <img  alt="User Pic" src="assets/logo/Capturap.PNG" class=" img-responsive"  />
                        <br>
                  Foto de perfil
                    <br>
                    <a href="#ventanaimg"  title="Subir foto de perfil" class="btn" data-toggle="modal"><span class="glyphicon glyphicon-upload"></span></a>
                    <a href="#ventanaDelimg" title="Borrar foto de perfil" data-toggle="modal" class="btn"><span class="glyphicon glyphicon-trash"></span></a>


                                 </div>

                                 <div class=" col-md-9 col-lg-9 ">
                                    <table class="table table-user-information">
                                        <tbody>

                                            <tr>
                                                <td>Nombre completo:</td>

                                                <td><?=$list[0]['NombreProfesor']?> <?=$list[0]['ApellidoPaternoProfesor']?> <?=$list[0]['ApellidoMaternoProfesor']?></td>
                                            </tr>
                                            <tr>
                                                <td>Num tarjeta:</td>
                                                <td><?=$list[0]['NumeroTarjetaProfesor']?></td>
                                            </tr>
                                            <tr>
                                                <td>RFC:</td>
                                                <td><?=$list[0]['RFCProfesor']?></td>
                                            </tr>
                                            <tr>
                                                <td>Correo</td>
                                                <td><?=$list[0]['CorreoProfesor']?></td>
                                            </tr>
                                            <tr>
                                                <td>Grado de estudios</td>
                                                <td><?=$list[0]['GradoEstudiosProfesor']?></td>
                                            </tr>
                                            <tr>
                                                <td>Carrera </td>
                                                <td><?=$list[0]['NombreCarreraProfesor']?></td>
                                            </tr>
                                            <tr>
                                                <td>Puesto</td>
                                                <td><?=$list[0]['PuestoProfesor']?></td>
                                            </tr>

                                            <tr>
                                                <td>Numero de telefono</td>
                                                <td><?=$list[0]['NumeroTelefonoProfesor']?></td>

                                        </tbody>
                                    </table>
                                </div>





                             </div>


                                 <div class="panel-footer">
                                    <button type="checkbox" class="btn fa fa-pencil" data-toggle="modal" data-target="#editar_perfil" onclick="editarPerfil('<?php echo $row['IdProfesor'];?>');" > Editar perfil
                                    </button>

                            </div>
                        </div>

                    </div>
            </div>
        </div>










         <?php   }

    }

    else {
     ?>
 <div class="container">
    <table class="table table-bordered table-striped table-responsive" id="tabla">
     <thead>
        <tr class="info">
          <?php getheaders($table);
          ?>

        </tr>
     </thead>
     <tbody>


    <?php



    if($table == "inscripcion")
    {
        $list = querySelect(SQL::$INSCRIPCIONES_PROFESOR." '".$_SESSION['username']."') ");
    }

    else
    {
      $list = querySelect(SQL::$SELECCIONA_TODO." ".$table);
    }

    $i = 0;

    foreach($list as $row) {   ?>
                    <tr <?php if(isset($row['ispublic'])){
                                 if($row['ispublic']==1){ echo "class='success'";}
                                 else {echo "class='warning'";}
                           } ?> >
                        <?php $flag= true;
                        foreach ($row as $col) {
                            if($flag) { ?>
                        <td> <?php echo $col; ?> </td>
                                 <?php $flag = false; } else { $flag=true;} }  ?>
                    </tr> <?php $i++; }  ?>

            </tbody>
    </table>
  </div>

 <?php  } }?>

<script>
<?php if (isset($_SESSION['data-user'])) {     ?>
        window.userdata = JSON.parse('<?php echo json_encode($_SESSION['data-user']); ?>');
    <?php

 } ?>



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



<script>
   function editarPerfil(IdProfesor) {
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
        document.querySelector('#IdProfesor').value = data.IdProfesor;
        document.querySelector('#NombreProfesor').value = data.NombreProfesor;
        document.querySelector('#ApellidoPaternoProfesor').value = data.ApellidoPaternoProfesor;
        document.querySelector('#ApellidoMaternoProfesor').value = data.ApellidoMaternoProfesor;
        document.querySelector('#RFCProfesor').value = data.RFCProfesor;
        document.querySelector('#NumeroTelefonoProfesor').value = data.NumeroTelefonoProfesor;
        document.querySelector('#NumeroTarjetaProfesor').value = data.NumeroTarjetaProfesor;
        document.querySelector('#CarreraCursadaProfesor').value = data.CarreraCursadaProfesor;
        document.querySelector('#GradoEstudiosProfesor').value = data.GradoEstudiosProfesor;
        document.querySelector('#IdDepartamentoProfesor').value = data.IdDepartamentoProfesor;
        document.querySelector('#NombreCarreraProfesor').value = data.NombreCarreraProfesor;
        document.querySelector('#IdCarreraAPI').value = data.IdCarrera;
        document.querySelector('#PuestoProfesor').value = data.PuestoProfesor;
        document.querySelector('#JefeInmediatoProfesor').value = data.JefeInmediatoProfesor;
        document.querySelector('#IdJefeInmediatoProfesor').value = data.IdJefeInmediatoProfesor;

      }
    };
    request.open('GET', 'api.php?oper=getDatosProfesor&IdProfesor='  + IdProfesor, true);
    request.send();
  }
</script>
