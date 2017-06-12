<?php
 require_once('classes/database.php');
 
 class leiloes{
	 protected $_cod_leilao;
	 protected $_cod_utilizador;
	 protected $_nome;
	 protected $_descricao;
	 protected $_data;
	 protected $_hora_i;
	 protected $_duracao;
	 protected $_preco;
	 protected $_licitacao;
	 protected $_estado;


	
	public function inserirLeilao ( $cod_utilizador, $nome, $descricao, $duracao, $preco, $categoria){
			
			$bd = new OOP_Database();
			$query = "INSERT INTO `leiloes` VALUES ('','".$cod_utilizador."','".$nome."','".$descricao."','','".$duracao."','".$preco."','".$preco."','standby','0','".$categoria."','src/homer.jpg','#3399ff');";
				
		
			$resultado = $bd -> executaQuery ($query);
			
			if ($resultado = 1){
				echo 'INSERIDO COM SUCESSO!';
				
				header('location:index.php');
				
				}
								 
	} 

		 
		 
	//MÉTODO --> Ver todos os leilões em STANDBY
	public function verLeiloesStandby (){
		
		$bd = new OOP_Database();	
		  
		$ver_leilao_standby = "SELECT * FROM leiloes WHERE `estado` = 'standby' ";
		$resultado = $bd -> executaQuery($ver_leilao_standby);
		return ($resultado);
	}
	
		//MÉTODO --> Ver todos os leilões ATIVOS
	public function verLeiloesAtivos (){
		
		$bd = new OOP_Database();	
		  
		$ver_leilao_ativos = "SELECT * FROM leiloes WHERE `estado` = 'ativo' ";
		$resultado = $bd -> executaQuery($ver_leilao_ativos);
		return ($resultado);
	}
	
			//MÉTODO --> Ver leilões mais licitados
	public function Top5leiloes (){
		
		$bd = new OOP_Database();	
		  
		$top5leiloes = "SELECT * FROM leiloes WHERE `estado` = 'ativo' ORDER BY bids DESC LIMIT 5;";
		$resultado = $bd -> executaQuery($top5leiloes);

		return ($resultado);
	}
	
				//MÉTODO --> Ver info de um leilao
				
		public function view_info_bid ($cod_bid){
		
		$bd = new OOP_Database();	
		  
		$view_info_bid_q = "SELECT * FROM leiloes WHERE cod_leilao = '$cod_bid'";
		$resultado = $bd -> executaQuery($view_info_bid_q);

		return ($resultado);
	}
	
				//MÉTODO --> Bids ativos de uma categoria
	public function bid_ativo_cat ($cod_cat){
		
		$bd = new OOP_Database();	
		  
		$bid_ativo_cat_q = "SELECT * FROM leiloes WHERE estado = 'ativo' AND categoria = '$cod_cat' ORDER BY data;";
		$resultado = $bd -> executaQuery($bid_ativo_cat_q);
		return ($resultado);
	}
	
					//MÉTODO --> Bids de hoje aleatórios
	public function bids_today(){
		
		$bd = new OOP_Database();
		$data_de_hoje = date('Y-m-d');		  

		$bids_today_q = "SELECT * FROM leiloes WHERE data = '$data_de_hoje' ORDER BY rand() LIMIT 1;";
		$resultado = $bd -> executaQuery($bids_today_q);
		return ($resultado);
	}
	
						//MÉTODO --> Bids de hoje
	public function bids_info_today(){
		
		$bd = new OOP_Database();
		$data_de_hoje_2 = date('Y-m-d');		  

		$bids_info_today_q = "SELECT * FROM leiloes WHERE data = '$data_de_hoje_2';";
		$resultado = $bd -> executaQuery($bids_info_today_q);
		return ($resultado);
	}
	
							//MÉTODO --> Bids de hoje
	public function cod_user_bid($cod_user_bid){
		
		$bd = new OOP_Database();

		$cod_user_bid_q = "SELECT * FROM utilizadores WHERE cod_utilizador = '$cod_user_bid';";
		$resultado = $bd -> executaQuery($cod_user_bid_q);
		return ($resultado);
	}
	
	
	
				//MÉTODO --> Ver 1 bid aleatório
	public function Randbid1 (){
		
		$bd = new OOP_Database();	
		  
		$randbid1 = "SELECT * FROM leiloes WHERE `estado` = 'ativo' ORDER BY rand() LIMIT 1;";
		$resultado = $bd -> executaQuery($randbid1);
		return ($resultado);
	}
	
				//MÉTODO --> Ver 2 bid aleatório
	public function Randbid2 ($cod_cat){
		
		$bd = new OOP_Database();	
		  
		$randbid2 = "SELECT * FROM leiloes WHERE categoria = '$cod_cat' AND `estado` = 'ativo'  ORDER BY rand() LIMIT 1 ;";
		$resultado = $bd -> executaQuery($randbid2);
		return ($resultado);
	}
	
		
				//MÉTODO --> 
	public function Bidsdestaques (){
		
		$bd = new OOP_Database();	
		  
		$bidsdestaques_q = "SELECT * FROM leiloes WHERE `estado` = 'ativo' ORDER BY data DESC LIMIT 3";
		$resultado = $bd -> executaQuery($bidsdestaques_q);
		return ($resultado);
	}
	
					//MÉTODO -->  Ver cod da última licitação
	public function cod_user_ultima_licitacao ($cod_bid){
		
		$bd = new OOP_Database();	
		  
		$cod_user_utlima_licitacao_q = "SELECT * FROM log_licitacoes WHERE cod_leilao = '$cod_bid' ORDER BY cod_licitacao DESC LIMIT 1";
		$resultado = $bd -> executaQuery($cod_user_utlima_licitacao_q);
		return ($resultado);
	}
	
					//MÉTODO --> Ver info feature 1
	public function feature1_info ($cod_feature1){
		
		$bd = new OOP_Database();	
		  
		$feature1_info_q = "SELECT * FROM leiloes WHERE cod_leilao = $cod_feature1;";
		$resultado = $bd -> executaQuery($feature1_info_q);
		return ($resultado);
	}
 

					//MÉTODO --> Listar por categoria
	public function cat_bid_info ($cod_cat){
		
		$bd = new OOP_Database();	
		  
		$cat_bid_info_q = "SELECT * FROM categorias WHERE nome = $cod_cat LIMIT 3;";
		$resultado = $bd -> executaQuery($cat_bid_info_q);
		return ($resultado);
	}
 	
	
			//MÉTODO --> Seleccionar Leilões por código
	public function verLeiloesAtivosPorCodigo ($cod_leilao){
		
		$bd = new OOP_Database();	
		  
		$ver_leilao_ativos = "SELECT * FROM leiloes WHERE `cod_leilao` = '".$cod_leilao."' ";
		$resultado = $bd -> executaQuery($ver_leilao_ativos);
		return ($resultado);
	}

	
	
	
			//MÉTODO --> Pesquisar os Leilões por nome 
	public function pesquisarLeiloes ($nome){
		
		$bd = new OOP_Database();	
		$pesquisa_leilao = "SELECT * FROM `leiloes` WHERE `nome` LIKE %".$nome."%";
		$resultado = $bd -> executaQuery($pesquisa_leilao);
		return ($resultado);
	}
	
	
	
	
		
//aprovar os leiloes (mudar o estado de "standby" para )		
public function aprovarLeilao ($cod_leilao){
		 
		 $bd = new OOP_Database();		 
		 $resultado = $bd -> executaQuery("UPDATE `leiloes` SET `estado` ='ativo' , `data` = now()  WHERE cod_leilao = '$cod_leilao'");
		 
		 		
		if ( $resultado == 1){
			header('location:bids_standby.admin.php');
			}
		 }//fim editar utilizador


	
//funcão remover leiloes
	public function removerLeilao($cod_leilao){
		$bd = new OOP_Database();
        $resultado = $bd -> executaQuery("DELETE FROM `leiloes` WHERE cod_leilao = '$cod_leilao'");
        if ($resultado == 1){
			header('location:bids_aprovados.admin.php');
			} 
   	}//fim remover leiloes
	 
	 
 
	 
	 //aprovar os leiloes (mudar o estado de "standby" para )		
		public function descontarBits ($cod_utilizador){
		 
		 $bd = new OOP_Database();		 
		 $resultado = $bd -> executaQuery("UPDATE utilizadores SET `bits` =`bits` - '1'  WHERE cod_utilizador = '".$cod_utilizador."'");
		 
		 if ( $resultado == 1){
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			}
		 }//fim de método
		 
		 
		 //contar as licitações		
			public function contarLicitacoes ($cod_leilao){
		 
		 $bd = new OOP_Database();		 
		 $resultado = $bd -> executaQuery("UPDATE `leiloes` SET `bids` =`bids` + '1'  WHERE cod_leilao = '".$cod_leilao."'");
		 
		 if ( $resultado == 1){
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			}
		 }//fim de método
		 
		 
	 //actualizar valor de licitaçao		
public function aumentaLicitacao ($cod_leilao){
		 
		 $bd = new OOP_Database();		 
		 $resultado = $bd -> executaQuery("UPDATE `leiloes` SET `licitacao` =`licitacao` + '0.10'  WHERE cod_leilao = '".$cod_leilao."'");
		 
		 		
		if ( $resultado == 1){
header('Location: ' . $_SERVER['HTTP_REFERER']);			}
		 }//fim actualizar valor de licitaçao
	 
	 
	 
	 //logar as licitações
	 public function logarLicitacao ( $cod_utilizador, $cod_leilao){
			
			$bd = new OOP_Database();
					
			$resultado = $bd -> executaQuery ("INSERT INTO `log_licitacoes` ( `cod_utilizador`,`cod_leilao`,`data`) VALUES ('".$cod_utilizador."','".$cod_leilao."','')");
			
			if ($resultado = 1){
						
			header('Location: ' . $_SERVER['HTTP_REFERER']);
				
				}
	 }//fim de método
	 
	 	public function favoritoLeilaoA ( $cod_utilizador, $cod_leilao){
			
			$bd = new OOP_Database();
			$query = "INSERT INTO `favoritos` VALUES ('".$cod_utilizador."','".$cod_leilao."');";
				
		
			$resultado = $bd -> executaQuery ($query);
			
			if ($resultado = 1){
				echo 'adicionado aos favoritos com sucesso!';
				
				header('Location: ' . $_SERVER['HTTP_REFERER']);
				
				}
								 
	} 
	
	
	
	
	public function favoritoLeilaoR ( $cod_utilizador, $cod_leilao){
			
			$bd = new OOP_Database();
			$query = "DELETE FROM `favoritos` WHERE `cod_utilizador` = '".$cod_utilizador."' AND `cod_leilao =`'".$cod_leilao."');";
			
		
			$resultado = $bd -> executaQuery ($query);
			
			if ($resultado = 1){
				echo 'adicionado aos favoritos com sucesso!';
				
				header('Location: ' . $_SERVER['HTTP_REFERER']);
				
				}
								 
	} 
	
 }
?>