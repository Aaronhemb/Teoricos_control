
<div class="conteo">



  <table class="table table-striped" style="padding: 0px 0px 0px 0px !important;
    margin: -32px 0px 0px 27px!important; width: 196px;" id="datos">

    <thead>
        <th colspan="12">Tabla de Alto Valor</th>
        <tr>
            <td>Gerente</td>
            <td>Teoricos</td>


          </tr>
    </thead>
    <?php
      $con = new mysqli('localhost','root','','teoricos');
      $query = $con->query("
      SELECT Gerente, COUNT(Gerente), COUNT(Proveedor) FROM extras

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
