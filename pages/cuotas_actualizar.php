 <?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_cuota = $_POST['id_cuota'];
	$codigo_prestamo = $_POST['codigo_prestamo'];
	$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];



		///finzalizo encriptacion


	mysqli_query($con,"update cuotas set fecha_fin='$fecha_fin',fecha_inicio='$fecha_inicio'  where id_cuota='$id_cuota'")or die(mysqli_error());

			

//	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
	echo "<script>document.location='ver_prestamo.php?codigo_prestamo=$codigo_prestamo'</script>";	

	




   







?>
