<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_examen = $_POST['id_examen'];
	$id_pregunta = $_POST['id_pregunta'];

	$descripcion_opcion = $_POST['descripcion_opcion'];
	$correcta = $_POST['correcta'];

		$id_temporada = $_POST['id_temporada'];
$id_curso = $_POST['id_curso'];


		
	




			mysqli_query($con,"INSERT INTO opciones(descripcion_opcion,id_pregunta,id_examen,correcta)
				VALUES('$descripcion_opcion','$id_pregunta','$id_examen','$correcta')")or die(mysqli_error($con));

			
  echo "<script>document.location='opciones_agregar_docente.php?id_pregunta=$id_pregunta&id_examen=$id_examen&id_temporada=$id_temporada&id_curso=$id_curso'</script>";


	
	




   



?>
