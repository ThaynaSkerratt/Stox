<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php include ('../classes/class_estocador.php');?>
    	<?php 
    		$estocador = new Estocador();
    		$st = $estocador->receberLote("Leite Qualitá", 5, '2012-02-02', "Friboi");
    		// ESSE ACENTO NO QUALITÁ FAZ A CONSULTA FALHAR(NÃO SEI PORQUÊ, CONSERTE ISSO)
    		// SE QUISER TESTAR AS FUNÇÕES, É SÓ TIRAR O ACENTO
    		
    		if($st == ERR_BARCODE_NOT_FOUND)
    			echo "Código de barras do produto não encontrado";
    		else if($st == ERR_SUPPLIER_ID_NOT_FOUND)
    			echo "Id do fornecedor não encontrado";
    		else if($st == ERR_SQL)
    			echo "Erro na string SQL";
    	?>
	</body>
</html>