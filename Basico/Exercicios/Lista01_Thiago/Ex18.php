<?php
$numero = 4;
$sabado = 7;
switch ($numero){
	
	case 1:
		echo "É Domingo.</br>";
		echo "Faltam ".($sabado - $numero)." dias para Sabado.";
		break;
	case 2:
		echo "É Segunda.</br>";
		echo "Faltam ".($sabado - $numero)." dias para Sabado.";
		break;
	case 3:
		echo "É Terça.</br>";
		echo "Faltam ".($sabado - $numero)." dias para Sabado.";
		break;
	case 4:
		echo "É Quarta.</br>";
		echo "Faltam ".($sabado - $numero)." dias para Sabado.";
		break;
	case 5:
		echo "É Quinta.</br>";
		echo "Faltam ".($sabado - $numero)." dias para Sabado.";
		break;
	case 6:
		echo "É Sexta.</br>";
		echo "Faltam ".($sabado - $numero)." dias para Sabado.";
		break;
	case 7:
		echo "É Sabado.</br>";
		echo "Não falta nenhum dia para Sabado.";
		break;
	default:
		echo "</br>Opção invalida.";
}
?>