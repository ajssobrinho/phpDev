<?php

require_once "database.php";

class filtro{
	
	public function checkstringAndLength($dados, $minLength, $maxLength){
		
		if (preg_match('/^[A-z0-9_]{'.$minLength.','.$maxLength.'}$/',$dados)){
			
			return (true);
			
		}
			else{
				return (false);
				}
			
		}


	public function limparLixo ($dados){
		$dados = trim ($dados); //limpa espaºços em branco
		$dados = stripslashes($dados);//limpa as barras em número ímpar
		$dados = strip_tags ($dados);//limpa as tags
		return ($dados);
		}


}   //end class

	class check_utilizador{
		
		//verifica campo
		public function vazio($campos){
			if (strlen($campos) == 0){
				return (false);	
			} else {
				return (true);				
				}
				}
		public function CleanFields($field){  
			    $field=trim($field);  //limpa espaços antes e depois do texto  
				$field=strip_tags($field); //Tags de codipo
				$field=stripslashes($field); // tirar as barras
			return($field); 
		}
		
		
		
	}//fim da classe
?>
