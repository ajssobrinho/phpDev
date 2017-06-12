<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

include('topbar.php');
include('connect_db.php');
include('consultas.php');
include('script.php');

?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" type="text/css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<title>CMYK Pin // Descobrir Pins</title>
</head>

<body>

<div class="menu_descobre">
<button type="submit" class="botao_form" onclick="location.reload();location.href='descobrir.php'" style="border:none; width:125px; background:transparent;"><img style="position:relative; top:1px;" height="15" src="images/ico/todos_os_pins.png">&nbsp;Todos os Pins</button>
<form action="" style="display: inline;" method="post">
<button type="submit" value="mais_vendidos" class="botao_form"  id="mais_vendidos" name="mais_vendidos" style="border:none; width:125px; background:transparent;"><img style="position:relative; top:1px;" height="15" src="images/ico/mais_vendidos.png">&nbsp;Mais vendidos</button>&nbsp;&nbsp;
<select style="font-size:16px; 	font-family:'Source Sans Pro', Arial; background-color:#444444; border:none; border-radius:0.2em; color:white; width:150px;" onChange="this.form.submit();" name="order_post">
   <option>Ordernar por</option>
    <option value="order_nome" >Nome</option>
    <option value="order_preco" >Preço</option>
   </select>&nbsp;&nbsp;</form>	
   <form action="" style="display:inline; position:absolute; right:5px;" method="post">
   <input type="text" class="search_form" style="font-size:16px;" id="pesquisa_pin" name="pesquisa_pin"  placeholder="Pesquisar pin..." />
    <input type="image" src="images/ico/search.gif" style="position:relative; top:4px;" width="22" height="22">

</form>


</div>
<div id="main_descobre" class="main_descobre">
<?php 

