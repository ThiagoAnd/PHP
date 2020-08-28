<?php

include "../conexao/conexao.php";

$nome_colaborador_ponto = isset($_POST ["nome_colaborador_ponto"]) ? $_POST["nome_colaborador_ponto"] : "";
$data_ponto = isset($_POST ["data_ponto"]) ? $_POST["data_ponto"] : "";
$acao_ponto = isset($_POST ["acao_ponto"]) ? $_POST["acao_ponto"] : "";
$hora_ponto = isset($_POST ["hora_ponto"]) ? $_POST["hora_ponto"] : "";

echo$nome_colaborador_ponto;
echo$data_ponto;
echo$acao_ponto;
echo$hora_ponto;


$sql = ("insert into ponto (nome_colaborador_ponto,data_ponto,acao_ponto,hora_ponto) values ('$nome_colaborador_ponto','$data_ponto','$acao_ponto','$hora_ponto')");



$insert = mysqli_query($conn, $sql);
if ($insert) {
    echo "<script>alert('Ponto cadastrada com sucesso.')</script>";
} else {
    echo "<script>alert('Falha no cadastro.')</script>";
}

echo"<script> window.location.href = '../formulario_luiz_savio.php' </script>";
mysqli_close($conn);
?>
 




