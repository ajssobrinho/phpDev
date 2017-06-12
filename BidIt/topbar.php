<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>
function function_iniciar_sessao_form()
{
document.getElementById("form_login").submit();
}

function function_pesquisa_form()
{
document.getElementById("pesquisar_leilao").submit();
}
</script>
<?php
	require_once('classes/database.php');
	require_once('classes/utilizadores.php');
	require_once('classes/validacoes.php');
	require_once('classes/filtro.php');
	

	//recolhe dados
	//login
	if(!empty($_POST)){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$erros = NULL;
		
		//instanciar a classe da verificação dos user
		$teste = new check_utilizador();
		
		//erros se os campos tiverem vazios
		if (!$teste -> vazio ($username)){
			$erros['username']= 'Preencher o username< br>';
			echo $erros['username'];
			}
			if (!$teste -> vazio ($password)){
			$erros['password']='prencher a password';
			echo $erros['password'];
			}
		
		//sem erros
		if(count($erros)==0){

			try{
			$log= new utilizadores();
			$resultado = $log->login($username, $password);
		
			if ($resultado == false){
				$erros['login']='Username ou Password inválidos!';
				echo $erros['login'];
			}
			}//fim do try
			catch(Exception $e){
				echo "Login error!";
			}
		}//fim if sem erros login
	}//if _POST
?>

<div id="cabecalho" style="width:100%; height:300px; position:absolute; top:0%; left:0%; 	background-color:white;	
	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:bottom;
	background-repeat: no-repeat;
	background-image:url(src/fundos/fundo_cabecalho.jpg);	"></div>

<div id="topbar"  align="center" class="topbar"><a href="index.php"><img src="src/topbar/logo_topbar.png" height="24"></a>&nbsp;&nbsp;<form style="display:inline;" method="post" id="pesquisar_leilao" action="pesquisa.php"><input type="text" size="60" class="pesquisa_bidit_text" placeholder=" Pesquisar leilão..." name="pesquisar_leilao"  /></form>  <div class="btn_licitar_small" onclick="function_pesquisa_form();" align="center" style="color:white; background-color:#3399ff; font-size:1em; position:relative;  top:-8px;"><img src="src/topbar/search.png" height="11" />&nbsp;&nbsp;Pesquisar bid</div></div>

<div align="center" id="cat_bar" class="cat_bar"><a class="btn_topbar" href="hoje.php"><img height="15" src="src/icons/binoculars.svg" alt="Kiwi standing on oval">&nbsp;<b>Hoje</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Casa e Jardim"><img height="15" src="src/icons/close_up_mode.svg" alt="Kiwi standing on oval">&nbsp;Casa & Jardim</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Colecionáveis e arte"><img height="15" src="src/icons/frame.svg" alt="Kiwi standing on oval">&nbsp;Colecionáveis & Arte</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Desporto"><img height="15" src="src/icons/sports_mode.svg" alt="Kiwi standing on oval">&nbsp;Desporto</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Electrónica"><img height="15" src="src/icons/integrated_webcam.svg" alt="Kiwi standing on oval">&nbsp;Electrónica</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Moda"><img height="15" src="src/icons/briefcase.svg" alt="Kiwi standing on oval">&nbsp;Moda</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Motores"><img height="15" src="src/icons/automotive.svg" alt="Kiwi standing on oval">&nbsp;Motores</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Outras"><img height="15" src="src/icons/globe.svg" alt="Kiwi standing on oval">&nbsp;Outras categorias</a></div>




<div align="center" id="rodape" class="rodape" style="">
  <table style="width:60%;">
  
    <tr>
      <td width="50%" align="center">
        <a href="hoje.php">Novidades de hoje</a><br />
              <a href="signup.php">Criar conta</a><br />    <a href="#">Denunciar bid</a><br />
        <a href="#">Redes sociais</a><br />
        <a href="#">Sobre nós</a><br /><a href="#">Centro de ajuda</a><br />
     <td width="50%" align="center">
    
        <br />
        <img src="src/topbar/logo_topbar.png" height="30" /></td>
    </tr>
    <tr>
      <td colspan="2" style="font-weight:bold; font-size:0.9em;" align="center"><br /><br />Copyright © 2015 Bidit - Todos os direitos reservados.</td>
    </tr>
   
 </table>
