<?php 
include "../bs/QueryService.php";

function gen_models()
{
$out = "";
$tablas = querySelect("show tables");

foreach($tablas as $row){ 
         $out .= "class ".$row[0]." { <br>";          
         $campos = querySelect("describe ".$row[0]);
            foreach ($campos as $r){ 
                $out .= "private $".$r[0].";  <br>";
                }
                $out .= 'public function __GET($k){ return $this->$k; }
                     public function __SET($k, $v){ return $this->$k = $v; }
                } '; $out.= "<br> <br>";               
            }
return $out;   
}
function truncateDatabase() {
    $out = "SET FOREIGN_KEY_CHECKS=0  <br>";
    $tables = querySelect("show tables");
    foreach ($tables as $table) {
            
        $out.=" TRUNCATE ".$table[0] .";  <br>";
        
    } return $out . " SET FOREIGN_KEY_CHECKS=1;  <br>  <br> ";
}
echo  truncateDatabase();
echo gen_models();
