<?php
include "conexao.php";

/*Função mostrarAluno1 foi deixada para que caso seja necessario o print dos dados somente em php*/
	function mostrarAluno1(){
		$conexao = criarConexao();
		$sql = "SELECT * FROM Alunos";
		$resultado = mysqli_query($conexao,$sql);
		
		while ($coluna = mysqli_fetch_array($resultado)){	
			echo $coluna['0']." ";
			echo $coluna['1']." ";
			echo $coluna['2']." ";
			echo $coluna['3']." ";
			echo $coluna['4']." ";
			echo $coluna['5']." </br>";
		}
	}

	function mostrarAluno2(){
		$conexao=criarConexao();
		$sql ="SELECT * FROM Alunos";
		$resultado = mysqli_query($conexao,$sql);
		
		return $resultado;
	}
	
	function mostrarInstrutor(){
		$conexao = criarConexao();
		$sql = "SELECT * FROM Instrutores";
		$resultado = mysqli_query($conexao,$sql);
		
		return $resultado;
	}
	
	function mostrarCarro(){
		$conexao = criarConexao();
		$sql = "SELECT * FROM Carros";
		$resultado = mysqli_query($conexao,$sql);
		
		return $resultado;	
	}
	
	function mostrarCurso(){
		$conexao = criarConexao();
		$sql = "SELECT * FROM Cursos";
		$resultado = mysqli_query($conexao,$sql);
		
		return $resultado;
		}
	
?>