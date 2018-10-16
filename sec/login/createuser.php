<?php



require 'includes/functions.php';

include_once 'config.php';



//Pull username, generate new ID and hash password

$newid = uniqid(rand(), false);

$newuser = $_POST['newuser'];

$newpw = password_hash($_POST['password1'], PASSWORD_DEFAULT);

$pw1 = $_POST['password1'];

$pw2 = $_POST['password2'];

$name = $_POST['NombreProfesor'];

$app = $_POST['ApellidoPaternoProfesor'];

$amp = $_POST['ApellidoMaternoProfesor'];

$rfc = $_POST['RFCProfesor'];

$phone = $_POST['NumeroTelefonoProfesor'];

$card = $_POST['NumeroTarjetaProfesor'];



    //Enables moderator verification (overrides user self-verification emails)

if (isset($admin_email)) {

      $newemail = $admin_email;

    }

    else {

          $newemail = $_POST['email'];

         }

//Validation rules

if ($pw1 != $pw2) { echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los campos de contraseña deben coincidir</div><div id="returnVal" style="display:none;">false</div>';



} elseif (strlen($pw1) < 4) {



    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La contraseña debe tener al menos 4 caracteres</div><div id="returnVal" style="display:none;">false</div>';



} elseif (!filter_var($newemail, FILTER_VALIDATE_EMAIL) == true) {



    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Debe proporcionar una dirección de correo electrónico válida</div><div id="returnVal" style="display:none;">false</div>';



} else {

    //Validation passed

    if (isset($_POST['newuser']) && !empty(str_replace(' ', '', $_POST['newuser']))  && isset($_POST['password1'])  && !empty(str_replace(' ', '', $_POST['password1'])) ) {



        //Tries inserting into database and add response to variable



        $a = new NewUserForm;



        $response = $a->createUser($usr,$newuser, $newid, $newemail, $newpw,$name,$app,$amp,$rfc,$phone,$card);



        //Success

        if ($response == 'true') {



            echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'. $signupthanks .'</div><div id="returnVal" style="display:none;">true</div>';



            //Send verification email

            //$m = new MailSender;

            //$m->sendMail($newemail, $newuser, $newid, 'Verify');



        } else {

            //Failure

            mySqlErrors($response);



        }

    } else {

        //Validation error from empty form variables

        echo 'Se ha producido un error en el formulario ... inténtalo de nuevo.';

    }

}


?>
