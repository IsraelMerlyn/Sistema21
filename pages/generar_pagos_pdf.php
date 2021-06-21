<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
$codigo_prestamo=$_GET['codigo_prestamo'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />



  <link rel='stylesheet' type='text/css' href='css/style.css' />
  <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
  <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/example.js'></script>


<style>

.left{
    float: left;

}
.right{
    float: right;

}
.center{

   display:inline-block
}
@media print {
    .btn-print {
      display:none !important;
    size:30px;
    }

}
th, td {
font-size: 15px;
text-align: center;
}

</style>
</style>
</head>

<body>

  <?php
  include('../dist/includes/dbcon.php');


  ?>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from clientes  AS c INNER JOIN prestamos AS p ON c.id_cliente = p.id_cliente
   where codigo_prestamo='$codigo_prestamo' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){

        $cliente_nombre=$row['nombre'].' '.$row['apellido'];


        $monto_prestado=$row['monto_prestado'];
          $monto_pagar=$row['monto_pagar'];
           $saldo_actual=$row['saldo_actual'];
  $fecha_prestamo=$row['fecha'];
               $agente=$row['usuario'];     
  $cuota=$row['cuota'];  


  }
$img="";
$c=0;
      $query=mysqli_query($con,"select * from cuotas 
   where codigo_prestamo='$codigo_prestamo' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){

$c++;

    }


     $query=mysqli_query($con,"select * from empresa 
   where id_empresa='1' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){




        $img_empresas=$row['imagen'];
              $img_empresas=$row['imagen'];
    $empresa=$row['empresa'];
           $ruc=$row['ruc'];
                $direccion=$row['direccion'];
                    $telefono=$row['telefono'];
                     $descripcion=$row['descripcion'];
                     $correo=$row['correo'];
  }
  $debe=0;
    $debe=$monto_pagar-$saldo_actual;
?>
   <br>

       <center>                       
    <br>
   <br>
   





    <a class = "btn btn-success btn-print" style="    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0; " href = "pagos.php" ><i class ="glyphicon glyphicon-print"></i>Regresar</a>

<a class = "btn btn-success btn-print" style="    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0; " href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión </a>
  </center>
  <div id="page-wrap">

    <textarea id="header">Prestamo</textarea>

    <div id="identity">

 

                            <br>
   <br>
      <br>









    <div id="identity">
            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp" >
                <input id="imageloc" type="text" size="50" value="" /><br />
                (width: 150px,  height: 150px)
              </div>

            </div>

    </div>


    <div style="clear:both"></div>



    <div class="container">
   <div class="left">


   <img id="image" src="images/<?php echo $img_empresas;?>" alt="logo" width="100" height="100" /><br /><br />
       </div>

   <div class="right">

     <div id="customer">


<h1>Nro <?php echo $codigo_prestamo;?> </h1>

     </div>

       </div>

   <div class="center">

       </div>
   </div>

<br><br><br><br><br><br>
<center><h1> EMPRESA</h1></center>

             <table id="header3"  style="width:100%" >
                 <tr>
                      <td>Empresa</td>
                     <td >Direccion empresa </td>
                     <td>Ruc empresa</td>
                     <td>Correo</td>
            
                 </tr>
                 <tr>
    <td><?php echo $empresa;?></td>
                     <td class="meta-head"><?php echo $direccion;?></td>
                     <td><?php echo $ruc;?></td>
                         <td><?php echo $correo;?></td>
          
                 
                 </tr>


             </table>

<center><h1> PRESTAMO</h1></center>
             <table id="header3"  style="width:100%" >
                 <tr>
                      <td>Cliente</td>
                     <td >Fecha Prestamo </td>
                     <td>Cantidad total a pagar</td>
                     <td>Cuotas de</td>
                     <td>Nro de cuotas</td>
                 </tr>
                 <tr>
    <td><?php echo $cliente_nombre;?></td>
                     <td class="meta-head"><?php echo $fecha_prestamo;?></td>
                     <td><?php echo $monto_pagar;?></td>
                         <td><?php echo $cuota;?></td>
                          <td><?php echo $c;?></td>
                 
                 </tr>


             </table>


<center><h1> CUOTAS</h1></center>
                                    <table id="header3" style="width:100%"  >
                    <thead>
                      <tr>



                      <th> cantidad </th>
                  
                        <th> Fecha pagada </th>
                          


        


                      </tr>
                    </thead>
                    <tbody>
<?php
$valor_total=0;
    $query=mysqli_query($con,"select * from pagos  where codigo_prestamo='$codigo_prestamo' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){

       
?>
                      <tr >

              <td><?php echo number_format($row['monto'],2);?></td>

                        <td><?php echo $row['fecha_pago'];?></td>
     
                        

                       

          
      

                      </tr>


 <!--end of modal-->

<?php 
}?>
                    </tbody>

                  </table>
                  <?php 

                  ?>
   
  <?php echo $direccion;?>
    <div class="container">
   <div class="left">
<CENTER>


   </CENTER>
       </div>
   <div class="right">

    <h3>TOTAL PAGADO: <?php echo number_format($saldo_actual,2);?></h3>

        <h3>TOTAL DEUDA: <?php echo number_format($debe,2);?></h3>
     <div id="customer">




     </div>

       </div>

      

    </div>

<br><br><br><br><br><br>  
  <H5>Agente : <?php echo $agente;?></H5>
    <div >
<br><br><br><br>
    <div class="container">
   <div class="left">
<CENTER>
-----------------------------------------------------------<br />
   <h3>FIRMA COMPROMISO EMPRESA</h3>
   </CENTER>
       </div>
   <div class="right">
-----------------------------------------------------------<br />
    <h3>FIMRA COMPROMISO CLIENTE</h3>

     <div id="customer">




     </div>

       </div>

      

    </div>


  </div>

</body>

</html>
