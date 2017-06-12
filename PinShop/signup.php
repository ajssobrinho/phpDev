<?php
	include('connect_db.php');
	
	if($_POST){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nome_user = $_POST['nome_user'];
	$email = $_POST['email'];
	$erros_count = "";
	
	//verificar se user existe
	$userverificação = mysql_query("SELECT username FROM users WHERE username = '$_POST[username]'");
	$usercheck = mysql_fetch_assoc($userverificação);
	
	//verificar se mail existe
	$mailverificação = mysql_query("SELECT email FROM users WHERE email = '$_POST[email]'");
	$mailcheck = mysql_fetch_assoc($mailverificação);
	
	if($_POST){	  
	//username
	if (isset($_POST['username'])){ 
	$username = $_POST['username'];
  
  	if($username == NULL){
		echo '<script>alert("Insere o teu username")</script>';
	echo'<script> history.back()</script>';
	exit;
		$erros_count = 1;	
	}
	if($_POST['username'] == $usercheck['username']){
		echo '<script>alert("O username já existe. Tenta outro")</script>';
	echo'<script> history.back()</script>';
	exit;
		$erros_count = 1;
	}
	else{ 
		if (strlen($_POST['username'])> 3 &&(strlen($_POST['username'])<11 )){		
		} 
		 else {
				echo '<script>alert("O username tem de ter mais de três caracteres e menos de onze")</script>';
	echo'<script> history.back()</script>';
	exit;
				$erros_count = 1;
		 }
	}
}
	//nome
	if (isset($_POST['nome_user'])){ 
	$nome_user= $_POST['nome_user'];
  
  	if($nome_user == NULL){
	echo '<script>alert("Insere o teu nome")</script>';
	echo'<script> history.back()</script>';
	exit;
		$erros_count = 1;
	}
	else{ 
		if (strlen($_POST['nome_user'])> 5  &&(strlen($_POST['nome_user'])< 30 )){			
		} 
		 else {
				echo '<script>alert("Escreve o nome correctamente")</script>';
	echo'<script> history.back()</script>';
	exit;
				$erros_count = 1;
		 }
	}

}
	//password
	if (isset($_POST['password'])){ 
	$password = $_POST['password'];
  
  	if($password == NULL){
	echo '<script>alert("Insere a password")</script>';
	echo'<script> history.back()</script>';
	exit;
		$erros_count = 1;
	}
	else{ 
		if (strlen($_POST['password'])> 5  &&(strlen($_POST['password'])< 20 )){			
		} 
		 else {
				echo '<script>alert("A password tem de ter mais de cinco caracteres e menos de vinte")</script>';
	echo'<script> history.back()</script>';
	exit;
				$erros_count = 1;
		 }
	}

}
	//confirmação password
	if ($_POST["password"] == $_POST["cpassword"]) {
	}
	else {
   echo '<script>alert("As password não coincidem!")</script>';
	echo'<script> history.back()</script>';
	exit;
}
	//mail
	if (isset($_POST['email'])){ 
	$email = $_POST['email'];
  
  	if($email == NULL){
	echo '<script>alert("Insere o teu e-mail")</script>';
	echo'<script> history.back()</script>';
	exit;
		$erros_count = 1;
	}
	if($_POST['email'] == $mailcheck['email']){
		echo '<script>alert("O e-mail já está em uso. Tenta outro")</script>';
	echo'<script> history.back()</script>';
	exit;
		$erros_count = 1;
	}
	else{ 
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {		
		} 
		 else {
				echo '<script>alert("Insere o e-mail correctamente!")</script>';
	echo'<script> history.back()</script>';
	exit;
				$erros_count = 1;
		 }
	}
}
	//confirmação mail
	if ($_POST["email"] == $_POST["cemail"]) {
	}
	else {
	echo '<script>alert("Os e-mail´s não coincidem")</script>';
	echo'<script> history.back()</script>';
	exit;
	}
		
}
	//termos e condições
	if(isset($_POST['termos'])){}else{
	echo '<script>alert("Tens de aceitar os termos e condições")</script>';
	echo'<script> history.back()</script>';
	exit;
	$erros_count = 1;
	}

	if ($erros_count == ""){
	$dados = ("INSERT into users values ('','".$username."','".$nome_user."','".$password."','".$email."','images/foto_user/default.jpg','user')");

	$info = mysql_query($dados);
	}
	
	if($erros_count==""){
		header ("location: index.php");
	}
	
} 
?>