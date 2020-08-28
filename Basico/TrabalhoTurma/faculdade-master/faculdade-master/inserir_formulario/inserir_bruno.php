<?php

include "../conexao/conexao.php";


$data_chamada = isset($_POST ["data_chamada"]) ? $_POST["data_chamada"] : "";
$horario_chamada = isset($_POST ["horario_chamada"]) ? $_POST["horario_chamada"] : "";
$disciplina_chamada = isset($_POST ["disciplina_chamada"]) ? $_POST["disciplina_chamada"] : "";
$aluno_chamada = isset($_POST ["aluno_chamada"]) ? $_POST["aluno_chamada"] : "";
$presenca_chamada = isset($_POST ["presenca_chamada"]) ? $_POST["presenca_chamada"] : "";

echo$data_chamada;
echo$horario_chamada;
echo$disciplina_chamada;
echo$presenca_chamada;
echo$aluno_chamada;


$sql = ("insert into chamada (data_chamada,horario_chamada,disciplina_chamada,aluno_chamada,presenca_chamada) values ('$data_chamada','$horario_chamada','$disciplina_chamada','$aluno_chamada','$presenca_chamada')");



$insert = mysqli_query($conn, $sql);
if ($insert) {
    echo "<script>alert('Chamada cadastrada com sucesso.')</script>";
} else {
    echo "<script>alert('Falha no cadastro.')</script>";
}

mysqli_close($conn);
echo"<script> window.location.href = '../formulario_bruno.php' </script>";
?>
 




