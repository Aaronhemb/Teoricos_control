
<div class="conteo">



  <table class="table table-striped" style="
  padding: 0px 0px 0px 0px !important;
      margin: -531px 411px 220px 510px!important;
      width: 267px;"  id="datos">

    <thead>
        <th colspan="12">Tabla de Mayor Merma</th>
        <tr>
            <td>Gerente</td>
            <td>Teoricos</td>


          </tr>
    </thead>
    <?php
      $con = new mysqli('localhost','root','','teoricos');
      $query = $con->query("
      SELECT Gerente, COUNT(Gerente) FROM mayor
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
