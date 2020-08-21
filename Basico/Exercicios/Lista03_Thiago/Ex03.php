<?php

$idade = 20;
$nome = "Valeria";
	function voto($variavel,$variavel2){
	echo "O nome é ".$variavel2." e a idade é ".$variavel."</br>";
	if($variavel <16){
	echo "Não pode votar";
	}else if($variavel >=16 && $variavel <18){
	echo "O voto é facultativo";
	}else if($variavel >=18 && $variavel <=65){
	echo "O voto é obrigatorio";
	}else if ($variavel >65){
	echo "O voto é facultativo";
	}

	}
	voto ($nome,$idade);
	
?>