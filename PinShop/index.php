<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

include('topbar.php');
include('connect_db.php');
include('consultas.php');
include('script.php');

?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" type="text/css" rel="stylesheet" />
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
    if (y > 700) {
        $('.img_ex1').show();
    } else {
        $('.img_ex1').hide();
    }

}); 

$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 650) {
        $('.div_2_index').show();
    } else {
        $('.div_2_index').hide();
    }

}); 
</script>
<style type="text/css">
body{
overflow-y: hidden;
}
</style>
<title>CMYK Pin - Pina-te</title>
</head>

<body>
<div class="centro" style="width:100%; height:100%;"></div>
<div class="div_index">
<br /><span style="font-size:5em;">&nbsp;&nbsp;Ao gosto do <b>freguês</b>.</span>
<br /><br /><span style="font-size:1.7em; position:absolute; right:15px;">Cria e personaliza os teus pins!</span>
<br /><br /><br /><a href="#ex1_index"><div class="btn_comprar" align="center" style="color:white; font-size:1.6em; position:absolute; right:15px;"><img src="images/ico/check_ico.png" height="17" />&nbsp;&nbsp;Começar agora</div></a>
</div>


<?php 
  	$pin_random_1 = mysql_query("SELECT * FROM pins ORDER BY RAND() LIMIT 1")
	or die(mysql_error());
	   
  	while($pin_random_1_row = mysql_fetch_array( $pin_random_1 )){ ?>
    <a href="descobrir.php">
<div align="center" style="width:150px; display:inline-block; position:absolute; top:50%; right:20%; 
-webkit-animation: fadein_calendario_10 1s; /* Safari and Chrome */
    -moz-animation: fadein_calendario_10 1s; /* Firefox */
    -ms-animation: fadein_calendario_10 1s; /* Internet Explorer */
    -o-animation: fadein_calendario_10 1s; /* Opera */
    animation: fadein_calendario_10 1s; "><img draggable="false" src="<?php echo $pin_random_1_row['bg']; ?>" style="position:relative; top:20x; left:0px;" height="150" /><img style="position:relative; opacity:0.9; top:-130px; z-index:+30; height:110px;" src="<?php echo $pin_random_1_row['foto']; ?>" draggable="false"></div></a>
<?php } 

  	$pin_random_2 = mysql_query("SELECT * FROM pins ORDER BY RAND() LIMIT 1")
	or die(mysql_error());
	   
  	while($pin_random_2_row = mysql_fetch_array( $pin_random_2 )){ ?>
        <a href="descobrir.php">
<div align="center" style="width:100px; display:inline-block; position:absolute; top:42%; right:15%;
	-webkit-animation: fadein_calendario_10 3s; /* Safari and Chrome */
    -moz-animation: fadein_calendario_10 3s; /* Firefox */
    -ms-animation: fadein_calendario_10 3s; /* Internet Explorer */
    -o-animation: fadein_calendario_10 3s; /* Opera */
    animation: fadein_calendario_10 3s; "><img draggable="false" src="<?php echo $pin_random_2_row['bg']; ?>" style="position:relative; top:20x; left:0px;" height="100" /><img style="position:relative; opacity:0.9; top:-87px; z-index:+30; height:70px;" src="<?php echo $pin_random_2_row['foto']; ?>" draggable="false"></div></a>
<?php }

$pin_random_3 = mysql_query("SELECT * FROM pins ORDER BY RAND() LIMIT 1")
	or die(mysql_error());
	   
  	while($pin_random_3_row = mysql_fetch_array( $pin_random_3 )){ ?>
        <a href="descobrir.php">
<div align="center" style="width:50px; display:inline-block; position:absolute; top:61%; right:30%;
-webkit-animation: fadein_calendario_10 4s; /* Safari and Chrome */
    -moz-animation: fadein_calendario_10 4s; /* Firefox */
    -ms-animation: fadein_calendario_10 4s; /* Internet Explorer */
    -o-animation: fadein_calendario_10 4s; /* Opera */
    animation: fadein_calendario_10 4s; "><img draggable="false" src="<?php echo $pin_random_3_row['bg']; ?>" style="position:relative; top:20x; left:0px;" height="50" /><img style="position:relative; opacity:0.9; top:-43px; z-index:+30; height:35px;" src="<?php echo $pin_random_3_row['foto']; ?>" draggable="false"></div></a>
<?php }

