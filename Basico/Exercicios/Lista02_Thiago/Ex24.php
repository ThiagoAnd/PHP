<?php
	$vetor = array();

	for ($i = 0; $i<15;$i++){
		$vetor[$i] = $i+1;
	}
	foreach ($vetor as $indice => $conteudo){
		echo "Indice: ".$indice." Conteudo: ".$conteudo."</br>";	
	}
?>