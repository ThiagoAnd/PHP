<?php
	include "conexao.php";
	
	function inserirAluno(){
		$Nome = isset($_POST ["nome"])? $_POST ["nome"] : "";
		$Sobrenome = isset($_POST ["sobrenome"])? $_POST ["sobrenome"] : "";
		$CPF = isset($_POST ["cpf"])? $_POST ["cpf"] : "";
		$Telefone = isset($_POST ["telefone"])? $_POST ["telefone"] : "";
		$Idade = isset($_POST ["idade"])? $_POST ["idade"] : "";
		
		$conexao = criarConexao();
		$sql ="INSERT INTO Alunos (Nome,Sobrenome,CPF,Telefone,Idade) VALUES ('$Nome','$Sobrenome','$CPF','$Telefone','$Idade')";
		$insert = mysqli_query($conexao,$sql);
		mysqli_close($conexao);
	}
	
	function inserirInstrutor(){
		$Nome = isset($_POST ["nome"])? $_POST ["nome"] : "";
		$Sobrenome = isset ($_POST ["sobrenome"])? $_POST  ["sobrenome"] : "";
		$RG = isset ($_POST ["rg"])? $_POST ["rg"] : "";
		$Telefone = isset ($_POST ["telefone"])? $_POST ["telefone"] : "";
		$Idade = isset($_POST ["idade"])? $_POST ["idade"] : "";
		
		$conexao = criarConexao();
		$sql = "INSERT INTO Instrutores (Nome,Sobrenome,RG,Telefone,Idade) VALUES ('$Nome','$Sobrenome','$RG','$Telefone','$Idade')";
		$insert = mysqli_query($conexao,$sql);
		mysqli_close($conexao);
	}
	
	function inserirCarro(){
		$Modelo = isset($_POST ["modelo"])? $_POST ["modelo"] : "";
		$Marca = isset ($_POST ["marca"])? $_POST ["marca"] : "";
		$Ano = isset ($_POST ["ano"])? $_POST ["ano"] : "";
		$Chassi = isset ($_POST ["chassi"])? $_POST ["chassi"] : "";
		$Tipo = isset ($_POST ["tipo"])? $_POST ["tipo"] : "";
		
		$conexao = criarConexao();
		$sql = "INSERT INTO Carros (Modelo,Marca,Ano,Chassi,Tipo) VALUES ('$Modelo','$Marca','$Ano','$Chassi','$Tipo')";
		$insert = mysqli_query($conexao,$sql);
		mysqli_close($conexao);
	}
	
	function inserirCurso(){
		$Nome = isset($_POST ["nome"])? $_POST ["nome"] : "";
		$Turno = isset($_POST ["turno"])? $_POST ["turno"] : "";
		$C_horaria = isset ($_POST ["c_horaria"])? $_POST ["c_horaria"] : "";
		$Qtd_alunos = isset ($_POST ["qtd_alunos"]) ? $_POST ["qtd_alunos"] : "";
		$Professor = isset ($_POST ["professor"]) ? $_POST ["professor"] : "";
		
		$conexao = criarConexao();
		$sql = "INSERT INTO Cursos (Nome,Turno,C_horaria,Qtd_alunos,Professor) VALUES ('$Nome','$Turno','$C_horaria','$Qtd_alunos','$Professor')";
		$insert = mysqli_query($conexao,$sql);
		mysqli_close($conexao);
	}
?>