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
   <script type="text/javascript">
    setInterval("my_function();",1000); 
    function my_function(){
      $('#yo').load(location.href + ' #data');
     }
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
 if (isset($_GET['cod_bid']))
 {
 // get id value
 $cod_bid = $_GET['cod_bid'];
 }
?>


<a href="hoje.php"><div align="center" id="novidades" class="novidades_bid_view"><span style="font-size:2.5em; color:white; position:relative; top:30%; line-height:100%; font-family:'Pacifico',Arial;">Novidades<br />de <?php
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

<div class="pub_big" style="background-image:url(src/pub/sousa_matrix.jpg); "><span style="position:relative; color:white; padding-left:5px; background-color:#3399ff; border-bottom-left-radius:0.2em; -webkit-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    -moz-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    box-shadow: 0px 1px 1px -1px rgb(0,0,0); border-bottom-right-radius:2em; padding-right:15px; font-size:0.9em;">PUB</span></div>
    
          <?php 	$view_info_bid = new leiloes ();
	$view_info_bid_row = $view_info_bid-> view_info_bid($cod_bid);
		
	while($view_info_bid_rows= $view_info_bid_row->fetch_array(MYSQLI_ASSOC)){ 
		
	?>
 <div align="center" id="info_bid" class="info_bid">
  <div style="line-height:170%; width:40%; height:70%; position:absolute; left:2%; font-size:1.1em;">
 <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $view_info_bid_rows['foto_leilao']; ?>); position:relative; top:0px; border-radius:0.2em; width:100%; height:100%;"></div>
         </div>
        <div align="left" style="line-height:150%; width:52%; height:65%; position:absolute; left:44%; font-size:1.1em; padding:10px;"><div style="" id="yo"><div id="data" style="position:relative; top:10%;"><span style="font-size:2.5em; color:<?php echo $view_info_bid_rows['cor']; ?>; line-height:90%;"><?php echo $view_info_bid_rows['nome']; ?></span>
<br /><span style="font-size:1em;">&nbsp;Por 
     <?php 	$cod_user_bid_q = new leiloes ();
	 $cod_user_bid = $view_info_bid_rows['cod_utilizador'];
	$cod_user_bid_row = $cod_user_bid_q-> cod_user_bid($cod_user_bid);
		
	while($cod_user_bid_rows= $cod_user_bid_row->fetch_array(MYSQLI_ASSOC)){ echo $cod_user_bid_rows['nome']." ".$cod_user_bid_rows['apelido']; } ?>.</span><br />
    <a href="leiloes_favoritos.php?cod_leilao=<?php echo $view_info_bid_rows['cod_leilao']; ?>?acao=adicionar"><div class="btn_licitar_small" align="center" style="color:white; background-color:<?php echo $view_info_bid_rows['cor']; ?>; font-size:1.2em; line-height:100%; z-index:+500;"><img src="src/topbar/wishlist.png" height="14" />&nbsp;&nbsp;Adicionar aos favoritos</div></a><br />
<br /><span style="font-size:1.7em;">Termina em <b><span style="color:<?php echo $view_info_bid_rows['cor']; ?>;">

<?php
$hora = date("H");
$minuto = date("i");
$segundo = date("s");
$falta_h = 48-$hora;
$falta_m = 60-$minuto;
$falta_s = 60-$segundo; 

if ($falta_h=="01")
{
  $txt_h = "hora";
}
else
{
  $txt_h = "horas";
}

	if ($falta_m=="01")
	{
  	$txt_m = "minuto";
	}
	else
	{
  	$txt_m = "minutos";
	}

		if ($falta_h=="01")
		{
 		 $txt_s = "segundo";
		}
		else
		{
 		 $txt_s = "segundos";
		}

echo $falta_h.':'.$falta_m.':'.$falta_s;

?></span></b></span><br /><br /><span style="font-size:1em; line-height:100%;"><?php echo $view_info_bid_rows['descricao']; ?></span></div></div>
        </div>

<div class="div_licitar"><div class="licitar">
        <span style="position:absolute; right:1%; top:-620%;"><img height="15" src="src/icons/auto.svg">&nbsp;<a href="#">Denunciar bid</a></span>
