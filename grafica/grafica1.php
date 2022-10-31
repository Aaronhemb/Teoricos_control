<div class="">


<?php
  $con = new mysqli('localhost','root','','teoricos');
  $query = $con->query("
  SELECT Gerente, COUNT(Proveedor),SUM(grafica) FROM extras
GROUP BY Gerente;


  ");

  foreach($query as $data)
  {
    $Gerente[] = $data['Gerente'];
    $Proveedor[] = $data['COUNT(Proveedor)'];
    $grafica[] = $data['SUM(grafica)'];
  }

?>


<div style="width: 500px;">
  <canvas id="myChart"></canvas>
</div>

<script>
  // === include 'setup' then 'config' above ===
  const labels = <?php echo json_encode($Gerente) ?>;
  const data = {

    labels: labels,
    datasets: [
      {
        label: 'Alto Valor Finalizados',
        data: <?php echo json_encode($grafica) ?>,
        backgroundColor: [
          'rgba(211, 240, 236)'
        ],
      },
      {
        label: 'Total de teoricos Alto Valor',
        data: <?php echo json_encode($Proveedor) ?>,
        backgroundColor: [
          'rgba(245, 191, 101)'
        ],
      }
    ]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {

      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
</div>
