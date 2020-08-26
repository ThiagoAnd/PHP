<?php
	include "IncludeDados.php";
	inserirInstrutor();
?>
<html>
	<head>
	   <script >
			function condicao(){
				localStorage.b = '1';
			}
			window.onload = condicao();
		</script>
	</head>
	<body style=" background-color:#444 ">
		<h1 style="margin: 100px">Cadastro efetuado com sucesso</h1></br></br>
		<form name ="insercao" action="FormularioInstrutor.html">
			<input style="margin-left: 42%" id="Botao1" type="submit" value="voltar"  >
		</form>
	</body>
</html>