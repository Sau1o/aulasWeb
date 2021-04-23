<?php

	class Cadastro {
		private $id;
		private $nome;
		private $cpf;
		private $data_cadastro;

		public function __get($atributo){
			return $this->$atributo; 
		}

		public function __set($atributo,$valor){
			$this->$atributo = $valor;
		}
	}
?>