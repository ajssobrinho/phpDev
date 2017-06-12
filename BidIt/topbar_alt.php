
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<div id="cabecalho"  class="fade_in_10" style="width:100%; height:180%; position:absolute; top:0%; left:0%; 	background-color:white;	
	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size:cover;
	background-position:bottom;
	background-repeat: no-repeat;
	background-image:url(src/fundos/fundo_store.jpg);	"></div>

<div id="topbar" align="center" class="topbar"><a href="index.php"><img src="src/topbar/logo_topbar_alt.png" height="24"></a>&nbsp;&nbsp;<input type="text" id="pesquisar_leilao" class="pesquisa_bidit_text" placeholder=" Procurar leilão..." name="pesquisar_leilao" />   <div class="btn_licitar_small" align="center" style="color:white; background-color:#3399ff; font-size:1em; position:relative;  top:-8px;"><img src="src/topbar/search.png" height="11" />&nbsp;&nbsp;Pesquisar bid</div></div>

<div align="center" id="cat_bar" class="cat_bar"><a class="btn_topbar" href="favoritos.php"><img height="15" src="src/icons/like.svg" alt="Kiwi standing on oval">
&nbsp;<b>Favoritos</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="hoje.php"><img height="15" src="src/icons/binoculars.svg" alt="Kiwi standing on oval">&nbsp;<b>Hoje</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Casa e Jardim"><img height="15" src="src/icons/close_up_mode.svg" alt="Kiwi standing on oval">&nbsp;Casa & Jardim</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Colecionáveis e arte"><img height="15" src="src/icons/frame.svg" alt="Kiwi standing on oval">&nbsp;Colecionáveis & Arte</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Desporto"><img height="15" src="src/icons/sports_mode.svg" alt="Kiwi standing on oval">&nbsp;Desporto</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Electrónica"><img height="15" src="src/icons/integrated_webcam.svg" alt="Kiwi standing on oval">&nbsp;Electrónica</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Moda"><img height="15" src="src/icons/briefcase.svg" alt="Kiwi standing on oval">&nbsp;Moda</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Motores"><img height="15" src="src/icons/automotive.svg" alt="Kiwi standing on oval">&nbsp;Motores</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar" href="cat.php?cat=Outras"><img height="15" src="src/icons/globe.svg" alt="Kiwi standing on oval">&nbsp;Outras categorias</a></div>

<div id="pesquisa_btn"  onClick="pesquisa_btn();" class="pesquisa_btn"><img src="src/topbar/search.png" style="position:relative; top:6px; left:7px;" height="20" /></div>


 <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="jquery.touchSwipe.min.js"></script>
      
    
    <style type="text/css">
      body, html {
          height: 100%;
          margin: 0;
		  overflow:hidden;
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
          left: 240px;
      }
      
      .swipe-area {
          position: absolute;
          width: 50px;
          left: 0;
      	  top: 0;
          background: #f3f3f3;
          z-index: 0;
      }
      #sidebar {
          background: #DF314D;
          position: absolute;
          width: 240px;
          height: 100%;
          left: -240px;
		  z-index:+999;
		  opacity:0.8;
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
          padding: 15px 20px;
          font-size: 16px;
          font-weight: 100;
          color: white;
          text-decoration: none;
          display: block;
          border-bottom: 1px solid #C9223D;
          -webkit-transition:  background 0.3s ease-in-out;
          -moz-transition:  background 0.3s ease-in-out;
          -ms-transition:  background 0.3s ease-in-out;
          -o-transition:  background 0.3s ease-in-out;
          transition:  background 0.3s ease-in-out;
      }
      #sidebar ul li:hover a {
          background: #C9223D;
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
          background: #DF314D;
          border-radius: 3px;
          display: block;
          position: relative;
          padding: 10px 7px;
          float: left;
      }
      .main-content #sidebar-toggle .bar{
           display: block;
          width: 18px;
          margin-bottom: 3px;
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
         $(".swipe-area").swipe({
              swipeStatus:function(event, phase, direction, distance, duration, fingers)
                  {
                      if (phase=="move" && direction =="right") {
                           $(".container").addClass("open-sidebar");
                           return false;
                      }
                      if (phase=="move" && direction =="left") {
                           $(".container").removeClass("open-sidebar");
                           return false;
                      }
                  }
          }); 
      });
      
    </script>
  </head>
  <body>
    <div class="container">
      <div id="sidebar">
          <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Explore</a></li>
              <li><a href="#">Users</a></li>
                  <li><a href="#">Sign Out</a></li>
          </ul>
      </div>
      <div class="main-content">
          <div class="swipe-area"></div>
          <a href="#" data-toggle=".container" id="sidebar-toggle">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
          </a>
        </div>
    </div>