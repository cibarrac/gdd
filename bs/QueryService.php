<?php
include 'AbstractDAO.php';
 
function querySelect($sql) {
     
    $lista = array();
    $conn = AbstractDAO::getConnect();
  if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_array()) { 
               $lista[] = $row;        
        }
    } else {
        echo "";
    }
    //$conn->close();
    return $lista;
}
function queryInsert($sql) {
    $conn = AbstractDAO::getConnect();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


function queryUpdate($sql) {
    
    $conn = AbstractDAO::getConnect();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo $sql;
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error updating record: " . $conn->error .$sql;
    }
}

function queryDelete($sql) {
     
    // Create connection
    $conn = AbstractDAO::getConnect();
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}