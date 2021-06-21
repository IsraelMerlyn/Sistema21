
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
//    if ($usuario=="si") {
      # code...
    
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

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->

 </div>
  <?php
     if(isset($_REQUEST['id_examen']))
            {
              $id_examen=$_REQUEST['id_examen'];
            }
            else
            {
            $id_examen=$_POST['id_examen'];
          }
     if(isset($_REQUEST['id_curso']))
            {
              $id_curso=$_REQUEST['id_curso'];
            }
            else
            {
            $id_curso=$_POST['id_curso'];
          }





               if(isset($_REQUEST['id_temporada']))
            {
              $id_temporada=$_REQUEST['id_temporada'];
            }
            else
            {
            $id_temporada=$_POST['id_temporada'];
          }
          
?>

                           <?php
                         
             //         if ($guardar=="si") {
                    
                      ?>

                  <?php
               //       }
                      ?>

                  <!-- Date range -->
               

      
 <!--end of modal-->

                <a class="btn btn-danger btn-print" href="<?php  echo "examen_curso_alumno.php?id_curso=$id_curso&id_temporada=$id_temporada";?>"  role="button">Retroceder</a>

<?php
$session_id=$_SESSION['id'];
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from usuario where id= '$session_id' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $nombre_completo=$row['nombre'].' '.$row['apellido'];
}

?>



    



                  <div class="box-header">
                  <h3 class="box-title">Alumno <?php echo $nombre_completo;?></h3>
                </div><!-- /.box-header -->
              
            

                <div class="box-body">
                

<?php
$puntaje=0;
  $id_usuario=$_SESSION['id'];

$correcto=0;
$incorrecto=0;
    $query1=mysqli_query($con,"select * from examen_alumno where id_examen='$id_examen' and id_usuario='$id_usuario' ")or die(mysqli_error());
    $i=1;
    while($row1=mysqli_fetch_array($query1)){
       $puntaje=$row1['puntaje']; 
        $correcto=$row1['correcto']; 
          $incorrecto=$row1['incorrecto']; 
        }

?>
            


<?php ?>
 <a class="btn btn-danger btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">PUNTAJE= <label style='color:black;  font-size: 25px '>=<?php echo $puntaje;?></label></a>
 <a class="btn btn-primary btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">Preguntas contestadas correctamente= <label style='color:black;  font-size: 25px '>=<?php echo $correcto;?></label></a>
  <a class="btn btn-success btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">Preguntas contestadas incorrectamente= <label style='color:black;  font-size: 25px '>=<?php echo $incorrecto;?></label></a>
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
            Examen online <a href="#"></a>
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
 // }    
?>



    <!-- /gauge.js -->
  </body>
</html>
