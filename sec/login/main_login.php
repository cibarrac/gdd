<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:../../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
    
    <div class="col-lg-offset-4" >
        <img  src="../../assets/logo/23.png" height="210"  >
    </div>
  
    
  </head>

  <body style="background-color:#3F729B;">
            
      
    <div class="container-fluid ">
        <div class="col-lg-12">
            <form class="form-signin" name="form1" method="post" action="checklogin.php">
                <h2 class="form-signin-heading"></h2>
                <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Nombre de usuario" >
                <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Contraseña">
         
                <label class="form-signin-heading">
                <input  type="checkbox"  value="remember-me"> Recordar
                </label>
        
                <button name="Submit" id="submit" class="btn btn-lg btn-info btn-block" type="submit">Iniciar</button>
                <a href="signup.php" name="Sign Up" id="signup" class="btn btn-lg btn-success btn-block" type="submit">Crear Cuenta</a>

                <div id="message"></div>
                </form>          
        </div>    
    </div>
   
     

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>

  </body>
</html>
