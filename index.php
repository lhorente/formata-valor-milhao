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
				$pos_zero = strpos($decimal,'0');
				if ($pos_zero !== false){
					$decimal = substr($decimal,0,$pos_zero);
				}			
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
				$pos_zero = strpos($decimal,'0');
				if ($pos_zero !== false){
					$decimal = substr($decimal,0,$pos_zero);
				}
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
	
	$valores = array(1000,1000000,1500000,1250000,1250000000,1000000000);
	foreach ($valores as $valor){
		echo $valor . ": " . formataValor($valor) . "</br>";
	}
?>