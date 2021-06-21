
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
                  <h3 class="box-title"> REGISTRAR EXAMEN </h3>

                </div><!-- /.box-header -->

                









                <div class="box-body">
                
         

 
                        
            
<a class="btn btn-danger btn-print" href="<?php  echo "cursos_asignados_docente.php?id_temporada=$id_temporada";?>"  role="button">Retroceder</a>
          
      

  <div class = "row">
        <div class = "col-md-4 col-lg-12 hide-section">
  <a class="btn btn-primary btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">CURSO : <label style='color:black;  font-size: 25px '><?php echo $nombre_curso;?></label></a><br>



</div>

      
</div>


        <form class="form-horizontal" method="post" action="crear_examen_add.php" enctype='multipart/form-data'>


               <input type="hidden" class="form-control" id="id_temporada" name="id_temporada" value="<?php echo $id_temporada;?>" required>
                                   <input type="hidden" class="form-control" id="id_curso" name="id_curso" value="<?php echo $id_curso;?>" required>




                   <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Tema examen</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="tema_examen" name="tema_examen" required >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
       
                          <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Descripcion examen</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                                 <input type="text" class="form-control pull-right"  id="descripcion_examen"  name="descripcion_examen"  >
 
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

             








             
                 
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
              










              <div class="modal-footer">


              </div>
        </form>

 



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
            Examen online Sys <a href="#"></a>
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
