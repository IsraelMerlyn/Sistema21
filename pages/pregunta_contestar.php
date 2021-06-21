

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
  <?php
     if(isset($_REQUEST['id_examen']))
            {
              $id_examen=$_REQUEST['id_examen'];
            }
            else
            {
            $id_examen=$_POST['id_curso'];
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

     if(isset($_REQUEST['numero']))
            {
              $numero=$_REQUEST['numero'];
            }
            else
            {
            $numero=$_POST['numero'];
          }
          $numero++;
?>
       <?php
            $fecha_registro = date('Y-m-d');
            ?>


<?php
$session_id=$_SESSION['id'];


?>


        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>

 
                <a class="btn btn-danger btn-print" href="<?php  echo "examen_curso_alumno.php?id_curso=$id_curso&id_temporada=$id_temporada";?>"  role="button">Retroceder</a>


 <!--end of modal-->
 <!--end of modal-->


<?php
$id_pregunta=0;
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from pregunta where id_examen='$id_examen' and numero='$numero' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_pregunta=$row['id_pregunta'];

?>

    





                




     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Pregunta </label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="text" class="form-control" id="name" name="titulo_pregunta" value="<?php echo $row['titulo_pregunta'];?>" readonly>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
<?php }

$numero_final=0;

    $query=mysqli_query($con,"select * from pregunta where id_examen='$id_examen' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
       $numero_final=$row['numero']; 
        }
?>

<?php
if ($numero<=$numero_final) {
  # code...

?>

    <form class="form-horizontal" method="post" action="pregunta_contestar_add.php" enctype='multipart/form-data'>

         <input type="hidden" class="form-control" id="numero" name="numero" value="<?php echo $numero;?>" required>

            <input type="hidden" class="form-control" id="id_examen" name="id_examen" value="<?php echo $id_examen;?>" required>
                 <input type="hidden" class="form-control" id="id_pregunta" name="id_pregunta" value="<?php echo $id_pregunta;?>" required>
                     <input type="hidden" class="form-control" id="id_curso" name="id_curso" value="<?php echo $id_curso;?>" required>
          <input type="hidden" class="form-control" id="id_temporada" name="id_temporada" value="<?php echo $id_temporada;?>" required>

                     
          
      <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >OPCIONES </label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <select class="form-control select2" name="id_opcion" required>
                            
                            <?php

              $queryc=mysqli_query($con,"select * from opciones  where id_examen='$id_examen' and id_pregunta='$id_pregunta' ")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
                ?>
                            <option value="<?php echo $rowc['id_opcion'];?>"><?php echo $rowc['descripcion_opcion'];?></option>
                            <?php }?>
                          </select>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>



                        <button type="submit" class="btn btn-primary">Siguiente preguntar</button>
              










              <div class="modal-footer">


              </div>
        </form>

     <?php
}
else
{
$puntaje=0;
$correcto=0;
$incorrecto=0;
  $id_usuario=$_SESSION['id'];


    $query1=mysqli_query($con,"select * from examen_alumno where id_examen='$id_examen' and id_usuario='$id_usuario' ")or die(mysqli_error());
    $i=1;
    while($row1=mysqli_fetch_array($query1)){
       $puntaje=$row1['puntaje']; 
        $correcto=$row1['correcto']; 
          $incorrecto=$row1['incorrecto']; 
        }
?>
<br>
<br>
 <a class="btn btn-danger btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">PUNTAJE= <label style='color:black;  font-size: 25px '>=<?php echo $puntaje;?></label></a>
 <a class="btn btn-primary btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">Preguntas contestadas correctamente= <label style='color:black;  font-size: 25px '>=<?php echo $correcto;?></label></a>
  <a class="btn btn-success btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">Preguntas contestadas incorrectamente= <label style='color:black;  font-size: 25px '>=<?php echo $incorrecto;?></label></a>


     <?php

}
?>    




                
          
 <!--end of modal-->


         














                

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Examen online sys <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      
    </div>

  <?php include 'datatable_script.php';?>



        <script>
        $(document).ready( function() {
                $('#example3').dataTable( {
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
