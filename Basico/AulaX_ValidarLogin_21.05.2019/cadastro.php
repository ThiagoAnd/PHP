<?php
include "conexao.php";
$conn=criarConexao();
$sql="SELECT * FROM permissao";
$result= mysqli_query($conn,$sql);
?>
<html>
	<body>
		<form method="POST" action="inserir.php">
			Email <input type="text" name="email">
			Senha <input type="password" name= "senha">
			Nivel <select name="nivel"> 
			<?php
			
			foreach($result as $indice){
				echo "<option value=".$indice['id'].">".$indice['nome']."</option>";
			}
			?>
			
			

			</select>
						<input type="submit" value="Enviar">
						</br>

			
			
			
			<form method="POST" action="inserir.php">
			Email <input type="text" name="email">
			Senha <input type="password" name= "senha">
			Nivel <select name="nivel"> 
			<!--OUTRA MANEIRA DE FAZER O SELECT EMBAIXO-->
			<?php foreach($result as $indice){
				?>
			
			<option value="<?=$indice['id']?>"><?=$indice['nome']?></option>
			
			<?php	
			}
			?>
			

			
			</select>
			<input type="submit" value="Enviar">
		</form>
		</form>
	</body>
</html>

//