$pin_random_4 = mysql_query("SELECT * FROM pins ORDER BY RAND() LIMIT 1")
	or die(mysql_error());
	   
  	while($pin_random_4_row = mysql_fetch_array( $pin_random_4 )){ ?>
        <a href="descobrir.php">
<div align="center" style="width:110px; display:inline-block; position:absolute; top:45%; right:29%;
-webkit-animation: fadein_calendario_10 4s; /* Safari and Chrome */
    -moz-animation: fadein_calendario_10 4s; /* Firefox */
    -ms-animation: fadein_calendario_10 4s; /* Internet Explorer */
    -o-animation: fadein_calendario_10 4s; /* Opera */
    animation: fadein_calendario_10 4s; "><img draggable="false" src="<?php echo $pin_random_4_row['bg']; ?>" style="position:relative; top:20x; left:0px;" height="110" /><img style="position:relative; opacity:0.9; top:-96px; z-index:+30; height:80px;" src="<?php echo $pin_random_4_row['foto']; ?>" draggable="false"></div></a>
<?php } 

$pin_random_5 = mysql_query("SELECT * FROM pins ORDER BY RAND() LIMIT 1")
	or die(mysql_error());
	   
  	while($pin_random_5_row = mysql_fetch_array( $pin_random_5 )){ ?>
        <a href="descobrir.php">
<div align="center" style="width:130px; display:inline-block; position:absolute; top:33%; right:22%;
-webkit-animation: fadein_calendario_10 3s; /* Safari and Chrome */
    -moz-animation: fadein_calendario_10 3s; /* Firefox */
    -ms-animation: fadein_calendario_10 3s; /* Internet Explorer */
    -o-animation: fadein_calendario_10 3s; /* Opera */
    animation: fadein_calendario_10 3s; "><img draggable="false" src="<?php echo $pin_random_5_row['bg']; ?>" style="position:relative; top:20x; left:0px;" height="130" /><img style="position:relative; opacity:0.9; top:-117px; z-index:+30; height:100px;" src="<?php echo $pin_random_5_row['foto']; ?>" draggable="false"></div></a>
<?php }

$pin_random_6 = mysql_query("SELECT * FROM pins ORDER BY RAND() LIMIT 1")
	or die(mysql_error());
	   
  	while($pin_random_6_row = mysql_fetch_array( $pin_random_6 )){ ?>
        <a href="descobrir.php">
<div align="center" style="width:70px; display:inline-block; position:absolute; top:56%; right:15%;
-webkit-animation: fadein_calendario_10 4s; /* Safari and Chrome */
    -moz-animation: fadein_calendario_10 4s; /* Firefox */
    -ms-animation: fadein_calendario_10 4s; /* Internet Explorer */
    -o-animation: fadein_calendario_10 4s; /* Opera */
    animation: fadein_calendario_10 4s; "><img draggable="false" src="<?php echo $pin_random_6_row['bg']; ?>" style="position:relative; top:20x; left:0px;" height="70" /><img style="position:relative; opacity:0.9; top:-62px; z-index:+30; height:50px;" src="<?php echo $pin_random_6_row['foto']; ?>" draggable="false"></div></a>
<?php } ?><a accesskey="m" href="#ex1_index"><div id="mais-news" class="btn_descer" style=" position:fixed;  bottom:10%; right:50%; background-image:url(images/topbar/div_dark.png); border-radius:2em;  height:35px; width:35px; "><div style=" position:absolute; left:11px; top:8px; -ms-transform: rotate(45deg); /* IE 9 */
-webkit-transform: rotate(45deg);
	transform:rotate(45deg);" id="seta_mais" class="seta_mais"></div></div></a>
    
