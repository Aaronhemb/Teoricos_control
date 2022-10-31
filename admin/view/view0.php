<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="../../image/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<title>REPORTES</title>
</head>
<body oncontextmenu="return false" onkeydown="return false">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">SEARS</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">

  <a class="nav-item nav-link active" href="../Alto_Valor/index.php">Alto Valor</a>
  <a class="nav-item nav-link active" href="../Mayor_Merma/index.php">Mayor Merma</a>
  <a class="nav-item nav-link active" href="../Extras/index.php">Extras</a>
  <a class="nav-item nav-link active" style="background-color: gold; border-radius: 26px 23px 20px 24px;" href="view0.php">Reportes</a>


</div>
</div>
</nav>
<div class="jumbotron text-center">
  <h1> REPORTES Y AJUSTE TIENDA 128 SAN ANGEL </h1>
</div>

</body>
</html>

<!--Conexion a base de datos-->
<?php

$servidor= "localhost";
$usuario= "root";
$password = "";
$nombreBD= "teoricos";
$conexion = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conexion->connect_error) {
    die("la conexión ha fallado: " . $conexion->connect_error);
}


if (!isset($_POST['Division'])){$_POST['Division'] = '';}
if (!isset($_POST['Proveedor'])){$_POST['Proveedor'] = '';}
if (!isset($_POST['color'])){$_POST['color'] = '';}
if (!isset($_POST['buscafechadesde'])){$_POST['buscafechadesde'] = '';}
if (!isset($_POST['buscafechahasta'])){$_POST['buscafechahasta'] = '';}
if (!isset($_POST['buscapreciodesde'])){$_POST['buscapreciodesde'] = '';}
if (!isset($_POST['buscapreciohasta'])){$_POST['buscapreciohasta'] = '';}
if (!isset($_POST["orden"])){$_POST["orden"] = '';}


?>

<div class="container mt-5">
    <div class="col-12">



    <div class="row">
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

        <h4 class="card-title">Buscador</h4>
<form id="form2" name="form2" method="POST" action="view.php">
        <div class="col-12 row">

            <div class="mb-3">
                    <label  class="form-label">Division a buscar</label>
                    <input type="text" class="form-control" id="Division" name="Division" value="<?php echo $_POST["Division"] ?>" >

            </div>
            <div class="mb-3">
                    <label  class="form-label">Proveedor a buscar</label>
                    <input type="text" class="form-control" id="Proveedor" name="Proveedor" value="<?php echo $_POST["Proveedor"] ?>" >

            </div>

            <h4 class="card-title">Filtro de búsqueda</h4>
                <div class="col-1">
                        <input type="submit" class="btn" value="Ver" style="margin-top: 38px; background-color: #69696A; color: white;">
                </div>
        </div>

        <?php
        /*FILTRO de busqueda////////////////////////////////////////////*/
        if ($_POST['Division'] == ''){ $_POST['Division'] = ' ';}
        $aKeyword = explode(" ", $_POST['Division']);


        if ($_POST["Division"] == '' AND $_POST['Proveedor'] == '' AND $_POST['color'] == '' AND $_POST['buscafechadesde'] == '' AND $_POST['buscafechahasta'] == ''AND $_POST['buscapreciodesde'] == '' AND $_POST['buscapreciohasta'] == ''){
                $query ="SELECT * FROM diferencias ";
        }else{


                $query ="SELECT * FROM diferencias ";

        if ($_POST["Division"] != '' ){
                $query .= "WHERE (Division LIKE LOWER('%".$aKeyword[0]."%') OR Proveedor LIKE LOWER('%".$aKeyword[0]."%')) ";

        for($i = 1; $i < count($aKeyword); $i++) {
           if(!empty($aKeyword[$i])) {
               $query .= " OR Division LIKE '%" . $aKeyword[$i] . "%' OR Proveedor LIKE '%" . $aKeyword[$i] . "%'";
           }
         }

        }

         if ($_POST["Proveedor"] != '' ){
                $query .= " AND Proveedor = '".$_POST['Proveedor']."' ";
         }



}


         $sql = $conexion->query($query);

         $numeroSql = mysqli_num_rows($sql);

        ?>
        <p style="font-weight: bold; color:#69696A;"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> Resultados encontrados</p>
</form>

<a href="descarga/datareportes.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-export"></span> Exportar Tabla como CSV</a>

<div class="table-responsive">
        <table class="table">
                <thead>
                        <tr style="background-color:#69696A; color:#FFFFFF;">
                                <th style=" text-align: center;"> Division </th>
                                <th style=" text-align: center;"> Proveedor </th>
                                <th style=" text-align: center;"> SKU </th>
                                <th style=" text-align: center;"> Ajuste </th>
                                <th style=" text-align: center;"> Reporte CAU </th>
                                <th style=" text-align: center;"> Fecha </th>
                                <th style=" text-align: center;"> Estatus </th>
                                <th style=" text-align: center;"> comentario </th>
                                <th style=" text-align: center;"> Modificar </th>
                        </tr>
                </thead>
                <tbody>
                <?php While($rowSql = $sql->fetch_assoc()) {   ?>

                        <tr>
                        <td style="text-align: center;"><?php echo $rowSql["Division"]; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql["Proveedor"]; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql["SKU"]; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql["Ajuste"]; ?></td>
                        <td style=" text-align: center;"><?php echo $rowSql["Reporte"]; ?></td>
                        <td style=" text-align: center;"><?php echo $rowSql["Fecha"]; ?></td>
                        <td style=" text-align: center;"><?php echo $rowSql["estatus"]; ?></td>
                        <td style=" text-align: center;"><?php echo $rowSql["comentario"]; ?></td>
                        <td> <a href="modificar1.php?id=<?php echo $rowSql['id']; ?>">Modificar</a></td>
                        </tr>

               <?php } ?>
                </tbody>
        </table>
</div>


</div>
</div>
</div>
</div>


    </div>
</div>

<div class="jumbotron text-center">
</div>

  </div>
  <footer>
    <center>
      <h4>Creadores</h4>
      <p>© 2022 www.AHcompany.com - Todos los derechos reservados.</p>
      <center>
  </footer>




</body>
</html>
