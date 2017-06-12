<?php 

$todos_os_pins = mysql_query("SELECT * FROM pins;")
	or die(mysql_error());

$pins_mais_vendidos_q = mysql_query("SELECT * FROM pins;")
	or die(mysql_error());
	
$ordernar_por_nome_q = mysql_query("SELECT * FROM pins order by nome;")
	or die(mysql_error());	
	
$ordernar_por_preco_q = mysql_query("SELECT * FROM pins order by preco;")
	or die(mysql_error());	

?>