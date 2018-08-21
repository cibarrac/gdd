 <?php
  function evaluate_cursos($table,$NumeroCurso)
  {
    if($table=="curso") {
      ?>

<?php
/*
     //En esta parte se pondria el evento click, que asociará el id del curso, obtendrá los datos y los enviara a
     //la vista _InscripcionesView.php
*/

    }
}
  

?>

<!-- Inicio Tabla Cusos ****************************************************************************************************************-->

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
        $table = $table[$view];  ?>
        <div class="col-md-3">
              <?php
                
                $_subscribe = new Modal('inscripcion_modal', 'Inscripción al curso', '_Inscripciones', 'Inscribir');
                $_subscribe->getContent(true);
                
                //$_edit = new Modal('editar_modal', 'Editar', '_Curso', 'Editar');
                //$_edit->getContent(true);
                
                $modalInsert = new Modal('btn1',$view,$view,"Insertar ".$view);
                $modalInsert->getContent();
              ?>
        </div>
        

       <br> <br>
       
       <?php  if($table == "curso")
       {
         $list = querySelect(SQL::$SELECCIONA_TODO." ".$table);
         
                foreach($list as $row) { 
                   $result = querySelect(SQL::$TOTAL_INSCRPCIONES." ". $row['NumeroCurso'] );
                 
                   
                    ?>
                            
                
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="thumbnail"  <?php
                            if($row['ispublic']==1){ echo "style= 'background-color: #b9f6ca;'" ;} 
                                 else {echo "style= 'background-color: #fff9c4;'";} ?> > 
                                
                                <div class="caption">
                                <h3><?php echo $row['NumeroCurso']." ".$row['NombreCurso'];?></h3>  
                                <h4>Objetivo:</h4>
                                <p><?php echo $row['ObjetivoCurso']; ?></p>
                                <p>Horario: de <?php echo $row['HoraInicioCurso']." a ".$row['HoraFinCurso'];?> <br>  Fecha: del <?php echo $row['FechaInicioCurso']." al ".$row['FechaFinCurso'];?></p>
                                <p>Autorizado por desarrollo academico: <?php if($row['sign1']==1){ echo ' Si'; } else { echo ' No'; }?> </p>
                                <p>Autorizado por subdireccion academica: <?php if($row['sign2']==1){ echo ' Si'; } else { echo ' No'; } ?></p>
                                <p>Cupo para <?php echo $row['capacidadmaxima']." profesores  -"; ?> 
                                Profesores inscritos: <?php  foreach ($result as $cantidad)
                                { 
                                if($cantidad['cantidad'] == $row['capacidadmaxima']){ echo $cantidad['cantidad']." curso lleno"; }
                                elseif ($cantidad['cantidad'] > 0) { echo $cantidad['cantidad']; }
                                else { echo 'No hay inscripciones'; }
                          
                                 } ?> </p>
                                <h4><p align="right"> Instructor (a): <?php echo $row['NombreCompletoInstructor']; ?> </p></h4>
                               
                                <button  type="checkbox" class="btn btn-warning fa fa-check-square-o" onclick="firmar(<?php echo $row['NumeroCurso'];?>,<?php echo $row['NumeroCurso'];?>);"> Autorizar
                                </button>
                                <button class="btn btn-info fa fa-print" onclick="reportBy(<?php echo $row['NumeroCurso'];?>);"> Imprimir lista
                                </button>
                                <button  type="checkbox" class="btn btn-default fa fa-drivers-license"  data-toggle="modal" data-target="#inscripcion_modal" onclick="inscribir('<?php echo $row['NumeroCurso'];?>');"> Inscribir
                                </button>

                                <button type="checkbox" class="btn btn-success fa fa-pencil" data-toggle="modal" data-target="#editar_modal"  > Editar contenido  
                                </button>
                                
                                
                        </div>
                </div>
            </div>
        </div> <?php }   
       }
       else{
       ?>
    <table class="table table-hover table-striped table-responsive" id="tabla">
        <thead> <tr> <?php getheaders($table); ?> </tr>  </thead>
        <tbody>
            <?php
                $list = querySelect(SQL::$SELECCIONA_TODO." ".$table);
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
 <?php  }} ?>
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
        document.querySelector('#NombreCompletoJefeDepto').value = data.NombreCompletoJefeDepto;
        document.querySelector('#IdDepartamentoDe').value = data.IdDepartamentoDe;
        document.querySelector('#DirigidoA').value = data.DirigidoA;
        document.querySelector('#NombreCursoInt').value = data.NombreCurso;
        document.querySelector('#ObjetivoCurso').value = data.ObjetivoCurso;
        document.querySelector('#TipoCursoInt').value = data.TipoCurso;
        document.querySelector('#NumeroCursoInt').value = data.NumeroCurso;
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

