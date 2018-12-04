<?php 
namespace app\services;

class LoginService extends ServiceDefault{
	public function login($dados){

		$login = $dados['usuario'];
		$senha = $dados['senha'];
		try{
			$stmt = $this->conexao->prepare("SELECT * FROM usuario WHERE email = '{$login}' AND senha = '{$senha}'");
			$stmt->execute();
			return $stmt->fetchAll(); 
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}
}
?>