<!DOCTYPE html>
<html>
	<head>
		<meta charset= "UTF-8">
		<title>Meat y Dairy</title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
   		<link href="css/flat-ui.css" rel="stylesheet">
   		<link href="fancyBox/source/jquery.fancybox.css" type="text/css" rel="stylesheet">
   		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="images/Logo/4.png" rel="shortcut icon" > 
		<link href="css/estilo.css" rel="stylesheet">
		<link href="css/danceEffects.css" rel="stylesheet" type="text/css">
	</head>
	<body>

		<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
		
		<div id="general-container">
			<?php include("templates/encabezado.php"); ?>
			
			<div id="content">
				<?php include("templates/carrusel.php"); ?>	

			</div>
			<?php include("templates/pie.php"); ?>

		</div>
		
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="fancyBox/source/jquery.fancybox.pack.js" ></script>
	<script type="text/javascript" src="js/funcionFancyBox.js"></script>
	<script type="text/javascript" src="js/seleccionadoIndex.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/funcionCarrusel.js"></script>
	<script type="text/javascript" src="js/cambiaContenidoIndex.js"></script>

	</body>
</html>