</div>

 <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>    <style type="text/css">
      body, html {
          height: 100%;
          margin: 0;
		  overflow-x:hidden;
      }
      
	  .container {
          position: relative;
          height: 100%;
          width: 100%;
          left: 0;
          -webkit-transition:  left 0.4s ease-in-out;
          -moz-transition:  left 0.4s ease-in-out;
          -ms-transition:  left 0.4s ease-in-out;
          -o-transition:  left 0.4s ease-in-out;
          transition:  left 0.4s ease-in-out;
      }
      .container.open-sidebar {
          left: 200px;
      }
      

      #sidebar {
          background: #333333;
          position: absolute;
          width: 200px;
          height: 100%;
          left: -200px;
		  z-index:+999;
		  opacity:0.9;
          box-sizing: border-box;
          -moz-box-sizing: border-box;
      }
      
	  #sidebar ul {
          margin: 0;
          padding: 0;
          list-style: none;
      }
	  
      #sidebar ul li {
          margin: 0;
      }
	  
      #sidebar ul li a {
		  text-align:left;
          padding: 10px 15px;
          font-size: 16px;
		  padding-top:3px;
          font-weight: 100;
          color: white;
          text-decoration: none;
          display: block;
          -webkit-transition:  background 0.3s ease-in-out;
          -moz-transition:  background 0.3s ease-in-out;
          -ms-transition:  background 0.3s ease-in-out;
          -o-transition:  background 0.3s ease-in-out;
          transition:  background 0.3s ease-in-out;
      }
      #sidebar ul li:hover a {
          background: #3399ff;
      }
      .main-content {
          width: 100%;
          height: 100%;
          padding: 10px;
          box-sizing: border-box;
          -moz-box-sizing: border-box;
          position: relative;
      }
      .main-content .content{
          box-sizing: border-box;
          -moz-box-sizing: border-box;
      padding-left: 60px;
      width: 100%;
      }
      .main-content .content h1{
          font-weight: 100;
      }
      .main-content .content p{
          width: 100%;
          line-height: 160%;
      }
      .main-content #sidebar-toggle {
          background: #3399ff;
          border-radius: 30px;
          position: fixed;
		  height:45px;
		  width:45px;
		  	-webkit-animation: fadein_hm 0.8s; /* Safari and Chrome */
    -moz-animation: fadein_hm 0.8s; /* Firefox */
    -ms-animation: fadein_hm 0.8s; /* Internet Explorer */
    -o-animation: fadein_hm 0.8s; /* Opera */
    animation: fadein_hm 0.8s;
      }
	  .main-content #sidebar-toggle:hover {
		-moz-transform: scale(1.2,1.2);
    -webkit-transform: scale(1.2,1.2);
    transform: scale(1.2,1.2);         
      }
      .main-content #sidebar-toggle .bar{
           display: block;
          width: 18px;
          margin-bottom: 2px;
          height: 2px;
          background-color: #fff;
          border-radius: 1px;   
      }
      .main-content #sidebar-toggle .bar:last-child{
           margin-bottom: 0;   
      }
    </style>
    <script type="text/javascript">
      $(window).load(function(){
        $("[data-toggle]").click(function() {
          var toggle_el = $(this).data("toggle");
          $(toggle_el).toggleClass("open-sidebar");
        });
      });
	     
    </script>
  </head>

    <div class="container">
      <div align="center" id="sidebar">

  <div align="left" class="pub_side_cat" style="background-image:url(src/pub/django_banner.jpg); width:90%; left:1%;top:5%;"><span style="position:relative; color:white; padding-left:5px; background-color:#3399ff; border-bottom-left-radius:0.2em; -webkit-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    -moz-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    box-shadow: 0px 1px 1px -1px rgb(0,0,0); border-bottom-right-radius:2em; padding-right:15px; font-size:0.9em;">PUB</span></div>
         
             
            <div style=" position:absolute; width:100%; bottom:5%; line-height:250%;">
            <span style="font-size:1.7em; color:white;">Iniciar sessão<br></span>
                    	<form action="" method="POST" id="form_login">
            <input type="text" class="text_form" style="height:20px; font-size:1em; width:80%;" name="username" placeholder="Nome de utilizador" class="input" id="username"  
            	<?php if(isset($erros['username'])){echo $erros['username'];}?>
            />
            <br>
            <input type="password" class="text_form" style="height:20px; font-size:1em; width:80%;" placeholder="Palavra-passe" name="password" class="input" id="password" 
            	<?php if(isset($erros['password'])){echo $erros['password'];}?>
            />
            
            <div class="btn_licitar_small" onClick="function_iniciar_sessao_form();" align="center" style="color:white; margin-top:20px; line-height:140%; background-color:#3399ff; font-size:1em; position:relative;  top:-8px;"><img src="src/topbar/sign_in.png" height="11" />&nbsp;&nbsp;Iniciar sessão</div>
            </form>
           <br> <ul>

            <li><a href="signup.php"><img src="src/topbar/sign_up.png" style="position:relative; top:5px;" height="21" />&nbsp;Criar conta</a></li>
            </ul></div>
          
      </div>
      <div class="main-content">
          <div class="swipe-area"></div>
          <a href="#" data-toggle=".container"  id="sidebar-toggle">
          <div style="position:relative; top:16px; left:14px;">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
          </div>
          </a><br /><br /><br />
          <div id="pesquisa_btn"  onClick="pesquisa_btn();" class="pesquisa_btn"><img src="src/topbar/search.png" style="position:relative; top:6px; left:7px;" height="20" /></div>
        </div>
    </div>
