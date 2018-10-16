 <style>
   .thumbnail{border: 0px solid #f00; padding: 20px 22px;
-webkit-box-shadow: 20px 10px 26px 5px rgba(0,0,0,0.44);
-moz-box-shadow: 14px 10px 26px 5px rgba(0,0,0,0.44);
box-shadow: 10px 10px 26px 5px rgba(0,0,0,0.44);

height: 480px;
width: 650px;
    }
</style>

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


            <?php
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
                                <p>Fecha limite para inscribirse: <?php echo $row['FechaLimite']; ?> </p>

                                <p> <b>Desarrollo academico: <?php if($row['sign1']==1){ echo ' Autorizado  - '; }  elseif($row['sign1']==2){ echo 'Cancelado  - '; }  else { echo ' En revision  - '; }?>
                                Subdireccion academica: <?php if($row['sign2']==1){ echo ' Autorizado'; }  elseif($row['sign2']==2){ echo 'Cancelado'; } else { echo ' En revision'; } ?></p></b>

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
                                if($row['sign2'] == 0) {echo ' style="display: inline" ' ; }
                                else { echo ' style="display: none" '; } ?> onclick="firmar(<?php echo $row['NumeroCurso'];?>,<?php echo $row['NumeroCurso']; ?>);"> ¿Autorizar?
                                </button>

                                <button type="checkbox" class="btn btn-danger fa fa-ban"
                                    <?php if ($row['sign2'] == 1) {echo ' style="display: inline" ' ; } else { echo ' style="display: none" '; } ?>  onclick="cancelar(<?php echo $row['NumeroCurso'];?>,<?php echo $row['NumeroCurso'];?>);">
                                ¿Cancelar? </button>

                                 <button type="checkbox" class="btn btn-warning fa fa-arrow-left"
                                    <?php if ($row['sign2'] == 2) {echo ' style="display: inline" ' ; } else { echo ' style="display: none" '; } ?>  onclick="revision(<?php echo $row['NumeroCurso'];?>,<?php echo $row['NumeroCurso'];?>);">
                                En revision </button>

                                <button class="btn btn-info fa fa-print" onclick="reportBy(<?php echo $row['NumeroCurso'];?>);"> Mostrar lista
                                </button>


                        </div>
                </div>
            </div>








                <?php  }} ?>
