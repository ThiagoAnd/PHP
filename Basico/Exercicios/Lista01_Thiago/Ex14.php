<?php
$numero1 = 1;
$numero2 = 1;
$numero3 = 3;

if ((($numero1 > $numero2) && ($numero1 > $numero3)) || (($numero1 > $numero2) && ($numero2 == $numero3))){
	echo "Numero ".$numero1." é maior";
}else if((($numero2 > $numero1) && ($numero2 > $numero3)) || (($numero2 > $numero1) && ($numero1 == $numero3))){
	echo "Numero ".$numero2." é maior";	
}else if((($numero3 > $numero1) && ($numero3 > $numero2)) || (($numero3 > $numero1) && ($numero1 == $numero2))){
	echo "Numero ".$numero3." é maior";	
}else if(($numero3 == $numero2) && ($numero2 == $numero1)){
	echo "Os 3 numeros são iguais";	
}
?>