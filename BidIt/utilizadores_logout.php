<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Desfaz todas as variáveis de sessão
session_unset(); 

// Destroi a sessão
session_destroy();
header('location: index.php');

?>

</body>
</html>