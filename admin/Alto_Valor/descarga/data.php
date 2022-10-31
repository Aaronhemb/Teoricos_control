<?php
require("../conexion.php");

header('Content-Type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename=data.csv');

$output = fopen("php://output","w");
fputcsv($output,array("id","Gerente","Division","Proveedor","Descripcion","PiezasI","Fecha4","Status","Compromiso" ));
$query = $con->query("SELECT * FROM extras ORDER BY id ASC");
  while($fetch = $query->fetch_assoc()){
      fputcsv($output,$fetch);

  }
  fclose($output);
 ?>
