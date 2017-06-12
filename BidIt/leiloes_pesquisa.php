<?php

 $server = 'localhost';
 $user = 'joao';
 $pass = 'joao';
 $db = 'bidit_db';
 
 // Connect to Database
 $connection = mysql_connect($server, $user, $pass) 
 or die ("Could not connect to server ... \n" . mysql_error ());
 mysql_select_db($db) 
 or die ("Could not connect to database ... \n" . mysql_error ());


	require_once"classes/database.php";


  if (isset($_POST['pesquisar_leilao']))
  { 
  	
  $pesquisa = $_POST['pesquisar_leilao'];
 
	   $pesquisa_tarefa = mysql_query("SELECT * FROM leiloes where (nome LIKE '%".$pesquisa."%' OR descricao LIKE '%".$pesquisa."%');") 
		or die(mysql_error());  
		$n_pesquisa_tarefa=mysql_num_rows($pesquisa_tarefa);
	
		while($dados = mysql_fetch_array( $pesquisa_tarefa )) { 
	echo'<h1>'.$dados['nome'].'</h1><br/>';	
	echo 'Código de Leilão: '.$dados['cod_leilao'].'<br/>';
	echo 'Código de Utilizador: '.$dados['cod_utilizador'].'<br/>';
	echo 'Nome: '.$dados['nome'].'<br/>';
	echo 'Descrição: '.$dados['descricao'].'<br/>';
	echo 'Duração: '.$dados['duracao'].'h<br/>';
	echo 'Preço inicial: '.$dados['preco'].'<br/>';
	echo 'Licitacao actual: '.$dados['licitacao'].'<br/>';
	echo 'Categoria: '.$dados['categoria'].'<br/>';
	echo '<hr/>';
		}

}

echo'</br></br></br>';
echo'<a href="path_admin.php" >retroceder</a>';
echo'</center>';
echo'</body>';
echo'</html>';





	
		?>