<?php
	require_once"classes/leiloes.php";
	
	//se receber o cod_leilao
	if($_GET['cod_leilao']!='')
	{
	$cod_leilao=$_GET['cod_leilao'];
	try{
	$apagar_leilao = new leiloes();
	$apagar_leilao->removerLeilao($cod_leilao);
	}
		//erro vai para a lista
		catch(Exception $e){
		header('location:bids_aprovados.admin.php');				
		}
}
   
?>