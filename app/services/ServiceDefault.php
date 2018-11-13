<?php 
namespace app\services;
use PDO;
class ServiceDefault{
	protected $conexao;
	public function __construct(){
		try {
			$this->conexao = new PDO("mysql:host=localhost; dbname=criaprova; charset=utf8", "root", "");
			
		} catch (PDOException $erro) {
			echo "Erro na conexão:" . $erro->getMessage();
		}
	}

	
}
?>