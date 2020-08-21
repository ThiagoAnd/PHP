<?php

	function verificarNumero($num){
		if($num % 2 == 0){
			echo "O numero é divisivel por 2</br>";
			$flag = 1;
		}
		if($num % 5 == 0){
			echo "O numero é divisivel por 5</br>";
			$flag = 1;
		}
		if($num % 10 == 0){
			echo "O numero é divisivel por 10</br>";
			$flag = 1;
		}
		if (empty($flag)){
			echo "O numero não é divisivel nem por 10, nem por 5 ou por 2</br>";
		}
	}

	$numero = 3;

	verificarNumero($numero);

?>