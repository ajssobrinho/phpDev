<?php

header("Content-type: text/html; charset=iso-8859-1");
 require_once('database.php');

class bits{
	
public function consultaBitPack (){
		
		$bd = new OOP_Database();	

		$resultado = $bd -> executaQuery("SELECT * FROM `bit_pack` WHERE `cod_bit_pack` = '".$cod_bit_pack."' ");
		return ($resultado);
	}
	
//listar o número de bits de um determinado utilizador
public function consultaPorCodUtilizador ($cod_utilizador){
		
		$bd = new OOP_Database();	

		$resultado = $bd -> executaQuery("SELECT * FROM `utilizadores` WHERE `cod_utilizador` = '".$cod_utilizador."' ");
		return ($resultado);
	}


 //login
		public function refreshBits($cod_utilizador){
		$log = new OOP_Database();
		$resultado = $log->executaQuery ("SELECT * FROM `utilizadores` WHERE `cod_utilizador` = $cod_utilizador;");	

		if ($resultado->num_rows != 1 ){
				return (false);
			}
			else{
				$row = $resultado->fetch_assoc();
						
				
				$_SESSION['bits'] = $row['bits'];			
			
			}
		}//fim do login

	
//Comprar pack de 50	
public function comprarBitsUm ($cod_utilizador){
	
		 $bd = new OOP_Database();		 
		 
		 
		 
		 $resultado = $bd -> executaQuery("UPDATE `utilizadores` SET `bits` = `bits` + '50'  WHERE `cod_utilizador` = '".$cod_utilizador."'");
		 
		 		
		if ( $resultado == 1){
		
			
		header('location:index.php');

			}
		 }//fim editar utilizador
		 
		 
//Comprar pack de 100	
public function comprarBitsDois ($cod_utilizador){
	
		 $bd = new OOP_Database();		 
		 
		 
		 
		 $resultado = $bd -> executaQuery("UPDATE `utilizadores` SET `bits` = `bits` + '100'  WHERE `cod_utilizador` = '".$cod_utilizador."'");
		 
		 		
		if ( $resultado == 1){
			header('location:index.php');
			}
		 }//fim editar utilizador
		 
		 
		 //Comprar pack de 250	
public function comprarBitsTres ($cod_utilizador){
	
		 $bd = new OOP_Database();		 
		 
		 
		 
		 $resultado = $bd -> executaQuery("UPDATE `utilizadores` SET `bits` = `bits` + '250'  WHERE `cod_utilizador` = '".$cod_utilizador."'");
		 
		 		
		if ( $resultado == 1){
			header('location:index.php');
			}
		 }//fim editar utilizador
		 
}
?>