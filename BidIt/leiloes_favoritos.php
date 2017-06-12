<?php
session_start();

if(empty ($_SESSION)){
		
			header ('location: path_erro_nao_logado.php');
	
			
		}
		
		else{
			
require_once('classes/leiloes.php');
require_once('classes/utilizadores.php');




	//se receber variáveis POST
	if($_GET['cod_leilao']!='')	{
		
		
			$cod_utilizador=$_SESSION['cod_utilizador'];
			$cod_leilao = $_GET['cod_leilao'];

		
		if($_GET['acao']='adicionar')	{
	
			
			try{
				
				$favoritos_a = new leiloes();
				$favoritos_a->favoritoLeilaoA($cod_utilizador,$cod_leilao);
								
			}
			
			//erro vai para a lista
			catch(Exception $e){
				header('location:leiloes_listar_standart.php');				
			}
			
		}
		
		
		if($_GET['acao']='remover')	{
	
			
			try{
				
				$favoritos_r = new leiloes();
				$favoritos_r->favoritoLeilaoR($cod_utilizador,$cod_leilao);
								
			}
			
			//erro vai para a lista
			catch(Exception $e){
				header('location:leiloes_listar_standart.php');				
			}
			
		}
		
		
		
		
		
	}
}
?>