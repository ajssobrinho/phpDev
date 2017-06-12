<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="bidit.style.css" rel="stylesheet" type="text/css">

<title>Bidit // 1.0</title>

<?php 
session_start();

if($_SESSION['tipo_utilizador']== ''){
include('topbar.php');}
elseif($_SESSION['tipo_utilizador']== 0){
include('topbar_user.php');}
elseif($_SESSION['tipo_utilizador']== 1){
	include('topbar_admin.php');}

include('scripts.php');

	require_once"classes/leiloes.php";
	

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
 
  <?php 	$bids_destaque = new leiloes ();
	$bids_destaque_row = $bids_destaque-> Bidsdestaques();
		
		  $lista_destaques = array();
		
	while($bids_destaque_rows= $bids_destaque_row->fetch_array(MYSQLI_ASSOC)){ 
	$cod_bid_destaque = $bids_destaque_rows['cod_leilao'];
			  $lista_destaques[] =$cod_bid_destaque;


	 }?>
<?php $cod_feature1 = $lista_destaques[0]; 

$feature_1 = new leiloes ();
	$feature_1_row = $feature_1-> feature1_info($cod_feature1);
		
	while($feature_1_rows = $feature_1_row->fetch_array(MYSQLI_ASSOC)){ ?>
<div id="feature_1" class="feature" style="background-image:url(<?php echo $feature_1_rows['foto_leilao']; ?>);"><span style="font-family:'Pacifico',Arial, Helvetica, sans-serif; font-size:4.4em; color:<?php echo $feature_1_rows['cor']; ?>; position:relative; top:50px; left:50px;"><?php echo $feature_1_rows['nome']; ?></span>
<div class="add_watchlist" style="	background-color:<?php echo $feature_1_rows['cor']; ?>;" align="center"><img style="position:relative; top:5px; left:2px;" src="src/topbar/wishlist.png" height="20" /></div>
<a href="bid.php?cod_bid=<?php echo $feature_1_rows['cod_leilao']; ?>"><div class="btn_licitar" align="center" style="color:white; background-color:<?php echo $feature_1_rows['cor']; ?>; font-size:1.6em; position:absolute; top:70%; left:5%;"><img src="src/topbar/meus_pins.png" height="17" />&nbsp;&nbsp;Licitar agora</div></a>
</div><?php } ?>
<?php $cod_feature1 = $lista_destaques[1]; 

$feature_1 = new leiloes ();
	$feature_1_row = $feature_1-> feature1_info($cod_feature1);
		
	while($feature_1_rows = $feature_1_row->fetch_array(MYSQLI_ASSOC)){ ?>
<div id="feature_2" class="feature" style="background-image:url(<?php echo $feature_1_rows['foto_leilao']; ?>); display:none;"><span style="color:white; font-family:'Pacifico',Arial, Helvetica, sans-serif; font-size:4.4em; color:<?php echo $feature_1_rows['cor']; ?>; position:absolute; top:40px; right:50px;"><?php echo $feature_1_rows['nome']; ?></span>
<div class="add_watchlist" style="	background-color:<?php echo $feature_1_rows['cor']; ?>;" align="center"><img style="position:relative; top:5px; left:2px;" src="src/topbar/wishlist.png" height="20" /></div>
<a href="bid.php?cod_bid=<?php echo $feature_1_rows['cod_leilao']; ?>"><div class="btn_licitar" align="center" style="color:white; background-color:<?php echo $feature_1_rows['cor']; ?>; font-size:1.6em; position:absolute; top:70%; right:5%;"><img src="src/topbar/meus_pins.png" height="17" />&nbsp;&nbsp;Licitar agora</div></a>
</div><?php } ?>
<?php $cod_feature1 = $lista_destaques[2]; 

$feature_1 = new leiloes ();
	$feature_1_row = $feature_1-> feature1_info($cod_feature1);
		
	while($feature_1_rows = $feature_1_row->fetch_array(MYSQLI_ASSOC)){ ?>
<div id="feature_3" class="feature" style="background-image:url(<?php echo $feature_1_rows['foto_leilao']; ?>); display:none;"><span style="color:white; font-family:'Pacifico',Arial, Helvetica, sans-serif; font-size:4.4em; color:<?php echo $feature_1_rows['cor']; ?>; position:relative; top:40px; left:50px;"><?php echo $feature_1_rows['nome']; ?></span>
<div class="add_watchlist" style="	background-color:<?php echo $feature_1_rows['cor']; ?>;" align="center"><img style="position:relative; top:5px; left:2px;" src="src/topbar/wishlist.png" height="20" /></div>
<a href="bid.php?cod_bid=<?php echo $feature_1_rows['cod_leilao']; ?>"><div class="btn_licitar" align="center" style="color:white; background-color:<?php echo $feature_1_rows['cor']; ?>; font-size:1.6em; position:absolute; top:70%; left:5%;"><img src="src/topbar/meus_pins.png" height="17" />&nbsp;&nbsp;Licitar agora</div></a>
</div><?php } ?>




<div id="main_feature" style="background:none;" align="center" class="main_feature">
<a href="#" id="feature_1-show" onClick="showHideFeature_1('feature_1');return false;"><div id="feature_1_btn" style="border: 2px solid #3498db; height:10px; width:10px; visibility:hidden; display:inline-table; border-radius:10px;"></div></a>&nbsp;&nbsp;
<a href="#" id="feature_2-show" onClick="showHideFeature_2('feature_2');return false;"><div id="feature_2_btn" style="border: 2px solid #3498db; height:10px; width:10px; display:inline-table; border-radius:10px;"></div></a>&nbsp;&nbsp;
<a href="#" id="feature_3-show" onClick="showHideFeature_3('feature_3');return false;"><div id="feature_3_btn"  style="border: 2px solid #3498db; height:10px; width:10px; display:inline-table; border-radius:10px;"></div></a></div>

