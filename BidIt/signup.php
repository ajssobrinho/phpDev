<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="bidit.style.css" rel="stylesheet" type="text/css">

<title>Bidit // 1.0</title>

<?php session_start();

if($_SESSION['tipo_utilizador']== ''){
include('topbar.php');}
elseif($_SESSION['tipo_utilizador']== 0){
include('topbar_user.php');}
else{
include('topbar_admin.php');}
include('scripts.php');

require_once ('classes/utilizadores.php');
	require_once ('classes/validacoes.php');
	require_once ('classes/filtro.php');
	
	if(isset($_POST['registo']))
	if($_POST['registo']==1)
	{ 
	$nome=$_POST['nome'];
	$apelido=$_POST['apelido'];
	$email=$_POST['email'];
	$username=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$erros=NULL;
	
	$filtrar = new filtro();
	$filtrar->limparLixo($nome);
	$filtrar->limparLixo($apelido);
	$filtrar->limparLixo($email);
	$filtrar->limparLixo($password);
	$filtrar->limparLixo($cpassword);
	
	
	$validar = new verificarCampos();

try {
	 $nome = $validar -> verificarString($nome,3);
	
	}catch(Exception $e){
		$erros["nome"] = "<b>></b> Nome inválido. ";
	}
try {
	 $apelido= $validar -> verificarString($apelido,3);
	
	}catch(Exception $e){
		$erros["apelido"] = "<b>></b> Apelido inválido. ";
	}
	
try {
	 $email= $validar -> verificarEmail($email);
	
	}catch(Exception $e){
		$erros["email"] = "<b>></b> E-mail inválido. ";
	}

try {
	 $password= $validar -> verificarString($password,6);
	
	}catch(Exception $e){
		$erros["password"] = "<b>></b> Password invalida. Password tem de ter  6 caract. ou mais. ";
	}

try {
	 $cpassword= $validar -> verificarPassword($password,$cpassword);
	
	}catch(Exception $e){
		$erros["cpassword" ] = "<b>></b> As Passwords não correspondem. ";
	}		
	
	if(!$erros){
			$username= $_POST['username'];
			$email= $_POST['email'];
			try{
			$verificar = new utilizadores();
			$resultado = $verificar -> verificar_utilizadores($username, $email);
			if($resultado == 1){
			echo "asdasd";
			}else{		
			$insere = new utilizadores();
			$resultado = $insere -> inserir_utilizador($nome, $apelido, $email, $username, $password);
			header('location: login.php');
			}
		}//fim try
			catch (Exception $e){
				echo "Username ou email já existem";	
			}
	}			
	}
 ?>
 <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script language="javascript" type="text/javascript">
$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 90) {
        $('#pesquisa_btn').show();
    }else {
		$('#pesquisa_btn').hide();
		}
	}); 

function function_form_add_user()
{
document.getElementById("registo").submit();
}
</script>


<script language="javascript" type="text/javascript">

function pesquisa_btn()
{
	document.getElementById("pesquisar_leilao").focus();

}
</script>
</head>

<body>

<a href="hoje.php"><div align="center" id="novidades" style="top:22%;" class="novidades_side"><span style="font-size:2em; color:white; position:relative; top:30%; line-height:100%; font-family:'Pacifico',Arial;">Novidades<br />de <?php
If(date('w')==0){
	echo "domingo!";}
elseIf(date('w')==1){
	echo "segunda-feira!";}
	elseIf(date('w')==2){
	echo "terça-feira!";}
	elseIf(date('w')==3){
	echo "quarta-feira!";}
	elseIf(date('w')==4){
	echo "quinta-feira!";}
	elseIf(date('w')==5){
	echo "sexta-feira!";}
	elseIf(date('w')==6){
	echo "sábado!";}
	else {
		echo "hoje";}
?></span></div></a>


<div id="feature_1" style="width:26%;" class="favoritos_all">

