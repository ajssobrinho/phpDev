<html>
<head>
<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } include ('connect_db.php');

?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" type="text/css" rel="stylesheet" />

<title>Finalização de compra</title>
</head>
<body>
<CENTER>
<?php

$acao = $_GET['acao'];

$string='';
for($i=0;$i<7;$i++)
{
    $string.=rand(0,9);
}

$fatura= $string.$_SESSION['cod_user'];
$total_preco = 0;
$data = date('Y-m-d');


$listar_carrinho_q = mysql_query("SELECT * from carrinho WHERE sessao = '".$_SESSION['cod_user']."' ;")
	or die(mysql_error());
	

$listar_carrinho_row =mysql_num_rows($listar_carrinho_q);





	echo "<br><table style='text-align: left; width: 600px; height: 32px; ' border=0 cellpadding=2 cellspacing=2><tbody><tr><td style='vertical-align: top; width: 200px; text-align: center;'>Nome</td><td style='vertical-align: top; width: 100px; text-align: center;'>Preço<br></td><td style='vertical-align: top; width: 150px; text-align: center; '>Quantidade<br></td></tr><tr><td colspan=3><hr></td></tr>";
  	
	
	
	
	while($listar_carrinho_row = mysql_fetch_array( $listar_carrinho_q )){
		
	$cod_pin = $listar_carrinho_row['cod_pin'];
	$nome_pin = $listar_carrinho_row['nome'];
	$preco_pin = $listar_carrinho_row['preco'];
	$qtd_pin = $listar_carrinho_row['qtd'];
	
	$listar_stock_q = mysql_query("SELECT quantidade from stock WHERE cod_pin = ".$cod_pin.";")
	or die(mysql_error());
	
	
	while($listar_stock_row = mysql_fetch_array( $listar_stock_q )){
		
	$qtd_stock = $listar_stock_row['quantidade'];
	
	$qtd_desc = $qtd_stock - $qtd_pin ;
	
	// Verificamos se a acao é igual a eliminar
if ($acao == "finalizar")
{
   
   	$qr_registar_venda = mysql_query("INSERT INTO vendas VALUES ('".$fatura."','','".$cod_pin."','".$data."','".$qtd_pin."','".$_SESSION['cod_user']."');")
				or die (mysql_error());    
           
   
   
   	$qr_finalizar_stock = mysql_query("UPDATE stock SET quantidade ='$qtd_desc' WHERE  cod_pin = '$cod_pin';")
				or die(mysql_error());  
	
			 
		   
   
    $qr_finalizar_carrinho = mysql_query("DELETE FROM carrinho WHERE sessao = '".$_SESSION['cod_user']."';")
				or die(mysql_error());    
		
		
echo'<script>window.location = "descobrir.php";
</script>';
}

	}
	
	$total_preco = $total_preco + ($qtd_pin*$preco_pin);
		
	
		echo "<tr>";
	echo "<td style='vertical-align: top; width: 200px; text-align: center;'>".$nome_pin."</td><td style='vertical-align: top; width: 100px; text-align: center;'>". $preco_pin." €</td><td style='vertical-align: top; width: 150px; text-align: center;'>".$qtd_pin."</td>";
	echo "<br>";
	echo "</tr>";
	
			 
}
echo "</tbody></table>";

echo "<br>";




?>
<span><a href="check_out.php?acao=finalizar"><div class="btn_funcao"><img src="images/ico/check_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Comprar <b>(<?php echo $total_preco; ?> €</b>)</div></a>
</span>

</CENTER>
</body>
</html>
