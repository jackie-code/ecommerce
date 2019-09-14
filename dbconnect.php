
<?php
//default for localhost values
$host = "localhost";
$port = "3306";
$user = "root";
$pw = "root";
$dbname = "ecommerce";

// for PBCS server
if (gethostname() == "server.pbcs.us")
{
$host = "localhost";
$port = "3306";
$user = "jmartin";
$password = "codeschool1";
$database = "jmartin_ecommerce";
}

$connection_info = 
"mysql" 
.": host=" . $host
.":" . $port
. "; dbname=" . $dbname
;
 
$db = new PDO($connection_info, $user, $pw);











