<?php

include "../conexao/conexao.php";

$Nome = $_POST["nome_aluno"];
$Sobrenome = $_POST["sobrenome_aluno"];
$Telefone = $_POST["telefone_aluno"];
$Idade = $_POST["idade_aluno"];
$Curso = $_POST["curso_aluno"];
$Turma = $_POST["turma_aluno"];


$sql="insert into aluno(id_aluno,nome_aluno,sobrenome_aluno,telefone_aluno,idade_aluno,curso_aluno,turma_aluno) values ('NULL','$Nome', '$Sobrenome', '$Telefone', '$Idade', '$Curso', '$Turma')";
$inserir = mysqli_query($conn,$sql);

if ($inserir) {
    echo "<script>alert('Aluno cadastrado com sucesso.')</script>";
} else {
    echo "<script>alert('Erro ao cadastrar aluno.')</script>";
}

echo "<script> window.location.href = '../formulario_thiago.php' </script>";

mysqli_close($conn);
?>