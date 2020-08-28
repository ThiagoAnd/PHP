<?php

include '../conexao/conexao.php';

$curso_turma = $_POST['curso_turma'];
$periodo_turma = $_POST['periodo_turma'];
$qtd_aluno_turma = $_POST['qtd_aluno_turma'];
$sala_turma = $_POST['sala_turma'];
$representante_turma = $_POST['representante_turma'];
$materias_turma = $_POST['materias_turma'];

$inserir = mysqli_query($conn, "insert into turma (id_turma, curso_turma, periodo_turma, qtd_aluno_turma, sala_turma, representante_turma, materias_turma)
        values ('NULL', '$curso_turma', '$periodo_turma', '$qtd_aluno_turma', '$sala_turma', '$representante_turma', '$materias_turma')");

if ($inserir) {
    echo "<script>alert('Turma cadastrada com sucesso.')</script>";
} else {
    echo "<script>alert('Erro ao cadastrar turma.')</script>";
}

mysqli_close($conn);
echo "<script> window.location.href = '../formulario_gabriel_r.php' </script>";

?>