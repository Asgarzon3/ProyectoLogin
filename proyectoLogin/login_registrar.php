<?php

include("conexion.php");


$usuario = $_POST["usuario"];
$pass 	= $_POST["pass"];

//Login
if (isset($_POST["btningresar"])){
	$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '$usuario' AND password = '$pass'");
	$nr = mysqli_num_rows($query);

	    if ($query) {
        $nr = mysqli_num_rows($query);

        if ($nr == 1) {
            echo "<script> alert('Bienvenido $usuario'); window.location='principal.html' </script>";
        } else {
            echo "<script> alert('Usuario no existe'); window.location='index.html' </script>";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conn);
    }
}


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];

//Registrar
if (isset($_POST["btnregistrar"])) {
    $sqlgrabar = "INSERT INTO login (nombre, apellido, correo, usuario, password) values ('$nombre', '$apellido', '$correo', '$usuario', '$pass')";

    if (mysqli_query($conn, $sqlgrabar)) {
        echo "<script> alert('Usuario registrado con éxito, $nombre'); window.location='index.html' </script>";
    } else {
        echo "Error en la consulta: " . mysqli_error($conn);
    }
}

?>