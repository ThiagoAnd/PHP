<?php
include '../conexao/conexao.php';

$nome_funcionario = $_POST['nome_funcionario'];
$cpf_funcionario = $_POST['cpf_funcionario'];
$rg_funcionario = $_POST['rg_funcionario'];
$pis_funcionario = $_POST['pis_funcionario'];
$cargo_funcionario = $_POST['cargo_funcionario'];
$endereco_funcionario = $_POST['endereco_funcionario'];
$salario_funcionario = $_POST['salario_funcionario'];
$carga_horaria_funcionario = $_POST['carga_horaria_funcionario'];
$telefone_funcionario = $_POST['telefone_funcionario'];




$inserir = mysqli_query($conn, "insert into funcionario (nome_funcionario, cpf_funcionario, rg_funcionario, pis_funcionario, cargo_funcionario, endereco_funcionario, salario_funcionario, carga_horaria_funcionario, telefone_funcionario)
       " . "values('$nome_funcionario', '$cpf_funcionario', '$rg_funcionario', '$pis_funcionario', '$cargo_funcionario', '$endereco_funcionario', '$salario_funcionario', '$carga_horaria_funcionario', '$telefone_funcionario')");





if ($inserir) {
    echo "<script>alert('Funcionário cadastrado com sucesso.')</script>";
} else {
    echo "<script>alert('Erro ao cadastrar o Funcionário.')</script>";
}

echo "<script> window.location.href = '../formulario_giovani.php' </script>";

mysqli_close($conn);
?>