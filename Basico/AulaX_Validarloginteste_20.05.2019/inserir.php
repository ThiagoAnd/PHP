<?php

include "conexao.php";
	$Email = $_POST["email"];
	$Senha = md5($_POST["senha"]);

	$conn = criarConexao();
	$sql = "INSERT INTO cadastro (email,senha) VALUES ('$Email','$Senha')";
	$inserir = mysqli_query($conn,$sql);
	
	if ($inserir) {
		echo "<script>alert('Enviado com sucesso.')</script>";
		echo "<script> window.location.href = 'login.php' </script>";
	} else {
		echo "<script>alert('Erro ao enviar.')</script>";
	}

	echo "<script> window.location.href = 'Cadastro.php' </script>";

?>