<div id="ex1_index" class="ex1_index">
<img src="images/index_content/base_pin.png" height="300"  class="img_ex1" style="position:absolute; top:30%; display:none; left:10%; 	-webkit-animation: fadein_calendario_10 1s; /* Safari and Chrome */
    -moz-animation: fadein_calendario_10 1s; /* Firefox */
    -ms-animation: fadein_calendario_10 1s; /* Internet Explorer */
    -o-animation: fadein_calendario_10 1s; /* Opera */
    animation: fadein_calendario_10 1s; " draggable="false"/>
<img src="images/index_content/cmyk_fix_pin.png" class="img_ex1" height="300" draggable="false" style="position:absolute; top:30%; left:23%; display:none; 	-webkit-animation: fadein_calendario_10 1s; /* Safari and Chrome */
    -moz-animation: fadein_calendario_10 3s; /* Firefox */
    -ms-animation: fadein_calendario_10 3s; /* Internet Explorer */
    -o-animation: fadein_calendario_10 3s; /* Opera */
    animation: fadein_calendario_10 3s; " />

<div style="position:absolute; z-index:-30; top:25%; right:0%;" class="div_2_index">
<span style="position:absolute; top:11%; right:10%; font-size:5em;">Podemos <b>pinar-te?</b></span><br />
<span style="position:absolute; top:30%; right:11%; font-size:1.7em;">Regista-te agora para começares a criar!</b></span>
<div align="right" style="position:absolute; top:45%; right:12%; color:white; line-height:250%;">
<form action="signup.php" method="post">
<input type="text" style="width:150px; background-image:url(images/topbar/div_dark.png);" class="text_form" name="username" id="username" placeholder="Nome de utilizador" />&nbsp;
<input type="text" style="width:200px; background-image:url(images/topbar/div_dark.png);" class="text_form" name="nome_user" id="nome_user" placeholder="Nome completo" />&nbsp;<br />
<input type="text" style="width:150px; background-image:url(images/topbar/div_dark.png);" class="text_form" name="email" id="email" placeholder="E-mail" />
<input type="text" style="width:150px; background-image:url(images/topbar/div_dark.png);" class="text_form" name="cemail" id="cemail" placeholder="Confirmar" />&nbsp;<br />
<input type="password" style="width:120px; background-image:url(images/topbar/div_dark.png);" class="text_form" name="password" id="password" placeholder="Palavra-passe" />
<input type="password" style="width:120px; background-image:url(images/topbar/div_dark.png);" class="text_form" name="cpassword" id="cpassword" placeholder="Confirmar" />&nbsp;<br />
							<input type="checkbox" name="termos"><label style="font-size:16px;">Aceito os termos e condições</label>&nbsp;<br>

<button type="submit" value="mais_vendidos" class="botao_form"  id="mais_vendidos" name="mais_vendidos" style="border:none; width:115px;; background:transparent;"><div class="btn_funcao"><img src="images/ico/check_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Registar</div></button>
</form>
</div>

</div>

<div style="display:none;">
<img src="images/index_content/go_with_the_flow.png" class="img_ex1" height="200" draggable="false" style="position:absolute; top:10%; right:8%;" />
<img src="images/index_content/black_game.png" class="img_ex1" height="170" draggable="false" style="position:absolute; top:28%; right:18%;" />
<img src="images/index_content/live_forever_pin.png" height="140" class="img_ex1" draggable="false" style="position:absolute; top:35%; right:9%;" />
<img src="images/index_content/hearts_pin.png" class="img_ex1" height="120" draggable="false" style="position:absolute; top:49%; right:16%;" />
<img src="images/index_content/walk_on_the_wild_side_pin.png" class="img_ex1" height="90" draggable="false" style="position:absolute; top:54%; right:10%;" /></div></div>
</body>
</html>


