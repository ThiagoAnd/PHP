<?php
if(!empty($_GET)){
	echo "Senha invalida";	
}
?>

<html>
	<body>
		<h1>LOGIN</br></h1>
		<form method="POST" action="autenticar.php">
			Email <input type="text" name="email">
			Senha <input type="password" name= "senha">
			<input type="submit" value="ENTRAR">
		</form>
	</body>
</html>