<?php
//Vetor

//Como declarar um array  ->> Nome da variavel recebe array (itens);
	$vetor = array ("Thiago","Bruno","Matheus");
//VAR DUMP Ver toda e qualquer estrutura de qualquer variavel, mostra o conteudo da variavel...
//var_dump($vetor);
	
	//echo $vetor [2];// indice []
	//Quando vc quer imprimir os dados
	foreach ($vetor as $conteudooo){
		echo $conteudooo."</br>";
	}
		foreach($vetor as $indicee => $conteudu){
			echo $indicee." - ".$conteudu."</br>";
		}
	

?>