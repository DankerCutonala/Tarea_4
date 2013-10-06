<!DOCTYPE html>
<html>
  <head>
   <link rel="stylesheet" href="Estilos.css" type="text/css"/>
  
  </head>
  <body>
    
<?php
    $Codigo = $_POST['txtCodigo'];
    $Pass = $_POST['txtPass'];
   
	if($Codigo == 100 && $Pass == "udg"){
		session_start();
		$_SESSION["codigo"] = $Codigo;
		$_SESSION["pass"] = $Pass;
		
	header('Location: bienbenido.php');
	}else{
	
	header('Location: error.php');
	
	}
    ?>
	

	
</body>
</html