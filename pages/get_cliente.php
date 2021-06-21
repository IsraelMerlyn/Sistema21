<?php


include "dbcon.php";


    $query=mysqli_query($con,"select * from prestamos  where id_cliente='$_GET[id_cliente]'")or die(mysqli_error());

$tipo = array();
while($r=$query->fetch_object()){ $tipo[]=$r; }
if(count($tipo)>0){
print "<option value=''>-- SELECCIONE --</option>";
foreach ($tipo as $s) {
	print "<option value='$s->codigo_prestamo'>Prestamo de-> $s->monto_pagar pagar  cuota de-> $s->cuota</option>";
}
}else{
print "<option value=''>-- NO HAY DATOS --</option>";
}
?>