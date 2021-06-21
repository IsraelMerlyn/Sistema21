
<?php include 'header.php';


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
             <?php
                         

                    
  $id_temporada = $_POST['id_temporada'];
    $id_curso = $_POST['id_curso'];

          $id_usuario=$_POST['id_estudiante'];
$nombre_completo="";
$nombre_curso="";
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
        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 

                 <div class="panel-heading">


        </div>
 
 <!--end of modal-->


                  <div class="box-header">
                  <h3 class="box-title"> </h3>

                </div><!-- /.box-header -->
                <a class="btn btn-danger btn-print" href="<?php  echo "cursos_alumno_constancia_admin.php?id_temporada=$id_temporada";?>"  role="button">Retroceder</a>
                 <a class = "btn btn-success btn-print" href = "<?php  echo "cursos_alumno_constancia_admin.php?id_temporada=$id_temporada";?>" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>
            


                









                <div class="box-body">
                
         

 
                        
            

          
      






      
 <!--end of modal-->

  <div class = "row">
        <div class = "col-md-4 col-lg-12 hide-section">
  <a class="btn btn-danger btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">CURSO : <label style='color:black;  font-size: 25px '><?php echo $nombre_curso;?></label></a><br>



</div>

      
</div>


  <div class = "row">
        <div class = "col-md-4 col-lg-12 hide-section">
  <a class="btn btn-primary btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">ALUMNO : <label style='color:black;  font-size: 25px '><?php echo $nombre_completo;?></label></a><br>



</div>

      
</div>







                  <div class="box-header">
                  <h3 class="box-title"> LISTA CURSOS NOTAS</h3>
                </div><!-- /.box-header -->
              


                <div class="box-body">
                
                  <table id="exa" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                    <th>#</th>
 
                
         <th>Nota</th>
  

                          
     


                      </tr>
                    </thead>
                    <tbody>
<?php
$promedio=0;

$session_id=$_SESSION['id'];
    $query=mysqli_query($con,"select * from examen_alumno  where id_temporada='$id_temporada' and id_usuario='$id_usuario' and id_curso='$id_curso' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
   $promedio=$row['puntaje']+$promedio;
  
    $i++;
?>
                      <tr >

<td><?php echo $i;?></td>


  
<td><?php echo $row['puntaje'];?></td>

     
                      </tr>

 <!--end of modal-->

<?php }?>
                    </tbody>

                  </table>


<?php
if ($promedio>0) {
  # code...

$promedio=$promedio/$i;
}
  ?>     

                          <div class = "col-md-4 col-lg-12 hide-section">
  <a class="btn btn-success btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">PROMEDIO : <label style='color:black;  font-size: 25px '><?php echo $promedio;?></label></a><br>



</div>
                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->







      
</div>
           </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Examen online  Sys <a href="#"></a>
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
           "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],


  "searching": true,
                }

              );
              } );
    </script>




    <!-- /gauge.js -->
  </body>
</html>
