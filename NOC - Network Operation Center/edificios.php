<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="noc.style.css" rel="stylesheet" type="text/css">

<?php include('topbar.php');
include('edificios_graph.php'); 



 if($_GET['e'] == 'complexo_pedagogico'){

$nome_ed = 'Complexo pedagógico';
$graph_hoje = 'cp_barras_1';
$emails_env = '787';
$kbs_tranf = '7.546';
$pessoas_lgdas = '11.848';
$graph_semana1 = 'cp_dados_transferidos';
$graph_semana2 = 'cp_pessoas_ligadas';
$fundo_edf = 'src/img/edificios/comple_pedg.png';
	 

	}
	
 elseif($_GET['e'] == 'engenharias_i'){

$nome_ed = 'Engenharias I';
$graph_hoje = 'eng1_barras_1';
$emails_env = '987';
$kbs_tranf = '9.154';
$pessoas_lgdas = '12.987';
$graph_semana1 = 'eng1_dados_transferidos';
$graph_semana2 = 'eng1_pessoas_ligadas';
$fundo_edf = 'src/img/edificios/eng1.png';
	 

	}	
	
 elseif($_GET['e'] == 'engenharias_ii'){

$nome_ed = 'Engenharias II';
$graph_hoje = 'eng2_barras_1';
$emails_env = '578';
$kbs_tranf = '6.848';
$pessoas_lgdas = '8.452';
$graph_semana1 = 'eng2_dados_transferidos';
$graph_semana2 = 'eng2_pessoas_ligadas';
$fundo_edf = 'src/img/edificios/eng2.png';
	 

	}		
	
 elseif($_GET['e'] == 'geociencias'){

$nome_ed = 'Geociências';
$graph_hoje = 'geo_barras_1';
$emails_env = '488';
$kbs_tranf = '4.885';
$pessoas_lgdas = '8.545';
$graph_semana1 = 'geo_dados_transferidos';
$graph_semana2 = 'geo_pessoas_ligadas';
$fundo_edf = 'src/img/edificios/geo.png';
	 

	}			
	
 elseif($_GET['e'] == 'biblioteca'){

$nome_ed = 'Biblioteca';
$graph_hoje = 'bb_barras_1';
$emails_env = '321';
$kbs_tranf = '5.321';
$pessoas_lgdas = '4.848';
$graph_semana1 = 'bb_dados_transferidos';
$graph_semana2 = 'bb_pessoas_ligadas';
$fundo_edf = 'src/img/edificios/bb.png';
	 

	}	
	
 elseif($_GET['e'] == 'nave_desporto'){

$nome_ed = 'Nave de desportos';
$graph_hoje = 'desp_barras_1';
$emails_env = '112';
$kbs_tranf = '1.321';
$pessoas_lgdas = '4.848';
$graph_semana1 = 'desp_dados_transferidos';
$graph_semana2 = 'desp_pessoas_ligadas';
$fundo_edf = 'src/img/edificios/desp.png';
	 

	}				

else{
?>
<script type="text/javascript">
window.location = "index.php";
      </script> 
 <?php }

?>

<style type="text/css">
</style>

<title>Edifícios // NOC</title>

<body>
 
 <div id="topbar_content" align="center" class="topbar_content">
 <ul style="line-height:250%;">
 	<a style="color:#2C3E50; line-height:150%;" href="edificios.php?e=biblioteca"><li><img src="src/ico/graphs/1.svg" height="30" /><br />Biblioteca</li></a>
	<a style="color:#2C3E50; line-height:150%;" href="edificios.php?e=complexo_pedagogico"><li><img src="src/ico/graphs/2.svg" height="30" /><br />Complexo pedagógico</li></a>
 	<a style="color:#2C3E50;" href="edificios.php?e=engenharias_i"><li><img src="src/ico/graphs/3.svg" height="30" /><br />Engenharias I</li></a>
 	<a style="color:#2C3E50; line-height:150%;" href="edificios.php?e=engenharias_ii"><li><img src="src/ico/graphs/4.svg" height="30" /><br />Engenharias II</li></a>
    <a style="color:#2C3E50; line-height:150%;" href="edificios.php?e=geociencias"><li><img src="src/ico/graphs/4.svg" height="30" /><br />Geociências</li></a>
    <a style="color:#2C3E50; line-height:150%;" href="edificios.php?e=nave_desporto"><li><img src="src/ico/graphs/4.svg" height="30" /><br />Nave de desportos</li></a>
 </ul>
  </div>

<div id="content" style="background-color:transparent; 	overflow-y:scroll;
" class="content">

<div style="position:absolute; width:100%; height:50%; background-color:#2C3E50; top:0; left:0; border-radius:0.2em;">
<div style="position:absolute; width:100%; height:100%; top:0; left:0; background-image:url(<?php echo $fundo_edf; ?>); background-size:cover; opacity:0.5;"></div>

<div style="position:absolute; z-index:+5; float:left; width:30%; height:100%; top:0; left:0;">
<span style="position:relative; font-size:3em; line-height:100%; top:40px; color:white; left:15px; font-weight:600;"><?php echo $nome_ed; ?></span><br /><br />
<span style="position:relative; font-size:1.5em; line-height:100%; top:40px; color:white; left:15px; font-weight:500;">Estatísticas de hoje<br />
<?php echo date('d/m/y'); ?></span>
</div>

<div align="right" style="position:absolute; z-index:+5; float:right; width:70%; height:100%; top:0; right:0;">

<div id="<?php  echo $graph_hoje; ?>" style=""></div>

</div>

<div align="center" style="position:absolute; left:0; top:105%; width:100%; background-color:white; height:50%; border-radius:0.2em;">

<div style="position:relative; width:20%; color:#2C3E50; height:100%; margin-right:0.5%; display:inline-table;">
<br />
<span style="line-height:300%; position:relative; top:0px;"><span style="font-size:4em; font-weight:600;"><?php echo $emails_env; ?></span><br />
<span style="font-size:1.2em;">e-mails enviados</span></span></div>

<div style="position:relative; width:20%; color:#2C3E50; height:100%; margin-right:0.5%; display:inline-table;">
<br /><span style="line-height:300%; position:relative; top:5px;"><span style="font-size:4em; font-weight:600;"><?php echo $kbs_tranf; ?></span><br />
<span style="font-size:1.2em;">kbs transferidos</span></span>
</div>

<div style="position:relative; width:20%; color:#2C3E50; height:100%; display:inline-table;">
<br /><span style="line-height:300%; position:relative; top:5px;"><span style="font-size:4em; font-weight:600;"><?php echo $pessoas_lgdas; ?></span><br />
<span style="font-size:1.2em;">pessoas ligaram-se</span></span>
</div>

</div>

<div align="center" style="position:absolute; left:0; top:170%; width:100%; background-color:white; height:130%; border-radius:0.2em;">
<span style="position:relative; font-size:2em; font-weight:600; color:#2C3E50; line-height:100%; top:15px;">Estatísticas desta semana</span><br /><br /><br /><br />
<table style="width:100%;" border="0">
<tr>
<td align="center" width="50%"><span style="font-weight:600;">Tráfego semanal (em kbs)</span>
<div id="<?php echo $graph_semana1; ?>"></div>
</td>
<td align="center" width="50%"><span style="font-weight:600;">Pessoas ligadas à rede</span>
<div id="<?php echo $graph_semana2; ?>"></div>
</td>
</tr>
</table>
</div>

</div>


</div>
	
</body>
    </html>
