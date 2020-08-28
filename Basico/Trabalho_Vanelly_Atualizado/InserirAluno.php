<?php
	include "IncludeDados.php";
	inserirAluno();
?>
<html>
	<head>
	   <script >
			function condicao(){
				localStorage.a = '1';
			}
			window.onload = condicao();
		</script>
	</head>
	<body style=" background-color:#fff">
		<h2 style="margin:20%">Cadastro efetuado com sucesso</h2></br></br>
		<form name ="insercao" action="FormularioAluno.html">
			<input style="margin-left: 42%" id="Botao1" type="submit" value="voltar"  >
		</form>
	</body>
</html>