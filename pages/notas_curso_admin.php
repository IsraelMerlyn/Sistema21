
<?php include 'header.php';

//$branch_id = $_GET['id'];
?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include 'main_sidebar.php';?>

        <!-- top navigation -->
       <?php include 'top_nav.php';?>      <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
             <?php
                         
           
          
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

          $id_usuario=$_SESSION['id'];
$nombre_completo="";
$nombre_curso="";
   $promedio=0;
              $query=mysqli_query($con,"select * from usuario where id='$id_usuario' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $nombre_completo=$row['nombre'].'  '.$row['apellido'];
  }


              $query=mysqli_query($con,"select * from curso where id_curso='$id_curso' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $nombre_curso=$row['nombre_curso'];
  }
                      ?>

 <div class="container">
           <div class="col-md-3">
      
           </div>
           <div class="col-md-3">
             <form method="post" action="notas_curso_admin_mostrar.php" enctype="multipart/form-data" class="form-horizontal">
         
                         <input type="hidden" class="form-control" id="id_curso" name="id_curso" value="<?php echo $id_curso;?>" required>
                             <input type="hidden" class="form-control" id="id_temporada" name="id_temporada" value="<?php echo $id_temporada;?>" required>
               <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >Seleccione estudiante </label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-8 btn-print">
                      <div class="form-group">
                          <select class="form-control select2" name="id_estudiante" required>
                            
                            <?php

              $queryc=mysqli_query($con,"select * from usuario AS u INNER JOIN matricular_curso_alumno AS m ON u.id = m.id_usuario where id_temporada='$id_temporada' and id_curso='$id_curso'   ")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
                ?>
                            <option value="<?php echo $rowc['id'];?>"><?php echo $rowc['nombre'].'  '.$rowc['apellido'];?></option>
                            <?php }?>
                          </select>
                      </div>
                    </div>
                           <div class="col-md-0 btn-print">
                
                    </div>
                    </div>
              

                 
           <button class="btn btn-lg btn-danger btn-print" id="daterange-btn"  name="buscar_fechas">Selecione alumno</button>



                    <div class="col-md-12">
                       <div class="col-md-12">
                        
                       
                         </div>

                    </div>

          </form>
           </div>
           <div class="col-md-3">
             
           </div>
       </div>
 <!--end of modal-->


   
  <?php include 'datatable_script.php';?>



        <script>
        $(document).ready( function() {
                $('#example2').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "posterior"
                    },
                    "search": "Buscar:",


                  },
           "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],


  "searching": true,
                }

              );
              } );
    </script>
  </body>
</html>
+