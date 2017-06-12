
		<?php
			include('connect_db.php');
			
			$cod_user=$_POST['cod_user'];
			$username=$_POST['username'];
			$nome_user=$_POST['nome_user'];
			$password=$_POST['password'];
			$email=$_POST['email'];

			$dados3=mysql_query("update users set nome_user='$nome_user', password='$password', email='$email' where cod_user='$cod_user'");
			if($dados3)
			{
			header('location:admin.php');
			}
			
			$dados=mysql_query("select * from users where cod_user='$cod_user'");
			$dados2=mysql_fetch_array($dados);
		?>