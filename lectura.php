<?php
if(isset($_GET['nombre']) && isset($_GET['email'])) {
		$nombre = $_GET['nombre'];
		$email = $_GET['email'];
		//echo "Hola $nombre, tienes $edad años!";
	
	header("Location: http://localhost:63342/QuintoPHP/registro.php?nombre=$nombre&email=$email");
}

