


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../dist/includes/dbcon.php');
	

		$id_examen = $_POST['id_examen'];
		$tema_examen = $_POST['tema_examen'];
		$descripcion_examen = $_POST['descripcion_examen'];
	$id_temporada = $_POST['id_temporada'];
$id_curso = $_POST['id_curso'];

	mysqli_query($con,"update examen set tema_examen='$tema_examen',descripcion_examen='$descripcion_examen' where id_examen='$id_examen'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert('examen actualizada correctamente!');</script>";
  echo "<script>document.location='lista_examenes_curso.php?id_curso=$id_curso&id_temporada=$id_temporada'</script>";
	


?>
