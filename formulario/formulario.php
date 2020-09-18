<!DOCTYPE html>
<html>
<head> 	
<title>formulario en php </title>


</head>
<body>
<form action = "formulario.php" method="post">

		<p><label>Titulo: </label></p>
		<input type = "text" name="nombre">

		<p><label>Autor: </label></p>
		<input type = "text" name="autor">

		<p><label>Editorial:</label></p>
		<input type="text" name="edit">


		<p><label>Año:</label></p>
		<input type="number" name="año">


		<p><label>Descripcion:</label></p>
		<input type="text" name="descrip">



		<p><input type="submit" name="boton">
		<br>
		<br>	


		<?php	

			$titulo = $_POST['nombre'];

			$autor = $_POST['autor'];

			$editorial = $_POST['edit'];

			$año = $_POST['año'];
			
			$descripcion = $_POST['descrip'];
			

            
			echo "El titulo es :".$titulo."<br>";

			echo "El autor es: ".$autor."<br>";

			echo "La editorial es: ".$editorial. "<br>";

			echo "El año es: ".$año. "<br>";

			echo "La descripcion es: ".$descripcion. "<br>";
			
			?>
		

</form>			

</body>


</html>