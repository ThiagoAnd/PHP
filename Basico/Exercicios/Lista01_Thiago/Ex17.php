<?php
$numero1 = 0;
$numero2 = 4;
$operacao = "/";

echo "Os numeros escolhidos são: ".$numero1." e ".$numero2."</br></br>";
if ($operacao == "+"){
	echo "O resultado da soma é ".($numero1 + $numero2);
}else if ($operacao == "-"){
	echo "O resultado da subtração é ".($numero1 - $numero2);
}else if ($operacao == "*"){
	echo "O resultado da multiplicação é ".($numero1 * $numero2);
}else if ($operacao == "/"){
	if($numero2 == 0){
	echo "Não pode ser dividido por zero";
	}else{
	echo "O resultado da divisão é ".($numero1 / $numero2);
	}
}

?>