	<?php include 'dbcon.php';?>
  <?php
  
     if(isset($_REQUEST['id_tramite']))
            {
              $id_tramite=$_REQUEST['id_tramite'];
            }
            else
            {
            $id_tramite=$_POST['id_tramite'];
          }


?>

<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from tramite    where id_tramite= '$id_tramite' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){


?>
<?php
    $pdf=$row['pdf'];
// Definimos el nombre de archivo a descargar.

header("Content-disposition: attachment; filename=$pdf");
header("Content-type: MIME");
readfile("pdf/$pdf");

 }
   echo "<script>document.location='ver_tramite.php?id_tramite=$id_tramite'</script>";

?>
