<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$nombre_temporada = $_POST['nombre_temporada'];
	$fecha_inicio = $_POST['fecha_inicio'];
	$anio = $_POST['anio'];




		
	




			mysqli_query($con,"INSERT INTO temporada(nombre_temporada,fecha_inicio,anio,estado_temporada)
				VALUES('$nombre_temporada','$fecha_inicio','$anio','abierto')")or die(mysqli_error($con));

			
			echo "<script>document.location='temporada.php'</script>";


	
	




   



?>
