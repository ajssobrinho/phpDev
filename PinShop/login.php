<?php
	session_start();
		
	if (isset($_SESSION['tipo'])==""){ 

	$username=$_POST['username'];
	if (!$username){
	echo '<script>alert("Ups! Precisamos do teu nome de utilizador.")</script>';
	echo'<script> history.back()</script>';
	exit;}

	$password=$_POST['password'];
	if(!$password){ 
	echo '<script>alert("Ups! Precisamos da tua palavra-passe.")</script>';
	echo'<script> history.back()</script>';
	exit;}

	include('connect_db.php');

	$vernome=("Select username from users where username='".$username."';");
	$resultadonome=mysql_query($vernome);
	$n_nomes=mysql_num_rows($resultadonome);
	$resultadonome2=mysql_fetch_array($resultadonome);
	$username=$resultadonome2['username'];

	$verlogin=("Select * from users where BINARY username='".$username."' and password='".$password."' ;");
	$resultado=mysql_query($verlogin);
	$n_registos=mysql_num_rows($resultado);
	$resultado2=mysql_fetch_array($resultado);
	$email=$resultado2['email'];
	$cod_user=$resultado2['cod_user'];
	$nome_user=$resultado2['nome_user'];
	$foto_user=$resultado2['foto'];
	$tipo_user=$resultado2['tipo_user'];

	If (!$n_registos){
	echo'<script>alert("Ups! O nome de utilizador ou a palavra-passe estão errados.")</script>';
	echo'<script>history.back()</script>';
	exit;}


	$_SESSION['email']=$email;
	$_SESSION['username']=$username; 
	$_SESSION['nome_user']=$nome_user; 
	$_SESSION['cod_user']=$cod_user;
	$_SESSION['foto']=$foto_user;
	$_SESSION['tipo_user']=$tipo_user;
	
	header("Location:descobrir.php");
	};	
?>
<!--><meta http-equiv="refresh" content="0; url=menu.php" />
<?php 
?>
