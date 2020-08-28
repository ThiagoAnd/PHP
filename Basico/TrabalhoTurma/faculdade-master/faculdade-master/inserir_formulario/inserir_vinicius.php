<?php

include "../conexao/conexao.php";

$carro = $_POST["carro_estacionamento"];
$placa = $_POST["placa_estacionamento"];
$vaga = $_POST["vaga_estacionamento"];


$sql="insert into estacionamento(id_estacionamento, carro_estacionamento, placa_estacionamento, vaga_estacionamento) values ('NULL', '$carro', '$placa', '$vaga')";

$inserir = mysqli_query($conn,$sql);

if ($inserir) {
    echo "<script>alert('Estacionamento cadastrado com sucesso.')</script>";
} else {
    echo "<script>alert('Erro ao cadastrar.')</script>";
}

echo "<script> window.location.href = '../formulario_vinicius.php' </script>";

mysqli_close($conn);
?>