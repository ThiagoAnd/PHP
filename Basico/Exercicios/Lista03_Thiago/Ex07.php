<?php


function calculo ($num1,$num2,$operacao){
	
	switch($operacao){
		
	case "+":
		$resultado = $num1 + $num2;
	break;
	case "-":
		$resultado = $num1 - $num2;
	break;
	case "*":
		$resultado = $num1 * $num2;
	break;
	case "/":
		$resultado = $num1 / $num2;
	break;
	default:
		echo "Erro no resultado";
	}
	
	echo "O resultado da operação (".$num1." ".$operacao." ".$num2.") é: ".$resultado;
	
}








?>