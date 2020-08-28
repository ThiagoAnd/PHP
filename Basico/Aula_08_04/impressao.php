<?php
	include "conexao.php";

	$nome = isset($_POST ["nome"])? $_POST ["nome"] : "";
	$sobrenome = isset($_POST ["sobrenome"])? $_POST ["sobrenome"] : "";
	$idade = isset($_POST ["idade"])? $_POST ["idade"] : "";
	$rua = isset($_POST ["rua"])? $_POST ["rua"] : "";
	$cidade = isset($_POST ["cidade"])? $_POST ["cidade"] : "";

	echo "O nome é: ".$nome."</br>";
	echo "O Sobrenome é: ".$sobrenome."</br>";
	echo "A idade é: ".$idade."</br>";
	echo "A rua é: ".$rua."</br>";
	echo "A cidade é:".$cidade."</br>";
	
	inserir($nome,$idade);
?>