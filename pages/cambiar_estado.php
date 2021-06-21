 <?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];





          if(isset($_REQUEST['estado']))
            {
              $estado=$_REQUEST['estado'];
            }
            else
            {
            $estado=$_POST['estado'];
          }

          if(isset($_REQUEST['codigo_prestamo']))
            {
              $codigo_prestamo=$_REQUEST['codigo_prestamo'];
            }
            else
            {
            $codigo_prestamo=$_POST['codigo_prestamo'];
          }
          $estate="";
if ($estado=="pendiente") {
    $estate="aprobado";
}
if ($estado=="aprobado") {
    $estate="pendiente";
}
		///finzalizo encriptacion

  mysqli_query($con,"update prestamos set estado='$estate' where codigo_prestamo='$codigo_prestamo'")or die(mysqli_error());

  echo "<script type='text/javascript'>alert(' se cambiar de estado correctamente a $estate !');</script>";
  echo "<script>document.location='prestamos.php'</script>";  

	




   







?>
