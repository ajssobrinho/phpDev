<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if (!isset($_SESSION['cod_user'])==""){ 

include('topbar.php');
include('connect_db.php');
include('consultas.php');
include('script.php');


?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" type="text/css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-latest.js"></script>

<title>CMYK Pin // Os meus pins</title>
</head>

<body>

<div class="menu_descobre">
<button type="submit"  class="botao_form" onclick="location.reload();location.href='meus_pins.php'" style="border:none; width:90px; background:transparent;"><img style="position:relative; top:1px;" height="13" src="images/ico/topbar/wishlist.png">&nbsp;Wishlist</button>
<form action="" style="display: inline;" method="post">
<button type="submit" value="adicionados" class="botao_form"  id="adicionados" name="adicionados" style="border:none; width:120px; background:transparent;"><img style="position:relative; top:1px;" height="15" src="images/ico/topbar/my_pin.png">&nbsp;Criados por ti</button>&nbsp;&nbsp;
<button type="submit" value="comprados" class="botao_form"  id="comprados" name="comprados" style="border:none; width:160px; background:transparent;"><img style="position:relative; top:1px;" height="15" src="images/ico/pins_comprados.png">&nbsp;Pins que compraste</button>

</form>

</div>
<div id="main_descobre" class="main_descobre">
<?php 

if (isset($_POST['adicionados']))
  { 
  
  $coduser = $_SESSION['cod_user'];
 
  $pins_adicionados_q = mysql_query("SELECT * FROM pins WHERE cod_user = $coduser;")
	or die(mysql_error());
  
  
  	while($pins_adicionados_row = mysql_fetch_array( $pins_adicionados_q )){
		
	$cod_pin = $pins_adicionados_row['cod_pin'];
	$nome_pin = $pins_adicionados_row['nome'];
	$categoria = $pins_adicionados_row['categoria'];
	$cod_user = $pins_adicionados_row['cod_user'];
	$preco_pin = $pins_adicionados_row['preco'];
	$data_add_pin = $pins_adicionados_row['data_add']; 
	$categoria_pin = $pins_adicionados_row['categoria'];
  	$foto_pin = $pins_adicionados_row['foto'];
	$bg_pin = $pins_adicionados_row['bg'];
	
	$wishlists_do_pin = mysql_query("SELECT * FROM wishlist WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
		 $n_wishlists_do_pin = mysql_num_rows($wishlists_do_pin);
	


?>

<div align="center" class="pin_div" onClick="showHidePin('<?php echo $pins_adicionados_row['cod_pin'];?>');return false;"><div style=" display:inline-block; max-height:150px;"><img draggable="false" src="<?php echo $bg_pin; ?>" style="position:relative; top:20x; left:0px;" height="150" /><img style="position:relative; opacity:0.9; top:-130px; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div><br /><span style="font-size:24px;"><?php echo $nome_pin; ?></span><br /><span style="font-size:18px; background-image:url(images/topbar/div_top.png); border-radius:0.2em; padding-right:4px; padding-left:4px; padding-top:2px; padding-bottom:2px;"><?php echo $preco_pin." €"; ?></span><a href="#" id="<?php echo $pins_adicionados_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $pins_adicionados_row['cod_pin'];?>');return false;"></a></div>

<div id="<?php echo $cod_pin; ?>" class="pin_info_div">
<div style="position:absolute; right:2%; top:3%;"><div class="btn_funcao" onClick="showHidePin('<?php echo $pins_adicionados_row['cod_pin'];?>');return false;"><a href="#" id="<?php echo $pins_adicionados_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $pins_adicionados_row['cod_pin'];?>');return false;"></a><img src="images/ico/editar_ico.png" style="position:relative; top:3px;" height="18" />&nbsp;Editar</div>&nbsp;&nbsp;<div class="btn_funcao" onClick="showHidePin('<?php echo $pins_adicionados_row['cod_pin'];?>');return false;"><a href="#" id="<?php echo $pins_adicionados_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $pins_adicionados_row['cod_pin'];?>');return false;"></a><img src="images/ico/delete_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Eliminar</div>&nbsp;

<div class="btn_funcao" onClick="showHidePin('<?php echo $pins_adicionados_row['cod_pin'];?>');return false;"><a href="#" id="<?php echo $pins_adicionados_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $pins_adicionados_row['cod_pin'];?>');return false;"></a><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></div>
<div align="center" style="position:absolute; width:150px; top:20%; left:10%;" display:inline-block; max-height:150px;"><img src="<?php echo $bg_pin; ?>" draggable="false" style="position:relative; top:20x; left:0px;" height="150" /><img style=" position:relative; top:-130px; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div>
<div style="position:absolute; text-align:left; line-height:190%; top:25%; left:37%; display:inline-block;">
<span style="font-size:2.5em;"><?php echo $nome_pin; ?></span><br />
<span style="font-size:1.2em;"><b><?php echo $categoria_pin; ?></b></span><br />
<span style="font-size:1.1em;">Adicionado por ti no dia <?php echo $data_add_pin; ?></span><br>
<span style="font-size:1.1em;"><?php $stock_pin_q = mysql_query("SELECT * FROM stock WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
	
    	while($stock_pin_row = mysql_fetch_array( $stock_pin_q )){ echo "Stock disponível: <b>".$stock_pin_row['quantidade']."</b>"; }
 ?></span></div>
</span>
</div>

<?php
	    

  }
  }
  
   elseif (isset($_POST['comprados'])){
	   
	     $coduser = $_SESSION['cod_user'];
 
  $compras_user_q = mysql_query("SELECT * FROM vendas WHERE session = $coduser GROUP BY cod_pin;")
	or die(mysql_error());

while($compras_user_row= mysql_fetch_array( $compras_user_q)){

$cod_pin_compras = $compras_user_row['cod_pin'];

 $compras_pins_q = mysql_query("SELECT * FROM pins WHERE cod_pin = $cod_pin_compras;")
	or die(mysql_error());



while($compras_pins_row = mysql_fetch_array( $compras_pins_q )){

	$cod_pin = $compras_pins_row['cod_pin'];
	$nome_pin = $compras_pins_row['nome'];
	$categoria_pin = $compras_pins_row['categoria'];
	$cod_user = $compras_pins_row['cod_user'];
	$preco_pin = $compras_pins_row['preco'];
	$data_add_pin = $compras_pins_row['data_add'];
	$foto_pin = $compras_pins_row['foto'];
	$bg_pin = $compras_pins_row['bg'];

 
if (!isset($_SESSION['cod_user'])==""){ 
	
	$wishlists_do_pin = mysql_query("SELECT * FROM wishlist WHERE cod_pin = $cod_pin AND cod_user = ".$_SESSION['cod_user'].";")
	or die(mysql_error());
		 $n_wishlists_do_pin = mysql_num_rows($wishlists_do_pin);
}
?>


<div align="center" class="pin_div" onClick="showHidePin('<?php echo $compras_pins_row['cod_pin'];?>');return false;"><div style=" display:inline-block; max-height:150px;"><img draggable="false" src="<?php echo $bg_pin; ?>" style="position:relative; top:20x; left:0px;" height="150" /><img style="position:relative; top:-130px; opacity:0.9; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div><br /><span style="font-size:24px;"><?php echo $nome_pin; ?></span><br /><span style="font-size:18px; background-image:url(images/topbar/div_top.png); border-radius:0.2em; padding-right:4px; padding-left:4px; padding-top:2px; padding-bottom:2px;"><?php echo $preco_pin." €"; ?></span><a href="#" id="<?php echo $compras_pins_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $compras_pins_row['cod_pin'];?>');return false;"></a></div>

<div id="<?php echo $cod_pin; ?>" class="pin_info_div">
<div style="position:absolute; right:2%; top:3%;"><?php if (!isset($_SESSION['cod_user'])==""){ if(!$n_wishlists_do_pin == 0){ ?><a href="del_wishlist.php?cod_pin=<?php echo $compras_pins_row['cod_pin']; ?>"><div class="btn_funcao"><img src="images/ico/delete_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Remover da Wishlist</div></a><?php } else { ?><a href="add_wishlist.php?cod_pin=<?php echo $compras_pins_row['cod_pin']; ?>"><div class="btn_funcao">+ Adicionar à Wishlist</div></a><?php } } ?>&nbsp;&nbsp;<div class="btn_funcao" onClick="showHidePin('<?php echo $compras_pins_row['cod_pin'];?>');return false;"><a href="#" id="<?php echo $compras_pins_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $compras_pins_row['cod_pin'];?>');return false;"></a><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></div>
<div align="center" style="position:absolute; width:150px; top:15%; left:10%;" display:inline-block; max-height:150px;"><img src="<?php echo $bg_pin; ?>" draggable="false" style="position:relative; top:20x; left:0px;" height="150" /><img style=" position:relative; top:-130px; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div>
<div style="position:absolute; text-align:left; line-height:190%; top:20%; left:37%; display:inline-block;">
<span style="font-size:2.5em;"><?php echo $nome_pin; ?></span><br />
<span style="font-size:1.2em;"><b><?php echo $categoria_pin; ?></b></span><br />
<span style="font-size:1.1em;">Adicionado por <?php echo $cod_user; ?> a <?php echo $data_add_pin; ?></span><br>
<span style="font-size:1.1em;"><?php $stock_pin_q = mysql_query("SELECT * FROM stock WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
	
    	while($stock_pin_row = mysql_fetch_array( $stock_pin_q )){ echo "Stock disponível: <b>".$stock_pin_row['quantidade']."</b>"; }
 ?></span></div>
<div class="btn_comprar" align="center" align="center" style="position:absolute; bottom:7%; right:5%;">+ Adicionar ao carrinho<br /><b>(<?php echo $preco_pin; ?> €)</b></div>
</span>


</div>

<?php
	    } 

  }
}
  
   else{
	   
	     $coduser = $_SESSION['cod_user'];
 
  $wishlist_user_q = mysql_query("SELECT * FROM wishlist WHERE cod_user = $coduser;")
	or die(mysql_error());

while($wishlist_user_row= mysql_fetch_array( $wishlist_user_q )){

$cod_pin_wishlist = $wishlist_user_row['cod_pin'];

 $wishlist_pins_q = mysql_query("SELECT * FROM pins WHERE cod_pin = $cod_pin_wishlist;")
	or die(mysql_error());



while($wishlist_pins_row = mysql_fetch_array( $wishlist_pins_q )){

	$cod_pin = $wishlist_pins_row['cod_pin'];
	$nome_pin = $wishlist_pins_row['nome'];
	$categoria_pin = $wishlist_pins_row['categoria'];
	$cod_user = $wishlist_pins_row['cod_user'];
	$preco_pin = $wishlist_pins_row['preco'];
	$data_add_pin = $wishlist_pins_row['data_add'];
	$foto_pin = $wishlist_pins_row['foto'];
	$bg_pin = $wishlist_pins_row['bg'];

 
if (!isset($_SESSION['cod_user'])==""){ 
	
	$wishlists_do_pin = mysql_query("SELECT * FROM wishlist WHERE cod_pin = $cod_pin AND cod_user = ".$_SESSION['cod_user'].";")
	or die(mysql_error());
		 $n_wishlists_do_pin = mysql_num_rows($wishlists_do_pin);
}
?>


<div align="center" class="pin_div" onClick="showHidePin('<?php echo $wishlist_pins_row['cod_pin'];?>');return false;"><div style=" display:inline-block; max-height:150px;"><img draggable="false" src="<?php echo $bg_pin; ?>" style="position:relative; top:20x; left:0px;" height="150" /><img style="position:relative; top:-130px; opacity:0.9; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div><br /><span style="font-size:24px;"><?php echo $nome_pin; ?></span><br /><span style="font-size:18px; background-image:url(images/topbar/div_top.png); border-radius:0.2em; padding-right:4px; padding-left:4px; padding-top:2px; padding-bottom:2px;"><?php echo $preco_pin." €"; ?></span><a href="#" id="<?php echo $wishlist_pins_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $wishlist_pins_row['cod_pin'];?>');return false;"></a></div>

<div id="<?php echo $cod_pin; ?>" class="pin_info_div">
<div style="position:absolute; right:2%; top:3%;"><?php if (!isset($_SESSION['cod_user'])==""){ if(!$n_wishlists_do_pin == 0){ ?><a href="del_wishlist.php?cod_pin=<?php echo $wishlist_pins_row['cod_pin']; ?>"><div class="btn_funcao"><img src="images/ico/delete_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Remover da Wishlist</div></a><?php } else { ?><a href="add_wishlist.php?cod_pin=<?php echo $wishlist_pins_row['cod_pin']; ?>"><div class="btn_funcao">+ Adicionar à Wishlist</div></a><?php } } ?>&nbsp;&nbsp;<div class="btn_funcao" onClick="showHidePin('<?php echo $wishlist_pins_row['cod_pin'];?>');return false;"><a href="#" id="<?php echo $wishlist_pins_row['cod_pin'];?>-show" onClick="showHidePin('<?php echo $wishlist_pins_row['cod_pin'];?>');return false;"></a><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></div>
<div align="center" style="position:absolute; width:150px; top:15%; left:10%;" display:inline-block; max-height:150px;"><img src="<?php echo $bg_pin; ?>" draggable="false" style="position:relative; top:20x; left:0px;" height="150" /><img style=" position:relative; top:-130px; z-index:+30; height:110px;" src="<?php echo $foto_pin; ?>" draggable="false"></div>
<div style="position:absolute; text-align:left; line-height:190%; top:20%; left:37%; display:inline-block;">
<span style="font-size:2.5em;"><?php echo $nome_pin; ?></span><br />
<span style="font-size:1.2em;"><b><?php echo $categoria_pin; ?></b></span><br />
<span style="font-size:1.1em;">Adicionado por <?php echo $cod_user; ?> a <?php echo $data_add_pin; ?></span><br>
<span style="font-size:1.1em;"><?php $stock_pin_q = mysql_query("SELECT * FROM stock WHERE cod_pin = $cod_pin;")
	or die(mysql_error());
	
    	while($stock_pin_row = mysql_fetch_array( $stock_pin_q )){ echo "Stock disponível: <b>".$stock_pin_row['quantidade']."</b>"; }
 ?></span></div>
<div class="btn_comprar" align="center" align="center" style="position:absolute; bottom:7%; right:5%;">+ Adicionar ao carrinho<br /><b>(<?php echo $preco_pin; ?> €)</b></div>
</span>


</div>

<?php
	    } 
	}
  }
} else {	
		echo'<script> history.back()</script>';
	exit; }
?>
</div>
</body>
</html>


