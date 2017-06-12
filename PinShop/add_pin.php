<?php
	  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	
	include('connect_db.php');
	
	if($_POST){
	
	$nome = $_POST['nome'];
	$categoria = $_POST['categoria'];
	$preco = $_POST['preco'];
	$foto = $_FILES['file']['name'];;
	$upload_folder = 'images/pins/';
	$data_sistema= date('Y-m-d');
	
	$string='';
for($i=0;$i<7;$i++)
{
    $string.=rand(0,9);
}

		move_uploaded_file($_FILES['file']['tmp_name'], $upload_folder.$_FILES['file']["name"]);

	
	//verificar se nome existe
	$nomeverificação = mysql_query("SELECT nome FROM pins WHERE nome = '$_POST[nome]'");
	$nomecheck = mysql_fetch_assoc($nomeverificação);
	
	
	
	if(isset($_POST['nome'])){
	if($_POST['nome'] == $nomecheck['nome']){
	echo '<script>alert("Tenta outro nome, esse já existe")</script>';
	echo'<script> history.back()</script>';
	exit;
	}
	}
	//Categoria
	if(isset($_POST['categoria'])){
	if($categoria == NULL){
	echo '<script>alert("Tens de preencher a categoria")</script>';
	}
	}
	//preco//falta deixar introduzir virgulas
	if(isset($_POST['preco'])){
	if(ereg('[^0-9]',$preco)){
	echo '<script>alert("Tens de inserir numeros")</script>';
	echo'<script> history.back()</script>';
	exit;
	} 
	}
	//FALTA VERIFICCAR SE FOTO FOI SUBMETIDA
	$dados = ("INSERT into pins values ('".$string.$_SESSION['cod_user']."','".$_SESSION['cod_user']."','".$nome."','".$categoria."','".$preco."','".$foto."','','')");
	$info = mysql_query($dados);
	}
?>
<form name="form" action=""  method="post">
                    	<fieldset>
                        	<p><label></label><input name="nome" placeholder="Nome" type="text"/></p>
                        	<p><label></label><input name="categoria" placeholder="Categoria" type="text"/></p>
                            <p><label></label><input name="preco" placeholder="Preço" type="text"/></p>
                            <p><label></label><input name="file" type="file"/></p>
                           	<input name="form" type="submit" value="Criar" />
                        </fieldset>
</form>