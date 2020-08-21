<?php

	function somar($num1,$num2){
		$soma = $num1 + $num2;
		return $soma;
	}

	function verificarSoma($numero){
		if($numero>12){
			$numero += 6;
		}else{
			$numero -= 5;
		}
		echo "O resultado da operação é: ".$numero;
	}
	
	$numero1 = 6;
	$numero2 = 1;

	verificarSoma(somar($numero1,$numero2));

?>