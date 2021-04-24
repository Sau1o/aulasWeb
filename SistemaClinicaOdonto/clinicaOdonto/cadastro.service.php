<?php

class CadastroService {

	private $conexao;
	private $cadastro;

	public function __construct(Conexao $conexao, Cadastro $cadastro){
		$this->conexao = $conexao->conectar();
		$this->cadastro = $cadastro;
	}


	public function inserir(){ //create
		$query = 'insert into tb_cadastro(nome,cpf)values(:nome,:cpf)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome',$this->cadastro->__get('nome'));
		$stmt->bindValue(':cpf',$this->cadastro->__get('cpf'));
		$stmt->execute();

		$query = 'insert into tb_avaliacao(queixa,historico)values(?,?)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1,"");
		$stmt->bindValue(2,"");
		$stmt->execute();
	}

	public function recuperar (){ //read
		$query = 'select id, nome, cpf from tb_cadastro';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function recuperar_um (){ //read
		$query = 'select id, nome, cpf from tb_cadastro where id = ?';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->cadastro->__get('id'));
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}	

	public function atualizar (){ //update
		$query = "update tb_cadastro set nome = ?,cpf = ? where id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->cadastro->__get('nome'));
		$stmt->bindValue(2, $this->cadastro->__get('cpf'));
		$stmt->bindValue(3, $this->cadastro->__get('id'));
		return $stmt->execute();		
	}

	public function remover (){ //delete
		
	}
}

?>