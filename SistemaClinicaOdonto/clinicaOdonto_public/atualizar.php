<?php
	$acao = 'recuperar_um';
	require 'cadastro_controller.php';

	//echo '<pre>';
	//print_r ($registro);
	//echo '</pre>';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="cadastro_controller.php?acao=atualizar">
		<label>Nome:</label>
		<input type="text" name="nome" value="<?=$registro[0]->nome?>"><br><br>
		<label>CPF:</label>
		<input type="text" name="cpf" value="<?= $registro[0]->cpf ?>"> <br><br>
		<input type="hidden" name="id" value="<?= $registro[0]->id ?>">
		<button type="submit">Atualizar</button>
	</form>

</body>
</html>