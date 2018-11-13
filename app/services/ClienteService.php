<?php 
namespace app\services;
class ClienteService extends ServiceDefault{
	public function cadastrar($cliente){
		try{
			$stmt = $this->conexao->prepare('INSERT INTO cliente (nome, sobrenome) VALUES(:nome, :sobrenome)');
			$stmt->execute(array(
				':nome' => 'Samuel',
				':sobrenome' => 'Falci'
			));

			echo $stmt->rowCount(); 
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}
}
?>