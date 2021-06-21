<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$numero = $_POST['numero'];
		$id_curso = $_POST['id_curso'];
	$id_examen = $_POST['id_examen'];
	$id_pregunta = $_POST['id_pregunta'];
	$id_opcion = $_POST['id_opcion'];
$id_temporada = $_POST['id_temporada'];

$session_id=$_SESSION['id'];
$sumador=1;

$puntaje=0;
$respuesta=0;

    $query1=mysqli_query($con,"select * from empresa  where id_empresa='1' ")or die(mysqli_error());
    $i=0;
    while($row1=mysqli_fetch_array($query1)){
    $correcto=$row1['correcto'];
        $incorrecto=$row1['incorrecto'];
  //      $estado=$row['estado'];
  }

    $query=mysqli_query($con,"select * from opciones  where id_opcion='$id_opcion' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $respuesta=$row['correcta'];
  //      $estado=$row['estado'];
  }

if ($respuesta=='si') {
$puntaje=$correcto;
}
if ($respuesta=='no') {
$puntaje=$incorrecto;
}
	$query2=mysqli_query($con,"select * from pregunta_contesta where id_examen='$id_examen' and id_pregunta='$id_pregunta' and id_estudiante='$session_id'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('Pregunta ya contestada paasar a la siguiente!');</script>";
		  echo "<script>document.location='pregunta_contestar.php?id_examen=$id_examen&id_curso=$id_curso&numero=$numero&id_temporada=$id_temporada'</script>";
		}
		else
		{

		
	




//
			//
			//

	$query2=mysqli_query($con,"select * from examen_alumno where id_examen='$id_examen' and id_usuario='$session_id'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{

if ($respuesta=='si') {
	$update=mysqli_query($con,"update examen_alumno set puntaje=puntaje+'$puntaje',correcto=correcto+'$sumador' where id_examen='$id_examen' and id_usuario='$session_id' ");


			mysqli_query($con,"INSERT INTO pregunta_contesta(id_examen,id_pregunta,id_opcion,id_estudiante)
				VALUES('$id_examen','$id_pregunta','$id_opcion','$session_id')")or die(mysqli_error($con));

			
		  echo "<script>document.location='pregunta_contestar.php?id_examen=$id_examen&id_curso=$id_curso&numero=$numero&id_temporada=$id_temporada'</script>";
}



if ($respuesta=='no') {
	$update=mysqli_query($con,"update examen_alumno set puntaje=puntaje+'$puntaje',incorrecto=incorrecto+'$sumador' where id_examen='$id_examen' and id_usuario='$session_id' ");


			mysqli_query($con,"INSERT INTO pregunta_contesta(id_examen,id_pregunta,id_opcion,id_estudiante)
				VALUES('$id_examen','$id_pregunta','$id_opcion','$session_id')")or die(mysqli_error($con));

			
		  echo "<script>document.location='pregunta_contestar.php?id_examen=$id_examen&id_curso=$id_curso&numero=$numero&id_temporada=$id_temporada'</script>";
}



		}
		else
		{


if ($respuesta=='no') {

			mysqli_query($con,"INSERT INTO examen_alumno(id_examen,id_usuario,puntaje,correcto,incorrecto,id_temporada,id_curso)
				VALUES('$id_examen','$session_id','$puntaje','0','$sumador','$id_temporada','$id_curso')")or die(mysqli_error($con));


	mysqli_query($con,"INSERT INTO pregunta_contesta(id_examen,id_pregunta,id_opcion,id_estudiante)
				VALUES('$id_examen','$id_pregunta','$id_opcion','$session_id')")or die(mysqli_error($con));

			
		  echo "<script>document.location='pregunta_contestar.php?id_examen=$id_examen&id_curso=$id_curso&numero=$numero&id_temporada=$id_temporada'</script>";
}


if ($respuesta=='si') {

			mysqli_query($con,"INSERT INTO examen_alumno(id_examen,id_usuario,puntaje,correcto,incorrecto,id_temporada,id_curso)
				VALUES('$id_examen','$session_id','$puntaje','$sumador','0','$id_temporada','$id_curso')")or die(mysqli_error($con));


	mysqli_query($con,"INSERT INTO pregunta_contesta(id_examen,id_pregunta,id_opcion,id_estudiante)
				VALUES('$id_examen','$id_pregunta','$id_opcion','$session_id')")or die(mysqli_error($con));

			
		  echo "<script>document.location='pregunta_contestar.php?id_examen=$id_examen&id_curso=$id_curso&numero=$numero&id_temporada=$id_temporada'</script>";
}


		}



	
	
//
		  //
		  //
}


   



?>