<div align="center" id="main_feature_active" style=" z-index:10;" class="main_feature">
<div id="feature_1_btn_active" style="border: 2px solid #3498db; background-color:#3498db; height:10px; width:10px; display:inline-table;  border-radius:10px;"></div>&nbsp;&nbsp;
<div id="feature_2_btn_active" style="border: 2px solid #3498db; background-color:#3498db; height:10px; width:10px; display:inline-table; visibility:hidden; border-radius:10px;"></div>&nbsp;&nbsp;
<div id="feature_3_btn_active" style="border: 2px solid #3498db; background-color:#3498db; height:10px; width:10px; display:inline-table; visibility:hidden; border-radius:10px;"></div></div>
</div>

<a href="hoje.php"><div align="center" id="novidades" class="novidades"><span style="font-size:3em; color:white; position:relative; top:30%; line-height:100%; font-family:'Pacifico',Arial;">Novidades<br />de <?php
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

<div id="top5_bar" class="top5_bar">
<table width="100%"><tr><td width="25%">
<div align="center" style="
	-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat:no-repeat;
    background-image:url(src/fundos/fundo1.1.jpg);
    height:150px; position:relative; left:-2px; top:-2px; height:180px;">
<span style="color:white; font-family:'Pacifico',Arial; position:relative; top:20%; font-size:3em;">Top 5</span></div>
</td>
<?php 	$top5_leiloes = new leiloes ();
	$top5_leiloes_row = $top5_leiloes->Top5leiloes();
		
	while($top5_leiloes_rows= $top5_leiloes_row->fetch_array(MYSQLI_ASSOC)){ ?>

<td align="center" width="15%">
<div id="pos1" class="lista_fav" style=" height:150px;">
<a href="bid.php?cod_bid=<?php echo $top5_leiloes_rows['cod_leilao']; ?>">
<div style="height:100px; width:100px; -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat:no-repeat; background-image:url(<?php echo $top5_leiloes_rows['foto_leilao']; ?>); border-radius:0.2em; display:inline-table; position:relative;"></div>

    <br /><span style=" color:white; font-size:1em;font-weight:bold; line-height:100%;"><?php echo $top5_leiloes_rows['nome']; ?></span><br >
        <span style=" color:white; font-size:0.9em; line-height:100%;"><?php echo $top5_leiloes_rows['bids']; ?> licitações</span>

</div></a>
</td><?php } ?></tr></table>
</div>

<div></div>

<div class="pub_1"><span style="position:relative; color:white; padding-left:5px; background-color:#3399ff; border-bottom-left-radius:0.2em; -webkit-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    -moz-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    box-shadow: 0px 1px 1px -1px rgb(0,0,0); border-bottom-right-radius:2em; padding-right:15px; font-size:0.9em;">PUB</span></div>
    
    
    
    <div class="novidades_cat">
	<span style="font-size:1.7em;"> Aproveita agora!</span>
    
    <?php 	$randbid1 = new leiloes ();
	$randbid1_row = $randbid1-> Randbid1();
		
	while($randbid1_rows= $randbid1_row->fetch_array(MYSQLI_ASSOC)){ ?>
    <a href="bid.php?cod_bid=<?php echo $randbid1_rows['cod_leilao']; ?>"><div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $randbid1_rows['foto_leilao']; ?>); position:absolute; top:20%; border-radius:0.2em; width:40%; height:80%;"></div></a>
    <div style="position:absolute; line-height:250%; width:37%; top:20%; left:41%;">
    <span style="font-size:3em;"><a href="bid.php?cod_bid=<?php echo $randbid1_rows['cod_leilao']; ?>"><?php echo $randbid1_rows['nome']; ?></a></span><br />
     <span style="font-size:1.2em;"><?php echo $randbid1_rows['bids']; ?> licitações</span><br />
     <span style="font-size:1.7em; color:#3399ff;"><b><?php echo $randbid1_rows['licitacao']; ?>€</b></span><br /><?php } ?>
     </div>
    
     <?php 	$randbid1_1 = new leiloes ();
	$randbid1_1_row = $randbid1_1-> Randbid1();
		
	while($randbid1_1_rows= $randbid1_1_row->fetch_array(MYSQLI_ASSOC)){ ?>
     <a href="bid.php?cod_bid=<?php echo $randbid1_1_rows['cod_leilao']; ?>">
     <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $randbid1_1_rows['foto_leilao']; ?>); position:absolute; left:80%; top:20%; border-radius:0.2em; width:20%; height:39%;"></div></a><?php } ?>
    
          <?php 	$randbid1_2 = new leiloes ();
	$randbid1_2_row = $randbid1_2-> Randbid1();
		
	while($randbid1_2_rows= $randbid1_2_row->fetch_array(MYSQLI_ASSOC)){ ?>
     <a href="bid.php?cod_bid=<?php echo $randbid1_2_rows['cod_leilao']; ?>">
     <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $randbid1_2_rows['foto_leilao']; ?>); position:absolute; left:80%; top:62%; border-radius:0.2em; width:20%; height:39%;"></div></a><?php } ?>
      
    </div>
    
</body>
</html>