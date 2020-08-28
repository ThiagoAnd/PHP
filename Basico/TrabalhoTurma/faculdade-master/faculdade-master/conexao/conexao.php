<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $base = "faculdade";
    
    $conn = mysqli_connect($host, $usuario, $senha, $base);
    
    /*if($conn){
        echo "Concectado com sucesso" . mysqli_connect_error();
    } else {
        echo "Não foi possivel se conectar na base de dados";
    }*/

?>