<?php

require 'includes/functions.php';
include_once 'config.php';


function register($newuser ,$pw1 , $pw2, $email){


    //Pull username, generate new ID and hash password
    $newid = uniqid(rand(), false);
    //$newuser = $_POST['newuser'];
    $newpw = password_hash($pw2, PASSWORD_DEFAULT);
    //$pw1 = $_POST['password1'];
    //$pw2 = $_POST['password2'];
    //Enables moderator verification (overrides user self-verification emails)
    if (isset($admin_email)) {
          $newemail = $admin_email;
        }
        else {
              $newemail = $email;
             }
    //Validation rules
    if ($pw1 != $pw2) { echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password fields must match1</div><div id="returnVal" style="display:none;">false</div>';

    } elseif (strlen($pw1) < 4) {

        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password must be at least 4 characters1</div><div id="returnVal" style="display:none;">false</div>';

    } elseif (!filter_var($newemail, FILTER_VALIDATE_EMAIL) == true) {

        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Must provide a valid email address1</div><div id="returnVal" style="display:none;">false</div>';

    } else {
        //Validation passed
        if (isset($newuser) && !empty(str_replace(' ', '', $_POST['newuser']))  && isset($pw1)  && !empty(str_replace(' ', '', $_POST['password1'])) ) {

            //Tries inserting into database and add response to variable

            $a = new NewUserForm;

            $response = $a->createUser($newuser, $newid, $newemail, $newpw, $newpw);

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
            echo 'An error occurred on the form... try again1';
        }
    }
}
?>
