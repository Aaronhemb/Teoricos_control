<?php

include("conexion.php");

$id = $_REQUEST['id'];
$Gerente = $_POST['Gerente'];
$Division = $_POST['Division'];
$Proveedor = $_POST['Proveedor'];
$Descripcion = $_POST['Descripcion'];
$PiezasI = $_POST['PiezasI'];
$Fecha1 = $_POST['Fecha1'];
$Fecha2 = $_POST['Fecha2'];
$Fecha3 = $_POST['Fecha3'];
$Fecha4 = $_POST['Fecha4'];
$Status = $_POST['Status'];
$Compromiso = $_POST['Compromiso'];
$grafica = $_POST['grafica'];


$query = "UPDATE mayor SET  Gerente='$Gerente', Division='$Division', Proveedor='$Proveedor', Descripcion='$Descripcion', PiezasI='$PiezasI', Fecha1='$Fecha1', Fecha2='$Fecha2', Fecha3='$Fecha3', Fecha4='$Fecha4', Status='$Status', Compromiso='$Compromiso', grafica='$grafica' WHERE id ='$id' ";

$resultado = $con->query($query);

if ($resultado) {
header("Location:index.php");
//echo "si se inserto";
}else {
  echo "no se inserto";
}

 ?>
