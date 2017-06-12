<?php
	
session_start();
if (isset($_SESSION['cod_user'])==""){ 
echo '<script>alert("Ups! Tens de iniciar sessão.")</script>';
   echo '<meta http-equiv="refresh" content="1; url=index.php" />';  
exit;}

else { 
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="http://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">
<link href="loading.css" type="text/css" rel="stylesheet" />
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Apagar alerta</title>
</head>

<body>

<?php

 include('connect_db.php');
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['cod_pin']) && is_numeric($_GET['cod_pin']))
 {
 // get id value
 $cod_ttd = $_GET['cod_pin'];
 
if(!$cod_ttd == NULL){
 // delete the entry
 $result = mysql_query("DELETE FROM wishlist WHERE cod_pin=$cod_ttd")
 or die(mysql_error()); 
 } 
 
 // redirect back to the view page
echo'<script> history.back()</script>';

?>
	 
	 <?php
//echo'<script>history.back()/script>';
				}
			
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
	 
	 echo '<meta http-equiv="refresh" content="1; url=descobrir.php" />';   
}

?></body></html>
<?php
}
?>