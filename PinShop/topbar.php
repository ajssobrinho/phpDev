<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if (!isset($_SESSION['cod_user'])==""){ 
	if($_SESSION['tipo_user'] == 'admin'){ ?> 
	<div style="border-bottom-right-radius:2em; border-top-right-radius:2em;" class="topbar">&nbsp;&nbsp;<a href="index.php"><img src="images/topbar/logo.png" height="40"></a><span style="font-size:21px; position:relative; bottom:12px;">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/ico/topbar/descobrir.png" height="15" />&nbsp;<a href="descobrir.php">Descobrir</a>&nbsp;&nbsp;&nbsp;<img src="images/ico/topbar/meus_pins.png" height="15" />&nbsp;<a href="meus_pins.php">Os meus pins</a>&nbsp;&nbsp;&nbsp;<img src="images/ico/topbar/admin.png" height="15" />&nbsp;<a href="admin.php">Admin</a></span><span style="font-size:21px; position:absolute; bottom:12px; right:0px;">
<a href="#" id="user_div-show" onclick="showHideUser('user_div');return false;"><img id="foto_user_img" style="position:fixed; -webkit-box-shadow: 0px 1px 1px -1px rgb(0,0,0); -moz-box-shadow: 0px 1px 1px -1px rgb(0,0,0); box-shadow: 0px 1px 1px -1px rgb(0,0,0); left:67%; top:27px; border-radius:2em;" src="<?php echo $_SESSION['foto']; ?>" height="52px" /></a>&nbsp;&nbsp;</span></div>
	<div id="user_div" ondblclick="showHideUser('user_div');return false;" class="user_div"><a href="#" id="user_div-show" onclick="showHideUser('user_div');return false;"></a><div class="topbar_menu"><img src="images/ico/topbar/novo_pin.png" height="11" /><a href="#" id="add_pin-show" onclick="showHidePin('add_pin');return false;">&nbsp;Criar Pin</a></div><div class="topbar_menu"><img src="images/ico/topbar/carrinho_compras.png" height="11" />&nbsp;<a href="carrinho_compras.php">Carrinho de Compras</a></div><div class="topbar_menu"><img src="images/ico/topbar/compras_vendas.png" height="11" />&nbsp;Compras e vendas</div><br /><div class="topbar_menu"><img src="images/ico/topbar/settings.png" height="11" />&nbsp;Definições de conta</div><div class="topbar_menu"><img src="images/ico/topbar/logout.png" height="11" />&nbsp;<a href="logout.php">Terminar Sessão</a></div></div>
	<?php } elseif($_SESSION['tipo_user'] == 'user') {
?>
<div style="border-bottom-right-radius:2em; border-top-right-radius:2em;" class="topbar">&nbsp;&nbsp;<a href="index.php"><img src="images/topbar/logo.png" height="40"></a><span style="font-size:21px; position:relative; bottom:12px;">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/ico/topbar/descobrir.png" height="15" />&nbsp;<a href="descobrir.php">Descobrir</a>&nbsp;&nbsp;&nbsp;<img src="images/ico/topbar/meus_pins.png" height="15" />&nbsp;<a href="meus_pins.php">Os meus pins</a></span><span style="font-size:21px; position:absolute; bottom:12px; right:0px;">
<a href="#" id="user_div-show" onclick="showHideUser('user_div');return false;"><img id="foto_user_img" style="position:fixed; -webkit-box-shadow: 0px 1px 1px -1px rgb(0,0,0); -moz-box-shadow: 0px 1px 1px -1px rgb(0,0,0); box-shadow: 0px 1px 1px -1px rgb(0,0,0); left:67%; top:27px; border-radius:2em;" src="<?php echo $_SESSION['foto']; ?>" height="52px" /></a>&nbsp;&nbsp;</span></div>
	<div id="user_div" ondblclick="showHideUser('user_div');return false;" class="user_div"><a href="#" id="user_div-show" onclick="showHideUser('user_div');return false;"></a><div class="topbar_menu"><img src="images/ico/topbar/novo_pin.png" height="11" />&nbsp;<a href="#" id="add_pin-show" onclick="showHidePin('add_pin');return false;">&nbsp;Criar Pin</a></div><div class="topbar_menu"><img src="images/ico/topbar/carrinho_compras.png" height="11" />&nbsp;<a href="carrinho_compras.php">Carrinho de Compras</a></div><div class="topbar_menu"><img src="images/ico/topbar/compras_vendas.png" height="11" />&nbsp;Compras e vendas</div><br /><div class="topbar_menu"><img src="images/ico/topbar/settings.png" height="11" />&nbsp;Definições de conta</div><div class="topbar_menu"><img src="images/ico/topbar/logout.png" height="11" />&nbsp;<a href="logout.php">Terminar Sessão</a></div></div>
<?php }} else {?>
    
<div class="topbar">&nbsp;&nbsp;<a href="index.php"><img src="images/topbar/logo.png" height="40"></a><span style="font-size:21px; position:relative; bottom:12px;">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/ico/topbar/descobrir.png" height="15" />&nbsp;<a href="descobrir.php">Descobrir</a>&nbsp;&nbsp;&nbsp;<img src="images/ico/topbar/sign_in.png" height="15" />&nbsp;<a href="index.php#ex1_index">Criar conta</a></span><span style="font-size:21px; position:absolute; bottom:12px; right:0px;">  
<a href="#" id="login_div-show" onClick="showHidePin('login_div');return false;"><img src="images/ico/topbar/sign_up.png" height="15" />&nbsp;Iniciar Sessão</a>&nbsp;&nbsp;</span></div>

<div id="login_div" align="center" class="login_div">
<div style="position:absolute; right:2%; top:3%;"><div class="btn_funcao" onClick="showHidePin('login_div');return false;"><a href="#" id="login_div-show" onClick="showHidePin('login_div');return false;"></a><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></div>
<br /><br /><span style="font-size:24px; color:white;">Já nos conhecemos?</span><br /><br />
<form action="login.php" method="post">
<input type="text" name="username" class="text_form" style="margin:5px;" id="username" placeholder="Nome de utilizador" /><br />
<input type="password" name="password" class="text_form" id="password" style="margin:5px;" placeholder="Palavra-passe" /><br />
<input type="submit" name="submit"  style="	background-color:#0099FF;" class="botao_form" value="Iniciar sessão" id="submit" />
<br /><br /><span style="font-size:15px; color:white;"><a href="index.php#ex1_index">Novo por aqui?</a></span>
</form></div>

 <div id="add_pin" style="font-size:18px; height:auto; width:40%;" class="login_div">
<a href="#" id="add_pin-show" onClick="showHidePin('add_pin');return false;"><div style="position:absolute; right:2%; top:3%;"><div class="btn_funcao" onClick="showHidePin('<?php echo $dados2['cod_user']; ?> ');return false;"><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></a></div>
<br /><form method="post" action="editar_utilizadores.php">
<input type="hidden" name="cod_user" id="cod_user" value="<?php echo $dados2['cod_user']; ?>" /><br />
				<b>Nome de utilizador:</b> <?php echo $dados2['username']; ?><br />
				<b>Nome:</b> <input type="text"  class="text_form" name="nome_user" value="<?php echo $dados2['nome_user']; ?>" /><br />
				<b>Password:</b> <input type="password" class="text_form" name="password" value="<?php echo $dados2['password']; ?>" /><br />
				<b>E.mail:</b> <input type="text" style="width:40%;" class="text_form" name="email" value="<?php echo $dados2['email']; ?>" /><br />
				<br /><button type="submit" value="submit" class="botao_form" name="submit" style="border:none; width:88px;; background:transparent;"><div class="btn_funcao"><img src="images/ico/editar_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Editar</div></button>
                </form></div>
<?php } ?>
