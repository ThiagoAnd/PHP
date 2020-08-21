<?php
$salario = 3000.15;

echo "O salario bruto é: R$ ".$salario;

if ($salario <= 1999.18){
	echo "</br>O salario não sofrerá nenhum desconto.";
}else{ 
	if(($salario > 1999.18) && ($salario <= 2967.98)){
		$aliquota = 0.075;
		$deducao = 149.94;
	}else if(($salario > 2967.98) && ($salario <= 3938.60)){
		$aliquota = 0.15;
		$deducao = 372.54;
	}else if(($salario > 3938.60) && ($salario <= 4897.91)){
		$aliquota = 0.225;
		$deducao = 667.93;
	}else if($salario > 4897.91){
		$aliquota = 0.275;
		$deducao = 912.83;
	}
	 echo "</br></br>A aliquota é: R$ ".number_format(($salario*$aliquota),2);
	 echo "</br>A dedução é: R$ ".number_format($deducao,2);
	 echo "</br>O salario liquido é: R$ ".number_format(($salario - ($salario*$aliquota)),2);
}

?>