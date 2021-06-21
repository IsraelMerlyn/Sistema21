
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
  <?php
     if(isset($_REQUEST['id_curso']))
            {
              $id_curso=$_REQUEST['id_curso'];
            }
            else
            {
            $id_curso=$_POST['id_curso'];
          }

    $query=mysqli_query($con,"select * from curso where id_curso= '$id_curso' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
     $nombre_curso=$row['nombre_curso'];

    }

?>
                    
    <div class="container body">
      <div class="main_container">
        <?php include 'main_sidebar.php';?>

        <!-- top navigation -->
       <?php include 'top_nav.php';?>      <!-- /top navigation -->
       <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
       </style>
       <?php 
     if(isset($_REQUEST['id_temporada']))
            {
              $id_temporada=$_REQUEST['id_temporada'];
            }
            else
            {
            $id_temporada=$_POST['id_temporada'];
          }
          ?>
        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>

         <a class="btn btn-danger btn-print" href="<?php  echo "asignar_curso_docente.php?id_temporada=$id_temporada";?>"  role="button">Retroceder</a>
 <!--end of modal-->
                        <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="matricular_curso_alumno_add.php" enctype="multipart/form-data" class="form-horizontal">
       <input type="hidden" class="form-control" id="id_temporada" name="id_temporada" value="<?php echo $id_temporada;?>" required>
<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >Alumno </label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <select class="form-control select2" name="id_alumno" required>
                            
                            <?php

              $queryc=mysqli_query($con,"select * from  usuario where tipo='estudiante'  ")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
                ?>
                            <option value="<?php echo $rowc['id'];?>"><?php echo $rowc['nombre'].'  '.$rowc['apellido'];?></option>
                            <?php }?>
                          </select>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


          <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >Curso </label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
      <input type="hidden" class="form-control" id="id_curso" name="id_curso" value="<?php echo $id_curso;?>"   required>
            <input type="text" class="form-control" id="nombre_curso" name="nombre_curso" value="<?php echo $nombre_curso;?>"   readonly>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>   
                 
    <button type="submit" class="btn btn-primary">Matricular alumno</button>








    

       
            

   

              <!-- /.input group -->
             

               

          </form>
              
          </div>

                  <div class="box-header">
                  <h3 class="box-title"> Lista alumnos</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>

   <th>Usuario</th>
                        <th>Nombre alumno</th>

                       <th class="btn-print"> ACCIÓN </th>

                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from usuario AS u INNER JOIN matricular_curso_alumno AS m ON u.id = m.id_usuario where id_curso='$id_curso'")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_usuario=$row['id'];

?>
                      <tr >
              <td><?php echo $row['usuario'];?></td>
                <td><?php echo $row['nombre'].' '.$row['apellido'];?></td>


                        <td>
<a class="small-box-footer btn-print" href="<?php  echo "eliminar_matricula_alumno.php?id_usuario=$id_usuario&id_curso=$id_curso";?>" onClick="return confirm('¿Está seguro de que desea eliminar??');"" > <i class="glyphicon glyphicon-remove"></i></a>




            </td>
                      </tr>


 <!--end of modal-->


<?php 
}?>
                    </tbody>

                  </table>
                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>




        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            SISTEMA DE EXAMEN ONLINE<a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

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

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
    </script>



            <?php
                  //    }
                      ?>

    <!-- /gauge.js -->
  </body>
</html>
