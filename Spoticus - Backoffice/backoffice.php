<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="style/s3.style.backoffice.css" rel="stylesheet" type="text/css">
<title>Spoticus - Back-office</title>

<?php
session_start();

if(!isset($_SESSION['cod_user']) || $_SESSION['admin']=='N'){
	?>
	<script type="text/javascript">
	window.location = "ups?e=unf";
	</script>
	<?php
}else{

require_once('classes/include.classes.php');
 $backoffice_inst = new backoffice();
include('sidebar_backoffice.php');


 $instancia_logs = new logs();
 $instancia_logs->add_log_paginas($_SESSION['cod_user'], basename(__FILE__));


 $qtd_logs_hoje = $backoffice_inst->lista_logs_hoje();

 ?>

<body>


	<!-- DIV de número de Logs hoje -->
<div id ="info_div" style="margin-left:28%;">
	<span style="font-size:3.5em; font-weight:500;position:absolute; margin-left:4%;">Logs</span>
	<span style="font-size:4.5em; font-weight:500;position:absolute; margin-left:4%; margin-top:25%; color:#DA6641;"> <?php printf($qtd_logs_hoje);?> </span>
	<span style="font-size:1em; font-weight:600;position:absolute; margin-left:4%; margin-top:60%;">HOJE</span>
	<img style="width:90pt; height:90pt; position:absolute; margin-top:28%; margin-left:48%;" src="src/backoffice/dashboard/dashboard_logo_users.svg">
</div>


<!-- DIV do utilizador Top Tasker -->
<div id ="info_div" style="margin-left:50%;">Top Tasker

</div>

<?php $qtd_tasks_mes = $backoffice_inst->lista_tasks_mes(); ?>
<!-- DIV de número de Tasks da semana -->
<div id ="info_div" style="margin-left:72%;">
	<span style="font-size:3.5em; font-weight:500;position:absolute; margin-left:40%;">Tasks</span>
	<span style="font-size:4.5em; font-weight:500;position:absolute; margin-left:32%; margin-top:25%; color:#DA6641;"> <?php printf($qtd_tasks_mes);?> </span>
	<span style="font-size:1em; font-weight:600;position:absolute; margin-left:81%; margin-top:60%;">MÊS</span>
</div>



<!--div para o gráfico de evolução -->
<?php $lista_nr_users= $backoffice_inst->lista_nr_users(); ?>

<script type="text/javascript">
	  google.charts.load('current', {'packages':['corechart']});
	  google.charts.setOnLoadCallback(drawChart);

	  function drawChart() {
		 var data = google.visualization.arrayToDataTable([
			['Mês', 'Utilizadores'],
			['Março',  80],
			['Abril',  216],
			['Maio',  <?php printf($lista_nr_users); ?> ]
		 ]);

		 var options = {
			curveType: 'function',
			legend: { position: 'bottom' }
		 };

		 var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

		 chart.draw(data, options);
	  }
	</script>


<div style="position: absolute; margin-top: 21%; margin-left:40%; background-color:#ffffff; height:230pt ; width:400pt;"  >
<span style="margin-top:4%; margin-left:39%; font-size:1.9em; font-weight:500; ">Evolução</span>


<div id="curve_chart" > </div>




</div>














</div>

</body>


</html>
<?php } ?>
