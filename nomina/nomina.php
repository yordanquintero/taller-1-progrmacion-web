
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Nominas</h1>
	<form action="procesar.php" method="POST">

		<label>Nombre: </label>
		<input type="text" name="nombre" required>
		
		<label>dias: </label>
		<input type="number" name="dias">
		<br><br>
		<label>Salario: </label>
		<input type="number" name="salario">
		
		<label>Deudas: </label>
		<input type="number" name="deudas">
		<br><br>
		<label>auxilio de trasporte: </label>
		<input type="number" name="auxilio">
		
		<br><br>
		<input type="submit" value="Calcular">
	</form>
</body>
</html>