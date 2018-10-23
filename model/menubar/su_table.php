<style>
   .thumbnail{border: 0px solid #f00; padding: 20px 22px;
-webkit-box-shadow: 20px 10px 26px 5px rgba(0,0,0,0.44);
-moz-box-shadow: 14px 10px 26px 5px rgba(0,0,0,0.44);
box-shadow: 10px 10px 26px 5px rgba(0,0,0,0.44);

height: 400px;
width: 650px;
    }
</style>


<!-- Inicio Tabla Cusos ****************************************************************************************************************-->

 <?php

 function getheaders($table) {

    if($table == "infoescuela"){
      $fields = querySelect(SQL::$HEADER_INFOITA);
    }
    elseif($table == "carrera"){
      $fields = querySelect(SQL::$HEADER_CARRERA);
    }
    elseif($table == "jefedepartamento"){
      $fields = querySelect(SQL::$HEADER_JEFE);
    }
    elseif($table == "profesor"){
      $fields = querySelect(SQL::$HEADER_PROFESOR);
    }
    elseif($table == "inscripcion"){
      $fields = querySelect(SQL::$HEADER_INSCRIPCION);
    }
    else{
     $fields = querySelect("describe ".$table);
   }
     foreach ($fields as $field) {
         echo "<th class='header'>". $field[0] ."</th>";
     }

 }

 function createTable($view){
    include 'listViews.php';
        $table = $table[$view];  ?>
        <div class="col-md-3">
              <?php
                $modalInsert = new Modal('btn1',$view,$view,"Insertar ".$view);
                $modalInsert->getContent();

                $_subscribe = new Modal('inscripcion_modal', 'Inscripción al curso', '_Inscripciones', 'Inscribir');
                $_subscribe->getContent(true);

                //$_edit = new Modal('editar_modal', 'Editar', '_Curso', 'Editar');
                //$_edit->getContent(true);
              ?>
        </div>
       <br> <br>

      <?php  if($table == "curso")
       {
         $list = querySelect(SQL::$SELECCIONA_TODO." ".$table);

                foreach($list as $row) {
                   $result = querySelect(SQL::$TOTAL_INSCRPCIONES." ". $row['NumeroCurso'] );



                    ?>



                        <div class="col-md-6 ">
                            <div class="thumbnail"  <?php
                            if($row['ispublic']==1){ echo "style= 'background-color: #b9f6ca;'" ;}
                            elseif($row['ispublic']==2){ echo "style= 'background-color: #ffcdd2;'" ;}
                                 else {echo "style= 'background-color: #fff9c4;'";} ?> >

                                <div class="caption">
                                    <h3><p align="center"><b><?php echo $row['NumeroCurso']." ".$row['NombreCurso'];?></b></p></h3>
                                <h4>Objetivo:</h4>
                                <p ALIGN="justify"><?php echo $row['ObjetivoCurso']; ?></p>
                                <p>Horario: de <?php echo $row['HoraInicioCurso']." a ".$row['HoraFinCurso'];?> <br>  Fecha: del <?php echo $row['FechaInicioCurso']." al ".$row['FechaFinCurso'];?></p>

                                <p> <b>Desarrollo academico: <?php if($row['sign1']==1){ echo ' Autorizado  - '; }  elseif($row['sign1']==2){ echo 'Cancelado  - '; }  else { echo ' En revision  - '; }?>
                                Subdireccion academica: <?php if($row['sign2']==1){ echo ' Autorizado'; }  elseif($row['sign2']==2){ echo 'Cancelado '; } else { echo ' En revision'; } ?></p></b>

                                <p>Cupo para <?php echo $row['capacidadmaxima']." profesores    -"; ?>
                                Profesores inscritos: <?php  foreach ($result as $cantidad)
                                {
                                if($cantidad['cantidad'] == $row['capacidadmaxima']){ echo $cantidad['cantidad']." curso lleno"; }
                                elseif ($cantidad['cantidad'] > 0) { echo $cantidad['cantidad']; }
                                else { echo 'No hay inscripciones'; }

                                 } ?> </p>
                                <h4><p align="right"> <u><b>Instructor (a): <?php echo $row['NombreCompletoInstructor']; ?> </b></u></p></h4>
                                <br>

                                <button  type="checkbox" class="btn btn-success fa fa-check-square-o" <?php
                                if($row['sign1'] == 0) {echo ' style="display: inline" ' ; }
                                else { echo ' style="display: none" '; } ?> onclick="firmar(<?php echo $row['NumeroCurso'];?>,<?php echo $row['NumeroCurso']; ?>);"> ¿Autorizar?
                                </button>

                                <button type="checkbox" class="btn btn-danger fa fa-ban"
                                    <?php if ( $row['sign1'] == 1 )
                                        {echo ' style="display: inline" ' ; } else { echo ' style="display: none" '; } ?>  onclick="cancelar(<?php echo $row['NumeroCurso'];?>,<?php echo $row['NumeroCurso'];?>);">
                                ¿Cancelar? </button>

                                 <button type="checkbox" class="btn btn-warning fa fa-arrow-left"
                                    <?php if ( $row['sign1'] == 2 ) {echo ' style="display: inline" ' ; } else { echo ' style="display: none" '; } ?>  onclick="revision(<?php echo $row['NumeroCurso'];?>,<?php echo $row['NumeroCurso'];?>);">
                                En revision </button>

                                <button class="btn btn-info fa fa-print" onclick="reportBy(<?php echo $row['NumeroCurso'];?>);"> Mostrar lista
                                </button>

                                <button class="btn btn-info fa fa-print" onclick="asisBy(<?php echo $row['NumeroCurso'];?>);"> Concentrado
                                </button>

                                <button  type="checkbox" class="btn btn-default fa fa-drivers-license"  data-toggle="modal" data-target="#inscripcion_modal" onclick="inscribir('<?php echo $row['NumeroCurso'];?>');"> Inscribir
                                </button>

                                <!--<button type="checkbox" id="bteditar" class="btn btn-success fa fa-pencil" data-toggle="modal" data-target="#editar_modal" > Editar contenido
                                </button> -->


                        </div>
                </div>
            </div>
         <?php }
       }
       else{

       ?>
   <div class="container">
    <table class="table table-striped table-responsive table-bordered" id="tabla">
        <thead> <tr class="info"> <?php getheaders($table); ?> </tr>  </thead>
        <tbody>
            <?php

                if($table == "infoescuela"){
                  $list = querySelect(SQL::$INFO_ITA);
                }
                elseif($table == "carrera"){
                  $list = querySelect(SQL::$SELECT_CARRERA);
                }
                elseif($table == "jefedepartamento"){
                  $list = querySelect(SQL::$SELECT_JEFE);
                }
                elseif ($table == "profesor") {
                  $list = querySelect(SQL::$SELECT_PROFE_SU);
                }
                elseif ($table == "inscripcion") {
                  $list = querySelect(SQL::$INSCRIPCION_SU);
                }
                else{
                $list = querySelect(SQL::$SELECCIONA_TODO." ".$table);
                }
                $i = 0;
                foreach($list as $row) {   ?>
                    <tr <?php if(isset($row['ispublic'])){
                                 if($row['ispublic']==1){ echo "class='success'";}
                                 else {echo "class='warning'";}
                           } ?> >

                        <?php $flag = true;
                        foreach ($row as $col) {
                            if($flag) { ?>
                        <td> <?php echo $col; ?> </td>
                                 <?php $flag = false; } else { $flag=true;} }  ?>
                    </tr> <?php $i++; }  ?>
        </tbody>
    </table>
  </div>
 <?php  } } ?>
