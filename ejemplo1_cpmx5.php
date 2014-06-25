<!DOCTYPE html>
<html>
	<head>
		<title>Ejemplo de un Formulario - URL Rewrite</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
		<div><img class="logo" src="http://www.comunidaddephp.org/librerias/temas/2012/image/logo.png" title="Comunidad de PHP"/></div>
		<div>
			
			<form action="ejemplo1_cpmx5.php" method="GET">
				<input type="text" id="mensaje" name="mensaje" />
				<input type="submit" value="Enviar"/>
			</form>
			
			<?php
			if (isset($_GET['mensaje'])){
					echo "".$_GET['mensaje'];
				}
			?>
		</div>
	</body>
</html>
