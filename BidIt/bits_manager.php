<?php
session_start();

		
		require_once('classes/utilizadores.php');
		require_once('classes/bits.php');	
		
		
		
									
				$cod_utilizador=$_SESSION['cod_utilizador'];			
							
				if ($_GET["pack"] == 1) {	
					
					try{
						$comprar_bits = new bits();
						$comprar_bits->comprarBitsUm($cod_utilizador);
						
						$refresh_bits = new bits();
						$refresh_bits->refreshBits($cod_utilizador);
						
					}
					//erro vai para a lista
					catch(Exception $e){
						header('location:bits_comprar.php');						
					}
				}
					
					
				if ($_GET["pack"] == 2) {	
									
					try{
						$comprar_bits = new bits();
						$comprar_bits->comprarBitsDois($cod_utilizador);
						
						$refresh_bits = new bits();
						$refresh_bits->refreshBits($cod_utilizador);
					}
					//erro vai para a lista
					catch(Exception $e){
						header('location:bits_comprar.php');						
					}					
				}
				
					
				if ($_GET["pack"] == 3) {					
					
					try{
						$comprar_bits = new bits();
						$comprar_bits->comprarBitsTres($cod_utilizador);
						
						$refresh_bits = new bits();
						$refresh_bits->refreshBits($cod_utilizador);
					}
					//erro vai para a lista
					catch(Exception $e){
						header('location:bits_comprar.php');						
					}
					
			
					
}
			
   
?>