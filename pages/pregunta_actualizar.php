


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../dist/includes/dbcon.php');
	
	$id_pregunta = $_POST['id_pregunta'];
		$id_examen = $_POST['id_examen'];
		$titulo_pregunta = $_POST['titulo_pregunta'];
	$id_temporada = $_POST['id_temporada'];
$id_curso = $_POST['id_curso'];

	mysqli_query($con,"update pregunta set titulo_pregunta='$titulo_pregunta' where id_pregunta='$id_pregunta'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert('pregunta actualizada correctamente!');</script>";
  echo "<script>document.location='pregunta_agregar.php?id_examen=$id_examen&id_temporada=$id_temporada&id_curso=$id_curso'</script>";
	


?>
