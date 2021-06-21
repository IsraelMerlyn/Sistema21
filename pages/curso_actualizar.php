 <?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_curso = $_POST['id_curso'];
	$nombre_curso = $_POST['nombre_curso'];
	$descripcion_curso = $_POST['descripcion_curso'];

$id_temporada = $_POST['id_temporada'];


		///finzalizo encriptacion


	mysqli_query($con,"update curso set nombre_curso='$nombre_curso',descripcion_curso='$descripcion_curso'  where id_curso='$id_curso'")or die(mysqli_error());

			

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
	echo "<script>document.location='curso.php?id_temporada=$id_temporada'</script>";	

	




   







?>
