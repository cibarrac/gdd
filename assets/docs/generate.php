<?php 


function gen_models()
{
$out = "";
include "conn";
$tablas = mysql_query("show tables");

if(mysql_num_rows($tablas)>0){
    while($row = mysql_fetch_array($tablas)){ 
     
         $out .= "class ".$row[0]." { <br>";
     

/**
 * Obtenemos una consulta de las tablas 
 * 
 */
            $campos = mysql_query("describe ".$row[0]);

            if(mysql_num_rows($campos)>0){
                while($r = mysql_fetch_array($campos)){ 
                $out .= "private $".$r[0].";  <br>";
                }}
                $out .= 'public function __GET($k){ return $this->$k; }
                     public function __SET($k, $v){ return $this->$k = $v; }
                } '; $out.= "<br> <br>";
                    
    }}
    /**
     * 
     * 
     */
return $out;
    
}


?>