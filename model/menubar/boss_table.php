
 <?php
  function evaluate_cursos($table,$NumeroCurso , $IdJefeDepartamento)
  {
        if($table=="curso") {
      ?>
     <button class="btn btn-info fa fa-print" onclick="reportBy(<?php echo $NumeroCurso;?>);"> </button>
     <button  type="checkbox" class="btn btn-default fa fa-drivers-license"  data-toggle="modal" data-target="#inscripcion_modal" onclick="inscribir('<?php echo $NumeroCurso;?>');"></button>
   

<?php

}
 elseif($table=="jefedepartamento") { //Boton para editar el jefe de departamento
     ?>
         <button  type="checkbox" class="btn btn-info fa fa-edit" data-toggle="modal" data-target="#JefeDepto" onclick="editarBoss (<?php echo $IdJefeDepartamento;?>,<?php echo $IdJefeDepartamento;?>);"> </button>
     <?php
    
}

  }
  
?>



 <?php



 function getheaders($table) {
     
     $fields = querySelect("describe ".$table);
     echo "<th class='header'> Operacion</th>";	 
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

              <?php  $modal = new Modal('btn1',$view,$view,"Insertar ".$view);
              $modal->getContent();

              $_subscribe = new Modal('inscripcion_modal', 'Inscripción al curso', '_Inscripciones', 'Inscribir');
              $_subscribe->getContent(true);
              
              $_subscribe = new Modal('JefeDepto', 'Editar Jefe de departamento', '_JefedeptoBoss', 'editarBoss');
              $_subscribe->getContent(true);

              ?>
        </div>


        <br> <br>
        <table class="table table-hover table-striped table-responsive" id="tabla">
     <thead>
        <tr>
          <?php getheaders($table);
          ?>

        </tr>
     </thead>
     <tbody>


    <?php
    if($table == "curso")
    {
      $idCarreraJefeDepto = getIdDepartamentoJefe( $_SESSION['username'] );
      $list = querySelect(SQL::$CURSOS_POR_CARRERA." '%".$idCarreraJefeDepto."%' ");
    }
    
    elseif($table == "profesor")
    {
        $idJefeDepto = getIdJefe($_SESSION['username']);
        $list = querySelect(SQL::$PROFESORES_POR_JEFE." ".$idJefeDepto);
    }
    
     elseif($table == "inscripcion")
    {
        $idCarreraJefe = getIdCarreraJefe($_SESSION['username']);
        $list = querySelect(SQL::$INSCRIPCIONES_POR_JEFE." ".$idCarreraJefe);
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
                        <td> <?php evaluate_cursos($table,$row['NumeroCurso']); ?> </td>
                          
                        <?php $flag = true;
                        foreach ($row as $col) {
                            if($flag) { ?>
                        <td> <?php echo $col; ?> </td>
                                 <?php $flag = false; } else { $flag=true;} }  ?>                             
                    </tr> <?php $i++; }  ?>
            </tbody>
    </table>

<?php  } ?>
<script>

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

