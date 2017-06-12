<?php
$trafego_eng1 = 1600;
$trafego_eng2 = 970;
$trafego_geociencias = 103;
$trafego_ca =96;
$trafego_biblioteca=651;


$total = $trafego_eng1 + $trafego_biblioteca +$trafego_ca + $trafego_eng2 + $trafego_geociencias;

$percent_engI = ($trafego_eng1 * 100 )/ $total;
$percent_engII = ($trafego_eng2 * 100 )/ $total;
$percent_geo = ($trafego_geociencias * 100 )/ $total;
$percent_ca = ($trafego_ca * 100 )/ $total;
$percent_biblio = ($trafego_biblioteca * 100 )/ $total;





?>


<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      
	  	  
	  function drawChart() {

		  
        var data = google.visualization.arrayToDataTable([
          ['Edifício', 'GB'],
          ['Engenharias I', <?php echo $trafego_eng1; ?>],
          ['Engenharias II',  <?php echo $trafego_eng2; ?>],
          ['Geociências',  <?php echo $trafego_geociencias; ?>],
          ['Ciências Agrárias', <?php echo $trafego_ca; ?>],
          ['Biblioteca',  <?php echo $trafego_biblioteca; ?>]
        ]);

        var options = {
          title: 'Acessos por Edifício',
          pieHole: 0.4,
		  legend:{position: 'none'},
		  slices:{  2 : {offset: 0.1},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <center>
    <div id="donutchart" style="width: 1200px; height: 620px;"></div>
    <div id="legenda">
    <p>Engenharias I: <?php echo round($percent_engI, 1).'%';?></p>
    <p>Engenharias II: <?php echo round($percent_engII, 1).'%';?></p>
    <p>Geociências: <?php echo round($percent_geo, 1).'%';?></p>
    <p>Ciências Agrárias: <?php echo round($percent_ca, 1).'%';?></p>
    <p>Biblioteca: <?php echo round($percent_biblio, 1).'%';?></p>
    </div>
    
    
    </center>
  </body>
</html>