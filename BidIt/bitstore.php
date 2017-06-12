<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="bidit.style.css" rel="stylesheet" type="text/css">

<title>Bidit // 1.0</title>

<?php
session_start();

if(empty ($_SESSION)){
		
			header ('location: path_erro_nao_logado.php');
				
		}		
		else{
			
include('scripts.php');

			
			require_once('classes/utilizadores.php');
			require_once('classes/bits.php');
			
$cod_utilizador = $_SESSION['cod_utilizador'];

	if (isset($_POST["submit"])){
		
	$comprar_bits = new bits ();
	$comprar_bits->comprarBits($cod_utilizador, $valor_bits);
	
}

?>
 <script src="http://code.jquery.com/jquery-latest.js"></script>

<script language="javascript" type="text/javascript">
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});q
</script>
 <script language="javascript" type="text/javascript">
$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 90) {
        $('#pesquisa_btn').show();
    }else {
		$('#pesquisa_btn').hide();
		}
	});
	
	$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 650) {
        $('#title_card_menu').show();
        $('#starter_card_pic').show();
        $('#silver_card_pic').show();
        $('#gold_card_pic').show();
    }else {
        $('#title_card_menu').hide();
		$('#starter_card_pic').hide();
		$('#silver_card_pic').hide();
        $('#gold_card_pic').hide();
		}
	});
	
	$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 1400) {
        $('#title_starter_card').show();
        $('#starter_card_preview').show();
		    }else {
		$('#title_starter_card').hide();
        $('#starter_card_preview').hide();
		}
	});
	
		$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 2100) {
        $('#title_silver_card').show();
		$('#silver_card_preview').show();
    }else {
		$('#title_silver_card').hide();
		$('#silver_card_preview').hide();
		}
	});
	
		$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 2800) {
        $('#title_gold_card').show();
		$('#gold_card_preview').show();
    }else {
		$('#title_gold_card').hide();
		$('#gold_card_preview').hide();
		}
	});
	
	
	
</script>


</head>

<body style="background-color:#22333c; overflow-y:hidden;">
<div id="cabecalho"  class="fade_in_10" style="width:100%; height:180%; position:absolute; top:0%; left:0%; 	background-color:white;	
	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size:cover;
	background-position:bottom;
	background-repeat: no-repeat;
	background-image:url(src/fundos/fundo_store.jpg);	"></div>

<div id="topbar" align="center" class="topbar"><a href="index.php"><img src="src/topbar/logo_topbar_alt.png" height="24"></a>&nbsp;&nbsp;<input type="text" id="pesquisar_leilao" class="pesquisa_bidit_text" placeholder=" Procurar leilão..." name="pesquisar_leilao" />   <div class="btn_licitar_small" align="center" style="color:white; background-color:#3399ff; font-size:1em; position:relative;  top:-8px;"><img src="src/topbar/search.png" height="11" />&nbsp;&nbsp;Pesquisar bid</div></div>

<div align="center" id="cat_bar" class="cat_bar"><a class="btn_topbar_alt" href="favoritos.php"><img height="15" src="src/icons/like.svg" alt="Kiwi standing on oval">
&nbsp;<b>Favoritos</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar_alt" href="hoje.php"><img height="15" src="src/icons/binoculars.svg" alt="Kiwi standing on oval">&nbsp;<b>Hoje</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar_alt" href="cat.php?cat=Casa e Jardim"><img height="15" src="src/icons/close_up_mode.svg" alt="Kiwi standing on oval">&nbsp;Casa & Jardim</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar_alt" href="cat.php?cat=Colecionáveis e arte"><img height="15" src="src/icons/frame.svg" alt="Kiwi standing on oval">&nbsp;Colecionáveis & Arte</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar_alt" href="cat.php?cat=Desporto"><img height="15" src="src/icons/sports_mode.svg" alt="Kiwi standing on oval">&nbsp;Desporto</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar_alt" href="cat.php?cat=Electrónica"><img height="15" src="src/icons/integrated_webcam.svg" alt="Kiwi standing on oval">&nbsp;Electrónica</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar_alt" href="cat.php?cat=Moda"><img height="15" src="src/icons/briefcase.svg" alt="Kiwi standing on oval">&nbsp;Moda</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar_alt" href="cat.php?cat=Motores"><img height="15" src="src/icons/automotive.svg" alt="Kiwi standing on oval">&nbsp;Motores</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn_topbar_alt" href="cat.php?cat=Outras"><img height="15" src="src/icons/globe.svg" alt="Kiwi standing on oval">&nbsp;Outras categorias</a></div>