if (isset($_POST['mais_vendidos']))
  { 
  
  	while($pins_mais_vendidos_row = mysql_fetch_array( $pins_mais_vendidos_q )){
		
	$cod_pin = $pins_mais_vendidos_row['cod_pin'];
	$nome_pin = $pins_mais_vendidos_row['nome'];
	$categoria = $pins_mais_vendidos_row['categoria'];
	$cod_user = $pins_mais_vendidos_row['cod_user'];
	$preco_pin = $pins_mais_vendidos_row['preco'];
	$data_add_pin = $pins_mais_vendidos_row['data_add']; 
	$categoria_pin = $pins_mais_vendidos_row['categoria'];
  	$foto_pin = $pins_mais_vendidos_row['foto'];
	$bg_pin = $pins_mais_vendidos_row['bg'];
	
	$wishlists_do_pin = mysql_query("SELECT * FROM wishlist WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
		 $n_wishlists_do_pin = mysql_num_rows($wishlists_do_pin);
	
	$pins_mais_vendidos = mysql_query("SELECT * FROM vendas WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
		 $n_pins_mais_vendidos=mysql_num_rows($pins_mais_vendidos);
		 
		 if($n_pins_mais_vendidos){

?>

<div align="center" class="pin_div" onClick="showHidePin('<?php echo $pins_mais_vendidos_row['cod_pin'];?>');return false;"><div style=" display:inline-block; max-height:150px;"><img draggable="false" src="<?php echo $bg_pin; ?>" style="position:relative; top:20x; left:0px;" height="150" /><img style="position:relative; opacity:0.9; top:-130px; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div><br /><span style="font-size:24px;"><?php echo $nome_pin; ?></span><br /><span style="font-size:18px; background-image:url(images/topbar/div_top.png); border-radius:0.2em; padding-right:4px; padding-left:4px; padding-top:2px; padding-bottom:2px;"><?php echo $preco_pin." €"; ?></span><a href="#" id="<?php echo $pins_mais_vendidos_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $pins_mais_vendidos_row['cod_pin'];?>');return false;"></a><div style="display:inline-block; position:relative; width:0px; height:0px; top:1px; right:-40px;"><?php if (!isset($_SESSION['cod_user'])==""){  if($cod_user == $_SESSION['cod_user']){ ?><img src="images/ico/topbar/my_pin.png" title="Adicionado por ti" height="20" /><?php } if(!$n_wishlists_do_pin == 0){ ?> <img src="images/ico/topbar/wishlist.png" title="Na tua wishlist" height="15" /> <?php } } ?></div></div>

<div id="<?php echo $cod_pin; ?>" class="pin_info_div">
<div style="position:absolute; right:2%; top:3%;"><?php if (!isset($_SESSION['cod_user'])==""){ if(!$n_wishlists_do_pin == 0){ ?><a href="del_wishlist.php?cod_pin=<?php echo $pins_mais_vendidos_row['cod_pin']; ?>"><div class="btn_funcao"><img src="images/ico/delete_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Remover da Wishlist</div></a><?php } else { ?><a href="add_wishlist.php?cod_pin=<?php echo $pins_mais_vendidos_row['cod_pin']; ?>"><div class="btn_funcao">+ Adicionar à Wishlist</div></a><?php } } ?>&nbsp;&nbsp;<div class="btn_funcao" onClick="showHidePin('<?php echo $pins_mais_vendidos_row['cod_pin'];?>');return false;"><a href="#" id="<?php echo $pins_mais_vendidos_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $pins_mais_vendidos_row['cod_pin'];?>');return false;"></a><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></div>
<div align="center" style="position:absolute; width:150px; top:15%; left:10%;" display:inline-block; max-height:150px;"><img src="<?php echo $bg_pin; ?>" draggable="false" style="position:relative; top:20x; left:0px;" height="150" /><img style=" position:relative; top:-130px; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div>
<div style="position:absolute; text-align:left; line-height:190%; top:20%; left:37%; display:inline-block;">
<span style="font-size:2.5em;"><?php echo $nome_pin; ?></span><br />
<span style="font-size:1.2em;"><b><?php echo $categoria_pin; ?></b></span><br />
<span style="font-size:1.1em;">Adicionado por <?php  if (!isset($_SESSION['cod_user'])==""){  if($cod_user != $_SESSION['cod_user']){ echo $cod_user; } else{ echo "ti"; } } ?> <?php echo $data_add_pin; ?></span><br>
<span style="font-size:1.1em;"><?php $stock_pin_q = mysql_query("SELECT * FROM stock WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
	
    	while($stock_pin_row = mysql_fetch_array( $stock_pin_q )){ echo "Stock disponível: <b>".$stock_pin_row['quantidade']."</b>"; }
 ?></span></div>
<?php if (!isset($_SESSION['cod_user'])==""){ if($pins_mais_vendidos_row['cod_user'] != $_SESSION['cod_user']){ ?>
<a href="carrinho_compras.php?cod=<?php echo $pins_mais_vendidos_row['cod_pin']; ?>&acao=incluir"><div class="btn_comprar" align="center" align="center" style="position:absolute; bottom:7%; right:5%;">+ Adicionar ao carrinho<br /><b>(<?php echo $preco_pin; ?> €)</b></div></a><?php } } else { ?>
<a href="#" id="login_div-show" onClick="showHidePin('<?php echo $cod_pin; ?>');showHidePin('login_div');return false;"><div class="btn_comprar" align="center" align="center" style="position:absolute; bottom:7%; right:5%;">+ Adicionar ao carrinho<br /><b>(<?php echo $preco_pin; ?> €)</b></div></a>
<?php } ?></span>
</div>

<?php
	    } 

  }
  }
  
  elseif (isset($_POST['pesquisa_pin']))
  { 
  $pesquisa = $_POST['pesquisa_pin'];
  
  
  	$pesquisa_pin_q = mysql_query("SELECT * FROM pins WHERE (nome LIKE '%".$pesquisa."%' OR categoria LIKE '%".$pesquisa."%');")
	or die(mysql_error());
	 $n_pesquisa_pin = mysql_num_rows($pesquisa_pin_q);
	 
	 if($n_pesquisa_pin == 0){ ?> <span style="background-image:url(images/topbar/div_top.png); padding-right:7px; padding-left:7px; border-radius:0.2em;"	>Ups! Não encontramos resultados para "<?php echo $pesquisa; ?>".</span> <?php }
	 elseif($n_pesquisa_pin == 1) { ?> <span style="background-image:url(images/topbar/div_top.png); padding-right:7px; padding-left:7px; border-radius:0.2em;">Encontramos 1 resultado para "<?php echo $pesquisa; ?>":</span><br><br> <?php }
	  else { ?> <span style="background-image:url(images/topbar/div_top.png); padding-right:7px; padding-left:7px; border-radius:0.2em;">Encontramos <?php echo $n_pesquisa_pin; ?> resultados para "<?php echo $pesquisa; ?>":</span><br><br> <?php }

  
  	while($pesquisa_pin_row = mysql_fetch_array( $pesquisa_pin_q )){
		
	$cod_pin = $pesquisa_pin_row['cod_pin'];
	$nome_pin = $pesquisa_pin_row['nome'];
	$categoria = $pesquisa_pin_row['categoria'];
	$cod_user = $pesquisa_pin_row['cod_user'];
	$preco_pin = $pesquisa_pin_row['preco'];
	$data_add_pin = $pesquisa_pin_row['data_add']; 
	$categoria_pin = $pesquisa_pin_row['categoria'];
  	$foto_pin = $pesquisa_pin_row['foto'];
	$bg_pin = $pesquisa_pin_row['bg'];
	
	$wishlists_do_pin = mysql_query("SELECT * FROM wishlist WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
		 $n_wishlists_do_pin = mysql_num_rows($wishlists_do_pin);
	
	?>


<div align="center" class="pin_div" onClick="showHidePin('<?php echo $pesquisa_pin_row['cod_pin'];?>');return false;"><div style=" display:inline-block; max-height:150px;"><img draggable="false" src="<?php echo $bg_pin; ?>" style="position:relative; top:20x; left:0px;" height="150" /><img style="position:relative; opacity:0.9; top:-130px; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div><br /><span style="font-size:24px;"><?php echo $nome_pin; ?></span><br /><span style="font-size:18px; background-image:url(images/topbar/div_top.png); border-radius:0.2em; padding-right:4px; padding-left:4px; padding-top:2px; padding-bottom:2px;"><?php echo $preco_pin." €"; ?></span><a href="#" id="<?php echo $pesquisa_pin_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $pesquisa_pin_row['cod_pin'];?>');return false;"></a><div style="display:inline-block; position:relative; width:0px; height:0px; top:1px; right:-40px;"><?php if (!isset($_SESSION['cod_user'])==""){  if($cod_user == $_SESSION['cod_user']){ ?><img src="images/ico/topbar/my_pin.png" title="Adicionado por ti" height="20" /><?php } if(!$n_wishlists_do_pin == 0){ ?> <img src="images/ico/topbar/wishlist.png" title="Na tua wishlist" height="15" /> <?php } } ?></div></div>

<div id="<?php echo $cod_pin; ?>" class="pin_info_div">
<div style="position:absolute; right:2%; top:3%;"><?php if (!isset($_SESSION['cod_user'])==""){ if(!$n_wishlists_do_pin == 0){ ?><a href="del_wishlist.php?cod_pin=<?php echo $pesquisa_pin_row['cod_pin']; ?>"><div class="btn_funcao"><img src="images/ico/delete_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Remover da Wishlist</div></a><?php } else { ?><a href="add_wishlist.php?cod_pin=<?php echo $pesquisa_pin_row['cod_pin']; ?>"><div class="btn_funcao">+ Adicionar à Wishlist</div></a><?php } } ?>&nbsp;&nbsp;<div class="btn_funcao" onClick="showHidePin('<?php echo $pesquisa_pin_row['cod_pin'];?>');return false;"><a href="#" id="<?php echo $pesquisa_pin_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $pesquisa_pin_row['cod_pin'];?>');return false;"></a><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></div>
<div align="center" style="position:absolute; width:150px; top:15%; left:10%;" display:inline-block; max-height:150px;"><img src="<?php echo $bg_pin; ?>" draggable="false" style="position:relative; top:20x; left:0px;" height="150" /><img style=" position:relative; top:-130px; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div>
<div style="position:absolute; text-align:left; line-height:190%; top:20%; left:37%; display:inline-block;">
<span style="font-size:2.5em;"><?php echo $nome_pin; ?></span><br />
<span style="font-size:1.2em;"><b><?php echo $categoria_pin; ?></b></span><br />
<span style="font-size:1.1em;">Adicionado por <?php  if (!isset($_SESSION['cod_user'])==""){  if($cod_user != $_SESSION['cod_user']){ echo $cod_user; } else{ echo "ti"; } } ?> <?php echo $data_add_pin; ?></span><br>
<span style="font-size:1.1em;"><?php $stock_pin_q = mysql_query("SELECT * FROM stock WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
	
    	while($stock_pin_row = mysql_fetch_array( $stock_pin_q )){ echo "Stock disponível: <b>".$stock_pin_row['quantidade']."</b>"; }
 ?></span></div>
<?php if (!isset($_SESSION['cod_user'])==""){ if($pesquisa_pin_row['cod_user'] != $_SESSION['cod_user']){ ?>
<a href="carrinho_compras.php?cod=<?php echo $pesquisa_pin_row['cod_pin']; ?>&acao=incluir"><div class="btn_comprar" align="center" align="center" style="position:absolute; bottom:7%; right:5%;">+ Adicionar ao carrinho<br /><b>(<?php echo $preco_pin; ?> €)</b></div></a><?php } } else { ?>
<a href="#" id="login_div-show" onClick="showHidePin('<?php echo $cod_pin; ?>');showHidePin('login_div');return false;"><div class="btn_comprar" align="center" align="center" style="position:absolute; bottom:7%; right:5%;">+ Adicionar ao carrinho<br /><b>(<?php echo $preco_pin; ?> €)</b></div></a>
<?php } ?></span>


</div>

<?php
	    } 

  
  }
  
  
elseif (isset($_POST['order_post']))
  { 
if($_POST['order_post'] == 'order_nome'){
  
    	while($ordernar_por_nome_row = mysql_fetch_array( $ordernar_por_nome_q )){
		
	$cod_pin = $ordernar_por_nome_row['cod_pin'];
	$nome_pin = $ordernar_por_nome_row['nome'];
	$categoria = $ordernar_por_nome_row['categoria'];
	$cod_user = $ordernar_por_nome_row['cod_user'];
	$preco_pin = $ordernar_por_nome_row['preco'];
	$data_add_pin = $ordernar_por_nome_row['data_add']; 
$categoria_pin = $ordernar_por_nome_row['categoria'];
  	$foto_pin = $ordernar_por_nome_row['foto'];
	$bg_pin = $ordernar_por_nome_row['bg'];
	
	$wishlists_do_pin = mysql_query("SELECT * FROM wishlist WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
		 $n_wishlists_do_pin = mysql_num_rows($wishlists_do_pin);
?>


<div align="center" class="pin_div" onClick="showHidePin('<?php echo $ordernar_por_nome_row['cod_pin'];?>');return false;"><div style=" display:inline-block; max-height:150px;"><img draggable="false" src="<?php echo $bg_pin; ?>" style="position:relative; top:20x; left:0px;" height="150" /><img style="position:relative; opacity:0.9; top:-130px; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div><br /><span style="font-size:24px;"><?php echo $nome_pin; ?></span><br /><span style="font-size:18px; background-image:url(images/topbar/div_top.png); border-radius:0.2em; padding-right:4px; padding-left:4px; padding-top:2px; padding-bottom:2px;"><?php echo $preco_pin." €"; ?></span><a href="#" id="<?php echo $ordernar_por_nome_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $ordernar_por_nome_row['cod_pin'];?>');return false;"></a><div style="display:inline-block; position:relative; width:0px; height:0px; top:1px; right:-40px;"><?php if (!isset($_SESSION['cod_user'])==""){  if($cod_user == $_SESSION['cod_user']){ ?><img src="images/ico/topbar/my_pin.png" title="Adicionado por ti" height="20" /><?php } if(!$n_wishlists_do_pin == 0){ ?> <img src="images/ico/topbar/wishlist.png" title="Na tua wishlist" height="15" /> <?php } } ?></div></div>

<div id="<?php echo $cod_pin; ?>" class="pin_info_div">
<div style="position:absolute; right:2%; top:3%;"><?php if (!isset($_SESSION['cod_user'])==""){ if(!$n_wishlists_do_pin == 0){ ?><a href="del_wishlist.php?cod_pin=<?php echo $ordernar_por_nome_row['cod_pin']; ?>"><div class="btn_funcao"><img src="images/ico/delete_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Remover da Wishlist</div></a><?php } else { ?><a href="add_wishlist.php?cod_pin=<?php echo $ordernar_por_nome_row['cod_pin']; ?>"><div class="btn_funcao">+ Adicionar à Wishlist</div></a><?php } } ?>&nbsp;&nbsp;<div class="btn_funcao" onClick="showHidePin('<?php echo $ordernar_por_nome_row['cod_pin'];?>');return false;"><a href="#" id="<?php echo $ordernar_por_nome_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $ordernar_por_nome_row['cod_pin'];?>');return false;"></a><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></div>
<div align="center" style="position:absolute; width:150px; top:15%; left:10%;" display:inline-block; max-height:150px;"><img src="<?php echo $bg_pin; ?>" draggable="false" style="position:relative; top:20x; left:0px;" height="150" /><img style=" position:relative; top:-130px; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div>
<div style="position:absolute; text-align:left; line-height:190%; top:20%; left:37%; display:inline-block;">
<span style="font-size:2.5em;"><?php echo $nome_pin; ?></span><br />
<span style="font-size:1.2em;"><b><?php echo $categoria_pin; ?></b></span><br />
<span style="font-size:1.1em;">Adicionado por <?php  if (!isset($_SESSION['cod_user'])==""){  if($cod_user != $_SESSION['cod_user']){ echo $cod_user; } else{ echo "ti"; } } ?> <?php echo $data_add_pin; ?></span><br>
<span style="font-size:1.1em;"><?php $stock_pin_q = mysql_query("SELECT * FROM stock WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
	
    	while($stock_pin_row = mysql_fetch_array( $stock_pin_q )){ echo "Stock disponível: <b>".$stock_pin_row['quantidade']."</b>"; }
 ?></span></div>
<?php if (!isset($_SESSION['cod_user'])==""){ if($ordernar_por_nome_row['cod_user'] != $_SESSION['cod_user']){ ?>
<a href="carrinho_compras.php?cod=<?php echo $ordernar_por_nome_row['cod_pin']; ?>&acao=incluir"><div class="btn_comprar" align="center" align="center" style="position:absolute; bottom:7%; right:5%;">+ Adicionar ao carrinho<br /><b>(<?php echo $preco_pin; ?> €)</b></div></a><?php } } else { ?>
<a href="#" id="login_div-show" onClick="showHidePin('<?php echo $cod_pin; ?>');showHidePin('login_div');return false;"><div class="btn_comprar" align="center" align="center" style="position:absolute; bottom:7%; right:5%;">+ Adicionar ao carrinho<br /><b>(<?php echo $preco_pin; ?> €)</b></div></a>
<?php } ?></span>


</div>

<?php
	    } }
elseif($_POST['order_post'] == 'order_preco'){

  { 
  
    	while($ordernar_por_preco_row = mysql_fetch_array( $ordernar_por_preco_q )){
		
	$cod_pin = $ordernar_por_preco_row['cod_pin'];
	$nome_pin = $ordernar_por_preco_row['nome'];
	$categoria = $ordernar_por_preco_row['categoria'];
	$cod_user = $ordernar_por_preco_row['cod_user'];
	$preco_pin = $ordernar_por_preco_row['preco'];
	$data_add_pin = $ordernar_por_preco_row['data_add']; 
	$categoria_pin = $ordernar_por_preco_row['categoria'];
  	$foto_pin = $ordernar_por_preco_row['foto'];
	$bg_pin = $ordernar_por_preco_row['bg'];
	
	$wishlists_do_pin = mysql_query("SELECT * FROM wishlist WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
		 $n_wishlists_do_pin = mysql_num_rows($wishlists_do_pin);
?>


<div align="center" class="pin_div" onClick="showHidePin('<?php echo $ordernar_por_preco_row['cod_pin'];?>');return false;"><div style=" display:inline-block; max-height:150px;"><img draggable="false" src="<?php echo $bg_pin; ?>" style="position:relative; top:20x; left:0px;" height="150" /><img style="position:relative; opacity:0.9; top:-130px; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div><br /><span style="font-size:24px;"><?php echo $nome_pin; ?></span><br /><span style="font-size:18px; background-image:url(images/topbar/div_top.png); border-radius:0.2em; padding-right:4px; padding-left:4px; padding-top:2px; padding-bottom:2px;"><?php echo $preco_pin." €"; ?></span><a href="#" id="<?php echo $ordernar_por_preco_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $ordernar_por_preco_row['cod_pin'];?>');return false;"></a><div style="display:inline-block; position:relative; width:0px; height:0px; top:1px; right:-40px;"><?php if (!isset($_SESSION['cod_user'])==""){  if($cod_user == $_SESSION['cod_user']){ ?><img src="images/ico/topbar/my_pin.png" title="Adicionado por ti" height="20" /><?php } if(!$n_wishlists_do_pin == 0){ ?> <img src="images/ico/topbar/wishlist.png" title="Na tua wishlist" height="15" /> <?php } } ?></div></div>

<div id="<?php echo $cod_pin; ?>" class="pin_info_div">
<div style="position:absolute; right:2%; top:3%;"><?php if (!isset($_SESSION['cod_user'])==""){ if(!$n_wishlists_do_pin == 0){ ?><a href="del_wishlist.php?cod_pin=<?php echo $ordernar_por_preco_row['cod_pin']; ?>"><div class="btn_funcao"><img src="images/ico/delete_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Remover da Wishlist</div></a><?php } else { ?><a href="add_wishlist.php?cod_pin=<?php echo $ordernar_por_preco_row['cod_pin']; ?>"><div class="btn_funcao">+ Adicionar à Wishlist</div></a><?php } } ?>&nbsp;&nbsp;<div class="btn_funcao" onClick="showHidePin('<?php echo $ordernar_por_preco_row['cod_pin'];?>');return false;"><a href="#" id="<?php echo $ordernar_por_preco_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $ordernar_por_preco_row['cod_pin'];?>');return false;"></a><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></div>
<div align="center" style="position:absolute; width:150px; top:15%; left:10%;" display:inline-block; max-height:150px;"><img src="<?php echo $bg_pin; ?>" draggable="false" style="position:relative; top:20x; left:0px;" height="150" /><img style=" position:relative; top:-130px; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div>
<div style="position:absolute; text-align:left; line-height:190%; top:20%; left:37%; display:inline-block;">
<span style="font-size:2.5em;"><?php echo $nome_pin; ?></span><br />
<span style="font-size:1.2em;"><b><?php echo $categoria_pin; ?></b></span><br />
<span style="font-size:1.1em;">Adicionado por <?php  if (!isset($_SESSION['cod_user'])==""){  if($cod_user != $_SESSION['cod_user']){ echo $cod_user; } else{ echo "ti"; } } ?> <?php echo $data_add_pin; ?></span><br>
<span style="font-size:1.1em;"><?php $stock_pin_q = mysql_query("SELECT * FROM stock WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
	
    	while($stock_pin_row = mysql_fetch_array( $stock_pin_q )){ echo "Stock disponível: <b>".$stock_pin_row['quantidade']."</b>"; }
 ?></span></div>
<?php if (!isset($_SESSION['cod_user'])==""){ if($ordernar_por_preco_row['cod_user'] != $_SESSION['cod_user']){ ?>
<a href="carrinho_compras.php?cod=<?php echo $ordernar_por_preco_row['cod_pin']; ?>&acao=incluir"><div class="btn_comprar" align="center" align="center" style="position:absolute; bottom:7%; right:5%;">+ Adicionar ao carrinho<br /><b>(<?php echo $preco_pin; ?> €)</b></div></a><?php } } else { ?>
<a href="#" id="login_div-show" onClick="showHidePin('<?php echo $cod_pin; ?>');showHidePin('login_div');return false;"><div class="btn_comprar" align="center" align="center" style="position:absolute; bottom:7%; right:5%;">+ Adicionar ao carrinho<br /><b>(<?php echo $preco_pin; ?> €)</b></div></a>
<?php } ?></span>


</div>

<?php		
					} 
			}
  		}
  }
     

  else{

while($consulta_linha = mysql_fetch_array( $todos_os_pins )){

	$cod_pin = $consulta_linha['cod_pin'];
	$nome_pin = $consulta_linha['nome'];
	$categoria_pin = $consulta_linha['categoria'];
	$cod_user = $consulta_linha['cod_user'];
	$preco_pin = $consulta_linha['preco'];
	$data_add_pin = $consulta_linha['data_add'];
	$foto_pin = $consulta_linha['foto'];
	$bg_pin = $consulta_linha['bg'];

 
if (!isset($_SESSION['cod_user'])==""){ 
	
	$wishlists_do_pin = mysql_query("SELECT * FROM wishlist WHERE cod_pin = $cod_pin AND cod_user = ".$_SESSION['cod_user'].";")
	or die(mysql_error());
		 $n_wishlists_do_pin = mysql_num_rows($wishlists_do_pin);
}
?>


<div align="center" class="pin_div" onClick="showHidePin('<?php echo $consulta_linha['cod_pin'];?>');return false;"><div style="display:inline-block; position:relative; height:0px; top:185px; right:-60px;"><?php if (!isset($_SESSION['cod_user'])==""){  if($consulta_linha['cod_user'] == $_SESSION['cod_user']){ ?><img src="images/ico/topbar/my_pin.png" title="Adicionado por ti" height="20" /><?php } if(!$n_wishlists_do_pin == 0){ ?> <img src="images/ico/topbar/wishlist.png" title="Na tua wishlist" height="15" /> <?php } } ?></div>
 <div style=" display:inline-block; max-height:150px;"><img draggable="false" src="<?php echo $bg_pin; ?>" style="position:relative; top:20x; left:0px;" height="150" /><img style="position:relative; top:-130px; opacity:0.9; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div><br /><span style="font-size:24px;"><?php echo $nome_pin; ?></span><br /><span style="font-size:18px; background-image:url(images/topbar/div_top.png); border-radius:0.2em; padding-right:4px; padding-left:4px; padding-top:2px; padding-bottom:2px;"><?php echo $preco_pin." €"; ?></span><a href="#" id="<?php echo $consulta_linha['cod_pin'];?>-show" onClick="showHidePin('<?php echo $consulta_linha['cod_pin'];?>');return false;"></a></div>

<div id="<?php echo $cod_pin; ?>" class="pin_info_div">
<div style="position:absolute; right:2%; top:3%;"><?php if (!isset($_SESSION['cod_user'])==""){ if($consulta_linha['cod_user'] != $_SESSION['cod_user']){ if(!$n_wishlists_do_pin == 0){ ?><a href="del_wishlist.php?cod_pin=<?php echo $consulta_linha['cod_pin']; ?>"><div class="btn_funcao"><img src="images/ico/delete_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Remover da Wishlist</div></a><?php } else { ?><a href="add_wishlist.php?cod_pin=<?php echo $consulta_linha['cod_pin']; ?>"><div class="btn_funcao">+ Adicionar à Wishlist</div></a><?php } } } ?>&nbsp;&nbsp;<div class="btn_funcao" onClick="showHidePin('<?php echo $consulta_linha['cod_pin'];?>');return false;"><a href="#" id="<?php echo $consulta_linha['cod_pin'];?>-show" onClick="showHidePin('<?php echo $consulta_linha['cod_pin'];?>');return false;"></a><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></div>
<div align="center" style="position:absolute; width:150px; top:15%; left:10%;" display:inline-block; max-height:150px;"><img src="<?php echo $bg_pin; ?>" draggable="false" style="position:relative; top:20x; left:0px;" height="150" /><img style=" position:relative; top:-130px; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div>
<div style="position:absolute; text-align:left; line-height:190%; top:20%; left:37%; display:inline-block;">
<span style="font-size:2.5em;"><?php echo $nome_pin; ?></span><br />
<span style="font-size:1.2em;"><b><?php echo $categoria_pin; ?></b></span><br />
<span style="font-size:1.1em;">Adicionado por <?php if (!isset($_SESSION['cod_user'])==""){ 
 if($cod_user != $_SESSION['cod_user']){ echo $cod_user; } else{ echo "ti"; } } ?> a <?php echo $data_add_pin; ?></span><br>
<span style="font-size:1.1em;"><?php $stock_pin_q = mysql_query("SELECT * FROM stock WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
	
    	while($stock_pin_row = mysql_fetch_array( $stock_pin_q )){ echo "Stock disponível: <b>".$stock_pin_row['quantidade']."</b>"; }
 ?></span></div>
 <?php if (!isset($_SESSION['cod_user'])==""){ if($consulta_linha['cod_user'] != $_SESSION['cod_user']){ ?>
<a href="carrinho_compras.php?cod=<?php echo $consulta_linha['cod_pin']; ?>&acao=incluir"><div class="btn_comprar" align="center" align="center" style="position:absolute; bottom:7%; right:5%;">+ Adicionar ao carrinho<br /><b>(<?php echo $preco_pin; ?> €)</b></div></a><?php } } else { ?>
<a href="#" id="login_div-show" onClick="showHidePin('<?php echo $cod_pin; ?>');showHidePin('login_div');return false;"><div class="btn_comprar" align="center" align="center" style="position:absolute; bottom:7%; right:5%;">+ Adicionar ao carrinho<br /><b>(<?php echo $preco_pin; ?> €)</b></div></a>
<?php } ?>
</span>


</div>

<?php
	    } 

  }

?>
</div>
</body>
</html>


