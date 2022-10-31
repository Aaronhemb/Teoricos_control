<?php
require("../../../admin/Alto_Valor/conexion.php");

header('Content-Type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename=datareportes.csv');

$output = fopen("php://output","w");
fputcsv($output,array("id","Division","Proveedor","Sku","Ajuste","Reporte","Fecha" ));
$query = $con->query("SELECT * FROM diferencias ORDER BY id ASC");
  while($fetch = $query->fetch_assoc()){
      fputcsv($output,$fetch);

  }
  fclose($output);
 ?>
