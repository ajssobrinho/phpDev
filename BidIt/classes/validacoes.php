<?php
	class verificarCampos{
		
		// MÉTODO --> Limpar os dados a passar mediante os parâmetros abaixo
		public function limparCampos($campo){  
				// espaços em branco antes e depois do texto
			    $campo=trim($campo);
				// tags
				$campo=strip_tags($campo);
				//barras em número ímpar
				$campo=stripslashes($campo);
			return($campo); 			
		}
		
		// MÉTODO --> Verifica se os dados a passar são String e o seu comprimento
		public function verificarString($campo,$min){ 
				
				//CASO (1) --> Os dados a passar são Stringe se o seu comprimento mínimo corresponde aos parâmetros
				if( strlen($campo)>=$min && preg_match('/^[A-Za-z0-9À-ÿ-à-ÿ\s]*$/',$campo)){ 
			 	
			 		return ($campo);
								
				}
				
				//CASO (0)
				else{
					
					throw new Exception('ERRO_PREENCHIMENTO, campo mal preenchido!');
					
				}
		} 
		
		public function verificarNumber($campo,$min){ 
				if( strlen($campo)>=$min && is_numeric($campo)){ 
			 	
			 	return ($campo);	
			}
			else{
				throw new Exception('ERRO_PREENCHIMENTO, Campo mal preenchido');
			}
		} 
		
		
		public function notNull($campo){ 
				if( $campo != NULL){ 
			 	
			 	return ($campo);	
			}
			else{
				throw new Exception('ERRO_PREENCHIMENTO, Campo não preenchido');
			}
		} 
		
		//PASSWORD
		public function verificarPassword($campo, $campo1){
			if ($campo != $campo1){
				throw new Exception('As password não coinsidem');
			}
			
		}
		
		
		//EMAIL
		public function verificarEmail($campo){ 
				if(filter_var($campo, FILTER_VALIDATE_EMAIL)){ 
					return ($campo);				
				}
			else{
				throw new Exception('ERRO_PREENCHIMENTO, Email inválido!');
			}
		}	 
	}//fim da classe
?>