<?php
			include('connect_db.php');

			$cod_pin=$_POST['cod_pin'];
			$nome=$_POST['nome'];
			$categoria=$_POST['categoria'];
			$preco=$_POST['preco'];
			$data_add=$_POST['data_add'];

			$dados3=mysql_query("update pins set nome='$nome',categoria='$categoria', preco='$preco', data_add='$data_add' where cod_pin='$cod_pin'");
			if($dados3)
			{
			header('location:admin.php');
			}
			
			$dados=mysql_query("select * from pins where cod_pin='$cod_pin'");
			$dados2=mysql_fetch_array($dados);
?>
	