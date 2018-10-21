<!DOCTYPE html>
<html lang="en"> <head> <title> Bienvenido  </title>
        <?php include 'assets/header.php'; ?>
</head> 
<body>
<?php
    include_once 'bs/QueryService.php';
    include_once 'model/common/common.php';
    include_once "model/common/Modal.php";
    include_once 'model/common/form.php';
    include 'bs/SQL.php';
    include "sec/login/loginheader.php";
    
    $contentView = "";
    $role = ismenu($_SESSION['username']);
    
    if(isset($_GET['view'])) {
              $contentView = $_GET['view'];
     }
      if(isset($_SESSION['username'])) {
         
         include "views/menubar/navbar_".$role.".php";
      } 
  ?>
      <div class="container-fluid">
        <div  class="row" id="content">
          <?php 
          if(isset($_GET['view'])) 
          { 
               include "model/menubar/".$role.'_table.php';  
                createTable($contentView);
          } ?>
    </div> 
  </div>
 </body>
</html>