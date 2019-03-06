<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calculadora fracciones</title>
</head>
<body>

	<h1>Calculadora fracciones Cotecnova</h1>

	<!-- GET POST DELETE UPDATE -->
	

	<form action="calculadora.php" method="POST">
		<label>Numero 1: </label>
		<input type="number" name="num_1" required="">
		<br><br>

		<label>Numero 2: </label>
		<input type="number" name="den_1" required="">

		<br><br>
		<label>Operación: </label>
		<select name="operacion">
			<option value="+">Sumar</option>
			<option value="-">Restar</option>
			<option value="*">Multiplicar</option>
			<option value="/">División</option>
			<option value="**">Potencia</option>
		</select>
		<br> <br>
		
		<label>Numero 3:</label>
		<input type="number" name="num_2" required="">
		<br><br>

		<label>Numero 4:</label>
		<input type="number" name="den_2" required="">
		<br><br>
		
		<input type="submit" value="Calcular">
		<br>
	</form>

	<br><br>

	<?php
		if(isset($_POST["num_1"]) && isset($_POST["den_1"]) && isset($_POST["num_2"]) && isset($_POST["den_2"]) && isset($_POST["operacion"])){

			require_once("procesar.php");

		}
    ?>
</body>
</html>