<!-- Fin Tabla Curso ****************************************************************************************************************-->
<!-- Inicio Tabla Inscripcion ****************************************************************************************************************-->
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


  <script>
  function infoCurso(numeroCurso) {
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
        document.querySelector('#NombreCompletoPresiAcad').value = data.NombreCompletoPresiAcad;
        document.querySelector('#NombreCompletoJefeDepto').value = data.NombreCompletoJefeDepto;
        document.querySelector('#IdDepartamentoDe').value = data.NombreDepartamento;
        document.querySelector('#NombreCurso').value = data.NombreCurso;
        document.querySelector('#ObjetivoCurso').value = data.ObjetivoCurso;
        document.querySelector('#NumeroCurso').value = data.NumeroCurso;
        document.querySelector('#TipoCurso').value = data.TipoCurso;
        document.querySelector('#NombreCompletoInstructor').value = data.NombreCompletoInstructor;
        document.querySelector('#AulaPropuesta').value = data.AulaPropuesta;
        document.querySelector('#Turno').value = data.Turno;
        document.querySelector('#FechaLimite').value = data.FechaLimite;
        document.querySelector('#HoraInicioCurso').value = data.HoraInicioCurso;
        document.querySelector('#HoraFinCurso').value = data.HoraFinCurso;
        document.querySelector('#FechaInicioCurso').value = data.FechaInicioCurso;
        document.querySelector('#FechaFinCurso').value = data.FechaFinCurso;
        document.querySelector('#capacidadmaxima').value = data.capacidadmaxima;
        document.querySelector('#PeriodoCurso').value = data.PeriodoCurso;
      }
    };
    request.open('GET', 'api.php?oper=getInfoCurso&numeroCurso='  + numeroCurso, true);
    request.send();
  }

</script>
