<?php include("../Alto_Valor/conexion.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="../../image/favicon.ico">
    <title>Administrador Proveedor</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Se anexa el scrip para el select y el imput ---------------->
          <script type="text/javascript">
          $(function () {
      $(document).on('change', '#mySelect', function () {
          var tagOption = $('option:selected', this);
          $('#myInput').val(tagOption.val());
          $('#myInput2').val(tagOption.text());
      });
    });
          </script>

  </head>
<body oncontextmenu="return false" onkeydown="return false">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Sears</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">

        <a class="nav-item nav-link active"  href="../Alto_Valor/index.php">Alto Valor</a>
        <a class="nav-item nav-link active" href="../Mayor_Merma/index.php">Mayor Merma</a>
        <a class="nav-item nav-link active" href="../Extras/index.php">Extras</a>
        <a class="nav-item nav-link active" style="background-color: gold; border-radius: 26px 23px 20px 24px;" href="modificar1.php">Reportes</a>


    </div>
  </div>
</nav>
    <div class="jumbotron text-center">
      <h1>ADMINISTRADOR</h1>
      <p>En este modulo podras editar los elementos de cada reporte </p>
    </div>

  <div class="container">
    <div class="row">

      <div class="col-sm-2">
      </div>

      <?php if (@$_GET["i"]=='oki') { // Quiere decir que el fundamento se envio correctamente?>
<center>
      <h3> La informacion se a modificado correctamente podras ver los resultados o podras continuar modificando,
        gracias! <br> <br> <br>
            <a href="view0.php">Visualizar tu  informacion Modifiada</a></h3>
</center>
      <?php




      } else{
      ?>



      <div class="col-sm-8 text-center">
        <?php

        $id = $_REQUEST['id'];

          $query = "SELECT * FROM diferencias WHERE id ='$id' ";
          $resultado = $con->query($query);
          $row = $resultado->fetch_assoc();

         ?>
          <form class="" action="proceso_modifica1.php?id=<?php echo $row['id']; ?>" method="post">
            <div class="card">
            <!-- <?php date_default_timezone_set("America/Mexico_City");
              //$fechaactual=date("y-m-d h:i:s");
              ?>--->
              <br>

             <input class="form-contol"  type="text" name="Division" placeholder="Division" required
             value="<?php echo $row['Division']; ?>"/><br>
             <input class="form-contol"  type="text" name="Proveedor" placeholder="Proveedor" required
             value="<?php echo $row['Proveedor']; ?>"/><br>
             <input class="form-contol"  type="text" name="SKU" placeholder="SKU" required
             value="<?php echo $row['SKU']; ?>"/><br>
             <input class="form-contol"  type="text" name="Ajuste" placeholder="Ajuste"
             value="<?php echo $row['Ajuste']; ?>"/><br>
             <input class="form-contol"  type="text" name="Reporte" placeholder="Reporte"
             value="<?php echo $row['Reporte']; ?>"/><br>
             <label>Fecha y hora de Inicio de Escaneo</label>
             <input class="form-contol"  type="date"  name="Fecha" placeholder="Fecha"
             value="<?php echo $row['Fecha']; ?>"/><br>
             <select class="form-contol"  type="text" name="estatus" placeholder="Estatus"
             value="<?php echo $row['estatus']; ?>"/>

             <option value="En proceso">En Proceso</option>
              <option value="Finalizado">Finalizado</option>


           </select><br>
           <textarea class="form-contol"  type="text" name="comentario" placeholder="comentario"
           value="<?php echo $row['comentario']; ?>"/>   </textarea><br>



              <input class="btn btn-info" type="submit" value="Aceptar"><br><br><br>

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
      <p>© 2022 www.AHcompany.com - Todos los derechos reservados.</p>
      <center>
  </footer>

  </body>
</html>
