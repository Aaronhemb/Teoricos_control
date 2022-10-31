<?php

include("conexion.php");


$Gerente = ($_POST["Gerente"]);
$Division = ($_POST["Division"]);
$Proveedor = ($_POST["Proveedor"]);
$Descripcion = ($_POST["Descripcion"]);
$PiezasI = ($_POST["PiezasI"]);
$Status = ($_POST["Status"]);
$Compromiso = ($_POST["Compromiso"]);
$Sku = $_POST['Sku'];
$Ajuste = $_POST['Ajuste'];
$Reporte = $_POST['Reporte'];
$Fecha5 = $_POST['Fecha5'];
$grafica = $_POST['grafica'];

//$password = hash_hmac("sha512", $data['clave'], "LLAVE");


$query = "INSERT INTO extras2(id,Gerente,Division,Proveedor,Descripcion,PiezasI,Status,Compromiso,grafica)VALUES ('$id','$Gerente','$Division','$Proveedor','$Descripcion','$PiezasI','$Status','$Compromiso','$grafica')";

$resultado = $con->query($query);


if ($resultado) {
header("Location:index0.php?i=ok");
}else {
  echo "no se inserto";
}

 ?>
