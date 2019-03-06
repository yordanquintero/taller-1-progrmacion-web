<?php

	//Incluir archivo con las funciones de la calculadora
	require_once("funciones.php");

	$numero_1 = $_POST["num_1"];
	$denominador_1= $_POST["den_1"];
	$numero_2 = $_POST["num_2"];
	$denominador_2 = $_POST["den_2"];

	$operacion = $_POST["operacion"];

	/* include puede incluar varias veces - include_once una sola vez - require incluye obligatoriamente y puede incluir varias veces - require_once obligatorio y una sola vez */
	
	switch ($operacion) {
		case '+': 
			sumar($numero_1,$denominador_1,$numero_2,$denominador_2);
			break;
		case '-':
			restar($numero_1,$denominador_1,$numero_2,$denominador_2);
			break;
		case '*':
			multiplicar($numero_1,$denominador_1,$numero_2,$denominador_2);
			break;
		case '/':
			dividir($numero_1,$denominador_1,$numero_2,$denominador_2);
			break;

		}

?>