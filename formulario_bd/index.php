

<form action = "" method="post">
		
		<p><label>id </label>
		<input type = "number" name="id" placeholder="Ingresar para modificar o eliminar"></p>	

		<p><label>nombre </label>
		<input type = "text" name="nombre" placeholder="Ingresar Nombre"></p>

		<p><label>estado </label>
		<input type = "number" name="estado" placeholder="Ingresar Estado"></p>


		<p><label>fecha</label>
		<input type="date" name="fecha" placeholder="Ingresar Fecha"></p>
		<p><label> accion </label>
		<select name="opcion" id="qsy">
			<option value="registrar">registrar</option>
			<option value="modificar">modificar</option>
			<option value="eliminar">eliminar</option>
		</select></p>


		<p><input type="submit" name="boton" value="guardar">
		<br>
		<br>	
<?php 
	include("connect.php");
		$opcion = $_POST['opcion'];
		$nombre = $_POST['nombre'];
		$estado = $_POST['estado'];
		$fecha = $_POST['fecha'];
		$iD = $_POST['id'];

		if ($opcion =='registrar') {
			
			
			if ($nombre != "" && $estado >= 0) {

				$sql = "INSERT INTO `formulario` (`id`, `nombre`, `estado`, `fecha_actualizacion`) VALUES (NULL, '$nombre', '$estado', '$fecha')";

				$mysqli->query($sql);
				
			}
		}
			if ($opcion == 'modificar') {
				
				echo "entro en la opcion modificar";	
				echo "<br>";
			
			
			
				$sqlm = "UPDATE `formulario` SET  `nombre` = '$nombre','estado'='$estado','fecha_actualizacion'='$fecha' 
				WHERE 'formulario'.'id'='$iD'";

				echo "UPDATE `formulario` SET  `nombre` = '$nombre','estado'='$estado','fecha_actualizacion'='$fecha' 
				WHERE 'formulario'.'id'='$iD' <br> <br>";

				$mysqli->query($sqlm)or die ('no esta conectando el objeto  $mysqli');
			}



?> 
