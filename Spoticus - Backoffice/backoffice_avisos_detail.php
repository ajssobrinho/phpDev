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
 $cod_user = $_GET['cod_user'];
include('sidebar_backoffice.php');



 $instancia_logs = new logs();
 $instancia_logs->add_log_paginas($_SESSION['cod_user'], basename(__FILE__));

 ?>
<body>

<div style=" position: absolute; margin-left:36%; margin-top:9%; background-color:#ffffff; width:50%; height:60%;">
<?php $nome_user_detail = $backoffice_inst->lista_user_name_detail($cod_user); ?>
	<span style="font-size:3.5em; font-weight:500;position:absolute; margin-left:7%; margin-top:4%;"><?php printf($nome_user_detail); ?> </span>
<?php $foto_user_detail = $backoffice_inst->lista_user_foto_detail($cod_user); ?>
	<div id="user_image_detail" style="background: url(<?php printf($foto_user_detail); ?>) 50% 50% no-repeat; background-size:cover;  margin-top: 15%; margin-left:10%; margin-right:auto; border-radius:50%; ">

	</div>

	<span style="font-size:1.5em; font-weight:500;position:absolute; width:26%; margin-left:8.6%; margin-top:2%; text-align:center; position:absolute;">---|<?php printf($cargo_user_detail); ?>|---</span>




	<span id="sair" style=" font-weight:500; position:absolute; margin-left:93%; margin-top:-34%;"><a style="color:#000000; text-decoration:none;" href="#" onClick="location.href='backoffice_utilizadores.php'">Sair</a></span>

<?php

$nr_tasks_user=$backoffice_inst ->lista_tasks_user($cod_user);

?>
	<table style="width:40%; position:absolute; margin-top:-20%; margin-left: 50%;">

			<tr>
				<td>Último Log</td> <td>23-14-2016</td>
			</tr>

			<tr>
				<td>Nr. de Logs</td> <td><?php printf($nr_logs_user); ?></td>
			</tr>

			<tr>
				<td>Nr. de Spots</td> <td><?php printf($nr_spots_user); ?></td>
			</tr>


			<tr>
				<td>Nr. de Tasks</td> <td><?php printf($nr_tasks_user); ?></td>
			</tr>

			<tr>
				<td>Data de Entrada</td> <td>19-04-2016</td>
			</tr>

	</table>
<div style="margin-left:17%; margin-top:-10%;">
	<div style="display:inline-block; margin-top:25%; margin-left:0%; "><img style=" width:20pt; height:20pt;" src="src/backoffice/editar.svg" alt="Smiley face"><span style="margin-left:1%;" >Editar</span></div>
	<div style="display:inline-block; margin-top:25%; margin-left:5%;"><img style=" width:20pt; height:20pt;" src="src/backoffice/reiniciar.svg" alt="Smiley face"><span style="margin-left:1%;">Reiniciar</span></div>
	<div style="display:inline-block; margin-top:25%; margin-left:5%;"><img style=" width:20pt; height:20pt;"  src="src/backoffice/enviar_mensagem.svg" alt="Smiley face"> <span style="margin-left:1%;">Enviar mensagem</span></div>
	<div style="display:inline-block; margin-top:25%; margin-left:5%;"><img style=" width:20pt; height:20pt;"  src="src/backoffice/eliminar.svg" alt="Smiley face"> <span style="margin-left:1%;">Eliminar</span></div>
</div>


</div>

</body>


</html>
<?php }
?>
