
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
 <!--end of modal-->


<a class="btn btn-danger btn-print" href="<?php  echo "examen.php?id_curso=$id_curso&id_temporada=$id_temporada";?>"  role="button">Retroceder</a>
                        <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="pregunta_add.php" enctype="multipart/form-data" class="form-horizontal">
              <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >PREGUNTA</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="hidden" class="form-control" id="id_examen" name="id_examen" value="<?php echo $id_examen;?>" required>
                              <input type="hidden" class="form-control" id="id_temporada" name="id_temporada" value="<?php echo $id_temporada;?>" required>
                                   <input type="hidden" class="form-control" id="id_curso" name="id_curso" value="<?php echo $id_curso;?>" required>
                          <input type="text" class="form-control pull-right" id="titulo_pregunta" name="titulo_pregunta" placeholder="PREGUNTA" required>   
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
                

             <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
    
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                <button type="submit" class="btn btn-primary">Agregar</button>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>









    

       
            

   

              <!-- /.input group -->
             

               

          </form>
              
          </div>

                  <div class="box-header">
                  <h3 class="box-title"> Lista preguntas</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>


                        <th>PREGUNTA</th>
     <th class="btn-print"> ALTERNATIVAS/OPCIONES </th>
                       <th class="btn-print"> ACCIÓN </th>

                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from pregunta where id_examen='$id_examen' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_pregunta=$row['id_pregunta'];

?>
                      <tr >
              <td><?php echo $row['titulo_pregunta'];?></td>

    <td>
          
      <a class="btn btn-danger btn-print" href="<?php  echo "opciones_agregar.php?id_pregunta=$id_pregunta&id_examen=$id_examen&id_temporada=$id_temporada&id_curso=$id_curso";?>"  role="button">Agregar Opciones</a> 
    </td>
                        <td>
<a class="small-box-footer btn-print" href="<?php  echo "eliminar_pregunta.php?id_pregunta=$id_pregunta&id_examen=$id_examen&id_temporada=$id_temporada&id_curso=$id_curso";?>" onClick="return confirm('¿Está seguro de que desea eliminar??');"" > <i class="glyphicon glyphicon-remove"></i></a>


        <a href="#updateordinance<?php echo $row['id_pregunta'];?>" data-target="#updateordinance<?php echo $row['id_pregunta'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer btn-print"><i class="glyphicon glyphicon-edit text-blue"></i></a>

            </td>
                      </tr>
        <div id="updateordinance<?php echo $row['id_pregunta'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog" style="width: 900px; height: 900px;">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">ACTUALIZAR PREGUNTA</h4>
              </div>
              <div class="modal-body" style="width: 100%; height: 100%;">
        <form class="form-horizontal" method="post" action="pregunta_actualizar.php" enctype='multipart/form-data'>
<div class="col-md-12 btn-print">
        <div class="form-group">
          <label class="control-label col-lg-3" for="name">PREGUNTA</label>
          <div class="input-group col-md-8">
            <input type="hidden" class="form-control" id="id_pregunta" name="id_pregunta" value="<?php echo $row['id_pregunta'];?>" required>

                  <input type="hidden" class="form-control" id="id_examen" name="id_examen" value="<?php echo $id_examen;?>" required>
                         <input type="hidden" class="form-control" id="id_temporada" name="id_temporada" value="<?php echo $id_temporada;?>" required>
                                   <input type="hidden" class="form-control" id="id_curso" name="id_curso" value="<?php echo $id_curso;?>" required>
                <input type="text" class="form-control" id="titulo_pregunta" name="titulo_pregunta" value="<?php echo $row['titulo_pregunta'];?>" required>


          </div>
        </div>
    </div>









              </div><br><br><br><hr>
              <div class="modal-footer">
    <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
              </div>
        </form>
            </div>

        </div><!--end of modal-dialog-->
 </div>
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