<span style="font-size:1.7em;"><b>Criar conta</b></span><hr />
<?php if(isset($erros['username']))if($erros['username']!=''){ echo $erros['username'];}?><?php if(isset($erros['nome']))if($erros['nome']!=''){ echo $erros['nome'];}?><?php if(isset($erros['apelido']))if($erros['apelido']!=''){ echo $erros['apelido'];}?><?php if(isset($erros['email']))if($erros['email']!=''){ echo $erros['email'];}?><?php if(isset($erros['password']))if($erros['password']!=''){ echo $erros['password'];}?><?php if(isset($erros['cpassword']))if($erros['cpassword']!=''){ echo $erros['cpassword'];}?>
<span style="line-height:350%; font-size:1.2em;">
 <form name="registo" id="registo" action="" class="jNice" method="post" enctype="multipart/form-data">
                    <input name="registo" type="hidden" value="1" />
                    		<p><input name="username" type="text" size="40" placeholder="Nome de utilizador" class="text_form" />
							                            
<input name="nome" type="text" size="20" placeholder="Nome" class="text_form" />
                            
							<input name="apelido" type="text" size="27" placeholder="Apelido" class="text_form"  />
                            
							<br /><input name="email" type="text" size="51" placeholder="E-mail" class="text_form" />
                            
							<input name="password" type="password" size="23" placeholder="Palavra-passe" class="text_form" />
                            
<input name="cpassword" type="password" placeholder="Confirmar" size="24" class="text_form" />
                            
                            </p> 
 
                          
<span style="line-height:120%; font-size:0.8em;"><br />Ao clicares em Registar estás a concordar com os <a style="color:#3399ff;" target="_blank" href="docs/termos_e_condicoes.pdf">Termos & condições do Bidit</a>.</span><br />
</form><div class="btn_licitar_small" onclick="function_form_add_user();" align="center" style="color:white; margin-top:20px; line-height:140%; background-color:#3399ff; font-size:1em; position:relative;  top:-8px;"><img src="src/topbar/check_ico.png" height="11" />&nbsp;&nbsp;Registar</div>
</span>
</div>

<div class="pub_side_cat" style="background-image:url(src/pub/peres_classes.jpg); top:55%;"><span style="position:relative; color:white; padding-left:5px; background-color:#3399ff; border-bottom-left-radius:0.2em; -webkit-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    -moz-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    box-shadow: 0px 1px 1px -1px rgb(0,0,0); border-bottom-right-radius:2em; padding-right:15px; font-size:0.9em;">PUB</span></div>
       
      <div class="bids_relacionados" style="top:105%; width:60%;"><span style="font-size:1.4em; position:relative; top:7px;">&nbsp;Vê também...</span>
    <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/Denim-Jacket-For-Women-Fashion.jpg); position:absolute; top:20%; border-radius:0.2em; width:30%; height:80%;"></div>
    <span style="position:absolute; line-height:100%; font-size:2.5em; width:30%; top:20%; left:32%;"><a href="#">Casaco de ganga</a></span>
     <span style="position:absolute; line-height:100%; font-size:1.5em; color:#3399ff; width:37%; top:65%; left:32%;"><b>2,99€</b></span><br />

    
     <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/dress.jpg); position:absolute; left:65%; top:20%; border-radius:0.2em; width:13%; height:36%;"></div><span style="position:absolute; line-height:100%; font-size:1.5em; width:20%; top:20%; left:79%;"><a href="#">Vestido vermelho</a></span>
         <span style="position:absolute; line-height:100%; font-size:1.2em; color:#3399ff; width:37%; top:45%; left:79%;"><b>13,92€</b></span>
    
      <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/criancas.jpg); position:absolute; left:65%; top:62%; border-radius:0.2em; width:13%; height:36%;"></div><span style="position:absolute; line-height:100%; font-size:1.5em; width:20%; top:62%; left:79%;"><a href="#">Casaco de criança verde</a></span>
         <span style="position:absolute; line-height:100%; font-size:1.2em; color:#3399ff; width:37%; top:87%; left:79%;"><b>19,48€</b></span>
      
    </div>  
</body>
</html>