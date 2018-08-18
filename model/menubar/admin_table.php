
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
                foreach($list as $row) { ?>

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
                                <h4><p align="right"> Instructor (a): <?php echo $row['NombreCompletoInstructor']; ?> </p></h4>
                                <p>Autorizado por desarrollo academico: <?php if($row['sign1']==1){ echo ' Si'; } else { echo ' No'; }?> </p>
                                <p>Autorizado por subdireccion academica: <?php if($row['sign2']==1){ echo ' Si'; } else { echo ' No'; } ?></p>
                                
                                <button  type="checkbox" class="btn btn-warning fa fa-check-square-o" onclick="firmar(<?php echo $row['NumeroCurso'];?>,<?php echo $row['NumeroCurso'];?>);"> Autorizar
                                </button>
                                <button class="btn btn-info fa fa-print" onclick="reportBy(<?php echo $row['NumeroCurso'];?>);"> Imprimir lista
                                </button>
                                
                                
                        </div>
                </div>
            </div>
        </div>    
  
  
          
                            
                            
       
       
                <?php  }} ?> 
   

