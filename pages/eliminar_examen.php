<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');




         if(isset($_REQUEST['id_examen']))
            {
              $id_examen=$_REQUEST['id_examen'];
            }
            else
            {
            $id_examen=$_POST['id_examen'];
          }


                   if(isset($_REQUEST['id_temporada']))
            {
              $id_temporada=$_REQUEST['id_temporada'];
            }
            else
            {
            $id_temporada=$_POST['id_temporada'];
          }
                        if(isset($_REQUEST['id_curso']))
            {
              $id_curso=$_REQUEST['id_curso'];
            }
            else
            {
            $id_curso=$_POST['id_curso'];
          }

  mysqli_query($con,"delete from examen where id_examen='$id_examen'")or die(mysqli_error());
    echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='examen.php?id_curso=$id_curso&id_temporada=$id_temporada'</script>";
  
?>