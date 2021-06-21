
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











                  <div class="box-header">
                  <h3 class="box-title"> MODIFICAR CURSO</h3>
                </div><!-- /.box-header -->
              
<a class="btn btn-danger btn-print" href="<?php  echo "curso.php?id_temporada=$id_temporada";?>"  role="button">Retroceder</a>

             
                

<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from curso where id_curso= '$id_curso' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_curso=$row['id_curso'];
    $id_temporada=$row['id_temporada'];
?>
      
        <form class="form-horizontal" method="post" action="curso_actualizar.php" enctype='multipart/form-data'>
            <input type="hidden" class="form-control" id="id_curso" name="id_curso" value="<?php echo $row['id_curso'];?>" required>
    
            <input type="hidden" class="form-control" id="id_temporada" name="id_temporada" value="<?php echo $row['id_temporada'];?>" required>




                




     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Nombre curso</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="text" class="form-control" id="nombre_curso" name="nombre_curso" value="<?php echo $row['nombre_curso'];?>" required>
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

            <input type="text" class="form-control" id="descripcion_curso" name="descripcion_curso" value="<?php echo $row['descripcion_curso'];?>" required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
          
    

     


         



  




 








  


     
                
          
    <button type="submit" class="btn btn-primary">GUARDAR</button>          
  
                   
            <br><br><br><hr>
              <div class="modal-footer">


              </div>
        </form>
            
 <!--end of modal-->

<?php }?>

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
           examen online APSYSTEM <a href="#"></a>
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
