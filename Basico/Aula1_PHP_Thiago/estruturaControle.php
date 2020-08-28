<?php

$curso = "PHP";
//IF
	echo "</br></br><b>Condição IF</b></br>";
	if($curso == "PHP"){
		echo "Irrraaaaaaaaaaaaa";
	}

//ELSE
	echo "</br></br><b>Condição ELSE</b></br>";
	if($curso == "JAVA"){
		echo "Irrraaaaaaaaaaaaa";
	}else{
		echo  "Não era Java, era PHP";	
	};

//ELSE IF
	echo "</br></br><b>Condição ELSE IF</b></br>";
	if($curso == "JAVA"){
		echo "Irrraaaaaaaaaaaaa";
	}else if ($curso == "php"){
		echo  "Não era Java, era PHP";	
	}else{
		echo "Deu certo";
	}
	
	//SWITCH
	echo "</br></br><b>Condição SWITCH</b></br>";
	switch($curso){
		
		case "JAVA":
			echo "</br>Era JAVA";
			break;
		case "C":
			echo "</br>Era C";
			break;
		case "PHP":
			echo "</br>Era PHP";
			break;
		default:
			echo "Não temos esse curso";
		
		
	}






?>