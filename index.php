<?php
	function formataValor($valor){
		$valor_formatado = $valor;
		if ($valor >= 1000000000){ // Bilhão
			$before_colon = substr($valor,0,-9);
			if (substr($valor,-9) == '000000000'){
				$valor_formatado = $before_colon;
				$valor_formatado .= " bi";
			} else if (substr($valor,-6) == '000000'){
				$decimal = substr($valor,-9,3);
				$decimal = rtrim($decimal,"0"); // Remove zeros a direita		
				$valor_formatado = "{$before_colon},{$decimal}";
				$valor_formatado .= " bi";
			} else {
				$valor = (float)$valor;
				$valor_formatado = number_format($valor,0,",",".");
			}
		} else if ($valor >= 1000000){ // Milhão
			$before_colon = substr($valor,0,-6);
			if (substr($valor,-6) == '000000'){
				$valor_formatado = $before_colon;
				$valor_formatado .= " mi";
			} else if (substr($valor,-3) == '000'){
				$decimal = substr($valor,-6,3);
				$decimal = rtrim($decimal,"0"); // Remove zeros a direita
				$valor_formatado = "{$before_colon},{$decimal}";
				$valor_formatado .= " mi";
			} else {
				$valor = (float)$valor;
				$valor_formatado = number_format($valor,0,",",".");
			}
		} else {
			$valor = (float)$valor;
			$valor_formatado = number_format($valor,0,",",".");
		}
		return $valor_formatado;
	}
	
	$valores = array(1000000,1100000,1110000,1111000,1010000,1001000,1101000,1000000000,1100000000,1110000000,1111000000,1010000000,1001000000,1101000000);
	foreach ($valores as $valor){
		echo '// ' . number_format($valor,0,",",".") . ':<br>';
		echo 'echo formataValor('.$valor.');<br>';
		echo '// ' . formataValor($valor) . '<br>';
		echo '<br>';
	}
?>