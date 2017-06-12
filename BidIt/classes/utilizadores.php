
<?php
header("Content-type: text/html; charset=iso-8859-1");
 require_once('classes/database.php');
 
 
class utilizadores{
		private $cod_utilizador;
		private $tipo;
		private $nome;
		private $apelido;
		private $data_nas;
		private $morada;
		private $telemovel;
		private $nacionalidade;
		private $email;
		private $username;
		private $password;
		
		
		//inserir utilizadors
		public function inserir_utilizador ($nome, $apelido, $email, $username, $password){
		$bd = new OOP_Database();
		$inserir = "INSERT INTO `utilizadores` (`nome`,`apelido`,`email`,`username`,`password`) VALUES ('$nome','$apelido','$email','$username','$password')";
		$resultado = $bd -> executaQuery ($inserir);
		if($resultado == 0){
		header('location:index.php');	
			}		 
		 }
		 
		 //verificar se existe dados na base de dados
		public function verificar_utilizadores($username,$email){
		$bd = new OOP_Database();	 
		$verificar = "SELECT * FROM utilizadores WHERE username = '$username' OR email = '$email'";
		$resultado = $bd -> executaQuery($verificar);
		}

		//visualizar utilizadores
		public function ver_utilizadores (){
		$bd = new OOP_Database();	  
		$ver_utilizador = "SELECT * FROM utilizadores";
		$resultado = $bd -> executaQuery($ver_utilizador);
		return ($resultado);
		}
		
		public function ver_utilizadores2 (){
   		$bd = new OOP_Database();   
  		$ver_utilizador = "SELECT * FROM utilizadores WHERE username ='$username' AND email ='$email'";
  		$resultado = $bd -> executaQuery($ver_utilizador);
		return count($resultado);
		}
		
		//ver dados para o editar
		public function ver_utilizador_editar($cod_utilizador){
		$bd = new OOP_Database();
		$resultado = $bd->executaQuery( "SELECT * FROM  `utilizadores` where cod_utilizador='$cod_utilizador'");
		$dados= $resultado->fetch_array(MYSQLI_ASSOC);
		$this->nome = $dados['nome'];
		$this->apelido = $dados['apelido'];
		$this->morada = $dados['morada'];
		$this->telemovel = $dados['telemovel'];
		$this->email = $dados['email'];
		$this->username = $dados['username'];
		$this->password = $dados['password'];
		return ($dados);
		}

		//selecionar utilizador por id
		 public function selecionar_utilizadores ($ID){
		 $bd = new OOP_Database();
		 $selecionar = "SELECT * FROM utilizadores WHERE cod_utilizador = '$ID'" ;
		 $resultado = $bd -> executaQuery($selecionar);
		 $dados = $resultado-> fetch_assoc();
		 return ($dados);
		 }
		
		//funcão remover utilizadores
		public function remover_utilizador($ID){
		$bd = new OOP_Database();
        $resultado = $bd -> executaQuery("DELETE FROM utilizadores WHERE cod_utilizador = '$ID'");
        if ($resultado == 1){
			header('location:utilizadores_listar.php');
			} 
   		 }//fim remover utilizadores
		 
		 //editar utilizador
		 public function editar_utilizador($cod_utilizador, $nome, $apelido, $morada, $telemovel, $email,$nacionalidade, $username, $password){
		 $bd = new OOP_Database();
		 $resultado = $bd -> executaQuery("UPDATE `bidit_db`.`utilizadores` SET   `nome` =  '$nome', `apelido` =  '$apelido', `morada` =  '$morada', `telemovel` =  '$telemovel', `email` =  '$email', `nacionalidade` =  '$nacionalidade',`username` =  '$username',`password` =  '$password' WHERE  `utilizadores`.`cod_utilizador` ='$cod_utilizador'");
		if ( $resultado == 1){
			if ($tipo == 1){
			header('location:listar_utilizadores.php');
			}else{
			header('location:home.php');
			}
			}
		 }//fim editar utilizador
		 
		 
		 //login
		public function login($username, $password){
		$log = new OOP_Database();
		$resultado = $log->executaQuery ("SELECT * FROM `utilizadores` WHERE `username`='$username' AND `password`='$password'");	

		if ($resultado->num_rows != 1 ){
				return (false);
			}
			else{
				$row = $resultado->fetch_assoc();
				session_start();			
				$_SESSION['cod_utilizador']=$row['cod_utilizador'];
				$_SESSION['tipo_utilizador']=$row['tipo_utilizador'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['nome'] = $row['nome'];
				$_SESSION['apelido'] = $row['apelido'];
				$_SESSION['bits'] = $row['bits'];
				$_SESSION['foto_user'] = $row['foto_user'];
				$_SESSION['cor'] = $row['cor'];
				
		
			header('Location: ' . $_SERVER['HTTP_REFERER']);	
					
			
			}
		}//fim do login
	}//fim da class

?>