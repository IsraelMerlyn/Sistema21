
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

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->
                        <div class="box-body">
                  <!-- Date range -->

          </div>

                  <div class="box-header">
                  <h3 class="box-title"> MENU</h3>
                </div><!-- /.box-header -->
                <div class="box-body">











                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">

                 <?php
                     if ($tipo=="administrador" ) {
                    
                      ?>
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
      
      <h4>
<?php
$num=0;
$select = mysqli_query($con, "SELECT * FROM examen ") or die (mysqli_error($link));
$num = mysqli_num_rows($select);
echo $num;
?>
      </h4>
              <p>Mi examen</p>
            </div>
        <div class="icon">  <img height="80" width="80" src="img/ass.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="temporada.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
         <?php
                      }
                      ?>

                          <?php
                     if ($tipo=="administrador" ) {
                    
                      ?>
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
      
      <h4>
<?php
$num=0;
    $query=mysqli_query($con,"select * FROM usuario where tipo='docente' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
$num++;
  }
echo $num;
?>
      </h4>
              <p>Docentes</p>
            </div>
          <div class="icon"> <img height="80" width="80" src="img/clientes.png">-->
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="docente.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>

                     <?php
                      }
                      ?>



                                   <?php
                     if ($tipo=="administrador" ) {
                    
                      ?>


       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
      
      <h4>
<?php
$num=0;
$select = mysqli_query($con, "SELECT * FROM usuario where tipo='estudiante' ") or die (mysqli_error($link));
$num = mysqli_num_rows($select);
echo $num;
?>
      </h4>
              <p>Alumnos</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/comittee.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="alumno.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>

        
                                 <?php
                      }
                      ?>


                                   <?php
                     if ($tipo=="administrador" ) {
                    
                      ?>


       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
      
      <h4>
<?php
$num=1;
echo $num;
?>
      </h4>
              <p>Configuracion empresa</p>
         </div>
            <div class="icon"><img height="80" width="80" src="img/setting.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="configuracion.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>

        
                                 <?php
                      }
                      ?>


              <?php
                     if ($tipo=="administrador" ) {
                    
                      ?>
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
      
      <h4>
<?php
$num=0;
    $query=mysqli_query($con,"select * from curso ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>Cursos</p>
            </div>
           <div class="icon"><img height="80" width="80" src="img/historial.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="temporada.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>


                     <?php
                      }
                      ?>






              <?php
                     if ($tipo=="docente" ) {
                    
                      ?>
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
      
      <h4>
<?php
$id_usuario=$_SESSION['id'];
$num=0;
    $query=mysqli_query($con,"select * from asignar_curso where id_usuario='$id_usuario' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>Administracion Cursos</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/cita.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="temporada_asignar_curso_docente.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>


                     <?php
                      }
                      ?>

              <?php
                     if ($tipo=="estudiante" ) {
                    
                      ?>
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
      
      <h4>
<?php
$id_usuario=$_SESSION['id'];
$num=0;
    $query=mysqli_query($con,"select * from matricular_curso_alumno where id_usuario='$id_usuario' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>Administracion Cursos</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/estudiante.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="temporada_alumno.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>


                     <?php
                      }
                      ?>





                                    <?php
                     if ($tipo=="estudiante" ) {
                    
                      ?>
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
      
      <h4>
<?php
$id_usuario=$_SESSION['id'];
$num=1;
    $query=mysqli_query($con,"select * from asignar_curso where id_usuario='$id_usuario' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>Reportes notas de cursos</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/report.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="temporada_alumno.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>


                     <?php
                      }
                      ?>
                  </div><!--row-->
                  
      
  
   
            </div><!-- /.col (right) -->
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
             Sistema myTec <a href="#"></a>
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


    <!-- /gauge.js -->
  </body>
</html>
