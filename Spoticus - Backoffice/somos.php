<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style/s3.style.backoffice.css" rel="stylesheet" type="text/css">
<title>Somos - Spoticus</title>

<?php
 require_once('classes/include.classes.php');
 $backoffice_inst = new backoffice();
?>

<body>
   <?php
      $lista_nr_users= $backoffice_inst->lista_nr_users();
   ?>

   <div style='position:absolute;z-index:0;left:0;top:0;width:100%;height:100%'>
     <img src='src/somos.jpg' style='width:100%;height:100%' alt='[]' />
   </div>

   <div style=' position:absolute;z-index:0;left:0;top:0;width:100%;height:100%; background-color:#505050; opacity:0.4;'>

   </div>

   <span style="margin-top:15%; margin-left:39%; position:absolute; z-index: 2; font-size: 5em; font-weight:300; color:#ffffff;"> Já somos </span> <span style="margin-top:20%; margin-left:43%; position:absolute; z-index: 2; font-size: 7em; font-weight:600; color:#ffffff;"><?php printf($lista_nr_users);?></span>



</table>
</div>
</center>
</body>


</html>
