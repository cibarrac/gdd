<?php 

function gen_models()
{
$out = "";
include "QueryService.php";
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
echo gen_models();
