<html>
<table style="border_b">
<tr>
<td>Nome</td>
<td>|</td>
<td>Sobrenome</td>
<td>|</td>
<td>Email</td>
<td>|</td>
<td>Senha</td>
</tr>


<?php
include "../conexao/conexao.php";

	$conexao = criarConexao();
	$validar=true;
	
	$tabela ="cadastro";
	$sql = "SELECT * FROM $tabela";
	
	$result = mysqli_query($conexao, $sql);
	foreach($result as $cadastro){
		//Vardump mostra todos os dados da sua tabela
		//var_dump($cadastro);
	
	echo "<tr>";
		echo "<td>";
			echo $cadastro['Nome'];
		echo "</td>";
		echo "<td>|</td>";
		echo "<td>";
			echo $cadastro['Sobrenome'];
		echo "</td>";
		echo "<td>|</td>";
		echo "<td>";
			echo $cadastro['Email'];
		echo "</td>";
		echo "<td>|</td>";
		echo "<td>";
			echo $cadastro['Senha'];
		echo "</td>";
		echo "<td>|</td>";
		echo "<td>";
			echo "<input type='submit' value='Editar'>";
		echo "</td>";
		echo "</tr>";

		
		
	}
	/*
if($result){
	
	while ($linha = mysqli_fetch_array($result)){
		echo "<table>";
		echo "<tr>";
		echo "<td> ".$linha['1']." </td>";
		echo "<td> ".$linha['2']." </td>";
		echo "<td> ".$linha['3']." </td>";
		echo "<td> ".$linha['4']." </td>";
		echo "</tr>";
		echo "</table>";
		$validar=false;
	}
	
	if($validar){
		echo "<script>alert('Lista vazia.')</script>";
		echo"<script> window.location.href = '../homeA.html' </script>";
	}
	
}else{
				echo "<script>alert('LIsta vazia.')</script>";
				echo"<script> window.location.href = '../Index.html' </script>";
		}
		
		mysqli_close($conexao); 	
		



*/
?>
</html>