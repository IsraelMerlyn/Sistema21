
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

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>

 <div class="container">
           <div class="col-md-3">
      
           </div>
           <div class="col-md-3">
             <form method="post" action="reportes_por_fecha.php" enctype="multipart/form-data" class="form-horizontal">
                    <button class="btn btn-lg btn-danger btn-print" id="daterange-btn"  name="buscar_fechas">BUSCAR ENTRE FECHAS</button>
                    <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Fecha inicio</label>
                        <div class="input-group col-sm-8">
                          <input type="date" class="form-control pull-right" id="date" name="fecha_inicio"  required >
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>
            <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Fecha final</label>
                        <div class="input-group col-sm-8">
                          <input type="date" class="form-control pull-right" id="date" name="fecha_final"  required >
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>
              

                 




                    <div class="col-md-12">
                       <div class="col-md-12">
                        
                       
                         </div>

                    </div>

          </form>
           </div>
           <div class="col-md-3">
             
           </div>
       </div>
 <!--end of modal-->

                        <div class="box-body">
                  <!-- Date range -->  <section class="content-header">
             
          </section>

 <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>


                  <div class="box-header">
                  <h3 class="box-title"> Lista datos</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
  <table id="example2" class="table table-bordered table-striped">
                   <thead>
                            <tr>
<th>Descripcion</th>
                    <th>Cantidad</th>
                        <th>Balanace</th>
                        <th>Cliente</th>
                        <th>Agente</th>
             
                        <th>Fecha lanzamiento</th>
                  <th class="btn-print"> ACCION </th>
                 

                      </tr>
                    </thead>
                    <tbody>
                   




<?php
  

 


if(isset($_POST['buscar_fechas']))

{
  $fecha_inicio = $_POST['fecha_inicio'];
  $fecha_final = $_POST['fecha_final'];
?>

   <?php
 
    $query=mysqli_query($con,"select * from prestamos AS p INNER JOIN clientes AS c ON c.id_cliente = p.id_cliente   where  fecha >='$fecha_inicio' and fecha <='$fecha_final'  ")or die(mysqli_error());
    $contador=0;
    while($row=mysqli_fetch_array($query)){
$contador++;
    }

?>

  <div class = "row">
        <div class = "col-md-4 col-lg-12 hide-section">
  <a class="btn btn-danger btn-print"    disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">Nro ELEMENTOS= <label style='color:black;  font-size: 25px '>=<?php echo $contador;?></label></a>



</div>

      
</div>

 <?php






    $query=mysqli_query($con,"select * from prestamos AS p INNER JOIN clientes AS c ON c.id_cliente = p.id_cliente   where  fecha >='$fecha_inicio' and fecha <='$fecha_final' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
       $codigo_prestamo=$row['codigo_prestamo'];

?>

                      <tr >
  <td><?php echo $row['descripcion'];?></td>
  <td><?php echo $row['monto_pagar'];?></td>
    <td><?php echo $row['saldo_actual'];?></td>

              <td><?php echo $row['nombre'].'  '.$row['apellido'];?></td>
<td><?php echo $row['usuario'];?></td>
<td><?php echo $row['fecha'];?></td>
                                                      <td>
                                 <?php
                   
                    
                      ?>
<a class="btn btn-danger btn-print" href="<?php  echo "generar_pagos_pdf.php?codigo_prestamo=$codigo_prestamo";?>"  role="button">Pagos</a>


             <?php
            //          }
                      ?>

            </td>
  
                      </tr>

                                          <?php
                      }
                      }
?>


 <!--end of modal-->

                    </tbody>
         








        <footer>

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
  </body>
</html>
