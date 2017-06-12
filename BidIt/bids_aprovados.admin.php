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

<a href="hoje.php"><div align="center" id="novidades" style="top:22%;" class="novidades_side"><span style="font-size:2em; color:white; position:relative; top:30%; line-height:100%; font-family:'Pacifico',Arial;">Novidades<br />de <?php
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


<div id="feature_1" style="overflow-y:scroll;" class="favoritos_all">

<span style="font-size:1.7em;"><b>Bids aprovados</b></span><hr />

<span style="line-height:40%;">
<?php 	
	$leiloes = new leiloes ();
	$dado = $leiloes->verLeiloesAtivos();

	while($dados= $dado->fetch_array(MYSQLI_ASSOC)){ ?>
	<div class="bid_lista" >
    <span style="position:relative; line-height:150%; width:70%; top:-50%; left:27%;">
       <span style="line-height:100%;  font-size:1.8em;"><a href="#"><?php echo $dados['nome']; ?></a></span><br /><span style="font-size:1em;"><a href="#"><?php echo $dados['bids']; ?> licitações</a></span><br />
       <span style="font-size:1.3em;"><a style="color:#6699ff;" href="#"><b><?php echo $dados['preco']; ?>€</b></a></span>
       </span>
<a href="leiloes_eliminar.php?cod_leilao=<?php echo $dados['cod_leilao']; ?>"><div class="btn_licitar_small" align="center" style="color:white; background-color:#3399ff; font-size:1em; position:relative; left:400px; line-height:100%;"><img src="src/topbar/delete_ico.png" height="11" />&nbsp;&nbsp;Eliminar bid</div></a>
       <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(<?php echo $dados['foto_leilao']; ?>); position:relative; top:-80px; border-radius:0.2em; width:25%; height:100%;"> 
</div>
     </span>    
    </div>
    <br /><?php } ?>
    </span>
</div>

<div class="pub_side_cat" style="background-image:url(src/pub/peres_classes.jpg); top:55%;"><span style="position:relative; color:white; padding-left:5px; background-color:#3399ff; border-bottom-left-radius:0.2em; -webkit-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    -moz-box-shadow: 0px 1px 1px -1px rgb(0,0,0);
    box-shadow: 0px 1px 1px -1px rgb(0,0,0); border-bottom-right-radius:2em; padding-right:15px; font-size:0.9em;">PUB</span></div>
       
      <div class="bids_relacionados" style="top:105%; width:60%;"><span style="font-size:1.4em; position:relative; top:7px;">&nbsp;Vê também...</span>
    <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/Denim-Jacket-For-Women-Fashion.jpg); position:absolute; top:20%; border-radius:0.2em; width:30%; height:80%;"></div>
    <span style="position:absolute; line-height:100%; font-size:2.5em; width:30%; top:20%; left:32%;"><a href="#">Casaco de ganga</a></span>
     <span style="position:absolute; line-height:100%; font-size:1.5em; color:#3399ff; width:37%; top:65%; left:32%;"><b>2,99€</b></span><br />

    
     <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/dress.jpg); position:absolute; left:65%; top:20%; border-radius:0.2em; width:13%; height:36%;"></div><span style="position:absolute; line-height:100%; font-size:1.5em; width:20%; top:20%; left:79%;"><a href="#">Vestido vermelho</a></span>
         <span style="position:absolute; line-height:100%; font-size:1.2em; color:#3399ff; width:37%; top:45%; left:79%;"><b>13,92€</b></span>
    
      <div class="img_opacity" style="-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	background-position:center;
	background-repeat: no-repeat;
	background-image:url(src/foto_leilao/testes/criancas.jpg); position:absolute; left:65%; top:62%; border-radius:0.2em; width:13%; height:36%;"></div><span style="position:absolute; line-height:100%; font-size:1.5em; width:20%; top:62%; left:79%;"><a href="#">Casaco de criança verde</a></span>
         <span style="position:absolute; line-height:100%; font-size:1.2em; color:#3399ff; width:37%; top:87%; left:79%;"><b>19,48€</b></span>
      
    </div>  
</body>
</html>