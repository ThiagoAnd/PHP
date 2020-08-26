<?php
include "SelectDados.php";
$resultado=mostrarCarro();
?>
<html>
	<head>
		<script>
			setInterval(function(){
				if(localStorage.c == 1){
					window.location.reload()	
					localStorage.c = '0';
				}
			},0)
		</script>
	</head>
	<body style=" background-color:#CDC9A5">
		<ul style="margin-left:-7%;margin-right:-1%;display: flex ;list-style-type:none;background-color:#CDCDC1">
			<li style="width:12%">Id</li>
			<li style="width:20%">Modelo</li>
			<li style="width:20%">Marca</li>
			<li style="width:17%">Ano</li>
			<li style="width:22%">Chassi</li>
			<li style="width:2%">Tipo</li>
		</ul>
	<?php
		$qtd = mysqli_num_rows($resultado);
		if($qtd==0){
				echo "<center><h1>Não existem dados na tabela</h1></center>";
			}else{
				echo"<table width=109%>";
				while($coluna=mysqli_fetch_assoc($resultado)){
					echo"<tr>";
					echo "<td width=13%>".$coluna['Id']."&nbsp;&nbsp;"."</td>";
					echo "<td width=16%>".$coluna['Modelo']."</td>";
					echo "<td width=19%>".$coluna['Marca']."</td>";
					echo "<td width=13%>".$coluna['Ano']."</td>";
					echo "<td width=24%>".$coluna['Chassi']."</td>";
					echo "<td width=0%>".$coluna['Tipo']."</td>";
					echo"</tr>";	
				}
				echo"</table>";
			}
?>
	</body>
</html>