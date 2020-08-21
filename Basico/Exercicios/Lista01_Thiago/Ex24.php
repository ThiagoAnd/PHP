<?php
$numero1 = 5;
$numero2 = 0;
$operacao = 4;
if (($numero1 < 0)||($numero2 <0)){
	echo "Os numeros tem que ser positivos.";
}else{
	echo "Os numeros escolhidos são: ".$numero1." e ".$numero2;
	switch($operacao){
		case 1:
			echo "</br></br>Operação escolhida: SOMA";
			echo "</br>Resultado da soma: ".($numero1 + $numero2);
		break;
		case 2:
			echo "</br></br>Operação escolhida: SUBTRAÇÃO";
			echo "</br>Resultado da subtração: ".($numero1 - $numero2);
		break;
		case 3:
			echo "</br></br>Operação escolhida: MULTIPLICAÇÃO";
			echo "</br>Resultado da multiplicação: ".($numero1 * $numero2);
		break;
		case 4:
			echo "</br></br>Operação escolhida: DIVISÃO";
			if($numero2 == 0){
				echo "</br>Não pode ser dividido por zero";
			}else{
				echo "</br>Resultado da divisão: ".($numero1 / $numero2);
			}
		break;
		default:
		echo "</br>Opção invalida.";
	}
	
}







?>