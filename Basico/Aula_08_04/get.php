
<?php
$nomephp = isset ($_GET ["nome"])? $_GET ["nome"] : "";
$idadephp = isset ($_GET ["idade"])? $_GET ["idade"] : "";
echo "O nome é: ".$nomephp."</br>";
echo "A idade é: ".$idadephp."</br>";
?>
<!--Get consegue visualizar e POST não-->
<!--parte HTML-->

<form method="get">
	Nome: <input type="text" name="nome"></br>
	Idade: <input type="text" name="idade"></br>
	<input type ="submit" value= "Enviar"></br>
</form>





