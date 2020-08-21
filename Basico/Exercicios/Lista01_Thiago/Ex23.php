<?php

echo "</br></br>1 - Venda a Vista no dinheiro Desconto de 12%";
echo "</br></br>2 - Venda a vista no débito Desconto de 3%";
echo "</br></br>3 - 1x no cartão de crédito Mesmo Preço";
echo "</br></br>4 - 3x vezes com juros no cartão de crédito Acréscimo de 5%";
echo "</br></br>5 -  6x no cartão de crédito Acréscimo de 10%";
$opcao = 4;
echo "</br></br>-----------------------------------------------</br>";
echo "OPÇÃO ESCOLHIDA:";
switch($opcao){
	case 1:
		echo "</br></br>Opção com desconto de 12%";
		break;
	case 2:
		echo "</br></br>Opção com desconto de 3%";
		break;
	case 3:
		echo "</br></br>Opção com o mesmo preço";
		break;
	case 4:
		echo "</br></br>Opção com acréscimo de 5%";
		break;
	case 5:
		echo "</br></br>Opção com acréscimo de 10%";
		break;
	default:
		echo "</br>Opção invalida.";
};


?>