<?php
	require_once"classes/leiloes.php";
	
	//se receber o cod_leilao
	if($_GET['cod_leilao']!='')
	{
	$cod_leilao=$_GET['cod_leilao'];
	
	try{
	$aprovar_leilao = new leiloes();
	$aprovar_leilao->aprovarLeilao($cod_leilao);
	}
		//erro vai para a lista
		catch(Exception $e){
		header('location:bids_standby.admin.php');				
		}
}
   
?>