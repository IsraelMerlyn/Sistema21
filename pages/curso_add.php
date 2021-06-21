<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$nombre_curso = $_POST['nombre_curso'];
	$descripcion_curso = $_POST['descripcion_curso'];

	$id_temporada = $_POST['id_temporada'];



		mysqli_query($con,"INSERT INTO curso(nombre_curso,descripcion_curso,estado_curso,id_temporada)
				VALUES('$nombre_curso','$descripcion_curso','abierto','$id_temporada')")or die(mysqli_error($con));

			
			echo "<script>document.location='curso.php?id_temporada=$id_temporada'</script>";


		




?>
