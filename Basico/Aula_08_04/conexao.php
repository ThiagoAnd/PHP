<?php
/*Como conectar o conexao com o banco de dados que foi criado com a tabela pessoa*/
/*Passar como parametros*/

$host = "localhost";
$username = "root";
$password = "";
$base = "Thiagophp";

$con = mysqli_connect ($host,$username,$password,$base);


function inserir($nome,$idade){
	$inserir = mysqli_query($con,"INSERT INTO pessoa (Nome,Idade)VALUES ('$nome','$idade')");
	if($con){
	echo "Conectado com sucesso";
	}
}
?>