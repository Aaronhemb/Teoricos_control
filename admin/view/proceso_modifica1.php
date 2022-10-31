<?php

include("../Alto_Valor/conexion.php");

$id = $_REQUEST['id'];
$Division = $_POST['Division'];
$Proveedor = $_POST['Proveedor'];
$SKU = $_POST['SKU'];
$Ajuste = $_POST['Ajuste'];
$Reporte = $_POST['Reporte'];
$Fecha = $_POST['Fecha'];
$estatus = $_POST['estatus'];
$comentario = $_POST['comentario'];



$query = "UPDATE diferencias SET  Division='$Division', Proveedor='$Proveedor', SKU='$SKU', Ajuste='$Ajuste', Fecha='$Fecha', estatus='$estatus', comentario='$comentario' WHERE id ='$id' ";

$resultado = $con->query($query);

if ($resultado) {
header("Location:view0.php");
//echo "si se inserto";
}else {
  echo "no se inserto";
}

 ?>
