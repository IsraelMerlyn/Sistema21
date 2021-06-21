<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_pregunta']))
            {
              $id_pregunta=$_REQUEST['id_pregunta'];
            }
            else
            {
            $id_pregunta=$_POST['id_pregunta'];
          }


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

  mysqli_query($con,"delete from pregunta where id_pregunta='$id_pregunta'")or die(mysqli_error());
    echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='pregunta_agregar_docente.php?id_examen=$id_examen&id_temporada=$id_temporada&id_curso=$id_curso'</script>";
  
?>