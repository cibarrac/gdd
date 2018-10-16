

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

  <link href="../css/bootstrap.css" rel="stylesheet" media="screen">

  <link href="../css/main.css" rel="stylesheet" media="screen">
  <div class="col-lg-offset-4" >

    <img  src="../../assets/logo/23.png" height="210"  >

  </div>
</head>



<body style="background-color:#3F729B;">

  <div class="container">





    <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">



      <h2 class="form-signup-heading"> </h2>







      <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Nombre" > <!--Inputs que ya estaban (funciona) -->

      <input type="text" class="form-control" name="NombreProfesor"  id="NombreProfesor" placeholder="Nombre Profesor" >

      <input type="text" class="form-control" name="ApellidoPaternoProfesor" id="ApellidoPaternoProfesor"  placeholder="Apellido paterno">

      <input type="text" class="form-control" name="ApellidoMaternoProfesor" id="ApellidoMaternoProfesor"placeholder="Apellido materno" >

      <input type="text" class="form-control" name="RFCProfesor" placeholder="Registro federal (rfc)"  >

      <input type="text" class="form-control" name="NumeroTelefonoProfesor" id="NumeroTelefonoProfesor" placeholder="Numero de telefono:">

      <input type="text" class="form-control" name="NumeroTarjetaProfesor" id="NumeroTarjetaProfesor"placeholder="Numero de tarjeta" >


      <br>
      <input name="email" id="email" type="text" class="form-control" placeholder="Correo electronico"> <!--Inputs que ya estaban (funciona) -->
      <br>
      <input name="password1" id="password1" type="password" class="form-control" placeholder="Contraseña"><!--Inputs que ya estaban (funciona) -->
      <input name="password2" id="password2" type="password" class="form-control" placeholder="Repite la contraseña"><!--Inputs que ya estaban (funciona) -->
      <br>

      <input type="number" id="verified" name="verified" value="1" hidden>


      <div class="col-md-5">

        <button   name="Submit" id="submit" class="btn btn-success   btn-block" type="submit">Regístrate</button>

      </div>

      <div class="col-md-5">

        <a href="main_login.php"  class="btn btn-danger "> Regresar  </a>


      </div>

      <div id="message"> </div>

    </form>

















  </div> <!-- /container -->



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  <script src="//code.jquery.com/jquery.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->

  <script type="text/javascript" src="js/bootstrap.js"></script>



  <script src="js/signup.js"></script>





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
