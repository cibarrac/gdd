<?php
include 'AbstractDAO.php';

function querySelect($sql) {
    $lista;
    $conn = AbstractDAO::getConnect();
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) { 
               $lista[] = $row;        
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    return $lista;
}
function queryInsert($param) {
    ;
}