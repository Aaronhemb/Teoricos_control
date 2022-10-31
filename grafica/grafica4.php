<div class="">

<?php
  $con3 = new mysqli('localhost','root','','teoricos');
  $query3 = $con3->query("
  SELECT Gerente, COUNT(Proveedor),SUM(grafica) FROM mayor
GROUP BY Gerente;


  ");

  foreach($query3 as $data3)
  {
    $Gerente3[] = $data3['Gerente'];
    $grafica3[] = $data3['SUM(grafica)'];
    $Proveedor3[] = $data3['COUNT(Proveedor)'];
  }

?>

<br><br>
<!--Dimenciones del div para que la grafica se vea mas pequeña y en posicion-->
<div class="graficacolores3" style="
display: flex !important;
width: 732px !important;
height: 655px !important;
margin-top: -666px !important;
">

<br><br><br>
<!--Dimenciones del canvas para que la grafica se vea mas pequeña y en posicion-->
<canvas id="myChart3" style="
display: flex;
 width: 1302px;
height: 754px !important;

}
"></canvas>
<script>

const etiquetas3 = <?php echo json_encode($Gerente3) ?>;
var ctx = document.getElementById('myChart3').getContext('2d');
var myChart = new Chart(ctx, {
	 type: 'bar',
	 data: {
			 labels: etiquetas3,
       datasets: [
         {
           label: 'Finalizados',
           data: <?php echo json_encode($grafica3) ?>,
           backgroundColor: [
            'rgba(211, 240, 236)'
           ],
         },
         {
           label: 'Total de teoricos',
           data: <?php echo json_encode($Proveedor3) ?>,
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
