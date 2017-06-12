<?php
	include('connect_db.php');
	if(isset($_GET['cod_pin']))
	{ 
	$cod_pin=$_GET['cod_pin'];
	$dados2=mysql_query("delete from pins where cod_pin='$cod_pin'");
	$dados3=mysql_query("delete from stock where cod_pin='$cod_pin'");
	$dados4=mysql_query("delete from vendas where cod_pin='$cod_pin'");

	if($dados2)
	{
	header('location:admin.php');
	}
	}
?>
