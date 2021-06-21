 <?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_empresa = $_POST['id_empresa'];
	$correcto = $_POST['correcto'];
	$incorrecto = $_POST['incorrecto'];



		///finzalizo encriptacion


	mysqli_query($con,"update empresa set correcto='$correcto',incorrecto='$incorrecto'  where id_empresa='1'")or die(mysqli_error());

			

	echo "<script type='text/javascript'>alert(' Puntaje actualizado correctamente!');</script>";
	echo "<script>document.location='puntaje.php'</script>";	

	




   







?>
