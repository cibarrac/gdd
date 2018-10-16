<?php
class NewUserForm extends DbConn
{
    public function createUser($usr, $uid, $email, $pw, $newpw,$name,$app,$amp,$rfc,$phone,$card)
    {
        try {

            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("INSERT INTO ".$tbl_members." (id, username, password, email)
            VALUES (:id, :username, :password, :email)");
            $stmt->bindParam(':id', $uid);
            $stmt->bindParam(':username', $usr);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $pw);
            $stmt->execute();

            $err = '';



              $stmt2 = $db->conn->prepare("INSERT INTO profesor (NombreProfesor, ApellidoPaternoProfesor, ApellidoMaternoProfesor, RFCProfesor, NumeroTelefonoProfesor, NumeroTarjetaProfesor, CorreoProfesor)
              VALUES (:NombreProfesor, :ApellidoPaternoProfesor, :ApellidoMaternoProfesor, :RFCProfesor, :NumeroTelefonoProfesor, :NumeroTarjetaProfesor, :CorreoProfesor )");
              $stmt2->bindParam(':NombreProfesor', $name);
              $stmt2->bindParam(':ApellidoPaternoProfesor', $app);
              $stmt2->bindParam(':ApellidoMaternoProfesor', $amp);
              $stmt2->bindParam(':RFCProfesor', $rfc);
              $stmt2->bindParam(':NumeroTelefonoProfesor', $phone);
              $stmt2->bindParam(':NumeroTarjetaProfesor', $card);
              $stmt2->bindParam(':CorreoProfesor', $email);
              $stmt2->execute();

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }
        //Determines returned value ('true' or error code)
        if ($err == '') {

            $success = 'true';

        } else {

            $success = $err;

        };

        return $success;

    }
}
