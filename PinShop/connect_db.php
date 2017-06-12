<?php

$servidor_bd='localhost';
$username_bd='root';
$password_bd='cm';
$base_dados='cmyk_pin';

$ligacao = mysql_connect($servidor_bd, $username_bd, $password_bd)
     or die ("Não é possível ligar aos servidor MYSQL");
mysql_select_db($base_dados)
     or die ("Não é possível aceder à base de dados CMYK PIN");

?>