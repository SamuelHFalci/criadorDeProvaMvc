<?php 
	namespace app\entities;

	class Cliente{
		private $id;
		private $nome;
		private $sobrenome;

		public function getNome()
		{
		    return $this->nome;
		}
		
		public function setNome($nome)
		{
		    return $this->nome = $nome;
		}
		public function getSobrenome()
		{
		    return $this->sobrenome;
		}
		
		public function setSobrenome($sobrenome)
		{
		    return $this->sobrenome = $sobrenome;
		}
	}
 ?>