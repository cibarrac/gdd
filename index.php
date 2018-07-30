
<?php
$PATH = "model/menubar/";
$contentView = ""; 
include_once 'bs/QueryService.php';
include_once 'model/common/common.php';
include_once "model/common/Modal.php";
include_once 'model/common/form.php';
include 'bs/SQL.php'; 

if (gethostname()=="localhost.localdomain") {
            include "sec/login/loginheader.php"; }
if(isset($_GET['view'])){  $contentView = $_GET['view']; } ?>
<!DOCTYPE html>

<html lang="en"> <head> <title> Bienvenido <?php 
    if (isset($_SESSION['username'])) { echo $_SESSION['username']; } ?></title>
        <meta charset="utf-8">
        
        <meta charset="utf-8">
        <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
         <script src="https://code.jquery.com/jquery-1.12.4.js" charset="utf-8"></script>
       
       <!-- <script src="assets/js/jquery-1.11.3.min.js"></script> -->
        <script src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/main.js"></script>
        
        
       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="assets/css/buttons.dataTables.css">
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js" charset="utf-8"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js" charset="utf-8"></script>
        
        
</head> <body>
  <?php if(isset($_SESSION['username'])) {
         $role = ismenu($_SESSION['username']);
         include "views/menubar/navbar_".$role.".php";
    } else  { include "views/menubar/navbar_su.php"; }
  ?>
<div class="container-fluid">
          <div id="content">
           <?php if(isset($_GET['view'])) {
                      $role = ismenu($_SESSION['username']);
                    if( $role == 'su')      {    include $PATH.'su_table.php'; createTable($contentView);   }
                    elseif ($role == 'user'){    include $PATH.'user_table.php';createTable($contentView);  }
                    elseif ($role == 'admin') {  include $PATH.'admin_table.php';createTable($contentView); }
                    elseif($role == 'boss') {    include $PATH.'boss_table.php';  createTable($contentView);
             }
          } ?>
         </div> </div>
 </body>
  <?php include "assets/buttonfloat.php"; include "assets/buttonfloat_res.php"; ?>
</html>
