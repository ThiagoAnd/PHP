<?php

include '../conexao/conexao.php';

$inputRazao = $_POST['inputRazao'];
$inputFantasia = $_POST['inputFantasia'];
$inputCNPJ = $_POST['inputCNPJ'];
$inputInscricao = $_POST['inputInscricao'];
$inputSegmento = $_POST['inputSegmento'];
$inputEndereco = $_POST['inputEndereco'];
$inputPais = $_POST['inputPais'];


$inserir = mysqli_query($conn, "INSERT INTO fornecedor(id_fornecedor,razao_social_fornecedor,fantasia_fornecedor,cnpj_fornecedor,inscricao_estadual_fornecedor,endereco_fornecedor,pais,segmento)
         VALUES ('NULL', '$inputRazao', '$inputFantasia', '$inputCNPJ', '$inputInscricao','$inputEndereco','$inputPais', '$inputSegmento')");

if ($inserir) {
    echo "<script>alert('Fornecedor cadastrado com sucesso.')</script>";
} else {
    echo "<script>alert('Erro ao cadastrar fornecedor.')</script>";
}

echo "<script> window.location.href = '../formulario_matheus.php' </script>";

mysqli_close($conn);
?>