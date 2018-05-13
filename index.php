<?php
include_once 'bs/QueryService.php';
include_once 'model/common/common.php';
include_once "model/common/Modal.php";
include_once 'model/common/form.php';
if (gethostname()=="localhost.localdomain") {
            include "sec/login/loginheader.php"; }
$pathModel = "model/menubar/";
$contentView = ""; 
if(isset($_GET['view'])){  $contentView = $_GET['view']; } ?>
<!DOCTYPE html>
<html lang="en"> <head> <title> Bienvenido <?php 
    if (isset($_SESSION['username'])) { echo $_SESSION['username']; } ?></title>
        <meta charset="utf-8">
        <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <script src="assets/js/jquery-1.11.3.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/main.js"></script>
</head> <body>
  <?php if(isset($_SESSION['username'])) {
         $role = ismenu();
         include "views/menubar/navbar_".$role.".php";
    } else  { include "views/menubar/navbar_su.php"; }
  ?>
<div class="container-fluid">
          <div id="content">
           <?php if(isset($_GET['view'])) {
                      $role = ismenu();
                    if( $role == 'su') {  include $pathModel.'su_table.php'; createTable($contentView);   }
                    elseif ($role == 'user'){ include $pathModel.'user_table.php';createTable($contentView);  }
                    elseif ($role == 'admin') {  include $pathModel.'admin_table.php';createTable($contentView); }
                    elseif($role == 'boss') {    include $pathModel.'boss_table.php';  createTable($contentView);
             }
          } ?>
         </div> </div>
 </body>
  <?php include "assets/buttonfloat.php"; include "assets/buttonfloat_res.php"; ?>
</html>
