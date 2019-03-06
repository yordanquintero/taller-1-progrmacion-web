<?php

$nombre = $_POST['nombre'];
$dias = $_POST['dias'];
$salario = $_POST['salario'];
$deudas = $_POST['deudas'];
$auxilio = $_POST['auxilio'];

	$r_salario = (($dias * $salario)+$auxilio)-$deudas;
	$pension = ($r_salario * 4.5)/100;
	$salud = ($r_salario * 4.5)/100;

	echo "Nombre: $nombre <br>";
	echo "dias: $dias <br>";
	echo "pension: $pension <br>";
	echo "salud: $salud <br>";
	echo "salario total: $r_salario <br>";









?>