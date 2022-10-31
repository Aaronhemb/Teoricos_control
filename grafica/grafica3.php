<div class="">

<?php
  $con = new mysqli('localhost','root','','teoricos');
  $query = $con->query("
  SELECT Gerente, COUNT(Proveedor),SUM(grafica) FROM extras2
GROUP BY Gerente;


  ");

  foreach($query as $data)
  {
    $Gerente2[] = $data['Gerente'];
    $grafica2[] = $data['SUM(grafica)'];
    $Proveedor2[] = $data['COUNT(Proveedor)'];
  }

?>

<div class="graficacolores2" style="

    width: 558px !important;
    display: flex !important;
    height: 923px !important;
    margin-top: -335px !important;
    margin-left: 579px;
">

<br><br><br>
<!--Dimenciones del canvas para que la grafica se vea mas pequeña y en posicion-->
<canvas id="myChart2" style="
display: flex;
 width: 1302px;
height: 754px !important;

}
"></canvas>
<script>

const etiquetas = <?php echo json_encode($Gerente2) ?>;
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
	 type: 'bar',
	 data: {
			 labels: etiquetas,
       datasets: [
         {
           label: 'Finalizados',
           data: <?php echo json_encode($grafica2) ?>,
           backgroundColor: [
            'rgba(211, 240, 236)'
           ],
         },
         {
           label: 'Total de teoricos',
           data: <?php echo json_encode($Proveedor2) ?>,
           backgroundColor: [
               'rgba(245, 191, 101)'
           ],
         }
       ]
	 },
	 options: {
			 scales: {
					 yAxes: [{
							 ticks: {
									 beginAtZero: true
							 }
					 }]
			 }
	 }
});
</script>

</div>
