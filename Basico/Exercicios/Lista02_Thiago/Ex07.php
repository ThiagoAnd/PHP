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

	function calculoComRetorno ($num1,$num2,$operacao){
		
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
		
		return $resultado;	
	}

	function inserirNome ($nome1,$nome2,$nome3){
		echo "O 1° nome é: ".$nome1." da Silva Sauro</br>";
		echo "O 2° nome é: ".$nome2." da Silva Sauro</br>";
		echo "O 3° nome é: ".$nome3." da Silva Sauro</br>";
	}


?>