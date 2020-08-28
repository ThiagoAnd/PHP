<?php

include '../conexao/conexao.php';

$disciplina_nota=$_POST['disciplina_nota'];
$periodo_nota=$_POST['periodo_nota'];
$nota1_nota=$_POST['nota1_nota'];
$nota2_nota=$_POST['nota2_nota'];
$nota3_nota=$_POST['nota3_nota'];
$nota4_nota=$_POST['nota4_nota'];
$media_final_nota=$_POST['media_final_nota'];
$exame_final_nota=$_POST['exame_final_nota'];
$situacao_nota=$_POST['situacao_nota'];
$aluno_nota=$_POST['aluno_nota'];


$sql="insert into nota (disciplina_nota, periodo_nota, nota1_nota, nota2_nota, nota3_nota, nota4_nota, media_final_nota, exame_final_nota, situacao_nota,aluno_nota) values 
('$disciplina_nota','$periodo_nota','$nota1_nota', '$nota2_nota', '$nota3_nota', '$nota4_nota', '$media_final_nota', '$exame_final_nota', '$situacao_nota', '$aluno_nota')";

$inserir=mysqli_query($conn,$sql);

if ($inserir) {
    echo "<script>alert('Nota cadastrada com sucesso.')</script>";
} else {
    echo "<script>alert('Erro ao cadastrar nota.')</script>";
}

echo "<script> window.location.href = '../formulario_gabriel_b.php' </script>";

mysqli_close($conn);


?>