<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dbprueba";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
		die("No conecta" .mysqli_connect_error());
}

?>