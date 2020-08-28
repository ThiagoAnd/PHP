<?php

include '../conexao/conexao.php';

$nome = $_POST['nome'];
$carga = $_POST['carga'];
$curso = $_POST['curso'];


$inserir = mysqli_query($conn, "insert into disciplina(id_disciplina, nome_disciplina, carga_horario_disciplina, curso_disciplina)"
        . "values('NULL', '$nome', '$carga', '$curso')");

if ($inserir) {
    echo "<script>alert('Disciplina cadastrada com sucesso.')</script>";
} else {
    echo "<script>alert('Erro ao cadastrar disciplina.')</script>";
}

echo "<script> window.location.href = '../formulario_diego.php' </script>";


mysqli_close($conn);
?>