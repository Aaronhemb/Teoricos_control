<?php

include("conexion.php");

$id = $_REQUEST['id'];

$query = "DELETE FROM extras WHERE id ='$id' ";

$resultado = $con->query($query);

if ($resultado) {
header("Location:index.php");
//echo "si se inserto";
}else {
  echo "no se inserto";
}

 ?>
