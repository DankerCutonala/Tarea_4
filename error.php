<?php 
session_start();
if(!isset($_SESSION['codigo'])){
	header('Location: sesion.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Estilos.css" type="text/css"/> 
		<link href='error.ico' rel='shortcut icon' type='image/x-icon'/>
    </head>
    <body>
	<center>
	  <fieldset style="width:550px;">
      <legend> <h2> Error </h2> </legend> <br/>
	  
	  <DIV ALIGN=left>
	  <center>
	Los datos no son correctos<br/>
	presione el boton para volverlo a intentarlo<br/>
	<div>
<form method="post" action="sesion.php">
<br/>
      <br/>
      </DIV>

   <input type="submit" value="Reintentar" />

</form>

</div> 
</center>
     </fieldset>
	 
	 </center>     
 </body>
</html>