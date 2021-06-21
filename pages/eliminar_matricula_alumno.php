<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_curso']))
            {
              $id_curso=$_REQUEST['id_curso'];
            }
            else
            {
            $id_curso=$_POST['id_curso'];
          }


         if(isset($_REQUEST['id_usuario']))
            {
              $id_usuario=$_REQUEST['id_usuario'];
            }
            else
            {
            $id_usuario=$_POST['id_usuario'];
          }

  mysqli_query($con,"delete from matricular_curso_alumno where id_curso='$id_curso' and id_usuario='$id_usuario'")or die(mysqli_error());
    echo "<script type='text/javascript'>alert('Matricula Eliminada correctamente!');</script>";
  echo "<script>document.location='matricular_curso_alumno.php?id_curso=$id_curso'</script>";
  
?>