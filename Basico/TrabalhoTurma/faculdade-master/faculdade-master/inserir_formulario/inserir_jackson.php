<?php
include '../conexao/conexao.php';
 $ID=isset($_POST["ID"])? $_POST["ID"]:"";
    $andar=isset($_POST["andar"])? $_POST["andar"]:"";
    $curso=isset($_POST["curso"])? $_POST["curso"]:"";
	 $periodo=isset($_POST["periodo"])? $_POST["periodo"]:"";
	  $turno=isset($_POST["turno"])? $_POST["turno"]:"";
	  
	  $sql =("INSERT INTO sala(id_sala, andar_sala, curso_sala, periodo_sala,turno_sala) VALUES ('null', '$andar','$curso' ,'$periodo','$turno')");
	  
$inserir = mysqli_query($conn,$sql);
if ($inserir) {
    echo "<script>alert('Sala cadastrada com sucesso.')</script>";
} else {
    echo "<script>alert('Erro ao cadastrar sala.')</script>";
}

echo "<script> window.location.href = '../formulario_jackson.php' </script>";

mysqli_close($conn);
?>