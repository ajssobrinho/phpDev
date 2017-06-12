<?php
			include('connect_db.php');

			$cod_stock=$_POST['cod_stock'];
			$quantidade=$_POST['quantidade'];

			$dados3=mysql_query("update stock set quantidade='$quantidade' where cod_stock='$cod_stock'");
			if($dados3)
			{
			header('location:admin.php');
			}
			
			$dados=mysql_query("select * from stock where cod_stock='$cod_stock'");
			$dados2=mysql_fetch_array($dados);
?>
		
