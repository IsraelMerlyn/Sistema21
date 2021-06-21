<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
$codigo=$_GET['codigo'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  

  <title>COMPROBANTE</title>

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
hr {
  height: 3px;
  width: 100%;
  background-color: black;
}
#abajo{
    height: 3px;
  width: 30%;
  background-color: black;
}
tr{
  font-family:'Helvetica','Verdana','Monaco',sans-serif;
  border:none; font-size: 15px;

}
#terminos{
    border:none; font-size: 8px;
}
</style>
</style>
</head>

<body>

  <?php
  include('../dist/includes/dbcon.php');


  ?>

  <?php
  

$total_todos=0;

    $query5=mysqli_query($con,"select * from clientes AS c INNER JOIN tramite AS t
      ON c.id_cliente = t.id_cliente where codigo='$codigo' ")or die(mysqli_error($con));

   while($row5=mysqli_fetch_array($query5)){
 
         $nombre_cliente=$row5['nombre'];
     $telefono_cliente=$row5['telefono'];
          $fecha=$row5['fecha'];
             $area_revision=$row5['area_revision'];
       $id_vendedor=$row5['id_usuario'];

      }

       
    $query2=mysqli_query($con,"select * from usuario  where id='$id_vendedor' ")or die(mysqli_error($con));

   while($row2=mysqli_fetch_array($query2)){

         $nombre_vendedor=$row2['nombre'];
     $telefono_vendedor=$row2['telefono'];
     
      }

       

$sum=0;
      






    $query11=mysqli_query($con,"select * from empresa where id_empresa='1' ")or die(mysqli_error($con));

   while($row11=mysqli_fetch_array($query11)){
        $empresa=$row11['empresa'];
        $nit=$row11['ruc'];


      }
  ?>


  <div id="page-wrap">

    <div class="container">

   <div class="right">

     <div id="customer">

     </div>

       </div>



         <div class="left">
<table class="table table-bordered table-striped"  style="border:none;">
        <tbody>
          <tr style="border:none; " >
            <td style="border:none;" > </td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" > </td>
            <td style="border:none; " ></td>
              <td style="border:none; " ></td>
                <td style="border:none; " ></td>
       
         
       
            <td style="border:none;">
                        <h3><?php echo $empresa;?></h3>
                          <h3><?php echo $nit;?></h3>
                       
                          <h3>Cliente: <?php echo $nombre_cliente;?></h3>
                          <h3>Telefono: <?php echo $telefono_cliente;?></h3>
                          <h3>Estado area: <?php echo $area_revision;?></h3>
                 
                      
                          
            </td>
            <td style="border:none;">&nbsp;</td>
            <td style="border:none;">&nbsp;</td>
          </tr>
          <tr style="border:none; ">
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"> </td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;">&nbsp;</td>
            <td style="border:none; ">&nbsp;</td>
          </tr>
  
               
  </tbody>
      </table>


       </div>
          <div class="right">

     <div id="customer">
          <table class="table table-bordered table-striped"  >
                    <thead>
                      <tr>


                        <th><h3>Nun: <?php echo $codigo;?></h3>
                         <h3> Fecha: <?php echo $fecha;?></h3>
                        </th>
                  
                        
                      
                      </tr>
                    </thead>
                    <tbody>

                 
              
                   </tbody>

                  </table>    
<br>
                       <table class="table table-bordered table-striped"  >
                    <thead>
                      <tr>



                        </th>
                  
                        
                      
                      </tr>
                    </thead>
                    <tbody>

                 
              
                   </tbody>

                  </table>  
<br>




     </div>

       </div>
       <br><br><br><br><br><br><br><br><br><br><br><br><br>    <br>
<table class="table table-bordered table-striped"  style="border:none;">
        <tbody>
          <tr style="border:none; " >
            <td style="border:none;" > </td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" > </td>
            <td style="border:none; " ></td>
              <td style="border:none; " ></td>
                <td style="border:none; " ></td>
                  <td style="border:none; " ></td>
                    <td style="border:none; " ></td>
                      <td style="border:none; " ></td>
                        <td style="border:none; " ></td>
                                      <td style="border:none; " ></td>
                <td style="border:none; " ></td>
                  <td style="border:none; " ></td>
                    <td style="border:none; " ></td>
                      <td style="border:none; " ></td>
                        <td style="border:none; " ></td>
                                      <td style="border:none; " ></td>
                <td style="border:none; " ></td>
                  <td style="border:none; " ></td>
                    <td style="border:none; " ></td>
                      <td style="border:none; " ></td>
                        <td style="border:none; " ></td>
                                      <td style="border:none; " ></td>
                <td style="border:none; " ></td>
                  <td style="border:none; " ></td>
                    <td style="border:none; " ></td>
                      <td style="border:none; " ></td>
                        <td style="border:none; " ></td>
      
              <h4></h4>

            </td>
            <td style="border:none;">&nbsp;</td>
            <td style="border:none;">&nbsp;</td>
          </tr>
          <tr style="border:none; ">
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"> </td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;">&nbsp;</td>
            <td style="border:none; ">&nbsp;</td>
          </tr>
  
               
  </tbody>
      </table>

<center>
       <h1><?php echo $empresa;?></h1>
</center>

<table class="table table-bordered table-striped"  style="border:none;">
        <tbody>
          <tr style="border:none; " >
            <td style="border:none;" > </td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" > </td>
            <td style="border:none; " ></td>
              <td style="border:none; " ></td>
                <td style="border:none; " ></td>
       
         
       
            <td style="border:none;">
                        <h5>Tramite</h5>

                            <br>
   <br>
      <br>
                       <a class = "btn btn-success btn-print" style="    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0; " href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión </a>
    <br>
   <br>
      <br>





    <a class = "btn btn-success btn-print" style="    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0; " href = "tramite.php" ><i class ="glyphicon glyphicon-print"></i>Regresar</a>




 
            </td>
            <td style="border:none;">&nbsp;</td>
            <td style="border:none;">&nbsp;</td>
          </tr>

  
               
  </tbody>
      </table>



                 
                  


<br>

                  

            <table class="table table-bordered table-striped"  >
                    <thead>
                      <tr>

            <td style="border:none;" > </td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" > </td>
            <td style="border:none; " ></td>
              <td style="border:none; " ></td>
                <td style="border:none; " ></td>
       
         
       
            <td style="border:none;">
                        <th style="border:none;">Codigo</th>
                        <th style="border:none;">Tramite</th>
                       <th style="border:none;">Descripcion</th>
                        
                               <th style="border:none;">Area final de revision</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $total=0;
                                     $query4=mysqli_query($con,"select * from area AS a INNER JOIN tramite AS t
      ON a.id_area = t.area_entrega where codigo='$codigo'")or die(mysqli_error($con));
                    while ($row4=mysqli_fetch_array($query4)){
                     $id_area= $row4['id_area'];

                      ?>
                      <tr style="border:none;  ">
                                    <td style="border:none;" > </td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" > </td>
            <td style="border:none; " ></td>
              <td style="border:none; " ></td>
                <td style="border:none; " ></td>
       
         
    
            <td style="border:none;">
              <td style="width: 300px;"><?php echo $row4['codigo'];?></td> 
                <td style="width: 300px;"><?php echo $row4['tramite'];?></td> 
                <td style="width: 300px;"><?php echo $row4['descripcion'];?></td>     
          
                  <td><?php echo $row4['nombre_area'];?></td>
              </tr>
         <?php
            }
              ?>
                 
              
                   </tbody>

                  </table>    



         <div class="left">

            <table class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
  <th style="border:none;"></th>

               
                        <th style="border:none;"></th>
                        <th style="border:none;"></th>
                        
                      
                      </tr>
                    </thead>
                    <tbody>
                          <tr >
             <tr style="border:none;  ">
             <tr style="border:none; " >
            <td style="border:none;" > </td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" > </td>
            <td style="border:none; " ></td>
              <td style="border:none; " ></td>
                <td style="border:none; " ></td>
       
         
       
            <td style="border:none;">

               
      
              </tr>

                   
                 
                  
                 </tr> 
                   </tbody>

                  </table>   

      
       </div>


          
          <div class="right">

     <div id="customer">
    





     </div>

       </div>

   
   

                
<br>
<br>

<br><br><br><br><br>
<p id="terminos"> 


</p>

                    <CENTER>

            <table class="table table-bordered table-striped"  style="border:none;">
                    <thead>
                      <tr>


                        <th style="border:none;"></th>
                        <th style="border:none;"></th>
                       
                        
                      
                      </tr>
                    </thead>
                    <tbody>
                          <tr >

    <tr style="border:none;  width: 70px">
          <tr style="border:none; width: 70px ">
             <tr style="border:none;  ">
              <td style="border:none;"></td> 
                <td style="border:none; "></td>    
<td style="border:none;">------------------------------------------------</td> 
<td style="border:none;"></td> 
<td style="border:none;"></td> 
                    <td style="border:none;"> </td> 
                <td style="border:none; "></td>  

                <td style="border:none;">------------------------------------------------</td> 
                    <td style="border:none;"> </td>   
                <td style="border:none; "></td> 
              </tr>
                 <tr style="border:none; ">
                      <tr style="border:none;  ">
                            <tr style="border:none;  ">
              <td style="border:none; width: 70px"></td> 
                <td style="border:none; width: 70px"> </td> 
                <td style="border:none;"> <?php echo $nombre_vendedor;?>:</td> 
<td style="border:none;"></td> 
<td style="border:none;"></td> 
                    <td style="border:none;"> </td> 
                <td style="border:none; "></td>  

                <td style="border:none;">ENTREGUE CONFORME</td> 
                    <td style="border:none;"> </td> 
                <td style="border:none; "></td>     
              </tr>
       
                  
                 </tr> 
                   </tbody>

                  </table>
                  </CENTER>


       
</body>

</html>
