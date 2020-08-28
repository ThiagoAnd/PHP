<?php

include "../conexao/conexao.php";

$produto_cantina = $_POST["produto_cantina"];
$vendedor_cantina = $_POST["vendedor_cantina"];
$quantidade_cantina = $_POST["quantidade_cantina"];
$valor_unitario_cantina = $_POST["valor_unitario_cantina"];
$valor_total_cantina = $_POST["valor_total_cantina"];


$sql="insert into cantina(id_compra_cantina, produto_cantina, vendedor_cantina,quantidade_cantina, valor_unitario_cantina, valor_total_cantina) values ('NULL','$produto_cantina', '$vendedor_cantina', '$quantidade_cantina', '$valor_unitario_cantina', '$valor_total_cantina')";

$inserir = mysqli_query($conn,$sql);

if ($inserir) {
    echo "<script>alert('Compra cadastrada com sucesso.')</script>";
} else {
    echo "<script>alert('Erro ao cadastrar compra.')</script>";
}

echo "<script> window.location.href = '../formulario_karam.php' </script>";

mysqli_close($conn);
?>