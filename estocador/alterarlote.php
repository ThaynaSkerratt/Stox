<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php include ('../classes/class_estocador.php');?>
    	<?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $estocador = new Estocador();
                $st = $estocador->alterarLote($_POST);
                echo $st;
            }
    	?>
        <form method="post" action="">
            <input type="text" name="cod_barras"><br>
            <input type="text" name="qtd"><br>
            <input type="date" name="validade"><br>
            <input type="text" name="fornecedor">
            <input type="submit" value="ok">
        </form>
	</body>
</html>