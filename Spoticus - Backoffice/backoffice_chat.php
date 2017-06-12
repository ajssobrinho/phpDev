<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style/s3.style.backoffice.css" rel="stylesheet" type="text/css">
<title>Spoticus - Back-office</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script type="text/javascript">
var isScrolling = false;
var lastScrollPos = 0;
var counter = 0;
$(function() {

    $('#message_window').on('scroll', function() {
        isScrolling = true;
        lastScrollPos = this.scrollTop;
    });


    refreshTimer = setInterval(refreshContent, 1000);

    function refreshContent() {
        if (!isScrolling) {
            $('#message_window').scrollTop(lastScrollPos);
        }
        isScrolling = false;
    }

});​
</script>

</head>
<?php
session_start();

if(!isset($_SESSION['cod_user']) || $_SESSION['admin']=='N'){
	?>
	<script type="text/javascript">
	window.location = "ups?e=unf";
	</script>
	<?php
}else{
 require_once('classes/include.classes.php');
 include('sidebar_backoffice.php');
 $backoffice_inst = new backoffice();

if(isset($_POST['enviar'])){
	$nome_user= $_SESSION['nome'];
	$msg=$_POST['mensagem'];
		$backoffice_inst->insere_msg($nome_user, $msg);
}


?>

<body>


<div id="chat_window" style="overflow:hidden;" >
   <div id="message_window" style="margin-left:2.5%; margin-top:2.5%; width:95%; height:90%;  overflow-y: scroll;">







<?php
	$listar_mensagens= $backoffice_inst->lista_msg();

	while($listar_mensagens_li=$listar_mensagens->fetch_array(MYSQLI_BOTH)){

		$nome_user= $listar_mensagens_li['nome_user'];
		$data_un= $listar_mensagens_li['data_add'];

		$mensagem = $listar_mensagens_li['mensagem'];

			if($nome_user == $_SESSION['nome']){
				$data= date('H:i',strtotime($data_un));
?>
				<div class="message_me" >
				<span style="text-align:right; margin-right:2%; margin-top:2%; float:right; clear:both; width:200pt;"><b><?php echo $data; ?> </b></span>
				</br>
				<span style="margin-right:3%; margin-left:3%; margin-bottom:3%; margin-top:0.5%; float:right; clear:both;"> <?php echo $mensagem; ?> </span></br></br>
				</div>
				</br></br>
<?php
			}else{
				$nome_user= html_entity_decode($nome_user);
				$data= date('H:i',strtotime($data_un));
				?>

				<div class="message_other" >
				<span style="margin-left:2%; margin-top:2%; float:left; clear:both; width:200pt;"><b> <?php echo $nome_user; ?> | <?php echo $data; ?></b></span>
				</br>
				<span style="margin-left:2%; margin-top:0.5%; float:left; clear:both;" > <?php echo $mensagem; ?> </span></br></br>

				</div>


			<?php
			}

	}




 ?>
    </div>



	<div id="msg_sub_form" style="width:100%; background-color:#c4c4c4; z-index:10;">
	   <form action="backoffice_chat.php" method="post" id="enviar">
	      <input style="margin-left:2%;" required="required" name="mensagem" type="text" size="43"; placeholder="Escreva a sua mensagem">
	      <input style="margin-left:0.5%;" name="enviar" Value="Enviar" type="submit">
	   </form>
	</div>

</div>


<?php if($_SESSION['cod_user'] == 2){   ?>

<div id="online_users">

</div>



<?php } ?>



</body>


</html>
<?php } ?>
