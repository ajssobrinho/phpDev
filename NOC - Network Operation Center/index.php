<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="noc.style.css" rel="stylesheet" type="text/css">
<?php
$trafego_eng1 = 1600;
$trafego_eng2 = 970;
$trafego_geociencias = 103;
$trafego_ca =96;
$trafego_biblioteca=651;
$nave_desporto=40;

$emails_enviados = 547;
$pessoas_ligadas = 2784;

$total = $trafego_eng1 + $trafego_biblioteca +$trafego_ca + $trafego_eng2 + $trafego_geociencias + $nave_desporto;

$percent_engI = ($trafego_eng1 * 100 )/ $total;
$percent_engII = ($trafego_eng2 * 100 )/ $total;
$percent_geo = ($trafego_geociencias * 100 )/ $total;
$percent_ca = ($trafego_ca * 100 )/ $total;
$percent_biblio = ($trafego_biblioteca * 100 )/ $total;
$percent_nave = ($nave_desporto * 100 )/ $total;


?>
<?php include('topbar.php'); ?>

<!-- TRÁFEGO DE EDIFÍCIOS -->

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
          ['Biblioteca',  <?php echo $trafego_biblioteca; ?>],
          ['Nave de desportos',  <?php echo $nave_desporto; ?>]
        ]);

        var options = {
          title: '',
          pieHole: 0.4,
		  legend: {position: 'none'}
        };

        var chart = new google.visualization.PieChart(document.getElementById('trafego_edf'));
        chart.draw(data, options);
		
		
      }
    </script>

<title>NOC // Network Operations Center</title>

<body>
 
 <div id="topbar_content" align="center" style="background-color:transparent;" class="topbar_content">
 <span style="font-size:3.5em; color:#2D3F50; font-weight:600;"><?php echo date('G:i'); ?></span>
<br /><span style="font-size:1.5em; color:#2D3F50; ">Quarta- feira, <?php echo date('d')." de Dezembro"; ?></span>
  </div>

<div id="content" align="center" style="background-color:transparent; top:21%;" class="content">

<div class="content_index" style="position:relative;  transition:all .2s; overflow:hidden; display:inline-table; float:left; margin-right:0.6%; margin-bottom:10px; color:white; width:46.5%; height:60%; border-radius:0.2em; padding:10px; background-color:black;">
<div style="position:absolute; width:100%; height:100%; top:0; left:0; background-image:url(src/img/geral/1.jpg); background-size:cover; opacity:0.4;"></div>
<div style="position:absolute; bottom:10px; margin-bottom:auto; margin-top:auto; top:0; bottom:0; height:50%;">
<span style="font-size:2em; margin-right:0.6%; font-weight:600;">Bem-vindo ao NOC!</span><br /><br />
<span style="font-size:1.2em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
</div>
</div>

<div class="content_index" style="position:relative; transition:all .2s; display:inline-table; float:left; margin-bottom:10px; width:20%; height:60%; border-radius:0.2em; padding:10px; background-color:#2D3F50;">
<img draggable="false" src="src/ico/geral/homem_e_mulher.svg" style="margin-top:15px;" height="150" /><br />
<span style="font-size:4em; font-weight:600; color:white;"><?php echo $pessoas_ligadas; ?></span><br />
<span style="font-size:1.2em; color:white;">pessoas ligadas hoje</span>
</div>

