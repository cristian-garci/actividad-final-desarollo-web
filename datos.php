<?php
 	
	include 'coneccion.php';

	 $res = $conexion->query('SELECT * FROM datos_pagina');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./style/datos.css">
	<title>datos</title>
</head>

<body>
	<!-- se crea Tabla para mostrar los datos -->
<h1>datos de tu solicitud</h1>
	<table>
		<thead>
			<tr>
				<th>nombre </th>
				<th>numero celular</th>
				<th>correo</th>
				<th>servicio que solicita</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = $res->fetch_array(MYSQLI_ASSOC)) {  ?>
				<tr>
					<td><?php echo $row['nombreyapellido'] ?></td>
					<td><?php echo $row['celular'] ?></td>
					<td><?php echo $row['correo'] ?></td>
					<td><?php echo $row['solicita_servico'] ?></td>

				</tr>
			<?php } ?>
		</tbody>
	</table>


</body>
</html>