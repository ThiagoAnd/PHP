<?php
	function criarConexao(){
		$host = "localhost";
		$username = "root";
		$pass = "";
		$base = "AutoEscola";

		$con = mysqli_connect($host,$username,$pass,$base);

		if(!$con){
			die("Não conectou".mysqli_connect_error());	
		}else{
			return $con;
		}
	}
?>