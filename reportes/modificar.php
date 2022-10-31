<?php include("../../admin/Alto_Valor/conexion.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="../../image/favicon.ico">
    <title>REPORTES</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  </head>
<body oncontextmenu="return false" onkeydown="return false">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" accesskey=""
    style="
    z-index: 10 !important;
        position: fixed !important;
        display: flex !important;
         padding: -51px 8px 7px 6px !important;
padding-right: 494px !important;

    ">
  <a class="navbar-brand" href="#">Sears</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="../index0.php">ALTO VALOR</a>
      <a class="nav-item nav-link active" href="../index1.php">MAYOR MERMA</a>
      <a class="nav-item nav-link active" href="../index2.php">EXTRAS</a>
  <a class="nav-item nav-link active" href="../calendario/index.php">CALENDARIO</a>
      <a class="nav-item nav-link active" href="../grafica/grafica2.php">GRAFICA</a>
  <a class="nav-item nav-link active" href="../historial/historial.php">HISTORICO</a>
    <a class="nav-item nav-link active"  style="background-color: gold; border-radius: 26px 23px 20px 24px; margin: -3px;" href="modificar.php">REPORTES</a>
  <a class="nav-item nav-link active" href="view.php">VIEW</a>

    </div>
  </div>
</nav>
    <div class="jumbotron text-center">
      <h1>AJUSTES Y REPORTES</h1>
      <p>En este modulo podras anexar tus reportes al CAU </p>
    </div>

  <div class="container">
    <div class="row">

      <div class="col-sm-2">
      </div>

      <?php if (@$_GET["i"]=='ok') { // Quiere decir que el fundamento se envio correctamente?>
<center>
      <h3> La informacion se genero correctamente , gracias!
        <br><br>  <div class="Reportes">
             <a href="view.php" class="btn btn-success pull-right" style="
             margin-left: 8px;
                 padding-left: 272px;
                 padding-right: 255px;

             "><span class="glyphicon glyphicon-export"></span>IR A REPORTES GENERADOS</a>
          </div><br>
          <div class="Reportes">
               <a href="modificarw.php" class="btn btn-info pull-right" style="
               margin-left: 8px;
                   padding-left: 272px;
                   padding-right: 255px;

               "><span class="glyphicon glyphicon-export"></span>GENERAR MAS REPORTES</a>
            </div>
          </h3>
</center>
      <?php
      } else{
      ?>
      <div class="col-sm-8 text-center">


            <form class="" action="proceso_guardar.php" enctype="multipart/form-data" method="post">
              <div class="card"> <br>
                <input class="form-contol"  type="text" name="Division" placeholder="Division" required
               ><br>
               <input class="form-contol"  type="text" name="Proveedor" placeholder="Proveedor" required
               ><br>
               <input class="form-contol"  type="text" name="Sku" placeholder="SKU" required
               ><br>
               <textarea class="form-contol"  name="Ajuste" placeholder="Ajuste a realizar" required
               ></textarea><br>
               <input class="form-contol" name="Reporte" placeholder="Reporte al CAU" required
               ><br>
               <input class="form-contol"  type="date" name="Fecha" placeholder="Fecha" required
               ><br>
                <input class="btn btn-info" type="submit" value="Aceptar"> <br>
              </div>
            </form>
        </div>


  <?php } ?>







      <div class="col-sm-2">
      </div>

    </div>
  </div>



  <br><br><br>
  <div class="jumbotron text-center">


  </div>
  <footer>
    <center>
      <h4>Creadores</h4>
      <p>© 2018 www.AHcompany.com - Todos los derechos reservados.</p>
      <center>
  </footer>

  </body>
</html>
