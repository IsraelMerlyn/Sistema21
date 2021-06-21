
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

          $session_id=$_SESSION['id'];



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
                <a class="btn btn-danger btn-print" href="<?php  echo "cursos_docente.php?id_temporada=$id_temporada";?>"  role="button">Retroceder</a>
                 <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>
            


                









                <div class="box-body">
                
         

 
                        
            

          
      






      
 <!--end of modal-->



  <div class = "row">
        <div class = "col-md-4 col-lg-12 hide-section">
  <a class="btn btn-primary btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">CURSO : <label style='color:black;  font-size: 25px '><?php echo $nombre_curso;?></label></a><br>



</div>

      
</div>







                  <div class="box-header">
                  <h3 class="box-title"> LISTA ALUMNOS MATRICULADOS</h3>
                </div><!-- /.box-header -->
              


                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                    <th>#</th>
                        <th>Nombre alumno</th>
                        <th>Correo</th>
                
 
  

                          
     

 <th class="btn-print"> Accion </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
$session_id=$_SESSION['id'];
    $query=mysqli_query($con,"select * from curso AS c INNER JOIN matricular_curso_alumno AS a ON c.id_curso = a.id_curso INNER JOIN usuario AS u ON u.id = a.id_usuario where c.id_curso='$id_curso' and c.id_temporada='$id_temporada' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){

        $id_estudiante=$row['id'];
    $i++;
?>
                      <tr >

<td><?php echo $i;?></td>


  
<td><?php echo $row['nombre'].'  '.$row['apellido'];?></td>
  <td><?php echo $row['correo'];?></td>


                          <td>
                                 <?php
                   
                    
                      ?>

      

<a class="btn btn-danger btn-print" href="<?php  echo "notas_curso_docente.php?id_curso=$id_curso&id_temporada=$id_temporada&id_estudiante=$id_estudiante";?>"  role="button">Constancia</a>

             <?php
            //          }
                      ?>

            </td>
                      </tr>

 <!--end of modal-->

<?php }?>
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
