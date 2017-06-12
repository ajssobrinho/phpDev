<?php
session_start();

if(empty ($_SESSION)){
		
			header ('location: path_erro_nao_logado.php');
	
			
		}
		
		else{
			
require_once('classes/leiloes.php');
require_once('classes/utilizadores.php');


	//se receber variáveis POST
	if($_GET['cod_leilao']!='')
	{
		$cod_utilizador=$_SESSION['cod_utilizador'];
		$cod_leilao = $_GET['cod_leilao'];
 			
		try{
	
			$descontar = new leiloes();
			$descontar->descontarBits($cod_utilizador);			
			
			$aumenta_licitacao = new leiloes();
			$aumenta_licitacao->aumentaLicitacao($cod_leilao);
			
			$logar_licitacao = new leiloes();
			$logar_licitacao->logarLicitacao($cod_utilizador, $cod_leilao);
			
			$contar_bids = new leiloes();
			$contar_bids->contarLicitacoes($cod_leilao);
						
		}
		//erro vai para a lista
		catch(Exception $e){
			header('Location: ' . $_SERVER['HTTP_REFERER']);				
		}
	}

}
?>