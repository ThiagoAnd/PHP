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
include "conexao/conexao.php";


	$conexao = criarConexao();
	$validar=true;
	
	$tabela ="cadastro";
	$sql = "SELECT * FROM $tabela";
	
	$result = mysqli_query($conexao, $sql);
	foreach($result as $cadastro){
		//Vardump mostra todos os dados da sua tabela
		//var_dump($cadastro);
	//a partir da interrogação eu vou colocar url
	//ecomercial separa valores valor1&valor2
	//ate o interrogação é endereço e depois do interrogação é o que sera passado pra ela.
	echo "<tr>";
	echo "<form>";
		echo "<td>".$cadastro['Nome']."</td>";
		echo "<td>|</td>";
		echo "<td>".$cadastro['Sobrenome']."</td>";
		echo "<td>|</td>";
		echo "<td>".$cadastro['Email']."</td>";
		echo "<td>|</td>";
		echo "<td>".$cadastro['Senha']."</td>";
		echo "<td>|</td>";
		//O type hidden é para referenciar sem aparecer no html
		//  value='{$cadastro['Id']}'>"; 
		// 
		//echo "<input type='hidden' value='".$cadastro['Id']."'>";
		//echo "<td>"."<input type='submit' value='Editar'>"."</td>";
		
		//toda a parte abaixo com aspas duplas é um texto, e depois desse texto usar aspas simples,
		//reparar que a primeira aspas simples fica aberto
		echo "<td><a href='editar.php?Id=".$cadastro['Id']."'>editar</a></td>";
		echo "</form>";
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