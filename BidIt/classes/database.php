<?php
//Classe de Ligação à base de dados
	class OOP_Database{
		
		//PROPRIEDADES --> Classe OOP_Database
		private $_host = "localhost";
		private $_username = "joao";
		private $_password = "joao";
		private $_dbNome = "bidit_db";
		private $_myDb;
		
			// MÉTODO --> Construtor da Classe
			public function __construct(){
			$this->_myDb = new mysqli($this->_host , $this->_username , $this->_password , $this->_dbNome);
			
				//CASO --> Erro da Base de dados
				if(mysqli_connect_error()){
					throw new Exception (' Erro ao ligar à Base de Dados bidit_db!');
				}
			}			
			
			// MÉTODO --> Fechar a Base de Dados
			public function closeDb(){
				$this->_myDb->close();
			}
		
			// MÉTODO --> Query
			public function executaQuery ($query){
				$resultado = null ;
				$resultado = $this->_myDb->query($query);
				
				//CASO --> Query sem resultados
				if(!$resultado){
					return(false);
				}
				else{
					return($resultado);
				}
			}
		
			// MÉTODO --> Verificar o formato do resultado da query
			public function resultadoFormato($resultado) {
				
				//verificação do formato de $resultado é (msqli_resultado)----class
				if (is_a( $resultado, 'mysqli_resultado' )){
					$novoFormato = null;
					
					
					while ($linha = $resultado->fetch_array()){
						$novoFormato[]= $linha;				
					}
				
					return ($novoFormato);
					die();
				}
				else{ 
					return (false);
				}			
			}	
	}//end class
?>