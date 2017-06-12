<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>

function function_pesquisa_form()
{
document.getElementById("pesquisar_leilao").submit();
}
</script>
<div id="cabecalho" style="width:100%; height:300px; position:absolute; top:0%; left:0%; 	background-color:white;	
	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:bottom;
	background-repeat: no-repeat;
	background-image:url(src/fundos/fundo_cabecalho.jpg);	"></div>

<div id="topbar"  align="center" class="topbar"><a href="index.php"><img src="src/topbar/logo_topbar.png" height="24"></a>&nbsp;&nbsp;<form style="display:inline;" method="post" id="pesquisar_leilao" action="pesquisa.php"><input type="text" size="60" class="pesquisa_bidit_text" placeholder=" Pesquisar leilão..." name="pesquisar_leilao"  /></form>  <div class="btn_licitar_small" onclick="function_pesquisa_form();" align="center" style="color:white; background-color:#3399ff; font-size:1em; position:relative;  top:-8px;"><img src="src/topbar/search.png" height="11" />&nbsp;&nbsp;Pesquisar bid</div></div>
<div align="center" id="cat_bar" class="cat_bar"><a class="btn_topbar" href="favoritos.php"><img height="15" src="src/icons/like.svg" alt="Kiwi standing on oval">
&nbsp;<b>Favoritos</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="hoje.php"><img height="15" src="src/icons/binoculars.svg" alt="Kiwi standing on oval">&nbsp;<b>Hoje</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Casa e Jardim"><img height="15" src="src/icons/close_up_mode.svg" alt="Kiwi standing on oval">&nbsp;Casa & Jardim</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Colecionáveis e arte"><img height="15" src="src/icons/frame.svg" alt="Kiwi standing on oval">&nbsp;Colecionáveis & Arte</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Desporto"><img height="15" src="src/icons/sports_mode.svg" alt="Kiwi standing on oval">&nbsp;Desporto</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Electrónica"><img height="15" src="src/icons/integrated_webcam.svg" alt="Kiwi standing on oval">&nbsp;Electrónica</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Moda"><img height="15" src="src/icons/briefcase.svg" alt="Kiwi standing on oval">&nbsp;Moda</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Motores"><img height="15" src="src/icons/automotive.svg" alt="Kiwi standing on oval">&nbsp;Motores</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Outras"><img height="15" src="src/icons/globe.svg" alt="Kiwi standing on oval">&nbsp;Outras categorias</a></div>




<div align="center" id="rodape" class="rodape" style="">
  <table style="width:60%;">
  
    <tr>
      <td width="50%" align="center"><a href="#">Descobrir leilões</a><br />
        <a href="#">Categorias</a><br />
        <a href="#">Novidades de hoje</a><br />
        <br />
        <a href="#">Iniciar bid</a><br />
        <a href="#">Os meus bids</a><br />
        <a href="#">As minhas definições</a><br />
        <a href="bitstore.php">Bitstore</a></td>
      <td width="50%" align="center"><a href="#">Centro de ajuda</a><br />
        <a href="#">Denunciar bid</a><br />
        <a href="#">Redes sociais</a><br />
        <a href="#">Sobre nós</a><br />
        <br />
        <img src="src/topbar/logo_topbar.png" height="30" /></td>
    </tr>
    <tr>
      <td colspan="2" style="font-weight:bold; font-size:0.9em;" align="center"><br /><br />Copyright © 2015 Bidit - Todos os direitos reservados.</td>
    </tr>
   
 </table>
</div>



 <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
      
    
    <style type="text/css">
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
  <body>
    <div class="container">
      <div align="center" id="sidebar"><br />
<div style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:top;
	background-repeat: no-repeat;
	background-image:url(<?php echo $_SESSION['foto_user']; ?>); width:100px; height:100px; border-radius:100px;"></div>
 <span style="color:white; font-size:1.2em;"><?php echo $_SESSION['nome']." ".$_SESSION['apelido']; ?></span><br />
     <span style="color:#3399ff; font-size:0.9em;"><b>@<?php echo $_SESSION['username']; ?></b></span><br /> <span style="color:white; font-size:1.1em;"><img src="src/topbar/coins.png" height="13" />&nbsp;<?php echo $_SESSION['bits']; if($_SESSION['bits'] > 1){ echo " bits"; } else { echo  " bit"; }?></span><br /><br />
          <ul>
	          <li><a href="criar_bid.php"><img src="src/topbar/mais_vendidos.png" style="position:relative; top:5px;" height="23" />&nbsp;Criar bid</a></li>
              <li><a href="#"><img src="src/topbar/my_pin.png" style="position:relative; top:5px;" height="23" />&nbsp;Os meus bids</a></li>
              <li><a href="favoritos.php">&nbsp;<img src="src/topbar/wishlist.png" style="position:relative; top:5px; padding:2px;" height="18" />&nbsp;Favoritos</a></li>
          </ul>
<br><br><br>
<div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:white; text-align:right; font-size:1.2em;"><img src="src/topbar/admin.png" style="position:relative; top:3px;" height="21">Admin</span></div>
<ul>       
              <li><a href="bids_aprovados.admin.php">&nbsp;Bids aprovados</a></li>
              <li><a href="bids_standby.admin.php">&nbsp;Bids a aprovar</a></li>

             
            <div style=" position:absolute; width:100%; bottom:5%;">
              <li><a href="bitstore.php"><img src="src/topbar/pins_comprados.png" style="position:relative; top:5px;" height="23" />&nbsp;Comprar bits</a></li>
              <li><a href="#">&nbsp;<img src="src/topbar/set_ico.png" style="position:relative; top:5px;" height="19" />&nbsp;Definições</a></li>
              <li><a href="#">&nbsp;<img src="src/topbar/sign_in.png" style="position:relative; top:5px;" height="19" />&nbsp;Centro de ajuda</a></li>
            <li><a href="utilizadores_logout.php"><img src="src/topbar/logout.png" style="position:relative; top:5px;" height="23" />&nbsp;Terminar sessão</a></li></div>
          </ul>
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
