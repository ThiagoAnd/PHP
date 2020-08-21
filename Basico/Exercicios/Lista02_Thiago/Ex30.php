<?php

	$vetor = array (5,-4,2,1,7,1,1,-6,-7,3);
	$soma = 0;
	
	for ($i = 0; $i < sizeof($vetor);$i++){
		if($vetor[$i] >= 0){
			$soma += $vetor[$i];
		}
	}
	foreach ($vetor as $conteudo){
		echo $conteudo."&nbsp;&nbsp;&nbsp;";
	}
	echo "</br>A soma dos numeros positivos do vetor é: ".$soma;

?>