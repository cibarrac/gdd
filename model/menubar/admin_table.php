
<?php
 function evaluate_cursos($table,$NumeroCurso)
 {
       if($table=="curso") {
     ?>

    <button  type="checkbox" class="btn btn-warning fa fa-check-square-o" onclick="firmar(<?php echo $NumeroCurso;?>,<?php echo $NumeroCurso;?>);">
    </button>

    <button class="btn btn-info fa fa-print" onclick="reportBy(<?php echo $NumeroCurso;?>);">
    </button>

<?php
/*
    //En esta parte se pondria el evento click, que asociará el id del curso, obtendrá los datos y los enviara a
    //la vista _InscripcionesView.php
*/
}

 }
 

?>



<?php
/**
 *



 */


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