<div id="pesquisa_btn"  onClick="pesquisa_btn();" class="pesquisa_btn"><img src="src/topbar/search.png" style="position:relative; top:6px; left:7px;" height="20" /></div>
<div style=" position:absolute; top:40%; left:10%; color:white;" id="text_1"><span style="font-size:7em;"><b>Bit</b>store</span><br /><span style="font-size:2em; line-height:100%;">Tudo o que precisas<br />para começares a ganhar.</span></div>
<a style="color:white;" href="#menu_cards"><div id="starter_link" class="btn_descer" style=" position:absolute; background-color:#3399ff; opacity:0.8; bottom:5%; right:50%;  border-radius:2em;  height:35px; width:35px; z-index:+555; "><div style=" position:absolute; left:11px; top:8px; -ms-transform: rotate(45deg); /* IE 9 */
-webkit-transform: rotate(45deg);
	transform:rotate(45deg);" id="seta_mais" class="seta_mais"></div></div></a>
    
<div id="menu_cards" style="position:absolute; top:100%; left:0%; width:100%; height:100%;"><a accesskey="t" style="color:white;" href="#top"><div id="starter_link" class="btn_descer" style=" position:absolute;  background-color:#3399ff; opacity:0.8; bottom:5%; right:50%;  border-radius:2em;  height:35px; width:35px; z-index:+555; "><div style=" position:absolute; left:11px; bottom:0px; -ms-transform: rotate(-135deg); /* IE 9 */
-webkit-transform: rotate(-135deg);
	transform:rotate(-135deg);" id="seta_mais" class="seta_mais"></div></div></a>
    
    
    <div id="title_card_menu" align="center" class="fade_in_10" style="color:white; font-size:3.5em; width:40%;  position:absolute; top:15%; 	right: 0;
    left: 0;
    margin-right: auto;
    margin-left: auto;">Escolhe uma carta</div>
    <div align="center" id="cards_menu" class="view_cards"><a href="#starter_card"><img id="starter_card_pic" class="card_opacity" src="src/store/starter_card.png" height="350" /></a><a href="#silver_card"><img class="card_opacity" id="silver_card_pic" src="src/store/silver_card.png" height="350" /></a><a href="#gold_card"><img class="card_opacity" id="gold_card_pic" src="src/store/gold_card.png" height="350" /></a></div>
</div>

