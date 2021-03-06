<?php
  session_start();

  if (isset($_SESSION['username'])) {
      session_start();
      session_destroy();
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    
    <link href="sec/css/main.css" rel="stylesheet" media="screen">
  </head>

  <body>
    <div class="container">
        <div class="col-md-7">
        
      <form class="form-signup" id="usersignup" name="usersignup" method="post" action="sec/login/createuser.php">
        
        <h2 class="form-signup-heading"> </h2>
        <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Usuario" autofocus>
        <input name="email" id="email" type="text" class="form-control" placeholder="Correo">
<br>
        <input name="password1" id="password1" type="password" class="form-control" placeholder="Contraseña">
        <input name="password2" id="password2" type="password" class="form-control" placeholder="Repite la contraseña">
         <br>
         <div class="col-md-5">
         <button  name="Submit" id="submit" class="btn btn-success   btn-block" type="submit">Regístrate</button>
 
         </div>
        
        <div id="message"></div>
      </form>
        </div>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="sec/login/js/bootstrap.js"></script>

    <script src="sec/login/js/signup.js"></script>


    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>

$( "#usersignup" ).validate({
  rules: {
	email: {
		email: true,
		required: true
	},
    password1: {
      required: true,
      minlength: 4
	},
    password2: {
      equalTo: "#password1"
    }
  }
});
</script>

  </body>
</html>