<span style="font-size:1.2em; position:relative; top:-7px;">Última licitação por <span style="color:<?php echo $view_info_bid_rows['cor']; ?>;">

 <?php 
	$cod_bid = $view_info_bid_rows['cod_leilao'];
	$cod_user_utlima_licitacao_q = new leiloes ();
	$cod_user_utlima_licitacao_row = $cod_user_utlima_licitacao_q-> cod_user_ultima_licitacao($cod_bid);
		
	while($cod_user_utlima_licitacao_rows= $cod_user_utlima_licitacao_row->fetch_array(MYSQLI_ASSOC)){
			
	$cod_user_bid_q = new leiloes ();
	 $cod_user_bid = $cod_user_utlima_licitacao_rows['cod_utilizador'];
	$cod_user_bid_row = $cod_user_bid_q-> cod_user_bid($cod_user_bid); ?>
	
	
	<?php
		
	while($cod_user_bid_rows= $cod_user_bid_row->fetch_array(MYSQLI_ASSOC)){ ?>
<b><?php echo $cod_user_bid_rows['nome']." ".$cod_user_bid_rows['apelido']; ?></b><?php } } ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valor atual de <b><span style="color:<?php echo $view_info_bid_rows['cor']; ?>;"><?php echo $view_info_bid_rows['licitacao']; ?>€</span></b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php if(!empty ($_SESSION)){ if($_SESSION['bits']!=0){ ?><a href="leiloes_licitar.php?cod_leilao=<?php echo $view_info_bid_rows['cod_leilao']; ?>"><?php } } ?><div class="btn_licitar" align="center" style="color:white; background-color:<?php echo $view_info_bid_rows['cor']; ?>; position:relative; right:0%; line-height:80%; top:-2px; font-size:1.2em;"><img style="position:relative; top:7px;" src="src/topbar/meus_pins.png" height="15" />&nbsp;&nbsp;<span style="position:relative; top:2px;">Licitar agora<br /><span style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if(!empty ($_SESSION)){
 echo $_SESSION['bits']." bits disponíveis"; } else { echo "Iniciar sessão"; } ?></span></span></div>
</div></a>
</div></div><?php } ?>
  
  
  <?php 	$randbid1 = new leiloes ();
	$randbid1_row = $randbid1-> Randbid1();
		
	while($randbid1_rows= $randbid1_row->fetch_array(MYSQLI_ASSOC)){ ?> 
<div class="bids_relacionados"><span style="font-size:1.4em; position:relative; top:7px;">&nbsp;Vê também...</span>
    <a href="bid.php?cod_bid=<?php echo $randbid1_rows['cod_leilao']; ?>">
    <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $randbid1_rows['foto_leilao']; ?>); position:absolute; top:20%; border-radius:0.2em; width:30%; height:80%;"></div></a>
    <div style="position:absolute; line-height:250%; width:30%; top:20%; left:32%;">
    <a href="bid.php?cod_bid=<?php echo $randbid1_rows['cod_leilao']; ?>"><span style="font-size:2.5em;"><?php echo $randbid1_rows['nome']; ?></span><br />
     <span style="font-size:1.5em; color:#3399ff; "><b><?php echo $randbid1_rows['licitacao']; ?>€</b></span></a></div><br /><?php } ?>

    <?php 	$randbid1 = new leiloes ();
	$randbid1_row = $randbid1-> Randbid1();
		
	while($randbid1_rows= $randbid1_row->fetch_array(MYSQLI_ASSOC)){ ?>   
     <a href="bid.php?cod_bid=<?php echo $randbid1_rows['cod_leilao']; ?>">
     <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $randbid1_rows['foto_leilao']; ?>); position:absolute; left:65%; top:20%; border-radius:0.2em; width:13%; height:36%;"></div></a>
    <a href="bid.php?cod_bid=<?php echo $randbid1_rows['cod_leilao']; ?>">
    <div style="position:absolute; line-height:150%;  width:20%; top:20%; left:79%;">
    <span style=" font-size:1.5em;"><?php echo $randbid1_rows['nome']; ?></span><br />
         <span style=" font-size:1.2em; color:#3399ff;"><b><?php echo $randbid1_rows['licitacao']; ?>€</b></span></div></a><?php } ?>
    
     <?php 	$randbid1 = new leiloes ();
	$randbid1_row = $randbid1-> Randbid1();
		
	while($randbid1_rows= $randbid1_row->fetch_array(MYSQLI_ASSOC)){ ?>   
     <a href="bid.php?cod_bid=<?php echo $randbid1_rows['cod_leilao']; ?>">
     <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $randbid1_rows['foto_leilao']; ?>); position:absolute; left:65%; top:62%; border-radius:0.2em; width:13%; height:36%;"></div></a>
    <a href="bid.php?cod_bid=<?php echo $randbid1_rows['cod_leilao']; ?>">
    <div style="position:absolute; line-height:150%;  width:20%; top:62%; left:79%;">
    <span style=" font-size:1.5em;"><?php echo $randbid1_rows['nome']; ?></span><br />
         <span style=" font-size:1.2em; color:#3399ff;"><b><?php echo $randbid1_rows['licitacao']; ?>€</b></span></div></a><?php } ?>
      
    </div>

</body>
</html>