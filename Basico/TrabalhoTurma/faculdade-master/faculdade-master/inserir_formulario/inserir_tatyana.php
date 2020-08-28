<?php

include "../conexao/conexao.php";


$situacao_protocolo=$_POST['situacao_protocolo'];
$valor_protocolo=$_POST['valor_protocolo'];
$observacao_protocolo=$_POST['observacao_protocolo'];

$sql=("insert into protocolo (id_protocolo, observacao_protocolo, valor_protocolo, situacao_protocolo) values ('NULL', '$observacao_protocolo','$valor_protocolo','$situacao_protocolo')");

$inserir=mysqli_query($conn,$sql);

if ($inserir) {
    echo "<script>alert('Protocolo enviado com sucesso.')</script>";
} else {
    echo "<script>alert('Erro enviar protocolo.')</script>";
}

echo "<script> window.location.href = '../formulario_taty.php' </script>";

mysqli_close($conn);



?>