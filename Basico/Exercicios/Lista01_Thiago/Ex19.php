<?php
$idade = 15;

if ($idade >= 16){
	echo "Esse cidadão já pode votar.";
	if ($idade >=18){
		echo "</br></br>Esse cidadão está apto a iniciar o processo para conseguir sua CNH.";
	}
}else{
	echo "Esse cidadão não é maior de idade.";
}

?>