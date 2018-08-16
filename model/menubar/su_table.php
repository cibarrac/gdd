 <?php
  function evaluate_cursos($table,$NumeroCurso)
  {
    if($table=="curso") {
      ?>
     <button class="btn btn-info fa fa-print" onclick="reportBy(<?php echo $NumeroCurso;?>);">
     </button>

     <button  type="checkbox" class="btn btn-warning fa fa-check-square-o" onclick="firmar(<?php echo $NumeroCurso;?>,<?php echo $NumeroCurso;?>);">
     </button>

    <button  type="checkbox" class="btn btn-default fa fa-drivers-license"  data-toggle="modal" data-target="#inscripcion_modal" onclick="inscribir('<?php echo $NumeroCurso;?>');">
     </button>

    <button type="checkbox" class="btn btn-success fa fa-pencil" data-toggle="modal" data-target="#editar_modal" onclick="infoCurso('<?php echo $NumeroCurso;?>');" >  
    </button>

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
                $modalInsert = new Modal('btn1',$view,$view,"Insertar ".$view);
                $modalInsert->getContent();
                $_subscribe = new Modal('inscripcion_modal', 'Inscripción al curso', '_Inscripciones', 'Inscribir');
                $_subscribe->getContent(true);
                
                $_edit = new Modal('editar_modal', 'Editar', '_Curso', 'Editar');
                $_edit->getContent(true);
              ?>
        </div>
        

       <br> <br>
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
<?php  } ?>
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

