<?php

include "../conexao/conexao.php";

	$nome_professor=$_POST ["nome_professor"];
	$disciplina_professor=$_POST ["disciplina_professor"];
	//$ponto_professor=$_POST ["ponto_professor"];
	$rg_professor=$_POST ["rg_professor"];
	$cpf_professor=$_POST ["cpf_professor"];
	$telefone_professor=$_POST ["telefone_professor"];
	$endereco_professor=$_POST ["endereco_professor"];

$inserir = mysqli_query($conn, "INSERT INTO professor (id_professor,nome_professor, disciplina_professor, ponto_professor, rg_professor, cpf_professor, telefone_professor, endereco_professor)"
        . "values('NULL','$nome_professor','$disciplina_professor','NULL','$rg_professor','$cpf_professor','$telefone_professor','$endereco_professor')");
		

if ($inserir) {
    echo "<script>alert('Professor cadastrado com sucesso.')</script>";
} else {
    echo "<script>alert('Erro ao cadastrar Professor.')</script>";
}

echo "<script> window.location.href = '../formulario_jorge.php' </script>";

mysqli_close($conn);



?>