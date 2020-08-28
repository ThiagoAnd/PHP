<?php
include "SelectDados.php";
$resultado = mostrarCurso();
?>
<html>
	<head>
		<script>
			setInterval(function(){
				if(localStorage.d == 1){
					window.location.reload()	
					localStorage.d = '0'
				}
			},0)
		</script>
	</head>
	<body style=" background-color:#fff">
		<ul style="margin-left:-6%;margin-right:-1%;display: flex ;list-style-type:none;background-color:#8B8B83">
			<li style="width:17%">Id</li>
			<li style="width:25%">Curso</li>
			<li style="width:22%">Turno</li>
			<li style="width:20%">Qtd(H)</li>
			<li style="width:20%">Qtd(A)</li>
			<li style="width:17%">Professor</li>
		</ul>
	<?php
		$qtd = mysqli_num_rows($resultado);
		if($qtd==0){
			echo "<center><h1>Não existem dados na tabela</h1></center>";
		}else{
			echo"<table width=120%>";
			while($coluna=mysqli_fetch_assoc($resultado)){
				echo"<tr>";
				echo "<td width=9%>".$coluna['Id']."</td>";
				echo "<td width=20%>".$coluna['Nome']."</td>";
				echo "<td width=17%>".$coluna['Turno']."</td>";
				echo "<td width=14%>".$coluna['C_Horaria']." </td> ";
				echo "<td width=13%>".$coluna['Qtd_Alunos']." </td> ";
				echo "<td width=0%>".$coluna['Professor']."</td>";
				echo"</tr>";	
			}
			echo"</table>";
		}
	?>
</body>
</html>