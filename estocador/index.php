<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php include ('../classes/class_estocador.php'); ?>
    	<?php 
    		$estocador = new Estocador();
    		$estocador->receiveBatch();
    	?>
	</body>
</html>