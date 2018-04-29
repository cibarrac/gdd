<?php
if (gethostname()=="C") {
    include "sec/login/loginheader.php";
    
}

include 'bs/QueryService.php';
include_once 'common.php';
//include_once 'firmar.php';
include "model/Modal.php";
include 'conn.php';
include 'form.php';
//include 'Table_SU.php';

 /**
  * Se valida si se manda a crear la vista
  */
$contentView = "";
if(isset($_GET['view'])){
    $contentView = $_GET['view'];
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bienvenido <?php echo $_SESSION['username'];?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Bootstrap -->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="assets/js/jquery-1.11.3.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="assets/js/bootstrap.js"></script>


 <script type="text/javascript" src="assets/main.js"></script>
    </head>

 <body>

  <?php

//include "navbar_admin.php";
     if(isset($_SESSION['username'])) {

      $role = ismenu();
     include "views/menubar/navbar_".$role.".php";

  }
  else {
    include "views/menubar/navbar_su.php";
  }
  ?>
   <div class="container-fluid">



  <!-- Seccion 2 . Aqui cada que se da click en el navbar se incrusta el
  contenido html del archivo php asociado al click

  select NumeroCurso, NombreProfesorInscrito, RFCProfesor from Inscripcion, Profesor where NombreProfesorInscrito = concat(NombreProfesor,' ',ApellidoPaternoProfesor,' ',ApellidoMaternoProfesor) and NumeroCurso= '4.2';


// consulta para asociar el usuario con el rol


select * from members inner join JefeDepartamento on IdJefeDepartamento = idRole;


-->
     <div id="content">
           <?php
           if(isset($_GET['view'])) {

             $role = ismenu();
             if( $role == 'su')
             {
                include 'model/su_table.php';
                createTable($contentView);
             }
             elseif ($role == 'user')
             {
               include 'model/user_table.php';
               createTable($contentView);
             }
             elseif ($role == 'admin')
             {
               include 'model/admin_table.php';
               createTable($contentView);
             }
             elseif($role == 'boss')
             {
               include 'model/boss_table.php';
               createTable($contentView);
             }

          //  gen_models();
          // createView($contentView);

          }
           else {

             // include 'generate.php';
             //  gen_models();


             //   $modal = new Modal('btn1','Tabla','_Curso','Cargar Profesor');
           //     $modal->getContent();

              //  createTable('cursos');



           }
           ?>
         </div>

  </div>

  </body>

  <?php
 include "views/buttonfloat.php";
 include "views/buttonfloat_res.php";

  ?>

</html>
