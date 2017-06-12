<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
 ?>

<body>
<?php $lista_nr_users= $backoffice_inst->lista_nr_users();
	$lista_nr_users_hoje=$backoffice_inst->lista_nr_users_hoje();
	$lista_nr_users_inativos=$backoffice_inst->lista_nr_users_inativos();
	$lista_atividade_semana=$backoffice_inst->lista_atividade_semana();

?>
	<!-- DIV de número de Logs hoje -->
<div id ="info_div" style="margin-left:28%; width:32%;">

	<span style="font-size:3.5em; font-weight:500;position:absolute; margin-left:4%;">Utilizadores</span>
	<span style="font-size:4.5em; font-weight:500;position:absolute; margin-left:4%; margin-top:18%; color:#DA6641;"> <?php printf($lista_nr_users);?> </span>
	<span style="font-size:1em; font-weight:600;position:absolute; margin-left:4%; margin-top:38.5%;">TOTAL</span>
	<span style="font-size:4.5em; font-weight:500;position:absolute; margin-left:40%; margin-top:18%; color:#DA6641;"> <?php printf($lista_nr_users_hoje);?> </span>
	<span style="font-size:1em; font-weight:600;position:absolute; margin-left:40%; margin-top:38.5%;">HOJE</span>
	<span style="font-size:4.5em; font-weight:500;position:absolute; margin-left:70%; margin-top:18%; color:#DA6641;"> <?php printf($lista_nr_users_inativos);?> </span>
	<span style="font-size:1em; font-weight:600;position:absolute; margin-left:70%; margin-top:38.5%;">Cancelados</span>


	</div>


<!-- DIV do utilizador Top Tasker -->
<div id ="info_div" style="margin-left:63%;  width:32%;">
	<span style="font-size:2.6em; font-weight:500;position:absolute; margin-left:5%; width:60%;">Utilizadores ativos nos últimos 7 dias</span>
	<span style="font-size:4.5em; font-weight:500;position:absolute; margin-left:68%; margin-top:13%; color:#DA6641;"> <?php printf($lista_atividade_semana);?></span>
</div>

<div id="contentor" style="margin-left:28%; margin-top:21%; width:67.1%; position: absolute;">
<table style="width:100%;">
  <tr style="background-color:#F06637; color:#ffffff;">
    <th style="text-align:center;">Nome</th>
    <th style="text-align:center;">Privilégios</th>
    <th style="text-align:center;">Ativo</th>
    <th style="text-align:center;">Total de Logs:</th>
    <th style="text-align:center;">Data de entrada</th>
  </tr>
<?php

    //instanciação da classe BACKOFFICE

    $listar_utilizadores = $backoffice_inst->lista_users('ORDER BY data_add ASC');

    while($listar_utilizadores_li=$listar_utilizadores->fetch_array(MYSQLI_BOTH)){

    $cod_user = $listar_utilizadores_li['cod_user'];

    $qtd_logs = $backoffice_inst->lista_logs_users($cod_user);
  ?>

 <tr>

    <td><a href ="#" onClick="location.href='backoffice_utilizadores_detail.php?cod_user=<?php echo $cod_user; ?>'" style="color:#000000;"><?php echo $listar_utilizadores_li['nome'].' '.$listar_utilizadores_li['apelido'] ; ?></a></td>
    <td style="text-align:center;"> <a href ="#" onClick="location.href='backoffice_utilizadores_detail.php?cod_user=<?php echo $cod_user; ?>'" style="color:#000000;"> <?php if($listar_utilizadores_li['admin'] =='S'){
		echo' <b>Administrador</b>';
	}else{
		 echo'Standart';
	}
		  ?> </a> </td>

    <td ><a href ="#" onClick="location.href='backoffice_utilizadores_detail.php?cod_user=<?php echo $cod_user; ?>'" style="color:#000000;"><?php if($listar_utilizadores_li['ativo'] =='S'){
		echo' <div style="margin-left:43%; width:10pt; height:10pt; border-radius:50%; background-color:#20b51d;"></div>';
	}else{
		 echo'<div style="margin-left:43%; width:10pt; height:10pt; border-radius:50%; background-color:#b52b1d;"></div>';
	}
	?></a>

	</td></td>
    <td style="text-align:center;"> <a href ="#" onClick="location.href='backoffice_utilizadores_detail.php?cod_user=<?php echo $cod_user; ?>'" style="color:#000000;"><?php printf($qtd_logs); ?> <a/></td>
    <td style="text-align:center;"> <a href ="#" onClick="location.href='backoffice_utilizadores_detail.php?cod_user=<?php echo $cod_user; ?>'" style="color:#000000;"> <?php echo date('d-n-Y',strtotime($listar_utilizadores_li['data_reg'])) ; ?> </a></td>
  	</tr>


<?php } ?>

</table>
</div>
</center>
</body>


</html>
<?php } ?>
