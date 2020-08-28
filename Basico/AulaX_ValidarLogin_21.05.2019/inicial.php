
<html>
<?php
//$variavel = key($_GET); pode ser usada quando vc passar somente um valor pelo get do autenticar exemplo ?."result bla bla" ao inves
//de ?indice=."result bla bla"
$variavel = $_GET['indice'];




if($variavel==3){?>

<div>
	<table>
		<tr>
			<td>Home Adm</td>
			<td>Atualizar usuarios</td>
			<td>Cadastrar produtos</td>
		</tr>
	</table>
</div>
<?php }else if($variavel==2){?>

<div>
	<table>
		<tr>
			<td>Home Seller</td>
			<td>Comprar</td>
			<td>Enviar email</td>
		</tr>
	</table>
</div>
<?php }?>


</html>