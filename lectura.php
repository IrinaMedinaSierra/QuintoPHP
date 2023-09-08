<?php
	$mns="";

	    if ($_GET['nombre']) { //true o false
		    $nombre = $_GET['nombre'];
	    }else{
			$mns="<li>El nombre es Obligatorio</li>";
	    }
		if($_GET['email']) {
			$email = $_GET['email'];
		}else{
			$mns=$mns."<li>El email es obligatorio</li>";
		}
	//	echo "Hola $nombre, tu email es $email!";

		if ($mns!=""){
			header("Location:http://localhost:63342/Quinto/contacto.php?mensaje=$mns");
		}else {
			//funcion que permite enviar/llamar de una pagina a otra, y enviar datos
			header("Location:http://localhost:63342/Quinto/registro.php?nombre=$nombre&email=$email");
		}

//Explicación de los metodos de envio de datos desde el front al back

//	if(isset($_POST['enviar2'])) {
//		$apellidos = $_POST['apellidos'];
//		$altura = $_POST['altura'];
//		echo "Tu apellido es $apellidos y mides $altura";
//}


