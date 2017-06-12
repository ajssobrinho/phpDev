<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="bidit.style.css" rel="stylesheet" type="text/css">

<title>Bidit // 1.0</title>

<?php session_start();

if($_SESSION['tipo_utilizador']== ''){
include('topbar.php');}
elseif($_SESSION['tipo_utilizador']== 0){
include('topbar_user.php');}
else{
include('topbar_admin.php');}
include('scripts.php');
 ?>
 <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script language="javascript" type="text/javascript">
$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 90) {
        $('#pesquisa_btn').show();
    }else {
		$('#pesquisa_btn').hide();
		}
	}); 
</script>


<script language="javascript" type="text/javascript">

function pesquisa_btn()
{
	document.getElementById("pesquisar_leilao").focus();

}
</script>
</head>

<body>

<a href="hoje.php"><div align="center" id="novidades" class="novidades_side"><span style="font-size:2em; color:white; position:relative; top:30%; line-height:100%; font-family:'Pacifico',Arial;">Novidades<br />de <?php
If(date('w')==0){
	echo "domingo!";}
elseIf(date('w')==1){
	echo "segunda-feira!";}
	elseIf(date('w')==2){
	echo "terça-feira!";}
	elseIf(date('w')==3){
	echo "quarta-feira!";}
	elseIf(date('w')==4){
	echo "quinta-feira!";}
	elseIf(date('w')==5){
	echo "sexta-feira!";}
	elseIf(date('w')==6){
	echo "sábado!";}
	else {
		echo "hoje";}
?></span></div></a>


<div id="feature_1" style="top:26%;" class="all_bids_cat">

<span style="font-size:1.7em; position:relative; top:0%;">&nbsp;Bids criados por ti</span><hr />

<span style="line-height:40%;">

	<div class="bid_lista">
    <span style="position:relative; line-height:150%; width:70%; top:-50%; left:27%;">
       <span style="line-height:100%;  font-size:1.8em;"><a href="#">Garrafa Tupperware</a></span><br /><span style="font-size:1em;"><a href="#">17 horas restantes</a></span><br />
       <span style="font-size:1.3em;"><a style="color:#6699ff;" href="#"><b>A decorrer</b></a></span>	
       </span>

       <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/tupperware.jpg); position:relative; top:-80px; border-radius:0.2em; width:25%; height:100%;">
    <div class="add_watchlist_small" style="background-color:#3366cc;" align="center"><img style="position:relative; top:5px; right:2px;" src="src/topbar/wishlist.png" height="15" /></div>
   
</div>
     </span>    
    </div>
    <br />
    	<div class="bid_lista">
    <span style="position:relative; line-height:150%; width:70%; top:-50%; left:27%;">
       <span style="line-height:100%;  font-size:1.8em;"><a href="#">Equipamento Real Madrid 2014/2015</a></span><br /><span style="font-size:1em;"><a href="#">17 horas restantes</a></span><br />
       <span style="font-size:1.3em;"><a style="color:#6699ff;" href="#"><b>Encerrado</b></a></span>	
       </span>

       <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/real_madrid_kit.jpg); position:relative; top:-80px; border-radius:0.2em; width:25%; height:100%;">
    <div class="add_watchlist_small" style="background-color:#3366cc;" align="center"><img style="position:relative; top:5px; right:2px;" src="src/topbar/wishlist.png" height="15" /></div>
   
</div>
     </span>    
    </div>
    <br />
    	<div class="bid_lista">
    <span style="position:relative; line-height:150%; width:70%; top:-50%; left:27%;">
       <span style="line-height:100%;  font-size:1.8em;"><a href="#">Wilson Pro Staff 100L</a></span><br /><span style="font-size:1em;"><a href="#">17 horas restantes</a></span><br />
       <span style="font-size:1.3em;"><a style="color:#6699ff;" href="#"><b>Encerrado<span style="font-size:0.7em;">€</span></b></a></span>	
       </span>

       <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/wilson.jpg); position:relative; top:-80px; border-radius:0.2em; width:25%; height:100%;">
    <div class="add_watchlist_small" style="background-color:#3366cc;" align="center"><img style="position:relative; top:5px; right:2px;" src="src/topbar/wishlist.png" height="15" /></div>
   
</div>
     </span>    
    </div>
    <br />
    	<div class="bid_lista">
    <span style="position:relative; line-height:150%; width:70%; top:-50%; left:27%;">
       <span style="line-height:100%;  font-size:1.8em;"><a href="#">New Fit Kit Halteres 20kg</a></span><br /><span style="font-size:1em;"><a href="#">17 horas restantes</a></span><br />
       <span style="font-size:1.3em;"><a style="color:#6699ff;" href="#"><b>Encerrado<span style="font-size:0.7em;">€</span></b></a></span>	
       </span>

       <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/halteres_newfit.jpg); position:relative; top:-80px; border-radius:0.2em; width:25%; height:100%;">
    <div class="add_watchlist_small" style="background-color:#3366cc;" align="center"><img style="position:relative; top:5px; right:2px;" src="src/topbar/wishlist.png" height="15" /></div>
   
</div>
     </span>    
    </div>
    <br />
    </span>
