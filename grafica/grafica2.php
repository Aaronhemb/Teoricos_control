<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="../../image/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <title>DASHBOARD</title>
</head>
<body oncontextmenu="return false" onkeydown="return false">

  <nav class="navbar navbar-expand-lg navbar-light bg-light"
style="
z-index: 10 !important;
    position: fixed !important;
    display: flex !important;
     padding: -51px 8px 7px 6px !important;
padding-right: 484px!important;
"
  >
  <a class="navbar-brand" href="index0.php">SEARS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">

    <a class="nav-item nav-link active" href="../index0.php">ALTO VALOR</a>
    <a class="nav-item nav-link active" href="../index1.php">MAYOR MERMA</a>
    <a class="nav-item nav-link active" href="../index2.php">EXTRAS</a>
  <a class="nav-item nav-link active" href="../calendario/index.php">CALENDARIO</a>
    <a class="nav-item nav-link active" style="background-color: gold; border-radius: 26px 23px 20px 24px;" href="grafica2.php">GRAFICA</a>
      <a class="nav-item nav-link active" href="../historial/historial.php">HISTORICO</a>
        <a class="nav-item nav-link active"  href="../reportes/modificar.php">REPORTES</a>
		<a class="nav-item nav-link active"   href="../reportes/view.php">VIEW</a>
  </div>
  </div>
  </nav>
  <div class="jumbotron text-center">
    <h1>  DASHBOARD DE TEORICOS </h1>
  </div>
  <!-- SEGUNDA GRAFICA Alto Valor-------------------->
  <h4 id="Alto" style=" margin: 32px 56px 24px 132px;" >Alto Valor Teoricos</h4>
<?php require("grafica1.php"); ?>
<!-- SEGUNDA GRAFICA Extra-------------------->
  <h4 id="Extras" style=" margin: -301px 117px 285px 753px;" >Extras Teoricos</h4>
<br><br><br>

<?php require("grafica3.php"); ?>
<!-- SEGUNDA GRAFICA MAYOR MERMA-------------------->
<h4 id="Mayor" style=" margin: -557px 682px 595px 222px;" >Mayor Merma Teoricos</h4>
<br><br><br>
<?php require("grafica4.php"); ?>
  </div>

<div class="">
<!--llamada a las data para agregar tablas de teoricos     caso Alto Valor------------>
<?php require("data/data.php"); ?>
<!--llamada a las data para agregar tablas de teoricos     caso Extras------------>
<?php require("data/data1.php"); ?>
<!--llamada a las data para agregar tablas de teoricos     caso Mayor Merma------------>
<?php require("data/data2.php"); ?>
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
