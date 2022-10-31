<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<title>MAYOR MERMA</title>
</head>
<body oncontextmenu="return false" onkeydown="return false">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light"
style="
z-index: 10 !important;
    position: fixed !important;
    display: flex !important;
     padding: -51px 8px 7px 6px !important;
  padding-right: 528px !important;
">
<a class="navbar-brand" href="index0.php">SEARS</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">

  <a class="nav-item nav-link active" href="index0.php">ALTO VALOR</a>
  <a class="nav-item nav-link active" style="background-color: gold; border-radius: 26px 23px 20px 24px; margin: -3px;" href="index1.php">MAYOR MERMA</a>
  <a class="nav-item nav-link active" style="    margin: -3px; display: flex;"  href="index2.php">EXTRAS</a>
  <a class="nav-item nav-link active" style="    margin: -3px; display: flex;"  href="calendario/index.php">CALENDARIO</a>
  <a class="nav-item nav-link active"  style="    margin: -3px; display: flex;" href="grafica/grafica2.php">GRAFICA</a>
    <a class="nav-item nav-link active"  style="    margin: -3px; display: flex;" href="historial/historial.php">HISTORICO</a>
      <a class="nav-item nav-link active" style="    margin: -3px; display: flex;" href="reportes/modificar.php">REPORTES</a>
  <a class="nav-item nav-link active" style="    margin: -3px; display: flex;" href="../reportes/view.php">VIEW</a>
</div>
</div>
</nav>
<div class="jumbotron text-center">
  <h1>  TEORICOS MAYOR MERMA TIENDA 128 SAN ANGEL </h1>
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


if (!isset($_POST['Gerente'])){$_POST['Gerente'] = '';}
if (!isset($_POST['Division'])){$_POST['Division'] = '';}
if (!isset($_POST['Status'])){$_POST['Status'] = '';}


?>

<div class="container mt-5">
    <div class="col-12">



    <div class="row">
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">

        <h4 class="card-title">Buscador</h4>
<form id="form2" name="form2" method="POST" action="index1.php">
        <div class="col-12 row">

          <div class="mb-3">
                  <label  class="form-label">Nombre a buscar</label>
                  <select type="text" class="form-control" id="Gerente" name="Gerente" value="<?php echo $_POST["Gerente"] ?>" >
                    <option value="" selected>Seleccione una opcion</option>
                    <option value="CARMEN">CARMEN</option>
                    <option value="FABIAN">FABIAN</option>
                    <option value="NORMA">NORMA</option>
                    <option value="CRISTOFEER">CRISTOFEER</option>
                    <option value="ANA LILIA">ANA LILIA</option>
                    <option value="ADRIANA">ADRIANA</option>
                  </select>
          </div>
            <div class="mb-3">
                    <label  class="form-label">Division a buscar</label>
                    <input type="text" class="form-control" id="Division" name="Division" value="<?php echo $_POST["Division"] ?>" >

            </div>
            <div class="mb-3">
                    <label  class="form-label">Status</label>
                    <select type="text" class="form-control" id="Status" name="Status" value="<?php echo $_POST["Status"] ?>" >
                      <option value="" selected>Seleccione una opcion</option>
                      <option value="Completo">Completo</option>
                        <option value="Incompleto">Incompleto</option>
                    </select>

            </div>

            <h4 class="card-title">Filtro de búsqueda</h4>
                <div class="col-1">
                        <input type="submit" class="btn" value="Ver" style="margin-top: 38px; background-color: #69696A; color: white;">
                </div>
        </div>

        <?php
        /*FILTRO de busqueda////////////////////////////////////////////*/
        if ($_POST['Gerente'] == ''){ $_POST['Gerente'] = ' ';}
        $aKeyword = explode(" ", $_POST['Gerente']);


        if ($_POST["Gerente"] == '' AND $_POST['Division'] == '' AND $_POST['Status'] == '' AND $_POST['buscafechadesde'] == '' AND $_POST['buscafechahasta'] == ''AND $_POST['buscapreciodesde'] == '' AND $_POST['buscapreciohasta'] == ''){
                $query ="SELECT * FROM mayor ";
        }else{


                $query ="SELECT * FROM mayor ";

        if ($_POST["Gerente"] != '' ){
                $query .= "WHERE (Gerente LIKE LOWER('%".$aKeyword[0]."%') OR Division LIKE LOWER('%".$aKeyword[0]."%')) ";

        for($i = 1; $i < count($aKeyword); $i++) {
           if(!empty($aKeyword[$i])) {
               $query .= " OR Gerente LIKE '%" . $aKeyword[$i] . "%' OR Division LIKE '%" . $aKeyword[$i] . "%'";
           }
         }

        }

         if ($_POST["Division"] != '' ){
                $query .= " AND Division = '".$_POST['Division']."' ";
         }
         if ($_POST["Status"] != '' ){
                $query .= " AND Status = '".$_POST['Status']."' ";
         }



}


         $sql = $conexion->query($query);

         $numeroSql = mysqli_num_rows($sql);

        ?>
        <p style="font-weight: bold; color:#69696A;"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> Resultados encontrados</p>
</form>

<a href="../admin/Alto_Valor/descarga/data.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-export"></span> Exportar Tabla como CSV</a>

<div class="table-responsive">
        <table class="table">
                <thead>
                        <tr style="background-color:#69696A; color:#FFFFFF;">
                                <th style=" text-align: center;"> Nombre </th>
                                <th style=" text-align: center;"> Division </th>
                                <th style=" text-align: center;"> Proveedor </th>
                                <th style=" text-align: center;"> Descripcion </th>
                                <th style=" text-align: center;"> Estatus </th>

                        </tr>
                </thead>
                <tbody>
                <?php While($rowSql = $sql->fetch_assoc()) {   ?>

                        <tr>
                        <td style="text-align: center;"><?php echo $rowSql["Gerente"]; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql["Division"]; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql["Proveedor"]; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql["Descripcion"]; ?></td>
                        <td style=" text-align: center;"><?php echo $rowSql["Status"]; ?></td>

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