</div>
         
<div id="feature_2" style="top:26%; display:none;" class="all_bids_cat" style="display:none;">
<span style="font-size:1.7em; position:relative; top:0%;">&nbsp;Bids que ganhei</span><hr />
<span style="line-height:40%;">

	<div class="bid_lista">
    <span style="position:relative; line-height:150%; width:70%; top:-50%; left:27%;">
       <span style="line-height:100%;  font-size:1.8em;"><a href="#">Kx Sporty 10 M</a></span><br /><span style="font-size:1em;"><a href="#">11 horas restantes</a></span><br />
       <span style="font-size:1.3em;"><a style="color:#6699ff;" href="#"><b>55,99<span style="font-size:0.7em;">€</span></b></a></span>	
       </span>
           
       <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/bike.jpg); position:relative; top:-80px; border-radius:0.2em; width:25%; height:100%;">
    <div class="add_watchlist_small" style="background-color:#3366cc;" align="center"><img style="position:relative; top:5px; right:2px;" src="src/topbar/wishlist.png" height="15" /></div>
   
</div>
     </span>    
    </div>
    <br />
    	<div class="bid_lista">
    <span style="position:relative; line-height:150%; width:70%; top:-50%; left:27%;">
       <span style="line-height:100%;  font-size:1.8em;"><a href="#">Equipamento Portugal 2014/2015</a></span><br /><span style="font-size:1em;"><a href="#">4 horas restantes</a></span><br />
       <span style="font-size:1.3em;"><a style="color:#6699ff;" href="#"><b>18,01<span style="font-size:0.7em;">€</span></b></a></span>	
       </span>
           
       <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/portugal_kit.jpg); position:relative; top:-80px; border-radius:0.2em; width:25%; height:100%;">
    <div class="add_watchlist_small" style="background-color:#3366cc;" align="center"><img style="position:relative; top:5px; right:2px;" src="src/topbar/wishlist.png" height="15" /></div>
   
</div>
     </span>    
    </div>
    <br />
    	<div class="bid_lista">
    <span style="position:relative; line-height:150%; width:70%; top:-50%; left:27%;">
       <span style="line-height:100%;  font-size:1.8em;"><a href="#">Nike Air Sculpt TR 2</a></span><br /><span style="font-size:1em;"><a href="#">8 horas restantes</a></span><br />
       <span style="font-size:1.3em;"><a style="color:#6699ff;" href="#"><b>7,40<span style="font-size:0.7em;">€</span></b></a></span>	
       </span>
           
       <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/nike.jpg); position:relative; top:-80px; border-radius:0.2em; width:25%; height:100%;">
    <div class="add_watchlist_small" style="background-color:#3366cc;" align="center"><img style="position:relative; top:5px; right:2px;" src="src/topbar/wishlist.png" height="15" /></div>
   
</div>
     </span>    
    </div>
    <br />
    	<div class="bid_lista">
    <span style="position:relative; line-height:150%; width:70%; top:-50%; left:27%;">
       <span style="line-height:100%;  font-size:1.8em;"><a href="#">New Fit Kit Halteres 20kg</a></span><br /><span style="font-size:1em;"><a href="#">17 horas restantes</a></span><br />
       <span style="font-size:1.3em;"><a style="color:#6699ff;" href="#"><b>11,40<span style="font-size:0.7em;">€</span></b></a></span>	
       </span>
           
       <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/halteres_newfit.jpg); position:relative; top:-80px; border-radius:0.2em; width:25%; height:100%;">
    <div class="add_watchlist_small" style="background-color:#3366cc;" align="center"><img style="position:relative; top:5px; right:2px;" src="src/topbar/wishlist.png" height="15" /></div>
   
</div>
     </span>    
    </div>
    <br />
    </span>
</div>


<div class="pub_side_cat" style="background-image:url(src/pub/django_banner.jpg);"><span style="position:relative; color:white; padding-left:5px; background-color:#3399ff; border-bottom-left-radius:0.2em; -webkit-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    -moz-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    box-shadow: 0px 1px 1px -1px rgb(0,0,0); border-bottom-right-radius:2em; padding-right:15px; font-size:0.9em;">PUB</span></div>
    
      
    <div id="side_menu_cat" class="side_menu_cat">
  <table width="100%">
  
    <tr>
      <td>
      <span style="font-size:1.8em;"><b> Os meus bids</b></span> <br /> <span style="position:absolute; line-height:100%; font-size:1.2em; ">14 bids criados,<br />27 ganhos.</span><br /><br /><hr />
      <span style="line-height:170%; font-size:1.1em;">
     	<a class="side_bar_cat" href="favoritos.php"><b>></b> Favoritos</a><br />
     	<a href="#" class="side_bar_cat" id="feature_1-show" onClick="showHideFeature_1('feature_1');return false;"><b>></b> Adicionados por mim</a><br />
       	<a href="#" class="side_bar_cat" id="feature_2-show" onClick="showHideFeature_2('feature_2');return false;"><b>></b> Bids que ganhei</a><br />
        </span></td>
              <br />
    </tr>
   
   
 </table>
</div>
    
</body>
</html>