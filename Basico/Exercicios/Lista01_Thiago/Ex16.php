<?php
$capital = 1050.85;
echo "O valor aplicado é: ".$capital."</br></br>";
if ($capital < 1000){
	echo "O banco não aceita investimento inferior a 1000 R$.";
}else if(($capital > 1000) && ($capital < 5000)){
	$rentabilidade = $capital*0.10;
	echo "</br>O investimento possui rentabilidade de 10% a.a.";
}else if(($capital > 5000) && ($capital < 50000)){
		$rentabilidade = $capital*0.13;
	echo "</br>O investimento possui rentabilidade de 13% a.a.";
}else if(($capital > 50000) && ($capital < 250000)){
		$rentabilidade = $capital*0.15;
	echo "</br>O investimento possui rentabilidade de 15% a.a.";
}else if(($capital > 250000) && ($capital < 500000)){
		$rentabilidade = $capital*0.17;
	echo "</br>O investimento possui rentabilidade de 17% a.a.";
}else if($capital > 500000){
		$rentabilidade = $capital*0.25;
	echo "</br>O investimento possui rentabilidade de 25% a.a.";
}
	echo "</br></br>Em um ano o investimento irá render: R$ ".$rentabilidade;
	echo "</br>Em um ano o valor total sera de: R$ ".number_format(($rentabilidade + $capital),2);
?>