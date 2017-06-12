<?php
session_start();
header("Content-type: text/html; charset=UTF-8");
require_once ('classes/leiloes.php');
require_once ('classes/filtro.php');
require_once ('classes/validacoes.php');


	   $codigo_utilizador=$_SESSION['cod_utilizador'];
	   $nome=$_POST['nome']; 
	   $descricao=$_POST['descricao'];
	   $duracao=$_POST['duracao'];
	   $preco=$_POST['preco'];
	   $categoria=$_POST['categoria'];
	   $erros=NULL;
	   	
	$filtrar = new filtro();

	$filtrar->limparLixo($nome);
	$filtrar->limparLixo($descricao);
	$filtrar->limparLixo($duracao);
	$filtrar->limparLixo($preco);

	try {
		$verificar = new verificarCampos();
	 $preco= $verificar -> verificarNumber($preco,1);
	
	}
	catch(Exception $e){
		$erros["preco_inicial" ] = "ERRO - A licitação inicial tem de ter no mínimo 1 dígito!!";
	}
		
	if(! $erros){
		
		try{
			
		$inserir_leilao = new leiloes();
		$resultado = $inserir_leilao -> inserirLeilao($codigo_utilizador, $nome, $descricao, $duracao, $preco, $categoria);		
		
		}
		
		catch (Exception $e){
			echo "ERRO - Inserção de leilão falhou!!!";	
		}


	}
	

?>