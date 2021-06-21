<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');



  $id_tramite = $_POST['id_tramite'];
  $area_revision = $_POST['area_revision'];


  mysqli_query($con,"update tramite set area_revision='$area_revision' where id_tramite='$id_tramite'")or die(mysqli_error());
    mysqli_query($con,"update tramite set estado='enviado' where id_tramite='$id_tramite'")or die(mysqli_error());

   echo "<script>document.location='tramite.php'</script>";

?>
