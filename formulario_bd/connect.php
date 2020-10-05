
<?php
	

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'fernando_colque';

	$mysqli = new mysqli($host, $user, $pass, $db);

	if ($mysqli->connect_error){

		die('Error de conexion (' .$mysqli->connect_error . ') '.$mysqli->connect_error);
	}

	 /*($_POST){
		$nombre = $_POST['nombre'];
		$estado = $_POST['estado'];
		$fecha = $_POST['fecha'];


		$sql = "INSERT INTO `formulario` (`id`, `nombre`, `estado`, `fecha_actualizacion`) VALUES (NULL, '$nombre', '$estado', '$fecha')";

		$mysqli->query($sql);
	}
	*/

 ?>

