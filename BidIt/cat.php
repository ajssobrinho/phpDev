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
<?php 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['cat']))
 {
 // get id value
 $cod_cat = $_GET['cat'];
 }
?>
<div id="bid1" class="feature_cat" style="">
      <?php 	$randbid2 = new leiloes ();
	$randbid2_row = $randbid2-> Randbid2($cod_cat);
		
	while($randbid2_rows= $randbid2_row->fetch_array(MYSQLI_ASSOC)){ 
		
	?>
    <a href="bid.php?cod_bid=<?php echo $randbid2_rows['cod_leilao']; ?>">
    <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $randbid2_rows['foto_leilao']; ?>); position:absolute; top:20%; border-radius:0.2em; width:40%; height:80%;"></div></a>
    <div style="position:absolute; line-height:230%; top:20%; left:66%;"><span style="font-size:2.5em; width:37%;"><a href="#">Destaques de <?php echo $cod_cat; ?></a></span><br /><br />
     <span style="font-size:1.2em; line-height:100%; width:37%;">14 bids ativos,<br />27 realizados.</span></div><br /><?php } ?>
    
        <?php 	$randbid2 = new leiloes ();
	$randbid2_row = $randbid2-> Randbid2($cod_cat);
		
	while($randbid2_rows= $randbid2_row->fetch_array(MYSQLI_ASSOC)){ ?>  
     <a href="bid.php?cod_bid=<?php echo $randbid2_rows['cod_leilao']; ?>">
     <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $randbid2_rows['foto_leilao']; ?>); position:absolute; left:42%; top:20%; border-radius:0.2em; width:20%; height:39%;"></div></a><?php } ?>
    
          <?php 	$randbid2 = new leiloes ();
	$randbid2_row = $randbid2-> Randbid2($cod_cat);
		
	while($randbid2_rows= $randbid2_row->fetch_array(MYSQLI_ASSOC)){ ?>
    <a href="bid.php?cod_bid=<?php echo $randbid2_rows['cod_leilao']; ?>">
      <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $randbid2_rows['foto_leilao']; ?>); position:absolute; left:42%; top:62%; border-radius:0.2em; width:20%; height:39%;"></div></a><?php } ?>

</div>


</div>

<a href="hoje.php"><div align="center" id="novidades" style="top:27%;" class="novidades_side"><span style="font-size:2em; color:white; position:relative; top:30%; line-height:100%; font-family:'Pacifico',Arial;">Novidades<br />de <?php
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


<div id="feature_1"style="overflow-y:scroll;" class="all_bids_cat">

<span style="font-size:1.7em; position:relative; top:0%;">&nbsp;Bids a decorrer</span><hr />

<span style="line-height:40%;">
 <?php 	$bid_ativo_cat = new leiloes ();
	$bid_ativo_cat_row = $bid_ativo_cat-> bid_ativo_cat($cod_cat);
		
	while($bid_ativo_cat_rows= $bid_ativo_cat_row->fetch_array(MYSQLI_ASSOC)){ ?>
	<div class="bid_lista" >
    <span style="position:relative; line-height:150%; width:70%; top:-50%; left:27%;">
       <span style="line-height:100%;  font-size:1.8em;"><a href="bid.php?cod_bid=<?php echo $bid_ativo_cat_rows['cod_leilao']; ?>"><?php echo $bid_ativo_cat_rows['nome']; ?></a></span><br /><span style="font-size:1em;"><a href="#"><?php echo $bid_ativo_cat_rows['bids']; ?> licitações</a></span><br />
       <span style="font-size:1.3em;"><a style="color:#6699ff;" href="#"><b><?php echo $bid_ativo_cat_rows['licitacao']; ?>€</b></a></span>	
       </span>

       <a href="bid.php?cod_bid=<?php echo $bid_ativo_cat_rows['cod_leilao']; ?>"><div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $bid_ativo_cat_rows['foto_leilao']; ?>); position:relative; top:-80px; border-radius:0.2em; width:25%; height:100%;">
    <div class="add_watchlist_small" style="background-color:#3366cc;" align="center"><img style="position:relative; top:5px; right:2px;" src="src/topbar/wishlist.png" height="15" /></div>
   
</div></a>
     </span>    
    </div>
    <br />
    <?php } ?>
  
</div>

<div class="pub_side_cat" style="background-image:url(src/pub/django_banner.jpg); top:60%;"><span style="position:relative; color:white; padding-left:5px; background-color:#3399ff; border-bottom-left-radius:0.2em; -webkit-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    -moz-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    box-shadow: 0px 1px 1px -1px rgb(0,0,0); border-bottom-right-radius:2em; padding-right:15px; font-size:0.9em;">PUB</span></div>
    
          
</body>
</html>