<?php

	class Avaliacao {
		private $id;
		private $queixa;
		private $historico;

		public function __get($atributo){
			return $this->$atributo; 
		}

		public function __set($atributo,$valor){
			$this->$atributo = $valor;
		}
	}
?>