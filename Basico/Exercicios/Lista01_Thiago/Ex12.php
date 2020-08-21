<?php
$n1 = 1;
$n2 = 5;
$n3 = 2;

if(($n1 >= $n2) && ($n2 > $n3)){
	echo "Os numeros em ordem crescente são: ".$n3." ".$n2." ".$n1;
} else if (($n1 > $n2) && ($n1 <= $n3)){
	echo "Os numeros em ordem crescente são: ".$n2." ".$n1." ".$n3;
} else if (($n2 > $n1) && ($n1 > $n3)){
	echo "Os numeros em ordem crescente são: ".$n3." ".$n1." ".$n2;
} else if (($n2 > $n1) && ($n2 > $n3)){
	echo "Os numeros em ordem crescente são: ".$n1." ".$n3." ".$n2;
} else if (($n3 > $n1) && ($n1 > $n2)){
	echo "Os numeros em ordem crescente são: ".$n2." ".$n1." ".$n3;
} else if (($n3 > $n1) && ($n1 <= $n2)){
	echo "Os numeros em ordem crescente são: ".$n1." ".$n2." ".$n3;
} else if (($n1 > $n2) && ($n1 > $n3)){
	echo "Os numeros em ordem crescente são: ".$n2." ".$n3." ".$n1;
} else if (($n3 == $n1) && ($n1 == $n2)){
	echo "Os numeros são iguais: ".$n1." ".$n2." ".$n3;
}
?>
