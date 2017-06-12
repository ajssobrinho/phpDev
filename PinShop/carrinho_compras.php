<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if (!isset($_SESSION['cod_user'])==""){ 

include('topbar.php');
include('connect_db.php');
include('consultas.php');
include('script.php');

// Recuperamos os valores passados por parametros
if(isset($_GET['acao'])){
$acao = $_GET['acao']; } else{ $acao = ''; }

if(isset($_GET['cod'])){
$cod =  $_GET['cod']; }
$soma_carrinho = 0;

// Verificamos se a acao é igual a incluir
if ($acao == "incluir")
{    
    // Verificamos se cod do produto é diferente de vazio
    if ($cod != '')
    {
        // Se for diferente de vazio verificamos se é numérico
        if (is_numeric($cod))
        {    
            // Tratamos a variavel de caracteres indevidos
            $cod = addslashes(htmlentities($cod));

            // Verificamos se o produto referente ao $cod já está no carrinho para o session id correnpondente
            $query_rs_carrinho = "SELECT * FROM  carrinho WHERE carrinho.cod_pin = '".$cod."'  AND carrinho.sessao = '".$_SESSION['cod_user']."'";
            $rs_carrinho = mysql_query($query_rs_carrinho, $ligacao) or die(mysql_error());
            $row_rs_carrinho = mysql_fetch_assoc($rs_carrinho);
            $totalRows_rs_carrinho = mysql_num_rows($rs_carrinho);

            // Se o total for igual a zero é sinal que o produto ainda não está no carrinho
            if ($totalRows_rs_carrinho == 0)
            {
                // Aqui pegamos os dados do produto a ser incluido no carrinho
                $query_rs_produto = "select * from pins where cod_pin = '".$cod."'";
                $rs_produto = mysql_query($query_rs_produto, $ligacao) or die(mysql_error());
                $row_rs_produto = mysql_fetch_assoc($rs_produto);
                $totalRows_rs_produto = mysql_num_rows($rs_produto);

                // Se total for maior que zero esse produto existe e então podemos incluir no carrinho
                if ($totalRows_rs_produto > 0)
                {
                    $registro_produto = mysql_fetch_assoc($rs_produto);
                    // Incluimos o produto selecionado no carrinho de compras
                    $add_sql = "INSERT INTO carrinho (cod_carrinho, cod_pin, nome, preco, qtd, sessao) 
                   VALUES ('','".$row_rs_produto['cod_pin']."','".$row_rs_produto['nome']."','".$row_rs_produto['preco']."','1','".$_SESSION['cod_user']."')";
                   $rs_produto_add = mysql_query($add_sql, $ligacao) or die(mysql_error());
                }
            }
        }
    }
}

// Verificamos se a acao é igual a eliminar
if ($acao == "eliminar")
{
    // Verificamos se cod do produto é diferente de vazio
    if ($cod != '')
    {
        // Se for diferente de vazio verificamos se é numérico
        if (is_numeric($cod))
        {    
            // Tratamos a variavel de caracteres indevidos
            $cod = addslashes(htmlentities($cod));
            // Verificamos se o produto referente ao $cod  está no carrinho para o session id correnpondente
            $query_rs_car = "SELECT * FROM carrinho WHERE cod_pin = '".$cod."'  AND sessao = '".$_SESSION['cod_user']."'";
            $rs_car = mysql_query($query_rs_car, $ligacao) or die(mysql_error());
            $row_rs_carrinho = mysql_fetch_assoc($rs_car);
            $totalRows_rs_car = mysql_num_rows($rs_car);

            // Se encontrarmos o registro, excluimos do carrinho
            if ($totalRows_rs_car > 0)
            {
                $sql_carrinho_eliminar = "DELETE FROM carrinho WHERE cod_pin = '".$cod."' AND sessao = '".$_SESSION['cod_user']."'";    
                $exec_carrinho_eliminar = mysql_query($sql_carrinho_eliminar, $ligacao) or die(mysql_error());
            }
        }
    }
}

// Verificamos se a ação é de actualizar a quantidade do produto
if ($acao == "actualiza")
{
    $quant = $_POST['qtd'];
        // Se for diferente de vazio verificamos se é numérico
        if (is_array($quant))
        {    
            // Aqui percorremos o nosso array
            foreach($quant as $cod => $qtd)
            {
                // Verificamos se os valores são do tipo numerico
                if(is_numeric($cod) && is_numeric($qtd))
                {
                    // Fazemos o update nas quantidades dos produtos
                    $sql_actualiza = "UPDATE carrinho SET qtd ='$qtd' WHERE  cod_pin = '$cod' AND sessao = '".$_SESSION['cod_user']."'";
                    $rs_actualiza = mysql_query($sql_actualiza, $ligacao) or die(mysql_error());
                }
            }
        }

}
?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" type="text/css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-latest.js"></script>

<title>CMYK Pin // Admin</title>
</head>

<body>


<div class="menu_descobre">
<button type="submit" class="botao_form" onclick="location.reload();location.href='descobrir.php'" style="border:none; width:125px; background:transparent;"><img style="position:relative; top:1px;" height="15" src="images/ico/todos_os_pins.png">&nbsp;Todos os Pins</button>
<form action="descobrir.php" style="display: inline;" method="post">
<button type="submit" value="mais_vendidos" class="botao_form"  id="mais_vendidos" name="mais_vendidos" style="border:none; width:125px; background:transparent;"><img style="position:relative; top:1px;" height="15" src="images/ico/mais_vendidos.png">&nbsp;Mais vendidos</button>&nbsp;&nbsp;
<select style="font-size:16px; 	font-family:'Source Sans Pro', Arial; background-color:#444444; border:none; border-radius:0.2em; color:white; width:150px;" onChange="this.form.submit();" name="order_post">
   <option>Ordernar por</option>
    <option value="order_nome" >Nome</option>
    <option value="order_preco" >Preço</option>
   </select>&nbsp;&nbsp;</form>	
   <form action="descobrir.php" style="display:inline; position:absolute; right:5px;" method="post">
   <input type="text" class="search_form" style="font-size:16px;" id="pesquisa_pin" name="pesquisa_pin"  placeholder="Pesquisar pin..." />
    <input type="image" src="images/ico/search.gif" style="position:relative; top:4px;" width="22" height="22">

</form>


</div>
<div id="main_descobre" class="main_descobre">
<form action="carrinho_compras.php?cod=<?= $row_rs_produto_carrinho['cod_pin']?>&acao=actualiza" method="post">
<table width="100%" class="table_admin" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="36%" scope="col"><div align="left">Pin</div></th>
    <th width="22%" scope="col">Preço</th>
    <th width="13%" scope="col">Quantidade</th>
    <th width="14%" scope="col">Sub-total</th>
    <th width="15%" scope="col"> </th>
  </tr>
  <tr><td colspan="5"><hr /></td></tr>

  <?
  $sql_meu_carrinho = "SELECT * FROM carrinho WHERE  sessao = '".$_SESSION['cod_user']."' ORDER BY nome ASC";
  $exec_meu_carrinho =  mysql_query($sql_meu_carrinho, $ligacao) or die(mysql_error());
  $qtd_meu_carrinho = mysql_num_rows($exec_meu_carrinho);
  
  if ($qtd_meu_carrinho > 0)
  {
      $soma_carrinho = 0;
      while ($row_rs_produto_carrinho = mysql_fetch_assoc($exec_meu_carrinho))
    {
        $soma_carrinho += ($row_rs_produto_carrinho['preco']*$row_rs_produto_carrinho['qtd']);
  ?>
    <tr>
  
    <td><span>
      <?=$row_rs_produto_carrinho['nome']?>
    </span></td>
    <td><div align="center"><?= $row_rs_produto_carrinho['preco']; echo' €'; ?></div></td>
    <td><div align="center"><input class="text_form" style="background-image:url(images/topbar/div_top.png);" type"text" size="2" name="qtd[<?=$row_rs_produto_carrinho['cod_pin']?>]" value="<?=$row_rs_produto_carrinho['qtd']?>" /></div></td>
    
    <td><div align="center" ><?= $row_rs_produto_carrinho['preco']*$row_rs_produto_carrinho['qtd']; echo' €'; ?></div></td>
    <td><div align="center"><a href="carrinho_compras.php?cod=<?= $row_rs_produto_carrinho['cod_pin']?>&acao=eliminar"><div class="btn_funcao"><img src="images/ico/delete_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Apagar</div></a></div></td>
  </tr>
   
  
    <?
  }
}
  ?>
    <tr>
      <td colspan="3"><div align="right"><strong>Total:</strong>  </div>        <div align="right"></div>        <div align="right"></div></td>
      <td><div align="center">
      <?=$soma_carrinho." €"; ?></div></td>
      <td> </td>
    </tr>
    <tr>
      <td colspan="5"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th width="33%" height="60" scope="col"><a href="descobrir.php"><div class="btn_funcao"><img src="images/ico/pins_comprados.png" style="position:relative; top:1px;" height="12" />&nbsp;Continuar a comprar</div></a></th>
          <th width="33%" scope="col"> </th>
          <th width="34%" scope="col"><label>
    <button type="submit" value="img_actualizar" class="botao_form"  id="img_actualizar" name="img_actualizar" style="border:none; width:115px;; background:transparent;"><div class="btn_funcao"><img src="images/ico/topbar/compras_vendas.png" style="position:relative; top:1px;" height="12" />&nbsp;Atualizar</div></button>          </label></th>
        </tr>
      </table></td>
      </tr>
    <tr><td><span style="text-align-last:right"><a href="#" id="checkout-show" onClick="showHidePin('checkout');return false;"><div class="btn_funcao"><img src="images/ico/check_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Continuar</div></a></span>
</td></tr>
</table>
</form>
</div>
<div id="checkout" style="font-size:18px; height:auto; width:40%;" class="login_div">
<a href="#" id="checkout-show" onClick="showHidePin('checkout');return false;"><div style="position:absolute; right:2%; top:3%;"><div class="btn_funcao" onClick="showHidePin('<?php echo $dados2['cod_user']; ?> ');return false;"><img src="images/ico/close_ico.png" style="position:relative; top:1px;" height="12" />&nbsp;Fechar</div></a></div>
<?php include('check_out.php'); ?></div>
</body>
</html>
<?php } else {	
		echo'<script> history.back()</script>';
	exit; } ?>
