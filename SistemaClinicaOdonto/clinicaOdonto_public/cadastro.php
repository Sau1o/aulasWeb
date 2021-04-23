<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="cadastro_controller.php?acao=inserir">
		<label>Nome:</label>
		<input type="text" name="nome" placeholder="Digite seu nome"> <br><br>
		<label>CPF:</label>
		<input type="text" name="cpf" placeholder="Digite seu CPF sem pontos"> <br><br>
		<button type="submit">Cadastrar</button>
	</form>

</body>
</html>