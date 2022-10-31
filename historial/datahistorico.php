<?php
require("../../admin/Alto_Valor/conexion.php");

header('Content-Type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename=datareportes.csv');

$output = fopen("php://output","w");
fputcsv($output,array("id","Gerente","Division","Proveedor","Fecha","estatus" ));
$query = $con->query("SELECT * FROM historial ORDER BY id ASC");
  while($fetch = $query->fetch_assoc()){
      fputcsv($output,$fetch);

  }
  fclose($output);
 ?>
