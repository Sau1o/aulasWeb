<?php

require "../../clinicaOdonto/cadastro.model.php";
require "../../clinicaOdonto/cadastro.service.php";
require "../../clinicaOdonto/conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir'){

	$cadastro = new Cadastro();
	$cadastro->__set('nome',$_POST['nome']);
	$cadastro->__set('cpf',$_POST['cpf']);

	$conexao = new Conexao();

	$cadastroService = new CadastroService($conexao, $cadastro);

	$cadastroService->inserir();

	header('Location: index.php?inclusao=1');

} else if($acao == 'recuperar'){
	$cadastro = new Cadastro();
	$conexao = new Conexao();

	$cadastroService = new CadastroService($conexao, $cadastro);
	$cadastros = $cadastroService->recuperar();

} else if($acao == 'recuperar_um'){
	//print $_GET['id'];
	$cadastro = new Cadastro();
	$cadastro->__set('id',$_GET['id']);
	$conexao = new Conexao();

	$cadastroService = new CadastroService($conexao, $cadastro);
	$registro = $cadastroService->recuperar_um();

} else if($acao == 'atualizar'){
	echo'<pre>';
	print_r ($_POST);
	echo '</pre>';
	$cadastro = new Cadastro();
	$cadastro->__set('id',$_POST['id']);
	$cadastro->__set('nome',$_POST['nome']);
	$cadastro->__set('cpf',$_POST['cpf']);
	$conexao = new Conexao();

	$cadastroService = new CadastroService($conexao, $cadastro);
	if($cadastroService->atualizar()){
		header('Location: index.php');
	} else {echo 'erro';}
}
?>