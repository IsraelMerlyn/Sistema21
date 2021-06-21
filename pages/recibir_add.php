<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');



     if(isset($_REQUEST['id_tramite']))
            {
              $id_tramite=$_REQUEST['id_tramite'];
            }
            else
            {
            $id_tramite=$_POST['id_tramite'];
          }

  mysqli_query($con,"update tramite set estado='recibido' where id_tramite='$id_tramite'")or die(mysqli_error());

  
//  echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='tramite.php'</script>";  
  
?>