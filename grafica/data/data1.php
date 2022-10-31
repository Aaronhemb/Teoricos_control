
<div class="conteo">



  <table class="table table-striped" style="
        padding: 0px 0px 0px 0px !important;
        margin: -348px 275px 81px 254px!important;
        width: 196px;"  id="datos">

    <thead>
        <th colspan="12">Tabla de Extras</th>
        <tr>
            <td>Gerente</td>
            <td>Teoricos</td>


          </tr>
    </thead>
    <?php
      $con = new mysqli('localhost','root','','teoricos');
      $query = $con->query("
      SELECT Gerente, COUNT(Gerente) FROM extras2
    GROUP BY Gerente;


      ");

      while($row = $query->fetch_assoc()){

       ?>
    <tbody>
    <tr>
      <td><?php echo $row['Gerente']; ?></td>
        <td><?php echo $row['COUNT(Gerente)'];  ?>  </td>
    </tr>
  <?php } ?>

    </tbody>


  </table>


</div>
