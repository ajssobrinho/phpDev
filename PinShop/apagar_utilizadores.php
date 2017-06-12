<?php
	include('connect_db.php');
	if(isset($_GET['cod_user']))
	{ 
	$cod_user=$_GET['cod_user'];
	$dados2=mysql_query("delete from users where cod_user='$cod_user'");
	if($dados2)
	{
	header('location:admin.php');
	}
	}
?>
