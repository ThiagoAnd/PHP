<?php
$salario = 1000.15;

echo "O salario bruto é: R$ ".$salario;

	if ($salario <= 1659.38){
		$aliquota = 0.08;
	}else if(($salario > 1659.38) && ($salario <= 2765.66)){
		$aliquota = 0.09;
	}else if(($salario > 2765.66) && ($salario <= 5531.31)){
		$aliquota = 0.11;
	}else if($salario > 5531.31){
		$aliquota = 608.44;
	}
	if($salario <= 5531.31){
		echo "</br></br>A contribuição ao INSS é: R$ ".number_format(($salario*$aliquota),2);
		echo "</br>O salario liquido é: R$ ".number_format(($salario - ($salario*$aliquota)),2);
	}else{
		echo "</br></br>A contribuição ao INSS é: R$ ".number_format(($aliquota),2);
		echo "</br>O salario liquido é: R$ ".number_format(($salario - $aliquota),2);
	}

?>