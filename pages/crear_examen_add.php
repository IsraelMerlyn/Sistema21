<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$tema_examen = $_POST['tema_examen'];
	$descripcion_examen = $_POST['descripcion_examen'];
	$id_curso = $_POST['id_curso'];


	$id_temporada = $_POST['id_temporada'];


		
	




			mysqli_query($con,"INSERT INTO examen(tema_examen,descripcion_examen,id_curso,id_temporada)
				VALUES('$tema_examen','$descripcion_examen','$id_curso','$id_temporada')")or die(mysqli_error($con));

			
			echo "<script>document.location='crear_examen_docente.php?id_temporada=$id_temporada'</script>";


	
	




   



?>
