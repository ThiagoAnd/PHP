<?php
/*Operações matematicas*/

	$n1 = 10;
	$n2 = 2;

//Adição

	$totalAdicao = $n1 + $n2;
		echo "<b>A adição foi: </b>".$totalAdicao;

//Subtração

	$totalSubtracao = $n1 - $n2;
		echo "</br></br>";
		echo "<b>A subtração foi: </b>".$totalSubtracao;

//Divisão

	$totalDivisao = $n1 / $n2;
		echo "</br></br>";
		echo "<b>A divisão foi: </b>".$totalDivisao;

//Multiplicação

	$totalMultiplicacao = $n1 * $n2;
		echo "</br></br>";
		echo "<b>A multiplicação foi: </b>".$totalMultiplicacao;

//Modulo 

	$numero1 = 13;
	$numero2 = 2;
	$totalModulo = $numero1%$numero2;
	$totalModulo2 = $n1%$n2;
		echo "</br></br>";
		echo "<b>O modulo da divisão do treze é: </b>".$totalModulo;
		echo "</br></br>";
		echo "<b>O modulo da divisão do dez é: </b>".$totalModulo2;

//Potenciação

	$totalPotencia = pow($n1,$n2);
		echo "</br></br>";
		echo "<b>O total da potência é: </b>".$totalPotencia;
		
//Operadores de comparação

	//Igual

		$n1 == $n2; 
		
	//Identico

		$n1 === $n2;

	//Diferente

		$n1 != $n2;
		$n1 <> $n2;

	//Maior que

		$n1 > $n2;

	//Menor que

		$n1 < $n2;	

	//Maior ou igual que

		$n1 >= $n2;

	//Menor ou igual que

		$n1 <= $n2;
	
//Operadores Lógicos

	//	E
	
	$n1 && $n2;
	$n1 AND $n2;
	
	// OU
	
	$n1 || $n2;
	$n1 OR $n2;
 


?>