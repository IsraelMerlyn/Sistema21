<?php
session_start();
include('../dist/includes/dbcon.php');
	

	$id_docente = $_POST['id_docente'];
	$id_curso = $_POST['id_curso'];
	$id_temporada = $_POST['id_temporada'];


	$query2=mysqli_query($con,"select * from asignar_curso where id_curso='$id_curso' and id_usuario='$id_docente' and id_temporada='$id_temporada'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('Este cursos ya fue asignado!');</script>";
  echo "<script>document.location='asignar_curso_docente_agg.php'</script>";
		}
		else
		{

			mysqli_query($con,"INSERT INTO asignar_curso(id_curso,id_usuario,id_temporada)
				VALUES('$id_curso','$id_docente','$id_temporada')")or die(mysqli_error($con));

			
  echo "<script>document.location='asignar_curso_docente_agg.php'</script>";


	}
		
?>
