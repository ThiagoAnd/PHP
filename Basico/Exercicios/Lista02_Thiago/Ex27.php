<?php
	function verificarPessoa($nome,$sexo,$idade){
		
		if(($sexo == "feminino") && ($idade < 25)){
			echo $nome." não pode participar do processo seletivo";
		}else {
			echo "Você foi aceito no processo seletivo";
		}
	}

	$name = "Rafael";
	$sex = "masculino";
	$age = 22;
	verificarPessoa($name,$sex,$age);
?>