


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../dist/includes/dbcon.php');
		$id_opcion = $_POST['id_opcion'];
	$id_pregunta = $_POST['id_pregunta'];
		$id_examen = $_POST['id_examen'];
		$descripcion_opcion = $_POST['descripcion_opcion'];
		$id_temporada = $_POST['id_temporada'];
$id_curso = $_POST['id_curso'];
	$correcta = $_POST['correcta'];
	mysqli_query($con,"update opciones set descripcion_opcion='$descripcion_opcion',correcta='$correcta' where id_opcion='$id_opcion'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert('opcion actualizada correctamente!');</script>";
  echo "<script>document.location='opciones_agregar_docente.php?id_pregunta=$id_pregunta&id_examen=$id_examen&id_temporada=$id_temporada&id_curso=$id_curso'</script>";
	


?>
