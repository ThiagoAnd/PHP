<?php
$idade = 5;
echo "Idade do competidor: 15 </br></br>";

if ($idade < 7){
	echo "</br></br>Menores que 7 não podem competir";
}else if (($idade >= 7) && ($idade <= 11)){
	echo "</br></br>Categoria do competidor: Infantil";
} else if (($idade > 11) && ($idade <= 14)){
	echo "</br></br>Categoria do competidor: Juvenil";
}else if (($idade > 14) && ($idade <= 20)){
	echo "</br></br>Categoria do competidor: Junior";
}else if (($idade > 20) && ($idade <= 28)){
	echo "</br></br>Categoria do competidor: Profissional";
}else if (($idade > 28) && ($idade <= 35)){
	echo "</br></br>Categoria do competidor: Master";
}else if (($idade > 35) && ($idade <= 40)){
	echo "</br></br>Categoria do competidor: Senior";
}else {
	echo "</br></br>Categoria do competidor: Não consta";
}


?>