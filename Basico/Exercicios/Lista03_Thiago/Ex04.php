<?php
$numero = 4;


function verificarPar ($variavel){
	if($variavel % 2 == 0){
		echo "Brasil,Alemanha,Costa Rica,Venezuela e Argentina";
	}else if ($variavel % 2 == 1 ){
		echo "Real Madrid,Corinthians,Athletico,São Paulo,Atletic de Bilbao";
	}
}

verificarPar($numero);

?>