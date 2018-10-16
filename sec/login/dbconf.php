<?php

//DATABASE CONNECTION VARIABLES

$host = ""; // Host name

$username = ""; // Mysql username

$password = ""; // Mysql password

$db_name = ""; // Database name


switch (gethostname()) {

            case "C":    $host="localhost"; $username="root"; $password="root"; $db_name="gdd"; break;

            case "ANALISTA-DBA":  $host="localhost"; $username="root"; $password="X@viF10r3s"; $db_name="gdd"; break;

            case "mail.innsytech.com": $host="innsytech.com"; $username="devlab_gdd"; $password="Get7usa7";  $db_name="devlab_gdd"; break;

            default:     $host="localhost";  $username="root";  $password="Get7usa7";  $db_name="gdd";

        }



//DO NOT CHANGE BELOW THIS LINE UNLESS YOU CHANGE THE NAMES OF THE MEMBERS AND LOGINATTEMPTS TABLES



$tbl_prefix = ""; //***PLANNED FEATURE, LEAVE VALUE BLANK FOR NOW*** Prefix for all database tables

$tbl_members = $tbl_prefix."members";

$tbl_profesor = $tbl_prefix."profesor";

$tbl_attempts = $tbl_prefix."loginAttempts";
