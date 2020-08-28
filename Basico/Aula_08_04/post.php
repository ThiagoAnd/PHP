
<?php
 /* isset pede ao php para verificar se o campo esta em branco */
 
$nomephp = isset ($_POST ["nome"])? $_POST  ["nome"] : "";
$idadephp = $_POST ["idade"];
echo "O nome é: ".$nomephp."</br>";
echo "A idade é: ".$idadephp."</br>";
?>
<!--Get consegue visualizar e POST não pois as senhas por exemplo é errado poder visualizar na barra de endereço-->
<!--parte HTML-->

<form method="post">
	Nome: <input type="text" name="nome"></br>
	Idade: <input type="text" name="idade"></br>
	<input type ="submit" value= "Enviar"></br>
</form>





