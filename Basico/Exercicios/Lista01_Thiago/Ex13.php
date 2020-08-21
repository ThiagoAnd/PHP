<?php
$anoNascimento1 = 1987;
$mesNascimento1 = 1;
$diaNascimento1 = 17;
$anoNascimento2 = 2017;
$mesNascimento2 = 3;
$diaNascimento2 = 17;
$diasTotais1 = $diaNascimento1 + ($mesNascimento1*30) + ($anoNascimento1*365);
$diasTotais2 = $diaNascimento2 + ($mesNascimento2*30) + ($anoNascimento2*365);
echo "Data de nascimento: ".$diaNascimento1."/".$mesNascimento1."/".$anoNascimento1;
echo "</br>Data atual: ".$diaNascimento2."/".$mesNascimento2."/".$anoNascimento2;
echo "</br></br>Vc ja viveu por ".($diasTotais2 - $diasTotais1)." dias";


?>