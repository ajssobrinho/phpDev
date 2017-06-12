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


 $listar_avisos = $backoffice_inst->lista_avisos();
include('sidebar_backoffice.php');


if(isset($_POST)){

$cod_user=$_SESSION['cod_user'];
$assunto = $_POST['assunto'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
$anexo = $_POST['anexo'];

$backoffice_inst->insere_avisos($cod_user_add,$assunto,$descricao,$tipo,$anexo);
}




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
<div id ="info_div" style="margin-left:28%; width:32%; width:67.1%; height:70%;">

	<span style="font-size:3.5em; font-weight:500;position:absolute; margin-left:5%;">Inserir Avisos</span>

   <form id="form_avisos" method="post" enctype="multipart/form-data">

      <table class="tab_form" style="margin-top:8%; margin-left:5%;">
      <tr>
         <td>Assunto</td>
         <td><input  type="text" name"assunto" placeholder="Insere o assunto do Comentário" size="40" required="true"/></td>
      </tr>

      <tr>
         <td>Tipo de ajuda</td>
         <td><select name="tipo de ajuda" form="form_avisos">
         <option value="Sugestão">Sugestão</option>
         <option value="Problema">Problema</option>
         </select></td>
      </tr>

      <tr>
         <td>Descrição</td>
         <td><textarea form="form_avisos" cols="80" rows="4" style=" resize:none;" placeholder="Escreve aqui o corpo do aviso"></textarea></td>
      </tr>

      <tr>
         <td>Anexo</td>
         <td>


				<div style="background-color: #f2f2f2;font-size:1.05em; padding:10px; height:22%;">
<?php echo'   '; ?>
	   <input type="file" name="anexo" id="anexo">
				</div>

         </td>
      </tr>

      <tr>
         <td align="center" ><input type="submit" name="adicionar" Value="Inserir" /></td>
      </tr>
      </table>

   </form>

	</div>


	<div id="contentor" style="margin-left:28%; margin-top:40%; width:67.1%; position: absolute;">
	<table style="width:100%;">
	  <tr style="background-color:#F06637; color:#ffffff;">
	    <th style="text-align:center;">Autoria</th>
		 <th style="text-align:center;">Título</th>
	    <th style="text-align:center;">Descrição</th>
	    <th style="text-align:center;">Tipo</th>
	    <th style="text-align:center; width: 80pt;">Data add</th>
		 <th style="text-align:center;">Estado</th>

	  </tr>


	<?php



	    while($listar_avisos_li=$listar_avisos->fetch_array(MYSQLI_BOTH)){

	    $cod_user = $listar_avisos_li['cod_user_add'];

	    $nome_user = $backoffice_inst->lista_user_name_detail($cod_user);


	?>

	 	<tr>
			<td style="text-align:center;"> <a href ="#" onClick="location.href='backoffice_avisos_detail.php?cod_user=<?php echo $listar_avisos_li['cod_ajuda'];?>'" style="color:#000000;"><?php printf($nome_user); ?></a></td>
			<td style="text-align:center;"> <a href ="#" onClick="location.href='backoffice_avisos_detail.php?cod_user=<?php echo $listar_avisos_li['cod_ajuda'];?>'" style="color:#000000;"> <?php echo $listar_avisos_li['titulo'];?> </a></td>
			<td style="text-align:center;"> <a href ="#" onClick="location.href='backoffice_avisos_detail.php?cod_user=<?php echo $listar_avisos_li['cod_ajuda'];?>'" style="color:#000000;"> <?php echo $listar_avisos_li['descricao'];?> </a></td>
			<td style="text-align:center;"> <a href ="#" onClick="location.href='backoffice_avisos_detail.php?cod_user=<?php echo $listar_avisos_li['cod_ajuda'];?>'" style="color:#000000;"> <?php
			 if($listar_avisos_li['tipo_ajuda'] == 'problema'){
				 echo '<p style="color:#b52929"><b> Problema </b></p>';
			 }

			 if($listar_avisos_li['tipo_ajuda'] == 'sugestao'){
				echo '<p style="color:#e9ae14"><b>Sugestão</b></p>';
			}

			 ?> </a></td>
			<td style="text-align:center;"> <a href ="#" onClick="location.href='backoffice_avisos_detail.php?cod_user=<?php echo $listar_avisos_li['cod_ajuda'];?>'" style="color:#000000;"> <?php  echo date('d-n-y',strtotime($listar_avisos_li['data_add'])) ; ?> </a></td>
			<td style="text-align:center;"> <a href ="#" onClick="location.href='backoffice_avisos_detail.php?cod_user=<?php echo $listar_avisos_li['cod_ajuda'];?>'" style="color:#000000;"> <?php
			 if($listar_avisos_li['estado'] == 0){
				 echo 'Inativo';
			 }

			 if($listar_avisos_li['estado'] == 1){
				 echo '<b>Activo</b>';
			 }

			 ?> </a></td>
	  	</tr>


	<?php } ?>

	</table>
</div>
</center>
</body>


</html>
<?php } ?>
