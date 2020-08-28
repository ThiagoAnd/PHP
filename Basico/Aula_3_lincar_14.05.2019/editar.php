<?php
//var_dump($_GET);
include "conexao/conexao.php>";
$variavel=$_GET["Id"];
$con=criarConexao();
$sql="SELECT * FROM cadastro WHERE Id='$variavel'";
$result=mysqli_query($con,$sql);

$variavel2=mysqli_fetch_assoc ( $result );
//var_dump($variavel2);
?>

<html>
<body>
	<form method="POST" action="impressao.php">
		Nome: <input type="text" name = "nome" value=<?= $variavel2['Nome'] ?>></br>
		Sobrenome:<input type="text"name="sobrenome" value=<?=$variavel2['Sobrenome']?>></br>
		Email:<input type="text" name="email" value=<?=$variavel2['Email']?>></br>
		Senha:<input type="text"name="senha" value=<?=$variavel2['Senha']?>></br>
		<input type="submit" Atualizar="enviar">
	</form>
</body>
</html>