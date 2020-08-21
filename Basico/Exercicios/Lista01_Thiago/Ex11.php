<?php
$numero1 = -8;
		echo "</br>O número informado é ".$numero1;
	if($numero1 == 0){
		echo "</br>O número informado é igual a zero";
	} 
	if ($numero1 < 0){
		echo "</br>O número informado é negativo";
	}
	if($numero1 > 0){
		echo "</br>O número informado é positivo";
	}
	if ($numero1%2 == 0){
		echo "</br>O número informado é par";
	}
	if (($numero1%2 != 0) AND ($numero1%3 == 0)){
		echo "</br>O número informado é impar";
	}

?>