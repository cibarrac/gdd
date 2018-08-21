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
  function evaluate_cursos($table,$NumeroCurso , $IdJefeDepartamento)
  {
        if($table=="curso") {
      ?>
    

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
                $list = querySelect(SQL::$CURSOS_POR_CARRERA." '%".$idCarreraJefeDepto."%') ");
                 foreach($list as $row) { ?>

                    
                        <div class="col-md-6 ">
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
                                <br><button class="btn btn-info fa fa-print" onclick="reportBy(<?php echo $row['NumeroCurso'];?>);"> Imprimir lista
                                </button>
                                <button  type="checkbox" class="btn btn-default fa fa-drivers-license"  data-toggle="modal" data-target="#inscripcion_modal" onclick="inscribir('<?php echo $row['NumeroCurso'];?>');"> Inscribir
                                </button>

                                <button type="checkbox" class="btn btn-success fa fa-pencil" data-toggle="modal" data-target="#editar_modal" onclick="infoCurso('<?php echo $row['NumeroCurso'];?>');" > Editar contenido  
                                </button>
                                
                                
                                </div>
                            </div>
                        </div>
                   <?php }  }
                
            else{
            
        ?>
        
        <table class="table table-hover table-striped table-responsive" id="tabla">
     <thead>
        <tr>
          <?php getheaders($table);
          ?>

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

 <?php  } }?>
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

