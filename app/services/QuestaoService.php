<?php 
namespace app\services;
class QuestaoService extends ServiceDefault{

	public function listar(){
		try{
			$stmt = $this->conexao->prepare('SELECT * FROM questao');
			$stmt->execute();
			return $stmt->fetchAll(); 
		} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}

	
}
?>