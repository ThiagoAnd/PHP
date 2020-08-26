<?php
	include "IncludeDados.php";
	inserirAluno();
?>
<html>
	<head>
	   <script >
			function condicao(){
				localStorage.a = 1
			}
			window.onload = condicao();
		</script>
	</head>
	<body style=" background-color:#FDF5E6">
		<h1 style="margin: 100px">Cadastro efetuado com sucesso</h1></br></br>
		<form name ="insercao" action="FormularioAluno.html">
			<input style="margin-left: 42%" id="Botao1" type="submit" value="voltar"  >
		</form>
	</body>
</html>