<div class="content_index" style="position:relative;  transition:all .2s; display:inline-table; width:26.5%; margin-left:0.2%; height:100%; border-radius:0.2em; padding:10px; background-color:white;"><br /><br />
<span style="font-size:1.8em; font-weight:600;">Tráfego agora<br />na UTAD</span><br />
<div id="trafego_edf" style="position:relative; width:100%; height:50%;"></div>
<span style="font-size:1em;">
Engenharias I<span style="font-weight:600;">&nbsp;&nbsp;&nbsp;<?php echo round($percent_engI, 1); ?>%</span><br />
Engenharias II<span style="font-weight:600;">&nbsp;&nbsp;&nbsp;<?php echo round($percent_engII, 1); ?>%</span><br />
Biblioteca<span style="font-weight:600;">&nbsp;&nbsp;&nbsp;<?php echo round($percent_biblio, 1); ?>%</span><br />
Geociências<span style="font-weight:600;">&nbsp;&nbsp;&nbsp;<?php echo round($percent_geo, 1); ?>%</span><br />
Ciências agrárias<span style="font-weight:600;">&nbsp;&nbsp;&nbsp;<?php echo round($percent_ca, 1); ?>%</span><br />
Nave de deportos<span style="font-weight:600;">&nbsp;&nbsp;&nbsp;<?php echo round($percent_nave, 1); ?>%</span><br />


</span>
</div>

<div class="content_index" style="position:relative; transition:all .2s; margin-right:0.6%; top:-37.8%; display:inline-table; float:left; width:21.5%; height:41%; overflow:hidden; border-radius:0.2em; padding:10px; background-color:white;">
<img src="src/ico/geral/email.svg" draggable="false" height="120" /><br />
<span style="font-size:1.5em; font-weight:600;"><?php echo $emails_enviados; ?></span><br />
<span style="font-size:1.3em;">e-mails enviados</span>
</div>

<div class="content_index" style="position:relative; transition:all .2s; margin-right:0.6%; top:-37.8%; color:white; display:inline-table; float:left; width:45%; height:41%; overflow:hidden; border-radius:0.2em; padding:10px; background-color:#2D3F50;">

<div id="graph_eng1" style="width:100%; padding:0px; background-color:transparent; color:white;" align="center" class="graph">


<span style="font-weight:600; font-size:1.3em;">Geral</span><br />

	<div id="graph_eng1_back" align="left" style="width:100%; left:12%; height:80%; position:relative; padding:5px;">
<span class="text_dotted_lines">300k&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="dotted_line_graph"></div></span><br />
<span class="text_dotted_lines">200k&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="dotted_line_graph"></div></span><br />
<span class="text_dotted_lines">100k&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="dotted_line_graph"></div></span><br />
<span class="text_dotted_lines">0k&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="dotted_line_graph">
	</div></span><br />
<span class="text_dotted_lines">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;09:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;21:00</span>

	<div align="left" id="graph_eng1_values" class="graph_values">
<ul>
<li style="bottom:20px;"></li>
<li style="bottom:70px;"></li>
<li style="bottom:15px;"></li>
<li style="bottom:78px;"></li>
<li style="bottom:23px;"></li>
<li style="bottom:8px;"></li>
<li style="bottom:14px; background-color:white;"></li>

		<div class="graph_lines" style="width:70px; left:0px; -ms-transform: rotate(138deg);     -webkit-transform: rotate(138deg); transform: rotate(138deg);"></div>

		<div class="graph_lines" style="width:70px; bottom:54px; left:54px; -ms-transform: rotate(45deg);     -webkit-transform: rotate(45deg); transform: rotate(45deg);"></div>

		<div class="graph_lines" style="width:87px; bottom:62px; left:100px; -ms-transform: rotate(138deg);     -webkit-transform: rotate(138deg); transform: rotate(131deg);"></div>

		<div class="graph_lines" style="width:70px; bottom:70px; left:164px; -ms-transform: rotate(45deg);     -webkit-transform: rotate(45deg); transform: rotate(45deg);"></div>

		<div class="graph_lines" style="width:60px; bottom:39px; left:225px; -ms-transform: rotate(15deg);     -webkit-transform: rotate(15deg); transform: rotate(15deg);"></div>

		<div class="graph_lines" style="width:60px; bottom:39px; left:275px; -ms-transform: rotate(45deg);     -webkit-transform: rotate(45deg); transform: rotate(-6deg);"></div>

</ul>
    </div>


</div>
</div>


</div>
	
</body>
    </html>
