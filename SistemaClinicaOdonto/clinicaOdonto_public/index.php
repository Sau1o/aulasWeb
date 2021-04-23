<?php
	$acao = 'recuperar';
	require 'cadastro_controller.php';

	//echo '<pre>';
	//print_r ($cadastros);
	//echo '</pre>';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tela Inicial</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilos.css">

		<script>
			function editar(id){
				//alert('Botão editar clicado');
				//alert(id);
				location.href = 'atualizar.php?id='+id;
			}
		</script>
	</head>

	<body>
		
		<div class='container'>
			
			<div style="background-color:lightgray;text-align:center;">
				<h1>
					Clínica Odontológica - UNISAGRADO
				</h1>
				<h2>Sistema de Cadastro de Paciente</h2>
			</div>

			<div style="background-color:linen;text-align:center;height: 450px">

				<table style="width:100%">
					
					<thead>
						<tr>
							<th>Nome</th>
							<th>CPF</th>
						</tr>
					</thead>

					<tbody>
					<?php foreach($cadastros as $indice => $cadastro){?>

					<tr "id="cadastro_<?= $cadastro->id ?>">
						<td><?= $cadastro->nome ?></td>
						<td><?=$cadastro->cpf?></td>
						<td><button onclick="editar(<?= $cadastro->id ?>)">Atualizar Cadastro</button></td>
						<!--<td><button>Atualizar Cadastro</button></td>-->
						<td><button>Ficha de Avaliação</button></td>
						<td><button>Prontuário</button></td>
					</tr>

					<?php } ?>
					</tbody>					
				</table>
			</div>

			<div class='buttonContainer'>
				<button class='button'>
					<a href="cadastro.php">Cadastrar</a> 
				</button>
			</div>
		</div>
	</body>	
</html>