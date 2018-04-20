<?php
$log = fopen("log.txt","w");
$txt = "tet";
fwrite($log,$txt);
fclose($log); 
?>