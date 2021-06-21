<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_alumno = $_POST['id_alumno'];
	$id_curso = $_POST['id_curso'];

	$id_temporada = $_POST['id_temporada'];





		
	
	$query2=mysqli_query($con,"select * from matricular_curso_alumno where id_curso='$id_curso' and id_usuario='$id_alumno' and id_temporada='$id_temporada'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('Alumno Ya esta matriculado no puede matricularse doble!');</script>";
  echo "<script>document.location='matricular_curso_alumno.php?id_curso=$id_curso&id_temporada=$id_temporada'</script>";
		}
		else
		{




			mysqli_query($con,"INSERT INTO matricular_curso_alumno(id_curso,id_usuario)
				VALUES('$id_curso','$id_alumno')")or die(mysqli_error($con));

			
  echo "<script>document.location='matricular_curso_alumno.php?id_curso=$id_curso&id_temporada=$id_temporada'</script>";


	}
	




   



?>
