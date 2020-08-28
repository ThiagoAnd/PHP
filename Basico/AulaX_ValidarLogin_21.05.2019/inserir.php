<?php

include "conexao.php";
	$Email = $_POST["email"];
	$Senha = md5($_POST["senha"]);
	$Nivel = $_POST["nivel"];

	$conn = criarConexao();
	$sql = "INSERT INTO cadastro (email,senha,id_permissao) VALUES ('$Email','$Senha',$Nivel)";
	$inserir = mysqli_query($conn,$sql);
	
	if ($inserir) {
		echo "<script>alert('Cadastrado com sucesso.')</script>";
		header("Location: http://localhost/Projetos/PHP2/AulaX_ValidarLogin_21.05.2019/login.php?1");
	} else {
		echo "<script>alert('Erro ao enviar.')</script>";
	}

	echo "<script> window.location.href = 'Cadastro.php' </script>";

?>