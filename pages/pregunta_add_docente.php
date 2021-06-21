<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_examen = $_POST['id_examen'];
	$titulo_pregunta = $_POST['titulo_pregunta'];
	$id_temporada = $_POST['id_temporada'];
$id_curso = $_POST['id_curso'];

 $query=mysqli_query($con,"select * from pregunta  where id_examen='$id_examen'")or die(mysqli_error());
    $numero=0;
    while($row=mysqli_fetch_array($query)){
    	    $numero=$row['numero'];
    }

$numero++;
		
	




			mysqli_query($con,"INSERT INTO pregunta(titulo_pregunta,id_examen,numero)
				VALUES('$titulo_pregunta','$id_examen','$numero')")or die(mysqli_error($con));

			
  echo "<script>document.location='pregunta_agregar_docente.php?id_examen=$id_examen&id_temporada=$id_temporada&id_curso=$id_curso'</script>";


	
	




   



?>
