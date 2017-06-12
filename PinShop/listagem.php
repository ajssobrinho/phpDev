<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Carrinho de Compras</title>
</head>

<body bgcolor="#62B26B">
<div align="center">

<?php
include ('connect_db.php');

//*********************************************************************
// CONFIGURAÇÃO DE BANCO DE DADOS
//*********************************************************************

$con = mysql_connect($servidor_bd,$username_bd,$password_bd);
$bd  = mysql_select_db($base_dados);
?>

<table cellSpacing=1 cellPadding=0 width="50%" align=center border=0>
<tr>
 <td>
     <?
 //*********************************************************************
 // GERA A INSTRUÇÃO SQL E CHAMA A FUNÇÃO PARA GERAR AS COLUNAS
 //*********************************************************************
 $sql = "SELECT * FROM pins ORDER BY RAND() LIMIT 0,4";
 GeraColunas(2, $sql)
 ?>
</td>
</tr>
</table>
<?


//*********************************************************************
// FUNÇÃO: GERACOLUNAS
// Parametros:
//  $pNumColunas (int)   > Quant. de colunas para distribuição
//  $pQuery    (string) > Query de registros
//*********************************************************************


function GeraColunas($pNumColunas, $pQuery) {
$resultado = mysql_query($pQuery);
echo ("<table width='100%' border='0'>\n");
 for($i = 0; $i <= mysql_num_rows($resultado); ++$i) {

 for ($intCont = 0; $intCont < $pNumColunas; $intCont++) {
  $linha = mysql_fetch_array($resultado);
  if ($i > $linha) {
   if ( $intCont < $pNumColunas-1) echo "</tr>\n";
   break;
  }

  $cod_pin = $linha[0];
  $nome = $linha[2];
  $foto = $linha[5];
  $preco = $linha[4];

  if ( $intCont == 0 ) echo "<tr>\n";
  echo "<td>";
  // Aqui você inclui o conteudo
  echo "<table width='266' border='0' cellspacing='0' cellpadding='0'>";
  echo "<tr>";
  echo "<td width='250' height='141' valign='middle'><div align='center'><img src=".$foto." border='0' width='160' height='160' /></div></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>";
  echo "<table width='92%' border='0' align='center' cellpadding='0' cellspacing='0'>";
  echo "<tr>";
  echo "<td><div align='center' style='font-size:10px;font-family:Verdana'><strong><a href='carrinho.php?cod=".$cod_pin."&acao=incluir'>".$nome."</a></strong></div><strong><div align='center'><font color='#FFFFFF' size='4px'> ".$preco."€ </font></strong></div></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><div align='center' style='font-size:10px;font-family:Verdana'><a href='carrinho.php?cod=".$cod_pin."&acao=incluir'><img height='38px' width='120px' src='images/button/adicionar.png' border='0'/></a></div><br></td>";
  echo "</tr>";
  echo "</table>";
  echo "</td>";
  echo "</tr>";
  echo "</table>";
  
   // Aqui é o final do conteudo
  echo "</td>";

  if ( $intCont == $pNumColunas-1 ) {
   echo "</tr>\n";
  } else { $i++; }
 }

 }
echo ('</table>');
}

?>
</div>
</body>
</html>