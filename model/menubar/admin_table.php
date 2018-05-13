
<?php
 function evaluate_cursos($table,$NumeroCurso)
 {
       if($table=="curso") {
     ?>

    <button  type="checkbox" class="btn btn-warning fa fa-edit" onclick="firmar(<?php echo $NumeroCurso;?>,<?php echo $NumeroCurso;?>);">
    </button>

<?php
/*
    //En esta parte se pondria el evento click, que asociará el id del curso, obtendrá los datos y los enviara a
    //la vista _InscripcionesView.php
*/
}

 }
 function evaluate_profile() {


 }

?>



<?php
/**
 *



 */


function getheaders($table)
{        $out = array();
       $campos = mysql_query("describe ".$table);

                   if(mysql_num_rows($campos)>0){
                       while($r = mysql_fetch_array($campos)){
                       $out [] = $r[0];
                       }}

       $header = $out;
       foreach ($header as $value) { ?>
                       <th class="header"> <?php echo  $value;?></th>
               <?php }?>
<?php
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
   if(mysql_num_rows($list)>0){
            while($row = mysql_fetch_array($list)){   ?>
                  <tr <?php
                  if(isset($row['ispublic'])){
                        if($row['ispublic']==1){ echo "class='success'";} else {echo "class='warning'";}
                  }


                  ?> >
                  <?php
                  $flag = true;
                  foreach ($row as $col) {
                                //print_r($row);
                               if($flag) { ?>

                                       <td>
                                       <?php
                                          echo $col; ?>
                                       </td>




                                <?php $flag = false; } else { $flag=true;}

                               }  ?>
                               <td>
                                   <?php
                                         evaluate_cursos($table,$row['NumeroCurso']);
                                         //$modal = new Modal('btn1','Tabla',$contentView,'?');
                                         //$modal->getContent();?>

                                       </td>
               </tr>
               <?php $i++; }  } else {

                       ?>
                               <tr> <td colspan="6">No se encontraron resultados <?php echo $table; ?> </td> </tr>
                       <?php  } ?>


           </tbody>
   </table>

<?php  } ?>
