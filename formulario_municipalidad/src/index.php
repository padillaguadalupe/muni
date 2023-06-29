<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Suscribete!</h1>
    	<input type="text" name="name" placeholder="Nombre y Apellido">
    	<input type="email" name="email" placeholder="Email">
		<input type="text" name="edad" placeholder="Edad" maxlength="3" tabindex="5" class="input-2" onkeypress="return soloNumeros(event);">
		<input type="text" name="dni" id="dni" placeholder="DNI" maxlength="8" tabindex="5" class="input-2" onkeypress="return soloNumeros(event);">
        <input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
		<?php
		include("mostrar.php");
		?>
</body>
</html>
