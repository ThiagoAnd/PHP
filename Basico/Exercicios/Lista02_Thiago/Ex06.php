<?php

	$numero1 = 4;
	$numero2 = 2;

	function soma($num1,$num2){
		$soma = $num1 + $num2;
		
		switch ($soma){
			case "0":
				echo "A soma dos números ".$num1." e ".$num2." é: ZERO";
			break;
			case "1":
				echo "A soma dos números ".$num1." e ".$num2." é: UM";
			break;
			case "2":
				echo "A soma dos números ".$num1." e ".$num2." é: DOIS";
			break;
			case "3":
				echo "A soma dos números ".$num1." e ".$num2." é: TRÊS";
			break;
			case "4":
				echo "A soma dos números ".$num1." e ".$num2." é: QUATRO";
			break;
			case "5":
				echo "A soma dos números ".$num1." e ".$num2." é: CINCO";
			break;
			case "6":
				echo "A soma dos números ".$num1." e ".$num2." é: SEIS";
			break;
			case "7":
				echo "A soma dos números ".$num1." e ".$num2." é: SETE";
			break;
			case "8":
				echo "A soma dos números ".$num1." e ".$num2." é: OITO";
			break;
			default:
			echo "Numeros fora do intervalo";
		}
	}
	if((($numero1 >= 0) && ($numero2 >= 0)) && (($numero1<=4) && ($numero2 <= 4))){
		soma($numero1,$numero2);	
	}else{
		echo "Os dois numeros tem que estar entre zero e quatro";
	}	
?>