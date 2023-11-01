<?php
//recopila los datos enviados 
	$nombre = $_POST['nombreyapellido'];
	$ncelular = $_POST['numerocelular'];
	$correo = $_POST['correo'];
	$datos = $_POST['tabla'];

	//se incluye la coneccion ala base de datos
	include 'coneccion.php';

//se crea elinsert y se ejecuta la query del insert
	$insert  = $conexion->query('INSERT INTO datos_pagina(nombreyapellido,celular,correo,solicita_servico) VALUES("'.$nombre.'","'.$ncelular.'","'.$correo.'","'.$datos.'")');
//se reirecciona lapagina 
	 header('Location: datos.php');

?>