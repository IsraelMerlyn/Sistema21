


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../dist/includes/dbcon.php');
	


		$fecha_inicio = $_POST['fecha_inicio'];
	$id_temporada = $_POST['id_temporada'];
$nombre_temporada = $_POST['nombre_temporada'];

	mysqli_query($con,"update temporada set nombre_temporada='$nombre_temporada',fecha_inicio='$fecha_inicio' where id_temporada='$id_temporada'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert('examen actualizada correctamente!');</script>";
  echo "<script>document.location='temporada.php'</script>";
	


?>
