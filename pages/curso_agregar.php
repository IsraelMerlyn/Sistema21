
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
                  <h3 class="box-title"> REGISTRAR CURSO </h3>

                </div><!-- /.box-header -->
                     <a class="btn btn-warning btn-print" href="<?php  echo "curso.php?id_temporada=$id_temporada";?>"   style="height:25%; width:15%; font-size: 12px " role="button">Regresar</a>  
                









                <div class="box-body">
                
         

 
                        
            

          
      




        <form class="form-horizontal" method="post" action="curso_add.php" enctype='multipart/form-data'>







                   <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Nombre curso</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="nombre_curso" name="nombre_curso" required >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


          <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Descripcion curso</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="descripcion_curso" name="descripcion_curso" required >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>



<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >Temporada </label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <select class="form-control select2" name="id_temporada" required>
                            
                            <?php

              $queryc=mysqli_query($con,"select * from temporada  ")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
                ?>
                            <option value="<?php echo $rowc['id_temporada'];?>"><?php echo $rowc['nombre_temporada'].' - '.$rowc['anio'];?></option>
                            <?php }?>
                          </select>
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
