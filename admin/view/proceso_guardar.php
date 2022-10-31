<?php

include("../../admin/Alto_Valor/conexion.php");



$Division = ($_POST["Division"]);
$Proveedor = ($_POST["Proveedor"]);
$Sku = $_POST['Sku'];
$Ajuste = $_POST['Ajuste'];
$Reporte = $_POST['Reporte'];
$Fecha = $_POST['Fecha'];
$Fecha = $_POST['estatus'];

//$password = hash_hmac("sha512", $data['clave'], "LLAVE");


$query = "INSERT INTO diferencias (id,Division,Proveedor,SkU,Ajuste,Reporte,Fecha,estatus)VALUES ('$id','$Division','$Proveedor','$Sku','$Ajuste','$Reporte','$Fecha','estatus')";

$resultado = $con->query($query);


if ($resultado) {
header("Location:modificar.php?i=ok");
}else {
  echo "no se inserto";
}

 ?>
