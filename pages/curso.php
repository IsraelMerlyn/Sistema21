<?php include 'header.php';

?>

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
  <!-- contenido de pagina -->
  <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 

                 <div class="panel-heading">


        </div>
 


                  <div class="box-header">
                  <h3 class="box-title"> </h3>

                </div><!-- /.box-header -->
              
                <a class="btn btn-success btn-print" href="<?php  echo "curso_agregar.php?id_temporada=$id_temporada";?>"   style="height:25%; width:15%; font-size: 12px " role="button">Registrar</a>  
     <a class="btn btn-warning btn-print" href="<?php  echo "temporada.php";?>"   style="height:25%; width:15%; font-size: 12px " role="button">retroceder</a>  

                


                <div class="box-body">
                


                  <div class="box-header">
                  <h3 class="box-title"> LISTA CURSO</h3>
                </div><!-- /.box-header -->
              


                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                    <th>#</th>
                        <th>Nombre curso</th>
                        <th>Descripcion</th>
                
         
   

 <th class="btn-print"> Accion </th>
                      </tr>
                    </thead>
                    <tbody>



<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from curso where id_temporada='$id_temporada' ") or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $id_curso=$row['id_curso'];
    $i++;
?>
                      <tr >

<td><?php echo $i;?></td>


  
<td><?php echo $row['nombre_curso'];?></td>
  <td><?php echo $row['descripcion_curso'];?></td>


                          <td>
                                 <?php
                   
                    
                      ?>

      
<a class="btn btn-danger btn-print" href="<?php  echo "editar_curso.php?id_curso=$id_curso&id_temporada=$id_temporada";?>"  role="button">Editar</a>
<a class="btn btn-danger btn-print" href="<?php  echo "examen.php?id_curso=$id_curso&id_temporada=$id_temporada";?>"  role="button">Examen</a>
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
            Parqueamiento Sys <a href="#"></a>
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