<div class="cards_div" id="starter_card" style="position:absolute; top:200%; background-image: url(src/store/fundo_starter.jpg);"><a style="color:white;" href="#silver_card"><div id="starter_link" class="btn_descer" style=" position:absolute;  background-color:#3399ff; opacity:0.8; bottom:5%; right:50%;  border-radius:2em;  height:35px; width:35px; z-index:+555; "><div style=" position:absolute; left:11px; top:8px; -ms-transform: rotate(45deg); /* IE 9 */
-webkit-transform: rotate(45deg);
	transform:rotate(45deg);" id="seta_mais" class="seta_mais"></div></div></a>
   
  <div id="title_starter_card" class="fade_in_10" style="position:absolute; color:white; top:35%; left:5%;">
    <span style="font-size:5em;"><b>Starter</b> Card</span><br />
    <span style="font-size:1.5em; line-height:100%;">Desfruta de 50 bits para apostares<br />no que quiseres.</span><br /><br /><b>
     <span style="font-size:5em; line-height:100%;">25</span><span style="font-size:3em;">€</span></b><br /><br />
     <a href="bits_manager.php?pack=1"><div class="btn_licitar" align="center" style="color:white; background-color:#333333; font-size:1.6em;"><img src="src/topbar/carrinho_compras.png" style="position:relative; top:2px;" height="22" />&nbsp;&nbsp;Comprar agora</div></a>
   	</div>
    <img id="starter_card_preview" class="card_fadein" style="position:absolute; top:20%; right:10%;" src="src/store/starter_card_preview.png" height="500" /> </div>

    <div class="cards_div" id="silver_card" style="position:absolute; background-image: url(src/store/fundo_silver.jpg); background-attachment:scroll; top:300%; "><a style="color:white;" href="#gold_card"><div id="starter_link" class="btn_descer" style="  background-color:#3399ff; opacity:0.8;position:absolute;  bottom:5%; right:50%;  border-radius:2em;  height:35px; width:35px; z-index:+555; "><div style=" position:absolute; left:11px; top:8px; -ms-transform: rotate(45deg); /* IE 9 */
-webkit-transform: rotate(45deg);
	transform:rotate(45deg);" id="seta_mais" class="seta_mais"></div></div></a>
    
     <div id="title_silver_card" class="fade_in_10" align="right" style="position:absolute; color:white; top:35%; right:5%;">
    <span style="font-size:5em;"><b>Silver</b> Card</span><br />
    <span style="font-size:1.5em; line-height:100%;">Os 50 bits não são suficientes?<br />Aqui tens o dobro.</span><br /><br /><b>
     <span style="font-size:5em; line-height:100%;">50</span><span style="font-size:3em;">€</span></b><br /><br />
     <a href="bits_manager.php?pack=2"><div class="btn_licitar" align="center" style="color:white; background-color:#3399ff; font-size:1.6em;"><img src="src/topbar/carrinho_compras.png" style="position:relative; top:2px;" height="22" />&nbsp;&nbsp;Comprar agora</div></a>
   	</div>
    <img id="silver_card_preview" class="card_fadein" style="position:absolute; top:20%; left:10%;" src="src/store/silver_card_preview.png" height="500" /> 
    
    </div>

<div class="cards_div" id="gold_card" style="position:absolute; top:400%; background-image: url(src/store/fundo_gold.jpg); background-attachment:scroll;"><a accesskey="t" style="color:white;" href="#top"><div id="starter_link" class="btn_descer" style=" position:absolute; background-color:#3399ff; opacity:0.8;  bottom:5%; right:50%;  border-radius:2em;  height:35px; width:35px; z-index:+555; "><div style=" position:absolute; left:11px; bottom:0px; -ms-transform: rotate(-135deg); /* IE 9 */
-webkit-transform: rotate(-135deg);
	transform:rotate(-135deg);" id="seta_mais" class="seta_mais"></div></div></a>
    
     <div id="title_gold_card" class="fade_in_10"  style="position:absolute; color:white; top:35%; left:5%;">
    <span style="font-size:5em;"><b>Gold</b> Card</span><br />
    <span style="font-size:1.5em; line-height:100%;">E se não te contentas com pouco,<br />usa e abusa destes 250 bits!</span><br /><br /><b>
     <span style="font-size:5em; line-height:100%;">100</span><span style="font-size:3em;">€</span></b><br /><br />
     <a href="bits_manager.php?pack=3"><div class="btn_licitar" align="center" style="color:white; background-color:#333333; font-size:1.6em;"><img src="src/topbar/carrinho_compras.png" style="position:relative; top:2px;" height="22" />&nbsp;&nbsp;Comprar agora</div></a>
   	</div>
    <img id="gold_card_preview" class="card_fadein" style="position:absolute; top:20%; right:10%;" src="src/store/gold_card_preview.png" height="500" /> </div>
<?php } ?>
</body>
</html>