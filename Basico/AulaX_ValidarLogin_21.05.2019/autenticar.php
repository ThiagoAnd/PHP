<?php
include "conexao.php";

$Email = $_POST["email"];
$Senha = md5($_POST["senha"]);

$conn= criarConexao();

$sql = "SELECT * FROM cadastro WHERE email='".$Email."' AND senha='".$Senha."'";

$result= mysqli_query($conn,$sql);

$result = mysqli_fetch_assoc($result);


if(is_null($result)){
	    //echo "<script>alert('Email ou senha invalidos')</script>";

	//header("Location: http://localhost/Projetos/HTML2/ValidarLogin/login.php?batata");
	
}else{
		    echo "<script>alert('Login efetuado com sucesso')</script>";
			
	//header("Location: http://localhost/Projetos/PHP2/AulaX_ValidarLogin_21.05.2019/inicial.php?".$result['id_permissao']);
		header("Location: http://localhost/Projetos/PHP2/AulaX_ValidarLogin_21.05.2019/inicial.php?indice=".$result['id_permissao']);

	

	
}




?>