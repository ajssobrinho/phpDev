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

<div id="bid1" class="feature_cat" style="">
     <?php 	$bids_today_q = new leiloes ();
	$bids_today_row = $bids_today_q-> bids_today();
		
	while($bids_today_rows= $bids_today_row->fetch_array(MYSQLI_ASSOC)){ 
		
	?>
    <a href="bid.php?cod_bid=<?php echo $bids_today_rows['cod_leilao']; ?>">
    <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $bids_today_rows['foto_leilao']; ?>); position:absolute; top:20%; border-radius:0.2em; width:40%; height:80%;"></div></a><?php } ?>
    <span style="position:absolute; line-height:100%; font-size:2.5em; width:37%; top:20%; left:66%;">Destaques de <?php
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
?></span>
     <span style="position:absolute; line-height:100%; font-size:1.2em; width:37%; top:60%; left:66%;">14 bids ativos,<br />27 realizados.</span><br />
    
      <?php 	$bids_today_q = new leiloes ();
	$bids_today_row = $bids_today_q-> bids_today();
		
	while($bids_today_rows= $bids_today_row->fetch_array(MYSQLI_ASSOC)){ 
		
	?>
    <a href="bid.php?cod_bid=<?php echo $bids_today_rows['cod_leilao']; ?>">
     <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $bids_today_rows['foto_leilao']; ?>); position:absolute; left:42%; top:20%; border-radius:0.2em; width:20%; height:39%;"></div></a><?php } ?>
    
      <?php 	$bids_today_q = new leiloes ();
	$bids_today_row = $bids_today_q-> bids_today();
		
	while($bids_today_rows= $bids_today_row->fetch_array(MYSQLI_ASSOC)){ 
		
	?>
    <a href="bid.php?cod_bid=<?php echo $bids_today_rows['cod_leilao']; ?>">
      <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $bids_today_rows['foto_leilao']; ?>); position:absolute; left:42%; top:62%; border-radius:0.2em; width:20%; height:39%;"></div></a><?php } ?>

</div>


</div>

<div id="feature_1" style="overflow-y:scroll;" class="all_bids_cat">

<span style="font-size:1.7em; position:relative; top:0%;">&nbsp;Bids a decorrer</span><hr />

<span style="line-height:40%;">
 <?php 	$bids_info_today_q = new leiloes ();
	$bids_info_today_row = $bids_info_today_q-> bids_info_today();
		
	while($bids_info_today_rows= $bids_info_today_row->fetch_array(MYSQLI_ASSOC)){ ?>
	<div class="bid_lista">
    <span style="position:relative; line-height:150%; width:70%; top:-50%; left:27%;">
       <span style="line-height:100%;  font-size:1.8em;"><a href="bid.php?cod_bid=<?php echo $bids_info_today_rows['cod_leilao']; ?>"><?php echo $bids_info_today_rows['nome']; ?></a></span><br /><span style="font-size:1em;"><a href="#"><?php echo $bids_info_today_rows['bids']; ?> licitações</a></span><br />
       <span style="font-size:1.3em;"><a style="color:#6699ff;" href="bid.php?cod_bid=<?php echo $bids_info_today_rows['cod_leilao']; ?>"><b><?php echo $bids_info_today_rows['licitacao']; ?>€</span></b></a></span>	
       </span>
 <a href="bid.php?cod_bid=<?php echo $bids_info_today_rows['cod_leilao']; ?>">
       <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $bids_info_today_rows['foto_leilao']; ?>); position:relative; top:-80px; border-radius:0.2em; width:25%; height:100%;">
    <div class="add_watchlist_small" style="background-color:#3366cc;" align="center"><img style="position:relative; top:5px; right:2px;" src="src/topbar/wishlist.png" height="15" /></div></a>
   
</div>
     </span>    
    </div> <br /><?php } ?>
 
    </span>
</div>
         


<div class="pub_side_cat" style="background-image:url(src/pub/django_banner.jpg); top:27%;"><span style="position:relative; color:white; padding-left:5px; background-color:#3399ff; border-bottom-left-radius:0.2em; -webkit-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    -moz-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    box-shadow: 0px 1px 1px -1px rgb(0,0,0); border-bottom-right-radius:2em; padding-right:15px; font-size:0.9em;">PUB</span></div>
   
<div class="pub_side_cat" style="background-image:url(src/pub/sousa_watch.jpg); top:80%; height:30%;"><span style="position:relative; color:white; padding-left:5px; background-color:#3399ff; border-bottom-left-radius:0.2em; -webkit-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    -moz-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    box-shadow: 0px 1px 1px -1px rgb(0,0,0); border-bottom-right-radius:2em; padding-right:15px; font-size:0.9em;">PUB</span></div>
    
          
</body>
</html>