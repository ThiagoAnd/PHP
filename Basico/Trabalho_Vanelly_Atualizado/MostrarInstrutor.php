<?php
include "SelectDados.php";
$resultado=mostrarInstrutor();
?>
<html>
	<head>
		<script>
			setInterval(function(){
				if(localStorage.b == 1){
					window.location.reload()	
					localStorage.b = '0';
				}
			},0)
		</script>
	</head>
	<body style=" background-color:#fff">
		<ul style="margin-left:-7%;margin-right:-1%;;display: flex ;list-style-type:none;background-color:#8B8B83">
			<li style="width:17%">Id</li>
			<li style="width:27%">Nome</li>
			<li style="width:38%">Sobrenome</li>
			<li style="width:30%">RG</li>
			<li style="width:32%">Telefone</li>
			<li style="width:12%">Idade</li>
		</ul>
		<?php
			$qtd = mysqli_num_rows($resultado);
			if($qtd==0){
				echo "<center><h1>Não existem dados na tabela</h1></center>";
			}else{
				echo"<table width=101% >";
				while($coluna=mysqli_fetch_assoc($resultado)){
					echo"<tr>";
					echo "<td width=10%>".$coluna['Id']."</td>";
					echo "<td width=19%>".$coluna['Nome']."</td>";
					echo "<td width=17%>".$coluna['Sobrenome']."</td>";
					echo "<td width=25%>".$coluna['RG']."</td>";
					echo "<td width=23%>".$coluna['Telefone']."</td>";
					echo "<td width=22%>".$coluna['Idade']."</td>";
					echo"</tr>";	
				}
			echo"</table>";
			}
		?>
	</body>
</html>