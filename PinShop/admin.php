<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

include('topbar.php');
include('connect_db.php');
include('consultas.php');
include('script.php');

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if (!isset($_SESSION['cod_user'])==""){ 
if($_SESSION['tipo_user'] == 'admin'){ ?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" type="text/css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-latest.js"></script>

<title>CMYK Pin // Admin</title>
</head>

<body>


<div class="menu_descobre">
<input type="submit" class="botao_form" id="all_users" name="all_users"  onclick="location.reload();location.href='admin.php'" value="Utilizadores" />&nbsp;&nbsp;
<form action="" style="display: inline;" method="post">
<input type="submit" class="botao_form" id="all_pins" name="all_pins" value="Pins" />&nbsp;&nbsp;
<input type="submit" class="botao_form" id="stock" name="stock" value="Stock" />&nbsp;&nbsp;
<input type="submit" class="botao_form" id="vendas" name="vendas" value="Vendas" />&nbsp;&nbsp;

</form>

</div>
<div id="main_descobre" class="main_descobre">
<?php 
if (isset($_POST['all_pins']))
  { 
	$coduser = $_SESSION['cod_user'];
	$dados=mysql_query("select * from pins order by cod_pin");
		
		?>
		<table class="table_admin">
				<tr>
					<td><b>Código</b></td>
					<td><b>Nome</b></td>
					<td><b>Categoria</b></td>
					<td><b>Preço</b></td>
					<td><b>Data de registo</b></td>
					<td></td>
					<td></td>
                    </tr>
                    <tr>
                    <td colspan="7"><hr /></td>
                    </tr>
			<?php 
	
		while($dados2=mysql_fetch_array($dados)){ ?>
         <div id="<?php echo $dados2['cod_pin']; ?>" style="font-size:18px; height:auto; width:40%;" class="login_div">
<a href="#" id="<?php echo $dados2['cod_pin']; ?>-show" onClick="showHidePin('<?php echo $dados2['cod_pin']; ?>');return false;"><div style="position:absolute; right:2%; top:3%;"><div class="btn_funcao" onClick="showHidePin('<?php echo $dados2['cod_pin']; ?>');return false;"><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></a></div>
<br /><form method="post" action="editar_pins.php">
          <input type="hidden" name="cod_pin" id="cod_pin" value="<?php echo $dados2['cod_pin']; ?>" />
               	<b>Nome:</b><input type="text" class="text_form" name="nome" value="<?php echo $dados2['nome']; ?>" /><br />
				<b>Categoria:</b><input type="text" class="text_form" name="categoria" value="<?php echo $dados2['categoria']; ?>" /><br />
				<b>Preço:</b><input type="text" class="text_form" name="preco" value="<?php echo $dados2['preco']; ?>" /><br />
				<b>Data de registo:</b> <?php echo $dados2['data_add']; ?><br /><br />
<button type="submit" value="submit" class="botao_form" name="submit" style="border:none; width:88px;; background:transparent;"><div class="btn_funcao"><img src="images/ico/editar_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Editar</div></button></form></div>
			<tr><td><?php echo $dados2['cod_pin']; ?></td>
            <td><?php echo $dados2['nome']; ?></td>
            <td><?php echo $dados2['categoria']; ?></td>
            <td><?php echo $dados2['preco']; ?> €</td>
            <td><?php echo $dados2['data_add']; ?></td>
			<td><a href="#" id="<?php echo $dados2['cod_pin']; ?>-show" onClick="showHidePin('<?php echo $dados2['cod_pin']; ?>');return false;"><img src="images/ico/editar_ico.png" height="15" /></a></td>
			<td><a href="apagar_pins.php?cod_pin=<?php echo $dados2['cod_pin']; ?>"><img src="images/ico/delete_ico.png" height="15" /></a></td>

		  </tr>
		
	<?php } ?> </table> <?php
  }
  
  elseif (isset($_POST['stock'])){
  
    $coduser = $_SESSION['cod_user'];

	$dados=mysql_query("select cod_stock, cod_pin ,quantidade from stock");
				
		?>
		<table class="table_admin">
				<tr>
					<td width="80%"><b>Pin</b></td>
					<td><b>Quantidade</b></td>
					<td></td>
                    </tr>
                    <tr>
                    <td colspan="3"><hr /></td>
                    </tr>
			<?php 
	
		while($dados2=mysql_fetch_array($dados)){ ?>
         <div id="<?php echo $dados2['cod_stock']; ?>" style="font-size:18px; height:auto; width:40%;" class="login_div">
<a href="#" id="<?php echo $dados2['cod_stock']; ?>-show" onClick="showHidePin(<?php echo $dados2['cod_stock']; ?>');return false;"><div style="position:absolute; right:2%; top:3%;"><div class="btn_funcao" onClick="showHidePin('<?php echo $dados2['cod_stock']; ?>');return false;"><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></a></div>
<br /><form method="post" action="editar_stock.php">
          <input type="hidden" name="cod_stock" id="cod_stock" value="<?php echo $dados2['cod_stock']; ?>" />
               		<b>Quantidade:</b><input type="text" class="text_form" name="quantidade" value="<?php echo $dados2['quantidade']; ?>" /><br /><br />
				<button type="submit" value="submit" class="botao_form" name="submit" style="border:none; width:88px;; background:transparent;"><div class="btn_funcao"><img src="images/ico/editar_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Editar</div></button></form></div>
            <td><?php 	$pin_q = mysql_query("select * FROM pins WHERE cod_pin = '".$dados2['cod_pin']."'");
			while($pin_row=mysql_fetch_array($pin_q)){
			echo $pin_row['nome']; } ?></td>
            <td><?php echo $dados2['quantidade']; ?></td>
            <td><a href="#" id="<?php echo $dados2['cod_stock']; ?>-show" onClick="showHidePin('<?php echo $dados2['cod_stock']; ?>');return false;"><img src="images/ico/editar_ico.png" height="15" /></a></td>
			

		  </tr>
		
	<?php } ?> </table> <?php
	}	 
	
	elseif (isset($_POST['vendas'])){
	
	$coduser = $_SESSION['cod_user'];
	$dados=mysql_query("select cod_venda, cod_pin ,data_venda,session from vendas");
	
	?>
		<table class="table_admin">
				<tr>
					<td width="10%"><b>Código</b></td>
					<td><b>Pin</b></td>
					<td><b>Data de venda</b></td>
					<td><b>Comprador</b></td>
                    </tr>
                    <tr>
                    <td colspan="4"><hr /></td>
                    </tr>
			<?php 
	
		while($dados2=mysql_fetch_array($dados)){ ?>
            <td><?php echo $dados2['cod_venda']; ?></td>
            <td><?php 	$pin_q = mysql_query("select * FROM pins WHERE cod_pin = '".$dados2['cod_pin']."'");
			while($pin_row=mysql_fetch_array($pin_q)){
			echo $pin_row['nome']; } ?></td>
            <td><?php echo $dados2['data_venda']; ?></td>
             <td><?php 	$user_q = mysql_query("select * FROM users WHERE cod_user = '".$dados2['session']."'");
			while($user_row=mysql_fetch_array($user_q)){
			echo $user_row['nome_user']; } ?></td>
			  </tr>
		
	<?php } ?> </table> <?php }	 
	
	
	
	
	
	 else{
	 	$dados=mysql_query("select * from users");
		?>
        
		<table class="table_admin">
				<tr>
					<td><b>Username</b></td>
					<td><b>Nome</b></td>
					<td><b>Password</b></td>
					<td><b>E-Mail</b></td>
					<td><b>Tipo de user</b></td>
					<td></td>
					<td></td>
                    </tr>
                    <tr>
                    <td colspan="7"><hr /></td>
                    </tr>
			<?php 
	
		while($dados2=mysql_fetch_array($dados)){ ?>
        <div id="<?php echo $dados2['cod_user']; ?>" style="font-size:18px; height:auto; width:40%;" class="login_div">
<a href="#" id="<?php echo $dados2['cod_user']; ?>-show" onClick="showHidePin('<?php echo $dados2['cod_user']; ?>');return false;"><div style="position:absolute; right:2%; top:3%;"><div class="btn_funcao" onClick="showHidePin('<?php echo $dados2['cod_user']; ?> ');return false;"><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></a></div>
<br /><form method="post" action="editar_utilizadores.php">
<input type="hidden" name="cod_user" id="cod_user" value="<?php echo $dados2['cod_user']; ?>" /><br />
				<b>Nome de utilizador:</b> <?php echo $dados2['username']; ?><br />
				<b>Nome:</b> <input type="text"  class="text_form" name="nome_user" value="<?php echo $dados2['nome_user']; ?>" /><br />
				<b>Password:</b> <input type="password" class="text_form" name="password" value="<?php echo $dados2['password']; ?>" /><br />
				<b>E.mail:</b> <input type="text" style="width:40%;" class="text_form" name="email" value="<?php echo $dados2['email']; ?>" /><br />
				<br /><button type="submit" value="submit" class="botao_form" name="submit" style="border:none; width:88px;; background:transparent;"><div class="btn_funcao"><img src="images/ico/editar_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Editar</div></button>
                </form></div>
			<tr><td><?php echo $dados2['username']; ?></td>
            <td><?php echo $dados2['nome_user']; ?></td>
            <td><?php echo $dados2['password']; ?></td>
            <td><?php echo $dados2['email']; ?></td>
            <td><?php echo $dados2['tipo_user']; ?></td>
			<td><a href="#" id="<?php echo $dados2['cod_user']; ?>-show" onClick="showHidePin('<?php echo $dados2['cod_user']; ?>');return false;"><img src="images/ico/editar_ico.png" height="15" /></a></td>
			<td><a href="apagar_utilizadores.php?cod_user=<?php echo $dados2['cod_user']; ?>"><img src="images/ico/delete_ico.png" height="15" /></a></td>

		  </tr>
		
	<?php } ?> </table> <?php
		}
	
	
	} else {	
		echo'<script> history.back()</script>';
	exit; }
} else {	
		echo'<script> history.back()</script>';
	exit; }
?>
</div>
</body>
</html>


