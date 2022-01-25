<?php

include("config.php");


$mysqli = @new mysqli($dbhost, $dbuname, $dbpass,$dbname);
	mysqli_select_db($mysqli,$dbname);



?>

