<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="noc.style.css" rel="stylesheet" type="text/css">

<?php include('topbar.php');
include('estadoatual_graph.php'); 

$nome_ed = 'Pessoas ligadas à rede';
$graph_hoje = 'pessoas_ligadas_agora';
$n_pessoas_ligadas = '415';
$kbs_tranf = '5.321';
$pessoas_lgdas = '4.848';
$graph_semana1 = 'bb_dados_transferidos';
$graph_semana2 = 'bb_pessoas_ligadas';
$fundo_edf = 'src/img/edificios/eng1.png';
?>
<style type="text/css">
</style>

<title>Estado atual // NOC</title>

<body>
 
 <div id="topbar_content" align="center" class="topbar_content">
 <ul style="line-height:250%;">
 	<a style="color:#2C3E50;" href="edificios.php?e=biblioteca"><li><img src="src/ico/graphs/1.svg" height="30" /><br />Edifícios</li></a>
	<a style="color:#2C3E50;" href="edificios.php?e=complexo_pedagogico"><li><img src="src/ico/graphs/2.svg" height="30" /><br />Dispositivos</li></a>
 	<a style="color:#2C3E50;" href="edificios.php?e=engenharias_i"><li><img src="src/ico/graphs/3.svg" height="30" /><br />Engenharias I</li></a>
 	<a style="color:#2C3E50;" href="edificios.php?e=engenharias_ii"><li><img src="src/ico/graphs/4.svg" height="30" /><br />Problemas</li></a>
 </ul>
  </div>

<div id="content" style="overflow-y:scroll;
" class="content">

<div style="position:absolute; width:100%; height:50%; background-color:#2C3E50; top:0; left:0; border-radius:0.2em;">
<div style="position:absolute; width:100%; height:100%; top:0; left:0; background-image:url(<?php echo $fundo_edf; ?>); background-size:cover; opacity:0.5;"></div>

<div style="position:absolute; z-index:+5; float:left; width:30%; height:100%; top:0; left:0;">
<span style="position:relative; font-size:3em; line-height:100%; top:40px; color:white; left:15px; font-weight:600;"><?php echo $nome_ed; ?></span><br /><br />
<span style="position:relative; font-size:1.5em; line-height:100%; top:40px; color:white; left:15px; font-weight:500;">Neste momentos estão<br />
<?php echo $n_pessoas_ligadas; ?> pessoas ligadas à rede do campus.</span>
</div>

<div align="right" style="position:absolute; z-index:+5; float:right; width:70%; height:100%; top:0; right:0;">

<div id="<?php  echo $graph_hoje; ?>" style=""></div>

</div>


<div align="center" style="position:absolute; left:0; top:110%; width:100%; background-color:white; height:130%; border-radius:0.2em;">
<span style="position:relative; font-size:2em; font-weight:600; color:#2C3E50; line-height:100%; top:15px;">Hosts dos edifícios</span><br /><br /><br /><br />
<table style="width:100%;" border="0">
<tr>
<td align="center" width="50%"><span style="font-weight:600; font-size:1.5em;">Biblioteca</span>
<br /><br />
<table style="width:80%; padding:5px;" border="0">
<tr>
<td style="font-weight:600;">Host</td>
<td style="font-weight:600;">Estado</td>
<td style="font-weight:600;">Serviços</td>
<td style="font-weight:600;">Ações</td>
</tr>

<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP01.BIBLIOTECA</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP02.BIBLIOTECA</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP03.BIBLIOTECA</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP04.BIBLIOTECA</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP05.BIBLIOTECA</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP06.BIBLIOTECA</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP07.BIBLIOTECA</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP08.BIBLIOTECA</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP09.BIBLIOTECA</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">BIBLIOTECA</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">BIBLIOTECA_SW1</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">BIBLIOTECA_SW2</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>

</table>

</td>
<td align="center" width="50%"><span style="font-weight:600; font-size:1.5em;">Complexo pedagógico</span>
<br /><br />
<table style="width:80%; padding:5px;" border="0">
<tr>
<td style="font-weight:600;">Host</td>
<td style="font-weight:600;">Estado</td>
<td style="font-weight:600;">Serviços</td>
<td style="font-weight:600;">Ações</td>
</tr>

<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP01.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP02.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP03.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP04.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP05.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP06.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP07.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP08.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP09.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP10.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP11.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP12.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP13.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP14.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP15.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP16.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP17.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>
<tr style="background-color:#F5F7F7;">
<td style="padding:5px;">AP18.CP</td>
<td style="background-color:#9CDAA4; padding:5px;">UP</td>
<td style="padding:5px;">2 OK</td>
<td style="padding:5px;"><img src="src/ico/ferramentas.svg" height="15" /></td>
</tr>

</table>

</td>
</tr>
</table>
</div>

</div>


</div>
	
</body>
    </html>
