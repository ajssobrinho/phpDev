<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Cmyk Pin - Terminar Sessão/title>
</head>
<body>

<?php

if (isset($_SESSION['cod_user'])){
  session_unset(); // Eliminar todas as variáveis da sessão
  session_destroy(); // Destruir a sessão

echo'<script>window.location = "index.php";
</script>';

exit; }
?>
</body>
</html>